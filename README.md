# Projet-plante

## Prérequis
Vous devez avoir une raspberry pi 3 ( au moins ) et deux capteurs : un capteur DHT 11 et un capteur TSL2561.

En premier lieu vous devez avoir Raspbian d'installer sur la raspberry pi. Après ça vous devrez installer certain paquet
```
sudo apt-get install git-core build-essential python-dev libi2c-dev i2c-tools libffi-dev
sudo pip3 install smbus
sudo pip3 install cffi
sudo pip3 install Adafruit_DHT
```
## Branchement
![picture](/Programme/branchements.png)
Vous devez connecter vos capteurs comme sur le schéma

#### Le capteur TSL2561 
C'est un capteur numérique on doit connecter la broche Vin sur la broche 17 ( 3.3V )  de la raspberry pi. La broche GND sur la broche 25 ( GND ). La broche SDA sur la broche 3 ( GPIO 2 ) du raspberry pi et la broche SCL sur la broche 5 ( GPIO 3 ).
### Le capteur DHT 11
Pour le capteur DHT 11 vous devez brancher la broche gauche du DHT 11 sur la broche 7 du raspberry pi, la broche du millieu sur la broche 2 du raspberry pi et la broche de droite sur la broche 6 du raspberry pi


## Partie BDD

 - Creation de la BDD
 ![picture](/bdd.png)
 
 - Utilisation de la BDD en html css php
 ![picture](/accueil.png)
 
 `Sur la premiere page vous pouvez retrouver un slider qui regroupe chaque plantes avec leurs informations dessus `
 
 ![picture](/bdd1.png)
 ![picture](/bdd2.png)
 
 `Sur la deuxieme page grace au bouton modifier la bdd vous pouvez ajouter et modifier toutes les informations des plantes dans la bdd `
