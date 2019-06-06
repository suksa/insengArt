<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

include_once(G5_MOBILE_PATH.'/head.php');
?>

<div class="main__vis">
    <img src="/img/mobile/main/vis_1.jpg" alt="" class="rsp_img">
</div>
<div class="main__bnr-group">
    <div class="main__bnr1">
        <a href="#"><img src="/img/mobile/main/bnr1_1.jpg" alt="" class="rsp_img"></a>
    </div>
    <div class="main__bnr2">
        <a href="#"><img src="/img/mobile/main/bnr1_2.jpg" alt="" class="rsp_img"></a>
    </div>
    <div class="main__bnr3">
        <a href="#"><img src="/img/mobile/main/bnr1_3.jpg" alt="" class="rsp_img"></a>
    </div>
</div>
<div class="main__program">
    <h3><img src="/img/mobile/main/txt_1.png" alt="" class="rsp_img"></h3>
    <div class="main__program-cont">
        <a href="#" class="c1"></a>
        <a href="#" class="c2"></a>
        <a href="#" class="c3"></a>
    </div>
</div>
<div class="main__story">
    <h3><img src="/img/mobile/main/txt_2.png" alt="" class="rsp_img"></h3>
    <div class="per_view">
        <div class="swiper-container" id="story_slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#">
                        <div class="bg" style="background-image:url(/img/main/ex_img1.jpg)"></div>
                        <div class="txt">
                            <h4>인생미술관 갤러리 사진</h4>
                            <p>2019-01-01</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <div class="bg" style="background-image:url(/img/main/ex_img1.jpg)"></div>
                        <div class="txt">
                            <h4>인생미술관 갤러리 사진</h4>
                            <p>2019-01-01</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <div class="bg" style="background-image:url(/img/main/ex_img1.jpg)"></div>
                        <div class="txt">
                            <h4>인생미술관 갤러리 사진</h4>
                            <p>2019-01-01</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <div class="bg" style="background-image:url(/img/main/ex_img1.jpg)"></div>
                        <div class="txt">
                            <h4>인생미술관 갤러리 사진</h4>
                            <p>2019-01-01</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <div class="bg" style="background-image:url(/img/main/ex_img1.jpg)"></div>
                        <div class="txt">
                            <h4>인생미술관 갤러리 사진</h4>
                            <p>2019-01-01</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="swiper-button-next bind_click1">img</div>
            <div class="swiper-button-prev bind_click2"></div>
        </div>
        <div class="arr_clone">
            <div class="sw_prev"><img src="/img/mobile/main/slide_arr_l.png" alt="" class="rsp_img"></div>
            <div class="sw_next"><img src="/img/mobile/main/slide_arr_r.png" alt="" class="rsp_img"></div>
        </div>
        <script>
            var swiper = new Swiper('#story_slide', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                slidesPerView: 2,
                spaceBetween: 10,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    550: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    }
                },
            });
            $('.sw_next').on('click',function(){
                $('.bind_click1').trigger('click')
            })
            $('.sw_prev').on('click',function(){
                $('.bind_click2').trigger('click')
            })
        </script>
    </div>
    <a href="#" class="story_btn"><img src="/img/mobile/main/detail_1.jpg" alt="" class="rsp_img"></a>
</div>
<div class="main__bnr">
    <a href="#"><img src="/img/mobile/main/double_bnr_1.jpg" alt="" class="rsp_img l" title=""></a>
    <a href="#"><img src="/img/mobile/main/double_bnr_2.jpg" alt="" class="rsp_img r" title=""></a>
</div>

<?php
include_once(G5_MOBILE_PATH.'/tail.php');
?>