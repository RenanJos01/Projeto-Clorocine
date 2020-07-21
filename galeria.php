<!--Inmportando o cabeçalho de um arquivo php-->
<?php include "cabecalho.php" ?>

<?php
session_start();

require "repositorio/filmesRepositorioPDO.php";
require "util/Mensagem.php";

$filmesRepositorio = new FilmesRepositorioPDO();
$filmes = $filmesRepositorio->listarTodos();
?>

<body>
  <nav class="nav-extended #ce93d8 purple lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active"><a href="/">Galeria</a></li>
        <li><a href="/novo">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header">
      <h1 class="center">CLOROCINE</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="">Todos</a></li>
        <li class="tab"><a href="">Assistidos</a></li>
        <li class="tab"><a href="">Favoritos</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <!-- Inicio do card -->
      <?php foreach ($filmes as $filme) : ?>
        <div class="col s12 m6 l3">
          <div class="card hoverable">
            <div class="card-image">
              <img src="<?= $filme->poster ?>">
              <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">playlist_add_check</i></a>
            </div>
            <div class="card-content">
              <p class="valign-wrapper">
                <i class="material-icons amber-text">star</i><?= $filme->nota ?>
              </p>
              <span class="card-title"><?= $filme->titulo ?></span>
              <p><?= $filme->sinopse ?></p>
            </div>
          </div>
        </div>
      <?php endforeach ?>
      <!-- Fim do card -->
    </div>
  </div>
        <!-- Mostrando a mensagem se foi cadastrado com sucesso ou não-->
        <?= Mensagem::mostrar(); ?>
</body>

</html>