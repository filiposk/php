<?php
//zbrojiti sve brojeve u nizu

$niz=array(2,4,5,2,3,4,5);

$ukupno=0;

foreach($niz as $vrijednost)
{
    $ukupno+=$vrijednost;
}

echo $ukupno;