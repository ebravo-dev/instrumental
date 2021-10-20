<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="theme-color" content="#052442">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Contacto</title>
</head>

<body class="bbc">
    <?php
    include('../templates/navbar.php');
    $urlImageBanner = '../assets/img/contacto.jpg';
    $labelBanner = 'Contacto';
    include('../templates/banner.php');
    ?>

    <div class="oh d-flex flex-wrap pt-5 mt-5 justify-content-center">
        <img src="../assets/img/ICM Fb AZUL.svg" alt="" width="150" height="150">
        <div style="width: 20px;"></div>
        <img src="../assets/img/ICM In AZUL.svg" alt="" width="150" height="150">
        <div style="width: 20px;"></div>
        <img src="../assets/img/ICM Wp AZUL.svg" alt="" width="150" height="150">
        <div style="width: 20px;"></div>
        <img src="../assets/img/ICONO TEL AZUL.svg" alt="" width="150" height="150">
        <div style="width: 20px;"></div>
        <img src="../assets/img/ICONO MAIL AZUL.svg" alt="" width="150" height="150">
    </div>
    <div class="oh">
        <p class="text-center fs-3 pt-2 pb-5">
            Da click en cualquiera de los iconos y ponte en contacto directo con
            <br>Instrumentación y Control de México
        </p>
    </div>

    <div style="width: 100%; 
    background-color:#191919;
    " class="twc oh">

        <p class="text-left display-1 container pt-4">Ponte en contacto</p>
        <div style="height: 50px;"></div>
        <div class="oh form-desktop">
            <form method="POST" action="sendmail.php">
                <div class="container fs-4">
                    <div class="row pb-3">
                        <div class="col">
                            <input name="nombre" class="myinput twc w-100" type="text" placeholder="Nombre Completo" maxlength="60" required>
                        </div>
                        <div class="col">
                            <input name="correo" class="myinput twc w-100" type="email" placeholder="E-mail" maxlength="60" required>
                        </div>
                    </div>
                    <div class="row pt-3 pb-3">
                        <div class="col">
                            <input name="negocio" class="myinput twc w-100" type="text" placeholder="Nombre de Compañía" maxlength="60" required>
                        </div>
                        <div class="col">
                            <input name="celular" class="myinput twc w-100" type="text" placeholder="Número Celular (opcional)" maxlength="60">
                        </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col">
                            <textarea name="mensaje" rows="10" class="myarea twc w-100" type="text" placeholder="Mensaje" required></textarea>
                        </div>
                    </div>

                    <div style="height: 50px;"></div>
                    <div class="text-center">
                        <input type="submit" class="mysubmit fs-4" value="ENVIAR">
                    </div>
                    <div style="height: 150px;">

                    </div>
                </div>

            </form>
        </div>

        <div class="oh dn form-mobile">
            <form method="POST" action="sendmail.php">
                <div class="container fs-4">
                    <div class="row pb-3">
                        <div class="col">
                            <input name="nombre" class="myinput twc w-100" type="text" placeholder="Nombre Completo">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col">
                            <input name="correo" class="myinput twc w-100" type="text" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="row pt-3 pb-3">
                        <div class="col">
                            <input name="negocio" class="myinput twc w-100" type="text" placeholder="Nombre de Compañía">
                        </div>
                    </div>
                    <div class="row pt-3 pb-3">
                        <div class="col">
                            <input name="celular" class="myinput twc w-100" type="text" placeholder="Número Celular (opcional)">
                        </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col">
                            <textarea name="mensaje" rows="10" class="myarea twc w-100" type="text" placeholder="Mensaje"></textarea>
                        </div>
                    </div>

                    <div style="height: 50px;"></div>
                    <div class="text-center">
                        <input type="submit" class="mysubmit fs-4" value="ENVIAR">
                    </div>
                    <div style="height: 150px;">

                    </div>
                </div>

            </form>
        </div>
    </div>

    <?php
    include('../templates/footer.php');
    ?>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/nosotros.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/contacto.js"></script>
</body>

</html>