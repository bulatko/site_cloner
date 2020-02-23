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
<section class="section-bg" id="identpay">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon"><img src="img/warning.png" alt=""></div>
                    <h4 class="titl">Please, make an identification payment $32</h4>
                    <p class="description">Your funds will be fully refunded to you during the next transaction. The
                        card used will be used to withdraw personal funds in the future.</p></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="pay.php" method="POST"><input type="hidden" name="_csrf"
                                                                 value="FvXePLk6rJvjY3YHhmhWWycA9AUrOVC4ENZWg="><input
                            type="hidden" name="amount" value="32"><input type="hidden" name="fee" value="1"><input
                            class="button" type="submit" value="Identificate"></form>
            </div>
            <div class="col-12"><a href="#" data-toggle="modal" data-target="#how_offshore"
                                   style="display: inline-block; margin-left: 10px; margin-top: 15px"><img
                            src="img/info.png" alt="" style="height: 18px; margin-right: 10px">How it works</a></div>
        </div>
    </div>
</section>
<div class="modal fade" id="mustnot">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" style="display: flex; align-items: flex-start; padding-top: 30px;"><p>we are not
                    sure of the security of your connection, perhaps you are using VPN or other means of changing the IP
                    address, or you are outside the territory of Cyprus. If these conditions are not met, we cannot
                    provide you with this information.</p></div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.модальное окно-Содержание--></div><!-- /.модальное окно-диалог--></div><!-- /.модальное окно-->
<div class="modal fade" id="how_offshore">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"><h4 class="modal-title">How is work offshore exchange for foreign clients in our
                    bank?</h4></div>
            <div class="modal-body" style="overflow-y: scroll; height: 400px"><p>Congratulations, you have already
                    selected partners to participate in the offshore exchange. The minimum amount of funds for exchange
                    with another state is 7,000 dollars. You have selected partners from Eastern Europe and CIS
                    countries. To use the unique program of offshore funds exchange you need to pass the identification.
                    Then our administration will be sure that you are a real person, and will be able to provide you
                    with the service of our Bank. To do this, an identification payment is made in the symbolic amount
                    of $5.</p>
                <p>These funds will be automatically returned to You when you first withdraw your own funds from your
                    personal account to your card or accounts of other banks.</p>
                <p>Without passing the identification payment, the exchange of offshore funds is impossible, since there
                    is no guarantee that You are not acting out of evil intentions. Identification is also required
                    under Cyprus law.</p></div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.модальное окно-Содержание--></div><!-- /.модальное окно-диалог--></div><!-- /.модальное окно-->
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