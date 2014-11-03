<?php

function a ($c)
{
    echo 'a<br>';
    class Bla {}
}

function b ($c)
{
    echo 'b<br>';
}

spl_autoload_register('a');
spl_autoload_register('b');

$c = new Bla;
