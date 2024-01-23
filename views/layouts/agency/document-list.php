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
              <h2 class="c_hdng3">帳票類一覧(6-1)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">帳票類一覧</a></li>
                <li class="current">帳票類一覧</li>
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
                <td rowspan="2" class="c_txt-center c_table__ttl-sp open"><!-- on mobile, just add/remove the class "open" to show/hide the content  -->
                  <div>0002（見積）</div>
						      <small class="arrow"></small>
                </td>
                <td data-label="商品名" class="c_hlight"><div>マスク</div></td>
                <td data-label="型番"><div>AB-001</div></td>
                <td data-label="数量"><div>2</div></td>
                <td data-label="発注先"><div>大阪大学</div></td>
                <td data-label="詳細"><div><a href="">納品書 * 請求書</a></div></td>
              </tr>
              <tr>
                <td data-label="商品名" class="c_hlight"><div>手袋</div></td>
                <td data-label="型番"><div>B-XYZ002</div></td>
                <td data-label="数量"><div>3</div></td>
                <td data-label="発注先"><div>大阪大学</div></td>
                <td data-label="詳細"><div><a href="">納品書 * 請求書</a></div></td>
              </tr>
              <tr>
                <td rowspan="2" class="c_txt-center c_table__ttl-sp open">
                  <div>0001（カタログ）</div>
						      <small class="arrow"></small>
                </td>
                <td data-label="商品名" class="c_hlight"><div>検査キット</div></td>
                <td data-label="型番"><div>B-A001</div></td>
                <td data-label="数量"><div>1</div></td>
                <td data-label="発注先"><div>大阪大学</div></td>
                <td data-label="詳細"><div><a href="">納品書 * 請求書</a></div></td>
              </tr>
              <tr>
                <td data-label="商品名" class="c_hlight"><div>試験紙</div></td>
                <td data-label="型番"><div>X-001</div></td>
                <td data-label="数量"><div>1</div></td>
                <td data-label="発注先"><div>大阪大学</div></td>
                <td data-label="詳細"><div><a href="">納品書 * 請求書</a></div></td>
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