<?php 

include('./utm.php');
 
  $campagns_arr = array (
       '20881940' => 0
      ,'20882365' => 0
      ,'20882431' => 0
      ,'20896260' => 0
      ,'20896681' => 0
      ,'21528108' => 0
      ,'21528136' => 0
      ,'21528161' => 0
	  ,'20875546' => 1
	  ,'20875571' => 1
	  ,'20896240' => 1
	  ,'20896668' => 1
	  ,'20876000' => 2
	  ,'20896241' => 2
	  ,'20896670' => 2
	  ,'20876238' => 3
	  ,'20896242' => 3
	  ,'20896671' => 3
	  ,'20876564' => 4
	  ,'20876598' => 4
	  ,'20896243' => 4
	  ,'20896672' => 4
	  ,'20877858' => 5
	  ,'20877885' => 5
	  ,'20896246' => 5
	  ,'20896675' => 5
	  ,'20878869' => 6
	  ,'20896252' => 6
	  ,'20896677' => 6
	  ,'20880199' => 7
	  ,'20880492' => 7
	  ,'20896255' => 7
	  ,'20896680' => 7
	  ,'20883820' => 8
	  ,'20883876' => 8
	  ,'20883933' => 8
	  ,'20896272' => 8
	  ,'20896685' => 8
	  ,'21014374' => 8
	  ,'21370467' => 8
	  ,'21370533' => 8
	  ,'21370619' => 8
	  ,'20884736' => 9
	  ,'20884790' => 9
	  ,'20884855' => 9
	  ,'20896279' => 9
	  ,'20896691' => 9
	  ,'21303815' => 9
	  ,'21303891' => 9
	  ,'21303944' => 9
	  ,'20884943' => 10
	  ,'20896299' => 10
	  ,'20896697' => 10
	  ,'21240170' => 10
	  ,'21240254' => 10
	  ,'20885036' => 11
	  ,'20885139' => 11
	  ,'20896305' => 11
	  ,'20896703' => 11
	  ,'21182876' => 11
	  ,'21182905' => 11
	  ,'21182928' => 11
	  ,'20895136' => 12
	  ,'20895138' => 12
	  ,'20895140' => 12
	  ,'20896288' => 12
	  ,'20896693' => 12
	  ,'21251163' => 12
	  ,'21251231' => 12
	  ,'21251302' => 12
	  ,'21251363' => 12
	  ,'20895143' => 13
	  ,'20895144' => 13
	  ,'20896265' => 14
	  ,'20896684' => 14
	  ,'21503551' => 14
	  ,'21503568' => 14
	  ,'21503584' => 14
	  ,'21503602' => 14
	  ,'21503618' => 14
	  ,'20862880' => 15
	  ,'20862985' => 15
	  ,'20863075' => 15
	  ,'20863158' => 15
	  ,'20863249' => 15
  );

  $brands_arr = array(
     array(  /* NORDBERG */
          'title'           => 'NORDBERG'
          ,'brandSmallImg'  => 'img/nordberg_br.jpg'
          ,'brandBigImg'    => 'img/nordberg.jpg'
          ,'brandName'      => "NORDBERG" )
    ,array(  /* BEISSBARTH */
          'title'           => 'BEISSBARTH'
          ,'brandSmallImg'  => 'img/Beissbarth_logo.png'
          ,'brandBigImg'    => 'img/BEISSBARTH.jpg'
          ,'brandName'      => "BEISSBARTH" )
    ,array(  /* BUTLER */
          'title'           => 'BUTLER'
          ,'brandSmallImg'  => 'img/Butler-Engineering.jpg'
          ,'brandBigImg'    => 'img/BUTLER.jpg'
          ,'brandName'      => "BUTLER" )
    ,array(  /* GIULIANO */
          'title'           => 'GIULIANO'
          ,'brandSmallImg'  => 'img/GIULIANO_brand.jpg'
          ,'brandBigImg'    => 'img/GIULIANO.jpg'
          ,'brandName'      => "GIULIANO" )
    ,array(  /* HOFMANN */
          'title'           => 'text5'
          ,'brandSmallImg'  => 'img/HOFMANN-brend.jpg'
          ,'brandBigImg'    => 'img/HOFMANN.jpg'
          ,'brandName'      => "HOFMANN" )
    ,array(  /* HUNTER */
          'title'           => 'HUNTER'
          ,'brandSmallImg'  => 'img/HUNTER-brend.jpg'
          ,'brandBigImg'    => 'img/HUNTER.jpg'
          ,'brandName'      => "HUNTER" )
    ,array(  /* JOHNBEAN */
          'title'           => 'JOHNBEAN'
          ,'brandSmallImg'  => 'img/John_Bean_Logo.jpg'
          ,'brandBigImg'    => 'img/JohnBean.jpg'
          ,'brandName'      => "JOHNBEAN" )
    ,array(  /* MB */
          'title'           => 'MB'
          ,'brandSmallImg'  => 'img/MB-brend.jpg'
          ,'brandBigImg'    => 'img/MB.jpg'
          ,'brandName'      => "MB" )
	,array(  /*   SICAM */
          'title'           => 'SICAM'
          ,'brandSmallImg'  => 'img/SICAM-brand.jpg'
          ,'brandBigImg'    => 'img/SICAM.jpg'
          ,'brandName'      => "SICAM" )
	,array(  /*   SICE */
          'title'           => 'SICE'
          ,'brandSmallImg'  => 'img/logo-sice.jpg'
          ,'brandBigImg'    => 'img/SICE.jpg'
          ,'brandName'      => "SICE" )
	,array(  /*   TECO */
          'title'           => 'TECO'
          ,'brandSmallImg'  => 'img/TECO-brand.png'
          ,'brandBigImg'    => 'img/TECO.jpg'
          ,'brandName'      => "TECO" )
	,array(  /*     TROMMELBERG */
          'title'           => 'TROMMELBERG'
          ,'brandSmallImg'  => 'img/Vector-Smart Object.png'
          ,'brandBigImg'    => 'img/Trommelberg_1810E.png'
          ,'brandName'      => "TROMMELBERG" )
	,array(  /*     SIVIK */
          'title'           => 'SIVIK'
          ,'brandSmallImg'  => 'img/SIVIK-brand.jpg'
          ,'brandBigImg'    => 'img/SIVIK.jpg'
          ,'brandName'      => "SIVIK" )
	,array(  /*     AET */
          'title'           => 'AET'
          ,'brandSmallImg'  => 'img/ae-and-t-brand.jpg'
          ,'brandBigImg'    => 'img/ae-and-t.jpg'
          ,'brandName'      => "AET" )
	,array(  /*     RAVAGLIOLI */
          'title'           => 'RAVAGLIOLI'
          ,'brandSmallImg'  => 'img/ravaglioli-brand.jpg'
          ,'brandBigImg'    => 'img/RAVAGLIOLI.jpg'
          ,'brandName'      => "RAVAGLIOLI" )
	,array(  /*      AEandT */
          'title'           => 'AE&amp;T"'
          ,'brandSmallImg'  => 'img/ae-and-t-brand.jpg'
          ,'brandBigImg'    => 'img/ae-and-t.jpg'
          ,'brandName'      => "AE&amp;T" )
  ,array(  /* def */
           'title'           => ' '
          ,'brandSmallImg'  => ' '
          ,'brandBigImg'    => 'img/Trommelberg_1810E.png'
          ,'brandName'      => " "
          ,'displaynone'    => "&nbsp;none")
  );
  
  

 
/*    if ($_GET['utm_source'] == 'yandex') { 
    if (isset($_GET["utm_campaign"]) AND isset($campagns_arr[$_GET["utm_campaign"]])) {
      $brand_id = $campagns_arr[$_GET["utm_campaign"]];
    }
    else {
      $brand_id = '16';
    }
  }
   else {
   	 $brand_id = '16';
   } */
   
