$(document).ready(function(){
	$("#forma4").on("submit", function(e){
		e.preventDefault();
		var callPhone=this.procent35Phone.value;
		$.ajax({
			url: "sendEmail.php",
			type: "POST",
			data: {call0: callPhone},
			beforeSend: function(data){
				var send = true;
					$("#phoneInput1").each(function(){
						if (!$(this).val() || $(this).val() == "") {
							$("#phone4").text("Проверьте корректность указанного номера").css("color", "red");
							$(this).css("border-color", "red");
							send = false;
						}
					})
					if (!send) return false;
		    		$("#buttonModal4").text("Ожидайте...")
		    	},
			success: function(data){
				$("#procent35Modal").html(data);
			} 
		});
	});
	$("#forma").on("submit", function(e){
		e.preventDefault();
		var callPhone=this.sendPhone.value;
		$.ajax({
			url: "sendEmail.php",
			type: "POST",
			data: {call: callPhone},
			beforeSend: function(data){
				var send = true;
					$("#phoneInput").each(function(){
						if (!$(this).val() || $(this).val() == "") {
							$("#phone3").text("Проверьте корректность указанного номера").css("color", "red");
							$(this).css("border-color", "red");
							send = false;
						}
					})
					if (!send) return false;
		    		$("#buttonModalCall").text("Ожидайте...")
		    	},
			success: function(data){
				$("#callCustomModal").html(data);
			} 
		});
	});
	// $("#interpreter").click(function(){
	// 	var callPhone1 = $("#phoneSubmot").val();
	// 	$.ajax({
	// 		url: "sendEmail.php",
	// 		type: "POST",
	// 		data: {call1: callPhone1},
	// 		beforeSend: function(data){
	// 			var send = true;
	// 			$("#phoneSubmot").each(function(){
	// 				if (!$(this).val() || $(this).val() == "") {
	// 					$("#phone1").text("Вы пропустили поле").css("color", "red");
	// 					$(this).css("border-color", "red");
	// 					send = false;
	// 				}
	// 			})
	// 			if (!send) return false;
	//     		$("#interpreter").text("Ожидайте...")
	// 	    	},
	// 		success: function(data){
	// 			$("#myDisign").html(data);
	// 		} 
	// 	});
	// });
	$("#forma5").on("submit", function(e) {
		    e.preventDefault();

		    var formData1 = new FormData($(this)[0]);
		    $.ajax({
		    	type: "POST",
		    	processData: false,
		    	contentType: false,
		    	url: "sendEmail.php",
		    	data: formData1,
		    	beforeSend: function(data){
		    		var send = true;
					$("#phonePhoto1").each(function(){
						if (!$(this).val() || $(this).val() == "") {
							$("#phone5").text("Проверьте корректность указанного номера").css("color", "red");
							$(this).css("border-color", "red");
							send = false;
						}
					})
					if (!send) return false;
		    		$("#phonePhotoBut1").text("Ожидайте...")
		    	},
		    	success: function(data){
		    		$("#phonePhotoModal1").html(data);
		    	}
		    });
		});
	$("#forma1").on("submit", function(e) {
		    e.preventDefault();

		    var formData = new FormData($(this)[0]);
		    $.ajax({
		    	type: "POST",
		    	processData: false,
		    	contentType: false,
		    	url: "sendEmail.php",
		    	data: formData,
		    	beforeSend: function(data){
		    		var send = true;
					$("#phonePhoto").each(function(){
						if (!$(this).val() || $(this).val() == "") {
							$("#phone6").text("Проверьте корректность указанного номера").css("color", "red");
							$(this).css("border-color", "red");
							send = false;
						}
					})
					if (!send) return false;
		    		$("#phonePhotoBut").text("Ожидайте...")
		    	},
		    	success: function(data){
		    		$("#phonePhotoModal").html(data);
		    	}
		    });
		});
	$("#forma2").on("submit",function(e){
		e.preventDefault();
		var callTemat = this.tematPrint.value;
		$.ajax({
			url: "sendEmail.php",
			type: "POST",
			data: {call3: callTemat},
			beforeSend: function(){
		    		$("#buttonModal2").text("Ожидайте...")
		    	},
			success: function(data){
				$("#callTematPrintModal").html(data);
			}
		});
	});
	$("#forma3").on("submit",function(e){
		e.preventDefault();
		var callMaket = this.callMaket.value;
		$.ajax({
			url: "sendEmail.php",
			type: "POST",
			data: {call4: callMaket},
			beforeSend: function(data){
				var send = true;
					$("#callMaket").each(function(){
						if (!$(this).val() || $(this).val() == "") {
							$("#phone7").text("Проверьте корректность указанного номера").css("color", "red");
							$(this).css("border-color", "red");
							send = false;
						}
					})
					if (!send) return false;
		    		$("#buttonModal3").text("Ожидайте...")
		    	},
			success: function(data){
				$("#callMaketModal").html(data);
			}
		});
	});
	$("#discoutnButton").click(function(){
		var callPhone2=$("#phoneSubmot1").val();
		$.ajax({
			url: "sendEmail1.php",
			type: "POST",
			data: {call5: callPhone2},
			beforeSend: function(data){
					var send = true;
					$("#phoneSubmot1").each(function(){
						if (!$(this).val() || $(this).val() == "") {
							$("#phone2").text("Проверьте корректность указанного номера").css("color", "red");
							$(this).css("border-color", "red");
							send = false;
						}
					})
					if (!send) return false;
		    		$("#discoutnButton").text("Ожидайте...")
		    	},
			success: function(data){
				$("#sale65").html(data);
			} 
		});
	});
	$("#formaSlider").on("submit", function(e){
		e.preventDefault();
		var callPhone=this.sendPhone.value;
		$.ajax({
			url: "sendEmail.php",
			type: "POST",
			data: {callSlider: callPhone},
			beforeSend: function(data){
				var send = true;
					$("#phoneSlider").each(function(){
						if (!$(this).val() || $(this).val() == "") {
							$("#phoneSliderError").text("Проверьте корректность указанного номера").css("color", "red");
							$(this).css("border-color", "red");
							send = false;
						}
					})
					if (!send) return false;
		    		$("#buttonModalSlider").text("Ожидайте...")
		    	},
			success: function(data){
				$("#sliederModal").html(data);
			} 
		});
	});
});