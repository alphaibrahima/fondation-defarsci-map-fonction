{{--  --}}
@extends('Layouts.master')

@section('title', 'LiveMap')

@section('style')
<style type="text/css">
    body {
      overflow-x: hidden; 
      height:100%;
    }
  
    #map {
      height:700px;
      width: 100%;  
    }
</style>
@endsection


@section('content')
{{-- <div class="row"> --}}

<div class="row">
  <div class="col-md-8" id="map">

  </div>
  <div class="col-md-4">
    <h2 class="text-center text-uppercase" id="region"> Region </h2>
    <table class="table table-striped">
        <tbody>
          <tr>
            <th scope="row">Declarant</th>
            <td id="nom" style="flex-wrap: wrap;">Nom</td>
            <td id="prenom" style="flex-wrap: wrap;">Prenom</td>
            <td id="email" style="flex-wrap: wrap;">@Email</td>
          </tr>
          <tr>
            <th scope="row">Lien</th>
            <td id="lien">Lien</td>
            <th>Lieux</th>
            <td id="lieux">Lieux</td>
          </tr>
          <tr>
            <th scope="row">Profession</th>
            <td id="profession">Profession</td>
            <th>Tel</th>
            <td id="tel">Telephone</td>
          </tr>
        </tbody>
    </table>

    <p id="desc">
      Description du projet....
    </p>
    <nav>
        <h3 class="text-center text-danger">Problemes recensés</h3>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
            Details Du Probleme
          </a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
            Education
          </a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
            Autres
          </a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <p class="ml-1 mt-2" id="tab-1">
            Description....  
          </p>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <p class="ml-1 mt-2" id="tab-2">
                
            </p>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <p id="tab-3">
                
            </p>
        </div>
      </div>
  </div>

</div>


@endsection

@section('script')
 
  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
  <script>
    $.ajax({
      type: "GET",
      url: "/api/projets",
      success : function(data){
        console.log(data);
        console.log(data[0].id);
        console.log(data[0].probleme.nom);                     
        // var locations = [];
        var locations = data.map(i => [i.created_at, i.description, i.id, i.image, i.name, i.probleme_id, i.updated_at, i.probleme.created_at,
                                       i.probleme.details, i.probleme.email, i.probleme.id, i.probleme.latitude, i.probleme.longitude, i.probleme.lien_avec_lieu,
                                       i.probleme.lieu, i.probleme.nbre_population, i.probleme.nom, i.probleme.prenom, i.probleme.profession, i.probleme.tel,
                                       i.probleme.updated_at, i.status
        ]);
        console.log("####################Location####################");
        console.log(locations);
        console.log(locations[0][3]);
        // // 
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: new google.maps.LatLng(51.530616, -0.123125),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;
        var markers = new Array();

        for (i = 0; i < locations.length; i++) {  
            if (locations[i][21] == "Non resolu") {
              icone = "http://maps.google.com/mapfiles/ms/icons/red-dot.png";
            } else if (locations[i][21] == "En etude") {
              icone = "http://maps.google.com/mapfiles/ms/icons/purple-dot.png";
            }else if (locations[i][21] == "En cours de traitement") {
              icone = "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png";
            }else {
              icone = "http://maps.google.com/mapfiles/ms/icons/green-dot.png";
            }
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][11], locations[i][12]),
            
            



            // http://maps.google.com/mapfiles/ms/icons/blue-dot.png
            // http://maps.google.com/mapfiles/ms/icons/red-dot.png
            // http://maps.google.com/mapfiles/ms/icons/purple-dot.png
            // http://maps.google.com/mapfiles/ms/icons/green-dot.png
            // http://maps.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png
            // icon: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png",
            icon : icone,
            title: locations[i][14],
            map: map
          });

          markers.push(marker);

          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              // Tableau
              // Titre
              document.getElementById("region").innerHTML = locations[i][14];
              // Filiation
              document.getElementById("nom").innerHTML = locations[i][16];
              document.getElementById("prenom").innerHTML = locations[i][17];
              document.getElementById("email").innerHTML = locations[i][9];
              // lien avec lieux
              document.getElementById("lien").innerHTML = locations[i][13];
              // lieux du probleme
              document.getElementById("lieux").innerHTML = locations[i][14];

              document.getElementById("profession").innerHTML = locations[i][18];
              document.getElementById("tel").innerHTML = locations[i][19];
              // Fin Tableau
              document.getElementById("desc").innerHTML = locations[i][1];

              document.getElementById("tab-1").innerHTML = locations[i][8];

              document.getElementById("tab-2").innerHTML = locations[i][1];

              document.getElementById("tab-3").innerHTML = locations[i][1];

              console.log(locations[i][3]);
              // infowindow.setContent(locations[i][14]);
              infowindow.setContent(
                `
                <div class="card" style="width: 100%; ">
                  <div class="card-header bg-danger">
                   <h3 class="text-center text-white text-uppercase"> ${locations[i][14]}</h3>
                  </div>
                  <img src="${locations[i][3]}" alt=""  >
                  <div class="card-body">
                    <p>${locations[i][8]}</p>
                    <h6>Solution <span class="badge badge-warning">${locations[i][21]}</span></h6>
                  </div>
                </div>
                `
              );
              infowindow.open(map, marker);
            }
          })(marker, i));
          }

          function AutoCenter() {
            //  Create a new viewpoint bound
            var bounds = new google.maps.LatLngBounds();
            //  Go through each...
            $.each(markers, function (index, marker) {  
                bounds.extend(marker.position);
            });
            //  Fit these bounds to the map
            map.fitBounds(bounds);
          }
          AutoCenter();
      }
  })
  </script>
  
@stop




