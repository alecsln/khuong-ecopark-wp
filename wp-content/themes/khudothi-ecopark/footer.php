<footer id="footer">
    <div class="footer_top">
        <div class="container ">
            <div class=" row ">
                <?php dynamic_sidebar( 'footer-1'); ?>
            </div>
        </div>
    </div>
</footer>

<div class="support-fix">
    <ul>
        <li class="x3"><a href="http://m.me/<?php the_field('face','option') ?>"></a></li>
        <li class="x4"><a href="http://zalo.me/<?php the_field('zalo','option')?>"></a></li>
    </ul>
</div>

<a class="phone_backtotop" title="Gọi ngay" href="tel:<?php the_field('hotline','option')?>"><i class="fa fa-phone"></i></a>

<div id="back-top"><a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i></a></div>


<div style="display: none;width:100%;max-width:410px;padding: 20px;border-radius: 4px" id="popup_baogia" class="form-kgd animated-modal">
    <h2 class="mb-3">Tải tài liệu, báo giá và thông tin chi tết chung cư Ecopark Sky Oasis</h2>
    <h4>Mặt bằng, chính sách, bảng giá tất cả chỉ trong một lần tải</h4>
    <?php echo do_shortcode('[contact-form-7 id="409" title="Tải tài liệu báo giá"]'); ?>
</div>

<div class="odder_dich_vu jas-sale-pop" id="button">
     <div class="list_order"></div>
</div>

<script type="text/javascript">
    /////////
    jQuery(document).ready(function(){
        setInterval(function(){
           jQuery.ajax({
            type: "POST",
            data: {
                    action : 'list_order',
                    },
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            success: function(message, status, xhr) {
               jQuery('.list_order').html(message).closest('.odder_dich_vu').fadeIn(1000).delay(5000).fadeOut();
            },                   
          });
        }, 10000);
    });

</script>

<script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/js/jquery.fancybox.min.js"></script>


<script type="text/javascript">
	 (function($) {
        setTimeout(function() {
  $.fancybox.open({
    type : 'inline',
    src  : '#popup_baogia',
    opts : {
      iframe : {
        preload : false
      }
    },

  });
}, 1000); 

    setTimeout( function() {$.fancybox.close(); },100000); 
         $('#touch-menu').click(function () { $(this).stop(0).addClass('opened'); $('#sticker').addClass('opened'); });
    $('#sticker .close-menu,#sticker-overlay').click(function () { $('#touch-menu').stop(0).removeClass('opened'); $('#sticker').removeClass('opened'); });
    $(".menu-mb ul.menu > li.menu-item-has-children > a").after('<span class="fa visible-xs visible-sm fa-angle-down"></span>');
    $('#sticker .main-menu .fa').click(function () { $(this).parent('li').children('ul').stop(0).slideToggle(300); $(this).stop(0).toggleClass('fa-angle-down').toggleClass('fa-angle-up'); });
    $("#back-top").hide();
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });
        $('#back-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
    var nav = $(".head");

$(window).scroll(function () {
        if ($(this).scrollTop() > 10) {
            nav.addClass("navbar-fixed-top");
        } else {
            nav.removeClass("navbar-fixed-top");
        }
    });
    $('.wpcf7-submit').click(function () {
        var thisElement = $(this);
        var oldVal = thisElement.val();
        var textLoading = 'Đang xử lý ...';
        $('.cf7_submit .ajax-loader').remove();
        thisElement.val(textLoading);
        document.addEventListener('wpcf7submit', function (event) {
            thisElement.val(oldVal);
        }, false);
    });
    $('table').addClass('table table-bordered');
    $('.slider_home').owlCarousel({
    loop:true,autoplay:true,
    margin:20,autoplayTimeout:5000,
    autoplayHoverPause:true,
    nav:true,navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
    $('.slider_news').owlCarousel({
    loop:true,autoplay:false,
    margin:20,autoplayTimeout:4000,
    autoplayHoverPause:true,
    nav:true,navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
});
    })(jQuery);

</script>
<?php wp_footer(); ?>
</body>
</html>