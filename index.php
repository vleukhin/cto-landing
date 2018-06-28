<?php

include('./utm.php');

$campagns_arr = [
    '20881940' => 0
    ,
    '20882365' => 0
    ,
    '20882431' => 0
    ,
    '20896260' => 0
    ,
    '20896681' => 0
    ,
    '21528108' => 0
    ,
    '21528136' => 0
    ,
    '21528161' => 0
    ,
    '20875546' => 1
    ,
    '20875571' => 1
    ,
    '20896240' => 1
    ,
    '20896668' => 1
    ,
    '20876000' => 2
    ,
    '20896241' => 2
    ,
    '20896670' => 2
    ,
    '20876238' => 3
    ,
    '20896242' => 3
    ,
    '20896671' => 3
    ,
    '20876564' => 4
    ,
    '20876598' => 4
    ,
    '20896243' => 4
    ,
    '20896672' => 4
    ,
    '20877858' => 5
    ,
    '20877885' => 5
    ,
    '20896246' => 5
    ,
    '20896675' => 5
    ,
    '20878869' => 6
    ,
    '20896252' => 6
    ,
    '20896677' => 6
    ,
    '20880199' => 7
    ,
    '20880492' => 7
    ,
    '20896255' => 7
    ,
    '20896680' => 7
    ,
    '20883820' => 8
    ,
    '20883876' => 8
    ,
    '20883933' => 8
    ,
    '20896272' => 8
    ,
    '20896685' => 8
    ,
    '21014374' => 8
    ,
    '21370467' => 8
    ,
    '21370533' => 8
    ,
    '21370619' => 8
    ,
    '20884736' => 9
    ,
    '20884790' => 9
    ,
    '20884855' => 9
    ,
    '20896279' => 9
    ,
    '20896691' => 9
    ,
    '21303815' => 9
    ,
    '21303891' => 9
    ,
    '21303944' => 9
    ,
    '20884943' => 10
    ,
    '20896299' => 10
    ,
    '20896697' => 10
    ,
    '21240170' => 10
    ,
    '21240254' => 10
    ,
    '20885036' => 11
    ,
    '20885139' => 11
    ,
    '20896305' => 11
    ,
    '20896703' => 11
    ,
    '21182876' => 11
    ,
    '21182905' => 11
    ,
    '21182928' => 11
    ,
    '20895136' => 12
    ,
    '20895138' => 12
    ,
    '20895140' => 12
    ,
    '20896288' => 12
    ,
    '20896693' => 12
    ,
    '21251163' => 12
    ,
    '21251231' => 12
    ,
    '21251302' => 12
    ,
    '21251363' => 12
    ,
    '20895143' => 13
    ,
    '20895144' => 13
    ,
    '20896265' => 14
    ,
    '20896684' => 14
    ,
    '21503551' => 14
    ,
    '21503568' => 14
    ,
    '21503584' => 14
    ,
    '21503602' => 14
    ,
    '21503618' => 14
    ,
    '20862880' => 15
    ,
    '20862985' => 15
    ,
    '20863075' => 15
    ,
    '20863158' => 15
    ,
    '20863249' => 15,
];

$brands_arr = [
    [  /* NORDBERG */
        'title'         => 'NORDBERG'
        ,
        'brandSmallImg' => 'img/nordberg_br.jpg'
        ,
        'brandBigImg'   => 'img/nordberg.jpg'
        ,
        'brandName'     => "NORDBERG",
    ]
    ,
    [  /* BEISSBARTH */
        'title'         => 'BEISSBARTH'
        ,
        'brandSmallImg' => 'img/Beissbarth_logo.png'
        ,
        'brandBigImg'   => 'img/BEISSBARTH.jpg'
        ,
        'brandName'     => "BEISSBARTH",
    ]
    ,
    [  /* BUTLER */
        'title'         => 'BUTLER'
        ,
        'brandSmallImg' => 'img/Butler-Engineering.jpg'
        ,
        'brandBigImg'   => 'img/BUTLER.jpg'
        ,
        'brandName'     => "BUTLER",
    ]
    ,
    [  /* GIULIANO */
        'title'         => 'GIULIANO'
        ,
        'brandSmallImg' => 'img/GIULIANO_brand.jpg'
        ,
        'brandBigImg'   => 'img/GIULIANO.jpg'
        ,
        'brandName'     => "GIULIANO",
    ]
    ,
    [  /* HOFMANN */
        'title'         => 'text5'
        ,
        'brandSmallImg' => 'img/HOFMANN-brend.jpg'
        ,
        'brandBigImg'   => 'img/HOFMANN.jpg'
        ,
        'brandName'     => "HOFMANN",
    ]
    ,
    [  /* HUNTER */
        'title'         => 'HUNTER'
        ,
        'brandSmallImg' => 'img/HUNTER-brend.jpg'
        ,
        'brandBigImg'   => 'img/HUNTER.jpg'
        ,
        'brandName'     => "HUNTER",
    ]
    ,
    [  /* JOHNBEAN */
        'title'         => 'JOHNBEAN'
        ,
        'brandSmallImg' => 'img/John_Bean_Logo.jpg'
        ,
        'brandBigImg'   => 'img/JohnBean.jpg'
        ,
        'brandName'     => "JOHNBEAN",
    ]
    ,
    [  /* MB */
        'title'         => 'MB'
        ,
        'brandSmallImg' => 'img/MB-brend.jpg'
        ,
        'brandBigImg'   => 'img/MB.jpg'
        ,
        'brandName'     => "MB",
    ]
    ,
    [  /*   SICAM */
        'title'         => 'SICAM'
        ,
        'brandSmallImg' => 'img/SICAM-brand.jpg'
        ,
        'brandBigImg'   => 'img/SICAM.jpg'
        ,
        'brandName'     => "SICAM",
    ]
    ,
    [  /*   SICE */
        'title'         => 'SICE'
        ,
        'brandSmallImg' => 'img/logo-sice.jpg'
        ,
        'brandBigImg'   => 'img/SICE.jpg'
        ,
        'brandName'     => "SICE",
    ]
    ,
    [  /*   TECO */
        'title'         => 'TECO'
        ,
        'brandSmallImg' => 'img/TECO-brand.png'
        ,
        'brandBigImg'   => 'img/TECO.jpg'
        ,
        'brandName'     => "TECO",
    ]
    ,
    [  /*     TROMMELBERG */
        'title'         => 'TROMMELBERG'
        ,
        'brandSmallImg' => 'img/Vector-Smart Object.png'
        ,
        'brandBigImg'   => 'Trommelberg_1810E.png'
        ,
        'brandName'     => "TROMMELBERG",
    ]
    ,
    [  /*     SIVIK */
        'title'         => 'SIVIK'
        ,
        'brandSmallImg' => 'img/SIVIK-brand.jpg'
        ,
        'brandBigImg'   => 'img/SIVIK.jpg'
        ,
        'brandName'     => "SIVIK",
    ]
    ,
    [  /*     AET */
        'title'         => 'AET'
        ,
        'brandSmallImg' => 'img/ae-and-t-brand.jpg'
        ,
        'brandBigImg'   => 'img/ae-and-t.jpg'
        ,
        'brandName'     => "AET",
    ]
    ,
    [  /*     RAVAGLIOLI */
        'title'         => 'RAVAGLIOLI'
        ,
        'brandSmallImg' => 'img/ravaglioli-brand.jpg'
        ,
        'brandBigImg'   => 'img/RAVAGLIOLI.jpg'
        ,
        'brandName'     => "RAVAGLIOLI",
    ]
    ,
    [  /*      AEandT */
        'title'         => 'AE&amp;T"'
        ,
        'brandSmallImg' => 'img/ae-and-t-brand.jpg'
        ,
        'brandBigImg'   => 'img/ae-and-t.jpg'
        ,
        'brandName'     => "AE&amp;T",
    ]
    ,
    [  /* def */
        'title'         => ' '
        ,
        'brandSmallImg' => ' '
        ,
        'brandBigImg'   => 'img/tree.jpg'
        ,
        'brandName'     => " "
        ,
        'displaynone'   => "&nbsp;none",
    ],
];

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
    <!-- Google Analytics Content Experiment code -->
    <script>
        function utmx_section() {
        }

        function utmx() {
        }

        (function () {
            var
                k = '142990637-1', d = document, l = d.location, c = d.cookie;
            if (l.search.indexOf('utm_expid=' + k) > 0) return;

            function f(n) {
                if (c) {
                    var i = c.indexOf(n + '=');
                    if (i > -1) {
                        var j = c.indexOf(';', i);
                        return escape(c.substring(i + n.length + 1, j < 0 ? c.length : j))
                    }
                }
            }

            var x = f('__utmx'), xx = f('__utmxx'), h = l.hash;
            d.write(
                '<sc' + 'ript src="' + 'http' + (l.protocol == 'https:' ? 's://ssl' :
                '://www') + '.google-analytics.com/ga_exp.js?' + 'utmxkey=' + k +
                '&utmx=' + (x ? x : '') + '&utmxx=' + (xx ? xx : '') + '&utmxtime=' + new Date().valueOf() + (h ? '&utmxhash=' + escape(h.substr(1)) : '') +
                '" type="text/javascript" charset="utf-8"><\/sc' + 'ript>')
        })();
    </script>
    <script>utmx('url', 'A/B');</script>
    <!-- End of Google Analytics Content Experiment code -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-83203428-2', 'auto');
        ga('send', 'pageview');

    </script>
    <meta charset="utf-8"/>
    <title>Центр Технического Оборудования <?php echo $brands_arr[$brand_id]["Title"]; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Продажа минитракторов и навесного оборудования.">
    <meta name="Keywords" content="Продажа минитракторов и навесного оборудования.">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" type="text/css" href="/libs/tooltipster/css/tooltipster.bundle.min.css" />

    <link href="https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/libs/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/css/main.css"/>
    <link rel="stylesheet" href="/css/media.css"/>

    <!--[if IE 9]>
    <link href="css/ie9.css" type="text/css" rel="stylesheet"/>
    <![endif]-->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter44830108 = new Ya.Metrika({
                        id: 44830108,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true,
                        webvisor: true
                    });
                } catch (e) {
                }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/44830108" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Pixel -->
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-145812-eF2uQ';</script>
    <!-- Pixel -->
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="logo" style="margin-top: 2%">
                    <img class="logo-img" src="img/logo.png" width="81" height="73" alt="Логотип">
                </div>
                <div class="header-logo-text" style="margin-top: 5%;">
                    <h1 style="margin-left: 175px; font-size: 17px;">Продажа минитракторов<br>с доставкой по России </h1>
						<span style="margin-left: 70px; font-size: 14px;">Центр Технического Оборудования</span>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
                <p style="font-size: 15px; padding-top: 32px;" >ОГРН 1134205022478 <br/> ИНН 4205274440</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6 header-city">
                <p class="city-p" style="font-size: 17px;line-height: 22px;">Москва</p>
                <a href="#openMenu" class="openMenu">город доставки</a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 header-phone-number" style="padding-right: 0">
                <p style="font-size: 17px;">8 800 234 3302</p>
                <a href="#openModal"> Звони! Поможем выбрать </a>
            </div>
        </div>
    </div>
</header>

