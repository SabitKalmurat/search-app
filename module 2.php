<?php
(int) $x = 5;
(int) $y = 10;
(int) $z = $x + $y;
echo str_replace($x,$y,$x);
echo ' . ';
echo str_replace($y,$x,$y);
