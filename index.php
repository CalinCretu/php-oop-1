<?php

class Production      // Definisco la classe e le sue variabili
{
  public $title;     // Variabili
  public $language;
  public $rating;

  public function __construct($title, $language, $rating)     // Definisco il construct e le sue proprieta'
  {
    $this->setTitle($title);      // Proprieta' del construct
    $this->setLanguage($language);
    $this->setRating($rating);
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getLanguage()
  {
    return $this->language;
  }

  public function getRating()
  {
    return $this->rating;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function setLanguage($language)
  {
    $this->language = $language;
  }

  public function setRating($rating)
  {
    $this->rating = $rating;
  }
}

$movie1 = new Production("Dragon Trainer", "Italiano", 5);
$movie2 = new Production("Dragon Trainer 2", "Italiano", 5);
$movie3 = new Production("Dragon Trainer 3", "Italiano", 5);

$movies = [
  $movie1,
  $movie2,
  $movie3
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP</title>
  <link rel="stylesheet" href="css/app.css">
</head>

<body>

</body>

</html>
<main>
  <div class="container">
    <h2>Oggi al cinema</h2>
    <ul>
      <?php foreach ($movies as $movie) { ?>
        <li class="title"><?php echo 'Titolo:' . ' ' . $movie->title; ?>
        <li class="language"><?php echo 'Lingua:' . ' ' . $movie->language; ?>
        <li class="rating"><?php echo 'Voto:' . ' ' . $movie->rating; ?>
        <?php } ?>
    </ul>
  </div>
</main>
<?php
