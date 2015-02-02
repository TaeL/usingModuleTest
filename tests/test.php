<?php
require_once("../vendor/autoload.php");
use tael\Tests\UsingTest;


function dump($info, $args, $result)
{
    error_log(var_export($info, true));
    error_log("[echoA] args = " . print_r($args, true) . " result = " . print_r($result, true));
}

\tael\Watcher::on(UsingTest::class, 'testEchoLibrary', 'dump');
\tael\Watcher::on(\tael\component\Test::class, 'echoA', 'dump');

UsingTest::testEchoLibrary();
$str = UsingTest::create()
    ->setStr("TaeL Kim")
    ->getEchoString();
echo PHP_EOL . $str . PHP_EOL;
