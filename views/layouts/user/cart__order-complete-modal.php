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
              <h2 class="c_hdng3">カートの中身 (3-3)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">おすすめの商品</a></li>
                <li class="current">カートの中身</li>
              </ul>
            </div>
          </div>

          <form class="p_search-box">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="検索テキストを入力する">
            </div>
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
          </form>

          <div class="p_cart">
            <div class="p_cart__box">
              <div class="p_cart__hdngs">
                <div class="ttl">
                  <div class="c_checkbox">
                    <input type="checkbox" id="carthd" name="carthd" value="">
                    <label for="carthd"></label>
                  </div>
                  製品
                </div>
                <div class="ttl">数量</div>
                <div class="ttl">合計</div>
                <div class="ttl">消去</div>
              </div>
              <div class="p_cart__body">
                <div class="p_cart__item">
                  <div class="comp-name">
                    <div class="c_checkbox">
                      <input type="checkbox" id="allitem01" name="allitem01" value="">
                      <label for="allitem01"></label>
                    </div>
                    <div class="logo"><img src="/resources/assets/img/logos/comp-img01.png" alt=""></div>
                    ヴェルサーチェ
                  </div>
                  <ul>
                    <li>
                      <div class="c_checkbox">
                        <input type="checkbox" id="checkbox-01" name="" value="">
                        <label for="checkbox-01"></label>
                      </div>
                      <div class="c_cart-prod">
                        <img class="img" src="/resources/assets/img/products/prod-details-main.png" alt="" />
                        <div class="content">
                          <div class="name">オールオーバーラメドゥーサ<br>スモールハンドバッグ</div>
                          <div class="price"><del>16000円</del><ins>1280円</ins></div>
                          <div class="desc">分類する 1 : ピンク</div>
                          <div class="desc">分類する 2 : M</div>
                          <div class="c_discount">20円</div>
                        </div>
                      </div>
                      <div class="c_quantity">
                        <div class="c_quantity">
                          <div class="c_quantity__input">
                            <button class="c_btn-icon minus" onclick="this.parentNode.querySelector('.quantity').stepDown()"></button>
                            <input class="quantity" min="1" name="quantity" value="1" type="number">
                            <button class="c_btn-icon plus" onclick="this.parentNode.querySelector('.quantity').stepUp()"></button>
                          </div>
                        </div>
                      </div>
                      <div class="p_cart__total">1080円</div>
                      <div class="p_cart__del">
                        <button class="p_cart__button">消去</button>
                      </div>
                    </li>
                    <li>
                      <div class="c_checkbox">
                        <input type="checkbox" id="item01-01" name="item01-01" value="">
                        <label for="item01-01"></label>
                      </div>
                      <div class="c_cart-prod">
                        <img class="img" src="/resources/assets/img/products/product7.png" alt="" />
                        <div class="content">
                          <div class="name">オールオーバーラメドゥーサ<br>スモールハンドバッグ</div>
                          <div class="price"><ins>1762円</ins></div>
                          <div class="desc">分類する 1 : ピンク</div>
                          <div class="c_discount">10円</div>
                        </div>
                      </div>
                      <div class="c_quantity">
                        <div class="c_quantity">
                          <div class="c_quantity__input">
                            <button class="c_btn-icon minus" onclick="this.parentNode.querySelector('.quantity').stepDown()"></button>
                            <input class="quantity" min="1" name="quantity" value="1" type="number">
                            <button class="c_btn-icon plus" onclick="this.parentNode.querySelector('.quantity').stepUp()"></button>
                          </div>
                        </div>
                      </div>
                      <div class="p_cart__total">662円</div>
                      <div class="p_cart__del">
                        <button class="p_cart__button">消去</button>
                      </div>
                    </li>
                  </ul>
                </div><!-- End of p_cart__item -->
                <div class="p_cart__item">
                  <div class="comp-name">
                    <div class="c_checkbox">
                      <input type="checkbox" id="allitem02" name="allitem02" value="">
                      <label for="allitem02"></label>
                    </div>
                    <div class="logo"><img src="/resources/assets/img/logos/comp-img03.png" alt=""></div>
                    ヴェルサーチェ
                  </div>
                  <ul>
                    <li>
                      <div class="c_checkbox">
                        <input type="checkbox" id="item02-01" name="item02-01" value="">
                        <label for="item02-01"></label>
                      </div>
                      <div class="c_cart-prod">
                        <img class="img" src="/resources/assets/img/products/product8.png" alt="" />
                        <div class="content">
                          <div class="name">オールオーバーラメドゥーサ<br>スモールハンドバッグ</div>
                          <div class="price"><del>16000円</del><ins>1280円</ins></div>
                          <div class="desc">分類する 1 : ピンク</div>
                          <div class="desc">分類する 2 : M</div>
                          <div class="c_discount">20円</div>
                        </div>
                      </div>
                      <div class="c_quantity">
                        <div class="c_quantity">
                          <div class="c_quantity__input">
                            <button class="c_btn-icon minus" onclick="this.parentNode.querySelector('.quantity').stepDown()"></button>
                            <input class="quantity" min="1" name="quantity" value="1" type="number">
                            <button class="c_btn-icon plus" onclick="this.parentNode.querySelector('.quantity').stepUp()"></button>
                          </div>
                        </div>
                      </div>
                      <div class="p_cart__total">1080円</div>
                      <div class="p_cart__del">
                        <button class="p_cart__button">消去</button>
                      </div>
                    </li>
                    <li>
                      <div class="c_checkbox">
                        <input type="checkbox" id="item02-02" name="item02-02" value="">
                        <label for="item02-02"></label>
                      </div>
                      <div class="c_cart-prod">
                        <img class="img" src="/resources/assets/img/products/product6.png" alt="" />
                        <div class="content">
                          <div class="name">オールオーバーラメドゥーサ<br>スモールハンドバッグ</div>
                          <div class="price"><ins>1762円</ins></div>
                          <div class="desc">分類する 1 : ピンク</div>
                          <div class="c_discount">10円</div>
                        </div>
                      </div>
                      <div class="c_quantity">
                        <div class="c_quantity">
                          <div class="c_quantity__input">
                            <button class="c_btn-icon minus" onclick="this.parentNode.querySelector('.quantity').stepDown()"></button>
                            <input class="quantity" min="1" name="quantity" value="1" type="number">
                            <button class="c_btn-icon plus" onclick="this.parentNode.querySelector('.quantity').stepUp()"></button>
                          </div>
                        </div>
                      </div>
                      <div class="p_cart__total">662円</div>
                      <div class="p_cart__del">
                        <button class="p_cart__button">消去</button>
                      </div>
                    </li>
                  </ul>
                </div><!-- End of p_cart__item -->
              </div>
            </div>
          </div>
         
          <div class="c_txt-right">
            <button class="c_btn c_btn-active primary p_cart__btn">注文する</button>
          </div>

          <!-- Complete Modal-->
          <?php include('_complete-modal.php'); ?>


        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>