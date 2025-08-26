<?php
// conexao.php
$host = 'localhost';
$user = 'root'; // ajuste se necessário
$pass = '';
$db = 'biblioteca';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Erro de conexão: ' . $conn->connect_error);
}
?>
