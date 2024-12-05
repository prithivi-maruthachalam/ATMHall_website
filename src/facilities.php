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
        <link href="https://fonts.googleapis.com/css2?family=Mukta+Malar:wght@700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    </head>

    <body>

        <?php require 'header.php'; ?>

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


        <?php require 'footer.php'; ?>

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
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140853074-1">
        </script>

        <!-- script to set active nav item -->
        <script type="text/javascript">
          var navItemList = document.getElementsByClassName("nav-item-facilities");
          navItemList[0].classList.add("active"); // header
          navItemList[1].getElementsByClassName("navigationItem-footer")[0].classList.add("nav-footer-active"); // footer
        </script>

        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-140853074-1');
        </script>

    </body>
</html>
