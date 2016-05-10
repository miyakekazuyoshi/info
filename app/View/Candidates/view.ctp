<dl>
	<dt>候補者名</dt>
	<dd><?=$candidate['Candidate']['individual'].'  様';?></dd>

	<dt>年齢</dt>
	<dd><?=$candidate['Candidate']['age'].'  歳';?></dd>
	
	<dt>初回面談日</dt>
	<dd><?=$candidate['Candidate']['interview'];?></dd>

	<dt>職種</dt>
	<dd><?=$candidate['Job']['position'];?></dd>

	<dt>年収</dt>
	<dd><?=$candidate['Candidate']['salary'].' 万円';?></dd>

	<dt>進捗状況</dt>
	<dd><?=$candidate['Situation']['type'];?></dd>

	<dt>候補者担当</dt>
	<dd><?=$candidate['User']['username'];?></dd>

	<dt>備考</dt>
	<dd><?=$candidate['Candidate']['remark'];?></dd>

	<?=$this->Html->image('/files/candidate/image/'.$candidate['Candidate']['image_dir'].'/'.$candidate['Candidate']['image'],array('alt' => ['Candidate']['image']));?>
	<a href="/files/candidate/image/3/briedge.pdf#page=1" target="_blank">ファイルを開く</a>
</dl><br><br><br>

<center><?=$this->Html->link('MENU',['controller'=>'menu','action'=>'index']);?></center>