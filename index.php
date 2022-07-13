<?php

require_once "classi/movie.php";

$movie1 = new Movie("Moonfall", "Roland Emmerich", "Sci-fi/Action","59.1 million USD","March 17, 2022"," 2h 10m");
$movie2 = new Movie("Uncharted","Ruben Fleischer","Action/Adventure","401.7 million USD","February 17, 2022","1h 56m");

$movie1->printCard();
$movie2->printCard();