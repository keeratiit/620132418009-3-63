<?php

$mysqli=new mysqli("localhost","root","test","myDB");

try{
echo "Connected !!!";
}catch(Exception $e){
     echo $e->getMessage();
 echo "Error !!!";    
}

?>