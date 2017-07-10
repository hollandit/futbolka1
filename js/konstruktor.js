//Вид(футболка, поло и т.д)
$(document).ready(function(){
	$(".radioKonst").change(function(){
		if (this.checked) {
			$("#imgageKonstr").attr("src", this.value);
		}
	});
	//Цвет футболки
	$(".radioColor").change(function(){
		if (this.checked) {
			$("#KonstrModul #blockColor").css("background-color", this.value);
		}
	});
	//Вставка изображения
	$("#fileForm").on("change",function(e){
		e.preventDefault();
		var fromData = new FormData($(this)[0])

		$.ajax({
			url: "unloade.php",
			type: "POST",
			data: fromData,
			dataType: "json",
			processData: false,
			contentType: false,
			success: function (data){
				$("#urlAdress").attr("src", data.url);
			}	
		});
	});
	//Поворачиваемость вставленное изображение
	$("#turn").on("input", function(){
		var value = $(this).val();
	    $('#urlAdress').css('transform','rotate(' + value + 'deg)');
	    // console.log(value);
	});
	$("#visibility").on("input", function(){
		var value = $(this).val();
		$("#urlAdress").css("opacity", value/100);
	})
	//Работа с текстом
	var canvas = document.getElementById("textImgKonstr");
	var ctx = canvas.getContext("2d");

	var fontConfig = function(fontSize, fontFamily){
		return [
		'bold',
		fontSize + 'px',
		fontFamily
		].join(' ');
	};

	var renderText = function()
	{
		var fontFamily = $('.fontFamily').val();
		var fontSize = $('.sizeText').val();
		ctx.clearRect(0, 0, canvas.width, canvas.height);
		ctx.font = fontConfig(fontSize, fontFamily);
	    ctx.fillText($("#textKonstr").val(), 0, 50);
	}

	$(".selectKonstr").on("change", renderText);
	$("#textKonstr").on("input", renderText);
	$("#colorTextKons").on("input", function(){
		var color = $(this).val();
		ctx.fillStyle = "#"+ color;
	});
});
//Перемещать вставленное изображение
$(function(){
	$("#urlAdress").draggable({
		drag: function(event, ui){
			$("#leftCanvas").val(ui.position.left);
			$("#topCanvas").val(ui.position.top);
		}
	});
	$("#textImgKonstr").draggable({
		drag: function(event, ui){
			$("#leftText").val(ui.position.left);
			$("#topText").val(ui.position.top);
		}
	})
});