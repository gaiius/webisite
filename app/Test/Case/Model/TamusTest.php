<?php
App::uses('Tamus', 'Model');

/**
 * Tamus Test Case
 *
 */
class TamusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tamus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tamus = ClassRegistry::init('Tamus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tamus);

		parent::tearDown();
	}

}
