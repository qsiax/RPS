<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/images/icon-logo.png" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://api-maps.yandex.ru/2.1/?apikey=4f8e6d1c-0e6b-40e0-a1ae-ad99b1dc5908&lang=ru_RU" type="text/javascript"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
	<title>Я - Надзор</title>
</head>

<body>
	<!-- PRELOADER -->
	<div class="overlay second"></div>
	<div class="overlay firts"></div>
	<div class="overlay four"></div>
	<div class="overlay five"></div>
	<div class="overlay six"></div>

    <div class="wrapperMap">
    <header class="header-page">
        <div class="header-page__container">
            <div class="header-page__body">
                <div class="header-page__block">
                    <div class="header-page__logo"></div>
                    <div class="header-page__menu"></div>
                </div>
                <div class="header-page__block">
                    <ul class="header-page__navigation">
                        <li><a href="index.html">Главная</a></li>
                        <li><a href="#">Профиль</a></li>
                        <li><a href="#">Магазин</a></li>
                        <li><a href="#" class="active">Карта</a></li>
                        <li><a href="#">Помощь</a></li>
                        <li><a href="#">Режим модератора</a></li>
                    </ul>
                </div>
                <div class="header-page__block">
                    <div class="header-page__switch" onclick="darkMode()">
                        <div class="header-page__switch-el"></div>
                    </div>
                    <div class="header-page__profile-box" onclick="authToggle()">
                        <div class="header-page__profile-icon"></div>
                        <p>Кабинет</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="pageMap">
        <div class="pageMap__container _container">
            <div class="pageMap__body">
                <div class="pageMap__title title">Карта</div>
                <div class="pageMap__map">
                    <div id="map"></div>
                </div>
                <div class="pageMap__btn" onclick="formPopup()">Оставить заявку</div>
            </div>
        </div>

    </section>




    <footer class="footer" id="footer">

		<div class="footer__container _container">
			<div class="footer__body">
				<div class="footer__block">
					<a href="#main" class="footer__logo"></a>
					<ul class="footer__navigaion">
						<li><a href="index.html">Главная</a></li>
						<li><a href="#service">О сервисе</a></li>
						<li><a href="#directory">Справочник</a></li>
						<li><a href="#map">Карта</a></li>
						<li><a href="#rating">Рейтинг</a></li>
						<li><a href="#contact">Контакты</a></li>
					</ul>
				</div>
				<div class="footer__block">
					<div class="footer__text">© 2022 yanadzor</div>
					<div class="footer__text">Политика конфиденциальности</div>
					<div class="footer__text">Разработка - RPS</div>
				</div>
			</div>
		</div>
	</footer>
    </div>

    <form class="popupForm" method="POST" name="forma1">
        <p>Текст</p>
        <input type="text" placeholder="Введите текст" name="text">
        <p>Адрес</p>
        <input type="text" placeholder="Введите адрес" name="address">
        <input type="text" id="one" name="CoordinatesX" placeholder="Координата X"><br>
        <input type="text" id="two" name="CoordinateY" placeholder="Координата Y">
        <div class="form-btn"  onclick="show(), btnPopup()">Отправить заявку</div>
        <button type="submit" name="submit" id="btnForm">Подтвердить</button>
    </form>


    <script src="bandle.js"></script>
    <script>          
        function show()
            {
                var t = document.forma1.address.value;

                ymaps.geocode(t,{results:1}).then(
            
                function(res){  var MyGeoObj = res.geoObjects.get(0);
        
                document.getElementById('one').value = MyGeoObj.geometry.getCoordinates()[0];
                document.getElementById('two').value = MyGeoObj.geometry.getCoordinates()[1];
        
                var myPlacemark = new ymaps.Placemark([MyGeoObj.geometry.getCoordinates()[0], MyGeoObj.geometry.getCoordinates()[1]]);
                myMap.geoObjects.add(myPlacemark);

            });

            };
    </script>
    <script>
        // MAP
        var map = L.map('map').setView([62.027221, 129.732178], 14);
    
        L.tileLayer('https://api.maptiler.com/maps/streets-v2/{z}/{x}/{y}.png?key=p0IK89pdtFrA9vMYxHZQ', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
            tileSize: 512,
            zoomOffset: -1,
            minZoom: 1,
        }).addTo(map);
    
        var FlagIcon = L.Icon.extend({
            options: {
                iconSize: [50, 50],
            }
        })

    
        var greenIcon = new FlagIcon({iconUrl: 'assets/images/flag-green.svg'}),
            redIcon = new FlagIcon({iconUrl: 'assets/images/flag-red.svg'}),
            yellowIcon = new FlagIcon({iconUrl: 'assets/images/flag-yellow.svg'});


        <?php if (isset($_POST['submit'])) {
                $x = $_POST['CoordinatesX'];
                $y = $_POST['CoordinateY'];

                echo 'var marker = L.marker([' . $x . ',' .  $y . '],{icon: yellowIcon}).addTo(map);';  
        }
        ?>
  


    var maker = L.marker([55.833, 37.549794],{icon: greenIcon}).addTo(map);
	var maker = L.marker([62.032664, 129.749947],{icon: redIcon}).addTo(map);
	var maker = L.marker([62.036558, 129.718066],{icon: yellowIcon}).addTo(map);
	var maker = L.marker([62.056783, 129.729115],{icon: greenIcon}).addTo(map);
	var maker = L.marker([62.004324, 129.665532],{icon: yellowIcon}).addTo(map);

    marker.bindPopup("<b>123123</b>");




        function darkMode() {
            var switchBtn = document.querySelector(".header-page__switch");
            var body = document.body;
    
            switchBtn.classList.toggle('dark');
            body.classList.toggle('pageDark');
        }

        function formPopup() {
            var formPopup = document.querySelector('.popupForm');
            var blur = document.querySelector('.wrapperMap');

            blur.classList.toggle('blur');
            formPopup.classList.toggle('active');
        }

        function btnPopup() {
            var btnPopup = document.querySelector('#btnForm');

            btnPopup.classList.toggle('active');
        }
        </script>
    </body>
    
    </html>