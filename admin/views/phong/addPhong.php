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
                    <h1>Quản lý danh sách phòng</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm phòng</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body row">
                                <div class="form-group col-12">
                                    <label>Số phòng</label>
                                    <input type="text" class="form-control" name="" placeholder="Nhập số phòng">
                                    
                                </div>
                                
                                <div class="form-group col-6">
                                    <label>Giá phòng</label>
                                    <input type="number" min='0' class="form-control" name="" placeholder="Nhập giá phòng">
                                    
                                </div>
                                
                                <div class="form-group col-6">
                                    <label>Giá khuyến mãi</label>
                                    <input type="number" min='0' class="form-control" name="" placeholder="Nhập giá khuyến mãi">
                                    
                                </div>
                                

                                <div class="form-group col-6">
                                    <label>Ngày hết hạn</label>
                                    <input type="date" class="form-control" name="">
                                    
                                </div>
                                
                                <div class="form-group col-6">
                                    <label>Danh mục</label>
                                    <select class="form-control" name="" id="exampleFormControlSelect1">
                                        <option selected disabled>Chọn danh mục phòng</option>
                                        <!-- PHP -->
                                    </select>
                                </div>
                                
                                <div class="form-group col-6">
                                    <label>Hình ảnh</label>
                                    <input type="file" class="form-control" name="">
                                    <!-- PHP -->
                                </div>

                                <div class="form-group col-6">
                                    <label>Trạng thái</label>
                                    <select class="form-control" name="" id="exampleFormControlSelect1">
                                        <option selected disabled>Chọn trạng thái</option>
                                        <option value="1">Còn phòng</option>
                                        <option value="2">Hết phòng</option>
                                    </select>
                                    <!-- PHP -->
                                </div>
                                <div class="form-group col-12">
                                    <label>Mô tả</label>      
                                    <textarea name="" id="" class="form-control" placeholder="Nhập mô tả"></textarea>                          
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Thêm phòng</button>
                            </div>
                        </form>
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

</html>