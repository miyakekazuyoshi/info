<div align='center'>
<br><h3><?=$msg;?></h3>
<br><hr><br><br>
<div align='right'>
	<font size='4'><?=$this->Html->link('Logout',['controller'=>'login','action'=>'logout'])?></font>
</div><br><br>
<!--<?=$this->Html->link('ユーザー管理',['controller'=>'users','action'=>'index'])?><br><br>-->
<font size='5'><?=$this->Html->link('Client',['controller'=>'clients','action'=>'index'])?></font><br><br><br>
<font size='5'><?=$this->Html->link('Candidate',['controller'=>'candidates','action'=>'index'])?></font><br><br><br>


</div>