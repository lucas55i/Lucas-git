<?php
$resultado = "";

if($_POST){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operacao = $_POST['operacao'];

    if(is_numeric($n1)  && is_numeric($n2)){
        $soma = $n1 + $n2;
        $subtracao = $n1 - $n2;
        $divisao = $n1 / $n2;
        $multiplicacao = $n1 * $n2;
        
    }else{
        $resultado.= "<div class='erro'>";
        $resultado.= "<p>Digite numeros não letras";
        $resultado.="</div>";
    }    
}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link stylesheet="" href="style.css">
</head>
<body>
    <label>Soma: <?=$soma?></label>
    <br>
    <label>Subtração: <?=$subtracao?></label>
    <br>
    <label>Divisão: <?=$divisao?></label>
    <br>
    <label>Multiplicação:  <?=$multiplicacao?></label>

    <?php
        echo $resultado;
    ?>

    <output>    
    
</body>
</html>




 