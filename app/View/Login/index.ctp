<div align='center'>
		<br>
		<h3>ログイン画面</h3>
		<hr>
		<br><br><br>

	<?=$this->Form->create('User');?>
	<table>
		<tr>
			<th>loginid</th>
			<td><?=$this->Form->input('loginId',array('label'=>''));?></td>
		</tr>
		<tr>
			<th>password</th>
			<td><?=$this->Form->input('password',array('label'=>''));?></td>
		</tr>
	</table>
	<?=$this->Flash->render();?>
	<?=$this->Form->submit('ログイン');?>
	<?=$this->Form->end();?>
</div>
