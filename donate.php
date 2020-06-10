<!doctype html>
<html lang="en">

<head>

<?php
 $title = 'Donate';
include './header.php' ?>
    
</head>

<body>
    <header id="donate" class="site-header-common">

        <?php 
        $isBGDark='bg-dark';
        $donateIsActive='active';
        include './nav.php' 
        ?>
        <?php 
            $imageAlt='Donate';
           $imageSrc='donate.png?1234';
           include './layout_header.php'
        ?>
    </header>    
    
    
    <section id="section-donate" class="section-donate">
        <header class="layout-donate container">
            <?php
                foreach (glob("./contents/donate/*.html") as $filename) {
                    $contentFile =$filename;
                    include './donate_content.php';
                }
            ?>
        </header>
    </section>

   <section>
       <?php include './footer.php' ?>
    </section>

</body>

</html>