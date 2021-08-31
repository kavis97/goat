
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style=" width:100%; height: 600px !important;">
    
    <?php
        for ($x = 1; $x <= 6; $x++) {
            $active = $x == 1 ? 'active' : ' ';      
            echo '<div class="carousel-item ' . ($active) . '">
                      <img class="d-block w-100" src="./img/carousel/' . $x . '.png" alt="Second slide">
                  </div>';
          }
    
    ?>

</div>
