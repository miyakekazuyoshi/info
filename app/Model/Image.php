<?php
	Class Image extends AppModel {

		public $actsAs = array(
			'Upload.Upload' => array(
				'photo' => array(
					'fields' => array(
						'dir' => 'photo_dir'
					)
				)
			)
		);
	}
