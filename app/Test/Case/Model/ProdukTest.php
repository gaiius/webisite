<?php
App::uses('Produk', 'Model');

/**
 * Produk Test Case
 *
 */
class ProdukTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.produk'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Produk = ClassRegistry::init('Produk');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Produk);

		parent::tearDown();
	}

}
