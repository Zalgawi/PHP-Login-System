 

$(document)
.on("submit", "form.js-register", function(event) {
	event.preventDefault();

	var _form = $(this);
	var _error = $(".js-error", _form);



	var dataObj = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val(),
		username: $("input[id='username']", _form).val(),
		skills: $("input[id='skills']", _form).val(),
	};

	if(dataObj.email.length < 6) {
		_error
			.text("please enter a valid email address").show()
			.show();
		return false;
	} else if (dataObj .password.length < 8) {
		_error
			.text("please enter a password that is at least 8 characters long.")
			.show();
			return false;

	}

	// Assuming the code gets this far, we can start the ajax process
	_error.hide();
 
	$.ajax({
		type: 'POST',
		url: 'https://stuweb.cms.gre.ac.uk/~za1180x/comp1687/ajax/register.php', //possibly have to change the location
		data: dataObj,
		dataType: 'json',
		async: true,
                /*success: function(data){
                    alert("success: " + data);
                },
                error: function(data){
                    alert("error: "  + data.responseText);
                    console.log(data.responseText);
                    
                }*/

	})
		.done(function ajaxDone(data) {
            // Whatever data is
            if(data.redirect !== undefined) {
                window.location = data.redirect;
                console.log('done');
            } else if(data.error !== undefined) {
                _error
                    .html(data.error)
                    .show();
                console.log('done');
            }
        })

	.fail(function ajaxFailed(e) {
		//this failed
        console.log(e);

	})

	return false;
})
//
.on("submit", "form.js-login", function(event) {
	event.preventDefault();

	var _form = $(this);
	var _error = $(".js-error", _form);

        var dataObj = {
            email: $("input[type='email']", _form).val(),
            password: $("input[type='password']", _form).val(),

        };



	if(dataObj.email.length < 6) {
		_error
			.text("Please enter a valid email address")
			.show();
		return false;
	} else if (dataObj.password.length < 8) {
		_error
			.text("Please enter a password that is at least 8 characters long.")
			.show();
		return false;
	}

	// Assuming the code gets this far, we can start the ajax process
	_error.hide();
    console.log(dataObj)
	$.ajax({
		type: 'POST',
		url: 'https://stuweb.cms.gre.ac.uk/~za1180x/comp1687/ajax/login.php', //possibly have to change the location
		data: dataObj,
		dataType: 'json',
		async: true,
	})
        .done(function ajaxDone(data) {
            // Whatever data is
            if(data.redirect !== undefined) {
                window.location = data.redirect;
                console.log('data');
            } else if(data.error !== undefined) {
                _error
                    .html(data.error)
                    .show();
                console.log('data');
            }
        })
        .fail(function ajaxFailed(e) {
            //this failed
            console.log(e);

        })
	return false;
})


    .on("submit", "form.js-jobs",  function(event) {
        event.preventDefault();

        var _form = $(this);
        var _error = $(".js-error", _form);
        var jobObj = {
            jobTitle: $("input[id='jobTitle']", _form) .val(),
            jobSkills: $("input[id='jobSkills']", _form) .val(),
            jobDescription: $("input[id='jobDescription']", _form).val(),
            jobImage: $("input[id='jobImage']", _form) .val(),
            jobLocation: $( "#jobLocation option:selected" ).text(),
            jobReward: $("input[id='jobReward']", _form) .val(),
            jobStatus: $("input[id='jobStatus']", _form) .val(),
            
        };

        if(jobObj.length < 1) {
            _error
                .text("Please fill in all fields.")
                .show();
            return false;
        }

        // Assuming the code gets this far, we can start the ajax process
        _error.hide();
        console.log(jobObj)
        $.ajax({
            type: 'POST',
            url: 'https://stuweb.cms.gre.ac.uk/~za1180x/comp1687/ajax/jobs.php', //possibly have to change the location
            data: jobObj,
            dataType: 'json',
            async: true,
        })
            .done(function ajaxDone(data) {
                // Whatever data is
             if(data.redirect !== undefined) {
                    console.log('data');
                } else if(data.error !== undefined) {
                _error
                    .html(data.error)
                    .show();
                console.log('data');
            }
                                           
            })
            .fail(function ajaxFailed(e) {
                //this failed
                alert("error: " + e.responseText);

            })
        return false;
    })
