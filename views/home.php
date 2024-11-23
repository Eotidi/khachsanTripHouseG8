<?php
require_once 'layout/header.php';
require_once 'layout/menu.php';
?>
<main>
    <section class="slider-area">
        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
            
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider1.png">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider2.png">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider3.png">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </section>
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
                    </select>
                    <select name="">
                        <option value="">...</option>
                        <option value="">Còn phòng</option>
                        <option value="">Hết phòng</option>
                    </select>
                    <button class="btn ">Search</button>
                </div>
            </form>
        </div>
    </div>

    <section class="room-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <div class="section-title text-center">
                        <h2 class="title">Các phòng của chúng tôi</h2>
                        <p class="sub-title">Thông tin phòng được cập nhật liên tục</p>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="room-container">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="room-carousel-4 slick-row-10 slick-arrow-style">
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
                                                <span class="">Giá phòng: 0.00$:</span>
                                                
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
                                                <span class="">Giá phòng: 0.00$</span>
                                                
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
                                                <span class="">Giá phòng: 0.00$</span>
                                                
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
                                                <span class="">Giá phòng: 0.00$</span>
                                                
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
    </section>
    <section class="feature-room section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <div class="section-title text-center">
                        <h2 class="title">Phòng nổi bật</h2>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="room-carousel-4_2 slick-row-10 slick-arrow-style">
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

                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="testimonial-area section-padding bg-img" data-bg="https://mega.com.vn/media/news/2204_khung_powerpoint_lam_slide_dep__9_.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <div class="section-title text-center">
                        <h2 class="title">Các lời đánh giá</h2>
                        <p class="sub-title">Họ nói gì ?</p>
                    </div>
                    
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
                        
                        <div class="section-title-append">
                            <h4>Phòng VIP</h4>
                            <div class="slick-append"></div>
                        </div>
                        

                        
                        <div class="group-list-item-wrapper">
                            <div class="group-list-carousel">
                                
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
                                                <span class="">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                <span class="">$55.00</span>
                                                <span class="price-old"><del>$30.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                
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
                                                <span class="">$45.00</span>
                                                <span class="price-old"><del>$25.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                
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
                                                <span class="">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                
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
                                                <span class="">$90.00</span>
                                                <span class="price-old"><del>$100.</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories-group-wrapper">
                        
                        <div class="section-title-append">
                            <h4>Phòng thường</h4>
                            <div class="slick-append"></div>
                        </div>
                        

                        
                        <div class="group-list-item-wrapper">
                            <div class="group-list-carousel">
                                
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
                                                <span class="">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                
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
                                                <span class="">$55.00</span>
                                                <span class="price-old"><del>$30.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                
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
                                                <span class="">$45.00</span>
                                                <span class="price-old"><del>$25.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                <span class="">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                <span class="">$90.00</span>
                                                <span class="price-old"><del>$100.</del></span>
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
    </section>
    <section class="latest-blog-area section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Blog mới nhất</h2>
                        <p class="sub-title">Có những bài đăng trên blog mới nhất</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-carousel-active slick-row-10 slick-arrow-style">
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="https://cdn1.ivivu.com/iVivu/2018/09/25/10/khach-san-muong-thanh-luxury-nhat-le-quang-binh-1-800x450.webp?o=png" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <h5 class="blog-title">
                                    <a href="blog-details.html">Celebrity Daughter Opens Up About Having Her Eye Color Changed</a>
                                </h5>
                            </div>
                        </div>
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="https://cdn1.ivivu.com/iVivu/2018/09/25/10/khach-san-muong-thanh-luxury-nhat-le-quang-binh-15-800x450.webp?o=png" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <h5 class="blog-title">
                                    <a href="blog-details.html">Children Left Home Alone For 4 Days In TV series Experiment</a>
                                </h5>
                            </div>
                        </div>
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="https://cdn1.ivivu.com/iVivu/2018/09/25/10/khach-san-muong-thanh-luxury-nhat-le-quang-binh-16-800x450.webp?o=png" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <h5 class="blog-title">
                                    <a href="blog-details.html">Lotto Winner Offering Up Money To Any Man That Will Date Her</a>
                                </h5>
                            </div>
                        </div>
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="https://cdn1.ivivu.com/iVivu/2018/09/25/10/khach-san-muong-thanh-luxury-nhat-le-quang-binh-2-800x450.webp?o=png" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <h5 class="blog-title">
                                    <a href="blog-details.html">People are Willing Lie When Comes Money, According to Research</a>
                                </h5>
                            </div>
                        </div>
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="https://cdn1.ivivu.com/iVivu/2018/09/25/10/khach-san-muong-thanh-luxury-nhat-le-quang-binh-14-800x450.webp?o=png" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <h5 class="blog-title">
                                    <a href="blog-details.html">romantic Love Stories Of Hollywoodâ€™s Biggest Celebrities</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php
require_once 'layout/footer.php';
?>