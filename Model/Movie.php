<?php

class Movie
{
  public $title;
  public $year;
  public $cast;
  public $lang;

  public function __construct(string $_title, int $_year, array $_cast, string $_lang)
  {

    $this->title = $_title;
    $this->year = $_year;
    $this->cast = $_cast;
    $this->lang = $_lang;
  }

  public function getFullInfo()
  {
    // metto echo invece di return
    echo "$this->title, $this->year, $this->lang";
  }
}
