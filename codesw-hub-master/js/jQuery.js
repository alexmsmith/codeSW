$(document).ready(function(){
    
    var a = $(window).width();
    var aW = a + 17;

    $(document).scroll(function(){
      if(aW > 992) {
        if($(document).scrollTop() == 0) {
            $("#logo").finish().animate({
                width: '130px',
                height: '30px'
            });
        }else if($(document).scrollTop() != 0) {
            $("#logo").animate({
                width: '110px',
                height: '25px'
            });
        }
      }
        
    });
    $(window).scroll(function(){
        $('.item').finish().animate({
            scrollTop: $(window).scrollTop(),
        });
    });

    
    

    /* Light and Dark mode */
    var lightMode = true;
    $('.glyphicon-lamp').click(function(){
        if(lightMode == true) {
            $('body').css({'background-color' : 'rgba(0,0,0,.6)', 'color' : 'rgba(255,255,255,.6)', 'transition' : 'background-color 400ms linear'});
            $('h2').css('color', 'rgba(255,255,255,.6)');
            $('.footer').css({'background-color' : 'rgba(0,0,0,.6)', 'color' : 'rgba(255,255,255,.6)'})
            $('p.policy > a:visited, a:link').css('color', 'rgb(244,244,244)');
            $('.side2').css({'background-color' : '#333', 'color' : 'rgba(244,244,244)'});
            $('.navbar-default').css('background-color', 'rgba(0,0,0,.6)');
            $('.moto').css('color', '#333');
            $('.support > a').css('color', '#333');
            $('.contact-top').css('color', 'rgb(244,244,244)');
            $('.left-contact').css({'background' : 'linear-gradient(to right, rgb(244,244,244), rgba(0,0,0,0.001)', 'color' : '#333'});
            $('.profile-description').css({'background' : 'rbga(0,0,0,.6)', 'color' : 'white'});
            lightMode = false;
        }else if(lightMode == false) {
            $('body').css({'background-color' : 'rgba(255,255,255,.6)', 'color' : 'rgba(0,0,0,.6)', 'transition' : 'background-color 400ms linear'});
            $('h2').css('color', 'rgba(0,0,0,.6)');
            $('.footer').css({'background-color' : 'rgb(244,244,244)', 'color' : 'rgba(0,0,0,.6)'})
            $('p.policy > a:visited, a:link').css('color', '#333');
            $('.side2').css({'background-color' : 'rgba(255,255,255,.6)', 'color' : 'rgb(0,0,0)'});
            $('.navbar-default').css('background-color', 'rgb(244,244,244)');
            $('.contact-top').css('color', 'rgba(0,0,0,.6)');
            $('.left-contact').css('background', 'linear-gradient(to right, #d4d6d8, white');
            $('.profile-description').css({'background' : 'rbga(0,0,0,.6)', 'color' : 'black'});
            lightMode = true;
        }
    });
});