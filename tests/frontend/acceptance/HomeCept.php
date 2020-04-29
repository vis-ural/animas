<?php

use tests\frontend\AcceptanceTester;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that home page works');
$I->amOnPage(Yii::$app->homeUrl);
$I->see('Animals');
$I->seeLink('Home');
$I->click('Home');
$I->seeInCurrentUrl('/frontend/web/site/index');
