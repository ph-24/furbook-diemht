<?php
include 'a1.php';
include 'a2.php';
//namespace
//use  OOP\A2\A as A1;
use OOP\A2 as A2;

$ob = new A2();
$ob->getName();


//anonymous function
//$anonymousFunction = function ()
//{
//    echo "This is an anonymous function";
//};
//$anonymousFunction();
//
//function getFunctionName($functionName) {
//    return $functionName();
//}
//
//getFunctionName(function () {
//    echo "This is an anonymous function";
//});

//closure
//$name = 'PHP';
//$anonymousFunction = function ($courename) use($name)
//{
//    echo $courename.'<br>';
//    echo "This is an anonymous function of".$name;
//};
//$anonymousFunction();
//$anonymousFunction('iviettech');