<div class="wrap-top-menu" style="margin-top: 20px;">
    <div class="container">
        <div class="row top-menu">
            <div class="col-md-3 col-sm-3 col-xs-3 top-menu-item top-menu-item-1">
                <img src="img/top-menu-item-1.png" width="92" height="87" alt="С кабиной">
                <a href="#openModal2" onClick=CatNameChanger("на&nbsp;минитракторы&nbsp;с&nbsp;кабиной")> С кабиной</a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 top-menu-item top-menu-item-2">
                <img src="img/top-menu-item-2.png" width="85" alt="Без кабины">
                <a href="#openModal2" onClick=CatNameChanger("на&nbsp;минитракторы&nbsp;без&nbsp;кабины")> Без кабины</a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 top-menu-item top-menu-item-3">
                <img src="img/top-menu-item-3.png" width="92" alt="С навесом">
                <a href="#openModal2" onClick=CatNameChanger("на&nbsp;минитракторы&nbsp;с&nbsp;навесом")> С навесом</a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 top-menu-item top-menu-item-4">
                <img src="img/top-menu-item-4.png" width="85" alt="Навесное оборудование">
                <a href="#openModal2" onClick=CatNameChanger("на&nbsp;навесное&nbsp;оборудование")> Навесное оборудование</a>
            </div>
        </div>
    </div>
</div>


<div class="container section-1">
    <div class="row">
        <div class="col-md-12 section-title section-title-1">
            <h2>закажи <span>минитрактор</span><br><?php echo $brands_arr[$brand_id]["brandName"]; ?>&nbsp;<span>по цене завода</span> изготовителя с доставкой<span> от 2 до 14 дней с оптового склада</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-6 section-1-equipment">
            <div class="equipment-img">
                <img src="<?php echo $brands_arr[$brand_id]["brandBigImg"]; ?>" width="250" alt="Trommelberg 1810E" class="equipment-img-1">
            </div>
            <div class="equipment-brand<?php echo $brands_arr[$brand_id]["displaynone"]; ?>">
                <img src="<?php echo $brands_arr[$brand_id]["brandSmallImg"]; ?>" width="165" height="71" alt="" class="equipment-brand-img">
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 wrap-section-1-list">
            <div class="section-1-list">
                <ul>
                    <li class="list-1-item item-1-1"><img src="img/box.png" alt=""><span>Прямые поставки</span> с 15<br>заводов производителей</li>
                    <li class="list-1-item item-1-2"><img src="img/guarantee.png" alt=""><span>Гарантия</span> на всю технику<br/><span>до 1500 моточасов</span></li>
                    <li class="list-1-item item-1-3"><img src="img/ruble-currency-sign.png" alt=""><span>Лучшая цена</span></li>
                    <li class="list-1-item item-1-4"><img src="img/aeroplane.png" alt="">Доставка по всей России</li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 section-1-form">
            <div class="section-1-form-wrap">
                <h4>Узнай цены!<br>оставь заявку</h4>
                <form method="post" action="/sender/send.php" name="form" id="form_1" class="sform" onsubmit="yaCounter44830108.reachGoal('cel1'); return true;">
                    <input type="hidden" name="subject" value="Узнай цены! Оставь заявку">
                    <div class="wrap-input-name">
                        <input class="input-text input-name" type="text" name="name" placeholder="Имя">
                    </div>
                    <div class="wrap-input-telephone">
                        <input class="input-text input-phone phone-mask" id="inputf" type="tel" name="phone" placeholder="Телефон*" maxlength="18" required">
                    </div>
                    <div class="wrap-input-email">
                        <input class="input-text input-email" type="email" name="email" placeholder="Почта">
                    </div>

                    <div class="alert_on" id="phone_bottom"></div>
                    <div class="wrap-form-btn">
                        <input class="form-button form-1-btn" type="submit" name="full_catalog" value="Получи полный каталог">

                        <div class="compliance" style="font-size:9px; font-weight:300; margin-top:-5%;" >
							<input type="checkbox"  checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-right:5px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Получи полный каталог", вы даете согласие на обработку персональных данных</a></div>
                    </div>

                    <input type="hidden" name="typsh" value="минитрактор">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="wrap-section-string-form">
    <div class="container section-string-form">
    <div class="row">
            <div class="col-md-12 section-title section-title-2">
                <h2>Подберём <span>минитрактор</span> с комплектом навесного<br/><span>в 2 раза быстрее</span> конкурентов<br/><span>из 248 моделей в наличии</span></h2>
            </div>

        </div>
        <div class="row" id="kompressory">
            <div class="col-md-4 col-sm-3 col-xs-3 cat-img-3-box">
                <img src="img/image_cat_3.png" width="600" alt="" class="section-2-img img-left cat-img-3">
            </div>

            <div class="col-md-8 col-sm-9 col-xs-9 section-block-text block-text-1">
                <h3>Минитракторы без кабины<br>в наличии <span>58 моделей </span>от <span>125 900 рублей</span></h3>
                <p>Получи подробные характеристики, фотографии и цены на весь модельный<br>ряд минитракторов без кабины</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 catalog-wrap-1">
                <div class="form-catalog-wrap">
                    <div class="triangle-topright" style="display: none"></div>
                    <div class="form-catalog">
                        <form method="post" action="/sender/send.php" class="sform" id="form_4" onsubmit="yaCounter44830108.reachGoal('cel6'); return true;">
                            <p>оставь свое имя и телефон, чтобы получить каталог</p>
                            <input type="hidden" name="subject" value="Минитрактора. Оставьте ваши имя и телефон, чтобы получить каталог">
                            <input class="input-text input-name input-string-form string-form-name" type="text" name="name" placeholder="Имя">
                            <input class="input-text input-phone input-string-form phone-mask" type="text" id="inputf4" maxlength="16" name="phone" placeholder="Телефон*" required">
                            <input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
                            <div class="alert_on" id="phone_bottom_4"></div>
                            <div class="wrap-form-btn btn-position-right">
                                <input class="form-button form-2-btn" type="submit" name="catalog" value="Получить каталог">
                                <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:-5%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-right:5px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Получить каталог", вы даете согласие на обработку персональных данных</a></div> 
                            </div>
                            <input type="hidden" name="typsh" value="минитрактор">
                        </form>
                    </div>
                </div>
      
            </div>
        </div>
    </div>
</div>


<div class="container section-string-form">
    <div class="row" id="gruzovoy_shinomontazh">
        <div class="col-md-8 col-sm-9 col-xs-9 section-block-text block-text-1">
            <h3>Минитракторы с кабиной<br>в наличии<span> 31 модель</span> от <span>369 900 рублей</span></h3>
            <p>Получи подробные характеристики, фотографии и цены на весь модельный<br>ряд минитракторов с кабиной</p>
        </div>
        <div class="col-md-4 col-sm-3 col-xs-3 cat-img-2-box">
            <img src="img/image_cat_2.png" width="981" alt="" class="img-right cat-img-2">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 catalog-wrap-2">
            <div class="form-catalog-wrap">
                <div class="form-catalog-left">
                    <form method="post" action="/sender/send.php" class="sform" id="form_3" onsubmit="yaCounter44830108.reachGoal('cel5'); return true;">
                        <p>оставь свое имя и телефон, чтобы получить каталог</p>
                        <input type="hidden" name="subject" value="Минитрактора. Оставьте ваши имя и телефон, чтобы получить каталог">
                        <input class="input-text input-name input-string-form-left" type="text" name="name" placeholder="Имя">
                        <input class="input-text input-phone input-string-form phone-mask"  maxlength="18" type="text" name="phone" placeholder="Телефон*" required">
                        <input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
                        <div class="alert_on" id="phone_bottom_3"></div>
                        <div class="wrap-form-btn btn-position-center">
                            <input class="form-button form-2-btn" type="submit" name="catalog" value="Получить каталог">
                            <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:-5%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-right:5px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Получить каталог", вы даете согласие на обработку персональных данных</a></div> 
                        </div>
                        <input type="hidden" name="typsh" value="минитрактор">

                    </form>

                </div>
                <div class="triangle-topleft" style="display: none"></div>
            </div>
            
        </div>
    </div>
</div>

<div class="wrap-section-string-form">
    <div class="container section-string-form">
        <div class="row" id="legkovoy_shinomontazh">
            <div class="col-md-4 col-sm-3 col-xs-3 cat-img-1-box">
                <img src="img/image_cat_1.png" width="900" alt="" class="section-2-img img-left cat-img-1">
            </div>

            <div class="col-md-8 col-sm-9 col-xs-9 section-block-text block-text-1">
                <h3>Райдеры<br>для сельскохозяйственных работ<br><span>90 моделей</span> от <span>125 900 рублей</span></h3>
                <p>Получи подробные характеристики, фотографии и цены на весь модельный<br>ряд райдеров, садовых минитракторов для уборки снега</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 catalog-wrap-1">
                <div class="form-catalog-wrap">
                    <div class="triangle-topright" style="display: none;"></div>
                    <div class="form-catalog">
                        <form method="post" action="/sender/send.php" class="sform" id="form_2" onsubmit="yaCounter44830108.reachGoal('cel4'); return true;">
                            <p>оставь свое имя и телефон, чтобы получить каталог</p>
                            <div>
                                <input type="hidden" name="subject" value="Минитрактора. Оставьте ваши имя и телефон, чтобы получить каталог">
                                <input class="input-text input-name input-string-form string-form-name" type="text" name="name" placeholder="Имя">
                                <input class="input-text input-phone input-string-form phone-mask" id="inputf2" maxlength="18" type="text" name="phone" placeholder="Телефон*" required">
                                <input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
                            </div>
                            <div class="alert_on" id="phone_bottom_2"></div>
                            <div class="wrap-form-btn btn-position-right">


                                <input class="form-button form-2-btn" type="submit" name="catalog" value="Получить каталог">
                                 <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:-5%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-right:5px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Получить каталог", вы даете согласие на обработку персональных данных</a></div> 
                            </div>

                            <input type="hidden" name="typsh" value="минитрактор">

                        </form>


                    </div>
                </div>
                
            </div>

        </div>
    </div>
</div>


