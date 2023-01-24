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
        $I = new WebGuy($scenario)
        $I->wantTo('Verify that the login page fields can be filled');
        $I->amOnPage('login.php');
        $I->fillField('username', 'david');
        $I->fillField('password', '1234');
        $I->click('login')

    }
}