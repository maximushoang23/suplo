<?php $footer_option = get_field('footer_option', 'option') ?>

<footer id="footer">
    <div class="ft-content">
        <div class="ft-content-overlay">

        </div>
        <div class="wrapper-container">
            <div class="inner">
                <div class="ft-col footer-info ft-1">
                   <?= $footer_option['footer_top']['footer_info'] ?>
                </div>
                <div class="ft-col footer-fanpage ft-2">
                    <?= $footer_option['footer_top']['fanpage'] ?>
                </div>
                <div class="ft-col footer-google_map ft-3">
                    <?= $footer_option['footer_top']['google_map'] ?>
                </div>
<!--                <div class="ft-col ft-col-3 ft-4 ft-subscribe">-->
<!--                    <h3>Đăng ký nhận tin</h3>-->
<!--                    <div class="ft-sub-desc">-->
<!--                        Hãy nhập địa chỉ email của bạn vào ô dưới đây để có thể nhận được tất cả các tin tức mới-->
<!--                        nhất của Suplo về các sản phẩm mới, các chương trình khuyến mãi mới. Suplo xin đảm bảo sẽ-->
<!--                        không gửi mail rác, mail spam tới bạn.-->
<!--                    </div>-->
<!--                    <div class="ft-sub-wrapper">-->
<!--                        <form accept-charset="UTF-8" action="/account/contact" class="contact-form" method="post">-->
<!--                            <input name="form_type" type="hidden" value="customer">-->
<!--                            <input name="utf8" type="hidden" value="✓">-->
<!--                            <div class="input-group">-->
<!--                                <input type="email" value="" placeholder="Nhập email của bạn..."-->
<!--                                       name="contact[email]" id="Email" class="input-group-field"-->
<!--                                       aria-label="email@example.com">-->
<!--                                <input type="hidden" name="contact[tags]" value="newsletter">-->
<!--                                <span class="input-group-btn">-->
<!--                                        <button type="submit" name="subscribe" id="subscribe" value="GỬI"><i-->
<!--                                                class="las la-paper-plane"></i></button>-->
<!--                                    </span>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <div class="ft-copyrights">
        <div class="wrapper-container">
            <div class="inner">
                <div class="sub-nav">
                    <div class="ft-links text-left clearfix">
                        <?php foreach ($footer_option['footer_bottom']['footer_menu'] as $footer_menu_item): ?>
                        <a href="<?= $footer_menu_item['link_item']['url'] ?>"><?= $footer_menu_item['link_item']['title'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="copyrights-text">
                    <?= $footer_option['footer_bottom']['coppy_right'] ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="box-modal">
    <div class="modal-overlay">

    </div>
    <div class="modal-content">
        <div class="inner">
            <h2 class="h2-title mobile-menu-title">
                Menu
                <i class="las la-window-close"></i>
            </h2>
            <ul id="primary-menu-mobile" class="navbar-main-menu">
                <li class="menu-item menu-item-type-custom current-menu-item">
                    <a href="">
                        Trang chủ
                    </a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-has-children">
                    <a href="">
                        Sản phẩm
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-custom menu-item-has-children">
                            <a href="">
                                Thực phẩm chức năng
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom">
                                    <a href="">
                                        Xuất xứ Hoa Kì
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-custom">
                                    <a href="">
                                        Xuất xứ Nhật Bản
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-custom">
                                    <a href="">
                                        Xuất xứ Việt Nam
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom">
                            <a href="">
                                Thuốc Đông Y
                            </a>
                        </li>
                        <li class="menu-item menu-item-type-custom">
                            <a href="">
                                Thuốc Tây Y
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-custom">
                    <a href="">
                        Tin tức
                    </a>
                </li>
                <li class="menu-item menu-item-type-custom">
                    <a href="">
                        Liên hệ
                    </a>
                </li>
                <li class="menu-item menu-item-type-custom">
                    <a href="">
                        Hệ thống cửa hàng
                    </a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-has-children">
                    <a href="">
                        Chăm sóc khách hàng
                    </a>
                    <ul class="sub-menu mega-menu">
                        <li class="inner-sub-menu">
                            <div class="inner-item">
                                <a href="">
                                    Tư vấn sản phẩm
                                </a>
                            </div>
                            <div class="inner-item">
                                <a href="">
                                    Chính sách giao hàng
                                </a>
                            </div>
                            <div class="inner-item">
                                <a href="">
                                    Chính sách đổi trả
                                </a>
                            </div>
                            <div class="inner-item">
                                <a href="">
                                    Câu hỏi thường gặp
                                </a>
                                <ol class="list-question">
                                    <li class="question-item">
                                        <a href="">
                                            Về sản phẩm
                                        </a>
                                    </li>
                                    <li class="question-item">
                                        <a href="">
                                            Về suplo
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-custom">
                    <a href="">
                        Tìm kiếm
                    </a>
                </li>
                <li class="menu-item menu-item-type-custom">
                    <a href="">
                        Tài khoản
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
