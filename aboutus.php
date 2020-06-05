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
    
    <section id="page-aboutus" class="page-aboutus text-center py-5">
        <header class="vision-header container">
                <h2>Who are we?</h2>
                <p class="py-2">We are a Christian Charity to provide excellent mainstream education to all children. Despite their social status, economic status, religious state or race, we will be serving them to grow up as responsible citizens. </p>
        </header>
    </section>


   <section>
       <?php include './footer.php' ?>
    </section>

</body>

</html>