<?php
// è definita una classe ‘Movie’
class Movie {
    // all'interno della classe sono dichiarate delle variabili d'istanza
    public $title;
    public $year;
    public $genre;
    public $protagonist;
    public $frase;

    // all'interno della classe è definito un costruttore
    public function __construct($_title, $_year, $_genre, $_protagonist) {
        $this -> title = $_title;
        $this -> year = $_year;
        $this -> genre = $_genre;
        $this -> protagonist = $_protagonist;
    }

    // all'interno della classe è definito almeno un metodo
    public function setFilmVecchio($year){
        if ($year < 2000) {
            $this -> frase = "Questo film è vecchio come te!";
        }
    }

    public function getFilmVecchio(){
        return $this -> frase;   
    }
}

// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

$filmUno = new Movie("I Mitchell contro le macchine", 2021, "Commedia", "Katie");
$filmDue = new Movie("Shining", 1980, "Horror", "Jack");

echo "<p>" . $filmUno -> title . "</p>";
echo "<p>" . $filmUno -> year . "</p>";
echo "<p>" . $filmUno -> genre . "</p>";
echo "<p>" . $filmUno -> protagonist . "</p>";


echo "<p>" . $filmDue -> title . "</p>";

$filmDue -> setFilmVecchio($filmDue -> year);
echo "<p>" . $filmDue -> getFilmVecchio() . "</p>";

echo "<p>" . $filmDue -> genre . "</p>";
echo "<p>" . $filmDue -> protagonist . "</p>";





?>