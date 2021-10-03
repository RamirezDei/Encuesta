<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="grafi.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>Resultado</title>
</head>
<body>
<h1>Hola estas han sido tus respuestas con los pasos que debes seguir.</h1>

<?php

    echo "Su correo es: <br> ".  $formu->correo;
    echo "<br>";
    echo "Su nombre es: <br> ".  $formu->nombre;
    echo "<br>";
    echo "Su lugar de residencia es: <br> ".  $formu->ciudad;
    echo "<br>";
    echo "Su estrato es: <br> ".  $formu->estrato;
    echo "<br>";
    echo "Su contrato es: <br> ".  $formu->contrato;
    echo "<br>";
    echo "Su cargo es: <br> ".  $formu->cargo;
    echo "<br>";
    echo "Su salario es: <br> ".  $formu->salario;
    echo "<br>";
    echo "Respuesta pregunta #1 Uno: <br> ".  $formu->pri;
    echo "<br>"; 
    echo "Respuesta pregunta #2 Dos: <br> ".$mensaje_final_seg;
    echo "<br>";
    echo "Respuesta pregunta #3 Tres: <br> ".$mensaje_final_ter;
    echo "<br>";
    echo "Respuesta pregunta #4 Cuatro: <br> ".$mensaje_final_cuar;
    echo "<br>";
    echo "Respuesta pregunta #5 Cinco: <br> ".$mensaje_final_quin;
    echo "<br>";
    echo "Respuesta pregunta #6 Seis: <br> ";
    echo "<image src='img/$formu->sex.jpg'>";
    echo "<br>";
    echo "Respuesta pregunta #7 Siete: <br> ";
    echo "<image src='img/$formu->sept.jpg'>";
    echo "<br>";
    echo "Respuesta pregunta #8 Ocho: <br> ".$formu->oct;
    echo "<br>";
    echo "Respuesta pregunta #9 Nueve: <br> ".$mensaje_final_nov;
    echo "<br>";
    echo "Respuesta pregunta #10 Diez: <br> ".$mensaje_final_deci;
    echo "<br>";
    echo "Respuesta pregunta #11 Once: <br> ".$mensaje_final_onc;
    echo "<br>";
    echo "Respuesta pregunta #12 Doce: <br> ".$mensaje_final_doc;
 
    ?>
</body>
</html>