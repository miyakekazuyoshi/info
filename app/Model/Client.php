<?php
class Client extends AppModel{

	public $belongsTo=['User'];

	public $validate=[
		'company'=>[
			'rule1'=>[
				'rule'=>'notBlank',
				'message'=>'企業名を入力してください。'
			],
			'rule2'=>[
				'rule'=>'isUnique',
				'message'=>'この企業はすでに登録されています。'
			]
		],
		'contract' => [
			'rule' => 'notBlank',
				'message' => 'どちらかを入力してください。'
		]
	];
}