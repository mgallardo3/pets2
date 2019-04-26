<?php

// validate a color
function validColor($color)
{
    global  $f3;
    return in_array($color,$f3->get('colors'));
}