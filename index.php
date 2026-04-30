<?php
    require_once 'crud.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="x-icon" type="icon" href="#">
    <title>Home</title>
</head>
<body>
    <?php
        require_once 'partials/header.php';
    ?>

    <main>
        <?php
            print '<table class="tabela">
                <tr>
                <th>Música</th>
                <th>Autor</th>
                <th>Álbum</th>
                <th>Gênero</th>
                <th>Duração</th>
                <th>Data de Publicação</th>
                <th>ID da Música</th>
                </tr>';


            $musicas = readAll($pdo, 'musicas');

            // print_r($livros);

            foreach($musicas as $musica) {
                echo "<tr><td> ".$musica['nome_musica']."</td><td> ".$musica['autor']."</td><td>".$musica['album']."</td><td>".$musica['genero']."</td><td>".$musica['tempo_musica']."</td><td>".$musica['data_publicacao']."</td><td>".$musica['id']."</td></tr>";
            }

            print '</table>';

            $musica = read($pdo, 'musicas', 'id = 67');

            if ($musica) {
                echo '<p>O livro em questão é: '.$musica['titulo'].'</p>';
            }
        ?>
    </main>
</body>
</html>