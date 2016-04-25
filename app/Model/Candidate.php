<?php
class Candidate extends AppModel{

	public $actsAs = array(
		'Upload.Upload' => array(
			'image' => array(
				'fields' => array(
					'dir' => 'image_dir',
					'nameCallback' => 'rename',
				)
			)
		)
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
		]
	];
}