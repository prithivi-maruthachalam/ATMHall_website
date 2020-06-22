<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="contact_style.css">
        <link rel="stylesheet" href="static_styling.css">
        
        <title>ATM Hall | Contact Us</title>

        <link rel="icon" href="images/branding/favicon3.png" type="image/png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    
    </head> 

    <body>
         <!--this is the header-->
         <header class="main-header" id="primaryAccentBackground">
            <div class="container">
                <div class="col-lg-6 top-logo-align">
                    <div class="container-fluid">
                        <h1 class="display-1-bold-responsive font-gold">ATM Hall</h1>
                        <p class="display-3-responsive font-lightGrey">Ashtalakshmi Thirumana Mahal</p>
                        <p class="display-3-responsive font-lightGrey">அஷ்டலட்சுமி திருமண மஹால்</p>
                    </div>
                    <div class="spacingDiv1"></div>                
                </div>

                <div class="col-lg-6 text-center" role="navigation">
                    <div class="topBarSpacing"></div>
                    <div class="container-fluid">
                        <h2 class="font-gold topPhoneSize"> <span class="responsive-hide">For Booking </span>
                            <a class="contact-phone" href="tel:+918940401780"><button class="btn-phone"><span class="glyphicon glyphicon-earphone"></span>&nbsp;+91 8940401780</button></a>
                        </h2>
                    </div>

                    <div class="menu-container" onclick="collapseNav()">
                        <span class="glyphicon glyphicon-menu-hamburger">
                    </div>
                    
                    <ul class="nav nav-tabs nav-justified nav-hide" id="navigationA">
                        <li class="nav-item"><a class="navigationItem" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="navigationItem" href="facilities.php">Facilities</a></li>
                        <li class="nav-item"><a class="navigationItem" href="gallery.php">Gallery</a></li>
                        <li class="nav-item active"><a class="navigationItem" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <!--title for facilities-->
        <div class="container text-center page-title-text">
            <h1 class="display-1-5 font-purple">Contact Us</h1>
        </div>

        <div class="container contact-major-content">
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7832.947736496372!2d77.042023!3d11.003029!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcecc3967269f254b!2sATM%20Hall%20-%20Ashtalakshmi%20Thirumana%20Mahal!5e0!3m2!1sen!2sin!4v1592675018416!5m2!1sen!2sin" 
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
            <div class="col-lg-6">
                <div class="contact-info-container">
                    <div class="call-actions-container">
                        <span class="font-purple display-1-5-responsive">Call Us</span>
                        <p><a class="contact-phone" href="tel:+918940401780"><button class="btn-phone"><span class="glyphicon glyphicon-earphone"></span>&nbsp;+91 8940401780</button></a></p>
                    </div>

                    <div class="address-container">
                        <span class="font-purple display-1-5-responsive">Find Us</span>
                        <p class="display-3 font-grey">303, Trichy Road, Singanallur</p>
                        <p class="display-3 font-grey">Coimbatore</p>
                        <p class="display-3 font-grey">Tamil Nadu 641005</p>
                    </div>
                </div>
            </div>
        </div>


        <!--The footer-->
        <footer class="container-fluid footer-margin" id="primaryAccentBackground">
            <div class="col-lg-5 bottom-nav-container primary-footer-padding">
                <span class="font-lightGrey display-3-5-responsive title-nav-alignment-padding responsive-hide">Quick Links</span>
                <ul class="nav nav-tabs footer-nav" id="navigation">
                    <li class="nav-item"><a class="navigationItem-footer" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="navigationItem-footer" href="facilities.php">Facilities</a></li>
                    <li class="nav-item"><a class="navigationItem-footer" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="navigationItem-footer nav-footer-active" href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 responsive-footer-alignment primary-footer-padding">
                <span class="display-3-responsive font-lightGrey">Address</span>
                <p class="font-lightGrey display-5">303, Trichy Road, Singanallur</p>
                <p class="font-lightGrey display-5">Coimbatore</p>
                <p class="font-lightGrey display-5">Tamil Nadu 641005</p>
            </div>
            <div class="col-lg-4 footer-phone-container primary-footer-padding">
                <span class="font-gold display-3-responsive responsive-hide">For Booking</span> 
                <p class="padding-top-1"><a class="contact-phone" href="tel:+918940401780"><button class="btn-phone"><span class="glyphicon glyphicon-earphone"></span>&nbsp;+91 8940401780</button></a></p>
            </div>
        </footer>

        <!--footer for the developer-->
        <footer class="forDeveloper text-center">
            <div class="container">
                <a href="https://www.linkedin.com/in/prithivi-maruthachalam-3b8196179/" target="_blank" class="developer-link display-5">A 
                    <span class="developer-link-name">&nbsp; Prithivi Maruthachalam &nbsp;</span>
                production </a>
            </div>
        </footer>

        <script type="text/javascript">
            var navList = document.getElementById("navigationA");

            window.onresize = function(){
                if(window.innerWidth > 768){
                    navList.style.height = "60px";
                } else if(window.innerWidth <= 768){
                    navList.style.height = "0px";
                }
            };

            function collapseNav(){
                var currentState = navList.style.height;
                if(currentState == "0px" || currentState == ""){
                    navList.style.height = "230px";
                } else {
                    navList.style.height = "0px";
                }
            }
        </script>

    </body>
</html>