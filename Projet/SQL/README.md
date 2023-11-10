Règles de gestion – GRATENS Baptiste, JOLY Hugo


1)	Dans la table Aliments, l’entrée id_user permet de facilement faire une distinction entre aliments personnels et aliments de la base de donnée « publique » sans devoir créer une table spécialement pour ça.
2)	La table alimentation qui permet de faire le lien entre la table Users et la table Aliments, avec des attributs supplémentaires (étant donné une relation 0,n / 0,n) qui permettent de faire un suivi de l’alimentation de l’utilisateur.
3)	La page d’accueil du site affiche la table alimentation, qui ne contient pas le nom de l’aliment. Un left join entre alimentation et aliment permet d’afficher le nom de l’aliment en question sur la page d’accueil du site.