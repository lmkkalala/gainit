$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Entre votre nom!",
                    minlength: "vous devez entre au moin 2 noms"
                },
                subject: {
                    required: "Entrer le sujet du message",
                    minlength: "sujet trop cours"
                },
                number: {
                    required: "Entre votre numero de portable",
                    minlength: "numero de portable"
                },
                email: {
                    required: "Saisissez l'address mail"
                },
                message: {
                    required: "Saisissez le message",
                    minlength: "message trop cours"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    dataType:'json',
                    url:"../contact_process",
                    beforeSend: function(){
                        $('#contactForm :input').attr('disabled', true);
                    },
                    success: function(data) {
                        // $('#contactForm :input').attr('disabled', 'disabled');
                        // $('#contactForm').fadeTo( "slow", 1, function() {
                        //     $(this).find(':input').attr('disabled', '');
                        //     $(this).find('label').css('cursor','default');
                        //     $('#success').fadeIn()
                        //     $('.modal').modal('hide');
		                // 	$('#success').modal('show');
                        // });
                        $('#contactForm :input').attr('disabled', false);
                        $('#show').text(data.info);
                        $('#show').show();
                        setTimeout(()=>{
                            $('#show').hide();
                        },1000);
                    },
                    error: function() {
                        // $('#contactForm').fadeTo( "slow", 1, function() {
                        //     $('#error').fadeIn()
                        //     $('.modal').modal('hide');
		                // 	$('#error').modal('show');
                        // })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})