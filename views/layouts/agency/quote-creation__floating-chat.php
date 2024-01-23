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
            <button class="pc-only c_btn c_btn-active primary">引用を拒否する</button>
          </div>

          <form class="p_form-create">
            <div class="c_table-list secondary p_table-create p_table-combi">
              <div class="sp-only c_table__ttl-sp open"><!-- on mobile, just add/remove the class "open" to show/hide the content  -->
                <div>見積詳細 (0002)</div>
                <small class="arrow"></small>
              </div>
              
              <div class="p_table-combi__cont">

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
                    <td data-label="商品名" class="c_hlight"><div>マスク</div></td>
                    <td data-label="型番"><div>AB-001</div></td>
                    <td data-label="単価"><div><input type="text" value="2,500"></div></td>
                    <td data-label="数量"><div>1</div></td>
                    <td data-label="単位"><div><input type="text" value="箱"></div></td>
                    <td data-label="金額"><div>2,500円</div></td>
                    <td data-label="注記"><div><button class="c_btn-icon note"></button></div></td>
                  </tr>
                  <tr>
                    <td data-label="商品名" class="c_hlight"><div>手袋</div></td>
                    <td data-label="型番"><div>B-XYZ002</div></td>
                    <td data-label="単価"><div><input type="text" value="1,500"></div></td>
                    <td data-label="数量"><div>2</div></td>
                    <td data-label="単位"><div><input type="text" value="ケース"></div></td>
                    <td data-label="金額"><div>1,500円</div></td>
                    <td data-label="注記"><div><button class="c_btn-icon note"></button></div></td>
                  </tr>
                  <tr>
                    <td data-label="商品名" class="c_hlight"><div><input type="text" value="配送料"></div></td>
                    <td data-label="型番"><div></div></td>
                    <td data-label="単価"><div><input type="text" value="1,000"></div></td>
                    <td data-label="数量"><div><input type="text" value="1"></div></td>
                    <td data-label="単位"><div><input type="text" value="回"></div></td>
                    <td data-label="金額"><div>1,000円</div></td>
                    <td data-label="注記"><div><button class="c_btn-icon note"></button></div></td>
                  </tr>
                  <tr>
                    <td data-label="商品名" class="c_hlight"><div><input type="text" value="値引"></div></td>
                    <td data-label="型番"><div></div></td>
                    <td data-label="単価"><div class="c_txt-red"><input type="text" value="1,000"></div></td>
                    <td data-label="数量"><div><input type="text" value="1"></div></td>
                    <td data-label="単位"><div><input type="text" value="回"></div></td>
                    <td data-label="金額"><div><span class="c_txt-red">1,000円</div></td>
                    <td data-label="注記"><div><button class="c_btn-icon note"></button></div></td>
                  </tr>
                  <tr class="pc-only">
                    <td>
                      <div class="p_table-create__add"><button class="c_btn-icon add"></button><input type="text" value=""></div>
                    </td>
                    <td data-label="型番"><div></div></td>
                    <td data-label="単価"><div><input type="text" value=""></div></td>
                    <td data-label="数量"><div><input type="text" value=""></div></td>
                    <td data-label="単位"><div><input type="text" value=""></div></td>
                    <td data-label="金額"><div><input type="text" value=""></div></td>
                    <td data-label="注記"><div><button class="c_btn-icon note"></button></div></td>
                  </tr>
                </table><!-- end of inner -->

                <div class="p_table-create__add sp-only"><button class="c_btn-icon add"></button><input type="text" value=""></div>

                <table class="p_table-tax">
                  <tr>
                    <td class="label">小計（税抜) </td>
                    <td class="amount"><small>4,000円</small> <small>大阪大学</small></td>
                  </tr>
                  <tr>
                    <td class="label">消費税（10%) </td>
                    <td class="amount"><small>4,000円</small> <small>大阪大学</small></td>
                  </tr>
                  <tr>
                    <td class="label">合計（税込) </td>
                    <td class="amount"><small>4,000円</small> <small>大阪大学</small></td>
                  </tr>
                </table>
              </div>
              
            </div><!-- end of p_table-create -->

            <button class="sp-only c_btn c_btn-active primary p_form-create__btn-quote">引用を拒否する</button>

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

          <!-- Floating Chat -->
          <?php
          $tab = isset($_GET['tab']) ? $_GET['tab'] : 1;
          include('_chat-box.php');
          ?>



        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>