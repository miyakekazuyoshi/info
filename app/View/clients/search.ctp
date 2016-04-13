<?php
	$this->paginator->options(array(
		'url' => $this->request->query,
		'convertKeys' => array_key($this->request->query)
	));
?>
<?=$this->Form->create('Client',array(
	'action'=>'index',
	'type'=>'get',
));?>
<?=$this->Form->input('searct');?>
<?=$this->Form->end('検索');?>