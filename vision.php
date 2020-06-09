<!doctype html>
<html lang="en">

<head>

<?php
 $title = 'Vision, Mission and Values';
include './header.php' ?>
    
</head>

<body>
    <header id="vision" class="site-header-common">

        <?php 
        $isBGDark='bg-dark';
        $visionIsActive='active';
        include './nav.php' 
        ?>
        <?php 
            $imageAlt='Vision';
           $imageSrc='vision.png?1234';
           include './layout_header.php'
        ?>
    </header>    
    
    
    <section id="section-vision" class="section-vision">
        <header class="layout-vision container">
            <?php
                foreach (glob("./contents/vision/*.html") as $filename) {
                    $contentFile =$filename;
                    include './vision_content.php';
                }
            ?>
        </header>
    </section>

   <section>
       <?php include './footer.php' ?>
    </section>

</body>

</html>