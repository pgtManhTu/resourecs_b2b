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
              <h2 class="c_hdng3">運営管理画面 (5-3)</h2>
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
                <li><a href="#create_announcement" class="current">お知らせ作成</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>

              <div id="" class="p_tabs__content">
                <div class="p_tabs__content-details p_table-oms2">

                  <div class="c_table c_table-inputs">
                    <div class="c_table__scroll c_scrollbar">
                      <table class="c_table__inner">
                        <tbody>
                          <tr>
                              <th>タイトル</th>
                              <th>公開期間：</th>
                              <th>公開期間：</th>
                              <th>表示/非表示</th>
                          </tr>
                          <tr>
                              <td class="sp-only c_table__ttl-sp open"><!-- on mobile, just add/remove the class "open" to show/hide the content  -->
                                <div>新機能のお知らせ</div>
                                <small class="arrow"></small>
                                </td>
                              <td data-label="タイトル">
                                <div><input type="text" name="" value=""></div>
                              </td>
                              <td data-label="公開期間">
                                <div><input type="text" name="" value=""></div>
                              </td>
                              <td data-label="公開期間">
                                <div><input type="text" name="" value=""></div>
                              </td>
                              <td data-label="表示/非表示" class="p_table-oms2__spec">
                                <div>
                                  <div class="c_select">
                                    <select id="" name="" form="">
                                      <option value="">表示</option>
                                      <option value="">非表示</option>
                                    </select>
                                  </div>
                                </div>
                              </td>
                              <td class="p_table-oms2__txtarea">
                                <div class="p_form-ulist p_w-med">
                                  <div class="item">
                                    <label for="text">本文</label>
                                    <textarea name="text" id="" ></textarea>
                                  </div>
                                </div>
                              </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="c_txt-right">
                    <button class="c_btn c_btn-active primary p_tabs_btn-update">更新する</button>
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