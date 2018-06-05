<?php
//program prima brojeve u GET nizu
//ispisuje najveći primljeni broj

// -2 -5 -6 -7 -8 -4 -3 -4 -5 => -2
// 9 1 => 9

$niz = array();
foreach($_GET as $vrijednost)
{
    $niz[]=$vrijednost;
}
echo max($niz);