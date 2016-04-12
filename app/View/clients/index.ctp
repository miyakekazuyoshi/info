<h3>企業一覧</h3>

<?= $this->Form->create('Client',array('action'=>'index'));?>
<?=$this->Form->input('search');?>
<?=$this->Form->end('検索');?>
<?=$this->Html->link('全件表示',['action'=>'index']);?>

<table>
	<thead>
		<tr>
			<th>企業名</th>
			<th>企業情報</th>
			<th>企業担当</th>
			<th>初訪日</th>
			<th>備考</th>
			<th>編集</th>
		</tr>
	</thead>
	<tbody>
<?php foreach($clients as $client) { ?>
		<tr>
			<td><?= mb_substr($client['Client']['company'],0,8) ?> 様</td>
			<td><?= mb_substr($client['Client']['info'],0,40) ?></td>
			<td><?= $client['User']['username'] ?></td>
			<td><?= $client['Client']['visit'] ?></td>
			<td><?= mb_substr($client['Client']['remark'],0,35) ?></td>
			<td>
				<?= $this->Html->link('詳細',['action'=>'view',$client['Client']['id']]) ?>
				<?= $this->Html->link('編集',['action'=>'edit',$client['Client']['id']]) ?>
				<?= $this->Html->link('削除',['action'=>'delete',$client['Client']['id']], null,'本当に削除してもよろしいですか？') ?>
			</td>
		</tr>
	</tbody>
<?php } ?>
</table>

<div align="center">
	<?= $this->Paginator->prev('<- 前へ',[], null, ['class'=>'prev disabled']) ?>
	<?= $this->Paginator->numbers(['separator'=>'']) ?>
	<?= $this->Paginator->counter(['format'=>'全%count%件']) ?>
	<?= $this->Paginator->counter(['format'=>'{:page}/{:pages}ページを表示']) ?>
	<?= $this->Paginator->next('次へ->', [], null, ['class' => 'next disabled']) ?>
</div>

<?= $this->Html->link('MENU',['controller'=>'menu', 'action'=>'index']) ?>