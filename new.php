<?php
session_start();
	require_once("constants.php");
	$link = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
	if (!$link) {
		die('Don\'t connect: ' . mysql_error());
	}
	$db_selected = mysql_select_db(DB_NAME, $link);
	if (!$db_selected) {
		die ('Don\'t connect to database: ' . mysql_error());
	}
$id=1;
$flag=1;

$sql = "SELECT * FROM novos where id = (SELECT MAX(id) FROM novos)";
$result = mysql_query($sql);
$maxid = mysql_fetch_array($result);
$max=0;
while ($maxid['id'] >= $id){
$max=$maxid['id'];
$sql = "SELECT * FROM novos where id = '$max' ";
$result = mysql_query($sql);
$otv = mysql_fetch_array($result);
$_SESSION['zag'] = $otv['zag'];
$_SESSION['text'] = $otv['text'];
$_SESSION['img'] = $otv['img'];
$_SESSION['id'] = $otv['id'];



$sql = "SELECT COUNT(*) FROM com where id_c = '$max'";
$result = mysql_query($sql);
$colcom = mysql_fetch_row($result);

if (isset($otv['img']) and $flag==1)
{
echo " 
<div id='pos'>
<div class='text'><H2 ALIGN='center'><a href='novost.php?id={$_SESSION['id']}'> {$_SESSION['zag']} </a> <br> Колличество комментариев:{$colcom[0]}  </div>
<div class='image'><img src='{$_SESSION['img']}' width='200'> </div> </div>";
$result=null;
$flag=0;
}
else
{
echo " 
<div id='pos'>
<div class='image'><img src='{$_SESSION['img']}' width='200'></div> 
<div class='text'><H2 ALIGN='center'><a href='novost.php?id={$_SESSION['id']}'> {$_SESSION['zag']} </a><br>Колличество комментариев:{$colcom[0]} </div>
</div>";
$result=null;
$flag=1;
}
$result=null;
$maxid['id']--;
}
?>