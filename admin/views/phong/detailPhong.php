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
                    <h1>Quản lý thông tin phòng</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none"></h3>
                        <div class="col-12">
                            <img style="width: 400px; height: 400px" src="#" class="product-image" alt="Product Image">
                        </div>
                        <div class="col-12 product-image-thumbs">

                                <div class="product-image-thumb"><img src="#" alt="Product Image"></div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">Số phòng: PHP</h3>

                        <hr>
                        <h4 class="mt-3">Giá phòng: <small>PHP</small></h4>
                        <h4 class="mt-3">Giá khuyến mãi: <small>PHP</small></h4>
                        <h4 class="mt-3">Ngày hết hạn: <small>PHP</small></h4>
                        <h4 class="mt-3">Danh mục: <small>PHP</small></h4>
                        <h4 class="mt-3">Trạng thái: <small>PHP</small></h4>
                        <h4 class="mt-3">Mô tả: <small>PHP</small></h4>

                    </div>
                </div>

                <div class="col-12">
                    <h2>Bình luận của phòng</h2>
                    <div>
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Người bình luận</th>
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
                                            <a target="_blank" href="#">

                                            </a>
                                        </td>
                                        <td>PHP</td>
                                        <td>PHP</td>
                                        <td>PHP</td>
                                        <td>
                                            <form action="" method="post">
                                                <input type="hidden" name="" value="">
                                                <input type="hidden" name="" value="">
                                                <input type="hidden" name="" value="">
                                                <button onclick="return confirm('Bạn có muốn ẩn bình luận không ?')" class="btn btn-warning">
                                                    ẨN</button>
                                            </form>
                                        </td>
                                    </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- <footer> -->
<?php include './views/layout/footer.php'; ?>

<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

</body>
<script>
    $(document).ready(function() {
        $('.product-image-thumb').on('click', function() {
            var $image_element = $(this).find('img')
            $('.product-image').prop('src', $image_element.attr('src'))
            $('.product-image-thumb.active').removeClass('active')
            $(this).addClass('active')
        })
    })
</script>

</html>