<?php
class ImagesController extends AppController{

	public $uses=('Image');

	public function index(){
		$this->set('images',$this->Image->find('all'));
	}

	public function add(){
		if($this->request->is('post')){
			$data=[
				'filename'=>$this->request->data['Image']['image']['name'],
				'contents'=>file_get_contents($this->request->data['Image']['image']['tmp_name'])
			];
			if($this->Image->save($data)){
				//var_dump($data);
				//exit;
				$this->Flash->set('保存に成功しました。');
				$this->redirect(['action'=>'index']);
			}
		}
	}

	public function contents($filename){
		$this->layout = false;
		$image = $this->Image->findByFilename($filename);
		
		header('Content-type : image/png');
		echo $image['Image']['contents'];
	}
}