<title>MENU</title>

<div align='center'>
<br><h3><?=$msg;?></h3><br><hr><br>
<?=$this->Html->link('ユーザー管理',['controller'=>'users','action'=>'index'])?><br><br>
<?=$this->Html->link('企業一覧',['controller'=>'clients','action'=>'index'])?><br><br>
<?=$this->Html->link('候補者一覧',['controller'=>'candidates','action'=>'index'])?><br><br>
<?=$this->Html->link('企業登録',['controller'=>'clients','action'=>'add'])?><br><br>
<?=$this->Html->link('候補者登録',['controller'=>'candidates','action'=>'add'])?><br><br><br><br>
<?=$this->Html->link('ログアウト',['controller'=>'login','action'=>'logout'])?>
</div>