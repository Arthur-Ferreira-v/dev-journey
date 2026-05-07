<?php


$nome = "Mundo";


if (isset($_GET['nome'])) {
    $nome = htmlspecialchars($_GET['nome']); 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Página PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Olá, <?php echo $nome; ?>!</h1>

    <p>Bem-vindo ao seu primeiro script PHP.</p>

    <!-- Formulário simples para enviar o nome -->
    <form method="GET" action="index.php">
        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome">
        <button type="submit">Enviar</button>
    </form>

    <p>Se você inserir seu nome no campo acima e enviar, a página será atualizada com seu nome.</p>
</body>
</html>
