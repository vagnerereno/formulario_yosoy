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

        <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

        <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
        <script src="/__/firebase/6.2.0/firebase-app.js"></script>

        <!-- Add Firebase products that you want to use -->
        <script src="/__/firebase/6.2.0/firebase-auth.js"></script>
        <script src="/__/firebase/6.2.0/firebase-firestore.js"></script>

        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-app.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use
             https://firebase.google.com/docs/web/setup#available-libraries -->
        <script src="/__/firebase/init.js"></script>
        <script>
            // Your web app's Firebase configuration
            var firebaseConfig = {
                apiKey: "AIzaSyC5vhL9fqnhCd9M76C5WNXak3xL2tpcsQ8",
                authDomain: "yosoy-f1bbd.firebaseapp.com",
                databaseURL: "https://yosoy-f1bbd.firebaseio.com",
                projectId: "yosoy-f1bbd",
                storageBucket: "yosoy-f1bbd.appspot.com",
                messagingSenderId: "306899801420",
                appId: "1:306899801420:web:518ddac2eb3e1669bdebe9"
            };
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
        </script>


        <div class="container">

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



            <script>
                const nome = document.getElementById('nome');
                const telefone = document.getElementById('telefone');
                const categoria = document.getElementById('categoria');
                const descricao = document.getElementById('descricao');
                const email = document.getElementById('email');
                const dbRef = firebase.database().ref().child('bigText', 'telefone', 'categoria', 'descricao', 'email');
                dbRef.on('value', snap => bigText.innerText = snap.val(nome, telefone, categoria, descricao, email));
            </script>
            ");



            <div class="col-lg-4" style="background-image: url(backgroundformulario.png); color: white" >
                <form action="enviahomepage.php" method="post">
                    <center><label type="text" style="color: white"><h3><b>Você tem interesse em trabalhar conosco? <br><br> Realize seu pré-cadastro abaixo</b></h3>
                        </label></center>
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
                        <label for="exampleInputEmail1">Categoria</label>
                        <input type="textarea" class="form-control" name="categoria" id="categoria" aria-describedby="emailHelp" placeholder="Qual a categoria que você se encaixa?">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Descrição dos seus serviços</label>
                        <input type="email" class="form-control" name="descricao" id="descricao" aria-describedby="emailHelp" placeholder="Descreva com detalhes o serviço que você presta?">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Nome completo">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success btn-block"><b>Enviar Resposta</b></button>
                    <br>
                    </div>



                </form>


            </div>
        </div>
    </body>
    <script src="./dist/js/jquery.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
</html>





