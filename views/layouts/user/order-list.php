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
              <h2 class="c_hdng3">注文一覧 (2-1)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">注文管理</a></li>
                <li class="current">注文一覧</li>
              </ul>
            </div>
          </div>

          <ul class="p_links">
            <li><a href="">商品が発送されました (0002)</a></li>
            <li><a href="">スレッドに未読のメッセージがあります</a></li>
          </ul>

          <form class="p_search-box">
            <div class="p_search-box__text">
              <input type="text" id="" name="" placeholder="検索テキストを入力する">
            </div>
            <div class="item w-icon">
              <input type="date" name="" value="12/10/2024">
              <i class="calendar"></i>
            </div>
            <p class="p_colon">:</p>
            <div class="item w-icon">
              <input type="date" name="" value="12/10/2024">
              <i class="calendar"></i>
            </div>
            <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
          </form>
          <div class="c_table-list p_table-orderlist">
            <div class="c_table__scroll c_scrollbar">
              <table class="c_table-list__inner">
                <tr>
                  <th class="c_txt-center">NO</th>
                  <th>依頼日</th>
                  <th>見積番号</th>
                  <th>状況</th>
                  <th>商品コード</th>
                  <th>商品名</th>
                  <th>数量</th>
                  <th>注文日</th>
                  <th>納期期限</th>
                  <th>注文管理番号</th>
                  <th>メーカー名</th>
                  <th>枝番</th>
                  <th class="c_txt-center">ステータス</th>
                  <th class="c_txt-center">詳細</th>
                  <th class="c_txt-center">見積書</th>
                </tr>
                <tr class="row">
                  <td>1</td>
                  <td>07/03/2023</td>
                  <td>DEMO0202307000</td>
                  <td>自動発行</td>
                  <td>2-9441-04</td>
                  <td>結晶皿 3140-100</td>
                  <td>1</td>
                  <td>12/12/2023</td>
                  <td>19/12/2023</td>
                  <td>243254</td>
                  <td>武田</td>
                  <td>A5767</td>
                  <td><span class="c_status" data-user-status="1">発注受付</span></td>
                  <td class="c_txt-center">詳細</td>
                  <td>
                    <ul class="p_table-bcont">
                      <li><button class="c_btn c_btn-active secondary w-icon download2 s-width">ダウンロード</button></li>
                      <li><button class="c_btn c_btn-active primary">再注文</button></li>
                      <li><button class="c_btn c_btn-active primary">製品の間合せ</button></li>
                    </ul>
                  </td>
                </tr>
                <tr class="row">
                  <td>2</td>
                  <td>16/01/2023</td>
                  <td>HBB0000023</td>
                  <td>見積中</td>
                  <td>3-7015-01</td>
                  <td>卓上ハイスピン遠心機 D3024</td>
                  <td>1</td>
                  <td>12/12/2023</td>
                  <td>19/12/2023</td>
                  <td>465657</td>
                  <td>ファイザー</td>
                  <td>B6784</td>
                  <td><span class="c_status" data-user-status="3">発送準備</span></td>
                  <td class="c_txt-center">詳細</td>
                  <td>
                    <ul class="p_table-bcont">
                      <li><button class="c_btn c_btn-active secondary w-icon download2 s-width">ダウンロード</button></li>
                      <li><button class="c_btn c_btn-active primary">再注文</button></li>
                      <li><button class="c_btn c_btn-active primary">製品の間合せ</button></li>
                    </ul>
                  </td>
                </tr>
                <tr class="row">
                  <td>3</td>
                  <td>14/12/2022</td>
                  <td>HBB0000020</td>
                  <td>見積中</td>
                  <td>1-4635-11</td>
                  <td>バランスディッシュ BD-1 千入</td>
                  <td>1</td>
                  <td>12/12/2023</td>
                  <td>19/12/2023</td>
                  <td>446763</td>
                  <td>吉村製作所</td>
                  <td>C7954</td>
                  <td><span class="c_status" data-user-status="4">納品完了</span></td>
                  <td class="c_txt-center">詳細</td>
                  <td>
                    <ul class="p_table-bcont">
                      <li><button class="c_btn c_btn-active secondary w-icon download2 s-width">ダウンロード</button></li>
                      <li><button class="c_btn c_btn-active primary">再注文</button></li>
                      <li><button class="c_btn c_btn-active primary">製品の間合せ</button></li>
                    </ul>
                  </td>
                </tr>
                <tr class="row">
                  <td>4</td>
                  <td>11/10/2022</td>
                  <td>HBB0000012</td>
                  <td>見積中</td>
                  <td>1-4635-11</td>
                  <td>バランスディッシュ BD-1 千入</td>
                  <td>1</td>
                  <td>12/12/2023</td>
                  <td>19/12/2023</td>
                  <td>768351</td>
                  <td>吉村製作所</td>
                  <td>D8675</td>
                  <td><span class="c_status" data-user-status="1">発注受付</span></td>
                  <td class="c_txt-center">詳細</td>
                  <td>
                    <ul class="p_table-bcont">
                      <li><button class="c_btn c_btn-active secondary w-icon download2 s-width">ダウンロード</button></li>
                      <li><button class="c_btn c_btn-active primary">再注文</button></li>
                      <li><button class="c_btn c_btn-active primary">製品の間合せ</button></li>
                    </ul>
                  </td>
                </tr>
                <tr class="row">
                  <td rowspan="2">5</td>
                  <td rowspan="2">18/08/2022</td>
                  <td rowspan="2">HBB0000008</td>
                  <td rowspan="2">見積中</td>
                  <td>2-5091-13</td>
                  <td>ビーカー20m</td>
                  <td>1</td>
                  <td>12/12/2023</td>
                  <td>19/12/2023</td>
                  <td>454769</td>
                  <td>武田</td>
                  <td>E6326</td>
                  <td><span class="c_status" data-user-status="3">発送準備</span></td>
                  <td class="c_txt-center">詳細</td>
                  <td>
                    <ul class="p_table-bcont">
                      <li><button class="c_btn c_btn-active secondary w-icon download2 s-width">ダウンロード</button></li>
                      <li><button class="c_btn c_btn-active primary">再注文</button></li>
                      <li><button class="c_btn c_btn-active primary">製品の間合せ</button></li>
                    </ul>
                  </td>
                </tr>
                <tr class="row">
                  <td>2-5091-01</td>
                  <td>ビーカー30m</td>
                  <td>1</td>
                  <td>12/12/2023</td>
                  <td>19/12/2023</td>
                  <td>436457</td>
                  <td>ファイザー</td>
                  <td>F6354</td>
                  <td><span class="c_status" data-user-status="1">発注受付</span></td>
                  <td class="c_txt-center">詳細</td>
                  <td>
                    <ul class="p_table-bcont">
                      <li><button class="c_btn c_btn-active secondary w-icon download2 s-width">ダウンロード</button></li>
                      <li><button class="c_btn c_btn-active primary">再注文</button></li>
                      <li><button class="c_btn c_btn-active primary">製品の間合せ</button></li>
                    </ul>
                  </td>
                </tr>
                <tr class="row">
                  <td>6</td>
                  <td>30/06/2022</td>
                  <td>DEMO0202307005</td>
                  <td>自動発行</td>
                  <td>61-2258-15</td>
                  <td>P1 産業用機械工具セット 49点</td>
                  <td>1</td>
                  <td>12/12/2023</td>
                  <td>19/12/2023</td>
                  <td>243264</td>
                  <td>リトマス株式会社</td>
                  <td>G8859</td>
                  <td><span class="c_status" data-user-status="4">納品完了</span></td>
                  <td class="c_txt-center">詳細</td>
                  <td>
                    <ul class="p_table-bcont">
                      <li><button class="c_btn c_btn-active secondary w-icon download2 s-width">ダウンロード</button></li>
                      <li><button class="c_btn c_btn-active primary">再注文</button></li>
                      <li><button class="c_btn c_btn-active primary">製品の間合せ</button></li>
                    </ul>
                  </td>
                </tr>
              </table><!-- end of inner -->
            </div><!-- end of c_table__scroll -->
          </div><!-- end of c_table -->




        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>