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
                minlength: "Họ của bạn nên có ít nhất 1 ký tự!",
                maxlength: "Tối đa là 50 ký tự! Họ của bạn không nên quá dài, rất là khó gọi!",
                required: "Hãy điền Họ của bạn để chúng tôi còn biết bạn là ai!"
            },
            last_name: {
                minlength: "Tên của bạn nên có ít nhất 1 ký tự!",
                maxlength: "Tối đa là 50 ký tự! Tên của bạn không nên quá dài, rất là khó gọi!",
                required: "Cho chúng tôi biết tên của bạn chứ!"
            },
            email: {
                minlength: "Cái tên miền cũng quá 6 ký tự rồi! Hãy điền email của bạn trung thực nào!",
                maxlength: "Tối đa là 50 ký tự nhé!",
                required: "Hãy cho chúng tôi email của bạn!",
                email: "Email của bạn phải có dạng name@domain.com!"
            },
            pass: {
                minlength: "Mật khẩu quá ngắn nhỉ, hãy điền ít nhất là 6 ký tự!",
                maxlength: "Quá dài rồi, chỉ nên 20 ký tự thôi!",
                required: "Hãy điền mật khẩu không bạn sẽ bị hack đấy!"
            },
            confirm_password: {
                minlength: "Mật khẩu quá ngắn nhỉ, hãy điền ít nhất là 6 ký tự!",
                maxlength: "Quá dài rồi, chỉ nên 20 ký tự thôi!",
                required: "Hãy điền mật khẩu không bạn sẽ bị hack đấy!",
                equalTo: "Mật khẩu không khớp nhau!"
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
                            document.location.href  = "web/photo";
                        }
                    },
                    error: function( xhr,status,error ){
                        swal.showInputError("Status: "+status+"\n Error: "+error);
                    }
                });
            return false;
        }
    });
});