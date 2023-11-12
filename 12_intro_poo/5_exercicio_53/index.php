<?php 

class Cachorro {

  public function latir(){
    echo "au au";
  }

  public function andar($m){
    echo "O cachorro andou $m metros <br>";
  }
}

$caramelo = new Cachorro;
$pincher = new Cachorro;

$caramelo->latir();
$caramelo->andar(5);

$pincher->latir();
$pincher->andar(2);
