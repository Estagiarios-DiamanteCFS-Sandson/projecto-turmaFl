<?php

//chamar o arquivo
require_once "bd_conexao.php";

if (isset($_POST['btn-login'])){

    $email = $_POST['email'];
    $password = $_POST['senha'];

   // echo "$email <br> $password";
   if(empty($email) || empty($password)) {
        echo "Email ou Senha devem estar preenchidos";
   } else{
    $sql = "SELECT * FROM {$prefix}user WHERE email = '$email' AND senha = '$password'";
    $resultado = mysqli_query($conn, $sql);
    if(mysqli_num_rows($resultado) > 0) {
        echo "Usuario encontrado";
   }
   else{
    echo "Usuario nao encontrado";
   }
  }
}
