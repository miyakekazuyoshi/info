<?=$this->Form->create('Candidate',array(
	'type' => 'get',
	'action'=>'index',
));?>
<?=$this->Form->input('search');?>

<?=$this->Form->input('未選択',array(
	'type'=>'checkbox',
	'options'=>$type,
));?>
<?=$this->Form->input('営業',array(
	'type'=>'checkbox',
	'options'=>$type,
));?>
<?=$this->Form->input('エンジニア',array(
	'type'=>'chackbox',
	'options'=>$type,
));?>
<?=$this->Form->input('プロデューサー',array(
	'type'=>'checkbox',
	'options'=>$type,
));?>
<?=$this->Form->input('ディレクター',array(
	'type'=>'checkbox',
	'options'=>$type,
));?>
<?=$this->Form->input('人事',array(
	'type'=>'checkbox',
	'options'=>$type,
));?>
<?=$this->Form->input('広報',array(
	'type'=>'checkbox',
	'options'=>$type,
));?>
<?=$this->Form->input('経理',array(
	'type'=>'checkbox',
	'options'=>$type,
));?>
<?=$this->Form->input('その他',array(
	'type'=>'checkbox',
	'options'=>$type,
));?>

<?=$this->Form->input('price_id',array(
	'options'=>$prices,
	'label'=>'年収範囲',
));?>

<?=$this->Form->end('検索');?>
