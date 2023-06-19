<?php
/**
 * @author     Sagar Makwana
 * @datetime   23 March 2023
 * @perpose    Standard commenting way
 * @input      arr[] = {2,3,4,5,10,40} and key = 10
 * @output     Eelment present in 4
 */

$arr = [2, 3, 4, 5, 10, 40];
$x = 10;

function search($arr, $x)
{
    $n = sizeof($arr);
    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] == $x) {
            return $i;
        }
        return -1;
    }
}

?>
