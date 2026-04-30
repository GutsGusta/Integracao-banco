<?php
require_once 'crud.php';

$idMusica = 67;

$dadosAtualizados = [
    'nome_musica' => 'Tux for Dummies',
    'id' => 9781118008188,
    'autor' => 'John Lennon',
    'tempo_musica' => 0:05:59,
    'genero' => 'Disponivel',
    'album' => 'Informatica',
    'data_publicacao' => '2023-05-18'
];

$linhasAfetadas = update($pdo, 'musicas', $dadosAtualizados, "id = $idMusica");    

if ($linhasAfetadas > 0) {
    echo 'Música atualizada com sucesso!';
} else {
    echo 'Não foi possível atualizar a Música.';
}