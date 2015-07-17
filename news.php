<?php
session_start();
?> 

<html>

<head>

<title>Ралли - главная странница </title>

<link rel="stylesheet" type="text/css" href="style.css"> 

 <style>
   body {
    background-image: url("img/32.png");
   }

	A:link {color: green; text-decoration: none; font-size: 20px;} 
   A:visited { text-decoration: none; } 
   A:active { text-decoration: none; }
   A:hover { 
    font-size: 25px; 
    font-weight: bold; 
   }
 .link { color: green; }
  </style>
  <script src="ajax1.js"> 
    </script>

  <!-- Скрипт на время -->  
  <script type="text/javascript">
function startTime()
{
var tm=new Date();
var h=tm.getHours();
var m=tm.getMinutes();
var s=tm.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}
function checkTime(i)
{
if (i<10)
{
i="0" + i;
}
return i;
}
</script>

 <!-- Скрипт на банер -->   
 <script language="JavaScript">
i=0;
img_a=new Array()
img_h=new Array()
img_a[0]=new Image()
img_a[1]=new Image()
img_a[2]=new Image()
img_a[3]=new Image()
img_a[0].src="img/rek1.jpg"
img_a[1].src="img/rek3.jpg"
img_a[2].src="img/rek2.jpg"
img_a[3].src="img/rek4.jpg"
function img_b()
{
document.images[0].src=img_a[i].src
document.images[0].src=img_a[i].src
document.images[0].src=img_a[i].src
document.images[0].src=img_a[i].src
i++
if(i>3) i=0;
setTimeout("img_b()", 7000)
}
</script>
 
</head>

<body onLoad="startTime(); img_b()" >
<div class="block">
<!-- банер -->
<img ALIGN='right' width=500 height=100 src="img/rek2.jpg"><br>

<a title="Оформить подписку" href=registr.html>Подписаться на обновления</a>
<br><br><br>
<form action="" method="POST" name="form" >
<input type="text" name="pois" size="40" maxlength="160">
<input type="submit" name="p" value="Поиск" />

<table border="0" cellspacing="20"  align="center"  rules="rows" > 
<?php 
if (isset($_POST["p"]))
	{
		$_SESSION['pois'] = $_POST['pois']; 
		require_once 'poisk.php';		
	}
  
?>
</table>
</form>


 <hr>
<H1 ALIGN='center'>Последние новости о мировом ралли</H1>   
<hr>
<table border="0" cellspacing="20"  align="center"  rules="rows" width=100% height=100%>
  <tr>
  <td>
  <img src="img/h1.png" >
  </td>
  <td><p ALIGN='center'>
<a title="Перейти на главную странницу" class=ssilka href=index.html><span class="link">Главная</span></a> &nbsp  
<a title="Перейти на странницу с новостями" class=ssilka href=news.php><span class="link">Новости</span></a> &nbsp
  <a title="Перейти на странницу истории мирового ралли"class=ssilka href=history.php><span class="link">История</span></a> &nbsp
  <a title="Перейти на странницу с фотографиями"class=ssilka href=galery.html><span class="link">Фото-галерея Ралли</span></a>&nbsp
  <a title="Просмотреть список гонщиков"class=ssilka href=drivers.html><span class="link">Гонщики</span></a>&nbsp
  <a title="Просмотреть список команд"class=ssilka href=teams.html><span class="link">Команды</span></a>&nbsp
  <a title="Перейти на странницу 'О нас'"class=ssilka href=connect.html><span class="link">Обратная связь</span></a></p>
  
   </td>
  <td>
  <p ALIGN='right'>
  Точное время:
   <p id="txt" ALIGN='right'> </p></p>
	</td>	
  </tr>
 </table> 
 
 
 
 <br>
 <table align="center" border="0" cellspacing="20"  align="center"  rules="rows">
<tr>
 <td>
 <form align="center">
 <div id="targetDiv">
<input type = "button" value = "Загрузить рейтинг гонщиков" 
onclick = "getData('itogi_sorevnovaniy.txt', 'targetDiv')"> 
</div>
<p class=pod ALIGN='center'>06.06.2015</p>
</form>


     
 
</td>	
  </tr>
 </table>
 
 
 <table border="0" cellspacing="20"  align="center"  rules="rows"> 
 
  <?php
  require_once 'new.php';
  ?>
  
  
  
  

<!--  
<tr>
 <td>
 <H2 ALIGN='center'>WRC: Дебют нового Hyundai откладывается на 2016 год</H2>
</td>
 <td>
 <p ALIGN='center'>
Новая раллийная машина Hyundai i20 WRC официально дебютирует в 2016 году, на легендарном ралли Монте-Карло. Об этом накануне 
сообщила пресс-служба спортивного подразделения южнокорейского бренда Hyundai Motorsport GmbH. Запланированная на вторую половину 
нынешнего сезона премьера нового автомобиля откладывается из-за проблем с омологацией, связанных с трудностями серийного производства гражданских машин.<br>
Ранее предполагалось (ожидалось), что 5-дверный раллийный хэтч Hyundai i20 WRC, основанный на обновлённой модели, появится на раллийных трассах чемпионата мира 
World Rally Championship (WRC) во второй половине текущего года. однако из-за проблем с омологацией дебют новинки переносится на следующий сезон. Представители 
спортивного подразделения Hyundai Motorsport GmbH пообещали, что новый болид выйдет на старт легендарного Ралли Монте-Карло 2016 года.</p>
</td>
 <td>
 <img src="img/n6.jpg" width="100%">
