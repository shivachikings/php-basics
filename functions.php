<?php
//functions
$number = 64;

$root = sqrt($number);
echo $root;

echo "<br>";
echo sqrt(1000);
echo "<br>";
echo pow(2,8);//arguments
echo "<br>";
echo max(44,555,5555,55664,558,47444,5555,44444,888,5555,555,888888887778,4452,5555,5555,5555,5555,5,55,5,555,5,5,5,55);
echo "<br>";
echo min(44,555,5555,55664,558,47444,5555,44444,888,5555,555,888888887778,4452,5555,5555,5555,5555,5,55,5,555,5,5,5,55);


$x = 523.666655655454566;
    echo"<br>";
    echo round($x);
    echo"<hr>";
    echo round($x,4);
echo"<hr>";
echo floor($x);
echo"<hr>";
echo ceil($x);
$sentence= "the quick brown fox jumped over a lazy dog";
echo"<hr>";
echo strtoupper($sentence);
echo"<hr>";
echo strtolower($sentence);
echo"<hr>";
echo ucwords($sentence);
echo"<hr>";
echo str_word_count($sentence);
echo"<hr>";
echo strlen($sentence); //number of letters

$password = "pppppppp";
echo"<hr>";
echo md5($password);
echo"<hr>";
echo sha1($password);
echo"<hr>";
echo crypt($password,"jkhdsgfctytyugwteeeeeeexh cvdfhgdshgfvggfggggggggggggggggggggggggggggggggggggggggggggggggggggg
hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh");

//file
//date
//database
//email
//fetch data


























