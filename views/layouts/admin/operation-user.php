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
              <h2 class="c_hdng3">運営管理画面 (5-1)</h2>
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
                <li><a href="#list_user" class="current">ユーザー一覧</a></li>
                <li><a href="#list_announcement">お知らせ一覧</a></li>
                <li><a href="#create_announcement">お知らせ作成</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>

              <div id="list_user" class="p_tabs__content">
                <div class="p_tabs__content-details">
                  <div class="p_form-ulist__upper">
                    <div class="item">
                      <h2 class="p_form-ulist__ttl">ユーザー名</h2>
                    </div>
                    <div class="item">
                      <h2 class="p_form-ulist__ttl">メールアドレス</h2>
                    </div>
                    <div class="item">
                      <h2 class="p_form-ulist__ttl">権限</h2>
                    </div>
                    <div class="item">
                      <h2 class="p_form-ulist__ttl">アカウント</h2>
                    </div>
                  </div>
                  <div class="p_form-ulist p_w-input">
                    <div class="item">
                      <input type="text" id="" name="" value="山田　太朗"></input>
                    </div>
                    <div class="item">
                      <input type="text" id="" name="" value="kanri@gmail.com"></input>
                    </div>
                    <div class="item">
                      <div class="c_select">
                        <select id="" name="" form="">
                          <option value="">管理者</option>
                          <option value="">管理者</option>
                          <option value="">管理者</option>
                        </select>
                      </div>
                    </div>
                    <div class="item">
                      <div class="c_select">
                        <select id="" name="" form="">
                          <option value="">有効</option>
                          <option value="">有効</option>
                          <option value="">有効</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="p_form-ulist p_w-input">
                    <div class="item">
                      <input type="text" id="" name="" value="山田　太朗"></input>
                    </div>
                    <div class="item">
                      <input type="text" id="" name="" value="soumu@gmail.com"></input>
                    </div>
                    <div class="item">
                      <div class="c_select">
                        <select id="" name="" form="">
                          <option value="">一般</option>
                          <option value="">一般</option>
                          <option value="">一般</option>
                        </select>
                      </div>
                    </div>
                    <div class="item">
                      <div class="c_select">
                        <select id="" name="" form="">
                          <option value="">有効</option>
                          <option value="">有効</option>
                          <option value="">有効</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="p_form-ulist p_w-input">
                    <div class="item">
                      <input type="text" id="" name="" value="山田　太朗"></input>
                    </div>
                    <div class="item">
                      <input type="text" id="" name="" value="soumu@gmail.com"></input>
                    </div>
                    <div class="item">
                      <div class="c_select">
                        <select id="" name="" form="">
                          <option value="">一般</option>
                          <option value="">一般</option>
                          <option value="">一般</option>
                        </select>
                      </div>
                    </div>
                    <div class="item">
                      <div class="c_select">
                        <select id="" name="" form="">
                          <option value="">有効</option>
                          <option value="">有効</option>
                          <option value="">有効</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="p_form-ulist--left">
                    <button class="c_btn c_btn-active primary">アカウントを追加する</button>
                  </div>
                  <div class="c_txt-right"><button class="c_btn c_btn-active primary p_tabs_btn-update">更新する</button></div>
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