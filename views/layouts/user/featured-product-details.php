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
              <h2 class="c_hdng3">おすすめの商品 (3-2)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">おすすめの商品</a></li>
                <li class="current">おすすめの商品</li>
              </ul>
            </div>
          </div>

          <div class="p_user-product">
            <div class="top">
              <div class="left">
                <div class="prod-thumbnail">
                  <div class="product-image">
                    <div class="p_product-list__nav">
                      <a href="#" class="previous round">‹</a>
                      <a href="#" class="next round">›</a>
                    </div>
                    <img src="/resources/assets/img/products/prod-details-main.png" alt="">
                  </div>
                  <div class="prod-thumbnail-cont">
                    <div class="p_product-list__nav">
                      <a href="#" class="previous round">‹</a>
                      <a href="#" class="next round">›</a>
                    </div>
                    <ul class="thumbnail-list">
                      <li>
                        <img src="/resources/assets/img/products/new-prod-img.png" alt="">
                      </li>
                      <li>
                        <img src="/resources/assets/img/products/prod-details2.png" alt="">
                      </li>
                      <li>
                        <img src="/resources/assets/img/products/prod-details3.png" alt="">
                      </li>
                      <li class="play-icon">
                        <figure><img src="/resources/assets/img/products/new-prod-video.png" alt=""> </figure>
                      </li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="right">
                <div class="p_modal__heading">オールオーバーラメドゥーサスモールハンドバッグ <span>明成ショップ楽天市場店</span></div>
                <table class="p_table-pdetails">
                  <tr>
                    <td><s class="reg-price">1600円</s></td>
                    <td><span class="price">1280円</span><span class="discount">20%OFF</span></td>
                  </tr>
                  <tr>
                    <td>割引</td>
                    <td>
                      <ul class="btn-discount">
                        <li><button class="c_btn c_btn-active secondary">2を買う100円オフ</button></li>
                        <li><button class="c_btn c_btn-active secondary">3を買う250円オフ</button></li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <td>導入</td>
                    <td>ジャカード織りであしらったヴェルサーチェ オールオーバー柄で再解釈したラ メドゥーサ ハンドバッグ。ラ メドゥーサ プレートをあしらった、メゾンを代表するスタイル。交換可能なレザー & チェーンのショルダーストラップ付き。</td>
                  </tr>
                  <tr>
                    <td>メーカー名</td>
                    <td>吉村製作所</td>
                  </tr>
                  <tr>
                    <td>単位</td>
                    <td>1個/箱</td>
                  </tr>
                  <tr>
                    <td>納期</td>
                    <td>7～10日</td>
                  </tr>
                  <tr>
                    <td>分類する 1</td>
                    <td>
                      <ul class="variations">
                        <li>
                          <input type="radio" id="variation1" name="variation">
                          <label for="variation1">
                            <figure><img src="/resources/assets/img/products/user-prod-icon1.png"></figure>
                            <span>M - ピンク</span>
                          </label>
                        </li>
                        <li>
                          <input type="radio" id="variation2" name="variation">
                          <label for="variation2">
                            <figure><img src="/resources/assets/img/products/user-prod-icon2.png"></figure>
                            <span>L - ピンク</span>
                          </label>
                        </li>
                        <li>
                          <input type="radio" id="variation3" name="variation">
                          <label for="variation3">
                            <figure><img src="/resources/assets/img/products/user-prod-icon3.png"></figure>
                            <span>M - 白</span>
                          </label>
                        </li>
                        <li>
                          <input type="radio" id="variation4" name="variation">
                          <label for="variation4">
                            <figure><img src="/resources/assets/img/products/user-prod-icon4.png"></figure>
                            <span>L - 白</span>
                          </label>
                        </li>
                        <li>
                          <input type="radio" id="variation5" name="variation">
                          <label for="variation5" class="sold-out">
                            <figure><img src="/resources/assets/img/products/user-prod-icon5.png"></figure>
                            <span>M - 茶色</span>
                          </label>
                        </li>
                        <li>
                          <input type="radio" id="variation6" name="variation">
                          <label for="variation6">
                            <figure><img src="/resources/assets/img/products/user-prod-icon6.png"></figure>
                            <span>L - 茶色</span>
                          </label>
                        </li>
                        <li>
                          <input type="radio" id="variation7" name="variation">
                          <label for="variation7">
                            <figure><img src="/resources/assets/img/products/user-prod-icon7.png"></figure>
                            <span>M - 黒</span>
                          </label>
                        </li>
                        <li>
                          <input type="radio" id="variation8" name="variation">
                          <label for="variation8" class="sold-out">
                            <figure><img src="/resources/assets/img/products/user-prod-icon8.png"></figure>
                            <span>L - 黒</span>
                          </label>
                        </li>
                      </ul>

                    </td>
                  </tr>
                  <tr>
                    <td>分類する 2</td>
                    <td>
                      <ul class="color">
                        <li>
                          <input type="radio" id="colorWhite" name="color">
                          <label for="colorWhite"><span>White</span></label>
                        </li>
                        <li>
                          <input type="radio" id="colorBlack" name="color">
                          <label for="colorBlack"><span>Black</span></label>
                        </li>
                        <li>
                          <input type="radio" id="colorRed" name="color">
                          <label for="colorRed"><span>Red</span></label>
                        </li>
                        <li>
                          <input type="radio" id="colorOrange" name="color">
                          <label for="colorOrange"><span>Orange</span></label>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <td>数量</td>
                    <td>
                      <div class="c_quantity">
                        <div class="c_quantity__input">
                          <button class="c_btn-icon minus" onclick="this.parentNode.querySelector('.quantity').stepDown()"></button>
                          <input class="quantity" min="1" name="quantity" value="1" type="number">
                          <button class="c_btn-icon plus" onclick="this.parentNode.querySelector('.quantity').stepUp()"></button>
                        </div>
                      </div>
                    </td>
                  </tr>
                </table><!-- end of table -->
                <ul class="p_btn-cont">
                  <li><button class="c_btn c_btn-active secondary w-icon cart">カートに入れる</button></li>
                  <li><button class="c_btn c_btn-active primary">今すぐ買う</button></li>
                  <li><button class="c_btn c_btn-active primary">問い合わせ</button></li>
                </ul>
              </div>
            </div>
            <div class="bottom">
              <table class="p_table-pdesc">
                <tr>
                  <th rowspan="2">商品詳細</th>
                  <!-- <th></th> -->
                </tr>
                <tr>
                  <td>商品名</td>
                  <td>オールオーバーラメドゥーサスモールハンドバッグ</td>
                </tr>
                <tr>
                  <td>型番</td>
                  <td>AB-001</td>
                </tr>
                <tr>
                  <td>数量</td>
                  <td>12</td>
                </tr>
                <tr>
                  <td>色</td>
                  <td>白 * 黒 * ピンク * 茶色</td>
                </tr>
                <tr>
                  <td>サイズ</td>
                  <td>(約）横24×マチ10×高さ17cm、ストラップ長さ：70～117cm、ドロップ長さ：30～50cm</td>
                </tr>
                <tr>
                  <td>素材</td>
                  <td>ポリエステル60％・コットン40％、裏地：ラムレザー100％、トリム：カーフレザー100％</td>
                </tr>
                <tr>
                  <td>特性</td>
                  <td>ジャカード織りであしらったヴェルサーチェ オールオーバー柄、ラ メドゥーサのプレート、トップハンドル、レザーショルダーストラップ、チェーンショルダーストラップ、マグネットボタン留め、内側にフラットポケット、レザー風仕上げ、Dリング</td>
                </tr>
                <tr>
                  <td>起源</td>
                  <td>日本</td>
                </tr>
              </table>
            </div>
          </div>

          <div class="p_rel-prod__ttl">関連商品</div>

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

          <div class="c_txt-right">
            <button class="c_btn c_btn-active secondary w-icon-right arrow-right1">追加する</button>
          </div>

        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>