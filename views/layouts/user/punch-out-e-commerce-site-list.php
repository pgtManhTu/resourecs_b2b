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
              <h2 class="c_hdng3">パンチアウト (6-1)</h2>
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


          <div class="p_punchout">
            <ul class="p_punchout__list">
              <li>
                <div class="p_punchout__cont">
                  <h3 class="label">パンチアウト</h3>
                  <div class="txt">本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文</div>
                  <div class="c_txt-right">
                    <button class="c_btn c_btn-active primary">LABIT</button>
                  </div>
                </div>
                <div class="p_punchout__info">
                  <div class="media"><img src="/resources/assets/img/logos/comp-img01.png" alt=""></div>
                  <div class="inner">
                    <div class="name">LABIT</div>
                    <span class="time">24分前</span>
                    <span class="sub-dtail prod-num">製品 <small>74</small></span> | <span class="sub-dtail">フォロワー <small>1.235</small></span>
                  </div>
                </div>
              </li>
              <li>
                <div class="p_punchout__cont">
                  <h3 class="label">パンチアウト</h3>
                  <div class="txt">本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文</div>
                  <div class="c_txt-right">
                    <button class="c_btn c_btn-active primary">AS-ONE</button>
                  </div>
                </div>
                <div class="p_punchout__info">
                  <div class="media"><img src="/resources/assets/img/logos/comp-img02.png" alt=""></div>
                  <div class="inner">
                    <div class="name">AS-ONE</div>
                    <span class="time">24分前</span>
                    <span class="sub-dtail">製品 <small>74</small></span> | <span class="sub-dtail">フォロワー <small>1.235</small></span>
                  </div>
                </div>
              </li>
            </ul>
          </div>

        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>