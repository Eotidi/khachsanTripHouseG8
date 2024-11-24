<?php
require_once 'layout/header.php';
require_once 'layout/menu.php';
?>

<main>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Phòng</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-main-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="shop-room-wrapper">
                        <div class="shop-top-bar">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-md-6 order-1 order-md-2">
                                    <div class="top-bar-right">
                                        <div class="room-short">
                                            <p>Loại phòng: </p>
                                            <select class="nice-select" name="sortby">
                                                <option value="All">Select</option>
                                                <option value="vip">VIP</option>
                                                <option value="normal">Normal</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row mbn-30">
                                    <?php foreach ($listPhong as $key => $phong): ?>
                                        <div class="col-md-3">
                                            <div class="room-item pb-2">
                                                <figure class="room-thumb">
                                                    <a href="<?= BASE_URL . '?act=chi-tiet-phong&id' . $phong['id'] ?>">
                                                        <img style="width: 300px; height:200px; object-fit: cover;" class="pri-img" src="<?= $phong['hinh_anh'] ?>" alt="room">
                                                        <img style="width: 300px; height:200px; object-fit: cover;" class="sec-img" src="<?= $phong['hinh_anh'] ?>" alt="room">
                                                    </a>
                                                    <div class="cart-hover">
                                                        <button class="btn btn-cart">Xem chi tiết</button>
                                                    </div>
                                                </figure>
                                                <div class="room-caption text-center">
                                                    <h6 class="room-name">
                                                        <a href="<?= BASE_URL . '?act=chi-tiet-phong&id' . $phong['id'] ?>"><?= $phong['ten_phong'] ?></a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-regular"><?= $phong['gia_phong'] ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'layout/footer.php';
?>