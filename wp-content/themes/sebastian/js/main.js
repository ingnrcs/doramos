$(document).ready(function(){$(".pss a").click(function(s){s.preventDefault(),$(this).parent().addClass("current"),$(this).parent().siblings().removeClass("current");var e=$(this).attr("href");$(".menust").not(e).css("display","none"),$(e).fadeIn()})}),$(document).ready(function(){$(".tsll a").click(function(s){s.preventDefault(),$(this).parent().addClass("current"),$(this).parent().siblings().removeClass("current");var e=$(this).attr("href");$(".data-content").not(e).css("display","none"),$(e).fadeIn()})}),$(document).ready(function(){$(".player-menu a").click(function(s){s.preventDefault(),$(this).parent().addClass("current"),$(this).parent().siblings().removeClass("current");var e=$(this).attr("href");$(".player-content").not(e).css("display","none"),$(e).fadeIn()})}),function(s){s(document).ready(function(){function e(s,e,n){s/=255,e/=255,n/=255;var i,a,l=Math.max(s,e,n),r=Math.min(s,e,n),t=(l+r)/2;if(l==r)i=a=0;else{var c=l-r;switch(a=t>.5?c/(2-l-r):c/(l+r),l){case s:i=(e-n)/c+(n>e?6:0);break;case e:i=(n-s)/c+2;break;case n:i=(s-e)/c+4}i/=6}return t}s("#cssmenu li.has-sub>a").on("click",function(){s(this).removeAttr("href");var e=s(this).parent("li");e.hasClass("open")?(e.removeClass("open"),e.find("li").removeClass("open"),e.find("ul").slideUp()):(e.addClass("open"),e.children("ul").slideDown(),e.siblings("li").children("ul").slideUp(),e.siblings("li").removeClass("open"),e.siblings("li").find("li").removeClass("open"),e.siblings("li").find("ul").slideUp())}),s("#cssmenu>ul>li.has-sub>a").append('<span class="holder"></span>'),function(){var n,i,a,l=s("#cssmenu").css("color");l=l.slice(4),n=l.slice(0,l.indexOf(",")),l=l.slice(l.indexOf(" ")+1),i=l.slice(0,l.indexOf(",")),l=l.slice(l.indexOf(" ")+1),a=l.slice(0,l.indexOf(")"));var r=e(n,i,a);r>.7?(s("#cssmenu>ul>li>a").css("",""),s("#cssmenu>ul>li>a>span").css("border-color","rgba(90, 152, 179, 1)")):(s("#cssmenu>ul>li>a").css("",""),s("#cssmenu>ul>li>a>span").css("border-color","rgba(90, 152, 179, 1)"))}()})}(jQuery);