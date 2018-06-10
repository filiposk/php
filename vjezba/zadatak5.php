<?php
//ispisati primarne brojeve od 1-100

for($a=1;$a<=100;$a++)
{
    $brojac = 0;
    for($b=1;$b<=100;$b++)
    {
        if($a % $b == 0)
        {
            $brojac++;
        }
    }
    if($brojac <= 2)
    {
        echo $a . "<br>";
    }
}