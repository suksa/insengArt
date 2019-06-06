<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
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

<header id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div class="to_content"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_MOBILE_PATH.'/newwin.inc.php'; // 팝업레이어
    } ?>

    <div id="hd_wrapper">

        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/mobile/common/logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>

        <button type="button" id="gnb_open" class="hd_opener"><span class="sound_only"> 메뉴열기</span></button>

        <div id="gnb" class="hd_div">
            <button type="button" id="gnb_close" class="hd_closer"><span class="sound_only">메뉴 </span>닫기</button>

            <ul id="gnb_1dul">
                <li class="gnb_1dli">
                    <a href="/sub/intro/s1.php" class="gnb_1da">인생미술관</a>
                    <button type="button" class="btn_gnb_op">하위분류</button>
                    <ul class="gnb_2dul">
                        <li class="gnb_2dli">
                            <a href="/sub/intro/s1.php" class="gnb_2da">
                                <span></span>인생미술관
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="gnb_1dli">
                    <a href="/sub/program/s1.php" class="gnb_1da">프로그램 소개</a>
                    <button type="button" class="btn_gnb_op">하위분류</button>
                    <ul class="gnb_2dul">
                        <li class="gnb_2dli">
                            <a href="/sub/program/s1.php" class="gnb_2da">
                                <span></span>프로그램 소개
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="gnb_1dli">
                    <a href="/bbs/board.php?bo_table=counsel&sca=체험수업" class="gnb_1da">수강문의</a>
                    <button type="button" class="btn_gnb_op">하위분류</button>
                    <ul class="gnb_2dul">
                        <li class="gnb_2dli">
                            <a href="/bbs/board.php?bo_table=counsel&sca=체험수업" class="gnb_2da">
                                <span></span>체험수업 신청
                            </a>
                        </li>
                        <li class="gnb_2dli">
                            <a href="/bbs/board.php?bo_table=counsel&sca=Q%26A" class="gnb_2da">
                                <span></span>Q&A
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="gnb_1dli">
                    <a href="/bbs/board.php?bo_table=gallery&sca=작품소개" class="gnb_1da">갤러리</a>
                    <button type="button" class="btn_gnb_op">하위분류</button>
                    <ul class="gnb_2dul">
                        <li class="gnb_2dli">
                            <a href="/bbs/board.php?bo_table=gallery&sca=작품소개" class="gnb_2da">
                                <span></span>작품소개
                            </a>
                        </li>
                        <li class="gnb_2dli">
                            <a href="/bbs/board.php?bo_table=gallery&sca=수업스케치" class="gnb_2da">
                                <span></span>수업스케치
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="gnb_1dli">
                    <a href="/bbs/board.php?bo_table=community&sca=공지사항" class="gnb_1da">커뮤니티</a>
                    <button type="button" class="btn_gnb_op">하위분류</button>
                    <ul class="gnb_2dul">
                        <li class="gnb_2dli">
                            <a href="/bbs/board.php?bo_table=community&sca=공지사항" class="gnb_2da">
                                <span></span>공지사항
                            </a>
                        </li>
                        <li class="gnb_2dli">
                            <a href="/bbs/board.php?bo_table=community&sca=인생미술관+소식" class="gnb_2da">
                                <span></span>인생미술관소식
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="gnb_1dli">
                    <a href="/bbs/board.php?bo_table=data&sca=수업자료" class="gnb_1da">강사자료실</a>
                    <button type="button" class="btn_gnb_op">하위분류</button>
                    <ul class="gnb_2dul">
                        <li class="gnb_2dli">
                            <a href="/bbs/board.php?bo_table=data&sca=수업자료" class="gnb_2da">
                                <span></span>수업자료
                            </a>
                        </li>
                        <li class="gnb_2dli">
                            <a href="/bbs/board.php?bo_table=data&sca=강사+커뮤니티" class="gnb_2da">
                                <span></span>강사 커뮤니티
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <!--<button type="button" id="user_btn" class="hd_opener"><i class="fa fa-user" aria-hidden="true"></i><span class="sound_only">사용자메뉴</span></button>-->
        
        <div class="hd_div" id="user_menu">
            <button type="button" id="user_close" class="hd_closer"><span class="sound_only">메뉴 </span>닫기</button>

            <?php echo outlogin('basic'); // 외부 로그인 ?>

            <ul id="hd_nb">
                <li class="hd_nb1"><a href="<?php echo G5_BBS_URL ?>/qalist.php" id="snb_qa"><i class="fa fa-comments" aria-hidden="true"></i><br>1:1문의</a></li>
                <li class="hd_nb2"><a href="<?php echo G5_BBS_URL ?>/faq.php" id="snb_faq"><i class="fa fa-question-circle" aria-hidden="true"></i><br>FAQ</a></li>
                <li class="hd_nb3"><a href="<?php echo G5_BBS_URL ?>/current_connect.php" id="snb_cnt"><i class="fa fa-users" aria-hidden="true"></i><br>접속자 <span><?php echo connect('basic'); // 현재 접속자수 ?></span></a></li>
                <li class="hd_nb4"><a href="<?php echo G5_BBS_URL ?>/new.php" id="snb_new"><i class="fa fa-history" aria-hidden="true"></i><br>새글</a></li>
                
            </ul>

            <div id="text_size">
            <!-- font_resize('엘리먼트id', '제거할 class', '추가할 class'); -->
                <button id="size_down" onclick="font_resize('container', 'ts_up ts_up2', '', this);" class="select"><img src="<?php echo G5_URL; ?>/img/ts01.png" width="20" alt="기본"></button>
                <button id="size_def" onclick="font_resize('container', 'ts_up ts_up2', 'ts_up', this);"><img src="<?php echo G5_URL; ?>/img/ts02.png" width="20" alt="크게"></button>
                <button id="size_up" onclick="font_resize('container', 'ts_up ts_up2', 'ts_up2', this);"><img src="<?php echo G5_URL; ?>/img/ts03.png" width="20" alt="더크게"></button>
            </div>
        </div>

        <script>
        jQuery(function ($) {
            //폰트 크기 조정 위치 지정
            var font_resize_class = get_cookie("ck_font_resize_add_class");
            if( font_resize_class == 'ts_up' ){
                $("#text_size button").removeClass("select");
                $("#size_def").addClass("select");
            } else if (font_resize_class == 'ts_up2') {
                $("#text_size button").removeClass("select");
                $("#size_up").addClass("select");
            }

            $(".hd_opener").on("click", function(e) {
                var $this = $(this);
                var $hd_layer = $this.next(".hd_div");

                if($hd_layer.is(":visible")) {
                    $hd_layer.hide();
                    $this.find("span").text("열기");
                } else {
                    var $hd_layer2 = $(".hd_div:visible");
                    $hd_layer2.prev(".hd_opener").find("span").text("열기");
                    $hd_layer2.hide();

                    $hd_layer.show();
                    $this.find("span").text("닫기");
                }
            });

            $("#container").on("click", function(e) {
                $(".hd_div").hide();
            }).on("click_font_resize", function(e) {

                var $this = $(this),
                    $text_size_button = $("#text_size button");
                
                $text_size_button.removeClass("select");

                if( $this.hasClass("ts_up") ){
                    $text_size_button.eq(1).addClass("select");
                } else if ( $this.hasClass("ts_up2") ) {
                    $text_size_button.eq(2).addClass("select");
                } else {
                    $text_size_button.eq(0).addClass("select");
                }
            });

            $(".btn_gnb_op").click(function(e){
                $(this).toggleClass("btn_gnb_cl").next(".gnb_2dul").slideToggle(300);
                
            });

            $(".hd_closer").on("click", function(e) {
                var idx = $(".hd_closer").index($(this));
                $(".hd_div:visible").hide();
                $(".hd_opener:eq("+idx+")").find("span").text("열기");
            });
        });
        </script>
        
    </div>
</header>



<div id="wrapper">

    <div id="container">
