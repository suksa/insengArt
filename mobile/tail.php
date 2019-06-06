<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}
?>
    </div>
</div>

<div id="ft">
    <div id="ft_copy">
        <div id="ft_company">
            <a href="#">문의하기</a>
            <a href="#">개인정보처리방침</a>
            <a href="#">이용약관</a>
        </div>
        <span>인생을그리다</span>
        <span>대표이사 : 고미란</span>
        <span>사업자번호 : 123-45-67890</span>
        <span>경기도 성남시 분당구 성남대로 393</span>
        <br>
        <span>대표전화 : 1234-5678</span>
        <span>Fax : 02-558-5262</span>
        <span>Email : artinlife@gmail.com</span>
        <br>
        Copyright ⓒ 인생을그리다. All rights reserved.
    </div>
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
    <?php
    if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
    <!-- <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전으로 보기</a> -->
    <?php
    }

    if ($config['cf_analytics']) {
        echo $config['cf_analytics'];
    }
    ?>
</div>



<script>
jQuery(function($) {

    $( document ).ready( function() {

        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
        
        //상단고정
        if( $(".top").length ){
            var jbOffset = $(".top").offset();
            $( window ).scroll( function() {
                if ( $( document ).scrollTop() > jbOffset.top ) {
                    $( '.top' ).addClass( 'fixed' );
                }
                else {
                    $( '.top' ).removeClass( 'fixed' );
                }
            });
        }

        //상단으로
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });

    });
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");
?>