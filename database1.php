<?php
    try{
        $conn = new PDO('mysql:host=172.31.22.43;dbname=Jenilkumar200514591','Jenilkumar200514591','WVhR6Ec-9g');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo 'Connection Failed: ' . $e->getMessage();
    }
?>
