<?php 

class Carro {
  public $portas = 4;
  public $rodas =4;
  public $cor = "Preto";
  public $cambio = "Automático";
  public $velMax = 200;


  public function setVelMax($vel):void
  {
    $this->velMax = $vel;
  }

  public function getVelMax():int
  {
    return $this->velMax;
  }
}

$carro1 = new Carro;
echo PHP_EOL . "O carro 1 possui as seguintes características: ";
echo PHP_EOL . "Portas: $carro1->portas";
echo PHP_EOL . "Rodas: $carro1->rodas";
echo PHP_EOL . "Cor: $carro1->cor";
echo PHP_EOL ."Cambio: $carro1->cambio" ;
echo PHP_EOL . "Velocidade Máxima: $carro1->velMax" . PHP_EOL;
echo "--------------------------------";

$carro2 = new Carro;
$carro2->setVelMax(250);

echo PHP_EOL . "O carro 2 possui as seguintes características: ". PHP_EOL;
echo PHP_EOL . $carro2->portas = 2;
echo PHP_EOL . $carro2->rodas;
echo PHP_EOL . $carro2->cor = "Branco";
echo PHP_EOL . $carro2->cambio = "Manual" ;
echo PHP_EOL . $carro2->getVelMax() . PHP_EOL;
echo "--------------------------------";