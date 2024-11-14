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
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    <div class="shop-main-wrapper section-padding pb-0">
        <div class="container">
            <div class="row">
                <!-- room details wrapper start -->
                <div class="col-lg-12 order-1 order-lg-2">
                    <!-- room details inner end -->
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
                                        <a href="#">PHP</a>
                                    </div>
                                    <h3 class="room-name">PHP</h3>
                                    <div class="ratings d-flex">

                                        <div class="pro-review">
                                            <!-- <?php ?> -->
                                            <span>PHP</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <!--  -->
                                            <span class="price-regular">PHP</span>
                                            <span class="price-old"><del>PHP</del></span>
                                        <!--  -->
                                            <span class="price-regular">PHP</span>
                                        <!--  -->
                                    </div>

                                    <div class="availability">
                                        <i class="fa fa-check-circle"></i>
                                        <span>PHP</span>
                                    </div>
                                    <p class="pro-desc">PHP</p>
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
                    <!-- room details inner end -->

                    <!-- room details reviews start -->
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
                                                    <div class="total-reviews">
                                                        <div class="rev-avatar">
                                                            <img src="" alt="AVT">
                                                        </div>
                                                        <div class="review-box">

                                                            <div class="post-author">
                                                                <p><span>Name: PHP </span><i class="fa-solid fa-grip-lines-vertical"></i> Ngày đăng: PHP</p>
                                                            </div>
                                                            <p>Nội dung</p>
                                                        </div>
                                                    </div>
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
                                                </form> <!-- end of review-form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- room details reviews end -->
                </div>
                <!-- room details wrapper end -->
            </div>
        </div>
    </div>
    <!-- page main wrapper end -->

    <!-- related products area start -->
    <section class="related-products section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">Các phòng khác</h2>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="room-carousel-4 slick-row-10 slick-arrow-style">
                        <!-- room item start -->
                        <!-- <?php ?> -->
                            <!-- room item start -->
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
                        <!-- room item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- related products area end -->
</main>

<?php
require_once 'layout/mini.php';
require_once 'layout/footer.php';
?>