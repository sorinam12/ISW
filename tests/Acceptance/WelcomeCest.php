<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class WelcomeCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I = new WebGuy($scenario)
        $I->wantTo('Verify that the home page welcomes me');
        $I->amOnPage('map.php');
        $I->see('Welcome');
    }
}

