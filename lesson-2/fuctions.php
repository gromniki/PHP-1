<?php

function discriminant($b, $a, $c)
{
    return $b**2 - 4*$a*$c;
}

assert(9 == discriminant( 5, 2, 2));
assert(0 == discriminant( 4, 1, 4));
assert(-39 == discriminant( 3, 4, 3));


//var_dump(discriminant(2, 5, 2));


// 3. Что возвращает оператор include
function returnInclude()
{
    return include __DIR__ . '/include.php';
}


