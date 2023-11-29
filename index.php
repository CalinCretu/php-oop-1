<?php

require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Serie.php";
class Production      // Definisco la classe e le sue variabili
{
  protected $title;     // Variabili
  protected $language;
  protected $rating = 0;

  public function __construct(string $_title, string $_language, int $_rating)     // Definisco il construct e le sue proprieta'
  {
    $this->setTitle($_title);      // Proprieta' del construct
    $this->setLanguage($_language);
    $this->setRating($_rating);
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
    if (is_numeric($rating) ?? $rating >= 0 ?? $rating <= 5) {
      $this->rating = $rating;
    }
  }
}

$prod1 = new Movie("Dragon Trainer", "Italiano", 5);
$prod2 = new Movie("Dragon Trainer 2", "Italiano", 3);
$prod3 = new Movie("Dragon Trainer 3", "Italiano", 4);
$prod4 = new Movie("Pirati dei Caraibi", "English", 5);
$prod5 = new Movie("Avatar", "English", 3);
$prod6 = new Serie("Lost", "Italiano", 5);
$prod7 = new Serie("Gli Anelli dei Potere", "English", 5);
$prod8 = new Serie("The Boys", "English", 5);
$prod9 = new Serie("The Office", "Italiano", 5);
$prod10 = new Serie("Breaking Bad", "English", 5);


$prods = [
  $prod1,
  $prod2,
  $prod3,
  $prod4,
  $prod5,
  $prod6,
  $prod7,
  $prod8,
  $prod9,
  $prod10
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
    <ul <?php foreach ($prods as $movie) { ?> <li class="title"><?php echo 'Titolo:' . ' ' . $movie->getTitle(); ?></li>
      <li class="language"><?php echo 'Lingua:' . ' ' . $movie->getLanguage(); ?></li>
      <li class="rating"><?php echo 'Voto:' . ' ' . $movie->getRating(); ?></li>
    <?php } ?>
    </ul>
  </div>
</main>
<?php
