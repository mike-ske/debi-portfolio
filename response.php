<?php

$request = isset($_GET['item']);

if ($request == 'contact') 
{
    echo 'This is CONTACT pagee';
}
elseif ($request == 'home') {

    echo 'This is HOME pagee';
}
elseif ($request == 'about') {

    echo 'This is ABOUT pagee';
}
?>