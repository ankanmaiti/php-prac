<?php

function dump_and_die($dumpable)
{
    echo "<pre>";
    var_dump($dumpable);
    echo "</pre>";

    die();
}