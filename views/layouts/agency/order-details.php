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
              <h2 class="c_hdng3">注文詳細(5-2)</h2>
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

          <div class="c_table-list p_table-orderdtail">
            <div class="c_mb-10 ttl">注文番号：No.5</div>
            <div class="c_table__scroll c_scrollbar">

              <!-- This table is for desktop view only -->
              <div class="pc-only">
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
                    <th rowspan="2">納期</th>
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
                    <td rowspan="2"><div>1</div></td>
                    <td rowspan="2"><div>2-5091-13</div></td>
                    <td rowspan="2"><div>ビーカー20m</div></td>
                    <td rowspan="2"><div>1</div></td>
                    <td rowspan="2"><div>19/12/2023</div></td>
                    <td rowspan="2"><div>940円</div></td>
                    <td><div>940円</div></td>
                    <td><div>1</div></td>
                    <td><div>940円</div></td>
                    <td><div>940円</div></td>
                    <td><div>20円</div></td>
                    <td><div>7～10日</div></td>
                    <td rowspan="2"><div><span class="c_status" data-user-status="3">入荷待ち</span></div></td>
                  </tr>
                  <tr>
                    <td colspan="6"><div>良質な商品</div></td>
                  </tr>
                </table>
              </div>

              <!-- This table is for mobile view only -->
              <div class="sp-only p_table-pnchout p_table-combi">
                <div class="sp-only c_table__ttl-sp open"><!-- on mobile, just add/remove the class "open" to show/hide the content  -->
                  <div>ビーカー20m</div>
                  <small class="arrow"></small>
                </div>
                <div class="p_table-combi__cont">
                  <table class="c_table-list__inner">
                    <tr>
                      <td data-label="依頼内容" class="c_hlight"><div>内容</div></td>
                      <td data-label="商品コード"><div>2-5091-13</div></td>
                      <td data-label="数量"><div>1</div></td>
                    </tr>
                    <tr>
                      <td data-label="回答内容" class="c_hlight"><div>回答</div></td>
                      <td data-label="納期"><div>19/12/2023</div></td>
                      <td data-label="定価"><div>940円</div></td>
                      <td data-label="選択"><div>940円</div></td>
                      <td data-label="数量"><div>1</div></td>
                      <td data-label="回答単価"><div>940円</div></td>
                      <td data-label="回答金額"><div>940円</div></td>
                      <td data-label="配送費"><div>20円</div></td>
                      <td data-label="納期"><div>7～10日</div></td>
                      <td data-label="定価"><div><span class="c_status" data-user-status="3">入荷待ち</span></div></td>
                      <td data-label="備考"><div>良質な商品</div></td>
                    </tr>
                  </table>
                </div>
              </div>
              
            </div><!-- end of c_table__scroll -->
          </div><!-- end of c_table -->

          <form>
            <div class="p_list-orderdtail">
              <ul>
                <li>
                  <span class="label">お問い合わせの内容</span>
                  <div class="cont"><input type="text" id="" name="" value="" placeholder="株式会社ABC"></div>
                </li>
                <li>
                  <span class="label">お問い合わせの回答</span>
                  <div class="cont"><input type="text" id="" name="" value="" placeholder="商品の仕様についての質問"></div>
                </li>
                <li>
                  <span class="label">特記事項</span>
                  <div class="cont"><input type="text" id="" name="" value="" placeholder="コンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコ"></div>
                </li>
                <li>
                  <span class="label">メモ欄</span>
                  <div class="cont"><input type="text" id="" name="" value="" placeholder="コンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコ"></div>
                </li>
              </ul>
            </div>

            <div class="c_txt-right p_form-create__btns">
              <button class="c_btn primary">チャット</button>
              <button class="c_btn primary">輸出注文情報</button>
              <button class="c_btn primary">更新する</button>
            </div>
          </form>


        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>