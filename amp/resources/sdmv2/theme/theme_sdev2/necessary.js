
// jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
jQuery.easing.jswing=jQuery.easing.swing;
jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,a,c,b,d){return jQuery.easing[jQuery.easing.def](e,a,c,b,d)},easeInQuad:function(e,a,c,b,d){return b*(a/=d)*a+c},easeOutQuad:function(e,a,c,b,d){return-b*(a/=d)*(a-2)+c},easeInOutQuad:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a+c:-b/2*(--a*(a-2)-1)+c},easeInCubic:function(e,a,c,b,d){return b*(a/=d)*a*a+c},easeOutCubic:function(e,a,c,b,d){return b*((a=a/d-1)*a*a+1)+c},easeInOutCubic:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a*a+c:
    b/2*((a-=2)*a*a+2)+c},easeInQuart:function(e,a,c,b,d){return b*(a/=d)*a*a*a+c},easeOutQuart:function(e,a,c,b,d){return-b*((a=a/d-1)*a*a*a-1)+c},easeInOutQuart:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a*a*a+c:-b/2*((a-=2)*a*a*a-2)+c},easeInQuint:function(e,a,c,b,d){return b*(a/=d)*a*a*a*a+c},easeOutQuint:function(e,a,c,b,d){return b*((a=a/d-1)*a*a*a*a+1)+c},easeInOutQuint:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a*a*a*a+c:b/2*((a-=2)*a*a*a*a+2)+c},easeInSine:function(e,a,c,b,d){return-b*Math.cos(a/
    d*(Math.PI/2))+b+c},easeOutSine:function(e,a,c,b,d){return b*Math.sin(a/d*(Math.PI/2))+c},easeInOutSine:function(e,a,c,b,d){return-b/2*(Math.cos(Math.PI*a/d)-1)+c},easeInExpo:function(e,a,c,b,d){return 0==a?c:b*Math.pow(2,10*(a/d-1))+c},easeOutExpo:function(e,a,c,b,d){return a==d?c+b:b*(-Math.pow(2,-10*a/d)+1)+c},easeInOutExpo:function(e,a,c,b,d){return 0==a?c:a==d?c+b:1>(a/=d/2)?b/2*Math.pow(2,10*(a-1))+c:b/2*(-Math.pow(2,-10*--a)+2)+c},easeInCirc:function(e,a,c,b,d){return-b*(Math.sqrt(1-(a/=d)*
    a)-1)+c},easeOutCirc:function(e,a,c,b,d){return b*Math.sqrt(1-(a=a/d-1)*a)+c},easeInOutCirc:function(e,a,c,b,d){return 1>(a/=d/2)?-b/2*(Math.sqrt(1-a*a)-1)+c:b/2*(Math.sqrt(1-(a-=2)*a)+1)+c},easeInElastic:function(e,a,c,b,d){e=1.70158;var f=0,g=b;if(0==a)return c;if(1==(a/=d))return c+b;f||(f=0.3*d);g<Math.abs(b)?(g=b,e=f/4):e=f/(2*Math.PI)*Math.asin(b/g);return-(g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f))+c},easeOutElastic:function(e,a,c,b,d){e=1.70158;var f=0,g=b;if(0==a)return c;if(1==
    (a/=d))return c+b;f||(f=0.3*d);g<Math.abs(b)?(g=b,e=f/4):e=f/(2*Math.PI)*Math.asin(b/g);return g*Math.pow(2,-10*a)*Math.sin((a*d-e)*2*Math.PI/f)+b+c},easeInOutElastic:function(e,a,c,b,d){e=1.70158;var f=0,g=b;if(0==a)return c;if(2==(a/=d/2))return c+b;f||(f=d*0.3*1.5);g<Math.abs(b)?(g=b,e=f/4):e=f/(2*Math.PI)*Math.asin(b/g);return 1>a?-0.5*g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f)+c:0.5*g*Math.pow(2,-10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f)+b+c},easeInBack:function(e,a,c,b,d,f){void 0==
    f&&(f=1.70158);return b*(a/=d)*a*((f+1)*a-f)+c},easeOutBack:function(e,a,c,b,d,f){void 0==f&&(f=1.70158);return b*((a=a/d-1)*a*((f+1)*a+f)+1)+c},easeInOutBack:function(e,a,c,b,d,f){void 0==f&&(f=1.70158);return 1>(a/=d/2)?b/2*a*a*(((f*=1.525)+1)*a-f)+c:b/2*((a-=2)*a*(((f*=1.525)+1)*a+f)+2)+c},easeInBounce:function(e,a,c,b,d){return b-jQuery.easing.easeOutBounce(e,d-a,0,b,d)+c},easeOutBounce:function(e,a,c,b,d){return(a/=d)<1/2.75?b*7.5625*a*a+c:a<2/2.75?b*(7.5625*(a-=1.5/2.75)*a+0.75)+c:a<2.5/2.75?
    b*(7.5625*(a-=2.25/2.75)*a+0.9375)+c:b*(7.5625*(a-=2.625/2.75)*a+0.984375)+c},easeInOutBounce:function(e,a,c,b,d){return a<d/2?0.5*jQuery.easing.easeInBounce(e,2*a,0,b,d)+c:0.5*jQuery.easing.easeOutBounce(e,2*a-d,0,b,d)+0.5*b+c}});



/*
 *  v0.2b - jQuery plugin
 * Copyright (c) 2008 Joel Birch
 * Dual licensed under the MIT and GPL licenses:
 * 	http://www.opensource.org/licenses/mit-license.php
 * 	http://www.gnu.org/licenses/gpl.html
 */
(function(a){a.fn.supersubs=function(h){var f=a.extend({},a.fn.supersubs.defaults,h);return this.each(function(){var c=a(this),d=a.meta?a.extend({},f,c.data()):f,h=a('<li id="menu-fontsize">&#8212;</li>').css({padding:0,position:"absolute",top:"-999em",width:"auto"}).appendTo(c).width();a("#menu-fontsize").remove();$ULs=c.find("ul");$ULs.each(function(e){e=$ULs.eq(e);var g=e.children(),c=g.children("a"),f=g.css("white-space","nowrap").css("float"),b=e.add(g).add(c).css({"float":"none",width:"auto"}).end().end()[0].clientWidth/
    h,b=b+d.extraWidth;b>d.maxWidth?b=d.maxWidth:b<d.minWidth&&(b=d.minWidth);b+="em";e.css("width",b);g.css({"float":f,width:"100%","white-space":"normal"}).each(function(){var c=a(">ul",this),d=void 0!==c.css("left")?"left":"right";c.css(d,b)})})})};a.fn.supersubs.defaults={minWidth:9,maxWidth:25,extraWidth:0}})(jQuery);



/**
 * hoverIntent is similar to jQuery's built-in "hover" method except that
 * instead of firing the handlerIn function immediately, hoverIntent checks
 * to see if the user's mouse has slowed down (beneath the sensitivity
 * threshold) before firing the event. The handlerOut function is only
 * called after a matching handlerIn.
 *
 * hoverIntent r7 // 2013.03.11 // jQuery 1.9.1+
 * http://cherne.net/brian/resources/jquery.hoverIntent.html
 */
(function(e){e.fn.hoverIntent=function(a,f,n){var b={interval:100,sensitivity:7,timeout:0},b="object"===typeof a?e.extend(b,a):e.isFunction(f)?e.extend(b,{over:a,out:f,selector:n}):e.extend(b,{over:a,out:a,selector:f}),g,h,j,k,l=function(b){g=b.pageX;h=b.pageY},m=function(a,d){d.hoverIntent_t=clearTimeout(d.hoverIntent_t);if(Math.abs(j-g)+Math.abs(k-h)<b.sensitivity)return e(d).off("mousemove.hoverIntent",l),d.hoverIntent_s=1,b.over.apply(d,[a]);j=g;k=h;d.hoverIntent_t=setTimeout(function(){m(a,d)},
    b.interval)};a=function(a){var d=jQuery.extend({},a),c=this;c.hoverIntent_t&&(c.hoverIntent_t=clearTimeout(c.hoverIntent_t));"mouseenter"==a.type?(j=d.pageX,k=d.pageY,e(c).on("mousemove.hoverIntent",l),1!=c.hoverIntent_s&&(c.hoverIntent_t=setTimeout(function(){m(d,c)},b.interval))):(e(c).off("mousemove.hoverIntent",l),1==c.hoverIntent_s&&(c.hoverIntent_t=setTimeout(function(){c.hoverIntent_t=clearTimeout(c.hoverIntent_t);c.hoverIntent_s=0;b.out.apply(c,[d])},b.timeout)))};return this.on({"mouseenter.hoverIntent":a,
    "mouseleave.hoverIntent":a},b.selector)}})(jQuery);

/*
 * Superfish v1.5.13 - jQuery menu widget
 * Copyright (c) 2013 Joel Birch
 *
 * Dual licensed under the MIT and GPL licenses:
 * 	http://www.opensource.org/licenses/mit-license.php
 * 	http://www.gnu.org/licenses/gpl.html
 *
 */
(function(c){c.fn.superfish=function(d){var f=c.fn.superfish,a=f.c,g=c('<i class="'+a.arrowClass+'"></i>'),h=function(){var e=c(this),b=l(e);clearTimeout(b.sfTimer);e.showSuperfishUl().siblings().hideSuperfishUl()},j=function(e){var b=c(this),d=l(b),a=f.op,g=function(){a.retainPath=-1<c.inArray(b[0],a.$path);b.hideSuperfishUl();a.$path.length&&1>b.parents("li."+a.hoverClass).length&&(a.onIdle.call(),c.proxy(h,a.$path,e)())};"click"===e.type?g():(clearTimeout(d.sfTimer),d.sfTimer=setTimeout(g,
    a.delay))},l=function(e){e.hasClass(a.menuClass)&&c.error("Superfish requires you to update to a version of hoverIntent that supports event-delegation, such as this one: https://github.com/joeldbirch/onHoverIntent");e=e.closest("."+a.menuClass)[0];f.op=f.o[e.serial];return e},n=function(e){var b=c(this),a=b.siblings("ul");if(0<a.length&&!a.is(":visible")&&(b.data("follow",!1),"MSPointerDown"===e.type))return b.trigger("focus"),!1},p=function(a){var b=c(this),d=b.siblings("ul"),g=!1===b.data("follow")?
    !1:!0;if(d.length&&(f.op.useClick||!g))a.preventDefault(),d.is(":visible")?f.op.useClick&&g&&c.proxy(j,b.parent("li"),a)():c.proxy(h,b.parent("li"))()};return this.addClass(a.menuClass).each(function(){var e=this.serial=f.o.length,b=c.extend({},f.defaults,d),k=c(this),l=k.find("li:has(ul)");b.$path=k.find("li."+b.pathClass).slice(0,b.pathLevels).each(function(){c(this).addClass(b.hoverClass+" "+a.bcClass).filter("li:has(ul)").removeClass(b.pathClass)});f.o[e]=f.op=b;b.autoArrows&&l.children("a").each(function(){c(this).addClass(a.anchorClass).append(g.clone())});
    k.css("ms-touch-action","none");if(!f.op.useClick)if(c.fn.hoverIntent&&!f.op.disableHI)k.hoverIntent(h,j,"li:has(ul)");else k.on("mouseenter","li:has(ul)",h).on("mouseleave","li:has(ul)",j);e="MSPointerDown";navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad)/)||(e+=" touchstart");k.on("focusin","li",h).on("focusout","li",j).on("click","a",p).on(e,"a",n);l.not("."+a.bcClass).children("ul").show().hide();b.onInit.call(this)})};var g=c.fn.superfish;g.o=[];g.op={};g.c={bcClass:"sf-breadcrumb",
    menuClass:"sf-js-enabled",anchorClass:"sf-with-ul",arrowClass:"td-icon-menu-down"};g.defaults={hoverClass:"sfHover",pathClass:"overideThisToUse",pathLevels:1,delay:800,animation:{opacity:"show"},animationOut:{opacity:"hide"},speed:"normal",speedOut:"fast",autoArrows:!0,disableHI:!1,useClick:!1,onInit:function(){},onBeforeShow:function(){},onShow:function(){},onHide:function(){},onIdle:function(){}};c.fn.extend({hideSuperfishUl:function(){var d=g.op,f=this,a=!0===d.retainPath?d.$path:"";d.retainPath=
    !1;c("li."+d.hoverClass,this).add(this).not(a).children("ul").stop(!0,!0).animate(d.animationOut,d.speedOut,function(){$ul=c(this);$ul.parent().removeClass(d.hoverClass);d.onHide.call($ul);g.op.useClick&&f.children("a").data("follow",!1)});return this},showSuperfishUl:function(){var d=g.op,f=this,a=this.children("ul");f.addClass(d.hoverClass);d.onBeforeShow.call(a);a.stop(!0,!0).animate(d.animation,d.speed,function(){d.onShow.call(a);f.children("a").data("follow",!0)});var m=c(window).width(),h=this.children("ul").first();
    if(0<h.length){var j=this.children("ul").first().offset().left+h.width();j>m&&(h.parent().parent().hasClass("sf-menu")?h.css("left","-"+(j-m)+"px"):h.addClass("reversed").css("left","-"+(h.width()+0)+"px"))}return this}})})(jQuery);



/*
 * iosSlider - http://iosscripts.com/iosslider/
 */
