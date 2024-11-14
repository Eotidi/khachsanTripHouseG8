<?php
require_once 'layout/header.php';
require_once 'layout/menu.php';
?>



<main>
    <!-- hero slider area start -->
    <section class="slider-area">
        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider1.png">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider2.png">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider3.png">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->

        </div>
    </section>
    <!-- hero slider area end -->

    <!-- service policy area start -->
    <div class="service-policy section-padding">
        <div class="body1">
            <form action="">
                <div class="search-container1">
                    <select name="">
                        <option value="">...</option>
                        <option value="">VIP</option>
                        <option value="">Medium</option>
                    </select>
                    <select name="">
                        <option value="">...</option>
                        <option value="">Single</option>
                        <option value="">Double</option>
                        <!-- Add more options as needed -->
                    </select>
                    <select name="">
                        <option value="">...</option>
                        <option value="">Còn phòng</option>
                        <option value="">Hết phòng</option>
                        <!-- Add more options as needed -->
                    </select>
                    <button class="btn ">Search</button>
                </div>
            </form>
        </div>
    </div>
    <!-- service policy area end -->

    <!-- room area start -->
    <section class="room-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">Các phòng của chúng tôi</h2>
                        <p class="sub-title">Thông tin phòng được cập nhật liên tục</p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="room-container">
                        <!-- room tab menu start -->
                        <!-- room tab content start -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="room-carousel-4 slick-row-10 slick-arrow-style">
                                    <!-- room item start -->
                                    <div class="room-item">
                                        <figure class="room-thumb">
                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                <img class="pri-img" src="assets/img/room/room-2.jpg" src="<?= BASE_URL  ?>" alt="roon">
                                                <img class="sec-img" src="assets/img/room/room-2.jpg" src="<?= BASE_URL  ?>" alt="room">
                                            </a>
                                            
                                            <div class="cart-hover">
                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>"><button class="btn btn-cart">Xem chi tiết</button></a>
                                            </div>
                                        </figure>
                                        <div class="room-caption text-center">


                                            <h6 class="room-name">
                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">Số phòng</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">Giá khuyến mãi</span>
                                                <span class="price-old"><del>Giá gốc</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-item">
                                        <figure class="room-thumb">
                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                <img class="pri-img" src="assets/img/room/room-1.jpg" src="<?= BASE_URL  ?>" alt="roon">
                                                <img class="sec-img" src="assets/img/room/room-1.jpg" src="<?= BASE_URL  ?>" alt="room">
                                            </a>
                                            
                                            <div class="cart-hover">
                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>"><button class="btn btn-cart">Xem chi tiết</button></a>
                                            </div>
                                        </figure>
                                        <div class="room-caption text-center">


                                            <h6 class="room-name">
                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">Số phòng</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">Giá khuyến mãi</span>
                                                <span class="price-old"><del>Giá gốc</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-item">
                                        <figure class="room-thumb">
                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                <img class="pri-img" src="assets/img/room/room-3.jpg" src="<?= BASE_URL  ?>" alt="roon">
                                                <img class="sec-img" src="assets/img/room/room-3.jpg" src="<?= BASE_URL  ?>" alt="room">
                                            </a>
                                            
                                            <div class="cart-hover">
                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>"><button class="btn btn-cart">Xem chi tiết</button></a>
                                            </div>
                                        </figure>
                                        <div class="room-caption text-center">


                                            <h6 class="room-name">
                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">Số phòng</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">Giá khuyến mãi</span>
                                                <span class="price-old"><del>Giá gốc</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="room-item">
                                        <figure class="room-thumb">
                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                <img class="pri-img" src="assets/img/room/room-4.jpg" src="<?= BASE_URL  ?>" alt="roon">
                                                <img class="sec-img" src="assets/img/room/room-4.jpg" src="<?= BASE_URL  ?>" alt="room">
                                            </a>
                                            
                                            <div class="cart-hover">
                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>"><button class="btn btn-cart">Xem chi tiết</button></a>
                                            </div>
                                        </figure>
                                        <div class="room-caption text-center">


                                            <h6 class="room-name">
                                                <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">số phòng</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">Giá khuyến mãi</span>
                                                <span class="price-old"><del>Giá gốc</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- room tab content end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- room area end -->

    <!-- featured room area start -->
    <section class="feature-room section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">Phòng nổi bật</h2>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="room-carousel-4_2 slick-row-10 slick-arrow-style">
                        <!-- room item start -->
                        <div class="room-item">
                            <figure class="room-thumb">
                                <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                    <img class="pri-img" src="assets/img/room/room-1.jpg" alt="room">
                                    <img class="sec-img" src="assets/img/room/room-1.jpg" alt="room">
                                </a>
                                <div class="cart-hover">
                                    <button class="btn btn-cart">Xem chi tiết phòng</button>
                                </div>
                            </figure>
                            
                        </div>
                        <!-- room item end -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featured room area end -->

    <!-- testimonial area start -->
    <section class="testimonial-area section-padding bg-img" data-bg="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3Jhd3BpeGVsb2ZmaWNlMjBfYV9jbG9zZV91cF9vZl9hX2NvbG9yZnVsX2ZsdWlkX2Fic3RyYWN0X3BhbGVfd18xYTg4YWI2Ny1jMzdmLTQ2ZTctYjk5OC1hMjI2N2U3YmI4ODBfMi5qcGc.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">Các lời đánh giá</h2>
                        <p class="sub-title">Họ nói gì ?</p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-thumb-wrapper">
                        <div class="testimonial-thumb-carousel">
                            <div class="testimonial-thumb">
                                <img src="https://th.bing.com/th/id/OIP.7fIQ5_jM33_UdmvJv7ALxwHaJB?rs=1&pid=ImgDetMain" alt="testimonial-thumb">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="https://giaingo.info/wp-content/uploads/2021/07/xoai-non-la-ai-2.jpg" alt="testimonial-thumb">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="https://vietnamtre.vn/wp-content/uploads/2023/02/TikToker-Vo-Nu-Ngan-Ha.4.jpg" alt="testimonial-thumb">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="https://i.vietgiaitri.com/2022/2/3/nu-mc-mai-dora-khoe-sac-don-xuan-li-xi-fan-ham-mo-voi-loat-anh-moi-51c-6298788.jpg" alt="testimonial-thumb">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content-wrapper">
                        <div class="testimonial-content-carousel">
                            <div class="testimonial-content">
                                <p>"Phòng phải nói là đỉnh của chóp lun , phục vụ tuyệt vời view nhìn từ phòng rất đẹp và đặc biệt là kính bám rất dính"</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                </div>
                                <h5 class="testimonial-author">Trần Hà Linh</h5>
                            </div>
                            <div class="testimonial-content">
                                <p>"Vị trí khách sạn rất thuận tiện, gần trung tâm thành phố. Phòng ốc khá ổn nhưng wifi hơi chậm."</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                </div>
                                <h5 class="testimonial-author">Xoài Non</h5>
                            </div>
                            <div class="testimonial-content">
                                <p>"Tuyệt vời! Tôi sẽ quay lại đây lần nữa. Tiện nghi trong phòng rất hiện đại."</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                </div>
                                <h5 class="testimonial-author">Ngân Hà</h5>
                            </div>
                            <div class="testimonial-content">
                                <p>"Phòng có view đẹp nhìn ra biển, tuy nhiên cách âm chưa tốt, có thể nghe tiếng ồn từ phòng bên."</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                    <span><i class="fa fa-star yellow-star"></i></span>
                                </div>
                                <h5 class="testimonial-author">Mai Dora</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->

    <!-- group room start -->
    <section class="group-room-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="group-room-banner">
                        <figure class="banner-statistics">
                            <a href="#">
                                <img src="assets/img/room/room-1.jpg" alt="room banner">
                            </a>
                            <div class="banner-content banner-content_style3 text-center">
                                <h6 class="banner-text1">VIP</h6>
                                <h2 class="banner-text2">Presidential room</h2>
                                <a href="shop.html" class="btn btn-text">Đặt ngay</a>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories-group-wrapper">
                        <!-- section title start -->
                        <div class="section-title-append">
                            <h4>Phòng VIP</h4>
                            <div class="slick-append"></div>
                        </div>
                        <!-- section title start -->

                        <!-- group list carousel start -->
                        <div class="group-list-item-wrapper">
                            <div class="group-list-carousel">
                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                <img src="assets/img/room/room-6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-room-name"><a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                    Diamond Exclusive ring</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                <img src="assets/img/room/room-7.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-room-name"><a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                    Handmade Golden ring</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$55.00</span>
                                                <span class="price-old"><del>$30.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                <img src="assets/img/room/room-8.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-room-name"><a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                    exclusive gold Jewelry</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$45.00</span>
                                                <span class="price-old"><del>$25.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                <img src="assets/img/room/room-9.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-room-name"><a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                    Perfect Diamond earring</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                <img src="assets/img/room/room-10.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-room-name"><a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                    Handmade Golden Necklace</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$90.00</span>
                                                <span class="price-old"><del>$100.</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->

                                <!-- group list item end -->

                                <!-- group list item start -->

                                <!-- group list item end -->

                                <!-- group list item start -->

                                <!-- group list item end -->
                            </div>
                        </div>
                        <!-- group list carousel start -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories-group-wrapper">
                        <!-- section title start -->
                        <div class="section-title-append">
                            <h4>Phòng thường</h4>
                            <div class="slick-append"></div>
                        </div>
                        <!-- section title start -->

                        <!-- group list carousel start -->
                        <div class="group-list-item-wrapper">
                            <div class="group-list-carousel">
                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                <img src="assets/img/room/room-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-room-name"><a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                    Handmade Golden Necklace</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                <img src="assets/img/room/room-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-room-name"><a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                    Handmade Golden Necklaces</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$55.00</span>
                                                <span class="price-old"><del>$30.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                <img src="assets/img/room/room-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-room-name"><a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                    exclusive silver top bracellet</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$45.00</span>
                                                <span class="price-old"><del>$25.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                <img src="assets/img/room/room-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-room-name"><a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                    top Perfect Diamond necklace</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                <img src="assets/img/room/room-5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-room-name"><a href="<?= BASE_URL . '?act=chi-tiet-phong' ?>">
                                                    Diamond Exclusive earrings</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$90.00</span>
                                                <span class="price-old"><del>$100.</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->

                                <!-- group list item end -->

                                <!-- group list item start -->

                                <!-- group list item end -->

                                <!-- group list item start -->

                                <!-- group list item end -->
                            </div>
                        </div>
                        <!-- group list carousel start -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- group room end -->

    <!-- latest blog area start -->
    <section class="latest-blog-area section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">latest blogs</h2>
                        <p class="sub-title">There are latest blog posts</p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-carousel-active slick-row-10 slick-arrow-style">
                        <!-- blog post item start -->
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog-img1.jpg" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <p>25/03/2019 | <a href="#">Corano</a></p>
                                </div>
                                <h5 class="blog-title">
                                    <a href="blog-details.html">Celebrity Daughter Opens Up About Having Her Eye Color Changed</a>
                                </h5>
                            </div>
                        </div>
                        <!-- blog post item end -->

                        <!-- blog post item start -->
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog-img2.jpg" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <p>25/03/2019 | <a href="#">Corano</a></p>
                                </div>
                                <h5 class="blog-title">
                                    <a href="blog-details.html">Children Left Home Alone For 4 Days In TV series Experiment</a>
                                </h5>
                            </div>
                        </div>
                        <!-- blog post item end -->

                        <!-- blog post item start -->
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog-img3.jpg" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <p>25/03/2019 | <a href="#">Corano</a></p>
                                </div>
                                <h5 class="blog-title">
                                    <a href="blog-details.html">Lotto Winner Offering Up Money To Any Man That Will Date Her</a>
                                </h5>
                            </div>
                        </div>
                        <!-- blog post item end -->

                        <!-- blog post item start -->
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog-img4.jpg" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <p>25/03/2019 | <a href="#">Corano</a></p>
                                </div>
                                <h5 class="blog-title">
                                    <a href="blog-details.html">People are Willing Lie When Comes Money, According to Research</a>
                                </h5>
                            </div>
                        </div>
                        <!-- blog post item end -->

                        <!-- blog post item start -->
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog-img.jpg" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <p>25/03/2019 | <a href="#">Corano</a></p>
                                </div>
                                <h5 class="blog-title">
                                    <a href="blog-details.html">romantic Love Stories Of Hollywoodâ€™s Biggest Celebrities</a>
                                </h5>
                            </div>
                        </div>
                        <!-- blog post item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest blog area end -->


</main>

<?php
require_once 'layout/mini.php';
require_once 'layout/footer.php';
?>