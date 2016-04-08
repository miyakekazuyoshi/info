<?=$this->Flash->render('auth');?>
<?=$this->Form->create('User');?>
	<fieldset>
		<legend>
			<?php echo __('ユーザーIDとpasswordを入力してください。');?>
		</legend>
		<?=$this->Form->input('username');?>
		<?=$this->Form->input('password');?>
	</fieldset>
<?=$this->Form->end(__('login'));?>
