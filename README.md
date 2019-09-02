# Les formulaires

Pour interagir avec l'utilisateur, le formulaire est l'un des principaux moyens.

Si tu veux te connecter, enregistrer un nouvel article sur un blog, réserver un hôtel, tu devras passer par un formulaire.

Aujourd'hui tu vas t’atteler à la tâche la plus classique : créer un formulaire de contact.
#
## Objectifs

- Mettre en place un formulaire HTML
- Récupérer les données à l'aide de GET
- Récupérer les données à l'aide de POST
#
## Étapes

- Mettre en place un formulaire de contact
- Récupération des données avec la méthode GET
- Avec la méthode POST
- Validation de saisies
#
## Challenge
### Simuler une prise de contact

À partir de ce que tu viens de réaliser, il faut améliorer ce formulaire. Tu dois rajouter un champ pour entrer le numéro de téléphone de l'utilisateur, ainsi qu'une liste déroulante proposant plusieurs thématiques, qui sera reprise comme sujet du mail.

Tous les champs doivent être obligatoirement remplis avant de soumettre le formulaire. Une fois le formulaire soumis et validé :

- Toutes les données saisies sont correctes, l’utilisateur est notifié que son message "a été envoyé".

- En cas d'erreur, l'utilisateur est renvoyé sur le formulaire avec un message lui indiquant quelle erreur il a fait dans sa saisie.

    >Vérifier un à un tous les champs afin de s'assurer qu'ils sont correctement remplis, avec la bonne syntaxe, peut s’avérer long et fastidieux. Pour cette quête, on ne te demandera pas de tout vérifier à l'aide de PHP.

    >Tu l'auras remarqué, à aucun moment on te demande d'envoyer le mail. C'est normal, il s'agit là d'une autre problématique. Concentre-toi sur la gestion des formulaires pour le moment, tu verras ça plus tard.

### Critères de validation

- Le formulaire de contact comporte les champs : nom, prénom, e-mail, téléphone, sujet (sous forme de liste déroulante) et message (textarea).
- Côté client / front :
    Tous les champs sont requis;
    la validité du champs e-mail est vérifiée et correspond au format attendu.
- Côté serveur :
    Tous les champs sont requis et ne doivent pas être vides;
    Le format du champ e-mail est vérifié, à l'aide de [filter_var](http://php.net/manual/fr/function.filter-var.php) par exemple.
- S'il y a des erreurs, un message s’affiche pour chaque champ.
- En cas de succès, tu dois afficher un message de félicitations sur une page dédiée. Pour rediriger en PHP, tu peux regarder la première partie de cette ressource : [PHP Redirect To Another URL / Web Page Script Example](https://www.cyberciti.biz/faq/php-redirect/)
- Le code est disponible sur un dépot Gist ou Github.