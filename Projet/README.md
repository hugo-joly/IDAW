Première chose à noter, pour tester le site, il faut se connecter avec la session : 
    login : hugo
    mot de passe : joly

chaque page du site est entrée en paramètre après index.php.

index.php?page=welcome : 
affiche la page d'accueil, qui récupère les éléments de la table alimentation de l'utilisateur connecté avec une requête GET.

index.php?page=aliments : 
affiche une table contenant tous les aliments de la base de donnée, récupérés avec une requête GET.
En cliquant sur un aliment ->

index.php?page=info_aliment:
affiche les infos de l'aliment en question uniquement, et on a la possibilité de "manger" une certaine quantité de cet aliment et de l'ajouter à la table alimentation de l'utilisateur grâce à une requête POST.

index.php?page=mes_aliments :
affiche les aliments de l'utilisateur connecté seulement.
On peut modifier un aliment dans la base de l'utilisateur connecté uniquement grâce à une requête PUT exécutée par le bouton modifier, en supprimer grâce à une requête DELETE exécutée par le bouton supprimer, et ajouter un aliment grâce à une requête POST par le form d'ajout, le tout encore une fois seulement dans la base de l'utilisateur connecté uniquement.

PISTES D'AMÉLIORATION NON MISES EN OEUVRE PAR MANQUE DE TEMPS :

Le fait de pouvoir se créer un compte directement dans le site et non pas dans la base de donnée uniquement ;

Modifier son objectif journalier de calories à manger ;

Une catégorie sport où un utilisateur peut entrer sa dépense calorifique et qui serait déduite de ce que l'utilisateur a mangé ;

L'affichage des images des aliments lors du click sur un aliment : les images ont été importées mais la fonctionnalité n'a pas pu être implémentée par manque de temps.