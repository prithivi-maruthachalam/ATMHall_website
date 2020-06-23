<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="facilities_style.css">
        <link rel="stylesheet" href="static_styling.css">
        
        <title>ATM Hall | Facilities</title>

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
                        <li class="nav-item"><a class="navigationItem" href="index.php">Home</a></li>
                        <li class="nav-item active"><a class="navigationItem" href="facilities.php">Facilities</a></li>
                        <li class="nav-item"><a class="navigationItem" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="navigationItem" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <!--title for facilities-->
        <div class="container text-center page-title-text">
            <h1 class="display-1-5-responsive font-purple">Facilities</h1>
        </div>

        <!--featured facilities-->
        <div class="container text-center features-outer-container">
            <div class="col-lg-2 col-md-4 col-xs-6 feature-container">
                <div class="feature-box">
                    <span class="display-feature-responsive font-lightGrey">150+ seats in Main Hall</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 feature-container">
                <div class="feature-box">
                    <span class="display-feature-responsive font-lightGrey">90+ Seats in Dining Hall</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 feature-container">
                <div class="feature-box">
                    <span class="display-feature-responsive font-lightGrey">Air Cooled</span>
                </div>
            </div>
        
            <div class="clearfix visible-md-block"></div>
            
            <div class="col-lg-2 col-md-4 col-xs-6 feature-container">
                <div class="feature-box">
                    <span class="display-feature-responsive font-lightGrey">Kitchen with complimentary vessels</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 feature-container">
                <div class="feature-box">
                    <span class="display-feature-responsive font-lightGrey">Generator Power Backup</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 feature-container">
                <div class="feature-box">
                    <span class="display-feature-responsive font-lightGrey">Complimentary Tables &#38; Chains</span>
                </div>
            </div>
        </div>
    
        <div class="container list-area-container">
            <div class="container-fluid list-container">
                    <div class="text-center container">
                        <div class="list-title-container"><h1 class="display-1-5-responsive-2">Space &#38; Capacity</h1></div>
                        <div class="list-container" id="spacing-facilities">
                            <div class="display-4-responsive facilities-item"> Main hall has <mark>seating</mark> facility of <mark>150</mark></div>
                            <div class="display-4-responsive facilities-item"> <mark>Dining</mark> can accomodate <mark>90 people</mark> </div>
                            <div class="display-4-responsive facilities-item"> <mark>Welcome Area</mark> can take <mark> 50 </mark> persons.</div>
                            <div class="display-4-responsive facilities-item"> There are <mark>air-conditioned rooms</mark> <span class="font-grey-lighter"> &nbsp; These rooms can also be used as Bride &#038; Groom rooms</span> </div>
                            <div class="display-4-responsive facilities-item"> A <mark>kitchen</mark> is <mark>attached</mark> to the facility  <span class="font-grey-lighter">&nbsp; Catering from outside also allowed</span></div>
                        </div>
                    </div>
            </div>
            <div class="container-fluid list-container">
                <div class="text-center container">
                    <div class="list-title-container"><h1 class="display-1-5-responsive-2">Just for You</h1></div>
                    <div class="list-container">
                        <div class="display-4-responsive facilities-item">The main hall is <mark>air cooled</mark> with tent cooler</div>
                        <div class="display-4-responsive facilities-item">Power backup is available with a <mark>modern generator</mark></div>
                        <div class="display-4-responsive facilities-item">Furniture like <mark>chairs</mark>, <mark>dining</mark> &amp; <mark>tables</mark> are free for you</div>
                        <div class="display-4-responsive facilities-item">Also <mark>vessels</mark> for cooking and serving are also <mark> free for use</mark></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid list-container">
                <div class="text-center container">
                    <div class="list-title-container"><h1 class="display-1-5-responsive-2">Here to Help</h1></div>
                    <div class="list-container">
                        <div class="display-4-responsive facilities-item"><mark>Back drops</mark> can be arranged at reasonable rates <span class="font-grey-lighter">&nbsp;You can make your own arrangements too</span></div>
                        <div class="display-4-responsive facilities-item">Also people for <mark>mangala vaadhyam</mark>, <mark>catering</mark>, <mark>photography</mark> and other things can be referred at reasonable rates.</div>
                        <div class="display-4-responsive facilities-item"><mark>Audio-Video system</mark> and <mark>projector</mark> is also available at nominal cost.</div>
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
                    <li class="nav-item"><a class="navigationItem-footer nav-footer-active" href="facilities.php">Facilities</a></li>
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
            const navList = document.getElementById("navigationA");
            const featureBoxList = document.getElementsByClassName("feature-box");

            if(window.innerWidth < 986){
                    var maxHeight = 0;
                    for(var i=0;i<featureBoxList.length;i++){
                        var currentHeight = featureBoxList[i].offsetHeight;
                        if(currentHeight > maxHeight){
                            maxHeight = currentHeight;
                        }
                    }
                    console.log(maxHeight + 'px');

                    //setting the greatest height value to all elements
                    for(var i=0;i<featureBoxList.length;i++){
                        featureBoxList[i].style.height = maxHeight+'px';
                    }
                }

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