<!DOCTYPE html>
<?php
require './conbanco.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Locadora</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/config/estilo.css">
        <script src="assets/config/jquery.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script> 
        <script src="assets/config/config.js"></script> 
    </head>
    <body>

        <header>

            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container d-flex justify-content-between">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <strong>Locação de automoveis</strong>
                    </a>               
                </div>
            </div>
        </header>

        <?php
       
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
        ?>

        <footer class="text-muted rodape">
            <div class="container">

                <div class="col-md-5 float-right ">
                    Trabalho de desenvolvimento de sistemas
                </div>
                <div class="col-md-5 ">
                    Nome: Fabricio Santos e Eliani ludwig
                </div>

            </div>
        </footer>



    </body>
</html>

