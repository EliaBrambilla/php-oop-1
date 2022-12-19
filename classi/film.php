<?php

//Classe: Movie
    class Movie
    {
        //Attributi
        public $titolo;
        public $percorsoImmagine;
        public $anno;
        public $genere;

        //Funzione contruct (riempimento dinamico)
        function __construct($_titolo, $_anno, $_genere, $_percorsoImmagine)
        {
            $this->titolo = $_titolo;
            $this->anno = $_anno;
            $this->genere = $_genere;
            $this->percorsoImmagine = $_percorsoImmagine;
        }
    }

?>