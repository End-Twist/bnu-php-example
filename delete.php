<?php
 print_r($_POST);

 if(is_array($_POST['delete'])){
    $sql ="DELETE FROM 'student'";
    
   


 }
header("Location: students.php");
  die();
?>