$(document).ready(function(){
	/*************Register**************/
	var form = $('#form-signup');
    form.validate({
        debug: true,
        focusCleanup: true,
        errorClass: "invalid",
        validClass: "success",
        rules:{
            f_name: {
                required: true,
                minlength: 2,
                maxlength: 20
            },
            l_name: {
                required: true,
                minlength: 2,
                maxlength: 20
            }, 
            email: {
                required: true,
                minlength: 6,
                maxlength: 50
            },
            password: {
                required: true,
                minlength: 6,
                maxlength: 20
            },
            password_conf: {
                required: true,
                minlength: 6,
                maxlength: 20,
                equalTo: "#pass"
            },
        },
        messages:{
            f_name: {
                minlength: "At least 2 characters required!",
                maxlength: "At maximum 20 characters required!",
                required: "Please enter your first name!"
            },
            l_name: {
                minlength: "At least 2 characters required!",
                maxlength: "At maximum 20 characters required!",
                required: "Please enter your last name!"
            },
            email: {
                minlength: "At least 6 characters required!",
                maxlength: "At maximum 50 characters required!",
                required: "Please enter your email!",
                email: "Your email address must be in the format of name@domain.com!"
            },
            password: {
                minlength: "At least 6 characters required!",
                maxlength: "At maximum 20 characters required!",
                required: "Please enter password!"
            },
            password_conf: {
                minlength: "At least 6 characters required!",
                maxlength: "At maximum 20 characters required!",
                required: "Please enter your Confirm password!",
                equalTo: "Please enter  the same password as above!"
            },
            
        },
        groups: {
            username: "f_name l_name"
        },
        errorPlacement: function(error, element){
            if (element.attr("name") == "f_name" || element.attr("name") == "l_name" ) {
                error.insertAfter("#name");
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function (element, errorClass, validClass){
            $(element).addClass(errorClass).removeClass(validClass);
            $('#'+element.id).addClass(errorClass);
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
            $('#'+element.id).removeClass(errorClass);
        },
        submitHandler: function(form){
             form.submit();
        }
    });
/********************************Register************************************/
});