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
    <?php include_once('common/inc/header.php')
        /* Nếu up lên host bị lổi thì đổi đường dẫn thành (DOC_ROOT. 'vipphone/common/inc/header.php') */
    ?>  
    <!-- Banner -->
    <div class="Banner Responsive">
        <div class="js-carousel Carousel">
            <div class="js-carouselCtx Carousel-content" >
                <div class="js-carouselList Carousel-content-list">
                    <div class="Carousel-content-item" id="carousel1">
                        <img src="/vipphone/top/img/slide3.png" alt="slide1">
                    </div>
                    <div class="Carousel-content-item" id="carousel2">
                        <img src="/vipphone/top/img/slide3.png" alt="slide2">
                    </div>
                    <div class="Carousel-content-item" id="carousel3">
                        <img src="/vipphone/top/img/slide3.png" alt="slide3">
                    </div>
                    <div class="Carousel-content-item" id="carousel4">
                        <img src="/vipphone/top/img/slide4.jpg" alt="slide4">
                    </div>
                    <div class="Carousel-content-item" id="carousel5">
                        <img src="/vipphone/top/img/slide5.webp" alt="slide5">
                    </div>
                    <div class="Carousel-content-item" id="carousel6">
                        <img src="/vipphone/top/img/slide6.png" alt="slide6">
                    </div>
                </div>
                <div class="js-carouselBtn Carousel-content__btn"></div>
                <div class="js-carouselBtn Carousel-content__btn Carousel-content__btn--right"></div>
            </div>

            <div class="Carousel-nav">
                <div class="js-carouselNavItem Carousel-nav-item Carousel-nav-item--active" data-index="1">
                    <p class="only-pc Carousel-nav-item__txt">1</p>
                </div>
                <div class="js-carouselNavItem Carousel-nav-item" data-index="2">
                    <p class="only-pc Carousel-nav-item__txt">2</p>
                </div>
                <div class="js-carouselNavItem Carousel-nav-item" data-index="3">
                    <p class="only-pc Carousel-nav-item__txt">3</p>
                </div>
                <div class="js-carouselNavItem Carousel-nav-item" data-index="4">
                    <p class="only-pc Carousel-nav-item__txt">4</p>
                </div>
                <div class="js-carouselNavItem Carousel-nav-item" data-index="5">
                    <p class="only-pc Carousel-nav-item__txt">5</p>
                </div>
                <div class="js-carouselNavItem Carousel-nav-item" data-index="6">
                    <p class="only-pc Carousel-nav-item__txt">6</p>
                </div>
            </div>
        </div>
        <div class="Banner-content">
            <a href="#" class="Banner-content__item">
                <img src="/vipphone/top/img/content1.webp" alt="">
            </a>
            <a href="#" class="Banner-content__item">
            <img src="/vipphone/top/img/content2.webp" alt="">
            </a>
        </div>
    </div> 
    
    <!-- Product -->
    <div class="Responsive">
    <div class="Product">
        <div class="Product-title">Sản phẩm bán chạy</div>
        <div class="Product-content">
            <div class="Product-content-list">
                <div class="Product-content-item">
                    <div class="product-content-item__img"><img src="/vipphone/img/product01.webp" alt="product"></div>
                    <div class="Product-content-item__name"><p>Huawei P40 Pro</p></div>
                    <div class="Product-content-item__price">23.990.000 đ <span>26.000.000 đ</span></div>
                    <div class="Product-content-item__icon"><a class="info"><i class="fas fa-info-circle"></i></a><a class="card"><i class="fas fa-cart-plus"></i></a></div>
                </div>
                <div class="Product-content-item">
                    <div class="product-content-item__img"><img src="/vipphone/img/product01.webp" alt="product"></div>
                    <div class="Product-content-item__name"><p>Huawei P40 Pro</p></div>
                    <div class="Product-content-item__price">23.990.000 đ <span>26.000.000 đ</span></div>
                    <div class="Product-content-item__icon"><a class="info"><i class="fas fa-info-circle"></i></a><a class="card"><i class="fas fa-cart-plus"></i></a></div>
                </div>
                <div class="Product-content-item">
                    <div class="product-content-item__img"><img src="/vipphone/img/product01.webp" alt="product"></div>
                    <div class="Product-content-item__name"><p>Huawei P40 Pro</p></div>
                    <div class="Product-content-item__price">23.990.000 đ <span>26.000.000 đ</span></div>
                    <div class="Product-content-item__icon"><a class="info"><i class="fas fa-info-circle"></i></a><a class="card"><i class="fas fa-cart-plus"></i></a></div>
                </div>
                <div class="Product-content-item">
                    <div class="product-content-item__img"><img src="/vipphone/img/product01.webp" alt="product"></div>
                    <div class="Product-content-item__name"><p>Huawei P40 Pro</p></div>
                    <div class="Product-content-item__price">23.990.000 đ <span>26.000.000 đ</span></div>
                    <div class="Product-content-item__icon"><a class="info"><i class="fas fa-info-circle"></i></a><a class="card"><i class="fas fa-cart-plus"></i></a></div>
                </div>
                <div class="Product-content-item">
                    <div class="product-content-item__img"><img src="/vipphone/img/product01.webp" alt="product"></div>
                    <div class="Product-content-item__name"><p>Huawei P40 Pro</p></div>
                    <div class="Product-content-item__price">23.990.000 đ <span>26.000.000 đ</span></div>
                    <div class="Product-content-item__icon"><a class="info"><i class="fas fa-info-circle"></i></a><a class="card"><i class="fas fa-cart-plus"></i></a></div>
                </div>
                <div class="Product-content-item">
                    <div class="product-content-item__img"><img src="/vipphone/img/product01.webp" alt="product"></div>
                    <div class="Product-content-item__name"><p>Huawei P40 Pro</p></div>
                    <div class="Product-content-item__price">23.990.000 đ <span>26.000.000 đ</span></div>
                    <div class="Product-content-item__icon"><a class="info"><i class="fas fa-info-circle"></i></a><a class="card"><i class="fas fa-cart-plus"></i></a></div>
                </div>
                <div class="Product-content-item">
                    <div class="product-content-item__img"><img src="/vipphone/img/product01.webp" alt="product"></div>
                    <div class="Product-content-item__name"><p>Huawei P40 Pro</p></div>
                    <div class="Product-content-item__price">23.990.000 đ <span>26.000.000 đ</span></div>
                    <div class="Product-content-item__icon"><a class="info"><i class="fas fa-info-circle"></i></a><a class="card"><i class="fas fa-cart-plus"></i></a></div>
                </div>
                <div class="Product-content-item">
                    <div class="product-content-item__img"><img src="/vipphone/img/product01.webp" alt="product"></div>
                    <div class="Product-content-item__name"><p>Huawei P40 Pro</p></div>
                    <div class="Product-content-item__price">23.990.000 đ <span>26.000.000 đ</span></div>
                    <div class="Product-content-item__icon"><a class="info"><i class="fas fa-info-circle"></i></a><a class="card"><i class="fas fa-cart-plus"></i></a></div>
                </div>
                <div class="Product-content-item">
                    <div class="product-content-item__img"><img src="/vipphone/img/product01.webp" alt="product"></div>
                    <div class="Product-content-item__name"><p>Huawei P40 Pro</p></div>
                    <div class="Product-content-item__price">23.990.000 đ <span>26.000.000 đ</span></div>
                    <div class="Product-content-item__icon"><a class="info"><i class="fas fa-info-circle"></i></a><a class="card"><i class="fas fa-cart-plus"></i></a></div>
                </div>
                <div class="Product-content-item">
                    <div class="product-content-item__img"><img src="/vipphone/img/product01.webp" alt="product"></div>
                    <div class="Product-content-item__name"><p>Huawei P40 Pro</p></div>
                    <div class="Product-content-item__price">23.990.000 đ <span>26.000.000 đ</span></div>
                    <div class="Product-content-item__icon"><a class="info"><i class="fas fa-info-circle"></i></a><a class="card"><i class="fas fa-cart-plus"></i></a></div>
                </div>
            </div>
           
        </div>
    </div>
    </div>

    <?= insertJS('/vipphone/top/js/script.js'); ?>
</body>
</html>