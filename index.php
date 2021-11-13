<?php 
	require 'includes/config.php';

	if(isset($_POST['send_mail'])){
		$message = "Номер: ". $_POST['phone'] ."\nИмя: ". $_POST['name'];
		
		$message .= "\n\nЗаказ:\n";
		$message .= "Стадия строительства: ". $_POST['stage'] ."\n";
		$message .= "Дополнительные услуги: ". $_POST['services'] ."\n";
		$message .= "Вид кровли: ". $_POST['roof'] ."\n";
		$message .= "Модель окна: ". $_POST['model'] ."\n";
		$message .= "Количество: ". $_POST['number'] ."\n";
		$message .= "Размер: ". $_POST['size'] ."\n";
		$message .= "Куда отправить расчет: ". $_POST['payment'] ."\n";
		mail($config['email'], 'Новый заказ', $message);
	}
	elseif(isset($_POST['get_feedback'])){
		$message = "Номер: ". $_POST['phone'] ."\nИмя: ". $_POST['name'];
		mail($config['email'], 'Запрос звонка', $message);
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
	<link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css.map">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/radio-square.css">
	<title>Fakro</title>
</head>
<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<img src="img/logo_fakro.png" class="logo">
						<h1 class="logo__item">
							официальный дилер
						</h1>
					</div>	
					<div class="gmail d-flex offset-md-1 col-md-3">
						<img src="img/gmail.png" class="header__img">
						<p class="header__info" id="gmail__title">
							<?php echo $config['email'] ?>
						</p>
					</div>
					<div class="phone d-flex col-md-6">
						<img src="img/phone.png" class="header__img">
						<p class="header__info">
							<?php echo $config['phone'] ?>
						</p>
						<form>
							<input type="submit" class="btn btn-success" formaction="/includes/feedback.php" formmethod="POST" value="ЗАКАЗАТЬ ЗВОНОК">
						</form>
					</div>
				</div>
			</div>		
		</header>
		<section class="roof_windows">
			<div class="container">
				<div class="row">
				<div class="offer col-md-6">
					<div class="offer-title">
						Мансардные окна
					</div>
					<p class="offer-intro">
						Больше света и уюта на Вашей мансарде
					</p>		
					<img src="img/window.jpg" class="window">
				</div>

				<div class="characteristic col-md-6">
					<div class="characteristic__title">
						Модель:
					</div>
						<select class="collapsible">
							<option class="wind_model" value="FTZ-V U2 (бюджетный вариант)">FTZ-V U2 (бюджетный вариант)</option>
							<option class="wind_model" value="FTS-V U4 (цена\качество)">FTS-V U4 (цена\качество)</option>
							<option class="wind_model" value="PTP-V U3 (пластик)">PTP-V U3 (пластик)</option>
						</select>
						<div class="dimensions">
							<p class="subtitle">
								Размер:
							</p>
							<div class="size__title">
								<div class="size__row">
									<div class="size_btn">
										<input class="size__intro" type="radio" name="dimension" value="55x78 см">
										<label class="size__intro__label" for="size__intro"> <span>55x78 см</span> </label>
									</div>
									<div class="size_btn">
										<input class="size__intro" type="radio" name="dimension" value="55x98 см">
										<label class="size__intro__label" for="size__intro"> <span>55x98 см</span> </label>
									</div>
									<div class="size_btn">
										<input class="size__intro" type="radio" name="dimension" value="66x98 см">
										<label class="size__intro__label" for="size__intro"> <span>66x98 см</span> </label>
									</div>
									<div class="size_btn">
										<input class="size__intro" type="radio" name="dimension" value="66x118 см">
										<label class="size__intro__label" for="size__intro"> <span>66x118 см</span> </label>
									</div>
									<div class="size_btn">
										<input class="size__intro" type="radio" name="dimension" value="78x98 см">
										<label class="size__intro__label" for="size__intro"> <span>78x98 см</span> </label>
									</div>
								</div>

								<div class="size__row">
									<div class="size_btn">
										<input class="size__intro" type="radio" name="dimension" value="78x118 см">
										<label class="size__intro__label" for="size__intro"> <span>78x118 см</span> </label>
									</div>									
									<div class="size_btn">
										<input class="size__intro" type="radio" name="dimension" value="78x140 см">
										<label class="size__intro__label" for="size__intro"> <span>78x140 см</span> </label>
									</div>	
									<div class="size_btn">
										<input class="size__intro" type="radio" name="dimension" value="78x160 см">
										<label class="size__intro__label" for="size__intro"> <span>78x160 см</span> </label>
									</div>
									<div class="size_btn">
										<input class="size__intro" type="radio" name="dimension" value="94x118 см">
										<label class="size__intro__label" for="size__intro"> <span>94x118 см</span> </label>
									</div>
									<div class="size_btn">
										<input class="size__intro" type="radio" name="dimension" value="94x140 см">
										<label class="size__intro__label" for="size__intro" > <span>94x140 см</span> </label>
									</div>
								</div>

								<div class="size__row">
									<div class="size_btn">
										<input class="size__intro" type="radio" name="dimension" value="114x118 см">
										<label class="size__intro__label" for="size__intro" > <span>114x118 см</span> </label>
									</div>
									<div class="size_btn">
										<input class="size__intro" type="radio" name="dimension" value="114x140 см">
										<label class="size__intro__label" for="size__intro" > <span>114x140 см</span> </label>
									</div>
								</div>
							</div>
							<p class="price d-flex">
								Цена: <span class="price__text">0₽</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	<form>
		<section class="kits">
			<div class="container">
				<div class="kits__title">
					Рассчитаем стоимость комплекта окна
					<p class="kits__intro">
						и пришлём смету в SMS или на WhatsApp + скидку на оклад и аксессуары
					</p>
				</div>
				<img src="img/iphone.png" class="iphone">
				<ul class="stage">
					<p class="list__title">
						Стадия строительства:
					</p>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="stage" value="Нету кровли" required/>
							<span class="radio__span">Нету кровли</span>
						</label>
					</li>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="stage" value="Есть кровля"/>
							<span class="radio__span">Есть кровля</span>
						</label>
					</li>
				</ul>
				<ul class="services">
					<p class="list__title">
						Дополнительные услуги:
					</p>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="services" value="Доставка" required/>	
							<span class="radio__span">Доставка</span>
						</label>
					</li>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="services" value="Доставка + монтаж"/>	
							<span class="radio__span">Доставка + монтаж</span>
						</label>
					</li>
				</ul>
				<ul class="roof">
					<p class="list__title">
						Вид кровли:
					</p>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="roof" value="Металлочерепица" required/>
							<span class="radio__span">Металлочерепица</span>
						</label>
					</li>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="roof" value="Битумная черепица"/>
							<span class="radio__span">Битумная черепица</span>
						</label>
					</li>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="roof" value="Фальцевая кровля"/>
							<span class="radio__span">Фальцевая кровля</span>
						</label>
					</li>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="roof" value="Натуральная черепица"/>
							<span class="radio__span">Натуральная черепица</span>
						</label>
					</li>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="roof" value="Композитная черепица"/>
							<span class="radio__span">Композитная черепица</span>
						</label>
					</li>
				</ul>
				<ul class="model__window">
					<p class="list__title">
						Модель окна:
					</p>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="model" value="FTZ-V U2 (самый бюджетный вариант)" required/>	
							<span class="radio__span">FTZ-V U2 (самый бюджетный вариант)</span>
						</label>
					</li>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="model" value="FTZ-V U4 (двухкамерный)"/>	
							<span class="radio__span">FTZ-V U4 (двухкамерный)</span>
						</label>
					</li>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="model" value="FTS-V U4 (популярный, лучшее цена-качество)"/>	
							<span class="radio__span">FTS-V U4 (популярный, лучшее цена-качество)</span>
						</label>
					</li>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="model" value="FTP-V U4 (премиум окна)"/>	
							<span class="radio__span">FTP-V U4 (премиум окна)</span>	
						</label>
					</li>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="model" value="PTP-V U3 (пластик, однокамерный)"/>	
							<span class="radio__span">PTP-V U3 (пластик, однокамерный)</span>
						</label>
					</li>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="model" value="PTP-V U4 (пластик, двухкамерный)"/>	
							<span class="radio__span">PTP-V U4 (пластик, двухкамерный)</span>	
						</label>
					</li>
				</ul>
				<ul class="number">
					<p class="list__title">
						Количество:
					</p>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="number" value="1 окно" required/>
							<span class="radio__span">1 окно</span>
						</label>
					</li>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="number" value="2 окна"/>
							<span class="radio__span">2 окна</span>
						</label>
					</li>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="number" value="3 окна и более"/>
							<span class="radio__span">3 окна и более</span>
						</label>
					</li>
				</ul>
				<ul class="payment">
					<p class="list__title">
						Куда отправить расчёт?
					</p>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="payment" value="WhatsApp" required/>
							<span class="radio__span">WhatsApp</span>
						</label>
					</li>
					<li>
						<label class="radio__label">
							<input class="radio__button" type='radio' name="payment" value="SMS"/>
							<span class="radio__span">SMS</span>
						</label>
					</li>
				</ul>
			</div>
		</section>
		<section class="size">
			<div class="container">
				<div class="list__title">
					Размер:
				</div>
				<div class="size__title">
					<div class="size__row">
						<div class="size_btn">
							<input class="size__intro" type="radio" name="size" value="55x78 см" required>
							<label class="size__intro__label"> <span>55x78 см</span> </label>
						</div>
						<div class="size_btn">
							<input class="size__intro" type="radio" name="size" value="55x98 см">
							<label class="size__intro__label"> <span>55x98 см</span> </label>
						</div>
						<div class="size_btn">
							<input class="size__intro" type="radio" name="size" value="66x98 см">
							<label class="size__intro__label"> <span>66x98 см</span> </label>
						</div>
						<div class="size_btn">
							<input class="size__intro" type="radio" name="size" value="66x118 см">
							<label class="size__intro__label"> <span>66x118 см</span> </label>
						</div>
						<div class="size_btn">
							<input class="size__intro" type="radio" name="size" value="78x98 см">
							<label class="size__intro__label"> <span>78x98 см</span> </label>
						</div>
					</div>
					<div class="size__row">
						<div class="size_btn">
							<input class="size__intro" type="radio" name="size" value="78x118 см">
							<label class="size__intro__label"> <span>78x118 см</span> </label>
						</div>
						<div class="size_btn">
							<input class="size__intro" type="radio" name="size" value="78x140 см">
							<label class="size__intro__label"> <span>78x140 см</span> </label>
						</div>
						<div class="size_btn">
							<input class="size__intro" type="radio" name="size" value="78x160 см">
							<label class="size__intro__label"> <span>78x160 см</span> </label>
						</div>
						<div class="size_btn">
							<input class="size__intro" type="radio" name="size" value="94x118 см">
							<label class="size__intro__label"> <span>94x118 см</span> </label>
						</div>
						<div class="size_btn">
							<input class="size__intro" type="radio" name="size">
							<label class="size__intro__label"> <span>94x140 см</span> </label>
						</div>
					</div>	
					<div class="size__row">
						<div class="size_btn">
							<input class="size__intro" type="radio" name="size" value="114x118 см">
							<label class="size__intro__label" for="size__btn23"> <span>114x118 см</span> </label>
						</div>

						<div class="size_btn">
							<input class="size__intro" type="radio" name="size" value="114x140 см">
							<label class="size__intro__label" for="size__btn24"> <span>114x140 см</span> </label>
						</div>	
					</div>	
				</div>				
			</div>
		</section>
		<section class="connection">
			<div class="container">
				<div class="row">
					<div class="input__field">
						<p class="list__title">
							Ваше имя:
						</p>	
						<input class="input__data" type="name" name="name" required>
					</div>
					<div class="input__field">
						<p class="list__title">
							Номер телефона:
						</p>
						<input class="input__data" type="telephone" placeholder="+7 ___ ___ __ __" name="phone" required>	
					</div>
				</div>
				<input class="form__submit" type="submit" name="send_mail" formaction="/" formmethod="POST" value="ПОЛУЧИТЬ РАСЧЕТ">
			</div>
		</section>
	</form>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<h1 class="footer__title">
					Центральный склад: 
				<h1>
				<p class="footer__intro">
					МО, Истринский район, п. Снегири, ул. Станционная, 1
				</p>
				<h1 class="footer__title">
					Режим работы склада:
				</h1>
				<p class="footer__intro">
					Пн-Пт 10:00 - 16:00
				</p>
				<img src="img/phone.png" class="phone__1">
				<p class="footer__intro">
					<?php echo $config['phone'] ?>
				</p>
				<p class="footer__intro">
					09:00 - 20:00 
				</p>
				<p class="footer__intro">
					 БЕЗ ВЫХОДНЫХ
				</p>
			</div>
		</div>
	</footer>
	<script src="js/jQuery.js"></script>
	<script src="js/main.js"></script>
</body>
</html>


