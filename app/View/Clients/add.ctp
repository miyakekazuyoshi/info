<dev align='center'>
	<h3>企業登録</h3>
</dev>
<?=$this->Form->create();?>
<?=$this->Form->input('company',array(
	'label'=>'企業名',
));?>
<?=$this->Form->input('contract',array(
	'legend' => '',
	'type' => 'radio',
	'options' => array(
		'契約書あり' => '契約書あり','契約書なし' =>'契約書なし',
	)
))?>
<?=$this->Form->input('visit',array(
	'label'=>'初回訪問日',
	'dateFormat'=>'YMD',
	'monthNames'=>'true',
	'maxYear'=>date('Y'),
	'minYear'=>date('Y')-5,
));?>
<?=$this->Form->input('fellowship',array(
	'label'=>'お付き合い先',
	'after'=>'例 ）代表取締役：諸田　眞仁',
	));?>
<?=$this->Form->input('user_id',array(
	'options'=>$users,
	'label'=>'企業担当',
));?>

<?=$this->Form->input('url',array(
	'label'=>'URL',
));?>
<?=$this->Form->input('representative',array(
	'label'=>'代表',
	'after'=>'苗字と名前の間にスペースを入れてください。',
));?>
<?=$this->Form->input('address',array(
	'label'=>'住所',
));?>
<?=$this->Form->input('organize',array(
	'label'=>'設立日',
	'dateFormat'=>'YMD',
	'monthNames'=>'true',
	'maxYear'=>date('Y'),
	'minYear'=>date('Y')-60,
));?>
<?=$this->Form->input('member',array(
	'label'=>'社員数',
));?>
<?=$this->Form->input('info',array(
	'label'=>'企業情報',
	'after'=>'企業情報や、候補者への魅力付けなど',
));?>
<?=$this->Form->input('remark',array(
	'label'=>'備考',
	'after'=>'募集ポジションやその他注意点',
));?>
<?=$this->Form->input('memo',array(
	'label'=>'memo',
	'after'=>'社内共有事項など',
));?>
<?=$this->Form->submit('登録');?>
<?=$this->Flash->render();?>
<?=$this->Form->end();?>