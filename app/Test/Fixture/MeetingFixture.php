<?php
/**
 * Meeting Fixture
 */
class MeetingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'start_time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'end_time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'meeting_room_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'gidai' => array('type' => 'string', 'null' => true, 'length' => 1024),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'start_time' => '2017-05-09 04:52:49',
			'end_time' => '2017-05-09 04:52:49',
			'meeting_room_id' => 1,
			'gidai' => 'Lorem ipsum dolor sit amet'
		),
	);

}