<div class="container section-string-form">
    <div class="row" id="domkraty">
        <div class="col-md-8 col-sm-8 col-xs-9 section-block-text block-text-1">
            <h3>Двигатели, запасные части на любые минитракторы<br>в наличии более <span>1700 наименований</span></h3>
            <p>Получи подробные характеристики, фотографии и цены на весь модельный ряд двигателей, запасных частей</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-3 cat-img-4-box">
            <img src="img/image_cat_5.png" width="600" alt="" class="img-right cat-img-4">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 catalog-wrap-2">
            <div class="form-catalog-wrap">
                <div class="form-catalog-left">
                    <form method="post" action="/sender/send.php" id="form_5" class="sform" onsubmit="yaCounter44830108.reachGoal('cel7'); return true;">
                        <p>оставь свое имя и телефон, чтобы получить каталог</p>
                        <input type="hidden" name="subject" value="Минитрактора. Оставьте ваши имя и телефон, чтобы получить каталог">
                        <input class="input-text input-name input-string-form-left" type="text" name="name" placeholder="Имя">
                        <input class="input-text input-phone input-string-form phone-mask" id="inputf5" maxlength="18" type="text" name="phone" placeholder="Телефон*" required">
                        <input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
                        <div class="alert_on" id="phone_bottom_5"></div>
                        <div class="wrap-form-btn btn-position-center">
                            <input class="form-button form-2-btn" type="submit" name="catalog" value="Получить каталог">
                            <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:-5%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-right:5px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Получить каталог", вы даете согласие на обработку персональных данных</a></div> 
                        </div>
                        <input type="hidden" name="typsh" value="минитрактор">
                    </form>
                </div>
                <div class="triangle-topleft" style="display: none"></div>
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
					<iframe src="https://player.vimeo.com/video/263286158" width="400" height="225" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 wrap-video-text">
					<div class="video-text-block line">
						<div class="angle-double-left">
							<img src="img/angle.png" width="70" alt="">
						</div>
						<h4>Андрей<br/>г. Тюмень</h4>
						<p>Минитрактор Митракс Т10 мы приобрели в компании «Центр технического оборудования». Фирму нашли через интернет, менеджер быстро связался с нами и помог сделать выбор. Техника новая, в работе показала себя хорошо, в дальнейшем будем сотрудничать с данной организацией и пользоваться ее услугами.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6  comment-wrap">
					<div class="comment">
						<p>Отзыв на оборудование</p>
						<ul>
							<li>Минитрактор<br/>Митракс Т10</li>
							<li>Лопата-отвал 1000<br/>для снега</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12 wrap-video-block">
					<div class="video-block">
						<iframe src="https://player.vimeo.com/video/263286190" width="400" height="225" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 wrap-video-text">
					<div class="video-text-block">
						<div class="angle-double-left">
							<img src="img/angle.png" width="70" alt="">
						</div>
						<h4>Антон Казаков<br/>г. Находка</h4>
						<p>Приобрел минитрактор в компании «Центр технического оборудования» для ведения фермерского хозяйства, также купил к нему почвофрезу. Технику доставили быстро и без повреждений, все оборудование работает исправно. Опробовал трактор перевозкой угля, доволен работой. Компания хорошая, рекомендую всем.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 comment-wrap">
					<div class="comment">
						<p>Отзыв<br/>на оборудование</p>
						<ul>
							<li>Минитрактор<br/>Уралец 220Б 4Х4</li>
							<li>Колеса<br/>11.2-20ГУР</li>
							<li>Почвофреза<br/>1GQN-120</li>
							<li>Кун с дополнительным насосом и гидробаком челюстной</li>
						</ul>
					</div>
				</div>
			</div>
            <div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12 wrap-video-block">
					<div class="video-block">
						<iframe src="https://player.vimeo.com/video/263286218" width="400" height="225" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 wrap-video-text">
					<div class="video-text-block">
						<div class="angle-double-left">
							<img src="img/angle.png" width="70" alt="">
						</div>
						<h4>Журавлев Владислав<br/>Краснодарский край станица Раздольное</h4>
						<p>У меня есть ТО, трактор приобретался в целях перевозить агрегаты, тягать машины. Нашел самый выгодный вариант в компании «Центр технического оборудования», менеджер помог определиться с моделью по необходимым характеристикам. Минитрактором я доволен, цена и качество очень хорошие.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 comment-wrap">
					<div class="comment">
						<p>Отзыв<br/>на оборудование</p>
						<ul>
                            <li>Минитрактор<br/>Файтер T-22</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
 <div class="container">
			<div class="row">
				<div class="col-md-12 section-title section-title-map">
					<h2>задайте вопросы нашим клиентам<br/><span>в своём городе</span> о скорости поставки<br/>и качестве минитракторов</h2>
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
				<div class="col-md-3 col-sm-3 col-xs-3 map-text"  style="margin-left:25%;">
					<p><span>116</span><br/>Городов поставок<br/>за 2017 г.</p>
				</div>
        
				
              <div class="col-md-3 col-sm-3 col-xs-3 map-text" style="margin-left 50px"  style="margin-left:25%;">
					<p><span>1226</span><br/>Единиц минитракторов в ассортименте</p>
				</div>
			</div>
			<div class="row ">
				<div class="map-container">
					<div id="map">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3ff63e44825cd234e8a64ed0024a53bde1e486a73894dcd3d17e58edb74e3dba&amp;width=1164&amp;height=469&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
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
                                    <img src="img/igor.jpg" width="363" alt="">
                                    <div class="name-manager">
                                        <span>Игорь Скворцов</span>
                                    </div>
                                </div>
                                <div class="slide sl-1">
                                    <img src="img/artur.jpg" width="363" alt="">
                                    <div class="name-manager">
                                        <span>Артур Артеев</span>
                                    </div>
                                </div>
                              <!--  <div class="slide sl-2">
                                    <img src="img/vasya.JPG" width="363" alt="">
                                    <div class="name-manager">
                                        <span>Василий Чепцов</span>
                                    </div>
                                </div>-->
                                <div class="slide sl-3">
                                    <img src="img/bolotnikov.jpg" width="363" height="404" alt="">
                                    <div class="name-manager">
                                        <span>Антон Болотников</span>
                                    </div>
                                </div>


                                <!--<div class="slide sl-4">
                                    <img src="img/shumakova.jpg" width="363" height="404" alt="">
                                    <div class="name-manager">
                                        <span>Кристина Шумакова</span>
                                    </div>
                                </div>-->
                                <div class="slide sl-5">
                                    <img src="img/ilya.jpg" width="363" alt="">
                                    <div class="name-manager">
                                        <span>Илья Онищенко</span>
                                    </div>
                                </div>
                                <div class="slide sl-6">
                                    <img src="img/koptelov.jpg" width="363" height="404" alt="">
                                    <div class="name-manager">
                                        <span>Сергей Коптелов</span>
                                    </div>
                                </div>
                                
                                <div class="slide sl-8">
                                    <img src="img/aleksandr.JPG" width="363" height="" alt="">
                                    <div class="name-manager">
                                        <span>Александр Панин</span>
                                    </div>
                                </div>
                              <div class="slide sl-8">
											<img src="img/elena.JPG" width="363" height="" alt="">
											<div class="name-manager">
											<span>Елена Любимова</span>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="wrap-form-call" style="height:475px;">
                    <p>позвони<i class="fa fa-phone fa-1x"></i><span> 8 800 234 3302</span></p>
                    <h4>или оставь заявку<br/><span>на звонок</span></h4>
                    <form method="post" action="/sender/send.php" id="form_12" class="sform" onsubmit="yaCounter44830108.reachGoal('cel16'); return true;">
                        <input type="hidden" name="subject" value="Заявка на звонок">
                        <div class="wrap-input-name-call">
                            <input class="input-text input-name input-call" type="text" name="name" placeholder="Имя">
                        </div>
                        <div class="wrap-input-telephone-call">
                            <input class="input-text input-phone input-call phone-mask" id="inputf9" maxlength="18" type="text" name="phone" placeholder="Телефон*" required">
                        </div>
                        <div class="alert_on alert_on_bg_white" id="phone_bottom_9"></div>
                        <div class="wrap-form-btn-call">
                            <input class="form-button form-1-btn btn-color-2 btn-call" type="submit" name="call" value="перезвонить">
                        </div>
                        <div class="call-form-small-text" style="bottom:13%;">
                            за 5 минут
                        </div>
                        <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:-5%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-right:5px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Перезвонить", вы даете согласие на обработку персональных данных</a></div> 


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  

<div class="wrap-section-certificate">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title section-title-certificate">
                <h2><span>Прямые поставки</span> минитракторов<span>&nbsp;<?php echo $brands_arr[$brand_id]["brandName"]; ?></span><br><span>с завода</span> производителя</h2>
                <p>«центр технического оборудования» — <span>официальный дилер 15 заводов</span></p>
            </div>
        </div>

                <div class="row brand-string">
            <div class="col-md-2 col-sm-2 col-xs-2 col-md-offset-1">
                <div class="brand-img">
                   <a href="#openModal_3" onClick=CatNameChanger3("авант")><img src="img/brand_img_1.png" width="145" class="brand-img-1" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <div class="brand-img">
                    <a href="#openModal_3" onClick=CatNameChanger3("branson")><img src="img/brand_img_2.png" class="brand-img-1" width="145;" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <div class="brand-img">
                    <a href="#openModal_3" onClick=CatNameChanger3("bulat")><img src="img/brand_img_3.png" class="brand-img-3" width="145" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <div class="brand-img">
                    <a href="#openModal_3" onClick=CatNameChanger3("jinma")><img src="img/brand_img_4.png" class="brand-img-4" width="145" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <div class="brand-img">
                    <a href="#openModal_3" onClick=CatNameChanger3("dongfeng")><img src="img/brand_img_5.png" class="brand-img-5" width="145" alt=""></a>
                </div>
            </div>

        </div>
        <div class="row brand-string-1">
            <div class="col-md-2 col-sm-2 col-xs-2 col-md-offset-1">
                <div class="brand-img">
                    <a href="#openModal_3" onClick=CatNameChanger3("mitsubishi")><img src="img/brand_img_6.png" class="brand-img-5" width="145" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <div class="brand-img">
                    <a href="#openModal_3" onClick=CatNameChanger3("русич")><img src="img/brand_img_7.png" width="145" class="brand-img-1" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <div class="brand-img">
                    <a href="#openModal_3" onClick=CatNameChanger3("скаут")><img src="img/brand_img_8.png" class="brand-img-1" width="145" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <div class="brand-img">
                    <a href="#openModal_3" onClick=CatNameChanger3("уралец")><img src="img/brand_img_9.png" class="brand-img-3" width="145" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <div class="brand-img">
                    <a href="#openModal_3" onClick=CatNameChanger3("fighter")><img src="img/brand_img_10.png" class="brand-img-4" width="145" alt=""></a>
                </div>
            </div>


        </div>
        <div class="row brand-string-2" style="margin-top:55px;">
            <div class="col-md-2 col-sm-2 col-xs-2 col-md-offset-1">
                <div class="brand-img">
                    <a href="#openModal_3" onClick=CatNameChanger3("foton")><img src="img/brand_img_11.png" class="brand-img-5" width="145" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <div class="brand-img">
                    <a href="#openModal_3" onClick=CatNameChanger3("xingtai")><img src="img/brand_img_12.png" class="brand-img-5" width="145" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 ">
                <div class="brand-img">
                    <a href="#openModal_3" onClick=CatNameChanger3("chery")><img src="img/brand_img_13.png" class="brand-img-4" width="145" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                <div class="brand-img">
                    <a href="#openModal_3" onClick=CatNameChanger3("чувашпиллер")><img src="img/brand_img_14.png" class="brand-img-5" width="145" alt=""></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                <div class="brand-img">
                    <a href="#openModal_3" onClick=CatNameChanger3("shifeng")><img src="img/brand_img_15.png" class="brand-img-5" width="145" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrap-section-price">
    <div class="container">
        <div class="row">
            <div class="wrap-form-price">
                <form method="post" action="/sender/send.php" id="form_6" class="sform" onsubmit="yaCounter44830108.reachGoal('cel8'); return true;">
                    <h4>получи <span>общий прайс-лист</span> на минитракторы<br>
                        <?php echo $brands_arr[$brand_id]["brandName"]; ?>&nbsp; <span>с ценами производителя</span></h4>
                    <p style="font-size:20px;">введи данные и мы отправим прайс-лист</p>
                    <input type="hidden" name="subject" value="Получи общий прайс-лист на оборудование&nbsp;<?php echo $brands_arr[$brand_id]["brandName"]; ?>">
                    <div class="wrap-input-name-price">
                        <input class="input-text input-name input-price" type="text" name="name" placeholder="Имя">
                    </div>
                    <div class="wrap-input-telephone-price">
                        <input class="input-text input-phone input-price phone-mask" id="inputf7" maxlength="18" type="text" name="phone" placeholder="Телефон*" required">
                    </div>
                    <div class="wrap-input-email-price">
                        <input class="input-text input-email input-price" type="email" name="email" placeholder="Почта">
                    </div>
                    <div class="alert_on alert_on_bg_white" id="phone_bottom_7"></div>
                    <div class="wrap-form-btn-price">
                        <input class="form-button form-1-btn btn-price" type="submit" name="price" value="получить прайс-лист">
                        <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:-5%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-right:5px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Получить прайс лист", вы даете согласие на обработку персональных данных</a></div> 
                    </div>
                    <input type="hidden" name="typsh" value="минитрактор">
                </form>
        
            </div>
        </div>
    </div>
