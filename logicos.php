<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores logicos</title>
</head>

<body>
    
    <?php

        //Operador E (AND ou &&) -> verdadeiro se todos as expressões forem verdadeiras
        //Operador OU (OR ou II) -> verdadeiro s pelo menos uma expressão for verdadeira
        //Operador XOR (XOR) -> verdadeiro apenas se uma das expressões for verdadeira, mas não ambas
        //Operador NEGAÇÂO (!) -> inverte o resultado da expressão
     
        if(!(5 == 3)){
            echo 'Verdadeiro';
        }else{
            echo 'Falso';
        }
    ?>

</body>
</html>