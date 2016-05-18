<?php
class MenuController extends AppController{
	
	public function index(){
		$msg='BRIEDGE MANAGEMENT SYSTEM';
		$this->set('msg',$msg);
	}
}