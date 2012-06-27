<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
foreach ($arr as &$value) {
    echo $value . "<br>";
    if ($value % 6) {
    	echo "<hr />";
    }
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element
?>