</div>

<!--<div class="container section-string-form">
    <div class="row">
        <div class="col-md-12 section-title section-title-2">
            <h2><span>ЛИДЕР ПРОДАЖ</span></h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="img/lider.png" width="50%" style="margin-left: 285px;" style="text-align:center;">
            </div>
        </div>


        <h4><p style="text-align:center; font-size:25px;">МИНИТРАКТОР "JINMA 244KPL" + ЩЕТКА НАВЕСНАЯ</p></h4>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <div class="form-catalog-wrap" style="margin-bottom:10%">
                <div class="form-catalog-left" style="background:#fe475a">
                    <form method="post" action="/sender/send.php" class="sform" id="form_7" onsubmit="yaCounter44830108.reachGoal('cel10'); return true;"><span style="font-size:24px; color:yellow; text-transform:uppercase; font-weight:700; margin-left:20%;">Узнайте ваше акционное предложение у менеджера</span><strong><span style="font-size:35px; color:yellow;"></span>

                        <p style="margin-top:-5px">оставь свое имя и телефон, чтобы получить комплект по специальной цене <span style="font-size:35px;"></span></p>
                        <input type="hidden" name="subject" value="минитрактор">
                        <input class="input-text input-name input-string-form-left" type="text" name="name" placeholder="Имя">
                        <input class="input-text input-phone input-string-form phone-mask"  maxlength="18" type="text" name="phone" placeholder="Телефон*" required">
                        <input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
                        <div class="alert_on" id="phone_bottom_3"></div>
                        <span style="font-size:19px; color:yellow; text-transform:uppercase; font-weight:700; margin-left:5%;"></span><strong><span style="font-size:35px; color:yellow;"></span></strong><br>
                        <div class="alert_on" id="phone_bottom_3"></div>

                        <div class="wrap-form-btn btn-position-center2">
                            <input class="form-button form-2-btn" type="submit" name="catalog" value="Получить">


                        </div>
                        <input type="hidden" name="typsh" value="минитрактор">

                    </form>

                </div>

                <br>
                <br>
                <br>

            </div>
            <div class="compliance" style="text-align:right; margin-top:-12%; margin-bottom:5%; font-size:9px; font-weight:300;"><a href="#openModal3" target="_self" style="color:#D3D3D3; text-decoration: underline;">Нажимая кнопку, вы даете согласие на обработку персональных данных</a></div>

        </div>
    </div>
</div>-->

  <div class="container section-string-form">
    <div class="row">
        <h4><p style="text-align:center; font-size:35px; margin: 20px 0;">ПРИ ПОКУПКЕ В <span style="color: #fe475a;">ДЕНЬ ОБРАЩЕНИЯ</span> СКИДКА 3% НА МИНИТРАКТОРЫ*</p></h4>
    </div>
    <div class="row" style="position: relative;">
        <img src="img/3procenta.png" width="150px" height="150px" style="position: absolute; left: -45px; top: -55px; z-index: 1; transform: rotate(335deg)">
        <div class="col-md-12 ">
            <div class="form-catalog-wrap" style="margin-bottom:10%">
                <div class="form-catalog-left" style="background:#fe475a">
                    <form method="post" action="/sender/send.php" class="sform" id="form_8" onsubmit="yaCounter44830108.reachGoal('cel22'); return true;"><span style="font-size:24px; color:yellow; text-transform:uppercase; font-weight:700; margin-left:28%;">*Подробности уточняйте у менеджера</span><strong><span style="font-size:35px; color:yellow;"></span>

                        <p style="margin-top:-5px">оставь свое имя и телефон, чтобы получить комплект по специальной цене <span style="font-size:35px;"></span></p>
                        <input type="hidden" name="subject" value="минитрактор">
                        <input class="input-text input-name input-string-form-left" type="text" name="name" placeholder="Имя">
                        <input class="input-text input-phone input-string-form phone-mask"  maxlength="18" type="text" name="phone" placeholder="Телефон*" required">
                        <input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
                        <div class="alert_on" id="phone_bottom_3"></div>
                        <span style="font-size:19px; color:yellow; text-transform:uppercase; font-weight:700; margin-left:5%;"></span><strong><span style="font-size:35px; color:yellow;"></span></strong><br>
                        <div class="alert_on" id="phone_bottom_3"></div>

                        <div class="wrap-form-btn btn-position-center2">
                            <input class="form-button form-2-btn" type="submit" name="catalog" value="Получить">
                            <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:-10%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-left:-30px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Получить", вы даете согласие на обработку персональных данных</a></div> 

                        </div>
                        <input type="hidden" name="typsh" value="минитрактор">

                    </form>

                </div>
                <br>
                <br>
                <br>
            </div>
           
        </div>
    </div>
</div>




<div class="container section-string-form">
    <div class="row">
        <div class="col-md-12 section-title section-title-2">
            <h2><font color="#B11618">Акция на минитрактор<br> с клиноременной передачей</font></h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="img/medium.jpg" width="28%" style="margin-left: 395px;" style="text-align:center;">
            </div>
        </div>


        <h4><p style="text-align:center; font-size:25px;">ПРЕДПРОДАЖНАЯ ПОДГОТОВКА + КОМПЛЕКТ ТО</p></h4>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <div class="form-catalog-wrap" style="margin-bottom:10%">
                <div class="form-catalog-left" style="background:#fe475a">
                    <form method="post" action="/sender/send.php" class="sform" id="form_9" onsubmit="yaCounter44830108.reachGoal('cel11'); return true;"><span style="font-size:24px; color:yellow; text-transform:uppercase; font-weight:700; margin-left:20%;">Узнайте ваше акционное предложение у менеджера</span><strong><span style="font-size:35px; color:yellow;"></span>
                        <p style="margin-top:-5px">оставь свое имя и телефон, чтобы получить комплект по специальной цене <span style="font-size:35px;"></span></p>
                        <input type="hidden" name="subject" value="Минитрактора. Оставьте ваши имя и телефон, чтобы получить каталог">
                        <input class="input-text input-name input-string-form-left" type="text" name="name" placeholder="Имя">
                        <input class="input-text input-phone input-string-form phone-mask"  maxlength="18" type="text" name="phone" placeholder="Телефон*" required">
                        <input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
                        <span style="font-size:19px; color:yellow; text-transform:uppercase; font-weight:700; margin-left:5%;"></span><span style="font-size:35px; color:yellow;"><strong></strong></span><br>
                        <div class="alert_on" id="phone_bottom_3"></div>

                        <div class="wrap-form-btn btn-position-center2">
                            <input class="form-button form-2-btn" type="submit" name="catalog" value="Получить">
                            <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:-10%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-left:-30px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Получить", вы даете согласие на обработку персональных данных</a></div> 

                        </div>
                        <input type="hidden" name="typsh" value="минитрактор">

                    </form>

                </div>
                <br>
                <br>
                <br>
            </div>
            
        </div>
    </div>
</div>


<div class="container section-string-form">
    <div class="row">
        <div class="col-md-12 section-title section-title-2">
            <h2><font color="#B11618">комплект "уралец с почвофрезой"</font></h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="img/premium.png" width="65%" style="margin-left: 175px;" style="text-align:center;">
            </div>
        </div>


        <h4><p style="text-align:center; font-size:25px;">МИНИТРАКТОР "УРАЛЕЦ 220Б 4х4" + ПОЧВОФРЕЗА 1GQN-120</p></h4>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <div class="form-catalog-wrap" style="margin-bottom:10%">
                <div class="form-catalog-left" style="background:#fe475a">
                    <form method="post" action="/sender/send.php" class="sform" id="form_10" onsubmit="yaCounter44830108.reachGoal('cel12'); return true;">
                    <span style="font-size:24px; color:yellow; text-transform:uppercase; font-weight:700; margin-left:20%;">Узнайте ваше акционное предложение у менеджера</span><strong><span style="font-size:35px; color:yellow;"></span> 

                        <p style="margin-top:-5px">оставь свое имя и телефон, чтобы получить комплект по специальной цене <span style="font-size:35px;"></span></p>
                        <input type="hidden" name="subject" value="Минитрактора. Оставьте ваши имя и телефон, чтобы получить каталог">
                        <input class="input-text input-name input-string-form-left" type="text" name="name" placeholder="Имя">
                        <input class="input-text input-phone input-string-form phone-mask"  maxlength="18" type="text" name="phone" placeholder="Телефон*" required">
                        <input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
                        <span style="font-size:19px; color:yellow; text-transform:uppercase; font-weight:700; margin-left:5%;"></span><span style="font-size:35px; color:yellow;"><strong></strong></span><br>
                        <div class="alert_on" id="phone_bottom_3"></div>

                        <div class="wrap-form-btn btn-position-center2">
                            <input class="form-button form-2-btn" type="submit" name="catalog" value="Получить">
                            <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:-10%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-left:-30px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Получить", вы даете согласие на обработку персональных данных</a></div> 


                        </div>
                        <input type="hidden" name="typsh" value="минитрактор">

                    </form>

                </div>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>

<div class="container section-string-form">
    <div class="row">
        <div class="col-md-12 section-title section-title-2">
            <h2><font color="#B11618">Акция на навесное оборудование</font></h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="img/vip.png" width="37%" style="margin-left: 305px;" style="text-align:center;">
            </div>
        </div>


        <h4><p style="text-align:center; font-size:25px;">ПРИ ПОКУПКЕ МИНИТРАКТОРА - НАВЕСНОЕ ОБОРУДОВАНИЕ ПО ОПТОВОЙ ЦЕНЕ</p></h4>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <div class="form-catalog-wrap" style="margin-bottom:10%">
                <div class="form-catalog-left" style="background:#fe475a">
                    <form method="post" action="/sender/send.php" class="sform" id="form_11" onsubmit="yaCounter44830108.reachGoal('cel13'); return true;">
                    <span style="font-size:24px; color:yellow; text-transform:uppercase; font-weight:700; margin-left:20%;">Узнайте ваше акционное предложение у менеджера</span><strong><span style="font-size:35px; color:yellow;"></span> 

                        <p style="margin-top:-5px">оставь свое имя и телефон, чтобы получить комплект по специальной цене <span style="font-size:35px;"> </span></p>
                        <input type="hidden" name="subject" value="Минитрактора. Оставьте ваши имя и телефон, чтобы получить каталог">
                        <input class="input-text input-name input-string-form-left" type="text" name="name" placeholder="Имя">
                        <input class="input-text input-phone input-string-form phone-mask"  maxlength="18" type="text" name="phone" placeholder="Телефон*" required">
                        <input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
                        <span style="font-size:19px; color:yellow; text-transform:uppercase; font-weight:700; margin-left:5%;"></span><span style="font-size:35px; color:yellow;"><strong></strong></span><br>
                        <div class="alert_on" id="phone_bottom_3"></div>

                        <div class="wrap-form-btn btn-position-center2">
                            <input class="form-button form-2-btn" type="submit" name="catalog" value="Получить">
                            <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:-10%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-left:-30px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Получить", вы даете согласие на обработку персональных данных</a></div> 


                        </div>
                        <input type="hidden" name="typsh" value="минитрактор">

                    </form>

                </div>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>

