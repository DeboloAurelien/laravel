<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Mon ressenti

J'ai trouvé cela très enrichissant de réaliser ce projet tout en me documentant sur le framework Laravel.
Le fait d'utiliser des données depuis une base de données dans une Maps était très intéressant.

Malheureusement je n'ai pas eu assez de temps pour réaliser entièrement le cahier des charges.
Il manque l'ajout et la modification des tables Entreprise et Employé

Temps estimé de la réalisation : 14 heures.

<h1>Instructions d'installation</h1>


### Prérequis

- Avoir Wampserver, ou similaire, sur la machine pour la base de données
- Télécharger le projet avec des commandes git
- Avoir une clé API [Google Maps API Key](https://developers.google.com/maps/gmp-get-started)

## Installation

### Git

Une fois le projet téléchargé, se rendre sur la branche <code>master</code>

<code>git checkout master</code>

### Depuis un terminal

Se rendre dans le dossier <code>../laravel</code> du projet.

Allumer le serveur et laisser cette invite de commande ouverte pour avoir accès à l'application web :

<code>php artisan serve</code>

L'application web s'ouvre dans votre navigateur ([127.0.0.1:8000](http://127.0.0.1:8000/)) avec une map non fonctionnelle.
Des variables et des données sont à ajouter pour corriger cela.

### Dans une seconde invite de commande

Création de la base de données :

<code>php artisan db:create db_deboloaurelien</code>

Où <code>db_deboloaurelien</code> est le nom de la base de données.

Installation des tables de la base de données :

<code>php artisan migrate:install</code>

<code>php artisan migrate:fresh</code>

Ajouter des données (ou population) aux tables :

<code>php artisan db:seed</code>

### Dans un éditeur de fichiers

Dans le fichier <code>laravel/.env</code>, changer la valeur de <code>GOOGLE_MAPS_KEY</code> par votre propre clé API.

### Dans votre navigateur

Rafraichir la page. Un menu et une maps s'affiche avec 3 markers (3 entreprises).
