<?php 

class Pessoa {
  public $nome = 'Waleriano';
  public $idade = 23;

  public function andar($m){
    echo $this->nome . " andou ". number_format($m,0,",",".") ." metros <br>";
  }
}

$waleriano = new Pessoa;

$waleriano->andar(100000);