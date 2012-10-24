<?php
App::uses('AppModel', 'Model');
/**
 * Categoria Model
 *
 * @property Post $Post
 */
class Categoria extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $hasAndBelongsToMany = array(
		'Post' => array(
			'className'             => 'Post',
			'joinTable'             => 'conjuntions_posts',
			'foreignKey'            => 'categoria_id',
			'associationForeignKey' => 'post_id',
			'unique'                => 'keepExisting'
		)
	);

}
