
<?=$this->Form->create('User');?>
<?=$this->Form->input('username');?>
<?=$this->Form->input('password');?>
<?=$this->Form->submit('ログイン');?>
<?=$this->flash->render();?>
<?=$this->Form->end();?>