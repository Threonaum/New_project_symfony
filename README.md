# project_symfony MUZIAK Kevin

## Avant de débuter le projet

j'ai pris le temps de lire plusieurs fois l'énoncé que ce soit pour le côté théorique mais aussi pour le côté pratique. Après lecture, j'ai d'abord été rassuré car l'entièreté a été vu en cours. Cependant, j'appréhende toujours autant car j'ai peur de ne pas y arriver.  
C'est pourquoi j'ai pris l'initiative de commencer par répondre aux questions avant de commencer mon projet. Malgré tout, j'ai déjà crée le "squelette" de mon projet. 

  
  
## Sommaire 

### Le projet en lui-même

* Les réponses aux questions [s'y rendre](#les-réponses-aux-questions)
* Rappel de l'énoncé [s'y rendre](#rappel-de-lénoncé)
* Problèmatiques rencontrées [s'y rendre](#problèmatiques-rencontrées)
* Fonctionnalités présentes dans le projet [s'y rendre](#fonctionnalités-présentes-dans-le-projet)
* Ressources utilisées [s'y rendre](#ressources-utilisées)
* Conclusion [s'y rendre](#conclusion)


  

### Les réponses aux questions

1. #### Qu'est-ce qu'un container de services et quel est son rôle ?

    Un container de services c'est l'ensemble des classes compilées de notre application. Son rôle est de contenir des informations ( dont les services ) afin de pouvoir les utiliser quand on en a besoin à l'endroit où l'on en a besoin. 

  

2. #### Quelle est la diffèrence entre les commandes ```make:entity``` et ```make:user``` lorsqu'on utilise la console Symfony ? 

    Les commandes ```make:entity``` et ```make:user``` permettent de faire la même chose en soit, c'est-à-dire créer une entité utilisateur dans notre application via la console Symfony. 
    Cependant, la diffèrence entre ces deux commandes est singulière. En effet, la commande ```make:user``` permet, en plus de créer une entité utilisateur, de la rendre compatible avec le composant de sécurité de Symfony. 


  
3. #### Quelle commande utiliser pour charger les fixtures dans la base de données ? 

    La commande qu'il faut utiliser pour charger les fixtures dans la base de données est ```php bin/console doctrine:fixtures:load``` que l'on peut écrire aussi ```php bin/console d:f:l```.

  

4. #### Résumez de manière simple le fonctionnement du système de versions "Semver".

    Le système de versions "Semver" est le système qu'a choisi d'utiliser Symfony pour son versionning. 
    Il fonctionne de la manière suivante :

    Tous les deux ans, une nouvelle version majeure est créée, durant ces deux ans, plusieurs versions mineures sont créées tous les 6 mois. De cette manière l'on peut ainsi voir la version de symfony de cette façon :

    "version majeure"."version mineure", par exemple la version sur laquelle je fais mon projet est la 6.4 soit, la 6e version majeure ainsi que la 4e et dernière version mineure de la 6e version majeure. 

    Les dernières versions mineures sont appelées des "LTS" pour "Long Term Support", car ces versions mineures ont 3 ans de support, correction de bug, sécurité, etc ... assurés. 

  

5. #### Qu'est-ce qu'un "repository" et à quoi sert-il ? 

    Un repository est un service applicatif de notre application qui nous permet d'échanger avec notre base de données à propos d'une entité. Son rôle sert donc d'intermédiaire entre notre application et notre base de données.


  
6. #### Quelle commande utiliser pour voir la liste des routes ?

    La commande a utiliser pour voir la liste des routes est ```php bin/console debug:router```.


  
7. #### Dans un template twig, quelle variable globale permet d'accéder à la requète courante, l'utilisateur courant, etc ?

    Dans un template twig, la variable globale ```app``` permet d'accéder à la requète courante, l'utilisateur courant, etc ...

  

8. #### Pour mettre à jour la structure de la base de données, quelles sont les deux possibilités que nous avons abordées en cours ?

    Il existe deux manières de mettre à jour la structure de la base de données: la migration et les mises à jour à la volée. 

    Les migrations consistent un peu comme le versionning d'une structure de notre base de données tandis que les mises à jour à la volée fonctionnent de manière similaire cependant elles ne créent pas de fichier de migration et tout s'effectue dans la console.


  
9. #### Quelle commande permet de créer une classe de contrôleur ?

    La commande qui permet de créer une classe de contrôleur est ```php bin/console make:controller```.


  
10. #### Décrivez succintement l'outil flex de symfony.

    L'outil flex de symfony permet d'installer une dépendance, d'exécuter des recettes. Ainsi, lorsque l'on installe une dépéndance (par exemple), il va automatiquement créer un fichier de configuration, ou bien un template de classe PHP. 
    Il est présent dans notre application pour nous aider à intégrer un package, tout en créant les fichiers dont on a besoin via cette installation. Il vient en complément de composer.


  
### Rappel de l'énoncé 
[haut de page](#sommaire)

Il est question de créer un système de location de voitures en ligne. 
(page d'accueil, page de liste des annonces, page de saisie d'une nouvelle annonce, page d'inscription, page de connexion, page d'administration avec la liste des utilisateurs accessible uniqement par les administrateurs).

Je vais devoir créer deux entités diffèrentes : ```Advert``` et ```User```.
```User``` servira à l'authentification.

L'on va devoir créer un algorithme d'estimation du prix d'une location en fonction des diffèrentes informations de la voiture (année de voiture, km et nb de jours de location).

La structure de l'interface est simplement constituée d'un header avec son menu, un contenu et un footer. 

Voici dans les grandes lignes ce qui est attendu pour ce projet. 


  
### Problèmatiques rencontrées
[haut de page](#sommaire)

Un de mes premiers problèmes rencontrés est que je ne sais toujours pas par quoi je dois commencer. Je suis un peu perdu et je vais essayer de faire une sorte de checklist que je vais partagé quelque part dans le readme (surement au début).

Je prends conscience que même si le projet n'a pas l'air "gros", il me parait de plus en plus imposant. Dans tous les cas, je vais faire en sorte de le mener à son terme avant la date butoire. 

Une fois la checklist faites, je vais essayer de hiérarchiser les choses à faire, je sais que de nouvelles se rajouteront au fur et à mesure mais une étape à la fois. 

J'ai pu commencer réellement mon projet, certes en retard, mais au moins je l'ai débuté. J'ai crée mes entités ainsi que mes fixtures mais j'avance tout doucement. Je n'ai pas assez pratiqué, déjà, mais aussi je me perds dès que je dois naviguer dans l'arborescence de symfony. Par conséquent, je perds du temps dans la compréhension et l'avancement de mon projet. 

De même que, je ne me concentre pas sur le front pour le moment, non pas que ce n'est pas important mais je préfère m'appliquer sur le back plutôt que sur le front (dans un premier temps).




  
### Fonctionnalités présentes dans le projet
[haut de page](#sommaire)

Avant que le projet ne démarre, certaines fonctionnalités doivent impérativement être présentes. En effet, il doit avoir obligatoirement plusieurs formulaires, une page d'administration et j'en passe. 

Je n'ai pas spécialement beaucoup d'idées sur les choses que je pourrai rajouter en fonctionnalité si j'ai du temps mais peut-être qu'un moteur de recherche serait envisageable. Dans tous les cas je vais d'abord me concentrer sur le "cahier des charges" de l'énoncé.


  

### Ressources utilisées
[haut de page](#sommaire)

* [cours symfony](https://ld-web.github.io/hb-sf-pe7-course/)
* [documentaion symfony](https://symfony.com/)

  
### Conclusion
[haut de page](#sommaire)