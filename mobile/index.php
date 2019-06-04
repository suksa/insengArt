<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

include_once(G5_MOBILE_PATH.'/head.php');
?>

<div class="main__vis">
    <img src="/img/m/main/vis_1.jpg" alt="" class="rsp_img">
</div>
<div class="main__bnr-group">
    <div class="main__bnr1">
        <a href="#"><img src="/img/m/main/bnr1_1.jpg" alt="" class="rsp_img"></a>
    </div>
    <div class="main__bnr2">
        <a href="#"><img src="/img/m/main/bnr1_2.jpg" alt="" class="rsp_img"></a>
    </div>
    <div class="main__bnr3">
        <a href="#"><img src="/img/m/main/bnr1_3.jpg" alt="" class="rsp_img"></a>
    </div>
</div>
<div class="main__program">
    <h3><img src="/img/m/main/txt_1.png" alt="" class="rsp_img"></h3>
    <div class="main__program-cont">
        <a href="#" class="c1"></a>
        <a href="#" class="c2"></a>
        <a href="#" class="c3"></a>
    </div>
</div>
<div class="main__story">
    <h3><img src="/img/m/main/txt_2.png" alt="" class="rsp_img"></h3>
</div>

<?php
include_once(G5_MOBILE_PATH.'/tail.php');
?>