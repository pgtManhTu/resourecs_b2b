<!DOCTYPE html>
<html lang="ja">
  <?php set_include_path('../'); ?>
	<?php include('elements/head.php'); ?>

	<body>
		<div class="clearfix">
			<div class="f_main-area">

				<div class="p_login">
					<div class="p_login__cont">
						<div class="p_login__media"><img src="/resources/assets/img/login-img.png" alt="" /></div>
						<div class="p_login__info">
							<img class="p_login__logo" src="/resources/assets/img/main-logo.svg" alt="" />
							<div class="p_login__txt">おかえり！詳細を入力してください</div>
							<form class="p_login__form" action="/login" method="post" >
								<div class="item c_icon-l">
									<label for="username">メールアドレス</label>
									<input class="error" type="email" id="email" name="email" placeholder="大阪大学" required>
									<span class="error__message">*無効なユーザー名。もう一度試してください</span>
								</div>
								<div class="item c_icon-l">
									<label for="password">パスワード</label>
									<input type="password" id="password" name="password" placeholder="大阪大学" required>
									<span class="error__message">*無効なユーザー名。もう一度試してください</span>
								</div>
								<div class="item p_login__quest">
									<div class="c_checkbox w-label">
										<input type="checkbox" name="staylogin" id="staylogin" value="">
										<label for="staylogin">ログイン状態を保持</label>
									</div>
									<a class="p_login__forgot" href="">パスワードを忘れた</a>
								</div>

								<button type="submit" class="c_btn primary p_login__btn">ログイン</button>
							</form>

							<a class="p_login__cntlogin" href="">ログインできない場合はこちら</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</body>
	
</html>


