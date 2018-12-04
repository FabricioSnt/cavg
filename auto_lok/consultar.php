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
        <?php
        if (!$_POST) {
            exit('<div class="alert alert-danger alert-dismissible fade show" role="alert">
                   Devera ser informado algum parametro.
                   
                    <a href="index.php"> voltar</a> 
                </div>');
        }
        $marca = $_POST['marca'];
        $cor = $_POST['cor'];

        $sql = "SELECT * FROM carros WHERE marca LIKE '%$marca%' AND cor LIKE '%$cor%'";
        $query = mysqli_query($conecta, $sql);
        ?>
        <header>

            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container d-flex justify-content-between">
                    <a href="index.php" class="navbar-brand d-flex align-items-center">
                        <strong>Locação de automoveis</strong>
                    </a>               
                </div>
            </div>
        </header>
        <br> <br>

        <div class="container-fluid">
            <div class="row">

                <?php
                while ($linha = mysqli_fetch_array($query)) {
                    ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="assets/logo.png " alt="Card image cap">
                            <hr>
                            <div class="card-body">
                                <h5 class="card-title"><b>Marca:</b> <?php echo $linha['marca']; ?></h5>
                                <p class="card-text"><p><b>Cor:</b> <?php echo $linha['cor']; ?></p>
                                <p class="card-text"><p><b>Km:</b> <?php echo $linha['km']; ?></p>
                                <p class="card-text"><p><b>Ano:</b> <?php echo $linha['ano']; ?></p>
                                <a href="edita.php?id=<?php echo $linha['id']; ?>"> <button type="button" class="btn btn-warning btn-sm">Editar</button></a>
                                <a href="excluir.php?id=<?php echo $linha['id']; ?>" data-confirm="Tem certeza de que deseja excluir o item selecionado?"><button type=">button" class="btn btn-danger btn-sm">Excluir</button></a>

                            </div>
                        </div>

                    </div>

                    <?php
                }
                ?>
            </div>
        </div>
        <br>
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
