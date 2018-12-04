<?php

require './conbanco.php';

$marca = $_POST['marca'];
$id = $_POST['id'];
$cor = $_POST['cor'];
$ano = $_POST['ano'];
$km = $_POST['km'];


$query = "UPDATE carros SET marca = '$marca',cor='$cor',ano='$ano',km='$km' where id ='$id'";
$sql = mysqli_query($conecta, $query);

if ($sql) {
    exit('<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Carro editado com sucesso
                     <a href="index.php"> Voltar</a>
                </div>');
} else {
    exit('<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Falha ao registrar veiculo
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
}
