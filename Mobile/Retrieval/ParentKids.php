<?php
    function parentKids(){
        $id = @trim($_POST['id']);
        $result = findStudents($id);
        if(sizeof($result) > 0){
             $main = array('data'=>$result);
	         echo json_encode($main);
        }else echo "No values";
    }
?>

