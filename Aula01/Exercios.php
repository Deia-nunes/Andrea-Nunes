<?php
echo "<pre>";

// exercio 1
echo "<hr>";
//string
$exercio1 = "exercio1";
var_dump($exercio1);
echo "<hr>";
//Boolean
$Verdadeiro = true;
$falso = false;
var_dump($Verdadeiro);
var_dump($falso);

echo "<hr>";
//Interger
$inteiro = 20;
var_dump($inteiro);


echo "<hr>";
//flot
$flutuante = 4.5;
var_dump($flutuante);

echo "<hr>";
//string
$texto = "texto";
var_dump($texto);

echo "<hr>";
//array
$array = [];
var_dump($array);

echo "<hr>";
//objeto
$object = new stdclass;
var_dump($object);

echo "<hr>";
//null
$nulo =  NULL;
var_dump($nulo);

// exercio 2
echo "<hr>";
//string
$exercio2 = "exercio2";
var_dump($exercio2);
echo "<hr>";
//string
$imprimindo_na_tela = "imprimindo_na_tela";
var_dump($imprimindo_na_tela);
echo "<hr>";

// exercio 3
$exercio3 = "exercio3";
$Cast = "Cast";
$Juggling = "Juggling";
var_dump($exercio3);
var_dump($Cast);
var_dump($Juggling);
echo "<hr>";

$var = 40;
var_dump($var);
$casa = (boolean) $var;
var_dump($casa);

$cast = (int) $var;
var_dump($cast);

$cast = (float) $var;
var_dump($cast);

$cast = (string) $var;
var_dump($cast);

$cast = (array) $var;
var_dump($cast);

$cast = (string) $var;
var_dump($cast);

$cast = (array) $var;
var_dump($cast);

$cast = (object) $var;
var_dump($cast);

$cast = (unset) $var;
var_dump($cast);

//type juggling

echo "<pre>";
$var = "0";
var_dump($var);
$var = $var + 30;
var_dump($var);
$var = $var + 5.5;
var_dump($var);
$var = 1 + "10 casas";
var_dump($var);
$var = "1 casa" + "1 casa";
var_dump($var);



















