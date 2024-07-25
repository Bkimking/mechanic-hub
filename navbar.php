<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
    <div class="container px-5">
        <a class="navbar-brand fw-bold" href="#">Gearhead Garage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle bi bi-exclamation-triangle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Emergencies
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="php/pages/car_crush.php"><i class="material-icons">car_crash</i> Car
                                    Crash</a></li>
                            <li><a class="dropdown-item" href="php/pages/car_trouble.php"><i class="material-icons">minor_crash</i> Car
                                    Trouble</a></li>
                            <li><a class="dropdown-item" href="php/pages/near_fuel_station.php"><i class="material-icons">local_gas_station</i>
                                    Near Fuel station</a></li>
                            <li><a class="dropdown-item" href="php/pages/near_garage.php"><i class="material-icons">garage</i> Near
                                    Garage</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Features</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Download</a></li>
                <!--
                    <li class="nav-item"><a class="nav-link me-lg-3" target="_blank" href="login.html">Sign in</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" target="_blank" href="register.html">Sign up</a>
                        -->
                </li>
            </ul>
            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                <span class="d-flex align-items-center">
                    <i class="bi-chat-text-fill me-2"></i>
                    <span class="small">Send Feedback</span>
                </span>
            </button>
        </div>
    </div>
</nav>