## Firebase Authentication Emulator

These instructions are intended for people who are working on implementation of
the Auth Emulator itself. If you're more interested on how to use the emulators,
see [our documentation](https://firebase.google.com/docs/emulator-suite) instead.

For Googlers, please also read [the Google-internal design doc](http://go/firebase-auth-emulator-dd)
for the background and overview of the Auth Emulator. The instructions below
focus more on the implementation notes and code structure.

### Endpoints

Most of the endpoints in the Auth Emulator have the same request and response
schemas like production, but served under the Auth Emulator local address, with
a prefixed URL. For example, if the Auth Emulator is running on `localhost:5002`,
the URL `http://localhost:5002/identitytoolkit.googleapis.com/v1/accounts:signUp`
will serve the emulated version of the production endpoint
`https://identitytoolkit.googleapis.com/v1/accounts:signUp`. The path prefix is
necessary to differentiate among the multiple production services it emulates.
For more details, see the design doc linked above.

### Routing and Request Validation

To save us the trouble of wiring the routes and validating the request schemas,
in the Auth Emulator, we reuse the paths and JSON schemas in
[Google API Discovery Documents](https://cloud.google.com/identity-platform/docs/reference/rest/v1#discovery-document)
defined for the production services.

We do so by first converting the discovery documents into the
[OpenAPI 3.0 format](https://swagger.io/specification/)
to leverage the open source toolings available. The conversion is done in
[`gen-auth-api-spec.ts`](../../../scripts/gen-auth-api-spec.ts) and outputs one
single merged OpenAPI 3.0 specification file ([`./apiSpec.js`](./apiSpec.js)).
For a brief overview of OpenAPI 3.0 format and terminologies, see
[the specification](https://swagger.io/specification/).

`apiSpec.js` is imported and compiled with the Auth Emulator, and read by the
library [`exegesis-express`](https://www.npmjs.com/package/exegesis-express) at
runtime, to set up the Express routes with builtin request validation (including
JSON schema validation of request bodies). The setup of the library can be found
in [`server.ts`](./server.ts). After the automatic routing, exegesis calls the
corresponding operation method defined in [`operations.ts`](./operations.ts).
In the operations file, each operations is defined by its ID instead of paths.
The IDs can be found in the OpenAPI spec file. (See below for how to browse.)
An operation `identitytoolkit.accounts.signUp` will be declared at the top of
the `authOperations` variable as such:

```js
export const authOperations: AuthOps = {
  identitytoolkit: {
    accounts: {
      signUp,
      // ...
    },
    // ...
  },
  // ...
};
```

The implementation of the `signUp` operation should be declared as a function
below under the `/* Handlers */` section like so:

```typescript
function signUp(
  state: ProjectState,
  reqBody: Schemas["GoogleCloudIdentitytoolkitV1SignUpRequest"],
  ctx: ExegesisContext,
): Schemas["GoogleCloudIdentitytoolkitV1SignUpResponse"] {
  return {
    /* response JSON body */
  };
}
```

The typing of `reqBody` corresponds to the request body JSON schema and the
return type corresponds to response body. These interfaces are also derived from
the API discovery documents via the script into `./schemas.ts` and they provide
type-checking and completion for our development purposes only. Please take a
moment to find the right interface when you add a new operation. The return type
can also be changed to `Promise` of such for asynchronous code.

Although schema and type validations for requests have been covered, the
handler will still need to perform _semantic_ validations such as validating
email formats and whether the referenced users exist. Also, remember that most
fields are declared optional and nullable / may be empty in the API contract,
and additional checking may be required for these cases depending on the API.

If the operation handler needs to return a non-200 response, just throw one of
the error class instances defined in [`./errors.ts`](./errors.ts). These will be
automatically converted to a well-formated standard error response. If a
non-standard error is thrown, the server will respond with a generic 500 message
but write details to stderr, which is suitable for internal unexposed errors.

### Autogenerated files

As explained above, `apiSpec.js` is the merged API spec and `schema.ts` is the
TypeScript interfaces for request bodies for typechecking purposes. Both are
generated by `scripts/gen-auth-api-spec.ts`. Given their length, it is probably
not the best use of your time to view / review either in its entirety.

If you're asked to review a PR that has a diff on `apiSpec.js`, please do review
the changed lines if the number of lines is reasonable. The diff MAY reflect
changes in production APIs between re-runs of the `gen-auth-api-spec.ts`, but
those are very rare. More often, such changes are caused by a change in the
generator script itself, which should be reviewed together. If the diff is too
large, feel free to review script changes only but with extra attention.

`schema.ts` and change to it are usually not worth reviewing. It is fine to
rely on IDE / language helpers for autocompletion / peeking definition if you
want to know more about the typing of request / response bodies.

To run `scripts/gen-auth-api-spec.ts` to re-generate `apiSpec.js` and
`schema.ts` perform the following command from the root directory of
`firebase-tools`:

```
npm run generate:auth-api
```

For more on what this command does and other useful commands, please refer to
[`package.json`](https://github.com/firebase/firebase-tools/blob/master/package.json)
and [`CONTRIBUTING.md`](https://github.com/firebase/firebase-tools/blob/master/CONTRIBUTING.md).

### Working with OpenAPI documents

It may be desirable to see the OpenAPI 3.0 document used in the Auth Emulator
for debugging and implementation. Once the Auth Emulator is started, you can
find the API spec served at: `http://localhost:5002/emulator/openapi.json` (
replace the host and port as needed).

You can also interactively browse the endpoints and even try them out using the
[Swagger Editor](https://editor.swagger.io/?url=http://localhost:5002/emulator/openapi.json).
Don't forget to input a fake API key by clicking the padlock icons, since most
API endpoints require that to be present.

For a quick sneak peak, you can also look into the the generated `apiSpec.js`
and navigate to the right path (e.g. by finding keywords in file). This method
requires no tooling and can even be done through the GitHub web file browser.