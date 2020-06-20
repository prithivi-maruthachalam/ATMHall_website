<?php
    $imagesDir = "galleryImages/";
    $images = scandir($imagesDir);
    $totalImages = 0;
    
    //this is going to hold all our images
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
    //the next 3 lines split the images into three chunks to arrange them into three coloumns for the flexbox
    $chunkMaxSize = sizeof($imageObjects)/3;
    $chunkMaxSize = ceil ($chunkMaxSize);
    usort($imageObjects, function($a, $b) {
        return $a[0] <=> $b[0];
    });
    print_r($imageObjects);
    $imageObjectsList = array_chunk($imageObjects,$chunkMaxSize);
    
    //$imageObjectsList contains 3 lists, which are by themselves, lists of our image objects

    //each image object contains
    // 0 => number of the image to indicate order
    // 1 => description/tag for the image to be displayed on the card, under the image
    // 2 => alt text for the image - for SEO
    // 3 => the relative URL of the image 
?>