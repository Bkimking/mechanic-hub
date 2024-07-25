<!DOCTYPE html>
<html lang="en">

<head>
    <title>Car Trouble - Gearhead Garage</title>
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
                <i class="material-icons">minor_crash</i> Car Trouble
            </a>
        </h3>

        <!-- Description of the service -->
        <p class="text-muted mb-4">
            <span class="badge bg-primary">NEED URGENT REPAIR!</span> Gearhead Garage connects you swiftly with nearby mechanic shops and specialized auto repair experts.
        </p>

        <!-- Features section -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="../../assets/img/garage1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Ngong Automotive Motor Care</h5>
                        <p class="card-text">JMV4+2R6, Ngong Rd, Ngong</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="../../assets/img/garage2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Carfitz Autospares And Accessories</h5>
                        <p class="card-text">JMR4+7C , Ngong Rd, Ngong</p>
                        <p class="card-text">Contact <a href="tel:0711888050">0711888050</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="../../assets/img/garage3.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Mbumar Auto World Garage</h5>
                        <p class="card-text">JMV4+6MW, Opposite PCEA Church, Ngong Rd, Ngong</p>
                        <p class="card-text">Contact <a href="tel:0724000994">0724000994</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="../../assets/img/garage4" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Bajaj Auto Motosaico Enterprises</h5>
                        <p class="card-text">1st Building on the right towards Ngong Market Next to Masaba Hardware &
                            Electricals Ngong Market Ngong Kenya/Nairobi, Ngong</p>
                        <p class="card-text">Contact <a href="tel:0728258519">0728258519</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="../../assets/img/garage5.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">New Tec Auto Spares</h5>
                        <p class="card-text">JMR4+38 Ngong, Ngong Rd, Ngong</p>
                        <p class="card-text">Contact <a href="tel:0707685300">0707685300</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map and search section -->
        <div class="mt-5">
            <h5 class="mb-3">Find Nearby Mechanic Shops</h5>
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
            var map = L.map('map').setView([-1.3498650228944524, 36.64208843737708], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var lat = position.coords.latitude;
                    var lon = position.coords.longitude;
                    var userLocation = [-1.3498650228944524, 36.64208843737708];

                    map.setView(userLocation, 13);

                    L.marker(userLocation).addTo(map)
                        .bindPopup('You are here.')
                        .openPopup();

                    L.circle(userLocation, {
                        color: 'blue',
                        fillColor: '#0000FF',
                        fillOpacity: 0.1,
                        radius: 2500
                    }).addTo(map);

                    // Mechanic shops data
                    var mechanicShops = [{
                            "name": "Ngong Automotive Motor Care",
                            "lat": -1.357320127185349,
                            "lon": 36.65703045767241
                        },
                        {
                            "name": "Carfitz Autospares And Accessories",
                            "lat": -1.3591968905394394,
                            "lon": 36.656015105947084
                        },
                        {
                            "name": "Mbumar Auto World Garage",
                            "lat": -1.3566983238407204,
                            "lon": 36.6566452846552
                        },
                        {
                            "name": "Bajaj Auto Motosaico Enterprises",
                            "lat": -1.3594441343596388,
                            "lon": 36.656795488364644
                        },
                        {
                            "name": "New Tec Auto Spares",
                            "lat": -1.3596655338327228,
                            "lon": 36.655851291250634
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