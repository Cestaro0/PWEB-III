<?php
require "./database/conexao.php";
$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "select * from usuarios;";
$prp = $pdo->prepare($sql);
$prp->execute();
$data = $prp->fetchall(PDO::FETCH_ASSOC);
//json_encode($variavelparaconversao)
echo json_encode($data);
Conexao::desconectar();
