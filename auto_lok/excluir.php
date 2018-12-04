<?php
require './conbanco.php';
$id = $_GET['id'];
$sql = "DELETE FROM carros WHERE id = '$id' ";
$query = mysqli_query($conecta, $sql);

if($query){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Carro Excluido
                     <a href="index.php"> Voltar</a>
                </div>';
}



