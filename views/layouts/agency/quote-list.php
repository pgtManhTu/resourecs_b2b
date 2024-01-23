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
              <h2 class="c_hdng3">見積一覧 (2-1)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">見積管理</a></li>
                <li class="current">見積一覧</li>
              </ul>
            </div>
          </div>

          <ul class="p_links">
            <li><a href="">見積の依頼が来ています。</a></li>
            <li><a href="">スレッドに未読のメッセージがあります</a></li>
          </ul>

          <form class="p_search-box w-dates">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="検索テキストを入力する">
            </div>
            <div class="p_search-box__dates">
              <div class="item w-icon">
                <input type="date" name="" value="12/10/2024">
                <i class="calendar"></i>
              </div>
              <small class="p_colon">:</small>
              <div class="item w-icon">
                <input type="date" name="" value="12/10/2024">
                <i class="calendar"></i>
              </div>
            </div>
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
          </form>

          <div class="c_table-list p_table-estimate">
            <div class="c_table__scroll c_scrollbar">
              <table class="c_table-list__inner">
              <tr>
                <th class="c_txt-center">ステータス</th>
                <th>見積回答期限</th>
                <th>見積番号</th>
                <th>見積依頼日</th>
                <th>顧客名</th>
                <th>顧客依頼者名</th>
                <th>商品名</th>
                <th>型番</th>
                <th>メーカー名</th>
                <th>数量</th>
              </tr>
              <tr>
                <td class="sp-only c_table__ttl-sp open"><!-- on mobile, just add/remove the class "open" to show/hide the content  -->
                  <div>M001-S0001</div>
                  <small class="arrow"></small>
                </td>
                <td data-label="商品名" class="sp-only c_hlight"><div>マスク</div></td>
                <td data-label="ステータス"><div><span class="c_status" data-user-status="4">見積中</span></div></td>
                <td data-label="見積回答期限"><div>10/12/2023</div></td>
                <td data-label="見積番号" class="pc-only"><div>M001-S0001</div></td>
                <td data-label="見積依頼日"><div>10/12/2023</div></td>
                <td data-label="顧客名"><div>西田裕二</div></td>
                <td data-label="顧客依頼者名"><div>石川祐希</div></td>
                <td data-label="商品名" class="pc-only"><div>マスク</div></td>
                <td data-label="型番"><div>AB001</div></td>
                <td data-label="メーカー名"><div>武田</div></td>
                <td data-label="数量"><div>2</div></td>
              </tr>
              <tr>
                <td class="sp-only c_table__ttl-sp">
                  <div>M001-S0002</div>
                  <small class="arrow"></small>
                </td>
                <td data-label="商品名" class="sp-only c_hlight"><div>手袋</div></td>
                <td data-label="ステータス"><div><span class="c_status" data-user-status="3">回答あり</span></div></td>
                <td data-label="見積回答期限"><div>16/10/2023</div></td>
                <td data-label="見積番号" class="pc-only"><div>M001-S0002</div></td>
                <td data-label="見積依頼日"><div>10/12/2023</div></td>
                <td data-label="顧客名"><div>石川祐希</div></td>
                <td data-label="顧客依頼者名"><div>関石川祐希</div></td>
                <td data-label="商品名" class="pc-only"><div>手袋</div></td>
                <td data-label="型番"><div>AB002</div></td>
                <td data-label="メーカー名"><div>ファイザー</div></td>
                <td data-label="数量"><div>3</div></td>
              </tr>
              <tr>
                <td class="sp-only c_table__ttl-sp">
                  <div>S0003</div>
                  <small class="arrow"></small>
                </td>
                <td data-label="商品名" class="sp-only c_hlight"><div>検査キット</div></td>
                <td data-label="ステータス"><div><span class="c_status" data-user-status="1">見積あり</span></div></td>
                <td data-label="見積回答期限"><div>16/10/2023</div></td>
                <td data-label="見積番号" class="pc-only"><div>S0003</div></td>
                <td data-label="見積依頼日"><div>10/11/2023</div></td>
                <td data-label="顧客名"><div>高橋蘭</div></td>
                <td data-label="顧客依頼者名"><div>西田裕二</div></td>
                <td data-label="商品名" class="pc-only"><div>検査キット</div></td>
                <td data-label="型番"><div>AB004</div></td>
                <td data-label="メーカー名"><div>吉村製作所</div></td>
                <td data-label="数量"><div>1</div></td>
              </tr>
              <tr>
                <td class="sp-only c_table__ttl-sp">
                  <div>S0004</div>
                  <small class="arrow"></small>
                </td>
                <td data-label="商品名" class="sp-only c_hlight"><div>試験紙</div></td>
                <td data-label="ステータス"><div><span class="c_status" data-user-status="2">終了</span></div></td>
                <td data-label="見積回答期限"><div>16/10/2023</div></td>
                <td data-label="見積番号" class="pc-only"><div>S0004</div></td>
                <td data-label="見積依頼日"><div>10/11/2023</div></td>
                <td data-label="顧客名"><div>関田正裕</div></td>
                <td data-label="顧客依頼者名"><div>石川祐希</div></td>
                <td data-label="商品名" class="pc-only"><div>試験紙</div></td>
                <td data-label="型番"><div>AB005</div></td>
                <td data-label="メーカー名"><div>リトマス株式会社</div></td>
                <td data-label="数量"><div>2</div></td>
              </tr>
              </table><!-- end of inner -->
            </div><!-- end of c_table__scroll -->
          </div><!-- end of c_table -->

          


        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>