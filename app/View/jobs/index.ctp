<?=$this->Html->link('追加',['action'=>'add']);?>

<td>
	<table>
		<tr>job
			<th>position</th>
			<th>編集</th>
		</tr>
	<?php foreach($jobs as $job){ ?>
		<tr>
			<td><?=$job['Job']['position'];?></td>

			<td><?=$this->Html->link('編集',['action'=>'edit',$job['Job']['id']])?></td>
		</tr>


	<?php }?>
	</table>
