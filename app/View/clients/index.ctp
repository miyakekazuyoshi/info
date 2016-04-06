<td>
	<div align='center'>
	<table>
		<tr><h3>企業一覧</h3>
			<th>企業名</th>
			<th>企業情報</th>
			<th>企業担当</th>
			<th>初訪日</th>
			<th>備考</th>
			<th>編集</th>
		</tr>
	</div>
	<?php foreach($clients as $client) {?>
		<tr>
			<td><?=mb_substr($client['Client']['company'],0,8).' 様';?></td>
			<td><?=mb_substr($client['Client']['info'],0,40);?></td>
			<td><?=$client['User']['username'];?></td>
			<td><?=$client['Client']['visit'];?></td>
			<td><?=mb_substr($client['Client']['remark'],0,35);?></td>


			<td><?=$this->Html->link('詳細',['action'=>'view',$client['Client']['id']])?>
				<?=$this->Html->link('編集',['action'=>'edit',$client['Client']['id']])?>
				<?=$this->Html->link('削除',['action'=>'delete',$client['Client']['id']],
				null,'本当に削除してもよろしいですか？');?>				
			</td>
		</tr>
	<?php }?>

	<?=$this->Form->create('Client',array('action'=>'index'));?>
	<?=$this->Form->input('search');?>
	<?=$this->Form->end('検索');?><br><br>
	<?=$this->Html->link('全件表示',['action'=>'index']);?><br><br>
	</table>

	<div align='center'>
		<?=$this->Paginator->prev('<- 前へ',array(),null,array('class'=>'prev disabled'));?>
		<?=$this->Paginator->numbers(array('separator'=>''));?>
		<?=$this->Paginator->counter(array('format'=>'全%count%件'));?>
		<?=$this->Paginator->counter(array('format'=>'{:page}/{:pages}ページを表示'));?>
		<?=$this->Paginator->next('次へ->',array(),null,array('class'=>'next disabled'));?>
	</div><br>

	<?=$this->Html->link('MENU',['controller'=>'menu','action'=>'index']);?>

