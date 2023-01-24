<?php


namespace Tests\Unit;

use Tests\Support\UnitTester;

require 'login.php';

class TestsTest extends \Codeception\Test\Unit
{

    protected UnitTester $tester;

    protected function _before()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $res = see('Username');
        $this->assertEquals($res, 1, "Failed to find the Username rubric");
    }
}
