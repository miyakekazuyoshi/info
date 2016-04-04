<?=$this->Form->create('Image',array(
	'type' => 'file','enctype' => 'multipart/form-data'));
?>
<?=$this->Form->input('Image.image',array(
	'label' => false,'type' => 'file','multiple'));
?>
<?=$this->Form->submit('登録する',array(
	'name' => 'submit'));
?>
<?=$this->Form->end();?>