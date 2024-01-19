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

                  <div class="c_table c_table-inputs">
                    <div class="c_table__scroll c_scrollbar">
                      <table class="c_table__inner">
                        <tbody>
                          <tr>
                              <th>ユーザー名</th>
                              <th>メールアドレス</th>
                              <th>パスワード</th>
                              <th>権限</th>
                              <th>アカウント</th>
                          </tr>
                          <tr>
                              <td class="sp-only c_table__ttl-sp open"><!-- on mobile, just add/remove the class "open" to show/hide the content  -->
                                <div>山田 太朗</div>
                                <small class="arrow"></small>
                              </td>
                              <td data-label="ユーザー名"><div><input type="text" id="" name="" placeholder="" value="山田 太朗"></div></td>
                              <td data-label="メールアドレス"><div><input type="email" id="" name="" placeholder="" value="kanri@gmail.com"></div></div></td>
                              <td data-label="パスワード">
                                <div class="item w-icon">
                                  <input type="text" name="" value="*********">
                                  <i class="eye-off"></i>
                                </div>
                              </td>
                              <td data-label="権限">
                                <div>
                                  <div class="c_select">
                                    <select id="" name="" form="">
                                      <option value="">管理者</option>
                                      <option value="">一般</option>
                                    </select>
                                  </div>
                                </div>
                              </td>
                              <td data-label="アカウント">
                                <div>
                                  <div class="c_select">
                                    <select id="" name="" form="">
                                      <option value="">有効</option>
                                      <option value="">有効</option>
                                    </select>
                                  </div>
                                </div>
                              </td>
                          </tr>
                          <tr>
                              <td class="sp-only c_table__ttl-sp open"><!-- on mobile, just add/remove the class "open" to show/hide the content  -->
                                <div>中山 二郎</div>
                                <small class="arrow"></small>
                              </td>
                              <td data-label="ユーザー名"><div><input type="text" id="" name="" placeholder="" value="中山 二郎"></div></td>
                              <td data-label="メールアドレス"><div><input type="email" id="" name="" placeholder="" value="soumu@gmail.com"></div></div></td>
                              <td data-label="パスワード">
                                <div class="item w-icon">
                                  <input type="text" name="" value="*********">
                                  <i class="eye-off"></i>
                                </div>
                              </td>
                              <td data-label="権限">
                                <div>
                                  <div class="c_select">
                                    <select id="" name="" form="">
                                      <option value="">一般</option>
                                      <option value="">管理者</option>
                                    </select>
                                  </div>
                                </div>
                              </td>
                              <td data-label="アカウント">
                                <div>
                                  <div class="c_select">
                                    <select id="" name="" form="">
                                      <option value="">有効</option>
                                      <option value="">有効</option>
                                    </select>
                                  </div>
                                </div>
                              </td>
                          </tr>
                          <tr>
                              <td class="sp-only c_table__ttl-sp open"><!-- on mobile, just add/remove the class "open" to show/hide the content  -->
                                <div>中山 二郎</div>
                                <small class="arrow"></small>
                              </td>
                              <td data-label="ユーザー名"><div><input type="text" id="" name="" placeholder="" value="中山 二郎"></div></td>
                              <td data-label="メールアドレス"><div><input type="email" id="" name="" placeholder="" value="soumu@gmail.com"></div></div></td>
                              <td data-label="パスワード">
                                <div class="item w-icon">
                                  <input type="text" name="" value="*********">
                                  <i class="eye-off"></i>
                                </div>
                              </td>
                              <td data-label="権限">
                                <div>
                                  <div class="c_select">
                                    <select id="" name="" form="">
                                      <option value="">一般</option>
                                      <option value="">管理者</option>
                                    </select>
                                  </div>
                                </div>
                              </td>
                              <td data-label="アカウント">
                                <div>
                                  <div class="c_select">
                                    <select id="" name="" form="">
                                      <option value="">有効</option>
                                      <option value="">有効</option>
                                    </select>
                                  </div>
                                </div>
                              </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <button class="c_btn c_btn-active primary p_table-inputs__btn-add">アカウントを追加する</button>
                  <div class="c_txt-right pad-right c_table-inputs__btn-up">
                    <button class="c_btn c_btn-active primary">更新する</button>
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