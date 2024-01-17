<div class="p_chat">
  <h3 class="p_chat__ttl">XYZ株式会社</h3>
  <button class="c_btn-icon close-circ"></button>

  <div class="p_chat__tabs">
    <ul>

    <?php
    switch($tab){
      case 2: ?>
      <li><a href="?tab=1">追加する</a></li>
      <li><a class="current" href="?tab=2">ファイル</a></li>
      <li><a href="?tab=3">追共</a></li>
    <?php break; ?>
    <?php case 3: ?>
      <li><a href="?tab=1">追加する</a></li>
      <li><a href="?tab=2">ファイル</a></li>
      <li><a class="current" href="?tab=3">追共</a></li>
    <?php break; ?>   
    <?php default: ?>    
      <li><a class="current" href="?tab=1">追加する</a></li>
      <li><a href="?tab=2">ファイル</a></li>
      <li><a href="?tab=3">追共</a></li>
    
    <?php break; ?>
    <?php } //end switch ?>

    </ul>
  </div>
    
  <div class="p_chat__padd">
    <div class="p_chat__content">
      <?php
      switch($tab){
        case 2: ?>
            <div class="p_chat__file">

              <div class="item">
                <h4 class="p_chat__subttl">添付ファイル</h4>
                <div class="p_chat__file-scroll c_scrollbar small">
                  <div class="cont">
                    <ul class="p_chat__filelist">
                      <li>
                        <a href="">
                          <div class="c_file">
                            <div class="c_file__inner">
                              <img src="/resources/assets/img/icons/pdf.svg" alt=""/>
                              <span class="c_file__name">カタログ.pdf<small class="c_file__size">78MB</small></span>
                            </div>
                            <span class="c_file__date">2023/10/17</span>
                          </div>
                          <span class="c_btn-icon downloaded"></span>
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <div class="c_file">
                            <div class="c_file__inner">
                              <img src="/resources/assets/img/icons/jpg.svg" alt=""/>
                              <span class="c_file__name">カタログ.doc<small class="c_file__size">78MB</small></span>
                            </div>
                            <span class="c_file__date">2023/10/17</span>
                          </div>
                          <span class="c_btn-icon download"></span>
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <div class="c_file">
                            <div class="c_file__inner">
                              <img src="/resources/assets/img/icons/pdf.svg" alt=""/>
                              <span class="c_file__name">カタログ.pdf<small class="c_file__size">78MB</small></span>
                            </div>
                            <span class="c_file__date">2023/10/17</span>
                          </div>
                          <span class="c_btn-icon download"></span>
                        </a>
                      </li>
                    </ul>
                  </div><!-- end of cont -->
                </div><!-- end of c_scrollbar -->
              </div><!-- end of item -->

              <div class="item">
                <h4 class="p_chat__subttl">リンク</h4>
                <div class="p_chat__file-scroll c_scrollbar small">
                  <div class="cont">
                    <ul class="p_chat__linklist">
                      <li>
                        <a href="">
                          <img src="/resources/assets/img/products/img01.jpg" alt="">
                          <span>https://lynvn.com/en/collections/best-seller/products/</span>
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <img src="/resources/assets/img/products/img02.jpg" alt="">
                          <span>https://www.adidas.com.vn/vi/ivy-park-top-ten-2000/ID5107.html</span>
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <img src="/resources/assets/img/products/img01.jpg" alt="">
                          <span>https://lynvn.com/en/collections/best-seller/products/</span>
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <img src="/resources/assets/img/products/img02.jpg" alt="">
                          <span>https://www.adidas.com.vn/vi/ivy-park-top-ten-2000/ID5107.html</span>
                        </a>
                      </li>
                    </ul>
                  </div><!-- end of cont -->
                </div><!-- end of c_scrollbar -->
              </div><!-- end of item -->

            </div><!-- end of p_chat__file -->
      <?php break; ?>

      <?php case 3: ?>
          <div class="p_chat__tab1-scroll c_scrollbar small">
            <div class="p_chat__follow">

              <h4 class="p_chat__subttl">スレッドを共有する</h4>
              <div class="p_chat__subhdng">
                <div class="p_chat__profname">
                  <div class="p_chat__profpic"><img src="/resources/assets/img/users/user04.png" alt="" /></div>
                  <span class="name">佐藤一郎</span>
                </div>
                <div class="p_chat__sidefile">
                  <div class="c_file">
                    <div class="c_file__inner">
                      <img src="/resources/assets/img/icons/pdf.svg" alt=""/>
                      <span class="c_file__name">カタログ.pdf<small class="c_file__size">78MB</small></span>
                    </div>
                  </div>
                </div>
              </div>
              
              <ul class="p_chat__checboxes">
                <li>
                  <div class="c_checkbox">
                    <input type="checkbox" id="follow1" name="follow1" value="" >
                    <label for="follow1">i太朗</label>
                  </div>
                </li>
                <li>
                  <div class="c_checkbox">
                    <input type="checkbox" id="follow2" name="follow2" value="" >
                    <label for="follow2">金城 三朗</label>
                  </div>
                </li>
                <li>
                  <div class="c_checkbox">
                    <input type="checkbox" id="follow3" name="follow3" value="" >
                    <label for="follow3">伊藤 士郎</label>
                  </div>
                </li>
              </ul>

            </div><!-- end of p_chat__follow -->
          </div>
      <?php break; ?>   

      <?php default: ?>  
        <div class="p_chat__tab1-scroll c_scrollbar small">
          <div class="p_chat__tab1">

              <div class="p_chat__item left">
                <div class="p_chat__profpic"><img src="/resources/assets/img/users/user01.png" alt="" /></div>
                <div class="p_chat__message">
                  <div class="box">
                    <span class="name">佐藤一郎</span>
                    <div class="inner">
                      はじめまして
                    </div>
                  </div>
                  <div class="stat"><span>10:15</span></div>
                </div>
              </div><!-- end of p_chat__item -->

              <div class="p_chat__item right">
                <div class="p_chat__profpic"><img src="/resources/assets/img/users/user04.png" alt="" /></div>
                <div class="p_chat__message">
                  <div class="box">
                    <div class="inner">
                      よろしくお願いします
                    </div>
                  </div>
                  <div class="stat"><span>既読 </span><span>10:20</span><span><img class="check" src="/resources/assets/img/icons/check.svg" alt="check"></span></div>
                </div>
              </div><!-- end of p_chat__item -->

              <div class="p_chat__item left">
                <div class="p_chat__profpic"><img src="/resources/assets/img/users/user02.png" alt="" /></div>
                <div class="p_chat__message">
                  <div class="box">
                    <span class="name">山田 太朗</span>
                    <div class="inner">
                      カタログ詳細お送りいたします
                    </div>
                  </div>
                  <div class="stat"><span>10:22</span></div>
                </div>
              </div><!-- end of p_chat__item -->

              <div class="p_chat__item left">
                <div class="p_chat__profpic"><img src="/resources/assets/img/users/user03.png" alt="" /></div>
                <div class="p_chat__message">
                  <div class="box">
                    <span class="name">金城 三朗</span>
                    <div class="inner">
                      <a href="">https://lynvn.com/en/collections/best-seller/products/</a>
                      <img src="/resources/assets/img/products/img01.jpg" alt="">
                    </div>
                  </div>
                  <div class="stat"><span>10:22</span></div>
                </div>
              </div><!-- end of p_chat__item -->

          </div><!-- end of p_chat__tab1 -->
        </div>

      <?php break; ?>
      <?php } //end switch ?>


    </div><!-- end of p_chat__content -->

    <form class="p_chat__btm">
      <div class="btns">
        <button class="c_btn-icon photo"></button>
        <button class="c_btn-icon attach"></button>
        <button class="c_btn-icon options"></button>
      </div>
      <div class="p_chat__input w-icon">
        <input type="text" name="" value="">
        <i class="emoji"></i>
      </div>
      <button class="p_chat__btn c_btn c_btn-active primary w-icon-right send">送信</button>
    </form>
  </div>

</div><!-- end of p_chat -->