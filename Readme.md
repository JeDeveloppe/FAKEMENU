# FAKEMENU
Training

***
## HELPER MISE EN PRODUCTION

### SE CONNECTER AU SERVEUR
    ssh...\
    password

### CE DEPLACER DANS LE DOSSIER OU L'ON VA METTRE LE PROJET
### CLONER LE DEPOT GITHUB (SOIT PUBLIC, SOIT CLEF PRIVEE)
    git clone ...

### CE DEPLACER DANS LE DOSSIER DU PROJET
    cd {nom du projet}

### INSTALLER COMPOSER DANS LE PROJET
    curl -sS https://getcomposer.org/installer

Cela permet d'utiliser la commande:  /usr/bin/php8.2-cli\
Exemple: /usr/bin/php8.2-cli bin/console d:m:m

### EN LOCAL PUIS TRANSFERT PAR FTP
    mettre fichier .env = PROD\
    transferer les dossiers .env ET .env.prod sur le serveur

### INSTALLER LES DEPENDANCES DU PROJET
    /usr/bin/php8.2-cli composer.phar install

### FAIRE TOURNER LES MIGRATIONS OU METTRE LA BDD EN PLACE
    /usr/bin/php8.2-cli bin/console d:m:m  

    /usr/bin/php8.2-cli bin/console d:s:u --force

### ON INITIALISE LE PROJET
    /usr/bin/php8.2-cli bin/console app:initdatabase1

### SI PROJET SYMFONY > À 6.4 ON COMPILE LES ASSETS
    /usr/bin/php8.2-cli bin/console asset-map:compile

### TRANSFERT PAR FTP ?
    dossier IMPORT ?\
    dossier PUBLIC ? 

### SUR HEBERGEUR
    faire pointer l'espace web sur le dossier public