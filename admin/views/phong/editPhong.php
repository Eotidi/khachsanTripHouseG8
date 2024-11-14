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
                <div class="col-sm-11">
                    <h1>Sửa thông tin phòng</h1>
                </div>
                <div class="col-1">
                    <a href="#" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin phòng</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="" value="">
                                <label for="">Số phòng</label>
                                <input type="text" id="" name="" class="form-control" value="">
                                
                            </div>
                            <div class="form-group">
                                <label for="">Giá phòng</label>
                                <input type="number" id="" name="" class="form-control" value="">
                                
                            </div>
                            <div class="form-group">
                                <label for="">Giá khuyến mãi</label>
                                <input type="number" id="" name="" class="form-control" value="">
                                
                            </div>
                            <div class="form-group">
                                <label for="">Hình ảnh</label>
                                <input type="file" id="" name="" class="form-control" value="">
                            </div>
                            
                            <div class="form-group">
                                <label for="">Ngày hết hạn</label>
                                <input type="date" id="" name="" class="form-control" value="">
                                
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Danh mục phòng</label>
                                <select id="inputStatus" name="" class="form-control custom-select">
                                    
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Trạng thái phòng</label>
                                <select id="inputStatus" name="trang_thai" class="form-control custom-select">
                                    <option value="1">Còn phòng</option>
                                    <option value="2">Hết phòng</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Mô tả</label>
                                <textarea id="" name="" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Sửa</button>
                        </div>
                </div>
                <!-- /.card -->
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- <footer> -->
<?php include './views/layout/footer.php'; ?>
</body>
<script>
    var faqs_row = <?= count($listAnhSanPham); ?>;

    function addfaqs() {
        html = '<tr id="faqs-row-' + faqs_row + '">';
        html += '<td><img src="https://vienmoitruong5014.org.vn/wp-content/uploads/2023/03/anh-con-cho-de-thuong_022907696.jpg" style="width:50px; height:50px" alt=""></td>';
        html += '<td><input type="file" name="img_array[]" class="form-control"></td>';
        html += '<td class="mt-10"><button type="button" class="badge badge-danger" onclick="removeRow(' + faqs_row + ', null);"><i class="fa fa-trash"></i> Delete</button></td>';

        html += '</tr>';

        $('#faqs tbody').append(html);

        faqs_row++;
    }

    function removeRow(rowId, imgId) {
        $('#faqs-row-' + rowId).remove();
        if (imgId !== null) {
            var imgDeleteInput = document.getElementById('img_delete');
            var currentValue = imgDeleteInput.value;
            imgDeleteInput.value = currentValue ? currentValue + ',' + imgId : imgId;
        }
    }
</script>

</html>