<?php
// La classe Serie estende la classe Production implementandone tutte le caratteristichee aggiungendone di nuove
class Serie extends Production
{
  public $season;

  public function getSeason()
  {
    return $this->season;
  }

  public function setSeason($season)
  {
    if (is_numeric($season) ?? $season >= 0) {
      $this->season = $season;
    }
  }
}
