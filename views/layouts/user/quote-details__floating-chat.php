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
              <h2 class="c_hdng3">見積詳細 (0002)(1-2)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">見積管理</a></li>
                <li><a href="">見積一覧</a></li>
                <li class="current">見積詳細 (0002)</li>
              </ul>
            </div>
            <div class="right">
              <button class="c_btn c_btn-active primary">見積依頼作成</button>
            </div>
          </div>

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

          <div class="c_table-list p_table-quote">
            <div class="c_table__scroll c_scrollbar">
              <table class="c_table-list__inner">
                <tr>
                  <th class="c_txt-center">見積依頼No</th>
                  <th class="c_txt-center">メーカー</th>
                  <th class="c_txt-center">商品名</th>
                  <th>商品情報</th>
                  <th colspan="2">
                    <div class="c_checkbox">
                      <input type="checkbox" id="tablecheck01" name="tablecheck01" value="" checked="">
                      <label for="tablecheck01"></label>
                    </div>
                    株式会社ABC
                  </th>
                  <th colspan="2">
                    <div class="c_checkbox">
                      <input type="checkbox" id="tablecheck02" name="tablecheck02" value="" checked="">
                      <label for="tablecheck02"></label>
                    </div>
                    XYZ株式会社
                  </th>
                  <th colspan="2">
                    <div class="c_checkbox">
                      <input type="checkbox" id="tablecheck03" name="tablecheck03" value="" checked="">
                      <label for="tablecheck03"></label>
                    </div>
                    123カンパニー
                  </th>
                </tr>
                <tr>
                  <td rowspan="3">123456789</td>
                  <td rowspan="3">富士フイルム和光純薬</td>
                  <td rowspan="3">塩酸</td>
                  <td>カタログコード: 1234-567</td>
                  <td>単価</td>
                  <td>550</td>
                  <td>単価</td>
                  <td>580</td>
                  <td>単価</td>
                  <td>750</td>
                </tr>
                <tr>
                  <td>容量: 500ml</td>
                  <td>金額</td>
                  <td>1100</td>
                  <td>金額</td>
                  <td>1160</td>
                  <td>金額</td>
                  <td>1500</td>
                </tr>
                <tr>
                  <td>依頼数量: 2個</td>
                  <td>納期(営業日)</td>
                  <td>2</td>
                  <td>納期(営業日)</td>
                  <td>1</td>
                  <td>納期(営業日)</td>
                  <td>2</td>
                </tr>
                <tr>
                  <th class="c_txt-center">見積依頼No</th>
                  <th class="c_txt-center">メーカー</th>
                  <th class="c_txt-center">商品名</th>
                  <th>商品情報</th>
                  <th colspan="2">
                    <div class="c_checkbox">
                      <input type="checkbox" id="tablecheck04" name="tablecheck04" value="" checked="">
                      <label for="tablecheck04"></label>
                    </div>
                    株式会社ABC
                  </th>
                  <th colspan="2">
                    <div class="c_checkbox">
                      <input type="checkbox" id="tablecheck05" name="tablecheck05" value="" checked="">
                      <label for="tablecheck05"></label>
                    </div>
                    XYZ株式会社
                  </th>
                  <th colspan="2">
                    <div class="c_checkbox">
                      <input type="checkbox" id="tablecheck06" name="tablecheck06" value="" checked="">
                      <label for="tablecheck06"></label>
                    </div>
                    123カンパニー
                  </th>
                </tr>
                <tr>
                  <td rowspan="3">123456789</td>
                  <td rowspan="3">富士フイルム和光純薬</td>
                  <td rowspan="3">塩酸</td>
                  <td>カタログコード: 1234-567</td>
                  <td>単価</td>
                  <td>550</td>
                  <td>単価</td>
                  <td>580</td>
                  <td>単価</td>
                  <td>750</td>
                </tr>
                <tr>
                  <td>容量: 500ml</td>
                  <td>金額</td>
                  <td>1100</td>
                  <td>金額</td>
                  <td>1160</td>
                  <td>金額</td>
                  <td>1500</td>
                </tr>
                <tr>
                  <td>依頼数量: 2個</td>
                  <td>納期(営業日)</td>
                  <td>2</td>
                  <td>納期(営業日)</td>
                  <td>1</td>
                  <td>納期(営業日)</td>
                  <td>2</td>
                </tr>
                <tr class="btns">
                  <td colspan="4">
                    <div class="c_txt-right">
                  <td rowspan="2"><button class="c_btn c_btn-active primary">チャット</button></td>
                  <td rowspan="2"><button class="c_btn c_btn-active primary">見積書を見る</button></td>
                  <td rowspan="2"><button class="c_btn c_btn-active primary">チャット</button></td>
                  <td rowspan="2"><button class="c_btn c_btn-active primary">見積書を見る</button></td>
                  <td rowspan="2"><button class="c_btn c_btn-active primary">チャット</button></td>
                  <td rowspan="2"><button class="c_btn c_btn-active primary">見積書を見る</button></td>
            </div>
            </td>
            </tr>
            </table><!-- end of inner -->

          </div><!-- end of c_table__scroll -->
        </div><!-- end of c_table -->

        <div class="c_txt-right">
          <button class="c_btn primary">発注する</button>
        </div>

        <!-- Floating Chat -->
        <?php
        $tab = isset($_GET['tab']) ? $_GET['tab'] : 1;
        include('_chat-box-user.php');
        ?>


    </div><!-- End of p_main-content -->

    </main>
  </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>