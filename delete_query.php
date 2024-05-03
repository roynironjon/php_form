<?php 
    include_once 'dib_config.php';

   $id = $_GET['id'];

   $delete_sql = "DELETE FROM `student_info` WHERE id=$id";
   $result = mysqli_query($conn, $delete_sql);

   if($result){
        header("Location: view-all-student.php");
   }else{
        echo 'Eoor';
   }

?>