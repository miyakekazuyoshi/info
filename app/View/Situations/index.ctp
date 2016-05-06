<?=$this->Html->link('追加',['action'=>'add']);?>

<td>
	<table>
		<tr>situation
			<th>type</th>
			
		</tr>
	<?php foreach($situations as $situation){ ?>
		<tr>
			<td><?=$situation['Situation']['type'];?></td>
		</tr>
	<?php }?>
	</table>
	