<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="header">
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    <div class="wrapper">
        <h1 class="logo"><a href="/"><img src="/img/common/logo.png" alt="<?php echo $g5['title'] ?>"></a></h1>
        <ul class="gnb">
            <li><a href="#"><img src="/img/main/gnb_ico.png" alt=""> 강사자료실</a></li>
            <li><a href="#">체험수업 신청</a></li>
            <li><a href="#">Q&A</a></li>
        </ul>
        <nav class="lnb">
            <ul>
                <li><a href="#">인생미술관</a></li>
                <li><a href="#">프로그램 소개</a></li>
                <li><a href="#">수강문의</a></li>
                <li><a href="#">갤러리</a></li>
                <li><a href="#">커뮤니티</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- } 상단 끝 -->

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
