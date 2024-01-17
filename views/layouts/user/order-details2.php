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
              <h2 class="c_hdng3">注文詳細 (2-3)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">注文管理</a></li>
                <li class="current">注文詳細(0001)</li>
              </ul>
            </div>
          </div>

          <form class="p_search-box">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="検索テキストを入力する">
            </div>
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
          </form>

          <h4 class="p_order-ttl">注文番号：0001 (プライベートカタログ)</h4>

          <div class="c_table-list p_table-order-details">
            <table class="c_table-list__inner">
              <tr class="row title">
                <th>商品名</th>
                <th>発注先</th>
                <th>数量</th>
                <th>単価</th>
                <th>金額</th>
                <th class="c_txt-center">詳細</th>
              </tr>
              <tr>
                <td>検査キット（B-A001）</td>
                <td>株式会社ABC</td>
                <td>1</td>
                <td>5,000</td>
                <td>5,000</td>
                <td><button class="c_btn c_btn-active primary">チャット</button></td>
              </tr>
              <tr>
                <td>試験紙 (X-001)</td>
                <td>カンパニー987</td>
                <td>1</td>
                <td>1,400</td>
                <td>1,400</td>
                <td><button class="c_btn c_btn-active primary">チャット</button></td>
              </tr>
              <tr>
                <td>合計</td>
                <td></td>
                <td></td>
                <td></td>
                <td>6,400</td>
                <td></td>
              </tr>
            </table><!-- end of inner -->
          </div><!-- end of c_table -->

          <div class="p_order-note">
            <h4 class="p_sales-news__ttl">注記</h4>
            <textarea name="" id="" cols="30" rows="10" placeholder="Note"></textarea>
          </div>

          <div class="c_txt-right p_form-create__btns">
            <button class="c_btn secondary">今すぐ注文</button>
            <button class="c_btn secondary">再見積もり</button>
            <button class="c_btn primary">戻ってくる</button>
          </div>

        </div>


    </div><!-- End of p_main-content -->

    </main>
  </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>