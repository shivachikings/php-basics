<?php
//variables
$age = 18;

if($age >= 18)
{
    echo "you can register";

}
else {
    echo "you are under age";

}
    echo "<hr>";
    $day_of_week = 8;
     switch ($day_of_week)
    {
    case 1 :
        echo "monday";
        break;
         case 2 :
             echo "tuesday";
             break;
         case 3 :
             echo "wednesday";
             break;
         case 4 :
             echo "thursday";
             break;
         case 5 :
             echo "friday";
             break;
         case 6 :
             echo "saturday";
             break;
         case 7 :
             echo "sunday";
             break;
         default:
             echo "unknown day";

    }

