<!doctype html>
<html lang="en">

<head>
<?php 
$title = 'Vision';
include './header.php' ?>
    
</head>

<body class="vision-body">
    <header id="vision" class="site-header-common">
        <?php 
           $isBGDark='bg-dark';
           $whoweareIsActive='active';
           $visionIsActive='active';
            include './nav.php' 
        ?>
        <?php 
            $imageAlt='Vision';
           $imageSrc='home.png?1234';
           include './layout_header.php'
        ?>
    </header>

    <section id="page-vision" class="page-vision text-center py-5">
        <header class="vision-header container">
                <h2>Vision</h2>
                <p class="py-2">“To provide an excellent education to children rooted in Christian values from the Word of God.”</p>
        </header>
    </section>    
  
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