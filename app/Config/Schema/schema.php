<?php
class AppSchema extends CakeSchema{
    //----------スキーマ・クラス名はAppSchemaで固定

    //テーブル名はスネークケース複数形で宣言する
    
    //会議室
    public $meeting_rooms = [
        'id' => [ 'type' => 'integer', 'key' => 'primary', 'null' => false, 'default' => null],
        'name' => [ 'type' => 'string', 'null' => false, 'default' => '','length' => 255],
        'indexes' => [ 'PRIMARY' => ['column' => 'id', 'unique' => 1]],
        'tableParameters' => [ ]        
    ];

    //会議
    public $meetings = [
        'id' => [ 'type' => 'integer', 'key' => 'primary', 'null' => false, 'default' => null],
        'start_time' => [ 'type' => 'datetime', 'null' => false, 'default' => null],
        'end_time' => [ 'type' => 'datetime', 'null' => false, 'default' => null],
        'meeting_room_id' => [ 'type' => 'integer', 'null' => false, 'default' => null, 'title' => [ 'type' => 'string', 'null' => false, 'default' => null, 'length' => 255] ] ,       
        'gidai' => [ 'type' => 'string', 'null' => true, 'default' => '', 'length' => 1024 ],     
        'indexes' => [ 'PRIMARY' => ['column' => 'id', 'unique' => 1]],
        'tableParameters' => [ ]        
    ];

    //メンバー
    public $members = [
        'id' => [ 'type' => 'integer', 'key' => 'primary','null' => false, 'default' => null],
        'name' => [ 'type' => 'string', 'null' => false, 'default' => '', 'length' => 255],
        'email' => [ 'type' => 'string', 'null' => true, 'default' => '', 'length' => 255],
        'delete_flg' => [ 'type' => 'boolean', 'null' => false, 'default' => 'false',],
        'indexes' => [ 'PRIMARY' => ['column' => 'id', 'unique' => 1]],
        'tableParameters' => [ ]        
    ];

    //中間テーブル（会議⇔メンバー）
    public $meetings_members = [
        'id' => [ 'type' => 'integer', 'key' => 'primary', 'null' => false, 'default' => null],
        'meeting_id' => [ 'type' => 'integer', 'null' => false, 'default' => null],
        'member_id' => [ 'type' => 'integer', 'null' => false, 'default' => null],
        'indexes' => [ 'PRIMARY' => ['column' => 'id', 'unique' => 1]],
        'tableParameters' => [ ]        
    ];
    
}
?>