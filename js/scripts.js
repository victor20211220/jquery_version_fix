$(document).ready(function(){var options={animateStartingFrameIn:true,autoPlay:true,autoPlayDelay:1000};var mySequence=$("#sequence").sequence(options).data("sequence");$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>');$('#menu').slicknav({"allowParentLinks":true});$('body').append('<div class="statistics"></div>');$(".statistics").load("lph-statistics.html");});