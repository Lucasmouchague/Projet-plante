<?php

namespace Plante;

class PlanteRepository {

    private $dbh = null;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function fetchAll() {
        $stmt = $this->dbh->prepare('SELECT * from plante');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert(array $data ) {
        try {
            $stmt = $this->dbh->prepare('INSERT INTO plante (name, categorie, description, picture_url, humydite, temperature, luminosite, periode) VALUES (:name, :categorie, :description, :picture_url, :humydite, :temperature, :luminosite, :periode)');
            $stmt->bindParam(':name', $data["name"]);
            $stmt->bindParam(':categorie', $data["categorie"]);
            $stmt->bindParam(':description', $data["description"]);
            $stmt->bindParam(':picture_url', $data["picture_url"]);
            $stmt->bindParam(':humydite', $data["humydite"]);
            $stmt->bindParam(':temperature', $data["temperature"]);
            $stmt->bindParam(':luminosite', $data["luminosite"]);
            $stmt->bindParam(':periode', $data["periode"]);
            $stmt->execute();

        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }

    public function update(array $data) {
        try {
            $stmt = $this->dbh->prepare('UPDATE plante SET name = " '.$_POST['name'].' " WHERE id= " '.$_POST['id'].' "');
            $stmt->execute();
            $stmt = $this->dbh->prepare('UPDATE plante SET categorie = " '.$_POST['categorie'].' " WHERE id= " '.$_POST['id'].' "');
            $stmt->execute();
            $stmt = $this->dbh->prepare('UPDATE plante SET description = " '.$_POST['description'].' " WHERE id= " '.$_POST['id'].' "');
            $stmt->execute();
            $stmt = $this->dbh->prepare('UPDATE plante SET picture_url = " '.$_POST['picture_url'].' " WHERE id= " '.$_POST['id'].' "');
            $stmt->execute();
            $stmt = $this->dbh->prepare('UPDATE plante SET humydite = " '.$_POST['humydite'].' " WHERE id= " '.$_POST['id'].' "');
            $stmt->execute();
            $stmt = $this->dbh->prepare('UPDATE plante SET temperature = " '.$_POST['temperature'].' " WHERE id= " '.$_POST['id'].' "');
            $stmt->execute();
            $stmt = $this->dbh->prepare('UPDATE plante SET luminosite = " '.$_POST['luminosite'].' " WHERE id= " '.$_POST['id'].' "');
            $stmt->execute();
            $stmt = $this->dbh->prepare('UPDATE plante SET periode = " '.$_POST['periode'].' " WHERE id= " '.$_POST['id'].' "');
            $stmt->execute();
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }
}
