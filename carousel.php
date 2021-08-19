
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style=" width:100%; height: 600px !important;">
    
    <?php
        function stringEndsWith($haystack,$needle) {
            $expectedPosition = strlen($haystack) - strlen($needle);
            return strripos($haystack, $needle, 0) === $expectedPosition;
        }
        foreach (glob("./img/carousel/*.png") as $i) {
            $active = stringEndsWith($i, '1.png') ? 'active' : '';        
            echo '<div class="carousel-item ' . ($active) . '">
                      <img class="d-block w-100" src="' . $i . '" alt="Second slide">
                  </div>';
        } 
    ?>

</div>
