Cette application utilise le framework Laravel afin de gérer les apprenants de la DWM12(ajouter, supprimer, modifier, etc...). 
Du moins, ça aurait était le cas si j'avais travailler davantage ce framework.



Micro tuto pour utiliser l'application :

// Etape 1

1) Installer L.A.M.P avec PHP7.4 et les paquets suivants :
    'php7.4-zip'
    'zip'
    'php7.4-mbstring'
    'php7.4-dom'
    'libapache2-mod-php7.4'
    
2) Obtenir Composer
Une fois le composer.phar télécharger, il suffit de lancer la commande suivante :
// Permet de déplacer Composer dans un dossier qui permettra de l'utiliser depuis n'importe où, et on le renomme composer pour que ce soit plus pratique
'sudo mv composer.phar /usr/local/bin/composer'

Puis, pour installer le nécessaire à Laravel : 
composer create-project --prefer-dist laravel/laravel nomDuProjetQueVousVoulezCréer

// En cas d'erreur suivante : Cannot allocate memory, transormer :
  # config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
  #   vb.memory = "1024"
  # end

En :

config.vm.provider "virtualbox" do |vb|
#   # Display the VirtualBox GUI when booting the machine
#   vb.gui = true
#
#   # Customize the amount of memory on the VM:
 vb.memory = "2048"
end

Puis : 'vagrant reload'

// Une fois Laravel installé, faire ceci. Cela permettra lancer le fichier index.php situé dans le dossier 'public' et d'autoriser la réécriture d'URL.
'sudo nano /etc/apache2/sites-available/000-default.conf', puis ajouter en dessous de DocumentRoot :

	<Directory /var/www/html/votreNomDeDossier/public>
		Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        allow from all
	</Directory>
	
// En rechargeant la page, vous devriez avoir un joli 'permission denied'; il suffit de s'attribuer les droits, comme ceci :
'sudo nano /etc/apache2/envvars'
    Puis : Modifier les deux 'www-data' par 'vagrant'
    Puis : commande magique

// Félicitations, Laravel est lancé !

// Etape 2

// Pour pouvoir commencer à créer un sys de connexion :
'composer require laravel/ui'
'php artisan ui vue --auth'
    Puis commande magique
    
// Activer la réécriture d'URL : 
sudo a2enmod rewrite
    Puis commande magique
    
    

// Migrations
// Les migrations sont un moyen très rapide et puissant de pouvoir créer des tables et des colonnes (et même à créer des clefs étrangères ou des tables intermédiaires).

// Créer un fichier de migration (Ne crée pas la table à l'instant T) : 
php artisan make:migration create_movies_table

// Pour exécuter tous les fichiers de migration, permettant de créer les tables et les colonnes voulues :
php artisan migrate

// Pour supprimer toutes les tables et les recréer :
php artisan migrate:fresh


// Seeds
// Les seeds sont un moyen très rapide et très pratique d'ajouter du contenu dans nos tables et ainsi vérifier la pertinence de nos clefs étrangères, ainsi que des types.
php artisan make:seeder CreateMoviesSeeder

// Lancer tous les seeds :
php artisan db:seed


// Commande pour drop toutes les tables et les colonnes, les recréer puis seeder toutes les classes dans le DatabaseSeeder :
php artisan migrate:fresh --seed



