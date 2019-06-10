<?php
include_once './../src/setup.php';
include_once './layout/structure.php';

try {
	    $dbh = new PDO('mysql:host=127.0.0.1;dbname=plante', 'root', 'Jesus');
} catch (PDOException $e) {
	    print "Erreur !: " . $e->getMessage() . "<br/>";
	        die();
}



?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/index.php">Plante BDD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/Projet-Plante-connectee/public/index.php">Acceuil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/Projet-Plante-connectee/public/bdd.php">BDD<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/Projet-Plante-connectee/public/plante.php">Ma Plante<span class="sr-only">(current)</span></a>
      </li>

    </ul>
  </div>
</nav>
