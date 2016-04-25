<h3>投稿データ</h3>
<h4>タイトル</h4><br>
<?php echo $data[0]['Image']['title']?><br><br><br>
<h4>本文</h4><br>
<?php echo $data[0]['Image']['body']?><br><br><br>
<h4>画像</h4><br>
<?php echo $data[0]['Image']['photo']?>
<?php echo $data[0]['Image']['photo_dir']?>
<?php echo $this->Html->image('/files/image/photo/'.$data[0]['Image']['photo_dir'].'/'.$data[0]['Image']['photp'],array(
	'alt' => $data[0]['Image']['photo']));?>