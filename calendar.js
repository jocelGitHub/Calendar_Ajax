$(document).ready(function(){
	$("#years").on("change", function(){
		var year = $(this).val();
		var month = $("#months").val();
		$.ajax({
			url: "days.php",
			data: {year: year, month: month},
			dataType: "JSON",
			method: "POST",

			success:function(response){
				var str = "";
				for(i = 1; i <= response.days; i++){
					str += "<option value='" + i + "'>" + i + "</option>";
				}
				$("#days").html(str);
			}
		});
	});

	$("#months").on("change", function(){
		var year = $("#years").val();
		var month = $(this).val();
		$.ajax({
			url: "days.php",
			data: {year: year, month: month},
			dataType: "JSON",
			method: "POST",

			success:function(response){
				var str = "";
				for(i = 1; i <= response.days; i++){
					str += "<option value='" + i + "'>" + i +"</option>";
				}
				$("#days").html(str);
			}
		});
	});
});