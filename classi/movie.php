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
        return "<h2>Titolo :</h2> " . $this->titolo . "<h2>Diretta da:</h2>" . $this->regista . "<h2>Tipologia:</h2>" . $this->genere;
    }

    public function getFullCaratteristic()
    {
        return "<h2>Box Office :</h2> " . $this->boxOffice . "<h2>Data d'uscita:</h2>" . $this->dataUscita . " <h2>Durata :</h2>" . $this->durata;
    }



    public function printCard()
    {
        $film = $this->getFullMovie();
        $caratteristiche = $this->getFullCaratteristic();

?>

        <div class="container mt-5">
            <div class="row ">
                <div class="col mb-5 text-center d-flex justify-content-around">
                    <div class="card bg-danger" style="width: 30rem;">
                        <div class="card-header">
                            <h1>FILM : <h4><?php echo $film   ?></h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h2>CARATTERISTICHE : <h4><?php echo $caratteristiche  ?></h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
        </div>

<?php


    }
}
