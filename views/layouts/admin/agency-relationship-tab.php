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
							<h2 class="c_hdng3">顧客詳細 (2-4)</h2>
							<ul class="c_breadcrumb">
								<li><a href="">顧客管理画面</a></li>
								<li><a href="">顧客一覧</a></li>
								<li class="current">顧客詳細</li>
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
										<option value="" hidden>検索フィールドを選択してください</option>
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
							<div class="item w-sidelabel c_sp-placehlder">
								<label for="">が</label>
								<input type="text" id="" name="" placeholder="が">
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
								<span class="label">法人名</span>
								<div class="c_select">
									<select id="" name="" form="">
										<option value="">選択して下さい</option>
										<option value="">選択して下さい</option>
										<option value="">選択して下さい</option>
									</select>
								</div>
								<input type="text" id="" name="" placeholder="法人名">
							</div>
							<div class="item">
								<span class="label">部署名</span>
								<div class="c_select">
									<select id="" name="" form="">
										<option value="">選択して下さい</option>
										<option value="">選択して下さい</option>
										<option value="">選択して下さい</option>
									</select>
								</div>
								<input type="text" id="" name="" placeholder="部署名">
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
														<option value="">134235</option>
														<option value="">242534</option>
														<option value="">425366</option>
														<option value="">243263</option>
														<option value="">654756</option>
													</select>
												</div>
											</div>
											<div class="item w-sidelabel c_sp-placehlder">
												<label for="">が</label>
												<input type="text" id="" name="" placeholder="が">
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
												<span class="label">法人名</span>
												<div class="c_select">
													<select id="" name="" form="">
														<option value="">選択して下さい</option>
														<option value="">選択して下さい</option>
														<option value="">選択して下さい</option>
													</select>
												</div>
												<input type="text" id="" name="" placeholder="法人名">
											</div>
											<div class="item">
												<span class="label">部署名</span>
												<div class="c_select">
													<select id="" name="" form="">
														<option value="">選択して下さい</option>
														<option value="">選択して下さい</option>
														<option value="">選択して下さい</option>
													</select>
												</div>
												<input type="text" id="" name="" placeholder="部署名">
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
													<th>会社名</th>
													<th>部署名</th>
													<th>住所</th>
													<th>電話番号</th>
													<th class="hdng_center" data-label="販売店追加">販売店追加</th>
												</tr>
												<tr>
													<td class="pc-only"><div>1</div></td>
													<td class="c_table__ttl-sp open"><div>A株式会社</div><small class="arrow"></small></td>
													<td data-label="部署名"><div>M営業所</div></td>
													<td data-label="住所"><div></div></td>
													<td data-label="電話番号"><div></div></td>
													<td data-label="販売店追加" class="c_txt-center">
														<div>
															<div class="c_checkbox">
															<input type="checkbox" id="checkoption01" name="checkoption01" value="" checked>
															<label for="checkoption01"></label>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="pc-only"><div>2</div></td>
													<td class="c_table__ttl-sp open"><div>株式会社B</div><small class="arrow"></small></td>
													<td data-label="部署名"><div>N営業所</div></td>
													<td data-label="住所"><div></div></td>
													<td data-label="電話番号"><div></div></td>
													<td data-label="販売店追加" class="c_txt-center">
														<div>
															<div class="c_checkbox">
															<input type="checkbox" id="checkoption02" name="checkoption02" value="" checked>
															<label for="checkoption02"></label>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="pc-only"><div>3</div></td>
													<td class="c_table__ttl-sp"><div>D有限会社</div><small class="arrow"></small></td>
													<td data-label="部署名"><div>P営業所</div></td>
													<td data-label="住所"><div></div></td>
													<td data-label="電話番号"><div></div></td>
													<td data-label="販売店追加" class="c_txt-center">
														<div>
															<div class="c_checkbox">
															<input type="checkbox" id="checkoption03" name="checkoption03" value="" checked>
															<label for="checkoption03"></label>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="pc-only"><div>4</div></td>
													<td class="c_table__ttl-sp"><div>サービス</div><small class="arrow"></small></td>
													<td data-label="部署名"><div></div></td>
													<td data-label="住所"><div></div></td>
													<td data-label="電話番号"><div></div></td>
													<td data-label="販売店追加" class="c_txt-center">
														<div>
															<div class="c_checkbox">
															<input type="checkbox" id="checkoption04" name="checkoption04" value="" checked>
															<label for="checkoption04"></label>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="pc-only"><div>5</div></td>
													<td class="c_table__ttl-sp"><div>リホールディングス</div><small class="arrow"></small></td>
													<td data-label="部署名"><div>乙支店</div></td>
													<td data-label="住所"><div></div></td>
													<td data-label="電話番号"><div></div></td>
													<td data-label="販売店追加" class="c_txt-center">
														<div>
															<div class="c_checkbox">
															<input type="checkbox" id="checkoption05" name="checkoption05" value="" checked>
															<label for="checkoption05"></label>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="pc-only"><div>6</div></td>
													<td class="c_table__ttl-sp"><div>K物流</div><small class="arrow"></small></td>
													<td data-label="部署名"><div></div></td>
													<td data-label="住所"><div></div></td>
													<td data-label="電話番号"><div></div></td>
													<td data-label="販売店追加" class="c_txt-center">
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