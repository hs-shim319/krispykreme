$(document).ready(function(){
    var gnb_state=0;
    $(".gnb a.menu_btn").click(function(){
        if(gnb_state==0){
            $(".gnb>ul").show();
            $(".gnb").stop().animate({width:"70%"},'fast');
            $(".gnb_bg").fadeIn('fast');
            $(this).addClass("active");
            gnb_state=1;
        }else{
            $(".gnb>ul").hide();
            $(".gnb").stop().animate({width:"0%"},'fast');
            $(".gnb_bg").fadeOut('fast');
            $(this).removeClass("active");
            gnb_state=0;
        }
    });
    $(".gnb_list>li>a").click(function(){
       $(".gnb_list>li>ul").stop().slideUp('fast');
       $(this).next().stop().slideToggle('fast'); 
    });
    
    var domidx=0;
    var domlen=$(".dom li").length;
    $(".dom_next").click(function(){
        if(domidx<(domlen-1)){
            domidx++;
        }else{
            domidx=0;                    
        }
        $(".dom li").eq(domidx).siblings().fadeOut();
        $(".dom li").eq(domidx).fadeIn();
    });
    $(".dom_prev").click(function(){
        if(domidx==0){
            domidx=domlen-1;
        }else{
            domidx--;                    
        }
        $(".dom li").eq(domidx).siblings().fadeOut();
        $(".dom li").eq(domidx).fadeIn();
    });
    
    /*탑버튼*/
    $(".top_btn").click(function(){
        return $("html, body").animate({scrollTop:0},300),!1})
    $(".top_btn").hide();
    $(function () {
            $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.top_btn').fadeIn('slow');
            } else {
                $('.top_btn').fadeOut('slow');
            }
            });
    });
    /*locationbar*/
    $(".location_bar p").click(function(){
        $(".location_bar ul").stop().slideToggle('fast');
    });
    $(".dom_menu li").click(function(){
        $(this).find("dd").stop().fadeToggle('fast');        
    });
    
    
    //아이스크림
    $(".tab ul.ice li").click(function(){
        $(this).addClass("currently");
        $(this).siblings().removeClass("currently");
    });
    $(".tab ul.ice li").eq(0).click(function(){
       $(".menu_list li").show();  
    });
    $(".tab ul.ice li").eq(1).click(function(){
       $(".menu_list li.m_icecream").siblings().hide();  
       $(".menu_list li.m_icecream").show();  
    });
    $(".tab ul.ice li").eq(2).click(function(){
       $(".menu_list li.m_shake").siblings().hide();  
       $(".menu_list li.m_shake").show();  
    });
    $(".tab ul.ice li").eq(3).click(function(){
       $(".menu_list li.m_frozen").siblings().hide();
       $(".menu_list li.m_frozen").show();    
    });
    
    //도넛
    $(".tab ul.dou li").click(function(){
        $(this).addClass("currently");
        $(this).siblings().removeClass("currently");
    });
    $(".tab ul.dou li").eq(0).click(function(){
       $(".menu_list li").show();  
    });
    $(".tab ul.dou li").eq(1).click(function(){
       $(".menu_list li.m_dougnuts").siblings().hide();  
       $(".menu_list li.m_dougnuts").show();  
    });
    $(".tab ul.dou li").eq(2).click(function(){
       $(".menu_list li.m_season").siblings().hide();  
       $(".menu_list li.m_season").show();  
    });
    $(".tab ul.dou li").eq(3).click(function(){
       $(".menu_list li.m_filled").siblings().hide();
       $(".menu_list li.m_filled").show();    
    });
        
    //커피음료
    $(".tab ul.bev li").click(function(){
        $(this).addClass("currently");
        $(this).siblings().removeClass("currently");
    });
    $(".tab ul.bev li").eq(0).click(function(){
       $(".menu_list li").show();  
    });
    $(".tab ul.bev li").eq(1).click(function(){
       $(".menu_list li.b_coffee").siblings().hide();  
       $(".menu_list li.b_coffee").show();  
    });
    $(".tab ul.bev li").eq(2).click(function(){
       $(".menu_list li.b_ade").siblings().hide();  
       $(".menu_list li.b_ade").show();  
    });
    $(".tab ul.bev li").eq(3).click(function(){
       $(".menu_list li.b_smoothies").siblings().hide();
       $(".menu_list li.b_smoothies").show();    
    });
    $(".tab ul.bev li").eq(4).click(function(){
       $(".menu_list li.b_etc").siblings().hide();
       $(".menu_list li.b_etc").show();    
    });
    
    /*partner_service*/
    $(".p_tab li").click(function(){
        $(this).addClass("currently");
        $(this).siblings().removeClass("currently");
    });
    $(".p_tab li").eq(0).click(function(){
       $(".tab2,.tab3").hide(); 
       $(".tab1").show();  
    });
    $(".p_tab li").eq(1).click(function(){
       $(".tab1,.tab3").hide(); 
       $(".tab2").show();  
    });
    $(".p_tab li").eq(2).click(function(){
       $(".tab2,.tab1").hide(); 
       $(".tab3").show();  
    });
    
    /*brand*/
    $(".brand_tab li").click(function(){
        $(this).addClass("currently");
        $(this).siblings().removeClass("currently");
    });
    $(".brand_tab li").eq(0).click(function(){
       $(".brand_story,.history,.share_the_love").hide(); 
       $(".dougnut_theater").show();  
    });
    $(".brand_tab li").eq(1).click(function(){
       $(".dougnut_theater,.history,.share_the_love").hide(); 
       $(".brand_story").show();  
    });
    $(".brand_tab li").eq(2).click(function(){
       $(".dougnut_theater,.brand_story,.share_the_love").hide(); 
       $(".history").show();  
    });
    $(".brand_tab li").eq(3).click(function(){
       $(".dougnut_theater,.brand_story,.history").hide(); 
       $(".share_the_love").show();  
    });
    
    //faq
    $(".faq_list li.question").click(function(){
       $(".faq_list li.question").find("span.q").removeClass("redtxt");
       $(".faq_list li.answer").stop().slideUp();  
       $(this).siblings().stop().slideToggle();
       $(this).find("span.q").addClass("redtxt");
    });
    
});