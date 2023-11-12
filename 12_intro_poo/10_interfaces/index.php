<?php 

interface Caracteristicas 
{
  const NOME = "Waleriano";
  public function falar();
}

class Humano implements Caracteristicas
{
  public $idade = 29;

  public function falar()
  {
    echo "ola mundo, cumpri o contrato" . PHP_EOL;
  }

  public function dizerNome()
   {
    echo PHP_EOL . "Meu nome é ". self::NOME;
   }
}

$waleriano =new Humano;

$waleriano->falar();
$waleriano->dizerNome();