$(document).ready(function(){

	$.validator.setDefaults({
		errorClass: 'help-block',//changes the error class to help-block(bootstrap class)
		highlight: function(element) {//adds has-error class to form-group(bootstrap class)
			$(element)
			.closest('.form-group')
			.addClass('has-error');
		},
		unhighlight: function(element) {//adds has-error class to form-group(bootstrap class)
			$(element)
			.closest('.form-group')
			.removeClass('has-error');
		}
	});

    $('#createForm').validate({
      rules: {
        name: {
          required: true,
          minlength: 5
		},
		email: {
			required: true,
			myEmail: true
		},
		password: {
			required: true
		}
	},
    messages: {
      name: {
        required: 'Please enter your name.',
        minlength: 'Minimum length of name must be 5 characters.'
      },
      email: {
        required: 'Please enter an email address.',
        myEmail: 'Please enter a valid email address.'
      },
      message: {
        required: 'Please enter your message.'
      }
    }
  });

    $('#updateForm').validate({
      rules: {
        newname: {
          required: true,
          minlength: 5
		},
		newemail: {
			required: true,
			myEmail: true
		},
		newpassword: {
			required: true
		}
	},
    messages: {
      newname: {
        required: 'Please enter your name.',
        minlength: 'Minimum length of name must be 5 characters.'
      },
      newemail: {
        required: 'Please enter an email address.',
        myEmail: 'Please enter a valid email address.'
      },
      newmessage: {
        required: 'Please enter your message.'
      }
    }
  });

// create your custom rule
jQuery.validator.addMethod("myEmail", function(value, element) {
    return this.optional( element ) || ( /^[a-z0-9]+([-._][a-z0-9]+)*@([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{2,4}$/.test( value ) && /^(?=.{1,64}@.{4,64}$)(?=.{6,100}$).*/.test( value ) );
},'Please enter valid email address.');

});