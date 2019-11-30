<?php

$a=array(1,2,3,4,5);
echo"<pre>";
print_r($a);
for($x=0;$x<count($a);$x++)
{

  //  echo $a[$x];
}

$arr= array('a'=>1,'b'=>2,'c'=>3);
foreach($arr as $val){
   // echo $key."==>".$val.'</br>';
   echo $val;
   echo"<br/>";
}

foreach($arr as $key=>$val){
    echo $key."=>".$val.'</br>';
   
 }

?>