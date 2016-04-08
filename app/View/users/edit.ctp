<?=$this->Form->create();?>
<?=$this->Form->input('username',array(
	'label'=>'名前',
));?>

<?=$this->Form->input('password',array(
	'label'=>'パスワード【６文字以上】',
));?>
<?=$this->Form->submit('登録');?>
<?=$this->Flash->render();?>
<?=$this->Form->end();?>
