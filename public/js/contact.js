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
                    required: false,
                    minlength: 4
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
                    required: "Name is required",
                    minlength: "your name must consist of at least 2 characters"
                },
                subject: {
                    minlength: "your subject must consist of at least 4 characters"
                },
                email: {
                    required: "email is required"
                },
                message: {
                    required: "Message is required",
                    minlength: "message must have at least 20 characters"
                }
            }
        })
    })
        
 })(jQuery)
})