(function(b){var oa=0,X=0,fa=0,T=0,Ca="ontouchstart"in window||0<navigator.msMaxTouchPoints,Da="onorientationchange"in window,ga=!1,aa=!1,Y=!1,pa=!1,ia=!1,ba="pointer",ua="pointer",ja=[],J=[],va=[],$=[],z=[],ca=[],B=[],m=[],s=[],wa=[],da=[],e={showScrollbar:function(a,e){a.scrollbarHide&&b("."+e).css({opacity:a.scrollbarOpacity,filter:"alpha(opacity:"+100*a.scrollbarOpacity+")"})},hideScrollbar:function(b,g,c,f,h,d,m,s,B,z){if(b.scrollbar&&b.scrollbarHide)for(var t=c;t<c+25;t++)g[g.length]=e.hideScrollbarIntervalTimer(10* t,f[c],(c+24-t)/24,h,d,m,s,B,z,b)},hideScrollbarInterval:function(a,g,c,f,h,d,m,B,z){T=-1*a/s[B]*(h-d-m-f);e.setSliderOffset("."+c,T);b("."+c).css({opacity:z.scrollbarOpacity*g,filter:"alpha(opacity:"+z.scrollbarOpacity*g*100+")"})},slowScrollHorizontalInterval:function(a,g,c,f,h,d,N,O,L,K,t,w,x,y,v,q,G,p,n){if(n.infiniteSlider){if(c<=-1*s[q]){var r=b(a).width();if(c<=-1*wa[q]){var u=-1*t[0];b(g).each(function(c){e.setSliderOffset(b(g)[c],u+G);c<w.length&&(w[c]=-1*u);u+=v[c]});c+=-1*w[0];m[q]=-1* w[0]+G;s[q]=m[q]+r-d;B[q]=0}else{var k=0,E=e.getSliderOffset(b(g[0]),"x");b(g).each(function(b){e.getSliderOffset(this,"x")<E&&(E=e.getSliderOffset(this,"x"),k=b)});x=m[q]+r;e.setSliderOffset(b(g)[k],x);m[q]=-1*w[1]+G;s[q]=m[q]+r-d;w.splice(0,1);w.splice(w.length,0,-1*x+G);B[q]++}}if(c>=-1*m[q]||0<=c){r=b(a).width();if(0<c)for(u=-1*t[0],b(g).each(function(c){e.setSliderOffset(b(g)[c],u+G);c<w.length&&(w[c]=-1*u);u+=v[c]}),c-=-1*w[0],m[q]=-1*w[0]+G,s[q]=m[q]+r-d,B[q]=y;0<-1*w[0]-r+G;){var A=0,I=e.getSliderOffset(b(g[0]), "x");b(g).each(function(b){e.getSliderOffset(this,"x")>I&&(I=e.getSliderOffset(this,"x"),A=b)});x=m[q]-v[A];e.setSliderOffset(b(g)[A],x);w.splice(0,0,-1*x+G);w.splice(w.length-1,1);m[q]=-1*w[0]+G;s[q]=m[q]+r-d;B[q]--;z[q]++}0>c&&(A=0,I=e.getSliderOffset(b(g[0]),"x"),b(g).each(function(b){e.getSliderOffset(this,"x")>I&&(I=e.getSliderOffset(this,"x"),A=b)}),x=m[q]-v[A],e.setSliderOffset(b(g)[A],x),w.splice(0,0,-1*x+G),w.splice(w.length-1,1),m[q]=-1*w[0]+G,s[q]=m[q]+r-d,B[q]--)}}t=!1;d=e.calcActiveOffset(n, c,w,d,B[q],y,K,q);x=(d+B[q]+y)%y;n.infiniteSlider?x!=ca[q]&&(t=!0):d!=z[q]&&(t=!0);if(t&&(y=new e.args("change",n,a,b(a).children(":eq("+x+")"),x,p),b(a).parent().data("args",y),""!=n.onSlideChange))n.onSlideChange(y);z[q]=d;ca[q]=x;c=Math.floor(c);e.setSliderOffset(a,c);n.scrollbar&&(T=Math.floor((-1*c-m[q]+G)/(s[q]-m[q]+G)*(N-O-h)),a=h-L,c>=-1*m[q]+G?(a=h-L- -1*T,e.setSliderOffset(b("."+f),0)):(c<=-1*s[q]+1&&(a=N-O-L-T),e.setSliderOffset(b("."+f),T)),b("."+f).css({width:a+"px"}))},slowScrollHorizontal:function(a, g,c,f,h,d,N,O,L,K,t,w,x,y,v,q,G,p,n,r,u){var k=e.getSliderOffset(a,"x");d=[];var E=0,A=25/1024*O;frictionCoefficient=u.frictionCoefficient;elasticFrictionCoefficient=u.elasticFrictionCoefficient;snapFrictionCoefficient=u.snapFrictionCoefficient;h>u.snapVelocityThreshold&&u.snapToChildren&&!n?E=1:h<-1*u.snapVelocityThreshold&&u.snapToChildren&&!n&&(E=-1);h<-1*A?h=-1*A:h>A&&(h=A);b(a)[0]!==b(p)[0]&&(E*=-1,h*=-2);p=B[v];if(u.infiniteSlider)var I=m[v],l=s[v];n=[];for(var A=[],F=0;F<x.length;F++)n[F]= x[F],F<g.length&&(A[F]=e.getSliderOffset(b(g[F]),"x"));for(;1<h||-1>h;){h*=frictionCoefficient;k+=h;(k>-1*m[v]||k<-1*s[v])&&!u.infiniteSlider&&(h*=elasticFrictionCoefficient,k+=h);if(u.infiniteSlider){if(k<=-1*l){for(var l=b(a).width(),J=0,P=A[0],F=0;F<A.length;F++)A[F]<P&&(P=A[F],J=F);F=I+l;A[J]=F;I=-1*n[1]+r;l=I+l-O;n.splice(0,1);n.splice(n.length,0,-1*F+r);p++}if(k>=-1*I){l=b(a).width();J=0;P=A[0];for(F=0;F<A.length;F++)A[F]>P&&(P=A[F],J=F);F=I-y[J];A[J]=F;n.splice(0,0,-1*F+r);n.splice(n.length- 1,1);I=-1*n[0]+r;l=I+l-O;p--}}d[d.length]=k}A=!1;h=e.calcActiveOffset(u,k,n,O,p,G,z[v],v);I=(h+p+G)%G;u.snapToChildren&&(u.infiniteSlider?I!=ca[v]&&(A=!0):h!=z[v]&&(A=!0),0>E&&!A?(h++,h>=x.length&&!u.infiniteSlider&&(h=x.length-1)):0<E&&!A&&(h--,0>h&&!u.infiniteSlider&&(h=0)));if(u.snapToChildren||(k>-1*m[v]||k<-1*s[v])&&!u.infiniteSlider){(k>-1*m[v]||k<-1*s[v])&&!u.infiniteSlider?d.splice(0,d.length):(d.splice(0.1*d.length,d.length),k=0<d.length?d[d.length-1]:k);for(;k<n[h]-0.5||k>n[h]+0.5;)k=(k- n[h])*snapFrictionCoefficient+n[h],d[d.length]=k;d[d.length]=n[h]}E=1;0!=d.length%2&&(E=0);for(k=0;k<c.length;k++)clearTimeout(c[k]);p=(h+p+G)%G;I=0;for(k=E;k<d.length;k+=2)if(k==E||1<Math.abs(d[k]-I)||k>=d.length-2)I=d[k],c[c.length]=e.slowScrollHorizontalIntervalTimer(10*k,a,g,d[k],f,N,O,L,K,t,h,w,x,q,G,y,v,r,p,u);I=(h+B[v]+G)%G;""!=u.onSlideComplete&&1<d.length&&(c[c.length]=e.onSlideCompleteTimer(10*(k+1),u,a,b(a).children(":eq("+I+")"),p,v));$[v]=c;e.hideScrollbar(u,c,k,d,f,N,O,K,t,v)},onSlideComplete:function(a, g,c,f,h){c=new e.args("complete",a,b(g),c,f,f);b(g).parent().data("args",c);if(""!=a.onSlideComplete)a.onSlideComplete(c)},getSliderOffset:function(a,e){var c=0;e="x"==e?4:5;if(!ga||aa||Y)c=parseInt(b(a).css("left"),10);else{for(var c=["-webkit-transform","-moz-transform","transform"],f,h=0;h<c.length;h++)if(void 0!=b(a).css(c[h])&&0<b(a).css(c[h]).length){f=b(a).css(c[h]).split(",");break}c=void 0==f[e]?0:parseInt(f[e],10)}return c},setSliderOffset:function(a,e){e=parseInt(e,10);!ga||aa||Y?b(a).css({left:e+ "px"}):b(a).css({msTransform:"matrix(1,0,0,1,"+e+",0)",webkitTransform:"matrix(1,0,0,1,"+e+",0)",MozTransform:"matrix(1,0,0,1,"+e+",0)",transform:"matrix(1,0,0,1,"+e+",0)"})},setBrowserInfo:function(){null!=navigator.userAgent.match("WebKit")?(ba="-webkit-grab",ua="-webkit-grabbing"):null!=navigator.userAgent.match("Gecko")?(ia=!0,ba="move",ua="-moz-grabbing"):null!=navigator.userAgent.match("MSIE 7")?pa=aa=!0:null!=navigator.userAgent.match("MSIE 8")?pa=Y=!0:null!=navigator.userAgent.match("MSIE 9")&& (pa=!0)},has3DTransform:function(){var a=!1,e=b("<div />").css({msTransform:"matrix(1,1,1,1,1,1)",webkitTransform:"matrix(1,1,1,1,1,1)",MozTransform:"matrix(1,1,1,1,1,1)",transform:"matrix(1,1,1,1,1,1)"});""==e.attr("style")?a=!1:ia&&21<=parseInt(navigator.userAgent.split("/")[3],10)?a=!1:void 0!=e.attr("style")&&(a=!0);return a},getSlideNumber:function(b,e,c){return(b-B[e]+c)%c},calcActiveOffset:function(b,e,c,f,h,d,m,s){h=!1;b=[];var z;e>c[0]&&(z=0);e<c[c.length-1]&&(z=d-1);for(d=0;d<c.length;d++)c[d]<= e&&c[d]>e-f&&(h||c[d]==e||(b[b.length]=c[d-1]),b[b.length]=c[d],h=!0);0==b.length&&(b[0]=c[c.length-1]);for(d=h=0;d<b.length;d++)m=Math.abs(e-b[d]),m<f&&(h=b[d],f=m);for(d=0;d<c.length;d++)h==c[d]&&(z=d);return z},changeSlide:function(a,g,c,f,h,d,m,s,L,K,t,w,x,y,v,q,G,p){e.autoSlidePause(y);for(var n=0;n<f.length;n++)clearTimeout(f[n]);var r=Math.ceil(p.autoSlideTransTimer/10)+1,u=e.getSliderOffset(g,"x"),k=w[a],E=k-u;if(p.infiniteSlider)for(a=(a-B[y]+2*q)%q,n=!1,0==a&&2==q&&(a=q,w[a]=w[a-1]-b(c).eq(0).outerWidth(!0), n=!0),k=w[a],E=k-u,k=[w[a]-b(g).width(),w[a]+b(g).width()],n&&w.splice(w.length-1,1),n=0;n<k.length;n++)Math.abs(k[n]-u)<Math.abs(E)&&(E=k[n]-u);var k=[],A;e.showScrollbar(p,h);for(n=0;n<=r;n++)A=n,A/=r,A--,A=u+E*(Math.pow(A,5)+1),k[k.length]=A;r=(a+B[y]+q)%q;for(n=u=0;n<k.length;n++){if(0==n||1<Math.abs(k[n]-u)||n>=k.length-2)u=k[n],f[n]=e.slowScrollHorizontalIntervalTimer(10*(n+1),g,c,k[n],h,d,m,s,L,K,a,t,w,v,q,x,y,G,r,p);0==n&&""!=p.onSlideStart&&(E=(z[y]+B[y]+q)%q,p.onSlideStart(new e.args("start", p,g,b(g).children(":eq("+E+")"),E,a)))}u=!1;p.infiniteSlider?r!=ca[y]&&(u=!0):a!=z[y]&&(u=!0);u&&""!=p.onSlideComplete&&(f[f.length]=e.onSlideCompleteTimer(10*(n+1),p,g,b(g).children(":eq("+r+")"),r,y));$[y]=f;e.hideScrollbar(p,f,n,k,h,d,m,L,K,y);e.autoSlide(g,c,f,h,d,m,s,L,K,t,w,x,y,v,q,G,p)},autoSlide:function(b,g,c,f,h,d,m,s,L,K,t,w,x,y,v,q,G){if(!J[x].autoSlide)return!1;e.autoSlidePause(x);ja[x]=setTimeout(function(){!G.infiniteSlider&&z[x]>t.length-1&&(z[x]-=v);e.changeSlide((z[x]+B[x]+t.length+ 1)%t.length,b,g,c,f,h,d,m,s,L,K,t,w,x,y,v,q,G);e.autoSlide(b,g,c,f,h,d,m,s,L,K,t,w,x,y,v,q,G)},G.autoSlideTimer+G.autoSlideTransTimer)},autoSlidePause:function(b){clearTimeout(ja[b])},isUnselectable:function(a,e){return""!=e.unselectableSelector&&1==b(a).closest(e.unselectableSelector).length?!0:!1},slowScrollHorizontalIntervalTimer:function(b,g,c,f,h,d,m,s,z,B,t,w,x,y,v,q,G,p,n,r){return setTimeout(function(){e.slowScrollHorizontalInterval(g,c,f,h,d,m,s,z,B,t,w,x,y,v,q,G,p,n,r)},b)},onSlideCompleteTimer:function(b, g,c,f,h,d){return setTimeout(function(){e.onSlideComplete(g,c,f,h,d)},b)},hideScrollbarIntervalTimer:function(b,g,c,f,h,d,m,s,z,B){return setTimeout(function(){e.hideScrollbarInterval(g,c,f,h,d,m,s,z,B)},b)},args:function(a,g,c,f,h,d){this.prevSlideNumber=void 0==b(c).parent().data("args")?void 0:b(c).parent().data("args").prevSlideNumber;this.prevSlideObject=void 0==b(c).parent().data("args")?void 0:b(c).parent().data("args").prevSlideObject;this.targetSlideNumber=d+1;this.targetSlideObject=b(c).children(":eq("+ d+")");this.slideChanged=!1;"load"==a?this.targetSlideObject=this.targetSlideNumber=void 0:"start"==a?this.targetSlideObject=this.targetSlideNumber=void 0:"change"==a?(this.slideChanged=!0,this.prevSlideNumber=void 0==b(c).parent().data("args")?g.startAtSlide:b(c).parent().data("args").currentSlideNumber,this.prevSlideObject=b(c).children(":eq("+this.prevSlideNumber+")")):"complete"==a&&(this.slideChanged=b(c).parent().data("args").slideChanged);this.settings=g;this.data=b(c).parent().data("iosslider"); this.sliderObject=c;this.sliderContainerObject=b(c).parent();this.currentSlideObject=f;this.currentSlideNumber=h+1;this.currentSliderOffset=-1*e.getSliderOffset(c,"x")},preventDrag:function(b){b.preventDefault()},preventClick:function(b){b.stopImmediatePropagation();return!1},enableClick:function(){return!0}};e.setBrowserInfo();var V={init:function(a,g){ga=e.has3DTransform();var c=b.extend(!0,{elasticPullResistance:0.6,frictionCoefficient:0.92,elasticFrictionCoefficient:0.6,snapFrictionCoefficient:0.92, snapToChildren:!1,snapSlideCenter:!1,startAtSlide:1,scrollbar:!1,scrollbarDrag:!1,scrollbarHide:!0,scrollbarLocation:"top",scrollbarContainer:"",scrollbarOpacity:0.4,scrollbarHeight:"4px",scrollbarBorder:"0",scrollbarMargin:"5px",scrollbarBackground:"#000",scrollbarBorderRadius:"100px",scrollbarShadow:"0 0 0 #000",scrollbarElasticPullResistance:0.9,desktopClickDrag:!1,keyboardControls:!1,tabToAdvance:!1,responsiveSlideContainer:!0,responsiveSlides:!0,navSlideSelector:"",navPrevSelector:"",navNextSelector:"", autoSlideToggleSelector:"",autoSlide:!1,autoSlideTimer:5E3,autoSlideTransTimer:750,autoSlideHoverPause:!0,infiniteSlider:!1,snapVelocityThreshold:5,slideStartVelocityThreshold:0,horizontalSlideLockThreshold:5,verticalSlideLockThreshold:3,stageCSS:{position:"relative",top:"0",left:"0",overflow:"hidden",zIndex:1},unselectableSelector:"",onSliderLoaded:"",onSliderUpdate:"",onSliderResize:"",onSlideStart:"",onSlideChange:"",onSlideComplete:""},a);void 0==g&&(g=this);return b(g).each(function(a){function g(){e.autoSlidePause(d); xa=b(C).find("a");ja=b(C).find("[onclick]");qa=b(C).find("*");b(n).css("width","");b(n).css("height","");b(C).css("width","");D=b(C).children().not("script").get();ha=[];M=[];c.responsiveSlides&&b(D).css("width","");s[d]=0;l=[];q=b(n).parent().width();r=b(n).outerWidth(!0);c.responsiveSlideContainer&&(r=b(n).outerWidth(!0)>q?q:b(n).width());b(n).css({position:c.stageCSS.position,top:c.stageCSS.top,left:c.stageCSS.left,overflow:c.stageCSS.overflow,zIndex:c.stageCSS.zIndex,webkitPerspective:1E3,webkitBackfaceVisibility:"hidden", msTouchAction:"pan-y",width:r});b(c.unselectableSelector).css({cursor:"default"});for(var a=0;a<D.length;a++){ha[a]=b(D[a]).width();M[a]=b(D[a]).outerWidth(!0);var h=M[a];c.responsiveSlides&&(M[a]>r?(h=r+-1*(M[a]-ha[a]),ha[a]=h,M[a]=r):h=ha[a],b(D[a]).css({width:h}));b(D[a]).css({webkitBackfaceVisibility:"hidden",overflow:"hidden",position:"absolute"});l[a]=-1*s[d];s[d]=s[d]+h+(M[a]-ha[a])}c.snapSlideCenter&&(p=0.5*(r-M[0]),c.responsiveSlides&&M[0]>r&&(p=0));wa[d]=2*s[d];for(a=0;a<D.length;a++)e.setSliderOffset(b(D[a]), -1*l[a]+s[d]+p),l[a]-=s[d];if(!c.infiniteSlider&&!c.snapSlideCenter){for(a=0;a<l.length&&!(l[a]<=-1*(2*s[d]-r));a++)ia=a;l.splice(ia+1,l.length);l[l.length]=-1*(2*s[d]-r)}for(a=0;a<l.length;a++)F[a]=l[a];I&&(J[d].startAtSlide=J[d].startAtSlide>l.length?l.length:J[d].startAtSlide,c.infiniteSlider?(J[d].startAtSlide=(J[d].startAtSlide-1+H)%H,z[d]=J[d].startAtSlide):(J[d].startAtSlide=0>J[d].startAtSlide-1?l.length-1:J[d].startAtSlide,z[d]=J[d].startAtSlide-1),ca[d]=z[d]);m[d]=s[d]+p;b(C).css({position:"relative", cursor:ba,webkitPerspective:"0",webkitBackfaceVisibility:"hidden",width:s[d]+"px"});R=s[d];s[d]=2*s[d]-r+2*p;(W=R+p<r||0==r?!0:!1)&&b(C).css({cursor:"default"});G=b(n).parent().outerHeight(!0);u=b(n).height();c.responsiveSlideContainer&&(u=u>G?G:u);b(n).css({height:u});e.setSliderOffset(C,l[z[d]]);if(c.infiniteSlider&&!W){a=e.getSliderOffset(b(C),"x");for(h=(B[d]+H)%H*-1;0>h;){var f=0,A=e.getSliderOffset(b(D[0]),"x");b(D).each(function(b){e.getSliderOffset(this,"x")<A&&(A=e.getSliderOffset(this,"x"), f=b)});var L=m[d]+R;e.setSliderOffset(b(D)[f],L);m[d]=-1*l[1]+p;s[d]=m[d]+R-r;l.splice(0,1);l.splice(l.length,0,-1*L+p);h++}for(;0<-1*l[0]-R+p&&c.snapSlideCenter&&I;){var O=0,P=e.getSliderOffset(b(D[0]),"x");b(D).each(function(b){e.getSliderOffset(this,"x")>P&&(P=e.getSliderOffset(this,"x"),O=b)});L=m[d]-M[O];e.setSliderOffset(b(D)[O],L);l.splice(0,0,-1*L+p);l.splice(l.length-1,1);m[d]=-1*l[0]+p;s[d]=m[d]+R-r;B[d]--;z[d]++}for(;a<=-1*s[d];)f=0,A=e.getSliderOffset(b(D[0]),"x"),b(D).each(function(b){e.getSliderOffset(this, "x")<A&&(A=e.getSliderOffset(this,"x"),f=b)}),L=m[d]+R,e.setSliderOffset(b(D)[f],L),m[d]=-1*l[1]+p,s[d]=m[d]+R-r,l.splice(0,1),l.splice(l.length,0,-1*L+p),B[d]++,z[d]--}e.setSliderOffset(C,l[z[d]]);c.desktopClickDrag||b(C).css({cursor:"default"});c.scrollbar&&(b("."+K).css({margin:c.scrollbarMargin,overflow:"hidden",display:"none"}),b("."+K+" ."+t).css({border:c.scrollbarBorder}),k=parseInt(b("."+K).css("marginLeft"))+parseInt(b("."+K).css("marginRight")),E=parseInt(b("."+K+" ."+t).css("borderLeftWidth"), 10)+parseInt(b("."+K+" ."+t).css("borderRightWidth"),10),y=""!=c.scrollbarContainer?b(c.scrollbarContainer).width():r,v=r/R*(y-k),c.scrollbarHide||(V=c.scrollbarOpacity),b("."+K).css({position:"absolute",left:0,width:y-k+"px",margin:c.scrollbarMargin}),"top"==c.scrollbarLocation?b("."+K).css("top","0"):b("."+K).css("bottom","0"),b("."+K+" ."+t).css({borderRadius:c.scrollbarBorderRadius,background:c.scrollbarBackground,height:c.scrollbarHeight,width:v-E+"px",minWidth:c.scrollbarHeight,border:c.scrollbarBorder, webkitPerspective:1E3,webkitBackfaceVisibility:"hidden",position:"relative",opacity:V,filter:"alpha(opacity:"+100*V+")",boxShadow:c.scrollbarShadow}),e.setSliderOffset(b("."+K+" ."+t),Math.floor((-1*l[z[d]]-m[d]+p)/(s[d]-m[d]+p)*(y-k-v))),b("."+K).css({display:"block"}),w=b("."+K+" ."+t),x=b("."+K));c.scrollbarDrag&&!W&&b("."+K+" ."+t).css({cursor:ba});c.infiniteSlider&&(S=(s[d]+r)/3);""!=c.navSlideSelector&&b(c.navSlideSelector).each(function(a){b(this).css({cursor:"pointer"});b(this).unbind(Q).bind(Q, function(g){"touchstart"==g.type?b(this).unbind("click.iosSliderEvent"):b(this).unbind("touchstart.iosSliderEvent");Q=g.type+".iosSliderEvent";e.changeSlide(a,C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c)})});""!=c.navPrevSelector&&(b(c.navPrevSelector).css({cursor:"pointer"}),b(c.navPrevSelector).unbind(Q).bind(Q,function(a){"touchstart"==a.type?b(this).unbind("click.iosSliderEvent"):b(this).unbind("touchstart.iosSliderEvent");Q=a.type+".iosSliderEvent";a=(z[d]+B[d]+H)%H;(0<a||c.infiniteSlider)&&e.changeSlide(a- 1,C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c)}));""!=c.navNextSelector&&(b(c.navNextSelector).css({cursor:"pointer"}),b(c.navNextSelector).unbind(Q).bind(Q,function(a){"touchstart"==a.type?b(this).unbind("click.iosSliderEvent"):b(this).unbind("touchstart.iosSliderEvent");Q=a.type+".iosSliderEvent";a=(z[d]+B[d]+H)%H;(a<l.length-1||c.infiniteSlider)&&e.changeSlide(a+1,C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c)}));c.autoSlide&&!W&&""!=c.autoSlideToggleSelector&&(b(c.autoSlideToggleSelector).css({cursor:"pointer"}),b(c.autoSlideToggleSelector).unbind(Q).bind(Q, function(a){"touchstart"==a.type?b(this).unbind("click.iosSliderEvent"):b(this).unbind("touchstart.iosSliderEvent");Q=a.type+".iosSliderEvent";ka?(e.autoSlide(C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c),ka=!1,b(c.autoSlideToggleSelector).removeClass("on")):(e.autoSlidePause(d),ka=!0,b(c.autoSlideToggleSelector).addClass("on"))}));e.autoSlide(C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c);b(n).bind("mouseleave.iosSliderEvent",function(){if(ka)return!0;e.autoSlide(C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c)});b(n).bind("touchend.iosSliderEvent", function(){if(ka)return!0;e.autoSlide(C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c)});c.autoSlideHoverPause&&b(n).bind("mouseenter.iosSliderEvent",function(){e.autoSlidePause(d)});b(n).data("iosslider",{obj:Ba,settings:c,scrollerNode:C,slideNodes:D,numberOfSlides:H,centeredSlideOffset:p,sliderNumber:d,originalOffsets:F,childrenOffsets:l,sliderMax:s[d],scrollbarClass:t,scrollbarWidth:v,scrollbarStageWidth:y,stageWidth:r,scrollMargin:k,scrollBorder:E,infiniteSliderOffset:B[d],infiniteSliderWidth:S,slideNodeOuterWidths:M, shortContent:W});I=!1;return!0}oa++;var d=oa,N=[];J[d]=b.extend({},c);m[d]=0;s[d]=0;var O=[0,0],L=[0,0],K="scrollbarBlock"+oa,t="scrollbar"+oa,w,x,y,v,q,G,p=0,n=b(this),r,u,k,E,A,I=!0;a=-1;var l,F=[],V=0,P=0,ga=0,C=b(this).children(":first-child"),D,ha,M,H=b(C).children().not("script").length,U=!1,ia=0,ya=!1,ra=void 0,S;B[d]=0;var W=!1,ka=!1;va[d]=!1;var Z,sa=!1,la=!1,Q="touchstart.iosSliderEvent click.iosSliderEvent",R,xa,ja,qa;da[d]=!1;$[d]=[];c.scrollbarDrag&&(c.scrollbar=!0,c.scrollbarHide=!1); var Ba=b(this);if(void 0!=Ba.data("iosslider"))return!0;var ma="".split(""),na=Math.floor(12317*Math.random());b(C).parent().append("<i class = 'i"+na+"'></i>").append("<i class = 'i"+na+"'></i>");b(".i"+na).css({position:"absolute",right:"10px",bottom:"10px",zIndex:1E3,fontStyle:"normal",background:"#fff",opacity:0.2}).eq(1).css({bottom:"auto",right:"auto",top:"10px",left:"10px"});for(a=0;a<ma.length;a++)b(".i"+na).html(b(".i"+na).html()+ma[a]);14.2<=parseInt(b().jquery.split(".").join(""), 10)?b(this).delegate("img","dragstart.iosSliderEvent",function(b){b.preventDefault()}):b(this).find("img").bind("dragstart.iosSliderEvent",function(b){b.preventDefault()});c.infiniteSlider&&(c.scrollbar=!1);c.infiniteSlider&&1==H&&(c.infiniteSlider=!1);c.scrollbar&&(""!=c.scrollbarContainer?b(c.scrollbarContainer).append("<div class = '"+K+"'><div class = '"+t+"'></div></div>"):b(C).parent().append("<div class = '"+K+"'><div class = '"+t+"'></div></div>"));if(!g())return!0;b(this).find("a").bind("mousedown", e.preventDrag);b(this).find("[onclick]").bind("click",e.preventDrag).each(function(){b(this).data("onclick",this.onclick)});a=e.calcActiveOffset(c,e.getSliderOffset(b(C),"x"),l,r,B[d],H,void 0,d);a=(a+B[d]+H)%H;a=new e.args("load",c,C,b(C).children(":eq("+a+")"),a,a);b(n).data("args",a);if(""!=c.onSliderLoaded)c.onSliderLoaded(a);if(J[d].responsiveSlides||J[d].responsiveSlideContainer)a=Da?"orientationchange":"resize",b(window).bind(a+".iosSliderEvent-"+d,function(){if(!g())return!0;var a=b(n).data("args"); if(""!=c.onSliderResize)c.onSliderResize(a)});!c.keyboardControls&&!c.tabToAdvance||W||b(document).bind("keydown.iosSliderEvent",function(b){aa||Y||(b=b.originalEvent);if(da[d])return!0;if(37==b.keyCode&&c.keyboardControls)b.preventDefault(),b=(z[d]+B[d]+H)%H,(0<b||c.infiniteSlider)&&e.changeSlide(b-1,C,D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c);else if(39==b.keyCode&&c.keyboardControls||9==b.keyCode&&c.tabToAdvance)b.preventDefault(),b=(z[d]+B[d]+H)%H,(b<l.length-1||c.infiniteSlider)&&e.changeSlide(b+1,C, D,N,t,v,r,y,k,E,F,l,M,d,S,H,p,c)});if(Ca||c.desktopClickDrag){var ea=!1,za=!1;a=b(C);var ta=b(C),Aa=!1;c.scrollbarDrag&&(a=a.add(w),ta=ta.add(x));b(a).bind("mousedown.iosSliderEvent touchstart.iosSliderEvent",function(a){if(ea)return!0;ea=!0;za=!1;"touchstart"==a.type?b(ta).unbind("mousedown.iosSliderEvent"):b(ta).unbind("touchstart.iosSliderEvent");if(da[d]||W||(Aa=e.isUnselectable(a.target,c)))return U=ea=!1,!0;Z=b(this)[0]===b(w)[0]?w:C;aa||Y||(a=a.originalEvent);e.autoSlidePause(d);qa.unbind(".disableClick"); if("touchstart"==a.type)eventX=a.touches[0].pageX,eventY=a.touches[0].pageY;else{if(window.getSelection)window.getSelection().empty?window.getSelection().empty():window.getSelection().removeAllRanges&&window.getSelection().removeAllRanges();else if(document.selection)if(Y)try{document.selection.empty()}catch(g){}else document.selection.empty();eventX=a.pageX;eventY=a.pageY;ya=!0;ra=C;b(this).css({cursor:ua})}O=[0,0];L=[0,0];X=0;U=!1;for(a=0;a<N.length;a++)clearTimeout(N[a]);a=e.getSliderOffset(C, "x");a>-1*m[d]+p+R?(a=-1*m[d]+p+R,e.setSliderOffset(b("."+t),a),b("."+t).css({width:v-E+"px"})):a<-1*s[d]&&(e.setSliderOffset(b("."+t),y-k-v),b("."+t).css({width:v-E+"px"}));a=b(this)[0]===b(w)[0]?m[d]:0;P=-1*(e.getSliderOffset(this,"x")-eventX-a);e.getSliderOffset(this,"y");O[1]=eventX;L[1]=eventY;la=!1});b(document).bind("touchmove.iosSliderEvent mousemove.iosSliderEvent",function(a){aa||Y||(a=a.originalEvent);if(da[d]||W||Aa||!ea)return!0;var g=0;if("touchmove"==a.type)eventX=a.touches[0].pageX, eventY=a.touches[0].pageY;else{if(window.getSelection)window.getSelection().empty||window.getSelection().removeAllRanges&&window.getSelection().removeAllRanges();else if(document.selection)if(Y)try{document.selection.empty()}catch(h){}else document.selection.empty();eventX=a.pageX;eventY=a.pageY;if(!ya||!pa&&("undefined"!=typeof a.webkitMovementX||"undefined"!=typeof a.webkitMovementY)&&0===a.webkitMovementY&&0===a.webkitMovementX)return!0}O[0]=O[1];O[1]=eventX;X=(O[1]-O[0])/2;L[0]=L[1];L[1]=eventY; fa=(L[1]-L[0])/2;if(!U){var f=(z[d]+B[d]+H)%H,f=new e.args("start",c,C,b(C).children(":eq("+f+")"),f,void 0);b(n).data("args",f);if(""!=c.onSlideStart)c.onSlideStart(f)}(fa>c.verticalSlideLockThreshold||fa<-1*c.verticalSlideLockThreshold)&&"touchmove"==a.type&&!U&&(sa=!0);(X>c.horizontalSlideLockThreshold||X<-1*c.horizontalSlideLockThreshold)&&"touchmove"==a.type&&a.preventDefault();if(X>c.slideStartVelocityThreshold||X<-1*c.slideStartVelocityThreshold)U=!0;if(U&&!sa){var f=e.getSliderOffset(C,"x"), q=b(Z)[0]===b(w)[0]?m[d]:p,u=b(Z)[0]===b(w)[0]?(m[d]-s[d]-p)/(y-k-v):1,x=b(Z)[0]===b(w)[0]?c.scrollbarElasticPullResistance:c.elasticPullResistance,G=c.snapSlideCenter&&b(Z)[0]===b(w)[0]?0:p,K=c.snapSlideCenter&&b(Z)[0]===b(w)[0]?p:0;"touchmove"==a.type&&(ga!=a.touches.length&&(P=-1*f+eventX),ga=a.touches.length);if(c.infiniteSlider){if(f<=-1*s[d]){var I=b(C).width();if(f<=-1*wa[d]){var J=-1*F[0];b(D).each(function(a){e.setSliderOffset(b(D)[a],J+p);a<l.length&&(l[a]=-1*J);J+=M[a]});P-=-1*l[0];m[d]= -1*l[0]+p;s[d]=m[d]+I-r;B[d]=0}else{var N=0,S=e.getSliderOffset(b(D[0]),"x");b(D).each(function(b){e.getSliderOffset(this,"x")<S&&(S=e.getSliderOffset(this,"x"),N=b)});x=m[d]+I;e.setSliderOffset(b(D)[N],x);m[d]=-1*l[1]+p;s[d]=m[d]+I-r;l.splice(0,1);l.splice(l.length,0,-1*x+p);B[d]++}}if(f>=-1*m[d]||0<=f)if(I=b(C).width(),0<=f)for(J=-1*F[0],b(D).each(function(a){e.setSliderOffset(b(D)[a],J+p);a<l.length&&(l[a]=-1*J);J+=M[a]}),P+=-1*l[0],m[d]=-1*l[0]+p,s[d]=m[d]+I-r,B[d]=H;0<-1*l[0]-I+p;){var Q=0,R= e.getSliderOffset(b(D[0]),"x");b(D).each(function(b){e.getSliderOffset(this,"x")>R&&(R=e.getSliderOffset(this,"x"),Q=b)});x=m[d]-M[Q];e.setSliderOffset(b(D)[Q],x);l.splice(0,0,-1*x+p);l.splice(l.length-1,1);m[d]=-1*l[0]+p;s[d]=m[d]+I-r;B[d]--;z[d]++}else Q=0,R=e.getSliderOffset(b(D[0]),"x"),b(D).each(function(b){e.getSliderOffset(this,"x")>R&&(R=e.getSliderOffset(this,"x"),Q=b)}),x=m[d]-M[Q],e.setSliderOffset(b(D)[Q],x),l.splice(0,0,-1*x+p),l.splice(l.length-1,1),m[d]=-1*l[0]+p,s[d]=m[d]+I-r,B[d]--}else I= b(C).width(),f>-1*m[d]+p&&(g=(m[d]+-1*(P-q-eventX+G)*u-q)*x*-1/u),f<-1*s[d]&&(g=(s[d]+K+-1*(P-q-eventX)*u-q)*x*-1/u);e.setSliderOffset(C,-1*(P-q-eventX-g)*u-q+K);c.scrollbar&&(e.showScrollbar(c,t),T=Math.floor((P-eventX-g-m[d]+G)/(s[d]-m[d]+p)*(y-k-v)*u),f=v,0>=T?(f=v-E- -1*T,e.setSliderOffset(b("."+t),0),b("."+t).css({width:f+"px"})):T>=y-k-E-v?(f=y-k-E-T,e.setSliderOffset(b("."+t),T),b("."+t).css({width:f+"px"})):e.setSliderOffset(b("."+t),T));"touchmove"==a.type&&(A=a.touches[0].pageX);a=!1;g= e.calcActiveOffset(c,-1*(P-eventX-g),l,r,B[d],H,void 0,d);f=(g+B[d]+H)%H;c.infiniteSlider?f!=ca[d]&&(a=!0):g!=z[d]&&(a=!0);if(a&&(z[d]=g,ca[d]=f,la=!0,f=new e.args("change",c,C,b(C).children(":eq("+f+")"),f,f),b(n).data("args",f),""!=c.onSlideChange))c.onSlideChange(f)}});ma=b(window);if(Y||aa)ma=b(document);b(a).bind("touchcancel.iosSliderEvent touchend.iosSliderEvent",function(b){b=b.originalEvent;if(za)return!1;za=!0;if(da[d]||W||Aa)return!0;if(0!=b.touches.length)for(var a=0;a<b.touches.length;a++)b.touches[a].pageX== A&&e.slowScrollHorizontal(C,D,N,t,X,fa,v,r,y,k,E,F,l,M,d,S,H,Z,la,p,c);else e.slowScrollHorizontal(C,D,N,t,X,fa,v,r,y,k,E,F,l,M,d,S,H,Z,la,p,c);ea=sa=!1;return!0});b(ma).bind("mouseup.iosSliderEvent-"+d,function(a){U?xa.unbind("click.disableClick").bind("click.disableClick",e.preventClick):xa.unbind("click.disableClick").bind("click.disableClick",e.enableClick);ja.each(function(){this.onclick=function(a){if(U)return!1;b(this).data("onclick")&&b(this).data("onclick").call(this,a||window.event)};this.onclick= b(this).data("onclick")});1.8<=parseFloat(b().jquery)?qa.each(function(){var a=b._data(this,"events");if(void 0!=a&&void 0!=a.click&&"iosSliderEvent"!=a.click[0].namespace){if(!U)return!1;b(this).one("click.disableClick",e.preventClick);var a=b._data(this,"events").click,c=a.pop();a.splice(0,0,c)}}):1.6<=parseFloat(b().jquery)&&qa.each(function(){var a=b(this).data("events");if(void 0!=a&&void 0!=a.click&&"iosSliderEvent"!=a.click[0].namespace){if(!U)return!1;b(this).one("click.disableClick",e.preventClick); var a=b(this).data("events").click,c=a.pop();a.splice(0,0,c)}});if(!va[d]){if(W)return!0;c.desktopClickDrag&&b(C).css({cursor:ba});c.scrollbarDrag&&b(w).css({cursor:ba});ya=!1;if(void 0==ra)return!0;e.slowScrollHorizontal(ra,D,N,t,X,fa,v,r,y,k,E,F,l,M,d,S,H,Z,la,p,c);ra=void 0}ea=sa=!1})}})},destroy:function(a,g){void 0==g&&(g=this);return b(g).each(function(){var c=b(this),f=c.data("iosslider");if(void 0==f)return!1;void 0==a&&(a=!0);e.autoSlidePause(f.sliderNumber);va[f.sliderNumber]=!0;b(window).unbind(".iosSliderEvent-"+ f.sliderNumber);b(document).unbind(".iosSliderEvent-"+f.sliderNumber);b(document).unbind("keydown.iosSliderEvent");b(this).unbind(".iosSliderEvent");b(this).children(":first-child").unbind(".iosSliderEvent");b(this).children(":first-child").children().unbind(".iosSliderEvent");a&&(b(this).attr("style",""),b(this).children(":first-child").attr("style",""),b(this).children(":first-child").children().attr("style",""),b(f.settings.navSlideSelector).attr("style",""),b(f.settings.navPrevSelector).attr("style", ""),b(f.settings.navNextSelector).attr("style",""),b(f.settings.autoSlideToggleSelector).attr("style",""),b(f.settings.unselectableSelector).attr("style",""));f.settings.scrollbar&&b(".scrollbarBlock"+f.sliderNumber).remove();for(var f=$[f.sliderNumber],g=0;g<f.length;g++)clearTimeout(f[g]);c.removeData("iosslider");c.removeData("args")})},update:function(a){void 0==a&&(a=this);return b(a).each(function(){var a=b(this),c=a.data("iosslider");if(void 0==c)return!1;c.settings.startAtSlide=a.data("args").currentSlideNumber; V.destroy(!1,this);1!=c.numberOfSlides&&c.settings.infiniteSlider&&(c.settings.startAtSlide=(z[c.sliderNumber]+1+B[c.sliderNumber]+c.numberOfSlides)%c.numberOfSlides);V.init(c.settings,this);a=new e.args("update",c.settings,c.scrollerNode,b(c.scrollerNode).children(":eq("+(c.settings.startAtSlide-1)+")"),c.settings.startAtSlide-1,c.settings.startAtSlide-1);b(c.stageNode).data("args",a);if(""!=c.settings.onSliderUpdate)c.settings.onSliderUpdate(a)})},addSlide:function(a,e){return this.each(function(){var c= b(this),f=c.data("iosslider");if(void 0==f)return!1;0==b(f.scrollerNode).children().length?(b(f.scrollerNode).append(a),c.data("args").currentSlideNumber=1):f.settings.infiniteSlider?(1==e?b(f.scrollerNode).children(":eq(0)").before(a):b(f.scrollerNode).children(":eq("+(e-2)+")").after(a),-1>B[f.sliderNumber]&&z[f.sliderNumber]--,c.data("args").currentSlideNumber>=e&&z[f.sliderNumber]++):(e<=f.numberOfSlides?b(f.scrollerNode).children(":eq("+(e-1)+")").before(a):b(f.scrollerNode).children(":eq("+ (e-2)+")").after(a),c.data("args").currentSlideNumber>=e&&c.data("args").currentSlideNumber++);c.data("iosslider").numberOfSlides++;V.update(this)})},removeSlide:function(a){return this.each(function(){var e=b(this),c=e.data("iosslider");if(void 0==c)return!1;b(c.scrollerNode).children(":eq("+(a-1)+")").remove();z[c.sliderNumber]>a-1&&z[c.sliderNumber]--;e.data("iosslider").numberOfSlides--;V.update(this)})},goToSlide:function(a,g){void 0==g&&(g=this);return b(g).each(function(){var c=b(this).data("iosslider"); if(void 0==c||c.shortContent)return!1;a=a>c.childrenOffsets.length?c.childrenOffsets.length-1:a-1;e.changeSlide(a,b(c.scrollerNode),b(c.slideNodes),$[c.sliderNumber],c.scrollbarClass,c.scrollbarWidth,c.stageWidth,c.scrollbarStageWidth,c.scrollMargin,c.scrollBorder,c.originalOffsets,c.childrenOffsets,c.slideNodeOuterWidths,c.sliderNumber,c.infiniteSliderWidth,c.numberOfSlides,c.centeredSlideOffset,c.settings)})},prevSlide:function(){return this.each(function(){var a=b(this).data("iosslider");if(void 0== a||a.shortContent)return!1;var g=(z[a.sliderNumber]+B[a.sliderNumber]+a.numberOfSlides)%a.numberOfSlides;(0<g||a.settings.infiniteSlider)&&e.changeSlide(g-1,b(a.scrollerNode),b(a.slideNodes),$[a.sliderNumber],a.scrollbarClass,a.scrollbarWidth,a.stageWidth,a.scrollbarStageWidth,a.scrollMargin,a.scrollBorder,a.originalOffsets,a.childrenOffsets,a.slideNodeOuterWidths,a.sliderNumber,a.infiniteSliderWidth,a.numberOfSlides,a.centeredSlideOffset,a.settings);z[a.sliderNumber]=g})},nextSlide:function(){return this.each(function(){var a= b(this).data("iosslider");if(void 0==a||a.shortContent)return!1;var g=(z[a.sliderNumber]+B[a.sliderNumber]+a.numberOfSlides)%a.numberOfSlides;(g<a.childrenOffsets.length-1||a.settings.infiniteSlider)&&e.changeSlide(g+1,b(a.scrollerNode),b(a.slideNodes),$[a.sliderNumber],a.scrollbarClass,a.scrollbarWidth,a.stageWidth,a.scrollbarStageWidth,a.scrollMargin,a.scrollBorder,a.originalOffsets,a.childrenOffsets,a.slideNodeOuterWidths,a.sliderNumber,a.infiniteSliderWidth,a.numberOfSlides,a.centeredSlideOffset, a.settings);z[a.sliderNumber]=g})},lock:function(){return this.each(function(){var a=b(this).data("iosslider");if(void 0==a||a.shortContent)return!1;b(a.scrollerNode).css({cursor:"default"});da[a.sliderNumber]=!0})},unlock:function(){return this.each(function(){var a=b(this).data("iosslider");if(void 0==a||a.shortContent)return!1;b(a.scrollerNode).css({cursor:ba});da[a.sliderNumber]=!1})},getData:function(){return this.each(function(){var a=b(this).data("iosslider");return void 0==a||a.shortContent? !1:a})},autoSlidePause:function(){return this.each(function(){var a=b(this).data("iosslider");if(void 0==a||a.shortContent)return!1;J[a.sliderNumber].autoSlide=!1;e.autoSlidePause(a.sliderNumber);return a})},autoSlidePlay:function(){return this.each(function(){var a=b(this).data("iosslider");if(void 0==a||a.shortContent)return!1;J[a.sliderNumber].autoSlide=!0;e.autoSlide(b(a.scrollerNode),b(a.slideNodes),$[a.sliderNumber],a.scrollbarClass,a.scrollbarWidth,a.stageWidth,a.scrollbarStageWidth,a.scrollMargin, a.scrollBorder,a.originalOffsets,a.childrenOffsets,a.slideNodeOuterWidths,a.sliderNumber,a.infiniteSliderWidth,a.numberOfSlides,a.centeredSlideOffset,a.settings);return a})}};b.fn.iosSlider=function(a){if(V[a])return V[a].apply(this,Array.prototype.slice.call(arguments,1));if("object"!==typeof a&&a)b.error("invalid method call!");else return V.init.apply(this,arguments)}})(jQuery);


