<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

</div>
<!-- } 콘텐츠 끝 -->

<!-- 하단 시작 { -->
<div id="footer">
    <div class="wrapper">
        <div class="site_info">
            <dl>
                <dd>인생을그리다</dd>
                <dd>대표이사 : 고미란</dd>
                <dd>사업자번호 : 123-45-67890</dd>
                <dd>경기도 성남시 분당구 성남대로 393</dd>
            </dl>
            <dl>
                <dd>대표전화 : 1234-5678</dd>
                <dd>Fax : 02-558-5262</dd>
                <dd>Email : artinlife@gmail.com</dd>
            </dl>
            <dl>
                <dd>Copyright ⓒ 인생을그리다. All rights reserved.</dd>
            </dl>
        </div>
        <div class="ft_mn">
            <ul>
                <li><a href="#">문의하기</a></li>
                <li><a href="#">개인정보처리방침</a></li>
                <li><a href="#">이용약관</a></li>
            </ul>
        </div>
    </div>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");
?>