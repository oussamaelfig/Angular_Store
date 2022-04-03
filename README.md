# TP2 INF3190 HIVER 2022

## Description du projet :

Site web commercial responsive qui permet aux utilisateurs connectés d'acheter des articles. Si c'est un admin qui est connécté, il peut consulter la liste des personnes ayant postuler et la liste des utilisateurs. Ces fonctionnalité ne sont pas disponibles pour les visteurs et les utilisateurs connectés. Un visiteur ne peut pas passer la commande.

## Fonctionnalités implémentées :

- Création de la page d'acceuil avec une carroussel des produits.
- Création de l'entête de page ou la bar de navigation ainsi que le pied de page en suivant les indication de devoir et contenant les informations demandés.
- Création de toute les pages demandés (Acceuil, page de liste de produits, page de connexion, page du panier, page pour postuler ...).
- Création du fichier JSON contenant tout les prodduits et leurs informations.
- Ajout de quelques videos dans la presentation détaillé du produits.
- Création de la page de panier qui permet à l'utilisateur d'ajouter des produits effacer le panier, passer une commande, ou changer la quantité et consulter le prixavant et après taxe.
- Création d'un panier persistant qui permet de preserver les produits même si on navigue entre les pages ou on la quitte.
- Validation du formulaire de postulation selon les demandes de l'énoncé.
- Pour chaque postulation, les infos de la personne, du cv et de la photo sont inscrit dans embauche.json.
- Validation du login selon les demandes du format de l'identifiant et du mot de passe. Une fois que ces validations sont faite, la vérifiaction si l'identifiant et le mot de passe correspondent à une des possiblité valide qui se trouvent dans user.json. Selon le type d'utilisateurs qui a été entré, le type de user est storé dans un cookie qui est conservé jusqu'à expiration ou jusqu'à ce que l'utilisateur se déconnecte. Cela permet à l'utilisateur d'acheter et d'accéder au menu admin (si c'est l'admin).
-Consulter les postulations à l'aide d'un datatable si l'utilisateur est un admin. Le user peut cliquer sur le nom du pdf et de la phot pour chaque personne pour pouvoir les consulter dans une nouvelle page.
-Consulter les utilisateurs qui sont conservé dans user.json à l'aide d'un datatable.

## Ce qui ne fonctionne pas dans votre projet:

...

## Technologies utilisés:

- HTML
- CSS
- BOOTSTRAP
- JAVASCRIPT
- JQUERY
- PHP
- XAMPP pour le serveur local

## Plateforme de développement utilisée

- Visual Studio Code

## Difficultés rencontrées

- Conserver le panier au travers des différentes pages
- Gérer correctement les utilisateurs
- Lire un json qui est externe au script avec JS/jQuery
- Gérer les stocks des objets
- Générer des pages de façon dynamique

## Développeurs:

OUSSAMA EL-FIGHA | ELFO74030209

NICOLAS PLANTE | PLAN83020108

## Identifiants des utilisateurs

### Utilisateur de base:

- username = "allosalu", mot de passe = "1234asdf"
- username = "userDeux", mot de passe = "p1s2d3f4"
- username = "infowebs", mot de passe = "INF31902"
- username = "infoJava", mot de passe = "2050inf2"
- username = "jaimectf", mot de passe = "2171best"
- username = "cpluscpl", mot de passe = "cPlus232"
- username = "hellowor", mot de passe = "tech2022"
- username = "bonjourM", mot de passe = "yeetMe44"
- username = "confiden", mot de passe = "pass1234"
- username = "qwertyui", mot de passe = "QwErTy12"

### Administrateur

- username = "adminast", mot de passe = "TpAdmi12"
