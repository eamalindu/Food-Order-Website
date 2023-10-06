<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koththu Palace</title>
    <!--Boostrap CSS-->
    <link href="../../__Resources__/bootstrap-5.2.3/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Fontawesome CSS File-->
    <link href="css/style.css" rel="stylesheet">
    <!--Bootstrap JS-->
    <script src="../../__Resources__/bootstrap-5.2.3/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--Fontawesome CSS File-->
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href="images/sqaure-logo.png" type="x-icon">
    <!--AOS CSS File-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--AOS JS File-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!--Loader-->
    <link rel="stylesheet" href="css/loader.css">
    <script src="js/loader.js"></script>


</head>
<body>

<div class="preloader">
    <div class="loading">
        <img src="images/3dgifmaker73877.gif" alt="loading"/>
    </div>
</div>

<nav class="navbar bg-body-tertiary bg-black fixed-top" id="navbar">
    <div class="container-fluid">
        <div class="d-flex gap-3">
            <button class="navbar-toggler bg-black opacity-100" style="border-color: #333" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter:invert(100%)"></span>
            </button>
            <a class="navbar-brand text-white" href="index.php"><img src="images/sqaure-logo.png" width="30"> Kottu Palace</a>
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
                    👋<br/></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p>Quick Access</p>
                <div class="d-flex p-0 m-0 justify-content-between">
                    <a href="#section-3" class="text-white text-decoration-none">
                        <button class="btn btn-dark text-white"><i class="fal fa-tags"></i><br> Price List</button>
                    </a>
                    <a class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <button class="btn btn-dark text-white"><i class="fal fa-utensils-alt"></i><br> Order Now</button>
                    </a>
                    <a class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <button class="btn btn-dark text-white"><i class="fal fa-user-circle"></i><br/> Your Account</button>
                    </a>
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
                        <select class="form-select bg-dark border-0 text-muted" id="inputGroupSelect01">
                            <option selected disabled class="text-muted">Select Preferred Outlet</option>
                            <option value="Nittambuwa" class="text-white">Nittambuwa Outlet</option>
                            <option value="Gampaha" class="text-white">Gampaha Outlet</option>
                        </select>
                    </div>
                </div>
                <br/>
                <div class="text-center">
                    <img src="images/sqaure-logo.png" class="" width="50%">
                    <p class="text-center text-muted">Kottu Palace © 2023 | All Rights Reserved</p>
                </div>
            </div>

        </div>
    </div>
</nav>

<div class="container-fluid min-vh-100 top-banner">
    <div class="row">
        <div class="col-lg-12 col-12 d-flex align-items-center justify-content-center">
            <div class="p-5 bg-orangered bg-opacity-75">
                <h3 class="text-white display-1 fw-bolder">KOTTU PALACE</h3>
                <p class="text-white float-end lh-1">We Make Kottu the <em>Right Way</em></p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center" id="section-2">
    <div class="row">
        <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
            <div class="p-5 text-center">
                <img src="images/yut87_edited.png"
                     width="75%" data-aos="zoom-out-right">
            </div>
        </div>
        <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
            <div class="p-5 text-center" data-aos="zoom-out-left">
                <h1 class="text-white">Did You Know ?</h1>
                <h4 class="text-white">Kottu is one of the national dishes of Sri Lanka, a favorite among locals and tourists throughout the country. It employs crucial elements of national Sri Lankan
                    cuisine</h4>
                <p class="text-white text-end lh-1">-<em>Tasteatlas</em></p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" id="section-3">
    <br>
    <h1 class="text-white text-center w-custom mx-auto text-uppercase bg-danger p-1" data-aos="flip-up">Price List</h1>
    <div class="container w-custom" data-aos="fade-up">
        <table class="custom-table mt-3 table mb-0">
            <tbody>
            <tr>
                <td colspan="3" class="bg-black text-start">KOTHTHU ROTTI</td>
            </tr>
            <tr>
                <td>Vegetable Kottu Roti</td>
                <td>Rs 890/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Egg Kottu Roti</td>
                <td>Rs 950/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Chicken Kottu Roti</td>
                <td>Rs 990/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Fish Kottu Roti</td>
                <td>Rs 1050/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Seafood Kottu Roti</td>
                <td>Rs 1250/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Mix Kottu Roti</td>
                <td>Rs 1390/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Mutton Kottu Roti</td>
                <td>Rs 1590/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td colspan="3" class="bg-black text-start">IDIAPPA KOTHTHU ROTTI</td>
            </tr>
            <tr>
                <td>Vegetable Idiappa Kottu Roti</td>
                <td>Rs 890/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Egg Idiappa Kottu Roti</td>
                <td>Rs 950/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Chicken Idiappa Kottu Roti</td>
                <td>Rs 990/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Fish Idiappa Kottu Roti</td>
                <td>Rs 1050/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Seafood Idiappa Kottu Roti</td>
                <td>Rs 1250/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Mix Idiappa Kottu Roti</td>
                <td>Rs 1390/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Mutton Idiappa Kottu Roti</td>
                <td>Rs 1590/=</td>
                <td>Sm</td>
            </tr>
            </tbody>
        </table>
    </div>
    <br/>
