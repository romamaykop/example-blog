<?php
session_start();
?> 

<html>
    <head>
    <title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	
<script language="javascript" type="text/javascript">
function validate() {

var input = document.getElementById('mail'); // поиск элемента 'mail' 

// проверка заполнения mail
if(input.value == null || input.value == '') {
alert('Пожалуйста, введите Email!');
return false; // отменяет отправку http-запроса и переход


// отменяет отправку http-запроса и переход
}

var re = new RegExp("[а-яА-Я]"); // регулярное выражение для поиска русских символов
var foundString = re.exec(input.value); // поиск подстроки по регулярному выражению

if(foundString != null) {
alert('Некорректный e-mail!: ' + foundString);
return false; // отменяет отправку http-запроса и переход
}
var input = document.getElementById('pas'); // поиск элемента 'pas' 

// проверка заполнения пароля
if(input.value == null || input.value == '') {
alert('Пожалуйста, введите пароль!');
return false; 

}


var input = document.getElementById('pas1'); // поиск элемента 'pas1'

// проверка заполнения пароля
if(input.value == null || input.value == '') {
alert('Пожалуйста, подтвердите пароль!');
return false; 
}

var input = document.getElementById('pas1'); // поиск элемента 'pas1'
var input1 = document.getElementById('pas'); // поиск элемента 'pas'

// проверка заполнения пароля
if(input1.value != input.value) {
alert('АА! Пароли не совпадают!!!');
return false; 
}

return true; // разрешит отправку http-запроса из формы
}
</script>
	
    </head>
    <body>
	<div class="panel panel-primary">
		<div class="panel-heading">
		
    <h2 class="panel-title">Регистрация</h2>
	</div>
		<form action='regbd.php' method="POST" class="form-horizontal">
			<div class="form-group">				
				<div class="col-sm-10">
					<input type="text" placeholder="Введите свой Email" value="" maxlength="1000" name="mail" id="mail" class="form-control" />
				</div>
				<div class="col-sm-10">
					<input type="text" placeholder="Введите пароль" value="" maxlength="1000" name="pas" id="pas" class="form-control" />
				</div>
				<div class="col-sm-10">
					<input type="text" placeholder="Введите пароль ещё раз" value="" maxlength="1000" name="pas1" id="pas1" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">				
					<input type="submit" value="Зарегестрироваться" onclick="return validate();" class="btn btn-primary">						
				</div>				
				</div>		
		</form>	
<div class="form-group">				
					<input type="submit" value="Вернуться"onclick="javascript:window.location.href='index.php'" class="btn btn-primary">					
				</div>
    </body>
    </html>