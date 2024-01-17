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
							<h2 class="c_hdng3">販売店詳細 (4-4)</h2>
							<ul class="c_breadcrumb">
								<li><a href="">販売店管理画面</a></li>
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
								<li><a href="#user">ユーザー</a></li>
								<li><a href="#approval_func">承認機能</a></li>
								<li><a href="#dealer_reg" class="current">販売店登録</a></li>
								<li><a href="#paid_func">有料機能</a></li>
							</ul>

							<!-- 
									<div id="user" class="p_tabs__content"></div>
									<div id="approval_func" class="p_tabs__content"></div>
								-->

							<div id="dealer_reg" class="p_tabs__content">
								<div class="p_tabs__content-relation">
									<div class="p_form-clist">
										<div class="p_form-clist__upper col3">
											<div class="item">
												<div class="c_select">
													<select id="" name="" form="">
														<option value="">ユーザID</option>
														<option value="">ユーザID1</option>
														<option value="">ユーザID2</option>
														<option value="">ユーザID3</option>
														<option value="">ユーザID4</option>
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
											<div class="item">
												<span class="label">販売店名</span>
												<div class="c_select">
													<select id="" name="" form="">
														<option value="">選択して下さい</option>
														<option value="">選択して下さい</option>
														<option value="">選択して下さい</option>
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
									</div>

									<div class="c_table p_tabs__content-relation__tbl">
										<div class="c_table__scroll c_scrollbar">
											<table class="c_table__inner">
												<tr>
													<th>番号順</th>
													<th>販売店名</th>
													<th>業界名</th>
													<th>住所</th>
													<th>電話番号</th>
													<th>販売店追加</th>
												</tr>
												<tr>
													<td data-label="番号順"><div>1</div></td>
													<td data-label="販売店名"><div>A株式会社</div></td>
													<td data-label="業界名"><div>ファッション</div></td>
													<td data-label="住所"><div></div></td>
													<td data-label="電話番号"><div></div></td>
													<td data-label="販売店追加"><div class="c_txt-center">
														<div>
															<div class="c_checkbox">
																	<input type="checkbox" id="checkoption01" name="checkoption01" value="" checked>
																	<label for="checkoption01"></label>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td data-label="番号順"><div>2</div></td>
													<td data-label="販売店名"><div>株式会社B</div></td>
													<td data-label="業界名"><div>家庭用電化製品</div></td>
													<td data-label="住所"><div></div></td>
													<td data-label="電話番号"><div></div></td>
													<td data-label="販売店追加"><div class="c_txt-center">
														<div>
															<div class="c_checkbox">
																	<input type="checkbox" id="checkoption02" name="checkoption02" value="" checked>
																	<label for="checkoption02"></label>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td data-label="番号順"><div>3</div></td>
													<td data-label="販売店名"><div>D有限会社</div></td>
													<td data-label="業界名"><div>飲食店</div></td>
													<td data-label="住所"><div></div></td>
													<td data-label="電話番号"><div></div></td>
													<td data-label="販売店追加"><div class="c_txt-center">
														<div>
															<div class="c_checkbox">
																	<input type="checkbox" id="checkoption03" name="checkoption03" value="" checked>
																	<label for="checkoption03"></label>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td data-label="番号順"><div>4</div></td>
													<td data-label="販売店名"><div>サービス</div></td>
													<td data-label="業界名"><div></div></td>
													<td data-label="住所"><div></div></td>
													<td data-label="電話番号"><div></div></td>
													<td data-label="販売店追加"><div class="c_txt-center">
														<div>
															<div class="c_checkbox">
																	<input type="checkbox" id="checkoption04" name="checkoption04" value="" checked>
																	<label for="checkoption04"></label>
															</div>
														</div>
													</td>
												</tr>
													<tr>
													<td data-label="番号順"><div>5</div></td>
													<td data-label="販売店名"><div>リホールディングス</div></td>
													<td data-label="業界名"><div>建設業</div></td>
													<td data-label="住所"><div></div></td>
													<td data-label="電話番号"><div></div></td>
													<td data-label="販売店追加"><div class="c_txt-center">
														<div>
															<div class="c_checkbox">
																	<input type="checkbox" id="checkoption05" name="checkoption05" value="" checked>
																	<label for="checkoption05"></label>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td data-label="番号順"><div>6</div></td>
													<td data-label="販売店名"><div>MIN株式会社</div></td>
													<td data-label="業界名"><div></div></td>
													<td data-label="住所"><div></div></td>
													<td data-label="電話番号"><div></div></td>
													<td data-label="販売店追加"><div class="c_txt-center">
														<div>
															<div class="c_checkbox">
																	<input type="checkbox" id="checkoption06" name="checkoption06" value="" checked>
																	<label for="checkoption06"></label>
															</div>
														</div>
													</td>
												</tr>
											</table>
										</div>
									</div><!-- c_table -->

								</div>
							</div>

							<!-- <div id="paid_func" class="p_tabs__content"></div> -->

						</div>
						<div class="c_txt-right"><button class="c_btn c_btn-active primary p_tabs_btn-update">更新する</button></div>
					</form>


				</div><!-- End of p_main-content -->

			</main>
		</div>
	</div>


	<script src="/resources/assets/js/script.js"></script>
</body>

</html>