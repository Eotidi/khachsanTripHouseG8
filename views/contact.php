<?php
require_once 'layout/header.php';
require_once 'layout/menu.php';
?>

<main>
    <div class="contact-area section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-message">
                        <form id="contact-form" action="#" method="post" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="" placeholder="Name *" type="text" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="" placeholder="Phone *" type="text" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="" placeholder="Email *" type="text" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="" placeholder="Subject *" type="text">
                                </div>
                                <div class="col-12">
                                    <div class="contact2-textarea text-center">
                                        <textarea placeholder="Message *" name="" class="form-control2" required=""></textarea>
                                    </div>
                                    <div class="contact-btn">
                                        <button class="btn btn-sqr" type="submit">Send Message</button>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h4 class="contact-title">Liên hệ với chúng tôi</h4>
                        <p>Chúng tôi luôn sẵn sàng lắng nghe bạn! Hãy liên hệ với chúng tôi nếu bạn có bất kỳ câu hỏi, góp ý hoặc yêu cầu hỗ trợ nào...</p>
                        <ul>
                            <li><i class="fa fa-fax"></i> Address : Trinh-Van-Bo Street</li>
                            <li><i class="fa fa-phone"></i> E-mail: triphouse@gmail.com</li>
                            <li><i class="fa fa-envelope-o"></i>(098) 668 6868</li>
                        </ul>
                        <div class="working-time">
                            <h6>Working Hours</h6>
                            <p><span>Monday – Saturday:</span>06AM – 24PM</p>
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