    <head>

            <meta charset="utf-8">
                <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin=""/>


                <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                crossorigin=""></script>
    </head>
@extends('layouts/siteweb')

@section('content')
    <title>Contact Us</title>


    
    
                    <section>
                            <h1 class="my-4" style="text-align:center; font-family:arial">Envoyez-nous un message</h1>


                        <form method="post">
                            
                            <div class="container">
                            
                            
                            <div class="form-floating mb-3">

                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Votre Adresse Email</label>
                            </div>

                            <div class="form-floating">
                                    <textarea class="form-control" input type="text" placeholder="Comment pouvons-nous vous aider ?" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Comment pouvons-nous vous aider ?</label>
                            </div>

                                <br><br>
                                    <button type="submit" value="submit"  id="send" class="btn btn-warning">Soumettre</button>
                                    <!-- <script>
                                            document.querySelector(#send).onkeyup = function(){

                                                    var datas = document.querySelectorAll(.form-control);
                                             swal(" votre requête est prise en considération, nous vous notifierons pour!", "success");
                                            }
                                    </script> -->
                            


                            <br><br><br>
                            
                           </div>

                       </form>

                    </section>

                    <br><br><br>

                    <section>
                    
                            <div id="mapid" style="width:1349px; height: 300px;"></div>

                            <script>
                            
                                window.onload = function() {
                                    var mymap = L.map('mapid').setView([5.367400,10.417181], 10);

                                    var tilestreetMap = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                                                            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                                            maxZoom: 18,
                                                            id: 'mapbox/streets-v11',
                                                            tileSize: 512,
                                                            zoomOffset: -1,
                                                            accessToken: 'pk.eyJ1Ijoid2lsZnJlYWQiLCJhIjoiY2txZDluZmM1MDVmdzJ4cGdoNjZ4aDdjMSJ9.OwtrGcnUKSPrWSH4NL9gNQ'
                                                        });
                                        tilestreetMap.addTo(mymap);
                                        var marker = L.marker([5.367400,10.417181]).addTo(mymap);
                                        marker.bindPopup("<b>Salutation</b><br>Nous sommes à bandjoun.");
                                     }
                            </script>

                    </section>
                    <br>
@endsection