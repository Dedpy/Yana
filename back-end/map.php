
<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 400px;
        width: 80%;
        left: 200px;

       }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <form method="POST" action="ajouter-position.php">
    <input type="hidden" name="lat" id="lat">
    <input type="hidden" name="lng" id="lng">
    <p style="padding-left: 200px;"> <button class="btn btn-primary waves-effect waves-light" type="submit" id="valider" name="Valider" disabled="true">Enregistrer</button>
    <select name='id' class="btn waves-effect waves-light btn-primary dropdown-toggle" >
      <?php 
      require_once '../core/livraisonC.php';
      $livre=new LivraisonManage();
      $liste=$livre->afficher_livraisons();
      foreach ($liste as $row) {?>

    <option value='<?php echo $row['id_commande'] ?>'><?php echo $row['id_commande'] ?></option>
    <?php } ?>
    </select>
    </p>
    </form>
    <script>
      function initMap() {
       var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: new google.maps.LatLng(36.862, 10.165),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});

var myMarker = new google.maps.Marker({
    position: new google.maps.LatLng(36.862, 10.165),
    draggable: true
});

google.maps.event.addListener(myMarker, 'dragend', function (evt) {
    document.getElementById('lat').value=evt.latLng.lat().toFixed(3);
    document.getElementById('lng').value=evt.latLng.lng().toFixed(3);
    document.getElementById('valider').disabled=false;
    
});

google.maps.event.addListener(myMarker, 'dragstart', function (evt) {
    document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
});

map.setCenter(myMarker.position);
myMarker.setMap(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOQc0JR-lIo77HhJ-xaOGUsq7kqEe_I_M&callback=initMap">
    </script>
  </body>
</html>