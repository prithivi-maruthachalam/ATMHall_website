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
        <?php require 'header.php'; ?>

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
                                echo '<span class="display-5">'.$imageObject[1].'</span>';
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
                                echo '<span class="display-5">'.$imageObject[1].'</span>';
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
                                echo '<span class="display-5">'.$imageObject[1].'</span>';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>

        <?php require 'footer.php'; ?>

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

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140853074-1">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-140853074-1');
        </script>

    </body>
</html>
