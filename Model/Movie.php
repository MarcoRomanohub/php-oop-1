<?php

class Movie
{
  public $title;
  public $year;
  public $cast;
  public $genre;

  public function __construct(string $_title, int $_year, array $_cast, string $_genre)
  {

    $this->title = $_title;
    $this->year = $_year;
    $this->cast = $_cast;
    $this->genre = $_genre;
  }

  public function getFullInfo()
  {
    // metto echo invece di return
    echo "$this->title, $this->year, $this->genre";
  }
}
