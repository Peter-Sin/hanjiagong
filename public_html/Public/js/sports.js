$(function () {
    // var len = $(".tabbox .tab li").length;
    // var num = 0;
    // $(".act li").eq(0).addClass("active").siblings().removeClass("active");
    // $(".tabbox .tab li").eq(0).fadeIn().siblings().hide();
    // function interval() {
    //         num++;
    //     if(num>=len){
    //         num=0
    //     }
    //     console.log(num);
    //     $(".act li").eq(num).addClass("active").siblings().removeClass("active");
    //     $(".tabbox .tab li").eq(num).fadeIn().siblings().hide();
    // }
    // setInterval(interval,5000);


    //列表页选项卡
    $(".tab li").click(function(){
        $(this).addClass("active").siblings().removeClass("active")
    })
});