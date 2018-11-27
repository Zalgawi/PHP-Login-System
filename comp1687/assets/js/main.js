
$(document)
.on("submit", "form.js-register", function(event) {
	event.preventDefault();

	var _form = $(this);
	var _error = $(".js-error", _form);

	var data = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val(),
	};

	if(data.email.length < 6) {
		_error
			.text("please enter a valid email address").show()
			.show();
		return false;
	} else if (data.password.length < 8) {
		_error
			.text("please enter a password that is at least 8 characters long.")
			.show();
			return false;

	}

	// Asumming the code gets this far, we can start the ajax proccess
	_error.hide();

	return false;
})