<?php
    //getting images for carousel
    $carouselImagesDir = "content/carouselImages/";
    $carouselImageFiles = scandir($carouselImagesDir);
    $carouselImages = array();

    foreach($carouselImageFiles as $carouselImageFile){
        if($carouselImageFile == ".." || $carouselImageFile == "."){
            continue;
        }
        $carouselImage = array();
        $carouselImageURL = $carouselImagesDir.$carouselImageFile;
        array_push($carouselImage,$carouselImageURL);
        $altText = explode("_",$carouselImageURL)[1];
        array_push($carouselImage,explode(".",$altText)[0]);

        array_push($carouselImages,$carouselImage);
    }

    //for each $carouselImage
    //=> 0 is the image URL
    //=>1 is the alt text

    //getting images for featured images
    $featuredCardsDir = "content/featuredCardImages/";
    $featuredCardFiles = scandir($featuredCardsDir);
    $featuredCardImages = array();
    foreach($featuredCardFiles as $featuredCardFile){
        if($featuredCardFile == ".." || $featuredCardFile == "."){
            continue;
        }

        $featuredImage = array();
        $featuredImage = explode("_",$featuredCardsDir.$featuredCardFile);
        $featuredImage[0] = explode("/",$featuredImage[0])[2];
        $featuredImage[3] = explode(".",$featuredImage[3])[0];
        $featuredImage[4] = $featuredCardsDir.$featuredCardFile;

        array_push($featuredCardImages,$featuredImage);
    }

    //for each $featuredCardImages
    //=> 0 is the number
    //=> 1 is the head text
    //=> 2 is the additional secondary text
    //=> 3 is the alt text
    //=>4 is the image URL


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
        <meta name="description" content="<?php echo $siteData["description-for-SEO"]; ?>"/>
        <link rel="canonical" href="http://www.atmhall.in/" />

        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo $siteData["website-short-description-for-SEO"]; ?>" />
        <meta property="og:description" content="<?php echo $siteData["description-for-SEO"]; ?>" />
        <meta property="og:url" content="http://www.atmhall.in/" />
        <meta property="og:site_name" content="ATM Hall" />
        <meta property="og:image" content="http://www.atmhall.in/content/branding/favicon.png" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="<?php echo $siteData["twitter-description-SEO"]; ?>" />
        <meta name="twitter:title" content="<?php echo $siteData["twitter-short-description-for-SEO"]; ?>" />
        <meta name="twitter:image" content="http://www.atmhall.in/content/branding/favicon.png" />

        <script type='application/ld+json' class='yoast-schema-graph yoast-schema-graph--main'>
            {
                "@context":"https://schema.org",
                "@graph":
                    [
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
                            "url":"http://www.atmhall.in/",
                            "name":"ATM Hall",
                            "publisher":{"@id":"http://www.atmhall.in/#organization"},
                            "potentialAction":{"@type":"SearchAction","target":"http://www.atmhall.in/?s={search_term_string}","query-input":"required name=search_term_string"}
                        },
                        {
                            "@type":"WebPage",
                            "@id":"http://www.atmhall.in/#webpage",
                            "url":"http://www.atmhall.in/",
                            "inLanguage":"en-US",
                            "name":"Marriage Hall in Singanallur, Kalyana mandapam in Singanallur - ATM Hall Singanallur",
                            "isPartOf":{"@id":"http://www.atmhall.in/#website"},
                            "about":{"@id":"http://www.atmhall.in/#organization"},
                            "datePublished":"2019-06-12T06:02:23+00:00",
                            "dateModified":"2019-09-10T14:18:07+00:00",
                            "description":"Ashtalakshmi Thirumana Mahal in singanullar is simple and authentic wedding/party hall with competative rent. Located in heart of singanallur, Coimbatore"
                        }
                    ]
                }
        </script>
        <!--End of SEO meta tags-->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="home_style.css">
        <link rel="stylesheet" href="static_styling.css">

        <title><?php echo $siteData["page-title-for-home-page"]; ?></title>

        <link rel="icon" href="content/branding/favicon.png" type="image/png">
        <link href="https://fonts.googleapis.com/css2?family=Mukta+Malar:wght@700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    </head>

    <body>
        <?php require 'header.php'; ?>

        <div id="mainImagesCarousel" class="carousel">
            <!--The actual images go here-->
            <div class="carousel-inner">
                <?php
                    $index = 0;
                    while($index < sizeof($carouselImages) - 1){
                        echo '<div class="item">
                            <div class="carousel-images-row">
                                <div class="carousel-image-container col-md-6 col-xs-12">';
                                echo '<img src="'.$carouselImages[$index][0].'" class="img-responsive" alt="'.$carouselImages[$index][1].'">';
                                echo '</div>
                                <div class="carousel-image-container col-md-6 col-xs-12 conditional-display">';
                                echo '<img src="'.$carouselImages[$index+1][0].'" class="img-responsive" alt="'.$carouselImages[$index+1][1].'">';
                                echo '</div>
                            </div>
                        </div>

                        <div class="item carousel-alt-item">
                            <div class="carousel-images-row">
                                <div class="carousel-image-container col-xs-12">';
                                echo '<img src="'.$carouselImages[$index+1][0].'" class="img-responsive" alt="'.$carouselImages[$index+1][1].'">';
                                echo '</div>
                            </div>
                        </div>';

                        //then update the index
                        $index += 2;
                    }
                ?>
            </div>
        </div>


        <!--The welcome text part-->
        <div class="container main-content-container">
            <div class="col-md-6 content-text">
                <h2 class="display-2-responsive"><?php echo $siteData["main-title-grey-before"]." "; ?><span class="display-2-responsive font-purple"><?php echo $siteData["main-title-highlight"]." ";?></span><?php echo $siteData["main-title-grey-after"];?></h2>
                <p class="font-home-content1"><?php echo $siteData["main-content-body"];?></p>
            </div>

            <div class="col-md-6 mainContent2 content-text2 main-content-padding">
                <div class="container-fluid">
                    <?php
                        $featuredList = $siteData["featured-items"];
                        foreach($featuredList as $feature){
                            echo '<div class="container-fluid content-spacing-1">
                                <span class="display-2 font-purple">'.$feature["highlighted"].'</span>
                                <p class="font-home-content2">'.$feature["small-grey"].'</p>
                            </div>';
                        }
                    ?>
                </div>

            </div>
        </div>


        <!--Secondary main content text-->
        <div class="container secondary-content-container text-center">
            <div class="container">
                <hr class="hz-divider-major">
                <div class="display-2-responsive font-purple"><?php echo $siteData["secondary-content-title-line1"]; ?></div>
                <div class="display-2-responsive font-gold-darker"><?php echo $siteData["secondary-content-title-line2"]; ?></div>
                <p class="font-home-content2 secondary-content-padding"><?php echo $siteData["secondary-content-body"]; ?></p>
            </div>

            <!--Images for the main page - maybe used for link building-->
            <div class="container">
                <hr class="hz-divider-minor">
                <?php
                    foreach($featuredCardImages as $featuredCardImage){
                        echo '<div class="col-md-4 main-images-container">
                            <div class="card">
                                <img src="'.$featuredCardImage[4].'" alt="'.$featuredCardImage[3].'" class="img-responsive">
                                <div class="img-text-block">
                                    <span class="display-4 font-grey">'.$featuredCardImage[1].'</span>
                                    <p class="font-grey">'.$featuredCardImage[2].'</p>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>
        </div>

        <!--The button to link to gallery-->
        <div class="container-fluid text-center btn-container">
            <a href="gallery.php"><button class="btn btn-primary">View More Images</button></a>
        </div>

        <?php require 'footer.php'; ?>

        <script type="text/javascript">
            var navList = document.getElementById("navigationA");

            //carousel constants
            const carouselTiming = 6000;
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

                if(window.innerWidth < 992){
                    var currentImage = container.find('.current');
                    var currentIndex = currentImage.index();

                    var currentItem = currentImage.prop('classList');
                    if(currentItem.contains('carousel-alt-item')){
                        var height = currentImage.next('.item').prop('scrollHeight');
                        carousel.height(height);
                        currentImage.next('.item').addClass('current');
                        if(currentIndex + 2  == images.length || currentIndex + 1 == images.length){
                        var height = container.find('.item').first().prop('scrollHeight');
                        carousel.height(height);
                        container.find('.item').first().addClass('current');
                    }
                    }
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
                    var nextItem = currentImage.next('.item');
                    var classList = nextItem.prop('classList');
                    if(classList.contains('carousel-alt-item')){
                        nextItem = nextItem.next('.item');
                    }

                    var height = nextItem.prop('scrollHeight');
                    carousel.height(height);
                    nextItem.addClass('current');
                    if(currentIndex + 2  == images.length || currentIndex + 1 == images.length){
                        var height = container.find('.item').first().prop('scrollHeight');
                        carousel.height(height);
                        container.find('.item').first().addClass('current');
                    }
                } else {
                    var height = currentImage.next('.item').prop('scrollHeight');
                    carousel.height(height);
                    currentImage.next('.item').addClass('current');
                    if(currentIndex + 2  == images.length || currentIndex + 1 == images.length){
                        var height = container.find('.item').first().prop('scrollHeight');
                        carousel.height(height);
                        container.find('.item').first().addClass('current');
                    }
                }
            },carouselTiming);
        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140853074-1">
        </script>

        <!-- script to set active nav item -->
        <script type="text/javascript">
          var navItemList = document.getElementsByClassName("nav-item-home");
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
