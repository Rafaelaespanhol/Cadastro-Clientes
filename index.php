<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de clientes</title>
</head>
<body>
    <h1> Cadastro clientes</h1>
    <?php
    $nome = "Rafaela";
    $idade = 24;
    $fumante = false;
    echo "<p>Id cliente: $nome <br>";
    echo "Idade cliente: $idade <br>";
    echo " Fumante: $fumante </p>";

    /*
    OPERADORES ARITMÉTICOS
    */
    echo 20*3;
    echo "<br>";
    /*
    OPERADORES RELACIONAIS 
    */
    echo 20>10 + 30;
    echo "<br>";
    /*
    OPERADORES LÓGICOS 
    */
    echo "operadores lógicos<br>";
     $fumante = false;
     echo !$fumante;

     $idade = 18;
     if($idade>18 && $fumante == false){
        echo"<p>Sua idade é $idade</p>";
        echo "<p> Pode entrar na festa</p>";
     }else if($idade >= 10){
        echo "<p>Pessoas acima de 70 anos não podem entrar na festa</p>";
     }else{
echo "Você não pode entrar";

     }
     
     $nota = 8;
     if($nota >= 8){
        echo "<p>Aprovado</p>";
     }else if($nota >= 5){
        echo "<p>Recuperação</p>";
     }else{
        echo "<p>Reprovado</p>";
     }
     ?>
    </body>
    </html>
