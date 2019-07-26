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
                    <br><br>
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

                    echo"<br><br><center><h4>Formulário registrado! <br> <br></h4></center>"
                    ?>
                    <!--fim envio -->

                    <center>
                        <label type="text" style="color: #003333"><h3><b>Obrigado por participar :) <br> Sua contribuição é de suma importância para nós.</b></h3> <br> 
                            Até a próxima!</label>
                        <img src="emoticon.png" width="100px">
                        <br><br><br>
                        <a href="homepage.php" class="btn btn-primary btn-lg active" role="button">Responder novamente</a>
                    </center>

                </div>
            </div>
        </div>
    </body>
    <script src="./dist/js/jquery.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
</html>





