<?php

require './conbanco.php';

$marca = $_POST['marca'];

if (trim($marca) == '') {
    exit('<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    informe a marca
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
}

$sql = "INSERT INTO marca(marca) VALUES ('$marca')";
$insert = mysqli_query($conecta, $sql);

if ($insert) {
     exit('<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Carro editado com sucesso
                     <a href="index.php"> Voltar</a>
               
                </div>');
} else {
    exit('<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Falha ao registrar Marca
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
}
