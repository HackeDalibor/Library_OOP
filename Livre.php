<?php

    class Livre
    // Une définition de classe basique commence par le mot-clé "class", suivi du nom de la classe (ici Livre). Suit une paire d'accolades contenant la définition des propriétés et des méthodes appartenant à la classe.
    // Généralement il existe deux parties dans une classe: Les attributs(il s'agit des données représentant l'état de l'objet) et les méthodes(il s'agit des opérations applicables aux objets)
    {

        // On commence d'abord par les attributs :
        private string  $titreLivre;
        private int     $nbPages;
        private int     $anneeSortie;
        private int     $prix;
        private Auteur  $auteur;
        // En d'autres termes un attribut est une variable stockée dans l'objet.
        // Un attribut peut être privé, protecté ou public(private, protected, public), après on déclare le type de notre variable(string, int, etc..) et le nom de la variable(Appeler la variable par ce qu'elle stocke)
        // On a aussi le nom d'une classe au lieu du type de variable, c'est pour lier les deux classes entre eux car on ne peut pas utiliser l'include ou le require

        // Et après on a les méthodes(aka les fonctions) :
        public function __construct(Auteur $auteur, string $titreLivre, int $nbPages, int $anneeSortie, int $prix)
        // Cette méthode est publique et a besoin d'arguments(ce qui est entre les parenthèses).
        // __construct() : une méthode magique construit un nouveau pool de workers. Les pools créent paresseusement leurs threads, ce qui signifie que les nouveaux threads ne seront générés que lorsqu'ils sont requis pour exécuter des tâches.
        {
            $this->titreLivre  = $titreLivre;
            $this->nbPages     = $nbPages;
            $this->anneeSortie = $anneeSortie;
            $this->prix        = $prix;
            $this->auteur      = $auteur;
            // La pseudo-variable $this est disponible lorsqu'une méthode est appelée depuis un contexte objet. $this est la valeur de l'objet appelant.
            // Les fonctions fléchées supportent les mêmes fonctionnalités que les fonctions anonymes, à l'exception que l'utilisation des variables de la portée parente est automatique.
            $auteur->ajouterLivre($this);
        }

        public function __toString()
        // __toString() : une méthode magique qui crée une représentation textuelle de l'objet(aussi publique, mais n'a pas besoin d'arguments).
        {

            return $this->titreLivre." (".$this->anneeSortie.") : ".$this->nbPages." pages / ".$this->prix." € <br>";

        }

    }

?>