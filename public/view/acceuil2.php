<ul class="list-group">
    <?php

        $index =0;

        $array = $data["plante"][$index];

        $_SESSION['newsession'] = $index;
    ?>

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
	  <p class="card-text" style="text-align:center; margin-top:10px;">Humidité active : <?php echo $array["res_hum"]; ?></p>
	  <p class="card-text" style="text-align:center; margin-top:10px;">Luminosité active : <?php echo $array["res_lum"]; ?></p>
	  <p class="card-text" style="text-align:center; margin-top:10px;">Température active : <?php echo $array["res_temp"]; ?> </p>
		<form action="take.php" method="post">
		<input type="hidden" name="take_id" id="take_id" value="<?php $array["id"];?>">
		<input class="btn btn-primary col-sm" name="submit" type="submit" value="C'est ma plante">
		</form>
        </div>i
        <?php $i=1; ?>
        <?php foreach ($data["plante"] as $array): if ($i == 30)continue;?>
        <div class="carousel-item">
          <?php $array = $data["plante"][$i++]; ?>
          <h5 class="card-header"><?php echo $array["id"];?> - <?php echo $array["name"]; ?></h5>
          <img style="" class="d-block w-100" src="<?php echo $array["picture_url"] ?>" alt="First slide">
          <h6 class="card-text" style="text-align:center; margin-top:10px;">Categorie : <?php echo $array["categorie"]; ?></h6>
          <p class="card-text" style="text-align:center; margin-top:10px;">Description : <?php echo $array["description"]; ?></p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Humydite : <?php echo $array["humydite"]; ?> %</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Temperature : <?php echo $array["temperature"]; ?> °C</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Luminosite : <?php echo $array["luminosite"]; ?> %</p>
	  <p class="card-text" style="text-align:center; margin-top:10px;">Periode : <?php echo $array["periode"]; ?> semaine(s)</p>
	 <p class="card-text" style="text-align:center; margin-top:10px;">Humidité active : <?php echo $array["res_hum"]; ?></p>
	  <p class="card-text" style="text-align:center; margin-top:10px;">Luminosité active : <?php echo $array["res_lum"]; ?></p>
	  <p class="card-text" style="text-align:center; margin-top:10px;">Température active : <?php echo $array["res_temp"]; ?> </p>
	  	<form action="take.php" method="post">
		<input type="hidden" name="take_id" id="take_id" value="<?php $array["id"];?>">
		<input class="btn btn-primary col-sm" name="submit" type="submit" value="C'est ma plante">
		</form>
        </div>
        <?php endforeach;?>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
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
