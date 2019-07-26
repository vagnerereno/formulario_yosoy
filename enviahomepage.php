<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <link rel="stylesheet" href="./dist/css/bootstrap.min.css">        
        <link rel="stylesheet" type="text/css" href="./dist/css/carroucel.css" /> 
        <title>PESQUISA YOSOY</title>
        <link href="css/seu-stylesheet.css" rel="stylesheet"/>
        <script src="scripts/seu-script.js"></script>
    </head>
    <body background='fundo.png'>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <img src="logo.png" width="700">
                    <div class='row'>

                        <div style="float: left; width: 31%">
                            <center><label type='text' ><h3><b>Diversas categorias!</b></h3></label>
                                <img src='categorias.png' width="180" vspace="2px" hspace="15px" >
                            </center>
                        </div>

                        <div style="float: left; width: 34%">
                            <center><label type='text'><h3><b>Chat em tempo real!</b></h3></label>
                                <img src='chat.png' width="180" vspace="2px" hspace="50px" >
                            </center>
                        </div>

                        <div style="float: left; width: 35%">
                            <center>
                                <label type='text'><h3><b>Sistema de avaliação!</b></h3></label>

                                <img src='perfil.png' width="180" vspace="2px" hspace="50px" >
                            </center>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="homepage.php" method="post">
                        <center><label type="text" style="color: #003333"><h3><b>Participe da nossa pesquisa! <br> Estará nos ajudando muito.</b></h3> <br> 
                                * Para participar, responda esse simples formulário</label></center>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome completo</label>
                            <input type="email" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" placeholder="Nome completo">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone</label>
                            <input type="email" class="form-control" name="telefone" id="telefone" aria-describedby="emailHelp" placeholder="Nome completo">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Nome completo">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Possui MEI?</label>
                            <input type="email" class="form-control" name="pergunta1" id="pergunta1" aria-describedby="emailHelp" placeholder="Nome completo">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Utiliza o MEI para gerar notas fiscais?</label>
                            <input type="email" class="form-control" name="pergunta2" id="pergunta2" aria-describedby="emailHelp" placeholder="Nome completo">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Você utilizaria o software?</label>
                            <input type="email" class="form-control" name="pergunta3" id="pergunta3" aria-describedby="emailHelp" placeholder="Nome completo">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar Resposta</button>
                    </form>
                    <!--envio ao banco -->

                    <?php
                    require "conexao.php";

                    mysqli_query($conectar, "SET NAMES 'utf-8';");
                    $nome = $_POST['nome'];
                    $telefone = $_POST['telefone'];
                    $email = $_POST['email'];
                    $pergunta1 = $_POST['pergunta1'];
                    $pergunta2 = $_POST['pergunta2'];
                    $pergunta3 = $_POST['pergunta3'];


                    $sql = "INSERT INTO pesquisa (nome, telefone, email, pergunta1, pergunta2, pergunta3) VALUES ('$nome','$telefone', '$email', '$pergunta1', '$pergunta2', '$pergunta3')";

                    mysqli_query($conectar, $sql) or die('Error' . mysqli_error($conectar));

                    echo"<br><br><center><h4>Cadastro Realizado com Sucesso!!</h4></center>"
                    ?>
                    <!--fim envio -->
                </div>
            </div>
        </div>
    </body>
    <script src="./dist/js/jquery.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
</html>





