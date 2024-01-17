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
              <h2 class="c_hdng3">見積作成依頼 (1-3)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">見積管理</a></li>
                <li><a href="">見積一覧 </a></li>
                <li class="current">見積作成依頼</li>
              </ul>
            </div>
          </div>

          <form class="p_search-box">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="検索テキストを入力する">
            </div>
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索 </button>
          </form>

          <div class="p_quote-request">
            <div class="p_quote-request__left">
              <div class="p_quote-request__box">
                <div class="p_quote-request__scroll c_scrollbar">
                  <div class="p_quote-request__inner">

                    <div class="p_quote-request__block">
                      <ul class="p_quote-request__list">
                        <li>
                          <span class="label">商品名</span>
                          <div class="cont"><input type="text" id="" name="" value="マスク"></div>
                        </li>
                        <li>
                          <span class="label">型番</span>
                          <div class="cont"><input type="text" id="" name="" value="AB-001"></div>
                        </li>
                        <li>
                          <span class="label">数量</span>
                          <div class="cont"><input type="text" id="" name="" value="2"></div>
                        </li>
                        <li>
                          <span class="label">色</span>
                          <div class="cont"><input type="text" id="" name="" value="グレー"></div>
                        </li>
                        <li>
                          <span class="label">サイズ</span>
                          <div class="cont"><input type="text" id="" name="" value="サイズM"></div>
                        </li>
                        <li>
                          <span class="label">素材</span>
                          <div class="cont"><input type="text" id="" name="" value="ポリエステル60％"></div>
                        </li>
                        <li>
                          <button class="c_btn-icon close-circ"></button>
                          <span class="label"><input type="text" id="" name="" value=""></span>
                          <div class="cont"><input type="text" id="" name="" value=""></div>
                        </li>
                      </ul>
                      <button class="c_btn c_btn-active primary w-icon add">行を追加する</button>
                    </div><!-- end of p_quote-request__block -->

                    <div class="p_quote-request__block">
                      <ul class="p_quote-request__list">
                        <li>
                          <span class="label">商品名</span>
                          <div class="cont"><input type="text" id="" name="" value="マスク"></div>
                        </li>
                        <li>
                          <span class="label">型番</span>
                          <div class="cont"><input type="text" id="" name="" value="AB-001"></div>
                        </li>
                        <li>
                          <span class="label">数量</span>
                          <div class="cont"><input type="text" id="" name="" value="2"></div>
                        </li>
                        <li>
                          <span class="label">色</span>
                          <div class="cont"><input type="text" id="" name="" value="グレー"></div>
                        </li>
                        <li>
                          <span class="label">サイズ</span>
                          <div class="cont"><input type="text" id="" name="" value="サイズM"></div>
                        </li>
                        <li>
                          <span class="label">素材</span>
                          <div class="cont"><input type="text" id="" name="" value="ポリエステル60％"></div>
                        </li>
                        <li>
                          <button class="c_btn-icon close-circ"></button>
                          <span class="label"><input type="text" id="" name="" value=""></span>
                          <div class="cont"><input type="text" id="" name="" value=""></div>
                        </li>
                      </ul>
                      <button class="c_btn c_btn-active primary w-icon add">行を追加する</button>
                    </div><!-- end of p_quote-request__block -->

                  </div>
                </div>
                <div class="c_txt-right p_quote-request__btns">
                  <button class="c_btn c_btn-active secondary">添付ファイル</button>
                  <button class="c_btn c_btn-active primary w-icon add">追加する</button>
                </div>
              </div><!-- end of p_quote-request__box -->

            </div><!-- end of p_quote-request__left -->

            <div class="p_quote-request__right">
              <div class="p_quote-request__box box2">
                <h3 class="ttl">見積依頼先企業</h3>
                <div class="checkboxes">
                  <div class="c_checkbox">
                    <input type="checkbox" id="checkquote01" name="checkquote01" value="" checked="">
                    <label for="checkquote01">株式会社ABC</label>
                  </div>
                  <div class="c_checkbox">
                    <input type="checkbox" id="checkquote02" name="checkquote02" value="" checked="">
                    <label for="checkquote02">XYZ株式会社</label>
                  </div>
                  <div class="c_checkbox">
                    <input type="checkbox" id="checkquote03" name="checkquote03" value="" checked="">
                    <label for="checkquote03">123カンパニー</label>
                  </div>
                  <div class="c_checkbox">
                    <input type="checkbox" id="checkquote04" name="checkquote04" value="" checked="">
                    <label for="checkquote04">カンパニー987</label>
                  </div>
                  <div class="c_checkbox">
                    <input type="checkbox" id="checkquote05" name="checkquote05" value="" checked="">
                    <label for="checkquote05">カンパニー987</label>
                  </div>
                  <div class="c_checkbox">
                    <input type="checkbox" id="checkquote06" name="checkquote06" value="" checked="">
                    <label for="checkquote06">カンパニー987</label>
                  </div>
                </div>
                <div class="c_txt-center"><button class="c_btn c_btn-active primary">見積依頼をする</button></div>
                <div class="p_remark">
                  <span class="label">備考欄</span>
                  <div class="cont"><input type="text" id="" name="" value="" placeholder="販売店には表示しない"></div>
                </div>
              </div>
            </div><!-- end of p_quote-request__right -->
          </div>


        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>