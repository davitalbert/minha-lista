<?php

include("conexao.php");

$nomeL = $_POST["nomeL"];
$notaL = $_POST["notaL"];
$opiniaoL = $_POST["opiniaoL"];

$nomeS = $_POST["nomeS"];
$notaS = $_POST["notaS"];
$opiniaoS = $_POST["opiniaoS"];

$nomeF = $_POST["nomeF"];
$notaF = $_POST["notaF"];
$opiniaoF = $_POST["opiniaoF"];

$comando = $pdo->prepare("INSERT INTO lista (nomeL, notaL, opiniaoL) VALUES (:nomeL, :notaL, :opiniaoL) ");
$comando -> bindValue(":nomeL,$nomeL");
$comando -> bindValue(":notaL,$notaL");
$comando -> bindValue(":opiniaoL,$opiniaoL");

$comando = $pdo->prepare("INSERT INTO lista (nomeS, notaS, opiniaoS) VALUES (:nomeS, :notaS, :opiniaoS) ");
$comando -> bindValue(":nomeS,$nomeS");
$comando -> bindValue(":notaS,$notaS");
$comando -> bindValue(":opiniaoS,$opiniaoS");

$comando = $pdo->prepare("INSERT INTO lista (nomeF, notaF, opiniaoF) VALUES (:nomeF, :notaF, :opiniaoF) ");
$comando -> bindValue(":nomeF,$nomeF");
$comando -> bindValue(":notaF,$notaF");
$comando -> bindValue(":opiniaoF,$opiniaoF");

?>
