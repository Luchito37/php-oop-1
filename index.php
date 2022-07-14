<?php

require_once "classi/movie.php";

$movie1 = new Movie("Moonfall", "Roland Emmerich", "Sci-fi/Action", "59.1 million USD", "March 17, 2022", " 2h 10m");
$movie2 = new Movie("Uncharted", "Ruben Fleischer", "Action/Adventure", "401.7 million USD", "February 17, 2022", "1h 56m");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
<?php
    $movie1->printCard();
    $movie2->printCard();
?>
</body>

</html>