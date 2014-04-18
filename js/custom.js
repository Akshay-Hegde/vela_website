//header swich on scroll-----------------------------//
$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('#menu-container').addClass('min');
        $('.inner-logo').addClass('min');
        $('#header').addClass('min');
    }
    if ($(this).scrollTop() < 100) {
        $('#menu-container').removeClass('min');
        $('.inner-logo').removeClass('min');
        $('#header').removeClass('min');
    }
});


//Navigation-----------------------------//
function triggerMenu(){
    $(" #nav ul ").css({
        display: "none"
    });
    $(" #nav li").hover(function(){
        $(this).find('ul:first').css({
            visibility: "visible",
            display: "none"
        }).slideDown(250);
    },function(){
        $(this).find('ul:first').css({
            visibility: "hidden"
        });
    });
}
/mobile/i.test(navigator.userAgent) && !location.hash && setTimeout(function () {
    if (!pageYOffset) window.scrollTo(0, 1);
}, 1000);

/*Twitter Feed ---------------------------- */
	
$.getJSON('http://api.twitter.com/1/statuses/user_timeline/envato.json?count=2&callback=?', function(tweets){
    $(".widget_twitter div").html(tz_format_twitter(tweets));
});
    
$(document).ready(function(){
    selectnav('nav');//menu switch-------------//
    triggerMenu(); //menu ---------------//
    

    
    //recent blog carousel--------------------//
    $('#blog-carousel').carousel();
    
    //imageModal----------------------------//
    $("a[rel^='imageModal']").imageModal({
        social_tools: false
    });

    //Portfolio------------------------------//
    protfolioOverlay();
    function protfolioOverlay(){
        $('.portfolio-thumb').mouseover(function(){
            var dis = $(this);
            //dis.children('img').stop().transit({scale: 1});
            dis.children('.portfolio-des').animate({
                bottom:'-1px'
            },300);
            dis.children('.portfolio-mask').animate({
                bottom:'0'
            },300);
            dis.children('.portfolio-zoom,.portfolio-link').fadeIn(300);
        });

        $('.portfolio-thumb').mouseleave(function(){
            var dis = $(this);
            //dis.children('img').stop().transit({scale: 1});
            dis.children('.portfolio-des').stop(1,1).animate({
                bottom:'-23%'
            },300);
            dis.children('.portfolio-mask').stop(1,1).animate({
                bottom:'-100%'
            },300);
            dis.children('.portfolio-zoom,.portfolio-link').stop(1,1).fadeOut(300);
        });
    }
    //Tooltips------------------//
    $('*[rel=tooltip]').tooltip();
        
    //Quicksand--------------------------------//
    var $filterType = $('#filtercats li.active a').attr('class');
    var $holder = $('#portfolio-holder');
    var $data = $holder.clone();

    $('#filtercats li a').click(function(e) {

        $('#filtercats li').removeClass('active');

        var $filterType = $(this).attr('class');
        $(this).parent().addClass('active');

        if ($filterType == 'all') {
            var $filteredData = $data.find('div.portfolio-thumb');
        } 
        else {
            var $filteredData = $data.find('div[data-type~=' + $filterType + ']');
        }
        // alert($data.html());

        // call quicksand
        $holder.quicksand($filteredData, {
            duration: 800,
            easing: 'easeInOutQuad'
        },
        function (){
            protfolioOverlay();
        });

    });
    
    //Multibox--------------------------------//
    var boxTitles=$('.multibox .titles li');
        
    boxTitles.click(function(){
        var titleIndex=boxTitles.index(this);
        $('#multibox-inner').animate({
            marginTop:titleIndex*-200+'px'
            },300);
        $('.multibox .titles .pointer').animate({
            top:titleIndex*41+35+'px'
            },300);
        $('.multibox .titles .back-bar').animate({
            top:titleIndex*41+20+'px'
            },300);
    });
    
    //Brands images-----------//
    $('#brands .col').mouseover(function(){
        var brands=$(this).children();
        brands.eq(1).hide(400);
        brands.eq(2).show(400);
            
    });
    $('#brands .col').mouseleave(function(){
        var brands=$(this).children();
        brands.eq(1).stop(1,1).show(200);
        brands.eq(2).stop(1,1).hide(200);
    });
    
    //Scroll to top------------//
    $('a#to-top').click(function(){
        $('html, body').animate({
            scrollTop:0
        }, 400); 

    }); 
        
    //blog box hover effect----------------//
    $('.blog-hover').mouseover(function(){
        $(this).addClass('active');
    });
    $('.blog-hover').mouseleave(function(){
        $(this).removeClass('active');
    })
    
    //Team box overlay----------------------//
    $('.staff-box .photo').mouseover(function(){
        $(this).children('.des').animate({
            height:'100%'
        },300);
    })
    $('.staff-box .photo').mouseleave(function(){
        $(this).children('.des').stop(1,1).animate({
            height:'50px'
        },300);
    })
});


        
