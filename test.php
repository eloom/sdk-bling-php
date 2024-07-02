<?php

define('SDK_ROOT', getcwd());
require_once SDK_ROOT . '/vendor/autoload.php';

use Eloom\SdkBling\Model\Request\Parcela;
use Eloom\SdkBling\Model\Request\Veiculo;

/*
$veiculo = new Veiculo();
$veiculo->setMarca('BMW');
$veiculo->setPlaca('ISZ8995');
$veiculo->setUf('RS');

echo json_encode($veiculo->jsonSerialize());
*/

$parcela = new Parcela();

$date = new DateTime('2006-12-12');
$parcela->setData($date);
$parcela->setValor(3.567);

echo json_encode($parcela->jsonSerialize());
