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
                                <li class="breadcrumb-item active" aria-current="page">Phòng</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <!-- page main wrapper start -->
    <div class="shop-main-wrapper section-padding">
        <div class="container">
            <div class="row">

                <!-- shop main wrapper start -->
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="shop-room-wrapper">
                        <!-- shop room top wrap start -->
                        <div class="shop-top-bar">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                    <div class="top-bar-left">
                                        <div class="room-view-mode">
                                            <a class="active" href="#" data-target="grid-view" data-bs-toggle="tooltip" title="Grid View"><i class="fa fa-th"></i></a>
                                            <a href="#" data-target="list-view" data-bs-toggle="tooltip" title="List View"><i class="fa fa-list"></i></a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 order-1 order-md-2">
                                    <div class="top-bar-right">
                                        <div class="room-short">
                                            <p>Sort By : </p>
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
                        <!-- shop room top wrap start -->

                        <!-- room item list wrapper start -->
                        <div class="shop-room-wrap grid-view row mbn-30 pt-2">
                            <!-- room single item start -->
                            <div class="col-md-4 col-sm-6">
                                <div class="room-item">
                                    <figure class="room-thumb">
                                        <a href="room-details.html">
                                            <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                            <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                        </a>
                                    
                                        <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                        </div>
                                    </figure>
                                    <div class="room-caption text-center">
                                        <h6 class="room-name">
                                            <a href="room-details.html">Name room</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$0.00</span>
                                            <span class="price-old"><del>$0.00</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-list-item">
                                        <figure class="room-thumb">
                                            <a href="room-details.html">
                                                <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                                <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                            </a>
                                            <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                            </div>
                                        </figure>
                                        <div class="room-content-list">
                                            <h5 class="room-name"><a href="room-details.html">Name room</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$0.00</span>
                                                <span class="price-old"><del>$0.00</del></span>
                                            </div>
                                            <p>Mo ta</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="room-item">
                                    <figure class="room-thumb">
                                        <a href="room-details.html">
                                            <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                            <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                        </a>
                                    
                                        <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                        </div>
                                    </figure>
                                    <div class="room-caption text-center">
                                        <h6 class="room-name">
                                            <a href="room-details.html">Name room</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$0.00</span>
                                            <span class="price-old"><del>$0.00</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-list-item">
                                        <figure class="room-thumb">
                                            <a href="room-details.html">
                                                <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                                <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                            </a>
                                            <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                            </div>
                                        </figure>
                                        <div class="room-content-list">
                                            <h5 class="room-name"><a href="room-details.html">Name room</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$0.00</span>
                                                <span class="price-old"><del>$0.00</del></span>
                                            </div>
                                            <p>Mo ta</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="room-item">
                                    <figure class="room-thumb">
                                        <a href="room-details.html">
                                            <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                            <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                        </a>
                                    
                                        <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                        </div>
                                    </figure>
                                    <div class="room-caption text-center">
                                        <h6 class="room-name">
                                            <a href="room-details.html">Name room</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$0.00</span>
                                            <span class="price-old"><del>$0.00</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-list-item">
                                        <figure class="room-thumb">
                                            <a href="room-details.html">
                                                <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                                <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                            </a>
                                            <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                            </div>
                                        </figure>
                                        <div class="room-content-list">
                                            <h5 class="room-name"><a href="room-details.html">Name room</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$0.00</span>
                                                <span class="price-old"><del>$0.00</del></span>
                                            </div>
                                            <p>Mo ta</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="room-item">
                                    <figure class="room-thumb">
                                        <a href="room-details.html">
                                            <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                            <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                        </a>
                                    
                                        <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                        </div>
                                    </figure>
                                    <div class="room-caption text-center">
                                        <h6 class="room-name">
                                            <a href="room-details.html">Name room</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$0.00</span>
                                            <span class="price-old"><del>$0.00</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-list-item">
                                        <figure class="room-thumb">
                                            <a href="room-details.html">
                                                <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                                <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                            </a>
                                            <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                            </div>
                                        </figure>
                                        <div class="room-content-list">
                                            <h5 class="room-name"><a href="room-details.html">Name room</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$0.00</span>
                                                <span class="price-old"><del>$0.00</del></span>
                                            </div>
                                            <p>Mo ta</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="room-item">
                                    <figure class="room-thumb">
                                        <a href="room-details.html">
                                            <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                            <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                        </a>
                                    
                                        <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                        </div>
                                    </figure>
                                    <div class="room-caption text-center">
                                        <h6 class="room-name">
                                            <a href="room-details.html">Name room</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$0.00</span>
                                            <span class="price-old"><del>$0.00</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-list-item">
                                        <figure class="room-thumb">
                                            <a href="room-details.html">
                                                <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                                <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                            </a>
                                            <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                            </div>
                                        </figure>
                                        <div class="room-content-list">
                                            <h5 class="room-name"><a href="room-details.html">Name room</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$0.00</span>
                                                <span class="price-old"><del>$0.00</del></span>
                                            </div>
                                            <p>Mo ta</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="room-item">
                                    <figure class="room-thumb">
                                        <a href="room-details.html">
                                            <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                            <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                        </a>
                                    
                                        <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                        </div>
                                    </figure>
                                    <div class="room-caption text-center">
                                        <h6 class="room-name">
                                            <a href="room-details.html">Name room</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$0.00</span>
                                            <span class="price-old"><del>$0.00</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-list-item">
                                        <figure class="room-thumb">
                                            <a href="room-details.html">
                                                <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                                <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                            </a>
                                            <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                            </div>
                                        </figure>
                                        <div class="room-content-list">
                                            <h5 class="room-name"><a href="room-details.html">Name room</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$0.00</span>
                                                <span class="price-old"><del>$0.00</del></span>
                                            </div>
                                            <p>Mo ta</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="room-item">
                                    <figure class="room-thumb">
                                        <a href="room-details.html">
                                            <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                            <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                        </a>
                                    
                                        <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                        </div>
                                    </figure>
                                    <div class="room-caption text-center">
                                        <h6 class="room-name">
                                            <a href="room-details.html">Name room</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$0.00</span>
                                            <span class="price-old"><del>$0.00</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-list-item">
                                        <figure class="room-thumb">
                                            <a href="room-details.html">
                                                <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                                <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                            </a>
                                            <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                            </div>
                                        </figure>
                                        <div class="room-content-list">
                                            <h5 class="room-name"><a href="room-details.html">Name room</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$0.00</span>
                                                <span class="price-old"><del>$0.00</del></span>
                                            </div>
                                            <p>Mo ta</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="room-item">
                                    <figure class="room-thumb">
                                        <a href="room-details.html">
                                            <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                            <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                        </a>
                                    
                                        <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                        </div>
                                    </figure>
                                    <div class="room-caption text-center">
                                        <h6 class="room-name">
                                            <a href="room-details.html">Name room</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$0.00</span>
                                            <span class="price-old"><del>$0.00</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-list-item">
                                        <figure class="room-thumb">
                                            <a href="room-details.html">
                                                <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                                <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                            </a>
                                            <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                            </div>
                                        </figure>
                                        <div class="room-content-list">
                                            <h5 class="room-name"><a href="room-details.html">Name room</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$0.00</span>
                                                <span class="price-old"><del>$0.00</del></span>
                                            </div>
                                            <p>Mo ta</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="room-item">
                                    <figure class="room-thumb">
                                        <a href="room-details.html">
                                            <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                            <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                        </a>
                                    
                                        <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                        </div>
                                    </figure>
                                    <div class="room-caption text-center">
                                        <h6 class="room-name">
                                            <a href="room-details.html">Name room</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$0.00</span>
                                            <span class="price-old"><del>$0.00</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-list-item">
                                        <figure class="room-thumb">
                                            <a href="room-details.html">
                                                <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                                <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                            </a>
                                            <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                            </div>
                                        </figure>
                                        <div class="room-content-list">
                                            <h5 class="room-name"><a href="room-details.html">Name room</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$0.00</span>
                                                <span class="price-old"><del>$0.00</del></span>
                                            </div>
                                            <p>Mo ta</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="room-item">
                                    <figure class="room-thumb">
                                        <a href="room-details.html">
                                            <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                            <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                        </a>
                                    
                                        <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                        </div>
                                    </figure>
                                    <div class="room-caption text-center">
                                        <h6 class="room-name">
                                            <a href="room-details.html">Name room</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$0.00</span>
                                            <span class="price-old"><del>$0.00</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-list-item">
                                        <figure class="room-thumb">
                                            <a href="room-details.html">
                                                <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                                <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                            </a>
                                            <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                            </div>
                                        </figure>
                                        <div class="room-content-list">
                                            <h5 class="room-name"><a href="room-details.html">Name room</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$0.00</span>
                                                <span class="price-old"><del>$0.00</del></span>
                                            </div>
                                            <p>Mo ta</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="room-item">
                                    <figure class="room-thumb">
                                        <a href="room-details.html">
                                            <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                            <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                        </a>
                                    
                                        <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                        </div>
                                    </figure>
                                    <div class="room-caption text-center">
                                        <h6 class="room-name">
                                            <a href="room-details.html">Name room</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$0.00</span>
                                            <span class="price-old"><del>$0.00</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-list-item">
                                        <figure class="room-thumb">
                                            <a href="room-details.html">
                                                <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                                <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                            </a>
                                            <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                            </div>
                                        </figure>
                                        <div class="room-content-list">
                                            <h5 class="room-name"><a href="room-details.html">Name room</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$0.00</span>
                                                <span class="price-old"><del>$0.00</del></span>
                                            </div>
                                            <p>Mo ta</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="room-item">
                                    <figure class="room-thumb">
                                        <a href="room-details.html">
                                            <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                            <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                        </a>
                                    
                                        <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                        </div>
                                    </figure>
                                    <div class="room-caption text-center">
                                        <h6 class="room-name">
                                            <a href="room-details.html">Name room</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$0.00</span>
                                            <span class="price-old"><del>$0.00</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-list-item">
                                        <figure class="room-thumb">
                                            <a href="room-details.html">
                                                <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                                <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                            </a>
                                            <div class="cart-hover">
                                            <button class="btn btn-cart">Xem chi tiết</button>
                                            </div>
                                        </figure>
                                        <div class="room-content-list">
                                            <h5 class="room-name"><a href="room-details.html">Name room</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$0.00</span>
                                                <span class="price-old"><del>$0.00</del></span>
                                            </div>
                                            <p>Mo ta</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- room item list wrapper end -->

                        <!-- start pagination area -->
                        <div class="paginatoin-area text-center">
                            <ul class="pagination-box">
                                <li><a class="previous" href="#"><i class="fa-solid fa-caret-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="next" href="#"><i class="fa-solid fa-caret-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- end pagination area -->
                    </div>
                </div>
                <!-- shop main wrapper end -->
            </div>
        </div>
    </div>
    <!-- page main wrapper end -->
</main>

<?php
require_once 'layout/footer.php';
?>