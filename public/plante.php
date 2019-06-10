<?php
include_once './../src/setup.php';
include_once './layout/structure.php';
session_start();
try {
	    $dbh = new PDO('mysql:host=127.0.0.1;dbname=plante', 'root', 'Jesus');
} catch (PDOException $e) {
	    print "Erreur !: " . $e->getMessage() . "<br/>";
	        die();
}


$planteRepository = new \Plante\PlanteRepository($dbh);
$plante = $planteRepository->fetchAll();
$plante["plante"] = $plante;
loadStructure('./view/maPlante.php', 'maPlante', $plante);
