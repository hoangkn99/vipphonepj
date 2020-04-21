<?php
define('DOC_ROOT',$_SERVER['DOCUMENT_ROOT']);
define('TITLE', 'HOME');
require_once DOC_ROOT.'/vipphone/common/php/common.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?=insertHeadInfo();?>
    <?=insertCSS('/vipphone/top/css/style.css');?>
</head>
<body>
    <header>
        <div class="Responsive">
            <div class="Menu">
                <div class="Menu-branch">
                    <div class="Menu-branch_logo">
                        <img src="/vipphone/common/img/logo.png" alt="">
                    </div>
                    <div class="Menu-branch-search">
                        <div class="Menu-branch-search-location">
                            <p class="Menu-branch-search-location_txt">Hồ Chí Minh </p>
                        </div>
                        <div class="Menu-branch-search-input">
                            <input type="text" name="" value="" placeholder="Tìm kiếm...">
                        </div>
                        <div class="Menu-branch-search-button">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
                <div class="Menu-list">
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="fas fa-home"></i></div>
                            <p class="Menu-list-item-content_txt">TRANG CHỦ</p>
                        </div>
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="fas fa-info"></i></div>
                            <p class="Menu-list-item-content_txt">GIỚI THIỆU</p>
                        </div>
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content_txt">SẢN PHẨM</p>
                        </div>
                        <div class="Menu-list-item-sub">
                            <div class="Menu-list-item-sub-list">
                                <div class="Menu-list-item-sub-list-item">
                                    <a href="#" class="Menu-list-item-sub-list-item_txt">Iphone</a>
                                </div>
                                <div class="Menu-list-item-sub-list-item">
                                    <a href="#" class="Menu-list-item-sub-list-item_txt">SamSung</a>
                                </div>
                                <div class="Menu-list-item-sub-list-item">
                                    <a href="#" class="Menu-list-item-sub-list-item_txt">Xiaomi</a>
                                </div>
                                <div class="Menu-list-item-sub-list-item">
                                    <a href="#" class="Menu-list-item-sub-list-item_txt">Sony</a>
                                </div>
                                <div class="Menu-list-item-sub-list-item">
                                    <a href="#" class="Menu-list-item-sub-list-item_txt">OPPO</a>
                                </div>
                                <div class="Menu-list-item-sub-list-item">
                                    <a href="#" class="Menu-list-item-sub-list-item_txt">Huawei</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="far fa-newspaper"></i></div>
                            <p class="Menu-list-item-content_txt">TIN TỨC</p>
                        </div>
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="far fa-id-card"></i></div>
                            <p class="Menu-list-item-content_txt">LIÊN HỆ</p>
                        </div>
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="fas fa-user"></i></div>
                            <p class="Menu-list-item-content_txt">ĐĂNG NHẬP</p>
                        </div>   
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="fas fa-key"></i></i></div>
                            <p class="Menu-list-item-content_txt">ĐĂNG KÍ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>