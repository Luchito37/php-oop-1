<?php

/*
    - è definita una classe ‘Movie’
    => all’interno della classe sono dichiarate delle variabili d’istanza
    => all’interno della classe è definito un costruttore
    => all’interno della classe è definito almeno un metodo
        - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

class Movie 
{
    public $titolo;
    public $regista;
    public $genere;
    public $boxOffice;
    public $dataUscita;
    public $durata;


    function __construct($_titolo, $_regista, $_genere, $_boxOffice, $_dataUscita, $_durata)
    {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->genere = $_genere;
        $this->boxOffice = $_boxOffice;
        $this->dataUscita = $_dataUscita;
        $this->durata = $_durata;
    }

    /**
     * Get the value of titolo
     */ 
    public function getFullMovie()
    {
        return $this->titolo. "<h2>Diretta da:</h2>" .$this->regista. "<h2>Tipologia:</h2>" .$this->genere;
    }

    public function getFullCaratteristic()
    {
        return "Boc Office : ". $this->boxOffice . "<h2>Data d'uscita:</h2>" .$this->dataUscita. " <h2>Durata :</h2>" .$this->durata;
    }



    public function printCard()
    {
        $film = $this->getFullMovie();
        $caratteristiche= $this->getFullCaratteristic();

        ?>
            <h2>FILM  : <h3><?php echo $film   ?></h3> </h2>
            <h2>CARATTERISTICHE : <h4><?php echo $caratteristiche  ?></h4></h2>
            <hr>
        <?php


    }
}