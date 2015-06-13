<?php
App::uses('AfterSale', 'Model');

/**
 * AfterSale Test Case
 *
 */
class AfterSaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.after_sale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AfterSale = ClassRegistry::init('AfterSale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AfterSale);

		parent::tearDown();
	}

}
