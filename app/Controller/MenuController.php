<?php
class MenuController extends AppController{
	
	public function index(){
		$msg='ブライエッジ管理システム';
		$this->set('msg',$msg);
	}
}