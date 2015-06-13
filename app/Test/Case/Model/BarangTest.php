<?php
App::uses('Barang', 'Model');

/**
 * Barang Test Case
 *
 */
class BarangTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.barang'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Barang = ClassRegistry::init('Barang');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Barang);

		parent::tearDown();
	}

}
