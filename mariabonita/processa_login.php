<?php
session_start();

$conectar = mysqli_connect("localhost", "root", "", "mariabonita");

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql_consulta = "SELECT usuario, senha, nome, idclientes FROM clientes WHERE usuario = '$usuario' AND senha = '$senha'";

$resultado_consulta = mysqli_query($conectar, $sql_consulta);
$linhas = mysqli_num_rows($resultado_consulta);

if ($linhas == 1) {
    $registro = mysqli_fetch_row($resultado_consulta);
    $_SESSION["nome"] = $registro[2];
    
    // Sucesso no login
    $response2 = array('status' => 'success', 'message' => 'Login realizado com sucesso!');
} else {
    // Falha no login
    $response2 = array('status' => 'error', 'message' => 'Login ou senha incorretos! Digite novamente!');
}

echo json_encode($response2);
?>
