<ul class="list-group">
    <?php

        $index =$_SESSION["choix"];

        $array = $data["plante"][$index];

        $_SESSION['newsession'] = $index;
    ?>
    <h1>HELLLO</h1>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="card carousel-inner">
        <div class="carousel-item active">
          <h5 class="card-header"><?php echo $array["id"];?> - <?php echo $array["name"]; ?></h5>
          <img style="" class="d-block w-100" src="<?php echo $array["picture_url"] ?>" alt="First slide">
          <h6 class="card-text" style="text-align:center; margin-top:10px;">Categorie : <?php echo $array["categorie"]; ?></h6>
          <p class="card-text" style="text-align:center; margin-top:10px;">Description : <?php echo $array["description"]; ?></p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Humydite : <?php echo $array["humydite"]; ?> %</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Temperature : <?php echo $array["temperature"]; ?> °C</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Luminosite : <?php echo $array["luminosite"]; ?> %</p>
	        <p class="card-text" style="text-align:center; margin-top:10px;">Periode : <?php echo $array["periode"]; ?> semaine(s)</p>
      </div>

    </div>
</ul>
<?php
    function precedent()
    {
      --$index;
    }

    function suivant()
    {
        echo "okok";
        ++$index;
        if ($index == 0) {
            $index = 30;
        }
    }

    if(array_key_exists('demo', $_POST)) {
        precedent();
    } elseif (array_key_exists('demo2', $_POST)) {
        suivant();
    }

?>
<script>
    function toogleProjetForm(id) {
        $('.projet-row-' + id).toggle();
        $('.form-projet-row-' + id).toggle();
    }
    function randBdd(array) {
        $array = $data["spawn"][rand(0, count($data["spawn"])-1)]
    }
</script>
