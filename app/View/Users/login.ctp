<div align='center'>
	<br><h3>ログイン</h3><br>
</div>
<?=$this->Form->create('User');?>
<?=$this->Form->input('username');?>
<?=$this->Form->input('password');?>
<?=$this->Form->submit('ログイン');?>
<?=$this->flash->render();?>
<?=$this->Form->end();?>