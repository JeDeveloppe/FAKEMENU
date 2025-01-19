# FAKEMENU
For fun and training only, fake restaurant menu.

## DEPLOYER EN LOCAL

### CLONER LE REPO
    git clone https://github.com/JeDeveloppe/FAKEMENU.git


### OUVRIR LE PROJET ET RENSEIGNER LES VARIABLES DANS LE .ENV
    database, admin, etc...

### INSTALLER LES DEPENDANCES
    composer install

### CREER LA BASE DE DONNEE
    symfony console d:c:d

### METTRE A JOUR LE SCHEMA DE LA BDD
    symfony console d:s:u --force


### INITIALISER AVEC DES DONNEES FICTIVES
    symfony console d:f:l

### CREER L'UTILISATEUR ADMIN POUR LE BACK_END
    symfony console app:initdatabase