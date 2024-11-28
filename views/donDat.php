<?php
require_once 'layout/header.php';
require_once 'layout/menu.php';

?>

<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="shop.html">shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">cart</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- cart main wrapper start -->
    <div class="cart-main-wrapper section-padding">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table">
                            <thead class=".bg-danger-subtle">
                                <tr class="text-center">
                                    <th scope="col">MÃ ĐƠN</th>
                                    <th scope="col">HỌ TÊN</th>
                                    <th scope="col">ĐIỆN THOẠI</th>
                                    <th scope="col">CHECK IN</th>
                                    <th scope="col">CHECK OUT</th>
                                    <th scope="col">TRẠNG THÁI</th>
                                    <th scope="col">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listDon as $key => $donDat): ?>
                                    <tr class="text-center">
                                        <th scope="row"><?= $donDat['ma_don'] ?></th>
                                        <td><?= $donDat['ho_ten'] ?></td>
                                        <td><?= $donDat['dien_thoai'] ?></td>
                                        <td><?= $donDat['check_in'] ?></td>
                                        <td><?= $donDat['check_out'] ?></td>
                                        <td><?= $donDat['trang_thai_id'] == 1 ? "Đã thanh toán" : "Chưa thanh toán" ?></td>
                                        <td>
                                            <button class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded" type="submit">DELETE</button>
                                            <button class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded" class="btn btn-info">EDIT</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- cart main wrapper end .-->
</main>

<?php
require_once 'layout/footer.php';
?>