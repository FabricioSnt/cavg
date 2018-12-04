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
        require './conbanco.php';
        $id = $_GET['id'];
        $sql = "DELETE FROM carros WHERE id = '$id' ";
        $query = mysqli_query($conecta, $sql);

        if ($query) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Carro Excluido
                     <a href="index.php"> Voltar</a>
                </div>';
        }
        ?>

        <footer class = "text-muted rodape">
            <div class = "container">

                <div class = "col-md-5 float-right ">
                    Trabalho de desenvolvimento de sistemas
                </div>
                <div class = "col-md-5 ">
                    Nome: Fabricio Santos e Eliani ludwig
                </div>

            </div>
        </footer>





    </body>
</html>

