<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calcularStem.js"></script>
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">CiTIM</a></h1>
      
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>Problema: cuánto vale la velocidad con la cual recorre el segundo tramo?.
</h2>
        <p>Descripción:</p>
        <p>Se conoce que la temperatura de la fotósfera es de unos 5600K.<br>
        </p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/Tierra.jpg">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        La fórmula para el flujo radiante es: F = σ * T^4
P es la potencia radiada, σ es la constante de Stefan-Boltzmann (aproximadamente 5.67 × 10^(-8) W/(m^2·K^4)), A es el área efectiva de radiación y T es la temperatura absoluta del cuerpo.
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        -Velocidad media en todo el trayecto: 60 km/h.<br>

-Velocidad en el primer tramo: 50 km/h.<br>

-Tiempo que tarda en ir de un centro a otro: T.<br>

-Tiempo que tarda en recorrer el primer tramo: T/2.<br>
      
      </section>
      <section class="calculos">
        <h2>Solución para Calcular la distancia total</h2>
        <p>a)La
T_mancha_solar^4 = 0.31 * 5600^4<br>
        </p>
        
        
        <button onclick="calcula_velocidad();">Presiona para calcular</button>
      </section>
      <?php
     function calcularVelocidadSegundoTramo() {
  $D = 100; // Distancia total en km
  $T = 2; // Tiempo total en horas

  $D1 = 25 * $T;
  $D2 = $D - $D1;
  $velocidadSegundoTramo = (60 * ($T/2)) / $D2;
  
  return $velocidadSegundoTramo;
}
?>
 
      <section class="resultado">
        <h2>Resultado del inciso A:</h2>
        <div id="resultadoA"></div>
        <?php
 print "<h1>  distancia total = ".calcula_velocidad(). " La velocidad) </h1>";
?>
        
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023
    </footer>
  </section>
</body>
</html>
