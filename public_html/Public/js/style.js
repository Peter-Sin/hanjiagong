//适配
    (function (doc, win) {
        var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
            recalc = function () {
                var clientWidth = docEl.clientWidth;
                if (!clientWidth) return;
                docEl.style.fontSize = 40 * (clientWidth / 1080) + 'px';
            };
        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener('DOMContentLoaded', recalc, false);
    })(document, window);
//TOP按钮
$(function(){
    //当滚动条大于一屏的高度的时候显示
    $(document).scroll(function(){
        var top = $(document).scrollTop();
        if(top > $(window).height()){
            $(".floatwindow").fadeIn(500)
        }else {
            $(".floatwindow").fadeOut(500)
        }
    });
    //点击top回到顶部
    $(".top").on("click",function () {
        $('body,html').animate({"scrollTop":0},500)
    });
    //菜单页打开 关闭
    $(".index_header .menu").click(function(){
        $(".menu_list").toggle();
    });
//  $(".menu_list .close").click(function(){
//      $(".menu_list").hide()
//  });
    
});


    


