<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    <title>Points on a map</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
    <style>
      body {
        margin: 0;
        padding: 0;
      }

      #map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <div id='map'></div>
    <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiaWJhbnMiLCJhIjoiY2ttNHY2ZG9lMDhiMDJudHB1a2Zkd3JjbiJ9.b2HPf_5NpdgObezRRyjsPg'; // replace this with your access token
    var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v11', // replace this with your style URL
    //   center: [-87.661557, 41.893748],
      center: [-96, 37.8],
      zoom: 7.5
    });
    // code from the next step will go here
    var geojson = {
        //
        type: 'FeatureCollection',
        features: [{
            type: 'Feature',
            geometry: {
            type: 'Point',
            coordinates: [-77.032, 38.913]
            },
            properties: {
            title: 'Mapbox',
            description: 'Washington, D.C.'
            }
        },
        {
            type: 'Feature',
            geometry: {
            type: 'Point',
            coordinates: [-122.414, 37.776]
            },
            properties: {
            title: 'Mapbox',
            description: 'San Francisco, California'
            }
        }]
    };
    </script>
  </body>
</html>