
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

$(document).ready(function(){
    
    $('.list-method .item').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('.list-method .item').removeClass('active');
        $('.tab-form').removeClass('active');

        $(this).addClass('active');
        $("#"+tab_id).addClass('active');
    })

}) 

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

$(".btn-sett a").click(function() {    
    $('.btn-sett a img').toggleClass('active');  
    $('.sub-setting').toggleClass('active'); 
});

$(document).ready(function(){
  $('.list-make .list-method a, .choose-acc').click(function(){
    $('.list-make .list-method a, .choose-acc').removeClass("active");
    $(this).addClass("active");
  });
});

$(".title-step a, .none-file, .clc-show").click(function() {    
    $(this).parents().children('.form-left .form-step').animate({ 'height': 'toggle' }); 
    $(this).parents().children('.upload-file').animate({ 'height': 'toggle' }); 
    $(this).parents().children('.info-item-creat').animate({ 'height': 'toggle' }); 
    $(this).toggleClass('active'); 
});

"use strict";
function dragNdrop(event) {
    var fileName = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("preview");
    var previewImg = document.createElement("img");
    previewImg.setAttribute("src", fileName);
    preview.innerHTML = "";
    preview.appendChild(previewImg);
}
function drag() {
    document.getElementById('uploadFile').parentNode.className = 'draging dragBox';
}
function drop() {
    document.getElementById('uploadFile').parentNode.className = 'dragBox';
}

function dragNdrop_back(event) {
    var fileName = URL.createObjectURL(event.target.files[0]);
    var preview_back = document.getElementById("preview-back");
    var previewImg = document.createElement("img");
    previewImg.setAttribute("src", fileName);
    preview_back.innerHTML = "";
    preview_back.appendChild(previewImg);
}
function drag_back() {
    document.getElementById('uploadFile').parentNode.className = 'draging dragBox';
}
function drop_back() {
    document.getElementById('uploadFile').parentNode.className = 'dragBox';
}

$('.share-link').slick({
    autoplay: false,
    arrow: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1, 
    prevArrow: '',
    nextArrow: '',
});

$(function() {
    $('#clc-copy').click(function() {
        $(this).prev("input").focus();
        $(this).prev("input").select();
     
        document.execCommand('copy');
        // $(".copied").text("Copied to clipboard").show().fadeOut(1200);
        console.log(123);
    });

});