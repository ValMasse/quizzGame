***** QUIZZGAME 2021 *****

Bienvenue sur le projet 'Quizz game - Full-stack Symfony ' 

Afin de pouvoir utiliser le projet sur votre machine, il sera préalablement nécessaire d'avoir déjà installé WAMP/LAMP/MAMP, d'utiliser par exemple phpMyAdmin, et donc PHP et MySql.

Veuillez trouver ci-dessous les étapes à suivre afin de pouvoir utiliser ce projet sur votre propre machine :

1°) dé-zipper le dossier quizzGame

2°) Ouvrir le dossier avec votre éditeur de code.

3°) Copiez-collez le fichier '.env', le renommer en tant que '.env.local' et modifier les informations concernant votre système de gestion de base de données (par exemple, entre votre identifiant de PhpMyAdmin, votre mot de passe si vous en avez un, ainsi que votre numéro de port lié à votre base MySql ou MariaDB).

exemple ==> " DATABASE_URL=mysql://root:@127.0.0.1:3308/quizzGame?serverVersion=5.7 "

4°) via la console de votre IDE, veuillez taper la commande suivante : composer install

5°) Il faudra par le suite créer la base de donnée avec les commandes suivantes :

php bin/console doctrine:database:create

php bin/console make:migartion

php bin/console doctrine:migrations:migrate

-> afin de créer les données d'exemples(Fixtures), veuillez taper la ligne suivante:

php bin/console doctrine:fixtures:load

---> Vous pouvez dorénavant accéder au contenu de la base de données sur PhpMyAdmin !

6°) afin de lancer le serveur Symfony, veuillez taper:

symfony server:start

--> Vous pouvez directement cliquer sur le lien 'http://127.0.0.1:8000' qui s'affiche en bas de la console pour accéder directement au projet depuis votre navigateur !!

7°) Si touefois vous avez un problème/ une erreur concernant la base de données :

Veuillez effacer le fichier de migration qui se trouve dans le dossier du même nom, 

pui tapez les lignes de commande suivantes :
php bin/console doctrine:database:drop --force

php bin/console doctrine:database:create

php bin/console doctrine:migrations:migrate

php bin/console doctrine:fixtures:load

Ceci effacera toutes les données présentes en base de données, puis cela va les créer de nouveau !