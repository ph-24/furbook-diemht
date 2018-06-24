<?php
//namespace OOP\A2;
namespace  OOP;//overloading
class A2 extends \OOP\A1
{
    public function getName()
    {
        parent::getName();
        echo "class A2";
    }
}