<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo(text:'Test the response code for the index page');
        $I->amOnPage(page:'/');
        $I->seeResponseCodeIs(code:200);


    }
}
