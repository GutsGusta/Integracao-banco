<?php
    require_once 'crud.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $tempo = !empty($_POST['tempo_musica']) ? $_POST['tempo_musica'] : '00:00:00';

        $novaMusica = [
                'nome_musica' => $_POST['nome_musica'] ?? '',
                'autor' => $_POST['autor'] ?? '',
                'tempo_musica' => $_POST['tempo_musica'] ?? '',
                'genero' => $_POST['genero'] ?? '',
                'album' => $_POST['album'] ?? '',
                'data_publicacao' => $_POST['data_publicacao'] ?? ''
            ];

            $idMusicaNova = create($pdo, 'playlist', $novaMusica);
           echo 'Nova música inserida com ID: '. $idMusicaNova;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de Músicas</title>
</head>
<body>

    <?php
        require_once 'partials/header.php';
    ?>

    <main class="pagina-cadastro">
        <h2>Adicione uma Música</h2>
        <form action="cadastro.php" method="POST" class="formulario-cadastro">
            <p>Nome da Música</p>
            <input type="text" name="nome_musica">
            <p>Autor da Música</p>
            <input type="text" name="autor">
            <p>Álbum da Música</p>
            <input type="text" name="album">
            <p>Gênero da Música</p>
            <input type="text" name="genero">
            <p>Duração da Música</p>
            <input type="time" step="1" name="tempo_musica">
            <p>Data de Publicação</p>
            <input type="date" name="data_publicacao"><br><br>
            <button type="submit" >Adicionar</button>
        </form>
    </main>

    
</body>
</html>