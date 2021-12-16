<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
		<title>TEPLO</title>
		<link rel="shortcut icon" href="/KSY/img/ti.png" type="image/x-icon>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="/KSY/menu.css">
	<link rel="stylesheet" href="/KSY/button.css">
	<link rel="stylesheet" href="/KSY/form.css">
	<link rel="stylesheet" href="/KSY/hard.css">

</head>
<body>

  <section id="form">
		<form class="decor" action="/ksy/registration/submit" method="post">
		@csrf
			<div class="form-inner">
				<h3>ЗАПИСАТЬСЯ НА ЗАНЯТИЕ</h3>
				<input name="parrent" type="text"  placeholder="Как вас зовут?" " >
				<input name="child" type="text" placeholder="Как зовут ребенка?" ">
				<input name="years" type="text" placeholder="Сколько лет вашему ребенку?" >
				<textarea name="situation" placeholder="С какой ситуацией столкнулся ребенок?" rows="3"></textarea>
				<textarea name="question" placeholder="Если у вас есть вопросы - задайте, их, пожалуйста, тут:" rows="3"></textarea>
				<input name="email" type="email" placeholder="Ваш адрес электронной почты">
				<input name="phone" type="text" placeholder="Ваш номер телефона">
				<input type="submit" value="ОТПРАВИТЬ ЗАЯВКУ">
			</div>
		</form>
	</section>
	
</body>
</html>
