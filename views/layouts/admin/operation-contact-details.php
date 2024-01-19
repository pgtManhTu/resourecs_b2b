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
              <h2 class="c_hdng3">運営管理画面 (5-4)</h2>
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
                  <?php include('_table-contact-list.php'); ?>
                </div>
              </div>

              <!-- Edit Customer Modal -->
              <div class="p_modal show">
                <div class="p_modal__form p_modal__form-cd">
                  <button class="c_btn-icon close"></button>
                  <div class="p_modal__scroll c_scrollbar">
                    <div class="inner">
                      <div class="item">
                        <label for="">送信者ID</label>
                        <input type="text" name="" value="313567378">
                      </div>
                      <div class="item">
                        <label for="">連絡担当者</label>
                        <input type="text" name="" value="石川祐希">
                      </div>
                      <div class="item">
                        <label for="">タイトル</label>
                        <input type="text" id="" name="" value="製品価格">
                      </div>
                      <div class="item">
                        <label for="">連絡日</label>
                        <input type="text" name="" value="12/10/2023">
                      </div>
                      <div class="item">
                        <label for="">応答タイプ</label>
                        <input type="text" name="" value="質問">
                      </div>
                      <div class="item">
                        <label for="">郵便番号</label>
                        <input type="text" name="" value="1635738">
                      </div>
                      <div class="item">
                        <label for="">住所</label>
                        <input type="text" name="" value="大阪市北区豊崎">
                      </div>
                      <div class="item">
                        <label for="">電話番号</label>
                        <input type="text" name="" value="06-1234-1234">
                      </div>
                      <div class="item">
                        <label for="">FAX番号</label>
                        <input type="text" name="" value="0612341234">
                      </div>
                      <div class="item">
                        <label for="">E-mail</label>
                        <input type="email" name="" value="Nakayama@gmail.com">
                      </div>
                    </div>
                  </div>
                  <div class="p_modal__btns">
                    <button class="c_btn c_btn-active primary close_btn">近い</button>
                  </div>
                </div>
              </div>


              <div class="c_txt-right">
                <button class="c_btn c_btn-active primary p_tabs_btn-update">更新する</button>
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