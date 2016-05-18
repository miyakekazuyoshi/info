<div align='center'>
<br><font size='6'color='#191970'><?=$msg;?></font><br>
<br><hr><br><br>
<div align='right'>
	<font size='4'><?=$this->Html->link('Logout',['controller'=>'login','action'=>'logout'])?></font>
</div><br><br>
<!--<?=$this->Html->link('ユーザー管理',['controller'=>'users','action'=>'index'])?><br><br>-->
<font size='5'><?=$this->Html->link('Clients',['controller'=>'clients','action'=>'index'])?></font><br><br><br>
<font size='5'><?=$this->Html->link('Candidates',['controller'=>'candidates','action'=>'index'])?></font><br><br><br>


</div>