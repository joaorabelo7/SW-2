<?php

    $a = 10;
    $b = 5;

    $soma = $a + $b;

    echo "A soma é igual a = $soma";

    echo "<hr>";
    
    if($b > $a) {
        echo "B é maior que A";
        echo "<hr>";
    } else {
        echo"A é maior que B";
        echo "<hr>";
    }

    $n1 = 2;
    $n2 = 5;
    $n3 = 8;

    $media = ($n1 + $n2 + $n3) / 3;

    if($media > 5){
        echo "Você foi aprovado";
    }elseif($media < 4) {
        echo "Você foi reprovado";
    }else{
        echo"Recuperação";
    }

    echo "<br>";    
    echo "<br>";    
    echo "$media";
    echo "<hr>";

    $dia = 3;

    switch ($dia) {
        case 1:
            echo"Domingo";
        break;
        case 2:
            echo"Segunda-feira";
        break;
        case 3:
            echo"Terça-feira";
        break;
        case 4:
            echo"Quarta-feira";
        break;
        case 5:
            echo"Quinta-feira";
        break;
        case 2:
            echo"Sexta-feira";
        break;
        case 2:
            echo"Domingo";
        break;
        
        default:
            echo"Dia não achado";
            break;
    }
    echo "<hr>";
    
    for ($i=0; $i <= 10; $i++) { 
        echo "$i - ";
        }
    echo "<hr>";
    
    
    $num = 1;
    while($num <= 10){
        echo" $num ";
        $num++;
        }
    echo "<hr>";

    $x = 1 ;
    do{
        echo "moshi moshi = $x ";
        $x++;
    } While ($x <= 10);
    echo "<hr>";

    $nomes = ["jhow1", "jhow2", "jhow3"];

    foreach($nomes as $key => $nome){
        echo"$nome <br>";
    }


?>