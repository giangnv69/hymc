
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
    }, 20000);

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



// $('.counter').counterUp({
//   delay: 10,
//   time: 2000
// });

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

// $(document).ready(function(){
    
//     $('ul.tabs li').click(function(){
//         var tab_id = $(this).attr('data-tab');

//         $('ul.tabs li').removeClass('current');
//         $('.tab-content-tradd').removeClass('current');

//         $(this).addClass('current');
//         $("#"+tab_id).addClass('current');
//     })

// })

