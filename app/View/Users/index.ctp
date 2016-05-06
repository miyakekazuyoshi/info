<?=$this->Html->link('追加',['action'=>'add']);?><br><br>
<table>
	<tr>
		<th>id</th>
		<th>username</th>
		<th>password</th>
		<th>編集リンク</th>
	</tr>

	<?php foreach($users as $user) {?>
		<tr>
			<td><?=$user['User']['id'];?></td>
			<td><?=$user['User']['username'];?></td>
			<td><?=$user['User']['password'];?></td>

			<td><?=$this->Html->link('詳細',['action'=>'view',$user['User']['id']])?>
				<?=$this->Html->link('編集',['action'=>'edit',$user['User']['id']])?>
				<?=$this->Html->link('削除',['action'=>'delete',$user['User']['id']],
				null,'本当に削除してもよろしいですか？');?>
			</td>
		</tr>
	<?php }?>
</table><br>
<div align='center'>
	<?=$this->Html->link('MENU',['controller'=>'menu','action'=>'index']);?>
</div>