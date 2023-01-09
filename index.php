<?php 

class Movie{
    public$title;
    public$genre;
    public$duration;
    public$year;
    public$vote=0;
public function __construct(string $title,$genre,int $duration,int $year,int $vote){
    $this->title=$title;
    $this->genre=$genre; 
    $this->duration=$duration;
    $this->year=$year;
    $this->vote=$vote;

}

   
}
$film = new Movie("Harry Potter","Fantasy", 200, 2001,5);
echo $film->title;
echo $film->genre;
echo $film->duration;
echo $film->year;
echo $film->vote;

?>