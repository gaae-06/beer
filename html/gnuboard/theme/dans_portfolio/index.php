<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>iooio

<div id="comp_6644651" class="module module_navi type_text" style="background:#F9D07E">
					<h3 class="for-a11y">컨텐츠 바로가기 네비게이션</h3>
					<div class="sectionitems">


									<div class="item">
										<a href="#comp_6644652" class="navi_anchor" onclick="RPP.Exhibition.sendClickLog(&#x27;300000926&#x27;, &#x27;Utility&#x27;, {&quot;Seqno&quot;:2,&quot;ModuleName&quot;:&quot;네비게이션 1&quot;,&quot;ModuleType&quot;:&quot;2&quot;,&quot;TabSeqno&quot;:1,&quot;TabName&quot;:&quot;#착한할인&quot;});">

												<span class="tit" style="color:#2c2c2c"><span>#착한할인</span></span>
										</a>
									</div>
									<div class="item">
										<a href="#comp_6644653" class="navi_anchor" onclick="RPP.Exhibition.sendClickLog(&#x27;300000926&#x27;, &#x27;Utility&#x27;, {&quot;Seqno&quot;:2,&quot;ModuleName&quot;:&quot;네비게이션 1&quot;,&quot;ModuleType&quot;:&quot;2&quot;,&quot;TabSeqno&quot;:2,&quot;TabName&quot;:&quot;#착한소비&quot;});">
												<span class="before"></span>
												<span class="tit" style="color:#2c2c2c"><span>#착한소비</span></span>
										</a>
									</div>
									<div class="item">
										<a href="#comp_6644655" class="navi_anchor" onclick="RPP.Exhibition.sendClickLog(&#x27;300000926&#x27;, &#x27;Utility&#x27;, {&quot;Seqno&quot;:2,&quot;ModuleName&quot;:&quot;네비게이션 1&quot;,&quot;ModuleType&quot;:&quot;2&quot;,&quot;TabSeqno&quot;:3,&quot;TabName&quot;:&quot;식품&quot;});">
												<span class="before"></span>
												<span class="tit" style="color:#2c2c2c"><span>신상</span></span>
										</a>
									</div>
									<div class="item">
										<a href="#comp_6644657" class="navi_anchor" onclick="RPP.Exhibition.sendClickLog(&#x27;300000926&#x27;, &#x27;Utility&#x27;, {&quot;Seqno&quot;:2,&quot;ModuleName&quot;:&quot;네비게이션 1&quot;,&quot;ModuleType&quot;:&quot;2&quot;,&quot;TabSeqno&quot;:4,&quot;TabName&quot;:&quot;생활·가전&quot;});">
												<span class="before"></span>
												<span class="tit" style="color:#2c2c2c"><span>이벤트</span></span>
										</a>
									</div>



						</div>
					</div>



<div class="latest_wr bgV">

	<?php
	echo latest('theme/slider_baner', 'admin2', 3, 36 );
    ?>

</div>


<div class="latest_wr2 mainCon ">

	<div id="comp_6644653">
         	<h3>#착한할인</h3>
	        <p>착한할인</p>
	<div>
		  <?php
        $options = array(
            // 최소 317픽셀은 해주셔야 합니다.
            'thumb_width'    => GALLERY_WIDTH, // 썸네일 width
            'thumb_height'   => GALLERY_HEIGHT  // 썸네일 height
        );
        echo latest('theme/grid', 'gallery', 4, 36, 2, $options);		// 최소설치시 자동생성되는 갤러리게시판
              ?>
	</div>
	</div>




	<div id="comp_6644654" >
           <p>착한할인</p>
	<div>
		  <?php
        $options = array(
            // 최소 317픽셀은 해주셔야 합니다.
            'thumb_width'    => GALLERY_WIDTH, // 썸네일 width
            'thumb_height'   => GALLERY_HEIGHT  // 썸네일 height
        );
        echo latest('theme/grid', 'gallery', 4, 36, 2, $options);		// 최소설치시 자동생성되는 갤러리게시판
    ?>
	</div>
</div>

	</div>


<div class="latest_wr4 mainCon bgV">

		<div id="comp_6644655">
			<div>
         	<h3>#착한소비</h3>
	        <p>착한소비</p>
	        </div>
		  <?php
        $options = array(
            // 최소 317픽셀은 해주셔야 합니다.
            'thumb_width'    => GALLERY_WIDTH, // 썸네일 width
            'thumb_height'   => GALLERY_HEIGHT  // 썸네일 height
        );
        echo latest('theme/grid', 'gallery', 12, 36, 2, $options);		// 최소설치시 자동생성되는 갤러리게시판
    ?>

		</div>
</div>
<div class="latest_wr5 mainCon ">
	<div id="comp_6644656">
			<h3>신상</h3>
	        <p>신상</p>


		  <?php
        $options = array(
            // 최소 317픽셀은 해주셔야 합니다.
            'thumb_width'    => GALLERY_WIDTH, // 썸네일 width
            'thumb_height'   => GALLERY_HEIGHT  // 썸네일 height
        );
        echo latest('theme/grid', 'gallery', 12, 36, 2, $options);		// 최소설치시 자동생성되는 갤러리게시판
    ?>


</div>
</div>





<div class="latest_wr3 mainCon">
	<ul>
<li class="latest_slide">
	<?php
     echo latest('theme/slider_baner_bottom', 'admin2', 3, 36 );
    ?>
</li>

<li>
<?php
     echo latest('theme/basic', 'admin1', 3, 36 );
    ?>

</li>
</ul>
	</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
