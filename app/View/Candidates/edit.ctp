<dev align='center'>
	<h3>候補者内容編集</h3>
</dev>
<?=$this->Form->create('Candidate',array('type' => 'file'));?>
<?=$this->Form->input('individual',array(
	'label'=>'候補者名',
	'after'=>'苗字と名前の間にスペースを入れてください。',
));?>
<?=$this->Form->input('age',array(
	'label'=>'年齢',
));?>
<?=$this->Form->input('interview',array(
	'label'=>'初回面談日',
	'dateFormat'=>'YMD',
	'monthNames'=>'true',
	'maxYear'=>date('Y'),
	'minYrar'=>date('Y')-5,
));?>
<?=$this->Form->input('user_id',array(
	'options'=>$users,
	'label'=>'候補者担当',
));?>
<?=$this->Form->input('situation_id',array(
	'options'=>$situations,
	'label'=>'進捗状況',
));?>
<?=$this->Form->input('job_id',array(
	'options'=>$jobs,
	'label'=>'職種'
));?>
<?=$this->Form->input('salary',array(
	'label'=>'年収',
	'after'=>'不明の場合は0と記入'
));?>
<?=$this->Form->input('remark',array(
	'label'=>'備考',
	'after'=>'具体的なポジションや経験、人柄など',
));?>
<!--<?=$this->Form->input('Candidate.image',array(
	'type' => 'file',
	'label' => 'ファイル選択'
));?>
<?=$this->Form->input('Candidate.image_dir',array(
	'type' => 'hidden'
));?>-->
<?=$this->Flash->render();?>

<?=$this->Form->submit('登録');?>
<?=$this->Form->end();?>