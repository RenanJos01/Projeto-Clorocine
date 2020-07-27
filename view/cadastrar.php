<?php include "cabecalho.php" ?>

<body>
    <nav class="nav-extended #ce93d8 purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="/">Galeria</a></li>
                <li class="active"><a href="">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header">
            <h1 class="center">CLOROCINE</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a href="">Todos</a></li>
                <li class="tab"><a href="">Assistidos</a></li>
                <li class="tab"><a href="">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <form method="POST" enctype="multipart/form-data">
            <div class="col s6 offset-s3">
                <div class="card white">
                    <div class="card-content">
                        <span class="card-title">Cadastrar Filme</span>

                        <!-- input título-->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="titulo" type="text" class="validate" name="titulo" required>
                                <label for="titulo">Titulo do filme</label>
                            </div>
                        </div>

                        <!-- input da sinopse-->
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea name="sinopse" id="sinopse" class="materialize-textarea"></textarea>
                                        <label for="sinopse">Sinopse</label>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- input da avaliação-->
                        <div class="row">
                            <div class="input-field col s3">
                                <input name="nota" id="avaliacao" type="number" step=".1" max="10" min="0" class="validate" required>
                                <label for="avaliacao">Avaliação</label>
                            </div>
                        </div>

                        <!-- input da capa do filme-->
                        <div class="file-field input-field">
                            <div class="btn purple lighten-2">
                                <span>Capa</span>
                                <input type="file" name="poster_file">
                            </div>
                            <div class="file-path-wrapper">
                                <input name="poster" class="file-path validate" type="text" placeholder="Selecione uma imagem">
                            </div>
                        </div>


                    </div>
                    <div class="card-action">
                        <a class="btn waves-effect grey" href="/">Cancelar</a>
                        <button type="submit" class="waves-effect waves-light btn right purple">Cadastrar</button>
                    </div>
                </div>
            </div>
    </div>
    </form>
</body>

</html>