<div class="container section-string-form">
    <div class="row">
        <div class="col-md-12 section-title section-title-2">
            <h2><font color="#B11618">комплект "скаут с плугом"</font></h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="img/econom.png" width="73%" style="margin-left: 145px;" style="text-align:center;">
            </div>
        </div>


        <h4><p style="text-align:center; font-size:25px;">МИНИТРАКТОР "СКАУТ" + ПЛУГ СО СКИДКОЙ 50%</p></h4>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <div class="form-catalog-wrap" style="margin-bottom:10%">
                <div class="form-catalog-left" style="background:#fe475a">
                    <form method="post" action="/sender/send.php" class="sform" id="form_8" onsubmit="yaCounter44830108.reachGoal('cel10'); return true;">
                    <span style="font-size:24px; color:yellow; text-transform:uppercase; font-weight:700; margin-left:20%;">Узнайте ваше акционное предложение у менеджера</span><strong><span style="font-size:35px; color:yellow;"></span> 

                        <p style="margin-top:-5px">оставь свое имя и телефон, чтобы получить комплект по специальной цене <span style="font-size:35px;"></span></p>
                        <input type="hidden" name="subject" value="минитрактор">
                        <input class="input-text input-name input-string-form-left" type="text" name="name" placeholder="Имя">
                        <input class="input-text input-phone input-string-form phone-mask"  maxlength="18" type="text" name="phone" placeholder="Телефон*" required">
                        <input class="input-text input-email input-string-form input-string-form-3" type="email" name="email" placeholder="Почта">
                        <div class="alert_on" id="phone_bottom_3"></div>
                        <span style="font-size:19px; color:yellow; text-transform:uppercase; font-weight:700; margin-left:5%;"></span><strong><span style="font-size:35px; color:yellow;"></span></strong><br>
                        <div class="alert_on" id="phone_bottom_3"></div>

                        <div class="wrap-form-btn btn-position-center2">
                            <input class="form-button form-2-btn" type="submit" name="catalog" value="Получить">
                            <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:-10%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-left:-30px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Получить", вы даете согласие на обработку персональных данных</a></div> 


                        </div>
                        <input type="hidden" name="typsh" value="минитрактор">

                    </form>

                </div>
                <br>
                <br>
                <br>
            </div>

        </div>
    </div>
</div>


<div class="container no-padding">
    <div class="row">
        <div class="col-md-12 section-title delivery-title">
            <h2>поставляем только <span>сертифицированные</span><br><span>минитракторы</span> со сроком эксплуатации от 4 до 7 лет<br/></h2>
        </div>
    </div>

    <div class="row brand-string" style="margin-top:0">
        <div class="col-md-4 col-sm-4 col-xs-4">
            <div class="brand-img">
                <a href="#openModal_2" onClick=CatNameChanger2("минитракторов")><img src="img/prodN-img-1.png" width="250" class="prodN-img" alt=""></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
            <div class="brand-img">
                <a href="#openModal_2" onClick=CatNameChanger2("минитракторов")><img src="img/prodN-img-2.png" class="prodN-img" width="250" alt=""></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
            <div class="brand-img">
                <a href="#openModal_2" onClick=CatNameChanger2("минитракторов")><img src="img/prodN-img-3.png" class="prodN-img" width="250" alt=""></a>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom:5%">
        <div class="col-md-4 col-sm-4 col-xs-4">
            <div class="brand-img">
                <a href="#openModal_2" onClick=CatNameChanger2("минитракторов")><img src="img/prodN-img-4.png" width="250" class="prodN-img" alt=""></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
            <div class="brand-img">
                <a href="#openModal_2" onClick=CatNameChanger2("минитракторов")><img src="img/prodN-img-5.png" class="prodN-img" width="250" alt=""></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
            <div class="brand-img">
                <a href="#openModal_2" onClick=CatNameChanger2("минитракторов")><img src="img/prodN-img-6.png" class="prodN-img" width="250" alt=""></a>
            </div>
        </div>
    </div>
</div>


<div class="wrap-contract">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="contract">
                    <img src="img/contract.png" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="contract-text">
                    <p>Отгружаем минитракторы только по официальному договору поставки</p></div>

                <div class="contract-text"><p>Заполняем паспорт самоходной машины (псм)</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="contract">
                    <img src="img/contract2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrap-section-price">
    <div class="container">
        <div class="row">
            <div class="wrap-form-credit">
                <form method="post" action="/sender/send.php" class="sform" id="form_13" onsubmit="yaCounter44830108.reachGoal('cel15'); return true;">
                    <h4>хочешь купить в кредит?<br/></h4>
                    <p>Сделаем рассчет суммы кредита и отправим <span>прайс лист</span></p>
                    <input type="hidden" name="subject" value="Отправьте заявку на расчёт суммы кредита">
                    <div class="wrap-input-name-credit">
                        <input class="input-text input-name-crd input-price input-credit" type="text" name="name" placeholder="Имя">
                    </div>
                    <div class="wrap-input-telephone-credit">
                        <input class="input-text input-phone-crd input-price input-credit phone-mask" id="inputf10" maxlength="18" type="text" name="phone" placeholder="Телефон*" required">
                    </div>
                    <div class="wrap-form-btn-credit">
                        <input class="form-button form-1-btn btn-credit" type="submit" name="price" value="Купить в кредит">
                    </div>
                    <div class="alert_on" id="phone_bottom_10"></div>
                    <input type="hidden" name="typsh" value="минитрактор">
                    <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:1%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-right:5px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Купить в кредит", вы даете согласие на обработку персональных данных</a></div> 
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container" style="text-align:center;">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6 footer-info">
            <p>Партнеры по кредитованию:
            <div class="row brand-string">
                <div class="col-md-3 col-sm-2 col-xs-2 col-md-offset-1">
                    <div class="brand-img">
                        <img src="img/bank1.jpg" width="145" class="brand-img-1" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2">
                    <div class="brand-img">
                        <img src="img/bank2.jpg" class="brand-img-1" width="145;" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2">
                    <div class="brand-img">
                        <img src="img/bank7.jpg" class="brand-img-7" width="145" alt="">
                    </div>
                </div>


            </div>
            <div class="row brand-string">
                <div class="col-md-3 col-sm-2 col-xs-2 col-md-offset-1">
                    <div class="brand-img">
                        <img src="img/bank4.jpg" width="145" class="brand-img-1" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2">
                    <div class="brand-img">
                        <img src="img/bank5.jpg" class="brand-img-1" width="145;" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2">
                    <div class="brand-img">
                        <img src="img/bank6.jpg" class="brand-img-3" width="145" alt="">
                    </div>
                </div>


            </div>
            <div class="row brand-string">
                <div class="col-md-3 col-sm-2 col-xs-2 col-md-offset-1">
                    <div class="brand-img">
                        <img width="145" class="brand-img-1" alt="">
                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 footer-info">
            <p>Партнеры по лизингу:
            </p>
            <div class="row brand-string">
                <div class="col-md-3 col-sm-2 col-xs-2 col-md-offset-1 ">
                    <div class="brand-img">
                        <img src="img/liz1.jpg" width="145" class="brand-img-1" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2">
                    <div class="brand-img">
                        <img src="img/liz2.jpg" class="brand-img-1" width="145;" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2">
                    <div class="brand-img">
                        <img src="img/liz3.png" class="brand-img-3" width="145" alt="">
                    </div>
                </div>


            </div>
            <div class="row brand-string">
                <div class="col-md-3 col-sm-2 col-xs-2 col-md-offset-1">
                    <div class="brand-img">
                        <img src="img/liz4.jpg" width="145" class="brand-img-1" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2">
                    <div class="brand-img">
                        <img src="img/liz5.jpg" class="brand-img-1" width="145;" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-2">
                    <div class="brand-img">
                        <img src="img/liz6.png" class="brand-img-3" width="145" alt="">
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>

<div class="wrap-section-price-2">
    <div class="container">
        <div class="row">

            <div class="wrap-form-price wrap-form-price-2">
                <form method="post" action="/sender/send.php" id="form_14" class="sform" onsubmit="yaCounter44830108.reachGoal('cel17'); return true;">
                    <h4>получи <span>общий прайс-лист</span> на минитракторы<br>
                        <?php echo $brands_arr[$brand_id]["brandName"]; ?>&nbsp;<span>с ценами производителя</span></h4>
                    <input type="hidden" name="subject" value="Получи общий прайс-лист на оборудование<?php echo $brands_arr[$brand_id]["brandName"]; ?>&nbsp; на минитракторы">
                    <div class="wrap-input-name-price">
                        <input class="input-text input-name input-price" type="text" name="name" placeholder="Имя">
                    </div>
                    <div class="wrap-input-telephone-price">
                        <input class="input-text input-phone input-price phone-mask" id="inputf11" maxlength="18" type="text" name="phone" placeholder="Телефон*" required">
                    </div>
                    <div class="wrap-input-email-price">
                        <input class="input-text input-email input-price" type="email" name="email" placeholder="Почта">
                    </div>
                    <div class="alert_on" id="phone_bottom_11"></div>
                    <div class="wrap-form-btn-price">
                        <input class="form-button form-1-btn btn-price-2" type="submit" name="price" value="получить прайс-лист">
                    </div>
                    <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:1%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-right:5px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Получить прайс-лист", вы даете согласие на обработку персональных данных</a></div> 
                </form>
                <input type="hidden" name="typsh" value="минитрактор">
            </div>
        </div>
    </div>
</div>
<div class="wrap-section-price">
    <div class="container">
        <div class="row">
            <div class="wrap-form-credit">
                <form method="post" action="/sender/send.php" class="sform" id="form_15" onsubmit="yaCounter44830108.reachGoal('cel19'); return true;">
                    <h4>Получи акционное предложение по<br> <span> навесному оборудованию</span></h4>
                    <p></p>
                    <input type="hidden" name="subject" value="Акционное предложение по навесному оборудованию">
                    <div class="wrap-input-name-credit">
                        <input class="input-text input-name-crd input-price input-credit" type="text" name="name" placeholder="Имя">
                    </div>
                    <div class="wrap-input-telephone-credit">
                        <input class="input-text input-phone-crd input-price input-credit phone-mask" id="inputf10" maxlength="18" type="text" name="phone" placeholder="Телефон*" required">
                    </div>
                    <div class="wrap-form-btn-credit">
                        <input class="form-button form-1-btn btn-credit" type="submit" name="price" value="Получить">
                    </div>
                    <div class="alert_on" id="phone_bottom_10"></div>
                    <input type="hidden" name="typsh" value="минитрактор">
                    <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:1%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-right:5px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Получить", вы даете согласие на обработку персональных данных</a></div> </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 footer-info">
                <p>Центр технического оборудования<br/><span>Подбор и продажа минитракторов<br/>с доставкой по всей России</span>
                </p>
                <p>ОГРН 1134205022478  ИНН 4205274440</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="footer-phone">
                    <span>8 800 234 3302</span>
                    <p>звонок по России бесплатный</p>
                </div>
                <div class="footer-form-call">
                    <a href="#openModal_call" class="button form-button callback-btn">заказать обратный звонок</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
</footer>
<section class="autor-wrap" style="background: #dbdbdb;padding: 10px 0;">
    <div class="container">

        <div style="text-align:center;"><a href="#openModal4" target="_self" style="color:black; font-size:14px;">Политика конфиденциальности</a></div>
    </div>
</section>

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


