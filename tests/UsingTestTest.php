<?php

/**
 * Created by PhpStorm.
 * User: tael
 * Date: 15. 2. 2.
 * Time: 오후 9:03
 */
class UsingTestTest extends PHPUnit_Framework_TestCase
{

    public function test_echoLibrary()
    {
        \tael\Tests\UsingTest::testEchoLibrary();
        self::assertTrue(true);
    }
}
