<?php
 require "../conDB.php";
 
$id = $_POST['id'];
$name = $_POST['name'];
$pre_name = $_POST['pre_name'];
$subject_id = $_POST['subject_id'];

try{
   $sql="INSERT INTO tb_register VALUES('$id','$name','$pre_name','$subject_id')";
   $mysqli->query($sql);
    if($mysqli->errno==null)
    header("Localtion:/add.php");
}
catch(Exception $e){
    echo $e>getMessage();
   
}
?>