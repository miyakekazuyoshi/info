<?php
class Position extends AppModel{

	//public $hasMany=['Client'];

	public $validate=[
		'type'=>[
			'rule1'=>[
				'rule'=>'notBlank',
				'message'=>'役職を選択してください。'
			],
			'rule2'=>[
				'rule'=>'isUnique',
				'message'=>'すでに登録済みです。'
			]
		]
	];
}
