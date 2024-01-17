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
              <h2 class="c_hdng3">問合せ詳細(7-2)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">お問合せ</a></li>
                <li><a href="">問合せ一覧</a></li>
                <li class="current">商品の仕様についての質問 (0002)</li>
              </ul>
            </div>
          </div>

          <!-- start of c_table-wide -->
          <div class="c_table-wide p_request-details">
            <table class="c_table-wide__inner">
              <tr>
                <th>項目</th>
                <th>内容</th>
              </tr>
              <tr>
                <td>問合せNo</td>
                <td>0002</td>
              </tr>
              <tr>
                <td>日付</td>
                <td>2023/10/10</td>
              </tr>
              <tr>
                <td>タイトル</td>
                <td>商品の仕様についての質問</td>
              </tr>
              <tr>
                <td>本文</td>
                <td>コンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツ コンテンツコンテンツコンテンツコンテンツコンテンツ</td>
              </tr>
            </table>
          </div><!-- end of c_table-wide -->

          <h4 class="p_request-details__ttl">回答内容</h4>

          <div class="c_table-wide p_request-details">
            <table class="c_table-wide__inner">
              <tr>
                <td>日付</td>
                <td>2023/10/12</td>
              </tr>
              <tr>
                <td>本文</td>
                <td>コンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツ コンテンツコンテンツコンテンツコンテンツコンテンツ</td>
              </tr>
              <tr>
                <td>回答者</td>
                <td>山田 太朗</td>
              </tr>
            </table><!-- end of inner -->
          </div>

          <div class="c_txt-right p_form-create__btns">
            <button class="c_btn default">戻る</button>
            <button class="c_btn primary">回答を作成</button>
          </div>

        </div><!-- End of p_main-content -->


      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>