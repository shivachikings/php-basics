<?php
//arrays
$names = ["mary","musa","mike","moha","mendi","jack","james","ronald","people","george"];
$ages=[17,12,45,41,5,6,7, 99,74,55,7,5,22,47,77,44];
echo $names[4];
echo"<br>";
echo $ages[7];
echo"<br>";
foreach ($names as $jina){
    echo "$jina <br>";
}
echo"<br>";
echo sizeof($names);// count the number of names
echo"<br>";
array_push($names,"bush");
echo sizeof($names);
echo"<br>";
var_dump($names);//shows content of an arrray
echo"<br>";
array_pop($names);
echo"<br>";
var_dump($names);
echo"<br>";
sort($ages);
echo"<br>";
foreach ($ages as $miaka){
    echo "$miaka <br>";
}
echo"<br>";
echo array_sum($ages);
echo"<br>";
//associative array
$person =[ "names"=>"moha musa","age"=>61,"color"=>"black"];
echo $person["names"];
echo"<br>";
echo $person["age"];
echo"<br>";
echo $person["color"];



