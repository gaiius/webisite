<?php
App::uses('Ruangan', 'Model');

/**
 * Ruangan Test Case
 *
 */
class RuanganTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ruangan',
		'app.tamus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ruangan = ClassRegistry::init('Ruangan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ruangan);

		parent::tearDown();
	}

}
