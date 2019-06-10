nclude_once ('./../src/setup.php');


$take = $_POST['id'];

try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=plante', 'root', 'Jesus');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$req = $dbh->prepare('SELECT * FROM plante WHERE id=:id');
$req->execute(array(
    "id" => $take
));


?>

	<h5 class="card-header"><?php echo $array["id"];?> - <?php echo $array["name"]; ?></h5>
          <img style="" class="d-block w-100" src="<?php echo $array["picture_url"] ?>" alt="First slide">
          <h6 class="card-text" style="text-align:center; margin-top:10px;">Categorie : <?php $array["categorie"]; ?></h6>
          <p class="card-text" style="text-align:center; margin-top:10px;">Description : <?php $array["description"]; ?></p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Humydite : <?php $array["humydite"]; ?> %</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Temperature : <?php $array["temperature"]; ?> °C</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Luminosite : <?php $array["luminosite"]; ?> %</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Periode : <?php $array["periode"]; ?> semaine(s)</p>
