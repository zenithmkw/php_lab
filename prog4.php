<?php
echo "using if else"."<br/>";

$month = date("n");

if ($month == 1) {
    echo "jan"."<br/>";
} 
elseif ($month == 2) {
    echo "feb"."<br/>";
} 
elseif ($month == 3) {
    echo "mar"."<br/>";
} 
elseif ($month == 4) {
    echo "apr"."<br/>";
} 
elseif ($month == 5) {
    echo "may"."<br/>";
} 
elseif ($month == 6) {
    echo "jun"."<br/>";
} 
elseif ($month == 7) {
    echo "jul"."<br/>";
} 
elseif ($month == 8) {
    echo "aug"."<br/>";
} 
elseif ($month == 9) {
    echo "sep"."<br/>";
} 
elseif ($month == 10) {
  
    echo "oct"."<br/>";
} 
elseif ($month == 11) {
    echo "nov"."<br/>";
} 
else{
    echo "dec";
} 

echo "using switch case"."<br/>";
switch($month)
{     
        case 1:
            echo "jan";         
            break;
        case 2:
            echo "feb";         
            break;
        case 3:
            echo "mar";         
            break;
        case 4:
            echo "apr";         
            break;
        case 5:
            echo "may";         
            break;
        case 6:
            echo "jun";         
            break;
        case 7:
            echo "jul";         
            break;
        case 8:
            echo "aug";         
            break;
        case 9:
            echo "sep";         
            break;
        case 10:
            echo "oct";         
            break;
        case 11:
            echo "nov";         
            break;
        case 12:
            echo "dec";         
            break;
        default:
            echo "invalid month";
            break;
    }
?>