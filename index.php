<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        include "data.php";
    ?>

    <style>
        body{
            background: purple;
            color: white;
        }
    </style>

</head>
<body>

<!-- Partiamo da questo array di hotel.
https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Avremo un file PHP con il nostro "database" e un file con tutta la logica. -->

<h1>Hotels</h1>

<?php

    for ($i=0; $i < count($hotels); $i++) { 
        $hotel = $hotels[$i];

        echo 'Nome: ' . $hotel['name'] . '<br>';
        echo 'Descrizione: ' . $hotel['description'] . '<br>';

        if ($hotel['parking']) {
            echo 'Parcheggio: Sì' . '<br>';
        } else {
            echo 'Parcheggio: No' . '<br>';
        }

        echo 'voto: ' . $hotel['vote'] . '/5' . '<br>';
        echo 'Distanza dal centro: ' . $hotel['distance_to_center'] . "km" . '<br>';

        echo '<br>';
    }

    
?>

</body>
</html>