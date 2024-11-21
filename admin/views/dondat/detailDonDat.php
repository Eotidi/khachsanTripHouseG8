<?php require './views/layout/header.php'; ?>
<?php require './views/layout/navbar.php'; ?>

<?php require './views/layout/sidebar.php'; ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h1>Quản lý danh sách đơn đặt - Đơn hàng: <?= $donDat['ma_don'] ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="invoice p-3 mb-3">
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-cat"></i> Đặt phòng khách sạn TripHouse
                                    <small class="float-right">Check in: <?= $donDat['check_in'] ?></small>
                                    <small class="float-right">Check out: <?= $donDat['check_out'] ?></small>
                                </h4>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Thông tin người đặt
                                <address>
                                    <strong><?= $donDat['ho_ten'] ?>
                            </div>

                            <div class="col-sm-4 invoice-col">
                                <b>Mã đơn đặt: PHP</b><br>
                                <br>
                                <b>Tổng tiền: </b> ...<br>
                                <b>Ghi chú:</b> ...<br>
                                <b>Thanh toán:</b> ...
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Số phòng</th>
                                            <th>Giá phòng</th>
                                            <th>Thời gian</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <tr>
                                                <td>PHP</td>
                                                <td>PHP</td>
                                                <td>PHP</td>
                                                <td>PHP</td>
                                                <td>PHP</td>
                                            </tr>
                                            
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-6">
                                <p class="lead">Hóa đơn: </p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th style="width:50%">Số ngày:</th>
                                            <td>
                                                PHP
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Giá tiền trên ngày:</th>
                                            <td>200.000</td>
                                        </tr>
                                        <tr>
                                            <th>Thành tiền tiền:</th>
                                            <td>PHP</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include './views/layout/footer.php'; ?>

</body>

</html>