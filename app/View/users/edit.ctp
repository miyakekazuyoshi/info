<?=$this->Form->create();?>
<?=$this->Form->input('name');?>
<?=$this->Form->input('password');?>
<?=$this->Form->submit('登録');?>
<?=$this->Flash->render();?>
<?=$this->Form->end();?>