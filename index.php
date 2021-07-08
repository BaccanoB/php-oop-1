<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>OOP</title>
</head>
<body>
    <?php 
        include __DIR__ . "/classes/movie.php";
        
        $film1actors = ["Audrey Tautou","Mathieu Kassovitz","Serge Merlin"];
        $film1 = new Movie("1.jpg","Il favoloso mondo di Amelie","Le Fabuleux destin d'Amélie Poulain","Jean-Pierre Jeunet",$plot,[]);

        $film2actors = [" Robert Downey Jr.","Scarlett Johansson","Chris Evans"];
        $film2 = new Movie("2.jpg","Avengers:Endgame","Avengers:Endgame","Anthony e Joe Russo",$plot,[]);
    ?>

    <main>

        <div class="movie">
            <img src="img/<?= $film1->poster;?>" alt="">
            <h2 >Titolo:</h2>
            <h2><?= $film1->title ?></h2>
            <h4>Titolo Originale:</h4>
            <h4><?= $film1->getOriginalTitle() ?></h4>
            <h3>Regista:</h3>
            <h3><?= $film1->director ?></h3>
            <p>Data Uscita:</p>
            <p><?= $film1->date?></p>
            <p>Trama:</p>
            <p><?= $film1->getPlot(30); ?></p>
            <p>CAST:</p>
            <ul>
                <?php foreach($film1actors as $actor){
                    ?>
                        <li><?= $actor ?>
                        </li>
                    <?php 
                    
                } ?>
                
            </ul>
        </div>
        <div class="movie">
            <img src="img/<?= $film2->poster;?>" alt="">
            <h2>Titolo:</h2>
            <h2><?= $film2->title ?></h2>
            <h4>Titolo Originale:</h4>
            <h4><?= $film2->getOriginalTitle() ?></h4>
            <h3>Regista:</h3>
            <h3><?= $film2->director ?></h3>
            <p>Data Uscita:</p>
            <p><?= $film2->date?></p>
            <p>Trama:</p>
            <p><?= $film2->getPlot(50); ?></p>
            <p>CAST:</p>
            <ul>
                <?php foreach($film2actors as $actor){
                    ?>
                        <li><?= $actor ?>
                        </li>
                    <?php 
                    
                } ?>
                
            </ul>
        </div>
    </main>
    
    
</body>
</html>