<?php
include_once('../../common.php');
include_once(G5_PATH.'/head.php');
add_stylesheet('<link rel="stylesheet" href="/css/'.(G5_IS_MOBILE?"m_sub":"sub").'.css">', 0);
?>

<div class="s_pg s_program">
    <div class="s_bnr"></div>
    <ul class="p_location">
        <li><img src="/img/sub/lo_home.jpg" alt=""></li>
        <li>인생미술관</li>
        <li>프로그램소개</li>
    </ul>
    <div class="contents">
        <div class="a1 wrapper mb210">
            <img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_1.<?php echo (G5_IS_MOBILE)?'jpg':'png' ?>" alt="" class="rsp_img">
        </div>
        <div class="a1_bg"></div>
        <div class="a2 wrapper">
            <ul class="tabs">
                <li class="active" rel="tab01">수채화</li>
                <li rel="tab02">여행스케치</li>
                <li rel="tab03">명화</li>
                <li rel="tab04">풍경화</li>
                <li rel="tab05">반려동물 초상화</li>
                <li rel="tab06">인테리어 소품</li>
                <li rel="tab07">보테니컬 아트</li>
                <li rel="tab08">인물화</li>
                <li rel="tab09" under="true">아크릴화</li>
                <li rel="tab10" under="true">소묘</li>
                <li rel="tab11" under="true">동양화</li>
                <li rel="tab12" under="true">색연필화</li>
                <li rel="tab13" under="true">마카드로잉</li>
                <li rel="tab14" under="true">펜드로잉</li>
                <li rel="tab15" under="true">일러스트</li>
                <li rel="tab16" under="true">ETC</li>
            </ul>
            <div class="tab_container">
                <div id="tab01" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_1.jpg" alt="" class="rsp_img"></div>
                <div id="tab02" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_2.jpg" alt="" class="rsp_img"></div>
                <div id="tab03" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_3.jpg" alt="" class="rsp_img"></div>
                <div id="tab04" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_4.jpg" alt="" class="rsp_img"></div>
                <div id="tab05" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_5.jpg" alt="" class="rsp_img"></div>
                <div id="tab06" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_6.jpg" alt="" class="rsp_img"></div>
                <div id="tab07" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_7.jpg" alt="" class="rsp_img"></div>
                <div id="tab08" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_8.jpg" alt="" class="rsp_img"></div>
                <div id="tab09" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_9.jpg" alt="" class="rsp_img"></div>
                <div id="tab10" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_10.jpg" alt="" class="rsp_img"></div>
                <div id="tab11" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_11.jpg" alt="" class="rsp_img"></div>
                <div id="tab12" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_12.jpg" alt="" class="rsp_img"></div>
                <div id="tab13" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_13.jpg" alt="" class="rsp_img"></div>
                <div id="tab14" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_14.jpg" alt="" class="rsp_img"></div>
                <div id="tab15" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_15.jpg" alt="" class="rsp_img"></div>
                <div id="tab16" class="tab_content"><img src="/img/<?php if(G5_IS_MOBILE) echo 'mobile/' ?>sub/s2_01_2_16.jpg" alt="" class="rsp_img"></div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        $(".tab_content").hide();
        $(".tab_content:first").show();
        $("ul.tabs li").click(function () {
            $("ul.tabs li").removeClass("active")
            $(this).addClass("active")
            $(".tab_content").hide()
            var activeTab = $(this).attr("rel");
            $("#" + activeTab).fadeIn()
        });
    })
</script>

<?php include_once(G5_PATH.'/tail.php'); ?>