<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";
if ($bd->exec($sql)) echo "\nTabela filmes apagada.\n";


$sql = "CREATE TABLE filmes(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR(200) NOT NULL,
    poster VARCHAR(200),
    sinopse TEXT,
    nota DECIMAL(2,1)
)
";
if ($bd->exec($sql))
    echo "\ntabela filmes criada com sucesso\n";
else
    echo "\nErro ao criar tabela filmes\n";

//Inserindo filme
$sql = "INSERT INTO filmes(id, titulo, poster,sinopse, nota) VALUES(
    0,
    'Interestelar',
    'https://image.tmdb.org/t/p/original/nCbkOyOMTEwlEV0LtCOvCnwEONA.jpg',
    'As reservas naturais da Terra estão chegando ao fim e um grupo de astronautas recebe a missão de verificar possíveis planetas para receberem a população mundial, possibilitando a continuação da espécie. Cooper é chamado para liderar o grupo e aceita a missão sabendo que pode nunca mais ver os filhos. Ao lado de Brand, Jenkins e Doyle, ele seguirá em busca de um novo lar.',
    8.6
    )";

//Verificando se o filme foi inserido
if ($bd->exec($sql))
    echo "\nFilmes inseridos com sucesso.\n";
else
    echo "\nErro ao inserir filmes  \n";

//Inserindo filme
$sql = "INSERT INTO filmes(id, titulo, poster,sinopse, nota) VALUES(
    1,
    'Your Name',
    'https://image.tmdb.org/t/p/original/iwWGMrybix3DZ4V7TJEL0IPURWT.jpg',
    'Mitsuha Miyamizu, uma colegial, deseja viver a vida de um garoto na cidade fervorosa de Tóquio, um sonho que contrasta com sua vida atual no interior. Enquanto isso na cidade, Taki Tachibana vive uma vida ocupada de colegial entre seus estudos e seu emprego de meio-período, esperando por um futuro na arquitetura. Um dia, Mitsuha acorda num quarto que não é dela, e se vê vivendo a vida dos sonhos em Tóquio, mas no corpo de Taki! Em outro lugar,
 Taki se encontra vivendo a vida de Mitsuha no humilde interior. Em busca de uma resposta para esse estranho fenômeno, começam a procurar um pelo outro.',
    9.2
    )";

//Verificando se o filme foi inserido
if ($bd->exec($sql))
    echo "\nFilmes inseridos com sucesso.\n";
else
    echo "\nErro ao inserir filmes  \n";