<?php

function polindrom($arr)
{
    if (count($arr)>1) {
        if ((array_shift($arr)) == array_pop($arr)) polindrom($arr);
        else $result = 'Не полиндром';
    } else $result = 'Полиндром';
    echo $result;
}

$word = 'abccba';

echo polindrom(str_split($word));

