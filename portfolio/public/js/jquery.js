$(document).ready(function() {

    var aud = $("#alert")[0];
    aud.load();
   $(".service").click(function() {
    aud.play();
    });
   
   
   $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll > 775) {
      $("nav").css({"background" : "white"});
    }
  });
   
   $("#contactForm").validate({
      rules: {
        name: "required",
        email: {
        required: true,
        email: true
        },
      phone: {
        required: true,
        minlength: 10,
        maxlength: 10
      },
        message: "required"
      },
      messages: {
        name: "Please fill in your name",
        email: "Please fill in a valid email",
        phone: "Please fill in a valid number",
        message: "Please enter your inquiry"
      },
      submitHandler: function(form) {
        form.submit();
      },

      highlight: function(element) {
        $(element).css('background', 'pink');
      },

      unhighlight: function(element) {
        $(element).css('background', 'lime');
      }
     });
   
   $(".heading").animate({opacity: 1}, 2000, "linear");
   $(".sub-heading").animate({right: "5%"}, 1000, "linear");
});