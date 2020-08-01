$(document).ready(function(){
    //타이틀
    $(".title_txt").fadeIn();
    //GNB
    $(".gnb_list>li").hover(function(){
        $(".gnb_list>li>ul, .gnb_bg").stop().slideDown(300);
        $(".header_bottom_wrap").addClass("mh_hover");
        $(".tm_grade").css({border:'1px solid #222'});
        $(".gnb>.gnb_list>li>a,.top_menu a").css({color:'#222'});
    },function(){
        $(".gnb_list>li>ul, .gnb_bg").stop().slideUp(300); 
        $(".header_bottom_wrap").removeClass("mh_hover");
        $(".gnb>.gnb_list>li>a,.top_menu a").css({color:'#fff'});
        $(".tm_grade").css({border:'1px solid #fff'});  
    });
    $(".tm_grade").click(function(){
       $(".tm_grade_content").toggle(); 
    });
    $(".tm_grade_content .exit").click(function(){
        $(".tm_grade_content").hide(); 
    });//GNB
    
        
    //locationbar
    $(".location_bar>ul>li:gt(0)").hover(function(){
        $(this).children("a").css({background:'url(../images/step_up.png) no-repeat right'});
        $(this).children("ul").stop().slideDown(500);
    },function(){
        $(this).children("a").css({background:'url(../images/step_down.png) no-repeat right'});
        $(this).children("ul").stop().slideUp(500);
    });//locationbar
    
    //스크롤 다운시 헤더컬러
    $(window).scroll(function () {
        var height = $(document).scrollTop();
        if(height!=0){
            $(".header_bottom_wrap").addClass("mh_scrolldown"); //gnbbg
            $(".location_bar_bg").addClass("lo_scrolldown");    //locationbg
            $(".gnb>.gnb_list>li>a,.top_menu a,.location_bar>ul>li>a").css({color:'#222'});
            $(".tm_grade").css({border:'1px solid #222'});
            $(".gnb_list>li").mouseleave(function(){
                $(".gnb>.gnb_list>li>a,.top_menu a").css({color:'#222'});
                $(".tm_grade").css({border:'1px solid #222'});
            }); 
            //locationbar        
            $(".location_bar>ul>li:gt(0)").children("a").css({background:'url(../images/step_down.png) no-repeat right'});
            $(".location_bar>ul>li:gt(0)").hover(function(){
                $(this).children("a").css({background:'url(../images/step_up.png) no-repeat right'});
            },function(){
                $(this).children("a").css({background:'url(../images/step_down.png) no-repeat right'});
            });//locationbar
        }else{
            $(".header_bottom_wrap").removeClass("mh_scrolldown");
            $(".location_bar_bg").removeClass("lo_scrolldown");    
            $(".gnb>.gnb_list>li>a,.top_menu a,.location_bar>ul>li>a").css({color:'#fff'});
            $(".tm_grade").css({border:'1px solid #fff'});  
            $(".gnb_list>li").hover(function(){
                $(".gnb>.gnb_list>li>a,.top_menu a").css({color:'#222'});
                $(".tm_grade").css({border:'1px solid #222'});
            },function(){    
                $(".gnb>.gnb_list>li>a,.top_menu a").css({color:'#fff'});
                $(".tm_grade").css({border:'1px solid #fff'});  
            });
            //locationbar
            $(".location_bar>ul>li:gt(0)").children("a").css({background:'url(../images/step_down_w.png) no-repeat right'});
            $(".location_bar>ul>li:gt(0)").hover(function(){
                $(this).children("a").css({background:'url(../images/step_up_w.png) no-repeat right'});
            },function(){
                $(this).children("a").css({background:'url(../images/step_down_w.png) no-repeat right'});
            });//locationbar
        }
    }); 
    
    //패밀리사이트 
    $(".family_site h3>a").click(function(){
        $(".family_site ul").stop().toggle();
//        $(this).css({background:'#fff url(../images/familysite_close.png) no-repeat 170px'});
    });
    $(".family_site>ul>li>a").click(function() {
        var ct=$(this).text();
        $(".family_site h3 a").text(ct);
        $(".family_site ul").fadeOut();
    });//패밀리사이트

    
    //메인이미지

    $("ul.banner_all li").eq(0).stop().fadeIn(500);
    $("ul.banner_all li").eq(0).find("div").stop().fadeIn(500);
    $("ul.banner_all li").eq(0).find(".bimg").stop().delay(600).fadeIn(500);
    $("ul.banner_all li").eq(0).find("p").stop().delay(1000).fadeIn(500);
    var slideI=0;
    var len=$("ul.banner_all li").length;
    
    setInterval(function(){
       $("ul.banner_all li").eq(0).find("div").stop().fadeIn(500);
       $("ul.banner_all li").eq(0).find(".bimg").stop().delay(600).fadeIn(500);
       $("ul.banner_all li").eq(0).find("p").stop().delay(1000).fadeIn(500);
       if(slideI<(len-1)){
           slideI++;
       }else{
           $("ul.banner_all li").stop().fadeOut(500);
           $("ul.banner_all li").find("div").stop().fadeOut(500);
           $("ul.banner_all li").find(".bimg").stop().fadeOut(500);
           $("ul.banner_all li").find("p").stop().fadeOut(500);
           slideI=0;
       }
        $("ul.banner_all li").eq(slideI).stop().fadeIn(500);
        $("ul.banner_all li").eq(slideI).find("div").stop().fadeIn(500);
        $("ul.banner_all li").eq(slideI).find(".bimg").stop().delay(600).fadeIn(500);
        $("ul.banner_all li").eq(slideI).find("p").stop().delay(1000).fadeIn(500);
        $(".pager a").eq(slideI).addClass("pager_c");
        $(".pager a").eq(slideI).siblings().removeClass("pager_c");
    },5000);
    
    $(".pager a").click(function(){
        var idx=$(this).index();
        $("ul.banner_all li").eq(idx).stop().fadeIn(500);
        $("ul.banner_all li").eq(idx).find("div").stop().fadeIn(500);
        $("ul.banner_all li").eq(idx).find(".bimg").stop().delay(600).fadeIn(500);
        $("ul.banner_all li").eq(idx).find("p").stop().delay(1000).fadeIn(500);
        $("ul.banner_all li").eq(idx).siblings().stop().fadeOut(500);
        $("ul.banner_all li").eq(idx).siblings().find("div").stop().fadeOut(500);
        $("ul.banner_all li").eq(idx).siblings().find(".bimg").stop().delay(600).fadeOut(500);
        $("ul.banner_all li").eq(idx).siblings().find("p").stop().delay(1000).fadeOut(500);
        $(".pager a").eq(idx).addClass("pager_c");
        $(".pager a").eq(idx).siblings().removeClass("pager_c");
    });
    
    $(".btn .banner_prev").click(function(){
       if((slideI)==0){
           slideI=(len-1);
       }else{
           $("ul.banner_all li").stop().fadeOut(500);
           $("ul.banner_all li").find("div").stop().fadeOut(500);
           $("ul.banner_all li").find(".bimg").stop().fadeOut(500);
           $("ul.banner_all li").find("p").stop().fadeOut(500);
           slideI--;
       }
        $("ul.banner_all li").eq(slideI).stop().fadeIn(500);
        $("ul.banner_all li").eq(slideI).find("div").stop().fadeIn(500);
        $("ul.banner_all li").eq(slideI).find(".bimg").stop().delay(600).fadeIn(500);
        $("ul.banner_all li").eq(slideI).find("p").stop().delay(1000).fadeIn(500);
        $(".pager a").eq(slideI).addClass("pager_c");
        $(".pager a").eq(slideI).siblings().removeClass("pager_c");
    });
    $(".btn .banner_next").click(function(){
       if(slideI<(len-1)){
           slideI++;
       }else{
           $("ul.banner_all li").stop().fadeOut(500);
           $("ul.banner_all li").find("div").stop().fadeOut(500);
           $("ul.banner_all li").find(".bimg").stop().fadeOut(500);
           $("ul.banner_all li").find("p").stop().fadeOut(500);
           slideI=0;
       }
        $("ul.banner_all li").eq(slideI).stop().fadeIn(500);
        $("ul.banner_all li").eq(slideI).find("div").stop().fadeIn(500);
        $("ul.banner_all li").eq(slideI).find(".bimg").stop().delay(600).fadeIn(500);
        $("ul.banner_all li").eq(slideI).find("p").stop().delay(1000).fadeIn(500);
        $(".pager a").eq(slideI).addClass("pager_c");
        $(".pager a").eq(slideI).siblings().removeClass("pager_c");
    });//메인 이미지
    
    //브랜드스토리
    $(".tab_menu li").click(function(){
       $(this).addClass("currently"); 
       $(this).siblings().removeClass("currently");       
    });
    $(".tab_menu li:eq(0)").click(function(){
       $(".brand_story").show();
       $(".history").hide();
       $(".share_the_love").hide();
    });
    $(".tab_menu li:eq(1)").click(function(){
       $(".brand_story").hide();
       $(".history").show();
       $(".share_the_love").hide();
    });
    $(".tab_menu li:eq(2)").click(function(){
       $(".brand_story").hide();
       $(".history").hide();
       $(".share_the_love").show();
    });
    
    //이달의 메뉴 탭
    $(".dom_menu li").click(function(){
        var idx=$(this).index();
        $(this).find("span").addClass("selected");
        $(this).siblings().find("span").removeClass("selected");
        $(".dom_menu_content>div").eq(idx).show();
        $(".dom_menu_content>div").eq(idx).siblings().hide();
    });
    
    //아이스크림
    $(".icecream_tab li").click(function(){
        $(this).addClass("currently");
        $(this).siblings().removeClass("currently");
    });
    $(".icecream_tab li").eq(0).click(function(){
       $(".icecream_menu li").show();  
    });
    $(".icecream_tab li").eq(1).click(function(){
       $(".icecream_menu li.m_icecream").siblings().hide();  
       $(".icecream_menu li.m_icecream").show();  
    });
    $(".icecream_tab li").eq(2).click(function(){
       $(".icecream_menu li.m_shake").siblings().hide();  
       $(".icecream_menu li.m_shake").show();  
    });
    $(".icecream_tab li").eq(3).click(function(){
       $(".icecream_menu li.m_frozen").siblings().hide();
       $(".icecream_menu li.m_frozen").show();    
    });
    
    //도넛
    $(".dougnuts_tab li").click(function(){
        $(this).addClass("currently");
        $(this).siblings().removeClass("currently");
    });
    $(".dougnuts_tab li").eq(0).click(function(){
       $(".dougnuts_menu li").show();  
    });
    $(".dougnuts_tab li").eq(1).click(function(){
       $(".dougnuts_menu li.m_dougnuts").siblings().hide();  
       $(".dougnuts_menu li.m_dougnuts").show();  
    });
    $(".dougnuts_tab li").eq(2).click(function(){
       $(".dougnuts_menu li.m_season").siblings().hide();  
       $(".dougnuts_menu li.m_season").show();  
    });
    $(".dougnuts_tab li").eq(3).click(function(){
       $(".dougnuts_menu li.m_filled").siblings().hide();
       $(".dougnuts_menu li.m_filled").show();    
    });
        
    //커피음료
    $(".bev_tab li").click(function(){
        $(this).addClass("currently");
        $(this).siblings().removeClass("currently");
    });
    $(".bev_tab li").eq(0).click(function(){
       $(".bev_menu li").show();  
    });
    $(".bev_tab li").eq(1).click(function(){
       $(".bev_menu li.b_coffee").siblings().hide();  
       $(".bev_menu li.b_coffee").show();  
    });
    $(".bev_tab li").eq(2).click(function(){
       $(".bev_menu li.b_ade").siblings().hide();  
       $(".bev_menu li.b_ade").show();  
    });
    $(".bev_tab li").eq(3).click(function(){
       $(".bev_menu li.b_smoothies").siblings().hide();
       $(".bev_menu li.b_smoothies").show();    
    });
    $(".bev_tab li").eq(4).click(function(){
       $(".bev_menu li.b_etc").siblings().hide();
       $(".bev_menu li.b_etc").show();    
    });
    
    //비밀번호찾기 탭
    $(".find_pw li").eq(0).click(function(){
        $(".find_pw_mobile").show();
        $(".find_pw_email").hide();
        $(this).children("a").addClass("currently");
        $(this).siblings().children("a").removeClass("currently");
    });
    $(".find_pw li").eq(1).click(function(){
        $(".find_pw_email").show();
        $(".find_pw_mobile").hide();
        $(this).children("a").addClass("currently");
        $(this).siblings().children("a").removeClass("currently");
    });
    
    //faq
    $(".faq_list li.question").click(function(){
       $(".faq_list li.question").find("span.q").removeClass("redtxt");
       $(".faq_list li.answer").stop().slideUp();  
       $(this).siblings().stop().slideToggle();
       $(this).find("span.q").addClass("redtxt");
    });
    
    
    //매장지도
    $(".store_list").click(function(){
        $(".map_wrap").show();
        $(this).next(".store_detail").show();
        $(this).siblings(".map").show();
    });
    $(".store_detail a").click(function(){
        $(".map_wrap").hide();
        $(".store_detail").hide();
        $(".map").hide();
        
    });
    
    /*탑버튼*/
    $(".top_btn").click(function(){
        return $("html, body").animate({scrollTop:0},300),!1});
    
});
