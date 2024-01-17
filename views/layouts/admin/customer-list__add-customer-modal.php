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
							<h2 class="c_hdng3">顧客新規作成 (1-1)</h2>
							<ul class="c_breadcrumb">
								<li><a href="">顧客管理画面</a></li>
								<li class="current">顧客新規作成</li>
							</ul>
						</div>
						<div class="right">
							<button class="c_btn c_btn-active primary">新規作成</button>
						</div>
					</div>

					<form class="p_form-clist p_form-cclist">
						<div class="p_form-clist__upper col3">
							<div class="item">
								<div class="c_select">
									<select id="" name="" form="">
										<option value="">氏名</option>
										<option value="">ふりがな</option>
										<option value="">所属部署名</option>
										<option value="">郵便番号</option>
										<option value="">住所</option>
										<option value="">電話番号</option>
										<option value="">FAX番号</option>
										<option value="">E-mail</option>
										<option value="">権限</option>
										<option value="">パスワード</option>
										<option value="">登錄日時</option>
										<option value="">最終ログイン日時</option>
										<option value="">有効/無効</option>
									</select>
								</div>
							</div>
							<div class="item w-sidelabel">
								<label for="">が</label>
								<input type="text" id="" name="">
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
							<div class="p_btns-center">
								<button class="c_btn c_btn-active secondary">ダウンロード</button>
								<button class="c_btn c_btn-active primary w-icon search">検索</button>
							</div>
						</div>
					</form>

					<?php include('_table-customers.php'); ?>

					<!-- Add Customer Modal -->
					<div class="p_modal show">
						<form class="p_modal__form">
							<h4 class="c_hdng3 p_modal__ttl">顧客の追加</h4>
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
										<label for="">所属部署のリスト</label>
										<div class="c_tags-input">
											<div class="list">技術部<button class="c_btn-icon close"></button></div>
											<div class="list">経理部<button class="c_btn-icon close"></button></div>
											<div class="list">事業部<button class="c_btn-icon close"></button></div>
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