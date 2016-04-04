<?php
class Candidate extends AppModel{

	public $belongsTo=['Situation','Job','User'];

	public $validate=[
		'individual'=>[
			'rule'=>'notBlank',
			'message'=>'候補者名を入力してください。'
		],
		'age'=>[
			'rule'=>'notBlank',
			'message'=>'年齢を入力してください。'
		]
	];
}