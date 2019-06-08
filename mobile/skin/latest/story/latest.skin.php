<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
$thumb_width = 360;
$thumb_height = 300;
?>

<div class="per_view">
    <div class="swiper-container" id="story_slide">
        <div class="swiper-wrapper">
            <div class="swiper-button-next bind_click1"></div>
            <div class="swiper-button-prev bind_click2"></div>
            <?php
            for ($i=0; $i<count($list); $i++) {
            $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

            if($thumb['src']) {
                $img = $thumb['src'];
            } else {
                $img = G5_IMG_URL.'/no_img.png';
            }
            $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" width="'.$thumb_width.'" height="'.$thumb_height.'">';
            ?>
            <div class="swiper-slide">
                <a href="<?php echo $list[$i]['href'] ?>">
                    <div class="bg" style="background-image:url(<?=$img?>)"></div>
                    <div class="txt">
                        <h4><?=$list[$i]['subject']?></h4>
                        <p><?=$list[$i]['datetime']?></p>
                    </div>
                </a>
            </div>
            <?php }  ?>
            <?php if (count($list) == 0) { //게시물이 없을 때  ?>
            <div class="swiper-slide"><img src="/img/common/noimg.jpg" alt="" width="" height=""></div>
            <div class="swiper-slide"><img src="/img/common/noimg.jpg" alt="" width="" height=""></div>
            <div class="swiper-slide"><img src="/img/common/noimg.jpg" alt="" width="" height=""></div>
            <div class="swiper-slide"><img src="/img/common/noimg.jpg" alt="" width="" height=""></div>
            <div class="swiper-slide"><img src="/img/common/noimg.jpg" alt="" width="" height=""></div>
            <?php }  ?>
        </div>
    </div>
    <div class="arr_clone">
        <div class="sw_prev"><img src="/img/mobile/main/slide_arr_l.png" alt="" class="rsp_img"></div>
        <div class="sw_next"><img src="/img/mobile/main/slide_arr_r.png" alt="" class="rsp_img"></div>
    </div>
    <script>
        var swiper = new Swiper('#story_slide', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                slidesPerView: 2,
                spaceBetween: 10,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    550: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    }
                },
            });
            $('.sw_next').on('click',function(){
                $('.bind_click1').trigger('click')
            })
            $('.sw_prev').on('click',function(){
                $('.bind_click2').trigger('click')
            })
    </script>
</div>