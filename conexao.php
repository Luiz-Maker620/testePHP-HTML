<?php
    $hostname = 'localhost';
    $nomeBanco = 'teste';
    $usuario = 'root';
    $senha = '';

    $mysqli = new mysqli($hostname, $usuario, $senha, $nomeBanco);

    if ($mysqli->connect_errno)  {
        echo "falha ao conectar" . $mysqli->connect_errno;
    } else {
        echo "conectado";
    }
?>