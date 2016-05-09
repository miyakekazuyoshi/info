<table>
	<tr>
		<th>username</th>
		<th>password</th>
	</tr>

	<?php foreach($users as $user) {?>
		<tr>
			<td><?=$user['User']['username'];?></td>
			<td><?=$user['User']['password'];?></td>
		</tr>
	<?php }?>
</table><br>
<div align='center'>
	<?=$this->Html->link('MENU',['controller'=>'menu','action'=>'index']);?>
</div>