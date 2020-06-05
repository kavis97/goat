<!doctype html>
<html lang="en">
<head>
<?php 
 $title = 'Mission';
 include './header.php' ?>
    
</head>
<body>
    <header id="mission" class="site-header-common">
        <?php 
           $isBGDark='bg-dark';
           $whoweareIsActive='active';
           $missionIsActive='active';
            include './nav.php' 
        ?>
        <?php 
            $imageAlt='Mission';
           $imageSrc='mission.png?1234';
           include './layout_header.php'
        ?>
        
    </header>

    <section id="page-mission" class="page-mission text-center py-5">
        <header class="vision-header container">
                <h2>Mission</h2>
                <p class="py-2">“Teach and Share the love of Christ in words, acts and thoughts towards everyone.”</p>
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