<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="style.css">

    <!-- Basandosi sui dati in allegato, sviluppare front-end e back-end nelle due varianti come visto questa mattina:
    - stampa integrale in PHP attraverso l'include
    - stampa attraverso axios su API in PHP
    Bonus: nella versione a API, aggiungere la possibilita' di filtrare per artista, facendo attenzione a filtrare i dati nella location piu' corretta
    Nota1: utilizzare le sole tecnologie viste questa mattina
    Nota2: per chi avesse fatto esercizio simile in precedenza, e' possibile riciclare il CSS  -->

<?php

    include 'data.php';
    
?>


</head>

<body>

    <nav></nav>

    <div id="app">

        <div class="container">

            <?php

                foreach ($database as $disc) { ?>
  
                    <div class="disc">
                    
                            <img class="cover" src="<?php echo $disc[poster] ?>">
                            <h2><?php  echo $disc['title'] ?> </h2>
                            <h4><?php  echo $disc['author'] ?> </h4>
                            <h4><?php  echo $disc['year'] ?> </h4>

                    </div>
                <?php   
                }
            ?>

        </div>

    </div>

</body>
</html>