<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Clima Brusque-SC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="js/clima.js"></script>

        <meta NAME="DESCRIPTION" CONTENT="Site de informações climáticas de Brusque e região"/>
        <meta NAME="ABSTRACT" CONTENT="Informações climáticas"/>
        <meta name="keywords" content="Brusque, clima, temperatura, umidade, clima de brusque, previsão do tempo, previsão do tempo brusque, temperatura em Brusque, umidade, umidade em Brusque, velocidade do vento, velocidade do vento em brusque, temperatura maxima, temperatura maxima em brusque, temperatura minima, temperatura minima em brusque"/>
        <meta NAME="title" CONTENT="Clima Brusque-SC" />
        <meta NAME="identifier-url" content="https://kevin-clima-senai.herokuapp.com/" />
        <meta NAME="author" content="Kevin Reimundi Costa" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" /> 
        <meta name="reply-to" content="kevin_r_costa@estudante.sc.senai.br"/>

        <!-- Tags Para rede social Facebook -->
        <meta property="og:url" content="" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Clima Brusque-SC" />
        <meta property="og:title" content="Clima Brusque-SC" />
        <meta property="og:description" content="Site de informações climáticas de Brusque e região" />
        <meta property="og:image" content="http://escolageorgina.com.br/wp-content/uploads/2019/09/Clima-em-ingl%C3%AAs-Conhe%C3%A7a-20-express%C3%B5es-800x439.jpg" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />

        <!-- Tags Para rede social Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Site de informações climáticas de Brusque e região" />
        <meta name="twitter:title" content="Clima Brusque-SC" />
    </head>
    <body>
        <div class="row">

            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Tempo para Brusque-SC | <span id="temperatura"></span></h1>
                    <p>
                        <span id="situacao"></span>
                        <img id="icone" src="img/icones/02d.png"/>
                    </p>
                </div>
            </div>

        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Umidade do ar</h1>
                <img width="30px" src="img/icones/umidade.jpg"/>
                <span id="umidade"></span>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Pressão do ar</h1>
                <img width="30px" src="img/icones/pressao.png"/>
                <span id="pressaoAr"></span>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Temperatura máxima</h1>
                <img width="30px" src="img/icones/setaCima.png"/>
                <span id="temp_max"></span>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Temperatura mínima</h1>
                <img width="30px" src="img/icones/setaBaixo.png"/>
                <span id="temp_min"></span>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Velocidade do vento</h1>
                <img width="30px" src="img/icones/velocidade.png"/>
                <span id="wind"></span>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Nascer do sol</h1>
                <img width="30px" src="img/icones/nascer.png"/>
                <span id="amanhecer"></span>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Por do sol</h1>
                <img width="30px" src="img/icones/por.png"/>
                <span id="anoitecer"></span>
            </div>
        </div>
    </body>
</html>