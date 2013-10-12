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
	$op = $_GET["op"];

	if( $op != 0 )
	{
		?><div><pre style="width: 620px;margin: 10px 0 0 0;padding: 10px;border: 0;border: 1px dotted #785;background: #f5f5f5;"><?php
		if( 1 == $op )
		{
			$cmd = "/tmp/tool/add_collection_record.sh ".$qq." ".$id;
		}
		else if( 2 == $op )
		{
			$cmd = "/tmp/tool/purge_tool/auto_get_ttc.sh ".$qq;
		}
		else if( 3 == $op )
		{
			$cmd = "/tmp/tool/purge_tool/auto_purge_ttc.sh ".$qq;
		}
		else
		{
			echo "not found op ".$op;
			exit;
		}

		echo "<strong>line:<font color=\"#0000FF\">".$cmd."</font></strong> <a href=\"http://show.cm.com/card_admin.php\">   >>>back</a></br></br>";
		$res = system($cmd);
		echo $res;
		?></pre></div><?php
	}
	else
	{
?>
	<!--              op1             -->
	<form action="card_admin.php" method="get">
	<p> <strong>点亮用户集卡册 </strong></p>
	<p>
		QQ: <input type="text" name="qq" />
		主题ID: <input type="text" name="id" />
		<input type="submit" value="go"/>
	</p>
	<input type="hidden" value=“1”  name=“op”/>
	</form>


	<!--              op2             -->
	<form action="card_admin.php" method="get">
	<p> <strong>查询用户道具 </strong></p>
	<p>
		QQ: <input type="text" name="qq" />
		<input type="submit" value="go"/>
	</p>
	<input type="hidden" value="2"  name="op">
	</form>


	<!--              op3             -->
	<form action="card_admin.php" method="get">
	<p> <strong>重置用户道具 </strong></p>
	<p>
		QQ: <input type="text" name="qq" />
		<input type="submit" value="go"/>
	</p>
	<input type="hidden" value="3"  name="op">
	</form>
<?php

	}	
?>


</body>
</html>
