<?php
class MenuController extends AppController{
	
	public function index(){
		$msg='WELL COME!';
		$this->set('msg',$msg);
	}
}