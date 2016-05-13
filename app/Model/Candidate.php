<?php
class Candidate extends AppModel{

	public $actsAs = array(
		'Upload.Upload' => array(
			'image' => array(
				'rootDir' => WWW_ROOT,
				'path' => 'files{DS}{model}{DS}{field}{DS}'
			),
		),
	);

	public function rename($field,$filename,$data,$option) {
		return hash("md5",$fileName).".".pathinfo($fileName,PATHINFO_EXTENSION);
	}

	public $belongsTo=['Situation','Job','User'];

	public $validate=[
		'individual'=>[
			'rule'=>'notBlank',
			'message'=>'候補者名を入力してください。'
		],
		'age'=>[
			'rule'=>'notBlank',
			'message'=>'年齢を入力してください。'
		],'salary'=>[
			'rule'=>'notBlank',
			'message'=>'年収を入力してください。'
		]
	];
}