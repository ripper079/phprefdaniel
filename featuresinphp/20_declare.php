<?php

//https://www.youtube.com/watch?v=6cPc_SEfgSw&list=PLr3d3QYzkw2xabQRUpcZ_IBk9W50M9pe-&index=20

//declare - ticks[directive]

//declare - encoding[directive]

//declare - strict_types[directive]

declare(strict_types =1);

//  > php7
function sum(int $x, int $y) : int
{
    return $x + $y;
}


//Wont work
//echo sum('5', 10);
//But this do
echo sum(5, 10);

?>