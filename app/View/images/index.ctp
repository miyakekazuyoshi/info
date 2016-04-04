<td>
	<table>
		<tr>image</tr>
			<th>filename</th>
			<th>contents</th>
			<th>編集</th>
	<?php foreach((array)$imeges as $image) { ?>
		<tr>
			<td><?=$image['Image']['filename'];?></td>
			<td><?=$image['Image']['contents'];?></td>
			<td><?=$this->Html->link('詳細',['action' => 'view',$imege['Image']['id']]);?></td>
		</tr>
	<?php } ?>
	</table>
</td>