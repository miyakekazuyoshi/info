<div align='center'>
	<br>
		<h3>ログイン画面</h3>
		<hr>
		<br><br><br>

	<?=$this->Form->create('User');?>
	<table>
		<tr>
			<th>ユーザーID</th>
			<td><?=$this->Form->input('name',array('label'=>''));?></td>
		</tr>
		<tr>
			<th>パスワード</th>
			<td><?=$this->Form->input('password',array('label'=>''));?></td>
		</tr>
	</table>
	<?=$this->flash->render();?>
	<?=$this->Form->submit('ログイン');?>
	<?=$this->Form->end();?>
</div>
