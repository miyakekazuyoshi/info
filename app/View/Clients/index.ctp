<center><font size="6"color="#191970">Clients</font></center>
<div align='right'>
	<?=$this->Html->link('新規登録',['action' => 'add']);?>
</div>
	<table>
		<tr><th>企業名</th>
			<th>企業情報</th>
			<th>企業担当</th>
			<th>初訪日</th>
			<th>備考</th>
			<th>編集</th>
		</tr>
	<?php foreach($clients as $client) {?>
		<tr>
			<td><?=mb_substr($client['Client']['company'],0,8).' 様';?></td>
			<td><?=mb_substr($client['Client']['info'],0,30);?></td>
			<td><?=$client['User']['username'];?></td>
			<td><?=$client['Client']['visit'];?></td>
			<td><?=mb_substr($client['Client']['remark'],0,30);?></td>


			<td><?=$this->Html->link('詳細',['action'=>'view',$client['Client']['id']])?>
				<?=$this->Html->link('編集',['action'=>'edit',$client['Client']['id']])?>
				<?=$this->Html->link('削除',['action'=>'delete',$client['Client']['id']],
				null,'本当に削除してもよろしいですか？');?>				
			</td>
		</tr>
	<?php }?>

	<?=$this->Form->create('Client',array(
		'type' => 'get',
		'action'=>'index',
	));?>
	<center>
		<?=$this->Form->input('search');?><br>

	<div align='left'>
		<label><input type="checkbox" name="data[Candidate][user_id][]" value="1">root</label>
		<label><input type="checkbox" name="data[Candidate][user_id][]" value="2">諸田</label>
		<label><input type="checkbox" name="data[Candidate][user_id][]" value="3">川北</label>
		<label><input type="checkbox" name="data[Candidate][user_id][]" value="4">金子</label>
		<label><input type="checkbox" name="data[Candidate][user_id][]" value="5">花岡</label>
		<label><input type="checkbox" name="data[Candidate][user_id][]" value="6">添田</label>
		<label><input type="checkbox" name="data[Candidate][user_id][]" value="7">岸田</label>
	</div><br>
		<?=$this->Form->end('検索');?><br><br>
		<?=$this->Html->link('全件表示',['action'=>'index']);?><br><br><br>

		<?=$this->Paginator->prev('<- 前へ',array(),null,array('class'=>'prev disabled'));?>
		<?=$this->Paginator->numbers(array('separator'=>''));?>
		<?=$this->Paginator->counter(array('format'=>'全%count%件'));?>
		<?=$this->Paginator->counter(array('format'=>'{:page}/{:pages}ページを表示'));?>
		<?=$this->Paginator->next('次へ->',array(),null,array('class'=>'next disabled'));?><br>
	</center><br><br>
	</table>

	<br><div align='center'>
		<?=$this->Paginator->prev('<- 前へ',array(),null,array('class'=>'prev disabled'));?>
		<?=$this->Paginator->numbers(array('separator'=>''));?>
		<?=$this->Paginator->counter(array('format'=>'全%count%件'));?>
		<?=$this->Paginator->counter(array('format'=>'{:page}/{:pages}ページを表示'));?>
		<?=$this->Paginator->next('次へ->',array(),null,array('class'=>'next disabled'));?><br><br>
		<?=$this->Html->link('MENU',['controller'=>'menu','action'=>'index']);?>
	</div>
