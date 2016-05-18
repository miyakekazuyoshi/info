<div align='center'>
<br><h3><?=$msg;?></h3>
<br><hr><br><br>
<div align='right'>
	<?=$this->Html->link('Logout',['controller'=>'login','action'=>'logout'])?>
</div><br><br>
<!--<?=$this->Html->link('ユーザー管理',['controller'=>'users','action'=>'index'])?><br><br>-->
<?=$this->Html->link('Client',['controller'=>'clients','action'=>'index'])?><br><br><br>
<?=$this->Html->link('Candidate',['controller'=>'candidates','action'=>'index'])?><br><br><br>


</div>