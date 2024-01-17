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

          <form class="p_search-box">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="検索テキストを入力する">
            </div>
            <div class="item w-icon">
              <input type="date" name="" value="12/10/2024">
              <i class="calendar"></i>
            </div>
            <div class="item w-icon">
              <input type="date" name="" value="12/10/2024">
              <i class="calendar"></i>
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
                  <td><span class="c_status" data-user-status="4">見積中</span></td>
                  <td>10/12/2023</td>
                  <td>M001-S0001</td>
                  <td>10/12/2023</td>
                  <td>西田裕二</td>
                  <td>石川祐希</td>
                  <td>マスク</td>
                  <td>AB001</td>
                  <td>武田</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td><span class="c_status" data-user-status="3">回答あり</span></td>
                  <td>16/10/2023</td>
                  <td>M001-S0002</td>
                  <td>10/12/2023</td>
                  <td>石川祐希</td>
                  <td>関石川祐希</td>
                  <td>手袋</td>
                  <td>AB002</td>
                  <td>ファイザー</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td><span class="c_status" data-user-status="1">見積あり</span></td>
                  <td>16/10/2023</td>
                  <td>S0003</td>
                  <td>10/11/2023</td>
                  <td>高橋蘭</td>
                  <td>西田裕二</td>
                  <td>検査キット</td>
                  <td>AB004</td>
                  <td>吉村製作所</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td><span class="c_status" data-user-status="2">終了</span></td>
                  <td>16/10/2023</td>
                  <td>S0004</td>
                  <td>10/11/2023</td>
                  <td>関田正裕</td>
                  <td>石川祐希</td>
                  <td>試験紙</td>
                  <td>AB005</td>
                  <td>リトマス株式会社</td>
                  <td>2</td>
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