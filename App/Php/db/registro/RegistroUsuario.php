<?php 
include '../conexao/conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$sql = "INSERT INTO usuarios (nome, sobrenome, email, celular, senha) VALUES (?, ?, ?, ?, ?)";
$stmt = $conexao->prepare($sql);
if ($stmt) {
    $stmt->bind_param("sssss", $nome, $sobrenome, $email, $celular, $senha);
    if ($stmt->execute()) {
        echo "<meta http-equiv='refresh' content='0, url=../../pages/LoginCadastro/Login.php'>";
    } 
    $stmt->close();
}
$conexao->close();
?>
