<?php

/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/28/2016
 * Time: 3:30 AM
 */
class OliveTest extends PHPUnit_Framework_TestCase
{
    public function testOliveTripleOliveDescription()
    {
        $olive = new \Pizzeria\Models\Components\Olive(3);
        $this->assertEquals("3 olive", $olive->describe());
    }
}
