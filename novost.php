<?php
session_start();
?> 

<html>

<head>

<title>Novost</title>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="vivod.css">
</head>

<body>
<div id="container">
<?php 
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
$prov = $_GET['id'];
$sql = "SELECT * FROM novos where id = '$prov' ";
$result = mysql_query($sql);
$otv = mysql_fetch_array($result);
$_SESSION['zag'] = $otv['zag'];
$_SESSION['text'] = $otv['text'];
$_SESSION['img'] = $otv['img'];
echo "
 <div id='pos'>
<div class='text'><H2 ALIGN='center'>{$_SESSION['zag']}</H2> <p ALIGN='center'> {$_SESSION['text']} </div>
<div class='image'><img src='{$_SESSION['img']}'  width='250' align='right'> </div>
";
$result=null;
?>	

		<form action='com.php' method="POST" class="form-horizontal">
			<div class="form-group">				
				<div class="col-sm-10">
					<input type="text" placeholder="Введите свой комментарий" value="" maxlength="10000" name="name" id="name" class="form-control" />
					<input type="hidden" placeholder="" value="<?php echo $_GET['id'] ?>" maxlength="10000" name="id_c" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">				
					<input type="submit" value="Комментировать запись" onclick="return validate();" class="btn btn-primary">						
				</div>				
			</div>	            			
		</form>	
		<div class="col-sm-10">				
					<input type="submit" value="Вернуться"onclick="javascript:window.location.href='index.php'" class="btn btn-primary">					
				</div>
</div>

<div class=otziv>
<?php 
require_once("constants.php"); 
$link = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
if (!$link) {
die('Don\'t connect: ' . mysql_error());
}
$db_selected = mysql_select_db(DB_NAME, $link);
if (!$db_selected) {
die ('Don\'t connect to database: ' . mysql_error());
}

echo " <div> <div><p> Комментарий: </p></div> ";
$id=1;
$sql = "SELECT * FROM com where id =(SELECT MAX(id) FROM com)";
$result = mysql_query($sql);
$maxid = mysql_fetch_array($result);
$prov = $_GET['id'];

$max=0;

while ($maxid['id'] >= $id){ 
$max=$maxid['id'];
$sql = "SELECT * FROM com where id = '$max' && id_c= '$prov'";
$result = mysql_query($sql);
$otv = mysql_fetch_array($result);
$_SESSION['id'] = $otv['id'];
$_SESSION['id_c'] = $otv['id_c'];
$_SESSION['comment'] = $otv['comment'];

echo "
<div> 
<div><p>{$_SESSION['comment']}</p></div>
</div>";
$maxid['id']--;
}

?>	
</div>

</div>
</body>
</html>