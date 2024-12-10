<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: Cálculo de potencia y trabajo en un conductor</h2>
                <p>Descripción:</p>
                <p>
                    Una batería mantiene una diferencia de potencial de 100 voltios en los extremos de un conductor, 
                    por el que circula una corriente de 4 amperios durante 6 horas.
                </p>
                <p>Calcula:</p>
                <ul>
                    <li>a) La potencia en kW absorbida por el conductor.</li>
                    <li>b) El trabajo (en julios y en kW-h) desarrollado por la corriente.</li>
                </ul>
            </section>
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="images/OIP.jpg" alt="Esquema del problema">
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas</h2>
                <p>Potencia (P) = V × I</p>
                <p>Trabajo (W) = P × t</p>
                <p>Donde:</p>
                <ul>
                    <li>V = Diferencia de potencial (voltios)</li>
                    <li>I = Corriente eléctrica (amperios)</li>
                    <li>P = Potencia (vatios o kW)</li>
                    <li>t = Tiempo (en segundos o horas, según el contexto)</li>
                </ul>
            </section>
            <section class="datos">
                <h2>Datos</h2>
                <ul>
                    <li>V = 100 V</li>
                    <li>I = 4 A</li>
                    <li>t = 6 h</li>
                </ul>
            </section>
            <section class="calculos">
                <h2>Solución</h2>
                <p>
                Potencia absorbida (P):

𝑃
P=V⋅I=100⋅4=400W
Convertimos a kilovatios (kW):
​
 400/1000=0.4kW
Trabajo desarrollado en julios (W):

W=P⋅t=400⋅21600=8,640,000J
Trabajo desarrollado en kWh:
8640000/3600000=2.4kWh



                </p>
            </section>

            <?php
            function calcular_potencia_y_trabajo() {
                // Datos iniciales
                $voltaje = 100; // Voltios
                $corriente = 4; // Amperios
                $tiempo_horas = 6; // Horas
                $tiempo_segundos = $tiempo_horas * 3600; // Conversión a segundos

                // Cálculo de la potencia (en vatios y kW)
                $potencia_w = $voltaje * $corriente; // En vatios
                $potencia_kw = $potencia_w / 1000; // Conversión a kW

                // Cálculo del trabajo (en julios y kW-h)
                $trabajo_julios = $potencia_w * $tiempo_segundos; // En julios
                $trabajo_kwh = $potencia_kw * $tiempo_horas; // En kW-h

                // Devolver los resultados formateados
                return array(
                    'potencia_kw' => number_format($potencia_kw, 2),
                    'trabajo_julios' => number_format($trabajo_julios, 2),
                    'trabajo_kwh' => number_format($trabajo_kwh, 2)
                );
            }

            // Calcular los resultados al cargar la página
            $resultados = calcular_potencia_y_trabajo();
            ?>

            <!-- Mostrar resultados directamente al cargar la página -->
            <section class="resultado">
                <h2>Resultado:</h2>
                <div id="resultadoA">
                    <p>a) Potencia absorbida por el conductor: <?php echo $resultados['potencia_kw']; ?> kW</p>
                    <p>b) Trabajo desarrollado por la corriente:</p>
                    <ul>
                        <li>En julios: <?php echo $resultados['trabajo_julios']; ?> J</li>
                        <li>En kW-h: <?php echo $resultados['trabajo_kwh']; ?> kW-h</li>
                    </ul>
                </div>
            </section>
        </section>
        <footer class="pie">
            Creative Commons versión 3.0 SciSoft 2024
        </footer>
    </section>
</body>
</html>
