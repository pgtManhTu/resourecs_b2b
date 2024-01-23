<!DOCTYPE html>
<html lang="ja">
<?php set_include_path('../'); ?>
<?php include('elements/head.php'); ?>

<body>
  <div class="clearfix">
    <div class="f_main-area">
      <?php include('elements/sidebar-agency.php'); ?>

      <main class="l_main">
        <?php include('elements/header-acess.php'); ?>
        <?php include('elements/header.php'); ?>

        <div class="p_main-content">

          <div class="p_main-content__hdng">
            <div class="left">
              <h2 class="c_hdng3">タスク一覧 (1-1)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">ダッシュボード</a></li>
                <li class="current">タスク一覧</li>
              </ul>
            </div>
          </div>

          <form class="p_search-box">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="検索テキストを入力する">
            </div>
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
          </form>

          <div class="c_table-list p_table-tasklist p_table-sp-group">
            <table class="c_table-list__inner">
              <thead>
                <tr>
                    <th>区分</th>
                    <th>商品名</th>
                    <th>型番</th>
                    <th>期日</th>
                    <th class="c_txt-center">ステータス</th>
                    <th class="c_txt-center">詳細</th>
                </tr>
              </thead>
              <tbody style="order: 1;" class="w-sp-ttl open"><!-- on mobile, just add/remove the class "open" to show/hide the content  -->
                <tr>
                    <td class="c_table__ttl-sp">
                      <div>見積依頼</div>
                      <small class="arrow"></small>
                    </td>
                    <td data-label="商品名" class="c_hlight"><div>マスク</div></td>
                    <td data-label="型番"><div>AB-001</div></td>
                    <td data-label="期日"><div>10/7</div></td>
                    <td data-label="ステータス" class="c_txt-center"><div><span class="c_status" data-user-status="2">未作成</span></div></td>
                    <td data-label="詳細" class="c_txt-center"><div><a href="">詳細</a></div></td>
                </tr>
              </tbody>
              <tbody style="order: 3;" class="w-sp-ttl open"><!-- on mobile, just add/remove the class "open" to show/hide the content  -->
                <tr>
                    <td class="c_table__ttl-sp">
                      <div>注文</div>
                      <small class="arrow"></small>
                    </td>
                    <td data-label="商品名" class="c_hlight"><div>手袋</div></td>
                    <td data-label="型番"><div>B-XYZ002</div></td>
                    <td data-label="期日"><div>10/7</div></td>
                    <td data-label="ステータス"><div><span class="c_status" data-user-status="4">手配中</span></div></td>
                    <td data-label="詳細" class="c_txt-center"><div><a href="">詳細</a></div></td>
                </tr>
              </tbody>
              <tbody style="order: 2;" class="sub-1">
                <tr>
                    <td class="c_table__ttl-sp"><div>見積依頼</div></td>
                    <td data-label="商品名" class="c_hlight"><div>検査キット</div></td>
                    <td data-label="型番"><div>B-A001</div></td>
                    <td data-label="期日"><div>10/3</div></td>
                    <td data-label="ステータス"><div><span class="c_status" data-user-status="3">承認待ち</span></div></td>
                    <td data-label="詳細" class="c_txt-center"><div><a href="">詳細</a></div></td>
                </tr>
              </tbody>
              <tbody style="order: 4;" class="sub-3">
                <tr>
                    <td class="c_table__ttl-sp"><div>注文</div></td>
                    <td data-label="商品名" class="c_hlight"><div>試験紙</div></td>
                    <td data-label="型番"><div>X-001</div></td>
                    <td data-label="期日"><div><span class="fire">9/30</span></div></td>
                    <td data-label="ステータス"><div><span class="c_status" data-user-status="1">発送待ち</span></div></td>
                    <td data-label="詳細" class="c_txt-center"><div><a href="">詳細</a></div></td>
                </tr>
              </tbody>
            </table><!-- end of inner -->
          </div><!-- end of c_table -->
          

          <div class="p_sales-news">
            <h4 class="p_sales-news__ttl">売上速報</h4>
            <div class="p_sales-news__box">


            </div>
          </div>


        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>