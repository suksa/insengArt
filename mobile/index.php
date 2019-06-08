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
    <div class="wrapper">
        <a href="#" class="c1">
            <img src="/img/main/bnr1_1.jpg" alt="" class="rsp_img">
            <h3>모두가 한 번쯤은 꿈꿔온<br>나만의 힐링시간.</h3>
            <p>직장인,주부 취미미술을 위한 Gold ART</p>
        </a>
        <a href="#" class="c1 c2">
            <img src="/img/main/bnr1_2.jpg" alt="" class="rsp_img">
            <h3>작은 변화가<br>행복한 노후를 만듭니다.</h3>
            <p>우울증, 노인 취미미술을 위한 Silver ART</p>
        </a>
        <a href="#" class="c1">
            <img src="/img/main/bnr1_3.jpg" alt="" class="rsp_img">
            <h3>몸과 마음을 회복하는<br>시간을 가져보세요.</h3>
            <p>산후 우울증 개선, 교감을 위한 태교미술</p>
        </a>
    </div>
</div>
<div class="main__program">
    <h3><b>인생미술관 </b>프로그램 소개</h3>
    <p>몸과 마음, 생각의 쉼까지 미술로<br>온전한 휴식을 취하며 힐링하는 시간을 선사합니다.</p>
    <div class="main__program-cont">
        <a href="#" class="c1"></a>
        <a href="#" class="c2"></a>
        <a href="#" class="c3"></a>
    </div>
</div>
<div class="main__story">
    <h3>
       <b>‘인생미술관’</b>에서 함께한 이야기들
    </h3>
    <?php echo latest('story','gallery',30,10) ?>
    <a href="#" class="story_btn">
        수업스케치 자세히보기 <img src="/img/mobile/main/arr4.png" alt="" width="24" height="7.5">
    </a>
</div>
<div class="main__bnr">
    <a href="#"><img src="/img/mobile/main/double_bnr_1.jpg" alt="" class="rsp_img l" title=""></a>
    <a href="#"><img src="/img/mobile/main/double_bnr_2.jpg" alt="" class="rsp_img r" title=""></a>
</div>

<?php
include_once(G5_MOBILE_PATH.'/tail.php');
?>