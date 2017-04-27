<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('sign in my web site');
$I->amOnPage('/wp-admin');
// $I->loginAsAdmin();
$I->fillfield('input#user_login','admin');
$I->fillfield('input#user_pass','admin');
$I->seeElement( 'input#wp-submit' );
$I->click( 'input#wp-submit' );
$I->wait(5);
$I->wantTo('I am logged in my web site');
$I->seeElement( 'li#menu-dashboard' );
?>
