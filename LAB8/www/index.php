<?php

echo "Hello World !!";
$a = 5;
$b = "Mix";
$c = 8.32;
echo $a . $b;
echo "<br>";
echo $b . $c;
echo "<br>";
echo $c + $a;
echo "<br>";

$array = array(5,8.32,"MIX");
echo $array[1]."<br>";
echo $array[2]."<br>";

var_dump($array);

$array = array(array(3,2),8,"BRU");
var_dump($array);
echo "<br>";
echo $array[0][1];

//json
echo "<br>";
$json = array("A","B",3);
$jobj = json_encode($json);
var_dump($jobj);

echo "<br>";
$array = array("one"=>"Mon", "two"=>"tue", "three"=>"fri");
var_dump($array);echo "<br>";
echo $array["two"]."<br>";

echo "<br>";
$jStr = json_encode($array);
var_dump($jStr);echo "<br>";
$jobj = json_decode($jStr);
echo $jobj->one;
echo "<br>";

////////////////////  control  /////////////////////
if($a == "Mix"){
    echo "TRUE";
}else{
    echo $a;
}

// short term of if
echo "<br>";
echo ($b == "Mix")?"TRUE":$b;
echo "<hr>";
for($i = 0; $i < 5; $i++){
    echo $i . ".) Mix <br>";
}

foreach($jobj as $key => $val){
    echo $key . ":" . $val . "<br>";
}
$i = 0;
while($i < 5){
    echo $i++ . "<br>";
}
try{
    $i = 10;
    echo $i/0;
    include "conDB.php";    
}
catch(Exception $e){
    $e->getMessage();
}
?>