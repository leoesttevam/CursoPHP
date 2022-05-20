<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>

<body>
    <?php
        //string
        $nome = 'Leonardo Estevam';

        //int
        $idade = 29;

        //float
        $peso = 82.5;

        //boolean
        $fumante_sn = false; //(true = 1) ou (false = vazio)

        //...lógica...//
        $idade = 30;
    ?>

        <h1>Ficha cadastral</h1>
        <br/>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante ?: <?= $fumante_sn ?></p>
</body>
</html>