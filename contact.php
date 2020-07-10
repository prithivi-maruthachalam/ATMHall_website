<?php
    //read JSON file for content
    $filePathForContent = "content/siteContent.json";
    $content = file_get_contents($filePathForContent);
    $siteData = json_decode($content,true);
    if(sizeof($siteData) <= 0){
        $filePathForContent = "content/siteContentBackup.json";
        $content = file_get_contents($filePathForContent);
        $siteData = json_decode($content,true);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--SEO meta tags-->
        <meta name="description" content="ATM Hall is located in main of singanallur. Easily accesible for peoples around Singanallur, Ondipudur, Sulur"/>
        <link rel="canonical" href="http://www.atmhall.in/contact.php" />
        
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php echo $siteData["website-short-description-for-SEO"]; ?>" />
        <meta property="og:description" content="<?php echo $siteData["description-for-SEO"]; ?>" />
        <meta property="og:url" content="http://www.atmhall.in/contact.php" />
        <meta property="og:site_name" content="ATM Hall" />
        <meta property="og:image" content="http://www.atmhall.in/content/branding/favicon.png" />
        
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="<?php echo $siteData["twitter-description-SEO"]; ?>" />
        <meta name="twitter:title" content="<?php echo $siteData["twitter-short-description-for-SEO"]; ?>" />
        <meta name="twitter:image" content="http://www.atmhall.in/content/branding/favicon.png" />

        <script type='application/ld+json' class='yoast-schema-graph yoast-schema-graph--main'>
            {
                "@context":"https://schema.org",
                "@graph":[
                    {
                        "@type":"Organization",
                        "@id":"http://www.atmhall.in/#organization",
                        "name":"",
                        "url":"http://www.atmhall.in/",
                        "sameAs":[]
                    },
                    {
                        "@type":"WebSite",
                        "@id":"http://www.atmhall.in/#website",
                        "url":"http://www.atmhall.in/","name":"ATM Hall","publisher":{"@id":"http://www.atmhall.in/#organization"},"potentialAction":{"@type":"SearchAction",
                        "target":"http://www.atmhall.in/?s={search_term_string}","query-input":"required name=search_term_string"}
                    },
                    {
                        "@type":"WebPage",
                        "@id":"http://www.atmhall.in/contact.php#webpage",
                        "url":"http://www.atmhall.in/contact.php/",
                        "inLanguage":"en-US",
                        "name":"Marriage Hall in Singanallur, Kalyana mandapam in Singanallur, Ondipudur, Sulur - ATM Hall Singanallur",
                        "isPartOf":{"@id":"http://www.atmhall.in/#website"},
                        "image":{"@type":"ImageObject","@id":"http://www.atmhall.in/contact.php#primaryimage","url":"http://www.atmhall.in/content/branding/favicon.png","width":10240,"height":10234},
                        "primaryImageOfPage":{"@id":"http://www.atmhall.in/contact.php#primaryimage"},
                        "datePublished":"2019-06-12T06:02:48+00:00",
                        "dateModified":"2019-09-17T06:53:24+00:00",
                        "description":"ATM Hall is located in main of singanallur. Easily accesible for peoples around Singanallur, Ondipudur, Sulur"
                    }
                ]
            }
        </script>
        <!--End of SEO meta tags-->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="contact_style.css">
        <link rel="stylesheet" href="static_styling.css">
        
        <title><?php echo $siteData["page-title-for-contact-page"]; ?></title>

        <link rel="icon" href="content/branding/favicon.png" type="image/png">
        <link href="https://fonts.googleapis.com/css2?family=Mukta+Malar:wght@700&display=swap" rel="stylesheet">
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
                    <span class="display-3-responsive font-lightGrey font-bold font-tamil">அஷ்டலட்சுமி திருமண மஹால்</span>
                </div>

                <div class="col-lg-6 text-center" role="navigation">
                    <div class="topBarSpacing"></div>
                    <span class="font-gold display-2 responsive-hide extra-mid-padding">For Booking</span>
                    <a class="contact-phone" href="tel:<?php echo $siteData["phone-number"];?>"><button class="btn-phone btn-top"><span class="glyphicon glyphicon-earphone"></span>&nbsp;<?php echo $siteData["phone-number"]; ?></button></a>

                    <div class="menu-container" onclick="collapseNav()">
                        <p>Menu <span class="glyphicon glyphicon-menu-hamburger"></p>
                    </div>
                    
                    <ul class="nav nav-tabs nav-justified nav-hide nav-negative-margin" id="navigationA">
                        <li class="nav-item"><a class="navigationItem" href="default.php">Home</a></li>
                        <li class="nav-item"><a class="navigationItem" href="facilities.php">Facilities</a></li>
                        <li class="nav-item"><a class="navigationItem" href="gallery.php">Gallery</a></li>
                        <li class="nav-item active"><a class="navigationItem" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <!--title for facilities-->
        <div class="container text-center page-title-text">
            <h1 class="display-1-5-responsive font-purple">Contact Us</h1>
        </div>

        <div class="container contact-major-content">
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7832.947736496372!2d77.042023!3d11.003029!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcecc3967269f254b!2sATM%20Hall%20-%20Ashtalakshmi%20Thirumana%20Mahal!5e0!3m2!1sen!2sin!4v1592675018416!5m2!1sen!2sin" 
                    width="100%" height="450" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
            <div class="col-lg-6">
                <div class="contact-info-container">
                    <div class="call-actions-container">
                        <span class="font-purple display-2-responsive">Call Us</span>
                        <p><a class="contact-phone" href="tel:<?php echo $siteData["phone-number"];?>"><button class="btn-phone btn-bottom"><span class="glyphicon glyphicon-earphone"></span>&nbsp;<?php echo $siteData["phone-number"]; ?></button></a></p>

                        <div class="additional-contact-container">
                            <div class="font-grey-lighter display-4-responsive">for Complaints &amp; Suggestions </div>
                            <div class="font-grey-lighter display-4-responsive"><?php echo $siteData["phone-number-for-complaints"]; ?></div>

                            <div class="font-grey-lighter display-4-responsive padding-top-2"><p>புகார்கள் மற்றும் பரிந்துரைகளுக்கு <?php echo $siteData["phone-number-for-complaints"]; ?> என்ற எண்ணில் அழைக்கவும்</p></div>
                        </div>
                    </div>

                    <div class="address-container">
                        <div class="font-grey display-3-responsive padding-bottom-2 padding-top-1">எங்களை பார்வையிட தயங்க வேண்டாம்</div>
                        <span class="font-purple display-2-responsive">Feel free to find us at</span>
                        <div class="display-3-6-responsive font-grey"><?php echo $siteData["address-line-1"]; ?></div>
                        <div class="display-3-6-responsive font-grey"><?php echo $siteData["address-line-2"]; ?></div>
                        <div class="display-3-6-responsive font-grey"><?php echo $siteData["address-line-3"]; ?></div>
                    </div>
                </div>
            </div>
        </div>


        <!--The footer-->
        <footer class="container-fluid footer-margin" id="primaryAccentBackground">
            <div class="col-lg-5 bottom-nav-container primary-footer-padding">
                <span class="font-lightGrey display-3-5-responsive title-nav-alignment-padding responsive-hide">Quick Links</span>
                <ul class="nav nav-tabs footer-nav" id="navigation">
                    <li class="nav-item"><a class="navigationItem-footer" href="default.php">Home</a></li>
                    <li class="nav-item"><a class="navigationItem-footer" href="facilities.php">Facilities</a></li>
                    <li class="nav-item"><a class="navigationItem-footer" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="navigationItem-footer nav-footer-active" href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 responsive-footer-alignment primary-footer-padding">
                <span class="display-3-responsive font-lightGrey">Address</span>
                <div class="font-lightGrey display-5"><?php echo $siteData["address-line-1"]; ?></div>
                <div class="font-lightGrey display-5"><?php echo $siteData["address-line-2"]; ?></div>
                <div class="font-lightGrey display-5"><?php echo $siteData["address-line-3"]; ?></div>
            </div>
            <div class="col-lg-4 footer-phone-container primary-footer-padding">
                <span class="font-gold display-3-responsive responsive-hide">For Booking</span> 
                <p class="padding-top-1"><a class="contact-phone" href="tel:<?php echo $siteData["phone-number"];?>"><button class="btn-phone btn-bottom"><span class="glyphicon glyphicon-earphone"></span>&nbsp;<?php echo $siteData["phone-number"]; ?></button></a></p>
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