<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe dados</title>
</head>
<body>
    
    <?php
        $nome = htmlspecialchars($_POST['nome']);
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $ano = date("Y");
    ?>

    <p>Olá <?php echo $nome; ?></p>
    <p>Você tem <?php echo $idade; ?> anos de idade</p>
    <p>Seu email é: <?php echo $email; ?></p>

    <p>Então você nasceu no ano de <?php echo $ano - $idade?></p>

    <?php
        if($idade >= 18){
            echo'<p style="color: green;" > Maior de idade </p>';
        }
        else{
            echo'<p style="color: red;"> Menor de idade </p>';
        }
    ?>


</body>
</html>