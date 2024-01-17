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
              <h2 class="c_hdng3">ダッシュボード (1-1)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">ダッシュボード</a></li>
                <li class="current">おすすめの商品</li>
              </ul>
            </div>
          </div>

          <form class="p_search-box">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="タイトル">
            </div>
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
          </form>

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
              <input type="checkbox" class="c_star-checkbox star-s">
              <label class="c_btn-icon star-s" for="star1"></label>
              </div>
              <figure><img src="/resources/assets/img/products/product1.png" alt=""></figure>
              <div class="item-cont">
                <p class="item-desc">バーバリー BURBERRY ロゴハンドバッグ2WAYショルダ ーバッグ...</p>
                <div class="item-cont__btm">
                  <span class="item-price">45,800円</span>
                  <button class="c_btn-icon cart"></button>
                  <p>明成ショップ楽天市場店</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="star">
              <input type="checkbox" class="c_star-checkbox star-s">
              <label class="c_btn-icon star-s" for="star1"></label>
              </div>
              <figure><img src="/resources/assets/img/products/product2.png" alt=""></figure>
              <div class="item-cont">
                <p class="item-desc">バーバリー BURBERRY ロゴハンドバッグ2WAYショルダ ーバッグ...</p>
                <div class="item-cont__btm">
                  <span class="item-price">92,900円</span>
                  <button class="c_btn-icon cart"></button>
                  <p>明成ショップ楽天市場店</p>
                </div>
              </div>
            </div>
            <div class="item">
              <!-- <button class="c_btn-icon star-s-fill"></button> -->
              <div class="star">
              <input type="checkbox" class="c_star-checkbox star-s">
              <label class="c_btn-icon star-s" for="star1"></label>
              </div>
              <figure><img src="/resources/assets/img/products/product3.png" alt=""></figure>
              <div class="item-cont">
                <p class="item-desc">バーバリー BURBERRY ロゴハンドバッグ2WAYショルダ ーバッグ...</p>
                <div class="item-cont__btm">
                  <span class="item-price">112,500円</span>
                  <button class="c_btn-icon cart"></button>
                  <p>明成ショップ楽天市場店</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="star">
              <input type="checkbox" class="c_star-checkbox star-s">
              <label class="c_btn-icon star-s" for="star1"></label>
              </div>
              <figure><img src="/resources/assets/img/products/product4.png" alt=""></figure>
              <div class="item-cont">
                <p class="item-desc">バーバリー BURBERRY ロゴハンドバッグ2WAYショルダ ーバッグ...</p>
                <div class="item-cont__btm">
                  <span class="item-price">76,200円</span>
                  <button class="c_btn-icon cart"></button>
                  <p>明成ショップ楽天市場店</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="star">
              <input type="checkbox" class="c_star-checkbox star-s">
              <label class="c_btn-icon star-s" for="star1"></label>
              </div>
              <figure><img src="/resources/assets/img/products/product5.png" alt=""></figure>
              <div class="item-cont">
                <p class="item-desc">バーバリー BURBERRY ロゴハンドバッグ2WAYショルダ ーバッグ...</p>
                <div class="item-cont__btm">
                  <span class="item-price">98,900円</span>
                  <button class="c_btn-icon cart"></button>
                  <p>明成ショップ楽天市場店</p>
                </div>
              </div>
            </div>
            </div>
          </div>

          <div class="p_punchout">
            <h3 class="label">パンチアウト</h3>
            <div class="txt">本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文</div>
          </div>

          <div class="c_txt-right">
            <button class="c_btn primary">パンチアウトページへ</button>
          </div>
          

        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>