<?php
require_once 'crud.php';

$idMusica = 674;

$deleted = delete($pdo, 'musicas', "id = $idMusica");

if ($deleted) {
    echo 'Música excluida com sucesso.';
} else {
    echo 'Não foi possível excluir a Música.';
}