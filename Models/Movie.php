<?php
// La classe Movie estende la classe Production implementandone tutte le caratteristichee aggiungendone di nuove
class Movie extends Production
{
  protected $profit;
  protected $duration;

  public function getProfit()
  {
    return $this->profit;
  }

  public function getDuration()
  {
    return $this->duration;
  }

  public function setProfit($profit)
  {
    if (is_numeric($profit) ?? $profit >= 0) {
      $this->profit = $profit;
    }
  }

  public function setDuration($duration)
  {
    if (is_numeric($duration) ?? $duration >= 0) {
      $this->duration = $duration;
    }
  }
}
