<?php session_start(); ?>
<?php
if (isset($_SESSION["email"])) {
    ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Koththu Palace</title>
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
            <img src="../images/3dgifmaker73877.gif" alt="loading"/>
        </div>
    </div>

    <nav class="navbar bg-body-tertiary bg-black fixed-top" id="navbar">
        <div class="container-fluid">
            <div class="d-flex gap-3">
                <button class="navbar-toggler bg-black opacity-100" style="border-color: #333" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="filter:invert(100%)"></span>
                </button>
                <a class="navbar-brand text-white" href="index.php"><img src="../images/sqaure-logo.png" width="30"> Dashboard</a>
            </div>
            <div class="d-flex gap-3" id="btn-list">
                <a href="#section-3" class="text-white text-decoration-none">
                    <button class="btn btn-dark w-100 text-white"><i class="fal fa-tags"></i> Price List</button>
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
                        <a href="../index.php#section-3" target="_blank" class="text-white text-decoration-none">
                            <button class="btn btn-dark text-white"><i class="fal fa-tags"></i><br> Price List</button>
                        </a>
                        <a class="text-white text-decoration-none">
                            <button class="btn btn-dark text-white"><i class="fal fa-utensils-alt"></i><br> Order Now</button>
                        </a>
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fal fa-user-circle"></i><br>My Account
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="fal fa-user-edit"></i> My Account</a></li>
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
    </body>
    </html>
<?php } else {
    $_SESSION['login-failed'] = '<script>showAlert("Please Login To Your Account !","bg-warning")</script>';
    header("location:../index.php");
}