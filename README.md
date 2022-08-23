# Project Rolist

## Languages
 + [English] (#English)
 + [Français](#Français)

## English
### Presentation
Project Rollist is a web app project to organize and track tabletop roleplay games.

Users can be either players or game master depending on whether they have to be one or an other during the game.

Each player in a game can be associated to one (or more) player(s), and each one of them has their own inventory.

### How to make it work ?
#### For production

#### During developpement

## Français
### Présentation
Project Rollist est un projet d'application Web permettant d'organiser et de suivre l'avancement de session de jeux de rôles sur table.

Les utilisateurs et utilisatrices peuvent être joueurs / joueuses ou maître du jeu selon les parties. Chacun peut ajouter une trace de la session pour suivre l'avancée de l'histoire.

Chaque joueur d'une partie peut être associé à un ou des personnages qui ont chacun un iventaire.

### Fonctionnement
#### En production
Il suffit simplement d'aller à l'adresse du site web, noramelement tout fonctionenra correctement.

#### En développement
Pour lancer le serveur de développement, il suffit de se mettre à la racine du projet et de taper la commande :
```bash
php -S 0.0.0.0:8080
```
Ensuite, il faut lancer `http://localhost:8080/` sur le navigateur pour voir apparaitre le site.

Si vous souhaitez modifier le style via les fichiers SCSS (qui se situent dans le dossier `src/style/`). Il faut lancer le processus de SASS avec la commande suivante :
```bash
sass --watch src/style:dist/style
```
Les fichiers seront compilés vers le dossier `dist/style`.