<?php

    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $pcompra = $_POST["pcompra"];
    $pvenda = $_POST["pvenda"];
    $validade = $_POST["validade"];

    $comando = "insert into produto (Nome,Quantidade,precoCompra,precoVenda,Validade) values ('$nome','$quantidade','$pcompra','$pvenda','$validade')";
    //echo($comando);
    $cone = mysqli_connect("localhost","root","","atividade30_05") or die ("Erro ao conectar ao banco de dados.");
    if(mysqli_query($cone,$comando)){
        echo("Erro ao cadastrar.");
    }else{
        echo("Cadastro feio com sucesso.");
    }

?>