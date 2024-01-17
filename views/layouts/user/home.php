<!DOCTYPE html>
<html lang="ja">
<?php set_include_path('../'); ?>
<?php include('elements/head.php'); ?>

<body>
  <div class="clearfix">
    <div class="f_main-area f_main-home"><!-- just add the class "show" to show the sidebar menu -->
      <?php include('elements/sidebar-user.php'); ?>

      <main class="l_main">
        <?php include('elements/header-acess.php'); ?>

        <div class="p_home">
          <div class="p_home__cont">
            <div class="p_home__notif"><!-- remove/add class "show" here to hide/show the notification section -->
              <div class="p_notif">
                <div class="p_notif__hdng">
                  <div>
                    <button class="c_btn-icon arrow-left sp-only p_notif__backbtn"></button>
                    <h4 class="p_notif__ttl">未確認のお知らせ<small class="c_notif-side pc-only">2</small></h4>
                    <button class="c_btn-icon reorder p_notif__reorder pc-only"></button>
                  </div>
                  <div>
                    <button class="c_btn-icon filter p_notif__filter"></button>
                    <div class="p_notif__date w-icon ">
                      <input type="date" name="" placeholder="12/10/2024">
                      <i class="calendar"></i>
                    </div>
                  </div>
                </div>
                <ul class="p_notif__list">
                  <li>
                    <div class="media icon store"><img src="/resources/assets/img/icons/store.svg" alt="" /></div>
                    <div class="cont">
                      <div class="name">販売店から</div>
                      <div class="txt">見積依頼いただいた商品の仕様を商品の仕様を商···</div>
                      <div class="time-date">既読 10:20 | 12.10.2024</div>
                    </div>
                    <div class="btns">
                      <button class="c_btn-icon delete-alt"></button>
                      <div class="star">
                        <input type="checkbox" id="star1" class="c_star-checkbox star-s">
                        <label class="c_btn-icon star-fav" for="star1"></label>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media icon product"><img src="/resources/assets/img/icons/shopping-bag.svg" alt="" /></div>
                    <div class="cont">
                      <div class="name">注文済商品</div>
                      <div class="txt">納期のご相談です金城 三朗日とお伝え···</div>
                      <div class="time-date">既読 8:20 | 9.10.2024</div>
                    </div>
                    <div class="btns">
                      <button class="c_btn-icon delete-alt"></button>
                      <div class="star">
                        <input type="checkbox" id="star2" class="c_star-checkbox star-s">
                        <label class="c_btn-icon star-fav" for="star2"></label>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media icon admin"><img src="/resources/assets/img/icons/settings-fill.svg" alt="" /></div>
                    <div class="cont">
                      <div class="name">システム管理者から</div>
                      <div class="txt">サイトメンテナンスについて</div>
                      <div class="time-date">既読 6:15 | 6.10.2024</div>
                    </div>
                    <div class="btns">
                      <button class="c_btn-icon delete-alt"></button>
                      <div class="star">
                        <input type="checkbox" id="star3" class="c_star-checkbox star-s">
                        <label class="c_btn-icon star-fav" for="star3"></label>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img src="/resources/assets/img/prof-pic.png" alt="" /></div>
                    <div class="cont">
                      <div class="name">システム管理者から</div>
                      <div class="txt">サイトメンテナンスについて</div>
                      <div class="time-date">既読 6:15 | 6.10.2024</div>
                    </div>
                    <div class="btns">
                      <button class="c_btn-icon delete-alt"></button>
                      <div class="star">
                        <input type="checkbox" id="star4" class="c_star-checkbox star-s">
                        <label class="c_btn-icon star-fav" for="star4"></label>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media icon question"><img src="/resources/assets/img/icons/question-fill.svg" alt="" /></div>
                    <div class="cont">
                      <div class="name">販売店から</div>
                      <div class="txt">お問い合わせいただた製品の服答です。</div>
                      <div class="time-date">既読 10:20 | 12.10.2024</div>
                    </div>
                    <div class="btns">
                      <button class="c_btn-icon delete-alt"></button>
                      <div class="star">
                        <input type="checkbox" id="star5" class="c_star-checkbox star-s">
                        <label class="c_btn-icon star-fav" for="star5"></label>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media icon store"><img src="/resources/assets/img/icons/store.svg" alt="" /></div>
                    <div class="cont">
                      <div class="name">販売店から</div>
                      <div class="txt">お問い合わせいただた製品の服答です。</div>
                      <div class="time-date">既読 10:20 | 12.10.2024</div>
                    </div>
                    <div class="btns">
                      <button class="c_btn-icon delete-alt"></button>
                      <div class="star">
                        <input type="checkbox" id="star6" class="c_star-checkbox star-s">
                        <label class="c_btn-icon star-fav" for="star6"></label>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media icon store"><img src="/resources/assets/img/icons/store.svg" alt="" /></div>
                    <div class="cont">
                      <div class="name">販売店から</div>
                      <div class="txt">見積依頼いただいた商品の仕様を商品の仕様を商···</div>
                      <div class="time-date">既読 10:20 | 12.10.2024</div>
                    </div>
                    <div class="btns">
                      <button class="c_btn-icon delete-alt"></button>
                      <div class="star">
                        <input type="checkbox" id="star7" class="c_star-checkbox star-s">
                        <label class="c_btn-icon star-fav" for="star7"></label>
                      </div>
                    </div>
                  </li>
                </ul>
                <a class="c_btn-more" href="">もっと見てみる</a>

              </div>
            </div>
            <div class="p_home__boxes">
              <div class="p_home__box">
                <img src="/resources/assets/img/icons/quote.svg" alt="">
                <h3 class="ttl">見積依頼をする</h3>
                <p class="txt">販売店に 見積依頼をします</p>
                <a class="c_btn c_btn-active primary w-icon-right arrow-right s-width" href="">詳細へGo</a>
              </div>
              <div class="p_home__box">
                <img src="/resources/assets/img/icons/shop-online.svg" alt="">
                <h3 class="ttl">注文をする</h3>
                <p class="txt">販売店に 注文をします</p>
                <a class="c_btn c_btn-active primary w-icon-right arrow-right s-width" href="">詳細へGo</a>
              </div>
              <div class="p_home__box">
                <img src="/resources/assets/img/icons/store2.svg" alt="">
                <h3 class="ttl">おすすめ商品を見る</h3>
                <p class="txt">登録販売店の おすすめ商品を見ます</p>
                <a class="c_btn c_btn-active primary w-icon-right arrow-right s-width" href="">詳細へGo</a>
              </div>
              <div class="p_home__box">
                <img src="/resources/assets/img/icons/search2.svg" alt="">
                <h3 class="ttl">パンチアウトを見る</h3>
                <p class="txt">登録販売店全ての カタログ一覧を見る</p>
                <a class="c_btn c_btn-active primary w-icon-right arrow-right s-width" href="">詳細へGo</a>
              </div>
              <div class="p_home__box">
                <img src="/resources/assets/img/icons/history.svg" alt="">
                <h3 class="ttl">購入履歴を見る</h3>
                <p class="txt">過去に購入した 商品の一覧です</p>
                <a class="c_btn c_btn-active primary w-icon-right arrow-right s-width" href="">詳細へGo</a>
              </div>
              <div class="p_home__box">
                <img src="/resources/assets/img/icons/question.svg" alt="">
                <h3 class="ttl">各種問合せをする</h3>
                <p class="txt">販売店やシステム管理者に 問合せをします</p>
                <a class="c_btn c_btn-active primary w-icon-right arrow-right s-width" href="">詳細へGo</a>
              </div>
            </div>
            <div class="p_home__listboxes">
              <div class="p_home__listbox">
                <h3 class="ttl">見積依頼一覧 </h3>
                <table class="p_home-table">
                  <tr>
                    <th>依頼日</th>
                    <th>販売店/ 見積番号</th>
                    <th>ステータス</th>
                  </tr>
                  <tr>
                    <td>2023年8月31日</td>
                    <td>ABC販売店<br>A9999999XYZ</td>
                    <td><span class="c_status" data-user-status="3">承認待</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日</td>
                    <td>ABC販売店<br>A9999999XYZ</td>
                    <td><span class="c_status" data-user-status="4">見積中</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日</td>
                    <td>ABC販売店<br>A9999999XYZ</td>
                    <td><span class="c_status" data-user-status="1">見積済</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日</td>
                    <td>ABC販売店<br>A9999999XYZ</td>
                    <td><span class="c_status" data-user-status="1">見積済</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日</td>
                    <td>ABC販売店<br>A9999999XYZ</td>
                    <td><span class="c_status" data-user-status="2">取扱無</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日</td>
                    <td>ABC販売店<br>A9999999XYZ</td>
                    <td><span class="c_status" data-user-status="5">無回答</span></td>
                  </tr>
                  <tr>
                    <td colspan="3"><a class="c_btn-more" href="">もっと見てみる</a></td>
                  </tr>
                </table>
              </div>
              <div class="p_home__listbox">
                <h3 class="ttl">注文一覧 </h3>
                <table class="p_home-table">
                  <tr>
                    <th>注文日</th>
                    <th>販売店/ 注文番号</th>
                    <th>ステータス</th>
                  </tr>
                  <tr>
                    <td>2023年8月31日</td>
                    <td>ABC販売店<br>A9999999XYZ</td>
                    <td><span class="c_status" data-user-status="3">承認待</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日</td>
                    <td>ABC販売店<br>A9999999XYZ</td>
                    <td><span class="c_status" data-user-status="4">販売店受付待ち</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日</td>
                    <td>ABC販売店<br>A9999999XYZ</td>
                    <td><span class="c_status" data-user-status="1">発送準備中</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日</td>
                    <td>ABC販売店<br>A9999999XYZ</td>
                    <td><span class="c_status" data-user-status="1">発送準備中</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日</td>
                    <td>ABC販売店<br>A9999999XYZ</td>
                    <td><span class="c_status" data-user-status="2">納品清</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日</td>
                    <td>ABC販売店<br>A9999999XYZ</td>
                    <td><span class="c_status" data-user-status="2">納品清</span></td>
                  </tr>
                  <tr>
                    <td colspan="3"><a class="c_btn-more" href="">もっと見てみる</a></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div><!-- End of p_home -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>