# RESTO BOX

## Exercice sur symfony
Un restaurant fait une annonce : 'Besoin d'informaticien pour la création de site web pour notre restaurant'.

L'équipe NAN se propose de répondre à l'annonce et vous remet la conception de ce site.


Travail à faire

<b>0- Créer un nouveau repot git 'restoBox'</b>

<b>1- Créer un nouveau projet symfony complet(--webapp) du nom de 'restobox'</b>

<b>2- Créer 3 controllers</b>

Contrôleur de Pages statiques : Gère l'affichage des pages statiques telles que la page d'accueil, la page de contact, la présentation du restaurant, etc.

Contrôleur de Menu : Gère l'affichage du menu du restaurant, y compris la liste des plats, les détails des plats, les catégories de menu, etc.

Contrôleur d'Utilisateurs : Gère l'authentification des utilisateurs, la création de comptes, la connexion, la déconnexion, la gestion des profils utilisateur, etc.

<b>3- Créer les différentes routes</b>

routes Contrôleur de Pages statiques : accueil, contact, a propos

routes Contrôleur de Menu : menus, menus/<id_menu>, menus/categorie/<nom_categorie>

Contrôleur d'Utilisateurs : login, logout, profil, signin

nb: '<id_menu>' et '<nom_categorie>' sont des paramètres qu'on passera dans la route


<b>4- Créer des vues</b>

Pour chaque routes, une vue sera créée.


<b>5- Pas de base de données</b>

On utilisera pas de base de données. On utilisera les tableaux et les sessions


<b>6- Libre de designer comme vous le voulez</b>

<b>7- Si vous ne comprenez pas, posez moi des questions</b>

8- N'oubliez pas de faire les commit

## ETAPES
<b>1- Création du projet</b>

`symfony new restobox version='7.0.*' --webapp`
