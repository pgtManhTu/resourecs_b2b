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
                  <td><span class="c_status" data-user-status="1">発送済</span></td>
                  <td>19/12/2023</td>
                  <td>243254</td>
                  <td>12/12/2023</td>
                  <td>西田裕二</td>
                  <td>関田正裕</td>
                  <td>結晶皿 3140-100</td>
                  <td>A5767</td>
                  <td>武田</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td><span class="c_status" data-user-status="3">承認待</span></td>
                  <td>19/12/2023</td>
                  <td>465657</td>
                  <td>12/12/2023</td>
                  <td>石川祐希</td>
                  <td>高橋蘭</td>
                  <td>卓上ハイスピン遠心機 D3024</td>
                  <td>B6784</td>
                  <td>ファイザー</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td><span class="c_status" data-user-status="4">見積中</span></td>
                  <td>19/12/2023</td>
                  <td>446763</td>
                  <td>12/12/2023</td>
                  <td>高橋蘭</td>
                  <td>石川祐希</td>
                  <td>バランスディッシュ BD-1 千入</td>
                  <td>C7954</td>
                  <td>吉村製作所</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td><span class="c_status" data-user-status="1">発送済</span></td>
                  <td>16/12/2023</td>
                  <td>768351</td>
                  <td>12/12/2023</td>
                  <td>関田正裕</td>
                  <td>石川祐希</td>
                  <td>バランスディッシュ BD-1 千入</td>
                  <td>D8675</td>
                  <td>吉村製作所</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td><span class="c_status" data-user-status="3">承認待</span></td>
                  <td>16/12/2023</td>
                  <td>454769</td>
                  <td>12/12/2023</td>
                  <td>石川祐希</td>
                  <td>高橋蘭</td>
                  <td>ビーカー20m</td>
                  <td>E6326</td>
                  <td>武田</td>
                  <td>1</td>
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