<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close"><span></span></a>
        <div class="modal-box">
            <h4>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
            <form method="post" action="/sender/send.php" id="form_16" class="sform" onsubmit="yaCounter44830108.reachGoal('cel1'); return true;">
                <input type="hidden" id="ya-city" value="">
                <input type="hidden" name="subject" value="Оставьте имя и телефон и с вами свяжется старший менеджер">
                <div class="wrap-input-name-price">
                    <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
                </div>
                <div class="wrap-input-telephone-price">
                    <input class="input-text input-modal phone-mask" id="inputf12" maxlength="18" type="text" name="phone" placeholder="Ваш телефон*" required">
                </div>
                <div class="alert_on alert_on_modal" id="phone_bottom_12"></div>
                <div class="wrapper-button">
                    <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit" value="Перезвонить мне">
                   <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:-5%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-right:5px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Перезвонить мне", вы даете согласие на обработку персональных данных</a></div> 
                </div>
                <input type="hidden" name="typsh" value="минитрактор">
            </form>
        </div>
    </div>
</div>

<div id="openModal2" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close"><span></span></a>
        <div class="modal-box">
            <h4>Оставь имя и телефон<br/>и получи каталог <span id="catalogName"></span></h4>
            <form method="post" action="/sender/send.php" id="form_17" class="sform" onsubmit="yaCounter44830108.reachGoal('cel2'); return true;">
                <input type="hidden" id="ya-city" value="">
                <input type="hidden" name="subject" value="Оставьте имя и телефон и получите каталог">
                <input type="hidden" name="catName" id="cNameId" value="">
                <div class="wrap-input-name-price">
                    <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
                </div>
                <div class="wrap-input-telephone-price">
                    <input class="input-text input-modal phone-mask" id="inputf13" maxlength="18" type="text" name="phone" placeholder="Ваш телефон" required">
                </div>
                <div class="alert_on alert_on_modal" id="phone_bottom_13"></div>
                <div class="wrapper-button">
                    <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit" value="Скачать каталог">
                   <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:-5%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-right:5px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Скачать каталог", вы даете согласие на обработку персональных данных</a></div> 
                </div>

                <input type="hidden" name="typsh" value="минитрактор">
            </form>
        </div>
    </div>
</div>

