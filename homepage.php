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
                <div class="col-lg-4" style="background-image: url(backgroundformulario.png); color: white" >
                    <form action="enviahomepage.php" method="post">
                        <center><label type="text" style="color: white"><h3><b>Participe da nossa pesquisa! <br> Estará nos ajudando muito.</b></h3> <br> 
                                * Para participar, responda esse simples formulário</label></center>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome completo</label>
                            <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" placeholder="Nome completo">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone</label>
                            <input type="tel" class="form-control" name="telefone" id="telefone" aria-describedby="emailHelp" placeholder="Nome completo">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Nome completo">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Você já é um MEI (Microempreendedor individual)?</label><br>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-info ">
                                    <input type="radio" name="pergunta1" id="pergunta1" autocomplete="off" value="sim"> <label style="color:black; width: 100px; height: 15px">Sim</label> 
                                </label>
                                <label class="btn btn-info">
                                    <input type="radio" name="pergunta1" id="pergunta1" autocomplete="off"  value="nao"> <label style="color:black; width: 100px; height: 15px">Não</label> 
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Você emite notas fiscais para os serviços prestados?</label><br>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-info ">
                                    <input type="radio" name="pergunta2" id="sim" pergunta2="off" value="sim" st> <label style="color:black; width: 100px; height: 15px">Sim</label> 
                                </label>
                                <label class="btn btn-info">
                                    <input type="radio" name="pergunta2" id="pergunta2" autocomplete="off" value="nao"> <label style="color:black; width: 100px; height: 15px">Não</label> 
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Você utilizaria o aplicativo para <b>oferecer</b> serviços?</label><br>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-info ">
                                    <input type="radio" name="pergunta3" id="pergunta3" value="sim" autocomplete="off"> <label style="color:black; width: 100px; height: 15px">Sim</label> 
                                </label>
                                <label class="btn btn-info">
                                    <input type="radio" name="pergunta3" id="pergunta3" value="nao" autocomplete="off"> <label style="color:black; width: 100px; height: 15px">Não</label> 
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Você utilizaria o aplicativo para solicitar serviços?</label><br>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-info ">
                                    <input type="radio" name="pergunta4" id="pergunta4" value="sim" autocomplete="off"> <label style="color:black; width: 100px; height: 15px">Sim</label> 
                                </label>
                                <label class="btn btn-info">
                                    <input type="radio" name="pergunta4" id="pergunta4" value="nao" autocomplete="off"> <label style="color:black; width: 100px; height: 15px">Não</label> 
                                </label>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success btn-block"><b>Enviar Resposta</b></button>
                        <br>
                    </form>

                </div>
            </div>
        </div>
    </body>
    <script src="./dist/js/jquery.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
</html>





