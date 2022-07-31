@extends('app.header')

<?php
// include("inc/ayar.php");
session_start();
ob_start();
?>
<!doctype html>
<html lang="en">

@section('index')

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="img/spinner_logo.png" alt="">
                    <h4><span>Giltaş</span>A.Ş.</h4>
                </div>
            </div>
            <h2 class="head">Destek Portalı</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <?php // include("nav.php"); ?>

        <?php 
			$do=@$_GET["do"];
			switch($do)
			{
				case "anasayfa":
					include("anasayfa.php");
					break;
				case "talepadd":
					include("talepadd.php");
					break;
				case "talepshow":
					include("talepshow.php");
					break;
				case "contact":
					include("contact.php");
					break;
				case "oneticket":
					include("oneticket.php");
					break;
				case "tickets":
					include("tickets.php");
					break;
				case "signup":
					include("signup.php");
					break;
				case "ticketadd":
					include("ticketadd.php");
					break;
				case "cikis":
					session_destroy();
					header("refresh:0.8;index.php");
				default:
				//	include("anasayfa.php");
					break;
						
			}
		?>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/pre-loader.js"> </script>
    <script src="js/pre-loader.js"> </script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/slick/slick.min.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/jquery.wavify.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

@endsection