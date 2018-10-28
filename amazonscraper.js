$(document).ready(function(){
	$("#scrab").click(function(e){
		e.preventDefault();
        $.ajax({
			type: "post",
			dataType: "json",
			url: "scarber.php",
			data: { url: $("#url").val()},
			success: function(result){
            console.log(result);
        }});
	});
});


