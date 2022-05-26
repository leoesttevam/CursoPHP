<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de casting</title>
</head>

<body>

    <?php
        //gettipe() -> retorna o tipo da variável
        $valor = '15.35';
        //$valor2 = (double) $valor; //float

        //$valor2 = (String) $valor;

        //$valor2 = (int) $valor;

        $valor2 = (boolean) $valor;

        echo $valor. ' ' .gettype($valor);
        echo '<br/>';
        echo $valor2. ' ' .gettype($valor2)
    ?>
</body>
</html>