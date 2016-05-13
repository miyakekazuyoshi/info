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

	<!--<dt>レジュメ</dt>
	<dd><?=$candidate['Candidate']['image'];?></dd>

	<a href="/files/candidate/image/9/Miyake.xls#page=1" target="_blank">download</a><br>
	<a href="/files/candidate/image/10/miyake.docx#page=1" target="_blank">download</a>
	<a href="/files/candidate/image/11/miyake.pptx#page=1" target="_blank">download</a><br>-->
	
</dl><br><br><br>

<center><?=$this->Html->link('MENU',['controller'=>'menu','action'=>'index']);?></center>