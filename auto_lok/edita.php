<!DOCTYPE html>
<?php
require './conbanco.php';
$id = $_GET['id'];
$sql = "SELECT * FROM carros WHERE id ='$id'";
$query = mysqli_query($conecta, $sql);
$linha = mysqli_fetch_array($query);
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
                    <a href="index.php" class="navbar-brand d-flex align-items-center">
                        <strong>Locação de automoveis</strong>
                    </a>               
                </div>
            </div>
        </header><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">


                    <form action="proceEdita.php" method="post">
                        <div class="form-row">
                            <input type="hidden" value="<?php echo $linha['id']; ?>" class="form-control" name="id" >


                            <div class="form-group col-md-6">
                                <label for="marca">Marca</label>
                                <input type="text" value="<?php echo $linha['marca']; ?>" class="form-control" name="marca" id="marca" placeholder="Informe a marca">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="km">Km</label>
                                <input type="text" value="<?php echo $linha['km']; ?>" class="form-control" id="km" name="km" placeholder="informe os km">
                            </div>

                            <div class="form-group col-md-6">   
                                <label for="color">Selecione a cor</label>
                                <select name="cor" class="form-control" id="cor" required="">
                                    <option value="<?php echo $linha['cor']; ?>"><?php echo $linha['cor']; ?></option>
                                    
                                    
                                    <option value="Preto">Preto</option>
                                    <option value="Cinza">Cinza</option>
                                    <option value="Branco">Branco</option>
                                     <?php if($linha['cor'] != "Azul"){  ?>
                                    <option value="Azul">Azul</option>
                                     <?php }  ?>
                                    <option value="Verde">Verde</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="ano">Selecione o ano</label>
                                <select name="ano" class="form-control" id="ano" required="">                                 
                                    <option value="<?php echo $linha['ano']; ?>"><?php echo $linha['ano']; ?>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
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
