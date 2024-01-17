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

					<!-- Add User -->
					<div class="p_modal show">
						<form class="p_modal__form">
							<h4 class="c_hdng3 p_modal__ttl">代理店の追加</h4>
							<button class="c_btn-icon close"></button>
							<div class="p_modal__scroll c_scrollbar">
								<div class="inner">
									<div class="item">
										<label for="">法人ID</label>
										<input type="text" name="">
									</div>
									<div class="item">
										<label for="">会社名</label>
										<input type="text" name="">
									</div>
									<div class="item">
										<label for="">ふりがな</label>
										<input type="text" id="" name="">
									</div>
									<div class="item">
										<label for="">インボイス番号</label>
										<input type="text" name="">
									</div>
									<div class="item">
										<label for="">郵便番号</label>
										<input type="text" name="">
									</div>
									<div class="item">
										<label for="">住所</label>
										<input type="text" name="">
									</div>
									<div class="item">
										<label for="">電話都号</label>
										<input type="text" name="">
									</div>
									<div class="item">
										<label for="">FAX据号</label>
										<input type="text" name="">
									</div>
									<div class="item full">
										<label for="">業界名</label>
										<div class="c_tags-input">
											<div class="list">ファッション<button class="c_btn-icon close"></button></div>
											<div class="list">家庭用電化製品<button class="c_btn-icon close"></button></div>
											<div class="list">美容と健康<button class="c_btn-icon close"></button></div>
											<input type="text" name="">
										</div>
									</div>
									<div class="item full">
										<span class="c_label">有効/無効: </span>
										<div class="c_checkbox w-label">
											<input type="radio" name="options" id="option1" value="option1" checked>
											<label for="option1">Yes</label>

											<input type="radio" name="options" id="option2" value="option2">
											<label for="option2">No</label>
										</div>
									</div>
								</div>
							</div>
							<div class="p_modal__btns">
								<button class="c_btn c_btn-active secondary">キャンセル</button>
								<button class="c_btn c_btn-active primary">新規作成</button>
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