<div id="openModal3" class="modalDialog2">
    <div>
        <a href="#close" title="Close" class="close"><span></span></a>
        <div class="modal-box">
            <div class="prokrutka">
                <div class="otstup">
                    <h1>Согласие пользователя сайта на обработку персональных данных</h1>
                    <br>
                    <h2>ФЗ «О персональных данных» от 27.07.2006 N 152-ФЗ регламентирует, что согласие на обработку персональных данных может быть дано гражданином или его представителем в любой позволяющей подтвердить факт его получения форме, если иное не установлено федеральным законом. В случае, если наличие письменного согласия в силу закона не обязательно, гражданин может выразить свое согласие на обработку персональных данных любым способом, в частности проставлением отметки в электронном
                        виде.</h2>
                    <h2>Действуя свободно, своей волей и в своем интересе, а также подтверждая свою дееспособность, я
                        (далее – Пользователь) даю свое согласие ООО «Центр технического оборудования» (далее –
                        Компания) (ИНН 4205274440), которое расположено по адресу 650000, г. Кемерово, пр.
                        Притомский, д. 7/1, на обработку своих персональных данных, включая страницы, расположенные
                        на его поддоменах (далее – Сайт) в соответствии со следующим перечнем:</h2></div>
                <h3>• фамилия, имя, отчество физического лица и/или индивидуального предпринимателя, занимаемая
                    должность, адрес электронной почты,<br>контактный телефон, адрес местонахождения;
                    <br>• источник
                    захода на Сайт и информация поискового или рекламного запроса;
                    <br>• данные о пользовательском устройстве (среди которых разрешение, версия и другие атрибуты,
                    характеризующие пользовательское устройство);
                    <br>• пользовательские клики, просмотры страниц, заполнения полей, показы и просмотры баннеров и
                    видео;
                    <br>• данные, характеризующие аудиторные сегменты;
                    <br>• параметры сессии;
                    <br>• данные о времени посещения;
                    <br>• информация, хранимая в cookie,
                    <br>• IP адрес;
                    <br>• другие данные, предоставляемые Пользователем по собственной инициативе.</h3></p>
                <div class="otstup">
                    <h2>Для целей повышения осведомленности пользователей Сайта о товарах/работах/услугах
                        Компании, предоставления релевантной рекламной информации, оптимизации рекламы, оказания
                        информационной поддержки, консультирования, проведения маркетинговых кампаний (в т.ч.
                        email-рассылок и SMS- уведомлений о новостях и акциях и т.п.), отправки уведомлений о статусах
                        обращений, заявок, заказов, а также в иных случаях использования Сайта пользователями.
                        Персональные данные не являются общедоступными. Основанием для обработки персональных
                        данных является: ст. 24 Конституции Российской Федерации; ст.6 Федерального закона №152-ФЗ
                        «О персональных данных»; Устав ООО «Центр технического оборудования»; настоящее согласие
                        на обработку персональных данных. В ходе обработки с персональными данными будут
                        совершены следующие действия: сбор; запись; систематизация; накопление; хранение; уточнение
                        (обновление, изменение); извлечение; использование; передача (распространение, предоставление,
                        доступ); блокирование; удаление; уничтожение. Настоящее согласие действует до дня его отзыва
                        Пользователем в письменной форме. Данное согласие может быть отозвано путем направления
                        письменного отзыва по месту нахождения Компании по почте или путем направления
                        электронного письма на адрес электронной почты 88007753106@mail.ru. В указанном случае
                        Компания прекращает обработку и уничтожает персональные данные Пользователя в срок, не
                        превышающий 30 (тридцати) календарных дней с даты получения соответствующего отзыва.
                        <br></h2>
                    <h5><br>Утверждено приказом ООО «Центр технического оборудования»
                        №2017/06-1 от 15.06.2017.</h5>
                    <br>
                    <br>
                    <br>

                    <input type="hidden" name="typsh" value="минитрактор">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="openModal4" class="modalDialog2">
    <div>
        <a href="#close" title="Close" class="close"><span></span></a>
        <div class="modal-box">
            <div class="prokrutka">
                <div class="otstup">
                    <h1>ПОЛИТИКА ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</h1>
                    <h2>Дата размещения на Сайте «30» июня 2017 года.
                        Настоящая Политика обработки персональных данных (далее – Политика) определяет общие
                        принципы и порядок обработки персональных данных Пользователей онлайн-магазина и меры по
                        обеспечению их безопасности в Центр технического оборудования.</h2>
                    <h1>ТЕРМИНЫ И ОПРЕДЕЛЕНИЯ</h1>
                    <h2>Стороны используют следующие термины в указанном ниже значении:</h2></div>
                <h3>a) Данные – иные данные о Пользователе (не входящие в понятие персональных данных).
                    <br>b) Законодательство – действующее законодательство Российской Федерации.
                    Оператор – Центр технического оборудования, самостоятельно или совместно с другими лицами
                    организующее и (или) осуществляющее обработку персональных данных, а также определяющее
                    цели обработки персональных данных, состав персональных данных, подлежащих обработке,
                    действия (операции), совершаемые с персональными данными.
                    <br>c) Персональные данные – любая информация, относящаяся к прямо или косвенно определённому
                    или определяемому физическому лицу (Пользователю).
                    Пользователь – лицо, имеющее доступ к Сайту, посредством сети Интернет и использующее Сайт
                    интернет-магазина.
                    <br>d) Предоставление персональных данных – действия, направленные на раскрытие Персональных
                    данных определённому лицу или определённому кругу лиц.
                    <br>e) Сайт – сайт, расположенный в сети Интернет, где пользователь оставляет персональные данные.
                    <br>f) Субъект персональных данных – Пользователь (физическое лицо), к которому относятся
                    Персональные данные.
                    <br>g) Транспортные компании – третьи лица, оказывающие курьерские услуги.</h3>

                <h2>Иные термины, используемые в Политике трактуются в соответствии с Законодательством РФ.</h2>
                <h1>1. ОБЩИЕ ПОЛОЖЕНИЯ</h1>
                <h3>1.1. Настоящая Политика в отношении обработки персональных данных разработана в
                    соответствии с положениями Федерального закона от 27.07.2006 №152-ФЗ «О персональных
                    данных» (с изменениями и дополнениями), другими законодательными и нормативными
                    правовыми актами и определяет порядок работы с Персональными данными Пользователей и
                    (или) передаваемых Пользователями и требования к обеспечению их безопасности.
                    <br>1.2. Мероприятия по обеспечению безопасности персональных данных являются составной частью
                    деятельности Оператора.</h3>
                <h1>2. ПРИНЦИПЫ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</h1>
                <h2>2.1. Обработка Персональных данных Оператором осуществляется в соответствии со следующими
                    принципами:</h2>
                <h3>2.1.1. Законность и справедливая основа обработки Персональных данных. Оператор принимает
                    все необходимые меры по выполнению требований Законодательства, не обрабатывает
                    Персональные данные в случаях, когда это не допускается Законодательством, не использует
                    Персональные данные во вред Пользователю.
                    <br>2.1.2. Обработка только тех Персональных данных, которые отвечают заранее объявленным целям
                    их обработки. Соответствие содержания и объёма обрабатываемых Персональных данных
                    заявленным целям обработки. Недопущение обработки Персональных данных, не совместимых с
                    целями сбора Персональных данных, а также избыточных по отношению к заявленным целям их
                    обработки.
                    Оператор обрабатывает Персональные данные исключительно в целях исполнения договорных
                    обязательств перед Пользователем.
                    <br>2.1.3. Обеспечение точности, достаточности и актуальности Персональных данных по отношению
                    к целям обработки Персональных данных. Оператор принимает все разумные меры по поддержке
                    актуальности обрабатываемых Персональных данных, включая, но не ограничиваясь реализацией
                    права каждого Субъекта получать для ознакомления свои Персональные данные и требовать от
                    Оператора их уточнения, блокирования или уничтожения в случае, если Персональные данные
                    являются неполными, устаревшими, неточными, незаконно полученными или не являются
                    необходимыми для заявленных выше целей обработки.
                    <br>2.1.4. Хранение Персональных данных в форме, позволяющей определить Пользователя
                    Персональных данных, не дольше, чем этого требуют цели обработки Персональных данных, если
                    срок хранения Персональных данных не установлен федеральным законодательством, договором,
                    стороной которого или выгодоприобретателем по которому является Пользователь Персональных
                    данных.
                    <br>2.1.5. Недопустимость объединения созданных для несовместимых между собой целей баз данных
                    Информационных систем Персональных данных.</h3>
                <h1>3. УСЛОВИЯ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</h1>
                <h2>3.1. Обработка Персональных данных Оператором допускается в следующих случаях:</h2>
                <h3>3.1.1. При наличии согласия Пользователя на обработку его Персональных данных. Согласие
                    дается путем акцепта Публичной оферты, размещенной на Сайте или путем оформления Заказа,
                    способами, указанными на Сайте.
                    <br>3.1.2. При передаче Персональных данных Субъекта персональных данных Пользователем при
                    осуществлении заказа на Сайте. Пользователь гарантирует, что предварительно получил от
                    Субъекта персональных данных согласие на передачу данных Оператору.
                    <br>3.1.3. Персональные данные подлежат опубликованию или обязательному раскрытию в
                    соответствии с Законодательством.</h3>
                <h2>3.2. Оператор не раскрывает третьим лицам и не распространяет Персональные данные без
                    согласия Пользователя, если иное не предусмотрено Законодательством. <br>3.3. Оператор не
                    обрабатывает Персональные данные, относящиеся к специальным категориям и касающиеся
                    расовой и национальной принадлежности, политических взгляд
                    ов, религиозных или философских убеждений, состояния здоровья, интимной жизни Субъекта
                    персональных данных, о членстве Субъекта персональных данных в общественных объединениях,
                    за исключением случаев, прямо предусмотренных Законодательством.
                    <br>3.4. Оператор не осуществляет Трансграничную передачу Персональных данных Пользователей.</h2>
                <h1>4. СБОР И ОБРАБОТКА ПЕРСОНАЛЬНЫХ ДАННЫХ И ИНЫХ ДАННЫХ</h1>
                <h2>4.1. Оператор собирает и хранит только те Персональные данные, которые необходимы для
                    предоставления услуг Пользователю для осуществления продажи товаров посредством Сайта. При
                    этом сбор Персональных данных может осуществляться как посредством Сайта, так и в офисе
                    Оператора.
                    <br>4.2. Оператор обрабатывает Персональные данные в следующих целях:</h2>
                <h3>4.2.1. осуществления деятельности, предусмотренной? Уставом Общества, действующим
                    законодательством РФ;
                    <br>4.2.2. выполнения обязательств Оператора перед Пользователем по продаже товаров, в том числе
                    обработку платежей, доставку товаров.
                    <br>4.2.3. для связи с Пользователями в случае необходимости, в том числе для направления
                    уведомлении?, информации и запросов, связанных с оказанием услуг, а также обработки
                    заявлении?, запросов и заявок Пользователей;
                    <br>4.2.4. для улучшение качества услуг, оказываемых Оператором;
                    <br>4.2.5. для продвижения услуг на рынке путем осуществления прямых контактов с Пользователями;
                    <br>4.2.6. для проведения статистических и иных исследовании? на основе обезличенных
                    персональных данных.</h3>
                <h2>4.3.В целях, указанных в п. 4.2. Оператор обрабатывает следующие персональные:</h2>
                <h3>Фамилия, имя и отчество;
                    <br>Адрес электронной почты;
                    <br>Телефон;
                    <br>Данные банковской карты, с которой осуществляется оплата (наименование держателя банковской
                    <br>карты, номер карты, CVV код);
                    <br>IP адрес Пользователя;
                    <br>Тип браузера Пользователя;
                    <br>Адрес доставки товаров.</h3>
                <h2>4.4. В отношении Персональных данных и иных Данных Пользователя сохраняется их
                    конфиденциальность, кроме случаев, когда указанные данные являются общедоступными.
                    <br>4.5. Оператор имеет право сохранять архивную копию Персональных данных и иных Данных, в
                    том числе после удаления аккаунта Пользователя.
                    <br>4.6. Оператор имеет право передавать Персональные данные и иные Данные Пользователя без
                    согласия Пользователя следующим лицам:</h2>
                <h3>4.6.1. Государственным органам, в том числе органам дознания и следствия, и органам местного
                    самоуправления по их мотивированному запросу.
                    <br>4.6.2. Партнёрам Оператора c целью выполнения договорных обязательств перед Пользователем.
                    <br>4.6.3. В иных случаях, прямо предусмотренных действующим законодательством РФ.</h3>
                <h2>4.7. Оператор имеет право передавать Персональные данные и иные Данные третьим лицам, не
                    указанным в п. 4.6 настоящей Политики, в следующих случаях:</h2>
                <h3>4.7.1. Пользователь выразил свое согласие на такие действия.
                    <br>4.7.2. Передача необходима в рамках использования Пользователем Сайта или продажи товаров
                    Пользователю (в том числе в целях доставки товаров);
                    <br>4.7.3. Передача происходит в рамках продажи или иной передачи бизнеса (полностью или в
                    части), при этом к приобретателю переходят все обязательства по соблюдению условий настоящей
                    Политики.</h3>
                <h2>4.8. Оператор осуществляет автоматизированную и неавтоматизированную обработки
                    Персональных данных и иных Данных.
                    <br>4.9. Доступ к Информационным системам, содержащим Персональные данные, обеспечивается
                    системой паролей. Пароли устанавливаются уполномоченными сотрудниками Оператора и
                    индивидуально сообщаются работникам Оператора, имеющим доступ к Персональным
                    данным/Данным.
                    <br>4.10. Оператор передает обработанную информацию транспортным (курьерским) компаниям на
                    основании согласия Пользователя (ст. 9 ФЗ «О персональных данных»).
                    <br>4.11. Оператор не несет ответственности за ненадлежащую обработку персональных данных
                    Пользователя, осуществляемую Транспортными компаниями.
                    <br>4.12. При получении Оператором персональных данных запроса, содержащего отзыв субъекта
                    персональных данных согласия на обработку персональных данных, то в течение 30 (тридцати)
                    календарных дней с момента его получения обязан удалить персональные данные.</h2>
                <h1>5. ИЗМЕНЕНИЕ ПЕРСОНАЛЬНЫХ ДАННЫХ</h1>
                <h2>5.1. Пользователь может в любой момент изменить (обновить, дополнить) Персональные данные
                    посредством путём направления письменного заявления Оператору.
                    5.2. Пользователь в любой момент имеет право удалить Персональные данные/Данные.</h2>
                <h1>6. КОНФИДЕНЦИАЛЬНОСТЬ ПЕРСОНАЛЬНЫХ ДАННЫХ</h1>
                <h2>6.1. Оператор обеспечивает конфиденциальность обрабатываемых им Персональных
                    данных/Данных в порядке, предусмотренном Законодательством. Обеспечение
                    конфиденциальности не требуется в отношении:</h2>
                <h3>6.1.1. Персональных данных после их обезличивания.
                    <br>6.1.2. Персональных данных, доступ неограниченного круга лиц к которым предоставлен
                    Пользователем либо по его просьбе (далее – Персональные данные, сделанные общедоступными
                    Пользователем).
                    <br>6.1.3. Персональных данных, подлежащих опубликованию или обязательному раскрытию в
                    соответствии с Законодательством.
                    <br>6.1.4. Не является нарушением конфиденциальности Персональных данных предоставление
                    Оператором информации транспортным (курьерским) компаниям и иным третьим лицам,
                    действующим на основании договора с Оператором для исполнения обязательств перед
                    Пользователем.</h3>
                <h1>7. СОГЛАСИЕ ПОЛЬЗОВАТЕЛЯ НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ</h1>
                <h2>7.1. Пользователь принимает решение о предоставлении своих Персональных данных Оператору и
                    даёт согласие на их обработку свободно, своей волей и в своём интересе. Согласие на обработку
                    Персональных данных должно быть конкретным, информированным и сознательным и
                    предоставляется Пользователем в момент его Регистрации на Сайте Оператора, а также в любой
                    позволяющей подтвердить факт его получения форме, если иное не установлено
                    Законодательством.
                    <br>7.2. Персональные данные лиц, вступивших в договорные обязательства с Оператором,
                    содержащиеся в единых государственных реестрах юридических лиц и индивидуальных
                    предпринимателей, являются открытыми и общедоступными, за исключением сведений о номере,
                    дате выдачи и органе, выдавшем документ, удостоверяющий личность физического лица. Охраны
                    их конфиденциальности и согласия Пользователей на обработку не требуется.
                    <br>7.3. В случае поступления запросов из организаций, не обладающих соответствующими
                    полномочиями, Оператор обязан получить предварительное согласие Пользователя на
                    предоставление его Персональных данных и предупредить лиц, получающих Персональные
                    данные, о том, что эти данные могут быть использованы лишь в целях, для которых они
                    сообщены, а также требовать от этих лиц подтверждения того, что это правило будет (было)
                    соблюдено.</h2>
                <h1>8. ПРАВА СУБЪЕКТОВ ПЕРСОНАЛЬНЫХ ДАННЫХ</h1>
                <h2>8.1. Пользователь имеет право на получение информации, касающейся обработки его
                    Персональных данных/Данных. Пользователь вправе требовать от Оператора уточнения его
                    Персональных данных, их блокирования или уничтожения в случае, если Персональные данные
                    являются неполными, устаревшими, неточными, незаконно полученными или не являются
                    необходимыми для заявленной цели обработки, а также принимать предусмотренные законом
                    меры по защите своих прав.
                    <br>8.2. Если Пользователь считает, что Оператор осуществляет обработку его Персональных данных
                    с нарушением требований Законодательства или иным образом нарушает его права и свободы,
                    Пользователь вправе обжаловать действия или бездействие Оператора в уполномоченном органе
                    по защите прав субъектов Персональных данных или в судебном порядке.
                    <br>8.3. Пользователь имеет право на защиту своих прав и законных интересов, в том числе на
                    возмещение убытков и (или) компенсацию морального вреда в судебном порядке.</h2>
                <h1>9. ПЕРСОНАЛЬНЫЕ ДАННЫЕ ТРЕТЬИХ ЛИЦ, ИСПОЛЬЗУЕМЫЕ ПОЛЬЗОВАТЕЛЯМИ</h1>
                <h2>9.1. Используя Сайт, Пользователь имеет право заносить данные третьих лиц для заказа товаров.
                    <br>9.2. Пользователь обязуется получить предварительное согласие субъекта Персональных данных
                    на их использование посредством Сайта. Пользователь самостоятельно несет ответственность за
                    отсутствие такого согласия.
                    <br>9.3. Оператор обязуется предпринять необходимые меры для обеспечения сохранности
                    Персональных данных третьих лиц, занесённых Пользователем.</h2>
                <h1>10. ИНЫЕ ПОЛОЖЕНИЯ</h1>
                <h2>10.1. К настоящей Политике и отношениям между Пользователем и Оператором, возникающим в
                    связи с применением Политики, подлежит к применению право Российской Федерации.
                    <br>10.2. Все возможные споры подлежат разрешению в соответствии с Законодательством по месту
                    регистрации Оператора.
                    Перед обращением в суд Пользователь должен соблюсти обязательный досудебный порядок и
                    направить Оператору соответствующую претензию в письменном виде. Срок ответа на претензию
                    составляет 30 (тридцать) рабочих дней.
                    <br>10.3. Если по тем или иным причинам одно или несколько положений Политики будут признаны
                    недействительными или не имеющими юридической силы, это не оказывает влияния на
                    действительность или применимость остальных положений Политики конфиденциальности.
                    <br>10.4. Оператор имеет право в любой момент изменять настоящую Политику (полностью или в
                    части) в одностороннем порядке без предварительного согласования с Пользователем. Все
                    изменения вступают в силу на следующий день после размещения на Сайте.
                    <br>10.5. Пользователь обязуется самостоятельно следить за изменениями Политики
                    конфиденциальности путем ознакомления с актуальной редакцией.</h2>
                <br>
                <br>
                <br>

                <input type="hidden" name="typsh" value="минитрактор">
                </form>

            </div>
        </div>
    </div>
</div>
</div>

<div id="openModal_2" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close"><span></span></a>
        <div class="modal-box">
            <h4>Оставь имя и телефон<br/>и получи каталог <span id="catalogName2"></span></h4>
            <form method="post" action="/sender/send.php" id="form_18" class="sform" onsubmit="yaCounter44830108.reachGoal('cel14'); return true;">
                <input type="hidden" id="ya-city" value="">
                <input type="hidden" name="subject" value="Оставьте имя и телефон и получите каталог">
                <input type="hidden" name="catName2" id="cNameId2" value="">
                <div class="wrap-input-name-price">
                    <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
                </div>
                <div class="wrap-input-telephone-price">
                    <input class="input-text input-modal phone-mask" id="inputf14" maxlength="18" type="text" name="phone" placeholder="Ваш телефон" required">
                </div>
                <div class="alert_on alert_on_modal" id="phone_bottom_14"></div>
                <div class="wrapper-button">
                    <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit" value="Скачать каталог">
                    <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:1%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-right:5px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Скачать каталог", вы даете согласие на обработку персональных данных</a></div> 
                </div>
                <input type="hidden" name="typsh" value="минитрактор">
            </form>
        </div>
    </div>
