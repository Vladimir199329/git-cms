<?php

class FirstCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('Мой профиль');
        $I->click("//button[contains(@class, 'ty-btn__secondary') and text() = 'Войти']");
        $I->fillField(['id' => 'login_popup5'], 'test@mail.com');
        $I->fillField(['id' => 'psw_popup5'], '123456');
        $I->click("//button[contains(@class, 'ty-btn__login') and text() = 'Войти']");
        $I->amOnPage('/');
        $I->click('Отделы');
        $I->see('img');
        $I->click('Отдел 1');
        $I->see('Маслов Алексей');
        //$I->see("//img[@class, ty-pict]");
        //$I->click("//button[contains(@class, 'ty-menu__item-link') and text() = 'Отделы']");

        //ty-menu__item-link"
    }
}