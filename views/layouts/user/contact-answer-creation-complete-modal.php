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

          <div class="p_main-content__hdng p_align-center">
            <div class="left">
              <h2 class="c_hdng3">新規問合せ作成 (4-3)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">お問合せ</a></li>
                <li><a href="">問合せ一覧</a></li>
                <li class="current">新規問合せ作成</li>
              </ul>
            </div>
            <div class="right">
              <button class="c_btn c_btn-active primary">新規問合せ作成</button>
            </div>
          </div>

          <!-- start of c_table-wide -->
          <div class="c_table-wide">
            <table class="c_table-wide__inner p_table-wide__bbtm">
              <tr>
                <th>項目</th>
                <th>内容</th>
              </tr>
              <tr>
                <td>問合せ先</td>
                <td>
                  <div class="c_select">
                    <select id="" name="">
                      <option value="">株式会社ABC</option>
                      <option value="">株式会社ABC</option>
                      <option value="">株式会社ABC</option>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td>タイトル</td>
                <td><input type="text" id="" name="" value="商品の仕様についての質問"></td>
              </tr>
              <tr>
                <td>利用状況</td>
                <td>
                  <textarea name="" id="" cols="30" rows="10">コンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツ</textarea>
              </tr>
            </table>
          </div><!-- end of c_table-wide -->

          <div class="c_txt-right p_form-create__btns">
            <button class="c_btn primary">回答する</button>
          </div>

        </div><!-- End of p_main-content -->

        <!-- Product Edit Complete Modal -->
        <?php include('_contact-answer-creation-complete-modal.php'); ?>


      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>