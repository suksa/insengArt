<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="/css/main.css">', 0);
?>

<div class="main_pg">
    <div class="vis">
        <img src="/img/main/scroll_down.png" alt="" class="sc_down">
    </div>
    <article class="a1">
        <a href="#" class="c1"><img src="/img/main/bnr1_1.png" alt=""></a>
        <a href="#" class="c2"><img src="/img/main/bnr1_2.png" alt=""></a>
        <a href="#" class="c3"><img src="/img/main/bnr1_3.png" alt=""></a>
    </article>
    <article class="a2">
        <div class="wrapper">
            <div class="txt">
                <img src="/img/main/txt_1.png" alt="" class="intro">
                <a href="#"><img src="/img/main/detail_1.png" alt=""></a>
            </div>
            <ul class="hv">
                <li><a href="#">
                    <img src="/img/main/hv_img1.jpg" alt="" class="bg">
                    <div class="p">
                        <p class="t1">Gold_ART</p>
                        <p class="t2">직장인 / 주부취미미술</p>
                        <img src="/img/main/hv_arr.png" alt="" class="arr">
                    </div>
                </a></li>
                <li><a href="#">
                    <img src="/img/main/hv_img2.jpg" alt="" class="bg">
                    <div class="p">
                        <p class="t1">Silver_ART</p>
                        <p class="t2">우울증 / 치매예방 / 노인취미미술</p>
                        <img src="/img/main/hv_arr.png" alt="" class="arr">
                    </div>
                </a></li>
                <li><a href="#">
                    <img src="/img/main/hv_img3.jpg" alt="" class="bg">
                    <div class="p">
                        <p class="t1">태교아트</p>
                        <p class="t2">산모태교미술</p>
                        <img src="/img/main/hv_arr.png" alt="" class="arr">
                    </div>
                </a></li>
            </ul>
        </div>
    </article>
    <article class="a3">
        <h3><img src="/img/main/txt_story.png" alt=""></h3>
        <div class="per_view">
            <div class="swiper-container">
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
            </div>
            <script>
                var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 5,
                    spaceBetween: 35,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        1800: {
                            slidesPerView: 4,
                            spaceBetween: 35,
                        },
                        1400: {
                            slidesPerView: 3,
                            spaceBetween: 35,
                        }
                      }
                });
            </script>
        </div>
        <div class="tc">
            <a href="#"><img src="/img/main/btn_detail_2.jpg" alt=""></a>
        </div>
    </article>
    <article class="a4 wrapper">
        <a href="#"><img src="/img/main/double_bnr_1.jpg" alt="" class="l"></a>
        <a href="#"><img src="/img/main/double_bnr_2.jpg" alt="" class="r"></a>
    </article>
</div>

<?php
include_once(G5_PATH.'/tail.php');
?>