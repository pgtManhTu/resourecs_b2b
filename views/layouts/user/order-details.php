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
              <h2 class="c_hdng3">注文詳細 (2-2)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">注文管理</a></li>
                <li class="current">注文詳細 No.1</li>
              </ul>
            </div>
          </div>

          <form class="p_search-box">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="検索テキストを入力する">
            </div>
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
          </form>

          <div class="c_table-list p_table-orderdtail">
            <div class="c_mb-10">注文番号：No.1</div>
            <div class="c_table__scroll c_scrollbar">
              <table class="c_table-list__inner">
                <tr>
                  <th rowspan="3">NO</th>
                  <th colspan="3">依頼内容</th>
                  <th colspan="9">回答内容</th>
                </tr>
                <tr>
                  <th rowspan="2">商品コード</th>
                  <th rowspan="2">商品名</th>
                  <th rowspan="2">数量</th>
                  <th rowspan="2">状況</th>
                  <th rowspan="2">定価</th>
                  <th>選択</th>
                  <th>数量</th>
                  <th>回答単価</th>
                  <th>回答金額</th>
                  <th>配送費</th>
                  <th>納期</th>
                  <th rowspan="2">定価</th>
                </tr>
                <tr>
                  <th colspan="6">備考</th>
                </tr>
                <tr>
                  <td rowspan="2">1</td>
                  <td rowspan="2">2-5091-13</td>
                  <td rowspan="2">ビーカー20m</td>
                  <td rowspan="2">1</td>
                  <td rowspan="2">19/12/2023</td>
                  <td rowspan="2">940円</td>
                  <td>940円</td>
                  <td>1</td>
                  <td>940円</td>
                  <td>940円</td>
                  <td>20円</td>
                  <td>7～10日</td>
                  <td rowspan="2"><span class="c_status" data-user-status="3">承認待</span></td>
                </tr>
                <tr>
                  <td colspan="6">良質な商品</td>
                </tr>
              </table><!-- end of inner -->
            </div><!-- end of c_table__scroll -->
          </div><!-- end of c_table -->

          <form>
            <div class="p_list-orderdtail">
              <ul>
                <li>
                  <span class="label">メモ欄</span>
                  <div class="cont"><input type="text" id="" name="" value="コンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコ"></div>
                </li>
              </ul>
            </div>

            <div class="c_txt-right p_form-create__btns">
              <button class="c_btn secondary">再見積</button>
              <button class="c_btn secondary">戻る</button>
              <button class="c_btn primary">問合せ</button>
              <button class="c_btn primary">戻る クイック注文</button>
            </div>
          </form>


        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>