/*! Magnific Popup - v1.0.0 - 2015-01-03
* http://dimsemenov.com/plugins/magnific-popup/
* Copyright (c) 2015 Dmitry Semenov; */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):window.jQuery||window.Zepto)}(function(a){var b,c,d,e,f,g,h="Close",i="BeforeClose",j="AfterClose",k="BeforeAppend",l="MarkupParse",m="Open",n="Change",o="mfp",p="."+o,q="mfp-ready",r="mfp-removing",s="mfp-prevent-close",t=function(){},u=!!window.jQuery,v=a(window),w=function(a,c){b.ev.on(o+a+p,c)},x=function(b,c,d,e){var f=document.createElement("div");return f.className="mfp-"+b,d&&(f.innerHTML=d),e?c&&c.appendChild(f):(f=a(f),c&&f.appendTo(c)),f},y=function(c,d){b.ev.triggerHandler(o+c,d),b.st.callbacks&&(c=c.charAt(0).toLowerCase()+c.slice(1),b.st.callbacks[c]&&b.st.callbacks[c].apply(b,a.isArray(d)?d:[d]))},z=function(c){return c===g&&b.currTemplate.closeBtn||(b.currTemplate.closeBtn=a(b.st.closeMarkup.replace("%title%",b.st.tClose)),g=c),b.currTemplate.closeBtn},A=function(){a.magnificPopup.instance||(b=new t,b.init(),a.magnificPopup.instance=b)},B=function(){var a=document.createElement("p").style,b=["ms","O","Moz","Webkit"];if(void 0!==a.transition)return!0;for(;b.length;)if(b.pop()+"Transition"in a)return!0;return!1};t.prototype={constructor:t,init:function(){var c=navigator.appVersion;b.isIE7=-1!==c.indexOf("MSIE 7."),b.isIE8=-1!==c.indexOf("MSIE 8."),b.isLowIE=b.isIE7||b.isIE8,b.isAndroid=/android/gi.test(c),b.isIOS=/iphone|ipad|ipod/gi.test(c),b.supportsTransition=B(),b.probablyMobile=b.isAndroid||b.isIOS||/(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent),d=a(document),b.popupsCache={}},open:function(c){var e;if(c.isObj===!1){b.items=c.items.toArray(),b.index=0;var g,h=c.items;for(e=0;e<h.length;e++)if(g=h[e],g.parsed&&(g=g.el[0]),g===c.el[0]){b.index=e;break}}else b.items=a.isArray(c.items)?c.items:[c.items],b.index=c.index||0;if(b.isOpen)return void b.updateItemHTML();b.types=[],f="",b.ev=c.mainEl&&c.mainEl.length?c.mainEl.eq(0):d,c.key?(b.popupsCache[c.key]||(b.popupsCache[c.key]={}),b.currTemplate=b.popupsCache[c.key]):b.currTemplate={},b.st=a.extend(!0,{},a.magnificPopup.defaults,c),b.fixedContentPos="auto"===b.st.fixedContentPos?!b.probablyMobile:b.st.fixedContentPos,b.st.modal&&(b.st.closeOnContentClick=!1,b.st.closeOnBgClick=!1,b.st.showCloseBtn=!1,b.st.enableEscapeKey=!1),b.bgOverlay||(b.bgOverlay=x("bg").on("click"+p,function(){b.close()}),b.wrap=x("wrap").attr("tabindex",-1).on("click"+p,function(a){b._checkIfClose(a.target)&&b.close()}),b.container=x("container",b.wrap)),b.contentContainer=x("content"),b.st.preloader&&(b.preloader=x("preloader",b.container,b.st.tLoading));var i=a.magnificPopup.modules;for(e=0;e<i.length;e++){var j=i[e];j=j.charAt(0).toUpperCase()+j.slice(1),b["init"+j].call(b)}y("BeforeOpen"),b.st.showCloseBtn&&(b.st.closeBtnInside?(w(l,function(a,b,c,d){c.close_replaceWith=z(d.type)}),f+=" mfp-close-btn-in"):b.wrap.append(z())),b.st.alignTop&&(f+=" mfp-align-top"),b.wrap.css(b.fixedContentPos?{overflow:b.st.overflowY,overflowX:"hidden",overflowY:b.st.overflowY}:{top:v.scrollTop(),position:"absolute"}),(b.st.fixedBgPos===!1||"auto"===b.st.fixedBgPos&&!b.fixedContentPos)&&b.bgOverlay.css({height:d.height(),position:"absolute"}),b.st.enableEscapeKey&&d.on("keyup"+p,function(a){27===a.keyCode&&b.close()}),v.on("resize"+p,function(){b.updateSize()}),b.st.closeOnContentClick||(f+=" mfp-auto-cursor"),f&&b.wrap.addClass(f);var k=b.wH=v.height(),n={};if(b.fixedContentPos&&b._hasScrollBar(k)){var o=b._getScrollbarSize();o&&(n.marginRight=o)}b.fixedContentPos&&(b.isIE7?a("body, html").css("overflow","hidden"):n.overflow="hidden");var r=b.st.mainClass;return b.isIE7&&(r+=" mfp-ie7"),r&&b._addClassToMFP(r),b.updateItemHTML(),y("BuildControls"),a("html").css(n),b.bgOverlay.add(b.wrap).prependTo(b.st.prependTo||a(document.body)),b._lastFocusedEl=document.activeElement,setTimeout(function(){b.content?(b._addClassToMFP(q),b._setFocus()):b.bgOverlay.addClass(q),d.on("focusin"+p,b._onFocusIn)},16),b.isOpen=!0,b.updateSize(k),y(m),c},close:function(){b.isOpen&&(y(i),b.isOpen=!1,b.st.removalDelay&&!b.isLowIE&&b.supportsTransition?(b._addClassToMFP(r),setTimeout(function(){b._close()},b.st.removalDelay)):b._close())},_close:function(){y(h);var c=r+" "+q+" ";if(b.bgOverlay.detach(),b.wrap.detach(),b.container.empty(),b.st.mainClass&&(c+=b.st.mainClass+" "),b._removeClassFromMFP(c),b.fixedContentPos){var e={marginRight:""};b.isIE7?a("body, html").css("overflow",""):e.overflow="",a("html").css(e)}d.off("keyup"+p+" focusin"+p),b.ev.off(p),b.wrap.attr("class","mfp-wrap").removeAttr("style"),b.bgOverlay.attr("class","mfp-bg"),b.container.attr("class","mfp-container"),!b.st.showCloseBtn||b.st.closeBtnInside&&b.currTemplate[b.currItem.type]!==!0||b.currTemplate.closeBtn&&b.currTemplate.closeBtn.detach(),b._lastFocusedEl&&a(b._lastFocusedEl).focus(),b.currItem=null,b.content=null,b.currTemplate=null,b.prevHeight=0,y(j)},updateSize:function(a){if(b.isIOS){var c=document.documentElement.clientWidth/window.innerWidth,d=window.innerHeight*c;b.wrap.css("height",d),b.wH=d}else b.wH=a||v.height();b.fixedContentPos||b.wrap.css("height",b.wH),y("Resize")},updateItemHTML:function(){var c=b.items[b.index];b.contentContainer.detach(),b.content&&b.content.detach(),c.parsed||(c=b.parseEl(b.index));var d=c.type;if(y("BeforeChange",[b.currItem?b.currItem.type:"",d]),b.currItem=c,!b.currTemplate[d]){var f=b.st[d]?b.st[d].markup:!1;y("FirstMarkupParse",f),b.currTemplate[d]=f?a(f):!0}e&&e!==c.type&&b.container.removeClass("mfp-"+e+"-holder");var g=b["get"+d.charAt(0).toUpperCase()+d.slice(1)](c,b.currTemplate[d]);b.appendContent(g,d),c.preloaded=!0,y(n,c),e=c.type,b.container.prepend(b.contentContainer),y("AfterChange")},appendContent:function(a,c){b.content=a,a?b.st.showCloseBtn&&b.st.closeBtnInside&&b.currTemplate[c]===!0?b.content.find(".mfp-close").length||b.content.append(z()):b.content=a:b.content="",y(k),b.container.addClass("mfp-"+c+"-holder"),b.contentContainer.append(b.content)},parseEl:function(c){var d,e=b.items[c];if(e.tagName?e={el:a(e)}:(d=e.type,e={data:e,src:e.src}),e.el){for(var f=b.types,g=0;g<f.length;g++)if(e.el.hasClass("mfp-"+f[g])){d=f[g];break}e.src=e.el.attr("data-mfp-src"),e.src||(e.src=e.el.attr("href"))}return e.type=d||b.st.type||"inline",e.index=c,e.parsed=!0,b.items[c]=e,y("ElementParse",e),b.items[c]},addGroup:function(a,c){var d=function(d){d.mfpEl=this,b._openClick(d,a,c)};c||(c={});var e="click.magnificPopup";c.mainEl=a,c.items?(c.isObj=!0,a.off(e).on(e,d)):(c.isObj=!1,c.delegate?a.off(e).on(e,c.delegate,d):(c.items=a,a.off(e).on(e,d)))},_openClick:function(c,d,e){var f=void 0!==e.midClick?e.midClick:a.magnificPopup.defaults.midClick;if(f||2!==c.which&&!c.ctrlKey&&!c.metaKey){var g=void 0!==e.disableOn?e.disableOn:a.magnificPopup.defaults.disableOn;if(g)if(a.isFunction(g)){if(!g.call(b))return!0}else if(v.width()<g)return!0;c.type&&(c.preventDefault(),b.isOpen&&c.stopPropagation()),e.el=a(c.mfpEl),e.delegate&&(e.items=d.find(e.delegate)),b.open(e)}},updateStatus:function(a,d){if(b.preloader){c!==a&&b.container.removeClass("mfp-s-"+c),d||"loading"!==a||(d=b.st.tLoading);var e={status:a,text:d};y("UpdateStatus",e),a=e.status,d=e.text,b.preloader.html(d),b.preloader.find("a").on("click",function(a){a.stopImmediatePropagation()}),b.container.addClass("mfp-s-"+a),c=a}},_checkIfClose:function(c){if(!a(c).hasClass(s)){var d=b.st.closeOnContentClick,e=b.st.closeOnBgClick;if(d&&e)return!0;if(!b.content||a(c).hasClass("mfp-close")||b.preloader&&c===b.preloader[0])return!0;if(c===b.content[0]||a.contains(b.content[0],c)){if(d)return!0}else if(e&&a.contains(document,c))return!0;return!1}},_addClassToMFP:function(a){b.bgOverlay.addClass(a),b.wrap.addClass(a)},_removeClassFromMFP:function(a){this.bgOverlay.removeClass(a),b.wrap.removeClass(a)},_hasScrollBar:function(a){return(b.isIE7?d.height():document.body.scrollHeight)>(a||v.height())},_setFocus:function(){(b.st.focus?b.content.find(b.st.focus).eq(0):b.wrap).focus()},_onFocusIn:function(c){return c.target===b.wrap[0]||a.contains(b.wrap[0],c.target)?void 0:(b._setFocus(),!1)},_parseMarkup:function(b,c,d){var e;d.data&&(c=a.extend(d.data,c)),y(l,[b,c,d]),a.each(c,function(a,c){if(void 0===c||c===!1)return!0;if(e=a.split("_"),e.length>1){var d=b.find(p+"-"+e[0]);if(d.length>0){var f=e[1];"replaceWith"===f?d[0]!==c[0]&&d.replaceWith(c):"img"===f?d.is("img")?d.attr("src",c):d.replaceWith('<img src="'+c+'" class="'+d.attr("class")+'" />'):d.attr(e[1],c)}}else b.find(p+"-"+a).html(c)})},_getScrollbarSize:function(){if(void 0===b.scrollbarSize){var a=document.createElement("div");a.style.cssText="width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;",document.body.appendChild(a),b.scrollbarSize=a.offsetWidth-a.clientWidth,document.body.removeChild(a)}return b.scrollbarSize}},a.magnificPopup={instance:null,proto:t.prototype,modules:[],open:function(b,c){return A(),b=b?a.extend(!0,{},b):{},b.isObj=!0,b.index=c||0,this.instance.open(b)},close:function(){return a.magnificPopup.instance&&a.magnificPopup.instance.close()},registerModule:function(b,c){c.options&&(a.magnificPopup.defaults[b]=c.options),a.extend(this.proto,c.proto),this.modules.push(b)},defaults:{disableOn:0,key:null,midClick:!1,mainClass:"",preloader:!0,focus:"",closeOnContentClick:!1,closeOnBgClick:!0,closeBtnInside:!0,showCloseBtn:!0,enableEscapeKey:!0,modal:!1,alignTop:!1,removalDelay:0,prependTo:null,fixedContentPos:"auto",fixedBgPos:"auto",overflowY:"auto",closeMarkup:'<button title="%title%" type="button" class="mfp-close">&times;</button>',tClose:"Close (Esc)",tLoading:"Loading..."}},a.fn.magnificPopup=function(c){A();var d=a(this);if("string"==typeof c)if("open"===c){var e,f=u?d.data("magnificPopup"):d[0].magnificPopup,g=parseInt(arguments[1],10)||0;f.items?e=f.items[g]:(e=d,f.delegate&&(e=e.find(f.delegate)),e=e.eq(g)),b._openClick({mfpEl:e},d,f)}else b.isOpen&&b[c].apply(b,Array.prototype.slice.call(arguments,1));else c=a.extend(!0,{},c),u?d.data("magnificPopup",c):d[0].magnificPopup=c,b.addGroup(d,c);return d};var C,D,E,F="inline",G=function(){E&&(D.after(E.addClass(C)).detach(),E=null)};a.magnificPopup.registerModule(F,{options:{hiddenClass:"hide",markup:"",tNotFound:"Content not found"},proto:{initInline:function(){b.types.push(F),w(h+"."+F,function(){G()})},getInline:function(c,d){if(G(),c.src){var e=b.st.inline,f=a(c.src);if(f.length){var g=f[0].parentNode;g&&g.tagName&&(D||(C=e.hiddenClass,D=x(C),C="mfp-"+C),E=f.after(D).detach().removeClass(C)),b.updateStatus("ready")}else b.updateStatus("error",e.tNotFound),f=a("<div>");return c.inlineElement=f,f}return b.updateStatus("ready"),b._parseMarkup(d,{},c),d}}});var H,I="ajax",J=function(){H&&a(document.body).removeClass(H)},K=function(){J(),b.req&&b.req.abort()};a.magnificPopup.registerModule(I,{options:{settings:null,cursor:"mfp-ajax-cur",tError:'<a href="%url%">The content</a> could not be loaded.'},proto:{initAjax:function(){b.types.push(I),H=b.st.ajax.cursor,w(h+"."+I,K),w("BeforeChange."+I,K)},getAjax:function(c){H&&a(document.body).addClass(H),b.updateStatus("loading");var d=a.extend({url:c.src,success:function(d,e,f){var g={data:d,xhr:f};y("ParseAjax",g),b.appendContent(a(g.data),I),c.finished=!0,J(),b._setFocus(),setTimeout(function(){b.wrap.addClass(q)},16),b.updateStatus("ready"),y("AjaxContentAdded")},error:function(){J(),c.finished=c.loadError=!0,b.updateStatus("error",b.st.ajax.tError.replace("%url%",c.src))}},b.st.ajax.settings);return b.req=a.ajax(d),""}}});var L,M=function(c){if(c.data&&void 0!==c.data.title)return c.data.title;var d=b.st.image.titleSrc;if(d){if(a.isFunction(d))return d.call(b,c);if(c.el)return c.el.attr(d)||""}return""};a.magnificPopup.registerModule("image",{options:{markup:'<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',cursor:"mfp-zoom-out-cur",titleSrc:"title",verticalFit:!0,tError:'<a href="%url%">The image</a> could not be loaded.'},proto:{initImage:function(){var c=b.st.image,d=".image";b.types.push("image"),w(m+d,function(){"image"===b.currItem.type&&c.cursor&&a(document.body).addClass(c.cursor)}),w(h+d,function(){c.cursor&&a(document.body).removeClass(c.cursor),v.off("resize"+p)}),w("Resize"+d,b.resizeImage),b.isLowIE&&w("AfterChange",b.resizeImage)},resizeImage:function(){var a=b.currItem;if(a&&a.img&&b.st.image.verticalFit){var c=0;b.isLowIE&&(c=parseInt(a.img.css("padding-top"),10)+parseInt(a.img.css("padding-bottom"),10)),a.img.css("max-height",b.wH-c)}},_onImageHasSize:function(a){a.img&&(a.hasSize=!0,L&&clearInterval(L),a.isCheckingImgSize=!1,y("ImageHasSize",a),a.imgHidden&&(b.content&&b.content.removeClass("mfp-loading"),a.imgHidden=!1))},findImageSize:function(a){var c=0,d=a.img[0],e=function(f){L&&clearInterval(L),L=setInterval(function(){return d.naturalWidth>0?void b._onImageHasSize(a):(c>200&&clearInterval(L),c++,void(3===c?e(10):40===c?e(50):100===c&&e(500)))},f)};e(1)},getImage:function(c,d){var e=0,f=function(){c&&(c.img[0].complete?(c.img.off(".mfploader"),c===b.currItem&&(b._onImageHasSize(c),b.updateStatus("ready")),c.hasSize=!0,c.loaded=!0,y("ImageLoadComplete")):(e++,200>e?setTimeout(f,100):g()))},g=function(){c&&(c.img.off(".mfploader"),c===b.currItem&&(b._onImageHasSize(c),b.updateStatus("error",h.tError.replace("%url%",c.src))),c.hasSize=!0,c.loaded=!0,c.loadError=!0)},h=b.st.image,i=d.find(".mfp-img");if(i.length){var j=document.createElement("img");j.className="mfp-img",c.el&&c.el.find("img").length&&(j.alt=c.el.find("img").attr("alt")),c.img=a(j).on("load.mfploader",f).on("error.mfploader",g),j.src=c.src,i.is("img")&&(c.img=c.img.clone()),j=c.img[0],j.naturalWidth>0?c.hasSize=!0:j.width||(c.hasSize=!1)}return b._parseMarkup(d,{title:M(c),img_replaceWith:c.img},c),b.resizeImage(),c.hasSize?(L&&clearInterval(L),c.loadError?(d.addClass("mfp-loading"),b.updateStatus("error",h.tError.replace("%url%",c.src))):(d.removeClass("mfp-loading"),b.updateStatus("ready")),d):(b.updateStatus("loading"),c.loading=!0,c.hasSize||(c.imgHidden=!0,d.addClass("mfp-loading"),b.findImageSize(c)),d)}}});var N,O=function(){return void 0===N&&(N=void 0!==document.createElement("p").style.MozTransform),N};a.magnificPopup.registerModule("zoom",{options:{enabled:!1,easing:"ease-in-out",duration:300,opener:function(a){return a.is("img")?a:a.find("img")}},proto:{initZoom:function(){var a,c=b.st.zoom,d=".zoom";if(c.enabled&&b.supportsTransition){var e,f,g=c.duration,j=function(a){var b=a.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),d="all "+c.duration/1e3+"s "+c.easing,e={position:"fixed",zIndex:9999,left:0,top:0,"-webkit-backface-visibility":"hidden"},f="transition";return e["-webkit-"+f]=e["-moz-"+f]=e["-o-"+f]=e[f]=d,b.css(e),b},k=function(){b.content.css("visibility","visible")};w("BuildControls"+d,function(){if(b._allowZoom()){if(clearTimeout(e),b.content.css("visibility","hidden"),a=b._getItemToZoom(),!a)return void k();f=j(a),f.css(b._getOffset()),b.wrap.append(f),e=setTimeout(function(){f.css(b._getOffset(!0)),e=setTimeout(function(){k(),setTimeout(function(){f.remove(),a=f=null,y("ZoomAnimationEnded")},16)},g)},16)}}),w(i+d,function(){if(b._allowZoom()){if(clearTimeout(e),b.st.removalDelay=g,!a){if(a=b._getItemToZoom(),!a)return;f=j(a)}f.css(b._getOffset(!0)),b.wrap.append(f),b.content.css("visibility","hidden"),setTimeout(function(){f.css(b._getOffset())},16)}}),w(h+d,function(){b._allowZoom()&&(k(),f&&f.remove(),a=null)})}},_allowZoom:function(){return"image"===b.currItem.type},_getItemToZoom:function(){return b.currItem.hasSize?b.currItem.img:!1},_getOffset:function(c){var d;d=c?b.currItem.img:b.st.zoom.opener(b.currItem.el||b.currItem);var e=d.offset(),f=parseInt(d.css("padding-top"),10),g=parseInt(d.css("padding-bottom"),10);e.top-=a(window).scrollTop()-f;var h={width:d.width(),height:(u?d.innerHeight():d[0].offsetHeight)-g-f};return O()?h["-moz-transform"]=h.transform="translate("+e.left+"px,"+e.top+"px)":(h.left=e.left,h.top=e.top),h}}});var P="iframe",Q="//about:blank",R=function(a){if(b.currTemplate[P]){var c=b.currTemplate[P].find("iframe");c.length&&(a||(c[0].src=Q),b.isIE8&&c.css("display",a?"block":"none"))}};a.magnificPopup.registerModule(P,{options:{markup:'<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',srcAction:"iframe_src",patterns:{youtube:{index:"youtube.com",id:"v=",src:"//www.youtube.com/embed/%id%?autoplay=1"},vimeo:{index:"vimeo.com/",id:"/",src:"//player.vimeo.com/video/%id%?autoplay=1"},gmaps:{index:"//maps.google.",src:"%id%&output=embed"}}},proto:{initIframe:function(){b.types.push(P),w("BeforeChange",function(a,b,c){b!==c&&(b===P?R():c===P&&R(!0))}),w(h+"."+P,function(){R()})},getIframe:function(c,d){var e=c.src,f=b.st.iframe;a.each(f.patterns,function(){return e.indexOf(this.index)>-1?(this.id&&(e="string"==typeof this.id?e.substr(e.lastIndexOf(this.id)+this.id.length,e.length):this.id.call(this,e)),e=this.src.replace("%id%",e),!1):void 0});var g={};return f.srcAction&&(g[f.srcAction]=e),b._parseMarkup(d,g,c),b.updateStatus("ready"),d}}});var S=function(a){var c=b.items.length;return a>c-1?a-c:0>a?c+a:a},T=function(a,b,c){return a.replace(/%curr%/gi,b+1).replace(/%total%/gi,c)};a.magnificPopup.registerModule("gallery",{options:{enabled:!1,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',preload:[0,2],navigateByImgClick:!0,arrows:!0,tPrev:"Previous (Left arrow key)",tNext:"Next (Right arrow key)",tCounter:"%curr% of %total%"},proto:{initGallery:function(){var c=b.st.gallery,e=".mfp-gallery",g=Boolean(a.fn.mfpFastClick);return b.direction=!0,c&&c.enabled?(f+=" mfp-gallery",w(m+e,function(){c.navigateByImgClick&&b.wrap.on("click"+e,".mfp-img",function(){return b.items.length>1?(b.next(),!1):void 0}),d.on("keydown"+e,function(a){37===a.keyCode?b.prev():39===a.keyCode&&b.next()})}),w("UpdateStatus"+e,function(a,c){c.text&&(c.text=T(c.text,b.currItem.index,b.items.length))}),w(l+e,function(a,d,e,f){var g=b.items.length;e.counter=g>1?T(c.tCounter,f.index,g):""}),w("BuildControls"+e,function(){if(b.items.length>1&&c.arrows&&!b.arrowLeft){var d=c.arrowMarkup,e=b.arrowLeft=a(d.replace(/%title%/gi,c.tPrev).replace(/%dir%/gi,"left")).addClass(s),f=b.arrowRight=a(d.replace(/%title%/gi,c.tNext).replace(/%dir%/gi,"right")).addClass(s),h=g?"mfpFastClick":"click";e[h](function(){b.prev()}),f[h](function(){b.next()}),b.isIE7&&(x("b",e[0],!1,!0),x("a",e[0],!1,!0),x("b",f[0],!1,!0),x("a",f[0],!1,!0)),b.container.append(e.add(f))}}),w(n+e,function(){b._preloadTimeout&&clearTimeout(b._preloadTimeout),b._preloadTimeout=setTimeout(function(){b.preloadNearbyImages(),b._preloadTimeout=null},16)}),void w(h+e,function(){d.off(e),b.wrap.off("click"+e),b.arrowLeft&&g&&b.arrowLeft.add(b.arrowRight).destroyMfpFastClick(),b.arrowRight=b.arrowLeft=null})):!1},next:function(){b.direction=!0,b.index=S(b.index+1),b.updateItemHTML()},prev:function(){b.direction=!1,b.index=S(b.index-1),b.updateItemHTML()},goTo:function(a){b.direction=a>=b.index,b.index=a,b.updateItemHTML()},preloadNearbyImages:function(){var a,c=b.st.gallery.preload,d=Math.min(c[0],b.items.length),e=Math.min(c[1],b.items.length);for(a=1;a<=(b.direction?e:d);a++)b._preloadItem(b.index+a);for(a=1;a<=(b.direction?d:e);a++)b._preloadItem(b.index-a)},_preloadItem:function(c){if(c=S(c),!b.items[c].preloaded){var d=b.items[c];d.parsed||(d=b.parseEl(c)),y("LazyLoad",d),"image"===d.type&&(d.img=a('<img class="mfp-img" />').on("load.mfploader",function(){d.hasSize=!0}).on("error.mfploader",function(){d.hasSize=!0,d.loadError=!0,y("LazyLoadError",d)}).attr("src",d.src)),d.preloaded=!0}}}});var U="retina";a.magnificPopup.registerModule(U,{options:{replaceSrc:function(a){return a.src.replace(/\.\w+$/,function(a){return"@2x"+a})},ratio:1},proto:{initRetina:function(){if(window.devicePixelRatio>1){var a=b.st.retina,c=a.ratio;c=isNaN(c)?c():c,c>1&&(w("ImageHasSize."+U,function(a,b){b.img.css({"max-width":b.img[0].naturalWidth/c,width:"100%"})}),w("ElementParse."+U,function(b,d){d.src=a.replaceSrc(d,c)}))}}}}),function(){var b=1e3,c="ontouchstart"in window,d=function(){v.off("touchmove"+f+" touchend"+f)},e="mfpFastClick",f="."+e;a.fn.mfpFastClick=function(e){return a(this).each(function(){var g,h=a(this);if(c){var i,j,k,l,m,n;h.on("touchstart"+f,function(a){l=!1,n=1,m=a.originalEvent?a.originalEvent.touches[0]:a.touches[0],j=m.clientX,k=m.clientY,v.on("touchmove"+f,function(a){m=a.originalEvent?a.originalEvent.touches:a.touches,n=m.length,m=m[0],(Math.abs(m.clientX-j)>10||Math.abs(m.clientY-k)>10)&&(l=!0,d())}).on("touchend"+f,function(a){d(),l||n>1||(g=!0,a.preventDefault(),clearTimeout(i),i=setTimeout(function(){g=!1},b),e())})})}h.on("click"+f,function(){g||e()})})},a.fn.destroyMfpFastClick=function(){a(this).off("touchstart"+f+" click"+f),c&&v.off("touchmove"+f+" touchend"+f)}}(),A()});

/**
 * placeholder
 */
(function(q,f,d){function r(b){var a={},c=/^jQuery\d+$/;d.each(b.attributes,function(b,d){d.specified&&!c.test(d.name)&&(a[d.name]=d.value)});return a}function g(b,a){var c=d(this);if(this.value==c.attr("placeholder")&&c.hasClass("placeholder"))if(c.data("placeholder-password")){c=c.hide().next().show().attr("id",c.removeAttr("id").data("placeholder-id"));if(!0===b)return c[0].value=a;c.focus()}else this.value="",c.removeClass("placeholder"),this==m()&&this.select()}function k(){var b,a=d(this),c=
    this.id;if(""==this.value){if("password"==this.type){if(!a.data("placeholder-textinput")){try{b=a.clone().attr({type:"text"})}catch(e){b=d("<input>").attr(d.extend(r(this),{type:"text"}))}b.removeAttr("name").data({"placeholder-password":a,"placeholder-id":c}).bind("focus.placeholder",g);a.data({"placeholder-textinput":b,"placeholder-id":c}).before(b)}a=a.removeAttr("id").hide().prev().attr("id",c).show()}a.addClass("placeholder");a[0].value=a.attr("placeholder")}else a.removeClass("placeholder")}
    function m(){try{return f.activeElement}catch(b){}}var h="placeholder"in f.createElement("input"),l="placeholder"in f.createElement("textarea"),e=d.fn,n=d.valHooks,p=d.propHooks;h&&l?(e=e.placeholder=function(){return this},e.input=e.textarea=!0):(e=e.placeholder=function(){this.filter((h?"textarea":":input")+"[placeholder]").not(".placeholder").bind({"focus.placeholder":g,"blur.placeholder":k}).data("placeholder-enabled",!0).trigger("blur.placeholder");return this},e.input=h,e.textarea=l,e={get:function(b){var a=
        d(b),c=a.data("placeholder-password");return c?c[0].value:a.data("placeholder-enabled")&&a.hasClass("placeholder")?"":b.value},set:function(b,a){var c=d(b),e=c.data("placeholder-password");if(e)return e[0].value=a;if(!c.data("placeholder-enabled"))return b.value=a;""==a?(b.value=a,b!=m()&&k.call(b)):c.hasClass("placeholder")?g.call(b,!0,a)||(b.value=a):b.value=a;return c}},h||(n.input=e,p.value=e),l||(n.textarea=e,p.value=e),d(function(){d(f).delegate("form","submit.placeholder",function(){var b=
        d(".placeholder",this).each(g);setTimeout(function(){b.each(k)},10)})}),d(q).bind("beforeunload.placeholder",function(){d(".placeholder").each(function(){this.value=""})}))})(this,document,jQuery);



// requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel
// MIT license
(function(){for(var e=0,b=["ms","moz","webkit","o"],a=0;a<b.length&&!window.requestAnimationFrame;++a)window.requestAnimationFrame=window[b[a]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[a]+"CancelAnimationFrame"]||window[b[a]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(a,b){var c=(new Date).getTime(),d=Math.max(0,16-(c-e)),f=window.setTimeout(function(){a(c+d)},d);e=c+d;return f});window.cancelAnimationFrame||(window.cancelAnimationFrame=
    function(a){clearTimeout(a)})})();


function td_smooth_scroll() {
    // SmoothScroll v1.2.1
    // Licensed under the terms of the MIT license.

    // People involved
    //  - Balazs Galambosi (maintainer)
    //  - Patrick Brunner  (original idea)
    //  - Michael Herf     (Pulse Algorithm)

    var defaultOptions={frameRate:150,animationTime:600,stepSize:120,pulseAlgorithm:!0,pulseScale:8,pulseNormalize:1,accelerationDelta:20,accelerationMax:1,keyboardSupport:!0,arrowScroll:50,touchpadSupport:!0,fixedBackground:!0,excluded:""},options=defaultOptions,isExcluded=!1,isFrame=!1,direction={x:0,y:0},initDone=!1,root=document.documentElement,activeElement,observer,deltaBuffer=[120,120,120],key={left:37,up:38,right:39,down:40,spacebar:32,pageup:33,pagedown:34,end:35,home:36};
    "undefined"!==typeof chrome&&"undefined"!==typeof chrome.storage&&chrome.storage.sync.get(defaultOptions,function(a){options=a;initTest()});
    function initTest(){var a=!1;-1<document.URL.indexOf("google.com/reader/view")&&(a=!0);if(options.excluded){var b=options.excluded.split(/[,\n] ?/);b.push("mail.google.com");for(var c=b.length;c--;)if(-1<document.URL.indexOf(b[c])){observer&&observer.disconnect();removeEvent("mousewheel",wheel);isExcluded=a=!0;break}}a&&removeEvent("keydown",keydown);options.keyboardSupport&&!a&&addEvent("keydown",keydown)}
    function init(){if(document.body){var a=document.body,b=document.documentElement,c=window.innerHeight,d=a.scrollHeight;root=0<=document.compatMode.indexOf("CSS")?b:a;activeElement=a;initTest();initDone=!0;if(top!=self)isFrame=!0;else if(d>c&&(a.offsetHeight<=c||b.offsetHeight<=c)){var e=!1,d=function(){e||b.scrollHeight==document.height||(e=!0,setTimeout(function(){b.style.height=document.height+"px";e=!1},500))};b.style.height="auto";setTimeout(d,10);observer=new MutationObserver(d);observer.observe(a,
        {attributes:!0,childList:!0,characterData:!1});root.offsetHeight<=c&&(c=document.createElement("div"),c.style.clear="both",a.appendChild(c))}-1<document.URL.indexOf("mail.google.com")?(c=document.createElement("style"),c.innerHTML=".iu { visibility: hidden }",(document.getElementsByTagName("head")[0]||b).appendChild(c)):-1<document.URL.indexOf("www.facebook.com")&&(c=document.getElementById("home_stream"))&&(c.style.webkitTransform="translateZ(0)");options.fixedBackground||isExcluded||(a.style.backgroundAttachment=
        "scroll",b.style.backgroundAttachment="scroll")}}var que=[],pending=!1,lastScroll=+new Date;
    function scrollArray(a,b,c,d){d||(d=1E3);directionCheck(b,c);if(1!=options.accelerationMax){var e=+new Date-lastScroll;e<options.accelerationDelta&&(e=(1+30/e)/2,1<e&&(e=Math.min(e,options.accelerationMax),b*=e,c*=e));lastScroll=+new Date}que.push({x:b,y:c,lastX:0>b?.99:-.99,lastY:0>c?.99:-.99,start:+new Date});if(!pending){var q=a===document.body,p=function(e){e=+new Date;for(var h=0,k=0,l=0;l<que.length;l++){var f=que[l],m=e-f.start,n=m>=options.animationTime,g=n?1:m/options.animationTime;options.pulseAlgorithm&&
    (g=pulse(g));m=f.x*g-f.lastX>>0;g=f.y*g-f.lastY>>0;h+=m;k+=g;f.lastX+=m;f.lastY+=g;n&&(que.splice(l,1),l--)}q?window.scrollBy(h,k):(h&&(a.scrollLeft+=h),k&&(a.scrollTop+=k));b||c||(que=[]);que.length?requestFrame(p,a,d/options.frameRate+1):pending=!1};requestFrame(p,a,0);pending=!0}}
    function wheel(a){initDone||init();var b=a.target,c=overflowingAncestor(b);if(!c||a.defaultPrevented||isNodeName(activeElement,"embed")||isNodeName(b,"embed")&&/\.pdf/i.test(b.src))return!0;var b=a.wheelDeltaX||0,d=a.wheelDeltaY||0;b||d||(d=a.wheelDelta||0);if(!options.touchpadSupport&&isTouchpad(d))return!0;1.2<Math.abs(b)&&(b*=options.stepSize/120);1.2<Math.abs(d)&&(d*=options.stepSize/120);scrollArray(c,-b,-d);a.preventDefault()}
    function keydown(a){var b=a.target,c=a.ctrlKey||a.altKey||a.metaKey||a.shiftKey&&a.keyCode!==key.spacebar;if(/input|textarea|select|embed/i.test(b.nodeName)||b.isContentEditable||a.defaultPrevented||c||isNodeName(b,"button")&&a.keyCode===key.spacebar)return!0;var d;d=b=0;var c=overflowingAncestor(activeElement),e=c.clientHeight;c==document.body&&(e=window.innerHeight);switch(a.keyCode){case key.up:d=-options.arrowScroll;break;case key.down:d=options.arrowScroll;break;case key.spacebar:d=a.shiftKey?
        1:-1;d=-d*e*.9;break;case key.pageup:d=.9*-e;break;case key.pagedown:d=.9*e;break;case key.home:d=-c.scrollTop;break;case key.end:e=c.scrollHeight-c.scrollTop-e;d=0<e?e+10:0;break;case key.left:b=-options.arrowScroll;break;case key.right:b=options.arrowScroll;break;default:return!0}scrollArray(c,b,d);a.preventDefault()}function mousedown(a){activeElement=a.target}var cache={};setInterval(function(){cache={}},1E4);var uniqueID=function(){var a=0;return function(b){return b.uniqueID||(b.uniqueID=a++)}}();
    function setCache(a,b){for(var c=a.length;c--;)cache[uniqueID(a[c])]=b;return b}function overflowingAncestor(a){var b=[],c=root.scrollHeight;do{var d=cache[uniqueID(a)];if(d)return setCache(b,d);b.push(a);if(c===a.scrollHeight){if(!isFrame||root.clientHeight+10<c)return setCache(b,document.body)}else if(a.clientHeight+10<a.scrollHeight&&(overflow=getComputedStyle(a,"").getPropertyValue("overflow-y"),"scroll"===overflow||"auto"===overflow))return setCache(b,a)}while(a=a.parentNode)}
    function addEvent(a,b,c){window.addEventListener(a,b,c||!1)}function removeEvent(a,b,c){window.removeEventListener(a,b,c||!1)}function isNodeName(a,b){return(a.nodeName||"").toLowerCase()===b.toLowerCase()}function directionCheck(a,b){a=0<a?1:-1;b=0<b?1:-1;if(direction.x!==a||direction.y!==b)direction.x=a,direction.y=b,que=[],lastScroll=0}var deltaBufferTimer;
    function isTouchpad(a){if(a){a=Math.abs(a);deltaBuffer.push(a);deltaBuffer.shift();clearTimeout(deltaBufferTimer);deltaBufferTimer=setTimeout(function(){chrome.storage.local.set({deltaBuffer:deltaBuffer})},1E3);a=deltaBuffer[0]==deltaBuffer[1]&&deltaBuffer[1]==deltaBuffer[2];var b=isDivisible(deltaBuffer[0],120)&&isDivisible(deltaBuffer[1],120)&&isDivisible(deltaBuffer[2],120);return!(a||b)}}function isDivisible(a,b){return Math.floor(a/b)==a/b}
    "undefined"!==typeof chrome&&"undefined"!==typeof chrome.storage&&chrome.storage.local.get("deltaBuffer",function(a){a.deltaBuffer&&(deltaBuffer=a.deltaBuffer)});var requestFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||function(a,b,c){window.setTimeout(a,c||1E3/60)}}(),MutationObserver=window.MutationObserver||window.WebKitMutationObserver;
    function pulse_(a){var b;a*=options.pulseScale;1>a?b=a-(1-Math.exp(-a)):(b=Math.exp(-1),--a,a=1-Math.exp(-a),b+=a*(1-b));return b*options.pulseNormalize}function pulse(a){if(1<=a)return 1;if(0>=a)return 0;1==options.pulseNormalize&&(options.pulseNormalize/=pulse_(1));return pulse_(a)}addEvent("mousedown",mousedown);addEvent("mousewheel",wheel);addEvent("load",init);
} //end smooth scroll
/**
 *   ___________________________________________
 *  |   __  _ ___  _   _   __  __ __  __   __   |
 *  |  |  \| | __|| | | |/' _/|  V  |/  \ / _]  |
 *  |  | | ' | _| | 'V' |`._`.| \_/ | /\ | [/\  |
 *  |  |_|\__|___|!_/ \_!|___/|_| |_|_||_|\__/  |
 *  |___________________________________________|
 *
 * Our portfolio:  http://themeforest.net/user/tagDiv/portfolio
 * by tagDiv  2014
 * Thanks for your interest in our theme! :)
 *
 *
 */

"use strict";

/*  ----------------------------------------------------------------------------
 td_detect - browser detection object (instance)
 v1.1
 */

var td_detect = new function () {

    //constructor
    this.is_ie8 = false;
    this.is_ie9 = false;
    this.is_ie10 = false;
    this.is_ie11 = false;
    this.is_ie = false;
    this.is_safari = false;
    this.is_chrome = false;
    this.is_ipad = false;
    this.is_touch_device = false;
    this.has_history = false;
    this.is_phone_screen = false;
    this.is_ios = false;
    this.is_android = false;
    this.is_osx = false;
    this.is_firefox = false;




    // is touch device ?
    this.is_touch_device = !!('ontouchstart' in window);
    this.is_mobile_device = false;

    this.html_jquery_obj = jQuery('html');


    // detect ie8
    if (this.html_jquery_obj.is('.ie8')) {
        this.is_ie8 = true;
        this.is_ie = true;
    }



    // detect ie9
    if (this.html_jquery_obj.is('.ie9')) {
        this.is_ie9 = true;
        this.is_ie = true;
    }

    // detect ie10 - also adds the ie10 class //it also detects windows mobile IE as IE10
    if(navigator.userAgent.indexOf("MSIE 10.0") > -1){
        this.is_ie10 = true;
        this.is_ie = true;
        //alert('10');
    }

    //ie 11 check - also adds the ie11 class - it may detect ie on windows mobile
    if(!!navigator.userAgent.match(/Trident.*rv\:11\./)){
        this.is_ie11 = true;
        //this.is_ie = true; //do not flag ie11 as is_ie
        //alert('11');
    }


    //do we have html5 history support?
    if (window.history && window.history.pushState) {
        this.has_history = true;
    }

    //check for safary
    if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
        this.is_safari = true;
    }

    //chrome and chrome-ium check
    this.is_chrome = /chrom(e|ium)/.test(navigator.userAgent.toLowerCase());

    this.is_ipad = navigator.userAgent.match(/iPad/i) != null;



    if (/(iPad|iPhone|iPod)/g.test( navigator.userAgent )) {
        this.is_ios = true;
    } else {
        this.is_ios = false;
    }



    //detect if we run on a mobile device - ipad included - used by the modal / scroll to @see scroll_into_view
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        this.is_mobile_device = true;
    }

    /**
     * function to check the phone screen
     * @see td_events
     * The jQuery windows width is not reliable cross browser!
     */
    this.run_is_phone_screen = function () {
        if ((jQuery(window).width() < 768 || jQuery(window).height() < 768) && this.is_ipad === false) {
            this.is_phone_screen = true;

        } else {
            this.is_phone_screen = false;
        }

        //console.log(this.is_phone_screen + ' ' + jQuery(window).width() + ' ' + jQuery(window).height());
    };



    this.run_is_phone_screen();


    //test for android
    var user_agent = navigator.userAgent.toLowerCase();
    if(user_agent.indexOf("android") > -1) {
        this.is_android = true;
    }


    if (navigator.userAgent.indexOf('Mac OS X') != -1) {
        this.is_osx = true;
    }

    if (navigator.userAgent.indexOf('Firefox') != -1) {
        this.is_firefox = true;
    }

};



/**
 * Created by tagdiv on 13.05.2015.
 */


"use strict";


var td_viewport = {



    /**
     * - initial (default) value of the _current_interval_index
     * - it's used by third part libraries
     * - it used just as constant value
     */
    INTERVAL_INITIAL_INDEX: -1,



    /**
     * - keep the current interval index
     * - it should be modified/taken just by setter/getter methods
     * - after computing, it should not be a negative value
     */
    _current_interval_index : this.INTERVAL_INITIAL_INDEX,



    /**
     * - it keeps the interval index
     * - it should be modified/taken just by setter/getter methods
     * - it must be a crescendo positive values
     */
    _interval_list : [],



    /**
     *
     */
    init: function init() {
        if ((typeof window.td_viewport_interval_list !== undefined) && (window.td_viewport_interval_list.constructor === Array)) {

            for (var i = 0; i < window.td_viewport_interval_list.length; i++) {
                var item = new td_viewport.item();

                var current_val = window.td_viewport_interval_list[i];

                // the check is done to be sure that the intervals are well formatted
                if (!current_val.hasOwnProperty('limit_bottom') || !current_val.hasOwnProperty('sidebar_width')) {
                    break;
                }

                item.limit_bottom = current_val['limit_bottom'];
                item.sidebar_width = current_val['sidebar_width'];

                td_viewport._items.push(item);
            }

            td_viewport.detect_changes();
        }
    },



    /**
     * - getter of the _current_interval_index
     * - it should be used by outsiders libraries
     * @returns {*}
     */
    get_current_interval_index : function get_current_interval_index() {
        return td_viewport._current_interval_index;
    },



    /**
     * - setter of the _interval_list
      - it should be used by outsiders libraries
     * @param value
     */
    set_interval_list : function set_interval_list(value) {
        td_viewport._interval_list = value;
    },



    /**
     * - getter of the _interval_list
     * - it should be used by outsiders libraries
     * @returns {*}
     */
    get_interval_list : function get_interval_list() {
        return td_viewport._interval_list;
    },



    /**
     * - getter of the td_viewport current item
     * - it should be used by outsiders libraries
     * @returns {*}
     */
    get_current_interval_item : function get_current_interval_item() {

        if (td_viewport._current_interval_index == td_viewport.INTERVAL_INITIAL_INDEX ||
            td_viewport._current_interval_index == 0) {

            return null;
        }

        return td_viewport._items[td_viewport._current_interval_index - 1];
    },





    _items : [],




    item : function item() {
        this.limit_bottom = undefined;
        this.sidebar_width = undefined;
    },





    /**
     * - detect view port changes
     * - it returns true if the change view port has changed, false otherwise
     * - it also sets the _current_interval_index
     * @returns {boolean} True when viewport has changed
     */
    detect_changes: function detect_changes() {
        var result = false;

        var real_view_port_width = 0;
        var local_current_interval_index = 0;

        if (td_detect.is_safari === true) {
            real_view_port_width = this._safari_view_port_width.get_real_width();
        } else {
            real_view_port_width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        }

        for (var i = 0; i < td_viewport._items.length; i++) {

            if (real_view_port_width <= td_viewport._items[i].limit_bottom) {

                if (local_current_interval_index != td_viewport._current_interval_index) {
                    td_viewport._current_interval_index = local_current_interval_index;
                    result = true;

                    td_viewport.log('changing viewport ' + td_viewport._current_interval_index + ' ~ ' + real_view_port_width);
                }

                break;
            }
            local_current_interval_index++;
        }

        if ((result == false) && (local_current_interval_index != td_viewport._current_interval_index)) {
            td_viewport._current_interval_index = local_current_interval_index;
            result = true;

            td_viewport.log('changing viewport ' + td_viewport._current_interval_index + ' ~ ' + real_view_port_width);
        }

        return result;
    },


    /**
     * get the real view port width on safari
     * @type {{div_added: boolean, div_jquery_object: string, get_real_width: Function}}
     */
    _safari_view_port_width : {
        div_added : false,
        div_jquery_object : '',

        get_real_width : function get_real_widht () {
            if (this.div_added === false) {
                // we don't have a div present
                this.div_jquery_object = jQuery('<div>')
                    .css({

                        "height": "1px",
                        "position": "absolute",
                        "top": "-1px",
                        "left": "0",
                        "right": "0",
                        "visibility": "hidden",
                        "z-index": "-1"

                    });
                this.div_jquery_object.appendTo('body');
                this.div_added = true;
            }
            return this.div_jquery_object.width();
        }
    },



    log: function log(msg) {
        //console.log(msg);
    }
};

td_viewport.init();

"use strict";

/*  ----------------------------------------------------------------------------
    Menu script
 */



// top menu

if (td_detect.is_touch_device) {
    //touch
    jQuery('.td-header-sp-top-menu .top-header-menu').superfish({
        delay:300,
        speed:'fast',
        useClick:true
    });

} else {

    //not touch
    jQuery('.td-header-sp-top-menu .top-header-menu').superfish({
        delay:600,
        speed:200,
        useClick:false
    });
}




/*  ----------------------------------------------------------------------------
 On load
 */

// header menu
    jQuery('#td-header-menu .sf-menu').supersubs({
        minWidth: 10, // minimum width of sub-menus in em units
        maxWidth: 40, // maximum width of sub-menus in em units
        extraWidth: 1 // extra width can ensure lines don't sometimes turn over
    });



if (td_detect.is_touch_device) {
    //touch
    jQuery('#td-header-menu .sf-menu').superfish({
        delay:300,
        speed:'fast',
        useClick:true
    });

} else {

    //not touch
    jQuery('#td-header-menu .sf-menu').superfish({
        delay:600,
        speed:200,
        useClick:false
    });
}



/*  ----------------------------------------------------------------------------
    tagDiv magic cache - object (static)
 */
var td_local_cache = {
    data: {},
    remove: function (resurce_id) {
        delete td_local_cache.data[resurce_id];
    },
    exist: function (resurce_id) {
        return td_local_cache.data.hasOwnProperty(resurce_id) && td_local_cache.data[resurce_id] !== null;
    },
    get: function (resurce_id) {
        return td_local_cache.data[resurce_id];
    },
    set: function (resurce_id, cachedData) {
        td_local_cache.remove(resurce_id);
        td_local_cache.data[resurce_id] = cachedData;
    }
};
/*
 td_util.js
 v1.1
 */

"use strict";



/*  ----------------------------------------------------------------------------
 tagDiv utility class
 */
var td_util = {


    /**
     * utility function, used by td_post_images.js
     * @param class_selector
     */
    image_move_class_to_figure: function (class_selector) {
        jQuery('figure .' + class_selector).each(function() {
            jQuery(this).parent().parent().addClass(class_selector);
            jQuery(this).removeClass(class_selector);
        });
    },



    /**
     * safe function to read variables passed by the theme via the js buffer. If by some kind of error the variable is missing from the global scope, this function will return false
     * @param variable_name
     * @returns {*}
     */
    get_backend_var: function(variable_name) {
        if (typeof window[variable_name] === 'undefined') {
            return '';
        }
        return window[variable_name];
    },



    /**
     * scrolls to a dom element
     * @param dom_element
     */
    scroll_to_element: function(dom_element, duration) {
        td_is_scrolling_animation = true;
        jQuery("html, body").stop();


        var dest;

        //calculate destination place
        if (dom_element.offset().top > jQuery(document).height() - jQuery(window).height()) {
            dest = jQuery(document).height() - jQuery(window).height();
        } else {
            dest = dom_element.offset().top;
        }
        //go to destination
        jQuery("html, body").animate({ scrollTop: dest }, {
                duration: duration,
                easing:'easeInOutQuart',
                complete: function(){
                    td_is_scrolling_animation = false;
                }
            }
        );
    },


    /**
     * scrolls to a dom element - the element will be close to the center of the screen
     * !!! compensates for long distances !!!
     */
    scroll_into_view: function (dom_element) {

        if (td_detect.is_mobile_device === true) {
            return; //do not run on any mobile device
        }

        td_is_scrolling_animation = true;
        jQuery("html, body").stop();


        var destination = dom_element.offset().top;
        destination = destination - 150;

        var distance = Math.abs(jQuery(window).scrollTop() - destination);
        var computed_time = distance / 5;
        //console.log(distance + ' -> ' + computed_time +  ' -> ' + (1100+computed_time));

        //go to destination
        jQuery("html, body").animate({ scrollTop: destination }, {
                duration: 1100 + computed_time,
                easing:'easeInOutQuart',
                complete: function(){
                    td_is_scrolling_animation = false;
                }
            }
        );
    },

    /**
     * scrolls to a position
     * @param px_from_top - pixels from top
     */
    scroll_to_position: function(px_from_top, duration) {
        td_is_scrolling_animation = true;
        jQuery("html, body").stop();

        //go to destination
        jQuery("html, body").animate({ scrollTop: px_from_top }, {
                duration: duration,
                easing:'easeInOutQuart',
                complete: function(){
                    td_is_scrolling_animation = false;
                }
            }
        );
    },
    td_move_y: function td_move_Y (elm, value) {
        var translate = 'translate3d(0px,' + value + 'px, 0px)';
        elm.style['-webkit-transform'] = translate;
        elm.style['-moz-transform'] = translate;
        elm.style['-ms-transform'] = translate;
        elm.style['-o-transform'] = translate;
        elm.style.transform = translate;
    },


    is_valid_url: function is_valid_url(str) {
        var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
        '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
        '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
        '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
        '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
        '(\\#[-a-z\\d_]*)?$','i'); // fragment locator


        if(!pattern.test(str)) {
            return false;
        } else {
            return true;
        }
    }





};

