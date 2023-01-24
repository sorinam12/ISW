<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class indexCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/FirstPage');
        $I->click('/html/body/div[2]/div/a[2]');
    }
}
