<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Add Product to cart');
$I->amOnPage('/shop');
$I->seeElement( '.post-22 .add_to_cart_button' );
$I->click('.post-22 .add_to_cart_button' );
$I->seeElement( '.post-22 .added_to_cart' );
$I->click( '.post-22 .added_to_cart' );
$I->seeElement( '.wc-proceed-to-checkout .checkout-button' );
$I->click( '.wc-proceed-to-checkout .checkout-button' );

$I->fillfield('input#billing_first_name','Naveen');
$I->fillfield('input#billing_last_name','Giri');
$I->fillfield('input#billing_company','BuddyDevelopers');
// $I->fillfield('#billing_country','IN');
$I->fillfield('input#billing_address_1','104, 12A, Sahyadri Nagar');
$I->fillfield('input#billing_address_2','Mira road, thane');
$I->fillfield('input#billing_postcode','401107');
$I->fillfield('input#billing_city','thane');
$I->fillfield('input#billing_phone','8097876910');
$I->fillfield('input#billing_email','admin@admin.com');
$I->click('input#payment_method_cheque');
$I->click('input#place_order');
$I->wait(50);
