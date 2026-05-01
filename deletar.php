<?php
require_once 'crud.php';

$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idMusica = $_POST['id'] ?? null;

    if ($idMusica) {
        try {
            $deleted = delete($pdo, 'playlist', "id = $idMusica");

            if ($deleted) {
                $mensagem = "<p class='msg-sucesso'>Música com ID $idMusica excluída com sucesso.</p>";
            } else {
                $mensagem = "<p class='msg-alerta'>Não foi possível excluir. Verifique se o ID $idMusica existe.</p>";
            }
        } catch (PDOException $e) {
            $mensagem = "<p class='msg-erro'>Erro ao excluir: " . $e->getMessage() . "</p>";
        }
    } else {
        $mensagem = "<p class='msg-erro'>Por favor, informe um ID válido.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Excluir Música</title>
</head>
<body>
    <?php require_once 'partials/header.php'; ?>

    <main class="pagina-deletar">
        <h2>Excluir Música</h2>
        
        <?php echo $mensagem; ?>

        <form action="deletar.php" method="POST" class="formulario-deletar">
            <p>Digite o ID da música que deseja <br><strong>Remover Permanentemente:</strong></p>
            <input type="number" name="id" required placeholder="Ex: 10">
            <button type="submit">
                Confirmar Exclusão
            </button>
        </form>
        
        <a href="index.php" class="link-voltar">Voltar para a Lista</a>
    </main>
</body>
</html>    