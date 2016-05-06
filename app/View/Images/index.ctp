<h3>投稿ページ</h3>
<?=$this->Form->create('Image',array('type'=> 'file','action'=>'add'));?>
<?=$this->Form->input('Image.title',array('label'=> 'タイトル'));?>
<?=$this->Form->input('Image.body',array('label'=> '本文'));?>
<?=$this->Form->input('Image.photo',array('type'=> 'file','label' =>'投稿画像'));?>
<?=$this->Form->input('Image.photo_dir',array('type' => 'hidden'));?>
<?=$this->Form->end('Submit');?>