<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop 1</title>
</head>

<body>

    <?php

    class Movie
    {
        public $title;
        public $year;
        public $genre;

        function __construct($_title, $_year, $_genre)
        {
            $this->title = $_title;
            $this->year = $_year;
            $this->genre = $_genre;
        }

        public function getMovieDetails()
        {
            return "Movie:" . $this->title . "<br/>" . "Year:" . $this->year . "<br/>" . "Genre:" . $this->genre;
        }
    }

    $inception = new Movie("Inception", "2010", "action");
    //var_dump($inception);

    $jumanji = new Movie("Jumanji", "1995", "adventure");
    //var_dump($jumanji);

    $backToTheFuture = new Movie("Back tot he Future", "1985", "action");
    //var_dump($backToTheFuture);

    $terminator = new Movie("Terminator", "1984", "action");
    //var_dump($terminator);

    $movies = [];
    $movies[] = $jumanji;
    $movies[] = $backToTheFuture;
    $movies[] = $terminator;
    $movies[] = $inception;

    //var_dump($movies);

    ?>

    <h3>Dettagli dei seguenti films:
    </h3>
    <?php foreach ($movies as $movie) : ?>
        <p><?php echo $movie->getMovieDetails(); ?></p>

    <?php endforeach ?>

</body>

</html>