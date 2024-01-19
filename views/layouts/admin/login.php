<!DOCTYPE html>
<html lang="ja">
<?php set_include_path('../'); ?>
<?php include('elements/head.php'); ?>

<body>
  <div class="clearfix">
    <div class="f_main-area f_main-home"><!-- just add the class "show" to show the sidebar menu -->
      <?php include('elements/sidebar.php'); ?>

      <main class="l_main">
        <?php include('elements/header-acess.php'); ?>

        <div class="p_home">
          <div class="p_home__cont">
            <div class="p_home__notif">
              <div class="p_notif">
                <div class="p_notif__hdng">
                  <div>
                    <h4 class="p_notif__ttl">問合せ<small class="c_notif-side pc-only">2</small></h4>
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
                <ul class="p_notif__list p_notif-admin__list">
                  <li>
                    <div class="media icon quote"><img src="/resources/assets/img/icons/admin-fill.svg" alt="" /></div>
                    <div class="cont">
                      <div class="name">見積開封通知</div>
                      <div class="time-date">既読 10:20 | 30.08.2023</div>
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
                    <div class="media icon store"><img src="/resources/assets/img/icons/store.svg" alt="" /></div>
                    <div class="cont">
                      <div class="name">注文済商品</div>
                      <div class="time-date">既読 10:20 | 30.08.2023</div>
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
                    <div class="media icon quote"><img src="/resources/assets/img/icons/admin-fill.svg" alt="" /></div>
                    <div class="cont">
                      <div class="name">見積開封通知</div>
                      <div class="time-date">既読 10:20 | 30.08.2023</div>
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
                    <div class="media icon admin"><img src="/resources/assets/img/icons/settings-fill.svg" alt="" /></div>
                    <div class="cont">
                      <div class="name">システム管理者から</div>
                      <div class="time-date">既読 10:20 | 30.08.2023</div>
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
                    <div class="media"><img src="/resources/assets/img/prof-pic2.png" alt="" /></div>
                    <div class="cont">
                      <div class="name">山八さん さんから</div>
                      <div class="time-date">既読 10:20 | 30.08.2023</div>
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
                    <div class="media icon store"><img src="/resources/assets/img/icons/store.svg" alt="" /></div>
                    <div class="cont">
                      <div class="name">新規見積依頼</div>
                      <div class="time-date">既読 10:20 | 30.08.2023</div>
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
                    <div class="media icon admin"><img src="/resources/assets/img/icons/settings-fill.svg" alt="" /></div>
                    <div class="cont">
                      <div class="name">システム管理者から</div>
                      <div class="time-date">既読 10:20 | 30.08.2023</div>
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
                    <div class="media icon store"><img src="/resources/assets/img/icons/store.svg" alt="" /></div>
                    <div class="cont">
                      <div class="name">新規見積依頼</div>
                      <div class="time-date">既読 10:20 | 30.08.2023</div>
                    </div>
                    <div class="btns">
                      <button class="c_btn-icon delete-alt"></button>
                      <div class="star">
                        <input type="checkbox" id="star1" class="c_star-checkbox star-s">
                        <label class="c_btn-icon star-fav" for="star1"></label>
                      </div>
                    </div>
                  </li>
                </ul>
                <a class="c_btn-more" href="">もっと見てみる</a>
              </div>
            </div>
            <div class="p_home-admin__boxes">
              <div class="p_home-admin__item">
                <h3 class="ttl">システム利用状況（リアルタイムログイン）</h3>
                <div class="box"></div>
              </div>
              <div class="p_home-admin__item">
                <h3 class="ttl">システム運用状況（処理時間や負荷の状態など）</h3>
                <div class="box"></div>
              </div>
            </div>
            <div class="p_home__listboxes">
              <div class="p_home__listbox p_home-admin__listbox">
                <h3 class="ttl">監視ログ一覧</h3>
                <table class="p_home-table p_home-admin-table">
                  <tr>
                    <th>ログイン日時</th>
                    <th>ログインID</th>
                    <th>状態</th>
                    <th>ステータス</th>
                  </tr>
                  <tr>
                    <td>2023年8月31日19時03分</td>
                    <td>○○研究室○○教授</td>
                    <td>自動発行</td>
                    <td><span class="c_status" data-user-status="4">承認待</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日19時03分</td>
                    <td>○○研究室○○教授</td>
                    <td>見積中</td>
                    <td><span class="c_status" data-user-status="4">承認待</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日19時03分</td>
                    <td>○○研究室○○教授</td>
                    <td>自動発行</td>
                    <td><span class="c_status" data-user-status="1">承認待</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日19時03分</td>
                    <td>○○研究室○○教授</td>
                    <td>自動発行</td>
                    <td><span class="c_status" data-user-status="1">承認待</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日19時03分</td>
                    <td>○○研究室○○教授</td>
                    <td>見積中</td>
                    <td><span class="c_status" data-user-status="5">承認待</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日19時03分</td>
                    <td>○○研究室○○教授</td>
                    <td>自動発行</td>
                    <td><span class="c_status" data-user-status="1">承認待</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日19時03分</td>
                    <td>○○研究室○○教授</td>
                    <td>自動発行</td>
                    <td><span class="c_status" data-user-status="1">承認待</span></td>
                  </tr>
                  <tr>
                    <td>2023年8月31日19時03分</td>
                    <td>○○研究室○○教授</td>
                    <td>見積中</td>
                    <td><span class="c_status" data-user-status="5">承認待</span></td>
                  </tr>
                  <tr>
                    <td colspan="4"><a class="c_btn-more" href="">もっと見てみる</a></td>
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