<?php
require_once 'layout/header.php';
require_once 'layout/menu.php';
// print_r($listBinhLuan);
?>
<main>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASE_URL ?>"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="shop.html">Phòng</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chi tiết phòng</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-main-wrapper section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="room-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="room-large-slider">
                                    <!-- <?php ?> -->
                                        <div class="pro-large-img img-zoom">
                                            <img src="assets/img/room/room-1.jpg" alt="room-details" />
                                        </div>
                                    <!-- <?php  ?> -->
                                </div>
                                <div class="pro-nav slick-row-10 slick-arrow-style">
                                    <!-- <?php ?> -->
                                        <div class="pro-nav-thumb">
                                            <img src="assets/img/room/room-2.jpg" alt="room-details" />
                                        </div>
                                        <div class="pro-nav-thumb">
                                            <img src="assets/img/room/room-2.jpg" alt="room-details" />
                                        </div>
                                        <div class="pro-nav-thumb">
                                            <img src="assets/img/room/room-2.jpg" alt="room-details" />
                                        </div>
                                    <!-- <?php ?> -->
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="room-details-des">
                                    <div class="manufacturer-name">
                                        <a href="#"><?php if($phongDetail['loai_phong_id']==1){echo "VIP";} else {echo "NORMAL";} ?></a>
                                    </div>
                                    <h3 class="room-name"><?=$phongDetail['ten_phong']?></h3>
                                    <div class="ratings d-flex">

                                        <div class="pro-review">
                                            <!-- <?php ?> -->
                                            <span><?= count($listBinhLuan)?> đánh giá</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <!--  -->
                                            <span class="price-regular"><?=$phongDetail['gia_phong']?>$</span>
                                           
                                        <!--  -->
                                            <!-- <span class="price-regular">PHP</span> -->
                                        <!--  -->
                                    </div>

                                    <div class="availability">
                                        <?php if($phongDetail['trang_thai_id']==1)
                                        {
                                        ?>
                                            <i class="fa fa-check-circle"></i>
                                            <span>Còn phòng</span>
                                        <?php
                                        } elseif($phongDetail['trang_thai_id']==2)
                                        {
                                        ?>
                                            <i class="fa fa-times-circle" style="color:red"></i>
                                            <span>Hết phòng</span>
                                        <?php
                                        }
                                        ?>
                                        
                                    </div>
                                    <p class="pro-desc"><?=$phongDetail['mo_ta']?></p>
                                    <form action="#" method="post">
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            
                                            <div class="action_link">
                                                <button class="btn btn-cart2">Đặt phòng</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-details-reviews section-padding pb-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="room-review-info">
                                    <ul class="nav review-tab">

                                        <li>
                                            <a class="active" data-bs-toggle="tab" href="#tab_three">Bình luận </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">

                                        <div class="tab-pane fade show active" id="tab_three">
                                            <!-- <?php 
                                            ?> -->
                                                <form action="#" class="review-form">
                                                    <?php foreach($listBinhLuan as $a)
                                                    {
                                                        if($a['trang_thai']===1)
                                                        {
                                                            ?>
                                                            <div class="total-reviews">
                                                            <div class="rev-avatar">
                                                            <?php if($a['avt_link']==null)
                                                            {
                                                                $nameParts = explode(' ', $a['ho_ten']); // Tách họ và tên thành mảng
                                                                $lastName = end($nameParts);
                                                            ?>
                                                                <div class="avt-null">
                                                                    <p class="namenull"><?=$lastName?></p>
                                                                </div>
                                                            <?php 
                                                            }
                                                            else { ?>
                                                                
                                                                <img src="<?=$a['avt_link']?>" alt="AVT">
                                                            <?php } ?>
                                                            </div>
                                                            <div class="review-box">
    
                                                                <div class="post-author">
                                                                    <p><span><?=$a['ho_ten']?>  </span><i class="fa-solid fa-grip-lines-vertical"></i>  <?=$a['ngay_danh_gia']?></p>
                                                                </div>
                                                                <p><?=$a['noi_dung']?></p>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        }
                                                    }
                                                        ?>
                                                        
                                                    
                                                <!-- <?php  ?> -->

                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Nội dung bình luận</label>
                                                        <textarea class="form-control" required></textarea>

                                                    </div>
                                                </div>

                                                <div class="buttons">
                                                    <button class="btn btn-sqr" type="submit">Bình luận</button>
                                                </div>
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="related-products section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Các phòng khác</h2>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="room-carousel-4 slick-row-10 slick-arrow-style">
                        <!-- <?php ?> -->
                            <div class="room-item">
                                <figure class="room-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="assets/img/room/room-5.jpg" alt="room">
                                        <img class="sec-img" src="assets/img/room/room-5.jpg" alt="room">
                                    </a>
                                    
                                    <div class="cart-hover">
                                        <button class="btn btn-cart">Xem chi tiết</button>
                                    </div>
                                </figure>
                                <div class="room-caption text-center">
                                    <h6 class="room-name">
                                        <a href="#">Name Room</a>
                                    </h6>
                                    <div class="price-box">
                                            <span class="price-regular">PHP</span>
                                            <span class="price-old"><del>PHP</del></span>
                                    </div>
                                </div>
                            </div>
                        <!-- <?php  ?> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require_once 'layout/footer.php';
?>