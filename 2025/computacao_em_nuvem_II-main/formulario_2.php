<!-- Form.html -->
<form action="recebe.php" method="post">
    Nome: <input type="text" name="nome">
    <input type="submit" name="Enviar">
</form>
<?php
//recebe.php
$nome = $_POST['nome'] ?? "Desconhecido";
echo "Olá. $nome formulario recebido na nuvem"
?>