</div>

<div class="container-fluid" id="section-4">
    <br>
    <h1 class="text-white text-center w-custom mx-auto text-uppercase bg-danger p-1" data-aos="flip-up">Price List</h1>
    <div class="container w-custom" data-aos="fade-up">
        <table class="custom-table mt-3 table mb-0">
            <tbody>
            <tr>
                <td colspan="3" class="bg-black text-start">NAAN KOTHTHU ROTTI</td>
            </tr>
            <tr>
                <td>Vegetable Naan Koththu Roti</td>
                <td>Rs 890/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Egg Naan Koththu RotiI</td>
                <td>Rs 950/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Chicken Naan Koththu Roti</td>
                <td>Rs 990/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Fish Naan Koththu Roti</td>
                <td>Rs 1050/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Seafood Naan Koththu Roti</td>
                <td>Rs 1250/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Mix Naan Koththu Roti</td>
                <td>Rs 1390/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Mutton Naan Koththu Roti</td>
                <td>Rs 1590/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td colspan="3" class="bg-black text-start">CHEESE KOTHTHU ROTTI</td>
            </tr>
            <tr>
                <td>VEGETABLE IDIAPPA KOTHTHU ROTI</td>
                <td>Rs 890/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>EGG IDIAPPA KOTHTHU ROTI</td>
                <td>Rs 950/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>CHICKEN IDIAPPA KOTHTHU ROTI</td>
                <td>Rs 990/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>FISH IDIAPPA KOTHTHU ROTI</td>
                <td>Rs 1050/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>SEAFOOD IDIAPPA KOTHTHU ROTI</td>
                <td>Rs 1250/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>MIX IDIAPPA KOTHTHU ROTI</td>
                <td>Rs 1390/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>MUTTON IDIAPPA KOTHTHU ROTI</td>
                <td>Rs 1590/=</td>
                <td>Sm</td>
            </tr>
            </tbody>
        </table>
    </div>
    <br/>
</div>

<div class="container-fluid" id="section-5">
    <br>
    <h1 class="text-white text-center w-custom mx-auto text-uppercase bg-danger p-1" data-aos="flip-up">Price List</h1>
    <div class="container w-custom" data-aos="fade-up">
        <table class="custom-table mt-3 table mb-0">
            <tbody>
            <tr>
                <td colspan="3" class="bg-black text-start">NAAN KOTHTHU ROTTI</td>
            </tr>
            <tr>
                <td>Vegetable Naan Koththu Roti</td>
                <td>Rs 890/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Egg Naan Koththu RotiI</td>
                <td>Rs 950/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Chicken Naan Koththu Roti</td>
                <td>Rs 990/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Fish Naan Koththu Roti</td>
                <td>Rs 1050/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Seafood Naan Koththu Roti</td>
                <td>Rs 1250/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Mix Naan Koththu Roti</td>
                <td>Rs 1390/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>Mutton Naan Koththu Roti</td>
                <td>Rs 1590/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td colspan="3" class="bg-black text-start">CHEESE KOTHTHU ROTTI</td>
            </tr>
            <tr>
                <td>VEGETABLE IDIAPPA KOTHTHU ROTI</td>
                <td>Rs 890/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>EGG IDIAPPA KOTHTHU ROTI</td>
                <td>Rs 950/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>CHICKEN IDIAPPA KOTHTHU ROTI</td>
                <td>Rs 990/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>FISH IDIAPPA KOTHTHU ROTI</td>
                <td>Rs 1050/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>SEAFOOD IDIAPPA KOTHTHU ROTI</td>
                <td>Rs 1250/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>MIX IDIAPPA KOTHTHU ROTI</td>
                <td>Rs 1390/=</td>
                <td>Sm</td>
            </tr>
            <tr>
                <td>MUTTON IDIAPPA KOTHTHU ROTI</td>
                <td>Rs 1590/=</td>
                <td>Sm</td>
            </tr>
            </tbody>
        </table>
    </div>
    <br/>
</div>

