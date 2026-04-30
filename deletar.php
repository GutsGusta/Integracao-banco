<?php
require_once 'crud.php';

$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $idMusica = $_POST['id'] ?? null;

    if ($idMusica) {
  
        try {
            $deleted = delete($pdo, 'playlist', "id = $idMusica");

            if ($deleted) {
                $mensagem = "<p style='color: green;'>Música com ID $idMusica excluída com sucesso.</p>";
            } else {
                $mensagem = "<p style='color: orange;'>Não foi possível excluir. Verifique se o ID $idMusica existe.</p>";
            }
        } catch (PDOException $e) {
            $mensagem = "<p style='color: red;'>Erro ao excluir: " . $e->getMessage() . "</p>";
        }
    } else {
        $mensagem = "<p style='color: red;'>Por favor, informe um ID válido.</p>";
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

    <main class="pagina-cadastro">
        <h2>Excluir Música</h2>
       
        <?php echo $mensagem; ?>

        <form action="deletar.php" method="POST" class="formulario">
            <p>Digite o ID da música que deseja remover permanentemente:</p>
            <input type="number" name="id" required placeholder="Ex: 10">
            <br><br>
            <button type="submit" style="background-color: #ff4d4d; color: white; border: none; padding: 10px; cursor: pointer;">
                Confirmar Exclusão
            </button>
        </form>
        
        <br>
        <a href="index.php">Voltar para a Lista</a>
    </main>
</body>
</html>