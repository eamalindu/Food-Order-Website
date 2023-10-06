<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Reset | Koththu Palace</title>
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
<body id="section-2" class="d-flex align-items-center justify-content-center min-vh-100">
<div class="preloader">
    <div class="loading">
        <img src="images/loader.gif" alt="loading"/>
    </div>
</div>
<div class="w-custom p-5 bg-black rounded-4">
    <p Class="small fs-5 text-white mb-4"><a href="index.php" class="text-decoration-none text-muted"><i class="far fa-caret-left"></i> Go Back</a></p>
    <h1 class="modal-title fs-5 text-white mb-3" id="staticBackdropLabel"><img src="images/sqaure-logo.png" width="40px"> Password Reset Portal </h1>
    <h2 class="text-white text-center">Kottu Palace</h2>
    <form>
        <label for="" class="text-white form-label">Email Address</label>
        <div class="mb-3 input-group">
            <span class="input-group-text bg-black text-white" id="spanEmail"><i class="fas fa-envelope"></i></span>
            <input class="form-control bg-dark shadow-none text-light" placeholder="example@domain.com" type="text" id="textEmail" required
                   onkeyup="inputTextValidator(this,'^[a-z|A-Z]{2,19}[@][a-z|A-Z]{2,8}[.][a-z|A-Z]{2,3}$')">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn-orangered btn float-end">Send Password Reset Link</button>
        </div>
    </form>
</div>
<script src="js/external-validator.js"></script>
<script src="js/alert-function.js"></script>
<script src="js/forgetPassword.js"></script>
</body>
</html>