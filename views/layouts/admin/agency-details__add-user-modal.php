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
							<h2 class="c_hdng3">販売店詳細 (4-2)</h2>
							<ul class="c_breadcrumb">
								<li><a href="">顧客管理画面</a></li>
								<li><a href="">販売店一覧</a></li>
								<li class="current">販売店詳細</li>
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

					<form>
						<div class="p_tabs">
							<ul class="p_tabs__btns">
								<li><a href="#user" class="current">ユーザー</a></li>
								<li><a href="#approval_func">承認機能</a></li>
								<li><a href="#dealer_reg">販売店登録</a></li>
								<li><a href="#paid_func">有料機能</a></li>
							</ul>

							<!-- 
									<div id="user" class="p_tabs__content"></div>
									<div id="approval_func" class="p_tabs__content"></div>
								-->

							<div id="user" class="p_tabs__content">
								<div class="p_tabs__content-relation">
									<?php include('_table-agency-details.php'); ?>
								</div>

								<!-- <div id="paid_func" class="p_tabs__content"></div> -->

							</div>
							<div class="c_txt-right"><button class="c_btn c_btn-active primary p_tabs_btn-update">更新する</button></div>
					</form>

					<!-- Add User Modal -->
					<div class="p_modal show">
						<form class="p_modal__form">
							<h4 class="c_hdng3 p_modal__ttl">ユーザープロファイルの追加</h4>
							<button class="c_btn-icon close"></button>
							<div class="p_modal__scroll c_scrollbar">
								<div class="inner">
									<div class="item">
										<label for="">ストアID</label>
										<input type="text" name="">
									</div>
									<div class="item">
										<label for="">ユーザID</label>
										<input type="text" name="">
									</div>
									<div class="item full w-icon">
										<label for="">パスワード</label>
										<input type="password" name="">
										<i class="eye-off"></i>
									</div>
									<div class="item full w-icon">
										<label for="">パスワードの確認</label>
										<input type="password" name="">
										<i class="eye-off"></i>
									</div>
									<div class="item">
										<label for="">コーチレベル</label>
										<div class="c_select c_select-b">
											<select id="" name="" form="">
												<option value="" selected=""></option>
												<option value="">100-0001</option>
												<option value="">150-0002</option>
												<option value="">200-0015</option>
											</select>
										</div>
									</div>
									<div class="item">
										<label for="">業界名</label>
										<div class="c_select c_select-b">
											<select id="" name="" form="">
												<option value="" selected=""></option>
												<option value="">100-0001</option>
												<option value="">150-0002</option>
												<option value="">200-0015</option>
											</select>
										</div>
									</div>
									<div class="item">
										<label for="">フリガナ</label>
										<input type="text" name="">
									</div>
									<div class="item">
										<label for="">氏名</label>
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
										<label for="">電話番号</label>
										<input type="text" name="">
									</div>
									<div class="item">
										<label for="">FAX番号</label>
										<input type="text" name="">
									</div>
									<div class="item full">
										<label for="">E-mail</label>
										<input type="email" name="">
									</div>
									<div class="item full">
										<span class="c_label">有効/無効: </span>
										<div class="c_checkbox w-label">
											<input type="radio" name="options" id="option1" value="option1">
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