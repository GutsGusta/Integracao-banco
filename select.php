<?php

require_once 'crud.php';

print '<table border=1>
    <tr>
    <th>ID</th>
    <th>Título</th>
    </tr>';


$musicas = readAll($pdo, 'livros');

// print_r($livros);

foreach($musicas as $musica) {
    echo "<tr><td> ".$musica['id']."</td><td> ".$musica['titulo']."</td></tr>";
}

print '</table>';

$musica = read($pdo, 'musicas', 'id = 67');

if ($musica) {
    echo '<p>O livro em questão é: '.$musica['titulo'].'</p>';
}