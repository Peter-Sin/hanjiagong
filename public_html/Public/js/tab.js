$(function () {
    $(".list>div").eq(0).show().siblings().hide();
    $("#nav li").click(function(){
        var index = $(this).index();
        $(".list>div").eq(index).show().siblings().hide();
    });
    $(".match div").eq(0).show().siblings("div").hide();
    $(".match li").click(function(){
        $(this).addClass("active").siblings().removeClass("active");
        var index = $(this).index();
        $(".match div").eq(index).show().siblings("div").hide()
    });

        $(".tab li").click(function(){
            $(this).addClass("active").siblings().removeClass("active");
            var index = $(this).index();
            $(".list>div").eq(index).show().siblings().hide()
        });

});


