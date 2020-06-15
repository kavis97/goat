<!doctype html>
<html lang="en">

<head>

<?php
 $title = 'About Us';
include './header.php' ?>
    
</head>

<body>
    <header id="aboutus" class="site-header-common">

        <?php 
        $isBGDark='bg-dark';
        $whoweareIsActive='active';
        $aboutusIsActive='active';
        include './nav.php' 
        ?>
        <?php 
            $imageAlt='About Us';
           $imageSrc='aboutus.png?1234';
           include './layout_header.php'
        ?>
    </header>    
    
    
    <section id="page-aboutus" class="page-common page-aboutus">
        <header class="layout-aboutus container">
            <?php
                foreach (glob("./contents/aboutus/*.html") as $filename) {
                    $contentFile =$filename;
                    include './content.php';
                }
            ?>
        </header>
    </section>

   <section>
       <?php include './footer.php' ?>
    </section>

</body>

</html>