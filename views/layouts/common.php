<!DOCTYPE html>
<html lang="ja">
<?php include('elements/head.php'); ?>

<body>
  <h2 style="color: white; background:#000; padding:20px;">HEADINGS</h2><br>
  <h3 class="c_hdng1">Heading 1</h3>
  <h3 class="c_hdng2">Heading 2</h3>
  <h3 class="c_hdng3">Heading 3</h3>
  <br><br>

  <h2 style="color: white; background:#000; padding:20px;">BUTTON ICON ONLY</h2><br>
  <button class="c_btn-icon edit"></button>
	<button class="c_btn-icon delete"></button>
  <button class="c_btn-icon close"></button>
  <button class="c_btn-icon close-circ"></button>
  <br><br>


  <h2 style="color: white; background:#000; padding:20px;">BUTTONS</h2><br>
  big
  <button class="c_btn primary">一括ダウンロード</button>
  <button class="c_btn secondary">一括ダウンロード</button>
  <button class="c_btn default">一括ダウンロード</button>
  <button class="c_btn disabled" disabled>一括ダウンロード</button>
  <br><br>

  med
  <button class="c_btn c_btn-active primary">新規作成</button>
  <button class="c_btn c_btn-active secondary">新規作成</button>
  <br><br>

  with icon
  <button class="c_btn c_btn-active primary w-icon search">検索</button>
  <button class="c_btn c_btn-active secondary w-icon search">検索</button>
  <button class="c_btn c_btn-active primary w-icon add">追加する</button>
  <button class="c_btn c_btn-active secondary w-icon add">追加する</button>
  <button class="c_btn c_btn-active variant w-icon add">追加する</button>
  <button class="c_btn c_btn-active primary w-icon add s-width">追加する</button>
  <button class="c_btn c_btn-active secondary w-icon add s-width">追加する</button>
  <button class="c_btn c_btn-active primary add w-icon-right s-width">追加する</button>
  <button class="c_btn c_btn-active secondary add w-icon-right s-width">追加する</button>

  <br><br>

  small
  <button class="c_btn-small default">検索</button>
  <button class="c_btn-small secondary">検索</button>
  <button class="c_btn-small default mini">検索</button>
  <button class="c_btn-small secondary mini">検索</button>
  <br><br>
  <br><br>

  <h2 style="color: white; background:#000; padding:20px;">STATUS</h2><br>
  <span class="c_status" data-user-status="1">見積済 1</span><br>
  <span class="c_status" data-user-status="2">取扱無 2</span><br>
  <span class="c_status" data-user-status="3">承認待 3 </span><br>
  <span class="c_status" data-user-status="4">見積中 4</span><br>
  <span class="c_status" data-user-status="5">無回答 5</span><br>
  <br><br>

  <h2 style="color: white; background:#000; padding:20px;">INPUT, SELECT, WITH ICON</h2><br>
  <form class="p_modal__form" style="position: static; transform: none;">

    <div class="item w-sidelabel">
      <label for="">納期</label>
      <input type="text" value="11/1">
    </div>

    <div class="item">
      <input type="text" id="" name="" placeholder="法人名">
    </div>

    <div class="item">
      <label for="">電話番号</label>
      <input type="text" name="">
    </div>

    <div class="item">
      <div class="c_select">
        <select id="" name="">
          <option value="">選択して下さい</option>
          <option value="">選択して下さい</option>
          <option value="">選択して下さい</option>
        </select>
      </div>
    </div>

    <div class="item w-icon">
      <label for="">with icon: eye, calendar</label>
      <input type="password" name="">
      <i class="eye"></i>
    </div>


    <div class="item c_icon-l">
      <label for="username">input type: email</label>
      <input type="email" id="email" name="email" placeholder="大阪大学" required>
    </div>
    <div class="item c_icon-l">
      <label for="password">input type: password, text, select </label>
      <input type="password" id="password" name="password" placeholder="大阪大学" required>
    </div>
    <div class="item">
      <div class="c_icon-l">
        <label for="">input type: select</label>
        <select id="" name="">
          <option value="">選択して下さい</option>
          <option value="">選択して下さいsfsd</option>
          <option value="">選択しsd</option>
        </select>
      </div>
    </div>

    <div class="item c_icon-l ">
      <label for="password">input username - invalid / error </label>
      <input class="error" type="text" id="" name="" placeholder="ユーザー名" value="usernamehere" required>
      <span class="error__message">*無効なユーザー名。もう一度試してください</span>
    </div>

    <div class="item">
      <div class="c_icon-l w-warn">
        <label for="">with circle warning</label>
        <select id="" name="">
          <option value="">選択して下さい</option>
          <option value="">選択して下さいsfsd</option>
          <option value="">選択しsd</option>
        </select>
      </div>
    </div>

    <div class="item">
      <div class="c_icon-l">
        <label for="">error</label>
        <select class="error" id="" name="">
          <option value="">選択して下さい</option>
          <option value="">選択して下さいsfsd</option>
          <option value="">選択しsd</option>
        </select>
        <span class="error__message">*間違った形式</span>
      </div>
    </div>

    <div class="item">
      <div class="c_icon-l">
        <label for="">disabled</label>
        <select id="" name="" disabled>
          <option value="">選択して下さい</option>
          <option value="">選択して下さいsfsd</option>
          <option value="">選択しsd</option>
        </select>
      </div>
    </div>
    
  </form>
  <br><br>

  <h2 style="color: white; background:#000; padding:20px;">RADIO</h2><br>
  <div class="item">
    <span class="c_label">有料機能 A :</span>
    <div class="c_radio">
      <input type="radio" name="options" id="option1" value="option1" checked="">
      <label for="option1">利用する</label>

      <input type="radio" name="options" id="option2" value="option2">
      <label for="option2">利用しない</label>
    </div>
  </div>
  <br><br>

  <h2 style="color: white; background:#000; padding:20px;">CHECKBOX</h2><br>
  <div class="c_checkbox">
    <input type="checkbox" id="checkoption01" name="checkoption01" value="" checked="">
    <label for="checkoption01"></label>
  </div>
  <br><br>

  <h2 style="color: white; background:#000; padding:20px;">CHECKBOX radio="type"</h2><br>
  <div class="item full">
    <span class="c_label">有効/無効: </span>
    <div class="c_checkbox w-label">
      <input type="radio" name="yesno" id="option_yes" value="option_yes" checked="">
      <label for="option_yes">Yes</label>

      <input type="radio" name="yesno" id="option_no" value="option_no">
      <label for="option_no">No</label>
    </div>
  </div>

  <br><br>


  <h2 style="color: white; background:#000; padding:20px;">TABS</h2><br>
  <div class="p_tabs" style="max-width: 800px;">
    <ul class="p_tabs__btns">
      <li><a href="#user">ユーザー</a></li>
      <li><a href="#approval_func" class="current">承認機能</a></li>
      <li><a href="#dealer_reg">販売店登録</a></li>
      <li><a href="#paid_func">有料機能</a></li>
    </ul>

    <div id="approval_func" class="p_tabs__content">
      content here...<br>
      content here...<br>
      content here...<br>
      content here...<br>
      content here...<br>
      content here...<br>
      content here...<br>
      content here...<br>
      content here...<br>
      content here...<br>
      content here...<br>
    </div>
  </div>

  <h2 style="color: white; background:#000; padding:20px;">TABLE</h2><br>
  <div class="c_table">
    <div class="c_table__scroll c_scrollbar">
      <table class="c_table__inner">
        <tr>
          <th>番号順</th>
          <th>会社名</th>
          <th>部署名</th>
          <th>住所</th>
          <th>電話番号</th>
          <th>販売店追加</th>
        </tr>
        <tr>
          <td>1</td>
          <td>A株式会社</td>
          <td>M営業所</td>
          <td></td>
          <td></td>
          <td class="c_txt-center">
            <div class="c_checkbox">
              <input type="checkbox" id="samp" name="samp" value="">
              <label for="samp"></label>
            </div>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>株式会社B</td>
          <td>N営業所</td>
          <td></td>
          <td></td>
          <td class="c_txt-center">
            <div class="c_checkbox">
              <input type="checkbox" id="checkoption02" name="checkoption02" value="">
              <label for="checkoption02"></label>
            </div>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>D有限会社</td>
          <td>P営業所</td>
          <td></td>
          <td></td>
          <td class="c_txt-center">
            <div class="c_checkbox">
              <input type="checkbox" id="checkoption03" name="checkoption03" value="">
              <label for="checkoption03"></label>
            </div>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>サービス</td>
          <td></td>
          <td></td>
          <td></td>
          <td class="c_txt-center">
            <div class="c_checkbox">
              <input type="checkbox" id="checkoption04" name="checkoption04" value="">
              <label for="checkoption04"></label>
            </div>
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>リホールディングス</td>
          <td>乙支店</td>
          <td></td>
          <td></td>
          <td class="c_txt-center">
            <div class="c_checkbox">
              <input type="checkbox" id="checkoption05" name="checkoption05" value="">
              <label for="checkoption05"></label>
            </div>
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>K物流</td>
          <td></td>
          <td></td>
          <td></td>
          <td class="c_txt-center">
            <div class="c_checkbox">
              <input type="checkbox" id="checkoption06" name="checkoption06" value="">
              <label for="checkoption06"></label>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div><!-- c_table -->

  <h2 style="color: white; background:#000; padding:20px;">Search-box</h2><br>
  <div class="p_search-box">
    <div class="p_search-box__text">
      <input type="text" id="" name="" placeholder="検索テキストを入力する">
    </div>
    <button class="p_search-box__btn c_btn c_btn-active primary w-icon search">検索</button>
  </div>

  <br><br>

  <h2 style="color: white; background:#000; padding:20px;">Table list</h2><br>
  <div class="c_table-list">
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
          <td>見積依頼</td>
          <td>マスク</td>
          <td>AB-001</td>
          <td>10/7</td>
          <td><span class="c_status" data-user-status="2">取扱無</span></td>
          <td class="c_txt-center"><a href="">詳細</a></td>
        </tr>
        <tr class="row">
          <td>注文</td>
          <td>手袋</td>
          <td>B-XYZ002</td>
          <td>10/3</td>
          <td><span class="c_status" data-user-status="4">見積中</span></td>
          <td class="c_txt-center"><a href="">詳細</a></td>
        </tr>
        <tr class="row">
          <td>見積依頼</td>
          <td>検査キット</td>
          <td>B-A001</td>
          <td>10/7</td>
          <td><span class="c_status" data-user-status="3">承認待</span></td>
          <td class="c_txt-center"><a href="">詳細</a></td>
        </tr>
        <tr class="row">
          <td>注文</td>
          <td>試験紙</td>
          <td>X-001</td>
          <td><span class="fire">9/30</span></td>
          <td><span class="c_status" data-user-status="1">見積済</span></td>
          <td class="c_txt-center"><a href="">詳細</a></td>
        </tr>
      </table><!-- end of inner -->
  </div><!-- end of c_table -->
  <br><br>

  <h2 style="color: white; background:#000; padding:20px;">Table list - border bottom only</h2><br>
  <div class="c_table-list secondary">
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
          <td>見積依頼</td>
          <td>マスク</td>
          <td>AB-001</td>
          <td>10/7</td>
          <td><span class="c_status" data-user-status="2">取扱無</span></td>
          <td class="c_txt-center"><a href="">詳細</a></td>
        </tr>
        <tr class="row">
          <td>注文</td>
          <td>手袋</td>
          <td>B-XYZ002</td>
          <td>10/3</td>
          <td><span class="c_status" data-user-status="4">見積中</span></td>
          <td class="c_txt-center"><a href="">詳細</a></td>
        </tr>
        <tr class="row">
          <td>見積依頼</td>
          <td>検査キット</td>
          <td>B-A001</td>
          <td>10/7</td>
          <td><span class="c_status" data-user-status="3">承認待</span></td>
          <td class="c_txt-center"><a href="">詳細</a></td>
        </tr>
        <tr class="row">
          <td>注文</td>
          <td>試験紙</td>
          <td>X-001</td>
          <td><span class="fire">9/30</span></td>
          <td><span class="c_status" data-user-status="1">見積済</span></td>
          <td class="c_txt-center"><a href="">詳細</a></td>
        </tr>
      </table><!-- end of inner -->
  </div><!-- end of c_table -->



  </div>




</body>
</html>