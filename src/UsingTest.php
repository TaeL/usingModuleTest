<?php
/**
 * Created by PhpStorm.
 * User: tael
 * Date: 15. 2. 2.
 * Time: 오후 9:00
 */

namespace tael\Tests;

use tael\component\Test;

class UsingTest
{
    private $str;

    public static function testEchoLibrary()
    {
        echo Test::echoA();
    }

    /**
     * @return static
     */
    public static function create()
    {
        return new static;
    }

    /**
     * @param mixed $str
     * @return $this
     */
    public function setStr($str)
    {
        $this->str = $str;

        return $this;
    }

    public function getEchoString()
    {
        return Test::echoA()."[using echoA] Hello, $this->str";
    }

}