<?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id  = $_POST['id'];
        $title  = $_POST['title'];
        $note   = $_POST['note'];
        $color  = $_POST['color'];

        require_once("conexion.php");

        $db = new db();
        $db=$db->conectar();

        $res=$db->query("UPDATE notes SET title='$title', note='$note', color='$color' WHERE id='$id' ");

        if ($res ->execute(array($id,$title,$note,$color))){
            $response['success'] = true;
            $response['message'] = "Successfully";

        }else{
            $response['success'] = false;
            $response['message'] = "Failure!";

        }
        echo json_encode($response);
    }
    
    
?>