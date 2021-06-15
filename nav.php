<nav class="site-nav family-sans text-uppercase navbar navbar-expand-lg  navbar-dark <?php echo $isBGDark ?> <?php echo $fixedTop ?>">
            <div class="container-fluid">
                <!-- <div class=""> -->
                    <!-- <a class="navbar-brand" href="#">
                        <img src="img/5t.png" width="75" height="75" class="d-inline-block align-middle" alt="">
                    </a> -->
                    <span>Grace Community</span>
                <!-- </div> -->
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php echo $homeIsActive ?>">
                            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?php echo $newslettersIsActive ?>">
                            <a class="nav-link" href="newsletters.php">News Letters<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?php echo $whoweareIsActive ?>">
                            <a class="nav-link" href="aboutus.php">Who are we?<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?php echo $visionIsActive ?>">
                            <a class="nav-link" href="vision.php">Vision<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?php echo $ourprojectsIsActive ?>">
                            <a class="nav-link" href="ourprojects.php">Our projects<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?php echo $contactusIsActive ?>">
                            <a class="nav-link" href="contactus.php">Contact Us<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?php echo $donateIsActive ?>">
                            <a class="nav-link" href="donate.php">Donate<span class="sr-only">(current)</span></a>
                        </li>
                        <!-- <li class="nav-item <?php echo $ownershipIsActive ?> dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ownership & Structure
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item <?php echo $whyusIsActive ?>" href="whyus.php">Why Us</a>
                                <a class="dropdown-item <?php echo $contactusIsActive ?>" href="contactus.php">Contact Us</a>
                                <a class="dropdown-item <?php echo $supportusIsActive ?>" href="supportus.php">Support Us</a>
                            </div>
                        </li> -->
                        <li class="nav-item">
                            <div class="">
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="UBB4LFACER59L">
                                    <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button">
                                    <img alt="" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>
            
        </nav>