<?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $title  = $_POST['title'];
        $note   = $_POST['note'];
        $color  = $_POST['color'];

        require_once("conexion.php");

        $db = new db();
        $db=$db->conectar();

        $res=$db->prepare('INSERT INTO notes(title, note, color) values(?,?,?)');

        if ($res ->execute(array($title,$note,$color))){
            $response['success'] = true;
            $response['message'] = "Successfully";

        }else{
            $response['success'] = false;
            $response['message'] = "Failure!";

        }
        echo json_encode($response);
    }
    

?>