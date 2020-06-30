<?php
    $imagesDir = "content/galleryImages/";
    $subDirs = scandir($imagesDir);
    $totalImages = 0;

    //the final array for holding the 3 coloumns of images
    $imageObjectsList = array();
    
    //go through subfolder for each coloumn
    foreach($subDirs as $subDir){
        if($subDir == ".." || $subDir == "."){
            continue;
        }
        //getting the actual images in the folder
        $images = scandir($imagesDir.$subDir);
        //init arary for images in this sub-directory
        $imageObjects = array();

        foreach($images as $image){
            if($image == ".." || $image == "."){
                continue;
            } else {
                $imageObject = array();
                $imageURL = "".$imagesDir.$subDir."/".$image;
                $imageObject = explode("_",$imageURL);
                $imageObject[0] = (int)explode("/",$imageObject[0])[1];
                $imageObject[2] = explode(".",$imageObject[2])[0];
                $imageObject[3] = $imageURL;
                
                array_push($imageObjects,$imageObject);
            }
        }

        //sort the images array for the current sub-directory
        usort($imageObjects, function($a, $b) {
            return $a[0] <=> $b[0];
        });

        //add the images from the current sub-directory to the list of iamges for each coloumn
        array_push($imageObjectsList,$imageObjects);
    }
    //this is going to hold all our images
    
    //$imageObjectsList contains 3 lists, which are by themselves, lists of our image objects

    //each image object contains
    // 0 => number of the image to indicate order
    // 1 => description/tag for the image to be displayed on the card, under the image
    // 2 => alt text for the image - for SEO
    // 3 => the relative URL of the image 

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
        <meta name="description" content="ATM hall is a budget function hall in singanallur suitable for wedding receptions, birthday parties, small party, get together, banquet party"/>
        <link rel="canonical" href="http://www.atmhall.in/gallery.php" />

        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php echo $siteData["website-short-description-for-SEO"]; ?>" />
        <meta property="og:description" content="<?php echo $siteData["description-for-SEO"]; ?>" />
        <meta property="og:url" content="http://www.atmhall.in/gallery.php" />
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
                        "url":"http://www.atmhall.in/","sameAs":[]
                    },
                    {
                        "@type":"WebSite",
                        "@id":"http://www.atmhall.in/#website",
                        "url":"http://www.atmhall.in/",
                        "name":"ATM Hall",
                        "publisher":{"@id":"http://www.atmhall.in/#organization"},
                        "potentialAction":{"@type":"SearchAction","target":"http://www.atmhall.in/?s={search_term_string}","query-input":"required name=search_term_string"}
                    },
                    {
                        "@type":"WebPage",
                        "@id":"http://www.atmhall.in/gallery.php#webpage",
                        "url":"http://www.atmhall.in/gallery.php",
                        "inLanguage":"en-US",
                        "name":"Budget party halls in Singanallur, Coimbatore - ATM Hall Singanallur",
                        "isPartOf":{"@id":"http://www.atmhall.in/#website"},
                        "image":{"@type":"ImageObject","@id":"http://www.atmhall.in/gallery.php#primaryimage","url":"http://www.atmhall.in/content/branding/favicon.png","width":10240,"height":10234},
                        "primaryImageOfPage":{"@id":"http://www.atmhall.in/gallery.php#primaryimage"},
                        "datePublished":"2019-06-12T06:02:40+00:00",
                        "dateModified":"2019-09-16T06:34:58+00:00",
                        "description":"ATM hall is a budget function hall in singanallur suitable for wedding receptions, birthday parties, small party, get together, banquet party"
                    }
                ]
            }
        </script>
        <!--End of SEO meta tags-->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="gallery_style.css">
        <link rel="stylesheet" href="static_styling.css">
        
        <title><?php echo $siteData["page-title-for-gallery-page"]; ?></title>

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
                        <li class="nav-item"><a class="navigationItem" href="facilities.php">Facilities</a></li>
                        <li class="nav-item active"><a class="navigationItem" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="navigationItem" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <!--title for facilities-->
        <div class="container text-center page-title-text">
            <h1 class="display-1-5-responsive font-purple">Gallery</h1>
        </div>
        
        <!--The actual image content-->
        <div class="container main-images-container">
            <div class="gallery-flex-coloumn">
                <?php
                    foreach($imageObjectsList[0] as $imageObject){
                        echo '<div class="gallery-image-card">';
                            echo '<img src="'.$imageObject[3].'" class="img-responsive" alt="'.$imageObject[2].'">';
                            echo '<div class="gallery-img-tag-container text-center">';
                                echo '<span class="display-4">'.$imageObject[1].'</span>';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
            
            <div class="gallery-flex-coloumn">
                <?php
                    foreach($imageObjectsList[1] as $imageObject){
                        echo '<div class="gallery-image-card">';
                            echo '<img src="'.$imageObject[3].'" class="img-responsive" alt="'.$imageObject[2].'">';
                            echo '<div class="gallery-img-tag-container text-center">';
                                echo '<span class="display-4">'.$imageObject[1].'</span>';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>
            </div>

            <div class="gallery-flex-coloumn">
                <?php
                    foreach($imageObjectsList[2] as $imageObject){
                        echo '<div class="gallery-image-card">';
                            echo '<img src="'.$imageObject[3].'" class="img-responsive" alt="'.$imageObject[2].'">';
                            echo '<div class="gallery-img-tag-container text-center">';
                                echo '<span class="display-4">'.$imageObject[1].'</span>';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>

        <!--The footer-->
        <footer class="container-fluid footer-margin" id="primaryAccentBackground">
            <div class="col-lg-5 bottom-nav-container primary-footer-padding" id="bottom">
                <span class="font-lightGrey display-3-5-responsive title-nav-alignment-padding responsive-hide">Quick Links</span>
                <ul class="nav nav-tabs footer-nav" id="navigation">
                    <li class="nav-item"><a class="navigationItem-footer" href="default.php">Home</a></li>
                    <li class="nav-item"><a class="navigationItem-footer" href="facilities.php">Facilities</a></li>
                    <li class="nav-item"><a class="navigationItem-footer nav-footer-active" href="gallery.php">Gallery</a></li>
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

        <!--Flaoting action button to go up and down-->
        <div class="fab-group-container">
            <a href="#top">
                <div class="fab text-center" id="up-button">
                <img src="content/icons/icons8-thick-arrow-pointing-up-96.png" class="glyphicon move-icon">
                </div>
            </a>
            <a href="#bottom">
                <div class="fab text-right" id="down-button">
                    <img src="content/icons/icons8-thick-arrow-pointing-down-96.png" class="move-icon">
                </div>
            </a>
        </div>
        
        <!--Scripts that access body elements-->
        <script type="text/javascript">
            var upButton = document.getElementById("up-button");
            var downButton = document.getElementById("down-button");
            downButton.style.display = "block";

            window.onscroll = function() {
                scrollFunction();
            }

            function scrollFunction(){
                if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
                    upButton.style.display = "block";
                } else {
                    upButton.style.display = "none";
                }
                
                var bottomScroll = (document.documentElement.scrollHeight - document.documentElement.scrollTop);
                if(bottomScroll > 1470) {
                    downButton.style.display = "block";
                } else {
                    downButton.style.display = "none";
                }
            }

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