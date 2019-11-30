<?php
$arr=array(1,6,7,8,9,10,2,3,4,5);
$sum=0;
for($z=0;$z<count($arr);$z++){
    $sum=$sum+$arr[$z];
}
echo "Sum : ". $sum."<br/>";
echo "Avg : ". $avg=$sum/count($arr);

for($z=0;$z<count($arr);$z++){
   if($avg<$arr[$z]){
       echo "Greater".$arr[$z]."</br>";
// greater
       
   }else{
//less 
    echo"---- less than".$arr[$z]."<br/>";
   }

}
//greatest number
$temp=0;
$arr=array(1,6,7,8,9,10,2,3,4,5);
for($j = 0; $j < count($arr)-1; $j ++) {
for($i=0;$i<count($arr)-1;$i++){
  //  echo $arr[$i].">".$arr[$i+1]."<br/> ";
    if($arr[$i] > $arr[$i+1]){
        $temp=$arr[$i+1];
        $arr[$i+1]=$arr[$i];
        $arr[$i]=$temp;
    }

}
}
print_r($arr);
//echo"<br/>Greatest N.==". $temp;
?>