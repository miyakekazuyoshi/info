<?php
class Status extends AppModel{

	public $hasMany=['Candidate'];

	public $validate=[
		'type'=>[
			'rule'=>'notBlank',
			'message'=>'入力は必須です。'
		]
	];
}