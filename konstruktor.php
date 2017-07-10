<!DOCTYPE html>
<html>
<head>
	<title>Конструктор</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="icon" href="image/favicon.ico">
	<link rel="stylesheet" type="text/css" media="screen" href="colorpicker/css/colorpicker.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/fontKonstr.css">
	<link rel="stylesheet" type="text/css" href="css/konstruktor.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/inputmask.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="colorpicker/js/colorpicker.js"></script>
	<script src="js/jscolor.js"></script>
	<script>
		$(function($){
			$("#phoneOrder").mask("7(999)999-99-99");
			$("#phoneInput").mask("7(999)999-99-99");
		});
	</script>
	<script src="js/send.js"></script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	    (function (d, w, c) {
	        (w[c] = w[c] || []).push(function() {
	            try {
	                w.yaCounter42880899 = new Ya.Metrika({
	                    id:42880899,
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
		<script>
		setTimeout(function(){ 
	        yaCounter42880899.reachGoal("disinterestedKons");
	    }, 40000);
	    </script>
	<noscript><div><img src="https://mc.yandex.ru/watch/42880899" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</head>
<script src="/js/konstruktor.js"></script>
<script>
function sizePic(){
	size = document.getElementById("size").value;
	img = document.getElementById("urlAdress");
	img.width = 60+10*size;
}
</script>
<body>
	<?php require_once("header.php"); ?>
	<form id="fileForm" name="uploadImage" method="POST" enctype="multipart/form-data" action="orderBuy.php">
	<input type="text" name="leftCanvas" id="leftCanvas" hidden>
	<input type="text" name="topCanvas" id="topCanvas" hidden>
	<input type="text" name="leftText" id="leftText" hidden>
	<input type="text" name="topText" id="topText" hidden>
	<div class="container layerKonstr"">
		<div class="row">
			<div class="col-sm-6">
				<div id="loginConst" style="color: #751C16;">
				<a href="index.html" style="outline: none; color: #751C16;">
					<div id="home" style="font-size: 24px;">
						<img src="image/logoKonstr.png" style="width: 67px;">
						<div id="homeText">На главную</div>
					</div>
				</a>
					<div id="help">
						<div class="helpText">Если что-то не получается</div>
						<div class="helpText">Свяжитесь с дизайнером</div>
						<input type="button" name="help" id="helpButton" value="Помощь">
					</div>
				</div>
				<div id="color">
						<div id="colorBox">
							<input type="radio" id="color1" name="color" class="radioColor" value="#ffffff" hidden checked>
							<label for="color1" class="color-change-block" style="background-color: #fff;"></label>
							<input type="radio" id="color2" name="color" class="radioColor" value="#d9534f" hidden>
							<label for="color2" class="color-change-block" style="background-color: #d9534f;" ></label>
							<input type="radio" id="color3" name="color" class="radioColor" value="#5cb85c" hidden>
							<label for="color3" class="color-change-block" style="background-color: #5cb85c;"></label>
							<input type="radio" id="color4" name="color" class="radioColor" value="#f0ad4e" hidden>
							<label for="color4" class="color-change-block" style="background-color: #f0ad4e;"></label>
							<input type="radio" id="color5" name="color" class="radioColor" value="#000000" hidden>
							<label for="color5" class="color-change-block" style="background-color: #000;"></label>
						</div>
					</div>
				<div id="KonstrModul">
					<canvas id="textImgKonstr" class="draggable">
					</canvas>
					<div id="blockColor">
						<img id="urlAdress" class="draggable" src="">			
						<img id="imgageKonstr" name="imageType" src="image/konstruktor/mushskaya_futbolka.png">
					</div>
				</div>
				<script>
				$(document).ready(function(){
					var $n = $('#number')
					,$total = $('#priceInput')
					,$quantity = $('#quantity')
					,$price = $('#price')
					,$price1 = $('#price1')
					;
					uploate();
					  
				    $('[name=scr]').on('change', uploate);
				    $n.on('input', uploate)
					    
					function uploate(){
					  var $el = $("[name=scr]:checked");
					  var price = parseFloat($el.data("price"));
					  $price.text(price);

					  var q = parseFloat( $n.val());
					  var sum = q*price;

					  $price1.text(price);
					  $quantity.text(price);
					  $quantity.text(sum);
					  $total.val(sum);
					}
				});
				</script>
				<div id="typ">
					<input type="radio" id="option1" name="scr" class="radioKonst" value="image/konstruktor/mushskaya_futbolka.png" data-price="380" checked hidden><label for="option1"><img src="image/konstruktor/mushskaya_futbolka.png" class="imageType"><div class="textType">Футболка</div></label>

					<input type="radio" id="option2" class="radioKonst" name="scr" value="image/konstruktor/mushskaya_mayka.png" hidden data-price="300"><label for="option2"><img src="image/konstruktor/mushskaya_mayka.png" class="imageType"><div class="textType">Майка</div></label>

					<input type="radio" id="option3" class="radioKonst" name="scr" value="image/konstruktor/mushskaya_polo.png" hidden  data-price="680"><label for="option3"><img src="image/konstruktor/mushskaya_polo.png" class="imageType"><div class="textType">Поло</div></label>

					<input type="radio" id="option4" class="radioKonst" name="scr" value="image/konstruktor/jenskaya_svidshot.png" hidden data-price="850" ><label for="option4"><img src="image/konstruktor/jenskaya_svidshot.png" class="imageType" style="width: 71px;"><div class="textType">Свитшот</div></label>

					<input type="radio" id="option5" class="radioKonst" name="scr" value="image/konstruktor/hudi.png" hidden data-price="850"><label for="option5"><img src="image/konstruktor/hudi.png" class="imageType"><div class="textType">Худи</div></label>
				</div>
			</div>
			<form method="POST" id="formKonstrukt" enctype="multipart/form-data">
			<div class="col-sm-6">
				<div class="konstHead">
					<div class="layerLineKonstr">
						<div id="titleKonstr">
							<h2>Конструктор</h2>
							<div>Создай Ваш индивидуальный дизайн</div>
						</div>
						<div class="color">
							<div>
								<div class="step">
								<h1>1</h1>
								</div>
								<div class="konstrFileLabel">Выберите изображение:</div>
									<label for="konstrFile" id="downloads">Загрузить</label>
									<input type="file" name="photo" id="konstrFile" accept="image/jpeg,image/png">
								<div id="collection">Выбрать из коллекции</div>
								<div id="addImage">Добавить еще картинку</div>
							</div>
						</div>
					</div>
					<div class="color">
						<div class="step">
						<h1>2</h1>
						</div>
						<div class="konstrFileLabel">Настройте изображение:</div>
						<div style="float: right; width: 59%;">
							<div class ="rangeText"><div class="textRange">Поворот: </div><input type="range" name="turn" id="turn" min="0" max="360" value="0"></div>
							<div class="rangeText"><div class="textRange">Размер: </div><input type="range" name="size" id="size" min="0" max="100" value="0" oninput="sizePic()"></div>
							<div class ="rangeText"><div class="textRange">Прозрачность: </div><input type="range" name="visibility" id="visibility" min="0" max="100" value="100"></div>
						</div>
					</div>
					<div class="color">
						<div class="step">
						<h1>3</h1>
						</div>
							<div id="addText">Добавить текст: </div>
							<div style="width: 58%;float: right;margin-top: 3%;margin-right: 6px;">
								<div id="addText1"><input type="text" name="text" id="textKonstr" placeholder="Ваш текст"></div>
								<div id="textEdit">
									<input type="color" id="colorTextKons" name="colorTextKons" list>
									<!-- <input type="text" id="colorTextKons" name="colorTextKons" class="jscolor"> -->
									<select class="selectKonstr fontFamily" id="font" name="textKonstr">
										<option value="pricedown" selected>pricedown</option>
										<option value="a_BraggaStars">a_BraggaStars</option>
										<option value="a_BremenDcFr">a_BremenDcFr</option>
										<option value="a_CampusGrDcFr">a_CampusGrDcFr</option>
										<option value="FuturaRound">FuturaRound</option>
										<option value="a_PlakatTitul">a_PlakatTitul</option>
										<option value="Bulka">Bulka</option>
										<option value="DSArmyCyr">DSArmyCyr</option>
										<option value="ErikaBold">ErikaBold</option>
										<option value="JikharevBoldItalic">JikharevBoldItalic</option>
										<option value="MartaDecorTwo">MartaDecorTwo</option>
										<option value="MontblancCTT">MontblancCTT</option>
										<option value="Montblanc">Montblanc</option>
										<option value="Olietta">Olietta</option>
										<option value="RosamundaOne">RosamundaOne</option>
										<option value="RosamundaTwo">RosamundaTwo</option>
										<option value="Swiss">Swiss</option>
										<option value="T_Jihkarev">T_Jihkarev</option>
										<option value="Terminator">Terminator</option>
										<option value="Unicorn">Unicorn</option>
										<option value="UnicornUkrainian">UnicornUkrainian</option>
										<option value="yermak">yermak</option>
										<option value="Lifehack">Lifehack</option>
										<option value="LifehackBold">LifehackBold</option>
										<option value="LifehackGoodies">LifehackGoodies</option>
										<option value="Lifehack_Italick_Medium">Lifehack_Italick_Medium</option>
										<option value="LifehackItalic">LifehackItalic</option>
										<option value="LifehackMedium">LifehackMedium</option>
										<option value="tangak">tangak</option>
									</select>
									<select class="selectKonstr sizeText" name="sizeText" id="sizeText">
										<option value="8">8</option>
										<option value="10">10</option>
										<option value="12">12</option>
										<option value="14">14</option>
										<option value="16">16</option>
										<option value="18">18</option>
										<option value="20">20</option>
										<option value="22">22</option>
										<option value="24">24</option>
										<option value="26">26</option>
										<option value="28" selected>28</option>
										<option value="30">30</option>
										<option value="32">32</option>
										<option value="34">34</option>
										<option value="36">36</option>					
									</select>
								</div>
							</div>
						</div>
					<div>
						<input type="button" name="order" value="Оформить заказ" class="design" data-toggle="modal" data-target=".bs-example-modal-lg" style="width: 54%;margin-left: 42%;height: 64px;">
						<!-- <a href="index.html" id="return">Вернуться на главном</a> -->
					</div>
					<div style="font-size: 35px;">
						<div id="price" style="float: left;width: 45px;"></div><span>рублей</span>
					</div>
				</div>
			</div>
			<!-- Начальное модального окна для оформление заказа -->
			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Оформление заказа</h4>
						</div>
						<div class="modal-body">
							<div class="input-group input-group-lg">
								<span class="input-group-addon glyphicon glyphicon-earphone"></span>
								<input type="tel" class="form-control" placeholder="Введите номер телефона" name="phoneOrder" id="phoneOrder" required>
							</div>
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-default">
									<input type="radio" name="sizeFutbol" id="XS">XS
								</label>
								<label class="btn btn-default">
									<input type="radio" name="sizeFutbol" id="X">X
								</label>
								<label class="btn btn-default">
									<input type="radio" name="sizeFutbol" id="M">M
								</label>
								<label class="btn btn-default">
									<input type="radio" name="sizeFutbol" id="L">L
								</label>
								<label class="btn btn-default">
									<input type="radio" name="sizeFutbol" id="XL">XL
								</label>
								<label class="btn btn-default">
									<input type="radio" name="sizeFutbol" id="XLL">XLL
								</label>					
							</div>
							<div>
								<span style="float: left;"> Количество штук: </span>
								<div id="price1" style="width: 33px; float: left;"></div>
								<input type="number" name="number" id="number" min="0" value="1" style="width: 40px; height: 22px;float: left;">
								<div id="quantity" style="float: left;"></div><span>рублей</span>
								<input type="text" name="price" id="priceInput" value="" hidden>
							</div>
							<!-- <div class="btn-group" data-toggle="buttons">
								<label class="btn btn-default">
									<input type="radio" name="share" id="VK">VK
								</label>
								<label class="btn btn-default">
									<input type="radio" name="share" id="@">@
								</label>
								<label class="btn btn-default">
									<input type="radio" name="share" id="download"><span class="glyphicon glyphicon-save"></span>
								</label>
							</div> -->
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" id="orderFutbolka">Заказать</button>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	</form>
</body>