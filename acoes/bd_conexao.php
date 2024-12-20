<?php


// Dados de conexao
$host = 'localhost';
$user = 'root';
$password = '';
$database = '007_restaurante_fl';
$prefix = '007_';

// Verificar ao banco de dados
$conn = mysqli_connect($host, $user, $password, $database);

// Verificar a conexao
if (!$conn) {
    die('Erro ao conectar:'. mysqli_connect_error());
}
//echo "Conexao bem sucedida!";

?>