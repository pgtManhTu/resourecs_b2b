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

          <div class="p_comp-profile">
            <div class="p_comp-profile__hdng">
              <button class="c_btn-icon arrow-left"></button>
              <h2 class="p_comp-profile__name">LABIT</h2>
            </div>
            <div class="p_comp-profile__cont">

              <div class="temporary-only" style="background-color: #D9D9D9; min-height: 1193px; display: flex; justify-content: center; align-items: center">
                <span style="font-size: 64px; font-weight: 600;">LABIT page</span>
              </div>

            </div>
          </div><!-- End of p_comp-profile -->

        </div><!-- End of p_main-content -->

      </main>
    </div>
  </div>


  <script src="/resources/assets/js/script.js"></script>
</body>

</html>