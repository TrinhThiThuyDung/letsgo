$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
             
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='password'],input[type='email']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }
        if (isValid)
            nextStepWizard.removeAttr('disabled').removeClass("disabled").trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');

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
                            document.location.href  = "/photo";
                        }
                    },
                    error: function( xhr,status,error ){
                        swal.showInputError("Status: "+status+"\n Error: "+error);
                    }
                });
            return false;
        }
    });
/********************************Register************************************/
});