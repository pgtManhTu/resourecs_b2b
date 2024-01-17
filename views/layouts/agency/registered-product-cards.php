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
              <h2 class="c_hdng3">商品管理 (3-1)</h2>
              <ul class="c_breadcrumb">
                <li><a href="#">商品管理</a></li>
                <li class="current">商品管理</li>
              </ul>
            </div>
            <div class="right">
              <button class="c_btn c_btn-active primary">新規商品登録</button>
            </div>
          </div>

          <div class="p_keyword">
            <div class="inner">
              <p class="p_keyword__ttl">ハンドバッグに関連するキーワードを検索する</p>
              <ul class="p_keyword__cont">
                <li><input type="checkbox" id="keyword1"><label for="keyword1">トーさージューグ</label></li>
                <li><input type="checkbox" id="keyword2"><label for="keyword2">ハンドバッグレティース</label></li>
                <li><input type="checkbox" id="keyword3" checked><label for="keyword3">ジョルダーバッグ</label></li>
                <li><input type="checkbox" id="keyword4"><label for="keyword4">パンドング 小さめしティース</label></li>
                <li><input type="checkbox" id="keyword5"><label for="keyword5">ミニトートバッグ</label></li>
                <li><input type="checkbox" id="keyword6"><label for="keyword6">レディース バッグ</label></li>
                <li><input type="checkbox" id="keyword7"><label for="keyword7">バック</label></li>
                <li><input type="checkbox" id="keyword8"><label for="keyword8">トートバッグ レディース</label></li>
                <li><input type="checkbox" id="keyword9"><label for="keyword9">ミニトートバッグ</label></li>
              </ul>

            </div>
          </div>

          <div class="p_product-list">
            <div class="p_product-list__nav">
              <a href="#" class="previous round">&#8249;</a>
              <a href="#" class="next round">&#8250;</a>
            </div>
            <div class="prod-cont">
              <div class="item">
                <div class="star">
                  <input type="checkbox" id="star1" class="c_star-checkbox star-s">
                  <label class="c_btn-icon star-s" for="star1"></label>
                </div>
                <a href="#">
                  <figure><img src="/resources/assets/img/products/product1.png" alt=""></figure>
                </a>
                <div class="item-cont">
                  <a href="#">
                    <a href="#">
                      <p class="item-desc">バーバリー BURBERRY ロゴハンドバッグ2WAYショルダ ーバッグ...</p>
                    </a>
                  </a>
                  <div class="item-cont__btm">
                    <div class="item-price">
                      <s class="reg-price">1600円</s>
                      1280円
                    </div>
                    <button class="c_btn-icon cart"></button>
                    <p>明成ショップ楽天市場店</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="star">
                  <input type="checkbox" id="star2" class="c_star-checkbox star-s">
                  <label class="c_btn-icon star-s" for="star2"></label>
                </div>
                <a href="#">
                  <figure><img src="/resources/assets/img/products/product2.png" alt=""></figure>
                </a>
                <div class="item-cont">
                  <a href="#">
                    <p class="item-desc">バーバリー BURBERRY ロゴハンドバッグ2WAYショルダ ーバッグ...</p>
                  </a>
                  <div class="item-cont__btm">
                    <div class="item-price">
                      <s class="reg-price">1600円</s>
                      1280円
                    </div>
                    <button class="c_btn-icon cart"></button>
                    <p>明成ショップ楽天市場店</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <!-- <button class="c_btn-icon star-s-fill"></button> -->
                <div class="star">
                  <input type="checkbox" id="star3" class="c_star-checkbox star-s">
                  <label class="c_btn-icon star-s" for="star3"></label>
                </div>
                <a href="#">
                  <figure><img src="/resources/assets/img/products/product3.png" alt=""></figure>
                </a>
                <div class="item-cont">
                  <a href="#">
                    <p class="item-desc">バーバリー BURBERRY ロゴハンドバッグ2WAYショルダ ーバッグ...</p>
                  </a>
                  <div class="item-cont__btm">
                    <div class="item-price">
                      <s class="reg-price">1600円</s>
                      1280円
                    </div>
                    <button class="c_btn-icon cart"></button>
                    <p>明成ショップ楽天市場店</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="star">
                  <input type="checkbox" id="star4" class="c_star-checkbox star-s">
                  <label class="c_btn-icon star-s" for="star4"></label>
                </div>
                <a href="#">
                  <figure><img src="/resources/assets/img/products/product4.png" alt=""></figure>
                </a>
                <div class="item-cont">
                  <a href="#">
                    <p class="item-desc">バーバリー BURBERRY ロゴハンドバッグ2WAYショルダ ーバッグ...</p>
                  </a>
                  <div class="item-cont__btm">
                    <div class="item-price">
                      <s class="reg-price">1600円</s>
                      1280円
                    </div>
                    <button class="c_btn-icon cart"></button>
                    <p>明成ショップ楽天市場店</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="star">
                  <input type="checkbox" id="star5" class="c_star-checkbox star-s">
                  <label class="c_btn-icon star-s" for="star5"></label>
                </div>
                <a href="#">
                  <figure><img src="/resources/assets/img/products/product5.png" alt=""></figure>
                </a>
                <div class="item-cont">
                  <a href="#">
                    <p class="item-desc">バーバリー BURBERRY ロゴハンドバッグ2WAYショルダ ーバッグ...</p>
                  </a>
                  <div class="item-cont__btm">
                    <div class="item-price">
                      <s class="reg-price">1600円</s>
                      1280円
                    </div>
                    <button class="c_btn-icon cart"></button>
                    <p>明成ショップ楽天市場店</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <form class="p_search-box p_search-box__agcprod">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="タイトル">
            </div>
            <div class="item c_mr-10">
              <button type="submit" class="p_search-box__prod c_btn c_btn-active primary w-icon search">キーワード検索</button>
            </div>
            <div class="item">
              <div class="c_select">
                <select id="" name="" form="">
                  <option value="">最も人気のある</option>
                  <option value="">最も人気のある</option>
                  <option value="">最も人気のある</option>
                </select>
              </div>
            </div>
          </form>


        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>