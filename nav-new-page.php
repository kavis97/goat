<nav class="site-nav family-sans text-uppercase navbar navbar-expand-lg  navbar-dark <?php echo $isBGDark ?>">
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
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?php echo $whoweareIsActive ?>">
                            <a class="nav-link" href="aboutus.php">Who are we? <span class="sr-only">(current)</span></a>
                        </li>
                         <!-- <li class="nav-item <?php echo $whoweareIsActive ?> dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Who are we?
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item <?php echo $aboutusIsActive ?>" href="aboutus.php">About Us</a>
                                <a class="dropdown-item <?php echo $visionIsActive ?>" href="vision.php">Vision</a>
                                <a class="dropdown-item <?php echo $missionIsActive ?>" href="mission.php">Mission</a>
                                <a class="dropdown-item  <?php echo $valuesIsActive ?>" href="values.php">Values</a>
                            </div>
                        </li> -->
                        <li class="nav-item <?php echo $ownershipIsActive ?> dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ownership & Structure
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item <?php echo $whyusIsActive ?>" href="whyus.php">Why Us</a>
                                <a class="dropdown-item <?php echo $contactusIsActive ?>" href="contactus.php">Contact Us</a>
                                <a class="dropdown-item <?php echo $supportusIsActive ?>" href="supportus.php">Support Us</a>
                            </div>
                        </li>
                        <li class="nav-item <?php echo $blogIsActive ?> dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Blog
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item <?php echo $partnersIsActive ?>" href="partners.php">Partners</a>
                                <a class="dropdown-item <?php echo $financingIsActive ?>" href="financing.php">Financing</a>
                            </div>
                        </li>
                        <li class="nav-item <?php echo $teamIsActive ?> dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Team
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item <?php echo $managementIsActive ?>" href="management.php">Management</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Social
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="https://www.facebook.com/groups/119717914736830/" target="_blank">
                                    <i class="fab fa-facebook"></i> Facebook
                                </a>
                                <a class="dropdown-item" href="https://twitter.com/NewGraceCommun1" target="_blank">
                                    <i class="fab fa-twitter"></i> Twitter</a>
                                <a class="dropdown-item" href="https://www.youtube.com/channel/UCvu1WHgUQZIy0JxTCRtQbSg" target="_blank">
                                    <i class="fab fa-youtube"></i> Youtube
                                </a>
                            </div>
                        </li>
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