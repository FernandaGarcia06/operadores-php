<?php
//entrada
$n1 = (float) $_POST['n1'];
$n2 = (float) $_POST['n2'];
//processamento
$adicao=$n1 + $n2;
$subtracao= $n1 + $n2;
$multiplicacao = $n1 * $n2;

$divisaoValida = $n2 !=0; //atribuir o resultado logico na variavel
if ($divisaoValida==true)
    {
        $divisao=$n1/$n2;
        $modulo = $n1 % $n2;
    }

$potencia=$n1**$n2;
$concatenacao=$n1.$n2; //o ponto ele junta o texto, não soma como numero

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Operações Aritméticas</title>
</head>
<body>
    <div class="card" >
        <h1 align="center">Operações Aritméticas</h1>
        <h2 align="center">Resultados</h1>
        <hr>
        <!-- apresentar os resultados que o PHP gerou -->
        <h3>
            <?php echo "$n1 + $n2 = $adicao"; ?>
        </h3>
         <h3>
            <?php echo "$n1 - $n2 = $subtracao"; ?>
        </h3>
         <h3>
            <?php echo "$n1 X $n2 = $multiplicacao"; ?>
        </h3>
        <h3>
            <?php
            if ($divisaoValida==true)
                {
                    echo "$n1 ÷ $n2 = ".number_format($divisao,2,',','.');
                    echo "<br>";
                    echo "$n1 módulo $n2 = ".number_format($modulo,2,',','.');
                }
                else
                    {
                        echo "<h1>Não há divisão por zero!</h1>";
                    }
        ?>
        </h3>
        <h3>
             <?php echo "$n1 <sup> $n2 </sup> =".number_format($potencia,2,',','.'); ?>
        </h3>
        <h3>
            <?php echo "$n1 concatenado $n2 = $concatenacao" ?>;
        </h3>
        <a href="index.php">voltar</a>
        
</div>
</body>
</html>