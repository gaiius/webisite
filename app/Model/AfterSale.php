<?php
App::uses('AppModel', 'Model');
/**
 * AfterSale Model
 *
 */
class AfterSale extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'descripsi' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
