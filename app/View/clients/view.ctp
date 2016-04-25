<dl>
	<dt>初訪日</dt>
	<dd><?=$client['Client']['visit'];?></dd>

	<dt>お付き合い先</dt>
	<dd><?=$client['Client']['fellowship'].'  様';?></dd>

	<dt>企業担当</dt>
	<dd><?=$client['User']['username'];?></dd>

	<dt>企業名</dt>
	<dd><?=$client['Client']['company'].'  様';?></dd>

	<dt>URL</dt>
	<dd><?=$client['Client']['url'];?></dd>

	<dt>代表</dt>
	<dd><?=$client['Client']['representative'].'  様';?></dd>

	<dt>所在地</dt>
	<dd><?=$client['Client']['address'];?></dd>

	<dt>設立</dt>
	<dd><?=$client['Client']['organize'];?></dd>

	<dt>社員数</dt>
	<dd><?=$client['Client']['member'].' 名';?></dd>

	<dt>企業情報</dt>
	<dd><?=nl2br($client['Client']['info']);?></dd>

	<dt>備考</dt>
	<dd><?=nl2br($client['Client']['remark']);?></dd>

</dl><br><br><br>

<center><?=$this->Html->link('MENU',['controller'=>'menu','action'=>'index']);?></center>