<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP VAnilla Connection</title>
</head>
<body>
    <h1>Mis últimas películas vistas</h1>


<?php

include "./database/openDatabase.php";


$sql = "SELECT * FROM movies ORDER BY movies.id DESC";
$query = $conexion->prepare($sql);
$query -> execute();
$movies = $query ->fetchAll(PDO::FETCH_OBJ);

 if ($query -> rowCount() > 0) {
    foreach($movies as $movie) {
        echo "{$movie->title}";
    }
}


include "./database/closeDatabase.php";








