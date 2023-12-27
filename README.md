Un MJ se rend à une soirée Jeux de Rôles.
Pour animer la soirée, il va devoir faire des tirages aléatoires. Il emmène 2 decks de cartes, des pièces de monnaies et un ensemble de dés de plusieurs tailles.

Étape 1
Créez les 4 classes Mj, Deck, Coin et Dice avec les méthodes dédiées correspondantes à leurs usages.
Ex: une pièce se lance, une pioche retourne une carte et un dé se lance également.
Vous devez utiliser les principes SOLID et éviter les anti pattern STUPID pour cet exercice.

Étape 2
Utilisez un design Pattern Adapter pour que le tirage aléatoire de la classe Deck corresponde au même tirage que les classes Coin et Dice.

Étape 3
Dans un controller Symfony, instanciez un objet MJ qui devra avoir une dépendance légère sur chacun des 3 types d'objets aléatoires. Il devra être possible de lui en donner un nombre indéterminé à la construction.
L'objet MJ ainsi créé devra être envoyé à la vue, et la vue devra appeler une méthode "rollForCrit($critRate)" qui doit :

    sélectionner au hasard l'un des objets aléatoires du MJ
    l'utiliser pour générer une valeur aléatoire
    renvoyer vrai si le score est supérieur au $critRate, faux sinon

Le résultat doit être affiché dans le templace.

Étape 4
Implémentez les comportements suivants dans les classes Dice, Coin et Deck :

    La classe Dice est dépendante d'une liste de faces, ou d'un nombre de faces, et en sélectionne une quand on le lance
    La classe Coin tire 0 ou 1, mais est dépendante d'un nombre de lancés : la génération ne renverra 1 que si les x lancés valent 1 (utilisez une fonction récursive)
    La classe Deck est dépendante d'un nombre de couleurs et de valeurs, sa méthode de génération renvoie une valeur entre 1 et nombre couleurs * nombres valeurs, après deux tirages le premier sur la couleur, le second sur la valeur
