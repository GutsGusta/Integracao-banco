<?php
require_once 'crud.php';

$idMusica = 67;

$dadosAtualizados = [
    'titulo' => 'Tux for Dummies',
    'isbn' => 9781118008188,
    'autor' => 'John Lennon',
    'preco' => 299.99,
    'situacao' => 'Disponivel',
    'categoria' => 'Informatica',
];

$linhasAfetadas = update($pdo, 'musicas', $dadosAtualizados, "id = $idMusica");    

if ($linhasAfetadas > 0) {
    echo 'Música atualizada com sucesso!';
} else {
    echo 'Não foi possível atualizar a Música.';
}