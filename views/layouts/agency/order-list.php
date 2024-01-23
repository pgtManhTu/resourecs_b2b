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
              <h2 class="c_hdng3">注文一覧 (5-1)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">注文管理</a></li>
                <li class="current">注文一覧</li>
              </ul>
            </div>
          </div>

          <ul class="p_links">
            <li><a href="">納期が3日後の商品があります (0001)</a></li>
            <li><a href="">スレッドに未読のメッセージがあります</a></li>
          </ul>

          <form class="p_search-box">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="検索テキストを入力する">
            </div>
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
          </form>

          <div class="c_table-list p_table-estimate">
            <div class="c_table__scroll c_scrollbar">
              <table class="c_table-list__inner">
                <tr>
                  <th class="c_txt-center">ステータス</th>
                  <th>納入期限</th>
                  <th>注文管理番号</th>
                  <th>注文依頼日</th>
                  <th>顧客名</th>
                  <th>顧客依頼者名</th>
                  <th>商品名</th>
                  <th>型番</th>
                  <th>メーカー名</th>
                  <th>数量</th>
                </tr>
                <tr>
                  <td data-label="注文管理番号:" class="sp-only c_table__ttl-sp open">
                    <div>243254</div>
						        <small class="arrow"></small>
                  </td>
                  <td data-label="顧客名" class="sp-only c_hlight"><div>西田裕二</div></td>
                  <td data-label="ステータス"><div><span class="c_status" data-user-status="1">発送済</span></div></td>
                  <td data-label="納入期限"><div>19/12/2023</div></td>
                  <td data-label="注文管理番号" class="pc-only"><div>243254</div></td>
                  <td data-label="注文依頼日"><div>12/12/2023</div></td>
                  <td data-label="顧客名" class="pc-only"><div>西田裕二</div></td>
                  <td data-label="顧客依頼者名"><div>関田正裕</div></td>
                  <td data-label="商品名"><div>結晶皿 3140-100</div></td>
                  <td data-label="型番"><div>A5767</div></td>
                  <td data-label="メーカー名"><div>武田</div></td>
                  <td data-label="数量"><div>1</div></td>
                </tr>
                <tr>
                  <td data-label="注文管理番号:" class="sp-only c_table__ttl-sp">
                    <div>465657</div>
						        <small class="arrow"></small>
                  </td>
                  <td data-label="顧客名" class="sp-only c_hlight"><div>石川祐希</div></td>
                  <td data-label="ステータス"><div><span class="c_status" data-user-status="3">承認待</span></div></td>
                  <td data-label="納入期限"><div>19/12/2023</div></td>
                  <td data-label="注文管理番号" class="pc-only"><div>465657</div></td>
                  <td data-label="注文依頼日"><div>12/12/2023</div></td>
                  <td data-label="顧客名" class="pc-only"><div>石川祐希</div></td>
                  <td data-label="顧客依頼者名"><div>高橋蘭</div></td>
                  <td data-label="商品名"><div>卓上ハイスピン遠心機 D3024</div></td>
                  <td data-label="型番"><div>B6784</div></td>
                  <td data-label="メーカー名"><div>ファイザー</div></td>
                  <td data-label="数量"><div>1</div></td>
                </tr>
                <tr>
                  <td data-label="注文管理番号:" class="sp-only c_table__ttl-sp">
                    <div>446763</div>
						        <small class="arrow"></small>
                  </td>
                  <td data-label="顧客名" class="sp-only c_hlight"><div>高橋蘭</div></td>
                  <td data-label="ステータス"><div><span class="c_status" data-user-status="4">見積中</span></div></td>
                  <td data-label="納入期限"><div>19/12/2023</div></td>
                  <td data-label="注文管理番号" class="pc-only"><div>446763</div></td>
                  <td data-label="注文依頼日"><div>12/12/2023</div></td>
                  <td data-label="顧客名" class="pc-only"><div>高橋蘭</div></td>
                  <td data-label="顧客依頼者名"><div>石川祐希</div></td>
                  <td data-label="商品名"><div>バランスディッシュ BD-1 千入</div></td>
                  <td data-label="型番"><div>C7954</div></td>
                  <td data-label="メーカー名"><div>吉村製作所</div></td>
                  <td data-label="数量"><div>1</div></td>
                </tr>
                <tr>
                  <td data-label="注文管理番号:" class="sp-only c_table__ttl-sp">
                    <div>768351</div>
						        <small class="arrow"></small>
                  </td>
                  <td data-label="顧客名" class="sp-only c_hlight"><div>関田正裕</div></td>
                  <td data-label="ステータス"><div><span class="c_status" data-user-status="1">発送済</span></div></td>
                  <td data-label="納入期限"><div>16/12/2023</div></td>
                  <td data-label="注文管理番号" class="pc-only"><div>768351</div></td>
                  <td data-label="注文依頼日"><div>12/12/2023</div></td>
                  <td data-label="顧客名" class="pc-only"><div>関田正裕</div></td>
                  <td data-label="顧客依頼者名"><div>石川祐希</div></td>
                  <td data-label="商品名"><div>バランスディッシュ BD-1 千入</div></td>
                  <td data-label="型番"><div>D8675</div></td>
                  <td data-label="メーカー名"><div>吉村製作所</div></td>
                  <td data-label="数量"><div>1</div></td>
                </tr>
                <tr>
                  <td data-label="注文管理番号:" class="sp-only c_table__ttl-sp">
                    <div>454769</div>
						        <small class="arrow"></small>
                  </td>
                  <td data-label="顧客名" class="sp-only c_hlight"><div>石川祐希</div></td>
                  <td data-label="ステータス"><div><span class="c_status" data-user-status="3">承認待</span></div></td>
                  <td data-label="納入期限"><div>16/12/2023</div></td>
                  <td data-label="注文管理番号" class="pc-only"><div>454769</div></td>
                  <td data-label="注文依頼日"><div>12/12/2023</div></td>
                  <td data-label="顧客名" class="pc-only"><div>石川祐希</div></td>
                  <td data-label="顧客依頼者名"><div>高橋蘭</div></td>
                  <td data-label="商品名"><div>ビーカー20m</div></td>
                  <td data-label="型番"><div>E6326</div></td>
                  <td data-label="メーカー名"><div>武田</div></td>
                  <td data-label="数量"><div>1</div></td>
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