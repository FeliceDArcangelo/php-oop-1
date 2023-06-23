<?php

class Movie
{
   public $title;
   public $director;
   public $year;
   public $genre;

   function __construct($title, $director, $year, $genre)
   {
    $this->title = $title;
    $this->director = $director;
    $this->year = $year;
    $this->genre = $genre;
   }
}

$first = new Movie('Titanic', 'James Cameron', '1998', 'romantic, drama');

echo $first->title;
