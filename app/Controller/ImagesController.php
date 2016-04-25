<?php
	Class ImagesController extends AppController {

		public $scaffold;

		public function index() {
			$this->render('index');
		}

		public function add() {
			if ($this->request->is('post')) {
				$id = $this->Image->save($this->request->data);

				$this->request('/Images/view/'.$this->Image->id);
				return;
			}
			$this->request->render('index');
		}

		public function view() {
			$id = $this->request->pass[0];

			$option = array('conditions' => array('Image.id' => $id));
			$data = $this->Image->find('all',$data);

			$this->set('data',$data);

			$this->render('view');
		}
	}