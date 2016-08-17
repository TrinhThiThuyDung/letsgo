$(document).ready(function(){
	/*************SIGN IN**************/
	var form = $('#form-signin');
    form.validate({
        debug: true,
       /* focusCleanup: true,*/
        errorClass: "invalid error-sign",
       /* validClass: "success",*/
        rules:{
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
        },
        messages:{
            email: {
                minlength: "Email at least 6 characters!",
                maxlength: "Maximum length of 50 characters!",
                required: "Email required to fill!",
                email: "Email address must have the format name@domain.com!"
            },
            password: {
                minlength: "Password at least 6 characters!",
                maxlength: "Maximum length of 20 characters!",
                required: "Password required to fill!"
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
                $(form).ajaxSubmit({
                    dataType: 'json',
                    success: function(results){
                        if(results.status == 'error'){
                            swal({  title: "Error!",   
                                    text: results.error+".",   
                                    timer: 2000,   
                                    showConfirmButton: false,
                                    animation: "slide-from-top",
                            });

                        }
                        else if(results.status == 'success'){
                
                                window.sessionStorage.setItem("id" , results.id );
                                window.sessionStorage.setItem( "username" , results.name);
                     
                            document.location.href  = "/web/photo";
                        }
                    },
                    error : function(  xhr, status, errors ){
                       swal({  
                                    title: "Error!",   
                                    text: errors+".",   
                                       
                                    showConfirmButton: true,
                                    animation: "slide-from-top",
                            });
                    }
                });
               
            return false;
        }
    });
/********************************Register************************************/
 var form = $('#form-register');
   form.validate({ 

        debug: true,
       /* focusCleanup: true,*/
        errorClass: "invalid error-sign",
       /* validClass: "success",*/
        rules:{
            first_name: {
                required: true,
                minlength: 1,
                maxlength: 50
            },
            last_name: {
                required: true,
                minlength: 1,
                maxlength: 50
            },
            email: {
                required: true,
                minlength: 6,
                maxlength: 50
            },
            pass: {
                required: true,
                minlength: 6,
                maxlength: 20
            },
            confirm_password: {
                required: true,
                minlength: 6,
                maxlength: 20,
                equalTo: "#pass"
            },
        },
        messages:{
            first_name: {
                minlength: "Your last name should be at least 1 character!",
                maxlength: "A maximum of 50 characters! They should not be too long, it is very hard to call!",
                required: "Please fill your last name so we know who you are!"
            },
            last_name: {
                minlength: "Your name should be at least 1 character!",
                maxlength: "A maximum of 50 characters! They should not be too long, it is very hard to call!",
                required: "Please fill your first name so we know who you are!"
            },
            email: {
                minlength: "Please enter your email!",
                maxlength: "A maximum of 50 characters!",
                required: "Give us your email!",
                email: "Your email must be format name@domain.com!"
            },
            pass: {
                minlength: "Password is too short, right, fill at least 6 characters!",
                maxlength: "Too long, just 20 characters!",
                required: "Please enter the password!"
            },
            confirm_password: {
                minlength: "Password is too short, right, fill at least 6 characters!",
                maxlength: "Too long, just 20 characters!",
                required: "Please enter the password!",
                equalTo: "Passwords do not match!"
            },
            
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
                $(form).ajaxSubmit({
                    success: function(results){
                        if(results.status == 'error'){
                            swal({  title: "Error!",   
                                    text: results.error+".",   
                                    timer: 2000,   
                                    showConfirmButton: false,
                                    animation: "slide-from-top",
                            });

                        }
                        else if(results.status == 'success'){
                            window.sessionStorage.setItem("id" , results.id );
                            window.sessionStorage.setItem( "username" , results.name);
                            document.location.href  = "/web/photo";
                        }
                    },
                    error: function( xhr,status,error ){
                        swal.showInputError("status: "+status+"\n Error: "+error);
                    }
                });
            return false;
        }
    });
});