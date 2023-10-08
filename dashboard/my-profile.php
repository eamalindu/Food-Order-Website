<?php session_start(); ?>
<?php
if (isset($_SESSION["email"])) {
    ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>My Profile | Koththu Palace</title>
        <!--Boostrap CSS-->
        <link href="../../../__Resources__/bootstrap-5.2.3/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet">
        <!--Fontawesome CSS File-->
        <link href="../css/style.css" rel="stylesheet">
        <!--Bootstrap JS-->
        <script src="../../../__Resources__/bootstrap-5.2.3/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
        <!-- jquery CDN-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!--Fontawesome CSS File-->
        <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="../images/sqaure-logo.png" type="x-icon">
        <!--AOS CSS File-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!--AOS JS File-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <!--Loader-->
        <link rel="stylesheet" href="../css/loader.css">
        <script src="../js/loader.js"></script>

    </head>
    <body id="section-5">
    <div class="preloader">
        <div class="loading">
            <img src="../images/loader.gif" alt="loading"/>
        </div>
    </div>

    <nav class="navbar bg-body-tertiary bg-black fixed-top" id="navbar">
        <div class="container-fluid">
            <div class="d-flex gap-3">
                <button class="navbar-toggler bg-black opacity-100" style="border-color: #333" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="filter:invert(100%)"></span>
                </button>
                <a class="navbar-brand text-white" href="my-profile.php"><img src="../images/sqaure-logo.png" width="30"> My Profile</a>
            </div>
            <div class="d-flex gap-3" id="btn-list">
                <a href="index.php" class="text-white text-decoration-none">
                    <button class="btn btn-dark w-100 text-white"><i class="fal fa-home"></i> Dashboard</button>
                </a>
                <a class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <!--Trigger Modal when order now is clicked-->
                    <button class="btn btn-danger w-100 text-white"><i class="fal fa-utensils-alt"></i> Order Now</button>
                </a>
            </div>
            <div class="offcanvas offcanvas-start bg-black text-white" tabindex="-1" id="offcanvasNavbar"
                 aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Welcome Back!
                        👋<br/><?php echo $_SESSION["email"] ?></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <p>Quick Access</p>
                    <div class="d-flex p-0 m-0 justify-content-between">
                        <a href="index.php" target="_blank" class="text-white text-decoration-none">
                            <button class="btn btn-dark text-white"><i class="fal fa-home"></i><br> Home</button>
                        </a>
                        <a class="text-white text-decoration-none">
                            <button class="btn btn-dark text-white"><i class="fal fa-utensils-alt"></i><br> Order Now</button>
                        </a>
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fal fa-user-circle"></i><br>My Account
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                                <li><a class="dropdown-item" href="my-profile.php"><i class="fal fa-user-edit"></i> My Account</a></li>
                                <li><a class="dropdown-item" href="logout.php"><i class="fal fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <br/>
                    <p>Kottu Tracker &nbsp;<span class="small text-muted text-end">(Step 0 of 5)</span></p>
                    <div class="card card-body m-0 bg-dark">
                        <label for="customRange1" class="form-label">Order Now</label>
                        <div class="custom-range-placeholder w-100 bg-black rounded-3" style="height: 15px">
                            <div class="h-100 btn-orangered rounded-3" style="width: 0;" id="custom-range"></div>
                        </div>
                    </div>
                    <br/>
                    <p>How?</p>
                    <div class="bg-black input-group w-100 p-1">
                        <div class="btn-group w-100" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check p-2" name="radioHow" id="radioPickup" autocomplete="off">
                            <label class="btn btn-outline-dark" for="radioPickup"><i class="fas fa-person-carry"></i><br>Pickup</label>
                            <input type="radio" class="btn-check" name="radioHow" id="radioDelivery" autocomplete="off" checked>
                            <label class="btn btn-outline-dark" for="radioDelivery"><i class="fas fa-motorcycle"></i><br>Delivery</label>
                            <input type="radio" class="btn-check" name="radioHow" id="radioDineIn" autocomplete="off">
                            <label class="btn btn-outline-dark" for="radioDineIn"><i class="fas fa-utensils"></i><br>Dine In</label>
                        </div>
                    </div>
                    <br/>
                    <p>When?</p>
                    <div class="bg-black input-group w-100 p-1">
                        <div class="btn-group w-100" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="radioWhen" id="radioNow" autocomplete="off" checked>
                            <label class="btn btn-outline-dark" for="radioNow">Now</label>
                            <input type="radio" class="btn-check" name="radioWhen" id="radioLater" autocomplete="off">
                            <label class="btn btn-outline-dark" for="radioLater">Later</label>
                        </div>
                    </div>
                    <!-- Show this div when later radio button is checked-->
                    <div class="card card-body bg-dark mt-2 hidden" id="divLater">
                        <label>Select Preferred Time</label>
                        <input type="time" class="form-control bg-dark text-white" style="color-scheme: dark;box-shadow: none">
                    </div>
                    <br/>
                    <p id="paraWhere">Where?</p>
                    <div class="bg-black input-group w-100" id="divWhere">
                        <div class="input-group mb-2">
                            <span class="input-group-text bg-black text-white border-0" id=""><i class="fas fa-location-arrow"></i></span>
                            <input type="text" class="form-control bg-dark border-0 text-white" placeholder="Your Location" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text bg-black text-white border-0" id=""><i class="fas fa-store fa-sm"></i></span>
                            <select class="form-select bg-dark border-0 text-muted rounded-0" id="inputGroupSelect01">
                                <option selected disabled class="text-muted">Select Preferred Outlet</option>
                                <option value="Nittambuwa" class="text-white">Nittambuwa Outlet</option>
                                <option value="Gampaha" class="text-white">Gampaha Outlet</option>
                            </select>
                        </div>
                    </div>
                    <br/>
                    <div class="text-center">
                        <img src="../images/sqaure-logo.png" class="" width="50%">
                        <p class="text-center text-muted">Kottu Palace © 2023 | All Rights Reserved</p>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <div class="container-fluid mt-5 p-3">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="card border-0">
                    <div class="card-body bg-black rounded-3">
                        <div class="card border-0">
                            <div class="card-body bg-black">
                                <center><img src="../images/avatar.png" width="25%" alt="avatar"/></center>
                                <h4 class="fw-bold text-white">Bio</h4>
                                <form action="" method="post">
                                    <div class="text-white mb-3">
                                        <label for="textFullName" class="form-label">Full Name :</label>
                                        <input class="form-control bg-dark border-0 text-white" id="textFullName" name="textFullName" placeholder="Your Full Name"  required/>
                                    </div>
                                    <div class="text-white mb-3">
                                        <label for="textEmailUser" class="form-label">Email :</label>
                                        <input class="form-control bg-dark border-0 text-white" id="textEmailUser" name="textEmailUser" placeholder="example@domain.com" value="<?php echo $_SESSION['email']?>" required
                                               readonly/>
                                    </div>
                                    <div class="mb-3 d-flex justify-content-end gap-2">
                                        <button class="btn btn-success" id="btnUpdateProfile" name="btnUpdateProfile" type="submit">Update Profile</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card border-0">
                    <div class="card-body bg-black rounded-3">
                        <div class="card border-0">
                            <div class="card-body bg-black">
                                <center><img src="../images/password.png" width="118" alt="avatar"/></center>
                                <h4 class="fw-bold text-white">Change Password</h4>
                                <form action="" method="post">
                                    <div class="mb-3 text-white">
                                        <label class="form-label" for="textCurrentPassword">Current Password :</label>
                                        <input class="form-control bg-dark border-0 text-white" id="textCurrentPassword" name="textCurrentPassword" placeholder="*********" type="password" required/>
                                        <label class="form-label" for="textNewPassword">New Password :</label>
                                        <input class="form-control bg-dark border-0 text-white" id="textNewPassword" name="textNewPassword" placeholder="*********" type="password" required/>
                                        <label class="form-label" for="textConfirmPassword">Confirm Password :</label>
                                        <input class="form-control bg-dark border-0 text-white" id="textConfirmPassword" name="textConfirmPassword" placeholder="*********" type="password" required/>
                                    </div>
                                    <div class="mb-3 d-flex justify-content-end gap-2">
                                        <button class="btn btn-success" id="btnUpdatePassword" name="btnUpdatePassword" type="submit">Update Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/alert-function.js"></script>
    <script src="../js/my-profile.js"></script>
    </body>
    </html>
<?php } else {
    $_SESSION['login-failed'] = '<script>showAlert("Please Login To Your Account !","bg-warning")</script>';
    header("location:../index.php");
}