<?php 
require_once "./app/boot.php";
class Mage 
{
    public static function init() 
    {
        echo "111";
        Boot::init();
    }
}

Mage::init();