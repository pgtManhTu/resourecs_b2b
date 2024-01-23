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
              <h2 class="c_hdng3">注文詳細(5-3)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">注文管理</a></li>
                <li class="current">注文詳細 No.5</li>
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
                <td data-label="商品名" class="c_table__ttl-sp open"><!-- on mobile, just add/remove the class "open" to show/hide the content  -->
                  <div>検査キット（B-A001）</div>
						      <small class="arrow"></small>
                </td>
                <td data-label="発注先" class="c_hlight"><div>株式会社ABC</div></td>
                <td data-label="数量"><div>1</div></td>
                <td data-label="単価"><div>5,000</div></td>
                <td data-label="金額"><div>5,000</div></td>
                <td data-label="詳細"><div><button class="c_btn c_btn-active primary">チャット</button></div></td>
              </tr>
              <tr>
                <td data-label="商品名" class="c_table__ttl-sp open">
                  <div>試験紙 (X-001)</div>
						      <small class="arrow"></small>
                </td>
                <td data-label="発注先" class="c_hlight"><div>カンパニー987</div></td>
                <td data-label="数量"><div>1</div></td>
                <td data-label="単価"><div>1,400</div></td>
                <td data-label="金額"><div>1,400</div></td>
                <td data-label="詳細"><div><button class="c_btn c_btn-active primary">チャット</button></div></td>
              </tr>
              <tr class="pc-only">
                <td><div>合計</div></td>
                <td><div></div></td>
                <td><div></div></td>
                <td><div></div></td>
                <td><div>6,400</div></td>
                <td><div></div></td>
              </tr>
            </table><!-- end of inner -->
          </div><!-- end of c_table -->

          <div class="p_table-order__total sp-only">
            <span class="label">合計</span>
            <span class="amount">6,400</span>
          </div>

          <div class="p_order-note">
            <h4 class="p_sales-news__ttl">注記</h4>
            <textarea name="" id="" cols="30" rows="10" placeholder="Note"></textarea>
          </div>

          <div class="c_txt-right p_form-create__btns">
            <button class="c_btn primary">チャット</button>
            <button class="c_btn primary">更新する</button>
          </div>

        </div><!-- End of p_main-content -->

    </main>
  </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>