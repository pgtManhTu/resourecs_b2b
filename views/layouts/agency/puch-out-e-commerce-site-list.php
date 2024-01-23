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
              <h2 class="c_hdng3">パンチアウト (4-1)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">パンチアウト</a></li>
                <li class="current">パンチアウト</li>
              </ul>
            </div>
          </div>

          <form class="p_search-box">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="検索テキストを入力する">
            </div>
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
          </form>

          <div class="c_table-list c_table-center">
            <table class="c_table-list__inner">
              <tr>
                <th>パンチアウト先</th>
                <th>利用状況</th>
                <th>詳細</th>
              </tr>
              <tr>
                <td class="c_table__ttl-sp open"><!-- on mobile, just add/remove the class "open" to show/hide the content  -->
                  <div>AZONE</div>
                  <small class="arrow"></small>
                </td>
                <td data-label="利用状況"><div>利用中</div></td>
                <td data-label="詳細"><div><a href="">詳細</a></div></td>
              </tr>
              <tr>
                <td class="c_table__ttl-sp open">
                  <div>BZONE</div>
                  <small class="arrow"></small>
                </td>
                <td data-label="利用状況"><div>停止中</div></td>
                <td data-label="詳細"><div><a href="">詳細</a></div></td>
              </tr>
              <tr>
                <td class="c_table__ttl-sp open">
                  <div>CZONE</div>
                  <small class="arrow"></small>
                </td>
                <td data-label="利用状況"><div>利用中</div></td>
                <td data-label="詳細"><div><a href="">詳細</a></div></td>
              </tr>
              <tr>
                <td class="c_table__ttl-sp open">
                  <div>DZONE</div>
                  <small class="arrow"></small>
                </td>
                <td data-label="利用状況"><div>停止中</div></td>
                <td data-label="詳細"><div><a href="">詳細</a></div></td>
              </tr>
              <tr>
                <td class="c_table__ttl-sp open">
                  <div>EZONE</div>
                  <small class="arrow"></small>
                </td>
                <td data-label="利用状況"><div>利用中</div></td>
                <td data-label="詳細"><div><a href="">詳細</a></div></td>
              </tr>
            </table><!-- end of inner -->
          </div><!-- end of c_table -->


        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>