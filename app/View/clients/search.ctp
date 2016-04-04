<?=$this->Form->create('Client',array(
	//'action'=>'index',
	'url'=>'/',
	'type'=>'get'
));?>
<?=$this->Form->input('searct');?>
<?=$this->Form->end('検索');?>