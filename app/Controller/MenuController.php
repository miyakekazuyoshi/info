<?php
class MenuController extends AppController{
	
	public function index(){
		$msg='Briedge Management System';
		$this->set('msg',$msg);
	}
}