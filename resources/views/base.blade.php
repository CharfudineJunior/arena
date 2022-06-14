<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Inquérito_v2</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<style>
    body {
        background: rgb(255, 255, 255)
    }

    #regForm {
        background-color: #e8e7e7;
        margin: 0px;
        padding: 25px;
        overflow: auto;
        text-align: justify;
        border-radius: 10px
    }

    input {
        padding: 10px;
        width: 30%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa
    }

    input.invalid {
        background-color: #ffdddd
    }

    .tab {
        display: none
    }

    button {
        background-color: #52a2fc;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer
    }

    button:hover {
        opacity: 0.8
    }

    #prevBtn {
        background-color: #bbbbbb
    }

    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5
    }

    .step.active {
        opacity: 1
    }

    .step.finish {
        background-color: #52a2fc
    }

    .all-steps {
        text-align: center;
        margin-top: 70px;
        margin-bottom: 30px
    }

    .thanks-message {
        display: none
    }

    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 10px;
        cursor: auto;
        font-size: 15px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .container input[type="radio"] {
        position: absolute;
        opacity: 0;
        cursor: pointer
    }

    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        /* antes */
        background-color: rgb(195, 194, 194);
        border-radius: 50%
    }

    .container:hover input~.checkmark {
        /* depois */
        background-color: rgb(169, 169, 169)
    }

    .container input:checked~.checkmark {
        background-color: #054284
    }

    .checkmark:after {
        content: "";
        position: absolute;
        display: none
    }

    .container input:checked~.checkmark:after {
        display: block
    }

    .container .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: rgb(221, 221, 221)
    }
</style>

<style>
    /**
 * Demo Styles
 */

    html {
        height: 100%;
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    body {
        position: relative;
        margin: 0;
        padding-bottom: 1rem;
        min-height: 92%;
        font-family: "Helvetica Neue", Arial, sans-serif;
    }

    .demo {
        margin: 0 auto;
        padding-top: 32px;
        max-width: 640px;
        width: 94%;
    }

    .demo h1 {
        margin-top: 0;
    }

    /**
 * Parametrizando o Footer 
 */

    .footer {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1rem;
        background-color: #efefef;
        text-align: center;
    }
</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" style="background-color: #054284;" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between" style="width: 80%;">

            <!-- <h1 class="logo"><a href="index.html"><span>.</span></a></h1> -->
            <a href="https://dev.tvcabo.mz/pt/residencial" target="_blank" rel="noopener noreferrer" class="logo"><img src="{{ ('img/user01.png') }}" width="80%"
                    alt="">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="https://dev.tvcabo.mz/pt/residencial"
                            style="color: rgb(28, 165, 230);"><i class="fas fa-trash"></i> Inicio</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <div class="footer">
        <div class="d-flex justify-content-center" style="font-size: 13px; margin-bottom: -1%;">
            <label for="company"> POWERED BY
                <strong> <a href="https://heman.dev.tvcabo.mz/">TVCABO</a> </strong>
                &copy;2022 TODOS OS DIREITOS RESERVADOS
            </label>
        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script src="{{ asset('js/step.js') }}" defer></script>

    <script src="assets/js/min.js"></script>

    
</body>
</html>