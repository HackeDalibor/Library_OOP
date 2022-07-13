<?php

    class Auteur
    {

        private string $prenomAuteur;
        private string $nomAuteur;
        private        $dateNaissance;
        private array  $bibliographie;
        
        public function __construct(string $nomAuteur, string $prenomAuteur, $date)
        {

            $this->prenomAuteur  =  $prenomAuteur;
            $this->nomAuteur     =  $nomAuteur;
            $this->bibliographie =  [];
            $this->dateNaissance = new DateTime($date);
            
        }

        public function __toString()
        {

            return $this->prenomAuteur." ".$this->nomAuteur;

        }

        public function obtenirAge()
        {

            $dateAujourdhui = new DateTime();
            $differenceAge = $this->dateNaissance->diff($dateAujourdhui);
            return $differenceAge->y." ans, ";

        }
        
        public function ajouterLivre(Livre $livre)
        {
            
            $this->bibliographie[] = $livre;
            
        }

        public function afficherBibliographie()
        {
            foreach ($this->bibliographie as $livre) 
            {
                echo $livre;
            }
        }
    }

?>