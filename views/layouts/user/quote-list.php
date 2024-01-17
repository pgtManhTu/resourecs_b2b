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
              <h2 class="c_hdng3">見積一覧 (1-1)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">見積管理</a></li>
                <li class="current">見積一覧</li>
              </ul>
            </div>
            <div class="right">
              <button class="c_btn c_btn-active primary">見積依頼作成</button>
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
            <span class="colon">:</span>
            <div class="item w-icon">
              <input type="date" name="" value="12/10/2024">
              <i class="calendar"></i>
            </div>
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
          </form>

          <div class="c_table-list p_table-estimate2">
            <div class="c_table__scroll c_scrollbar">
              <table class="c_table-list__inner">
                <tr>
                  <th>
                    見積依頼日
                    <div class="c_checkbox-filter">
                      <input type="checkbox" id="filter01" name="filter01" value="">
                      <label for="filter01"></label>
                    </div>
                  </th>
                  <th>
                    見積管理番号
                    <div class="c_checkbox-filter">
                      <input type="checkbox" id="filter02" name="filter02" value="">
                      <label for="filter02"></label>
                    </div>
                  </th>
                  <th>
                    見積番号
                    <div class="c_checkbox-filter">
                      <input type="checkbox" id="filter03" name="filter03" value="">
                      <label for="filter03"></label>
                    </div>
                  </th>
                  <th>
                    メーカー名
                    <div class="c_checkbox-filter">
                      <input type="checkbox" id="filter04" name="filter04" value="">
                      <label for="filter04"></label>
                    </div>
                  </th>
                  <th>
                    商品名
                    <div class="c_checkbox-filter">
                      <input type="checkbox" id="filter05" name="filter05" value="">
                      <label for="filter05"></label>
                    </div>
                  </th>
                  <th>
                    型番
                    <div class="c_checkbox-filter">
                      <input type="checkbox" id="filter06" name="filter06" value="">
                      <label for="filter06"></label>
                    </div>
                  </th>
                  <th>
                    数量
                    <div class="c_checkbox-filter">
                      <input type="checkbox" id="filter07" name="filter07" value="">
                      <label for="filter07"></label>
                    </div>
                  </th>
                  <th>
                    回答数
                    <div class="c_checkbox-filter">
                      <input type="checkbox" id="filter08" name="filter08" value="">
                      <label for="filter08"></label>
                    </div>
                  </th>
                  <th>
                    見積回答期限
                    <div class="c_checkbox-filter">
                      <input type="checkbox" id="filter09" name="filter09" value="">
                      <label for="filter09"></label>
                    </div>
                  </th>
                  <th class="c_txt-center">
                    ステータス
                    <div class="c_checkbox-filter">
                      <input type="checkbox" id="filter10" name="filter10" value="">
                      <label for="filter10"></label>
                    </div>
                  </th>
                </tr>
                <tr>
                  <td rowspan="2" class="c_txt-center">10/12/2023</td>
                  <td rowspan="2" class="c_txt-center"><span class="c_txt-hlight">M001M</span></td>
                  <td>M001-S0001</td>
                  <td>武田</td>
                  <td>マスク</td>
                  <td>AB001</td>
                  <td>2</td>
                  <td>1</td>
                  <td>16/10/2023</td>
                  <td><span class="c_status" data-user-status="4">見積中</span></td>
                </tr>
                <tr>
                  <td>M001-S0002</td>
                  <td>ファイザー</td>
                  <td>手袋</td>
                  <td>AB002</td>
                  <td>3</td>
                  <td>2</td>
                  <td>10/12/2023</td>
                  <td><span class="c_status" data-user-status="3">回答あり</span></td>
                </tr>
                <tr>
                  <td rowspan="2" class="c_txt-center">10/12/2023</td>
                  <td rowspan="2" class="c_txt-center"><span class="c_txt-hlight">M002</span></td>
                  <td>S0003</td>
                  <td>吉村製作所</td>
                  <td>検査キット</td>
                  <td>AB004</td>
                  <td>1</td>
                  <td>1</td>
                  <td>10/12/2023</td>
                  <td><span class="c_status" data-user-status="1">見積あり</span></td>
                </tr>
                <tr>
                  <td>S0004</td>
                  <td>リトマス株式会社</td>
                  <td>試験紙</td>
                  <td>AB005</td>
                  <td>2</td>
                  <td>1</td>
                  <td>10/12/2023</td>
                  <td><span class="c_status" data-user-status="2">終了</span></td>
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