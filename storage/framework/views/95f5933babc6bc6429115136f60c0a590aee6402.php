<?php $__env->startSection('content'); ?>
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-9">
                <h2 class="title text-center">Địa chỉ</h2>
                <div id="gmap" class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.4122545871764!2d105.82641391538941!3d21.01618449358226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab7f3dc7f5b7%3A0x1f76d6f5e840db12!2zTmd1eeG7hW4gTMawxqFuZyBC4bqxbmcsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1625119187263!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <div class="contact-form">
                    <h2 class="title text-center">Đăng ký nhận thông tin mới nhất</h2>
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                        <div class="form-group col-md-12">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Họ và tên">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Địa chỉ email">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="subject" class="form-control" required="required" placeholder="Số điện thoại">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">Thông tin</h2>
                    <address>
                        <p>E-Shopper Inc.</p>
                        <p>Nguyễn Lương Bằng, Đống Đa, Hà Nội</p>
                        <p>Việt Nam</p>
                        <p>Mobile: +84 368 701 680</p>
                        <p>Fax: 1-714-252-0026</p>
                        <p>Email: vg.duchieu0602@gmail.com</p>
                    </address>
                    <div class="social-networks">
                        <h2 class="title text-center">Mạng xã hội</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/#contact-page-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\shoplaravel\resources\views/pages/contact.blade.php ENDPATH**/ ?>