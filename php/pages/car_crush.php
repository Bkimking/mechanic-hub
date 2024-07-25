<!DOCTYPE html>
<html lang="en">

<head>
    <title>Car Crush - Gearhead Garage</title>
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
            <a class="dropdown-item" href="php/pages/car_crush.php" target="_blank" title="Click here if having car troubles">
                <i class="material-icons">car_crash</i> Car Crush
            </a>
        </h3>

        <!-- Description of the service -->
        <p class="text-muted mb-4">
        <span class="badge bg-danger">IS THIS AN ACCIDENT!</span> Below are the most common accidents.
        </p>

        <!-- Features section -->
<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-sm">
            <img src="../../assets/img/truckcrash.jpg" class="card-img-top" alt="Truck Crash">
            <div class="card-body">
                <h5 class="card-title">Truck Crash</h5>
                <p class="card-text">Truck crashes are often caused by driver fatigue, improper loading of cargo, and mechanical failures.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-sm">
            <img src="../../assets/img/carcrash.jpg" class="card-img-top" alt="Car Crash">
            <div class="card-body">
                <h5 class="card-title">Car Crash</h5>
                <p class="card-text">Car crashes are frequently caused by distracted driving, speeding, and driving under the influence of alcohol or drugs.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-sm">
            <img src="../../assets/img/bikecrash.jpg" class="card-img-top" alt="MotorBike Crash">
            <div class="card-body">
                <h5 class="card-title">MotorBike Crash</h5>
                <p class="card-text">Motorbike crashes often result from lack of visibility, road hazards, and rider inexperience.</p>
            </div>
        </div>
    </div>
</div>


        <!-- Call to action or additional information -->
        <div class="mt-5">
            <p>For immediate assistance with your Car Crash, click Here:</p>
            <a class="btn btn-primary" href="tel:999" target="_blank" role="button">Get Help Now</a>
        </div>

        <!-- Footer-->
        <?php include('footer.php'); ?>

        <!-- scripts -->
        <?php include('scripts.php'); ?>
</body>

</html>