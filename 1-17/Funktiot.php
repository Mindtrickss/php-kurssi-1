<?php

function first_function(string $word): string
{
    return $word . " World!";
}
echo first_function("");

echo "<br>";

function second(): float
{
    return 123.30;
}
echo second();

echo "<br>";


function third(string $letter): string 
{
    return $letter . 'A'. 'B';
}
echo third('');

echo"<br>";


function fourth(int $x, int $y) : int
{
    return $x + $y;
}
echo " Sum is: " . fourth(100, 1);
echo "<br>";

