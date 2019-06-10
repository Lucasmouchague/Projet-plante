<ul class="list-group">
			
			 <script src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
    <?php

        if ($_POST["id"] !== null) {
          $index = $_POST["id"];
        } else {
          $index = 0;
        }

        if ($index <= 0) {
          $index = 1;
        }

        $array = $data["plante"][$index-1];
	$req = $dbh->prepare('SELECT res_hum, res_lum, res_temp FROM capteur ORDER BY heure desc');
	$req->execute();
	$idk = $req->fetch();
        $_SESSION['newsession'] = $index;
    ?>
<meta http-equiv="refresh" content="30;URL=http://florianleveil.hopto.org/Projet-Plante-connectee/public/plante.php">

<form id="jeso" method="post">
<select id="myselect">
<?php foreach($data["plante"] as $array) { ?>
<option value="<?php echo $array["id"] ?>"><?php echo  $array["name"]; ?></option>
    <?php } ?>
</select>
</form>
     

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="card carousel-inner">
        <div class="carousel-item active">
          <h5 class="card-header"><?php $_POST['jeso']; ?></h5>
          <img style="" class="d-block w-100" src="<?php echo $array["picture_url"] ?>" alt="First slide">
          <h6 class="card-text" style="text-align:center; margin-top:10px;">Categorie : <?php echo $array["categorie"]; ?></h6>
          <p class="card-text" style="text-align:center; margin-top:10px;">Description : <?php echo $array["description"]; ?></p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Humydite : <?php echo $array["humydite"]; ?> %</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Temperature : <?php echo $array["temperature"]; ?> °C</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Luminosite : <?php echo $array["luminosite"]; ?> %</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Periode : <?php echo $array["periode"]; ?> semaine(s)</p>
	  	  
          <p class="card-text" style="text-align:center; margin-top:10px;">Humidité Active : <?php echo $idk["res_hum"]; ?></p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Luminosité Active : <?php echo $idk["res_lum"]; ?></p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Température Active : <?php echo $idk["res_temp"]; ?></p>
        </div>
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
<script src="view/script.js"></script>
<script>
    function toogleProjetForm(id) {
        $('.projet-row-' + id).toggle();
        $('.form-projet-row-' + id).toggle();
    }
    function randBdd(array) {
        $array = $data["spawn"][rand(0, count($data["spawn"])-1)]
    }
</script>
