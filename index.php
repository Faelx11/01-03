<?php
require 'vendedor/autoload.php';
use App\Carro;
use App\CarroHibrido;

$carrohibrido = new hibrido('xyz');
$carrohibrido->setCor('azul');
$carrohibrido->setAno('2010');
$carrohibrido->setTipo('auto');
echo $carrohibrido -> exibirDados();

?>