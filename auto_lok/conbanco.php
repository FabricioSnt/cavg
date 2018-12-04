<?php

//Parametros
$servidor = "localhost";
$user = "root";
$psw = "";
$banco = "auto_lok";

//Conexao
$conecta = mysqli_connect($servidor, $user, $psw, $banco);

/* Quando da erro na conexao apresenta essa mensagem */
if (mysqli_connect_errno()) {
    //Mensagem de erro
    echo "Erro de conexÃ£o com o banco do adopet: ";
}