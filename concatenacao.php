<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
</head>

<body>

    <?php

        $nome = 'Jorge';
        $cor = 'Azul';
        $idade = 25;
        $atividade = 'Correr';

        //operador .
        echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ' , estou vendo também que você possui '. $idade .' anos e que gosta de ' . $atividade . ' .';

        //podemos também usar aspas duplas
        echo '<br/>';

        echo "Olá $nome vi que sua cor preferida é $cor , estou vendo também que você possui $idade  anos e que gosta de $atividade ."
    ?>
</body>
</html>