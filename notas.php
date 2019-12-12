<?php 

    header("Content-type:application/json");

    require_once("conexion.php");

    $db = new db();
    $db=$db->conectar();

    $res=$db->query("SELECT * FROM notes");

    $datos=array();

    foreach ($res as $row){
        
        array_push($datos,
        array(
            'id'    =>$row['id'],
            'title' =>$row['title'],
            'note'  =>$row['note'],
            'color' =>$row['color'],
            'date'  =>$row['date'])
        );
    }
    
    echo json_encode($datos);
?>