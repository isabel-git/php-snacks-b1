<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script> <!-- axios -->

    <!-- <link rel="stylesheet" href="style.css"> --> <!-- css -->
    
</head>
<body>

    <div id="app">

        <h1>Hotels</h1>

        <div v-for="hotel in hotels">

            <h2>Nome: {{ hotel.name }}</h2>
            <p>Descrizione: {{ hotel.description }}</p>
            <p>Distanza dal centro: {{ hotel.distance_to_center }}km</p>
            <p>Parcheggio: {{ hotel.parking ? 'Sì' : 'No' }}</p>
            <p>Voto: {{ hotel.vote }}/5</p>
            <br>
            
        </div>
                

    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script> <!-- vue -->
    <script src="script.js"></script> <!-- script -->

</body>
</html>