<?php
require_once 'crud.php';

$idLivro = 67;

$dadosAtualizados = [
    'titulo' => 'Tux for Dummies',
    'isbn' => 9781118008188,
    'autor' => 'John Lennon',
    'preco' => 299.99,
    'situacao' => 'Disponivel',
    'categoria' => 'Informatica',
];

$linhasAfetadas = update($pdo, 'livros', $dadosAtualizados, "id = $idLivro");    

if ($linhasAfetadas > 0) {
    echo 'Livro atualizado com sucesso!';
} else {
    echo 'Não foi possível atualizar o livro.';
}