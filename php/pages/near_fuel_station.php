<!DOCTYPE html>
<html lang="en">

<head>
    <title>Near Fuel Station - Gearhead Garage</title>
    <?php include('head.php'); ?>
    <style>
        .icon-feature {
            font-size: 48px;
            color: #17a2b8;
        }

        .text-gradient {
            background: -webkit-linear-gradient(#007bff, #6c757d);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .results {
            margin-top: 20px;
        }

        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container text-center mt-5">
        <!-- Phone icon with gradient text -->
        <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>

        <!-- Heading with link to car troubles section -->
        <h3 class="font-alt">
            <a class="dropdown-item" href="php/pages/car_crush.php" target="_blank" title="Click if your car has crushed">
                <i class="material-icons">local_gas_station</i> Near Fuel Station
            </a>
        </h3>

        <!-- Description of the service -->
        <p class="text-muted mb-4">
            <span class="badge bg-warning">RUNNING LOW IN FUEL!</span> Gearhead Garage connects you swiftly to your nearby fuel station.
        </p>

        <!-- Features section -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="../../assets/img/station1.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Rubis Kibiko Service Station</h5>
                        <p class="card-text">Kahara Road, Ngong</p>
                        <p class="card-text">Contact <a href="tel:0706033264">0706033264</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="../../assets/img/station2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Ilade Oil Ngong Petrol Station</h5>
                        <p class="card-text">Opposite Deep Waters Bar, Ngong Rd, Ngong.</p>
                        <p class="card-text">Contact <a href="tel:0720638569">0720638569</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="../../assets/img/station3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Petro Kenya-Ngong Rd</h5>
                        <p class="card-text">Ngong Rd, North <span style="color: red;">This place may be closed</span></p>
                        <p class="card-text">Contact <a href="tel:0204440124">0204440124</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="../../assets/img/station4.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nurken Energy Filling Station</h5>
                        <p class="card-text">JMQ3+7QM, Kahara Rd, Ngong</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="../../assets/img/station5.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Rubis Ngong Town Service Station</h5>
                        <p class="card-text">Ngong Rd, Ngong</p>
                        <p class="card-text">Contact <a href="tel:0706033264">0706033264</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="../../assets/img/station6.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">TotalEnergies Ngong service station</h5>
                        <p class="card-text">JMR4+FF Ngong, Ngong Rd, Ngong</p>
                        <p class="card-text">Contact <a href="tel:0724924926">0724924926</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map and search section -->
        <div class="mt-5">
            <h5 class="mb-3">Find Nearby Fuel Station</h5>
            <div id="map"></div>
        </div>

        <!-- Location status and results -->
        <div id="location-status" class="mt-3"></div>
        <div class="results" id="results"></div>
    </div>

    <!-- Footer-->
    <?php include('footer.php'); ?>

    <!-- scripts -->
    <?php include('scripts.php'); ?>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var userLocation = [-1.3498650228944524, 36.64208843737708];
            var map = L.map('map').setView(userLocation, 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Draw a circle around the user's location
            L.circle(userLocation, {
                color: 'blue',
                fillColor: '#30f',
                fillOpacity: 0.2,
                radius: 2500 // Adjust radius as needed
            }).addTo(map);

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var lat = position.coords.latitude;
                    var lon = position.coords.longitude;

                    map.setView(userLocation, 13);

                    L.marker(userLocation).addTo(map)
                        .bindPopup('You are here.')
                        .openPopup();

                    // Updated nearby mechanic shops with real data
                    var mechanicShops = [{
                            "name": "Rubis Kibiko Service Station",
                            "lat": -1.3470102243087987,
                            "lon": 36.649090779396985
                        },
                        {
                            "name": "Ilade Oil Ngong Petrol Station",
                            "lat": -1.3606495321818473,
                            "lon": 36.65605958162311
                        },
                        {
                            "name": "Petro Kenya-Ngong Rd",
                            "lat": -1.3626699448379884,
                            "lon": 36.65639512406518
                        },
                        {
                            "name": "Nurken Energy Filling Station",
                            "lat": -1.361617618349382,
                            "lon": 36.65443062571723
                        },
                        {
                            "name": "Rubis Ngong Town Service Station",
                            "lat": -1.3589649717437065,
                            "lon": 36.65656043534955
                        },
                        {
                            "name": "TotalEnergies Ngong service station",
                            "lat": -1.3586753746357871,
                            "lon": 36.65611518864727
                        }
                    ];

                    mechanicShops.forEach(function(shop) {
                        L.marker([shop.lat, shop.lon]).addTo(map)
                            .bindPopup(shop.name);
                    });

                }, function() {
                    document.getElementById('location-status').innerHTML = "Geolocation is not supported by this browser.";
                });
            } else {
                document.getElementById('location-status').innerHTML = "Geolocation is not supported by this browser.";
            }
        });
    </script>
</body>

</html>