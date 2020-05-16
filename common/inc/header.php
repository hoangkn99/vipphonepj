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
    <!-- Header -->
    
<header class="only-pc">
        <div class="Responsive">
            <div class="Menu">
                <div class="Menu-branch">
                    <div class="Menu-branch_logo">
                        <img src="/vipphone/common/img/logo.png" alt="">
                    </div>
                    <div class="Menu-branch-search">
                        <!--<div class="Menu-branch-search-location">
                            <p class="Menu-branch-search-location_txt">Hồ Chí Minh </p>
                        </div> -->
                        <div class="Menu-branch-search-input">
                            <input type="text" name="" value="" placeholder="Tìm kiếm...">
                        </div>
                        <div class="Menu-branch-search-button">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
                <div class="Menu-list">
                    <a href="/vipphone/index.php" class="Menu-list_link">
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="fas fa-home"></i></div>
                            <p class="Menu-list-item-content_txt">TRANG CHỦ</p>
                        </div>
                    </div>
                    </a>
                    <a href="/vipphone/introduce.php" class="Menu-list_link">
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="fas fa-info"></i></div>
                            <p class="Menu-list-item-content_txt">GIỚI THIỆU</p>
                        </div>
                    </div>
                    </a>
                    <a href="/vipphone/product.php" class="Menu-list_link">
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content_txt">SẢN PHẨM</p>
                        </div>
                    </a>
                        <div class="Menu-list-item-sub">
                            <div class="Menu-list-item-sub-list">
                                <div class="Menu-list-item-sub-list-item">
                                    <a href="/vipphone/register.php" class="Menu-list-item-sub-list-item_txt">Iphone</a>
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
                    <a href="/vipphone/accessories.php" class="Menu-list_link">
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="fas fa-headphones-alt"></i></div>
                            <p class="Menu-list-item-content_txt">PHỤ KIỆN</p>
                        </div>
                    </div>
                    </a>
                    <a href="/vipphone/news.php" class="Menu-list_link">
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="far fa-id-card"></i></div>
                            <p class="Menu-list-item-content_txt">TIN TỨC</p>
                        </div>
                    </div>
                    </a>
                    <a href="/vipphone/contact.php" class="Menu-list_link">
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="far fa-id-card"></i></div>
                            <p class="Menu-list-item-content_txt">LIÊN HỆ</p>
                        </div>
                    </div>
                    </a>
                    <a href="/vipphone/cart.php" class="Menu-list_link">
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="fas fa-shopping-cart"></i></div>
                            <p class="Menu-list-item-content_txt">GIỎ HÀNG<span class="count">(0)</span></p>
                        </div>
                    </div>
                    </a>
                    </a>
                    <a href="/vipphone/login.php" class="Menu-list_link">
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="fas fa-user"></i></div>
                            <p class="Menu-list-item-content_txt">ĐĂNG NHẬP</p>
                        </div>   
                    </div>
                    </a>
                    <!--<a href="/vipphone/register.php" class="Menu-list_link">
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content_icon"><i class="fas fa-key"></i></div>
                            <p class="Menu-list-item-content_txt">ĐĂNG KÍ</p>
                        </div>
                    </div>
                    </a>-->
                    
                </div>
            </div>
        </div>
    </header>
    <header class="only-sp">
        <div class="js-nav Nav">
        <div class="Nav-content">
            <div class="Nav_logo">
                <img src="/vipphone/common/img/logo.png" alt="logo">
            </div>
            <div class="Nav-search">
                <div class="Nav-search-content">
                    <div class="Nav-search-content_input">
                        <input type="text" placeholder="Tìm kiếm">
                    </div>
                    <div class="Nav-search-content_button">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
               
            </div>
            <div class="Nav-hamburger">
                <div class="js-navHamburger Nav-hamburger-content">
                    <span class="Nav-hamburger-content_icon"></span>
                    <span class="Nav-hamburger-content_icon"></span>
                    <span class="Nav-hamburger-content_icon"></span>
                </div>
            </div>
        </div>
        <div class="Nav-menu">
            <div class="Nav-menu-content">
                <div class="Nav-menu-content-list">
                    <a href="#" class="Nav-menu-content-list-item">TRANG CHỦ</a>
                    <a href="#" class="Nav-menu-content-list-item">GIỚI THIỆU</a>
                    <a href="#" class="Nav-menu-content-list-item">SẢN PHẨM</a>
                    <a href="#" class="Nav-menu-content-list-item">PHỤ KIỆN</a>
                    <a href="#" class="Nav-menu-content-list-item">TIN TỨC</a>
                    <a href="#" class="Nav-menu-content-list-item">LIÊN HỆ</a>
                    <a href="#" class="Nav-menu-content-list-item">GIỎ HÀNG</a>
                    <a href="#" class="Nav-menu-content-list-item">ĐĂNG NHẬP</a>
                </div>
            </div>
        </div>
        </div>
    </header>