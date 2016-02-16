/*================================================
    index
================================================*/

$("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    $(".header").bgswitcher({
        images: ['./img/top.jpg', 1, 5],
        effect: "clip",
    });

    $('.chaffle').chaffle({
        speed: 10,
        time: 100
    });

    $('#about1').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
            if (isInView) {
              //要素が見えたときに実行する処理
                $(this).css("visibility","visible");
                $(this).addClass("animated bounceInLeft");
            } else {
            }
    });
    $('#about2').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
            if (isInView) {
              //要素が見えたときに実行する処理
                $(this).css("visibility","visible");
                $(this).addClass("animated bounceInRight");
            } else {
            }
    });
    $('#service1,#service2,#service3,#service4').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
            if (isInView) {
              //要素が見えたときに実行する処理
                $(this).css("visibility","visible");
                $(this).addClass("animated fadeInDown");
            } else {
            }
    });
    $('#news1,#news2,#news3,#news4').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
            if (isInView) {
              //要素が見えたときに実行する処理
                $(this).css("visibility","visible");
                $(this).addClass("animated bounceInLeft");
            } else {
            }
    });
    $('#rec').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
            if (isInView) {
              //要素が見えたときに実行する処理
              console.log('ok');
                $(this).css("visibility","visible");
                $(this).addClass("animated swing");
            } else {
            }
    });


