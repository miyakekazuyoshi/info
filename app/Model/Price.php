<?php
class Price extends AppModel{

	public $hasMany=['Candidate'];
	
	public $validate=[
		'area'=>[
			'rule'=>'notBlank',
			'message'=>'入力必須'
		]
	];
}