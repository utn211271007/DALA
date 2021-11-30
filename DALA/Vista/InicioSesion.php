<?php

session_start();
$usuario = $_SESSION['username'];

if (!isset($usuario)) {
    header("location: InicioSesion.html");
} else {

    ?>
<html>

<head>
    <title>Sesion</title>
    <link rel="stylesheet" href="../Estilos/bulma.css">
    <link rel="stylesheet" href="../Estilos/fonts.css">
    <link rel="shortcut icon" type="imagen/x-icon" href="../img/Logo_DALA.png">
    <link rel="stylesheet" href="../Estilos/img.css">
    <style type="text/css">
    div.botones {
        float: right;
    }
    </style>
</head>

<body><br>
    <div class="botones">
        <!-- <div class="column" align="center"><a class="button is-medium is-link is-rounded is-fullwidth" href="../Index.html">Inicio</a></div>-->
        <!-- <div class="column" align="center"><a class="button is-medium is-info is-rounded is-fullwidth" href="../Vista/Registro.html">Registrar</a></div>-->
        <div class="botones"><a href="../logica/salir.php" target="_blank"
                class="button is-medium is-primary is-rounded "><span class="column">
                    <i class="icon icon-profile"></i>
                </span>Cerrar Sesion</a>
        </div>
        <div class="botones"><a target="_blank" class="button is-medium is-primary is-rounded "
                href="../Vista/modificarPerfil.php">Modificar perfil</a>
        </div>
    </div>
    <br><br><br>
    <div class="inicioSes">
        <!--<div align="right"><a href="cerrar.php"><span class=""><i class="icon icon-profile"></i></span>Cerrar Sesion</a></div>-->

        <div>
            <br>
            <h1 class="title is-1" style="text-align: center;">Ejercicios</h1>
        </div><br>
        <h4> Iniciemos con los ejercicios: Da clic en la imagen para comenzar a resolverlos.</h4>
        <table border="0" align="center">
            <tr align="center">
                <td align="center"><br><br>
                    <h3>Nivel</h3>
                    <h3>1</h3>
                </td>
                <td align="center"><a target="_blank" href="https://www.youtube.com/watch?v=wFv-4Vexvmk"><img
                            src="../img/video1.png" alt="Video 1" width="248" height="348"></a></td>
                <td align="center"><a target="_blank" href="../img/Ejercicio1.pdf"><img src="../img/Ejer1.png"
                            alt="Ejercicio 1" width="250" height="350"></a></td>
                <td align="center"><a target="_blank" href="../img/Ejercicio2.pdf"><img src="../img/Ejer1.png"
                            alt="Ejercicio 1" width="250" height="350"></a></td>
                <td align="center"><a target="_blank" href="../img/Ejercicio3.pdf"><img src="../img/Ejer1.png"
                            alt="Ejercicio 1" width="250" height="350"></a></td>
                <td align="center"><br>
                    <img class="myBtn" src="../img/Prueba1.png" alt="prueba1" width="200" height="300">
                    <div class="modal viewModal">
                        <span class="close">&times;</span>
                        <p>
                        <div class="inicioSes">
                            <div>
                                <h1 class="title is-1" style="text-align: center;">Ejercicio 1</h1>
                                <h2 class="title is-3" style="text-align: center;">Comencemos</h2><br>
                            </div>
                            <div name="prueba" align="left">
                                <form id="form" name="form" action="ejercicio1.php" method="post">
                                    1) ¿ Cuantas silabas tiene la palabra "COMPUTADORA"? <br> <br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="4" required=rb_resp1 />
                                    5<br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="3" /> 3<br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="2" /> 2<br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="1" /> 1<br>
                                    <br> <br>
                                    <!--Respuesta correcta  5 -->

                                    2)A la palabra REFRI__RADOR le hace falta una silaba cual es:<br> <br>
                                    <input type="radio" name="rb_resp2" id="rb_resp2" value="1" required=rb_resp2 />
                                    TE<br>
                                    <input type="radio" name="rb_resp2" id="rb_resp2" value="1" /> ME<br>
                                    <input type="radio" name="rb_resp2" id="rb_resp2" value="4" /> GE<br>
                                    <input type="radio" name="rb_resp2" id="rb_resp2" value="1" /> SE<br>
                                    <br> <br>
                                    <!--Respuesta correcta  GE-->

                                    3)¿ Cuantas silabas tiene la palabra "CORTINA"? <br> <br>
                                    <input type="radio" name="rb_resp3" id="rb_resp3" value="3" required=rb_resp3 />
                                    4<br>
                                    <input type="radio" name="rb_resp3" id="rb_resp3" value="4" /> 3<br>
                                    <input type="radio" name="rb_resp3" id="rb_resp3" value="2" /> 2<br>
                                    <input type="radio" name="rb_resp3" id="rb_resp3" value="1" /> 1<br>
                                    <br> <br>
                                    <!--Respuesta correcta  3 -->

                                    4)A la palabra FE___CARRIL le hace falta una silaba cual es:<br> <br>
                                    <input type="radio" name="rb_resp4" id="rb_resp4" value="4"
                                        required=rb_resp4 />RRO<br>
                                    <input type="radio" name="rb_resp4" id="rb_resp4" value="1" /> RO<br>
                                    <input type="radio" name="rb_resp4" id="rb_resp4" value="1" /> FRE<br>
                                    <input type="radio" name="rb_resp4" id="rb_resp4" value="1" /> SER<br>
                                    <br> <br>
                                    <!--Respuesta correcta  RRO -->

                                    5)¿ Cuantas silabas tiene la palabra "BARANDAL"? <br> <br>
                                    <input type="radio" name="rb_resp5" id="rb_resp5" value="3" required=rb_resp5 />
                                    4<br>
                                    <input type="radio" name="rb_resp5" id="rb_resp5" value="2" /> 7<br>
                                    <input type="radio" name="rb_resp5" id="rb_resp5" value="4" /> 3<br>
                                    <input type="radio" name="rb_resp5" id="rb_resp5" value="1" /> 1<br>
                                    <br> <br>
                                    <!--Respuesta correcta  3 -->

                                    6) A la palabra ES__LAR le hace falta las silabas cual es:<br> <br>
                                    <input type="radio" name="rb_resp6" id="rb_resp6" value="1" required=rb_resp6 />
                                    MA<br>
                                    <input type="radio" name="rb_resp6" id="rb_resp6" value="1" /> BO<br>
                                    <input type="radio" name="rb_resp6" id="rb_resp6" value="4" /> CO<br>
                                    <input type="radio" name="rb_resp6" id="rb_resp6" value="1" /> FO<br>
                                    <br> <br>
                                    <!--Respuesta correcta  ENCEFA -->

                                    7) ¿ Cuantas silabas tiene la palabra "FOTOSINTESIS"? <br> <br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="4" required=rb_resp7 />
                                    5<br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="3" /> 3<br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="2" /> 2<br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="1" /> 1<br>
                                    <br> <br>
                                    <!--Respuesta correcta  5 -->

                                    8)A la palabra ARMA__LLO le hace falta una silaba cual es:<br> <br>
                                    <input type="radio" name="rb_resp8" id="rb_resp8" value="4" required=rb_resp8 />
                                    DI<br>
                                    <input type="radio" name="rb_resp8" id="rb_resp8" value="1" /> MI<br>
                                    <input type="radio" name="rb_resp8" id="rb_resp8" value="1" /> TO<br>
                                    <input type="radio" name="rb_resp8" id="rb_resp8" value="1" /> SI<br>
                                    <br> <br>
                                    <!--Respuesta correcta  DI -->

                                    9)¿ Cuantas silabas tiene la palabra "INTELIGENTE"? <br> <br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="1" required=rb_resp9 />
                                    4<br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="3" /> 7<br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="2" /> 8<br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="4" /> 5<br>
                                    <br> <br>
                                    <!--Respuesta correcta  5 -->
                                    10)A la palabra ___GUNTAR le hace falta una silaba cual es:<br> <br>
                                    <input type="radio" name="rb_resp10" id="rb_resp10" value="1" required=rb_resp10 />
                                    TRE<br>
                                    <input type="radio" name="rb_resp10" id="rb_resp10" value="1" /> CRE<br>
                                    <input type="radio" name="rb_resp10" id="rb_resp10" value="4" /> PRE<br>
                                    <input type="radio" name="rb_resp10" id="rb_resp10" value="1" /> DRE<br>
                                    <br> <br>
                                    <!--Respuesta correcta  GO -->

                                    <input target="_blank" class="button is-success is-rounded" type="submit"
                                        name="bt_enviar" id="bt_enviar" value="Enviar" />
                                    <!--<a target="_blank" class="button is-success is-rounded" href="../Vista/ejercicio1.php">Enviar</a>-->
                                    <br> <br>
                                </form>
                            </div>
                        </div>
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center"><br><br>
                    <h3>Nivel</h3>
                    <h3>2</h3>
                </td>
                <td align="center"><a target="_blank" href="https://www.youtube.com/watch?v=lqeH1be6RrI"><img
                            src="../img/video2.png" alt="Video 2" width="248" height="348"></a></td>
                <td align="center"><a target="_blank" href="../img/Ejercicio4.pdf"><img src="../img/Ejer2.png"
                            alt="Ejercicio 2" width="250" height="350"></a></td>
                <td align="center"><a target="_blank" href="../img/Ejercicio5.pdf"><img src="../img/Ejer2.png"
                            alt="Ejercicio 2" width="250" height="350"></a></td>
                <td align="center"><a target="_blank" href="../img/Ejercicio6.pdf"><img src="../img/Ejer2.png"
                            alt="Ejercicio 2" width="250" height="350"></a></td>
                <td align="center"><br>
                    <img class="myBtn" src="../img/Prueba2.png" alt="prueba1" width="200" height="300">
                    <div class="modal viewModal">
                        <span class="close">&times;</span>
                        <p>
                        <div class="inicioSes">
                            <div>
                                <h1 class="title is-1" style="text-align: center;">Ejercicio 2</h1>
                                <h2 class="title is-3" style="text-align: center;">Comencemos</h2>
                                <br>
                            </div>
                            <div name="prueba2" align="left">

                                <form id="form" name="form" action="ejercicio2.php" method="post">
                                    1)De las palabras "PLAZA" y "APLAUSO" cuales son las que suenan igual<br> <br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="2" required=rb_resp1 />
                                    AZA<br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="1" /> SO<br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="1" /> ZA<br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="4" /> PLA<br>
                                    <br> <br>
                                    <!--Respuesta correcta  PLA -->

                                    2)¿Qué sonido o fonema suena igual en CASTAÑA y CODO?<br> <br>
                                    <input type="radio" name="rb_resp2" id="rb_resp2" value="2" required=rb_resp2 />
                                    S<br>
                                    <input type="radio" name="rb_resp2" id="rb_resp2" value="1" /> T<br>
                                    <input type="radio" name="rb_resp2" id="rb_resp2" value="1" /> D<br>
                                    <input type="radio" name="rb_resp2" id="rb_resp2" value="4" /> K<br>
                                    <br> <br>
                                    <!--Respuesta correcta  K-->

                                    3)De las palabras "PLANTA" y "MACETA" cuales son las que suenan igual<br> <br>
                                    <input type="radio" name="rb_resp3" id="rb_resp3" value="4" required=rb_resp3 />
                                    TA<br>
                                    <input type="radio" name="rb_resp3" id="rb_resp3" value="1" /> CE<br>
                                    <input type="radio" name="rb_resp3" id="rb_resp3" value="1" /> PLA<br>
                                    <input type="radio" name="rb_resp3" id="rb_resp3" value="1" /> AN<br>
                                    <br> <br>
                                    <!--Respuesta correcta  TA -->

                                    4)¿Qué sonido o fonema suena igual en PLATA y APLASTA?<br> <br>
                                    <input type="radio" name="rb_resp4" id="rb_resp4" value="4" required=rb_resp4 />
                                    P<br>
                                    <input type="radio" name="rb_resp4" id="rb_resp4" value="1" /> R<br>
                                    <input type="radio" name="rb_resp4" id="rb_resp4" value="1" /> S<br>
                                    <input type="radio" name="rb_resp4" id="rb_resp4" value="1" /> T<br>
                                    <br> <br>
                                    <!--Respuesta correcta  P -->

                                    5)De las palabras "TECHO" y "PECHO" cuales son las que suenan igual<br> <br>
                                    <input type="radio" name="rb_resp5" id="rb_resp5" value="4" required=rb_resp5 />
                                    CHO<br>
                                    <input type="radio" name="rb_resp5" id="rb_resp5" value="1" /> TE<br>
                                    <input type="radio" name="rb_resp5" id="rb_resp5" value="2" /> ZA<br>
                                    <input type="radio" name="rb_resp5" id="rb_resp5" value="1" /> PLA<br>
                                    <br> <br>
                                    <!--Respuesta correcta  PLA -->

                                    6)¿Qué sonido o fonema suena igual en CIGÜEÑA y PINGÜINO?<br> <br>
                                    <input type="radio" name="rb_resp6" id="rb_resp6" value="4" required=rb_resp6 />
                                    GU<br>
                                    <input type="radio" name="rb_resp6" id="rb_resp6" value="1" /> TO<br>
                                    <input type="radio" name="rb_resp6" id="rb_resp6" value="1" /> SU<br>
                                    <input type="radio" name="rb_resp6" id="rb_resp6" value="2" /> PI<br>
                                    <br> <br>
                                    <!--Respuesta correcta  GU -->

                                    7)De las palabras "ABRAZO" y "BRAZIL" cuales son las que suenan igual<br> <br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="2" required=rb_resp7 />
                                    BRO<br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="1" /> SOR<br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="4" /> BRA<br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="1" /> PLA<br>
                                    <br> <br>
                                    <!--Respuesta correcta  BRA -->

                                    8)¿Qué sonido o fonema suena igual en BRAZO y BRAZIL?<br> <br>
                                    <input type="radio" name="rb_resp8" id="rb_resp8" value="2" required=rb_resp8 />
                                    E<br>
                                    <input type="radio" name="rb_resp8" id="rb_resp8" value="4" /> Z<br>
                                    <input type="radio" name="rb_resp8" id="rb_resp8" value="1" /> A<br>
                                    <input type="radio" name="rb_resp8" id="rb_resp8" value="1" /> O<br>
                                    <br> <br>
                                    <!--Respuesta correcta  Z-->

                                    9)De las palabras "HOLA" y "MULA" cuales son las que suenan igual<br> <br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="2" required=rb_resp9 />
                                    LO<br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="1" /> SA<br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="1" /> ZA<br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="4" /> LA<br>
                                    <br> <br>
                                    <!--Respuesta correcta  LA-->

                                    10)¿Qué sonido o fonema suena igual en CANCION y ACCION?<br> <br>
                                    <input type="radio" name="rb_resp10" id="rb_resp10" value="4" required=rb_resp10 />
                                    A<br>
                                    <input type="radio" name="rb_resp10" id="rb_resp10" value="1" /> O<br>
                                    <input type="radio" name="rb_resp10" id="rb_resp10" value="1" /> I<br>
                                    <input type="radio" name="rb_resp10" id="rb_resp10" value="1" /> E<br>
                                    <br> <br>
                                    <!--Respuesta correcta  A -->

                                    <input class="button is-success is-rounded" type="submit" name="bt_enviar"
                                        id="bt_enviar" value="Enviar" />
                                    <br> <br>
                                </form>
                            </div>
                        </div>
                        </p>
                    </div>
                </td>
            </tr>
            <tr align="center">
                <td align="center"><br><br>
                    <h3>Nivel</h3>
                    <h3>3</h3>
                </td>
                <td align="center"><a target="_blank" href="https://www.youtube.com/watch?v=Ak8FI_i6cQQ"><img
                            src="../img/video3.png" alt="Video 3" width="248" height="348"></a></td>
                <td align="center"><a target="_blank" href="../img/Ejercicio7.pdf"><img src="../img/Ejer3.png"
                            alt="Ejercicio 3" width="250" height="350"></a></td>
                <td align="center"><a target="_blank" href="../img/Ejercicio8.pdf"><img src="../img/Ejer3.png"
                            alt="Ejercicio 3" width="250" height="350"></a></td>
                <td align="center"><a target="_blank" href="../img/Ejercicio9.pdf"><img src="../img/Ejer3.png"
                            alt="Ejercicio 3" width="250" height="350"></a></td>
                <td align="center"><br>
                    <img class="myBtn" src="../img/Prueba3.png" alt="prueba1" width="200" height="300">
                    <div class="modal viewModal">
                        <span class="close">&times;</span>
                        <p>
                        <div class="inicioSes">
                            <div>
                                <h1 class="title is-1" style="text-align: center;">Ejercicio 3</h1>
                                <h2 class="title is-2" style="text-align: center;">Comencemos</h2><br>
                            </div>
                            <div name="prueba3" align="left">
                                <form id="form" name="form" action="ejercicio3.php" method="post">
                                    1) Ordena las siguientes letras para formar palabras correcta "E O I N T L V E S I "
                                    <br> <br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="2" required=rb_resp1 />
                                    SILAVOCION<br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="1" /> VISION<br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="1" /> MISION<br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="4" /> TELEVISION<br>
                                    <br> <br>

                                    <!--Respuesta correcta  TELEVISION -->

                                    2) Observa la tabla y contesta
                                    <br><br>
                                    <table border="1" width="350px" height="200px">
                                        <tr align="center">
                                            <td>j</td>
                                            <td>g</td>
                                            <td>j</td>
                                        </tr>
                                        <tr align="center">
                                            <td>g</td>
                                            <td>j</td>
                                            <td>g</td>
                                        </tr>
                                        <tr align="center">
                                            <td>j</td>
                                            <td>j</td>
                                            <td>j</td>
                                        </tr>
                                    </table>
                                    <br><br>
                                    <h3> "J" </h3>
                                    <br>
                                    <input type="radio" name="rb_resp2A" id="rb_resp2A" value="4" required=rb_resp2A />
                                    6<br>
                                    <input type="radio" name="rb_resp2A" id="rb_resp2A" value="1" />7<br>
                                    <br> <br>
                                    <h3> "G" </h3>
                                    <br>
                                    <input type="radio" name="rb_resp2B" id="rb_resp2B" value="4" required=rb_resp2B />
                                    3<br>
                                    <input type="radio" name="rb_resp2B" id="rb_resp2B" value="1" /> 2<br>
                                    <br> <br>

                                    <!--Respuesta correcta "j"=6 y "g"=3 -->

                                    3) Ordena las siguientes letras para formar palabras correcta " A C S A "
                                    <br> <br>
                                    <input type="radio" name="rb_resp3" id="rb_resp3" value="1" required=rb_resp3 />
                                    SACA<br>
                                    <input type="radio" name="rb_resp3" id="rb_resp3" value="4" /> CASA<br>
                                    <input type="radio" name="rb_resp3" id="rb_resp3" value="1" /> MASA<br>
                                    <input type="radio" name="rb_resp3" id="rb_resp3" value="1" /> ACAS<br>
                                    <br> <br>

                                    <!--Respuesta correcta  PLA -->

                                    4) Observa la tabla y contesta
                                    <br><br>
                                    <table border="1" width="350px" height="200px">
                                        <tr align="center">
                                            <td>M</td>
                                            <td>N</td>
                                            <td>M</td>
                                        </tr>
                                        <tr align="center">
                                            <td>N</td>
                                            <td>M</td>
                                            <td>N</td>
                                        </tr>
                                        <tr align="center">
                                            <td>M</td>
                                            <td>N</td>
                                            <td>N</td>
                                        </tr>
                                    </table>
                                    <br><br>
                                    <h3> "M" </h3><br>
                                    <input type="radio" name="rb_resp4A" id="rb_resp4A" value="4" required=rb_resp4A />
                                    4<br>
                                    <input type="radio" name="rb_resp4A" id="rb_resp4A" value="1" /> 5<br>
                                    <br> <br>
                                    <h3> "N" </h3><br>
                                    <input type="radio" name="rb_resp4B" id="rb_resp4B" value="4" required=rb_resp4B />
                                    5<br>
                                    <input type="radio" name="rb_resp4B" id="rb_resp4B" value="1" /> 4<br>
                                    <br> <br>

                                    <!--Respuesta correcta "M"=4 y "N"=5 -->

                                    5) Ordena las siguientes letras para formar palabras correcta "N O M A "
                                    <br> <br>
                                    <input type="radio" name="rb_resp5" id="rb_resp5" value="1" required=rb_resp5 />
                                    OMAN <br>
                                    <input type="radio" name="rb_resp5" id="rb_resp5" value="1" /> MAON<br>
                                    <input type="radio" name="rb_resp5" id="rb_resp5" value="4" /> MANO<br>
                                    <input type="radio" name="rb_resp5" id="rb_resp5" value="1" /> ONAM<br>
                                    <br> <br>

                                    <!--Respuesta correcta  MANO -->

                                    6) Observa la tabla y contesta
                                    <br><br>
                                    <table border="1" width="350px" height="200px">
                                        <tr align="center">
                                            <td>b</td>
                                            <td>p</td>
                                            <td>b</td>
                                        </tr>
                                        <tr align="center">
                                            <td>p</td>
                                            <td>b</td>
                                            <td>p</td>
                                        </tr>
                                        <tr align="center">
                                            <td>p</td>
                                            <td>p</td>
                                            <td>b</td>
                                        </tr>
                                    </table>
                                    <br><br>
                                    <h3> "P" </h3><br>
                                    <input type="radio" name="rb_resp6A" id="rb_resp6A" value="1" required=rb_resp6A />
                                    4<br>
                                    <input type="radio" name="rb_resp6A" id="rb_resp6A" value="4" /> 5<br>
                                    <br> <br>
                                    <h3> "B" </h3><br>
                                    <input type="radio" name="rb_resp6B" id="rb_resp6B" value="1" required=rb_resp6B />
                                    5<br>
                                    <input type="radio" name="rb_resp6B" id="rb_resp6B" value="4" /> 4<br>
                                    <br> <br>

                                    <!--Respuesta correcta "P"=5 y "B"=4 -->

                                    7) Ordena las siguientes letras para formar palabras correcta "A F E C"
                                    <br> <br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="1" required=rb_resp7 />
                                    FAEC<br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="4" /> CAFE<br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="1" /> CEFA<br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="1" /> AFEC<br>
                                    <br> <br>

                                    <!--Respuesta correcta  CAFE -->

                                    8) Observa la tabla y contesta
                                    <br><br>
                                    <table border="1" width="350px" height="200px">
                                        <tr align="center">
                                            <td>a</td>
                                            <td>o</td>
                                            <td>a</td>
                                        </tr>
                                        <tr align="center">
                                            <td>a</td>
                                            <td>o</td>
                                            <td>o</td>
                                        </tr>
                                        <tr align="center">
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                        </tr>
                                    </table>
                                    <br><br>
                                    <h3> "A" </h3><br>
                                    <input type="radio" name="rb_resp8A" id="rb_resp8A" value="4" required=rb_resp8A />
                                    6<br>
                                    <input type="radio" name="rb_resp8A" id="rb_resp8A" value="1" /> 3<br>
                                    <br> <br>
                                    <h3> "O" </h3><br>
                                    <input type="radio" name="rb_resp8B" id="rb_resp8B" value="1" required=rb_resp8B />
                                    6<br>
                                    <input type="radio" name="rb_resp8B" id="rb_resp8B" value="4" /> 3<br>
                                    <br> <br>

                                    <!--Respuesta correcta "a"=6 y "o"=3 -->

                                    9) Ordena las siguientes letras para formar palabras correcta " T A C O R"
                                    <br> <br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="1" required=rb_resp9 />
                                    COSTRA<br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="1" /> TACOS<br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="1" /> ATROC<br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="4" /> CORTA<br>
                                    <br> <br>

                                    <!--Respuesta correcta  CORTAR -->

                                    10) Observa la yabla y contesta
                                    <br><br>
                                    <table border="1" width="350px" height="200px">
                                        <tr align="center">
                                            <td>i</td>
                                            <td>l</td>
                                            <td>i</td>
                                        </tr>
                                        <tr align="center">
                                            <td>l</td>
                                            <td>i</td>
                                            <td>l</td>
                                        </tr>
                                        <tr align="center">
                                            <td>i</td>
                                            <td>i</td>
                                            <td>l</td>
                                        </tr>
                                    </table>
                                    <br><br>
                                    <h3> "I" </h3><br>
                                    <input type="radio" name="rb_resp10A" id="rb_resp10A" value="4"
                                        required=rb_resp10A /> 5<br>
                                    <input type="radio" name="rb_resp10A" id="rb_resp10A" value="1" /> 4<br>
                                    <br> <br>
                                    <h3> "L" </h3><br>
                                    <input type="radio" name="rb_resp10B" id="rb_resp10B" value="4"
                                        required=rb_resp10B /> 4<br>
                                    <input type="radio" name="rb_resp10B" id="rb_resp10B" value="1" /> 5<br>
                                    <br> <br>

                                    <!--Respuesta correcta "i"=5 y "l"=4 -->

                                    <input class="button is-success is-rounded" type="submit" name="bt_enviar"
                                        id="bt_enviar" value="Enviar" />
                                    <br> <br>
                                </form>
                            </div>
                        </div>
                        </p>
                    </div>
                </td>
            </tr>
            <tr align="center">
                <td align="center"><br><br>
                    <h3>Nivel</h3>
                    <h3>4</h3>
                </td>
                <td align="center"><a target="_blank" href="https://www.youtube.com/watch?v=nh3KIwUDwOA"><img
                            src="../img/video4.png" alt="Video 4" width="248" height="348"></a></td>
                <td align="center"><a target="_blank" href="../img/Ejercicio10.pdf"><img src="../img/Ejer4.png"
                            alt="Ejercicio 4" width="250" height="350"></a></td>
                <td align="center"><a target="_blank" href="../img/Ejercicio11.pdf"><img src="../img/Ejer4.png"
                            alt="Ejercicio 4" width="250" height="350"></a></td>
                <td align="center"><a target="_blank" href="../img/Ejercicio12.pdf"><img src="../img/Ejer4.png"
                            alt="Ejercicio 4" width="250" height="350"></a></td>
                <td align="center"><br>
                    <img class="myBtn" src="../img/Prueba4.png" alt="prueba1" width="200" height="300">
                    <div class="modal viewModal">
                        <span class="close">&times;</span>
                        <p>
                        <div class="inicioSes">
                            <div>
                                <h1 class="title is-1" style="text-align: center;">Ejercicio 4</h1>
                                <h2 class="title is-3" style="text-align: center;">Comencemos</h2>
                                <br>
                            </div>
                            <div name="prueba" align="left">
                                <form id="form" name="form" action="ejercicio4.php" method="post">
                                    1)¿Cual es e nombre correcto de la imagen?
                                    <br> <br>
                                    <img src="../img/Control.png" alt="Control" width="350px" height="200px">
                                    <br><br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="3" required=rb_resp1 />
                                    MAMDO<br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="1" /> MARCO<br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="4" /> MANDO<br>
                                    <input type="radio" name="rb_resp1" id="rb_resp1" value="2" /> MANCO<br>
                                    <br> <br>
                                    <!--Respuesta correcta  MANDO  -->

                                    2)Coloca la palabra inversa de "CELULAR"
                                    <br> <br>
                                    <input type="radio" name="rb_resp2" id="rb_resp2" value="4" required=rb_resp2 />
                                    RALULEC<br>
                                    <input type="radio" name="rb_resp2" id="rb_resp2" value="1" /> LALUREC<br>
                                    <input type="radio" name="rb_resp2" id="rb_resp2" value="3" /> RALUCELA<br>
                                    <input type="radio" name="rb_resp2" id="rb_resp2" value="2" /> LULACER<br>
                                    <br> <br>
                                    <!--Respuesta correcta RALULEC-->

                                    3)¿Cual es e nombre correcto de la imagen?
                                    <br> <br>
                                    <img src="../img/Cazo.jpg" alt="Control" width="200px" height="250px">
                                    <br><br>
                                    <input type="radio" name="rb_resp3" id="rb_resp3" value="1" required=rb_resp3 />
                                    CASUELA<br>
                                    <input type="radio" name="rb_resp3" id="rb_resp3" value="2" /> CASO<br>
                                    <input type="radio" name="rb_resp3" id="rb_resp3" value="4" /> CAZO<br>
                                    <br> <br>
                                    <!--Respuesta correcta  CAZO  -->

                                    4)Coloca la palabra inversa de "MIRAR"
                                    <br> <br>
                                    <input type="radio" name="rb_resp4" id="rb_resp4" value="4" required=rb_resp4 />
                                    RARMI<br>
                                    <input type="radio" name="rb_resp4" id="rb_resp4" value="1" /> RARIM<br>
                                    <input type="radio" name="rb_resp4" id="rb_resp4" value="3" /> RIMAR<br>
                                    <br> <br>
                                    <!--Respuesta correcta RARMI-->

                                    5)¿Cual es e nombre correcto de la imagen?
                                    <br> <br>
                                    <img src="../img/barandal.jpg" alt="Control" width="350px" height="200px">
                                    <br><br>
                                    <input type="radio" name="rb_resp5" id="rb_resp5" value="2" required=rb_resp5 />
                                    RANDALAR<br>
                                    <input type="radio" name="rb_resp5" id="rb_resp5" value="4" /> BARANDAL<br>
                                    <input type="radio" name="rb_resp5" id="rb_resp5" value="1" /> BANDARAL<br>
                                    <br> <br>
                                    <!--Respuesta correcta  BARANDAL  -->

                                    6)Coloca la palabra inversa de "JUEGOS"
                                    <br> <br>
                                    <input type="radio" name="rb_resp6" id="rb_resp6" value="2" required=rb_resp6 />
                                    SOJUGE<br>
                                    <input type="radio" name="rb_resp6" id="rb_resp6" value="1" /> GUEJOS<br>
                                    <input type="radio" name="rb_resp6" id="rb_resp6" value="4" /> SOGEUJ<br>
                                    <br> <br>
                                    <!--Respuesta correcta SOGEUJ-->

                                    7)¿Cual es e nombre correcto de la imagen?
                                    <br> <br>
                                    <img src="../img/Formulario.png" alt="Control" width="350px" height="200px">
                                    <br><br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="4" required=rb_resp7 />
                                    FORMULARIO<br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="2" /> FORMAS<br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="1" /> FORMULAS<br>
                                    <input type="radio" name="rb_resp7" id="rb_resp7" value="3" /> FORMULUARIO<br>
                                    <br> <br>
                                    <!--Respuesta correcta  FORMULARIO -->

                                    8)Coloca la palabra inversa de "PENSAR"
                                    <br> <br>
                                    <input type="radio" name="rb_resp8" id="rb_resp8" value="2" required=rb_resp8 />
                                    NEPSAR<br>
                                    <input type="radio" name="rb_resp8" id="rb_resp8" value="4" /> RASNEP<br>
                                    <input type="radio" name="rb_resp8" id="rb_resp8" value="1" /> RENPRA<br>
                                    <br> <br>
                                    <!--Respuesta correcta RASNEP-->

                                    9)¿Cual es e nombre correcto de la imagen?
                                    <br> <br>
                                    <img src="../img/Planta.jpg" alt="Control" width="250px" height="250px">
                                    <br><br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="3" required=rb_resp9 />
                                    PLAMTA<br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="1" /> ANTA<br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="4" /> PLANTA<br>
                                    <input type="radio" name="rb_resp9" id="rb_resp9" value="2" /> PLANTO<br>
                                    <br> <br>
                                    <!--Respuesta correcta  PLATA  -->

                                    10)Coloca la palabra inversa de "CARICATURAS"
                                    <br> <br>
                                    <input type="radio" name="rb_resp10" id="rb_resp10" value="1" required=rb_resp10 />
                                    CATURASCARI<br>
                                    <input type="radio" name="rb_resp10" id="rb_resp10" value="4" /> SARUTACIRAC<br>
                                    <input type="radio" name="rb_resp10" id="rb_resp10" value="2" /> TURASCARICA<br>
                                    <br> <br>
                                    <!--Respuesta correcta SARUTACIRAC-->

                                    <input class="button is-success is-rounded" type="submit" name="bt_enviar"
                                        id="bt_enviar" value="Enviar" />
                                    <br> <br>
                                </form>
                            </div>
                        </div>
                        </p>
                    </div>
                </td>
            </tr>
        </table>


        <script>
        var myBtn = document.getElementsByClassName("myBtn");
        var modal = document.getElementsByClassName("viewModal");
        var span = document.getElementsByClassName("close");

        myBtn[0].onclick = function() {
            modal[0].style.display = "block";
        }
        span[0].onclick = function() {
            modal[0].style.display = "none";
        }
        myBtn[1].onclick = function() {
            modal[1].style.display = "block";
        }
        span[1].onclick = function() {
            modal[1].style.display = "none";
        }
        myBtn[2].onclick = function() {
            modal[2].style.display = "block";
        }
        span[2].onclick = function() {
            modal[2].style.display = "none";
        }
        myBtn[3].onclick = function() {
            modal[3].style.display = "block";
        }
        span[3].onclick = function() {
            modal[3].style.display = "none";
        }

        window.onclick = function(event) {
            for (var i = 0; i < modal.length; i++) {
                if (event.target == modal[i]) {
                    modal[i].style.display = "none";
                }
            }
        }
        </script><br><br>
        <a target="_blank" class="button is-success is-rounded"
            href="https://www.orientacionandujar.es/wp-content/uploads/2014/01/Cuadernillo-de-trabajo-mejorar-la-lectoescritura-Dislexia.pdf">
            Cuadernillo de complementos
        </a>
</body>

</html>
<?php
}
//} else {
//    ?>
<!--<html>-->
<!--    <head>-->
<!--        <title>Prueba</title>-->
<!--        <link rel="stylesheet" href="../Estilos/bulma.css">-->
<!--        <link rel="stylesheet" href="../Estilos/img.css">-->
<!--    </head>-->
<!--    <body><br><br><br><br><br><br>-->
<!--        <div class="inicioSes">-->
<!--            <h3>Usuario o contraseña es invalidos</h3><br>-->
<!--            <a class="button is-success is-rounded" href="../Vista/InicioSesion.html">"Intentar nuevamente"</a>-->
<!--        </div>-->
<!--    </body>-->
<!--</html>-->
<!--<?php
//}
//mysqli_close($con);
?>