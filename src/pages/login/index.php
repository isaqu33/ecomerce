<!DOCTYPE html>
<html lang="pt-br">


<!-- <?php include_once '../../config/config.php'; ?>
<?php

if (isset($_SESSION['userLogged'])) {
    header("location: http://localhost/ecomerce/src/pages/home/");

}

?> -->





<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" />

    <title>Login</title>
</head>

<body>


    <div class="bodyLogin">
        <div class="boxLogin">

            <div class="adjusteImg">

                <img id="imgLogin" src="../../assets/undraw_remotely_-2-j6y.svg" alt="imgcompra">
            </div>




            <!-- login -->

            <div class=" adjustecardlEc">

                <div class="showLogin" id="showLogin">


                    <div class="header_boxLogin">
                        <h4>Digitei seu email ou nome de usuário</h4>
                    </div>
                    <div class="bbody_boxLogin">

                        <!-- <div class="imgLogin"><img src="../../assets/3d-casual-life-cloud-archive-laptop.png" alt=""></div> -->
                        <div class="cardWonLon">
                            <form action="" id="login-usuario-form">
                                <h5>Entrar com E-mail</h5>
                                <input type="text" name="email" id="email" placeholder="Digite seu email">
                                <h5>Senha</h5>
                                <input type="password" name="senha" autocomplete="on" id="senha"
                                    placeholder="Digite sua senha">
                                <div class="spacoBntCadastro">

                                    Não possui conta?

                                    <span class="BntOrLogin" id="BntCadastro">cadastre-se</span>
                                </div>
                                <input type="submit" id="send" name="acao" value="Entrar">

                            </form>

                        </div>

                    </div>


                </div>

                <!-- cadastro -->
                <div class="showCadastro" id="showCadastro">


                    <div class="header_boxLogin">
                        <h4>Para novo cadastro, preencha os campos </h4>
                    </div>
                    <div class="bbody_boxLogin">

                        <!-- <div class="imgLogin"><img src="../../assets/3d-casual-life-cloud-archive-laptop.png" alt=""></div> -->
                        <div class="cardWonLon">
                            <form action="" id="cadastro-usuario-form">
                                <h5>Nome</h5>
                                <input type="text" name="nome" id="nome" placeholder="Seu nome aqui...">
                                <h5>E-mail para login</h5>
                                <input type="text" name="emailcadastro" id="emailcadastro"
                                    placeholder="Seu E-mail aqui...">
                                <h5>sua Senha</h5>
                                <input type="password" name="senhacadastro" autocomplete="on" id="senhacadastro"
                                    placeholder="Sua Senha...">
                                <div>

                                    <input type="submit" id="sendcadastro" name="acao" value="enviar">
                                </div>

                            </form>

                        </div>

                    </div>

                    <div class="spacoBntCadastro">
                        já possui conta? loge-se a baixo:

                        <span class="BntOrLogin" id="BntLogin">Login</span>
                    </div>
                </div>
            </div>



        </div>


    </div>




    <script src="../../js/login.js"></script>

</body>

</html>