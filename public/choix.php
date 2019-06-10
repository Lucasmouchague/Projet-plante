<?php
include_once ('./../src/setup.php');
try {
	    $dbh = new PDO('mysql:host=127.0.0.1;dbname=plante', 'root', 'Jesus');
} catch (PDOException $e) {
	    print "Erreur !: " . $e->getMessage() . "<br/>";
	        die();
}


$data = [
  "name" => $_POST["name"],
  "categorie" => $_POST['categorie'] ?: null,
  "description" => $_POST['description'] ?: null,
  "picture_url" => $_POST['picture_url'] ?: null,
  "humydite" => $_POST["humydite"] ? intval($_POST["humydite"], 10) : null,
  "temperature" => $_POST["temperature"] ? intval($_POST["temperature"], 10) : null,
  "luminosite" => $_POST["luminosite"] ? intval($_POST["luminosite"], 10) : null,
  "periode" => $_POST["periode"] ? intval($_POST["periode"], 10) : null,
];

$projetRepository = new \Plante\PlanteRepository($dbh);

if (null !== $data["name"] &&  null !== $data["categorie"] &&  null !== $data["description"] &&  null !== $data["picture_url"] &&  null !== $data["humydite"] &&  null !== $data["temperature"] &&  null !== $data["luminosite"]
&& null !== $data["periode"]) {
    $projetRepository->insert($data);
}
