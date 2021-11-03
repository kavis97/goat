<!doctype html>
<html lang="en">

<head>
<?php 
        $title='Home';
        include './header.php' 
        ?>
    
</head>

<body class="page-index">
    
    <header id="home" class="section-header-home">
        <?php
            $homeIsActive='active';
            $isBGDark='bg-dark';
            include './nav.php' 
        ?>
    </header>
    <?php
        include './carousel.php' 
    ?>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <section id="section-aboutus" class="section-aboutus">
        <header class="layout-aboutus container">
            <div class="container py-3">   
                <div class="row text-left"> 
                    <div class="col-sm">
                        <h2>Who are we?</h2>
                        <!-- <p class="py-2">We are a Christian Charity to provide excellent mainstream education to all children. Despite their social status, economic status, religious state or race, we will be serving them to grow up as responsible citizens. </p> -->
                        <?php include './contents/index.aboutus.txt' ?>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row text-left">
                    <div class="col-sm">
                        <h2>Vision</h2>
                        <p class="py-2">“To provide an excellent education to children rooted in Christian values from the Word of God.”</p>
                    </div>
                </div>
                <div class="row text-left">
                    <div class="col-sm">
                        <section id="page-vision-video" class="page-mission text-center">
                            <header class="vision-header container">
                                <div class="container" style="margin-top: 1em;">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe src="https://www.youtube.com/embed/1Hczl5NFTQY?autoplay=0&rel=0" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            </header>
                        </section>
                    </div>
                    <div class="col-sm">
                        <section id="page-vision-video" class="page-mission text-center">
                            <header class="vision-header container">
                                <div class="container" style="margin-top: 1em;">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe src="https://www.youtube.com/embed/pXlXu78GR5I" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            </header>
                        </section>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row text-left">
                    <div class="col-sm">
                        <h2>Mission</h2>
                        <p class="py-2">“Teach and Share the love of Christ in words, acts and thoughts towards everyone.”</p>
                    </div>
                </div>
            </div>
        </header>
    </section>
    
    <section id="section-values" class="section-values text-center py-5">
        <header class="layout-values container">
            <h2>Values – A.R.I.S.E</h2>
            <div class="container py-5">
                <div class="row">
                    <div class="col-sm">
                        A - ccountability  - be accountable to oneself and each other for their words and actions ensuring that the vision is for God’s glory.
                    </div>
                    <div class="col-sm">
                        R - ooted in Jesus - always rely on the word of God and guidance of the Holy Spirit.
                    </div>
                    <div class="col-sm">
                        I - ntegrity - Act with integrity in all affairs. Admit mistakes, seek help when needed, ensure that we build ourselves and each other up.
                    </div>
                    <div class="col-sm">
                        S - ervant heart - Be ready to serve no matter what one’s position is in the organisation. Put the interests of others above oneself.
                    </div>
                    <div class="col-sm">
                        E - xcellent - always be excellent at everything. Display the perfection of Jesus in our lives.
                    </div>
                </div>
            </div>             
        </header>
    </section>
    
    
    <!-- <section id="page-" class="page-mission text-center py-5">
        <header class="vision-header container">
                <h2>Why Us</h2>
                <p class="py-2"></p>
        </header>
    </section> -->


   <section>
       <?php include './footer.php' ?>
    </section>

</body>

</html>