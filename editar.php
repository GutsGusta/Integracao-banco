<?php
    require_once 'crud.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        $idMusica = $_POST['id'] ?? null;

        if($idMusica) {
            $tempo = !empty($_POST['tempo_musica']) ? $_POST['tempo_musica'] : '00:00:00';

            $dadosAtualizados = [
                'nome_musica' => $_POST['nome_musica'] ?? '',
                'autor' => $_POST['autor'] ?? '',
                'tempo_musica' => $_POST['tempo_musica'] ?? '',
                'genero' => $_POST['genero'] ?? '',
                'album' => $_POST['album'] ?? '',
                'data_publicacao' => $_POST['data_publicacao'] ?? '',
            ];

            $linhasAfetadas = update($pdo, 'playlist', $dadosAtualizados, "id = $idMusica");    

            
        }
    }    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Editar Música</title>
</head>
<body>
    <?php
        require_once 'partials/header.php';     
    ?>

    <form action="editar.php" method="POST" class="formulario-editar">
        <p>Qual é o ID da Música que você deseja editar?</p>
        <input type="number" name="id">
        <p>Editar nome da Música</p>
        <input type="text" name="nome_musica">
        <p>Editar Autor</p>
        <input type="text" name="autor">
        <p>Editar Álbum</p>
        <input type="text" name="album">
        <p>Editar Gênero</p>
        <input type="text" name="genero">
        <p>Editar Tempo da Música</p>
        <input type="time" name="tempo_musica">
        <p>Editar Data de Publicação</p>
        <input type="date" name="data_publicacao">
        <button type="submit">Salvar Alterações</button>
    </form>

    <?php
        if ($linhasAfetadas > 0) {
                    echo 'Música atualizada com sucesso!';
                } else {
                    echo 'Não foi possível atualizar a Música.';
                }
    ?>        
</body>
</html>