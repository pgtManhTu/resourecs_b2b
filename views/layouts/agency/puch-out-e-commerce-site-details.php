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
              <h2 class="c_hdng3">パンチアウト (4-2)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">パンチアウト</a></li>
                <li class="current">パンチアウト</li>
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
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
          </form>

          <!-- start of c_table-wide -->
          <div class="c_table-wide p_table-combi">
            <div class="sp-only c_table__ttl-sp open"><!-- on mobile, just add/remove the class "open" to show/hide the content  -->
              <div>パンチアウト</div>
              <small class="arrow"></small>
            </div>
            <div class="p_table-combi__cont">
              <table class="c_table-wide__inner">
                <tr>
                  <th class="c_hlight">区分</th>
                  <th class="c_hlight">商品名</th>
                </tr>
                <tr>
                  <td>パンチアウト先</td>
                  <td>
                    <div class="c_select">
                      <select id="" name="">
                        <option value="">0.7</option>
                        <option value="">0.6</option>
                        <option value="">0.5</option>
                      </select>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>掛け率</td>
                  <td><input type="text" id="" name="" value="70%"></td>
                </tr>
                <tr>
                  <td>利用状況</td>
                  <td>
                    <div class="c_select">
                      <select id="" name="">
                        <option value="">利用中</option>
                        <option value="">利用中</option>
                        <option value="">利用中</option>
                      </select>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>遷移先URL</td>
                  <td><input type="url" id="" name="" value="https://azone.com/api/conectlist.php?id=123456"></td>
                </tr>
              </table>
            </div>
          </div><!-- end of c_table-wide -->


        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>