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
              <h2 class="c_hdng3">見積詳細 (2-2)</h2>
              <ul class="c_breadcrumb">
                <li><a href="">見積管理</a></li>
                <li><a href="">見積一覧</a></li>
                <li class="current">見積詳細 (0002)</li>
              </ul>
            </div>
            <div class="right p_main-content__select">
              <div class="item">
                <label for="username">テンプレート形式</label>
                <div class="c_select">
                  <select id="" name="">
                    <option value="">パターン1</option>
                    <option value="">パターン2</option>
                    <option value="">パターン3</option>
                  </select>
                </div>
              </div>
              <div class="item">
                <label for="username">見積書式</label>
                <div class="c_select">
                  <select id="" name="">
                    <option value="">簡易見積テンプレート</option>
                    <option value="">簡易見積テンプレート02</option>
                    <option value="">簡易見積テンプレート03</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="p_block01">
            <form class="p_search-box">
              <div class="p_search-box__text">
                <input type="text" id="" name="" placeholder="検索テキストを入力する">
              </div>
              <button type="submit" class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
            </form>
            <button class="c_btn c_btn-active primary">引用を拒否する</button>
          </div>

          <form class="p_form-create">
            <div class="c_table-list secondary p_table-create">
              <table class="c_table-list__inner">
                <tr>
                  <th>商品名</th>
                  <th>型番</th>
                  <th>単価</th>
                  <th>数量</th>
                  <th>単位</th>
                  <th>金額</th>
                  <th>注記</th>
                </tr>
                <tr>
                  <td><span>マスク</span></td>
                  <td><span>AB-001</span></td>
                  <td><input type="text" value="2,500"></td>
                  <td><span>1</span></td>
                  <td><input type="text" value="箱"></td>
                  <td><span>2,500円</span></td>
                  <td><button class="c_btn-icon note"></button></td>
                </tr>
                <tr>
                  <td><span>手袋</span></td>
                  <td><span>B-XYZ002</span></td>
                  <td><input type="text" value="1,500"></td>
                  <td><span>2</span></td>
                  <td><input type="text" value="ケース"></td>
                  <td><span>1,500円</span></td>
                  <td><button class="c_btn-icon note"></button></td>
                </tr>
                <tr>
                  <td><input type="text" value="配送料"></td>
                  <td></td>
                  <td><input type="text" value="1,000"></td>
                  <td><input type="text" value="1"></td>
                  <td><input type="text" value="回"></td>
                  <td><span>1,000円</span></td>
                  <td><button class="c_btn-icon note"></button></td>
                </tr>
                <tr>
                  <td><input type="text" value="値引"></td>
                  <td></td>
                  <td><input class="c_txt-red" type="text" value="1,000"></td>
                  <td><input type="text" value="1"></td>
                  <td><input type="text" value="回"></td>
                  <td><span class="c_txt-red">1,000円</span></td>
                  <td><button class="c_btn-icon note"></button></td>
                </tr>
                <tr>
                  <td>
                    <div class="p_table-create__add"><button class="c_btn-icon add"></button><input type="text" value=""></div>
                  </td>
                  <td><input type="text" value=""></td>
                  <td><input type="text" value=""></td>
                  <td><input type="text" value=""></td>
                  <td><input type="text" value=""></td>
                  <td><input type="text" value=""></td>
                  <td><button class="c_btn-icon note"></button></td>
                </tr>
                <tr>
                  <td><span>小計（税抜)</span></td>
                  <td><span></span></td>
                  <td><span></span></td>
                  <td><span></span></td>
                  <td><span>4,000円</span></td>
                  <td><span>大阪大学</span></td>
                  <td><span></span></td>
                </tr>
                <tr>
                  <td><span>消費税（10%)</span></td>
                  <td><span></span></td>
                  <td><span></span></td>
                  <td><span></span></td>
                  <td><span>4,00円</span></td>
                  <td><span>大阪大学</span></td>
                  <td><span></span></td>
                </tr>
                <tr>
                  <td><span>合計（税込)</span></td>
                  <td><span></span></td>
                  <td><span></span></td>
                  <td><span></span></td>
                  <td><span>4,000円</span></td>
                  <td><span>大阪大学</span></td>
                  <td><span></span></td>
                </tr>
              </table><!-- end of inner -->
            </div><!-- end of c_table -->

            <div class="p_form-create__comment">
              <span class="label">コメント：顧客側からのコメントを表示</span>
              <div class="item w-sidelabel">
                <label for="">納期</label>
                <input type="text" value="11/1">
              </div>
            </div>

            <div class="c_box-text">
              <span class="label">備考欄</span>
              <input class="cont c_txt-red" type="text" value="備考内容を記載する">
            </div>

            <div class="c_box-text">
              <span class="label">注記</span>
              <textarea class="cont">Note</textarea>
            </div>

            <div class="c_txt-right p_form-create__btns">
              <button class="c_btn primary">作成する</button>
              <button class="c_btn primary">チャット</button>
              <button class="c_btn primary">見積プレビュー</button>
            </div>

          </form>

          <div class="p_modal show">
            <div class="p_modal-quote p_modal-details">
              <h3 class="c_hdng3 p_modal-quote__ttl">御見積書</h3>

              <div class="p_modal-quote__dtails">
                <div class="left">
                  <table class="tbl-02">
                    <tr>
                      <th>品名</th>
                      <th>數量</th>
                      <th>単位</th>
                      <th>単価</th>
                      <th>金額</th>
                      <th>摘要</th>
                    </tr>
                    <tr>
                      <td>NA0011-BC</td>
                      <td>12</td>
                      <td>式</td>
                      <td>2,000円</td>
                      <td>2,500円</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>BC0012-HD</td>
                      <td>30</td>
                      <td>式</td>
                      <td>18,000円</td>
                      <td>19,000円</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </table>
                </div>

                <div class="right">
                  <table class="tbl-03">
                    <tr>
                      <th>合計金額</th>
                    </tr>
                    <tr>
                      <td></td>
                    </tr>
                  </table>
                  <table class="tbl-04">
                    <tr>
                      <th>小計</th>
                      <td>21,500円</td>
                    </tr>
                    <tr>
                      <th>消費税(10%)</th>
                      <td>2,150円</td>
                    </tr>
                    <tr>
                      <th>合計</th>
                      <td>23,650円</td>
                    </tr>
                  </table>
                </div>

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