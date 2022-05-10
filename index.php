<!-- 
    Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
    metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
    - è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
-->

<?php

    class Movie {
        public $title;
        public $genre;
        public $year;
        public $description;
        public $vote;

        public function __construct($_title, $_genre, $_year, $_description, $_vote) {
            $this -> title = $_title;
            $this -> genre = $_genre;
            $this -> year = $_year;
            $this -> description = $_description;
            $this -> vote = $_vote;
        }

        public function setVote($vote) {
            if( $vote <= 2) {
                echo 'Film poco acclamato, bassi costi di produzione.';
            } elseif ( $vote == 3) {
                echo 'Produzione decente.';
            } elseif ( $vote == 4) {
                echo 'Acclamato dalla critica.';
            } else {
                echo 'Capolavoro!';
            }
        }

    };

$thor = new Movie('Thor', 'Science fiction / Adventure', '8-07-2022', "Thor's latest release from the Marvel series will be released in June.", 4);

$drstrange = new Movie('Dr.Strange', 'Science fiction / Adventure', '04-05-2022', "Doctor Strange is one of the most powerful characters in the Marvel series. The last chapter in terms of time was released in all Italian cinemas on 04-05-2022", 5);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Movies</title>
</head>
<body>

    <h1 class="m-4 text-center text-uppercase">movies</h1>

    <div class="row d-flex justify-content-around" style="width: 80%; margin: 0 auto;">
        
        <div class="col-4 m-4 text-center">
            <p class="text-danger">
                Titolo: <span class="text-dark"><?php echo $thor -> title  ?></span> 
            </p>
            <p class="text-danger">
                Genere: <span class="text-dark"><?php echo $thor -> genre  ?></span> 
            </p>
            <p class="text-danger">
                Anno di uscita: <span class="text-dark"><?php echo $thor -> year  ?></span> 
            </p>
            <p class="text-danger">
                Descrizione: <span class="text-dark"><?php echo $thor -> description  ?></span> 
            </p>
            <p class="text-danger">
                Voto: <span class="text-dark"><?php echo $thor -> vote  ?></span> 
            </p>
            <p class="text-danger">
                Verdetto: <span class="text-dark"><?php echo "<p>" . $thor -> setVote($thor -> vote) . "</p>"; ?></span> 
            </p>
            
        </div>

        <div class="col-4 m-4 text-center">
            <p class="text-danger">
                Titolo: <span class="text-dark"><?php echo $drstrange -> title  ?></span> 
            </p>
            <p class="text-danger">
                Genere: <span class="text-dark"><?php echo $drstrange -> genre  ?></span> 
            </p>
            <p class="text-danger">
                Anno di uscita: <span class="text-dark"><?php echo $drstrange -> year  ?></span> 
            </p>
            <p class="text-danger">
                Descrizione: <span class="text-dark"><?php echo $drstrange -> description  ?></span> 
            </p>
            <p class="text-danger">
                Voto: <span class="text-dark"><?php echo $drstrange -> vote  ?></span> 
            </p>
            <p class="text-danger">
                Verdetto: <span class="text-dark"><?php echo "<p>" . $drstrange -> setVote($drstrange -> vote) . "</p>"; ?></span> 
            </p>
            
        </div>

    </div>
    
</body>
</html>