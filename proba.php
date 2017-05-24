<?php

$tit = array();
$tit[] = 'tit0';
$tit[] = 'tit1';
$tit[] = 'tit2';

$a = array();
$a[0][] = 'a1';
$a[0][] = 'a2';
$a[0][] = 'a3';
$a[0][] = 'a4';
$a[0][] = 'a5';
$a[1][] = 'b1';
$a[1][] = 'b2';
$a[2][] = 'c1';
$a[2][] = 'c2';

$subka = array();
$subka[0][0][] = 'proba00';
$subka[0][0][] = 'proba01';
$subka[0][0][] = 'proba02';
$subka[0][1][] = 'proba10';
$subka[0][1][] = 'proba11';

for ($i = 0; $i < 3; $i++) {
    echo $tit[$i] . '<br/>';

    for ($k = 0; $k < count($a[$i]); $k++) {
        echo '--- ' . $a[$i][$k] . '<br/>';

        for ($n = 0; $n < count($subka[$i][$k]); $n++) {
            echo'------' . $subka[$i][$k][$n] . '<br/>';
        }
    }
}

echo"proba";
