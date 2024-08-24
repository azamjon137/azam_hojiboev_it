<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Skill an Education Category Bootstrap Responsive Website Template - Home :: W3Layouts</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!-- header -->
    <?php
 require_once("header.php");
?>
    <!-- //header -->
    <!--  Main banner section -->
<?php
  require_once("banner.php");
?>
    <!--  //Main banner section -->
     <?php
      require_once("steps.php");
     
     ?>
    <!-- stats -->
<?php
 require_once("stats.php");

?>
    <!-- //stats -->
  <?php
  require_once("programs.php");

?>
    <!-- //subscribe -->
   <?php
 require_once("buziness.php");
   ?>
 <?php
require_once("otzivi.php");

?>
   <?php
   require_once("voprosi.php");

?>
<?php

   require_once("subscribe.php");
?>
   
    <!-- footer -->
    <?php
  require_once("footer.php");

?>
    <!-- Footer -->
          
    <!-- jQuery and Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Template JavaScript -->

    <!-- stats number counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats number counter -->


    <!-- testimonials owlcarousel -->
    <script src="assets/js/owl.carousel.js"></script>

    <!-- script for owlcarousel -->
    <script>
        $(document).ready(function() {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for owlcarousel -->
    <!-- //testimonials owlcarousel -->

    <!-- script for courses -->
    <script>
        $(document).ready(function() {
            $('.owl-two').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for courses -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

</body>

</html>