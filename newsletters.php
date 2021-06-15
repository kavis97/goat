<!doctype html>
<html lang="en">

<head>

<?php
 $title = 'News Letters';
include './header.php' ?>
    
</head>

<body>
    <header id="newsletters" class="site-header-common">

        <?php 
        $isBGDark='bg-dark';
        $fixedTop='fixed-top';
        $newslettersIsActive='active';
        include './nav.php' 
        ?>
        <?php 
            $imageAlt='News Letters';
           $imageSrc='newsletters.jpg?1234';
           include './layout_header.php'
        ?>
    </header>    
    
    
    <section id="page-newsletters" class="page-common page-newsletters">
        <header class="layout-newsletters container">
            <?php
                foreach (glob("./contents/newsletters/*.html") as $filename) {
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