<?php
session_start();
require "repositorio/filmesRepositorioPDO.php";
require "model/Filme.php";

class FilmesController{
    public function index()
    {
        $filmesRepositorio = new FilmesRepositorioPDO();
        return $filmesRepositorio->listarTodos();
    }

    public function save($request)
    {
        $filmesRepositorio = new FilmesRepositorioPDO();
        $filme = new Filme();

        $filme->titulo     = $request["titulo"];
        $filme->sinopse    = $request["sinopse"];
        $filme->nota       = $request["nota"];
        $filme->poster     = $request["poster"];

        //Verificando se o filme foi inserido
        if ($filmesRepositorio->salvar($filme))
            $_SESSION["msg"] = "Filme cadastrado com sucesso!";
        else
            $_SESSION["msg"] = "Erro ao casdatrar filme";

        header("Location: /");
    }
}
