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
        <div class="wrapper">
            <a href="#" class="c1">
                <h3>모두가 한 번쯤은 꿈꿔온<br>나만의 힐링시간.</h3>
                <p>직장인,주부 취미미술을 위한 Gold ART</p>
                <img src="/img/main/bnr1_1.jpg" alt="">
            </a>
            <a href="#" class="c1 c2">
                <h3>작은 변화가<br>행복한 노후를 만듭니다.</h3>
                <p>우울증, 노인 취미미술을 위한 Silver ART</p>
                <img src="/img/main/bnr1_2.jpg" alt="">
            </a>
            <a href="#" class="c1">
                <h3>몸과 마음을 회복하는<br>시간을 가져보세요.</h3>
                <p>산후 우울증 개선, 교감을 위한 태교미술</p>
                <img src="/img/main/bnr1_3.jpg" alt="">
            </a>
        </div>
    </article>
    <article class="a2">
        <div class="wrapper">
            <div class="txt">
                <h3><b>인생미술관 </b>프로그램 소개</h3>
                <p>몸과 마음, 생각의 쉼까지 미술로 온전한 휴식을 취하며 힐링하는 시간을 선사합니다.</p>
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
        <h3>
           <b>‘인생미술관’ </b>에서 함께한 이야기들
        </h3>
        <?php echo latest('story','gallery',30,10) ?>
        <div class="tc">
            <a href="/bbs/board.php?bo_table=gallery&sca=수업스케치"><img src="/img/main/btn_detail_2.jpg" alt=""></a>
        </div>
    </article>
    <article class="a4 wrapper">
        <a href="#" class="l">
            <span class="c c1">
                <span>체험수업으로 시작해보세요.</span>
                <span>예술은 당신의 가장 가까운 곳에 있습니다.</span>
            </span>
            <img src="/img/main/double_bnr_1.jpg" alt="">
        </a>
        <a href="#" class="r">
            <span class="c c2">
                <span>궁금한 점을 알려드립니다.</span>
                <span>‘인생을 그리다’에 궁금한 점을 남겨주세요.</span>
            </span>
            <img src="/img/main/double_bnr_2.jpg" alt="">
        </a>
    </article>
</div>

<?php
include_once(G5_PATH.'/tail.php');
?>