/**
 * Created by ra on 6/27/14.
 * copyright tagDiv 2014
 * V 1.1 - better iOS 8 support
 */


var td_affix = {

    // flag used to stop scrolling
    allow_scroll: true,

    //settings, obtained from ext
    menu_selector: '', //the affix menu (this element will get the td-affix)
    menu_wrap_selector: '', //the menu wrapper / placeholder
    tds_snap_menu: '', //the panel setting
    tds_snap_menu_logo: '', //the panel setting


    menu_affix_height: 0, // the menu affix height [the height when it's really affix]
    menu_affix_height_on_mobile: 0, // the menu affix height on mobile [the height when it's really affix]


    main_menu_height: 0, // main menu height
    top_offset: 0, //how much the menu is moved from the original position when it's affixed
    menu_offset: 0, //used to hide the menu on scroll
    is_requestAnimationFrame_running:false, //prevent multiple calls to requestAnimationFrame
    is_menu_affix: false, //the current state of the menu, true if the menu is affix
    is_top_menu:false, //true when the menu is at the top of the screen (0px topScroll)

    //menu offset boundaries - so we do not fire the animation event when the boundary is hit
    menu_offset_max_hit: false,
    menu_offset_min_hit: true,


    scroll_window_scrollTop_last: 0, //last scrollTop position, used to calculate the scroll direction

    /**
     * run the affix, we use the menu wrap selector to compute the menu position from top
     *
     {
          menu_selector: '.td-header-main-menu',
          menu_wrap_selector: '.td-header-menu-wrap',
          tds_snap_menu: td_util.get_backend_var('tds_snap_menu')
      }
     */
    init : function init (atts) {

        //read the settings
        td_affix.menu_selector = atts.menu_selector;
        td_affix.menu_wrap_selector = atts.menu_wrap_selector;
        td_affix.tds_snap_menu = atts.tds_snap_menu;
        td_affix.tds_snap_menu_logo = atts.tds_snap_menu_logo;
        td_affix.menu_affix_height = atts.menu_affix_height;
        td_affix.menu_affix_height_on_mobile = atts.menu_affix_height_on_mobile;

        //the snap menu is disabled from the panel
        if (!td_affix.tds_snap_menu) {
            return;
        }


        // a computation before jquery.ready is necessary for firefox, where td_events.scroll comes before
        if (td_detect.is_firefox) {
            td_affix.compute_top();
            td_affix.compute_wrapper();
        }

        jQuery().ready(function() {
            //compute on semi dom ready
            td_affix.compute_top();
            td_affix.compute_wrapper();
        });

        //recompute when all the page + logos are loaded
        jQuery(window).load(function() {
            td_affix.compute_top();
            td_affix.compute_wrapper();

            //recompute after 1 sec for retarded phones
            setTimeout(function(){
                td_affix.compute_top();
            }, 1000);
        });




    },


    /**
     * - get the real affix height
     * @returns {number} affix height
     * @private
     */
    _get_menu_affix_height: function _get_menu_affix_height() {

        if (td_detect.is_phone_screen === true) {
            return td_affix.menu_affix_height_on_mobile;
        }
        return td_affix.menu_affix_height;
    },



    /**
     * called by td_events.js on scroll
     */
    td_events_scroll: function td_events_scroll(scrollTop) {

        if (!td_affix.allow_scroll) {
            return;
        }

        //do not run if we don't have a snap menu
        if (!td_affix.tds_snap_menu) {
            return;
        }


        /*  ----------------------------------------------------------------------------
         scroll direction + delta (used by affix for now)
         to run thios code:
         - td_affix.tds_snap_menu != '' (from above)
         - td_affix.tds_snap_menu != 'snap'
         */
        if (td_affix.tds_snap_menu != 'snap') { //do not run on snap
            if ((td_affix.tds_snap_menu != 'smart_snap_mobile' || td_detect.is_phone_screen === true)) {  // different from smart_snap_mobile or td_detect.is_phone_screen === true
                //console.log('rrr');
                var scroll_direction = '';
                var scrollDelta = 0;

                //check the direction
                if (scrollTop != td_affix.scroll_window_scrollTop_last) { //compute direction only if we have different last scroll top
                    // compute the direction of the scroll
                    if (scrollTop > td_affix.scroll_window_scrollTop_last) {
                        scroll_direction = 'down';
                    } else {
                        scroll_direction = 'up';
                    }
                    //calculate the scroll delta
                    scrollDelta = Math.abs(scrollTop - td_affix.scroll_window_scrollTop_last);
                }

                td_affix.scroll_window_scrollTop_last = scrollTop;
            }
        }

        /*  ---------------------------------------------------------------------------- */

        // show the logo on sticky menu if is always snap setting
        if (td_affix.tds_snap_menu == 'snap' && td_affix.tds_snap_menu_logo != '') {
            jQuery('.td-main-menu-logo').addClass('td-logo-sticky');
        }


        //if the menu is in the affix state
        if ((scrollTop > td_affix.top_offset)

            // - the affix is OFF when the next condition is not accomplished, which means that the affix is ON
            // and the scroll to the top is LOWER than the initial td_affix.top_offset reduced by the affix real height
            // - this condition makes the transition from the small affix menu to the larger menu of the page
            || ((td_affix.is_menu_affix === true) && scrollTop > (td_affix.top_offset - td_affix._get_menu_affix_height()))

            || td_affix.is_top_menu === true) {

            //get the menu element
            var td_affix_menu_element = jQuery(td_affix.menu_selector);

            //turn affix on for it
            td_affix._affix_on(td_affix_menu_element);


            //if the menu is only with snap or we are on smart_snap_mobile + mobile, our job here in this function is done, return
            if (td_affix.tds_snap_menu == 'snap' || (td_affix.tds_snap_menu =='smart_snap_mobile' && td_detect.is_phone_screen === false)) {
                return;
            }

            /*    ---  end simple snap  ---  */


            /*  ----------------------------------------------------------------------------
             check scroll directions (we may also have scroll_direction = '', that's why we have to check for the specific state (up or down))
             */


            // boundary check - to not run the position on each scroll event
            if ((td_affix.menu_offset_max_hit === false && scroll_direction=='down') || (td_affix.menu_offset_min_hit === false && scroll_direction=='up')) {
                //request animation frame
                //if (td_affix.is_requestAnimationFrame_running === false) {
                    window.requestAnimationFrame(function(){

                        //console.log(td_affix.menu_offset);
                        //console.log(scrollDelta);
                        var offset = 0;


                        if (scrollTop > 0) { // ios returns negative scrollTop values
                            if (scroll_direction == 'down') {

                                //compute the offset
                                offset = td_affix.menu_offset - scrollDelta;

                                // the offset is a value in the [-td_affix.menu_affix_height, 0] and
                                // not into the interval [-td_affix.main_menu_height, 0]
                                if (offset < -td_affix._get_menu_affix_height()) {
                                    offset = -td_affix._get_menu_affix_height();
                                }

                            } else if (scroll_direction == 'up') {
                                //compute the offset
                                offset = td_affix.menu_offset + scrollDelta;
                                if (offset > 0) {
                                    offset = 0;
                                }
                            }

                        }

                        //td_debug.log_live(scroll_direction + ' | scrollTop: ' + scrollTop + '  | offset: ' + offset);

                        //td_affix.is_requestAnimationFrame_running = true;

                        //console.log(offset);

                        //move the menu
                        td_util.td_move_y(td_affix_menu_element[0], offset);

                        //td_affix_menu_element.css({top: (offset) + 'px'});  //legacy menu move code

                        //check boundaries
                        if (offset == 0) {
                            td_affix.menu_offset_min_hit = true;
                        } else {
                            td_affix.menu_offset_min_hit = false;
                        }


                        if (offset == -td_affix._get_menu_affix_height()) {
                            td_affix.menu_offset_max_hit = true;
                            //also hide the menu when it's 100% out of view on ios - the safari header is transparent and we can see the menu
                            if(td_detect.is_ios === true || td_detect.is_safari) { // safari also
                                td_affix_menu_element.hide();
                            }

                            //show the logo on smart sticky menu
                            if(td_affix.tds_snap_menu_logo != '') {
                                jQuery('.td-main-menu-logo').addClass('td-logo-sticky');
                            }
                        } else {
                            td_affix.menu_offset_max_hit = false;

                            if(td_detect.is_ios === true || td_detect.is_safari) { //ios safari fix
                                td_affix_menu_element.show();
                            }
                        }


                        //td_affix.is_requestAnimationFrame_running = false;




                        td_affix.menu_offset = offset; //update the current offset of the menu


                    },td_affix_menu_element[0]);

                //}
                //console.log(offset + ' ' + scroll_direction);

            } //end boundary check



        } else {
            td_affix._affix_off(jQuery(td_affix.menu_selector));
        }

    },


    /**
     * calculates the affix point (the distance from the top when affix should be enabled)
     * @see td_affix.init()
     * @see td_events
     */
    compute_top: function compute_top() {

        // to compute from the bottom of the menu, the top offset is incremented by the menu wrap height
        td_affix.top_offset = jQuery(td_affix.menu_wrap_selector).offset().top + jQuery(td_affix.menu_wrap_selector).height();

        //check to see if the menu is at the top of the screen
        if (td_affix.top_offset == (jQuery(td_affix.menu_wrap_selector).height()) + 1) {
            //switch to affix - because the menu is at the top of the page
            //td_affix._affix_on(jQuery(td_affix.menu_selector));
            td_affix.is_top_menu = true;
        } else {
            //check to see the current top offset
            td_affix.is_top_menu = false;

        }
        td_affix.td_events_scroll(jQuery(window).scrollTop());

        //alert(td_affix.top_offset);
        //console.log('computed: ' + td_affix.top_offset);
    },


    /**
     * recalculate the wrapper height. To support different menu heights
     */
    compute_wrapper: function compute_wrapper() {

        // td-affix class is removed to compute a real height when the compute_wrapper is done on a scrolled page
        if (jQuery(td_affix.menu_selector).hasClass('td-affix')) {
            jQuery(td_affix.menu_selector).removeClass('td-affix');

            //read the height of the menu
            td_affix.main_menu_height = jQuery(td_affix.menu_selector).height();

            jQuery(td_affix.menu_selector).addClass('td-affix');

        } else {
            //read the height of the menu
            td_affix.main_menu_height = jQuery(td_affix.menu_selector).height();
        }

        // put the menu height to the wrapper. The wrapper remains in the place when the menu is affixed
        jQuery(td_affix.menu_wrap_selector).css('height', td_affix.main_menu_height);
    },

    /**
     * turns affix on for the menu element
     * @param td_affix_menu_element
     * @private
     */
    _affix_on: function _affix_on(td_affix_menu_element) {
        if (td_affix.is_menu_affix === false) {

            td_affix.menu_offset = -td_affix.top_offset;

            //make the menu fixed
            td_affix_menu_element.addClass('td-affix');

            // Bug.Fix - affix menu flickering
            // - the td_affix_menu_element is hidden because he is outside of the viewport
            // - without it, there's a flicker effect of applying css style (classes) over it
            if (td_detect.is_phone_screen !== true) {
                td_affix_menu_element.css('visibility', 'hidden');
            }

            //add body-td-affix class on body for header style 8 -> when scrolling down the window jumps 76px up when the menu is changing from header style 8 default to header style 8 affix
            jQuery('body').addClass('body-td-affix');

            td_affix.is_menu_affix = true;
        } else {

            // the td_affix_menu element is kept visible
            if (td_detect.is_phone_screen !== true) {
                td_affix_menu_element.css('visibility', '');
            }
        }
    },



    /**
     * Turns affix off for the menu element
     * @param td_affix_menu_element
     * @private
     */
    _affix_off: function _affix_off(td_affix_menu_element) {
        if (td_affix.is_menu_affix === true) {
            //make the menu normal
            jQuery(td_affix.menu_selector).removeClass('td-affix');

            //hide the logo from sticky menu when the menu is not affix
            if(td_affix.tds_snap_menu_logo != '') {
                jQuery('.td-main-menu-logo').removeClass('td-logo-sticky');
            }

            //remove body-td-affix class on body for header style 8 -> when scrolling down the window jumps 76px up when the menu is changing from header style 8 default to header style 8 affix
            jQuery('body').removeClass('body-td-affix');

            td_affix.is_menu_affix = false;

            //move the menu to 0 (ios seems to skip animation frames)
            td_util.td_move_y(td_affix_menu_element[0], 0);

            if(td_detect.is_ios === true || td_detect.is_safari) {
                td_affix_menu_element.show();
            }

        }
    }



};





/*
    tagDiv - 2014
    Our portfolio:  http://themeforest.net/user/tagDiv/portfolio
    Thanks for using our theme! :)
*/

/*jslint node: true */
/*global window */
/*global alert */
/*global jQuery */

"use strict";



/*  ----------------------------------------------------------------------------
    On load
 */
jQuery().ready(function jQuery_ready() {

    //retina images
    td_retina();



    // the mobile pull left menu (off canvas)
    td_mobile_menu();

    //handles the toogle efect on mobile menu
    td_mobile_menu_toogle();


    //resize all the videos if we have them
    td_resize_videos();

    //fake placeholder for ie
    jQuery('input, textarea').placeholder();

    //more stories box
    td_more_articles_box.init();

    //used for smart lists
    td_smart_lists_magnific_popup();





}); //end on load



/**
 * More stories box
 */
var td_more_articles_box = {
    is_box_visible:false,
    cookie:'',
    distance_from_top:400,

    init: function init() {


        //read the cookie
        td_more_articles_box.cookie = td_read_site_cookie('td-cookie-more-articles');


        //setting distance from the top
        if(!isNaN(parseInt(tds_more_articles_on_post_pages_distance_from_top)) && isFinite(tds_more_articles_on_post_pages_distance_from_top) && parseInt(tds_more_articles_on_post_pages_distance_from_top) > 0){
            td_more_articles_box.distance_from_top = parseInt(tds_more_articles_on_post_pages_distance_from_top);
        } else {
            td_more_articles_box.distance_from_top = 400;
        }

        //adding event to hide the box
        jQuery('.td-close-more-articles-box').click(function(){

            //hiding the box
            jQuery('.td-more-articles-box').removeClass('td-front-end-display-block');
            jQuery('.td-more-articles-box').hide();

            //cookie life
            if(!isNaN(parseInt(tds_more_articles_on_post_time_to_wait)) && isFinite(tds_more_articles_on_post_time_to_wait)){
                //setting cookie
                td_set_cookies_life(['td-cookie-more-articles', 'hide-more-articles-box', parseInt(tds_more_articles_on_post_time_to_wait)*86400000]);//86400000 is the number of milliseconds in a day
            }
        });
    },

    /**
     * called by td_events.js on scroll
     */
    td_events_scroll: function td_events_scroll(scrollTop) {

        if(td_is_scrolling_animation) { //do not fire the event on animations
            return;
        }

        //check to see if it's enable form panel and also from cookie
        if(td_util.get_backend_var('tds_more_articles_on_post_enable') == "show" && td_more_articles_box.cookie != 'hide-more-articles-box') {

            if (scrollTop > td_more_articles_box.distance_from_top ) {
                if (td_more_articles_box.is_box_visible === false) {
                    jQuery('.td-more-articles-box').addClass('td-front-end-display-block');
                    td_more_articles_box.is_box_visible = true;
                }
            } else {
                if (td_more_articles_box.is_box_visible === true) {
                    jQuery('.td-more-articles-box').removeClass('td-front-end-display-block');
                    td_more_articles_box.is_box_visible = false;
                }
            }
        }
    }
};






var td_resize_timer_id;
jQuery(window).resize(function() {
    clearTimeout(td_resize_timer_id);
    td_resize_timer_id = setTimeout(function() {
        td_done_resizing();
    }, 200);

});

function td_done_resizing(){
    td_resize_videos();
}



/*  ----------------------------------------------------------------------------
    Resize the videos
 */
function td_resize_videos() {
    //youtube in content
    jQuery(document).find('iframe[src*="youtube.com"]').each(function() {

        if(jQuery(this).parent().hasClass("td_wrapper_playlist_player_youtube")) {
            //do nothing for playlist player youtube
        } else {
            var td_video = jQuery(this);
            td_video.attr('width', '100%');
            var td_video_width = td_video.width();
            td_video.css('height', td_video_width * 0.6, 'important');
        }
    });


    //vimeo in content
    jQuery(document).find('iframe[src*="vimeo.com"]').each(function() {
        if(jQuery(this).parent().hasClass("td_wrapper_playlist_player_vimeo")) {
            //do nothing for playlist player vimeo
        } else {
            var td_video = jQuery(this);
            td_video.attr('width', '100%');
            var td_video_width = td_video.width();
            td_video.css('height', td_video_width * 0.5625, 'important');
        }
    });


    //daily motion in content
    jQuery(document).find('iframe[src*="dailymotion.com"]').each(function() {
        var td_video = jQuery(this);
        td_video.attr('width', '100%');
        var td_video_width = td_video.width();
        td_video.css('height', td_video_width * 0.6, 'important');
    });


    //wordpress embedded
    jQuery(document).find(".wp-video-shortcode").each(function() {
        var td_video = jQuery(this);

        var td_video_width = td_video.width() + 3;
        jQuery(this).parent().css('height', td_video_width * 0.56, 'important');
        //td_video.css('height', td_video_width * 0.6, 'important')
        td_video.css('width', '100%', 'important');
        td_video.css('height', '100%', 'important');
    })
}






//handles mobile menu
function td_mobile_menu() {
    jQuery('#td-top-mobile-toggle a, .td-mobile-close a').click(function(){
        if(jQuery('body').hasClass('td-menu-mob-open-menu')) {
            jQuery('body').removeClass('td-menu-mob-open-menu');
        } else {
            if (td_detect.is_mobile_device) {
                // on mobile devices scroll to top instantly and wait a bit and open the menu
                window.scrollTo(0, 0);
                setTimeout(function(){
                    jQuery('body').addClass('td-menu-mob-open-menu');
                }, 100);
            } else {
                // on desktop open it with full animations
                jQuery('body').addClass('td-menu-mob-open-menu');
                setTimeout(function(){
                    td_util.scroll_to_position(0, 1200);
                }, 200);
            }
        }
    });
}


//handles open/close mobile menu
function td_mobile_menu_toogle() {

    jQuery('#td-mobile-nav .menu-item-has-children ul').hide();

    //move thru all the menu and find the item with sub-menues to atach a custom class to them
    jQuery(document).find('#td-mobile-nav .menu-item-has-children').each(function(i) {

        var class_name = 'td_mobile_elem_with_submenu_' + i;
        jQuery(this).addClass(class_name);

        //add an element to click on
        //jQuery(this).children("a").append('<div class="td-element-after" data-parent-class="' + class_name + '"></div>');
        jQuery(this).children("a").append('<i class="td-icon-menu-down td-element-after" data-parent-class="' + class_name + '"></i>');


        //click on link elements with #
        jQuery(this).children("a").addClass("td-link-element-after").attr("data-parent-class", class_name);
    });

    jQuery(".td-element-after, .td-link-element-after").click(function(event) {

        if(jQuery(this).hasClass("td-element-after") || jQuery(this).attr("href") == "#" ){
            event.preventDefault();
            event.stopPropagation();
        }


        //take the li parent class
        var parent_class = jQuery(this).data('parent-class');

        //target the sub-menu to open
        var target_to_open = '#td-mobile-nav .' + parent_class + ' > a + ul';
        if(jQuery(target_to_open).css('display') == 'none') {
            jQuery(target_to_open).show();
        } else {
            jQuery(target_to_open).hide();
        }


    });
}



/*  ----------------------------------------------------------------------------
    Add retina support
 */

function td_retina() {
    if (window.devicePixelRatio > 1) {
        jQuery('.td-retina').each(function(i) {
            var lowres = jQuery(this).attr('src');
            var highres = lowres.replace(".png", "@2x.png");
            highres = highres.replace(".jpg", "@2x.jpg");
            jQuery(this).attr('src', highres);

        });


        //custom logo support
        jQuery('.td-retina-data').each(function(i) {
            jQuery(this).attr('src', jQuery(this).data('retina'));
            //fix logo aligment on retina devices
            jQuery(this).addClass('td-retina-version');
        });

    }
}

/*
jQuery('body').click(function(e){
    if(! jQuery(e.target).hasClass('custom-background')){
        alert('clicked on something that has not the class theDIV');
    }

});*/

//click only on BACKGROUND, for devices that don't have touch (ex: phone, tablets)
if(!td_detect.is_touch_device && td_util.get_backend_var('td_ad_background_click_link') != '') {

    //var ev = ev || window.event;
    //var target = ev.target || ev.srcElement;
    jQuery('body').click(function(event) {

        //getting the target element that the user clicks - for W3C and MSIE
        var target = (event.target) ? event.target : event.srcElement;

        //only click on background

        var target_jquery_obj = jQuery(target);

        // td-content-wrap for NEWSMAG and td-boxex-layout for NEWSPAPER
        if (target_jquery_obj.hasClass('td-content-wrap') || target_jquery_obj.hasClass('td-boxed-layout')) {

            //open the link ad page
            if(td_ad_background_click_target == '_blank') {
                //open in a new window
                window.open(td_ad_background_click_link)
            } else {
                //open in the same window
                location.href = td_ad_background_click_link;
            }
        }

        //e.stopPropagation();
        //stopBubble(event);
    });
}





/**
 * reading cookies
 * @param name
 * @returns {*}
 */
function td_read_site_cookie(name) {
    var nameEQ = escape(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return unescape(c.substring(nameEQ.length, c.length));
    }
    return null;
}


/**
 *
 * @param td_time_cookie_array
 *
 * @param[0]: name of the cookie
 * @param[1]: value of the cookie
 * @param[2]: expiration time
 */
function td_set_cookies_life(td_time_cookie_array) {
    var expiry = new Date();
    expiry.setTime(expiry.getTime() + td_time_cookie_array[2]);

    // Date()'s toGMTSting() method will format the date correctly for a cookie
    document.cookie = td_time_cookie_array[0] + "=" + td_time_cookie_array[1] + "; expires=" + expiry.toGMTString();
}




















/*  ----------------------------------------------------------------------------
    Scroll to top + animation stop
 */

var td_is_scrolling_animation = false;
var td_mouse_wheel_or_touch_moved = false; //we want to know if the user stopped the animation via touch or mouse move

//stop the animation on mouse wheel
jQuery(document).bind('mousewheel DOMMouseScroll MozMousePixelScroll', function(e){
    if (td_is_scrolling_animation === false) {
        return;
    } else {
        td_is_scrolling_animation = false;
        td_mouse_wheel_or_touch_moved = true;

        jQuery("html, body").stop();
    }
});

//stop the animation on touch
if (document.addEventListener){
    document.addEventListener('touchmove', function(e) {
        if (td_is_scrolling_animation === false) {
            return;
        } else {
            td_is_scrolling_animation = false;
            td_mouse_wheel_or_touch_moved = true;
            jQuery("html, body").stop();
        }
    }, false);
}

/**
 * called by td_events.js on scroll - back to top
 */
var td_scroll_to_top_is_visible = false;
function td_events_scroll_scroll_to_top(scrollTop) {
    if(td_is_scrolling_animation) {  //do not fire the event on animations
        return;
    }
    if (scrollTop > 400) {
        if (td_scroll_to_top_is_visible === false) { //only add class if needed
            td_scroll_to_top_is_visible = true;
            jQuery('.td-scroll-up').addClass('td-scroll-up-visible');
        }
    } else {
        if (td_scroll_to_top_is_visible === true) { //only add class if needed
            td_scroll_to_top_is_visible = false;
            jQuery('.td-scroll-up').removeClass('td-scroll-up-visible');
        }
    }
}


jQuery('.td-scroll-up').click(function(){
    if(td_is_scrolling_animation) { //double check - because when we remove the class, the button is still visible for a while
        return;
    }

    //hide the button
    td_scroll_to_top_is_visible = false;
    jQuery('.td-scroll-up').removeClass('td-scroll-up-visible');

    //hide more articles box
    td_more_articles_box.is_box_visible = false;
    jQuery('.td-more-articles-box').removeClass('td-front-end-display-block');

    //scroll to top
    td_util.scroll_to_position(0, 1200);

    return false;
});









// small down arrow on template 6 and full width index
jQuery('.td-read-down a').click(function(event){
    event.preventDefault();
    td_util.scroll_to_position(jQuery('.td-full-screen-header-image-wrap').height(), 1200);
    //td_util.scroll_to_position(jQuery('.td-full-screen-header-image-wrap').height() + jQuery('.td-full-screen-header-image-wrap').offset().top, 1200);
});

/**
 * make td-post-template-6 title move down and blurry
 * called from single_tempalte_6.php via the js buffer
 */
function td_post_template_6_title() {



    //define all the variables - for better performance ?
    var td_parallax_el = document.getElementById('td_parallax_header_6');

    var td_parallax_bg_el = document.getElementById('td-full-screen-header-image');

    var scroll_from_top = '';
    var distance_from_bottom;

    //attach the animation tick on scroll
    jQuery(window).scroll(function(){
        // with each scroll event request an animation frame (we have a polyfill for animation frame)
        // the requestAnimationFrame is called only once and after that we wait
        td_request_tick();
    });


    var td_animation_running = false; //if the tick is running, we set this to true

    function td_request_tick() {
        if (td_animation_running === false) {
            window.requestAnimationFrame(td_do_animation);
        }
        td_animation_running = true;
    }

    /**
     * the animation loop
     */
    function td_do_animation() {
        scroll_from_top = jQuery(document).scrollTop();
        if (scroll_from_top <= 950) { //stop the animation after scroll from top

            var blur_value = 1 - (scroll_from_top / 800); // @todo trebuie verificata formula??
            if (td_detect.is_ie8 === true) {
                blur_value = 1;
            }


            blur_value = Math.round(blur_value * 100) / 100;

            //opacity
            td_parallax_el.style.opacity = blur_value;

            //move the bg
            var parallax_move = -Math.round(scroll_from_top / 4);
            td_util.td_move_y(td_parallax_bg_el,-parallax_move);


            //move the title + cat
            distance_from_bottom = -Math.round(scroll_from_top / 8);
            td_util.td_move_y(td_parallax_el,-distance_from_bottom);
            //td_parallax_el.style.bottom = distance_from_bottom + "px";  //un accelerated version


        }

        td_animation_running = false;
    }



}

//used for smart lists
function td_smart_lists_magnific_popup() {
    //magnific popup
    jQuery(".td-slide-smart-list-figure").magnificPopup({
        delegate: "a",
        type: "image",
        tLoading: "Loading image #%curr%...",
        mainClass: "mfp-img-mobile",
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1]
        },
        image: {
            tError: "<a href=\'%url%\'>The image #%curr%</a> could not be loaded.",
            titleSrc: function(item) {//console.log(item.el);
                //alert(jQuery(item.el).data("caption"));
                return item.el.attr("data-caption");
            }
        },
        zoom: {
            enabled: true,
            duration: 300,
            opener: function(element) {
                return element.find("img");
            }
        },
        callbacks: {
            change: function(item) {
                /**
                 * if we have pictures only on 3 from 4 slides then remove, from magnific popup, the one with no image
                 */
                //console.log(item);
                //console.log(item.el[0].id);
                //console.log(parseInt(nr_slide[1]) + 1);
                if(item.el[0].id != '') {
                    var nr_slide = item.el[0].id.split("_");

                    // Will fire when popup is closed
                    //jQuery(".td-iosSlider").iosSlider("goToSlide", this.currItem.index + 1 );
                    jQuery(".td-iosSlider").iosSlider("goToSlide", parseInt(nr_slide[1]) + 1);
                } else {
                    td_modal_image_last_el = item.el;
                    setTimeout(function(){
                        td_util.scroll_into_view(item.el);
                    }, 100);
                }
            },
            beforeClose: function() {
                if (td_modal_image_last_el != '') {
                    td_util.scroll_into_view(td_modal_image_last_el);
                }
            }
        }
    });
}





function td_get_document_width() {
    var x = 0;
    if (self.innerHeight)
    {
        x = self.innerWidth;
    }
    else if (document.documentElement && document.documentElement.clientHeight)
    {
        x = document.documentElement.clientWidth;
    }
    else if (document.body)
    {
        x = document.body.clientWidth;
    }
    return x;
}

function td_get_document_height() {
    var y = 0;
    if (self.innerHeight)
    {
        y = self.innerHeight;
    }
    else if (document.documentElement && document.documentElement.clientHeight)
    {
        y = document.documentElement.clientHeight;
    }
    else if (document.body)
    {
        y = document.body.clientHeight;
    }
    return y;
}


//stop propagation
function stopBubble(e){
    if(e && e.stopPropagation) {
        e.stopPropagation();
    } else {
        window.event.cancelBubble=true;
    }
}
var td_loading_box = {

    //array_colors: ['#ffffff', '#fafafa', '#ececec', '#dddddd', '#bfbfbf', '#9a9a9a', '#7e7e7e', '#636363'],//whiter -> darker

    array_colors_temp: ['rgba(99, 99, 99, 0)', 'rgba(99, 99, 99, 0.05)', 'rgba(99, 99, 99, 0.08)', 'rgba(99, 99, 99, 0.2)', 'rgba(99, 99, 99, 0.3)', 'rgba(99, 99, 99, 0.5)', 'rgba(99, 99, 99, 0.6)', 'rgba(99, 99, 99, 1)'],//whiter -> darker

    array_colors: [],

    status_animation: 'stop',

    //stop loading box
    stop : function stop () {
        td_loading_box.status_animation = 'stop';
        //jQuery('.td-loader-gif').html("");
    },


    //init loading box
    init : function init (color) {

        var td_color_reg_exp = /^#[a-zA-Z0-9]{3,6}$/;
        if(color && td_color_reg_exp.test(color)) {

            var col_rgba = td_loading_box.hexToRgb(color);

            var rgba_string = "rgba(" + col_rgba.r + ", " + col_rgba.g + ", " + col_rgba.b + ", ";

            td_loading_box.array_colors[7] = rgba_string + " 1)";
            td_loading_box.array_colors[6] = rgba_string + " 0.6)";
            td_loading_box.array_colors[5] = rgba_string + " 0.5)";
            td_loading_box.array_colors[4] = rgba_string + " 0.3)";
            td_loading_box.array_colors[3] = rgba_string + " 0.2)";
            td_loading_box.array_colors[2] = rgba_string + " 0.08)";
            td_loading_box.array_colors[1] = rgba_string + " 0.05)";
            td_loading_box.array_colors[0] = rgba_string + " 0)";

        } else {
            //default array
            td_loading_box.array_colors = td_loading_box.array_colors_temp.slice(0);

        }

        if(td_loading_box.status_animation == 'stop') {
            td_loading_box.status_animation = 'display';
            this.render();
        }
    },


    //create the animation
    render: function render (color) {

        //call the animation_display function
        td_loading_box.animation_display('<div class="td-lb-box td-lb-box-1" style="background-color:' + td_loading_box.array_colors[0] + '"></div><div class="td-lb-box td-lb-box-2" style="background-color:' + td_loading_box.array_colors[1] + '"></div><div class="td-lb-box td-lb-box-3" style="background-color:' + td_loading_box.array_colors[2] + '"></div><div class="td-lb-box td-lb-box-4" style="background-color:' + td_loading_box.array_colors[3] + '"></div><div class="td-lb-box td-lb-box-5" style="background-color:' + td_loading_box.array_colors[4] + '"></div><div class="td-lb-box td-lb-box-6" style="background-color:' + td_loading_box.array_colors[5] + '"></div><div class="td-lb-box td-lb-box-7" style="background-color:' + td_loading_box.array_colors[6] + '"></div><div class="td-lb-box td-lb-box-8" style="background-color:' + td_loading_box.array_colors[7] + '"></div>');

        //direction right
        var temp_color_array = [td_loading_box.array_colors[0], td_loading_box.array_colors[1], td_loading_box.array_colors[2], td_loading_box.array_colors[3], td_loading_box.array_colors[4], td_loading_box.array_colors[5], td_loading_box.array_colors[6], td_loading_box.array_colors[7]];

        td_loading_box.array_colors[0] = temp_color_array[7];
        td_loading_box.array_colors[1] = temp_color_array[0];
        td_loading_box.array_colors[2] = temp_color_array[1];
        td_loading_box.array_colors[3] = temp_color_array[2];
        td_loading_box.array_colors[4] = temp_color_array[3];
        td_loading_box.array_colors[5] = temp_color_array[4];
        td_loading_box.array_colors[6] = temp_color_array[5];
        td_loading_box.array_colors[7] = temp_color_array[6];

        if(td_loading_box.status_animation == 'display') {


            setTimeout(td_loading_box.render, 40);
        } else {
            td_loading_box.animation_display('');
        }
    },


    //display the animation
    animation_display: function animation_display (animation_str) {
        jQuery('.td-loader-gif').html(animation_str);
    },


    //converts hex to rgba
    hexToRgb: function hexToRgb(hex) {
        var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);

        return result ? {
            r: parseInt(result[1], 16),
            g: parseInt(result[2], 16),
            b: parseInt(result[3], 16)
        } : null;
    }
}; //td_loading_box.init();//td_loading_box.stop();

