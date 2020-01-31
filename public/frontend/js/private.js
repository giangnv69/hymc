
if($(window).innerWidth() >= 1024){
    new WOW().init();
}

var dropdowns = $(".dropdown");
dropdowns.find("dt").click(function(){
    dropdowns.find("dd ul").hide();
    $(this).next().children().toggle();
});
dropdowns.find("dd ul li a").click(function(){
    var leSpan = $(this).parents(".dropdown").find("dt a span");
    $(this).parents(".dropdown").find('dd a').each(function(){
    $(this).removeClass('selected');
  });
    leSpan.html($(this).html());
    if($(this).hasClass('default')){
    leSpan.removeClass('selected')
  }
    else{
        leSpan.addClass('selected');
        $(this).addClass('selected');
    }
    $(this).parents("ul").hide();
});
$(document).bind('click', function(e){
    if (! $(e.target).parents().hasClass("dropdown")) $(".dropdown dd ul").hide();
});


// $('.stat-number').each(function () {
//    var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
//    $(this).prop('Counter', 0).animate({
//       Counter: $(this).text()
//    }, {
//       duration: 5000,
//       step: function (func) {
//          $(this).text(parseFloat(func).toFixed(size));
//       }
//    });
// });

$(function() {

    setRandomClass();
    setInterval(function () {
        setRandomClass();
    }, 2000);

    function setRandomClass() {
        var teamList = $('.abs-top');
        var teamItem = teamList.find('.abs-rout');
        var number = teamItem.length;
        var random = Math.floor((Math.random() * number));
        if(teamItem.eq(random).hasClass('active')) {
            var random = random + 1
        }
        $('.team__person_active').addClass('old')
            .siblings().removeClass('old');
        teamItem.eq(random).addClass('active')
            .siblings().removeClass('active');
    }

});

// jQuery(document).ready(function( $ ) {
//   $("#menu").mmenu({
//      "extensions": [
//         "fx-menu-zoom"
//      ],
//      "counters": true
//   });
// });

$(".clc-fix a").click(function() {    
    $('#phone-mess').toggleClass('active');  
    $(this).toggleClass('active');  
});


$('.trading').animationCounter({
        start: 0,
        end: 900000,
        delay: 100,
        step: 1000,
        txt: '',
        type: "increase",
        fix: false
    });
    $('.transaction').animationCounter({
        start: 0,
        end: 10000,
        step: 100,
        delay: 100,
        txt: '',
        type: "increase",
        fix: true
    });
    $('.spread').animationCounter({
        start: 1,
        end: 0.2,
        step: 0.1,
        delay: 300,
        type: "decrease",
        fix: true
    });
    $('.coverage').animationCounter({
        start: 0,
        end: 2500000,
        step: 100000,
        delay: 150,
        type: "increase",
        fix: false
    });
    $('.fee').animationCounter({
        start: 10,
        end: 0.5,
        step: 0.5,
        delay: 200,
        txt: '%',
        type: "decrease",
        fix: true
    });