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
              <h2 class="c_hdng3">運営管理画面 (5-2)</h2>
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
                <li><a href="#list_announcement" class="current">お知らせ一覧</a></li>
                <li><a href="#create_announcement">お知らせ作成</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>

              <div id="list_user" class="p_tabs__content">
                <div class="p_tabs__content-details">
                  <div class="c_table p_table-oms">
                    <div class="c_table-list secondary c_scrollbar">
                      <table class="c_table-list__inner">
                        <tbody>
                          <tr class="row title">
                            <th>日付</th>
                            <th>お知らせタイトル</th>
                            <th>公開期間</th>
                            <th>公開範囲</th>
                            <th>表示/非表示</th>
                            <th>編集</th>
                          </tr>
                          <tr>
                              <td class="c_table__ttl-sp open">
                                <div>10/10</div>
                                <small class="arrow"></small>
                              </td>
                              <td data-label="お知らせタイトル" class="c_hlight"><div>新機能のお知らせ</div></td>
                              <td data-label="公開期間"><div>10/10 13:00 ~ <br>12/10:23:59</div></td>
                              <td data-label="公開範囲"><div>顧客</div></td>
                              <td data-label="表示/非表示"><div>表示</div></td>
                              <td data-label="編集"><div><a href="">編集</a></div></td>
                          </tr>
                          <tr>
                              <td class="c_table__ttl-sp open">
                                <div>9/10</div>
                                <small class="arrow"></small>
                              </td>
                              <td data-label="お知らせタイトル" class="c_hlight"><div>メンテナンスのお知らせ</div></td>
                              <td data-label="公開期間"><div>9/10 13:00 ~ <br>9/10:23:59</div></td>
                              <td data-label="公開範囲"><div>全体</div></td>
                              <td data-label="表示/非表示"><div>全体</div></td>
                              <td data-label="編集"><div><a href="">編集</a></div></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
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