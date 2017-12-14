<?php include('./utm.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8" />
	<title>Центр Технического Оборудования</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, width=800, initial-scale=1.0" />
	<meta name="description" content="Оборудование для шиномонтажа, шиномонтажные станки, балансировочные станки, шиномонтажные полуавтоматы, балансировочные полуавтоматы, шиномонтажные стенды, балансировочные стенды. Легковые шиномонтажные станки, грузовые шиномонтажные станки.">
	<meta name="Keywords" content="Оборудование для шиномонтажа, шиномонтажные станки, балансировочные станки, шиномонтажные полуавтоматы, балансировочные полуавтоматы, шиномонтажные стенды, балансировочные стенды. Легковые шиномонтажные станки, грузовые шиномонтажные станки">
	<link rel="shortcut icon" href="favicon.png" />
	<link href="https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/media.css" />

</head>
<body>
	
	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="logo">
						<img class="logo-img" src="img/logo.png" width="81" height="73" alt="Логотип">
					</div>
					<div class="header-logo-text">
						<h1>Продажа шиномонтажного оборудования<br>с доставкой по России </h1>
						<span>Центр Технического Оборудования</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 header-city">
					<p class="city-p"><i></i>Москва</p>
					<a href="#openMenu" class="openMenu">город доставки</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 header-phone-number">
					<p>8 800 250 9946</p>
					<a href="#openModal"> Звоните! Поможем выбрать </a>
				</div>
			</div>
		</div>	
	</header>
	
	<div class="wrap-top-menu">
				<div class="container">
			<div class="row top-menu">
				<div class="col-md-3 col-sm-3 col-xs-3 top-menu-item top-menu-item-1">
					<img src="img/top-menu-item-1.png" width="51" height="78" alt="Шиномонтажные станки">
					<a href="#">Шиномонтажные<br>станки</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 top-menu-item top-menu-item-2">
					<img src="img/top-menu-item-21.png" width="51" alt="Балансировочные станки">
					<a href="#"> Балансировочные<br>станки</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 top-menu-item top-menu-item-3">
					<img src="img/top-menu-item-3.png" width="68" alt="Компрессорное оборудование">
					<a href="#"> Компрессорное<br>оборудование</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 top-menu-item top-menu-item-4">
					<img src="img/top-menu-item-4.png" width="85" alt="Компрессорное оборудование">
					<a href="#"> Домкраты,<br>Вулканизаторы</a>
				</div>
			</div>
		</div>
	</div>

	
	<div class="container section-1">
		<div class="row">
			<div class="col-md-12 section-title section-title-1">
				<h2>закажите <span>шиномонтажное оборудование</span><br><span>по ценам завода</span> изготовителя с доставкой<br><span>от 2 до 14 дней с оптового склада</span></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-6 section-1-equipment">
				<div class="equipment-img">
					<img src="img/p37.png" width="203" alt="" class="equipment-img-1">
				</div>
				<div class="equipment-brand">
					<img src="img/Vector-Smart-Object.png" width="165" height="71" alt="" class="equipment-brand-img">
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 wrap-section-1-list">
				<div class="section-1-list">
					<ul>
						<li class="list-1-item item-1-1"><img src="img/box.png" alt=""><span>Прямые поставки</span> с 54<br>заводов производителей</li>
						<li class="list-1-item item-1-2"><img src="img/guarantee.png" alt=""><span>Гарантия</span> на всё оборудование<br/>от 1 года <span>до 3 лет</span></li>
						<li class="list-1-item item-1-3"><img src="img/ruble-currency-sign.png" alt="">Гарантия лучшей цены</li>
						<li class="list-1-item item-1-4"><img src="img/aeroplane.png" alt="">Доставка по всей России</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12 section-1-form">
				<div class="section-1-form-wrap">
				  <h4>Узнай цены!<br>оставь заявку</h4>
				  <form method="post" action="sender.php" class="sform">
				  <input type="hidden" name="subject" value="Узнай цены! оставь заявку">
				  	<div class="wrap-input-name">
						<input class="input-text input-name" type="text" name="name" placeholder="Имя">
				  	</div>
				 	 <div class="wrap-input-telephone">
				  		<input class="input-text input-phone phone-mask" type="text" name="phone" placeholder="Телефон*">
				 	 </div>
				  	<div class="wrap-input-email">
				  		<input class="input-text input-email" type="email" name="email" placeholder="Почта">
				 	</div>
				  	<div class="wrap-select">
				  		<select class="input-text" name="variant">
				  		<option class="input-text input-select" disabled selected="selected">У вас уже есть бизнес?</option>
						<option value="1_variant">У меня свой бизнес</option>
						<option value="2_variant">Только планирую открыть свой бизнес</option>
						<option value="3_variant">Пока работаю в найме</option>
				  		</select>
				  	</div>
				  	<div class="wrap-form-btn">
				  		<input class="form-button form-1-btn"  type="submit" name="full_catalog" value="Получи полный каталог">
				  	</div>
				  </form>
			  </div>
			</div>
		</div>
	</div>

	
	<div class="wrap-section-string-form">
			<div class="container section-string-form">
			<div class="row">
				<div class="col-md-12 section-title section-title-2">
					<h2>Подберём комплект оборудования<br/><span>в 2 раза быстрее</span> конткурентов<br/><span>из 1639 моделей в наличии</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-3 col-xs-3 cat-img-1-box">
					<img src="img/image_cat_1.png" width="623" alt="" class="section-2-img img-left cat-img-1">
				</div>
				<div class="col-md-8 col-sm-9 col-xs-9 section-block-text block-text-1">
					<h3>Легковые шиномонтажные<br>и балансировочные станки в наличии<br><span>142 модели</span> от <span>44 791 рубля</span></h3>
					<p>Получите подробные характеристики, фотографии и цены на весь модельный<br>ряд шиномонтажных и балансировочных станков</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 catalog-wrap-1">
					<div class="form-catalog-wrap">
						<div class="triangle-topright"></div>
						<div class="form-catalog">
							 <form method="post" action="sender.php" class="sform">
								<p>оставьте ваши имя и телефон, чтобы получить каталог</p>
								 <input type="hidden" name="subject" value="Оставьте ваши имя и телефон, чтобы получить каталог">
								<input class="input-text input-name input-string-form string-form-name" type="text" name="name" placeholder="Имя">
								<input class="input-text input-phone input-string-form phone-mask"  type="text" name="phone" placeholder="Телефон*">
								<input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
								<div class="wrap-form-btn btn-position-right">
									<input class="form-button form-2-btn"  type="submit" name="catalog" value="Получить каталог">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<div class="container section-string-form">
			<div class="row">
				<div class="col-md-8 col-sm-9 col-xs-9 section-block-text block-text-1">
					<h3>Грузовые шиномонтажные<br>и балансировочные станки в наличии<br><span>37 моделей</span> от <span>152 022 рубей</span></h3>
					<p>Получите подробные характеристики, фотографии и цены на весь модельный<br>ряд шиномонтажных и балансировочных грузовых станков</p>
				</div>
				<div class="col-md-4 col-sm-3 col-xs-3 cat-img-2-box">
					<img src="img/image_cat_2.png" width="981" alt="" class="img-right cat-img-2">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 catalog-wrap-2">
					<div class="form-catalog-wrap">
						<div class="form-catalog-left">
							 <form method="post" action="sender.php" class="sform">
							<p>оставьте ваши имя и телефон, чтобы получить каталог</p>
							 <input type="hidden" name="subject" value="Оставьте ваши имя и телефон, чтобы получить каталог">
								<input class="input-text input-name input-string-form-left" type="text" name="name" placeholder="Имя">
								<input class="input-text input-phone input-string-form phone-mask"  type="text" name="phone" placeholder="Телефон*">
								<input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
								<div class="wrap-form-btn btn-position-center">
									<input class="form-button form-2-btn"  type="submit" name="catalog" value="Получить каталог">
								</div>
							</form>
							
						</div>
						<div class="triangle-topleft"></div>
					</div>
				</div>
			</div>
		</div>
	<div class="wrap-section-string-form">
		<div class="container section-string-form">
			<div class="row">
				<div class="col-md-4 col-sm-3 col-xs-3 cat-img-3-box">
					<img src="img/image_cat_3.png" width="600" alt="" class="section-2-img img-left cat-img-3">
				</div>
				
				<div class="col-md-8 col-sm-9 col-xs-9 section-block-text block-text-1">
					<h3>Компрессоры <br>от 25 до 2000 литров в наличии<br><span>256 моделей</span>компрессоров (поршневых и винтовых) от <span>9 187 рубей</span></h3>
					<p>Получите подробные характеристики, фотографии и цены на весь модельный<br>ряд ряд компрессоров от 25 до 2000 литров</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 catalog-wrap-1">
					<div class="form-catalog-wrap">
						<div class="triangle-topright"></div>
						<div class="form-catalog">
							 <form method="post" action="sender.php" class="sform">
								<p>оставьте ваши имя и телефон, чтобы получить каталог</p>
								 <input type="hidden" name="subject" value="Оставьте ваши имя и телефон, чтобы получить каталог">
								<input class="input-text input-name input-string-form string-form-name" type="text" name="name" placeholder="Имя">
								<input class="input-text input-phone input-string-form phone-mask"  type="text" name="phone" placeholder="Телефон*">
								<input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
								<div class="wrap-form-btn btn-position-right">
									<input class="form-button form-2-btn"  type="submit" name="catalog" value="Получить каталог">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="container section-string-form">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-9 section-block-text block-text-1">
					<h3>Домкраты, гайковерты, вулканизаторы <br>и борторасширители в наличии<br><span>114 моделей</span> от <span>1 939 рублей</span></h3>
					<p>Получите подробные характеристики, фотографии и цены на весь модельный<br>ряд домкратов, гайковертов, вулканизаторов<br/>и борторасширителей</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-3 cat-img-4-box">
					<img src="img/image_cat_4.png" width="600" alt="" class="img-right cat-img-4">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 catalog-wrap-2">
					<div class="form-catalog-wrap">
						<div class="form-catalog-left">
							 <form method="post" action="sender.php" class="sform">
							<p>оставьте ваши имя и телефон, чтобы получить каталог</p>
							 <input type="hidden" name="subject" value="Оставьте ваши имя и телефон, чтобы получить каталог">
								<input class="input-text input-name input-string-form-left" type="text" name="name" placeholder="Имя">
								<input class="input-text input-phone input-string-form phone-mask"  type="text" name="phone" placeholder="Телефон*">
								<input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
								<div class="wrap-form-btn btn-position-center">
									<input class="form-button form-2-btn"  type="submit" name="catalog" value="Получить каталог">
								</div>
							</form>
						</div>
						<div class="triangle-topleft"></div>
					</div>
				</div>
			</div>
		</div>
		
<div class="wrap-section-string-form">
	<div class="container section-string-form">
		<div class="row">
				<div class="col-md-4 col-sm-3 col-xs-3 cat-img-5-box">
					<img src="img/image_cat_5.png" width="538" alt="" class="section-2-img img-left cat-img-5">
				</div>
				<div class="col-md-8 col-sm-9 col-xs-9 section-block-text block-text-1">
					<h3>Расходные материалы<br>и инструмент для шиномонтажа в наличии<br><span>1117 наименований</span> от <span>80 рублей</span></h3>
					<p>Получите подробные характеристики, фотографии и цены на весь модельный<br>ряд расходных материалов для шиномонтажа</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 catalog-wrap-1">
					<div class="form-catalog-wrap">
						<div class="triangle-topright"></div>
						<div class="form-catalog">
							 <form method="post" action="sender.php" class="sform">
								<p>оставьте ваши имя и телефон, чтобы получить каталог</p>
								 <input type="hidden" name="subject" value="Оставьте ваши имя и телефон, чтобы получить каталог">
								<input class="input-text input-name input-string-form string-form-name" type="text" name="name" placeholder="Имя">
								<input class="input-text input-phone input-string-form phone-mask"  type="text" name="phone" placeholder="Телефон*">
								<input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
								<div class="wrap-form-btn btn-position-right">
									<input class="form-button form-2-btn"  type="submit" name="catalog" value="Получить каталог">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
			
			
		

		
		<div class="wrap-section-certificate">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-title section-title-certificate">
						<h2><span>Прямые поставки</span> оборудования <span>Trommelberg</span><br><span>с завода</span> производителя</h2>
						<p>«центр технического оборудования» — <span>официальный дилер 54х заводов</span></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="certificate-img">
							<img src="img/certificate_1.png" alt="">
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="certificate-img">
							<img src="img/certificate_2.png" alt="">
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="certificate-img">
							<img src="img/certificate_3.png" alt="">
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="certificate-img">
							<img src="img/certificate_4.png" alt="">
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="certificate-img">
							<img src="img/certificate_5.png" alt="">
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="certificate-img">
							<img src="img/certificate_6.png" alt="">
						</div>
					</div>
				</div>
				<div class="row brand-string">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="brand-img">
							<img src="img/brand_img_1.png" width="150" class="brand-img-1" alt="">
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="brand-img">
							<img src="img/brand_img_2.png" class="brand-img-2" width="137" alt="">
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="brand-img">
							<img src="img/brand_img_3.png" class="brand-img-3" width="145" alt="">
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="brand-img">
							<img src="img/brand_img_4.png" class="brand-img-4" width="145" alt="">
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="brand-img">
							<img src="img/brand_img_5.png" class="brand-img-5" width="145" alt="">
						</div>
					</div>
				</div>
				<div class="row brand-string-2">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<div class="brand-img">
							<img src="img/brand_img_6.png" class="brand-img-6" width="145" alt="">
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="brand-img">
							<img src="img/brand_img_7.png" class="brand-img-7" width="145" alt="">
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="brand-img">
							<img src="img/brand_img_8.png" class="brand-img-8" width="145" alt="">
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<div class="brand-img">
							<img src="img/brand_img_9.png" class="brand-img-9" width="145" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wrap-section-price">
			<div class="container">
				<div class="row">
					<div class="wrap-form-price">
					<form method="post" action="sender.php" class="sform">
						<h4>получи <span>общий прайс-лист</span> на оборудование<br>
для шиномонтажа <span>с ценами производителя</span></h4>
						<p>просто введи данные и мы отправим прайс-лист</p>
						 <input type="hidden" name="subject" value="Получи общий прайс-лист на оборудование">
					<div class="wrap-input-name-price">
						<input class="input-text input-name input-price" type="text" name="name" placeholder="Имя">
				  	</div>
				  	<div class="wrap-input-telephone-price">
				  		<input class="input-text input-phone input-price phone-mask"  type="text" name="phone" placeholder="Телефон*">
				 	 </div>
				 	 <div class="wrap-input-email-price">
				  		<input class="input-text input-email input-price" type="email" name="email" placeholder="Почта">
				  	</div>
				  	<div class="wrap-form-btn-price">
				  		<input class="form-button form-1-btn btn-price"  type="submit" name="price" value="получить прайс-лист">
				  	</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-title section-title-calc">
					<h2><span>сформируй комплект</span> шиномонтажного<br>оборудования самостоятельно <span>в 2 раза быстрее</span><br>с помощью калькулятора</h2>
				</div>
			</div>
		</div>
		
		<div class="wrap-calc-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wrap-calc">
							 <form method="post" action="sender.php" class="sform">
							  <input type="hidden" name="subject" value="Калькулятор">
								<fieldset>
									<input type="checkbox" name="stanok" value="Шиномонтажный станок" id="TireCheckBox">
									<label class="label-style-1" onClick=CheckBoxChecker() for="TireCheckBox">Шиномонтажный станок</label>
									<br/>
									<ul class="cacl-col-1">
										<li><input class="firstBoxItems" name="value1" type="radio" value="avtomat" id="avtomat" disabled><label class="label-style-2" for="avtomat">автомат</label></li>
										<li><input class="firstBoxItems" name="value1" type="radio" value="pavtomat" id="pavtomat" disabled><label class="label-style-2" for="pavtomat">полуавтомат</label></li>
										<li><input class="firstBoxItems" name="value1" type="radio" value="gruzovoy" id="gruzovoy" disabled><label class="label-style-2" for="gruzovoy">грузовой</label></li>
										<li><input class="firstBoxItems" name="value1" type="radio" value="press" id="press" disabled><label class="label-style-2" for="press">пресс</label></li>
									</ul>
									<ul class="cacl-col-2">
										<li><input class="firstBoxItems" name="value2" type="radio" value="220v" id="220v" disabled><label class="label-style-2" for="220v">220v</label></li>
										<li><input class="firstBoxItems" name="value2" type="radio" value="380v" id="380v" disabled><label class="label-style-2" for="380v">380v</label></li>
										<li><input class="firstBoxItems" name="value2" type="radio" value="220v/380v" id="220v/380v" disabled><label class="label-style-2" for="220v/380v">220v/380v</label></li>
									</ul>
									<div class="calc-col-3">
										<p>мощность двигателя</p>
										<select class="firstBoxItems" name="moshchnost" disabled>
											<option value="1.1kWt" selected="selected">1,1 кВт</option>
											<option value="1.5kWt" selected="selected">1,5 кВт</option>
											<option value="1.8kWt" selected="selected">1,8 кВт</option>
											<option value="2.2kWt" selected="selected">2,2 кВт</option>
											<option value="2.4kWt" selected="selected">2,4 кВт</option>
											<option value="3kWt" selected="selected">3 кВт</option>
											<option value="4kWt" selected="selected">4 кВт</option>
				  						</select>
									</div>
									<div class="calc-col-4">
										<p>диаметр колеса</p>
											<select class="firstBoxItems" name="diameter" disabled>
											<option value="d24" selected="selected">24&lsquo;&rsquo;</option>
											<option value="d45" selected="selected">45&lsquo;&rsquo;</option>
											<option value="d65" selected="selected">65&lsquo;&rsquo;</option>
											<option value="d86" selected="selected">86&lsquo;&rsquo;</option>
											<option value="d106" selected="selected">106&lsquo;&rsquo;</option>
				  						</select>
									</div>

								</fieldset>
								
								<fieldset>
									<input type="checkbox" name="balansirovochnyj" value="Балансировочный станок" id="BalanceCheckBox">
									<label class="label-style-1" onClick=CheckBoxChecker2() for="BalanceCheckBox">Балансировочный станок</label>
									<br/>
									<div class="calc-col-5">
										<p>тип ввода</p>
										<select class="balanceBoxItems" name="type" disabled>
										<option value="ruchnoy" selected="selected">ручной</option>
										<option value="type2">автомат</option>
										<option value="type3">полуавтомат</option>
										<option value="type4">мобильный</option>
				  					</select>
									</div>
									
									<ul class="cacl-col-6">
										<li><input name="value3" class="label-style-2 balanceBoxItems" type="radio" value="220v" id="v220" disabled><label for="v220">220v</label></li>
										<li><input name="value3" class="label-style-2 balanceBoxItems" type="radio" value="380v" id="v380" disabled><label for="v380">380v</label></li>
									</ul>
				  					<div class="calc-col-7">
				  						<p>мощность мотора</p>
										<select class="balanceBoxItems" name="motor" disabled>
											<option value="380vt" selected="selected">380 Вт</option>
											<option value="var2vt">Вариант 1</option>
											<option value="var3vt">Вариант 2</option>
											<option value="var4vt">Вариант 3</option>
										</select>
				  					</div>


								</fieldset>
								<fieldset class="last-fieldset">
									<input type="checkbox" name="kompressor" value="Компрессор поршневой" id="stanok3">
									<label class="label-style-1" for="stanok3">Компрессор поршневой</label>
									<br/>
								</fieldset>
																		<div class="wrap-input-name-price col-md-3">
							<input class="input-text input-name" type="text" name="name" placeholder="Имя">
						</div>
						<div class="wrap-input-telephone-price col-md-3">
							<input class="input-text input-phone phone-mask"  type="text" name="phone" placeholder="Телефон*">
						 </div>
						 <div class="wrap-input-email-price col-md-3">
							<input class="input-text input-email" type="email" name="email" placeholder="Почта">
						</div>
								
								<div class="wrap-form-btn-calc col-md-3">
				  					<input class="form-button form-1-btn btn-color-2 btn-calc"  type="submit" name="calc" value="Подобрать">
				 	 			</div>
							</form>
							<img src="img/240--white.png" width="604" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-title section-title-set">
					<h2>получите <span>готовый комплект</span> шиномонтажного<br/>оборудования <span>дешевле на 20%</span> уже через 14 дней<br/>за счёт готового предложения</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-5">
					<div class="position4">
						<div class="set-position"><img src="img/set_image_1.png" class="set-item-img" width="650" alt=""></div>
					</div>
				</div>
				<div class="col-md-7 col-sm-7 col-xs-7">
					<div class="set-text">
						<h4><span>комплект &laquo;эконом&raquo;</span> для старта бизнеса</h4>
						<p><span>Шиномонтажный станок NORDBERG 4638E</span><br/>
						(полуавтомат, до 21", питание 220\380 В, усилие отжима 2500 кг, мощность мотора 0,75-1,1 кВт)<br/>
						<span>Балансировочный станок NORDBERG ECO 4523C</span><br >
						(ручной ввод, до 24", питание 220 В, мощность мотора 370 Вт, педаль остановки колеса)<br/>
						<span>Компрессор поршневой NORDBERG ECO NCE100/400</span><br/>
						(ременный привод, ресивер 100 л, производительность 400 л/мин)<br>
						<span>Домкрат подкатной NORDBERG N32025</span><br/>
						(грузоподъемность 2,5 т, усиленная конструкция, кардан, клапан защиты от перегрузок, высота 130-425 мм)<br/>
						<span>Пневмогайковерт ударный NORDBERG ECO NP14068</span><br/>
						(размер квадрата 1/2", максимальное усилие 680 нм, обороты 7000 об/мин, механизм TWIN-HAMMER)
						<br/>
						<br/>
						<span>Цена за 2 станка (шиномонтажный + балансировочный) 97 900 руб.</span></p>
					</div>
					<div class="wrap-set-btn">
						<p>цена за полный комплект <span>139 000 р</span></p>
						<div class="button-set button form-button set-btn set-btn-right">
							<a href="#openModal" class="">узнать подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<div class="wrap-gray">
		<div class="container">
			<div class="row  set-margin-adaptiv">
				<div class="col-md-7 col-sm-7 col-xs-7">
					<div class="set-text">
						<h4><span>Комплект &laquo;Профи&raquo;</span></h4>
						<p><span>Шиномонтажный станок TROMMELBERG 1810E</span><br/>
						(полуавтомат, до 21", питание 220/380 В, мощность мотора 1,1 кВт, 4-х кулачковый самоцентрирующийся
						механизм поворотного стола)<br>
						<span>Cтанок балансировочный TROMMELBERG CB1930B</span><br/>
						(ручной ввод, до 24", питание 220 В, режимы пользовательской и заводской калибровки,
						режимы балансировки DINAMIC, STATIC, ALU1, ALU2 и ALU3)<br/>
						<span>Компрессор воздушный HUBERTH RP103100</span><br/>
						(ременный привод, ресивер 100 л, производительность 420 л/мин, электропитание 220/380 В)<br/>
						<span>Домкрат подкатной гаражный TROMMELBERG XRD 0330</span><br/>
						(грузоподъемность 3 т, усиленная конструкция, кардан, клапан защиты от перегрузок, высота 135-490 мм)<br/>
						<span>Гайковерт ударный пневматический HUBERTH  RP207422</span><br/>
						(размер квадрата 1/2", максимальное усилие 567 нм, обороты 7500 об/мин, механизм TWIN-HAMMER)
						<br/>
						<br/>
						<span>Цена за 2 станка (шиномонтажный + балансировочный) 99 900 руб.</span></p>
					</div>
					<div class="wrap-set-btn wrap-set-btn-2">
						<p>цена за полный комплект <span>149 900 р</span></p>
						<div class="button-set button form-button set-btn set-btn-right">
							<a href="#openModal" class="">узнать подробнее</a>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-sm-5 col-xs-5">
					<div class="position4">
						<div class="set-position"><img src="img/set_image_2.png" class="set-item-img" width="650" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
		
		<div class="container">
			<div class="row  set-margin-adaptiv">
				<div class="col-md-5 col-sm-5 col-xs-5">
					<div class="position4">
						<div class="set-position"><img src="img/set_image_3.png" class="set-item-img" width="650" alt=""></div>
					</div>
				</div>
				<div class="col-md-7 col-sm-7 col-xs-7">
					<div class="set-text">
						<h4><span>Комплект &laquo;Профи&raquo;</span> - полуавтомат</h4>
						<p><span>Шиномонтажный станок TROMMELBERG 1860</span><br/>
						(полуавтомат, двухскоростной, до 28", питание 220\380 В, мощность мотора) 0,75 - 1,1 кВт, 4-х кулачковый самоцентрирующийся механизм поворотного стола<br>Cтанок балансировочный TROMMELBERG CB1960B<br/>
						(полуавтомат, до 28", питание 220 В, режим &laquo;Moto&raquo; для балансировки колес мотоциклов, функция минимизации количества используемых балансировочных грузиков ("Оптимизация"), ножной тормоз, встроенная подсветка диска)<br/>
						<span>Компрессор воздушный HUBERTH RP306250</span><br/>
						(ременный привод, ресивер 250 л, производительность 573 л/мин, электропитание 380 В, датчик давления, аварийный клапан для защиты от избыточного давления, головки имеют раздельное исполнение и оснащены пластинчатыми радиаторами для наилучшего охлаждения) <br/>
						<span>Домкрат подкатной гаражный TROMMELBERG XRD XRD0802</span><br/>
						(грузоподъемность 3 т, усиленная конструкция, клапан защиты от перегрузок, высота 138-485 мм, ремкоплект в комплекте)<br/>
						<span>Гайковерт ударный пневматический HUBERTH RP207422</span><br/>
						(размер квадрата 1/2", максимальное усилие 567 нм, обороты 7500 об/мин, механизм TWIN-HAMMER)
						<br/>
						<br/>
						<span> Цена за 2 станка (шиномонтажный + балансировочный) 189 900 руб.</span>
						 </p>
					</div>
					<div class="wrap-set-btn">
						<p>цена за полный комплект <span>264 900 р</span></p>
						<div class="button-set button form-button set-btn set-btn-right">
							<a href="#openModal" class="">узнать подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<div class="wrap-gray">
		<div class="container">
			<div class="row set-margin-adaptiv">
				<div class="col-md-7 col-sm-7 col-xs-7">
					<div class="set-text">
						<h4><span>Комплект &laquo;Профи&raquo;</span> - автомат</h4>
						<p><span>Шиномонтажный станок TROMMELBERG 1885</span><br/>
						(АВТОМАТ, до 23", питание 220\380 В, мощность мотора) 0,75 - 1,1 кВт, телескопическая консоль ножа отрыва борта шины<br>
						<span>Cтанок балансировочный TROMMELBERG CB1980</span><br/>
						(АВТОМАТ, ЖК-дисплей, до 30", питание 220 В, лазерный указатель места установки балансировочного груза, операции сопровождаются анимацией и текстовыми подсказками. Специальные функции: автоматический подсчет количества операций балансировки, калибровка балансировочного вала, резерное копирование калибровочных значений и др.)<br/>
						<span>Компрессор воздушный HUBERTH RP309250</span><br/>
						(ременный привод, ресивер 250 л, производительность 859 л/мин, электропитание 220/380 В)<br/>
						<span>Домкрат подкатной гаражный TROMMELBERG XRD 0335</span><br/>
						(грузоподъемность 3,5 т, карданный механизм, усиленная конструкция, клапан защиты от перегрузок, высота 95-522 мм (подходит для авто с маленьким клиренсом, быстрый подъем благодаря использованию двухходового гидронасоса)<br/>
						<span>Гайковерт ударный пневматический HUBERTH RP207422</span><br/>
						(размер квадрата 1/2", максимальное усилие 567 нм, обороты 7500 об/мин, механизм TWIN-HAMMER)
						<br/>
						<br/>
						<span> Цена за 2 станка (шиномонтажный + балансировочный) 259 900 руб.</span></p>
					</div>
					<div class="wrap-set-btn wrap-set-btn-2">
						<p>цена за полный комплект <span>349 900 р</span></p>
						<div class="button-set button form-button set-btn set-btn-right">
							<a href="#openModal" class="">узнать подробнее</a>
						</div>
					</div>
				</div>
				
				<div class="col-md-5 col-sm-5 col-xs-5">
					<div class="position4">
						<div class="set-position"><img src="img/set_image_4.png" class="set-item-img" width="650" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</div>
			
		<div class="container">
			<div class="row set-margin-adaptiv">
				<div class="col-md-5 col-sm-5 col-xs-5">
					<div class="position4">
						<div class="set-position"><img src="img/set_image_5.jpg" class="set-item-img" width="550" alt=""></div>
					</div>
				</div>
				<div class="col-md-7 col-sm-7 col-xs-7">
					<div class="set-text">
						<h4><span>Комплект грузового шиномонтажа</span></h4>
						<p><span>Шиномонтажный станок TROMMELBERG 1580</span><br/>
						(АВТОМАТ, до 26", максимальная грузоподъемность подъемной консоли 1000 кг, максимальный диаметр колеса 1600 мм, максимальная ширина колеса 780 мм, усилие отрыва кромки шины 1500 кг, рабочее давление в гидросистеме до 130 бар, максимальная потребляемая мощность 2.9 кВт, электропитание 3ф.х380-400/50 Гц, вес 560 кг. В комплекте поставки: выносной пульт управления, иски-зажим для монтажа шин и монтажная лопатка)<br/>
						<span>Балансировочный станок TROMMELBERG СВ1448</span><br/>
						(АВТОМАТ, диаметр диска 10" - 24", ширина колеса 1.5" - 20", время измерения 7 сек, максимальный диаметр колеса 1016 мм / 40", максимальный вес колеса 130 кг, рабочее давление воздуха 8-10 бар, точность балансировки ±1 г, потребляемая мощность 300 Вт, электропитание 3ф.х380-400/50 В/Гц, вес 342 кг)<br/>
						<span>Домкрат TROMMELBERG SD101902</span><br/>
						(Грузоподъемность 22 т, высота подхвата 226 мм, максимальная высота подъёма 450 мм, рабочее давление воздуха 7.5-8.5 бар, высота винта 105 мм, вес 36.5 кг)<br/>
						<span>Пневмогайковерт NORDBERG IT 4250</span><br/>
						(размер квадрата 1", максимальное усилие 3388 Нм, число оборотов 4200 об/мин, вес 14,85 кг, потребление воздуха 283 л/мин, давление 6.2 бар)<br/>
						<span>Набор ударных торцевых головок 1" KING TONY 8410MP</span><br/> 
						(шестигранные головки размерами 24, 27, 30, 32, 33, 36, 38 и 41 мм)
						<br/>
						<br/>
						<span>Цена за 2 станка (шиномонтажный + балансировочный) 421 600 руб.</span></p>
					</div>
					<div class="wrap-set-btn">
						<p>цена за полный комплект <span>599 900 р</span></p>
						<div class="button-set button form-button set-btn set-btn-right">
							<a href="#openModal" class="">узнать подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</div>		
			
		<div class="container no-padding">
			<div class="row">
				<div class="col-md-12 section-title delivery-title">
					<h2>поставляем только <span>сертифицированное</span><br><span>оборудование</span> со сроком эксплуатации до 5 лет<br/><span>и гарантией от 12 до 36 месяцев</span></h2>
				</div>
			</div>
			<div class="row catalog-position">
				<div class="col-md-3 col-sm-3 col-xs-3 cat-pos cat-pos-1">
					<img src="img/cat_pos_1.png" width="200" alt="">
					<p>Шиномонтажное<br/>оборудование</p>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 cat-pos cat-pos-2">
					<img src="img/cat_pos_2.png" width="264" alt="">
					<p>Гидравлическое<br/>оборудование</p>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 cat-pos cat-pos-3">
					<img src="img/cat_pos_3.png" width="206" alt="">
					<p>Гаражное<br/>оборудование</p>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 cat-pos cat-pos-4">
					<img src="img/cat_pos_4.png" width="236" alt="">
					<p>Диагностическое<br/>оборудование</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 cat-pos cat-pos-5">
					<img src="img/cat_pos_5.png" width="280" alt="">
					<p>Для кузовного<br/>ремонта</p>
				</div>
			</div>
			<div class="row cat-pos-string catalog-position">
				<div class="col-md-3 col-sm-3 col-xs-3 cat-pos cat-pos-6">
					<img src="img/cat_pos_6.png" width="354" alt="">
					<p>Окрасочное<br/>оборудование</p>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 cat-pos cat-pos-7">
					<img src="img/cat_pos_7.png" width="246" alt="">
					<p>Инструмент<br/>и мебель</p>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 cat-pos cat-pos-8">
					<img src="img/cat_pos_8.png" width="236" alt="">
					<p>Стенды<br/>&quot;развал-схождения&quot;</p>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 cat-pos cat-pos-9">
					<img src="img/cat_pos_9.png" width="272" alt="">
					<p>Компрессоры</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 cat-pos cat-pos-10">
					<img src="img/cat_pos_10.png" width="256" alt="">
					<p>Грузовое<br/>оборудование</p>
				</div>
			</div>
			<div class="row cat-pos-string cat-pos-string-2">
				<div class="col-md-5 col-sm-5 col-xs-5 cat-pos cat-pos-11">
					<img src="img/cat_pos_11.png" width="186" alt="">
					<p>Сварочное<br/>оборудование</p>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 cat-pos cat-pos-12">
					<img src="img/cat_pos_12.png" width="248" alt="">
					<p>Моечное<br/>оборудование</p>
				</div>
				<div class="col-md-5 col-sm-5 col-xs-5 cat-pos cat-pos-13">
					<img src="img/cat_pos_13.png" width="278" alt="">
					<p>Электростаниции</p>
				</div>
			</div>
		</div>
		
		<div class="wrap-manager-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-title section-title-manager">
						<h2>получите консультацию у персонального<br/>менеджера в день обращения и <span>сэкономьте</span><br/>10 часов своего времени на подборе</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 slider">
						<div class="block-1">
							<div class="inside">
								<div class="sliderBox">
									<a href="#" class="prevBtn"><img src="img/arrow-point-to-l.png" width="70" alt=""></a> 
									<a href="#" class="nextBtn"><img src="img/arrow-point-to-r.png" width="70" alt=""></a>
									<div class="wrap-name-manager"><img src="img/Rectangle-7.png" width="387" alt=""></div>
									<div class="SimSlider">
										<div class="slide sl-0">
											<img src="img/slider.png" width="363" alt="">
											<div class="name-manager">
											<span>скворцов игорь</span>
												<p>5 лет в подборе</p>
											</div>
											
										</div>
										<div class="slide sl-1">
											<img src="img/slider.png" width="363" alt="">
											<div class="name-manager">
											<span>скворцов игорь</span>
												<p>5 лет в подборе</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="wrap-form-call">
							<p>позвоните<i class="fa fa-phone fa-1x"></i><span> 8 800 250 9946</span></p>
							<h4>или оставьте заявку<br/><span>на звонок</span></h4>
							 <form method="post" action="sender.php" class="sform">
							 <input type="hidden" name="subject" value="Заявка на звонок">
								<div class="wrap-input-name-call">
									<input class="input-text input-name input-call" type="text" name="name" placeholder="Имя">
				  				</div>
				  				<div class="wrap-input-telephone-call">
				  					<input class="input-text input-phone input-call phone-mask"  type="text" name="phone" placeholder="Телефон*">
				 	 			</div>
				 	 			<div class="wrap-form-btn-call">
				  					<input class="form-button form-1-btn btn-color-2 btn-call"  type="submit" name="call" value="перезвонить">
				  				</div>
				  				<div class="call-form-small-text">
				  					за 5 минут
				  				</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-title section-title-map">
					<h2>задайте вопросы нашим клиентам<br/><span>в своём городе</span> о скорости поставки<br/>и качестве оборудования</h2>
				</div>
			</div>
			<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6 map-box-1-wp">
						<div class="map-box map-box-1">
							<p><span>1</span>Выберите свой город</p>
						</div> 
					</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					
					<div class="map-box map-box-2">
						<p><span>2</span>Позвоните реальному клиенту,<br/>купившему оборудование </p>
					</div> 
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3 map-text">
					<p><span>538</span><br/>автосервисов<br/>открыто за 2016 г.</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 map-text">
					<p><span>138</span><br/>городов поставок<br/>за 2016 г.</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 map-text">
					<p><span>451</span><br/>городов поставок<br/>за 2016 г.</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 map-text">
					<p><span>70%</span><br/>городов поставок<br/>за 2016 г.</p>
				</div>
			</div>
			<div class="row ">
				<div class="map-container">
					<div id="map"></div>
				</div>
			</div>
		</div>
		
		<div class="wrap-contract">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-3">
						<div class="contract">
							<img src="img/contract.png" width="302" alt="">
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-8">
						<div class="contract-text">
							<p>Отгружаем оборудование,<br/>только по официальному<br/>договору поставки</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-title section-title-video">
					<h2>Посмотрите видеоотзывы наших клиентов</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12  wrap-video-block">
					<div class="video-block">
					<iframe src="https://player.vimeo.com/video/160197116" width="400" height="225" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 wrap-video-text">
					<div class="video-text-block line">
						<div class="angle-double-left">
							<img src="img/angle.png" width="70" alt="">
						</div>
						<h4>ООО "АвтоРемонтМаркет"<br/>г. Таштагол</h4>
						<p>Решили открыть шиномонтаж в г. Таштагол.<br/>Долго искали поставщика – выбор был достаточно<br/> большой. Но решили остановиться на компании<br/>Центр технического оборудования. Ну, во-первых,<br/>по цене сделали действительно хорошее предложение, а во-вторых, очень грамотно проконсультировали. выбор был достаточно большой. </p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6  comment-wrap">
					<div class="comment">
						<p>Отзыв<br/>на оборудование</p>
						<ul>
							<li>Шиномонтажный станок<br/>NordBerg 1852 а</li>
							<li>Балансировочный станок<br/>Сивик 1233</li>
							<li>Еще одно наименование</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12 wrap-video-block">
					<div class="video-block">
						<iframe src="https://player.vimeo.com/video/160197085" width="400" height="225" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 wrap-video-text">
					<div class="video-text-block">
						<div class="angle-double-left">
							<img src="img/angle.png" width="70" alt="">
						</div>
						<h4>ООО "АвтоРемонтМаркет"<br/>г. Таштагол</h4>
						<p>Решили открыть шиномонтаж в г. Таштагол.<br/>Долго искали поставщика – выбор был достаточно<br/> большой. Но решили остановиться на компании<br/>Центр технического оборудования. Ну, во-первых,<br/>по цене сделали действительно хорошее предложение, а во-вторых, очень грамотно проконсультировали. выбор был достаточно большой. </p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 comment-wrap">
					<div class="comment">
						<p>Отзыв<br/>на оборудование</p>
						<ul>
							<li>Шиномонтажный станок<br/>NordBerg 1852 а</li>
							<li>Балансировочный станок<br/>Сивик 1233</li>
							<li>Еще одно наименование</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="row hideclass" style="display:none;">
				<div class="col-md-4 col-sm-4 col-xs-12 wrap-video-block">
					<div class="video-block">
						<iframe src="https://player.vimeo.com/video/160197037" width="400" height="480" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 wrap-video-text">
					<div class="video-text-block">
						<div class="angle-double-left">
							<img src="img/angle.png" width="70" alt="">
						</div>
						<h4>ООО "АвтоРемонтМаркет"<br/>г. Таштагол</h4>
						<p>Решили открыть шиномонтаж в г. Таштагол.<br/>Долго искали поставщика – выбор был достаточно<br/> большой. Но решили остановиться на компании<br/>Центр технического оборудования. Ну, во-первых,<br/>по цене сделали действительно хорошее предложение, а во-вторых, очень грамотно проконсультировали. выбор был достаточно большой. </p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 comment-wrap">
					<div class="comment">
						<p>Отзыв<br/>на оборудование</p>
						<ul>
							<li>Шиномонтажный станок<br/>NordBerg 1852 а</li>
							<li>Балансировочный станок<br/>Сивик 1233</li>
							<li>Еще одно наименование</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="row hideclass" style="display:none;">
				<div class="col-md-4 col-sm-4 col-xs-12 wrap-video-block">
					<div class="video-block">
						<iframe src="https://player.vimeo.com/video/160586670" width="400" height="225" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 wrap-video-text">
					<div class="video-text-block">
						<div class="angle-double-left">
							<img src="img/angle.png" width="70" alt="">
						</div>
						<h4>ООО "АвтоРемонтМаркет"<br/>г. Таштагол</h4>
						<p>Решили открыть шиномонтаж в г. Таштагол.<br/>Долго искали поставщика – выбор был достаточно<br/> большой. Но решили остановиться на компании<br/>Центр технического оборудования. Ну, во-первых,<br/>по цене сделали действительно хорошее предложение, а во-вторых, очень грамотно проконсультировали. выбор был достаточно большой. </p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 comment-wrap">
					<div class="comment">
						<p>Отзыв<br/>на оборудование</p>
						<ul>
							<li>Шиномонтажный станок<br/>NordBerg 1852 а</li>
							<li>Балансировочный станок<br/>Сивик 1233</li>
							<li>Еще одно наименование</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="wrap-video-btn">
						<button class="form-button btn-color-2 video-btn" type="button" id="toggleLink"  onclick=viewdiv();>Смотреть все</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wrap-section-price">
			<div class="container">
				<div class="row">
					<div class="wrap-form-credit">
					<form method="post" action="sender.php" class="sform">
						<h4>хотите купить в кредит?<br/>отправьте заявку на расчёт суммы <span>кредита</span><br/>не выходя из дома <span>за 5 минут</span></h4>
						<p>просто введи данные и мы отправим прайс-лист</p>
						 <input type="hidden" name="subject" value="Отправьте заявку на расчёт суммы кредита">
					<div class="wrap-input-name-credit">
						<input class="input-text input-name-crd input-price input-credit" type="text" name="name" placeholder="Имя">
				  	</div>
				  	<div class="wrap-input-telephone-credit">
				  		<input class="input-text input-phone-crd input-price input-credit phone-mask"  type="text" name="phone" placeholder="Телефон*">
				 	 </div>
				  	<div class="wrap-form-btn-credit">
				  		<input class="form-button form-1-btn btn-credit"  type="submit" name="price" value="Купить в кредит">
				  	</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wrap-section-price-2">
			<div class="container">
				<div class="row">

					<div class="wrap-form-price wrap-form-price-2">
					<form method="post" action="sender.php" class="sform">
						<h4>получи <span>общий прайс-лист</span> на оборудование<br>
для шиномонтажа <span>с ценами производителя</span></h4>
 <input type="hidden" name="subject" value="Получи общий прайс-лист на оборудование для шиномонтажа с ценами производителя">
						<div class="wrap-input-name-price">
							<input class="input-text input-name input-price" type="text" name="name" placeholder="Имя">
						</div>
						<div class="wrap-input-telephone-price">
							<input class="input-text input-phone input-price phone-mask"  type="text" name="phone" placeholder="Телефон*">
						 </div>
						 <div class="wrap-input-email-price">
							<input class="input-text input-email input-price" type="email" name="email" placeholder="Почта">
						</div>
						<div class="wrap-form-btn-price">
							<input class="form-button form-1-btn btn-price-2"  type="submit" name="price" value="получить прайс-лист">
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6 footer-info">
						<p>Центр технического оборудования<br/><span>Подбор и продажа шиномонтажного оборудования<br/>с доставкой по всей России</span>
						</p>
						<p>ОГРН 1134205022478  ИНН 4205274440</p>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="footer-phone">
								<span>8 800 250 9946</span>
							<p>звонок по россии бесплатный</p>
						</div>
						<div class="footer-form-call">
							<a href="#openModal" class="button form-button callback-btn">заказать обратный звонок</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
		<div id="openModalOk" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close"><span></span></a>
				<div class="modal-box">
		<h4>Спасибо!</h4>
</div>
<div class="modal-body">
<p>Ваша заявка отправлена в обработку</p>
Мы свяжемся с Вами в ближайшее время.
</div>
				</div>
			</div>
		</div>	
		
		
		<div id="openModal" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close"><span></span></a>
				<div class="modal-box">
					<h4>Оставьте имя и телефон<br/>и с вами свяжется старший менеджер</h4>
					<form method="post" action="sender.php" class="sform">
					<input type="hidden" id="ya-city" value="">
					<input type="hidden" name="subject" value="Оставьте имя и телефон и с вами свяжется старший менеджер">
						<div class="wrap-input-name-price">
							<input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя" >
						</div>
						<div class="wrap-input-telephone-price">
							<input class="input-text input-modal phone-mask"  type="text" name="phone" placeholder="Ваш телефон*" >
						</div>
						<div class="wrapper-button">
							<input class="form-button form-1-btn btn-color-2 btn-modal"  type="submit" name="submit" value="Перезвонить мне">
						</div>
					</form>
				</div>
			</div>
		</div>	
	
	
	<div id="openMenu" class="modalDialog">
	<div>
			<div class="header-region-map">
				<img src="img/rus-map.png" width="766" alt="">
			</div>
			<div id="header-regions" class="row">
			<a href="#close" title="Close" class="close"><span></span></a>
			<div class="header-section">
				<div class="region-heading">
					<h2>Выберите свой город <span>доставляем по всей россии</span></h2>
					<div class="header-map-section">
						<div class="header-primary-cities">
							<form id="city-from" action="" method="get">
								<ul class="regionCol">
									<li><a href="" class="regionCity">Москва</a></li>
									<li><a href="" class="regionCity">Нижний Новгород</a></li>
									<li><a href="" class="regionCity">Воронеж</a></li>
									<li><a href="" class="regionCity">Омск</a></li>
									<li><a href="" class="regionCity">Самара</a></li>
								</ul>
								<ul class="regionCol">
									<li><a href="" class="regionCity">Санкт-Петербург</a></li>
									<li><a href="" class="regionCity">Екатеринбург</a></li>
									<li><a href="" class="regionCity">Красноярск</a></li>
									<li><a href="" class="regionCity">Пермь</a></li>
									<li><a href="" class="regionCity">Уфа</a></li>
								</ul>
								<ul class="regionCol regionCol-last">
									<li><a href="" class="regionCity">Казань</a></li>
									<li><a href="" class="regionCity">Волгоград</a></li>
									<li><a href="" class="regionCity">Новосибирск</a></li>
									<li><a href="" class="regionCity">Ростов-на-Дону</a></li>
									<li><a href="" class="regionCity">Челябинск</a></li>
								</ul>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-search-section">
			<p>или укажите в поле</p>
			<form id="region-selection-form" action="" method="get" novalidate>
				<input id="search-city" type="text">
				<input id="region-selection-form-city-input-btn" name="city-search-from" value="Выбрать" class="form-button btn-color-2 search-city-submit" type="submit">
			</form>
		</div>
</div>
</div>
	
	
	
	<div class="hidden"></div>
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	
	<script src="libs/jquery/jquery-2.1.3.min.js"></script>
	<script src="https://cdn.jsdelivr.net/g/bootstrap@3.3.6,jquery.maskedinput@1.4.1(jquery.maskedinput.js)"></script>
	<script src="js/jquery.simslider.js"></script>
	<script>
		jQuery( function($){
			$('.block-1 .sliderBox').SimSlider( {
				next: '.nextBtn', // def: ".ss-next"
				prev: '.prevBtn', // def: ".ss-prev"
				item: '.SimSlider .slide', // def: ".ss-item"
				'dots': '.dot',  
				'dotActClass': 'active', 
				speed: 900, 
				delay: 5000, 
				onAfterInit : function( sliders, nextBtn, prevBtn, dots ){
					// событие после инициализации слайдера
					// console.log( 'onAfterInit', sliders, nextBtn, prevBtn, dots );
				},
				onBeginAnimate : function( slider, status ){
					// событие перед началом прокрутки слайдеров
					
				},
				onEndAnimate : function( slider, status ){
					// событие после окончания прокрутки
					if( $(slider).hasClass('sl-3') && status == 'visible' ){
						$(slider).find('.jq').animate( {fontSize:"30px"}, 3000 );
					}else if( $(slider).hasClass('sl-3') && status == 'hidden' ){
						$(slider).find('.jq').css( "font-size", "14px" );
					}
				}
			} );
		} );
	</script>
	<script type="text/javascript"> 
function viewdiv() {

	var el = document.getElementsByClassName("hideclass");
	//ert(el[0].id);
	for(var i = 0;i<el.length;i++)
		{
			if(el[i].style.display=="none")
			{
		        el[i].style.display="block";
			}
			else
			{
				el[i].style.display="none";
			}
		}
	
	
	
	
    }

</script>
		
	<script src="js/common.js"></script>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
	<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&amp;lang=ru-RU" type="text/javascript"></script>
</body>
</html>