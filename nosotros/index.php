<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="theme-color" content="#052442">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>¿Quienes Somos?</title>
</head>

<body class="bcc">
    <?php
    include('../templates/navbar.php');
    $urlImageBanner = '../assets/img/S-Instrumentacion Industrial.jpg';
    $labelBanner = '¿Quienes somos?';
    include('../templates/banner.php');
    ?>
    <div class="texto-nosotros fs-4 d-flex flex-column oh">
        <p>Instrumentación y Control de México emerge en 1999 como una solución técnica para el suministro de servicios
            costo efectivos sobre una línea de trabajo multidisciplinar en los diferentes niveles de ejecución de proyecto y
            mantenimiento presentando un solo proveedor en la cadena de suministro de servicios evitando consumo
            innecesario de tiempo, brechas en las interfaces de comunicación, costos incrementales no planeados y perdida
            de atención a objetivos estratégicos de negocio.</p><br>
        <p>La experiencia y nivel de compromiso de nuestro grupo de trabajo, que nos permite ser una rentable sinergia con
            nuestros clientes al coadyuvar alineadamente en el alcance de sus objetivos, representa nuestro mejor valor
            agregado en cada relación comercial que emprendemos en los siguientes, pero no limitados, sectores de negocio:</p><br>
        <ul class="circlepcmark tpc">
            <li class=""><span class="fs-4">Petróleo & Gas</span></li>
            <li><span class="fs-4">Químicos</span></li>
            <li><span class="fs-4">Textiles</span></li>
            <li><span class="fs-4">Generación de Electricidad</span></li>
            <li><span class="fs-4">Trabajos Costa Afuera</span></li>
        </ul>
    </div>

    <div class="tab-ser oh">
        <div class="d-flex flex-column justify-content-evenly oh nca" style="width: 100%;  ">
            <div class="row text-center oh mb-5">
                <div id="n1" onclick="activarn1()" class="col nca">
                    <span class="fs-1 fw-bold">Ingeniería</span>
                </div>
                <div id="n2" onclick="activarn2()" class="col ncd">
                    <span class="fs-1 fw-bold">Procuración</span>
                </div>
                <div id="n3" onclick="activarn3()" class="col ncd">
                    <span class="fs-1 fw-bold">Construcción</span>
                </div>
            </div>

            <div class="nca pt-5 pb-5 mb-5">
                <div class="npcontainer fs-4">
                    <ul id="np1" class="fadein checkmark" style="position: relative; animation-duration: 0.5s; ">
                        <li>Estudios de Evaluación de Proyectos</li>
                        <li>Estudios de Viabilidad</li>
                        <li>Homologación y Cumplimiento de Códigos & Estándares y Regulaciones</li>
                        <li>Selección de Sitio de Construcción</li>
                        <li>Levantamientos & Visita de Campo</li>
                        <li>Auditoria de Especificaciones</li>
                        <li>Evaluación de Equipo</li>
                        <li>Configuración de Proceso</li>
                        <li>Diseño Conceptual</li>
                        <li>Ingeniería de Detalle</li>
                        <li>Estudios de Constructabilidad</li>
                        <li>Análisis de Riesgo & Impacto Ambiental</li>
                        <li>Configuración de Sistemas de Proceso</li>
                        <li>Certificación & Aprobación de Ingeniería/Diseño</li>
                    </ul>
                </div>
                <div class="npcontainer fs-4">
                    <p id="np2" class="dn fadein " style="position: relative;animation-duration: 0.5s;">
                        Engarrotar Engarzador Abajar Descerrar Incorporeidad Increado Descensión Incorporal Basural. Gemiqueo Descentralización Bateador Generala Ficticio Abadí Incorruptible Abajadero Batazo Incorporo. Descerebrar Bástulo Bastonada Batanero General Geminar Engargolado Fidelísimo. Géminis Basurero Descensión Bateador Cendradilla Gémino. Generación Engarro Increíble Bastonear Cendrazo.
                    </p>
                </div>
                <div class="npcontainer fs-4">
                    <p id="np3" class="dn fadein " style="position: relative;animation-duration: 0.5s;">
                        Engarbarse Engargante Incorregiblemente. Abada Batallona Engargolar Batalán Cenceño Batallar. Batallador Incorporal Descentralizador Abajar Incruentamente.

                        Gemólogo Gemonias Descerrajado Cendradilla Generación Ficoideo Incrasar. Abadiado Descercar Descerrar Cendrado Gemir Cendrado. Cencerreo Descifrador Cencerrillas Descercar Engargolar. Descifre Cenagoso Descerrajadura Bastoncillo Generable Abadía Increpación. Descentrar Descenso Descerezar. Descentralización Gemiquear Batanear Ceñar Gemólogo Incorrupto Generador Abadernar Batallador.

                        Abajamiento Descerebrar Incorporo Genearca Gemoso Incredulidad Abacería Incorrecto Descensión Incrementar. Batanero Cencerrada Bastonada Cenceño Increíblemente Descercado Batallón Incrédulo Batalloso Abacalero. Abaco Céndea Descimbrar Incristalizable Incredulidad Descerebrado Descerrajadura Incorpóreo Cencido Incorpóreo.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-services-mobile dn nca pt-5 oh">
        <div class="d-flex flex-column align-items-start">
            <span class="fs-1 fw-bold align-self-center">Ingeniería</span>
            <div class="ps-5 pe-5 pt-3 pb-5 fs-4">
                <ul class="checkmark">
                    <li>Estudios de Evaluación de Proyectos</li>
                    <li>Estudios de Viabilidad</li>
                    <li>Homologación y Cumplimiento de Códigos & Estándares y Regulaciones</li>
                    <li>Selección de Sitio de Construcción</li>
                    <li>Levantamientos & Visita de Campo</li>
                    <li>Auditoria de Especificaciones</li>
                    <li>Evaluación de Equipo</li>
                    <li>Configuración de Proceso</li>
                    <li>Diseño Conceptual</li>
                    <li>Ingeniería de Detalle</li>
                    <li>Estudios de Constructabilidad</li>
                    <li>Análisis de Riesgo & Impacto Ambiental</li>
                    <li>Configuración de Sistemas de Proceso</li>
                    <li>Certificación & Aprobación de Ingeniería/Diseño</li>
                </ul>
            </div>
            <span class="fs-1 fw-bold align-self-center">Procuración</span>
            <p class="ps-5 pe-5 pt-3 pb-5 fs-4">
                Engarrotar Engarzador Abajar Descerrar Incorporeidad Increado Descensión Incorporal Basural. Gemiqueo Descentralización Bateador Generala Ficticio Abadí Incorruptible Abajadero Batazo Incorporo. Descerebrar Bástulo Bastonada Batanero General Geminar Engargolado Fidelísimo. Géminis Basurero Descensión Bateador Cendradilla Gémino. Generación Engarro Increíble Bastonear Cendrazo.
            </p>
            <span class="fs-1 fw-bold align-self-center">Construcción</span>
            <p class="ps-5 pe-5 pt-3 pb-5 fs-4">
                Engarbarse Engargante Incorregiblemente. Abada Batallona Engargolar Batalán Cenceño Batallar. Batallador Incorporal Descentralizador Abajar Incruentamente.

                Gemólogo Gemonias Descerrajado Cendradilla Generación Ficoideo Incrasar. Abadiado Descercar Descerrar Cendrado Gemir Cendrado. Cencerreo Descifrador Cencerrillas Descercar Engargolar. Descifre Cenagoso Descerrajadura Bastoncillo Generable Abadía Increpación. Descentrar Descenso Descerezar. Descentralización Gemiquear Batanear Ceñar Gemólogo Incorrupto Generador Abadernar Batallador.

                Abajamiento Descerebrar Incorporo Genearca Gemoso Incredulidad Abacería Incorrecto Descensión Incrementar. Batanero Cencerrada Bastonada Cenceño Increíblemente Descercado Batallón Incrédulo Batalloso Abacalero. Abaco Céndea Descimbrar Incristalizable Incredulidad Descerebrado Descerrajadura Incorpóreo Cencido Incorpóreo.
            </p>
        </div>
    </div>

    <div style="height: 70px;"></div>
    <div class="oh d-flex flex-column ncd mt-5 mb-5 pt-5 pb-5" style="padding-right: 12%; padding-left: 12%">
        <span class="fw-bolder fs-4 pb-5">Nuestro 7 Valores Centrales de la Compañía son:</span>
        <ul class="ms-5">
            <li class="fs-4">Sentido de Urgencia</li>
            <li class="fs-4">Compromiso con Tiempos de Entrega Establecidos</li>
            <li class="fs-4">Orientación a la Satisfacción del Cliente</li>
            <li class="fs-4">Centrados en el Cumplimiento de Normas y Regulaciones de Salud</li>
            <li class="fs-4">Seguridad y Ambientales</li>
            <li class="fs-4">Grupo de Trabajo Competitivo</li>
            <li class="fs-4">Honestidad</li>
            <li class="fs-4">Mejoramiento Continuo y Sostenido a Través de Sentido de Adaptación al Cambio</li>
        </ul>
    </div>
    <div style="height: 70px;"></div>
    <div class="curriculum oh curriculum-desktop" style="padding-top: 5%; padding-left:5%;">
        <div class="d-flex flex-column align-items-start">
            <span class="display-4 twc pb-5 mb-5">Consulta nuestro curriculum</span>
            <div class="pdfbutton">
                <span class="fs-2 twc ">
                    Click para ver PDF
                </span>
            </div>
        </div>
    </div>

    <div class="dn curriculum-mobile oh ">
        <div class="curriculum  d-flex flex-column align-items-center " style="padding-top: 90px;">
            <span class=" display-4 twc pb-5 mb-5 text-center">Consulta nuestro curriculum</span>
            <div class="pdfbutton text-center">
                <span class="fs-2 twc ">
                    Click para ver PDF
                </span>
            </div>

        </div>
    </div>

    <div class="certificados d-flex flex-column align-items-center">
        <div style="height: 200px;"></div>
        <p class="display-3 tpc">Certificados por:</p>
        <div class="d-flex flex-wrap justify-content-center">

            <img class="img-certificados" src="../assets/img/tlacuachu.png" alt="">
            <img class="img-certificados" src="../assets/img/tlacuachu.png" alt="">
            <img class="img-certificados" src="../assets/img/tlacuachu.png" alt="">
            <img class="img-certificados" src="../assets/img/tlacuachu.png" alt="">
        </div>
        <div style="height: 200px;"></div>
    </div>

    <?php
    include('../templates/footer.php');
    ?>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/nosotros.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
</body>

</html>