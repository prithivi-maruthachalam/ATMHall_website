<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="home_style.css">
        <link rel="stylesheet" href="static_styling.css">
        

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
                    <h1 class="display-1-bold font-gold">ATM Hall</h1>
                    <p class="display-3 font-lightGrey">Ashtalakshmi Thirumana Mahal</p>
                    <p class="display-3 font-lightGrey">அஷ்டலட்சுமி திருமண மஹால்</p>
                </div>
                <div class="spacingDiv1"></div>                
            </div>

            <div class="col-lg-6 text-center" role="navigation">
                <div class="topBarSpacing"></div>
                <div class="container-fluid">
                    <h2 class="font-gold  topPhoneSize"> For Bookings : 
                        <a class="phoneNumber  topPhoneSize" href="tel:+918940401780">+91 8940401780</a>
                    </h2>
                </div>

                <ul class="nav nav-tabs nav-justified" id="navigation">
                    <li class="nav-item active"><a class="navigationItem" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="navigationItem" href="facilities.php">Facilities</a></li>
                    <li class="nav-item"><a class="navigationItem" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="navigationItem" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>


    <!--The image slide show thing - aka - a CAROUSEL-->
    <div id="mainImagesCarousel" class="carousel slide" data-ride="carousel">
        <!--The actual images go here-->
        <div class="carousel-inner">
            <div class="item active">
                <img class="center-cropped" src="images/Backdrops/01/DSC_0792.jpg" alt="Carousel Image 1">
            </div>
            <div class="item">
                <img class="center-cropped" src="images/Dining/DSC_5186.jpg" alt="Carousel Image 2">
            </div>
            <div class="item">
                <img class="center-cropped" src="images/Main hall/DSC_5191.jpg" alt="Carousel Image 3">
            </div>
        </div>

        <!--Controls for the carousel-->
        <a class="left carousel-control" href="#mainImagesCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#mainImagesCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only"></span>
        </a>
    </div> 


    <!--The welcome text part-->
    <div class="container main-content-container">
        <div class="col-md-6 content-text">
            <h2>Welcome to <span class="display-1-5 font-purple">Ashtalakshmi Thirumana Mahal</span></h2>
            <p class="font-home-content1">ATM Hall invites you to host your <mark>weddings, receptions, marriages, birthday parties, engagements, naming ceremonies and other 
                functions</mark>. ATM Hall is also ideal hall for exhibitions, sales and other promotional events. 
                Functions have been continuously held here<mark>since 1988</mark>, which by itself is a proof of trust, 
                love of its clients and success of holding an event here.It has been renovated recently which makes 
                it even more <mark>comfortable, convenient</mark> and any event here would be <mark>memorable</mark>.</p>
        </div>

        <div class="col-md-6 mainContent2 content-text2 main-content-padding">
            <div class="container-fluid">
                <div class="container-fluid">
                    <span class="display-2 font-purple">150+ Seats</span>
                    <p class="font-home-content2">in Main Hall</p>
                </div>

                <div class="container-fluid">
                    <span class="display-2 font-purple">80+ Seats</span>
                    <p class="font-home-content2">in Dining</p>
                </div>

                <div class="container-fluid">
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
            <div class="display-1-5-responsive font-gold">Wedding Hall In budget in Singanallur Coimbatore</div>
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
        <div class="col-lg-5 bottom-nav-container  primary-footer-padding">
            <span class="font-lightGrey display-3 title-nav-alignment-padding">Quick Links</span>

            <ul class="nav nav-tabs footer-nav" id="navigation">
                <li class="nav-item"><a class="navigationItem-footer nav-footer-active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="navigationItem-footer" href="facilities.php">Facilities</a></li>
                <li class="nav-item"><a class="navigationItem-footer" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="navigationItem-footer" href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="col-lg-3 responsive-footer-alignment primary-footer-padding">
            <span class="display-3 font-lightGrey">Address</span>
            <p class="font-lightGrey display-5">303, Trichy Road, Singanallur</p>
            <p class="font-lightGrey display-5">Coimbatore</p>
            <p class="font-lightGrey display-5">Tamil Nadu 641005</p>
        </div>
        <div class="col-lg-4 footer-phone-container  primary-footer-padding">
            <span class="font-gold  display-3"> For Bookings</span> 
            <p><a class="phoneNumber  display-2" href="tel:+918940401780">+91 8940401780</a></p>
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

    <!--Scripts that access body elements-->
    <script src="homeScript.js" type="text/javascript"></script>

</body>
</html>