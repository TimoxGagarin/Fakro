<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fakro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/bootstrap-grid.min.css.map">
	<link rel="stylesheet" href="../css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css.map">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<form>
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
</body>
</html>