if (isset($_GET['utm_source'])) {
    if ($_GET['utm_source'] == 'yandex') {
        if (isset($_GET["utm_campaign"]) AND isset($campagns_arr[$_GET["utm_campaign"]])) {
            $brand_id = $campagns_arr[$_GET["utm_campaign"]];
        } else {
            $brand_id = '16';
        }
    } else {
        $brand_id = '16';
    }
} else {
    $brand_id = '16';
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83203428-2', 'auto');
  ga('send', 'pageview');

</script>	
<!-- Google Tag Manager -->
<!--script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TH2Z9V7');</script-->
<!-- End Google Tag Manager -->


	<meta charset="utf-8" />
	<title>Центр Технического Оборудования <?php echo $brands_arr[$brand_id]["Title"];?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Оборудование для шиномонтажа, шиномонтажные станки, балансировочные станки, шиномонтажные полуавтоматы, балансировочные полуавтоматы, шиномонтажные стенды, балансировочные стенды. Легковые шиномонтажные станки, грузовые шиномонтажные станки.">
	<meta name="Keywords" content="Оборудование для шиномонтажа, шиномонтажные станки, балансировочные станки, шиномонтажные полуавтоматы, балансировочные полуавтоматы, шиномонтажные стенды, балансировочные стенды. Легковые шиномонтажные станки, грузовые шиномонтажные станки">
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/media.css" />

<!--[if IE 9]>
<link href="css/ie9.css" type="text/css" rel="stylesheet" />
<![endif]-->

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	    (function (d, w, c) {
	        (w[c] = w[c] || []).push(function() {
	            try {
	                w.yaCounter41896804 = new Ya.Metrika({
	                    id:41896804,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true,
	                    webvisor:true
	                });
	            } catch(e) { }
	        });

	        var n = d.getElementsByTagName("script")[0],
	            s = d.createElement("script"),
	            f = function () { n.parentNode.insertBefore(s, n); };
	        s.type = "text/javascript";
	        s.async = true;
	        s.src = "https://mc.yandex.ru/metrika/watch.js";

	        if (w.opera == "[object Opera]") {
	            d.addEventListener("DOMContentLoaded", f, false);
	        } else { f(); }
	    })(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/41896804" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<!-- Pixel -->
	<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=WkdWemH1*lb9QlfZ75IfULu9XGHRO3oS6FmQlBaVayQDBV/1HgKTYK/jjiUEaUCX*MgMsBPzu0pwbxENWue1IeKKZcqlL21LDt2YoBO*AEcJ5RDNWERNXwCLpIW9gzI0uLYtjTVp65BJYa8fgVciv6lLdilLK2ek5Ka03RwURQU-&pixel_id=1000099221';</script>
	<!-- Pixel -->
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<!--noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TH2Z9V7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript-->
<!-- End Google Tag Manager (noscript) -->	
	
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
					<p class="city-p">Москва</p>
					<a href="#openMenu" class="openMenu">город доставки</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 header-phone-number">
					<p>8 800 250 9946</p>
					<a href="#openModal"> Звони! Поможем выбрать </a>
				</div>
			</div>
		</div>	
	</header>
	
	<div class="wrap-top-menu">
				<div class="container">
			<div class="row top-menu">
				<div class="col-md-3 col-sm-3 col-xs-3 top-menu-item top-menu-item-1">
					<img src="img/top-menu-item-1.png" width="51" height="78" alt="Шиномонтажные станки">
					<a href="#openModal2" onClick=CatNameChanger("на&nbsp;Шиномонтажные&nbsp;станки")>Шиномонтажные<br>станки</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 top-menu-item top-menu-item-2">
					<img src="img/top-menu-item-2.png" width="57" alt="Балансировочные станки">
					<a href="#openModal2" onClick=CatNameChanger("на&nbsp;Стенды&nbsp;сход-развала")> Стенды<br>сход-развала</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 top-menu-item top-menu-item-3">
					<img src="img/top-menu-item-3.png" width="68" alt="Компрессорное оборудование">
					<a href="#openModal2" onClick=CatNameChanger("на&nbsp;Компрессорное&nbsp;оборудование")> Компрессорное<br>оборудование</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 top-menu-item top-menu-item-4">
					<img src="img/top-menu-item-4.png" width="85" alt="Компрессорное оборудование">
					<a href="#openModal2" onClick=CatNameChanger("на&nbsp;Гидравлическое&nbsp;оборудование")> Гидравлическое<br>оборудование</a>
				</div>
			</div>
		</div>
	</div>

	
	<div class="container section-1">
		<div class="row">
			<div class="col-md-12 section-title section-title-1">
				<h2><span>Шиномонтажное оборудование</span><?php echo $brands_arr[$brand_id]["brandName"];?><br>&nbsp;от официального дилера<br>с гарантией до 3 лет&nbsp;<span>по лучшей цене</span> в России</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-6 section-1-equipment">
				<div class="equipment-img">
					<img src="<?php echo $brands_arr[$brand_id]["brandBigImg"];?>" width="203" alt="Trommelberg 1810E" class="equipment-img-1">
				</div>
				<div class="equipment-brand<?php echo $brands_arr[$brand_id]["displaynone"];?>">
					<img src="<?php echo $brands_arr[$brand_id]["brandSmallImg"];?>" width="165" height="71" alt="" class="equipment-brand-img">
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
				 				  <form method="post" action="sender.php" name="form" id="form_1" class="sform" onsubmit="yaCounter41896804.reachGoal('cel3'); return true;">
				  <input type="hidden" name="subject" value="Узнай цены! Оставь заявку">
				  	<div class="wrap-input-name">
						<input class="input-text input-name" type="text" name="name" placeholder="Имя">
				  	</div>
				 	 <div class="wrap-input-telephone">
				  		<input class="input-text input-phone phone-mask" id="inputf" type="tel" name="phone" placeholder="Телефон*" maxlength="18" required onClick="moveCaretToStart(this)">
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
					<div class="alert_on" id="phone_bottom"></div>
				  	<div class="wrap-form-btn">
				  		<input class="form-button form-1-btn" type="submit" name="full_catalog" value="Получи полный каталог" onClick="validation('phone_bottom','inputf')">
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
					<h2>Подберём комплект оборудования<br/><span>в 2 раза быстрее</span> конкурентов<br/><span>из 1639 моделей в наличии</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-3 col-xs-3 cat-img-1-box">
					<img src="img/image_cat_1.png" width="623" alt="" class="section-2-img img-left cat-img-1">
				</div>
				<div class="col-md-8 col-sm-9 col-xs-9 section-block-text block-text-1">
					<h3>Легковые шиномонтажные<br>и балансировочные станки в наличии<br><span>142 модели</span> от <span>39 990 рубля</span></h3>
					<p>Получи подробные характеристики, фотографии и цены на весь модельный<br>ряд шиномонтажных и балансировочных станков</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 catalog-wrap-1">
					<div class="form-catalog-wrap">
						<div class="triangle-topright" style="display: none;"></div>
						<div class="form-catalog">
							 <form method="post" action="sender.php" class="sform" id="form_2" onsubmit="yaCounter41896804.reachGoal('cel4'); return true;">
								<p>оставь свое имя и телефон, чтобы получить каталог</p>
								<div>
								 <input type="hidden" name="subject" value="Легковые шиномонтажные станки. Оставьте ваши имя и телефон, чтобы получить каталог">
								<input class="input-text input-name input-string-form string-form-name" type="text" name="name" placeholder="Имя">
								<input class="input-text input-phone input-string-form phone-mask" id="inputf2"  maxlength="18" type="text" name="phone" placeholder="Телефон*" required onClick="moveCaretToStart(this)">
								<input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
								</div>
								<div class="alert_on" id="phone_bottom_2"></div>
								<div class="wrap-form-btn btn-position-right">
								
									<input class="form-button form-2-btn"  type="submit" name="catalog" value="Получить каталог" onClick="validation('phone_bottom_2','inputf2')">
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
					<h3>Грузовые шиномонтажные<br>и балансировочные станки в наличии<br><span>37 моделей</span> от <span>129 990 рубей</span></h3>
					<p>Получи подробные характеристики, фотографии и цены на весь модельный<br>ряд шиномонтажных и балансировочных грузовых станков</p>
				</div>
				<div class="col-md-4 col-sm-3 col-xs-3 cat-img-2-box">
					<img src="img/image_cat_2.png" width="981" alt="" class="img-right cat-img-2">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 catalog-wrap-2">
					<div class="form-catalog-wrap">
						<div class="form-catalog-left">
							 <form method="post" action="sender.php" class="sform" id="form_3" onsubmit="yaCounter41896804.reachGoal('cel5'); return true;">
							<p>оставь свое имя и телефон, чтобы получить каталог</p>
							 <input type="hidden" name="subject" value="Грузовыеи блансировочные станки. Оставьте ваши имя и телефон, чтобы получить каталог">
								<input class="input-text input-name input-string-form-left" type="text" name="name" placeholder="Имя">
								<input class="input-text input-phone input-string-form phone-mask" id="inputf3"  maxlength="18"  type="text" name="phone" placeholder="Телефон*" required onClick="moveCaretToStart(this)">
								<input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
								<div class="alert_on" id="phone_bottom_3"></div>
								<div class="wrap-form-btn btn-position-center">
									<input class="form-button form-2-btn" type="submit" name="catalog" value="Получить каталог" onClick="validation('phone_bottom_3','inputf3')">
								</div>
							</form>
							
						</div>
						<div class="triangle-topleft" style="display: none"></div>
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
					<h3>Компрессоры <br>от 25 до 2000 литров в наличии<br><span>256 моделей </span>компрессоров (поршневых и винтовых) от <span>9 187 рубей</span></h3>
					<p>Получи подробные характеристики, фотографии и цены на весь модельный<br>ряд ряд компрессоров от 25 до 2000 литров</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 catalog-wrap-1">
					<div class="form-catalog-wrap">
						<div class="triangle-topright" style="display: none"></div>
						<div class="form-catalog">
							 <form method="post" action="sender.php" class="sform" id="form_4" onsubmit="yaCounter41896804.reachGoal('cel6'); return true;">
								<p>оставь свое имя и телефон, чтобы получить каталог</p>
								 <input type="hidden" name="subject" value="Компрессоры. Оставьте ваши имя и телефон, чтобы получить каталог">
								<input class="input-text input-name input-string-form string-form-name" type="text" name="name" placeholder="Имя">
								<input class="input-text input-phone input-string-form phone-mask"  type="text" id="inputf4"  maxlength="16" name="phone" placeholder="Телефон*" required onClick="moveCaretToStart(this)">
								<input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
								<div class="alert_on" id="phone_bottom_4"></div>
								<div class="wrap-form-btn btn-position-right">
									<input class="form-button form-2-btn"  type="submit" name="catalog" value="Получить каталог" onClick="validation('phone_bottom_4','inputf4')">
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
					<p>Получи подробные характеристики, фотографии и цены на весь модельный<br>ряд домкратов, гайковертов, вулканизаторов<br/>и борторасширителей</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-3 cat-img-4-box">
					<img src="img/image_cat_4.png" width="600" alt="" class="img-right cat-img-4">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 catalog-wrap-2">
					<div class="form-catalog-wrap">
						<div class="form-catalog-left">
							 <form method="post" action="sender.php" id="form_5" class="sform" onsubmit="yaCounter41896804.reachGoal('cel7'); return true;">
							<p>оставь свое имя и телефон, чтобы получить каталог</p>
							 <input type="hidden" name="subject" value="Домкраты...Оставьте ваши имя и телефон, чтобы получить каталог">
								<input class="input-text input-name input-string-form-left" type="text" name="name" placeholder="Имя">
								<input class="input-text input-phone input-string-form phone-mask" id="inputf5"  maxlength="18"  type="text" name="phone" placeholder="Телефон*" required onClick="moveCaretToStart(this)">
								<input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
								<div class="alert_on" id="phone_bottom_5"></div>
								<div class="wrap-form-btn btn-position-center">
									<input class="form-button form-2-btn"  type="submit" name="catalog" value="Получить каталог"  onClick="validation('phone_bottom_5','inputf5')">
								</div>
							</form>
						</div>
						<div class="triangle-topleft" style="display: none"></div>
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
					<p>Получи подробные характеристики, фотографии и цены на весь модельный<br>ряд расходных материалов для шиномонтажа</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 catalog-wrap-1">
					<div class="form-catalog-wrap">
						<div class="triangle-topright" style="display: none"></div>
						<div class="form-catalog">
							 <form method="post" action="sender.php" id="form_6" class="sform" onsubmit="yaCounter41896804.reachGoal('cel8'); return true;">
								<p>оставь свое имя и телефон, чтобы получить каталог</p>
								 <input type="hidden" name="subject" value="Расходные материалы. Оставьте ваши имя и телефон, чтобы получить каталог">
								<input class="input-text input-name input-string-form string-form-name" type="text" name="name" placeholder="Имя">
								<input class="input-text input-phone input-string-form phone-mask" id="inputf6"  maxlength="18"  type="text" name="phone" placeholder="Телефон*" required onClick="moveCaretToStart(this)">
								<input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
								<div class="alert_on" id="phone_bottom_6"></div>
								<div class="wrap-form-btn btn-position-right">
									<input class="form-button form-2-btn" type="submit" name="catalog" value="Получить каталог" onClick="validation('phone_bottom_6','inputf6')">
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
						<h2><span>Прямые поставки</span> оборудования<span>&nbsp;<?php echo $brands_arr[$brand_id]["brandName"];?></span><br><span>с завода</span> производителя</h2>
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
					<form method="post" action="sender.php" id="form_7" class="sform" onsubmit="yaCounter41896804.reachGoal('cel9'); return true;">
						<h4>получи <span>общий прайс-лист</span> на оборудование<br>
<?php echo $brands_arr[$brand_id]["brandName"];?>&nbsp;для шиномонтажа <span>с ценами производителя</span></h4>
						<p>просто введи данные и мы отправим прайс-лист</p>
						 <input type="hidden" name="subject" value="Получи общий прайс-лист на оборудование&nbsp;<?php echo $brands_arr[$brand_id]["brandName"];?>">
					<div class="wrap-input-name-price">
						<input class="input-text input-name input-price" type="text" name="name" placeholder="Имя">
				  	</div>
				  	<div class="wrap-input-telephone-price">
				  		<input class="input-text input-phone input-price phone-mask" id="inputf7"  maxlength="18"  type="text" name="phone" placeholder="Телефон*" required onClick="moveCaretToStart(this)">
				 	 </div>
				 	 <div class="wrap-input-email-price">
				  		<input class="input-text input-email input-price" type="email" name="email" placeholder="Почта">
				  	</div>
				  	<div class="alert_on alert_on_bg_white" id="phone_bottom_7"></div>
				  	<div class="wrap-form-btn-price">
				  		<input class="form-button form-1-btn btn-price"  type="submit" name="price" onClick="validation2('phone_bottom_7','inputf7')" value="получить прайс-лист">
				  	</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-title section-title-calc">
					<h2><a name="calculator"></a><span>сформируй комплект</span> шиномонтажного<br>оборудования самостоятельно <span>в 2 раза быстрее</span><br>с помощью калькулятора</h2>
				</div>
			</div>
		</div>
		
		<div class="wrap-calc-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wrap-calc">
							 <form method="post" action="sender.php" id="form_8" class="sform" onsubmit="yaCounter41896804.reachGoal('cel10'); return true;">
							  <input type="hidden" name="subject" value="Калькулятор">
								<fieldset id="fieldset_1">
									<input type="checkbox" name="stanok" value="Шиномонтажный станок" id="TireCheckBox">
									<label class="label-style-1" onClick=CheckBoxChecker() for="TireCheckBox">Шиномонтажный станок</label>
									<br/>
									<ul class="cacl-col-1">
										<li><input class="firstBoxItems" name="value1" type="radio" value="gruzovoy" id="gruzovoy" disabled><label id="scol" onClick="CalcFieldChecker(this)" class="label-style-2" for="gruzovoy">грузовой</label></li>
										<li><input class="firstBoxItems" name="value1" type="radio" value="press" id="legkovoy" disabled><label id="scol" onClick="CalcFieldChecker(this)" class="label-style-2" for="legkovoy">легковой</label></li>
									</ul>
									<ul class="cacl-col-1">
										<li><input class="firstBoxItems" name="value2" type="radio" value="avtomat" id="avtomat" disabled><label id="scol" onClick="CalcFieldChecker(this)" class="label-style-2" for="avtomat">автомат</label></li>
										<li><input class="firstBoxItems" name="value2" type="radio" value="pavtomat" id="pavtomat" disabled><label id="scol" onClick="CalcFieldChecker(this)" class="label-style-2" for="pavtomat">полуавтомат</label></li>
									</ul>
									<ul class="cacl-col-1">
										<li><input class="firstBoxItems" name="value3" type="radio" value="220v" id="220v" disabled><label id="scol" onClick="CalcFieldChecker(this)" class="label-style-2" for="220v">220v</label></li>
										<li><input class="firstBoxItems" name="value3" type="radio" value="380v" id="380v" disabled><label id="scol" onClick="CalcFieldChecker(this)" class="label-style-2" for="380v">380v</label></li>
									</ul>
									<div class="calc-col-3" id="select_col_1">
										<p>размер диска</p>
										<select class="firstBoxItems change_selectbox" disabled id="scol" name="razmerdiska">
											<option value="18" selected="selected">18&quot;</option>
											<option value="20">20&quot;</option>
											<option value="21">21&quot;</option>
											<option value="22">22&quot;</option>
											<option value="24">24&quot;</option>
											<option value="26">26&quot;</option>
											<option value="28">28&quot;</option>
											<option value="30">30&quot;</option>
											<option value="42">42&quot;</option>
											<option value="28">52&quot;</option>
											<option value="30">56&quot;</option>
											<option value="42">60&quot;</option>
				  						</select>
									</div>
									<div class="calc-col-4" id="select_col_2">
										<p>Бренды</p>
											<select class="firstBoxItems" name="brendi" id="scol" disabled>
											<option value="Trommelberg" selected="selected">Trommelberg</option>
											<option value="Nordberg">NORDBERG</option>
											<option value="MBEngineering">M&amp;B ENGINEERING srl</option>
											<option value="Sivik">Sivik (Сивик) Hofmann</option>
											<option value="Hunter">Hunter</option>
											<option value="Sicam">Sicam</option>
											<option value="AET">AE&amp;T</option>
											<option value="Giuliano">Giuliano</option>
											<option value="Teco">Teco</option>
											<option value="Ravaglioli">Ravaglioli</option>
											<option value="Sice">Sice</option>
											<option value="Corghi">Corghi</option>
											<option value="ChelabinskiyZavod">Челябинский завод автосервисного оборудования</option>
				  						</select>
									</div>

								</fieldset>
								
								<fieldset>
									<input type="checkbox" name="balansirovochnyj" value="Балансировочный станок" id="BalanceCheckBox">
									<label class="label-style-1" onClick=CheckBoxChecker2() for="BalanceCheckBox">Балансировочный станок</label>
									<br/>
									<ul class="cacl-col-1">
										<li><input class="balanceBoxItems" name="value4" type="radio" value="gruzovoy" id="gruzovoy2" disabled><label id="bcol" onClick="CalcFieldChecker(this)" class="label-style-2" for="gruzovoy2">грузовой</label></li>
										<li><input class="balanceBoxItems" name="value4" type="radio" value="press" id="legkovoy2" disabled><label id="bcol" onClick="CalcFieldChecker(this)" class="label-style-2" for="legkovoy2">легковой</label></li>
									</ul>
									<ul class="cacl-col-1">
										<li><input class="balanceBoxItems" name="value5" type="radio" value="avtomat" id="avtomat2" disabled><label id="bcol" onClick="CalcFieldChecker(this)" class="label-style-2" for="avtomat2">автомат</label></li>
										<li><input class="balanceBoxItems" name="value5" type="radio" value="pavtomat" id="pavtomat2" disabled><label id="bcol" onClick="CalcFieldChecker(this)" class="label-style-2" for="pavtomat2">полуавтомат</label></li>
										<li><input class="balanceBoxItems" name="value5" type="radio" value="ruchnoy" id="ruchnoy" disabled><label id="bcol" onClick="CalcFieldChecker(this)" class="label-style-2" for="ruchnoy">ручной</label></li>
									</ul>
									<ul class="cacl-col-1">
										<li><input class="balanceBoxItems" name="value6" type="radio" value="220v" id="220v2" disabled><label id="bcol" onClick="CalcFieldChecker(this)" class="label-style-2" for="220v2">220v</label></li>
										<li><input class="balanceBoxItems" name="value6" type="radio" value="380v" id="380v2" disabled><label id="bcol" onClick="CalcFieldChecker(this)" class="label-style-2" for="380v2">380v</label></li>
									</ul>

				  					<div class="calc-col-3" id="select_col_3">
				  						<p>мощность мотора</p>
										<select class="balanceBoxItems" id="bcol" name="motor" disabled>
											<option value="180vt" selected="selected">180 Вт</option>
											<option value="200vt">200 Вт</option>
											<option value="250vt">250 Вт</option>
											<option value="350vt">350 Вт</option>
											<option value="370vt">370 Вт</option>
											<option value="750vt">750 Вт</option>
											<option value="90vt">90 Вт</option>
										</select>
				  					</div>
				  					<div class="calc-col-4" id="select_col_4">
										<p>Бренды</p>
											<select class="balanceBoxItems" id="bcol" name="brendi2" disabled>
											<option value="Trommelberg" selected="selected">Trommelberg</option>
											<option value="Nordberg">NORDBERG</option>
											<option value="MBEngineering">M&amp;B ENGINEERING srl</option>
											<option value="Sivik">Sivik (Сивик) Hofmann</option>
											<option value="Hunter">Hunter</option>
											<option value="Sicam">Sicam</option>
											<option value="AET">AE&amp;T</option>
											<option value="Giuliano">Giuliano</option>
											<option value="Teco">Teco</option>
											<option value="Ravaglioli">Ravaglioli</option>
											<option value="Sice">Sice</option>
											<option value="Corghi">Corghi</option>
				  						</select>
									</div>


								</fieldset>
								<fieldset class="last-fieldset">
									<input type="checkbox" name="kompressor" value="Компрессор поршневой" id="CompressorCheckBox">
									<label class="label-style-1" onClick=CheckBoxChecker3() for="CompressorCheckBox">Компрессор поршневой</label>
									<br/>
									<ul class="cacl-col-1">
										<li><input class="compressorBoxItems" name="value7" type="radio" value="220v" id="220v3" disabled><label id="kcol" onclick="CalcFieldChecker(this)" class="label-style-2" for="220v3">220v</label></li>
										<li><input class="compressorBoxItems" name="value7" type="radio" value="380v" id="380v3" disabled><label id="kcol" onclick="CalcFieldChecker(this)" class="label-style-2" for="380v3">380v</label></li>
									</ul>
									
									<div class="calc-col-3" id="select_col_5">
				  						<p>размер ресивера</p>
										<select class="compressorBoxItems" id="kcol" name="razmerresivera" disabled>
											<option value="Vse" selected="selected">Все</option>
											<option value="6l">6 л</option>
											<option value="24l">24 л</option>
											<option value="50l">50 л</option>
											<option value="90l">90 л</option>
											<option value="100l">100 л</option>
											<option value="150l">150 л</option>
											<option value="200l">200 л</option>
											<option value="270l">270 л</option>
											<option value="300l">300 л</option>
											<option value="500l">500 л</option>
										</select>
				  					</div>
				  					<div class="calc-col-3" id="select_col_6">
				  						<p>производительность</p>
										<select class="compressorBoxItems" id="kcol" name="proizvoditelnost" disabled>
											<option value="180" selected="selected">до 180 л/мин.</option>
											<option value="560">до 560 л/мин.</option>
											<option value="940">до 940 л/мин.</option>
											<option value="1320">до 1320 л/мин.</option>
											<option value="1700">до 1700 л/мин.</option>
										</select>
				  					</div>
				  					<div class="calc-col-3" id="select_col_7">
				  						<p>давление</p>
										<select class="compressorBoxItems" id="kcol" name="davlenie" disabled>
											<option value="Vse" selected="selected">Все</option>
											<option value="8">8 бар</option>
											<option value="10">10 бар</option>
											<option value="11">11 бар</option>
											<option value="15">15 бар</option>
										</select>
				  					</div>
				  					<div class="calc-col-4" id="select_col_8">
										<p>Бренды</p>
											<select class="compressorBoxItems" id="kcol" name="brendi3" disabled>
											<option value="Huberth" selected="selected">Huberth</option>
											<option value="Remeza">Remeza</option>
											<option value="Remeza AirCast">Remeza AirCast</option>
											<option value="Fiac">Fiac</option>
											<option value="Fubag">Fubag</option>
											<option value="Abac">Abac</option>
											<option value="AET">AE&amp;T</option>
				  						</select>
									</div>
								</fieldset>
						<div class="wrap-input-name-price col-md-3">
							<input class="input-text input-name" type="text" name="name" placeholder="Имя">
						</div>
						<div class="wrap-input-telephone-price col-md-3">
							<input class="input-text input-phone phone-mask" id="inputf8"  maxlength="18" type="text" name="phone" placeholder="Телефон*" required onClick="moveCaretToStart(this)">
						 </div>
						 <div class="wrap-input-email-price col-md-3">
							<input class="input-text input-email" type="email" name="email" placeholder="Почта">
						</div>
							
								
								<div class="wrap-form-btn-calc col-md-3">
				  					<input class="form-button form-1-btn btn-color-2 btn-calc" onClick="validation2('phone_bottom_8','inputf8')" type="submit" name="calc" value="Подобрать">
				 	 			</div>
				 	 			<div class="alert_on" id="phone_bottom_8"></div>
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
					<h2>получи <span>готовый комплект</span> шиномонтажного<br/>оборудования <span>дешевле на 20%</span> уже через 14 дней<br/>за счёт готового предложения</h2>
				</div>
			</div>
			<div class="row"  id="ekonom-complect">
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
						<span>Цена за 2 станка (шиномонтажный + балансировочный) 89 900 руб.</span></p>
					</div>
					<div class="wrap-set-btn">
						<p>цена за полный комплект <span>119 900 р</span></p>
						<div class="button-set button form-button set-btn set-btn-right">
							<a href="#openModal_econom" class="">узнать подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<div class="wrap-gray">
		<div class="container">
			<div class="row  set-margin-adaptiv" id="profi-complect">
				<div class="col-md-7 col-sm-7 col-xs-7">
					<div class="set-text">
						<h4><span>Комплект &laquo;Профи&raquo;</span></h4>
						<p><span>Шиномонтажный станок TROMMELBERG 1810E</span><br/>
						(полуавтомат, до 21", питание 220/380 В, мощность мотора 1,1 кВт, 4-х кулачковый самоцентрирующийся
						механизм поворотного стола)<br>
						<span>Cтанок балансировочный TROMMELBERG CB1930E</span><br/>
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
						<span>Цена за 2 станка (шиномонтажный + балансировочный) 91 900 руб.</span></p>
					</div>
					<div class="wrap-set-btn wrap-set-btn-2">
						<p>цена за полный комплект <span>134 900 р</span></p>
						<div class="button-set button form-button set-btn set-btn-right">
							<a href="#openModal_professional" class="">узнать подробнее</a>
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
			<div class="row  set-margin-adaptiv" id="profi-poluavtomat-complect">
				<div class="col-md-5 col-sm-5 col-xs-5">
					<div class="position4">
						<div class="set-position"><img src="img/set_image_3.png" class="set-item-img" width="650" alt=""></div>
					</div>
				</div>
				<div class="col-md-7 col-sm-7 col-xs-7">
					<div class="set-text">
						<h4><span>Комплект &laquo;Профи&raquo;</span> - полуавтомат</h4>
						<p><span>Шиномонтажный станок TROMMELBERG 1860</span><br/>
						(полуавтомат, двухскоростной, до 28", питание 220\380 В, мощность мотора) 0,75 - 1,1 кВт, 4-х кулачковый самоцентрирующийся механизм поворотного стола<br>
						<span>Cтанок балансировочный TROMMELBERG CB1960B</span><br/>
						(полуавтомат, до 28", питание 220 В, режим &laquo;Moto&raquo; для балансировки колес мотоциклов, функция минимизации количества используемых балансировочных грузиков ("Оптимизация"), ножной тормоз, встроенная подсветка диска)<br/>
						<span>Компрессор воздушный HUBERTH RP306250</span><br/>
						(ременный привод, ресивер 250 л, производительность 573 л/мин, электропитание 380 В, датчик давления, аварийный клапан для защиты от избыточного давления, головки имеют раздельное исполнение и оснащены пластинчатыми радиаторами для наилучшего охлаждения) <br/>
						<span>Домкрат подкатной гаражный TROMMELBERG XRD 0802</span><br/>
						(грузоподъемность 3 т, усиленная конструкция, клапан защиты от перегрузок, высота 138-485 мм, ремкоплект в комплекте)<br/>
						<span>Гайковерт ударный пневматический HUBERTH RP207422</span><br/>
						(размер квадрата 1/2", максимальное усилие 567 нм, обороты 7500 об/мин, механизм TWIN-HAMMER)
						<br/>
						<br/>
						<span> Цена за 2 станка (шиномонтажный + балансировочный) 158 300 руб.</span>
						 </p>
					</div>
					<div class="wrap-set-btn">
						<p>цена за полный комплект <span>219 900 р</span></p>
						<div class="button-set button form-button set-btn set-btn-right">
							<a href="#openModal_professional-semiautomatic" class="">узнать подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<div class="wrap-gray">
		<div class="container">
			<div class="row set-margin-adaptiv" id="profi-auto-complect">
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
						<span> Цена за 2 станка (шиномонтажный + балансировочный) 227 900 руб.</span></p>
					</div>
					<div class="wrap-set-btn wrap-set-btn-2">
						<p>цена за полный комплект <span>299 900 р</span></p>
						<div class="button-set button form-button set-btn set-btn-right">
							<a href="#openModal_professional-automatic" class="">узнать подробнее</a>
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
			<div class="row set-margin-adaptiv" id="cargo-complect">
				<div class="col-md-5 col-sm-5 col-xs-5">
					<div class="position4">
						<div class="set-position"><img src="img/set_image_5.jpg" class="set-item-img" width="550" alt=""></div>
					</div>
					<div class="sale-season-wrap"">
						<div class="sale-season">
							<img src="img/sale-text.png">
						</div>
						<div class="start-sale">
							<span>успей</span> до начала <span>сезона</span>
						</div>
						<div class="last-day">
							<p>осталось<br> <span>5</span> дней</p>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-sm-7 col-xs-7">
					<div class="set-text">
						<h4><span>Комплект грузового шиномонтажа</span></h4>
						<p><span>Шиномонтажный станок TROMMELBERG 1580</span><br/>
						(АВТОМАТ, до 26", максимальная грузоподъемность подъемной консоли 1000 кг, максимальный диаметр колеса 1600 мм, максимальная ширина колеса 780 мм, усилие отрыва кромки шины 1500 кг, рабочее давление в гидросистеме до 130 бар, максимальная потребляемая мощность 2.9 кВт, электропитание 3ф.х380-400/50 Гц, вес 560 кг. В комплекте поставки: выносной пульт управления, иски-зажим для монтажа шин и монтажная лопатка)<br/>
						<span>Балансировочный станок TROMMELBERG СВ1448</span><br/>
						(АВТОМАТ, диаметр диска 10" - 24", ширина колеса 1.5" - 20", время измерения 7 сек, максимальный диаметр колеса 1016 мм / 40", максимальный вес колеса 130 кг, рабочее давление воздуха 8-10 бар, точность балансировки ±1 г, потребляемая мощность 300 Вт, электропитание 3ф.х380-400/50 В/Гц, вес 342 кг)<br/>
						<span>Компрессор поршневой 16 бар FIAC СБ4/Ф-500</span><br/>
						Ресивер 500 л, производительность 830 л/мин, давление 16 бар, напряжение 7,5 кВт, 380 В, вес 250 кг.<br/>
						<span>Домкрат TROMMELBERG SD101902</span><br/>
						(Грузоподъемность 22 т, высота подхвата 226 мм, максимальная высота подъёма 450 мм, рабочее давление воздуха 7.5-8.5 бар, высота винта 105 мм, вес 36.5 кг)<br/>
						<span>Пневмогайковерт NORDBERG IT 4250</span><br/>
						(размер квадрата 1", максимальное усилие 3388 Нм, число оборотов 4200 об/мин, вес 14,85 кг, потребление воздуха 283 л/мин, давление 6.2 бар)<br/>
						<span>Набор ударных торцевых головок 1" KING TONY 8410MP</span><br/> 
						(шестигранные головки размерами 24, 27, 30, 32, 33, 36, 38 и 41 мм)
						<br/>
						<br/>
						<span>Цена за 2 станка (шиномонтажный + балансировочный) 409 900 руб.</span></p>
					</div>
					<div class="wrap-set-btn">
						<p>цена за полный комплект <span>549 900 р</span></p>
						<div class="button-set button form-button set-btn set-btn-right">
							<a href="#openModal_cargo" class="">узнать подробнее</a>
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
					<a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Шиномонтажное&nbsp;оборудование")><img src="img/cat_pos_1.png" width="200" alt="">
					<p>Шиномонтажное<br/>оборудование</p></a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 cat-pos cat-pos-2">
					<a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Гидравлическое&nbsp;оборудование")><img src="img/cat_pos_2.png" width="264" alt="">
					<p>Гидравлическое<br/>оборудование</p></a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 cat-pos cat-pos-3">
					<a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Гаражное&nbsp;оборудование")><img src="img/cat_pos_3.png" width="206" alt="">
					<p>Гаражное<br/>оборудование</p></a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 cat-pos cat-pos-4">
					<a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Диагностическое&nbsp;оборудование")><img src="img/cat_pos_4.png" width="236" alt="">
					<p>Диагностическое<br/>оборудование</p></a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 cat-pos cat-pos-5">
					<a href="#openModal_2" onClick=CatNameChanger2("для&nbsp;кузовного&nbsp;ремонта")><img src="img/cat_pos_5.png" width="280" alt="">
					<p>Для кузовного<br/>ремонта</p></a>
				</div>
			</div>
			<div class="row cat-pos-string catalog-position">
				<div class="col-md-3 col-sm-3 col-xs-3 cat-pos cat-pos-6">
					<a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Окрасочное&nbsp;оборудование")><img src="img/cat_pos_6.png" width="354" alt="">
					<p>Окрасочное<br/>оборудование</p></a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 cat-pos cat-pos-7">
					<a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Инструмент&nbsp;и&nbsp;мебель")><img src="img/cat_pos_7.png" width="246" alt="">
					<p>Инструмент<br/>и мебель</p></a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 cat-pos cat-pos-8">
					<a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Стенды&nbsp;развал-схождения")><img src="img/cat_pos_8.png" width="236" alt="">
					<p>Стенды<br/>&quot;развал-схождения&quot;</p></a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 cat-pos cat-pos-9">
					<a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Компрессоры")><img src="img/cat_pos_9.png" width="272" alt="">
					<p>Компрессоры</p></a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 cat-pos cat-pos-10">
					<a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Грузовое&nbsp;оборудование")><img src="img/cat_pos_10.png" width="256" alt="">
					<p>Грузовое<br/>оборудование</p></a>
				</div>
			</div>
			<div class="row cat-pos-string cat-pos-string-2">
				<div class="col-md-5 col-sm-5 col-xs-5 cat-pos cat-pos-11">
					<a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Сварочное&nbsp;оборудование")><img src="img/cat_pos_11.png" width="186" alt="">
					<p>Сварочное<br/>оборудование</p></a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 cat-pos cat-pos-12">
					<a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Моечное&nbsp;оборудование")><img src="img/cat_pos_12.png" width="248" alt="">
					<p>Моечное<br/>оборудование</p></a>
				</div>
				<div class="col-md-5 col-sm-5 col-xs-5 cat-pos cat-pos-13">
					<a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Электростаниции")><img src="img/cat_pos_13.png" width="278" alt=""><p>Электростаниции</p></a>
				</div>
			</div>
		</div>
		
		<div class="wrap-manager-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-title section-title-manager">
						<h2>получи консультацию у персонального<br/>менеджера в день обращения и <span>сэкономь<br/>10 часов</span> своего времени на подборе</h2>
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
											<img src="img/alex.jpg" width="363" alt="">
											<div class="name-manager">
											<span>Алексей Кувшинов</span>
												<p>2,5 года в подборе</p>
											</div>
											
										</div>
										<div class="slide sl-1">
											<img src="img/artur.jpg" width="363" alt="">
											<div class="name-manager">
											<span>Артур Артеев</span>
												<p>1,5 года в подборе</p>
											</div>
										</div>
										<div class="slide sl-2">
											<img src="img/igor.jpg" width="363" alt="">
											<div class="name-manager">
											<span>Игорь Скворцов</span>
												<p>3 года в подборе</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="wrap-form-call">
							<p>позвони<i class="fa fa-phone fa-1x"></i><span> 8 800 250 9946</span></p>
							<h4>или оставь заявку<br/><span>на звонок</span></h4>
							 <form method="post" action="sender.php" id="form_9" class="sform" onsubmit="yaCounter41896804.reachGoal('cel17'); return true;">
							 <input type="hidden" name="subject" value="Заявка на звонок">
								<div class="wrap-input-name-call">
									<input class="input-text input-name input-call" type="text" name="name" placeholder="Имя">
				  				</div>
				  				<div class="wrap-input-telephone-call">
				  					<input class="input-text input-phone input-call phone-mask" id="inputf9"  maxlength="18" type="text" name="phone" placeholder="Телефон*" required onClick="moveCaretToStart(this)">
				 	 			</div>
				 	 			<div class="alert_on alert_on_bg_white" id="phone_bottom_9"></div>
				 	 			<div class="wrap-form-btn-call">
				  					<input class="form-button form-1-btn btn-color-2 btn-call" onClick="validation2('phone_bottom_9','inputf9')" type="submit" name="call" value="перезвонить">
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
					<p><span>538</span><br/>Городов поставок<br/>за 2016 г.</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 map-text">
					<p><span>186</span><br/>Открыто новых шиномонтажей<br/>за 2016 г.</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 map-text">
					<p><span>451</span><br/>Доукомплектовано автосервисов<br/>в 2016 г.</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 map-text">
					<p><span>3327</span><br/>Единиц оборудования в ассортименте</p>
				</div>
			</div>
			<div class="row ">
				<div class="map-container">
					<div id="map">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=KT5Sw3h8-UvqmBxA1pQ-B3Bo0Vy47Ooc&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=false"></script>
					</div>
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
							<p>Отгружаем оборудование<br/>только по официальному<br/>договору поставки</p>
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
						<h4>Александр<br/>г. Таштагол</h4>
						<p>Решили открыть шиномонтаж в г. Таштагол.<br/>Долго искали поставщика – выбор был достаточно<br/> большой. Но решили остановиться на компании<br/>Центр технического оборудования. Ну, во-первых,<br/>по цене сделали действительно хорошее предложение, а во-вторых, очень грамотно проконсультировали, выбор был достаточно большой... </p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6  comment-wrap">
					<div class="comment">
						<p>Отзыв на оборудование</p>
						<ul>
							<li>Шиномонтажный станок<br/>Trommelberg 1810</li>
							<li>Балансировочный станок<br/>Trommelberg CB1930B </li>
							<li>Компрессор поршневой<br/>Hubert RP103100</li>
							<li>Пневмогайковерт с набором головок<br />Hubert RP207422</li>
							<li>Домкрат подкатной 3 тонны<br />Trommelberg XRD0902</li>
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
						<h4>Александр<br/>г. Нефтеюганск</h4>
						<p>Данное оборуодвание я покупал в компании "Центр Технического Оборуования"<br/>Все что вы сейчас увидите: балансировочник, разбортовочник, компрессор, дископрав литья, шлифовальные пистолеты, вулканизатор.<br/>Поступило оборуование за 1,5 недели. Оборудование зарекомендовало себя с положтельной стороны - в мороз не мерзнет!</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 comment-wrap">
					<div class="comment">
						<p>Отзыв<br/>на оборудование</p>
						<ul>
							<li>Шиномонтажный станок<br/>Trommelberg 1810E</li>
							<li>Балансировочный станок<br/>Trommelberg CB1930B</li>
							<li>Компрессор поршневой<br/>Hubert RP103100</li>
							<!-- <li>Пневмогайковерт с набором головок<br />Hubert RP207422</li> -->
							<!-- <li>Домкрат подкатной 3 тонны<br />Trommelberg XRD0902</li> -->
							<li>Станок для правки дисков<br />СИБЕК Фаворит</li>
							<li>Вулканизатор (настольный)<br />NORDBERG V3</li>
							<!-- <li>Шиповальный пистолет<br />СИБЕК ПШ-8</li> -->
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
						<h4>Балданова Бутит Баторовна<br/>Забойкальский край</h4>
						<p>Недавно преобрели шиномонтажное оборудование у компании "Центр Технического Оборудования", г. Кемерово. Купили шиномонтажный станок, балансировочный станок, вулканизатор, подъемник, расходные материалы. Очень довольны, все в полном комплекте. Без труда сами установили и подключили оборудование.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 comment-wrap">
					<div class="comment">
						<p>Отзыв<br/>на оборудование</p>
						<ul>
							<li>Шиномонтажный станок<br/>Trommelberg 1810E</li>
							<li>Балансировочный станок<br/>Trommelberg CB1930B</li>
							<li>Компрессор поршневой<br/>Hubert RP103100</li>
							<li>Вулканизатор<br/>Trommelberg NV003</li>
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
						<h4>Денис<br/>Крым, Джанкой</h4>
						<p>Открыл свой шиномонтаж в августе 2005 года. Заказал комплект оборудование у фирмы "Центр Технического Оборудования" мне сделали бесплатную доставку и привезли оборудование за 8 дней! Отработали 2 сезона - оборудование нас ни разу не подвело!</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 comment-wrap">
					<div class="comment">
						<p>Отзыв<br/>на оборудование</p>
						<ul>
							<li>Шиномонтажный станок<br/>Trommelberg 1810</li>
							<li>Балансировочный станок<br/>Trommelberg CB1930B</li>
							<li>Компрессор поршневой<br/>Hubert RP304100</li>
							<li>Пневмогайковерт с набором головок<br />Hubert RP207422</li>
							<li>Домкрат подкатной 3 тонны<br />Trommelberg XRD0902</li>
							<li>Вулканизатор (настольный)<br />NORDBERG V3</li>
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
					<form method="post" action="sender.php" class="sform" id="form_10" onsubmit="yaCounter41896804.reachGoal('cel18'); return true;">
						<h4>хочешь купить в кредит?<br/>отправь заявку на расчёт суммы <span>кредита</span><br/>не выходя из дома <span>за 5 минут</span></h4>
						<p>просто введи данные и мы отправим прайс-лист</p>
						 <input type="hidden" name="subject" value="Отправьте заявку на расчёт суммы кредита">
					<div class="wrap-input-name-credit">
						<input class="input-text input-name-crd input-price input-credit" type="text" name="name" placeholder="Имя">
				  	</div>
				  	<div class="wrap-input-telephone-credit">
				  		<input class="input-text input-phone-crd input-price input-credit phone-mask" id="inputf10"  maxlength="18" type="text" name="phone" placeholder="Телефон*" required onClick="moveCaretToStart(this)">
				 	 </div>
				  	<div class="wrap-form-btn-credit">
				  		<input class="form-button form-1-btn btn-credit" type="submit" name="price" value="Купить в кредит" onClick="validation2('phone_bottom_10','inputf10')">
				  	</div>
				 	 <div class="alert_on" id="phone_bottom_10"></div>
					</form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wrap-section-price-2">
			<div class="container">
				<div class="row">

					<div class="wrap-form-price wrap-form-price-2">
					<form method="post" action="sender.php" id="form_11" class="sform" onsubmit="yaCounter41896804.reachGoal('cel19'); return true;">
						<h4>получи <span>общий прайс-лист</span> на оборудование<br>
<?php echo $brands_arr[$brand_id]["brandName"];?>&nbsp;для шиномонтажа <span>с ценами производителя</span></h4>
 <input type="hidden" name="subject" value="Получи общий прайс-лист на оборудование<?php echo $brands_arr[$brand_id]["brandName"];?>&nbsp; для шиномонтажа с ценами производителя">
						<div class="wrap-input-name-price">
							<input class="input-text input-name input-price" type="text" name="name" placeholder="Имя">
						</div>
						<div class="wrap-input-telephone-price">
							<input class="input-text input-phone input-price phone-mask" id="inputf11"  maxlength="18" type="text" name="phone" placeholder="Телефон*" required onClick="moveCaretToStart(this)">
						 </div>
						 <div class="wrap-input-email-price">
							<input class="input-text input-email input-price" type="email" name="email" placeholder="Почта">
						</div>
						<div class="alert_on" id="phone_bottom_11"></div>
						<div class="wrap-form-btn-price">
							<input class="form-button form-1-btn btn-price-2" type="submit" name="price" onClick="validation2('phone_bottom_11','inputf11')" value="получить прайс-лист" >
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
							<p>звонок по России бесплатный</p>
						</div>
						<div class="footer-form-call">
							<a href="#openModal_call" class="button form-button callback-btn">заказать обратный звонок</a>
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
					<h4>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
					<form method="post" action="sender.php" id="form_12" class="sform" onsubmit="yaCounter41896804.reachGoal('cel1'); return true;">
					<input type="hidden" id="ya-city" value="">
					<input type="hidden" name="subject" value="Оставьте имя и телефон и с вами свяжется старший менеджер">
						<div class="wrap-input-name-price">
							<input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
						</div>
						<div class="wrap-input-telephone-price">
							<input class="input-text input-modal phone-mask" id="inputf12"  maxlength="18" type="text" name="phone" placeholder="Ваш телефон*" required onClick="moveCaretToStart(this)">
						</div>
						<div class="alert_on alert_on_modal" id="phone_bottom_12"></div>
						<div class="wrapper-button">
							<input class="form-button form-1-btn btn-color-2 btn-modal" onClick="validation2('phone_bottom_12','inputf12')" type="submit" name="submit" value="Перезвонить мне">
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<div id="openModal2" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close"><span></span></a>
				<div class="modal-box">
					<h4>Оставь имя и телефон<br/>и получи каталог <span id="catalogName"></span></h4>
					<form method="post" action="sender.php" id="form_13" class="sform" onsubmit="yaCounter41896804.reachGoal('cel2'); return true;">
					<input type="hidden" id="ya-city" value="">
					<input type="hidden" name="subject" value="Оставьте имя и телефон и получите каталог">
					<input type="hidden" name="catName" id="cNameId" value="">
						<div class="wrap-input-name-price">
							<input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
						</div>
						<div class="wrap-input-telephone-price">
							<input class="input-text input-modal phone-mask" id="inputf13"  maxlength="18" type="text" name="phone" placeholder="Ваш телефон" required onClick="moveCaretToStart(this)">
						</div>
						<div class="alert_on alert_on_modal" id="phone_bottom_13"></div>
						<div class="wrapper-button">
							<input class="form-button form-1-btn btn-color-2 btn-modal" onClick="validation2('phone_bottom_13','inputf13')" type="submit" name="submit" value="Скачать каталог">
						</div>
					</form>
				</div>
			</div>
		</div>

		<div id="openModal_2" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close"><span></span></a>
				<div class="modal-box">
					<h4>Оставь имя и телефон<br/>и получи каталог <span id="catalogName2"></span></h4>
					<form method="post" action="sender.php" id="form_14" class="sform" onsubmit="yaCounter41896804.reachGoal('cel16'); return true;">
					<input type="hidden" id="ya-city" value="">
					<input type="hidden" name="subject" value="Оставьте имя и телефон и получите каталог">
					<input type="hidden" name="catName2" id="cNameId2" value="">
						<div class="wrap-input-name-price">
							<input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
						</div>
						<div class="wrap-input-telephone-price">
							<input class="input-text input-modal phone-mask" id="inputf14"  maxlength="18" type="text" name="phone" placeholder="Ваш телефон" required onClick="moveCaretToStart(this)">
						</div>
						<div class="alert_on alert_on_modal" id="phone_bottom_14"></div>
						<div class="wrapper-button">
							<input class="form-button form-1-btn btn-color-2 btn-modal" onClick="validation2('phone_bottom_14','inputf14')" type="submit" name="submit" value="Скачать каталог">
						</div>
					</form>
				</div>
			</div>
		</div>	


		<div id="openModal_econom" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close"><span></span></a>
				<div class="modal-box">
					<h4>Комплект &laquo;эконом&raquo;<br/>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
					<form method="post" action="sender.php" class="sform" id="form_15" onsubmit="yaCounter41896804.reachGoal('cel11'); return true;">
					<input type="hidden" id="ya-city" value="">
					<input type="hidden" name="subject" value="Комплект Эконом Оставьте имя и телефон и с вами свяжется старший менеджер">
						<div class="wrap-input-name-price">
							<input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
						</div>
						<div class="wrap-input-telephone-price">
							<input class="input-text input-modal phone-mask" id="inputf15"  maxlength="18" type="text" name="phone" placeholder="Ваш телефон*" required onClick="moveCaretToStart(this)">
						</div>
						<div class="alert_on alert_on_modal" id="phone_bottom_15"></div>
						<div class="wrapper-button">
							<input class="form-button form-1-btn btn-color-2 btn-modal" onClick="validation2('phone_bottom_15','inputf15')" type="submit" name="submit" value="Перезвонить мне">
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<div id="openModal_professional" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close"><span></span></a>
				<div class="modal-box">
					<h4>Комплект &laquo;профи&raquo;<br/>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
					<form method="post" action="sender.php" class="sform" id="form_16" onsubmit="yaCounter41896804.reachGoal('cel12'); return true;">
					<input type="hidden" id="ya-city" value="">
					<input type="hidden" name="subject" value="Комплект Профи Оставьте имя и телефон и с вами свяжется старший менеджер">
						<div class="wrap-input-name-price">
							<input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
						</div>
						<div class="wrap-input-telephone-price">
							<input class="input-text input-modal phone-mask" id="inputf16"  maxlength="18" type="text" name="phone" placeholder="Ваш телефон*" required onClick="moveCaretToStart(this)">
						</div>
						<div class="alert_on alert_on_modal" id="phone_bottom_16"></div>
						<div class="wrapper-button">
							<input class="form-button form-1-btn btn-color-2 btn-modal" onClick="validation2('phone_bottom_16','inputf16')" type="submit" name="submit" value="Перезвонить мне">
						</div>
					</form>
				</div>
			</div>
		</div>

		<div id="openModal_professional-semiautomatic" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close"><span></span></a>
				<div class="modal-box">
					<h4>Комплект &laquo;профи - полуавтомат&raquo;<br/>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
					<form method="post" action="sender.php" class="sform" id="form_17" onsubmit="yaCounter41896804.reachGoal('cel13'); return true;">
					<input type="hidden" id="ya-city" value="">
					<input type="hidden" name="subject" value="Комплект Профи-полуавтомат Оставьте имя и телефон и с вами свяжется старший менеджер">
						<div class="wrap-input-name-price">
							<input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
						</div>
						<div class="wrap-input-telephone-price">
							<input class="input-text input-modal phone-mask" id="inputf17"  maxlength="18" type="text" name="phone" placeholder="Ваш телефон*" required onClick="moveCaretToStart(this)">
						</div>
						<div class="alert_on alert_on_modal" id="phone_bottom_17"></div>
						<div class="wrapper-button">
							<input class="form-button form-1-btn btn-color-2 btn-modal" onClick="validation2('phone_bottom_17','inputf17')" type="submit" name="submit" value="Перезвонить мне">
						</div>
					</form>
				</div>
			</div>
		</div>

		<div id="openModal_professional-automatic" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close"><span></span></a>
				<div class="modal-box">
					<h4>Комплект &laquo;профи - автомат&raquo;<br/>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
					<form method="post" action="sender.php" class="sform" id="form_18" onsubmit="yaCounter41896804.reachGoal('cel14'); return true;">
					<input type="hidden" id="ya-city" value="">
					<input type="hidden" name="subject" value="Комплект Профи-автомат Оставьте имя и телефон и с вами свяжется старший менеджер">
						<div class="wrap-input-name-price">
							<input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
						</div>
						<div class="wrap-input-telephone-price">
							<input class="input-text input-modal phone-mask" id="inputf18"  maxlength="18" type="text" name="phone" placeholder="Ваш телефон*" required onClick="moveCaretToStart(this)">
						</div>
						<div class="alert_on alert_on_modal" id="phone_bottom_18"></div>
						<div class="wrapper-button">
							<input class="form-button form-1-btn btn-color-2 btn-modal" onClick="validation2('phone_bottom_18','inputf18')" type="submit" name="submit" value="Перезвонить мне">
						</div>
					</form>
				</div>
			</div>
		</div>

		<div id="openModal_cargo" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close"><span></span></a>
				<div class="modal-box">
					<h4>Комплект грузового шиномонтажа<br/>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
					<form method="post" action="sender.php" class="sform" id="form_19" onsubmit="yaCounter41896804.reachGoal('cel15'); return true;">
					<input type="hidden" id="ya-city" value="">
					<input type="hidden" name="subject" value="Комплект грузового шиномонтажа Оставьте имя и телефон и с вами свяжется старший менеджер">
						<div class="wrap-input-name-price">
							<input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
						</div>
						<div class="wrap-input-telephone-price">
							<input class="input-text input-modal phone-mask" id="inputf19"  maxlength="18" type="text" name="phone" placeholder="Ваш телефон*" required onClick="moveCaretToStart(this)">
						</div>
						<div class="alert_on alert_on_modal" id="phone_bottom_19"></div>
						<div class="wrapper-button">
							<input class="form-button form-1-btn btn-color-2 btn-modal" onClick="validation2('phone_bottom_19','inputf19')" type="submit" name="submit" value="Перезвонить мне">
						</div>
					</form>
				</div>
			</div>
		</div>

		<div id="openModal_call" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close"><span></span></a>
				<div class="modal-box">
					<h4>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
					<form method="post" action="sender.php" id="form_20" class="sform" onsubmit="yaCounter41896804.reachGoal('cel20'); return true;">
					<input type="hidden" id="ya-city" value="">
					<input type="hidden" name="subject" value="Footer Оставьте имя и телефон и с вами свяжется старший менеджер">
						<div class="wrap-input-name-price">
							<input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
						</div>
						<div class="wrap-input-telephone-price">
							<input class="input-text input-modal phone-mask" id="inputf20"  maxlength="18" type="text" name="phone" placeholder="Ваш телефон*" required onClick="moveCaretToStart(this)">
						</div>
						<div class="alert_on alert_on_modal" id="phone_bottom_20"></div>
						<div class="wrapper-button">
							<input class="form-button form-1-btn btn-color-2 btn-modal" onClick="validation2('phone_bottom_20','inputf20')" type="submit" name="submit" value="Перезвонить мне">
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
					<h2>Выбери свой город <span>доставляем по всей россии</span></h2>
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
			<p>или укажи в поле</p>
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
	<script src="https://cdn.jsdelivr.net/g/bootstrap@3.3.6,jquery.ui@1.11.4,jquery.maskedinput@1.4.1(jquery.maskedinput.js)"></script>
	<script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
	<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&amp;lang=ru-RU" type="text/javascript"></script>
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
		<script>
	(function(w, d, s, h, id) {
		w.roistatProjectId = id; w.roistatHost = h;
		var p = d.location.protocol == "https:" ? "https://" : "http://";
		var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
		var js = d.createElement(s); js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
	})(window, document, 'script', 'cloud.roistat.com', '7bf5be8735d9e917716694083ddc7adb');
	</script>
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
	<!-- Отслеживаем лиды через ловца лидовr -->
	<script>
    window.onRoistatAllModulesLoaded = function() {
        window.roistat.leadHunter.onAfterSubmit = function(leadData) {
            yaCounter41896804.reachGoal('leadhunter'); 
        }
    };
	</script>
	<!-- /Отслеживаем лиды через ловца лидовr -->
</body>
</html>