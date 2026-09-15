<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Shree Sai Hospital</title>
         <?php include('header-link.php');?>
        
    </head>

    <body>
       <?php include('header.php');?>

        <!-- Start Coming Soon Area -->
        <div class="coming-soon-area">
            <div class="container">
                <div class="coming-soon-content">
                    <a href="index.php" class="logo">
                        <img src="assets/images/logosai-min.png" alt="image">
                    </a>
                    <h2>We are launching soon..</h2>
                    <!--<div id="timer" class="flex-wrap d-flex justify-content-center">-->
                    <!--    <div id="days" class="align-items-center flex-column d-flex justify-content-center"></div>-->
                    <!--    <div id="hours" class="align-items-center flex-column d-flex justify-content-center"></div>-->
                    <!--    <div id="minutes" class="align-items-center flex-column d-flex justify-content-center"></div>-->
                    <!--    <div id="seconds" class="align-items-center flex-column d-flex justify-content-center"></div>-->
                    <!--</div>-->
                    <form class="newsletter-form" data-bs-toggle="validator">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                        </div>
                        <button type="submit" class="default-btn">Subscribe</button>
                        <div id="validator-newsletter" class="form-result"></div>
                        <p>If you would like to be notified when your app is live, Please subscribe to our mailing list.</p>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Coming Soon Area -->
        
       <?php include('footer.php');?>
    </body>
</html>