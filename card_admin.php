<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
<title>
card admin
</title>
</head>
<body>
<?php 
	$qq = $_GET["qq"];
	$id = $_GET["id"];
	if( $qq != 0 )
	{
		?><div><pre style="width: 620px;margin: 10px 0 0 0;padding: 10px;border: 0;border: 1px dotted #785;background: #f5f5f5;"><?php
		$cmd = "/tmp/tool/add_collection_record.sh ".$qq." ".$id;
		echo "<strong>line:<font color=\"#0000FF\">".$cmd."</font></strong></br></br>";
		$res = system($cmd);
		echo $res;
		?></pre></div><?php
	}
	else
	{
?>
	<form action="card_admin.php" method="get">
	<p> <strong>点亮用户集卡册 </strong></p>
	<p>
		QQ: <input type="text" name="qq" />
		主题ID: <input type="text" name="id" />
		<input type="submit" value="go"/>
	</p>
	</form>
<?php

	}	
?>


</body>
</html>
