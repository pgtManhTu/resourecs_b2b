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

          <div class="c_table-list p_table-tasklist">
            <table class="c_table-list__inner">
              <tr class="row title">
                <th>区分</th>
                <th>商品名</th>
                <th>型番</th>
                <th>期日</th>
                <th class="c_txt-center">ステータス</th>
                <th class="c_txt-center">詳細</th>
              </tr>
              <tr class="row">
                <td>見積依頼</td>
                <td>マスク</td>
                <td>AB-001</td>
                <td>10/7</td>
                <td><span class="c_status" data-user-status="2">未作成</span></td>
                <td class="c_txt-center"><a href="">詳細</a></td>
              </tr>
              <tr class="row">
                <td>注文</td>
                <td>手袋</td>
                <td>B-XYZ002</td>
                <td>10/7</td>
                <td><span class="c_status" data-user-status="4">手配中</span></td>
                <td class="c_txt-center"><a href="">詳細</a></td>
              </tr>
              <tr class="row">
                <td>見積依頼</td>
                <td>検査キット</td>
                <td>B-A001</td>
                <td>10/3</td>
                <td><span class="c_status" data-user-status="3">承認待ち</span></td>
                <td class="c_txt-center"><a href="">詳細</a></td>
              </tr>
              <tr class="row">
                <td>注文</td>
                <td>試験紙</td>
                <td>X-001</td>
                <td><span class="fire">9/30</span></td>
                <td><span class="c_status" data-user-status="1">発送待ち</span></td>
                <td class="c_txt-center"><a href="">詳細</a></td>
              </tr>
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