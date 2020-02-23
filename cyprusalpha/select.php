<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CyprusAlpha</title><!-- Favicons-->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon"><!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
          rel="stylesheet"><!-- Bootstrap CSS File-->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"><!-- Main stylesheet files-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/account.css">
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/mobile-nav/mobile-nav.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span>
        <div class="navbar-toggler balanceBlock">$0</div>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand cb" href="#">CYPRUSAPLHA</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active"><a class="nav-link" href="">Account</a></li>
            <li class="nav-item"><a class="nav-link" href="loans.php">Loans</a></li>
            <li class="nav-item"><a class="nav-link" href="investment.php">Investment</a></li>
            <li class="nav-item"><a class="nav-link" href="collaboration.php">Collaboration</a></li>
        </ul>
    </div>
</nav>
<section>
    <div class="container bg-light p-3"><h2 class="text-center">Local group selection</h2>
        <div class="card shadow-sm" id="picksum">
            <div class="card-body"><p>Enter amount to exchange</p>
                <form action="#" id="confirm">
                    <div class="form-group"><input class="form-control" id="sum" type="number" max="1000" min="120"
                                                   placeholder="Enter sum"></div>
                    <div class="form-group">
                        <button class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
        <h5 class="mt-4 text-center">Current group</h5>
        <div class="people">
            <div class="text-center" id="bpreloader"><img src="img/spinner.svg" alt=""></div>
        </div>
        <script src="lib/select.js" type="text/javascript"></script>
    </div>
</section>
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 footer-info"><h3>CyprianBank</h3>
                    <p>Our Bank provides high quality services with an individual approach and builds strong and
                        long-term relationships with customers.</p></div>
                <div class="col-md-3 footer-contact"><h4>Contact Us</h4>
                    <p><strong>Email:</strong> info@bankofcyprus.eu<br></p></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">&copy; Copyright<strong>CyprianBank</strong>. All Rights Reserved</div>
    </div>
</footer>
</body>