<!doctype html>
<html lang="en">

<head>
<?php 
        $title='Contact Us';
        include './header.php' 
        ?>
    
</head>

<body>
    <header id="home" class="site-header-common">

        <?php 
        $isBGDark='bg-dark';
        $ownershipIsActive='active';
        $contactusIsActive='active';
        include './nav.php' 
        ?>

    </header>    
    
    <section id="page-contactus" class="page-mission text-center py-5">
        <header class="vision-header container">
                <h2>Contact Us</h2>
                
                <div class="container">
                    <div class="row text-left">
                        <div class="col-sm">
                            <p>UK</p>
                            <p class="mb-2">Mobile <i class="fas fa-mobile-alt"></i> : 077 38 719 081</p>
                            <p class="mb-2">Email <i class="fas fa-envelope-square"></i> : newgraceschools@gmail.com</p>
                            <p class="mb-2">Website <i class="fas fa-globe"></i>  : www.newgracecommunity.com</p>

                            <p class="my-4">Address: </p>
                            <p class="mb-2">New Grace Community Ltd,</p>
                            <p class="mb-2"> 2 Jerome Court,</p>
                            <p class="mb-2">Northampton, Northamptonshire NN3 5GA, United Kingdom</p>

                        </div>
                    
                        <div class="col-sm">
                            <form>
                                <div class="form-group">
                                    <label for="nameLabel">Name</label>
                                    <input type="name" class="form-control" id="nameInput" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="emailLabel">Email</label>
                                    <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="msgLabel">Message</label>
                                    <textarea class="form-control" id="msgTextInput" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm text-left">
                            <p class="mb-1">In UK Registered in England and Wales: </p>
                            <p class="mb-1">Company number 11745983</p>
                            <p class="mb-1">Links International (Act4you): Charity Number – 1168872 Project Number – 3107</p>
                            <p class="mb-1">Prathyaasa Educational and Charitable Society, India: Charity number – T836</p>
                            </p>
                        </div>
                    </div>
                </div>  
                



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