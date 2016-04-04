<?php 
class Job extends AppModel{

	public $hasMany=['Candidate'];

	public $validate=[
		'position'=>[
			'rule'=>'notBlank',
			'message'=>'入力は必須です。'
		]
	];
}