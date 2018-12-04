<?php

require './conbanco.php';

$marca = $_POST['marca'];
$cor = $_POST['cor'];
$ano = $_POST['ano'];
$km = $_POST['km'];

if (trim($marca) == '') {
    exit('<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    informe a marrca
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
} else if (trim($cor) == '') {
    exit('<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    informe a cor
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
} else if (trim($ano) == '') {
    exit('<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    informe o ano
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');

} else if (trim($km) == '') {
    exit('<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    informe os km
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
}

$sql = "INSERT INTO carros(ano,cor,marca,km) VALUES ('$ano','$cor','$marca',$km)";
$insert = mysqli_query($conecta, $sql);

if ($insert) {
    exit('<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Carro inserido com sucesso
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
} else {
    exit('<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Falha ao registrar veiculo
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
}
