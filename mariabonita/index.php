<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maria Bonita - Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <div class="video-background">
        <video autoplay muted loop>
            <source src="img/202004-916894674.mp4" type="video/mp4">

        </video>
    </div>
    
    <div class="container">

    <img src="img/logo.png">
        
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Já possui cadastro?</h2>

                <p class="description description-primary">Acesse o nosso site</p>

                <button id="signin" class="btn btn-primary">Entrar</button>


            </div>
            <div class="second-column">
                <h2 class="title title-second">Criar uma conta</h2>

                <br>
                <form class="form" id="formCadastro" method="post" action="processa_cadastra_login.php">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome" placeholder="Nome">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="usuario" placeholder="Usuario">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </label>


                    <button class="btn btn-second">criar

                    </button>




                </form>

            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Não possui cadastro?</h2>
                <p class="description description-primary">Crie uma conta</p>
                <p class="description description-primary">e acesse o nosso site</p>
                <button id="signup" class="btn btn-primary">criar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Acesse o nosso site</h2>

                <br>


                <form class="form" id="formLogin"  method="post" action="processa_login.php">

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="text" name="usuario" placeholder="Usuario">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </label>

                    
                    <button class="btn btn-second">entrar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/app.js"></script>
</body>

</html>