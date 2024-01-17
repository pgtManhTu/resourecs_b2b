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

          <div class="c_table-wide p_table-prodreg">
            <table class="c_table-wide__inner">
              <tbody>
                <tr>
                  <th>区分</th>
                  <th>商品名</th>
                </tr>
                <tr>
                  <td>商品名 <span class="txt-error">*</span></td>
                  <td>
                    <input type="text" id="" name="" value="オールオーバーラメドゥーサスモールハンドバッグ">
                  </td>
                </tr>
                <tr>
                  <td>本文 <span class="txt-error">*</span></td>
                  <td>
                    <textarea name="text" id="">ジャカード織りであしらったヴェルサーチェ オールオーバー柄で再解釈したラ メドゥーサ ハンドバッグ。ラ メドゥーサ プレートをあしらった、メゾンを代表するスタイル。交換可能なレザー & チェーンのショルダーストラップ付き。</textarea>
                  </td>
                </tr>
                <tr>
                  <td>商品画像 <span class="txt-error">*</span></td>
                  <td>
                    <ul>
                      <li>
                        <figure><img src="/resources/assets/img/products/new-prod-img.png" alt="">
                          <ul class="icons">
                            <li><a href=""><span class="edit-photo"></span></a></li>
                            <li><a href=""><span class="delete"></span></a></li>
                          </ul>
                        </figure>
                      </li>
                      <li>
                        <button class="image">もっと画像 <span>(1/9)</span></button>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>製品ビデオ</td>
                  <td>
                    <ul>
                      <li>
                        <figure><img src="/resources/assets/img/products/new-prod-video.png" alt="">
                          <ul class="icons">
                            <li><a href=""><span class="delete"></span></a></li>
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
                  </td>
                </tr>
                <tr>
                  <td>メーカー名 <span class="txt-error">*</span></td>
                  <td>
                    <input type="text" id="" name="" value="吉村製作所">
                  </td>
                </tr>
                <tr>
                  <td>型式 <span class="txt-error">*</span></td>
                  <td>
                    <input type="text" id="" name="" value="B-XYZ002">
                  </td>
                </tr>
                <tr>
                  <td>単位 <span class="txt-error">*</span></td>
                  <td>
                    <input type="text" id="" name="" value="1個/箱">
                  </td>
                </tr>
                <tr>
                  <td>商品画像 <span class="txt-error">*</span></td>
                  <td>
                    <button class="c_btn c_btn-active primary w-icon add">分類を追加する</button>
                  </td>
                </tr>
                <tr>
                  <td>価格 <span class="txt-error">*</span></td>
                  <td>
                    <div class="item input-label">
                      <input type="text" id="" name="" value="980">
                      <button class="c_btn c_btn-active primary w-icon add">分類を追加する</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>SKU</td>
                  <td>
                    <input type="text" id="" name="">
                  </td>
                </tr>
                <tr>
                  <td>納期</td>
                  <td>
                    <input type="text" id="" name="" value="7～10日">
                  </td>
                </tr>
                <tr>
                  <td>関連商品</td>
                  <td>
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
                  <td>特記事項</td>
                  <td>
                    <textarea name="text" id="">平日の配達</textarea>
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