<?php

App::uses('AppModel', 'Model');

class Categoria extends AppModel {

	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
	);
}
