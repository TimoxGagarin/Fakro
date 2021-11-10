<?php 
	require 'includes/config.php';
	require 'php/send_mail.php';

	if(isset($_POST['do_post'])){
		sendMail($config['email'], 'Ку');
		$_POST = null;
	}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Fakro</title>

	<style type="text/css">

	   input[type='radio']:after {
			width: 18px;
			height: 18px;
			background-color: #d1d3d1;
			content: '';
			display: inline-block;


		}

		input[type='radio']:checked:after {
			width: 18px;
			height: 18px;
			background-color: #50AC25;

		}
	</style>
</head>
<body>
	<header>
		<div class="container">
			<div>
				<img src="img/logo_fakro.png" class="logo">
				<h1 class="logo__item">
					официальный дилер
				</h1>
			</div>
			<nav>
				<div class="gmail">
					<img src="img/gmail.png" class="gmail__item">
					<p class="gmail__title" id="gmail__title">
						<?php echo $config['email'] ?>
					</p>
				</div>
				<div class="phone">
					<img src="img/phone.png" class="phone__item">
					<p class="phone__title">
						<?php echo $config['phone'] ?>
					</p>
					<button type="button" class="btn btn-success">ЗАКАЗАТЬ ЗВОНОК</button>
				</div>
			</nav>
		</div>		
	</header>
	
	<form>
		<section class="roof_windows">
			<div class="container">
				<div class="offer">
					<div class="title">
						Мансардные окна
					</div>
					<p class="intro">
						Больше света и уюта на Вашей мансарде
					</p>
				</div>
				<img src="img/window.jpg" class="window">
				<div class="characteristic">
					<div class="characteristic__title">
						Модель:
					</div>
						<select class="collapsible">
							<option>FTZ-V U2 (бюджетный вариант)</option>
							<option>FTS-V U4 (цена\качество)</option>
							<option>PTP-V U3 (пластик)</option>
						</select>
						<div class="dimensions">
							<p class="subtitle">
								Размер:
							</p>

							<div class="dimensions__title">
								<a href="#"class="dimensions__intro">
									<span>55x78 см</span>
								</a>
								<a href="#" class="dimensions__intro1">
									<span>55x98 см</span>
								</a>
								<a href="#" class="dimensions__intro2">
									<span>66x98 см</span>
								</a>
								<a href="#" class="dimensions__intro3">
									<span>66x118 см</span>
								</a>
								<a href="#" class="dimensions__intro4">
									<span>78x98 см</span>
								</a>
								<a href="#" class="dimensions__intro5">
									<span>78x118 см</span>
								</a>
								<a href="#" class="dimensions__intro6">
									<span>78x140 см</span>
								</a>
								<a href="#" class="dimensions__intro7">
									<span>78x160 см</span>
								</a>
								<a href="#" class="dimensions__intro8">
									<span>94x118 см</span>
								</a>
								<a href="#" class="dimensions__intro9">
									<span>94x140 см</span>
								</a>
								<a href="#" class="dimensions__intro10">
									<span>114x118 см</span>
								</a>
								<a href="#" class="dimensions__intro11">
									<span>114x140 см</span>
								</a>
							</div>
							<p class="price">
								Цена: <span>12 345₽</span>
							</p>
						</div>
				</div>

			</div>
		</section>

		<section class="kits">
			<div class="container">
				<div class="kits__title">
					Рассчитаем стоимость комплекта окна
					<p class="kits__intro">
						и пришлём смету в SMS или на WhatsApp + скидку на оклад и аксессуары
					</p>
				</div>

				<div>
					<img src="img/iphone.png" class="iphone">
					<div class="stage">
						<p class="stage__title">
							Стадия строительства:
						</p>
						<input class="kits__btn" type='radio' name="stage" value="Нету кровли"/>
						<p class="stage__intro">
							Нету кровли
						</p>
						<input class="kits__btn1" type='radio' name="stage" value="Есть кровля"/>
						<p class="stage__intro1">
							Есть кровля
						</p>
					</div>
				</div>

				<div class="services">
					<p class="services__title">
						Дополнительные услуги:
					</p>
					<p class="services__intro">
						Доставка
					</p>
					<input class="services__btn" type='radio' name="services" value="Доставка"/>
					<input class="services__btn1" type='radio' name="services" value="Доставка + монтаж"/>
					<p class="services__intro1">
						Доставка + монтаж
					</p>
					<a href="#" class="kits__btn services__btn1"></a>
				</div>

				<div class="roof">
					<div class="roof__text">
						<p class="roof__title">
							Вид кровли:
						</p>
						<p class="roof__intro"> 
							Металлочерепица
						</p>
						<input class="roof__btn" type='radio' name="roof" value="Металлочерепица"/>
						<p class="roof__intro1">
							Битумная черепица
						</p>
						<input class="roof__btn1" type='radio' name="roof" value="Битумная черепица"/>
						<p class="roof__intro2">
							Фальцевая кровля
						</p>
						<input class="roof__btn2" type='radio' name="roof" value="Фальцевая кровля"/>
						<p class="roof__intro3">
							Натуральная черепица
						</p>
						<input class="roof__btn3" type='radio' name="roof" value="Натуральная черепица"/>
						<p class="roof__intro4">
							Композитная черепица
						</p>
						<input class="roof__btn4" type='radio' name="roof" value="Композитная черепица"/>
					</div>
				</div>

				<div class="model__window">
					<p class="model__title">
						Модель окна:
					</p>
						<p class="model__intro">
							FTZ-V U2 (самый бюджетный вариант)
						</p>
						<input class="model__btn" type='radio' name="model" value="FTZ-V U4 (двухкамерный)"/>
						<p class="model__intro1">
							FTZ-V U4 (двухкамерный)
						</p>
						<input class="model__btn1" type='radio' name="model" value="FTZ-V U4 (двухкамерный)"/>
						<p class="model__intro2">
							FTS-V U4 (популярный, лучшее цена-качество)
						</p>
						<input class="model__btn2" type='radio' name="model" value="FTP-V U4 (премиум окна)"/>
						<p class="model__intro3">
							FTP-V U4 (премиум окна)
						</p>
						<input class="model__btn3" type='radio' name="model" value="PTP-V U3 (пластик, однокамерный)"/>
						<p class="model__intro4">
							PTP-V U3 (пластик, однокамерный)
						</p>
						<input class="model__btn4" type='radio' name="model" value="PTP-V U4 (пластик, двухкамерный)"/>
						<p class="model__intro5">
							PTP-V U4 (пластик, двухкамерный)
						</p>
						<input class="model__btn5" type='radio' name="model"/>
					<div class="number">
						<p class="number__title">
							Количество:
						</p>
						<p class="number__intro">
							1 окно
						</p>
						<input class="number__btn" type='radio' name="number" value="1 окно" />
						<p class="number__intro1">
							2 окна
						</p>
						<input class="number__btn1" type='radio' name="number" value="2 окна" />
						<p class="number__intro2">
							3 окна и более
						</p>
						<input class="number__btn2" type='radio' name="number" value="3 окна и более" />
					</div>
					<div class="payment">
						<p class="payment__title">
							Куда отправить расчёт?
						</p>
						<input class="payment__btn" type='radio' name="payment" value="WhatsApp" />
						<p class="payment__intro">
							WhatsApp
						</p>
						<p class="payment__intro1">
							SMS
						</p>
						<input class="payment__btn1" type='radio' name="payment" value="SMS" />
					</div>
				</div>
			</div>
		</section>

		<section class="size">
			<div class="container">
				<div class="size_title">
					Размер:
				</div>
				<div class="size_btn">
					<input id="size__btn" class="size__btn" type="radio" name="size" value="55x78 см">
					<label class="size__btn__label" for="size__btn"> <span>55x78 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn size__btn1" type="radio" name="size" value="55x98 см">
					<label class="size__btn__label size__btn__label1" for="size__btn"> <span>55x98 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn size__btn2" type="radio" name="size" value="66x98 см">
					<label class="size__btn__label size__btn__label2" for="size__btn"> <span>66x98 см</span> </label>
				</div>
				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="66x118 см">
					<label class="size__btn__label size__btn__label3" for="size__btn"> <span>66x118 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="78x98 см">
					<label class="size__btn__label size__btn__label4" for="size__btn"> <span>78x98 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="78x118 см">
					<label class="size__btn__label size__btn__label5" for="size__btn"> <span>78x118 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="78x140 см">
					<label class="size__btn__label size__btn__label6" for="size__btn"> <span>78x140 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="78x160 см">
					<label class="size__btn__label size__btn__label7" for="size__btn"> <span>78x160 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="94x118 см">
					<label class="size__btn__label size__btn__label8" for="size__btn"> <span>94x118 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size">
					<label class="size__btn__label size__btn__label9" for="size__btn"> <span>94x140 см</span> </label>
				</div>						

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="114x118 см">
					<label class="size__btn__label size__btn__label10" for="size__btn"> <span>114x118 см</span> </label>
				</div>

				<div class="size_btn">
					<input id="size__btn" class="size__btn " type="radio" name="size" value="114x140 см">
					<label class="size__btn__label size__btn__label11" for="size__btn"> <span>114x140 см</span> </label>
				</div>	
			</div>
		</section>

		<section class="connection">
			<p class="connection__title">
				Ваше имя:
			</p>
			<p class=" connection__title connection__title1">
				Номер телефона:
			</p>
				<input class="input__name" type="name" name="name" required>
				<input class="input__phonenumber" type="telephone" placeholder="+7 ___ ___ __ __" name="number" required>
				<input class="form__label" for="form__btn" type="submit" name="do_post" formaction="/" formmethod="POST" value="ПОЛУЧИТЬ РАСЧЕТ">
		</section>
	</form>

	<footer class="footer">
		<div class="container">
				<h1 class="footer__title">
					Центральный склад: 
				<h1>
				<p class="footer__intro">
					МО, Истринский район, п. Снегири, ул. Станционная, 1
				</p>
				<h1 class="footer__title footer__title1">
					Режим работы склада:
				</h1>
				<p class="footer__intro footer__intro1">
					Пн-Пт 10:00 - 16:00
				</p>
				<img src="img/phone.png" class="phone__1">
				<h1 class="footer__title2">
					<?php echo $config['phone'] ?>
				</h1>
				<p class="footer__intro2">
					09:00 - 20:00 
				</p>
				<p class="footer__intro3">
					 БЕЗ ВЫХОДНЫХ
				</p>
		</div>
	</footer>
</body>
</html>


