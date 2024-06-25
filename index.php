<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cumple tec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- ESTILOS GENERALES -->
    <style>
        #principal {
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
        }



        #fecha,
        #anuncios {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
        }

        .anuncio {
            height: 33.3vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
        }

        body,
        .color1 {
            background: #D6EADF;
        }

        .color2 {
            background: #B8E0D2;
        }

        .color3 {
            background: #95B8D1;
        }

        .color4 {
            background: #809BCE;
        }

        img {
            max-width: 120px;
        }
    </style>
</head>

<body>
    <div id="principal" class="row color1 gx-0">

        <!-- CONTENEDOR DE LA FECHA -->
        <div id="fecha" class="col-md-8 display-1">
            <?php

            // ZONA HORARIA
            date_default_timezone_set('America/Monterrey');
            setlocale(LC_TIME, 'es_MX.UTF-8', 'esp');

            // CREAMOS LAS VARIABLES QUE VAMOS A NECESITAR
            /****************  CADA PRIMERO DE ENERO SE DEBE REMPLAZAR EL AÑO DE LA FECHA POR EL AÑO ACTUAL ********************************/
            $fecha = strtotime("now, 00:00:00"); //date("d/m");
            $cumple_deya = strtotime("01 April 2024, 00:00:00");
            $cumple_angie = strtotime("18 May 2024, 00:00:00");
            $cumple_juany = strtotime("17 June 2024, 00:00:00");
            $cumple_yajaira = strtotime("02 July 2024, 00:00:00");
            $cumple_oralia = strtotime("22 July 2024, 00:00:00");
            $cumple_hugo = strtotime("13 August 2024, 00:00:00");
            $cumple_manuel = strtotime("20 September 2024, 00:00:00");
            $cumple_kike = strtotime("02 October 2024, 00:00:00");
            $cumple_nora = strtotime("08 October 2024, 00:00:00");
            $cumple_cuqui = strtotime("12 October 2024, 00:00:00");
            $cumple_victor_silva = strtotime("07 December 2024, 00:00:00");
            $cumple_angelica = strtotime("16 December 2024, 00:00:00");
            $cumple_victor_luis = strtotime("31 December 2024, 00:00:00");

            /********* AQUÍ VAN LAS FECHAS EDITABLES PARA REUNIÓN Y POSADA ********************/
            $fecha_reunion = strtotime("01 January 2024");
            $fecha_posada = strtotime("01 January 2024");

            // TEXTO DE SALIDA DE LA FECHA
            if ($fecha == $cumple_deya) :
                echo "<span class='text-center'><strong>¡Muchas Felicidades! <br> Deya</strong><br>" . $dia_semana . " " . date("d") . " de " . $mes . "</span>";
            elseif ($fecha == $cumple_angie) :
                echo "<span class='text-center'><strong>¡Muchas Felicidades! <br> Angie</strong><br></span>";
            elseif ($fecha == $cumple_juany) :
                echo "<span class='text-center'><strong>¡Muchas Felicidades! <br> Juany</strong><br></span>";
            elseif ($fecha == $cumple_yajaira) :
                echo "<span class='text-center'><strong>¡Muchas Felicidades! <br> Yajaira</strong><br></span>";
            elseif ($fecha == $cumple_oralia) :
                echo "<span class='text-center'><strong>¡Muchas Felicidades! <br> Oralia</strong><br></span>";
            elseif ($fecha == $cumple_hugo) :
                echo "<span class='text-center'><strong>¡Muchas Felicidades! <br> Hugo</strong><br></span>";
            elseif ($fecha == $cumple_manuel) :
                echo "<span class='text-center'><strong>¡Muchas Felicidades! <br> Manuel</strong><br></span>";
            elseif ($fecha == $cumple_kike) :
                echo "<span class='text-center'><strong>¡Muchas Felicidades! <br> Kike</strong><br></span>";
            elseif ($fecha == $cumple_nora) :
                echo "<span class='text-center'><strong>¡Muchas Felicidades! <br> Nora</strong><br></span>";
            elseif ($fecha == $cumple_cuqui) :
                echo "<span class='text-center'><strong>¡Muchas Felicidades! <br> Cuqui</strong><br></span>";
            elseif ($fecha == $cumple_victor_silva) :
                echo "<span class='text-center'><strong>¡Muchas Felicidades! <br> Víctor Silva</strong><br></span>";
            elseif ($fecha == $cumple_angelica) :
                echo "<span class='text-center'><strong>¡Muchas Felicidades! <br> Angélica</strong><br></span>";
            elseif ($fecha == $cumple_victor_luis) :
                echo "<span class='text-center'><strong>¡Muchas Felicidades! <br> Víctor Luis</strong><br></span>";
            else :
                echo "<span class='text-center'>" . strftime('%A %e de %B', $fecha) . "</span>";
            endif;

            ?>
        </div>
        <!-- COLUMNA DERECHA -->
        <div class="col-md-4">
            <div id="anuncios" class="row">

                <!-- PRIMER ANUNCIO -->
                <div class="col-12 anuncio color2">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center justify-content-center"><img src="https://cdn-icons-png.flaticon.com/512/3224/3224634.png" alt=""></div>
                        <div class="col-6 d-flex align-items-center justify-content-center fs-5">
                            <?php

                            // SEGÚN EL DÍA SERÁ EL MENSAJE QUE MANDAMOS POR PANTALLA
                            if (strtotime("now") < $fecha_reunion) :
                                echo "<p class='text-center'><strong>Proxima reunión</strong><br>" . strftime('%e de %B', $fecha_reunion) . "</p>";

                            else :
                                echo "<p class='text-center'><strong>Proxima reunión</strong> <br> <i>Sin datos</i></p>";

                            endif;
                            ?>
                        </div>
                    </div>
                </div>

                <!-- SEGUNDO ANUNCIO -->
                <div class="col-12 anuncio color3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center justify-content-center fs-5">
                            <?php

                            // DECIDIMOS QUE MENSAJE MOSTRAR POR PANTALLA
                            if ($fecha <= $cumple_deya) :
                                echo "<p class='text-center'><strong>Cumple de Deya</strong> <br>" . strftime('%e de %B', $cumple_deya) . "</p>";
                            elseif ($fecha <= $cumple_angie) :
                                echo "<p class='text-center'><strong>Cumple de Angie</strong> <br>" . strftime('%e de %B', $cumple_angie) . "</p>";
                            elseif ($fecha <= $cumple_juany) :
                                echo "<p class='text-center'><strong>Cumple de Juany</strong> <br>" . strftime('%e de %B', $cumple_juany) . "</p>";
                            elseif ($fecha <= $cumple_yajaira) :
                                echo "<p class='text-center'><strong>Cumple de Yajaira</strong> <br>" . strftime('%e de %B', $cumple_yajaira) . "</p>";
                            elseif ($fecha <= $cumple_oralia) :
                                echo "<p class='text-center'><strong>Cumple de Oralia</strong> <br>" . strftime('%e de %B', $cumple_oralia) . "</p>";
                            elseif ($fecha <= $cumple_hugo) :
                                echo "<p class='text-center'><strong>Cumple de Hugo</strong> <br>" . strftime('%e de %B', $cumple_hugo) . "</p>";
                            elseif ($fecha <= $cumple_manuel) :
                                echo "<p class='text-center'><strong>Cumple de Manuel</strong> <br>" . strftime('%e de %B', $cumple_manuel) . "</p>";
                            elseif ($fecha <= $cumple_kike) :
                                echo "<p class='text-center'><strong>Cumple de Kike</strong> <br>" . strftime('%e de %B', $cumple_kike) . "</p>";
                            elseif ($fecha <= $cumple_nora) :
                                echo "<p class='text-center'><strong>Cumple de Nora</strong> <br>" . strftime('%e de %B', $cumple_nora) . "</p>";
                            elseif ($fecha <= $cumple_cuqui) :
                                echo "<p class='text-center'><strong>Cumple de Cuqui</strong> <br>" . strftime('%e de %B', $cumple_cuqui) . "</p>";
                            elseif ($fecha <= $cumple_victor_silva) :
                                echo "<p class='text-center'><strong>Cumple de Víctor Silva</strong> <br>" . strftime('%e de %B', $cumple_victor_silva) . "</p>";
                            elseif ($fecha <= $cumple_angelica) :
                                echo "<p class='text-center'><strong>Cumple de Angélica</strong> <br>" . strftime('%e de %B', $cumple_angelica) . "</p>";
                            elseif ($fecha <= $cumple_victor_luis) :
                                echo "<p class='text-center'><strong>Cumple de Víctor Luis</strong> <br>" . strftime('%e de %B', $cumple_victor_luis) . "</p>";
                            else :
                                echo " ";
                            endif;

                            ?>
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-center"><img src="https://cdn-icons-png.flaticon.com/512/448/448003.png" alt=""></div>
                    </div>
                </div>

                <!-- TERCER ANUNCIO -->
                <div class="col-12 anuncio color4">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center justify-content-center"><img src="https://cdn-icons-png.flaticon.com/512/1324/1324728.png" alt=""></div>
                        <div class="col-6 d-flex align-items-center justify-content-center fs-5">
                            <?php

                            // SEGÚN EL DÍA SERÁ EL MENSAJE QUE MANDAMOS POR PANTALLA
                            if (strtotime("now") < $fecha_posada) :
                                echo "<p class='text-center'><strong>Posada reunioncitas</strong><br>" . strftime('%e de %B', $fecha_posada) . "</p>";

                            else :
                                echo "<p class='text-center'><strong>Posada reunioncitas</strong> <br> <i>Sin datos</i></p>";

                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        let frase = [
            "Que tu día esté lleno de alegría y tus sueños se hagan realidad. ¡Feliz cumpleaños!",
            "En tu día especial, que cada momento esté lleno de amor y felicidad. ¡Feliz cumpleaños!",
            "Que este nuevo año de vida te traiga infinitas sonrisas y momentos inolvidables. ¡Feliz cumpleaños!",
            "Celebra cada momento y que este año te traiga todo lo que deseas. ¡Feliz cumpleaños!",
            "En este día especial, te deseo todo lo mejor. ¡Feliz cumpleaños!",
            "Que la felicidad te encuentre en cada paso que des. ¡Feliz cumpleaños!",
            "Que cada día de este nuevo año esté lleno de sorpresas maravillosas. ¡Feliz cumpleaños!",
            "Que tu día esté lleno de amor, risas y grandes momentos. ¡Feliz cumpleaños!",
            "Que tu cumpleaños sea tan especial como tú eres para mí. ¡Feliz cumpleaños!",
            "Que este nuevo año te traiga éxito, salud y mucha felicidad. ¡Feliz cumpleaños!"
        ];
        console.log(frase[Math.floor(Math.random() * 10)]);
    </script>
</body>

</html>