<?php require './views/layout/header.php'; ?>
<!-- Navbar -->
<?php require './views/layout/navbar.php'; ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php require './views/layout/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý tài khoản khách hàng</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <img src="" style="width: 70%" alt=""
                        onerror="this.onerror=null;this.src='https://www.nicepng.com/png/full/128-1280406_view-user-icon-png-user-circle-icon-png.png'">
                </div>
                <div class="col-8">
                    <div class="container">
                        <table class="table table-borderless">
                            <tbody style="font-size: x-large;">
                                <tr>
                                    <th>Họ tên:</th>
                                    <td>NULL</td>
                                </tr>
                                <tr>
                                    <th>Ngày sinh:</th>
                                    <td>NULL</td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td>NULL</td>
                                </tr>
                                <tr>
                                    <th>Số điện thoại:</th>
                                    <td>NULL</td>
                                </tr>
                                <tr>
                                    <th>Giới tinh:</th>
                                    <td>NULL</td>
                                </tr>
                                <tr>
                                    <th>Địa chỉ:</th>
                                    <td>NULL</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12">
                    <h2>Lịch sử đơn đặt</h2>
                    <div>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã đơn đặt</th>
                                    <th>Số điện thoại</th>
                                    <th>Ngày đặt</th>
                                    <th>Tổng tiền</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>NULL</td>

                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= BASE_URL_ADMIN ?>">
                                                <button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                            </a>
                                            <a href="<?= BASE_URL_ADMIN ?>">
                                                <button class="btn btn-warning"><i class="fas fa-cogs"></i></button>
                                            </a>
                                        </div>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12">
                    <h2>Lịch sử bình luận</h2>
                    <div>
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Số phòng</th>
                                    <th>Nội dung</th>
                                    <th>Ngày bình luận</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>PHP</td>
                                    <td>
                                        <a target="_blank" href="<?= BASE_URL_ADMIN?>">
                                            <!-- PHP -->
                                        </a>
                                    </td>
                                    <td>PHP</td>
                                    <td>PHP</td>
                                    <td>PHP</td>
                                    <td>
                                        <form action="" <?= BASE_URL_ADMIN  ?> method="post">
                                            <input type="hidden" name="" value="">
                                            <input type="hidden" name="" value="">
                                            <input type="hidden" name="" value="">
                                            <button onclick="return confirm('Bạn có muốn ẩn bình luận không ?')"
                                                class="btn btn-warning">Ẩn
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.col -->
            </div>

            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- <footer> -->
<?php include './views/layout/footer.php'; ?>
</body>
<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
    });
});
</script>

</html>