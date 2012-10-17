<?php

App::uses('AppModel', 'Model');

class Conjuntion extends AppModel {
    
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
		'x' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'y' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
	);
}
