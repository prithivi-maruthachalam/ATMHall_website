<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="home_style.css">
        <link rel="stylesheet" href="static_styling.css">
        
        <title>ATM Hall | Home </title>

        <link rel="icon" href="images/branding/favicon3.png" type="image/png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    
    </head> 

    <body>
        <!--this is the header-->
        <header class="main-header" id="primaryAccentBackground">
            <div class="container">
                <div class="col-lg-6 top-logo-align">
                    <div class="topBarSpacing"></div>
                    
                    <span class="display-1-bold-responsive font-gold negative-spacing">ATM Hall</span><br>
                    <span class="display-3-responsive font-lightGrey">Ashtalakshmi Thirumana Mahal</span><br>
                    <span class="display-3-responsive font-lightGrey">அஷ்டலட்சுமி திருமண மஹால்</span>
                </div>

                <div class="col-lg-6 text-center" role="navigation">
                    <div class="topBarSpacing"></div>
                    <span class="font-gold display-2 responsive-hide extra-mid-padding">For Booking</span>
                    <a class="contact-phone" href="tel:+918940401780"><button class="btn-phone btn-top"><span class="glyphicon glyphicon-earphone"></span>&nbsp;+91 8940401780</button></a>

                    <div class="menu-container" onclick="collapseNav()">
                        <p>Menu <span class="glyphicon glyphicon-menu-hamburger"></p>
                    </div>
                    
                    <ul class="nav nav-tabs nav-justified nav-hide nav-negative-margin" id="navigationA">
                        <li class="nav-item active"><a class="navigationItem" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="navigationItem" href="facilities.php">Facilities</a></li>
                        <li class="nav-item"><a class="navigationItem" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="navigationItem" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <div id="mainImagesCarousel" class="carousel">
            <!--The actual images go here-->
            <div class="carousel-inner">
                
                <div class="item">
                    <div class="carousel-images-row">
                        <div class="carousel-image-container col-md-6 col-xs-12">
                            <img src="content/carouselImages/1.JPG" class="img-responsive">
                        </div>
                        <div class="carousel-image-container col-md-6 col-xs-12 conditional-display">
                            <img src="content/carouselImages/2.JPG" class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="item carousel-alt-item">
                    <div class="carousel-images-row">
                        <div class="carousel-image-container col-xs-12">
                            <img src="content/carouselImages/2.JPG" class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="carousel-images-row">
                        <div class="carousel-image-container col-md-6 col-xs-12">
                            <img src="content/carouselImages/3.JPG" class="img-responsive">
                        </div>
                        <div class="carousel-image-container col-md-6 col-xs-12 conditional-display">
                            <img src="content/carouselImages/4.JPG" class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="item carousel-alt-item">
                    <div class="carousel-images-row">
                        <div class="carousel-image-container col-xs-12">
                            <img src="content/carouselImages/4.JPG" class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="item current">
                    <div class="carousel-images-row">
                        <div class="carousel-image-container col-md-6 col-xs-12">
                            <img src="content/carouselImages/5.JPG" class="img-responsive">
                        </div>
                        <div class="carousel-image-container col-md-6 col-xs-12 conditional-display">
                            <img src="content/carouselImages/6.JPG" class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="item carousel-alt-item">
                    <div class="carousel-images-row">
                        <div class="carousel-image-container col-xs-12">
                            <img src="content/carouselImages/6.JPG" class="img-responsive">
                        </div>
                    </div>
                </div>

            </div>
        </div> 


        <!--The welcome text part-->
        <div class="container main-content-container">
            <div class="col-md-6 content-text">
                <h2 class="display-1-5-responsive">Welcome to <span class="display-1-5-responsive font-purple">Ashtalakshmi Thirumana Mahal</span></h2>
                <p class="font-home-content1">ATM Hall invites you to host your <mark>weddings, receptions, marriages, birthday parties, engagements, naming ceremonies and other 
                    functions</mark>. ATM Hall is also ideal hall for exhibitions, sales and other promotional events. 
                    Functions have been continuously held here<mark>since 1988</mark>, which by itself is a proof of trust, 
                    love of its clients and success of holding an event here.It has been renovated recently which makes 
                    it even more <mark>comfortable, convenient</mark> and any event here would be <mark>memorable</mark>.</p>
            </div>

            <div class="col-md-6 mainContent2 content-text2 main-content-padding">
                <div class="container-fluid">
                    <div class="container-fluid content-spacing-1">
                        <span class="display-2 font-purple">150+ Seats</span>
                        <p class="font-home-content2">in Main Hall</p>
                    </div>

                    <div class="container-fluid content-spacing-1">
                        <span class="display-2 font-purple">80+ Seats</span>
                        <p class="font-home-content2">in Dining</p>
                    </div>

                    <div class="container-fluid content-spacing-1">
                        <span class="display-2 font-purple">AC Rooms</span>
                        <p class="font-home-content2">not 1 but 2!</p>
                    </div>
                </div>

            </div>
        </div>


        <!--Secondary main content text-->
        <div class="container secondary-content-container text-center">
            <div class="container">
                <hr class="hz-divider-major">
                <div class="display-2 font-purple">Discover the Best</div>
                <div class="display-1-5-responsive font-gold-darker">Wedding Hall In budget in Singanallur Coimbatore</div>
                <p class="font-home-content2 secondary-content-padding">
                    When looking for the perfect kalyana mandapam in Coimbatore, you should prefer a classic
                    place where culture blends with modernity. To celebrate the start of your marital
                    bliss with new life of joy, happiness and togetherness.
                </p>
            </div>

            <!--Images for the main page - maybe used for link building-->
            <div class="container">
                <hr class="hz-divider-minor">
                <div class="col-md-4 main-images-container">
                    <div class="card">
                        <img src="images/Backdrops/ATM Hall backdrop Jan 19/DSC_4953.JPG" alt="some alt text" class="img-responsive">
                        <div class="img-text-block">
                            <span class="display-4 font-grey">Function Hall</span>
                            <p class="font-grey">Functions can be processed here</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 main-images-container">
                    <div class="card">
                        <img src="images/Exteriors/DSC_2087.JPG" alt="some alt text" class="img-responsive">
                        <div class="img-text-block">
                            <span class="display-4 font-grey">The View</span>
                            <p class="font-grey">The view from Singanallur, Coimbatore</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 main-images-container">
                    <div class="card">
                        <img src="images/Dining/DSC_5183.jpg" alt="some alt text" class="img-responsive">
                        <div class="img-text-block">
                            <span class="display-4 font-grey">Dining</span>
                            <p class="font-grey">Eating can be executed well here</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--The button to link to gallery-->
        <div class="container-fluid text-center btn-container">
            <a href="gallery.php"><button class="btn btn-primary">View More Images</button></a>
        </div>

        <!--The footer-->
        <footer class="container-fluid footer-margin" id="primaryAccentBackground">
            <div class="col-lg-5 bottom-nav-container primary-footer-padding">
                <span class="font-lightGrey display-3-5-responsive title-nav-alignment-padding responsive-hide">Quick Links</span>
                <ul class="nav nav-tabs footer-nav" id="navigation">
                    <li class="nav-item"><a class="navigationItem-footer nav-footer-active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="navigationItem-footer" href="facilities.php">Facilities</a></li>
                    <li class="nav-item"><a class="navigationItem-footer" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="navigationItem-footer" href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 responsive-footer-alignment primary-footer-padding">
                <span class="display-3-responsive font-lightGrey">Address</span>
                <div class="font-lightGrey display-5">303, Trichy Road, Singanallur</div>
                <div class="font-lightGrey display-5">Coimbatore</div>
                <div class="font-lightGrey display-5">Tamil Nadu 641005</div>
            </div>
            <div class="col-lg-4 footer-phone-container primary-footer-padding">
                <span class="font-gold display-3-responsive responsive-hide">For Booking</span> 
                <p class="padding-top-1"><a class="contact-phone" href="tel:+918940401780"><button class="btn-phone btn-bottom"><span class="glyphicon glyphicon-earphone"></span>&nbsp;+91 8940401780</button></a></p>
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

            //carousel constants
            const carouselTiming = 10000;
            const container = $(".carousel-inner");
            const carousel = $('.carousel')

            window.onresize = function(){
                if(window.innerWidth > 768){
                    navList.style.height = "60px";
                } else if(window.innerWidth <= 768){
                    navList.style.height = "0px";
                }

                //for sizing the carousel
                var currentImage = container.find('.current');
                var height = currentImage.prop('scrollHeight');
                carousel.height(height);
            };

            function collapseNav(){
                var currentState = navList.style.height;
                if(currentState == "0px" || currentState == ""){
                    navList.style.height = "230px";
                } else {
                    navList.style.height = "0px";
                }
            }

            //carousel first-time
            var images = container.find('.item');
            var currentImage = container.find('.current');
            var currentIndex = currentImage.index();

            console.log("changing");
            var height = container.find('.item').first().prop('scrollHeight');
            carousel.height(height);
            container.find('.item').first().addClass('current');

            //the function for carousel
            setInterval(function(){
                var images = container.find('.item');
                var currentImage = container.find('.current');
                var currentIndex = currentImage.index();

                currentImage.removeClass('current');
                if(window.innerWidth > 992){
                    var height = currentImage.next('.item').next('.item').prop('scrollHeight');
                    carousel.height(height);
                    currentImage.next('.item').next('.item').addClass('current');
                    if(currentIndex + 2  == images.length){
                        var height = container.find('.item').first().prop('scrollHeight');
                        carousel.height(height);
                        container.find('.item').first().addClass('current');
                    }
                } else {
                    var height = currentImage.next('.item').prop('scrollHeight');
                    carousel.height(height);
                    currentImage.next('.item').addClass('current');
                    if(currentIndex + 1 == images.length){
                        var height = container.find('.item').first().prop('scrollHeight');
                        carousel.height(height);
                        container.find('.item').first().addClass('current');
                    }
                }
            },carouselTiming);
        </script>

    </body>
</html>