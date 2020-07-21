<?php

require "repositorio/filmesRepositorioPDO.php";
require "model/Filme.php";

session_start();

$filmesRepositorio = new FilmesRepositorioPDO();
$filme = new Filme();

$filme->titulo     = $_POST["titulo"];
$filme->sinopse    = $_POST["sinopse"];
$filme->nota       = $_POST["nota"];
$filme->poster     = $_POST["poster"];

//Verificando se o filme foi inserido
if ($filmesRepositorio->salvar($filme))
    $_SESSION["msg"] = "Filme cadastrado com sucesso!";
else
    $_SESSION["msg"] = "Erro ao casdatrar filme";

header("Location: /");
