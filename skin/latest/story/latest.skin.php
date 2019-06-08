<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
$thumb_width = 360;
$thumb_height = 300;
?>

<div class="per_view">
    <div class="swiper-container">
        <div class="swiper-wrapper">
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
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 5,
            spaceBetween: 35,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                1800: {
                    slidesPerView: 4,
                    spaceBetween: 35,
                },
                1400: {
                    slidesPerView: 3,
                    spaceBetween: 35,
                }
              }
        });
    </script>
</div>