/*  ----------------------------------------------------------------------------
    On load
 */
jQuery().ready(function() {
    td_ajax_search.init();
});


var td_ajax_search = {

    // private vars
    _current_selection_index:0,
    _last_request_results_count:0,
    _first_down_up:true,
    _is_search_open:false,


    /**
     * init the class
     */
    init: function init() {


        // hide the drop down if we click outside of it
        jQuery(document).click(function(e) {
            if(
                e.target.className !== "td-icon-search"
                && e.target.id !== "td-header-search"
                && e.target.id !== "td-header-search-top"
                && td_ajax_search._is_search_open === true
            ) {
                td_ajax_search.hide_search_box();
            }
        });


        // show and hide the drop down on the search icon
        jQuery('#td-header-search-button').click(function(event){
            event.preventDefault();
            if (td_ajax_search._is_search_open === true) {
                td_ajax_search.hide_search_box();

            } else {
                td_ajax_search.show_search_box();
            }
        });


        // keydown on the text box
        jQuery('#td-header-search').keydown(function(event) {
            if (
                (event.which && event.which == 39)
                || (event.keyCode && event.keyCode == 39)
                || (event.which && event.which == 37)
                || (event.keyCode && event.keyCode == 37))
            {
                //do nothing on left and right arrows
                td_ajax_search.td_aj_search_input_focus();
                return;
            }




            if ((event.which && event.which == 13) || (event.keyCode && event.keyCode == 13)) {
                // on enter
                var td_aj_cur_element = jQuery('.td-aj-cur-element');
                if (td_aj_cur_element.length > 0) {
                    //alert('ra');
                    var td_go_to_url = td_aj_cur_element.find('.entry-title a').attr('href');
                    window.location = td_go_to_url;
                } else {
                    jQuery(this).parent().parent().submit();
                }
                return false; //redirect for search on enter
            } else {

                if ((event.which && event.which == 40) || (event.keyCode && event.keyCode == 40)) {
                    // down
                    td_ajax_search.td_aj_search_move_prompt_down();
                    return false; //disable the envent

                } else if((event.which && event.which == 38) || (event.keyCode && event.keyCode == 38)) {
                    //up
                    td_ajax_search.td_aj_search_move_prompt_up();
                    return false; //disable the envent
                } else {

                    //for backspace we have to check if the search query is empty and if so, clear the list
                    if ((event.which && event.which == 8) || (event.keyCode && event.keyCode == 8)) {
                        //if we have just one character left, that means it will be deleted now and we also have to clear the search results list
                        var search_query = jQuery(this).val();
                        if (search_query.length == 1) {
                            jQuery('#td-aj-search').empty();
                        }

                    }

                    //various keys
                    td_ajax_search.td_aj_search_input_focus();
                    //jQuery('#td-aj-search').empty();
                    setTimeout(function(){
                        td_ajax_search.do_ajax_call();
                    }, 100);
                }
                return true;
            }

        });

    },


    show_search_box: function open_search_box() {
        jQuery(".td-drop-down-search").addClass('td-drop-down-search-open');
        // do not try to autofocus on ios. It's still buggy as of 18 march 2015
        if (td_detect.is_ios !== true) {
            setTimeout(function(){
                document.getElementById("td-header-search").focus();
            }, 200);
        }
        td_ajax_search._is_search_open = true;
    },


    hide_search_box: function hide_search_box() {
        jQuery(".td-drop-down-search").removeClass('td-drop-down-search-open');
        td_ajax_search._is_search_open = false;
    },



    /**
     * moves the select up
     */
    td_aj_search_move_prompt_up: function td_aj_search_move_prompt_up() {
        if (td_ajax_search._first_down_up === true) {
            td_ajax_search._first_down_up = false;
            if (td_ajax_search._current_selection_index === 0) {
                td_ajax_search._current_selection_index = td_ajax_search._last_request_results_count - 1;
            } else {
                td_ajax_search._current_selection_index--;
            }
        } else {
            if (td_ajax_search._current_selection_index === 0) {
                td_ajax_search._current_selection_index = td_ajax_search._last_request_results_count;
            } else {
                td_ajax_search._current_selection_index--;
            }
        }
        jQuery('.td_module_wrap').removeClass('td-aj-cur-element');
        if (td_ajax_search._current_selection_index  > td_ajax_search._last_request_results_count -1) {
            //the input is selected
            jQuery('.td-search-form').fadeTo(100, 1);
        } else {
            td_ajax_search.td_aj_search_input_remove_focus();
            jQuery('.td_module_wrap').eq(td_ajax_search._current_selection_index).addClass('td-aj-cur-element');
        }
    },



    /**
     * moves the select prompt down
     */
    td_aj_search_move_prompt_down: function td_aj_search_move_prompt_down() {
        if (td_ajax_search._first_down_up === true) {
            td_ajax_search._first_down_up = false;
        } else {
            if (td_ajax_search._current_selection_index === td_ajax_search._last_request_results_count) {
                td_ajax_search._current_selection_index = 0;
            } else {
                td_ajax_search._current_selection_index++;
            }
        }
        jQuery('.td_module_wrap').removeClass('td-aj-cur-element');
        if (td_ajax_search._current_selection_index > td_ajax_search._last_request_results_count - 1 ) {
            //the input is selected
            jQuery('.td-search-form').fadeTo(100, 1);
        } else {
            td_ajax_search.td_aj_search_input_remove_focus();
            jQuery('.td_module_wrap').eq(td_ajax_search._current_selection_index).addClass('td-aj-cur-element');
        }
    },



    /**
     * puts the focus on the input box
     */
    td_aj_search_input_focus: function td_aj_search_input_focus() {
        td_ajax_search._current_selection_index = 0;
        td_ajax_search._first_down_up = true;
        jQuery('.td-search-form').fadeTo(100, 1);
        jQuery('.td_module_wrap').removeClass('td-aj-cur-element');
    },



    /**
     * removes the focus from the input box
     */
    td_aj_search_input_remove_focus: function td_aj_search_input_remove_focus() {
        if (td_ajax_search._last_request_results_count !== 0) {
            jQuery('.td-search-form').css('opacity', 0.5);
        }
    },



    /**
     * AJAX: process the response from the server
     */
    process_ajax_response: function (data) {
        var current_query = jQuery('#td-header-search').val();

        //the search is empty - drop results
        if (current_query == '') {
            jQuery('#td-aj-search').empty();
            return;
        }

        var td_data_object = jQuery.parseJSON(data); //get the data object
        //drop the result - it's from a old query
        if (td_data_object.td_search_query !== current_query) {
            return;
        }

        //reset the current selection and total posts
        td_ajax_search._current_selection_index = 0;
        td_ajax_search._last_request_results_count = td_data_object.td_total_in_list;
        td_ajax_search._first_down_up = true;


        //update the query
        jQuery('#td-aj-search').html(td_data_object.td_data);

        /*
         td_data_object.td_data
         td_data_object.td_total_results
         td_data_object.td_total_in_list
         */

        // the .entry-thumb are searched for in the #td-aj-search object, sorted and added into the view port array items
        if ((typeof window['td_animation_stack'] !== 'undefined')  && (window['td_animation_stack'].activated === true)) {
            window['td_animation_stack'].check_for_new_items('#td-aj-search .td-animation-stack', window['td_animation_stack'].SORTED_METHOD.sort_left_to_right, true);
            window['td_animation_stack'].compute_items();
        }
    },



    /**
     * AJAX: do the ajax request
     */
    do_ajax_call: function do_ajax_call() {
        if (jQuery('#td-header-search').val() == '') {
            td_ajax_search.td_aj_search_input_focus();
            return;
        }



        var search_query = jQuery('#td-header-search').val();


        //do we have a cache hit
        if (td_local_cache.exist(search_query)) {
            td_ajax_search.process_ajax_response(td_local_cache.get(search_query));
            return; //cache HIT
        }


        //fk no cache hit - do the real request



        jQuery.ajax({
            type: 'POST',
            url: td_ajax_url,
            data: {
                action: 'td_ajax_search',
                td_string: search_query
            },
            success: function(data, textStatus, XMLHttpRequest){
                td_local_cache.set(search_query, data);
                td_ajax_search.process_ajax_response(data);
            },
            error: function(MLHttpRequest, textStatus, errorThrown){
                //console.log(errorThrown);
            }
        });
    }


};



"use strict";

/* ----------------------------------------------------------------------------
 td_post_images.js
 --------------------------------------------------------------------------- */



/*  ----------------------------------------------------------------------------
 On load
 */
jQuery().ready(function() {
    //handles the modal images
    td_modal_image();

    //move classes from post images to figure - td-post-image-full etc
    td_util.image_move_class_to_figure('td-post-image-full');
    td_util.image_move_class_to_figure('td-post-image-right');
    td_util.image_move_class_to_figure('td-post-image-left');

});



// used for scrolling to the last element
var td_modal_image_last_el = '';

// handles modal images for: Featured images, inline image, inline image with caption, galleries
function td_modal_image() {

    //fix wordpress figure + figcaption (we move the figcaption in the data-caption attribute of the link)
    jQuery('figure.wp-caption').each(function() {
        var caption_text = jQuery(this).children('figcaption').html();
        jQuery(this).children('a').data('caption', caption_text);
    });

    //move td-modal-image class to the parent a from the image. We can only add this class to the image via word press media editor
    jQuery('.td-modal-image').each(function() {
        jQuery(this).parent().addClass('td-modal-image');
        jQuery(this).removeClass('td-modal-image');
    });



    //popup on modal images in articles
    jQuery('article').magnificPopup({
        type:'image',
        delegate: ".td-modal-image",
        gallery:{
            enabled:true,
            tPrev: td_util.get_backend_var('td_magnific_popup_translation_tPrev'), // Alt text on left arrow
            tNext: td_util.get_backend_var('td_magnific_popup_translation_tNext'), // Alt text on right arrow
            tCounter: td_util.get_backend_var('td_magnific_popup_translation_tCounter') // Markup for "1 of 7" counter
        },
        ajax: {
            tError: td_util.get_backend_var('td_magnific_popup_translation_ajax_tError')
        },
        image: {
            tError: td_util.get_backend_var('td_magnific_popup_translation_image_tError'),
            titleSrc: function(item) {//console.log(item.el);
                //alert(jQuery(item.el).data("caption"));
                var td_current_caption = jQuery(item.el).data('caption');
                if (typeof td_current_caption != "undefined") {
                    return td_current_caption;
                } else {
                    return '';
                }


            }
        },
        zoom: {
            enabled: true,
            duration: 300,
            opener: function(element) {
                return element.find("img");
            }
        },
        callbacks: {
            change: function(item) {
                td_modal_image_last_el = item.el;
                //setTimeout(function(){
                td_util.scroll_into_view(item.el);
                //}, 100);

            },
            beforeClose: function() {
                td_affix.allow_scroll = false;

                td_util.scroll_into_view(td_modal_image_last_el);

                var interval_td_affix_scroll = setInterval(function() {

                    if (!td_is_scrolling_animation) {
                        clearInterval(interval_td_affix_scroll);
                        setTimeout(function() {
                            td_affix.allow_scroll = true;
                            //td_affix.td_events_scroll(td_events.scroll_window_scrollTop);
                        }, 100);
                    }
                }, 100);
            }
        }
    });





    //gallery popup
    //detect jetpack carousel and disable the theme popup
    if (typeof jetpackCarouselStrings === 'undefined') {

        // copy gallery caption from figcaption to data-caption attribute of the link to the full image, in this way the modal can read the caption
        jQuery('figure.gallery-item').each(function() {
            var caption_text = jQuery(this).children('figcaption').html();
            jQuery(this).find('a').data('caption', caption_text);
        });



        //jquery tiled gallery
        jQuery('.tiled-gallery').magnificPopup({
            type:'image',
            delegate: "a",
            gallery:{
                enabled:true,
                tPrev: td_util.get_backend_var('td_magnific_popup_translation_tPrev'), // Alt text on left arrow
                tNext: td_util.get_backend_var('td_magnific_popup_translation_tNext'), // Alt text on right arrow
                tCounter: td_util.get_backend_var('td_magnific_popup_translation_tCounter') // Markup for "1 of 7" counter
            },
            ajax: {
                tError: td_util.get_backend_var('td_magnific_popup_translation_ajax_tError')
            },
            image: {
                tError: td_util.get_backend_var('td_magnific_popup_translation_image_tError'),
                titleSrc: function(item) {//console.log(item.el);
                    var td_current_caption = jQuery(item.el).parent().find('.tiled-gallery-caption').text();
                    if (typeof td_current_caption != "undefined") {
                        return td_current_caption;
                    } else {
                        return '';
                    }
                }
            },
            zoom: {
                enabled: true,
                duration: 300,
                opener: function(element) {
                    return element.find("img");
                }
            },
            callbacks: {
                change: function(item) {
                    td_modal_image_last_el = item.el;
                    td_util.scroll_into_view(item.el);
                },
                beforeClose: function() {
                    td_util.scroll_into_view(td_modal_image_last_el);
                }

            }
        });



        jQuery('.gallery').magnificPopup({
            type:'image',
            delegate: ".gallery-icon > a",
            gallery:{
                enabled:true,
                tPrev: td_util.get_backend_var('td_magnific_popup_translation_tPrev'), // Alt text on left arrow
                tNext: td_util.get_backend_var('td_magnific_popup_translation_tNext'), // Alt text on right arrow
                tCounter: td_util.get_backend_var('td_magnific_popup_translation_tCounter') // Markup for "1 of 7" counter
            },
            ajax: {
                tError: td_util.get_backend_var('td_magnific_popup_translation_ajax_tError')
            },
            image: {
                tError: td_util.get_backend_var('td_magnific_popup_translation_image_tError'),
                titleSrc: function(item) {//console.log(item.el);
                    var td_current_caption = jQuery(item.el).data('caption');
                    if (typeof td_current_caption != "undefined") {
                        return td_current_caption;
                    } else {
                        return '';
                    }
                }
            },
            zoom: {
                enabled: true,
                duration: 300,
                opener: function(element) {
                    return element.find("img");
                }
            },
            callbacks: {
                change: function(item) {
                    td_modal_image_last_el = item.el;
                    td_util.scroll_into_view(item.el);
                },
                beforeClose: function() {
                    td_util.scroll_into_view(td_modal_image_last_el);
                }

            }
        });


    }

} //end modal

// minimized js - made by tagDiv -
jQuery().ready(function(){td_on_ready_ajax_blocks()});
function td_on_ready_ajax_blocks(){function b(a){1==c&&a.target==d?window.location=a.target:(c=!0,d=a.target,a.preventDefault(),setTimeout(function(){c=!1},300),e.call(jQuery(this),a))}function e(a){a=jQuery(this).data("td_block_id");jQuery(".mega-menu-sub-cat-"+a).removeClass("cur-sub-cat");jQuery(this).addClass("cur-sub-cat");a=td_getBlockObjById(a);a.td_filter_value=jQuery(this).data("td_filter_value");a.td_current_page=1;td_ajax_do_block_request(a,"mega_menu")}jQuery(".td-ajax-next-page").click(function(a){a.preventDefault();
a=td_getBlockObjById(jQuery(this).data("td_block_id"));jQuery(this).hasClass("ajax-page-disabled")||!0===a.is_ajax_running||(a.is_ajax_running=!0,a.td_current_page++,td_ajax_do_block_request(a,"next"))});jQuery(".td-ajax-prev-page").click(function(a){a.preventDefault();a=td_getBlockObjById(jQuery(this).data("td_block_id"));jQuery(this).hasClass("ajax-page-disabled")||!0===a.is_ajax_running||(a.is_ajax_running=!0,a.td_current_page--,td_ajax_do_block_request(a,"back"))});jQuery(".td_ajax_load_more").click(function(a){a.preventDefault();
jQuery(this).hasClass("ajax-page-disabled")||(a=td_getBlockObjById(jQuery(this).data("td_block_id")),a.td_current_page++,td_ajax_do_block_request(a,"load_more"),a.max_num_pages<=a.td_current_page&&jQuery(this).addClass("ajax-page-disabled"))});td_detect.is_mobile_device?jQuery(".td-pulldown-filter-display-option").click(function(){var a=jQuery(this).data("td_block_id");jQuery("#td_pulldown_"+a).addClass("td-pulldown-filter-list-open");a=jQuery("#td_pulldown_"+a+"_list");a.removeClass("fadeOut");a.addClass("animated fadeIn")}):
jQuery(".td-pulldown-filter-display-option").hover(function(){var a=jQuery(this).data("td_block_id");jQuery("#td_pulldown_"+a).addClass("td-pulldown-filter-list-open");a=jQuery("#td_pulldown_"+a+"_list");a.removeClass("fadeOut");a.addClass("animated fadeIn");a.css("visibility","visible")},function(){var a=jQuery(this).data("td_block_id");jQuery("#td_pulldown_"+a).removeClass("td-pulldown-filter-list-open")});jQuery(".td-pulldown-filter-link").click(function(a){a.preventDefault();var c=jQuery(this).data("td_block_id");
jQuery("#"+c).find(".iosSlider").iosSlider("destroy");var b=td_getBlockObjById(c);b.td_filter_value=jQuery(this).data("td_filter_value");b.td_filter_ui_uid=jQuery(this).attr("id");b.td_current_page=1;td_pull_down_filter_change_value(b.id,'<span>Loading... </span><i class="td-icon-menu-down"></i>');jQuery("#td_pulldown_"+c).removeClass("td-pulldown-filter-list-open");td_ajax_do_block_request(b,"pull_down");td_detect.is_mobile_device&&stopBubble(a)});jQuery(".td-related-title a").click(function(a){a.preventDefault();
jQuery(".td-related-title").children("a").removeClass("td-cur-simple-item");jQuery(this).addClass("td-cur-simple-item");a=jQuery(this).data("td_block_id");a=td_getBlockObjById(a);a.td_filter_value=jQuery(this).data("td_filter_value");a.td_current_page=1;td_ajax_do_block_request(a,"pull_down")});var c=!1,d="";td_detect.is_touch_device?(jQuery(".block-mega-child-cats a").click(b,!1),jQuery(".block-mega-child-cats a").each(function(a,c){c.addEventListener("touchend",b,!1)})):jQuery(".block-mega-child-cats a").hover(e,
function(a){});jQuery(".td-subcat-item a").click(function(a){a.preventDefault();jQuery(".td-subcat-item a").removeClass("td-cur-simple-item");jQuery(this).addClass("td-cur-simple-item");a=td_getBlockObjById(jQuery(this).data("td_block_id"));jQuery(this).hasClass("ajax-page-disabled")||!0===a.is_ajax_running||(a.is_ajax_running=!0,a.td_filter_value=jQuery(this).data("td_filter_value"),a.td_current_page=1,td_ajax_do_block_request(a,"pull_down"))})}
function td_pull_down_filter_change_value(b,e){jQuery("#td-pulldown-"+b+"-val").html(e)}
function td_ajax_do_block_request(b,e){var c=JSON.stringify(b);if(td_local_cache.exist(c))return td_block_ajax_loading_start(b,!0,e),td_ajax_block_process_response(td_local_cache.get(c),e),"cache_hit";td_block_ajax_loading_start(b,!1,e);jQuery.ajax({type:"POST",url:td_ajax_url,cache:!0,data:{action:"td_ajax_block",td_atts:b.atts,td_block_id:b.id,td_column_number:b.td_column_number,td_current_page:b.td_current_page,block_type:b.block_type,td_filter_value:b.td_filter_value,td_filter_ui_uid:b.td_filter_ui_uid,
td_user_action:b.td_user_action},success:function(b,a,f){td_local_cache.set(c,b);td_ajax_block_process_response(b,e)},error:function(b,a,c){}})}
function td_ajax_block_process_response(b,e){var c=jQuery.parseJSON(b);c.td_filter_ui_uid&&td_pull_down_filter_change_value(c.td_block_id,"<span>"+jQuery("#"+c.td_filter_ui_uid).html()+' </span><i class="td-icon-menu-down"></i>');if("load_more"==e||"infinite_load"==e){for(var d=0;d<td_smart_sidebar.items.length;d++)"case_3_bottom_of_content"==td_smart_sidebar.items[d].sidebar_state&&(td_smart_sidebar.items[d].sidebar_state="case_1_fixed_down");jQuery(c.td_data).appendTo("#"+c.td_block_id)}else jQuery("#"+
c.td_block_id).html(c.td_data);!0===c.td_hide_prev?jQuery("#prev-page-"+c.td_block_id).addClass("ajax-page-disabled"):jQuery("#prev-page-"+c.td_block_id).removeClass("ajax-page-disabled");!0===c.td_hide_next?jQuery("#next-page-"+c.td_block_id).addClass("ajax-page-disabled"):jQuery("#next-page-"+c.td_block_id).removeClass("ajax-page-disabled");d=td_getBlockObjById(c.td_block_id);"slide"===d.block_type&&jQuery("#"+c.td_block_id+" .slide-wrap-active-first").addClass("slide-wrap-active");d.is_ajax_running=
!1;td_block_ajax_loading_end(c,d,e)}
function td_block_ajax_loading_start(b,e,c){var d=jQuery("#"+b.id);jQuery(".td-loader-gif").remove();jQuery("#"+b.id).removeClass("fadeInRight fadeInLeft fadeInDown fadeInUp animated_xlong");d.addClass("td_block_inner_overflow");var a=d.height();d.css("height",a);!0!==e&&("load_more"==c?(d.parent().append('<div class="td-loader-gif td-loader-gif-bottom td-loader-animation-start"></div>'),td_loading_box.init(b.header_color?b.header_color:tds_theme_color_site_wide),setTimeout(function(){jQuery(".td-loader-gif").removeClass("td-loader-animation-start");
jQuery(".td-loader-gif").addClass("td-loader-animation-mid")},50)):"infinite_load"!=c&&(d.parent().append('<div class="td-loader-gif td-loader-animation-start"></div>'),td_loading_box.init(b.header_color?b.header_color:tds_theme_color_site_wide),setTimeout(function(){jQuery(".td-loader-gif").removeClass("td-loader-animation-start");jQuery(".td-loader-gif").addClass("td-loader-animation-mid")},50),d.addClass("animated_long fadeOut_to_1")))}
function td_block_ajax_loading_end(b,e,c){jQuery(".td-loader-gif").removeClass("td-loader-animation-mid");jQuery(".td-loader-gif").addClass("td-loader-animation-end");setTimeout(function(){jQuery(".td-loader-gif").remove();td_loading_box.stop()},400);var d=jQuery("#"+e.id);d.removeClass("animated_long fadeOut_to_1");var a;"undefined"!==typeof window.td_animation_stack&&!0===window.td_animation_stack.activated&&(a=window.td_animation_stack.SORTED_METHOD.sort_left_to_right);switch(c){case "next":d.addClass("animated_xlong fadeInRight");
void 0!==a&&(a=window.td_animation_stack.SORTED_METHOD.sort_right_to_left);break;case "back":d.addClass("animated_xlong fadeInLeft");break;case "pull_down":d.addClass("animated_xlong fadeInDown");break;case "mega_menu":d.addClass("animated_xlong fadeInUp");break;case "infinite_load":setTimeout(function(){td_infinite_loader.compute_top_distances();""!=b.td_data&&td_infinite_loader.enable_is_visible_callback(e.id)},500),setTimeout(function(){td_infinite_loader.compute_top_distances()},1E3),setTimeout(function(){td_infinite_loader.compute_top_distances()},
1500)}setTimeout(function(){jQuery(".td_block_inner_overflow").removeClass("td_block_inner_overflow");d.css("height","auto");td_smart_sidebar.compute()},200);setTimeout(function(){td_smart_sidebar.compute()},500);void 0!==a&&setTimeout(function(){window.td_animation_stack.check_for_new_items("#"+e.id+" .td-animation-stack",a,!0)},200)}function td_getBlockIndex(b){var e=0,c=0;jQuery.each(td_blocks,function(d,a){if(a.id===b)return c=e,!1;e++});return c}
function td_getBlockObjById(b){return td_blocks[td_getBlockIndex(b)]};

// end minimized

/*
 td_util.js
 v1.1
 */

"use strict";


/*  ----------------------------------------------------------------------------
 On load
 */
jQuery().ready(function() {

    /**
     * Modal window js code
     */
    jQuery('.td-login-modal-js').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#name',
        removalDelay: 500,

        // When elemened is focused, some mobile browsers in some cases zoom in
        // It looks not nice, so we disable it:
        callbacks: {
            beforeOpen: function() {


                this.st.mainClass = this.st.el.attr('data-effect');


                //empty all fields
                td_modala_empty_all_fields();

                //empty error display div
                td_modala_empty_err_div();

                if(jQuery(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    if (td_detect.is_ie === false) {
                        //do not focus on ie 10
                        this.st.focus = '#login_email';
                    }

                }
            },

            beforeClose: function() {
            }
        }
    });


    //login
    jQuery('#login-link').on( "click", function() {
        //hides or shows the divs with inputs
        show_hide_content_modala([['#td-login-div', 1], ['#td-register-div', 0], ['#td-forgot-pass-div', 0]]);

        //moves focus on the tab
        modala_swich_tabs([['#login-link', 1], ['#register-link', 0]]);

        if(jQuery(window).width() > 700 && td_detect.is_ie === false) {
            jQuery('#login_email').focus();
        }

        //empty all fields
        //td_modala_empty_all_fields();

        //empty error display div
        td_modala_empty_err_div();
    });
    //login button
    jQuery('#login_button').on( "click", function() {
        handle_login_for_modal_window();
    });
    //enter key on #login_pass
    jQuery('#login_pass').keydown(function(event) {
        if ((event.which && event.which == 13) || (event.keyCode && event.keyCode == 13)) {
            handle_login_for_modal_window();
        }
    });

    //register
    jQuery('#register-link').on( "click", function() {
        //hides or shows the divs with inputs
        show_hide_content_modala([['#td-login-div', 0], ['#td-register-div', 1], ['#td-forgot-pass-div', 0]]);

        //moves focus on the tab
        modala_swich_tabs([['#login-link', 0], ['#register-link', 1]]);

        if(jQuery(window).width() > 700  && td_detect.is_ie === false) {
            jQuery('#register_email').focus();
        }

        //empty all fields
        //td_modala_empty_all_fields();

        //empty error display div
        td_modala_empty_err_div();
    });
    //register button
    jQuery('#register_button').on( "click", function() {
        handle_register_for_modal_window();
    });
    //enter key on #register_user
    jQuery('#register_user').keydown(function(event) {
        if ((event.which && event.which == 13) || (event.keyCode && event.keyCode == 13)) {
            handle_register_for_modal_window();
        }
    });

    


});//end jquery ready



/**
 * adds or remove a class from an html object
 *
 * param : array with object identifier (id - # or class - .)
 * ex: ['.class_indetifier', 1, 'class_to_add'] or ['.class_indetifier', 0, 'class_to_remove']
 */
function modala_add_remove_class(param) {

    //add class
    if (param[1] == 1) {
        jQuery(param[0]).addClass(param[2]);

        //remove class
    } else {
        jQuery(param[0]).removeClass(param[2]);
    }
}

/*  ----------------------------------------------------------------------------
 On load
 */
jQuery().ready(function() {

    //hide panel
    jQuery("#td-theme-set-hide").click(function(event){
        event.preventDefault();
        event.stopPropagation();
        //hide
        td_set_cookies_life(['td_show_panel', 'hide', 86400000]);//86400000 is the number of milliseconds in a day
        jQuery('#td-theme-settings').removeClass('td-theme-settings-no-transition');
        jQuery('#td-theme-settings').addClass('td-theme-settings-small');


        jQuery('.td-set-theme-style-link').removeClass('fadeInLeft');

    });

    //show panel
    jQuery("#td-theme-settings").click(function(){
        if (jQuery(this).hasClass('td-theme-settings-small')) {

            jQuery('.td-set-theme-style-link').addClass('animated_xlong fadeInLeft');

            //show full
            td_set_cookies_life(['td_show_panel', 'show', 86400000]);//86400000 is the number of milliseconds in a day
            jQuery('.td-theme-settings-small').removeClass('td-theme-settings-small');
        }
    });

}); //end on load
/**
 * Created by RADU on 6/24/14.
 */
"use strict";


/*  ----------------------------------------------------------------------------
    history js
 */

var td_history = {
    td_history_change_event: false,

    // static class init
    init: function() {
        //hook the popstate event
        window.addEventListener('popstate', function(event) {
            td_history.td_history_change_event = true;
            if (typeof(event.state) != "undefined" && event.state != null) {
                jQuery("#" + event.state.slide_id).iosSlider("goToSlide", event.state.current_slide);
            }
        });
    },


    /**
     * generally used on load
     * @param data
     */
    replace_history_entry: function (data) {
        if (td_detect.has_history === false) {
            return; //no history support
        }
        history.replaceState(data, null);
    },


    /**
     * ads an history entry - it also knows if we are using mod rewrite or not
     * @param data - the history data (state)
     * @param query_parm_id - 'slide' or other
     * @param query_parm_value - the value for slide
     */
    add_history_entry: function (data, query_parm_id, query_parm_value) {

        if (td_detect.has_history === false) {
            return; //no history support
        }


        if (query_parm_value == '') {
            history.pushState(data, null,  null); //add the hash via history api
            return;
        }

        // @todo - detect other types of pages ex: ?page_id
        var td_query_page_id = td_history.get_query_parameter('p');
        if (td_query_page_id != '') {
            //no mod rewrite, we go with ?p= etc
            if (query_parm_value == 1) {
                history.pushState(data, null,  '?p=' + td_query_page_id); //remove the parm for the first item
            } else {
                history.pushState(data, null,  '?p=' + td_query_page_id + '&' + query_parm_id + '=' + query_parm_value); //add the hash via history api
            }

        } else {
            //mod rewrite
            if (query_parm_value == 1) {
                history.pushState(data, null, td_history.get_mod_rewrite_base_url()); //add the hash via history api
            } else {
                history.pushState(data, null, td_history.get_mod_rewrite_base_url() + query_parm_value + '/'); //add the hash via history api
            }
        }

    },



    /**
     * returns the base url of urls with mod rewrite + pagination
     * @returns {string}
     */
    get_mod_rewrite_base_url: function () {
        var full_url = document.URL;

        //trim the last "/" in the url
        if (full_url.charAt(full_url.length - 1) == '/') {
            full_url = full_url.slice(0, - 1);
        }

        if (td_history.get_mod_rewrite_pagination(document.URL) === false) {
            // no pagination present
            return document.URL;
        }

        // we have pagination so we have to parse the url to remove it
        return full_url.substring(0, full_url.lastIndexOf("/"))+ '/';

    },



    /**
     * get the pagination from the urls with mod rewrite on
     * @returns {*}
     */
    get_mod_rewrite_pagination: function () {
        var full_url = document.URL;

        //trim the last "/" in the url
        if (full_url.charAt(full_url.length - 1) == '/') {
            full_url = full_url.slice(0, - 1);
        }

        var last_url_parameter = full_url.substring(full_url.lastIndexOf("/")+1, full_url.length);

        // return the page if it's indeed an integer
        if (td_history.isInt(last_url_parameter)) {
            return last_url_parameter;
        }

        //return false if we don't have a page
        return false;
    },


    /**
     * used by the iosslider @startAtSlide, it return 1 if there is no pagination or returns the pagination
     * @param query_parm_id
     * @returns {*}
     */
    get_current_page: function (query_parm_id) {
        var td_query_page_id = td_history.get_query_parameter('p');
        if (td_query_page_id != '') {
            //no mod rewrite, we go with ?p= etc
            var cur_page = td_history.get_query_parameter(query_parm_id);
            if (cur_page != '') {
                return cur_page;
            } else {
                return 1;
            }
        } else {
            //mod rewrite
            var cur_page = td_history.get_mod_rewrite_pagination();
            if (cur_page !== false) {
                return cur_page;
            } else {
                return 1;
            }
        }
    },


    /**
     * used to check if a number is an integer
     * @param n
     * @returns {boolean}
     */
    isInt: function (n) {
        return n % 1 === 0;
    },


    /**
     * returns a query parameter from the current url - we use it for ?p=
     * @param name
     * @returns {string}
     */
    get_query_parameter: function (name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    },

    /**
     * callback for slides with history
     * @param args
     */
    slide_changed_callback: function(args) {
        //do not add another history entry if the slide moved due to the history change event
        if (td_history.td_history_change_event === true) {
            td_history.td_history_change_event = false;
            return;
        }
        var current_slide = args.currentSlideNumber;
        var slide_id = args.sliderContainerObject.attr('id');

        td_history.add_history_entry({current_slide:current_slide, slide_id:slide_id}, 'slide', current_slide);
    }

};

/**
 * ie8 does not have pushState and history
 */
if (window.history && window.history.pushState) {
    td_history.init();
}


