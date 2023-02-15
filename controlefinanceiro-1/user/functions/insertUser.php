<?php
    require "../../database/conexao.php";

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $json = filter_input(INPUT_GET, 'jsn');
    $data = json_decode($json, true);

    $name = $data['nome'];
    $login = $data['login'];
    $pass = $data['pass'];
    
    echo $name . " - " . $login . " - " . $pass;

    
    

    // $sql = "select * from usuarios;";
    // $prp = $pdo->prepare($sql);
    // $prp->execute();
    // $data = $prp->fetchall(PDO::FETCH_ASSOC);
    // //json_encode($variavelparaconversao)
    // echo json_encode($data);
    // Conexao::desconectar();
?> 