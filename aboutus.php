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
    
    <section id="section-aboutus" class="section-aboutus">
        <header class="layout-aboutus container">
            <div class="container py-4">   
                <div class="row text-left"> 
                    <div class="col-sm">
                        <!-- <h2>Who are we?</h2> -->
                        <!-- <p class="py-2">We are a Christian Charity to provide excellent mainstream education to all children. Despite their social status, economic status, religious state or race, we will be serving them to grow up as responsible citizens. </p> -->
                        <?php include './contents/page.aboutus.html' ?>
                    </div>
                </div>
            </div>
            <div class="container py-3">
                <div class="row text-left">
                    <div class="col-sm">
                        <?php include './contents/page.ownership.structure.html' ?>
                    </div>
                </div>
            </div>
            <div class="container py-3">
                <div class="row text-left">
                    <div class="col-sm">
                        <?php include './contents/page.company.history.html' ?>
                    </div>
                </div>
            </div>

            <div class="container py-3">
                <div class="row text-left">
                    <div class="col-sm">
                        <h2>Organisational Chart</h2>
                        <img class="img-fluid" src="./img/organisational_chart.png" >
                    </div>
                </div>
            </div>
        </header>
    </section>


   <section>
       <?php include './footer.php' ?>
    </section>

</body>

</html>