// minimized js - made by tagDiv -
var td_smart_sidebar={has_items:!1,items:[],scroll_window_scrollTop_last:0,tds_snap_menu:td_util.get_backend_var("tds_snap_menu"),is_enabled:!0,is_enabled_state_run_once:!1,is_disabled_state_run_once:!1,is_tablet_grid:!1,_view_port_current_interval_index:td_viewport.get_current_interval_index(),item:function(){this.sidebar_jquery_obj=this.content_jquery_obj="";this.content_bottom=this.content_top=this.sidebar_height=this.sidebar_bottom=this.sidebar_top=0;this.sidebar_state="";this.case_3_run_once=
this.case_2_run_once=this.case_1_run_once=!1;this.case_3_last_content_height=this.case_3_last_sidebar_height=0;this.case_4_run_once=!1;this.case_4_last_menu_offset=0;this.case_6_run_once=this.case_5_run_once=!1},add_item:function(b){td_smart_sidebar.has_items=!0;b.sidebar_jquery_obj.prepend('<div class="clearfix"></div>').append('<div class="clearfix"></div>');b.content_jquery_obj.prepend('<div class="clearfix"></div>').append('<div class="clearfix"></div>');td_smart_sidebar.items.push(b)},td_events_scroll:function(b){if(!1!==
td_smart_sidebar.has_items)if(0==td_smart_sidebar.is_enabled){if(!1===td_smart_sidebar.is_disabled_state_run_once){td_smart_sidebar.is_disabled_state_run_once=!0;for(var c=0;c<td_smart_sidebar.items.length;c++)td_smart_sidebar.items[c].sidebar_jquery_obj.css({width:"auto",position:"static",top:"auto",bottom:"auto"});td_smart_sidebar.log("smart_sidebar_disabled")}}else window.requestAnimationFrame(function(){var c=0;""!=td_smart_sidebar.tds_snap_menu&&(c=td_affix.main_menu_height);var e="";b!=td_smart_sidebar.scroll_window_scrollTop_last&&
(e=b>td_smart_sidebar.scroll_window_scrollTop_last?"down":"up");td_smart_sidebar.scroll_window_scrollTop_last=b;var h=jQuery(window).height(),f=b+h;b+=c;for(var d=0;d<td_smart_sidebar.items.length;d++){var a=td_smart_sidebar.items[d];a.content_top=a.content_jquery_obj.offset().top;a.content_height=a.content_jquery_obj.height();a.content_bottom=a.content_top+a.content_height;a.sidebar_top=a.sidebar_jquery_obj.offset().top;a.sidebar_height=a.sidebar_jquery_obj.height();a.sidebar_bottom=a.sidebar_top+
a.sidebar_height;if(a.content_height<=a.sidebar_height)a.sidebar_state="case_6_content_too_small";else if(a.sidebar_height<h)td_smart_sidebar._is_smaller_or_equal(b,a.content_top)?a.sidebar_state="case_2_top_of_content":!0===td_smart_sidebar._is_smaller(a.sidebar_bottom,b)?td_smart_sidebar._is_smaller(b,a.content_bottom-a.sidebar_height)?a.sidebar_state="case_4_fixed_up":a.sidebar_state="case_3_bottom_of_content":td_smart_sidebar._is_smaller_or_equal(a.content_bottom,a.sidebar_bottom)?"up"==e&&td_smart_sidebar._is_smaller_or_equal(b,
a.sidebar_top)?a.sidebar_state="case_4_fixed_up":a.sidebar_state="case_3_bottom_of_content":a.sidebar_state=a.content_bottom-b>=a.sidebar_height?"case_4_fixed_up":"case_3_bottom_of_content";else if(!0===td_smart_sidebar._is_smaller(a.sidebar_bottom,b)?!0===td_smart_sidebar._is_smaller_or_equal(b,a.sidebar_top)&&!0===td_smart_sidebar._is_smaller_or_equal(a.content_top,b)?a.sidebar_state="case_4_fixed_up":!0===td_smart_sidebar._is_smaller(a.sidebar_bottom,f)&&!0===td_smart_sidebar._is_smaller(a.sidebar_bottom,
a.content_bottom)&&a.content_bottom>=f?a.sidebar_state="case_1_fixed_down":a.sidebar_state="case_3_bottom_of_content":!0===td_smart_sidebar._is_smaller(a.sidebar_bottom,f)&&!0===td_smart_sidebar._is_smaller(a.sidebar_bottom,a.content_bottom)&&"down"==e&&a.content_bottom>=f?a.sidebar_state="case_1_fixed_down":!0===td_smart_sidebar._is_smaller_or_equal(a.sidebar_top,a.content_top)&&"up"==e&&a.content_bottom>=f?a.sidebar_state="case_2_top_of_content":!0===td_smart_sidebar._is_smaller_or_equal(a.content_bottom,
a.sidebar_bottom)&&"down"==e||a.content_bottom<f?a.sidebar_state="case_3_bottom_of_content":!0===td_smart_sidebar._is_smaller_or_equal(b,a.sidebar_top)&&"up"==e&&!0===td_smart_sidebar._is_smaller_or_equal(a.content_top,b)&&(a.sidebar_state="case_4_fixed_up"),"case_1_fixed_down"==a.sidebar_state&&"up"==e||"case_4_fixed_up"==a.sidebar_state&&"down"==e)a.sidebar_state="case_5_absolute";var g=0,k=td_viewport.get_current_interval_item();null!=k&&(g=k.sidebar_width);switch(a.sidebar_state){case "case_1_fixed_down":if(!0===
a.case_1_run_once)break;td_smart_sidebar.log("sidebar_id: "+d+" "+a.sidebar_state);a.case_1_run_once=!0;a.case_2_run_once=!1;a.case_3_run_once=!1;a.case_4_run_once=!1;a.case_5_run_once=!1;a.case_6_run_once=!1;a.sidebar_jquery_obj.css({width:g,position:"fixed",top:"auto",bottom:"0","z-index":"1"});break;case "case_2_top_of_content":if(!0===a.case_2_run_once)break;td_smart_sidebar.log("sidebar_id: "+d+" "+a.sidebar_state);a.case_1_run_once=!1;a.case_2_run_once=!0;a.case_3_run_once=!1;a.case_4_run_once=
!1;a.case_5_run_once=!1;a.case_6_run_once=!1;a.sidebar_jquery_obj.css({width:"auto",position:"static",top:"auto",bottom:"auto"});break;case "case_3_bottom_of_content":if(!0===a.case_3_run_once&&a.case_3_last_sidebar_height==a.sidebar_height&&a.case_3_last_content_height==a.content_height)break;td_smart_sidebar.log("sidebar_id: "+d+" "+a.sidebar_state);a.case_1_run_once=!1;a.case_2_run_once=!1;a.case_3_run_once=!0;a.case_3_last_sidebar_height=a.sidebar_height;a.case_3_last_content_height=a.content_height;
a.case_4_run_once=!1;a.case_5_run_once=!1;a.case_6_run_once=!1;a.sidebar_jquery_obj.css({width:g,position:"absolute",top:a.content_bottom-a.sidebar_height-a.content_top,bottom:"auto"});break;case "case_4_fixed_up":if(!0===a.case_4_run_once&&a.case_4_last_menu_offset==c)break;td_smart_sidebar.log("sidebar_id: "+d+" "+a.sidebar_state);a.case_1_run_once=!1;a.case_2_run_once=!1;a.case_3_run_once=!1;a.case_4_run_once=!0;a.case_4_last_menu_offset=c;a.case_5_run_once=!1;a.case_6_run_once=!1;a.sidebar_jquery_obj.css({width:g,
position:"fixed",top:c,bottom:"auto"});break;case "case_5_absolute":if(!0===a.case_5_run_once)break;td_smart_sidebar.log("sidebar_id: "+d+" "+a.sidebar_state);a.case_1_run_once=!1;a.case_2_run_once=!1;a.case_3_run_once=!1;a.case_4_run_once=!1;a.case_5_run_once=!0;a.case_6_run_once=!1;a.sidebar_jquery_obj.css({width:g,position:"absolute",top:a.sidebar_top-a.content_top,bottom:"auto"});break;case "case_6_content_too_small":if(!0===a.case_6_run_once)break;td_smart_sidebar.log("sidebar_id: "+d+" "+a.sidebar_state);
a.case_1_run_once=!1;a.case_2_run_once=!1;a.case_3_run_once=!1;a.case_4_run_once=!1;a.case_5_run_once=!1;a.case_6_run_once=!0;a.sidebar_jquery_obj.css({width:"auto",position:"static",top:"auto",bottom:"auto"})}}})},compute:function(){td_smart_sidebar.td_events_scroll(jQuery(window).scrollTop())},reset_run_once_flags:function(){for(var b=0;b<td_smart_sidebar.items.length;b++)td_smart_sidebar.items[b].case_1_run_once=!1,td_smart_sidebar.items[b].case_2_run_once=!1,td_smart_sidebar.items[b].case_3_run_once=
!1,td_smart_sidebar.items[b].case_3_last_sidebar_height=0,td_smart_sidebar.items[b].case_3_last_content_height=0,td_smart_sidebar.items[b].case_4_run_once=!1,td_smart_sidebar.items[b].case_4_last_menu_offset=0,td_smart_sidebar.items[b].case_5_run_once=!1,td_smart_sidebar.items[b].case_6_run_once=!1},td_events_resize:function(){td_smart_sidebar._view_port_current_interval_index=td_viewport.get_current_interval_index();switch(td_smart_sidebar._view_port_current_interval_index){case 0:td_smart_sidebar.is_enabled=
!1;td_smart_sidebar.is_enabled_state_run_once=!1;break;case 1:!1===td_smart_sidebar.is_tablet_grid&&(td_smart_sidebar.reset_run_once_flags(),td_smart_sidebar.is_tablet_grid=!0,td_smart_sidebar.is_desktop_grid=!1,td_smart_sidebar.log("view port tablet"));td_smart_sidebar.is_enabled=!0;td_smart_sidebar.is_disabled_state_run_once=!1;!1===td_smart_sidebar.is_enabled_state_run_once&&(td_smart_sidebar.is_enabled_state_run_once=!0,td_smart_sidebar.log("smart_sidebar_enabled"));break;case 2:case 3:!0===td_smart_sidebar.is_tablet_grid&&
(td_smart_sidebar.reset_run_once_flags(),td_smart_sidebar.is_tablet_grid=!1,td_smart_sidebar.is_desktop_grid=!0,td_smart_sidebar.log("view port desktop")),td_smart_sidebar.is_enabled=!0,td_smart_sidebar.is_disabled_state_run_once=!1,!1===td_smart_sidebar.is_enabled_state_run_once&&(td_smart_sidebar.is_enabled_state_run_once=!0,td_smart_sidebar.log("smart_sidebar_enabled"))}td_smart_sidebar.compute()},log:function(b){},_is_smaller_or_equal:function(b,c){return 1<=Math.abs(b-c)?b<c?!0:!1:!0},_is_smaller:function(b,
c){return 1<=Math.abs(b-c)?b<c?!0:!1:!1}};

// end minimized

/**
 * Infinite loader v1.0 by Radu O. / tagDiv
 * USES:
 *  - td_events.js
 *  - for blocks:
 *      - td_block::get_block_pagination - custom load more
 *      - in td_js_generator.php - main block object has ajax_pagination_infinite_stop - to stop the infinit scroll after x number of pages and show the load more button after that
 *
 */
"use strict";

/**
 * - register and keep track of dom elements
 * - calculate position from the top of each element
 * - monitor on scroll event
 *  - if one or more of the dom elements is visible
 *  - fire the callback for that dom element! only ONCE
 */


var td_infinite_loader = {

    has_items: false, // this class will only work when this flag is true. If we don't have any items, all the calculations on scroll will be disabled by this flag

    items: [], //the array that has all the items

    // one item object (instantiable)
    item: function() {
        this.uid=''; // - an unique id of the item, usually is the block id!
        this.jquery_obj = ''; //find the item easily for animation ??
        this.bottom_top = 0;  //distance from the bottom of the dom element to top - computed in - @see td_infinite_loader.compute_top_distances();
        this.is_visible_callback_enabled = true; //the callback will fire only when this flag is true. We set it to true after the blocks ajax run @see td_block_ajax_loading_end
        this.is_visible_callback = function () { //callback when the item's bottom is visible :)

        };
    },

    add_item: function(item) {
        td_infinite_loader.has_items = true; //put the flag that we have items
        td_infinite_loader.items.push(item);
    },


    /**
     * foreach element from items, compute the distances from the top
     *  - this is done only on load or when the page is resized
     */
    compute_top_distances: function compute_top_distances() {

        //check the flag to see if we have any items
        if (td_infinite_loader.has_items === false) {
            return;
        }

        jQuery.each(td_infinite_loader.items, function(index, v_event) {
            var top_top = td_infinite_loader.items[index].jquery_obj.offset().top;
            //top of document to bottom of element
            td_infinite_loader.items[index].bottom_top = top_top + td_infinite_loader.items[index].jquery_obj.height();
        });

        //also calculate the events
        td_infinite_loader.compute_events();

    },


    /**
     * calculate if we have to fire an event like is_visible_callback()
     *  - this is done on scroll and on resize!
     */
    compute_events: function compute_events() {
        //check the flag to see if we have any items
        if (td_infinite_loader.has_items === false) {
            return;
        }

        var top_to_viewport_bottom = jQuery(window).height() + jQuery(window).scrollTop();


        jQuery.each(td_infinite_loader.items, function(index, item) {
            if (td_infinite_loader.items[index].bottom_top < top_to_viewport_bottom + 400) {

                //check to see if we can call the callback again
                if (td_infinite_loader.items[index].is_visible_callback_enabled === true) {
                    td_infinite_loader.items[index].is_visible_callback_enabled = false;
                    //the call
                    td_infinite_loader.items[index].is_visible_callback();
                }
            }


        });
    },


    /**
     * enables the is_visible_callback - it is called by td_blocks.js only when a block receives an infinite loading ajax reply
     * @param $item_uid - an unique id of the item, usually is the block id!
     * @see td_block_ajax_loading_end
     */
    enable_is_visible_callback: function enable_is_visible_callback($item_uid) {
        jQuery.each(td_infinite_loader.items, function(index, item) {
            if (item.uid === $item_uid) {
                td_infinite_loader.items[index].is_visible_callback_enabled = true;
                return false; //brake jquery each
            }
        });
    }

};






/**
 * we are using td_ajax_infinite to know when to trigger a block loading
 */
jQuery('.td_ajax_infinite').each(function() {

    // create a new infinite loader item
    var td_infinite_loader_item = new td_infinite_loader.item();

    td_infinite_loader_item.jquery_obj = jQuery(this);
    td_infinite_loader_item.uid = jQuery(this).data('td_block_id');


    /**
     * the callback when the bottom of the element is visible on screen and we need to do something - like load another page
     * - the callback does not fire again until td_infinite_loader.enable_is_visible_callback is called @see td_infinite_loader.js:95
     */
    td_infinite_loader_item.is_visible_callback = function () {      // the is_visible callback is called when we have to pull new content up because the element is visible

        // get the current block object
        var current_block_obj = td_getBlockObjById(td_infinite_loader_item.jquery_obj.data('td_block_id'));

        // if we don't have a infinite stop limit or if we have one we dint' hit it yet
        if (current_block_obj.ajax_pagination_infinite_stop == '' || current_block_obj.td_current_page < (parseInt(current_block_obj.ajax_pagination_infinite_stop) + 1)) {

            // get the block data and increment the pagination
            current_block_obj.td_current_page++;
            td_ajax_do_block_request(current_block_obj, 'infinite_load');

        } else {
            /**
             * show the load more button. The button is already there, hidden - do not know if it's the best solution :)
             * @see td_block::get_block_pagination  in td_block.php
             */
            if (current_block_obj.td_current_page < current_block_obj.max_num_pages) {
                setTimeout(function(){
                    jQuery('#infinite-lm-' + current_block_obj.id).show();
                }, 400);
            }
        }




    };


    td_infinite_loader.add_item(td_infinite_loader_item);
});


//compute to
jQuery(window).load(function() {
    td_infinite_loader.compute_top_distances();
});

jQuery().ready(function() {
    td_infinite_loader.compute_top_distances();
});

/* td_custom_events.js - handles the booster td_events that require throttling
 * v 1.0 - wp_011
 */

"use strict";

var td_custom_events = {


    /**
     * - callback real scroll called from td_events
     * @private
     */
    _callback_scroll: function _callback_scroll() {
        td_animation_scroll.compute_all_items();
    },


    /**
     * - callback real resize called from td_events
     * @private
     */
    _callback_resize: function _callback_resize() {

    },


    /**
     * - callback lazy scroll called from td_events at 100ms
     * @private
     */
    _lazy_callback_scroll_100: function _lazy_callback_scroll_100() {
        if (td_animation_stack.activated === true) {
            td_animation_stack.td_events_scroll();
        }
    },


    /**
     * - callback lazy scroll called from td_events at 500ms
     * @private
     */
    _lazy_callback_scroll_500: function _lazy_callback_scroll_500() {

    },



    /**
     * - callback lazy resize called from td_events at 100ms
     * @private
     */
    _lazy_callback_resize_100: function _lazy_callback_resize_100() {
        td_pulldown.td_events_resize();
        td_backstr.td_events_resize();
        td_animation_scroll.td_events_resize();
    },


    /**
     * - callback lazy resize called from td_events at 500ms
     * @private
     */
    _lazy_callback_resize_500: function _lazy_callback_resize_500() {
        if (td_animation_stack.activated === true) {
            td_animation_stack.td_events_resize();
        }

        // - every td_animation_scroll.item item of the td_backstretch_items array must be reinitialized and repositioned for parallax effect
        for (var i = 0; i < td_backstretch_items.length; i++) {
            td_animation_scroll.reinitialize_item(td_backstretch_items[i], true);
            td_compute_backstretch_item(td_backstretch_items[i]);

            // compute_all_items is used instead, for requestAnimationFrame
            //td_animation_scroll.compute_item(td_backstretch_items[i]);
        }

        // for better performance it's used td_animation_scroll.compute_all_items, because it uses requestAnimationFrame
        td_animation_scroll.compute_all_items();
    }
};

/* td_events.js - handles the events that require throttling
 * v 2.0 - wp_010
 *
 * moved in theme from wp_booster
 */

"use strict";

var td_events = {

    //the events - we have timers that look at the variables and fire the event if the flag is true
    scroll_event_slow_run: false,
    scroll_event_medium_run: false,

    resize_event_slow_run: false, //when true, fire up the resize event
    resize_event_medium_run: false,


    scroll_window_scrollTop: 0, //used to store the scrollTop

    window_pageYOffset: window.pageYOffset, // @todo see if it can replace scroll_window_scrollTop [used by others]
    window_innerHeight: window.innerHeight, // used to store the window height
    window_innerWidth: window.innerWidth, // used to store the window width

    init: function init() {

        jQuery(window).scroll(function() {
            td_events.scroll_event_slow_run = true;
            td_events.scroll_event_medium_run = true;

            //read the scroll top
            td_events.scroll_window_scrollTop = jQuery(window).scrollTop();
            td_events.window_pageYOffset = window.pageYOffset;

            /*  ----------------------------------------------------------------------------
             Run affix menu event
             */

            td_affix.td_events_scroll(td_events.scroll_window_scrollTop); //main menu

            td_smart_sidebar.td_events_scroll(td_events.scroll_window_scrollTop); //smart sidebar scroll


            // call real td_custom_events scroll
            td_custom_events._callback_scroll();
        });


        jQuery(window).resize(function() {
            td_events.resize_event_slow_run = true;
            td_events.resize_event_medium_run = true;

            td_events.window_innerHeight = window.innerHeight;
            td_events.window_innerWidth = window.innerWidth;

            //var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

            //w = jQuery(document).width();
            //console.log(w);


            // call real td_custom_events resize
            td_custom_events._callback_resize();
        });



        //medium resolution timer for rest?
        setInterval(function() {

            // it must run before any others
            td_viewport.detect_changes();

            //scroll event
            if (td_events.scroll_event_medium_run) {
                td_events.scroll_event_medium_run = false;
                //compute events for the infinite scroll
                td_infinite_loader.compute_events();


                // call lazy td_custom_events scroll
                td_custom_events._lazy_callback_scroll_100();
            }

            if (td_events.resize_event_medium_run) {
                td_events.resize_event_medium_run = false;
                td_smart_sidebar.td_events_resize();


                // call lazy td_custom_events resize
                td_custom_events._lazy_callback_resize_100();
            }
        }, 100);



        //low resolution timer for rest?
        setInterval(function() {
            //scroll event
            if (td_events.scroll_event_slow_run) {
                td_events.scroll_event_slow_run = false;

                //back to top
                td_events_scroll_scroll_to_top(td_events.scroll_window_scrollTop);

                //more articles box
                td_more_articles_box.td_events_scroll(td_events.scroll_window_scrollTop);


                // call lazy td_custom_events scroll
                td_custom_events._lazy_callback_scroll_500();
            }

            //resize event
            if (td_events.resize_event_slow_run) {
                td_events.resize_event_slow_run = false;
                td_affix.compute_wrapper();
                td_affix.compute_top();
                td_detect.run_is_phone_screen();


                // call lazy td_custom_events resize
                td_custom_events._lazy_callback_resize_500();
            }
        }, 500);

    }



};

td_events.init();
'use strict';
/**
 * updates the view counter thru ajax
 */
var td_ajax_count = {

    td_get_views_counts_ajax : function td_get_views_counts_ajax (page_type, array_ids) {

        //what function to call based on page type
        var page_type_action = 'td_ajax_get_views';//page_type = page
        if(page_type == "post") {
            page_type_action = 'td_ajax_update_views';
        }

        jQuery.ajax({
            type: 'POST',
            url: td_ajax_url,
            cache:true,

            data: {
                action: page_type_action,
                td_post_ids: array_ids
            },
            success: function(data, textStatus, XMLHttpRequest){
                var td_ajax_post_counts = jQuery.parseJSON(data);//get the return dara

                //check the return var to be object
                if (td_ajax_post_counts instanceof Object) {
                    //alert('value is Object!');

                    //itinerate thru the object
                    jQuery.each(td_ajax_post_counts, function(id_post, value) {
                        //alert(id_post + ": " + value);

                        //this is the count placeholder in witch we write the post count
                        var current_post_count = ".td-nr-views-" + id_post;

                        jQuery(current_post_count).html(value);
                        //console.log(current_post_count + ': ' + value);
                    });
                }
            },
            error: function(MLHttpRequest, textStatus, errorThrown){
                //console.log(errorThrown);
            }
        });

    }
};
/*
 td_video_playlist.js
 v1.1
 */

"use strict";
// jQuery(window).load(function() {//
jQuery().ready(function() {

    //click on a youtube movie
    jQuery('.td_click_video_youtube').click(function(){

        //this flag is check to see if to start the movie
        td_youtube_player.td_playlist_video_autoplay_youtube = 1;

        //add pause to playlist control
        td_playlist_general_functions.td_playlist_add_play_control('.td_youtube_control');

        //create  and play the clicked video
        var td_youtube_video = jQuery(this).attr("id").substring(3);
        if(td_youtube_video != '') {
            td_youtube_player.playVideo(td_youtube_video);
        }
    });



    //click on youtube play control
    jQuery('.td_youtube_control').click(function(){

        //click to play
        if(jQuery(this).hasClass('td-sp-video-play')){
            //this is to enable video playing
            td_youtube_player.td_playlist_video_autoplay_youtube = 1;

            //play the video
            td_youtube_player.td_playlist_youtube_play_video();

        } else {

            //put pause to the player
            td_youtube_player.td_playlist_youtube_pause_video();
        }
    });



    //check for youtube wrapper and add api code to create the player
    if(jQuery('.td_wrapper_playlist_player_youtube').length > 0) {

        if(jQuery('.td_wrapper_playlist_player_youtube').data("autoplay") == "1") {
            td_youtube_player.td_playlist_video_autoplay_youtube = 1;
        }

        var first_video = jQuery('.td_wrapper_playlist_player_youtube').data('first-video');

        if(first_video != '') {
            td_youtube_player.td_playlist_id_youtube_video_running = first_video;

            td_youtube_player.playVideo(first_video);
        }
    }



    //check autoplay vimeo
    if(jQuery('.td_wrapper_playlist_player_vimeo').data("autoplay") == "1") {
        td_vimeo_playlist_obj.td_playlist_video_autoplay_vimeo = 1;
    }

    //click on a vimeo
    jQuery('.td_click_video_vimeo').click(function(){

        //this flag is check to see if to start the movie
        td_vimeo_playlist_obj.td_playlist_video_autoplay_vimeo = 1;

        //add pause to playlist control
        td_playlist_general_functions.td_playlist_add_play_control('.td_vimeo_control');

        //create  and play the clicked video
        td_vimeo_playlist_obj.create_player(jQuery(this).attr("id").substring(3));
    });





    //check for vimeo wrapper and add api code to create the player
    if(jQuery('.td_wrapper_playlist_player_vimeo').length > 0) {

        //add play to playlist control
        td_playlist_general_functions.td_playlist_add_play_control('.td_vimeo_control');

        //create the iframe with the video
        td_vimeo_playlist_obj.create_player(jQuery('.td_wrapper_playlist_player_vimeo').data("first-video"));
    }




    //click on youtube play control
    jQuery('.td_vimeo_control').click(function(){

        //click to play
        if(jQuery(this).hasClass('td-sp-video-play')){
            //this is to enable video playing
            td_vimeo_playlist_obj.td_playlist_video_autoplay_vimeo = 1;

            //play the video
            td_vimeo_playlist_obj.td_playlisty_player_vimeo.api("play");

        } else {

            //put pause to the player
            td_vimeo_playlist_obj.td_playlisty_player_vimeo.api("pause");
        }
    });

});


var td_youtube_player = {
    td_yt_player: '',

    td_player_container: 'player_youtube',

    td_playlist_video_autoplay_youtube: 0,

    td_playlist_id_youtube_video_running: '',


    playVideo: function(videoId) {
        if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
            window.onYouTubePlayerAPIReady = function() {
                td_youtube_player.loadPlayer(td_youtube_player.td_player_container, videoId);
            };
            jQuery.getScript('https://www.youtube.com/player_api');
        } else {
            td_youtube_player.loadPlayer(td_youtube_player.td_player_container, videoId);
        }
    },


    loadPlayer: function(container, videoId) {
        //container is here in case we need to add multiple players on page
        td_youtube_player.td_playlist_id_youtube_video_running = videoId;

        var current_video_name = td_youtube_list_ids['td_' + td_youtube_player.td_playlist_id_youtube_video_running]['title'];
        var current_video_time = td_youtube_list_ids['td_' + td_youtube_player.td_playlist_id_youtube_video_running]['time'];

        //remove focus from all videos from playlist
        td_playlist_general_functions.td_video_playlist_remove_focused('.td_click_video_youtube');

        //add focus class on current playing video
        jQuery('#td_' + videoId).addClass('td_video_currently_playing');

        //ading the current video playing title and time to the control area
        jQuery('#td_current_video_play_title_youtube').html(current_video_name);
        jQuery('#td_current_video_play_time_youtube').html(current_video_time);

        td_youtube_player.td_yt_player = '';
        jQuery(".td_wrapper_playlist_player_youtube").html("<div id="+ td_youtube_player.td_player_container +"></div>");

        td_youtube_player.td_yt_player = new YT.Player(container, {//window.myPlayer = new YT.Player(container, {
            playerVars: {
                //modestbranding: 1,
                //rel: 0,
                //showinfo: 0,
                autoplay: td_youtube_player.td_playlist_video_autoplay_youtube
            },
            height: '100%',
            width: '100%',
            videoId: videoId,
            events: {
                'onReady': td_youtube_player.onPlayerReady,
                'onStateChange': td_youtube_player.onPlayerStateChange
            }
        });
    },


    onPlayerStateChange: function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING) {

            //add pause to playlist control
            td_playlist_general_functions.td_playlist_add_pause_control('.td_youtube_control');

        } else if (event.data == YT.PlayerState.ENDED) {
            //video_events_js.on_stop('youtube');

            //add play to playlist control
            td_playlist_general_functions.td_playlist_add_play_control('.td_youtube_control');

            //if a video has ended then make auto play = 1; This is the case when the user set autoplay = 0 but start watching videos
            td_youtube_player.td_playlist_video_autoplay_youtube = 1;

            //get the next video
            var next_video_id = td_playlist_general_functions.td_playlist_choose_next_video([td_youtube_list_ids, td_youtube_player.td_playlist_id_youtube_video_running]);
            if(next_video_id != '') {
                td_youtube_player.playVideo(next_video_id);
            }

        } else if (YT.PlayerState.PAUSED) {
            //add play to playlist control
            td_playlist_general_functions.td_playlist_add_play_control('.td_youtube_control');
        }
    },

    td_playlist_youtube_stopVideo: function td_playlist_youtube_stopVideo() {
        td_youtube_player.td_yt_player.stopVideo();
    },

    td_playlist_youtube_play_video: function td_playlist_youtube_play_video() {
        if(td_detect.is_mobile_device) {
            //alert('mobile');
        } else {
            td_youtube_player.td_yt_player.playVideo();
        }
    },

    td_playlist_youtube_pause_video: function td_playlist_youtube_pause_video() {
        td_youtube_player.td_yt_player.pauseVideo();
    }
};





//VIMEO
var td_vimeo_playlist_obj = {

    current_video_playing : '',

    td_playlisty_player_vimeo: '',//a copy of the vimeo player : needed when playing or pausing the vimeo pleyer from the playlist control

    td_playlist_video_autoplay_vimeo: '',//autoplay

    create_player: function (video_id){
        if(video_id != '') {

            var vimeo_iframe_autoplay = '';

            this.current_video_playing = video_id;

            //remove focus class
            td_playlist_general_functions.td_video_playlist_remove_focused('.td_click_video_vimeo');

            //add focus clas on play movie
            jQuery('#td_' + video_id).addClass('td_video_currently_playing');

            //put movie data to control box
            this.put_movie_data_to_control_box(video_id);

            //check autoplay
            if(this.td_playlist_video_autoplay_vimeo != 0) {
                vimeo_iframe_autoplay = '&autoplay=1';
            }


            jQuery('.td_wrapper_playlist_player_vimeo').html('');
            jQuery('.td_wrapper_playlist_player_vimeo').html('<iframe id="player_vimeo_1" src="https://player.vimeo.com/video/' + video_id + '?api=1&player_id=player_vimeo_1' + vimeo_iframe_autoplay + '"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');//width="100%" height="100%"

            this.create_vimeo_object_player(jQuery);
        }

    },

    put_movie_data_to_control_box: function (video_id){
        jQuery('#td_current_video_play_title_vimeo').html(td_vimeo_list_ids['td_' + video_id]['title']);
        jQuery('#td_current_video_play_time_vimeo').html(td_vimeo_list_ids['td_' + video_id]['time']);
    },

    create_vimeo_object_player : function ($) {
        var iframe = '';
        var player = '';

        iframe = $('#player_vimeo_1')[0];
        player = $f(iframe);

        //a copy of the vimeo player : needed when playing or pausing the vimeo pleyer from the playlist control
        this.td_playlisty_player_vimeo = player;

        // When the player is ready, add listeners for pause, finish, and playProgress
        player.addEvent('ready', function() {
            //status.text('ready');

            player.addEvent('play', td_vimeo_playlist_obj.onPlay);
            player.addEvent('pause', td_vimeo_playlist_obj.onPause);
            player.addEvent('finish', td_vimeo_playlist_obj.onFinish);
            player.addEvent('playProgress', td_vimeo_playlist_obj.onPlayProgress);
        });
    },

    onPlay : function onPlay(id) {
        td_playlist_general_functions.td_playlist_add_pause_control('.td_vimeo_control');

        td_vimeo_playlist_obj.td_playlist_video_autoplay_vimeo = 1;
    },

    onPause : function onPause(id) {
        td_playlist_general_functions.td_playlist_add_play_control('.td_vimeo_control');
    },

    onFinish : function onFinish(id) {
        //status.text('finished');

        //add play to playlist control
        td_playlist_general_functions.td_playlist_add_play_control('.td_vimeo_control');

        //if a video has ended then make auto play = 1; This is the case when the user set autoplay = 0 but start watching videos
        td_vimeo_playlist_obj.td_playlist_video_autoplay_vimeo = 1;

        if(td_detect.is_mobile_device && td_detect.is_android) {
            //alert('is android');
        } else {

            //get the next video
            var next_video_id = td_playlist_general_functions.td_playlist_choose_next_video([td_vimeo_list_ids, td_vimeo_playlist_obj.current_video_playing]);
            if(next_video_id != '') {
                td_vimeo_playlist_obj.create_player(next_video_id);
            }
        }
    },

    onPlayProgress : function onPlayProgress(data, id) {
        //status.text(data.seconds + 's played');
    }
};


//this object holds some functions used by both the youtube and vimeo
var td_playlist_general_functions = {
    td_video_playlist_remove_focused: function td_video_playlist_remove_focused(obj_class) {
        //remove focus class
        jQuery( obj_class).each(function(){
            jQuery(this).removeClass('td_video_currently_playing');
        });
    },


    /*
     parram_array = array [
     video_list,
     current_video_id_playing
     ]
     */
    td_playlist_choose_next_video: function td_playlist_choose_next_video(parram_array){
        //alert('get next');

        var video_list = parram_array[0];
        var current_video_id_playing = 'td_' + parram_array[1];

        //get next video id
        var next_video_id = '';
        var found_current = '';
        for(var video in video_list){
            if(found_current == 'found') {
                next_video_id = video;
                found_current = '';
                break;//found , now exit
            }
            if(video == current_video_id_playing) {
                found_current = 'found';
            }
        }

        //play the next video
        if(next_video_id != '') {

            //remove 'td_' from the beginning of the string if necessary
            if(next_video_id.substring(0, 3) == 'td_') {
                next_video_id = next_video_id.substring(3);
            }

            return next_video_id;
        }

        return '';
    },



    //add pause button playlist control
    td_playlist_add_pause_control: function td_playlist_add_pause_control(wrapper_class){
        jQuery(wrapper_class).removeClass('td-sp-video-play').addClass('td-sp-video-pause');
    },

    //add play button playlist control
    td_playlist_add_play_control: function td_playlist_add_play_control(wrapper_class){
        jQuery(wrapper_class).removeClass('td-sp-video-pause').addClass('td-sp-video-play');
    }
};
/*
 td_slide.js
 */

"use strict";

//call function to resize the smartlist on ready (for safary)
jQuery(window).load(function() {
    td_resize_smartlist_sliders_and_update();
});

//call function to resize the smartlist on ready
jQuery().ready(function() {
    td_resize_smartlist_sliders_and_update();
});



//function to resize the height of the smartlist slide
function td_resize_smartlist_slides(args) {
    var slide_displayd = args.currentSlideNumber;


    //console.log(args.sliderObject[0]);
    //console.log(args.data.obj[0]);

    var current_slider = jQuery(args.data.obj[0]).attr("id");

    if(!td_detect.is_ie8) {
        jQuery("#" + current_slider).css("overflow", "none");
        jQuery("#" + current_slider + " .td-item").css("overflow", "visible");
    }

    var setHeight = 0;
    setHeight = jQuery("#" + current_slider + "_item_" + slide_displayd).outerHeight(true);


    jQuery("#" + current_slider + ", #" + current_slider + " .td-slider").css({
        height: setHeight
    });
}





//function to resize and update the height of the smartlist slide
function td_resize_smartlist_sliders_and_update() {
    jQuery(document).find('.td-smart-list-slider').each(function() {
        var current_slider = jQuery(this).attr("id");

        if(!td_detect.is_ie8) {
            jQuery("#" + current_slider).css("overflow", "none");
            jQuery("#" + current_slider + " .td-item").css("overflow", "visible");
        }

        var setHeight = 0;
        setHeight = jQuery("#" + current_slider + "_item_" + td_history.get_current_page("slide")).outerHeight(true);

        jQuery("#" + current_slider + ", #" + current_slider + " .td-slider").css({
            height: setHeight
        });

        if(td_detect.is_android) {
            setTimeout(function () {
                jQuery("#" + current_slider).iosSlider("update");
            }, 2000);
        }
    });
}


//function to resize the height of the normal slide
function td_resize_normal_slide(args) {
    var slide_displayd = 0;//args.currentSlideNumber;

    var current_slider = jQuery(args.data.obj[0]).attr("id");

    //get window width
    var window_wight = td_get_document_width();

    if (!td_detect.is_ie8) {
        jQuery("#" + current_slider).css("overflow", "none");
        jQuery("#" + current_slider + " .td-item").css("overflow", "visible");
    }

    var setHeight = 0;
    var slide_outer_width = jQuery("#" + current_slider + "_item_" + slide_displayd).outerWidth(true);

    //only for android, width of the screen to start changing the height of the slide
    var max_wight_resize = 780;
    if(td_detect.is_android) {
        max_wight_resize = 1000;
    }

    if (window_wight < max_wight_resize && !td_detect.is_ipad) {//problem because we cannot get an accurate page width
        if(slide_outer_width > 300) {
            setHeight = slide_outer_width * 0.5;
        } else {
            setHeight = slide_outer_width;
        }

        //console.log(window_wight);
        jQuery("#" + current_slider + ", #" + current_slider + " .td-slider, #" + current_slider + " .td-slider .td-module-thumb").css({
            height: setHeight
        });
    }

}



