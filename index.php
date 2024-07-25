<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gearhead Garage</title>
    <?php include('head.php'); ?>
</head>

<body id="page-top">
    <!-- Navigation-->
    <?php include('header.php'); ?>
    <!-- Mashead header-->
    <?php include('navbar.php'); ?>
    <!-- Quote/testimonial aside-->
    <aside class="text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4">"A World solution to a common problem that we all face,
                        wrapped up in a single app!"</div>
                    <img src="assets/img/gearheadlogo.jpeg" alt="GearHead Garage Logo" style="height: 10rem" />
                </div>
            </div>
        </div>
    </aside>
    <!-- App features section-->
    <section id="features">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt"><a class="dropdown-item" href="php/pages/car_crush.php" target="_blank" title="click here if having car troubles">
                                            <i class="material-icons">car_crash</i> Car Crush</a></h3>
                                    <p class="text-muted mb-0">Whether it's minor damage or more extensive repairs
                                        needed.
                                        Count on Gearhead Garage for quick response and expert care during unexpected
                                        situations.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt"><a class="dropdown-item" href="php/pages/car_trouble.php" target="_blank" title="Click if your car has crushed">
                                            <i class="material-icons">minor_crash</i> Car Trouble</a></h3>
                                    <p class="text-muted mb-0">NEED URGENT REPAIRS! Gearhead Garage connects you swiftly
                                        with nearby mechanic shops and specialized auto repair experts.</p>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt"><a class="dropdown-item" href="php/pages/near_fuel_station.php" target="_blank" title="Click for nearby Fuel stations">
                                            <i class="material-icons">local_gas_station</i> Nearby Fuel Stations</a>
                                    </h3>
                                    <p class="text-muted mb-0">Whether you're on a road trip or driving around town,
                                        find
                                        fuel stations in your vicinity with just a few clicks.</p>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt"><a class="dropdown-item" href="php/pages/near_garage.php" target="_blank" title="Click for nearby garages">
                                            <i class="material-icons">garage</i> Nearby Garages</a></h3>
                                    <p class="text-muted mb-0">Whether you need routine maintenance, or specialized
                                        services,
                                        find the right garage quickly and conveniently.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section Gearhead imgs to the left-->
                    <img src="assets/img/carbreakdown1.jpg" alt="img" style="width:100%">
                </div>
            </div>
        </div>
    </section>
    <!-- Basic features section-->
    <section class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-5">
                    <h2 class="display-4 lh-1 mb-4">Gearhead Garage.'Your One-Stop Auto Care Hub'</h2>
                    <p class="lead fw-normal text-muted mb-5 mb-lg-0">
                        <span class="badge bg-primary">GearHead Garage</span> Quick and reliable access to local
                        mechanic shops and specialists.
                    </p>
                </div>
                <div class="col-sm-8 col-md-6">
                    <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="assets/img/gearheadlogo.jpeg" alt="..." /></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="cta">
        <div class="cta-content">
            <div class="container px-5">
                <h2 class="text-white display-1 lh-1 mb-4">
                    Stop searching.
                    <br />
                    Start driving.
                </h2>
                <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="#get-started" target="_blank">Find a
                    Mechanic Now</a>
            </div>
        </div>
    </section>

    <!-- App badge section-->
    <?php include('appbadge.php'); ?>

    <!-- Footer-->
    <?php include('footer.php'); ?>

    <!-- Feedback Modal-->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary-to-secondary p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <form id="contactForm">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." required />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" id="nameError">Please enter your name.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" required />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" id="emailError">Please enter a valid email address.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" id="messageError">Please enter your message.</div>
                        </div>
                        <!-- Submit success message-->
                        <div class="alert alert-success d-none" id="submitSuccessMessage" role="alert">
                            Form submission successful! We will get back to you soon.
                        </div>
                        <!-- Submit error message-->
                        <div class="alert alert-danger d-none" id="submitErrorMessage" role="alert">
                            Error sending message. Please try again later.
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid">
                            <button class="btn btn-primary rounded-pill btn-lg" id="submitButton" type="button" onclick="validateForm()">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- scripts -->
    <?php include('scripts.php'); ?>

</body>

</html>