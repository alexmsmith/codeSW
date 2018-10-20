// Variables need changing
var personalIntro = '"Bringing a personal touch to development"';
var personalImg = '<img src="../images/personal.jpg" alt="personal" class="img-responsive" />';
var personalMore = "Here at codeSW, we are very personal with our clients!";

var qualityIntro = '"Delivering a quality product"';
var qualityImg = '<img src="../images/personal.jpg" alt="quality" class="img-responsive" />';
var qualityMore = "This is the introduction to quality";

var continuousIntro = '"Providing a continuous service to our clients"';
var continuousImg = '<img src="../images/personal.jpg" alt="continuos" class="img-responsive" />';
var continuousMore = "This is the introduction to quality";

// Wait till document has loaded; wait till button is selected and display content
$(document).ready(function(){
    $("#personal-button").click(function(){
        $('#prospect-intro').hide().html(personalIntro).fadeIn();
        $('#prospect-img').hide().html(personalImg).fadeIn(2000);
        $('#prospect-moreinfo').hide().html(personalMore).fadeIn(2500);
    });
    $("#quality-button").click(function(){
        $('#prospect-intro').hide().html(qualityIntro).fadeIn();
        $('#prospect-img').hide().html(qualityImg).fadeIn(2000);
        $('#prospect-moreinfo').hide().html(qualityMore).fadeIn(2500);
    });
    $("#continous-button").click(function(){
        $('#prospect-intro').hide().html(continuousIntro).fadeIn();
        $('#prospect-img').hide().html(continuousImg).fadeIn(2000);
        $('#prospect-moreinfo').hide().html(continuousMore).fadeIn(2500);
     });
});
