//warpper

$(document).ready(function(){
  $(".menu-icon").on("click",function(){
    $("nav ul").toggleClass("showing")
  })

});

//scrollin animation
$(window).on("scroll",function(){
  if($(window).scrollTop()){
    $("nav").addClass('gray')
    $(".scroll-top").show();
  }
  else {
    $("nav").removeClass('gray');
    $(".scroll-top").hide();
  }
})

$("#imgModal1").on("show", function () {
  $("body").addClass("modal-open");
}).on("hidden", function () {
  $("body").removeClass("modal-open")
});
//login Register button 2 in one page
$(document).ready(function(){
  $("#signup-frm-btn").click(function(){

    $(".login").hide('slow');
    $(".signup").show('slow');
    $("#signup-frm-btn").css('color','dimgray');

    $("#login-frm-btn").css('color','black');



  });
  $("#login-frm-btn").click(function(){
    $(".signup").hide('slow');
    $(".login").show('slow');

    $("#signup-frm-btn").css('color','black');
    $("#login-frm-btn").css('color','dimgray');

  })

});

//login function

$(document).ready(function(){

var userName = $('#userName').val();

  $("#login").click(function(){
    if ($('#passWord').val().length<8) {

      $('.usrnmpw-error').fadeIn(100);

if ($.trim(userName)==="") {

  $('.usrnmpw-error').fadeIn(100);

}
}
else {
    $('.usrnmpw-error').hide();
    if ($(".admin").is(':checked')) {
        window.location.href = "admin.html";

    }
    else if ($(".user").is(':checked')) {
        window.location.href = "user.html"

    }
    else {
        $(".checkbox-error").show();

    }
}


  })
});
//checkbox one box checked only
$(document).ready(function () {
    $('.check').click(function () {
        $('.check').not(this).prop('checked', false);

    })
    var page_url = window.location.href;
    var page_id = page_url.substring(page_url.lastIndexOf("#") + 1);
    if (page_id == "contact-form" ||page_id == "top-login"||page_id == "services"){
      $("html,body").animate({
      scrollTop:$("#scroll-" +page_id).offset().top - 60
    },2000 );
  }

$(".scroll-top").click(function(){
  $('html, body').animate({scrollTop : 0},800);
   return false;
})
});
//submit refresh sol.
$("#loginForm").submit(function(e) {
    e.preventDefault();
});
$(window).on("load",function(){
  $(".loader").fadeOut();
  });