</div>

<div id="openModal_3" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close"><span></span></a>
        <div class="modal-box">
            <h4>Оставь имя и телефон<br/>и получи каталог</br>минитракторов <span id="catalogName3"></span></h4>
            <form method="post" action="/sender/send.php" id="form_18" class="sform" onsubmit="yaCounter44830108.reachGoal('cel21'); return true;">
                <input type="hidden" id="ya-city" value="">
                <input type="hidden" name="subject" value="Оставьте имя и телефон и получите каталог">
                <input type="hidden" name="catName3" id="cNameId3" value="">
                <div class="wrap-input-name-price">
                    <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
                </div>
                <div class="wrap-input-telephone-price">
                    <input class="input-text input-modal phone-mask" id="inputf14" maxlength="18" type="text" name="phone" placeholder="Ваш телефон" required">
                </div>
                <div class="alert_on alert_on_modal" id="phone_bottom_14"></div>
                <div class="wrapper-button">
                    <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit" value="Скачать каталог">
                   <div class="compliance" style="font-size:9px; font-weight:300; margin-top:-10%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-right:5px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Скачать каталог", вы даете согласие на обработку персональных данных</a></div> 
                </div>
                <input type="hidden" name="typsh" value="минитрактор">
            </form>
        </div>
    </div>
</div>


<div id="openModal_econom" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close"><span></span></a>
        <div class="modal-box">
            <h4>Комплект &laquo;эконом&raquo;<br/>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
            <form method="post" action="/sender/send.php" class="sform" id="form_19" onsubmit="yaCounter44830108.reachGoal('cel11'); return true;">
                <input type="hidden" id="ya-city" value="">
                <input type="hidden" name="subject" value="Комплект. Оставьте имя и телефон и с вами свяжется старший менеджер">
                <div class="wrap-input-name-price">
                    <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
                </div>
                <div class="wrap-input-telephone-price">
                    <input class="input-text input-modal phone-mask" id="inputf15" maxlength="18" type="text" name="phone" placeholder="Ваш телефон*" required">
                </div>
                <div class="alert_on alert_on_modal" id="phone_bottom_15"></div>
                <div class="wrapper-button">
                    <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit" value="Перезвонить мне">
                </div>
                <input type="hidden" name="typsh" value="минитрактор">
            </form>
        </div>
    </div>
</div>

<div id="openModal_professional" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close"><span></span></a>
        <div class="modal-box">
            <h4>Комплект &laquo;профи&raquo;<br/>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
            <form method="post" action="/sender/send.php" class="sform" id="form_20" onsubmit="yaCounter44830108.reachGoal('cel12'); return true;">
                <input type="hidden" id="ya-city" value="">
                <input type="hidden" name="subject" value="Комплект Профи Оставьте имя и телефон и с вами свяжется старший менеджер">
                <div class="wrap-input-name-price">
                    <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
                </div>
                <div class="wrap-input-telephone-price">
                    <input class="input-text input-modal phone-mask" id="inputf16" maxlength="18" type="text" name="phone" placeholder="Ваш телефон*" required">
                </div>
                <div class="alert_on alert_on_modal" id="phone_bottom_16"></div>
                <div class="wrapper-button">
                    <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit" value="Перезвонить мне">
                </div>
                <input type="hidden" name="typsh" value="минитрактор">
            </form>
        </div>
    </div>
</div>

<div id="openModal_professional-semiautomatic" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close"><span></span></a>
        <div class="modal-box">
            <h4>Комплект &laquo;профи - полуавтомат&raquo;<br/>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
            <form method="post" action="/sender/send.php" class="sform" id="form_21" onsubmit="yaCounter44830108.reachGoal('cel13'); return true;">
                <input type="hidden" id="ya-city" value="">
                <input type="hidden" name="subject" value="Комплект. Оставьте имя и телефон и с вами свяжется старший менеджер">
                <div class="wrap-input-name-price">
                    <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
                </div>
                <div class="wrap-input-telephone-price">
                    <input class="input-text input-modal phone-mask" id="inputf17" maxlength="18" type="text" name="phone" placeholder="Ваш телефон*" required">
                </div>
                <div class="alert_on alert_on_modal" id="phone_bottom_17"></div>
                <div class="wrapper-button">
                    <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit" value="Перезвонить мне">
                </div>
                <input type="hidden" name="typsh" value="минитрактор">
            </form>
        </div>
    </div>
</div>

<div id="openModal_professional-automatic" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close"><span></span></a>
        <div class="modal-box">
            <h4>Комплект &laquo;профи - автомат&raquo;<br/>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
            <form method="post" action="/sender/send.php" class="sform" id="form_22" onsubmit="yaCounter44830108.reachGoal('cel14'); return true;">
                <input type="hidden" id="ya-city" value="">
                <input type="hidden" name="subject" value="Комплект. Оставьте имя и телефон и с вами свяжется старший менеджер">
                <div class="wrap-input-name-price">
                    <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
                </div>
                <div class="wrap-input-telephone-price">
                    <input class="input-text input-modal phone-mask" id="inputf18" maxlength="18" type="text" name="phone" placeholder="Ваш телефон*" required">
                </div>
                <div class="alert_on alert_on_modal" id="phone_bottom_18"></div>
                <div class="wrapper-button">
                    <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit" value="Перезвонить мне">
                </div>
                <input type="hidden" name="typsh" value="минитрактор">
            </form>
        </div>
    </div>
</div>

<div id="openModal_cargo" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close"><span></span></a>
        <div class="modal-box">
            <h4>Комплект грузового шиномонтажа<br/>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
            <form method="post" action="/sender/send.php" class="sform" id="form_23" onsubmit="yaCounter44830108.reachGoal('cel15'); return true;">
                <input type="hidden" id="ya-city" value="">
                <input type="hidden" name="subject" value="Комплект. Оставьте имя и телефон и с вами свяжется старший менеджер">
                <div class="wrap-input-name-price">
                    <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
                </div>
                <div class="wrap-input-telephone-price">
                    <input class="input-text input-modal phone-mask" id="inputf19" maxlength="18" type="text" name="phone" placeholder="Ваш телефон*" required">
                </div>
                <div class="alert_on alert_on_modal" id="phone_bottom_19"></div>
                <div class="wrapper-button">
                    <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit" value="Перезвонить мне">
                </div>
                <input type="hidden" name="typsh" value="минитрактор">
            </form>
        </div>
    </div>
</div>

<div id="openModal_call" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close"><span></span></a>
        <div class="modal-box">
            <h4>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
            <form method="post" action="/sender/send.php" id="form_24" class="sform" onsubmit="yaCounter44830108.reachGoal('cel18'); return true;">
                <input type="hidden" id="ya-city" value="">
                <input type="hidden" name="subject" value="Footer Оставьте имя и телефон и с вами свяжется старший менеджер">
                <div class="wrap-input-name-price">
                    <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
                </div>
                <div class="wrap-input-telephone-price">
                    <input class="input-text input-modal phone-mask" id="inputf20" maxlength="18" type="text" name="phone" placeholder="Ваш телефон*" required">
                </div>
                <div class="alert_on alert_on_modal" id="phone_bottom_20"></div>
                <div class="wrapper-button">
                    <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit" value="Перезвонить мне">
                   <div class="compliance" style="font-size:9px; font-weight:300; margin-bottom:1%;">
                            <input type="checkbox" checked onclick="document.querySelector('#' + this.closest('form').id + ' [type=submit]').disabled = !this.checked" style="margin-right:5px"><a href="#openModal3" target="_self" style="color:#383838; text-decoration: underline;">Нажимая кнопку "Перезвонить мне", вы даете согласие на обработку персональных данных</a></div> 
                </div>
                <input type="hidden" name="typsh" value="минитрактор">
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

<script src="/libs/jquery/jquery-2.1.3.min.js"></script>
<script src="/libs/jquery.mask/jquery.mask.js"></script>
<script src="https://cdn.jsdelivr.net/g/bootstrap@3.3.6,jquery.ui@1.11.4"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&amp;lang=ru-RU" type="text/javascript"></script>
<script src="/js/jquery.simslider.js"></script>

<script>
    window.onerror = function (message, file, line) {
        if (typeof window.$ != 'undefined') {
            $.post('/sender/send.php', {
                message: message,
                url: location.href,
                file: file,
                line: line,
            });
        }
    };
</script>

<script type="text/javascript" src="/libs/tooltipster/js/tooltipster.bundle.min.js"></script>
<script>
    jQuery(function ($) {
        $('.block-1 .sliderBox').SimSlider({
            next: '.nextBtn', // def: ".ss-next"
            prev: '.prevBtn', // def: ".ss-prev"
            item: '.SimSlider .slide', // def: ".ss-item"
            'dots': '.dot',
            'dotActClass': 'active',
            speed: 900,
            delay: 5000,
            onAfterInit: function (sliders, nextBtn, prevBtn, dots) {
                // событие после инициализации слайдера
                // console.log( 'onAfterInit', sliders, nextBtn, prevBtn, dots );
            },
            onBeginAnimate: function (slider, status) {
                // событие перед началом прокрутки слайдеров

            },
            onEndAnimate: function (slider, status) {
                // событие после окончания прокрутки
                if ($(slider).hasClass('sl-3') && status == 'visible') {
                    $(slider).find('.jq').animate({fontSize: "30px"}, 3000);
                } else if ($(slider).hasClass('sl-3') && status == 'hidden') {
                    $(slider).find('.jq').css("font-size", "14px");
                }
            }
        });
    });
</script>
<script type="text/javascript">
    function viewdiv() {

        var el = document.getElementsByClassName("hideclass");
        //ert(el[0].id);
        for (var i = 0; i < el.length; i++) {
            if (el[i].style.display == "none") {
                el[i].style.display = "block";
            }
            else {
                el[i].style.display = "none";
            }
        }

    }

</script>
<script src="/sender/js/sender.js?rnd=<?= uniqid() ?>"></script>
<script src="js/common1.js"></script>
<script src="/js/leads.catcher.js" async></script>

<!— Facebook Pixel Code —>
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1767996340158203'); // Insert your pixel ID here.
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=1767996340158203&ev=PageView&noscript=1"/></noscript>
<!— DO NOT MODIFY —>
<!— End Facebook Pixel Code —>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "2919260", type: "pageView", start: (new Date()).getTime()});
    (function (d, w, id) {
        if (d.getElementById(id)) return;
        var ts = d.createElement("script");
        ts.type = "text/javascript";
        ts.async = true;
        ts.id = id;
        ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
        var f = function () {
            var s = d.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(ts, s);
        };
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "topmailru-code");
</script>
<noscript>
    <div>
        <img src="//top-fwz1.mail.ru/counter?id=2919260;js=na" style="border:0;position:absolute;left:-9999px;" alt=""/>
    </div>
</noscript>
<!-- //Rating@Mail.ru counter -->
<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=faecc43be153cc599dc0b5c99ffd0f8a" charset="UTF-8" async></script>
<!-- Кнопка вверх -->
<a style="display:scroll;position:fixed;bottom:15px;right:15px;" href="#" title="Вверх"> 
<img border="0" alt="Back to TOP"  src = "http://static.oldiconsearch.ru/uploads/icons/humano2/48x48/go-up.png"/></a>
<!-- Кнопка вверх -->
</body>
</html>
