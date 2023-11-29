<?php

class Production      // Definisco la classe e le sue variabili
{
  public $title;     // Variabili
  public $language;
  public $rating = 0;

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
    if (is_numeric($rating) ?? $rating > 0 ?? $rating <= 5) {
      $this->rating = $rating;
    }
  }
}

$prod1 = new Production("Dragon Trainer", "Italiano", 5);
$prod2 = new Production("Dragon Trainer 2", "Italiano", 5);
$prod3 = new Production("Dragon Trainer 3", "Italiano", 5);

$prods = [
  $prod1,
  $prod2,
  $prod3
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
      <?php foreach ($prods as $movie) { ?>
        <li class="title"><?php echo 'Titolo:' . ' ' . $movie->title; ?>
        <li class="language"><?php echo 'Lingua:' . ' ' . $movie->language; ?>
        <li class="rating"><?php echo 'Voto:' . ' ' . $movie->rating; ?>
        <?php } ?>
    </ul>
  </div>
</main>
<?php
