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

          <div class="p_main-content__hdng">
            <div class="left">
              <h2 class="c_hdng3">ドキュメント一覧 (3-1)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">ドキュメント管理</a></li>
                <li class="current">ドキュメント一覧</li>
              </ul>
            </div>
          </div>

          <form class="p_search-box">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="検索テキストを入力する">
            </div>
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
          </form>

          <div class="c_table-list">
            <table class="c_table-list__inner">
              <tr>
                <th class="c_txt-center">注文</th>
                <th>商品名</th>
                <th>型番</th>
                <th>数量</th>
                <th>発注先</th>
                <th>詳細</th>
              </tr>
              <tr>
                <td rowspan="2" class="c_txt-center">0002（見積）</td>
                <td>マスク</td>
                <td>AB-001</td>
                <td>2</td>
                <td>株式会社ABC</td>
                <td><a href="">納品書 * 請求書</a></td>
              </tr>
              <tr>
                <td>手袋</td>
                <td>B-XYZ002</td>
                <td>3</td>
                <td>XYZ株式会社</td>
                <td><a href="">納品書 * 請求書</a></td>
              </tr>
              <tr>
                <td rowspan="2" class="c_txt-center">0001（カタログ）</td>
                <td>検査キット</td>
                <td>B-A001</td>
                <td>1</td>
                <td>株式会社ABC</td>
                <td><a href="">納品書 * 請求書</a></td>
              </tr>
              <tr>
                <td>試験紙</td>
                <td>X-001</td>
                <td>1</td>
                <td>カンパニー987</td>
                <td><a href="">納品書 * 請求書</a></td>
              </tr>
            </table><!-- end of inner -->
          </div><!-- end of c_table -->

          <!-- Delivery Modal -->
          <?php include('_delivery-modal.php'); ?>


        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>