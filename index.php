<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="theme-color" content="#052442">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <title>Instrumentación y Control de México</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="bbc">
    <?php
    include('templates/navbar.php');
    ?>

    <div class="vps oh" style="position: relative;">

        <div class="swiper mySwiper" style="z-index: 8;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <div class="vps oh icp" style="background-image: url('assets/img/2.jpg'); ">
                        <div class="my-bullet my-bullet-mobile">
                            <p style="width: 100vw; text-align: center;">Ingeniería</p>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">

                    <div class="vps oh icp" style="background-image: url('assets/img/1.jpg'); ">
                        <div class="my-bullet my-bullet-mobile">
                            <p style="width: 100vw; text-align: center;">Procuración</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">

                    <div class="vps oh icp" style="background-image: url('assets/img/3.jpg'); ">
                        <div class="my-bullet my-bullet-mobile">
                            <p style="width: 100vw; text-align: center;">Construcción</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">

                    <div class="vps oh icp" style="background-image: url('assets/img/1.jpg'); ">
                        <div class="my-bullet my-bullet-mobile">
                            <p style="width: 100vw; text-align: center;">Mantenimiento</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">

                    <div class="vps oh icp" style="background-image: url('assets/img/2.jpg'); ">
                        <div class="my-bullet my-bullet-mobile">
                            <p style="width: 100vw; text-align: center;">Calibración</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">

                    <div class="vps oh icp" style="background-image: url('assets/img/4.jpg'); ">
                        <div class="my-bullet my-bullet-mobile">
                            <p style="width: 100vw; text-align: center;">Capacitación</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination">
            </div>
        </div>
        <p class="swiper-pagination-label">
            Servicios
            Efectivos</p>
    </div>

    <div class="description-container">


        <div class="description-area">
            <span class="description-text">
                La experiencia y nivel de compromiso de nuestro grupo de trabajo, que nos permite ser una rentable
                sinergia con
                nuestros clientes al coadyuvar alineadamente en el alcance de sus objetivos, representa nuestro mejor
                valor
                agregado en cada relación comercial.
            </span>
        </div>
    </div>

    <div id="home-services" class="pc services">
        <div class="img1 " onclick="window.location='/industrial';">
            <img src="assets/img/Instrumentacion-industrial.png" alt="" width="101%">
            <div class="tfi">
                <span class="">Instrumentación<br>Industrial</span>
            </div>
        </div>
        <div class="img1" onclick="window.location='/analitica';">
            <img src="assets/img/Instrumentacion-analitica.png" alt="" width="101%">
            <div class="tfi">
                <span class="">Instrumentación<br>Analítica</span>
            </div>
        </div>
        <div class="img1" onclick="window.location='/capacitacion';">
            <img src="assets/img/Capacitacion.png" alt="" width="101%">
            <div class="tfi">
                <span class="">Capacitación</span>
            </div>
        </div>
    </div>


    <div class="oh" style="background-image: url('assets/img/1.jpg');">
        <div class="oh p-5" style="background-color: rgba(37, 37, 37, 0.484);">
            <div class="row" style="background-color: rgba(241, 241, 241, 0.8); border-top: 20px solid var(--cprimaryColor);">

                <div class="col-5 nc">
                    <div class="d-flex flex-column justify-content-center" style="height: 100%; vertical-align: middle;">
                        <div class="pt-4 pb-3 mb-5" style="border: 3px solid var(--cprimaryColor); width: 100%; text-align: center;">
                            <p style="font-size: 40pt; font-family: 'mulibold'; font-weight: 900; color: var(--cprimaryColor);">
                                Nuestros
                                Clientes</p>
                        </div>
                        <p class="mt-4" style="font-size: 18pt;">Hemos desarrollado satisfactoriamente una
                            exitosa relación comercial basada en el
                            principio “Ganar – Ganar” con las siguientes
                            compañias de Clase Mundial: </p>
                    </div>
                </div>


                <div class="col-12 ncm" style="padding-left: 5%; padding-right: 5%;">
                    <div class="d-flex flex-column justify-content-center" style="height: 100%; vertical-align: middle;">
                        <p class="p-3 mt-5 ncmh">
                            Nuestros
                            Clientes</p>
                        <p class="mt-2 ncmt">Hemos desarrollado satisfactoriamente una
                            exitosa relación comercial basada en el
                            principio “Ganar – Ganar” con las siguientes
                            compañias de Clase Mundial: </p>
                    </div>
                </div>


                <div class="col mt-4 mb-4 overflow-auto" style="height: 600px;">
                    <div class="d-flex flex-wrap justify-content-center">
                        <?php
                        $alianzas = [
                            "Alstom.svg",
                            "basf.svg",
                            "CFE.svg",
                            "coca-cola.svg",
                            "conagua.svg",
                            "cydsa.svg",
                            "dupont.svg",
                            "General_Electric.svg",
                            "grupo primex.svg",
                            "grupo-dynasol.svg",
                            "GUILFORD.svg",
                            "honeywell.svg",
                            "Indelpro-Transparent.svg",
                            "Intertek_logo.svg",
                            "Kentech.svg",
                            "M_G.svg",
                            "pemex.svg",
                            "pepsi.svg",
                            "petrocel-temex.svg",
                            "petrocel.svg",
                            "PGR.svg",
                            "polioles.svg",
                            "PPG.svg",
                            "SALUD.svg",
                            "SEMAR.svg",
                            "siemens.svg",
                            "Tepeal.svg",
                            "Trigen.svg",
                            "Universidad_Anahuac.svg",
                            "vopak.svg"
                        ];
                        for ($i = 0; $i < count($alianzas); $i++) {
                            echo '<div style="width: 150px; height: 150px; background-color: white;margin:15px; background-image: url(\'assets/img/alianzas/' . $alianzas[$i] . '\'); background-repeat: no-repeat; background-size: 150px; background-position: center center;"></div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="width: 100%; height: 15px; margin-top: 20px;" class="pc oh"></div>

    <div class="d-flex justify-content-center oh" style="margin-top: 20px;">
        <div class="pc twc dh">
            <span>Distribuidores</span>
        </div>
    </div>

    <div class="oh d-flex justify-content-center flex-wrap pe-5 ps-5 pt-5 pb-5 mb-3">


        <div class="star patest" style="margin: 20px;
        background-image: url('https://i.pravatar.cc/150?img=1');
        ">
        </div>
        <div class="star patest" style="margin: 20px;
        background-image: url('https://i.pravatar.cc/150?img=2');
        ">
        </div>
        <div class="star patest" style="margin: 20px;
        background-image: url('https://i.pravatar.cc/150?img=3');
        ">
        </div>
        <div class="star patest" style="margin: 20px;
        background-image: url('https://i.pravatar.cc/150?img=4');
        ">
        </div>
        <div class="star patest" style="margin: 20px;
        background-image: url('https://i.pravatar.cc/150?img=5');
        ">
        </div>
        <div class="star patest" style="margin: 20px;
        background-image: url('https://i.pravatar.cc/150?img=6');
        ">
        </div>
        <div class="star patest" style="margin: 20px;
        background-image: url('https://i.pravatar.cc/150?img=7');
        ">
        </div>
        <div class="star patest" style="margin: 20px;
        background-image: url('https://i.pravatar.cc/150?img=8');
        ">
        </div>
        <div class="star patest" style="margin: 20px;
        background-image: url('https://i.pravatar.cc/150?img=9');
        ">
        </div>
        <div class="star patest" style="margin: 20px;
        background-image: url('https://i.pravatar.cc/150?img=10');
        ">
        </div>
        <div class="star patest" style="margin: 20px;
        background-image: url('https://i.pravatar.cc/150?img=11');
        ">
        </div>
        <div class="star patest" style="margin: 20px;
        background-image: url('https://i.pravatar.cc/150?img=12');
        ">
        </div>
        <div class="star patest" style="margin: 20px;
        background-image: url('https://i.pravatar.cc/150?img=13');
        ">
        </div>
        <div class="star patest" style="margin: 20px;
        background-image: url('https://i.pravatar.cc/150?img=14');
        ">
        </div>

    </div>


    <?php
    include('templates/footer.php');
    ?>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/swip.js"></script>

</body>

</html>