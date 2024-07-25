<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gearhead Garage - Sign Up</title>
    <?php include('head.php');?>
    <style>
        .logo {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 100px;
        }
    </style>
</head>

<body class="bg-gradient-primary">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-register-image">
                                <div class="logo">
                                    <img src="img/logo.png" alt="GearHead Garage Logo">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                    </div>
                                    <form class="user" id="registerForm">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputfName" placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputlName" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="privacyCheck">
                                                <label class="custom-control-label" for="privacyCheck">Agree to Privacy Policy</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="termsCheck">
                                                <label class="custom-control-label" for="termsCheck">Agree to Terms and Conditions</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Register Account
                                        </button>
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-blockbadge rounded-pill text-bg-danger">
                                            <i class="fab fa-google fa-fw material-icons">mail</i> Register with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-blockbadge rounded-pill text-bg-primary">
                                            <i class="fab fa-facebook-f fa-fw material-icons">facebook</i> Register with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.html">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <?php include('footer.php');?>
    
    <?php include('scripts.php');?>
</body>

</html>
