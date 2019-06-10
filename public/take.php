<?php

include_once ('./../src/setup.php');


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

header('Location: plante.php');
exit();

?>
