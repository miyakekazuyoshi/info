<?=$this->Form->create();?>
<?=$this->Form->input('name',array(
	'label'=>'名前',
));?>

<?=$this->Form->input('loginId',array(
	'label' => 'ログイン時に入力するID',
));?>

<?=$this->Form->input('password',array(
	'label'=>'パスワード【６文字以上】',
));?>
<?=$this->Form->submit('登録');?>
<?=$this->Flash->render();?>
<?=$this->Form->end();?>
