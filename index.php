﻿<?php
if(!empty($_GET['test']))
{
$test1 = $_GET['test'];
}
else
{
$test1 = 0;
}


$_Get=array();
$_Post=array();

if($test1 == 1)
{
    $file = txt.txt;
    $current = file_get_contents($file);
    $current = "TEST\n";
    file_put_contents($file,$current);
}
else
{
    echo 'Hello World!';
}
?>