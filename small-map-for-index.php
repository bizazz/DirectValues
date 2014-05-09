<!DOCTYPE html>
<html>
  <head>
    <title>DirectValues Merchant Map</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/map.css" />
    <style type="text/css">
    </style>
  </head>

  <body style="margin:0;padding:0">
    
    <div id="store-locator-container" style="margin:0px">
      <div id="map-container" style="width:215px;height:288px;margin:0;padding:0">
        <div id="map" style="width:215px;height:288px;margin:0;padding:0"></div>
         </div>
    </div>

    <div id="distances"></div>
        

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://www.directvalues.com/js/handlebars-1.0.0.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&region=US"></script>
    <script src="http://www.directvalues.com/js/jquery.storelocator-index.js"></script>
      <script>
        $(function() {
          $('#map-container').storeLocator({ 'maxDistance': true, 'slideMap' : false, 'defaultLoc': true, 'defaultLat': '44.9207462', 'defaultLng' : '-93.3935366' });
        });
      </script>


         
  </body>
</html>
