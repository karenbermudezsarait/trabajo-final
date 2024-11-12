<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes somos</title>

    <link rel="stylesheet" href="/public/css/style.css">
    <link href="/public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/public/vendors/jquery_accordion/css/jquery.beefup.css" rel="plugin_accordion">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid align-items-center">
            <a class="navbar-brand" href="index.php"><img src="public/img/logo_wonderland.png" alt="logo de la web"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#Sucursales">Sucursales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quienes-somos.php">Quiénes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FAQ.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-dark"><a class="nav-link text-light"
                                href="contacto.php">Contacto</a></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-12">
                <div id="FAQ">
                    <h1 class="display-1 py-2 d-block mt-4">Preguntas Frecuentes</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-8">
                    <p class="lead my-4 pt-2">Todo lo que necesitas saber...</p>
                    <ol>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        <h6>¿Dónde se encuentra ubicada Wonderland?</h6>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Tenemos tres sucursales en la Ciudad Autónoma de Buenos
                                            Aires que podés ver clickeando <a href="index.php#Sucursales">acá</a>.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        <h6>¿Cuáles son los horarios de atención?</h6>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Estamos abiertos de lunes a sábado de 10:00 a 20:00 y los
                                            domingos de 12:00 a 18:00. Durante los
                                            días festivos, nuestros horarios pueden variar, así que te recomendamos
                                            revisar
                                            nuestras redes
                                            sociales o contactarnos directamente para confirmar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        <h6>¿Ofrecen opciones de té sin cafeína?</h6>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Sí, tenemos una variedad de tés y tisanas sin cafeína,
                                            perfectos para quienes prefieren
                                            disfrutar de una bebida reconfortante sin los efectos estimulantes de la
                                            cafeína.
                                            Pregunta a
                                            nuestro personal sobre nuestras opciones disponibles.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        <h6>¿Puedo comprar té para llevar a casa?</h6>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>¡Claro que sí! Disponemos de una selección de nuestros tés
                                            más populares en envases para
                                            llevar.
                                            Puedes elegir entre una variedad de tés en hojas sueltas y en bolsitas.
                                            Además,
                                            ofrecemos
                                            accesorios y utensilios para que puedas preparar el té perfecto en casa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">
                                        <h6>¿Ofrecen algún tipo de menú para acompañar el té?</h6>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Sí, contamos con un menú de deliciosas opciones de
                                            pastelería artesanal, incluyendo tortas,
                                            scones, galletas y más. También ofrecemos opciones saladas para quienes
                                            prefieren
                                            algo
                                            diferente. Todo está preparado con ingredientes frescos y de alta calidad.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSix" aria-expanded="false"
                                        aria-controls="flush-collapseSix">
                                        <h6>¿Puedo reservar una mesa?</h6>
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Sí, aceptamos reservas para asegurar que tengas un lugar
                                            cómodo cuando nos visites,
                                            especialmente durante los fines de semana y en horarios pico. Puedes
                                            realizar tu
                                            reserva a
                                            través de nuestro formulario en línea en la sección de contacto.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                        aria-controls="flush-collapseSeven">
                                        <h6>¿Organizan eventos o talleres de té?<h6>
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Sí, regularmente organizamos eventos especiales y talleres
                                            de cata y ceremonias del té. Estas
                                            actividades son una excelente oportunidad para aprender más sobre la cultura
                                            del té
                                            y
                                            descubrir nuevos sabores. Consulta nuestro calendario de eventos en la
                                            página web o
                                            síguenos
                                            en nuestras redes sociales para estar al tanto de las próximas actividades.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseEight" aria-expanded="false"
                                        aria-controls="flush-collapseEight">
                                        <h6>¿Ofrecen tarjetas de regalo?</h6>
                                    </button>
                                </h2>
                                <div id="flush-collapseEight" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Sí, disponemos de tarjetas de regalo que pueden ser
                                            utilizadas para la compra de té,
                                            accesorios o en nuestro salón de té. Son una excelente opción para
                                            sorprender a un
                                            amante
                                            del té con un regalo especial.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseNine" aria-expanded="false"
                                        aria-controls="flush-collapseNine">
                                        <h6>¿Cuál es su política de devoluciones?</h6>
                                    </button>
                                </h2>
                                <div id="flush-collapseNine" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Si no estás completamente satisfecho con tu compra, puedes
                                            devolver los productos no
                                            utilizados en su empaque original dentro de los 30 días posteriores a la
                                            compra para
                                            un
                                            reembolso completo. Para más detalles, consulta nuestra política de
                                            devoluciones en
                                            la
                                            sección de términos y condiciones.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTen" aria-expanded="false"
                                        aria-controls="flush-collapseTen">
                                        <h6>¿Cómo puedo ponerme en contacto con ustedes?<h6>
                                    </button>
                                </h2>
                                <div id="flush-collapseTen" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Puedes contactarnos completando el formulario de contacto en nuestra página
                                            web.
                                            Estamos aquí
                                            para ayudarte y responder cualquier pregunta que tengas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row d-flex bg-light py-4">
            <footer class="col-12 justify-content-center align-items-center text-center">
                <div class="col-12 justify-content-center">
                    <p>&copy; Wonderland</p>
                </div>
                <div class="col-12 justify-content-center">
                    <p>Milena Gómez, Olivia Loffreda y Romina Sosa. 1°B. Programación & Desarrollo II</p>
                </div>

                <div class="col-12 justify-content-center">
                    <a href="https://www.instagram.com/"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                    </a>

                    <a href="https://www.google.com/intl/es-419/gmail/about/"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                        </svg>
                    </a>

                    <a href="https://ar.linkedin.com/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                        </svg>
                    </a>

                    <a href="https://web.whatsapp.com/"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg>
                    </a>

                    <a href="https://www.facebook.com/?locale=es_LA"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </a>

                </div>
            </footer>

        </div>
    </div>

    <script src="/public/bootstrap/js/bootstrap.bundle.js"></script>

    <!--Plugin Accordion-->
    <script src='/public/vendors/jquery_accordion/js/jquery.beefup.min.js'> </script>
</body>

</html>
