<?php
    if (!empty($_GET))
    {
        $action = $_GET['action'];

        include "./user/functions/". $action .".php";
    } 
    else 
    {
        echo 'operação não suportada';
    }
?>