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
        <meta name="description" content="ATM Hall in singanallur is a cheap and best marriage function hall with dinning, kitchen facilities, furniture, powerback, room facilities"/>
        <link rel="canonical" href="http://www.atmhall.in/facilities.php" />
        
        <meta property="og:locale" content="en_US" />   
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php echo $siteData["website-short-description-for-SEO"]; ?>" />
        <meta property="og:description" content="<?php echo $siteData["description-for-SEO"]; ?>" />
        <meta property="og:url" content="http://www.atmhall.in/facilities.php" />
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
                        "name":"","url":"http://www.atmhall.in/","sameAs":[]
                    },
                    {"
                        @type":"WebSite",
                        "@id":"http://www.atmhall.in/#website",
                        "url":"http://www.atmhall.in/",
                        "name":"ATM Hall",
                        "publisher":{"@id":"http://www.atmhall.in/#organization"},
                        "potentialAction":{"@type":"SearchAction","target":"http://www.atmhall.in/?s={search_term_string}",
                        "query-input":"required name=search_term_string"}
                    },
                    {
                        "@type":"WebPage",
                        "@id":"http://www.atmhall.in/facilities.php#webpage",
                        "url":"http://www.atmhall.in/facilities.php","inLanguage":"en-US","name":"Cheap and best marriage function halls in singanallur - ATM Hall Singanallur.",
                        "isPartOf":{"@id":"http://www.atmhall.in/#website"},
                        "image":{"@type":"ImageObject","@id":"http://www.atmhall.in/facilities.php#primaryimage","url":"http://www.atmhall.in/content/branding/favicon.png","width":10240,"height":10234},
                        "primaryImageOfPage":{"@id":"http://www.atmhall.in/facilities.php#primaryimage"},
                        "datePublished":"2019-06-12T06:02:33+00:00",
                        "dateModified":"2019-09-25T08:51:17+00:00",
                        "description":"ATM Hall in singanallur is a cheap and best marriage function hallwith dinning, kitchen facilities, furniture, powerback, room facilities"
                    }
                ]
            }
        </script>
        <!--End of SEO meta tags-->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="facilities_style.css">
        <link rel="stylesheet" href="static_styling.css">
        
        <title><?php echo $siteData["page-title-for-facilities-page"]; ?></title>

        <link rel="icon" href="content/branding/favicon.png" type="image/png">
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
                    <a class="contact-phone" href="tel:<?php echo $siteData["phone-number"];?>"><button class="btn-phone btn-top"><span class="glyphicon glyphicon-earphone"></span>&nbsp;<?php echo $siteData["phone-number"]; ?></button></a>

                    <div class="menu-container" onclick="collapseNav()">
                        <p>Menu <span class="glyphicon glyphicon-menu-hamburger"></p>
                    </div>
                    
                    <ul class="nav nav-tabs nav-justified nav-hide nav-negative-margin" id="navigationA">
                        <li class="nav-item"><a class="navigationItem" href="default.php">Home</a></li>
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
            <?php
                $featuredFacilities = $siteData["facilities-features"];
                foreach($featuredFacilities as $facility){
                    echo '<div class="col-lg-2 col-md-4 col-xs-6 feature-container">
                        <div class="feature-box">
                            <span class="display-feature-responsive font-lightGrey">'.$facility["feature"].'</span>
                        </div>
                    </div>';
                }
            ?>
        </div>
    
        <div class="container list-area-container">
            <?php
                $facilityGroups = $siteData["facilities-group"];
                foreach($facilityGroups as $facilityGroup){
                    echo '<div class="container-fluid list-container">
                            <div class="text-center container">
                                <div class="list-title-container"><h1 class="display-1-5-responsive-2">'.$facilityGroup["title"].'</h1></div>
                                <div class="list-container" id="spacing-facilities">';
                                foreach($facilityGroup["items"] as $facilityItem){
                                        echo '<div class="display-4-responsive facilities-item">'.$facilityItem["main-text"].'
                                            <span class="font-grey-lighter">&nbsp;'.$facilityItem["extra-text-optional"].'</span></div>';
                                }
                                
                                echo '</div>
                            </div>
                    </div>';
                }
            ?>
        </div>


        <!--The footer-->
        <footer class="container-fluid footer-margin" id="primaryAccentBackground">
            <div class="col-lg-5 bottom-nav-container primary-footer-padding">
                <span class="font-lightGrey display-3-5-responsive title-nav-alignment-padding responsive-hide">Quick Links</span>
                <ul class="nav nav-tabs footer-nav" id="navigation">
                    <li class="nav-item"><a class="navigationItem-footer" href="default.php">Home</a></li>
                    <li class="nav-item"><a class="navigationItem-footer nav-footer-active" href="facilities.php">Facilities</a></li>
                    <li class="nav-item"><a class="navigationItem-footer" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="navigationItem-footer" href="contact.php">Contact</a></li>
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