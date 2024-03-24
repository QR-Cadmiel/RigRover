<?php

include_once("conexao.php");
include 'validacao.php';

?>

<div id="map"></div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="anonymous" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin="anonymous"></script>
<style>
  #map {
    height: 98vh;
    width: 100hw
  }
</style>

<script>
  var map = L.map('map').setView([-5.7999146, -35.2922842], 11);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    minZoom: 1,
    maxZoom: 19
  }).addTo(map);

  const url = 'coordenadas.php';

  fetch(url)
    .then(response => response.json())
    .then(result => {
      const dados = JSON.stringify(result);

      result.forEach(function(retorno) {
        var location = new L.LatLng(retorno.latitude, retorno.longitude);
        console.log("RETORNO ", result);
        var markerGroup = L.featureGroup([]).addTo(map);
        var latLng = L.latLng([retorno.latitude, retorno.longitude]);
        L.marker(latLng).bindPopup('Nome: ' + retorno.nome +
          '<br>Endreço: ' + retorno.endereco +
          '<br>Data: ' + retorno.data +
          '<br>Ativo: ' + retorno.ativo).addTo(markerGroup).addTo(map);
      });

    })
    .catch(function(err) {
      console.error(err);
    })
</script>