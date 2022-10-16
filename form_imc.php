<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h2>Formuário de Cálculo do Ìndice de Massa Corporal - I.M.C</h2>
</head>
<body>
    
 
    <form name="imc" method="POST" action="form_imc.php"></br>
        Peso: <input type="text" name="peso" ></br>            
        Altura: <input type="text" name="altura"></br>
                <input type="submit" value="Enviar"></br>
                <a href = "index.html">Clique IMC</a><br>
                
            </body>
            </html>

 <?php

$peso = $_POST ["peso"];
$altura = $_POST ["altura"];
$sub = str_replace (",",".", $altura);  

   if ($peso <= 0)
        echo "ERRO - Peso Inválido!!!!";
    else {
        $imc = $peso/($altura * $altura);
            echo "Seu IMC = $imc ";
            
        if ($imc < 18.5)
            echo "Resultado : Abaixo do Peso";
    else if ($imc < 25.0)
            echo "Resultado : Peso Normal";
    else if ($imc < 30.0)
            echo "Resultado : Sobrepeso";
    else if ($imc < 35.0)
            echo "Resultado : Obeso Leve";
    else if ($imc < 40.0)
            echo "Resultado : Obeso Moderado";
    else 
            echo "Resultado : Obeso Morbido";
    }

    



    ?>
