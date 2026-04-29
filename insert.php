<?php
require_once 'crud.php';

$novaMusica = [
    'nome_musica' => 'PHP for Dummies',
    'id' => 9781118008188,
    'autor' => 'John Doe',
    'tempo_musica' => 09:59,
    'genero' => 'Disponivel',
    'album' => 'Informatica',
    'data_publicacao' => '2026-05-18'
];

$idMusicaNova = create($pdo, 'livros', $novaMusica);
echo 'Nova música inserida com ID: '. $idMusicaNova;