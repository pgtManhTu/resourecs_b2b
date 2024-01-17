<!DOCTYPE html>
<html lang="ja">
<?php set_include_path('../'); ?>
<?php include('elements/head.php'); ?>

<body>
	<div class="clearfix">
		<div class="f_main-area">
			<?php include('elements/sidebar.php'); ?>

			<main class="l_main">
        <?php include('elements/header-acess.php'); ?>
				<?php include('elements/header.php'); ?>

				<div class="p_main-content">

					<div class="p_main-content__hdng">
						<div class="left">
							<h2 class="c_hdng3">運営管理画面</h2>
							<ul class="c_breadcrumb">
								<li><a href="">運営管理画面</a></li>
								<li class="current">運営管理画面</li>
							</ul>
						</div>
					</div>

					<div class="p_search-box">
						<div class="p_search-box__text">
							<input type="text" id="" name="" placeholder="検索テキストを入力する">
						</div>
						<button class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
					</div>

					<form>
						<div class="p_tabs">
							<ul class="p_tabs__btns">
								<li><a href="#list_user">ユーザー一覧</a></li>
								<li><a href="#list_announcement">お知らせ一覧</a></li>
								<li><a href="#create_announcement">お知らせ作成</a></li>
								<li><a href="#contact" class="current">Contact</a></li>
							</ul>

							<div id="contact" class="p_tabs__content">
								<div class="p_tabs__content-details">
									<?php include('_table-contact-details.php'); ?>

									<div class="p_contact_desc">
										<h2>説明</h2>
										<input type="text" id="" name="" value="(注文) 納期を過ぎても商品が届きません?">
									</div>
								</div>
							</div>

							<!-- 
									<div id="list_user" class="p_tabs__content"></div>
									<div id="list_announcement" class="p_tabs__content"></div>
									<div id="create_announcement" class="p_tabs__content"></div>
									<div id="contact" class="p_tabs__content"></div> 
								-->

						</div>
					</form>


				</div><!-- End of p_main-content -->

			</main>
		</div>
	</div>


	<script src="/resources/assets/js/script.js"></script>
</body>

</html>