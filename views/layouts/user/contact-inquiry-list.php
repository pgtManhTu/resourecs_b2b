<!DOCTYPE html>
<html lang="ja">
<?php set_include_path('../'); ?>
<?php include('elements/head.php'); ?>

<body>
  <div class="clearfix">
    <div class="f_main-area">
      <?php include('elements/sidebar-user.php'); ?>

      <main class="l_main">
        <?php include('elements/header-acess.php'); ?>
        <?php include('elements/header.php'); ?>

        <div class="p_main-content">

          <div class="p_main-content__hdng p_align-center">
            <div class="left">
              <h2 class="c_hdng3">問合せ一覧 (4-1)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">お問合せ</a></li>
                <li class="current">問合せ一覧</li>
              </ul>
            </div>
            <div class="right">
              <button class="c_btn c_btn-active primary">新規問合せ作成</button>
            </div>
          </div>

          <ul class="p_links">
            <li><a href="">問合せに回答がありました (0002)</a></li>
            <li><a href="">問合せに回答がありました (0001)</a></li>
          </ul>

          <form class="p_search-box">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="検索テキストを入力する">
            </div>
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
          </form>

          <div class="c_table-list p_table-inquiry">
            <table class="c_table-list__inner">
              <tr>
                <th>問合せ</th>
                <th>日付</th>
                <th>問合せタイトル</th>
                <th>問合せ先</th>
                <th>詳細</th>
              </tr>
              <tr>
                <td>0002</td>
                <td>10/10</td>
                <td><span class="c_txt-red">(未読)</span> 商品の仕様についての質問</td>
                <td>株式会社ABC</td>
                <td><a href="">詳細</a></td>
              </tr>
              <tr>
                <td>0001</td>
                <td>10/08</td>
                <td>商品在庫の納期について</td>
                <td>XYZ株式会社</td>
                <td><a href="">詳細</a></td>
              </tr>
              <tr>
                <td>0003</td>
                <td>10/09</td>
                <td>商品在庫の納期について</td>
                <td>株式会社ABC</td>
                <td><a href="">詳細</a></td>
              </tr>
            </table><!-- end of inner -->
          </div><!-- end of c_table -->

        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>