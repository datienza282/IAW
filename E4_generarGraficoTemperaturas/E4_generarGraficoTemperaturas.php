<?php

//Primero creamos un array con las temperaturas
$temperaturas = array("Enero" => '12', "Febrero" => '13', "Marzo" => '17', "Abril" => '19',
    "Mayo" => '25', "Junio" => '31', "Julio" => '34', "Agosto" => '34', "Septiembre" => '28',
    "Octubre" => '23', "Noviembre" => '16', "Diciembre" => '13');

echo '<h4>Gráficos Temperaturas Mensuales</h4>';
// El texto tendrá un estilo requerido para que se muestre de manera correcta
echo '<div style="font-family: monospace; font-size: 40px">';
echo '<br>';
//Creamos un bucle foreach para que muestre los cuadrados necesarios por mes
foreach ($temperaturas as $mes => $grados) {
    print_r(str_pad($mes, 15, '-') . '>');

//Creamos un bucle for para mostrar los cuadritos correspondientes a la temperatura
    for ($c = 0; $c < $grados; $c++) {

//Ponemos los cuadrados
        echo'<img src = "./barraTemp.PNG" style="border: 2px solid black"/>';
    }
//Hacemos que se vea las temperatutas en cada mes y le añadimos ºC
    echo ' ' . $grados . 'ºC';
    echo '<br>';
}
echo '</div>';