//function to resize and update the height of the slide for normal sliders
function td_resize_normal_slide_and_update(args) {


    //console.log('resize 2');
    var slide_displayd = 0;//args.currentSlideNumber;

    var current_slider = jQuery(args.data.obj[0]).attr("id");

    //get window width
    var window_wight = td_get_document_width();

    if(!td_detect.is_ie8) {
        jQuery("#" + current_slider).css("overflow", "none");
        jQuery("#" + current_slider + " .td-item").css("overflow", "visible");
    }

    var setHeight = 0;
    var slide_outer_width = jQuery("#" + current_slider + "_item_" + slide_displayd).outerWidth(true);

    //only for android, width of the screen to start changing the height of the slide
    var max_wight_resize = 780;
    if(td_detect.is_android) {
        max_wight_resize = 1000;
    }

    if (window_wight < max_wight_resize && !td_detect.is_ipad) {//problem because we cannot get an accurate page width
        if(slide_outer_width > 300) {
            setHeight = slide_outer_width * 0.5;
        } else {
            setHeight = slide_outer_width;
        }

        //console.log(window_wight);
        jQuery("#" + current_slider + ", #" + current_slider + " .td-slider, #" + current_slider + " .td-slider .td-module-thumb").css({
            height: setHeight
        });

        setTimeout(function () {
            jQuery("#" + current_slider).iosSlider("update");



        }, 2000);

    }
}
/**
 * Created by tagdiv on 16.02.2015.
 */


"use strict";


var td_pulldown = {


    // - keeps internally the current interval index
    // - it's set at init()
    _view_port_interval_index : td_viewport.INTERVAL_INITIAL_INDEX,



    // this flag mark that the td_pulldown.items must be reinitialized at the changing view port size
    reinitialize_items_at_change_view_port: false,



    // - the list of items
    items: [],



    // - the item represents a pair of lists (a horizontal and a vertical one)
    // - to be initialized, every property with 'IT MUST BE SPECIFIED' is mandatory
    item: function item() {

        // - the jquery object of the horizontal list.
        // IT MUST BE SPECIFIED.
        this.horizontal_jquery_obj = '';

        // - the jquery object of the vertical list.
        // IT MUST BE SPECIFIED
        this.vertical_jquery_obj = '';

        // - the jquery container object.
        // - it contains the horizontal and the vertical jquery objects
        // IT MUST BE SPECIFIED.
        this.container_jquery_obj = '';

        // - the css class of an horizontal element.
        // IT MUST BE SPECIFIED
        this.horizontal_element_css_class = '';



        // the minimum no. of elements to be shown by the horizontal list
        // - IT CAN BE SPECIFIED
        this.minimum_elements = 2;



        // - the array of jquery elements whose widths must be excluded from the width of the container object
        // IT CAN BE SPECIFIED
        this.excluded_jquery_elements = [];

        // - the extra space of the horizontal jquery object occupied by the excluded jquery elements
        // - it's not initialized with 0 because widths of the elements can not be integer values
        // - now, it's set to 1px
        this._horizontal_extra_space = 1;



        // - the array of objects from the horizontal list
        this._horizontal_elements = [];

        // - the array of objects from the vertical list
        this._vertical_elements = [];



        // - the jquery object of the first ul container in the vertical list
        // - it is calculated as the first 'ul' of the vertical jquery object
        this._vertical_ul_jquery_obj = '';



        // - the outer width of the vertical top header (ex.'More')
        // - it's used to calculate if the last vertical element has enough space in the horizontal list,
        // without considering the vertical top header width
        this._vertical_jquery_obj_outer_width = 0;



        // flag used to mark the initialization item
        this._is_initialized = false;
    },




    /**
     * - function used to init the td_pulldown object
     * - it must be called before any item adding
     * - it initializes the _view_port_interval_index
     * - the items list is initialized
     */
    init: function init() {

        td_pulldown._view_port_interval_index = td_viewport.get_current_interval_index();

        td_pulldown.items = [];
    },




    /**
     * - add an item to the item list and initialize it
     *
     * @param item The item to be added and initialized
     */
    add_item: function add_item(item) {

        // the item is added in the item list
        td_pulldown.items.push(item);

        // the item is initialized only once when it is added
        td_pulldown._initialize_item(item);

        //  the item is ready to be computed
        td_pulldown._compute_item(item);
    },




    /**
     * - internal utility function used to initialize an item
     * - an item must be initialized only once
     * - every element having a specified css class is added in the horizontal list
     *
     * @param item {td_pulldown.item} The item to be initialized
     * @private
     */
    _initialize_item: function _initialize_item(item) {

        // an item must be initialized only once
        if (item._is_initialized === true) {
            return;
        }


        // the mandatory item properties are verified
        if ((item.horizontal_jquery_obj == '') ||
            (item.vertical_jquery_obj == '') ||
            (item.container_jquery_obj == '') ||
            (item.horizontal_element_css_class == '')) {

            td_pulldown.log('Item can\' be initialized. It doesn\'t have all the mandatory properties');
            return;
        }


        // the jquery object of the first ul container in the vertical list is initialized
        item._vertical_ul_jquery_obj = item.vertical_jquery_obj.find('ul:first');

        if (item._vertical_ul_jquery_obj.length == 0) {

            td_pulldown.log('Item can\' be initialized. The vertical list doesn\'t have an \'ul\' container');
            return;
        }


        // the elements of the horizontal jquery object, having a specified css class
        var elements = item.horizontal_jquery_obj.find('.' + item.horizontal_element_css_class);

        var local_jquery_element = null;
        var local_object = null;

        // for each element an object is added in the horizontal list
        elements.each(function (index, element) {

            local_jquery_element = jQuery(element);

            // @todo here we need a css class
            local_jquery_element.css('-webkit-transition', 'opacity 0.2s');
            local_jquery_element.css('-moz-transition', 'opacity 0.2s');
            local_jquery_element.css('-o-transition', 'opacity 0.2s');
            local_jquery_element.css('transition', 'opacity 0.2s');

            local_jquery_element.css('opacity', '1');


            // the cached object used to keep the jquery object and its outerWidth
            local_object = {

                // the jquery element
                jquery_object: local_jquery_element,

                // the outer width including border
                calculated_width: local_jquery_element.outerWidth(true)
            };

            // the horizontal list is populated
            item._horizontal_elements.push(local_object);
        });


        // the outer width of the vertical top header (ex.'More') is initialized
        item._vertical_jquery_obj_outer_width = item.vertical_jquery_obj.outerWidth(true);


        // by default, the vertical jquery object is hidden, being shown when at least one element is moved in it
        item.vertical_jquery_obj.css('display', 'none');



        // the the extra space occupied by the horizontal jquery object is calculated

        var horizontal_jquery_obj_padding_left = item.horizontal_jquery_obj.css('padding-left');
        if ((horizontal_jquery_obj_padding_left != undefined) && (horizontal_jquery_obj_padding_left != '')) {
            item._horizontal_extra_space += parseInt(horizontal_jquery_obj_padding_left.replace('px', ''));
        }

        var horizontal_jquery_obj_padding_right = item.horizontal_jquery_obj.css('padding-right');
        if ((horizontal_jquery_obj_padding_right != undefined) && (horizontal_jquery_obj_padding_right != '')) {
            item._horizontal_extra_space += parseInt(horizontal_jquery_obj_padding_right.replace('px', ''));
        }


        var horizontal_jquery_obj_margin_left = item.horizontal_jquery_obj.css('margin-left');
        if ((horizontal_jquery_obj_margin_left != undefined) && (horizontal_jquery_obj_margin_left != '')) {
            item._horizontal_extra_space += parseInt(horizontal_jquery_obj_margin_left.replace('px', ''));
        }

        var horizontal_jquery_obj_margin_right = item.horizontal_jquery_obj.css('margin-right');
        if ((horizontal_jquery_obj_margin_right != undefined) && (horizontal_jquery_obj_margin_right != '')) {
            item._horizontal_extra_space += parseInt(horizontal_jquery_obj_margin_right.replace('px', ''));
        }


        var horizontal_jquery_obj_border_left = item.horizontal_jquery_obj.css('border-left');
        if ((horizontal_jquery_obj_border_left != undefined) && (horizontal_jquery_obj_border_left != '')) {
            item._horizontal_extra_space += parseInt(horizontal_jquery_obj_border_left.replace('px', ''));
        }

        var horizontal_jquery_obj_border_right = item.horizontal_jquery_obj.css('border-right');
        if ((horizontal_jquery_obj_border_right != undefined) && (horizontal_jquery_obj_border_right != '')) {
            item._horizontal_extra_space += parseInt(horizontal_jquery_obj_border_right.replace('px', ''));
        }


        // the item is marked as initialized, being ready to be computed
        item._is_initialized = true;
    },




    /**
     * - internal utility function used to summarize width of the horizontal elements
     *
     * @param item {td_pulldown.item} The item whose horizontal list is processed
     * @returns {number}
     * @private
     */
    _get_horizontal_elements_width: function _get_horizontal_elements_width(item) {

        var sum_width = 0;

        for (var i = item._horizontal_elements.length - 1; i >= 0; i--) {
            sum_width += item._horizontal_elements[i].calculated_width;
        }
        return sum_width;
    },




    /**
     * - internal utility function used to reinitialize all items at the view resolution changing
     */
    _reinitialize_all_items: function _reinitialize_all_items() {

        for (var i = td_pulldown.items.length - 1; i >= 0; i--) {
            td_pulldown._reinitialize_item(td_pulldown.items[i]);
        }
    },




    /**
     * - internal utility function used to reinitialize an item at the view resolution changing
     *
     * @param item The item being reinitialized
     */
    _reinitialize_item: function _reinitialize_item(item) {

        // a not initialized item can't be reinitialized
        if (item._is_initialized === false) {
            return;
        }

        //  the flag is marked, so any further operation on this item is stopped
        item._is_initialized = false;

        // the html elements of the vertical list are all moved into the horizontal jquery object
        item.horizontal_jquery_obj.html(item.horizontal_jquery_obj.html() + item._vertical_ul_jquery_obj.html());

        // the html content of the vertical list is cleared
        item._vertical_ul_jquery_obj.html('');

        // the horizontal list is empty initialized
        item._horizontal_elements = [];

        // the vertical list is empty initialized
        item._vertical_elements = [];

        // the extra space is initialized
        item._horizontal_extra_space = 1;

        // the item is ready to be initialized again
        td_pulldown._initialize_item(item);
    },




    /**
     * - an internal function used to move elements from the horizontal to the vertical list and vice versa, in according with
     * the space for horizontal elements.
     * - it's called every time at the viewport resize, when the space for horizontal elements is modified
     *
     * @param item - the item being computed
     * @private
     */
    _compute_item: function _compute_item(item) {

        // the item must be initialized first
        if (item._is_initialized === false) {
            return;
        }



        // the horizontal header margin is set 0 and the horizontal space is computing without its margin
        // @see td_pulldown._prepare_horizontal_header
        td_pulldown._prepare_horizontal_header(item, true);



        // - the space where horizontal elements lie
        // - it is the container width minus any extra horizontal space
        var space_for_horizontal_elements = 0;

        // the object container width
        var container_jquery_width = item.container_jquery_obj.css('width');

        if ((container_jquery_width != undefined) && (container_jquery_width != '')) {

            // the space for new horizontal elements is initialized by the container width
            space_for_horizontal_elements = container_jquery_width.replace('px', '');

            // then this space is reduced by the widths of the excluded elements
            for (var i = item.excluded_jquery_elements.length - 1; i >= 0; i--) {
                space_for_horizontal_elements -= item.excluded_jquery_elements[i].contents().outerWidth(true);
            }
        }


        // if the vertical list is empty, the space for horizontal elements does not contain the width of the vertical head list
        if (item._vertical_elements.length > 0) {
            space_for_horizontal_elements -= item._vertical_jquery_obj_outer_width;
        }

        // the space occupied by the horizontal elements is removed
        space_for_horizontal_elements -= td_pulldown._get_horizontal_elements_width(item);

        // the horizontal extra space is used to add an extra gap when the width of one element or a js math computation does a not integer value
        space_for_horizontal_elements -= item._horizontal_extra_space;


        // the current element being moved between the lists
        var local_current_element;


        // if there's not enough space for the horizontal elements, then the last of them are moved to the vertical list
        while (space_for_horizontal_elements < 0) {

            // if there's specified a minimum number of horizontal elements, this must be considered
            if ((item.minimum_elements != 0) && (item._horizontal_elements.length <= item.minimum_elements)) {

                // all elements are moved to the vertical list
                td_pulldown._make_all_elements_vertical(item);




                // the horizontal header margin is set before return
                td_pulldown._prepare_horizontal_header(item);



                // the following checks are not more eligible to do
                return;

            } else {

                // If the vertical list does not contain any elements yet,
                // the space for horizontal elements is minimized by the vertical top header width
                if (item._vertical_elements.length == 0) {
                    space_for_horizontal_elements -= item._vertical_jquery_obj_outer_width;
                }

                local_current_element = td_pulldown._make_element_vertical(item);
                space_for_horizontal_elements += local_current_element.calculated_width;
            }
        }



        // This is the case when there's specified a no. of minimum horizontal elements and the horizontal list is empty.
        // If the following conditions are accomplished the horizontal list is refilled with elements from the vertical list
        //
        //  - if there's specified a no. of minimum horizontal elements
        //  - if there is no horizontal elements
        //  - if there are vertical elements
        //  - if there's enough horizontal space for the first vertical element

        if ((item.minimum_elements != 0)
            && (item._horizontal_elements.length == 0)
            && (item._vertical_elements.length > 0)
            && (space_for_horizontal_elements >= item._vertical_elements[0].calculated_width)) {

            // the necessary space needed for the minimum no. of horizontal elements
            var local_necessary_space = 0;

            for (var i = 0; (i < item.minimum_elements) && (i < item._vertical_elements.length); i++) {
                local_necessary_space += item._vertical_elements[i].calculated_width;
            }

            // the necessary space really occupied by the minimum no. of horizontal elements
            var local_space = 0;
            var local_minimum_elements = item.minimum_elements;

            while ((local_minimum_elements > 0)
                && (item._vertical_elements.length > 0)
                && (space_for_horizontal_elements >= local_necessary_space)) {

                local_current_element = td_pulldown._make_element_horizontal(item);

                if (local_current_element != null) {
                    local_space += local_current_element.calculated_width;
                    local_minimum_elements--;
                } else {



                    // the horizontal header margin is set before return
                    td_pulldown._prepare_horizontal_header(item);


                    return;
                }

            }
            space_for_horizontal_elements -= local_space;
        }



        // It's the case when there isn't specified a no. of minimum horizontal elements or it is specified and the
        // horizontal list is not empty, and in the same time there's enough horizontal space for more elements
        while (((item._horizontal_elements.length > 0) || (item._horizontal_elements.length == 0 && item.minimum_elements == 0))
            && (item._vertical_elements.length > 0)
            && (space_for_horizontal_elements >= item._vertical_elements[0].calculated_width)) {

            local_current_element = td_pulldown._make_element_horizontal(item);

            if (local_current_element != null) {
                space_for_horizontal_elements -= local_current_element.calculated_width;
            } else {


                // the horizontal header margin is set before return
                td_pulldown._prepare_horizontal_header(item);


                return;
            }
        }



        // if the vertical list contains just one element, the horizontal space for it must be calculated without considering the vertical top header width (ex.'More')
        if ((item._vertical_elements.length == 1)
            && (space_for_horizontal_elements + item._vertical_jquery_obj_outer_width >= item._vertical_elements[0].calculated_width)) {
            td_pulldown._make_element_horizontal(item);
        }


        // the horizontal header margin is set before return
        td_pulldown._prepare_horizontal_header(item);
    },


    /**
     * - add margin to the element with '.block-title' css class, to keep the vertical_jquery_obj not overlapping over it when
     * there are no horizontal elements and it is too wide [more strings in name]
     * @param item td_pulldown.item
     * @param clear_margin boolean True to just clear margin, or false to check the horizontal elements length and then set the margin
     * @private
     */
    _prepare_horizontal_header: function _prepare_horizontal_header(item, clear_margin) {
        var block_title_jquery_obj = item.horizontal_jquery_obj.parent().siblings('.block-title:first');

        if (block_title_jquery_obj.length) {
            var content_element = block_title_jquery_obj.find('span:first');

            if (content_element.length) {

                if (undefined != typeof(clear_margin) && clear_margin == true) {
                    content_element.css('margin-right', 0);
                } else {
                    if (item._horizontal_elements.length == 0) {
                        content_element.css('margin-right', item._vertical_jquery_obj_outer_width + 'px');
                    } else {
                        content_element.css('margin-right', 0);
                    }
                }
            }
        }
    },




    /**
     * - function used to compute all items in the item list
     *
     * @private
     */
    _compute_all_items: function _compute_all_items() {
        for (var i = td_pulldown.items.length - 1; i >= 0; i--) {

            // a type check is done for every item in the item list
            if (td_pulldown.items[i].constructor === td_pulldown.item) {
                td_pulldown._compute_item(td_pulldown.items[i]);
            }
        }
    },




    /**
     * - function used to move one element from the vertical list to the horizontal one
     * - the function returns the element that has been moved, otherwise null
     * - the last element moving hides the vertical top header
     *
     * @param item - the item whose element is moved
     * @returns {T} - the moved element
     * @private
     */
    _make_element_horizontal: function _make_element_horizontal(item) {

        // the item must be initialized and the vertical list must contain at least an element
        if (item._is_initialized === false || item._vertical_elements.length == 0) {
            return null;
        }

        // the first element of the vertical list is shifted
        var local_element = item._vertical_elements.shift();

        // the vertical list is shown when there's at least one vertical element
        if (item._vertical_elements.length == 0) {
            item.vertical_jquery_obj.css('display', 'none');
        }

        // the element is added on the last position in the horizontal list
        item._horizontal_elements.push(local_element);

        local_element.jquery_object.css('opacity', '0');

        // the DOM is changing
        local_element.jquery_object.detach().appendTo(item.horizontal_jquery_obj);

        setTimeout(function() {
            local_element.jquery_object.css('opacity', '1');
        }, 50);

        //td_pulldown.log('horizontal');

        return local_element;
    },




    /**
     * - function used to move one element from the horizontal list to the vertical one
     * - the function returns the element that has been moved, otherwise null
     * - the first element moving shows the vertical top header
     *
     * @param item - the item whose element is moved
     * @returns {T} - the moved element
     * @private
     */
    _make_element_vertical: function _make_element_vertical(item) {

        // the item must be initialized and the horizontal list must contain at least an element
        if (item._is_initialized === false || item._horizontal_elements.length == 0) {
            return null;
        }

        // the last element of the horizontal list is popped out
        var local_element = item._horizontal_elements.pop();

        // the vertical list is hidden when there are no vertical elements
        if (item._vertical_elements.length == 0) {
            item.vertical_jquery_obj.css('display', '');
        }

        //the element is added on the first position into the vertical list
        item._vertical_elements.unshift(local_element);

        // the DOM is changed
        local_element.jquery_object.detach().prependTo(item._vertical_ul_jquery_obj);

        //td_pulldown.log('vertical');

        return local_element;
    },




    /**
     * - function used to move all elements to the vertical list
     * - it's used when the minimum horizontal elements is greater than 0
     *
     * @param item - the item whose elements are moved
     * @private
     */
    _make_all_elements_vertical: function _make_all_elements_vertical(item) {
        while (item._horizontal_elements.length > 0) {
            td_pulldown._make_element_vertical(item);
        }
    },






    /**
     * - function necessary to be called when the window is being resized
     */
    td_events_resize: function td_events_resize() {

        if (td_pulldown.items.length == 0) {
            return;
        }

        if (td_pulldown.reinitialize_items_at_change_view_port === true && (td_pulldown._view_port_interval_index != td_viewport.get_current_interval_index())) {
            td_pulldown._reinitialize_all_items();
        }

        td_pulldown._compute_all_items();
    },




    log: function log(msg) {
        //console.log(msg);
    }
};


td_pulldown.init();








var td_fps = {

    start_time: 0,

    current_time: 0,

    frame_number: 0,

    init: function init() {
        td_fps.start_time = 0;

        var previous_result = 0,
            result = 0,
            elapsed_time = 0;

        var td_fps_table = jQuery("#fps_table");

        if (td_fps_table.length == 0) {
            td_fps_table = jQuery('<div>').css({
                "position": "fixed",
                "top": "120px",
                "left": "10px",
                "width": "100px",
                "height": "20px",
                "border": "1px solid black",
                "font-size": "11px",
                "z-index": "100000",
                "background-color": "white"
            });

            td_fps_table.appendTo('body');
        }

        var get_fps = function() {
            td_fps.frame_number++;
            td_fps.current_time = Date.now();

            elapsed_time = (td_fps.current_time - td_fps.start_time) / 1000;

            result = (td_fps.frame_number / elapsed_time).toPrecision(2);

            if (result != previous_result) {
                previous_result = result;
                td_fps_table.html(previous_result + ' fps');
                //console.log(previous_result);
            }

            if (elapsed_time > 1) {
                td_fps.start_time = td_fps.current_time;
                td_fps.frame_number = 0;
            }

            requestAnimationFrame(get_fps);
        };

        get_fps();
    }
};

/**
 * Created by tagdiv on 16.02.2015.
 */

"use strict";

var td_animation_scroll = {


    // the bunch of td_animation_scroll items
    items: [],



    // the current request animation frame id
    rAFIndex: 0,



    // flag used to not call 'requestAnimationFrame' when it's steel running
    animation_running: false,



    item: function item() {

        // the computed percent value of the jquery object in the viewport
        // - 0 when the top of object enters into the viewport
        // - 100 when the bottom of the object goes outside of the viewport
        this.percent_value = 0;

        // the animation callback function
        this.animation_callback = null;

        // the jquery object of the td_animation_scroll.item
        this.jquery_obj = '';

        // optional - a jquery object that wraps the current item. Used in callback
        this.wrapper_jquery_obj;

        // a jquery span obj added dynamically added at the top of jquery_obj
        this.top_marker_jquery_obj = '';

        // the full outer height of the item
        this.full_height;

        // the offset top of the top_marker_jquery_obj
        this.offset_top = '';

        // the offset top of the top_marker_jquery_obj and the full_height
        this.offset_bottom_top = '';

        // the properties registered with the item
        this.properties = {};

        // the computed properties that probably will be applied by animation callback function over the jquery object
        this.computed_item_properties = {};

        // flag made 'true' for items having at least one computed property
        this.redraw = false;

        // top is out of screen
        this.top_is_out = false;

        // flag used to mark the initialization item
        this._is_initialized = false;

        // flag used to stop an item to be computed
        this.computation_stopped = false;




        /**
         * - when a new item property is added, it's added as a real property in the item.properties object.
         * - if it's already added, the settings of the property are appended
         * - the settings for an item property must be added in order of the percents
         * - the percent intervals must not be overloaded (ex. 10-30 and 20-40)
         * - it doesn't matter how many settings are added to an item property
         * - after an adding the space of percentage is full, that means after adding
         * ex: add_item_property('opacity', 10, 30, 0, 1, easing)
         *
         * item.properties.opacity.settings :
         * [
         *  [0, 10, 0, 0, '']
         *  [10, 30, 0, 1, easing] - property added
         *  [30, 100, 1, 1, '']
         * ]
         *
         * ex: add_item_property('opacity', 40, 50, 1, 0)
         *
         * item.properties.opacity.settings :
         * [
         *  [0, 10, 0, 0, '']
         *  [10, 30, 0, 1, easing] - property added
         *  [30, 40, 1, 1, '']
         *  [40, 50, 1, 0, easing] - property added
         *  [50, 100, 0, 0, '']
         * ]
         *
         * - callable jQuery easing functions:
         * swing
         * easeInQuad
         * easeOutQuad
         * easeInOutQuad
         * easeInCubic
         * easeOutCubic
         * easeInOutCubic
         * easeInQuart
         * easeOutQuart
         * easeInOutQuart
         * easeInQuint
         * easeOutQuint
         * easeInOutQuint
         * easeInSine
         * easeOutSine
         * easeInOutSine
         * easeInExpo
         * easeOutExpo
         * easeInOutExpo
         * easeInCirc
         * easeOutCirc
         * easeInOutCirc
         * easeInElastic
         * easeOutElastic
         * easeInOutElastic
         * easeInBack
         * easeOutBack
         * easeInOutBack
         * easeInBounce
         * easeOutBounce
         * easeInOutBounce
         *
         * @param name string
         * @param start_percent numeric
         * @param end_percent numeric
         * @param start_value numeric
         * @param end_value numeric
         * @param easing string [optional]
         */
        this.add_item_property = function add_item_property(name, start_percent, end_percent, start_value, end_value, easing) {

            if (start_percent >= end_percent) {
                return;
            }

            if (this.properties[name] === undefined) {

                this.properties[name] = {
                    computed_value: '',
                    settings: []
                };

                if (start_percent != 0) {
                    this.properties[name].settings[this.properties[name].settings.length] = {
                        start_percent: 0,
                        end_percent: start_percent,
                        start_value: start_value,
                        end_value: start_value,
                        easing: ''
                    };
                }

                this.properties[name].settings[this.properties[name].settings.length] = {
                    start_percent: start_percent,
                    end_percent: end_percent,
                    start_value: start_value,
                    end_value: end_value,
                    easing: easing
                };

                this.properties[name].settings[this.properties[name].settings.length] = {
                    start_percent: end_percent,
                    end_percent: 100,
                    start_value: end_value,
                    end_value: end_value,
                    easing: ''
                };

            } else {

                var last_setting = this.properties[name].settings[this.properties[name].settings.length - 1];

                if (last_setting.start_percent != start_percent) {
                    this.properties[name].settings[this.properties[name].settings.length - 1] = {
                        start_percent: last_setting.start_percent,
                        end_percent: start_percent,
                        start_value: last_setting.end_value,
                        end_value: last_setting.end_value,
                        easing: ''
                    };

                    this.properties[name].settings[this.properties[name].settings.length] = {
                        start_percent: start_percent,
                        end_percent: end_percent,
                        start_value: start_value,
                        end_value: end_value,
                        easing: easing
                    };
                } else {
                    this.properties[name].settings[this.properties[name].settings.length - 1] = {
                        start_percent: start_percent,
                        end_percent: end_percent,
                        start_value: start_value,
                        end_value: end_value,
                        easing: easing
                    };
                }

                if (end_percent != 100) {
                    this.properties[name].settings[this.properties[name].settings.length] = {
                        start_percent: end_percent,
                        end_percent: 100,
                        start_value: end_value,
                        end_value: end_value,
                        easing: ''
                    };
                }
            }
        };


        /**
         * remove an item property
         *
         * @param name {String} The name of the property
         * @returns {boolean}
         */
        this.remove_item_property = function remove_item_property(name) {
            if (this.properties[name] === undefined) {
                return false;
            }

            delete this.properties[name];

            return true;
        };
    },




    /**
    * - function used to init the td_animation_scroll object
    * - it must be called before adding any item
    * - the _view_port_interval_index flag is initialized
    * - the items list is empty initialized
    */
    init: function init() {

        td_animation_scroll.items = [];
    },




    /**
     * - used to add an item to the item list and initialize it
     *
     * @param item The item to be added and initialized
     */
    add_item: function add_item(item) {

        if (item.constructor != td_animation_scroll.item) {
            return;
        }

        // the item is added in the item list
        td_animation_scroll.items.push(item);

        // the item is initialized only once when it is added
        td_animation_scroll._initialize_item(item);

        // for efficiently rendering all items are computed at once, so do not compute item individually
    },




    /**
     * - used to initialize an item
     * - an item must be initialized only once
     *
     * @param item
     * @private
     */
    _initialize_item: function _initialize_item(item) {

        // an item must be initialized only once
        if (item._is_initialized === true) {
            return;
        }

        // the item full height is computed
        if (item.wrapper_jquery_obj != undefined) {
            item.full_height = item.wrapper_jquery_obj.height();
        } else {
            item.full_height = item.jquery_obj.outerHeight(true);
        }

        if (item.full_height == 0) {
            return;
        }

        var new_jquery_obj_reference = jQuery('<div class="td_marker_animation" style="height: 0; width: 0">');

        new_jquery_obj_reference.insertBefore(item.jquery_obj);

        item.top_marker_jquery_obj = new_jquery_obj_reference;

        item.offset_top = item.top_marker_jquery_obj.offset().top;

        //console.log("initializare " + td_animation_scroll.items.length + " : " + item.top_marker_jquery_obj.offset().top);

        item.offset_bottom_top = item.offset_top + item.full_height;

        item.top_is_out = td_events.window_pageYOffset > item.offset_top;

        // the item is marked as initialized, being ready to be computed
        // for efficiently rendering all items are computed at once
        item._is_initialized = true;


        // maybe it's better to try a request animation frame after every initialization, for computing the already added items
        //td_animation_scroll.compute_all_items();
    },




    /**
     * - used to reinitialize all items at the view resolution changing
     *
     * @param recompute_height boolean True if it's necessary to recompute the item's height [when view port changes]
     */
    reinitialize_all_items: function reinitialize_all_items(recompute_height) {

        for (var i = td_animation_scroll.items.length - 1; i >= 0; i--) {
            td_animation_scroll.reinitialize_item(td_animation_scroll.items[i], recompute_height);
        }
    },






    /**
     * - used to reinitialize an item at the view resolution changing
     *
     * @param item td_animation_scroll.item
     * @param recompute_height boolean True if it's necessary to recompute the item height [when view port changes]
     * @private
     */
    reinitialize_item: function reinitialize_item(item, recompute_height) {

        // a not initialized item can't be reinitialized
        if (item._is_initialized === false) {
            return;
        }

        // prevent the following item computing, till the reinitialization is finished
        item._is_initialized = false;

        item.offset_top = item.top_marker_jquery_obj.offset().top;

        //console.log("reinitializare " + td_animation_scroll.items.length + " : " + item.top_marker_jquery_obj.offset().top);

        if (recompute_height === true) {
            if (item.wrapper_jquery_obj != undefined) {
                item.full_height = item.wrapper_jquery_obj.height();
            } else {
                item.full_height = item.jquery_obj.outerHeight(true);
            }

            if (item.full_height == 0) {
                return;
            }
        }

        item.offset_bottom_top = item.offset_top + item.full_height;

        item._is_initialized = true;
    },




    /**
     * - used for computing item properties
     *
     * @param item The item whose properties are computed
     * @private
     */
    _compute_item_properties: function _compute_item_properties(item) {

        var computed_properties = {},
            current_item_property;

        for (var property in item.properties) {

            if (item.properties.hasOwnProperty(property) === false) {
                return;
            }
            current_item_property = item.properties[property];

            var current_setting,
                new_computed_value,
                local_computed_value,
                easing_step,
                easing_computed_value,
                easing_division_interval = 1000;

            for (var i = 0; i < current_item_property.settings.length; i++) {

                current_setting = current_item_property.settings[i];

                // the check is done using this form [...) of the interval or the last position 100%
                if ((current_setting.start_percent <= item.percent_value && item.percent_value < current_setting.end_percent)
                    || (item.percent_value == current_setting.end_percent && item.percent_value == 100)) {

                    if (current_setting.start_value != current_setting.end_value) {

                        // local computed value can have a positive value or a negative value, it depends of the difference end_value - start_value
                        // for a linear easing function, the new computed value is the start_value + local_computed_value
                        // if start_value < end_value, the variable local_computed_value is positive
                        // if start_value > end_value, the variable local_computed_value is negative
                        local_computed_value = (item.percent_value - current_setting.start_percent) / (current_setting.end_percent - current_setting.start_percent) * (current_setting.end_value - current_setting.start_value);


                        // if there's specified an easing function, it's applied over the computed_value
                        if ((current_setting.easing == undefined) || (current_setting.easing == '')) {

                            // linear easing function

                            new_computed_value = current_setting.start_value + local_computed_value;

                        } else {

                            // specifying an easing function

                            easing_step = Math.abs(current_setting.start_value - current_setting.end_value) / easing_division_interval;

                            if (current_setting.start_value < current_setting.end_value) {

                                easing_computed_value = current_setting.start_value + jQuery.easing[current_setting.easing](
                                    null,
                                    local_computed_value,
                                    0,
                                    easing_step,
                                    current_setting.end_value - current_setting.start_value) * easing_division_interval;

                            } else {

                                easing_computed_value = current_setting.start_value - jQuery.easing[current_setting.easing](
                                    null,
                                    -local_computed_value,
                                    0,
                                    easing_step,
                                    current_setting.start_value - current_setting.end_value) * easing_division_interval;
                            }

                            new_computed_value = easing_computed_value;

                            //console.log(current_setting.easing + ' : ' + easing_step + ' ~ ' + easing_computed_value + ' ~ ' + (current_setting.start_value + computed_value) + ' & ' + current_setting.start_value + ' $ ' + current_setting.end_value);
                        }

                    } else {
                        new_computed_value = current_setting.start_value;
                    }

                    // if the existing computed value is different, the new computed value is cached
                    if (current_item_property.computed_value !== new_computed_value) {
                        current_item_property.computed_value = new_computed_value;
                        computed_properties[property] = new_computed_value;

                        // the item is marked that it has at least one property that need to be redraw
                        // the animation callback functions are called just for the marked items
                        item.redraw = true;
                    }
                    break;
                }
            }
        }

        // a plain javascript object is added if there is no computed property
        item.computed_item_properties = computed_properties;
    },




    /**
     * - used for computing item
     * - the item properties are computed only when the item is in the view port and it is moving
     *
     * @param item The td_animation_scroll.item to be computed
     */
    compute_item: function compute_item(item) {
        //console.clear();

        // the item must be initialized first
        if (item._is_initialized === false) {
            return;
        }

        var percent_display_value = 0;

        if (td_events.window_pageYOffset + td_events.window_innerHeight >= item.offset_top) {

            if (td_events.window_pageYOffset > item.offset_bottom_top) {
                percent_display_value = 100;
            } else {
                percent_display_value = (td_events.window_pageYOffset + td_events.window_innerHeight - item.offset_top) * 100 / (td_events.window_innerHeight + item.full_height);
            }
        }

        //console.log(window.pageYOffset + ' : ' + item.offset_top + ' : ' + item.offset_bottom_top);

        if (item.percent_value != percent_display_value) {
            item.percent_value = percent_display_value;
            td_animation_scroll._compute_item_properties(item);
        }

        item.top_is_out = td_events.window_pageYOffset > item.offset_top;


        //console.log(percent_display_value);
    },




    /**
     * - used to request an animation frame for computing all items
     * - the flag animation_running is set to false by the last requestAnimationFrame callback (the last animation call),
     * so a new call to requestAnimationFrame can be done
     */
    compute_all_items: function compute_all_items() {
        //td_animation_scroll.animate();

        if (td_animation_scroll.animation_running === false) {
            td_animation_scroll.rAFIndex = window.requestAnimationFrame(td_animation_scroll._animate_all_items);
        }

        td_animation_scroll.animation_running = true;
    },




    /**
     * - used to call the existing callback animate functions
     *
     * @private
     */
    _animate_all_items: function _animate_all_items() {
        //var start_time = Date.now();

        for (var i = 0; i < td_animation_scroll.items.length; i++) {
            if (td_animation_scroll.items[i].computation_stopped === false) {
                td_animation_scroll.compute_item(td_animation_scroll.items[i]);
            }
        }

        for (var i = 0; i < td_animation_scroll.items.length; i++) {
            if (td_animation_scroll.items[i].redraw === true) {
                td_animation_scroll.items[i].animation_callback();
            }
        }

        td_animation_scroll.animation_running = false;

        //var end_time = Date.now();
        //
        //var debug_table = jQuery("#debug_table");
        //debug_table.html((end_time - start_time) + ' ms');
    },





    /** @todo we'll see if it's necessary to make reinitialization just at the view port changing. Now, it's not
     * - necessary to be called when the window is being resized
     */
    td_events_resize: function td_events_resize() {

        if (td_animation_scroll.items.length == 0) {
            return;
        }

        // this will be applied if it depends just by view port changing

        //if (td_animation_scroll._changed_view_port_width()) {
        //    td_animation_scroll.reinitialize_all_items();
        //}

        td_animation_scroll.reinitialize_all_items(false);

        td_animation_scroll.compute_all_items();
    },






    log: function log(msg) {
        //console.log(msg);
    }
};




