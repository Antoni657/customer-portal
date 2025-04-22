<?php require_once('./config.php'); ?>
<!DOCTYPE html>
<html lang="en" class="h-auto">

<?php require_once('inc/header.php') ?>

<body class="sidebar-mini layout-fixed control-sidebar-slide-open layout-navbar-fixed sidebar-mini-md sidebar-mini-xs">
  <div class="wrapper">
    <?php require_once('inc/topBarNav.php') ?>
    <?php require_once('inc/navigation.php') ?>

    <?php if ($_settings->chk_flashdata('success')) : ?>
      <script>
        alert_toast("<?= $_settings->flashdata('success') ?>", 'success')
      </script>
    <?php endif; ?>

    <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';  ?>
    <div class="content-wrapper pt-3 min-h-[567.854px]">
      <section class="content">
        <div class="container-fluid">
          <?php
          if (!file_exists($page . ".php") && !is_dir($page)) {
            include '404.html';
          } else {
            if (is_dir($page))
              include $page . 'homepage.php';
            else
              include $page . '.php';
          }
          ?>
        </div>
      </section>

      <div class="modal fixed inset-0 overflow-y-auto hidden" id="confirm_modal" role='dialog'>
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Confirmation</h5>
            </div>
            <div class="modal-body">
              <div id="delete_content"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!-- ... (other modals) ... -->

    </div>
    <!-- /.content-wrapper -->
    <?php require_once('inc/footer.php') ?>
  </div>
</body>

</html>
