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
              <h2 class="c_hdng3">新規問合せ作成(7-3)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">お問合せ</a></li>
                <li><a href="">問合せ一覧</a></li>
                <li class="current">新規問合せ作成</li>
              </ul>
            </div>
          </div>

          <!-- start of c_table-wide -->
          <div class="c_table-wide sp-w p_request-details">
            <table class="c_table-wide__inner">
              <tr>
                <th class="c_hlight">項目</th>
                <th class="c_hlight">内容</th>
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

          <div class="p_contact-note">
            <h4 class="p_contact-note__ttl">回答内容</h4>
            <textarea name="" id="" cols="30" rows="10"></textarea>
          </div>

          <div class="c_txt-right p_form-create__btns">
            <button class="c_btn primary">回答する</button>
          </div>

        </div><!-- End of p_main-content -->


      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>