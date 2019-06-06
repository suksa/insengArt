<?php
include_once('../../common.php');
include_once(G5_PATH.'/head.php');
add_stylesheet('<link rel="stylesheet" href="/css/'.(G5_IS_MOBILE?"m_sub":"sub").'.css">', 0);
?>
<div class="s_pg intro_pg">
    <div class="s_bnr"></div>
    <ul class="p_location">
        <li><img src="/img/sub/lo_home.jpg" alt=""></li>
        <li>인생미술관</li>
        <li>소개</li>
        <li>위치</li>
    </ul>
    <div class="contents">
        <?php if(!G5_IS_MOBILE){ ?>
        <div class="a1 tc mb115">
            <img src="/img/sub/s1_01_1.jpg" alt="">
        </div>
        <div class="a2 wrapper mb120">
            <img src="/img/sub/s1_02_1.jpg" alt="" usemap="#t1">
            <map name="t1">
                <area shape="rect" coords="223,159,423,205" href="#" alt="">
            </map>
        </div>
        <div class="a3 wrapper">
            <img src="/img/sub/s1_03_1.jpg" alt="">
        </div>
        <?php }else{ ?>
        <div class="a1">
            <img src="/img/mobile/sub/s1_01_1.jpg" alt="" class="rsp_img">
        </div>
        <div class="a2">
            <a href="#"><img src="/img/mobile/sub/s1_01_2.jpg" alt="" class="rsp_img"></a>
        </div>
        <div class="a3">
            <img src="/img/mobile/sub/s1_01_3.jpg" alt="" class="rsp_img">
        </div>
        <div class="a4">
            <img src="/img/mobile/sub/s1_01_4.jpg" alt="" class="rsp_img">
        </div>
        <?php } ?>
    </div>
</div>

<?php include_once(G5_PATH.'/tail.php'); ?>