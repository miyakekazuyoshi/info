<div align='center'>
	<br><h3>ユーザー登録</h3><br>
</div>
<?=$this->Form->create();?>
<?=$this->Form->input('username',array(
	'label'=>'username',
));?>

<?=$this->Form->input('password',array(
	'label'=>'password【６文字以上】',
));?>
<?=$this->Form->submit('登録');?>
<?=$this->Flash->render();?>
<?=$this->Form->end();?>
