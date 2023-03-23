<?php

class Movie
{
    public $title;
    public $director;
    public $production;
    public $year;
    public $language;
   

    public function __construct($_title, $_director, $_production, $_year, $_language)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->production = $_production;
        $this->year = $_year;
        $this->language = $_language;
    }

    public function directedBy()
    {
        return " $this->title directed by $this->director";
    }
}

$TheShining = new Movie("The Shining", "Stanley Kubrick", "Warner Bros", "1980", "english");
$YoungFrankenstein = new Movie("Young Frankenstein", "Mel Brooks", "20th Century Fox", "1974", "english");
$LadyVendetta = new Movie("Lady Vendetta", "Park Chan-Wook", "Moho Film", "2005", "korean");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primo Esercizio OOP</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1 class=" text-center mt-3">MOVIES</h1>
    <div class="container mt-4">
        <div class="row row-cols-3">
            <div class="col">
                <div class="card mb-3">
                    <h2 class="card-header"> <?php echo $TheShining->title ?> </h2>
                    <div class="card-body">
                        <p class="card-text"> Production <?php echo $TheShining->director ?></p> <br>
                        <p class="card-title"> Directed by <?php echo $TheShining->production ?> </p>
                        <p class="card-text"> Year: <?php echo $TheShining->year ?> </p>
                        <p class="card-text"> Language: <?php echo $TheShining->language ?> </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-3">
                    <h2 class="card-header"> <?php echo $YoungFrankenstein->title ?> </h2>
                    <div class="card-body">
                        <p class="card-text"> Production <?php echo $YoungFrankenstein->director ?></p> <br>
                        <p class="card-title"> Directed by <?php echo $YoungFrankenstein->production ?> </p>
                        <p class="card-text"> Year: <?php echo $YoungFrankenstein->year ?> </p>
                        <p class="card-text"> Language: <?php echo $YoungFrankenstein->language ?> </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-3">
                    <h2 class="card-header"> <?php echo $LadyVendetta->title ?> </h2>
                    <div class="card-body">
                        <p class="card-text"> Production <?php echo $LadyVendetta->director ?></p> <br>
                        <p class="card-title"> Directed by <?php echo $LadyVendetta->production ?> </p>
                        <p class="card-text"> Year: <?php echo $LadyVendetta->year ?> </p>
                        <p class="card-text"> Language: <?php echo $LadyVendetta->language ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>