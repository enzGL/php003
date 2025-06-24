<?php 
 $servidor = "localhost";
 $bd = "movieflix";
 $usuario = "root";
 $senha = "";
 $id = $_GET['id'] ?? 0; //Recuperar info do id

 $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
 if (!$conexao) {
     die("Não conectado" . mysqli_connect_error());
 }
 ?>