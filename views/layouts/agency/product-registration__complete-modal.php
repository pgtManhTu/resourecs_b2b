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
              <h2 class="c_hdng3">商品管理 (3-2)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">商品管理</a></li>
                <li class="current">新規商品登録</li>
              </ul>
            </div>
            <div class="right">
              <button class="c_btn c_btn-active primary">引用を拒否する</button>
            </div>
          </div>

          <form class="p_search-box right">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="検索テキストを入力する">
            </div>
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
          </form>

          <div class="p_table-prodreg">
            <table class="p_table-prodreg__inner">
              <tbody>
                <tr>
                  <th>項目</th>
                  <th>内容</th>
                </tr>
                <tr>
                  <td data-label="項目">
                    <div>商品名 <span class="txt-error">*</span></div>
                  </td>
                  <td data-label="内容">
                    <div><input type="text" id="" name="" value="オールオーバーラメドゥーサスモールハンドバッグ"></div>
                  </td>
                </tr>
                <tr>
                  <td data-label="項目">
                    <div>商品説明 <span class="txt-error">*</span></div>
                  </td>
                  <td data-label="内容">
                    <div><textarea name="text" id="">ジャカード織りであしらったヴェルサーチェ オールオーバー柄で再解釈したラ メドゥーサ ハンドバッグ。ラ メドゥーサ プレートをあしらった、メゾンを代表するスタイル。交換可能なレザー &amp; チェーンのショルダーストラップ付き。</textarea></div>
                  </td>
                </tr>
                <tr>
                  <td data-label="項目">
                    <div>商品画像 <span class="txt-error">*</span></div>
                  </td>
                  <td data-label="内容">
                    <div>
                      <ul>
                        <li>
                          <figure>
                            <img src="/resources/assets/img/products/new-prod-img.png" alt="">
                            <ul class="icons">
                              <li><button class="c_btn-icon edit-photo"></button></li>
                              <li><button class="c_btn-icon delete"></button></li>
                            </ul>
                          </figure>
                        </li>
                        <li>
                          <button class="image">もっと画像 <span>(1/9)</span></button>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td data-label="項目">
                    <div>製品ビデオ</div>
                  </td>
                  <td data-label="内容">
                    <div>
                      <ul>
                        <li class="play-icon">
                          <figure>
                            <img src="/resources/assets/img/products/new-prod-video.png" alt="">
                            <ul class="icons">
                              <li><button class="c_btn-icon delete"></button></li>
                            </ul>
                          </figure>
                        </li>
                        <li>
                          <button class="video">動画を追加 する</button>
                        </li>
                        <li>
                          <ul class="video-desc">
                            <li>サイズ: 最大 30Mb、解像度は 1280x1280px を超えない</li>
                            <li>長さ: 10 代～60 代</li>
                            <li>フォーマット: MP4 (vp9 はサポートされていません)</li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td data-label="項目">
                    <div>メーカー名 <span class="txt-error">*</span></div>
                  </td>
                  <td data-label="内容">
                    <div><input type="text" id="" name="" value="吉村製作所"></div>
                  </td>
                </tr>
                <tr>
                  <td data-label="項目">
                    <div>型式 <span class="txt-error">*</span></div>
                  </td>
                  <td data-label="内容">
                    <div><input type="text" id="" name="" value="B-XYZ002"></div>
                  </td>
                </tr>
                <tr>
                  <td data-label="項目">
                    <div>単位 <span class="txt-error">*</span></div>
                  </td>
                  <td data-label="内容">
                    <div><input type="text" id="" name="" value="1個/箱"></div>
                  </td>
                </tr>
                <tr>
                  <td data-label="項目">
                    <div class="pc-only">商品画像 <span class="txt-error">*</span></div>
                    <div class="sp-only">商品の分類</div>
                  </td>
                  <td data-label="内容">
                    <div><button class="p_table-prodreg__button c_btn c_btn-active primary w-icon add">分類を追加する</button></div>
                  </td>
                </tr>
                <tr>
                  <td data-label="項目">
                    <div>価格 <span class="txt-error">*</span></div>
                  </td>
                  <td data-label="内容">
                    <div class="item input-label">
                      <input type="text" id="" name="" value="980">
                      <button class="c_btn c_btn-active primary">価格設定</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td data-label="項目">
                    <div>SKU</div>
                  </td>
                  <td data-label="内容">
                    <div><input type="text" id="" name=""></div>
                  </td>
                </tr>
                <tr>
                  <td data-label="項目">
                    <div>納期</div>
                  </td>
                  <td data-label="内容">
                    <div><input type="text" id="" name="" value="7～10日"></div>
                  </td>
                </tr>
                <tr>
                  <td data-label="項目">
                    <div>関連商品</div>
                  </td>
                  <td data-label="内容">
                    <div class="rel-prod">
                      <div class="tag-cont">
                        <span class="prod-tag">トーさージューグ<button class="c_btn-icon close"></button></span>
                      </div>
                      <ul class="c_scrollbar">
                        <li>バック</li>
                        <li>ハンドバッグレティース</li>
                        <li>トーさージューグ</li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td data-label="項目">
                    <div>特記事項</div>
                  </td>
                  <td data-label="内容">
                    <div><textarea name="text" id="">平日の配達</textarea></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div><!-- end of c_table -->

          <!-- Product Registration Complete Modal -->
          <?php include('_product-registration-complete-modal.php'); ?>


        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>