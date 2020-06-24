<!--Inmportando o cabeçalho de um arquivo php-->
<?php include "cabecalho.php" ?>

<?php
$bd = new SQLite3("filmes.db");
$sql = "SELECT * FROM filmes";
$filmes = $bd->query($sql);

$filme1 = [
  "titulo" => "Interestelar",
  "nota" => 8.6,
  "sinopse" => "As reservas naturais da Terra estão chegando ao fim e um grupo de astronautas recebe a missão de verificar possíveis planetas para receberem a população mundial, possibilitando a continuação da espécie. Cooper é chamado para liderar o grupo
  e aceita a missão sabendo que pode nunca mais ver os filhos. Ao lado de Brand, Jenkins e Doyle, ele seguirá em busca de um novo lar.",
  "poster" => "https://image.tmdb.org/t/p/original/nCbkOyOMTEwlEV0LtCOvCnwEONA.jpg"
];
$filme2 = [
  "titulo" => "Your Name",
  "nota" => 9.2,
  "sinopse" => "Mitsuha Miyamizu, uma colegial, deseja viver a vida de um garoto na cidade fervorosa de Tóquio, um sonho que contrasta com sua vida atual no interior. Enquanto isso na cidade, Taki Tachibana vive uma vida ocupada de colegial entre seus estudos e seu emprego de meio-período, esperando por um futuro na arquitetura. Um dia, Mitsuha acorda num quarto que não é dela, e se vê vivendo a vida dos sonhos em Tóquio, mas no corpo de Taki! Em outro lugar,
 Taki se encontra vivendo a vida de Mitsuha no humilde interior. Em busca de uma resposta para esse estranho fenômeno, começam a procurar um pelo outro.",
  "poster" => "https://image.tmdb.org/t/p/original/iwWGMrybix3DZ4V7TJEL0IPURWT.jpg"
];
$filme3 = [
  "titulo" => "Guerra Mundial Z",
  "nota" => 7.5,
  "sinopse" => "A história gira em torno de Gerry Lane, um funcionário da Nações Unidas, que atravessa o planeta numa corrida contra o tempo para parar uma pandemia que está derrubando exércitos e governos, ameaçando dizimar a própria humanidade.",
  "poster" => "https://image.tmdb.org/t/p/original/a8ogjWFd0QS6BzBkzfDMWukc26i.jpg"
];
$filme4 = [
  "titulo" => "Black Mirror - Bandersnatch ",
  "nota" => 6.9,
  "sinopse" => "Enquanto adapta um romance de fantasia para videogame em 1984, um jovem programador começa a questionar o próprio conceito de realidade e acaba enfrentando um desafio alucinante.",
  "poster" => "https://image.tmdb.org/t/p/original/fR0VZ0VE598zl1lrYf7IfBqEwQ2.jpg"
];
//$filmes = [$filme1, $filme2, $filme3, $filme4]
?>

<body>
  <nav class="nav-extended #ce93d8 purple lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active"><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header">
      <h1 class="center">CLOROCINE</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent #8e24aa purple darken-1">
        <li class="tab"><a class="active" href="">Todos</a></li>
        <li class="tab"><a href="">Assistidos</a></li>
        <li class="tab"><a href="">Favoritos</a></li>
      </ul>
    </div>
  </nav>

  <div class="row">
    <!-- Inicio do card -->
    <?php while($filme = $filmes->fetchArray()) :?>
      <div class="col s3">
        <div class="card hoverable">
          <div class="card-image">
            <img src="<?= $filme["poster"] ?>">
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
          </div>
          <div class="card-content">
            <p class="valign-wrapper">
              <i class="material-icons amber-text">star</i><?= $filme["nota"] ?>
            </p>
            <span class="card-title"><?= $filme["titulo"] ?></span>
            <p><?= $filme["sinopse"] ?></p>
          </div>
        </div>
      </div>
    <?php endwhile ?>
    <!-- Fim do card -->
  </div>
</body>

</html>