<?php
App::uses('EvtYear', 'Model');

/**
 * EvtYear Test Case
 *
 */
class EvtYearTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evt_year',
		'app.post',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EvtYear = ClassRegistry::init('EvtYear');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EvtYear);

		parent::tearDown();
	}

}
