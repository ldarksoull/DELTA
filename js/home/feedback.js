$(document).ready(function() {

	//E-mail Ajax Send
	$(".feedback-form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "feedback2.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Ваша заявка принята!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});