</td>	
  </tr>  
  
  
<tr>
 <td>
 <H2 ALIGN='center'>Ожье выиграл «Ралли Мексики»</H2>
</td>
 <td>
 <p ALIGN='center'>
Французский экипаж «Фольксвагена» под руководством Себастьяна Ожье стал победителем третьего этапа чемпионата мира WRC «Ралли Мексики».
Вторым к финишу пришел норвежец Мадс Остберг на «Ситроене», а тройку замкнул его соотечественник Андреас Миккельсен на «Фольксвагене».
Ожье выиграл третий этап подряд, возглавив общий зачет чемпионата с 81-м очком, у идущего на втором месте Миккельсена — 47.
<p ALIGN='left'><b>Чемпионат мира. Третий этап</b><br>
«Ралли Мексики». 4-й день<br>
<i>1. Себастьян Ожье (Франция, «Фольксваген») — 4:19.13,4</i><br>
<i>2. Мадс Остберг (Норвегия, «Ситроен») +1.18,8</i><br>
<i>3. Андреас Миккельсен (Норвегия, «Фольксваген») +1.25,1</i></p></p>
</td>
 <td>
 <img src="img/n5.jpg" width="100%">
</td>	
  </tr>
  
<tr>
 <td>
 <H2 ALIGN='center'>Обновленная Fiesta WRC появится в Португалии</H2>
</td>
 <td>
 <p ALIGN='center'>
 Британская конюшня M-Sport намерена представить обновлённый 
 Ford Fiesta WRC уже в следующем месяце, на ралли Португалия, и босс команды Малкольм Уилсон надеется, что новый автомобиль сможет привести команду на подиум уже до конца сезона.<br>
Хотя новая машина будет выглядеть так же, как нынешняя Fiesta, под внешней оболочкой скрывается до 80% нового. 
Инженеры M-Sport разработали обновления для 1,6-литрового двигателя, радиатора, интеркулера, трансмиссии, электроники, дифференциалов и даже шлейфов электрических 
проводов - так много изменений будет в автомобиле на старте пятого этапа чемпионата мира.</p>
</td>
 <td>
 <img src="img/n4.jpg" width="100%">
</td>	
  </tr>

 
<tr>
 <td>
 <H2 ALIGN='center'>«Баха Беларусь–2015»</H2>
</td>
 <td>
 <p ALIGN='center'>
 «Баха Беларусь–2015» пройдет с 29 по 31 мая 2015 года в статусе третьего этапа Чемпионата России по ралли-рейдам и первого этапа Чемпионата Беларуси. 
 Соревнования пройдут под эгидой Российской и Белорусской автомобильных федераций, а также НП РОСРР. «Баха Беларусь–2015» состоится при поддержке генерального 
 партнера Чемпионата и Кубка России по ралли-рейдам компании «Газпромнефть – смазочные материалы», производителя премиальных моторных масел G-Energy, официальных спонсоров – Внешэкономбанка и Бинбанка.</p>
</td>
 <td>
 <img src="img/n2.jpg" width="100%">
</td>	
  </tr>

  
<tr>
 <td>
 <H2 ALIGN='center'>Ралли-рейд «Золото Кагана 2015»: Астрахань зовет!</H2>
</td>
 <td>
 <p ALIGN='center'>
 С 15 по 18 апреля 2015 года гостеприимная Астрахань, уютно расположившись на берегу великой реки Волги, 
 распахнет свои ворота для участников и гостей ралли-рейда «Золото Кагана 2015» - второго этапа чемпионата России по внедорожным ралли.
Четырехдневная гонка с настоящей марафонской дистанцией более 1000 км за несколько лет проведения стала самым ярким и сложным этапом 
Чемпионата, ассоциирующимся с лучшими гонщиками, уникальными трассами и напряженной борьбой!</p>
</td>
 <td>
 <img src="img/n1.png" width="100%">
</td>	
  </tr>
  
  <tr>
 <td>
 <H2 ALIGN='center'>Баха "Россия - Северный Лес 2015" - непростой финиш!</H2>
</td>
 <td>
 <p ALIGN='center'>
 В Карелии завершилась уникальная гонка по бездорожью. 
 Единственный в мире снежно-ледовый ралли-рейд, проходивший при поддержке бренда премиальных моторных масел G-Energy, Внешэкономбанка и 
 Бинбанка, собрал на старте 38 экипажей из 11 стран. За три гоночных дня спортсмены 
 преодолели 326 километров скоростной дистанции, однако решающими стали последние километры перед финишем.</p>
</td>
 <td>
 <img src="img/n3.jpg" width="100%">
</td>	
  </tr>-->
</table>


<a href="#" id="toTop"><img src="img/v.png" border="0" align="absmiddle" width="2%" /></a>  <br><br>
<script src="http://ageta.ru/js/toTop.js" type="text/javascript"></script> 
<script type="text/javascript"> 
$(function() { 
$("#toTop").scrollToTop(); 
}); 
</script>
<script>
            var p = document.getElementById("blinking");
            setInterval(function() {
                if (p.style.fontSize != "16px") {
                    p.style.fontSize = "16px";
                } else {
                    p.style.fontSize = "13px";
                }
            }, 2000);
        </script>
		
		
</div>
</body>

</html>