<div class="container-fluid d-flex align-items-center justify-content-center p-3 bg-black">
    <div class="container p-4 bg-dark rounded-3 d-flex align-items-center justify-content-between">
        <div class="text-center" data-aos="zoom-in-left">
            <div class="text-white fs-2"><i class="fas fa-soup"></i></div>
            <div class="text-white small text-uppercase lh-lg c-icon">Freshly Prepared</div>
        </div>
        <div class="text-center" data-aos="zoom-in-left" data-aos-delay="100">
            <div class="text-white fs-2"><i class="fas fa-clipboard-list-check"></i></div>
            <div class="text-white small text-uppercase lh-lg c-icon">HACCP Guidelines</div>
        </div>
        <div class="text-center" data-aos="zoom-in-left" data-aos-delay="200">
            <div class="text-white fs-2"><i class="fas fa-utensils"></i></div>
            <div class="text-white small text-uppercase lh-lg c-icon">Safe Dine-in space</div>
        </div>
        <div class="text-center" data-aos="zoom-in-left" data-aos-delay="300">
            <div class="text-white fs-2"><i class="fas fa-hat-chef"></i></div>
            <div class="text-white small text-uppercase lh-lg c-icon">Top Rated Chefs</div>
        </div>
        <div class="text-center" data-aos="zoom-in-left" data-aos-delay="400">
            <div class="text-white fs-2"><i class="fas fa-smile-beam"></i></div>
            <div class="text-white small text-uppercase lh-lg c-icon">Friendly Staff</div>
        </div>
        <div class="text-center" data-aos="zoom-in-left" data-aos-delay="500">
            <div class="text-white fs-2"><i class="fas fa-parking"></i></div>
            <div class="text-white small text-uppercase lh-lg c-icon">Parking Available</div>
        </div>
        <div class="text-center" data-aos="zoom-in-left" data-aos-delay="600">
            <div class="text-white fs-2"><i class="fad fa-wifi"></i></div>
            <div class="text-white small text-uppercase lh-lg c-icon">Wi-Fi Available</div>
        </div>
    </div>
</div>

<div class="container-fluid bg-black">
    <div class="text-center p-2 pulse" data-aos="flip-down">
        <p class="text-danger text-uppercase fw-bold">Food allergy notice</p>
        <p class="text-muted lh-1">If you let us know about your food allergy during ordering, we can offer several delicious and safe alternatives to our popular dishes.</p>
    </div>
    <div class="w-50 bg-black p-4 mx-auto d-flex align-items-center justify-content-between">
        <div class="text-muted fs-2"><i class="fab fa-instagram"></i></div>
        <div class="text-muted fs-2"><i class="fab fa-facebook-f"></i></div>
        <div class="text-muted fs-2"><i class="fab fa-tiktok"></i></div>
        <div class="text-muted fs-2"><i class="fab fa-twitter"></i></div>
        <div class="text-muted fs-2"><i class="fab fa-youtube"></i></div>
    </div>
    <div class="text-center">
        <p class="text-muted m-0">Nittambuwa - 077 6680 000 | Gampaha - 077 7120 815</p>
        <p class="text-muted m-0">Nittambuwa - 9, Veyangoda Road, Nittambuwa</p>
        <p class="text-muted m-0">Gampaha - 124/A, Marry Road, Gampaha</p>
        <p class="text-muted m-0">info@kottupalace.lk</p>
    </div>
</div>
<br/>
<a id="back-to-top" href="#" class="btn btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
<!--Modal Start-->
<!-- Modal -->
<div class="modal fade bg-opacity-50 bg-black" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-black">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel"><img src="images/sqaure-logo.png" width="40px"> Customer Login </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(100%)"></button>
            </div>
            <div class="modal-body">
                <h2 class="text-white text-center">Kottu Palace</h2>
                <form action="login.php" method="post">
                    <label for="" class="text-white form-label">Email Address</label>
                    <div class="mb-3 input-group">
                        <span class="input-group-text bg-black text-white" id="spanEmail"><i class="fas fa-envelope"></i></span>
                        <input class="form-control bg-dark shadow-none text-light" placeholder="example@domain.com" type="text" id="textEmail" name="textEmail" required>
                    </div>
                    <label for="" class="text-white form-label">Password</label>
                    <div class="mb-3 input-group">
                        <span class="input-group-text bg-black text-white" id="spanPassword"><i class="fas fa-lock-alt"></i></span>
                        <input class="form-control bg-dark shadow-none text-light" placeholder="**********" type="password" id="textPassword" name="textPassword" required>
                    </div>
                    <div class="mb-3">
                        <a class="text-white text-decoration-none" href="forget-password.php">Forget Password</a>
                        <button type="submit" class="btn-orangered btn float-end">Login</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-0 justify-content-center">
                <a class="text-muted" href="signup.php">Don't Have an Account?</a>
            </div>
        </div>
    </div>
</div>
<script src="js/alert-function.js"></script>
<script src="js/app.js"></script>
<?php
if(isset($_SESSION['login-failed'])){
    echo $_SESSION['login-failed'];
}

unset($_SESSION['login-failed']);
?>
</body>
</html>