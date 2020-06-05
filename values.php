<!doctype html>
<html lang="en">

<head>
<?php 
  $title = 'Values';
  include './header.php' ?>
     
</head>

<body>
<header id="values" class="site-header-common">

        <?php 
        $isBGDark='bg-dark';
        $whoweareIsActive='active';
        $aboutusIsActive='active';
        include './nav.php' 
        ?>
        <?php 
            $imageAlt='Values';
           $imageSrc='values.png?1234';
           include './layout_header.php'
        ?>
    </header> 

    <section id="page-values" class="page-values text-center py-5">
        <header class="vision-header container">
                <h2>Values – A.R.I.S.E</h2>
                    <p class="py-2">A - ccountability  - be accountable to oneself and each other for their words and actions ensuring that the vision is for God’s glory. </p>
                    <p>R - ooted in Jesus - always rely on the word of God and guidance of the Holy Spirit</p>
                    <p>I - ntegrity - Act with integrity in all affairs. Admit mistakes, seek help when needed, ensure that we build ourselves and each other up.</p>
                    <p>S - ervant heart - Be ready to serve no matter what one’s position is in the organisation. Put the interests of others above oneself.</p>
                    <p>E - xcellent - always be excellent at everything. Display the perfection of Jesus in our lives.</p>
                    
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