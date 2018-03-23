$(document).ready(function() {

	setInterval(function() {
		for(var i = 0; i <= $('.star').length; i++) {
            $('.star:nth-of-type(' + Math.floor(Math.random() * 1) + i + ')').animate({
                'opacity': Math.random() * 1 - (1 * 0.1)
            }, 500);
        }
		$.ajax({
			url: "core/getstars.php",
			type: "POST",
			data: { last: last },
			success: function(data) {
				$('#sky').prepend(data.toString());
			}
		});
	}, 1000);

	$('#sky').not('.social').click(function(e) {
		var left = e.pageX, top = e.pageY;
		$.ajax({
			url: "core/add.php",
			type: "POST",
			data: { left: left, top: top },
			success: function(data) {
				var response = data.toString();
				if (response = "done") {
					$('#sky').prepend("<div class='star' style='left: " + left + "px; top: " + top + "px; opacity: 1;'></div>");
				}
			}
		});
	});

});