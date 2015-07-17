<?php 
	session_start();
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

$mail = $_POST['mail'];
$pas = $_POST['pas'];
$kod = rand(100000,9999999);



$result2 = mysql_query ("INSERT INTO user(id, email, pas, kod, aktiv) VALUES ('','$mail','$pas','$kod','0')");

if ($result2=='TRUE'){
	$sql = "SELECT * FROM user where id = (SELECT MAX(id) FROM user)";
    $result = mysql_query($sql);
    $maxid = mysql_fetch_array($result);
	echo "Вы успешно зарегистрированы. Ваш пароль активации $kod, запомните его Пройдите по ссылке 
	<a href=http://bloblo/active.php?id=$maxid[0]>http://bloblo/active.php?id=$maxid[0]</a>";
}
else {
 echo "<script>alert(\"Вы не зарегистрированы.\");</script>";
}
?>
<br>
<input type="submit" value="На главную"onclick="javascript:window.location.href='index.php'" class="btn btn-primary">