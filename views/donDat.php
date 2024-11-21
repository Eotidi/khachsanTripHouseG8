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
                                <tr>
                                    <th scope="col">MÃ ĐƠN</th>
                                    <th scope="col">HỌ TÊN</th>
                                    <th scope="col">ĐIỆN THOẠI</th>
                                    <th scope="col">CHECK IN</th>
                                    <th scope="col">CHECK OUT</th>
                                    <th scope="col">TRẠNG THÁI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Mã đơn</th>
                                    <td>Họ tên</td>
                                    <td>Điện thoại</td>
                                    <td>Check in</td>
                                    <td>Check out</td>
                                    <td>Trạng thái</td>
                                    <td><button class="btn btn-primary">BUTTON</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- cart main wrapper end -->
</main>

<?php
require_once 'layout/footer.php';
?>