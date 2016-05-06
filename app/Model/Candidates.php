<?php
class Candidate extends AppModel{

	public $belongsTo=['User'];

	public $hasMany = ['Image'];

	public $validate=[
		'individual'=>[
			'rule'=>'notBlank',
			'message'=>'候補者名を入力してください。'
		]
	];
}