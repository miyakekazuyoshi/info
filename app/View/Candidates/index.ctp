	<div align='center'>
	<h3>候補者一覧</h3>
	<table>
		<tr>
			<th>候補者名</th>
			<th>年齢</th>
			<th>初回面談日</th>
			<th>進捗状況</th>
			<th>職種</th>
			<th>年収</th>
			<th>候補者担当</th>
			<th>備考</th>
			<th>編集</th>
		</tr>
	</div>
	<?php foreach($candidates as $candidate) { ?>
		<tr>
			<td><?=$candidate['Candidate']['individual'].'  様';?></td>
			<td><?=$candidate['Candidate']['age'].'  歳';?></td>
			<td><?=$candidate['Candidate']['interview'];?></td>
			<td><?=$candidate['Situation']['type'];?></td>
			<td><?=$candidate['Job']['position'];?></td>
			<td><?=$candidate['Candidate']['salary'].' 万円';?></td>
			<td><?=$candidate['User']['username'];?></td>
			<td><?=mb_substr($candidate['Candidate']['remark'],0,40);?></td>

			<td><?=$this->Html->link('詳細',['action'=>'view',$candidate['Candidate']['id']])?>
				<?=$this->Html->link('編集',['action'=>'edit',$candidate['Candidate']['id']])?>
				<?=$this->Html->link('削除',['action'=>'delete',$candidate['Candidate']['id']],
					null,'本当に削除してもよろしいですか？');?>
			</td>
		</tr>
	<?php }?>

	<?=$this->Form->create('Candidate',array(
		'type' => 'get',
		'action'=>'index',
	));?>
	<?=$this->Form->input('search');?>
	<br>
	
	<div align='left'>
		<label><input type="checkbox" name="data[Candidate][job_id][]" value="1">未選択</label>
		<label><input type="checkbox" name="data[Candidate][job_id][]" value="2">営業</label>
		<label><input type="checkbox" name="data[Candidate][job_id][]" value="3">エンジニア</label>
		<label><input type="checkbox" name="data[Candidate][job_id][]" value="4">プロデューサー</label>
		<label><input type="checkbox" name="data[Candidate][job_id][]" value="5">ディレクター</label>
		<label><input type="checkbox" name="data[Candidate][job_id][]" value="6">人事</label>
		<label><input type="checkbox" name="data[Candidate][job_id][]" value="7">広報</label>
		<label><input type="checkbox" name="data[Candidate][job_id][]" value="8">経理</label>
		<label><input type="checkbox" name="data[Candidate][job_id][]" value="9">その他</label>
		<br>
		年収<br>
		<select name="data[Candidate][salary]">
			<option value="1">------</option>
			<option value="2">500万以下</option>
			<option value="3">500万～800万</option>
			<option value="4">800万～1000万</option>
			<option value="5">1000万以上</option>
		</select>
	</div>

	<?=$this->Form->end('検索');?><br><br>
	<?=$this->Html->link('全件表示',['action'=>'index']);?><br><br>
	</table>

	<div algin='center'>
		<?=$this->Paginator->prev('<- 前へ',array(),null,array('class'=>'prev disabled'));?>
		<?=$this->Paginator->numbers(array('separator'=>''));?>
		<?=$this->Paginator->counter(array('format'=>'全%count%件'));?>
		<?=$this->Paginator->counter(array('format'=>'{:page}/{:pages}ページを表示'));?>
		<?=$this->Paginator->next('次へ->',array(),null,array('class'=>'next disabled'));?>
	</div><br>

	<?=$this->Html->link('MENU',['controller'=>'menu','action'=>'index']);?>