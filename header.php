<div class ="logos">
		<div class ="container">
			<div class="logoHeader">
				<a href="index.html"><img class="logo" src="image/logo.png"></a>
				<div class="infoShop">
					<div class="netBox">
						<div class="net">Сеть магазинов</div><div class="center">Центр печати</div>
					</div>
					<div class="city">г. Казань</div>
				</div>
			</div>
			<div class="headerDescription1">
				<div>
					<img src="image/headerText.png" class="headerText">
				</div>
			</div>
			<div class="phoneBox">
				<div class="phone"><span>216-36-96</span><br></div>
				<button class="call" name="call" data-toggle="modal" data-target="#callCustom"><img src="image/phoneButton.png" class="phoneButton">ЗАКАЗАТЬ ЗВОНОК!</button>
			</div>
		</div>
	</div>
	<!-- Модальное окно -->
	<div class="modal fade" id="callCustom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modalWindow">				
				<div class="modal-content cintentModal">
					<div class="modal-body callCustomModal" id="callCustomModal">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="textModal">		
							<p class="lead textModalParag">Оставьте, пожалуйста, свой номер телефона, чтобы мы могли оперативно связаться с Вами: </p>
							<div id="callCustomModal1">
								<form id="forma">
									<div id="phone3"></div>
									<input type="phone" id="phoneInput" name="sendPhone" class="callCustomInput" value="sendPhone" placeholder="7(9__) ___-__-__">
									<button type="submit" class="buttonModal" value="call"  id="buttonModalCall" name="buttonModal">Отправить</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Конец Модального окна -->