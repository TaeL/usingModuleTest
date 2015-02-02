<?php
/**
 * Created by PhpStorm.
 * User: tael
 * Date: 15. 2. 2.
 * Time: 오후 9:00
 */

namespace tael\Tests;

use tael\component\Test;

class UsingTest {

    public static function testEchoLibrary(){
        echo Test::echoA();
    }

}