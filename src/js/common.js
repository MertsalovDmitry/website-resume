$(window).load(function() {
    /*preloader materializeCSS*/
    $('.preloader-background').delay(1700).fadeOut('slow');
    $('.preloader-wrapper').delay(1700).fadeOut();
});

$(document).ready(function(){
    /*sidenav materializeCSS*/
   	$('.button-collapse').sideNav({
        menuWidth: 240, /*Default is 240*/ 
        closeOnClick: true /*Closes side-nav on <a> clicks, useful for Angular/Meteor*/ 
    });

    /*scrollspy materializeCSS */
    $('.scrollspy').scrollSpy({
        scrollOffset: 0
    });

    /*parallax materializeCSS*/
    $('.parallax').parallax();

    /*owl carousel plugin jquery settings (used in section about)*/ 
    $(".owl-carousel").owlCarousel({
    	loop:true, /*Зацикливаем слайдер*/
        autoplay:true, /*Автозапуск слайдера*/
        autoplayTimeout:2000, /*Время смены слайда*/
        autoplaySpeed: 1500,
        smartSpeed:1000, /*Время движения слайда */
        navSpeed: 1000,   
    	responsiveClass:true,
        nav: true,
        dots: false,
        navText: ["<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>",
         "<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>"],
    	responsive:{ /*Адаптация в зависимости от разрешения экрана*/
    		0:{
    			items:1,
    		},
            460:{
                items:2,
            },
    		700:{
    			items:3,
    		},
    		970:{
    			items:4,            
    		}
    	}
    });

    /*skillbar animate progress bars*/
    jQuery('.skillbar').each(function(){
        jQuery(this).find('.skillbar-bar').animate({
            width:jQuery(this).attr('data-percent')
        },5000);
    });

    $.validator.setDefaults({
        errorClass: 'invalid',
        validClass: "valid",
        errorPlacement: function(error, element) {
            $(element)
             .closest("form")
            .find("label[for='" + element.attr("id") + "']")
             .attr('data-error', error.text());
        }
    });


    /*Setup form validation on the #send_form element*/ 
    $("#send_form").validate({   
        /*Specify the validation rules*/
        rules: {
            fname: {
                required: true,
                minlength: 3,
                maxlength: 20
            },
            email: {
                required: true,
                email: true
            },
            subject: {
                required: true,
                minlength: 1,
                maxlength: 30
            },
            message: {
                required: true
            }
        },
        
        /* Specify the validation error messages*/
        messages: {
            fname: {
                required: "Please enter your name",
                minlength: "Must be at least 3 characters long",
                maxlength: "Must be no more 20 characters",
            },
            email: "Please enter a valid email address",
            subject: {
                required: "Please enter subject",
                minlength: "Must be at least 1 characters long",
                maxlength: "Must be no more 30 characters",
            },
            message: {
                required: "Please enter your message"
            }
        },
        submitHandler: function(form) {
            var form_data = $(form).serialize();
            $.ajax({
            type: "POST", 
            url: "../php/send_message.php", 
            data: form_data,
            success: function() {
                    /*Clear the form*/ 
                    $(':input','#send_form')
                     .not(':button, :submit, :reset, :hidden')
                     .val('');                    
                    alert("Ваше сообщение отправлено!");
                    return false;
                },
            error:  function(xhr, str){
                    alert('Возникла ошибка: ' + xhr.responseCode);
                }
            });
        }

    });
});
