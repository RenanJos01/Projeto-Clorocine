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
        $filme = (object) $request;

        $upload = $this->savePoster($_FILES);

        if(gettype($upload)=="string"){
            $filme->poster=$upload;
        }

        //Verificando se o filme foi inserido
        if ($filmesRepositorio->salvar($filme))
            $_SESSION["msg"] = "Filme cadastrado com sucesso!";
        else
            $_SESSION["msg"] = "Erro ao casdatrar filme";

        header("Location: /");
    }
    private function savePoster($file){
        $posterDir = "imagens/posters/";
        $posterPath = $posterDir.basename($file["poster_file"]["name"]);
        $posterTemp = $file["poster_file"]["tmp_name"];
        if(move_uploaded_file($posterTemp, $posterPath)){
            return $posterPath;
        }else{
            return false;
        }
    }
}
