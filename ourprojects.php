<!doctype html>
<html lang="en">

<head>

<?php
 $title = 'Our Projects';
include './header.php' ?>
    
</head>

<body>
    <header id="ourprojects" class="site-header-common">

        <?php 
        $isBGDark='bg-dark';
        $ourprojectsIsActive='active';
        include './nav.php' 
        ?>
        <?php 
           $imageAlt='Our Projects';
           $imageSrc='vision.png?1234';
           include './layout_header.php'
        ?>
    </header>    
    
    
    <section id="section-ourprojects" class="section-ourprojects">
        <header class="layout-ourprojects container">
            <?php
                foreach (glob("./contents/ourprojects/*.html") as $filename) {
                    $contentFile =$filename;
                    include './ourprojects_content.php';
                }
            ?>
        </header>
    </section>

   <section>
       <?php include './footer.php' ?>
    </section>

</body>

</html>