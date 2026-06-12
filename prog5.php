<?php

echo "5 to 10 using For Loop: ";
for ($i = 5; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br/>";
echo "5 to 10 using Foreach Loop: ";
$n = array(5,6,7,8,9,10); 

foreach ($n as $arr) {
    echo $arr . " ";
}
?>
