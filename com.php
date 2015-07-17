<?php 
	header("Content-Type: text/html; charset=utf-8");
	require_once("constants.php"); 
	$link = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
	if (!$link) {
		die('Don\'t connect: ' . mysql_error());
	}
	$db_selected = mysql_select_db(DB_NAME, $link);
	if (!$db_selected) {
		die ('Don\'t connect to database: ' . mysql_error());
	}
	mysql_set_charset('utf8');
	$result = mysql_query($query);

$id_c = $_POST['id_c'];

$com = $_POST['name'];


$result2 = mysql_query ("INSERT INTO com(id, id_c, comment) VALUES ('','$id_c','$com')");
if ($result2=='TRUE'){
 echo "<script>alert(\"Комментарий добавлен. '$id_c'\");</script>";
}
else {
 echo "<script>alert(\"Комментарий не добавлен. '$id_c','$com'\");</script>";
}
?>
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="novost.php?id=<?php echo $id_c; ?>");}
window.setTimeout("changeurl();",1);
</script>