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
                    <a class="contact-phone" href="tel:<?php echo $siteData["phone-number"][0];?>"><button class="btn-phone btn-top"><span class="glyphicon glyphicon-earphone"></span>&nbsp;<?php echo $siteData["phone-number"][0]; ?></button></a>
                    <a class="contact-phone" href="tel:<?php echo $siteData["phone-number"][1];?>"><button class="btn-phone btn-top"><span class="glyphicon glyphicon-earphone"></span>&nbsp;<?php echo $siteData["phone-number"][1]; ?></button></a>

                    <div class="menu-container" onclick="collapseNav()">
                        <p>Menu <span class="glyphicon glyphicon-menu-hamburger"></p>
                    </div>
                    
                    <ul class="nav nav-tabs nav-justified nav-hide nav-negative-margin" id="navigationA">
                        <li class="nav-item nav-item-home"><a class="navigationItem" href="index.php">Home</a></li>
                        <li class="nav-item nav-item-facilities"><a class="navigationItem" href="facilities.php">Facilities</a></li>
                        <li class="nav-item nav-item-gallery"><a class="navigationItem" href="gallery.php">Gallery</a></li>
                        <li class="nav-item nav-item-contact"><a class="navigationItem" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </header>


