<?php
require_once 'crud.php';

$idMusica = 674;

$deleted = delete($pdo, 'musicas', "id = $idMusica");

if ($deleted) {
    echo 'Música excluida com sucesso.';
} else {
    echo 'Não foi possível excluir a Música.';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'partials/header.php';
    ?>

    
</body>
</html>