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
							<h2 class="c_hdng3">販売店新規作成 (3-1)</h2>
							<ul class="c_breadcrumb">
								<li><a href="">販売店管理画面</a></li>
								<li class="current">販売店新規作成</li>
							</ul>
						</div>
						<div class="right">
							<button class="c_btn c_btn-active primary">新規アカウント作成</button>
						</div>
					</div>

					<form class="p_form-clist">
						<div class="p_form-clist__upper col3">
							<div class="item">
								<div class="c_select">
									<select id="" name="" form="">
										<option value="">ユーザID</option>
										<option value="">ユーザID</option>
										<option value="">ユーザID</option>
										<option value="">ユーザID</option>
										<option value="">ユーザID</option>
									</select>
								</div>
							</div>
							<div class="item w-sidelabel">
								<label for="">が</label>
								<input type="text" id="" name="" placeholder="店舗コード">
							</div>
							<div class="item">
								<div class="c_select">
									<select id="" name="" form="">
										<option value="">と一致する</option>
										<option value="">と一致する01</option>
										<option value="">と一致する02</option>
										<option value="">と一致する03</option>
									</select>
								</div>
							</div>
						</div>
						<div class="p_form-clist__lower">
							<div class="item">
								<span class="label">販売店名</span>
								<div class="c_select">
									<select id="" name="" form="">
										<option value="">ABC株式会社</option>
										<option value="">ABC株式会社</option>
										<option value="">ABC株式会社</option>
									</select>
								</div>
								<input type="text" id="" name="" placeholder="販売店名">
							</div>
							<div class="item">
								<span class="label">業界名</span>
								<div class="c_select">
									<select id="" name="" form="">
										<option value="">選択して下さい</option>
										<option value="">選択して下さい</option>
										<option value="">選択して下さい</option>
									</select>
								</div>
								<input type="text" id="" name="" placeholder="業界名">
							</div>
							<div class="btns">
								<button class="c_btn c_btn-active secondary">ダウンロード</button>
								<button class="c_btn c_btn-active primary w-icon search">検索</button>
							</div>
						</div>
					</form>


					<?php include('_table-agency-list.php'); ?>

					<!-- Delete User Modal -->
					<div class="p_modal show">
						<form class="p_modal__form small">
							<div class="p_modal__quest">この代理店を削除しても<br>よろしいですか?</div>
							<button class="c_btn-icon close-circ"></button>
							<div class="p_modal__btns">
								<button class="c_btn c_btn-active secondary">キャンセル</button>
								<button class="c_btn c_btn-active primary">確認する</button>
							</div>
						</form>
					</div>

				</div><!-- End of p_main-content -->

			</main>
		</div>
	</div>


	<script src="/resources/assets/js/script.js"></script>
</body>

</html>