<?php
/* conexao com o bd */
$servername = "baseteste.srv.br";
$username = "basetestesrv_u_locatelli";
$password = "piorsaladomundo";
$database = "baseteste_locatelli";

$conexao = mysqli_connect($servername, $username, $password, $database);

if($conexao){
    die("Falhou a conexão".mysqli_connect_error());
}else{
    echo "conectado com sucesso";
}
?>