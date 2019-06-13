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
## Partie Serveur / Page MaPlante.php
### - Création d'un serveur LAMP:
APACHE:
```
sudo apt install apache2

sudo chown -R pi:www-data /var/www/html/
sudo chmod -R 770 /var/www/html/
```
PHP:
```
sudo apt install php php-mbstring
```
MySQL:
```

sudo apt install mysql-server php-mysq

lsudo mysql --user=root

DROP USER 'root'@'localhost';
CREATE USER 'root'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost’;
```
PhpMyAdmin:
```
sudo apt install phpmyadmin

sudo phpenmod mysqli
sudo /etc/init.d/apache2 restart

sudo ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin
```
### Redirection de port:
 ![picture](/port.png)
### DYNDNS:
 ![picture](/dyndns.png)
## Page MaPlante.php:
### MCD:
 ![picture](/mcd.png)
### La page web:
Vous selectionez vôtre plante sur la page d'acceuille, ensuite aller sur la page 'Ma Plante'.
Sur cette page si vous allez pouvoir voire vôtre plante séléctionné au préalable + la valeur des capteurs en directe, actualisé toute les 30 secondes.

 ![picture](/mcd.png)






