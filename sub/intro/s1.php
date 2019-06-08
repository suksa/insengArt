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
        <div class="a1 tc mb115">
            <h3 class="h_sjt">인생미술관</h3>
            <p>
                <b>인생미술관</b>은 <b>정서적 안정</b>과 <b>마음의 평온을</b><br>
                얻을 수 있는 것을 목표로 하고 있습니다.<br>
                <br>
                그림을 통해 일상으로부터 <b>지친 몸과 마음을 힐링</b>해보고<br>
                <b>나만의 여유</b>를 경험해보세요.
            </p>
        </div>
        <div class="a2 wrapper mb120 intro_a2_txt1">
            <div class="c c1">
                <h3>
                    <?php if(!G5_IS_MOBILE){ ?>
                    <img src="/img/sub/intro_a2_txt1.png" alt="">
                    <?php }else{ ?>
                    <img src="/img/sub/intro_a2_txt1.png" alt="" width="39" height="22">
                    <?php } ?>
                </h3>
                <p class="p1">‘편안한 환경’에서 미술을 통해 건강한 마음을 만들어보세요.</p>
                <a href="#">센터위치 보러가기</a>
            </div>
            <div class="c c2">
                <h3>
                    <?php if(!G5_IS_MOBILE){ ?>
                    <img src="/img/sub/intro_a2_txt2.png" alt="">
                    <?php }else{ ?>
                    <img src="/img/sub/intro_a2_txt2.png" alt="" width="84" height="22">
                    <?php } ?>
                </h3>
                <p class="p1">이제 ‘우리집’에서 그림을 통해 힐링하세요.</p>
                <p class="p2">미술전공, 10년이상 경력의 배테랑 강사들이 집을 방문하여<br>
                1:1 맟춤 커리큘럼을 통해 미술로 힐링하는 시간을 선사해드립니다.</p>
            </div>
        </div>
        <div class="a3 wrapper">
            <h3>
                <?php if(!G5_IS_MOBILE){ ?>
                <img src="/img/sub/intro_a2_txt3.png" alt="">
                <?php }else{ ?>
                <img src="/img/sub/intro_a2_txt3.png" alt="" width="360" height="62">
                <?php } ?>
            </h3>
            <ul>
                <li>
                    <img src="/img/sub/intro_b1.jpg" alt="" class="<?php echo (G5_IS_MOBILE)?'rsp_img':null ?>" >
                    <div class="txt">
                        <h4>
                            우리가족, 반려동물 그리기
                            <span>DRAW A PICTURE</span>
                        </h4>
                        <p>사랑하는 우리가족, 반려동물을 그려보는 프로그램입니다.<br>
                        가족, 반려동물의 특징을 살려 단순하면서도 개성있는 초상화를 그려보고<?php echo (G5_IS_MOBILE)?' ':'<br>' ?>
                        나만의 작품을 집에 걸어보세요.</p>
                    </div>
                </li>
                <li class="r">
                    <img src="/img/sub/intro_b2.jpg" alt="" class="<?php echo (G5_IS_MOBILE)?'rsp_img':null ?>">
                    <div class="txt">
                        <h4>
                            인테리어 소품만들기
                            <span>DRAW A PICTURE</span>
                        </h4>
                        <p>우리집을 장식할 수 있는 인테리어 소품을 만들어보세요.<br>
                        세상에 하나뿐인 그림을 직접 그려보고 완성해<?php echo (G5_IS_MOBILE)?' ':'<br>' ?>
                        집안 곳곳에 멋스러움을 더해보세요.</p>
                    </div>
                </li>
                <li>
                    <img src="/img/sub/intro_b3.jpg" alt="" class="<?php echo (G5_IS_MOBILE)?'rsp_img':null ?>">
                    <div class="txt">
                        <h4>
                            나만의 여행스케치
                            <span>DRAW A PICTURE</span>
                        </h4>
                        <p>이미 다녀온 추억이 가득한 여행지나 평소 늘 꿈꾸던 장소 등을<?php echo (G5_IS_MOBILE)?' ':'<br>' ?>
                        그려서 기록할 수 있다면 얼마나 좋을까요?<br>
                        여행을 하면서 사진이 아닌 나만의 그림으로 가져올 수 있는<?php echo (G5_IS_MOBILE)?' ':'<br>' ?>
                        특별한 순간을 만들어보세요.</p>
                    </div>
                </li>
                <li class="r">
                    <img src="/img/sub/intro_b4.jpg" alt="" class="<?php echo (G5_IS_MOBILE)?'rsp_img':null ?>">
                    <div class="txt">
                        <h4>
                            그림카드 만들기
                            <span>DRAW A PICTURE</span>
                        </h4>
                        <p>쉽고 흥미 가득한 방법으로 간단하게 즐길 수 있는 프로그램입니다.<br>
                        가볍고 부담없는 선물로 직접 그린 그림카드를 만들어 선물해보세요.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php include_once(G5_PATH.'/tail.php'); ?>