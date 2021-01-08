<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="style.css">
    <!-- Axios Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- vue Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>


    <!-- Basandosi sui dati in allegato, sviluppare front-end e back-end nelle due varianti come visto questa mattina:
    - stampa integrale in PHP attraverso l'include
    - stampa attraverso axios su API in PHP
    Bonus: nella versione a API, aggiungere la possibilita' di filtrare per artista, facendo attenzione a filtrare i dati nella location piu' corretta
    Nota1: utilizzare le sole tecnologie viste questa mattina
    Nota2: per chi avesse fatto esercizio simile in precedenza, e' possibile riciclare il CSS  -->

</head>

<body>

    <nav></nav>

    <div id="app">

        <div class="container">

            <div class="disc" v-for ="album in discs">
            
                    <img class="cover" :src="album.poster" alt="cover"> 
                    <h2>  {{album.title}} </h2>
                    <h4>  {{album.author}}  </h4>
                    <h4>  {{album.year}} </h4>

            </div>      
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>