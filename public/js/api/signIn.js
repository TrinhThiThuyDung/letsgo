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
                minlength: "At least 6 characters required!",
                maxlength: "At maximum 50 characters required!",
                required: "Please enter your email!",
                email: "Your email address must be in the format of name@domain.com!"
            },
            password: {
                minlength: "At least 6 characters required!",
                maxlength: "At maximum 20 characters required!",
                required: "Please enter password!"
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
                         console.log("khsdjsdhf");
                                if($('#remember-me').is(':checked')){
                                // Lưu trữ
                                    window.localStorage.setItem("id" , results.id );
                                    window.sessionStorage.setItem( "username" , results.name);
                                }
                                window.sessionStorage.setItem("id" , results.id );
                                window.sessionStorage.setItem( "username" , results.name);
                        
                            document.location.href  = "web/photo";
                        }
                    },
                    error: function(errors ){

                        swal.showInputError("Status: Error"+"\n Error: "+errors);
                    }
                });
            return false;
        }
    });
/********************************Register************************************/
});