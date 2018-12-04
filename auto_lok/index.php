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

        <main class="" role="main">
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Locar</h1>
                    <p class="lead text-muted">Aqui na locar voce encontrara o carro que voce mais gosta.</p>
                    <p>
                        <button type="button" class="btn btn-primary btnmodal" data-toggle="modal" data-target="#consulta">
                            Consultar
                        </button>
                        <button type="button" class="btn btn-primary btnmodal" data-toggle="modal" data-target="#cadastro">
                            Cadastrar Carros
                        </button>
                        <button type="button" class="btn btn-primary btnmodal" data-toggle="modal" data-target="#cadastroMarca">
                            Cadastrar Marcas
                        </button>
                    </p>
                </div>               
            </section>
        </main>

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


        <!--Modal Cadastro-->
        <div id="cadastro" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Cadastro de carros</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <?php
                    $var = "SELECT * FROM marca"; // monta a consulta 
                    $sql = mysqli_query($conecta, $var); // executa a função no banco
                    ?>
                    <div class="modal-body">
                        <form class="needs-validation" id="contactform" action="cadastro.php" method="POST">

                            <div class="form-group">                               
                                <label for="marca">Marca </label>
                                <select  name="marca" class="form-control" id="marca" required="">
                                    <?php
                                    while ($linha = mysqli_fetch_array($sql)) {
                                        ?>
                                        <option value="<?php echo $linha['marca']; ?>"><?php echo $linha['marca']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">   
                                <label for="color">Selecione o ano</label>
                                <select name="cor" class="form-control" id="cor" required="">
                                    <option value="Vermelho">Vermelho</option>
                                    <option value="Preto">Preto</option>
                                    <option value="Cinza">Cinza</option>
                                    <option value="Branco">Branco</option>
                                    <option value="Azul">Azul</option>
                                    <option value="Verde">Verde</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="ano">Selecione o ano</label>
                                <select name="ano" class="form-control" id="ano" required="">                                 
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="km">Quilometros</label>
                                <input type="number" class="form-control" id="km" name="km" placeholder="Informe os km do carro">
                            </div>

                            <div class="form-group py-4">                              
                                <input type="submit" class="btn btn-success btn-lg" value="Cadastrar" name="cad" id="btnLogin">
                                <button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Cancelar</button>                              
                            </div>

                        </form>
                        <div id="message"></div>
                    </div>
                </div>
            </div>
        </div> 

        <!--Modal Consulta-->
        <div id="consulta" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Consulta de carros</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>

                    <div class="modal-body">
                        <form class="needs-validation" id="contactform" action="consultar.php" method="POST">

                            <div class="form-group">
                                <label for="marca">Marca </label>
                                <input type="text" class="form-control" name="marca" id="marca" placeholder="Chevrolet" >
                            </div>

                            <div class="form-group">
                                <label for="cor">cor</label>
                                <input type="text" class="form-control"  name="cor" id="cor" placeholder="Informe uma cor"  >
                            </div>

                            

                            <div class="form-group py-4">                              
                                <input type="submit" class="btn btn-success btn-lg" value="Consultar" id="btnLogin">
                                <button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Cancelar</button>                              
                            </div>
                        </form>
                        <div id="message"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal marcas-->
        <div id="cadastroMarca" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Cadastro de marcas</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>

                    <div class="modal-body">
                        <form class="needs-validation" id="contactform" action="cadMarca.php" method="POST">

                            <div class="form-group">
                                <label for="marca">Marca </label>
                                <input type="text" class="form-control" name="marca" id="marca" placeholder="Ex: Chevrolet" >
                            </div>

                            <div class="form-group py-4">                              
                                <input type="submit" class="btn btn-success btn-lg" name="cadMarca" value="Cadastrar" id="btnLogin">
                                <button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Cancelar</button>                              
                            </div>
                        </form>
                        <div id="message"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>