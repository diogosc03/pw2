<?php 
    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    $dbName = "duvidas";
    $port = 3307;

    // Cria a conexão com o banco de dados:
    $conn = mysqli_connect($servername, $username, $password, $dbName, $port);

    //if($conn -> connect_errno){
    //    echo "Erro";
    //}
    //else{
    //    echo 'Conexão efetuada com sucesso';
    //}
?>