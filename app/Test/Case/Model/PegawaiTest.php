<?php
App::uses('Pegawai', 'Model');

/**
 * Pegawai Test Case
 *
 */
class PegawaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pegawai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pegawai = ClassRegistry::init('Pegawai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pegawai);

		parent::tearDown();
	}

}
