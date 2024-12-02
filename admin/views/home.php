<?php require './views/layout/header.php'; ?>
<?php require './views/layout/navbar.php'; ?>
<?php require './views/layout/sidebar.php'; ?>
<?php 
$phongTrong = 0;
foreach($listPhong as $a)
{
  
}
?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container my-5">
      <h2>
          <?=$_SESSION['user_admin']?>
          </h2>
        <header class="mb-4">
          <h1 class="text-center">TripHouse Dashboard</h1>
        </header>

        <div class="row text-center">
          <!-- Doanh thu -->
          <div class="col-md-4">
            <div class="card shadow-sm p-3 mb-4">
              <div class="card-body">
                <h5 class="card-title">Doanh thu</h5>
                <p class="card-text display-6" id="revenue">₫0</p>
              </div>
            </div>
          </div>
          <!-- Phòng trống -->
          <div class="col-md-4">
            <div class="card shadow-sm p-3 mb-4">
              <div class="card-body">
                <h5 class="card-title">Phòng trống</h5>
                <p class="card-text display-6" id="available-rooms">0</p>
              </div>
            </div>
          </div>
          <!-- Phòng đã đặt -->
          <div class="col-md-4">
            <div class="card shadow-sm p-3 mb-4">
              <div class="card-body">
                <h5 class="card-title">Phòng đã đặt</h5>
                <p class="card-text display-6" id="booked-rooms">0</p>
              </div>
            </div>
          </div>
        </div>

        <footer class="text-center mt-4">
          <button class="btn btn-primary btn-lg" id="update-stats">Cập nhật thống kê</button>
        </footer>
    </div>
  </section>
</div>
<?php include './views/layout/footer.php'; ?>
</body>

</html>