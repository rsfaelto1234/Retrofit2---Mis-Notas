<?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id  = $_POST['id'];

        require_once("conexion.php");

        $db = new db();
        $db=$db->conectar();
        
        $res=$db->query("DELETE FROM notes WHERE id='$id' ");

        if ($res ->execute(array($id))){
            $response['success'] = true;
            $response['message'] = "Successfully";

        }else{
            $response['success'] = false;
            $response['message'] = "Failure!";

        }
        
    }else{
        $response['success'] = false;
            $response['message'] = "Error!, no hay parametros por POST";
    }
    
    echo json_encode($response);
?>