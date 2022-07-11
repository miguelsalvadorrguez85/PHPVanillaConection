<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP Vanilla Connection</title>
</head>
<body background="./medias/fondo.jpg" text="#000000">
    <h1 class="text-center">Mis últimas películas vistas</h1>


<?php

include "./database/openDatabase.php";


$sql = "SELECT * FROM movies ORDER BY movies.title DESC";
$query = $conexion->prepare($sql);
$query -> execute();
$movies = $query ->fetchAll(PDO::FETCH_OBJ);

 if ($query -> rowCount() > 0) {
    foreach($movies as $movie) {
        echo <<<TAG
            <article class="col-sm d-flex justify-content-around">
                <div class="card text-center" style="width: 15rem">
                    <img class="card-img-top" src="{$movie ->img}">

                    <div class="card-body">
                        <h5 class="card-title">{$movie -> title}</h5>
                        <h6 class="card-text">{$movie -> director}</h6>
                        <p class="card-text">{$movie -> resume}</p> 
                    
                    </div>
                </div>
            </article>
        TAG;
    }    
} 


include "./database/closeDatabase.php";








