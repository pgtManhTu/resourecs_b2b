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

          <div class="p_comp-profile">
            <div class="p_comp-profile__hdng">
              <button class="c_btn-icon arrow-left"></button>
              <h2 class="p_comp-profile__name">LABIT</h2>
            </div>
            <div class="p_comp-profile__cont">

              <div class="temporary-only" style="background-color: #D9D9D9; min-height: 1193px; display: flex; justify-content: center; align-items: center">
                <span style="font-size: 64px; font-weight: 600;">LABIT page</span>
              </div>

            </div>
          </div><!-- End of p_comp-profile -->

          <!-- Login Modal -->
          <div class="p_modal show">
            <div class="p_modal-cart">
              <div class="p_cart">
                <h2 class="p_cart__ttl">カートの中身</h2>
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
                          <div class="p_cart__check-del">
                            <div class="c_checkbox">
                              <input type="checkbox" id="checkbox-01" name="" value="">
                              <label for="checkbox-01"></label>
                            </div>
                            <button class="c_btn-icon delete-alt"></button>
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
                                <input class="quantity" min="0" name="quantity" value="0" type="number">
                                <button class="c_btn-icon plus" onclick="this.parentNode.querySelector('.quantity').stepUp()"></button>
                              </div>
                            </div>
                          </div>
                          <div class="p_cart__total">1080円</div>
                        </li>
                        <li>
                          <div class="p_cart__check-del">
                            <div class="c_checkbox">
                              <input type="checkbox" id="item01-01" name="item01-01" value="">
                              <label for="item01-01"></label>
                            </div>
                            <button class="c_btn-icon delete-alt"></button>
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
                                <input class="quantity" min="0" name="quantity" value="0" type="number">
                                <button class="c_btn-icon plus" onclick="this.parentNode.querySelector('.quantity').stepUp()"></button>
                              </div>
                            </div>
                          </div>
                          <div class="p_cart__total">662円</div>
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
                          <div class="p_cart__check-del">
                            <div class="c_checkbox">
                              <input type="checkbox" id="item02-01" name="item02-01" value="">
                              <label for="item02-01"></label>
                            </div>
                            <button class="c_btn-icon delete-alt"></button>
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
                                <input class="quantity" min="0" name="quantity" value="0" type="number">
                                <button class="c_btn-icon plus" onclick="this.parentNode.querySelector('.quantity').stepUp()"></button>
                              </div>
                            </div>
                          </div>
                          <div class="p_cart__total">1080円</div>
                        </li>
                        <li>
                          <div class="p_cart__check-del">
                            <div class="c_checkbox">
                              <input type="checkbox" id="item02-02" name="item02-02" value="">
                              <label for="item02-02"></label>
                            </div>
                            <button class="c_btn-icon delete-alt"></button>
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
                                <input class="quantity" min="0" name="quantity" value="0" type="number">
                                <button class="c_btn-icon plus" onclick="this.parentNode.querySelector('.quantity').stepUp()"></button>
                              </div>
                            </div>
                          </div>
                          <div class="p_cart__total">662円</div>
                        </li>
                      </ul>
                    </div><!-- End of p_cart__item -->
                  </div>
                </div>
              </div><!-- End of p_cart-modal -->
              <div class="c_txt-center p_modal-cart__btns">
                <button class="c_btn c_btn-active secondary p_cart__btn">キャンセル</button>
                <button class="c_btn c_btn-active primary p_cart__btn">確認する</button>
              </div>
            </div>
          </div>

        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>