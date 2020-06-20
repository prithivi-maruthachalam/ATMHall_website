<?php
    $imagesDir = "galleryImages/";
    $images = scandir($imagesDir);
    $totalImages = 0;
    
    $imageObjects = array();
    
    foreach($images as $image){
        if($image == ".." || $image == "."){
            continue;
        } else {
            $imageObject = array();
            $imageURL = "".$imagesDir.$image;
            $imageObject = explode("_",$imageURL);
            $imageObject[0] = (int)explode("/",$imageObject[0])[1];
            $imageObject[2] = explode(".",$imageObject[2])[0];
            $imageObject[3] = $imageURL;
    
            array_push($imageObjects,$imageObject);
        }
    }

    //$imageObjects is the colelction of images
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="gallery_style.css">
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
                    <li class="nav-item"><a class="navigationItem" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="navigationItem" href="facilities.php">Facilities</a></li>
                    <li class="nav-item active"><a class="navigationItem" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="navigationItem" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!--title for facilities-->
    <div class="container text-center page-title-text">
        <h1 class="display-1-5 font-purple">Gallery</h1>
    </div>
    
    <!--The actual image content-->
    <div class="container main-images-container">
        <?php
            foreach($imageObjects as $imageObject){
                echo '<div class="col-lg-4 col-sm-6 col-xs-12">';
                    echo '<div class="gallery-image-card">';
                        echo '<img src="'.$imageObject[3].'" class="img-responsive" alt="'.$imageObject[2].'">';
                        echo '<div class="gallery-img-tag-container text-center">';
                            echo '<span class="display-4">'.$imageObject[1].'</span>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        ?>
    </div>

    <!-- The footer-->
    <footer class="container-fluid footer-margin" id="primaryAccentBackground">
        <div class="col-lg-5 bottom-nav-container  primary-footer-padding">
            <span class="font-lightGrey display-3 title-nav-alignment-padding">Quick Links</span>

            <ul class="nav nav-tabs footer-nav" id="navigation">
                <li class="nav-item"><a class="navigationItem-footer" href="index.php">Home</a></li>
                <li class="nav-item"><a class="navigationItem-footer" href="facilities.php">Facilities</a></li>
                <li class="nav-item"><a class="navigationItem-footer nav-footer-active" href="gallery.php">Gallery</a></li>
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