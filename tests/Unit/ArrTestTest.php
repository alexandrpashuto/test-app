<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ArrTestTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testBase()
    {
        require_once('app/Custom/helpers.php');
        $arr['arr'] = ['1','2','3'];
        $arr['mynumber'] = '3';
        $res = ArrTest($arr);
        $this->assertIsInt($res);
    }
    public function testForFalse()
    {
        require_once('app/Custom/helpers.php');
        $arr['arr'] = ['1','2','3'];
        $arr['mynumber'] = '3';
        $res = ArrTest($arr);
        $this->assertTrue($res === -1);
    }
    public function testForTrue()
    {
        require_once('app/Custom/helpers.php');
        $arr['arr'] = ['1','2','3','1','2','3'];
        $arr['mynumber'] = '3';
        $res = ArrTest($arr);
        $this->assertTrue($res !== -1);
    }
}
