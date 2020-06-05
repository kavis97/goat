<!doctype html>
<html lang="en">

<head>
<?php 
        $title='Management';
        include './header.php' 
        ?>
    
</head>

<body>
    <header id="home" class="site-header-home">

        <?php 
        $isBGDark='bg-dark';
        $teamIsActive='active';
        $managementIsActive='active';
        include './nav.php' 
        ?>

    </header>    
    <section id="page-management" class="page-mission text-center py-5">
        <header class="vision-header container">
            <h2>Team</h2>
            <img src="img/management.png" >
        </header>
    </section>   
    <!-- <section id="page-" class="page-mission text-center py-5">
        <header class="vision-header container">
                <h2></h2>
                <p class="py-2"></p>
        </header>
    </section> -->


   <section>
       <?php include './footer.php' ?>
    </section>

</body>

</html>