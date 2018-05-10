document.writeln("<style>");
document.writeln(".bannerSlides{max-width:640px; min-width:320px; margin:0 auto; width:100%;overflow:hidden;position:fixed;bottom:0; margin-bottom:12%; z-index:990;}");
document.writeln(".bannerSlides li{width:100%;height:100%;float:left;overflow:hidden;}");
document.writeln(".bannerSlides li .close2{ width:5.2%;height:100%; float:left;display:block;}");
document.writeln(".bannerSlides li a{ float:left;display:block;width:94.8%;height:100%;}");
document.writeln(".hidden{display:none}")
document.writeln("</style>")
document.writeln("<div class=\"bannerSlides\" id=\"bannerSlides1\">");
document.writeln("<ul class=\"bannerSlide_container\">");
document.writeln(" <li><div class=\"close2\"><img src=\"js/img/ys_1.png\" style=\"width:100%;height:100%\"/></div><a href="
    "><img src=\"js/img/ys_2.png\" style=\"width:100%;height:auto\"/></a></li>");
document.writeln(" <li><div class=\"close2\"><img src=\"js/img/ys_1.png\" style=\"width:100%;height:100%\"/></div><a href="
    "><img src=\"js/img/ys_3.png\" style=\"width:100%;height:auto\"/></a></li>");
document.writeln("</ul>");
document.writeln("<div class=\"bannerSlide_foncus absolute\"> </div>");
document.writeln("</div>");
TouchSlide({ slideCell: "#bannerSlides1", titCell: '.bannerSlide_foncus', mainCell: '.bannerSlide_container', autoPage: '<span></span>', effect: 'leftLoop', delayTime: 600, interTime: 3000, autoPlay: true, titOnClassName: 'active' });
$(".close2").click(function() {
    $(".bannerSlides").addClass('hidden')
});
document.write("<script src=\"jquery.min.js\"><\/script>")
document.write("<script src=\"TouchSlide.1.1.js\"><\/script>")









//
