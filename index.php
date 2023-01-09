<?php

class Movie {
  public $title;
  public $genre;
  public $duration;
  public $year;
  public $vote;
  private $discount = 0;

  function __construct($_title, $_genre, $_duration, $_year, $_vote)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->duration = $_duration;
    $this->year = $_year;
    $this->vote = $_vote;
    if($_vote > 4){
    $this->setDiscount("20%");
}else{
    $this->setDiscount("50%");
};
  }

  public function setDiscount($_discount){
    $this->discount = $_discount;
  }
  public function getDiscount() {
    return $this->discount;
  }
  
}

$film1 = new Movie("Harry Potter", "Fantasy", "2:49", 2001, 7);
echo $film1->title;
echo $film1->genre;
echo $film1->duration;
echo $film1->year;
echo $film1->vote;

$film2 = new Movie("Il signore degli anelli", "Fantasy", "3:00", 2001, 3);
echo $film2->title;
echo $film2->genre;
echo $film2->duration;
echo $film2->year;
echo $film2->vote
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>
        <?php echo $film1->title; ?> 
    </h1>
    <span>Voto:<?php echo $film1->vote;?></span>
  <h3>Se il film ha un voto maggiore di 5</h3>
  <h2>lo sconto è del: <?php echo $film1->getDiscount(); ?></h1>
  <h1>
        <?php echo $film2->title;?>
    </h1>
    <span>Voto:<?php echo $film2->vote;?></span>
  <h3>Se il film ha un voto minore di 5</h3>
  <h2>lo sconto è del: <?php echo $film2->getDiscount(); ?></h1>
</body>
</html>