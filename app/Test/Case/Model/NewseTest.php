<?php
App::uses('Newse', 'Model');

/**
 * Newse Test Case
 *
 */
class NewseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.newse',
		'app.categori'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Newse = ClassRegistry::init('Newse');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Newse);

		parent::tearDown();
	}

}
