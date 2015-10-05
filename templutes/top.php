<?php 
session_start();
require_once('config/config.php');?>
<!Doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>Разработка приложений</title>
<meta name='description' content='Разработка приложений для пользователей'>
<meta name='keywords' content='Разработка'>
<link type='text/css' href='media/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
<link type='text/css' href='media/css/stile.css' rel='stylesheet'>
<script src='media/js/jquery-1.11.3.min.js'></script>
<script>
$(function(){
	$('.topmenu a:first').bind('mouseover',function(){
		$('.heads').css('background','url(/media/img/20130827_170558.jpg)');
	});
	$('.topmenu').bind('mouseout',function(){
		$('.heads').css('background','url(/media/img/zelflofon01.jpg)')
	});
	$('.topmenu a:eq(1)').bind('mouseover',function(){
		$('.heads').css('background','url(/media/img/IMG_0984.jpg)');
	});
	$('.topmenu a:eq(2)').bind('mouseover',function(){
		$('.heads').css('background','url(/media/img/IMG_0999.jpg)');
	});
	
	$('.leftmenu a:first').bind('mouseover',function(){
		$('.head-menu').css('background','#afeeee');
	});
	$('.leftmenu a:eq(1)').bind('mouseover',function(){
		$('.img').css('background','#1e90ff');
	});
});


</script>
</head>
<body>
<div class='heads'>
<h1>Helen</h1>
</div>
<div class='strip'>
<? if($_SESSION['id']):?>
<a class='log' href='logout.php'>Выход</a> 
<a class='cab' href='cabinet.php'>Кабинет</a> 
<?php else:?>
<a class='regs' href='reg.php'>Регистрация</a> <a href='login.php' class='ent'>Вход</a> 
<a class='tov' href='tovars.php' >Товары</a>
<?php endif;?>
</div>
<nav class='topmenu'>
<a href='index.php?url=den'>Главные новости</a>
<a href='index.php?url=com'>О компании</a>
<a href='index.php?url=sut'>Контакты</a>
 </nav>
 <div class='container'>
 <div class='col-md-3'>
 <div class='leftmenu'>
 <div class='head-menu'>
 Разделы сайта
 </div>
<a href="#" class="btn btn-primary btn-lg btn-block">Разработка ПО на C++</a>
<a href="#" class="btn btn-primary btn-lg btn-block">Разработка ПО на C#</a>
<a href="#" class="btn btn-primary btn-lg btn-block">Разработка ПО на Java</a>
</div>
<img class='img' style="padding:20px" src='media/img/IMG_0910.jpg'></img>
 </div>
 <div class='col-md-6'>