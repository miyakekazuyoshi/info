<?php
class Salary extends AppModel{

	public $validate=[
		'area'=>[
			'rule'=>'notBlank',
			'message'=>'入力必須'
		]
	];
}