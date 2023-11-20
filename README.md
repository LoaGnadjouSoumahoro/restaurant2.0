# Restaurant 2.0


## Description

Le projet Restaurant 2.0 consiste rendre dynamique le site web de notre restaurant précédemment créé. Les principales tâches à accomplir sont les suivantes :

### Back office 

Implémenter un "Back office" pour le site web, où tous les messages du formulaire seront regroupés sur une seule page. Cela facilitera le travail en marketing et en communication. Il devrait être possible de visualiser et supprimer les messages depuis cette interface.

### Guest book 

Créer une nouvelle page "Guest book" pour recevoir des commentaires des clients. Idéalement, cela devrait être réalisé en utilisant l'API Google Sheet pour permettre au propriétaire de vérifier directement tout depuis son compte Google. Si l'utilisation de l'API est trop avancée, utiliser une base de données comme dans le formulaire précédent est également acceptable.

Le formulaire devrait inclure au moins:

- Nom du client
- Restaurant visité
- Date de la visite
- Commentaire (saisie facultative)


### Gallery  

L'objectif est de créer une page pour télécharger des images et un script PHP pour afficher ces images. Un bonus est accordé si tout peut être géré depuis une seule page pour les messages, le guestbook et la galerie.

### Déploiement 

Déployer le projet. 

### Technologies

Back office :

Utilisez un langage côté serveur comme PHP.
Utilisez un système de gestion de base de données (SGBD) pour stocker les messages, par exemple, MySQL.

- Guest book :

Pour la création du formulaire et le traitement des données, vous pouvez utiliser PHP.
Pour stocker les commentaires, vous pouvez choisir d'utiliser une base de données comme MySQL.
Si vous souhaitez utiliser l'API Google Sheet, vous devrez intégrer la gestion des API à votre projet. Vous pouvez utiliser des bibliothèques PHP pour cela.

- Gallery :

Utilisez PHP pour créer une page permettant le téléchargement d'images.
Stockez les informations sur les images (comme les chemins d'accès) dans la base de données (la même que celle utilisée pour le Guest book).
Utilisez PHP pour créer un script qui récupère ces informations et les affiche dynamiquement sur la page de la galerie.

- Déploiement :

Cherchez des solutions d'hébergement PHP gratuites. Heroku, 000webhost, et d'autres peuvent être des options.
Si vous utilisez une base de données, assurez-vous que l'hébergeur prend en charge le SGBD que vous avez choisi (par exemple, MySQL).

- Autres technologies utiles :

Composer : Utilisez Composer pour gérer les dépendances de votre projet PHP.
Docker : Si vous souhaitez dockeriser votre application pour simplifier le déploiement.
Assurez-vous de vérifier les contraintes spécifiques mentionnées dans l'énoncé, comme l'utilisation de l'API Google Sheet et la possibilité de tout gérer depuis une seule page pour les fonctionnalités du Back office, Guest book et Gallery.

N'oubliez pas de documenter votre code, surtout si vous travaillez en équipe, et assurez-vous de respecter les bonnes pratiques de sécurité lors de la manipulation des données utilisateur et des intégrations avec des API.
