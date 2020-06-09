<!--Inmportando o cabeçalho de um arquivo php-->
<?php include "cabecalho.php"?>

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
    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="https://image.tmdb.org/t/p/w400/nCbkOyOMTEwlEV0LtCOvCnwEONA.jpg">
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p class="valign-wrapper">
            <i class="material-icons amber-text">star</i>9,7
          </p>
          <span class="card-title">Interestelar</span>
          <p>As reservas naturais da Terra estão chegando ao fim e um grupo de astronautas recebe a missão de verificar possíveis planetas para receberem a população mundial, possibilitando a continuação da espécie. Cooper é chamado para liderar o grupo
            e aceita a missão sabendo que pode nunca mais ver os filhos. Ao lado de Brand, Jenkins e Doyle, ele seguirá em busca de um novo lar.</p>
        </div>
      </div>
    </div>
    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="https://image.tmdb.org/t/p/w400/7tTvREykun6WeGJ4hy7sCG9TOeP.jpg">
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p class="valign-wrapper">
            <i class="material-icons amber-text">star</i>9,7
          </p>
          <span class="card-title">Interestelar</span>
          <p>O brilhante e imaturo detetive Jake Peralta precisa aprender a seguir as regras e trabalhar em equipe quando um capitão exigente assume o comando de seu esquadrão.</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>