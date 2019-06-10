<ul class="list-group">
    <?php foreach ($data["plante"] as $projet): ?>
    <li style="list-style-type: none;" class="">
        <div class="card" style="padding:5px; margin-bottom:50px;">
            <h5 class="card-header"><?php echo $projet["id"];?> - <?php echo $projet["name"]; ?></h5>
            <div class="card-body">
                <a href="www.google.com">
                    <img class="img-fluid" src="<?php echo $projet["picture_url"] ?>" style="max-heigth: 100px;margin-left:1%;margin-right:auto;"><img>
                </a>
                <h6 class="card-text" style="text-align:center; margin-top:10px;">Categorie : <?php echo $projet["categorie"]; ?></h6>
                <p class="card-text" style="text-align:center; margin-top:10px;">Description : <?php echo $projet["description"]; ?></p>
                <p class="card-text" style="text-align:center; margin-top:10px;">Humydite : <?php echo $projet["humydite"]; ?> %</p>
                <p class="card-text" style="text-align:center; margin-top:10px;">Temperature : <?php echo $projet["temperature"]; ?> °C</p>
                <p class="card-text" style="text-align:center; margin-top:10px;">Luminosite : <?php echo $projet["luminosite"]; ?> %</p>
                <p class="card-text" style="text-align:center; margin-top:10px;">Periode : <?php echo $projet["periode"]; ?> semaine(s)</p>
                <a href="www.google.com" class="btn btn-primary" style="width:180px; margin-right:0%; margin-left:40%; margin-top:15px;">Lien</a>

            </div>
        </div>
    </li>
    <li style="list-style-type: none;" class="admin-mode <?php echo "form-projet-row-" . $projet["id"] ?>">
        <div class="card-body">
            <form action="/editProjet.php" method="post" class="form-inline">
                <input type="hidden" name="id" value= <?php echo $projet["id"]?> />
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <input placeholder="Titre" type="text" name="name" value="<?php echo $projet["name"]; ?>">
                        </div>
                        <div class="col-md-4">
                            <input placeholder="Categorie" type="text" name="categorie" value="<?php echo $projet["categorie"]; ?>">
                        </div>
                        <div class="col-md-3">
                            <input placeholder="Description" type="text" name="description" value="<?php echo $projet["description"]; ?>">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-4">
                            <input placeholder="Lien Photo" type="text" name="picture_url" value="<?php echo $projet["picture_url"]; ?>">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-4">
                            <input placeholder="Humydite" type="text" name="humydite" value="<?php echo $projet["humydite"]; ?>">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-3">
                            <input placeholder="Temperature" type="text" name="temperature" value="<?php echo $projet["temperature"]; ?>">
                        </div>
                        <div class="col-md-4">
                            <input placeholder="Luminosite" type="text" name="luminosite" value="<?php echo $projet["luminosite"]; ?>">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-4">
                            <input placeholder="Periode" type="text" name="periode" value="<?php echo $projet["periode"]; ?>">
                        </div>
                        <div style="margin-left: 30%;" class="col-md-2">
                            <button style="width: 100%;" class="btn btn-danger" type="submit" value="Ok">Ok</button>
                        </div>
                        <div class="col-md-2">
                            <button style="width: 100%;" class="btn btn-danger" type="button" value="Cancel" onclick="toogleProjetForm(<?php echo  $projet["id"] ?>)">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </li>
    <?php endforeach;?>
    <div class="card admin-mode" style="margin:10px; padding:5px;">
        <h6 class="card-header">Ajouter un projet</h6>
        <li class="list-group-item">
            <form action="/addProjet.php" method="post" class="form-inline">
                <div class="container" style="margin: 10px">
                    <div class="row">
                        <div class="col-md-6">
                            <input placeholder="Titre" type="text" name="name">
                        </div>
                        <div class="col-md-6">
                            <input placeholder="Categorie" type="text" name="categorie">
                        </div>
                        <div class="col-md-6">
                            <input placeholder="Description" type="text" name="description">
                        </div>
                        <div class="col-md-6">
                            <input placeholder="Lien Image" type="text" name="picture_url">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-6">
                            <input placeholder="Humydite" type="text" name="humydite">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-6">
                            <input placeholder="Temperature" type="text" name="temperature">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-6">
                            <input placeholder="Luminosite" type="text" name="luminosite">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-6">
                            <input placeholder="Periode" type="text" name="periode">
                        </div>
                        <div class="col-md-2">
                            <button style="margin-left:250%; margin-top:50px; width:200px" class="btn btn-danger" type="submit" value="Ok">Ok</button>
                        </div>
                    </div>
                </div>
            </form>
        </li>
    </div>
</ul>
<script>
    function toogleProjetForm(id) {
        $('.projet-row-' + id).toggle();
        $('.form-projet-row-' + id).toggle();
    }
</script>
