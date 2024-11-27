<?php require './views/layout/header.php'; ?>
<?php require './views/layout/navbar.php'; ?>
<?php require './views/layout/sidebar.php'; ?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Báo cáo thống kê</h1>
          <?=$_SESSION['user_name']?>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include './views/layout/footer.php'; ?>
</body>

</html>