<?php
App::uses('AppModel', 'Model');
/**
 * Meeting Model
 *
 * @property MeetingRoom $MeetingRoom
 * @property Member $Member
 */
class Meeting extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'MeetingRoom' => array(
			'className' => 'MeetingRoom',
			'foreignKey' => 'meeting_room_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Member' => array(
			'className' => 'Member',
			'joinTable' => 'meetings_members',
			'foreignKey' => 'meeting_id',
			'associationForeignKey' => 'member_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
