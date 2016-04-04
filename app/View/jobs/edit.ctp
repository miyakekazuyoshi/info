<?=$this->Form->create();?>
<?=$this->Form->input('position');?>
<?=$this->flash->render();?>
<?=$this->Form->submit('登録');?>
<?=$this->Form->end();?>