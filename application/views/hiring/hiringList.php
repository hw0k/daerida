<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<?php $this->load->view('layout/inner_header', [
	'title' => '구인 공고 리스트',
	'content' => '구인 공고들을 확인할 수 있습니다.',
	'color' => 1
]); ?>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
						<div class="w-select">
							<fieldset class="form-group">
								<div class="btn-group bootstrap-select form-control">
								<select class="selectpicker form-control" tabindex="-98">
									<option value="NU">상희바보</option>
									<option value="NU">Favourite</option>
									<option value="NU">Likes</option>
								</select>
							<span class="material-input"></span></fieldset>
						</div>
						<form class="w-search">
							<div class="form-group with-button is-empty">
								<input class="form-control" type="text" placeholder="기업 검색">
								<button>
									<svg class="olymp-magnifying-glass-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
								</button>
							<span class="material-input"></span></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="blog-post-wrap medium-padding80" style="padding-top: 20px; padding-bottom: 0;">
	<div class="container">
		<div class="row">

            <?php
                foreach($hiringList as $item) {

            ?>
            <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="ui-block">


                    <!-- Post -->

                    <article class="hentry blog-post">

                        <div class="post-thumb">
                            <img src="<?= '/uploads/profile/' . $item['me_c_profile'] ?>" alt="photo">
                        </div>

                        <div class="post-content">
                            <div href="#" class="post-category <?= ($item['re_endDate'] != null) ? "badge-primary" : "badge-success" ?>" id="fromnow-<?= $item['re_idx']?>">
                                <?php
                                if ($item['re_endDate'] != null) {
                                    ?>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            $("#fromnow-<?= $item['re_idx'] ?>").text("종료 " + new moment("<?= $item['re_endDate'] ?>").locale("ko").fromNow(true) + " 전");
                                        });
                                    </script>
                                    <?php
                                    } else {
                                        echo "상시모집";
                                    }
                                    ?>
                            </div>
							<a href="/hiring/detail?re_idx=<?= $item['re_idx']?>" class="h4 post-title"><?=  $item['re_content'] ?></a>
<!--							<p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>-->

							<div class="author-date">
								<a class="h6 post__author-name fn" href="/member/Company?me_c_idx=<?= $item['me_c_idx'] ?>"><?= $item['me_c_name'] ?></a>
								<div class="post__date">
									<span class="published">
                                        <?php
                                            if ($item['re_startDate'] != null) {
                                                echo $item['re_startDate'] . " ~ ";
                                            }
                                            if ($item['re_endDate'] != null) {
                                                echo $item['re_endDate'];
                                            } else {
                                                echo "상시";
                                            }
                                        ?>
									</span>
								</div>
							</div>

							<div class="post-additional-info inline-items">
					
								<div class="comments-shared">
									<a href="/hiring/detail?re_idx=<?= $item['re_idx']?>" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
										<span><?= $item['recruitCnt'] ?>개의 분야 모집이 있습니다.</span>
									</a>
								</div>
					
							</div>
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
                <?php } ?>

		</div>
	</div>

	
	<!-- Pagination -->
	
	<nav aria-label="Page navigation">
		<ul class="pagination justify-content-center" style="margin-bottom: 35px; margin-top: 5px;">
			<li class="page-item disabled">
				<a class="page-link" href="#" tabindex="-1">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div></div></a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">...</a></li>
			<li class="page-item"><a class="page-link" href="#">12</a></li>
			<li class="page-item">
				<a class="page-link" href="#">Next</a>
			</li>
		</ul>
	</nav>
	
	<!-- ... end Pagination -->

</section>

<?php $this->load->view('layout/footer'); ?>