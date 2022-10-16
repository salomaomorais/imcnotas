
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h2>Formuário de Cálculo da Menção dos Alunos</h2>
</head>
<body>
    
 
    <form name="notas" method = "POST" action="form_notas.php"></br>

        Nome: <input type="text" name="aluno" ></br> 
              
        Nota1: <input type="text" name="nota1"></br>
        
        Nota2: <input type="text" name="nota2"></br>
               
               <input type="submit" value="Menção"></br>
                
               <a href = "index.html">Index</a><br>

<?php

$aluno = $_post ["aluno"];
echo "Nome do aluno : $aluno";

$nota1 = $_post ["nota1"];
$nota2 = $_post ["nota2"];
    
$media = ($nota1 + $nota2)/2;{
        echo "Resultado = $media";
if    ($media > 6.0); 
        echo "Resultado : Aprovado";
else  ($media < 6.0 && $media > 4.0);
        echo "Resultado : Recuperação Final";
else ($media < 4.0);
    echo "Resultado = Reprovado";
?>
}
 
      
    
</body>
</html>