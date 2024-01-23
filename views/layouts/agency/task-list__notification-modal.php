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
              <h2 class="c_hdng3">タスク一覧 (1-1)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">ダッシュボード</a></li>
                <li class="current">タスク一覧</li>
              </ul>
            </div>
          </div>

          <form class="p_search-box">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="検索テキストを入力する">
            </div>
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
          </form>

          <div class="c_table-list p_table-tasklist">
            <table class="c_table-list__inner">
              <tr class="row title">
                <th>区分</th>
                <th>商品名</th>
                <th>型番</th>
                <th>期日</th>
                <th class="c_txt-center">ステータス</th>
                <th class="c_txt-center">詳細</th>
              </tr>
              <tr class="row">
                  <td data-label="区分"><div>見積依頼</div></td>
                  <td data-label="商品名"><div>マスク</div></td>
                  <td data-label="型番"><div>AB-001</div></td>
                  <td data-label="期日"><div>10/7</div></td>
                  <td data-label="ステータス" class="c_txt-center"><div><span class="c_status" data-user-status="2">未作成</span></div></td>
                  <td data-label="詳細" class="c_txt-center"><div><a href="">詳細</a></div></td>
              </tr>
              <tr class="row">
                  <td data-label="区分"><div>注文</div></td>
                  <td data-label="商品名"><div>手袋</div></td>
                  <td data-label="型番"><div>B-XYZ002</div></td>
                  <td data-label="期日"><div>10/7</div></td>
                  <td data-label="ステータス"><div><span class="c_status" data-user-status="4">手配中</span></div></td>
                  <td data-label="詳細" class="c_txt-center"><div><a href="">詳細</a></div></td>
              </tr>
              <tr class="row">
                  <td data-label="区分"><div>見積依頼</div></td>
                  <td data-label="商品名"><div>検査キット</div></td>
                  <td data-label="型番"><div>B-A001</div></td>
                  <td data-label="期日"><div>10/3</div></td>
                  <td data-label="ステータス"><div><span class="c_status" data-user-status="3">承認待ち</span></div></td>
                  <td data-label="詳細" class="c_txt-center"><div><a href="">詳細</a></div></td>
              </tr>
              <tr class="row">
                  <td data-label="区分"><div>注文</div></td>
                  <td data-label="商品名"><div>試験紙</div></td>
                  <td data-label="型番"><div>X-001</div></td>
                  <td data-label="期日"><div><span class="fire">9/30</span></div></td>
                  <td data-label="ステータス"><div><span class="c_status" data-user-status="1">発送待ち</span></div></td>
                  <td data-label="詳細" class="c_txt-center"><div><a href="">詳細</a></div></td>
              </tr>
            </table><!-- end of inner -->
          </div><!-- end of c_table -->

          <div class="p_sales-news">
            <h4 class="p_sales-news__ttl">売上速報</h4>
            <div class="p_sales-news__box">

            </div>
          </div>

          <!-- Notification Modal -->
          <div class="p_modal show">
            <div class="p_notif p_notif-modal">
              <div class="p_notif__hdng">
                <div>
                  <button class="c_btn-icon arrow-left sp-only p_notif__backbtn"></button>
                  <h4 class="c_notif-ttl">通知<small class="c_notif-side">2</small></h4>
                  <button class="c_btn-icon reorder p_notif__reorder pc-only"></button>
                </div>
                <div>
                  <button class="c_btn-icon filter p_notif__filter"></button>
                  <div class="p_notif__date w-icon ">
                    <input type="date" name="" placeholder="12/10/2024" value="">
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
                      <label class="c_btn-icon favorite" for="star1"></label>
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
                      <label class="c_btn-icon favorite" for="star2"></label>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media icon admin"><img src="/resources/assets/img/icons/settings.svg" alt="" /></div>
                  <div class="cont">
                    <div class="name">システム管理者から</div>
                    <div class="txt">サイトメンテナンスについて</div>
                    <div class="time-date">既読 6:15 | 6.10.2024</div>
                  </div>
                  <div class="btns">
                    <button class="c_btn-icon delete-alt"></button>
                    <div class="star">
                      <input type="checkbox" id="star3" class="c_star-checkbox star-s">
                      <label class="c_btn-icon favorite" for="star3"></label>
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
                      <label class="c_btn-icon favorite" for="star4"></label>
                    </div>
                  </div>
                </li>
              </ul>
              <a class="c_btn-more p_notif-modal__btn" href="">もっと見てみる</a>

            </div>
          </div>


        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>