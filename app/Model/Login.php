<?php
App::uses('AppModel','Model');
App::uses('BlowfishPasswordHasher','Controller/Component/Auth');

class User extends AppModel{

	public $hasMany=['Client','Candidate'];

	public $validate=[
		'password'=>[
			'rule1'=>[
				'rule'=>'notBlank',
				'message'=>'パスワードを入力してください。'
			],
			'rule2'=>[
				'rule'=>['minLength',6],
				'message'=>'パスワードは6文字以上です。'
			]
		],
		'username'=>[
			'rule1'=>[
				'rule'=>'notBlank',
				'message'=>'名前を入力してください。'
			],
			'rule2'=>[
				'rule'=>'isUnique',
				'message'=>'すでに存在する名前です。'
			],
		]
	];

	public function beforeSave($options = array()) {
		if(isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
				$this->data[$this->alias]['password']
			);
		}
		return true;
	}
}