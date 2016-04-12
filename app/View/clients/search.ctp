<?php
	$this->paginator->options(array(
		'url' => $this->request->query,
		'convertKeys' => array_key($this->request->query)
	));
?>
<?=$this->Form->create('Client',array(
	//'action'=>'index',
	'url'=>'/',
	'type'=>'get'
));?>
<?=$this->Form->input('searct');?>
<?=$this->Form->end('検索');?>