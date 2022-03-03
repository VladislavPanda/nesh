
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input3').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })

    $("#phone").mask("+375(99) 999-99-99");

    $('#corrections_block' ).hide();
    $('#renews_block' ).hide();

    $('#radio6').on('change', function(){
        if ($(this).is(':checked')) {
            $('#corrections_block').show()
        }else{
            $('#corrections_block' ).hide();
        }
    });

    $('#radio7').on('change', function(){
        if ($(this).is(':checked')) {
            $('#renews_block').show();
        }else{
            $('#renews_block' ).hide();
        }
    });

    /*==================================================================
    [ Chose Radio ]*/
    /*$("#radio1").on('change', function(){
        if ($(this).is(":checked")) {
            $('.input3-select').slideUp(300);
        }
    });

    $("#radio2").on('change', function(){
        if ($(this).is(":checked")) {
            $('.input3-select').slideDown(300);
        }
    });*/
        
    /*==================================================================
    [ Validate ]*/
    var name = $('.validate-input input[name="name"]');
    var phone = $('.validate-input input[name="phone"]');
    var message = $('.validate-input textarea[name="message"]');


    $('.validate-form').on('submit',function(){
        var check = true;

        if($(name).val().trim() == ''){
            showValidate(name);
            check=false;
        }


        /*if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            showValidate(email);
            check=false;
        }*/

        if($(message).val().trim() == ''){
            showValidate(message);
            check=false;
        }

        return check;
    });


    $('.validate-form .input3').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });

    // Валидация даты (от текущего дня)
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;
    $('#date').attr('min',today);

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
})(jQuery);