td_animation_scroll.init();



/**
 * Created by tagdiv on 23.02.2015.
 */

"use strict";

var td_backstr = {



    items: [],



    item: function item() {

        // check if is necessary to apply modification (css)
        this.previous_value = 0;

        // the image aspect ratio
        this.image_aspect_rate = 0;

        // the wrapper jquery object
        this.wrapper_image_jquery_obj = '';

        // the image jquery object
        this.image_jquery_obj = '';
    },




    /**
     *
     * @param item
     */
    add_item: function add_item(item) {

        if (item.constructor != td_backstr.item) {
            return;
        }

        //if ((item.image_jquery_obj.complete)
        //
        //    // this is a case when the image is still not loaded but the height() and width() return both 24px
        //    // @todo it must be modified. It's used because for backstretch are usually used large images
        //    && ((item.image_jquery_obj.height() != 24) && (item.image_jquery_obj.width() != 24))
        //)

        if (item.image_jquery_obj.get(0).complete) {
            td_backstr._load_item_image(item);
        } else {

            item.image_jquery_obj.on('load', function() {

                td_backstr._load_item_image(item);
            });


            //var currentTimeStart = Date.now();
            //
            //var loaded_image_jquery_ojb = false;
            //
            //item.image_jquery_obj.on('load', function() {
            //
            //    loaded_image_jquery_ojb = true;
            //
            //
            //    td_backstr._load_item_image(item);
            //    console.log('backstr tarziu ' + item.image_jquery_obj.height() + ' > timp : ' + (Date.now() - currentTimeStart));
            //});
            //
            //
            //var indexInterval = setInterval(function() {
            //    if (loaded_image_jquery_ojb) {
            //        clearInterval(indexInterval);
            //        console.log('imagine incarcata ' + item.image_jquery_obj.height() + ' > timp : ' + (Date.now() - currentTimeStart));
            //    }
            //}, 0);
        }
    },




    _load_item_image: function _load_item_image(item) {
        item.image_aspect_rate = item.image_jquery_obj.width() / item.image_jquery_obj.height();
        td_backstr.items.push(item);
        td_backstr._compute_item(item);

        item.image_jquery_obj.css('opacity', '1');
    },




    /**
     *
     * @param item
     * @private
     */
    _compute_item: function _compute_item(item) {

        // the wrapper aspect ratio can vary, so it's recomputed at computing item
        var wrapper_aspect_rate = item.wrapper_image_jquery_obj.width() / item.wrapper_image_jquery_obj.height();

        var current_value = 0;

        if (wrapper_aspect_rate < item.image_aspect_rate) {

            current_value = 1;

            if (item.previous_value != current_value) {
                item.image_jquery_obj.removeClass('td-stretch-width');
                item.image_jquery_obj.addClass('td-stretch-height');

                item.previous_value = current_value;
            }
        } else {

            current_value = 2;

            if (item.previous_value != current_value) {
                item.image_jquery_obj.removeClass('td-stretch-height');
                item.image_jquery_obj.addClass('td-stretch-width');

                item.previous_value = current_value;
            }
        }
    },




    /**
     *
     * @private
     */
    _compute_all_items: function _compute_all_items() {
        for (var i = 0; i < td_backstr.items.length; i++) {
            td_backstr._compute_item(td_backstr.items[i]);
        }
    },




    td_events_resize: function td_events_resize() {

        if (td_backstr.items.length == 0) {
            return;
        }

        td_backstr._compute_all_items();
    },




    log: function log(msg) {
        console.log(msg);
    }
};



///**
// * Created by ra on 2/23/2015.
// */
//
//
//jQuery(document).ready(function() {
//
//
//
//
//
//
//    jQuery('.td-scroll-e-text-1').each(function(index, element) {
//
//
//        //alert(jQuery(element).parent().prop('tagName'));
//        if (jQuery(element).parent().prop('tagName').toLowerCase() == 'blockquote') {
//            // add a wrapper to the parent if we have blockqupote
//            jQuery(element).parent().wrap('<div class="td-scroll-e-text-1-wrap"></div>');
//            var wrapper = jQuery(element).parent().parent();
//        } else {
//            // add a wrapper
//            jQuery(element).wrap('<div class="td-scroll-e-text-1-wrap"></div>');
//            var wrapper = jQuery(element).parent();
//        }
//
//
//
//        var item = new td_animation_scroll.item();
//        item.jquery_obj = jQuery(element);
//        item.wrapper_jquery_obj = wrapper;
//
//
//        item.add_item_property('opacity', 0, 50, 0, 1);
//
//        item.add_item_property('wrapper-bg-opacity', 0, 60, 1, 0);
//
//        item.animation_callback = function() {
//            item.jquery_obj.css('opacity', item.computed_item_properties['opacity']);
//            item.wrapper_jquery_obj.css('background-color', 'rgba(230, 230, 230, ' + item.computed_item_properties['wrapper-bg-opacity'] + ')');
//            item.redraw = false;
//        };
//        td_animation_scroll.add_item(item);
//    });
//
//
//
//
//
//    function hexToRgb(hex) {
//        var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
//        return result ? {
//            r: parseInt(result[1], 16),
//            g: parseInt(result[2], 16),
//            b: parseInt(result[3], 16)
//        } : null;
//    }
//
//
//    jQuery('.td-scroll-e-text-2').each(function(index, element) {
//
//
//        //alert(jQuery(element).parent().prop('tagName'));
//        if (jQuery(element).parent().prop('tagName').toLowerCase() == 'blockquote') {
//            // add a wrapper to the parent if we have blockqupote
//            jQuery(element).parent().wrap('<div class="td-scroll-e-text-2-wrap"></div>');
//            var wrapper = jQuery(element).parent().parent();
//        } else {
//            // add a wrapper
//            jQuery(element).wrap('<div class="td-scroll-e-text-2-wrap"></div>');
//            var wrapper = jQuery(element).parent();
//        }
//
//
//        var parsed_color = hexToRgb('#4db2ec');
//
//
//        var item = new td_animation_scroll.item();
//        item.jquery_obj = jQuery(element);
//        item.wrapper_jquery_obj = wrapper;
//
//
//        item.add_item_property('opacity', 0, 60, 0.2, 1);
//
//
//        item.add_item_property('wrapper-bg-opacity', 0, 60, 0.5, 0);
//
//        item.animation_callback = function() {
//            item.jquery_obj.css('opacity', item.computed_item_properties['opacity']);
//
//
//
//            item.wrapper_jquery_obj.css('border-color', 'rgba(' + parsed_color.r + ', ' + parsed_color.g + ', ' + parsed_color.b + ', ' + item.computed_item_properties['wrapper-bg-opacity'] + ')');
//            item.redraw = false;
//        };
//        td_animation_scroll.add_item(item);
//    });
//
//
//
//
//
//
//    /**
//     * image zoom in
//     */
//    jQuery('.td-scroll-e-image-zoom-in').each(function(index, element) {
//
//        // add a wrapper
//        jQuery(element).wrap('<div class="td-scroll-e-image-zoom-out-wrap" style="width:' + jQuery(element).width() + 'px; height:' + jQuery(element).height() + 'px"></div>');
//        var wrapper = jQuery(element).parent();
//
//
//        var item = new td_animation_scroll.item();
//        item.jquery_obj = jQuery(element);
//        item.wrapper_jquery_obj = wrapper;
//
//        item.add_item_property('scale_3d', 0, 100, 1, 1.8, 'easeInCubic');
//
//        item.animation_callback = function() {
//            item.jquery_obj.css('transform', 'scale3d(' + item.computed_item_properties['scale_3d'] + ', ' + item.computed_item_properties['scale_3d'] + ', 1)');
//            item.redraw = false;
//        };
//        td_animation_scroll.add_item(item);
//
//    });
//
//
//
//
//    /**
//     * image zoom out
//     */
//    jQuery('.td-scroll-e-image-zoom-out').each(function(index, element) {
//
//        // add a wrapper
//
//        jQuery(element).wrap('<div class="td-scroll-e-image-zoom-out-wrap" style="width:' + jQuery(element).width() + 'px; height:' + jQuery(element).height() + 'px"></div>');
//        var wrapper = jQuery(element).parent();
//
//
//        var item = new td_animation_scroll.item();
//        item.jquery_obj = jQuery(element);
//        item.wrapper_jquery_obj = wrapper;
//
//        item.add_item_property('scale_3d', 0, 100, 1.8, 1, 'easeOutCubic');
//
//        item.animation_callback = function() {
//            item.jquery_obj.css('transform', 'scale3d(' + item.computed_item_properties['scale_3d'] + ', ' + item.computed_item_properties['scale_3d'] + ', 1)');
//            console.log(item.jquery_obj.width());
//            item.redraw = false;
//        };
//        td_animation_scroll.add_item(item);
//
//    });
//
//
//    /**
//     * image fixed
//     */
//    jQuery('.td-scroll-e-image-fixed').each(function(index, element) {
//
//        // add a wrapper
//
//        jQuery(element).wrap('<div class="td-scroll-e-image-fixed-wrap" style="width:' + jQuery(element).width() + 'px; height:' + jQuery(element).height() + 'px"></div>');
//        var wrapper = jQuery(element).parent();
//
//
//        var item = new td_animation_scroll.item();
//        item.jquery_obj = jQuery(element);
//        item.wrapper_jquery_obj = wrapper;
//
//        item.add_item_property('move_y', 0, 100, jQuery(element).height() / 2,0, '');
//
//        item.animation_callback = function() {
//            item.jquery_obj.css('transform', 'translate3d(0px,' + item.computed_item_properties['move_y'] + 'px, 0px) scale(2)');
//            //console.log(item.jquery_obj.width());
//
//            //td_util.td_move_y(item.jquery_obj, item.computed_item_properties['move_y']);
//            item.redraw = false;
//        };
//        td_animation_scroll.add_item(item);
//
//    });
//
//
//    td_animation_scroll.compute_all_items();
//
//
//
//    jQuery(window).scroll(function() {
//        td_animation_scroll.compute_all_items();
//    });
//
//
//    jQuery(window).resize(function() {
//        td_animation_scroll.compute_all_items();
//    });
//
//
//
//    //td_fps.init();
//
//});
//
//
//
//
//

/**
 * Created by tagdiv on 11.03.2015.
 */

/**
 * abstract:
 * - check all items in page, sort them using one of a sorted methods and add them in the items array
 * - at every scroll the items are verified if they are in view port or above
 * - every item in view port is added into the _items_in_view_port array and they are ready for animation
 * - items above view port are animated all at once
 * - items in view port are animated at crescendo intervals [interval / remaining items]
 * - there's a max and a min interval
 * - td_block ajax request response use a sort method and add founded items into view port array or into items array
 */

"use strict";

var td_animation_stack = {

    /*
        Important:
        1. The first animation step is produced by the the body selector @see animation-stack.less
        2. The second animation step can be applied by the animation_css_class1
        3. The final (the main) animation step is applied by the animation_css_class2
     */




    // - flag css class used by the non 'type0' animation effect
    // - flag used just to look for not yet computed item
    // - it's set by ready_init (on ready)
    // - all dom components that need to be animated will be marked with this css class in ready_init
    // - it can be used for a precomputed style, but carefully, because it's applied at ready_init (on ready)
    _animation_css_class1: '',



    // - flag css class used by the non 'type0' animation effect
    // - flag css class used to animate custom
    // - this css class applies the final animation
    _animation_css_class2: '',



    // - the default animation effect 'type0' is applied if the global window.td_animation_stack_effect is the empty string
    // - it's used for consistency of animation effects presented into the animation-stack.less [all types have a name (...type...)]
    _animation_default_effect: 'type0',



    // - td_animation_stack runs just only when this flag is true
    // - it's done true by the init function
    activated: false,



    // flag checked by the major animation operations
    _ready_for_initialization: true,

    // interval used by ready_init to check td_animation_stack state
    _ready_init_timeout: undefined,


    // max time[ms] interval waiting for first td_animation_stack.init call
    max_waiting_for_init: 3000,



    // the specific selectors are used to look for new elements inside of the specific sections
    _specific_selectors: '',

    // the general selectors are used to look for elements over extend areas in DOM
    _general_selectors: '',






    /**
     * - wait for td_animation_stack.init() for max_waiting_for_init time
     * - if time is elapsed, the animation is canceled
     * - the ready_init is canceled by a fast td_animation_stack.init call
     */
    ready_init: function ready_init() {

        // - special case for IE8 and IE9
        // - the animation is forced removed and the altered css body is cleaned
        if (td_detect.is_ie8 || td_detect.is_ie9) {
            td_animation_stack._ready_for_initialization = false;

            if (window.td_animation_stack_effect != undefined) {
                if (window.td_animation_stack_effect == '') {
                    window.td_animation_stack_effect = td_animation_stack._animation_default_effect;
                }
                jQuery('body').removeClass('td-animation-stack-' + window.td_animation_stack_effect);
            }
            return;
        }


        if (window.tds_animation_stack != undefined && window.td_animation_stack_effect != undefined) {

            // the td_animation_stack._specific_selectors is set by the global variable window.td_animation_stack_specific_selectors
            if (window.td_animation_stack_specific_selectors != undefined) {
                td_animation_stack._specific_selectors = window.td_animation_stack_specific_selectors;
            }


            // if the global variable window.td_animation_stack_effect has the empty string value, the 'full fade' (type0) effect is prepared to be applied
            if (window.td_animation_stack_effect == '') {
                window.td_animation_stack_effect = td_animation_stack._animation_default_effect;
            } else {
                // - if not, the td-animation-stacks with class 1 and class 2 are applied
                td_animation_stack._animation_css_class1 = 'td-animation-stack-' + window.td_animation_stack_effect + '-1';
                td_animation_stack._animation_css_class2 = 'td-animation-stack-' + window.td_animation_stack_effect + '-2';


                // - the td_animation_stack._general_selectors is set by the global variable window.td_animation_stack_general_selectors
                // - it's used only by the non 'full fade' (type0) effects
                if (window.td_animation_stack_general_selectors != undefined) {
                    td_animation_stack._general_selectors = window.td_animation_stack_general_selectors;
                }

                // the td_animation_stack._animation_css_class1 css class is applied for all elements need to be animated later
                jQuery(td_animation_stack._general_selectors).addClass(td_animation_stack._animation_css_class1);
            }


            // - timeout used by the ready_init function, to cut down td_animation_stack.init calling at loading page, when the call comes too late
            // - if td_animation_stack.init comes earlier, it does a clearTimeout call over the td_animation_stack._ready_init_timeout variable
            td_animation_stack._ready_init_timeout = setTimeout(function() {

                // if td_animation_stack is activated, do nothing
                if (td_animation_stack.activated === true) {
                    return;
                }

                // lock any further operation using the _ready_for_initialization flag
                td_animation_stack._ready_for_initialization = false;

                // remove the loading animation css class effect from the body
                // this class is applied from the theme settings
                if (window.td_animation_stack_effect != undefined) {
                    jQuery('body').removeClass('td-animation-stack-' + window.td_animation_stack_effect);
                }

            }, td_animation_stack.max_waiting_for_init);

        } else {
            // lock any further operation using the _ready_for_initialization flag
            td_animation_stack._ready_for_initialization = false;
        }
    },


    // flag marks items where they are
    _ITEM_TO_VIEW_PORT: {

        ITEM_ABOVE_VIEW_PORT: 0,

        ITEM_IN_VIEW_PORT: 1,

        ITEM_UNDER_VIEW_PORT: 2
    },


    // predefined sorting methods
    SORTED_METHOD: {

        sort_left_to_right: function sort_left_to_right(item1, item2) {
            if (item1.offset_top > item2.offset_top) {
                return 1;
            } else if (item1.offset_top < item2.offset_top) {
                return -1;
            } else if (item1._order > item2._order) {
                return 1;
            } else if (item1._order < item2._order) {
                return -1;
            }
            return 0;
        },


        sort_right_to_left: function sort_right_to_left(item1, item2) {
            if (item1.offset_top > item2.offset_top) {
                return 1;
            } else if (item1.offset_top < item2.offset_top) {
                return -1;
            } else if (item1._order > item2._order) {
                return -1;
            } else if (item1._order < item2._order) {
                return 1;
            }
            return -1;
        }
    },


    // keeps the DOM reading order, used in the sorting methods
    _order: 0,


    // interval divided to animate items
    // ex. interval 100 and 2 items => one item at 100 / 2 and one item at 100 / 1, but not lower than min_interval and not higher than max_interval
    interval: 70,

    // min interval of a set timer
    min_interval: 17,

    // max interval of a set timer
    max_interval: 40,



    // keep current setInterval
    _current_interval: undefined,

    // items in view port are moved here
    _items_in_view_port: [],

    // items above the view port are moved here
    _items_above_view_port: [],

    // all items that will be processed
    items: [],








    /**
     * - td_animation_stack.item
     */
    item: function item() {
        // offset from the top of the item, to the top
        // it's set at the initialization item
        this.offset_top = undefined;


        // offset from the bottom of the item, to the top
        // it's set at the initialization item
        this.offset_bottom_to_top = undefined;


        // jquery object reference
        // it's set before the initialization of the item
        this.jquery_obj = undefined;


        // the reading order from DOM
        // it's set at the initialization item
        this._order = undefined;
    },




    /**
     * - initialize a td_animation_stack.item and add it in td_animation_stack.items
     * @param item td_animation_stack.item
     */
    //add_item: function add_item(item) {
    //
    //    if (item.constructor != td_animation_stack.item) {
    //        return;
    //    }
    //
    //    td_animation_stack.items.push(item);
    //},



    /**
     * - initialize the offset top of the td_animation_stack.item parameter
     * @param item td_animation_stack.item
     * @private
     */
    _initialize_item: function _initialize_item(item) {
        item._order = td_animation_stack._order++;

        item.offset_top = item.jquery_obj.offset().top;
        //item.offset_relative = Math.sqrt(Math.pow(item.jquery_obj.offset().top, 2) + Math.pow(item.jquery_obj.offset().left, 2));

        item.offset_bottom_to_top = item.offset_top + item.jquery_obj.height();

        //item.jquery_obj.parent().prepend('<div class="debug_item" style="position: absolute; width: 100%; height: 20px; border: 1px solid red; background-color: white">' + item.offset_top + '</div>');
    },


    /**
     * - dynamically search for new elements to create new td_animation_stack.item
     * - the items are added in the td_animation_stack._items_in_view_port, that means they are ready to be animated,
     * or in the td_animation_stack.items to be computed later (checked if they are in the view port and animated)
     * @param selector {string} - jQuery selector
     * @param sort_type {td_animation_stack.SORTED_METHOD} - a preferred td_animation_stack.SORTED_METHOD
     * @param in_view_port {boolean} - add an item in the td_animation_stack._items_in_view_port or in the td_animation_stack.items
     */
    check_for_new_items: function(selector, sort_type, in_view_port) {

        // td_animation_stack must be activated and not stopped for initialization by the ready_init checker
        if ((td_animation_stack.activated === false) || (td_animation_stack._ready_for_initialization === false)) {
            return;
        }


        if (selector === undefined) {
            selector = '';
        }



        // the local stack of searched items
        var local_stack = [];



        if (window.td_animation_stack_effect === 'type0') {
            // for every founded element there's an instantiated td_animation_stack.item, then initialized and added to the local stack
            var founded_elements = jQuery(selector + ', .post').find(td_animation_stack._specific_selectors).filter(function() {
                return jQuery(this).css('opacity') === '0';
            });

        } else {
            jQuery(td_animation_stack._general_selectors).not('.' + td_animation_stack._animation_css_class2).addClass(td_animation_stack._animation_css_class1);

            // for every founded element there's an instantiated td_animation_stack.item, then initialized and added to the local stack
            var founded_elements = jQuery(selector + ', .post').find(td_animation_stack._specific_selectors).filter(function() {
                return jQuery(this).hasClass(td_animation_stack._animation_css_class1);
            });
        }



        founded_elements.each(function(index, element) {

            var item_animation_stack = new td_animation_stack.item();

            item_animation_stack.jquery_obj = jQuery(element);

            td_animation_stack.log(index);

            td_animation_stack._initialize_item(item_animation_stack);

            local_stack.push(item_animation_stack);
        });



        // new scope having its own timer used for checking not yet loaded images
        (function(){

            var images_loaded = true;

            for (var i = 0; i < local_stack.length; i++) {

                // for every image element the 'complete' property is checked
                // "If the image is finished loading, the complete property returns true"
                // when td_animation_stack.init is called on load, as normally, it calls td_animation_stack.check_for_new_items and all these element has 'complete' property true
                // when td_animation_stack.check_for_new_items is called by block's ajax response, the next timer is used to wait for all elements being loaded
                if (founded_elements[i].complete == false) {
                    images_loaded = false;
                    break;
                }
            }

            // if there's at least one element not loaded, a timer is started to wait for
            if (images_loaded === false) {

                var date = new Date();
                var start_time = date.getTime();


                td_animation_stack.log('TIMER - started');


                // the timer is started
                var interval_check_loading_image = setInterval(function() {

                    // if there's too much time waiting for image loading, they are made visible
                    var date = new Date();

                    var i = 0;

                    if ((date.getTime() - start_time) > td_animation_stack.max_waiting_for_init) {

                        clearInterval(interval_check_loading_image);

                        for (i = 0; i < local_stack.length; i++) {




                            if (window.td_animation_stack_effect === 'type0') {
                                local_stack[i].jquery_obj.css('opacity', 1);
                            } else {
                                local_stack[i].jquery_obj.removeClass(td_animation_stack._animation_css_class1);
                                local_stack[i].jquery_obj.addClass(td_animation_stack._animation_css_class2);
                            }






                        }
                        return;
                    }


                    // at every interval step, the element's 'complete' property is checked again
                    images_loaded = true;

                    for (i = 0; i < local_stack.length; i++) {

                        if (founded_elements[i].complete == false) {
                            images_loaded = false;
                            break;
                        }
                    }

                    if (images_loaded === true) {

                        clearInterval(interval_check_loading_image);

                        td_animation_stack.log('TIMER - stopped');

                        td_animation_stack._precompute_items(local_stack, sort_type, in_view_port);
                        td_animation_stack.compute_items();
                    }

                }, 100);

            } else {
                td_animation_stack._precompute_items(local_stack, sort_type, in_view_port);
                td_animation_stack.compute_items();
            }

        })();

        td_animation_stack.log('checked for new items finished');
    },


    /**
     * - _precompute_items sorts and adds items in the td_animation_stack.items array or even in the
     * td_animation_stack._items_in_view_port array
     * - this function is necessary because at scroll just the td_animation_stack.compute_items function is called
     *
     * @param stack_items {[]} founded items
     * @param sort_type {function} sorting method
     * @param in_view_port {boolean} add in view port to be already computed, or in the general items array
     * @private
     */
    _precompute_items: function _precompute_items(stack_items, sort_type, in_view_port) {

        stack_items.sort(sort_type);

        if (in_view_port === true) {

            while (stack_items.length > 0) {
                td_animation_stack.log('add item 1 : ' + stack_items.length);
                td_animation_stack._items_in_view_port.push(stack_items.shift());
            }

        } else {

            while (stack_items.length > 0) {
                td_animation_stack.log('add item 2 : ' + stack_items.length);
                td_animation_stack.items.push(stack_items.shift());
            }
        }
    },



    /**
     * - IT'S CALLED ON PAGE LOAD [actually in td_last_init.js]
     * - the general init function
     * - the items are added to the td_animation_stack.items using check_for_new_items method, and then computed
     * - the arrays are cleared to be prepared for a reinitialization
     */
    init: function init() {
        if (window.tds_animation_stack === undefined) {
            return;
        }

        // td_animation_stack must not be already stopped for initialization by a pre_init checker
        if (td_animation_stack._ready_for_initialization === false) {
            return;
        }

        // clear the _ready_init_timeout, to stop it doing more checking
        clearTimeout(td_animation_stack._ready_init_timeout);

        // the td_animation_stack is activated
        td_animation_stack.activated = true;

        td_animation_stack.check_for_new_items('.td-animation-stack', td_animation_stack.SORTED_METHOD.sort_left_to_right, false);
    },


    /**
     * - the arrays are cleared to be prepared for a reinitialization
     * - the init call is done
     */
    reinit: function reinit() {

        // td_animation_stack must not be already stopped for initialization by a pre_init checker
        if (td_animation_stack._ready_for_initialization === false) {
            return;
        }

        td_animation_stack.items = [];
        td_animation_stack._items_in_view_port = [];
        td_animation_stack._items_above_view_port = [];

        td_animation_stack.init();
    },


    /**
     * - compute all items
     */
    compute_items: function compute_items() {

        // td_animation_stack must be activated and not stopped for initialization by the ready_init checker
        if ((td_animation_stack.activated === false) || (td_animation_stack._ready_for_initialization === false)) {
            return;
        }

        // the td_animation_stack.items are processed
        td_animation_stack._separate_items();

        // the items above the port view are animated
        while (td_animation_stack._items_above_view_port.length > 0) {
            td_animation_stack.log('animation - above the view port');

            var item_above_view_port = td_animation_stack._items_above_view_port.shift();



            if (window.td_animation_stack_effect === 'type0') {
                item_above_view_port.jquery_obj.css('opacity', 1);
            } else {
                item_above_view_port.jquery_obj.removeClass(td_animation_stack._animation_css_class1);
                item_above_view_port.jquery_obj.addClass(td_animation_stack._animation_css_class2);
            }




        }


        // the items in the port view are prepared to be animated
        if (td_animation_stack._items_in_view_port.length > 0) {

            // clear any opened interval by a previous compute_items call
            clearInterval(td_animation_stack._current_interval);

            var current_animation_item = td_animation_stack._get_item_from_view_port();




            if (window.td_animation_stack_effect === 'type0') {
                current_animation_item.jquery_obj.css('opacity', 1);
            } else {
                current_animation_item.jquery_obj.removeClass(td_animation_stack._animation_css_class1);
                current_animation_item.jquery_obj.addClass(td_animation_stack._animation_css_class2);
            }





            if (td_animation_stack._items_in_view_port.length > 0) {

                td_animation_stack.log('start animation timer');

                td_animation_stack._to_timer(td_animation_stack._get_right_interval(td_animation_stack.interval * (1 / td_animation_stack._items_in_view_port.length)));
            }
        }
    },


    /**
     * - timer function initially called by a td_animation_stack.compute_items function, and then it's auto called
     * - it calls a setInterval using the interval parameter
     * @param interval {int} - interval ms
     */
    _to_timer: function _to_timer(interval) {

        td_animation_stack._current_interval = setInterval(function () {

            if (td_animation_stack._items_in_view_port.length > 0) {

                var current_animation_item = td_animation_stack._get_item_from_view_port();

                td_animation_stack.log('animation at interval: ' + interval);




                if (window.td_animation_stack_effect === 'type0') {
                    current_animation_item.jquery_obj.css('opacity', 1);
                } else {
                    current_animation_item.jquery_obj.removeClass(td_animation_stack._animation_css_class1);
                    current_animation_item.jquery_obj.addClass(td_animation_stack._animation_css_class2);
                }




                clearInterval(td_animation_stack._current_interval);

                if (td_animation_stack._items_in_view_port.length > 0) {
                    td_animation_stack._to_timer(td_animation_stack._get_right_interval(td_animation_stack.interval * (1 / td_animation_stack._items_in_view_port.length)));
                }
            }
        }, interval);
    },


    /**
     * - get an item from the td_animation_stack._items_in_view_port array
     * @returns {td_animation_stack.item}
     * @private
     */
    _get_item_from_view_port: function _get_item_from_view_port() {

        return td_animation_stack._items_in_view_port.shift();
    },



    /**
     * - get the interval considering td_animation_stack.min_interval and td_animation_stack.max_interval
     * @param interval {int} - the checked interval value
     * @returns {int} - the result interval value
     * @private
     */
    _get_right_interval: function _get_right_interval(interval) {

        if (interval < td_animation_stack.min_interval) {
            return td_animation_stack.min_interval;

        } else if (interval > td_animation_stack.max_interval) {
            return td_animation_stack.max_interval;
        }
        return interval;
    },


    /**
     * - check where the item is to the view port
     * @param item {td_animation_stack.item}
     * @returns {number} _ITEM_TO_VIEW_PORT value
     * @private
     */
    _item_to_view_port: function _item_to_view_port(item) {

        if (td_events.window_pageYOffset + td_events.window_innerHeight < item.offset_top) {
            return td_animation_stack._ITEM_TO_VIEW_PORT.ITEM_UNDER_VIEW_PORT;

        } else if ((td_events.window_pageYOffset + td_events.window_innerHeight >= item.offset_top) && (td_events.window_pageYOffset <= item.offset_bottom_to_top)) {
            return td_animation_stack._ITEM_TO_VIEW_PORT.ITEM_IN_VIEW_PORT;

        }
        return td_animation_stack._ITEM_TO_VIEW_PORT.ITEM_ABOVE_VIEW_PORT;
    },


    /**
     * - check the sorted td_animation_stack.items and move them into the _items_above_view_port array or into the _items_in_view_port
     * - the remaining items are kept by the td_animation_stack.items for next processing
     * @private
     */
    _separate_items: function _separate_items() {
        if (td_animation_stack.items.length == 0) {
            return;
        }

        while (td_animation_stack.items.length > 0) {
            var item_to_view_port = td_animation_stack._item_to_view_port(td_animation_stack.items[0]);

            switch (item_to_view_port) {
                case td_animation_stack._ITEM_TO_VIEW_PORT.ITEM_ABOVE_VIEW_PORT :
                    td_animation_stack._items_above_view_port.push(td_animation_stack.items.shift());
                    break;

                case td_animation_stack._ITEM_TO_VIEW_PORT.ITEM_IN_VIEW_PORT :
                    td_animation_stack._items_in_view_port.push(td_animation_stack.items.shift());
                    break;

                case td_animation_stack._ITEM_TO_VIEW_PORT.ITEM_UNDER_VIEW_PORT : return;
            }
        }
    },


    /**
     * - scroll event usually called by td_custom_events
     */
    td_events_scroll: function td_events_scroll() {
        td_animation_stack.compute_items();
    },



    /**
     * - resize event usually called by td_custom_events
     */
    td_events_resize: function td_events_resize() {
        // clear an existing interval
        clearInterval(td_animation_stack._current_interval);

        // reinitialize td_animation_stack searching in page for not already animated items [which were already repositioned by resize]
        td_animation_stack.reinit();
    },



    log: function log(msg) {
        //console.log(msg);
    }

};

/**
 * smooth scroll init
 */
/*
jQuery().ready(function () {
    if (td_detect.is_chrome === true && td_detect.is_osx === false) {
        td_smooth_scroll();
    }
});
*/


/**
 * sidebar init
 */
if (td_util.get_backend_var('tds_smart_sidebar') == 'enabled' && td_detect.is_ios === false) {
    jQuery(window).load(function() {
        // find the rows and the sidebars objects and add them to the magic sidebar object array
        jQuery('.td-ss-row').each(function () {
            //@todo check to see if the sidebar + content is pressent
            var td_smart_sidebar_item = new td_smart_sidebar.item();
            td_smart_sidebar_item.sidebar_jquery_obj = jQuery(this).children('.td-pb-span4').children('.wpb_wrapper');
            td_smart_sidebar_item.content_jquery_obj = jQuery(this).children('.td-pb-span8').children('.wpb_wrapper');
            td_smart_sidebar.add_item(td_smart_sidebar_item);
        });



        // check the page to see if we have smart sidebar classes (.td-ss-main-content and .td-ss-main-sidebar)
        if (jQuery('.td-ss-main-content').length > 0 && jQuery('.td-ss-main-sidebar').length > 0) {
            var td_smart_sidebar_item = new td_smart_sidebar.item();
            td_smart_sidebar_item.sidebar_jquery_obj = jQuery('.td-ss-main-sidebar');
            td_smart_sidebar_item.content_jquery_obj = jQuery('.td-ss-main-content');
            td_smart_sidebar.add_item(td_smart_sidebar_item);
        }

        td_smart_sidebar.td_events_resize();
    });
}


/**
 * pulldown lists
 *
 */

jQuery('.td-subcat-filter').each(function(index, element) {
    var jquery_object_container = jQuery(element);
    var horizontal_jquery_obj = jquery_object_container.find('.td-subcat-list:first');
    var vertical_jquery_obj = jquery_object_container.find('.td-subcat-dropdown:first');

    if (horizontal_jquery_obj.length == 1 && vertical_jquery_obj.length == 1) {

        var pulldown_item_obj = new td_pulldown.item();

        pulldown_item_obj.horizontal_jquery_obj = horizontal_jquery_obj;
        pulldown_item_obj.vertical_jquery_obj = vertical_jquery_obj;
        pulldown_item_obj.horizontal_element_css_class = 'td-subcat-item';
        pulldown_item_obj.container_jquery_obj = horizontal_jquery_obj.parents('.td_block_wrap:first');
        pulldown_item_obj.excluded_jquery_elements = [horizontal_jquery_obj.parent().siblings('.block-title:first')];

        td_pulldown.add_item(pulldown_item_obj);
    }
});

jQuery('.td-category-siblings').each(function(index, element) {
    var jquery_object_container = jQuery(element);
    var horizontal_jquery_obj = jquery_object_container.find('.td-category:first');
    var vertical_jquery_obj = jquery_object_container.find('.td-subcat-dropdown:first');

    if (horizontal_jquery_obj.length == 1 && vertical_jquery_obj.length == 1) {

        var pulldown_item_obj = new td_pulldown.item();

        pulldown_item_obj.horizontal_jquery_obj = horizontal_jquery_obj;
        pulldown_item_obj.vertical_jquery_obj = vertical_jquery_obj;
        pulldown_item_obj.horizontal_element_css_class = 'entry-category';
        pulldown_item_obj.container_jquery_obj = horizontal_jquery_obj.parents('.td-category-siblings:first');

        td_pulldown.add_item(pulldown_item_obj);
    }
});





/**
 * parallax effect
 */

// array keeping the td_animation_scroll.item items used for backstretch
var td_backstretch_items = [];


jQuery(window).ready(function() {

    jQuery('.td-backstretch').each(function (index, element) {

        if (!jQuery(element).hasClass('not-parallax')) {

            var item = new td_animation_scroll.item();
            item.jquery_obj = jQuery(element);
            item.wrapper_jquery_obj = item.jquery_obj.parent();

            // - ideal translation is when the top of wrapper_jquery_obj is at the top of the view port, the jquery_obj image
            // is also already translated at the top of the view port
            // - the start_value should be item.wrapper_jquery_obj.offset().top + how much the jquery_obj was translated

            td_animation_scroll.add_item(item);

            // we keep the td_animation_scroll.item to change operation settings when the viewport is changing
            td_backstretch_items.push(item);

            td_compute_backstretch_item(item);
        }
    });


    jQuery('.td-parallax-header').each(function (index, element) {

        var item = new td_animation_scroll.item();
        item.jquery_obj = jQuery(element);

        item.add_item_property('move_y', 50, 100, 0, 100, '');
        item.add_item_property('opacity', 50, 100, 1, 0, '');

        item.animation_callback = function () {

            var move_y_property = parseFloat(item.computed_item_properties['move_y']).toFixed();
            var opacity_property = parseFloat(item.computed_item_properties['opacity']);

            item.jquery_obj.css({
                '-webkit-transform': 'translate3d(0px,' + move_y_property + 'px, 0px)',
                'transform': 'translate3d(0px,' + move_y_property + 'px, 0px)'
            });

            item.jquery_obj.css('transform', 'translate3d(0px,' + move_y_property + 'px, 0px)');

            item.jquery_obj.css('opacity', opacity_property);

            item.redraw = false;
        }

        td_animation_scroll.add_item(item);
    });


    td_animation_scroll.compute_all_items();




    // load animation stack
    td_animation_stack.ready_init();
});


jQuery(window).load(function() {
    jQuery('body').addClass('td-js-loaded');

    window.td_animation_stack.init();
});


