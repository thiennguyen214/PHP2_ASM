@extends('layouts.master')
@extends('layouts.partials.header')

@section('title')
Login
@endsection

@section('style')
<link
    href="{{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/index.scss02fb.css?1709175143725"
    rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as='style' type="text/css"
    href="{{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/quickviews_popup_cart.scss02fb.css?1709175143725" />
<link
    href="{{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/quickviews_popup_cart.scss02fb.css?1709175143725"
    rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')


<div class="bodywrap">
    <h1 class="d-none">Bean Perfume -</h1>
    <div class="home-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="clearfix" title="Slider">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="
                    {{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/slider_102fb.jpg?1709175143725
                  " />
                        <source media="(min-width: 992px)" srcset="
                    {{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/slider_102fb.jpg?1709175143725
                  " />
                        <source media="(min-width: 569px)" srcset="
                    {{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/slider_102fb.jpg?1709175143725
                  " />
                        <source media="(max-width: 567px)" srcset="
                    {{url('assets/admin')}}/client/bizweb.dktcdn.net/thumb/large/100/503/826/themes/932476/assets/slider_102fb.jpg?1709175143725
                  " />
                        <img width="1920" height="980"
                            src="{{url('assets/admin')}}/client/bizweb.dktcdn.net/thumb/grande/100/503/826/themes/932476/assets/slider_102fb.jpg?1709175143725"
                            alt="Slider" class="img-responsive" />
                    </picture>
                </div>
                <div class="slider-text">
                    <h2 class="title">Bean Perfume</h2>
                    <div class="content">Bộ sưu tập</div>
                    <div class="content2">
                        <span>Mới nhất</span>
                    </div>
                    <a class="button" href="{{url('')}}?act=products" title="Mua ngay">Mua ngay</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="clearfix" title="Slider">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="
                    {{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/slider_202fb.jpg?1709175143725
                  " />
                        <source media="(min-width: 992px)" srcset="
                    {{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/slider_202fb.jpg?1709175143725
                  " />
                        <source media="(min-width: 569px)" srcset="
                    {{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/slider_202fb.jpg?1709175143725
                  " />
                        <source media="(max-width: 567px)" srcset="
                    {{url('assets/admin')}}/client/bizweb.dktcdn.net/thumb/large/100/503/826/themes/932476/assets/slider_202fb.jpg?1709175143725
                  " />
                        <img width="1920" height="980"
                            src="{{url('assets/admin')}}/client/bizweb.dktcdn.net/thumb/grande/100/503/826/themes/932476/assets/slider_202fb.jpg?1709175143725"
                            alt="Slider" class="img-responsive" />
                    </picture>
                </div>
                <div class="slider-text">
                    <h2 class="title">Bean Perfume</h2>
                    <div class="content">Top bán chạy</div>
                    <div class="content2">
                        <span>Xu hướng</span>
                    </div>
                    <a class="button" href="{{url('')}}?act=products" title="Mua ngay">Mua ngay</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        var swiper = new Swiper(".home-slider", {
            loop: true,
            autoplay: {
                delay: 4500,
            },
            spaceBetween: 24,
            speed: 1800,
            effect: "fade",
            fadeEffect: {
                crossFade: true,
            },
        });
    </script>

    <section class="section_brand container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="box_title_brand">
                    <h2 class="title-module">Thương hiệu nổi bật</h2>
                    <div class="content_brand">
                        <span>Tự hào là đại lý phân phối chính thức của hơn
                            <strong>100 thương hiệu</strong> nước hoa hàng đầu</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="swi_brand swiper-container">
                    <div class="swiper-wrapper">
                        <!-- thuong-hieu -->
                        <?php
                         foreach ($brandsh as $brandh): ?>
            
                            <div class="item_brand swiper-slide">
                                <a href="collections/all.html" class="a_brand" title="Chanel">
                                    <img width="180" height="180" class="lazyload" src="{{url('')}} . $brand['img'] ?>"
                                        data-src="{{url('assets/' . $brandh['img'])}}" alt="Thương hiệu" />
                                </a>
                                <span class="name_brand">
                                    <?= $brandh['name'] ?>
                                </span>
                            </div>

                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var swiper_brand = null;
        function initSwiperBrand() {
            swiper_brand = new Swiper(".swi_brand", {
                slidesPerView: 5,
                spaceBetween: 28,
                slidesPerGroup: 1,
                navigation: {
                    nextEl: ".swi_brand .swiper-button-next",
                    prevEl: ".swi_brand .swiper-button-prev",
                },
                breakpoints: {
                    280: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    322: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    640: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 5,
                        spaceBetween: 28,
                    },
                    992: {
                        slidesPerView: 4,
                        spaceBetween: 28,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 28,
                    },
                    1199: {
                        slidesPerView: 5,
                        spaceBetween: 28,
                    },
                },
            });
        }
        function destroySwiperBrand() {
            if (swiper_brand) {
                swiper_brand.destroy(true, true);
                swiper_brand = null;
            }
        }
        function toggleSwiperBrand() {
            if ($(window).width() <= 767 && swiper_brand) {
                destroySwiperBrand();
            } else if ($(window).width() > 767 && !swiper_brand) {
                initSwiperBrand();
            }
        }
        toggleSwiperBrand();
        $(window).on("resize", function () {
            toggleSwiperBrand();
        });
    </script>

    <section class="section_about">
        <div class="container">
            <h2 class="title-module">
                <span>Giới thiệu</span>
            </h2>
            <p class="content-module">Chào mừng đến với cửa hàng Bean Perfume</p>
            <div class="box_content_about">
                <div class="item_about">
                    <div class="img_about">
                        <img width="481" height="600" class="lazyload"
                            src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/banner_about_1.jpg?1709175143725"
                            data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/banner_about_1.jpg?1709175143725"
                            alt="Giới thiệu" />
                    </div>
                </div>
                <div class="item_about item_about_2">
                    <div class="content_item">
                        <p class="title_about">Về chúng tôi</p>
                        <p class="conent_about">
                            Bean Perfume ra đời năm 2019, xuất phát từ sự đam mê vô tận
                            với nước hoa. <br />
                            Chúng tôi mong muốn mang đến cho những người yêu nước hoa sản
                            phẩm chính hãng từ Pháp với mức giá tốt nhất
                        </p>
                        <a class="view_more" href="{{url('')}}?act=introduce" title="Xem thêm">Xem thêm</a>
                    </div>
                </div>
                <div class="item_about">
                    <div class="img_about">
                        <img width="481" height="600" class="lazyload"
                            src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                            data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/banner_about_2.jpg?1709175143725"
                            alt="Giới thiệu" />
                    </div>
                    <div class="item_posi">
                        <p class="title_posi">Kiến tạo cảm xúc</p>
                        <p class="conent_about">
                            Hương thơm lâu dài, đa dạng <br />
                            Bậc thầy hương thơm trị liệu cảm xúc.
                        </p>
                        <ul class="conent_list">
                            <li>Mang phong cách hiện đại, tinh tế.</li>
                            <li>Thiết kế gọn nhẹ mang theo hàng ngày.</li>
                            <li>Đem lại cảm giác thư thái, dễ chịu.</li>
                            <li>Tỏa sáng với hương thơm thương hiệu.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_flashsale">
        <div class="container">
            <div class="title">
                <h2 class="title-module">
                    <a href="san-pham-khuyen-mai.html" title="Sản phẩm hot">Sản phẩm hot
                        <img width="32" height="32"
                            src="{{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/bolt02fb.png?1709175143725"
                            alt="Sản phẩm hot" />
                    </a>
                    <span class="content-module">Đừng bỏ lỡ cơ hội giảm giá đặc biệt!</span>
                </h2>
                <div class="thump-flash">
                    <div class="count-down">
                        <div class="timer-view" data-countdown="countdown" data-date="2024-03-30-23-59-59"></div>
                    </div>
                </div>
            </div>

            <div class="product-flash-swiper swiper-container">
                <div class="swiper-wrapper load-after" data-section="section_flashsale">
                    {{-- <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 swiper-slide item_null">
                        <div class="item_product_main"></div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 swiper-slide item_null">
                        <div class="item_product_main"></div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 swiper-slide item_null">
                        <div class="item_product_main"></div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 swiper-slide item_null">
                        <div class="item_product_main"></div>
                    </div> --}}

                    <!-- TOP BÁN CHẠY SP -->
                    {{-- <script type="text/x-custom-template" class="upsale" data-template="section_flashsale"> --}}
                    <?php foreach ($top10Pro as $item): ?>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 swiper-slide item_null">
                            <div class="item_product_main">
                                <div class="swiper-slide">
                                    <div class="item_product_main">
                                        <form action="" method="post" class="product-action ad_tocartfs">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="{{url('products/'.$item['id'])}}" title="<?= $item['name'] ?>">  
                                                    <img  width="480" height="480" class="lazyload image1" src="{{url('assets/'.$item['img'])}}"  data-src="{{url('assets/'.$item['img'])}}" alt="<?= $item['name'] ?>">
                                                </a>
                                                <div class="action">
                                                    <input type="hidden" name="quantity" value="1" />
                                                    <input type="hidden" name="proID" value="<?= $product['id'] ?>" />
                                                    <input type="hidden" name="userID" value="<?= !empty($_SESSION['userm']) ? $_SESSION['userm']['id'] : null ?>" />
                                                    <button class="btn-cart btn-views" title="Xem chi tiết" type="button" onclick="window.location.href='{{url('')}}?act=productDetail'" >
                                                        <svg class="icon"> <use  xlink:href="#icon-detail"></use> </svg>
                                                    </button>
                                                    <a title="Xem nhanh" href="{{url('')}}?act=productDetail" data-handle="tommy-hilfiger-tommy-girl" class="quick-view btn-views">
                                                        <svg class="icon"> <use  xlink:href="#icon-quickview"></use> </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="smart">
                                                <span>-<?= floor((1 - ($item['price_sale'] / $item['price'])) * 100) ?>%</span>
                                            </div>	
                                            <a class="creatf btn-wishlist" href="#" data-proid="<?= $item['id'] ?>" data-userid="<?=(isset($_SESSION['userm']))?$_SESSION['userm']['id']:''?>" 
                                                data-url="{{url('')}}?act=favCreat" title="Thêm vào yêu thích">
                                    <svg class="icon">
                                        <use xlink:href="#icon-wishlist">
                                        </use>
                                    </svg>
                                </a>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center" href="/tommy-hilfiger-tommy-girl" title="<?= $item['name'] ?>"><?= $item['name'] ?></a></h3>
                                                <div class="price-box">
                                                <?=  number_format($item['price_sale'], 0, ',', '.') ?>₫
                                                    <span class="compare-price"><?=  number_format($item['price'], 0, ',', '.') ?>₫</span>
                                                </div>
                                                <div class="productcount">
                                                    <div class="countitem visible">
                                                        <?php $tile = ($item['so_luong_ban'] / $item['so_luong_kho']) * 100;
                                                        if ($item['so_luong_ban'] == $item['so_luong_kho']) { ?>
                                                                      <span class="a-center">Hết hàng</span>    
                                                                      <div class="countdown" style="width: 
                                                                      100%                                        
                                                        <?php } else { ?> 
                                                                  <span class="a-center">Đã bán <?= $item['so_luong_ban'] ?> sp</span>
                                                                  <div class="countdown" style="width: 
                                                              <?php
                                                              echo $tile . '%';
                                                        } ?>
                                                        ;"><span></span></div>
                                                    </div>
                                                    <div class="sale-bar"></div>
                                                </div>
                                                <div class="gift_pro "></div>
                                            </div>
                                                <ul class="fragrant_product">
                                                    <li class="text-center">
                                                        <img  width="90" height="90" class="lazyload" src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy.png?1709175143725"  data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_2.jpg?1709175143725" alt="Hoa đào">
                                                        <span>Hoa đào</span>
                                                    </li>
                                                    <li class="text-center">
                                                        <img  width="90" height="90" class="lazyload" src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy.png?1709175143725"  data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_10.jpg?1709175143725" alt="Cam">
                                                        <span>Cam</span>
                                                    </li>
                                                    <li class="text-center">
                                                        <img  width="90" height="90" class="lazyload" src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy.png?1709175143725"  data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_6.jpg?1709175143725" alt="Hoa nhài">
                                                        <span>Hoa nhài</span>
                                                    </li>
                                                </ul>
                                        </form>					
                                    </div>
                                </div>
                                </div>
                                </div>
                        <?php endforeach; ?>
                  {{-- </script> --}}
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <div class="view-more clearfix">
                <a href="{{url('')}}?act=products" title="Xem tất cả" class="btn">
                    Xem tất cả
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function ($) {
            function runSwiperSale() {
                var swi_deal_pro = null;
                function initSwiperSale() {
                    swi_deal_pro = new Swiper(".product-flash-swiper", {
                        slidesPerView: 4,
                        loop: false,
                        grabCursor: true,
                        roundLengths: true,
                        slideToClickedSlide: false,
                        spaceBetween: 20,
                        autoplay: false,
                        navigation: {
                            nextEl: ".product-flash-swiper .swiper-button-next",
                            prevEl: ".product-flash-swiper .swiper-button-prev",
                        },
                        breakpoints: {
                            300: {
                                slidesPerView: 2,
                                spaceBetween: 15,
                            },
                            500: {
                                slidesPerView: 2,
                                spaceBetween: 15,
                            },
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 15,
                            },
                            768: {
                                slidesPerView: 3,
                                spaceBetween: 28,
                            },
                            991: {
                                slidesPerView: 4,
                                spaceBetween: 28,
                            },
                            1200: {
                                slidesPerView: 4,
                                spaceBetween: 28,
                            },
                        },
                    });
                }
                function destroySwiperSale() {
                    if (swi_deal_pro) {
                        swi_deal_pro.destroy(true, true);
                        swi_deal_pro = null;
                    }
                }
                function toggleSwiperPro1() {
                    if ($(window).width() <= 767 && swi_deal_pro) {
                        destroySwiperSale();
                    } else if ($(window).width() > 767 && !swi_deal_pro) {
                        initSwiperSale();
                    }
                }
                toggleSwiperPro1();
                $(window).resize(toggleSwiperPro1);
            }
            lazyBlockProduct(
                "section_flashsale",
                "0px 0px -250px 0px",
                runSwiperSale
            );
        });
    </script>
    <section class="section_product_noibat e-tabs not-dqtab ajax-tab-1" data-section="ajax-tab-1" data-view="grid_4">
        <div class="container">
            <h2 class="title-module">
                <a href="san-pham-noi-bat.html" title="Top Perfume">Top Perfume</a>
            </h2>
            <ul class="tabs tabs-title tab-desktop ajax clearfix">
                <li class="tab-link has-content" data-tab="tab-1" data-url="nuoc-hoa-nam">
                    <span class="line-clamp line-clamp-1" title="Tất Cả">Tất Cả</span>
                </li>

                <li class="tab-link" data-tab="tab-2" data-url="nuoc-hoa-nu">
                    <span class="line-clamp line-clamp-1" title="Hàng Mới">Hàng Mới</span>
                </li>

                <li class="tab-link" data-tab="tab-3" data-url="san-pham-noi-bat">
                    <span class="line-clamp line-clamp-1" title="Bán Chạy">Bán Chạy</span>
                </li>

                <li class="tab-link" data-tab="tab-4" data-url="san-pham-noi-bat">
                    <span class="line-clamp line-clamp-1" title="Nổi Bật">Nổi Bật</span>
                </li>
            </ul>

            <div class="tab-1 tab-content">
                <div class="row row-fix load-after" data-section="section_product_noibat">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 col-fix item_null">
                        <div class="item_product_main"></div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 col-fix item_null">
                        <div class="item_product_main"></div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 col-fix item_null">
                        <div class="item_product_main"></div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 col-fix item_null">
                        <div class="item_product_main"></div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 col-fix item_null">
                        <div class="item_product_main"></div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 col-fix item_null">
                        <div class="item_product_main"></div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 col-fix item_null">
                        <div class="item_product_main"></div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 col-fix item_null">
                        <div class="item_product_main"></div>
                    </div>
                    <script type="text/x-custom-template" data-template="section_product_noibat">
                        <?php foreach ($products as $product): ?>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 col-fix">
                                <form action="" method="post" class="product-action ad_tocart" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="{{url('')}}?act=productDetail&id=<?= $product['id'] ?>" title="<?= $product['name'] ?>">
                                            <img  width="480" height="480" class="lazyload image1" src="{{url('')}} . $product['img'] ?>"  data-src="{{url('')}} . $product['img'] ?>" alt="Sản phẩm">
                                        </a>
                                        <div class="action">
                                            <input type="hidden" name="quantity" value="1" />
                                            <input type="hidden" name="proID" value="<?= $product['id'] ?>" />
                                            <input type="hidden" name="userID" value="<?= !empty($_SESSION['userm']) ? $_SESSION['userm']['id'] : null ?>" />
                                            <button class="btn-cart btn-views" type="submit" title="Thêm vào giỏ">
                                                <svg class="icon"> 
                                                    <use  xlink:href="#icon-cart"></use> 
                                                </svg>
                                            </button>
                                            <a title="Xem chi tiết" href="" class="quick-view btn-views">
                                                <svg class="icon"> <use  xlink:href="#icon-quickview"></use> </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="smart">
                                                <span>-<?= floor((1 - ($product['price_sale'] / $product['price'])) * 100) ?>%
                                        </span>
                                    </div>	
                                    <a href="javascript:void(0)" class="creatWish btn-wishlist 
                                        <?php foreach ($favs as $fav) {
                                            if ($fav['u_id'] == $_SESSION['userm']['id'] && $fav['p_id'] == $product['id']) {
                                                echo 'active';
                                                break;
                                            }
                                        } ?>" data-wish="mancera-cedrat-boise" tabindex="0" title="Thêm vào yêu thích">
                                            <svg class="icon"> 
                                                <use xlink:href="#icon-wishlist"></use>
                                            </svg>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center" href="<?= $product['name'] ?>" title="<?= $product['name'] ?>"><?= $product['name'] ?></a></h3>
                                        <div class="price-box">
                                        <?=  number_format($product['price_sale'], 0, ',', '.') ?>₫
                                            <span class="compare-price"> <?=  number_format($product['price'], 0, ',', '.') ?>₫</span>
                                        </div>
                                    </div>
                                    <ul class="fragrant_product">
                                        <li class="text-center">
                                            <img  width="90" height="90" class="lazyload" src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy.png?1709175143725"  data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_10.jpg?1709175143725" alt="Cam">
                                            <span>Cam</span>
                                        </li>
                                        <li class="text-center">
                                            <img  width="90" height="90" class="lazyload" src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy.png?1709175143725"  data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_1.jpg?1709175143725" alt="Trái cây">
                                            <span>Trái cây</span>
                                        </li>
                                        <li class="text-center">
                                            <img  width="90" height="90" class="lazyload" src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy.png?1709175143725"  data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_7.jpg?1709175143725" alt="Gỗ">
                                            <span>Gỗ</span>
                                        </li>
                                    </ul>
                                </form>				
                            </div>
                    <?php endforeach; ?>
                    
              </script>
                </div>
                <div class="view-more clearfix">
                    <a href="{{url('')}}?act=products" title="Xem tất cả" class="btn">
                        Xem tất cả
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="tab-2 tab-content">

            </div>

            <div class="tab-3 tab-content"></div>

            <div class="tab-4 tab-content"></div>
        </div>
    </section>
    <script>
        $(document).ready(function ($) {
            lazyBlockProduct("section_product_noibat", "0px 0px -250px 0px");
        });
    </script>
    <section class="section_3_banner">
        <div class="container">
            <div class="box_3_banner">
                <div class="item_3_banner">
                    <div class="box_banner">
                        <div class="banner-bg"
                            style="
                    background-image: url({{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/bg_3banner_102fb.jpg?1709175143725);">
                        </div>
                        <div class="banner-overlay"></div>
                    </div>
                    <div class="content_banner">
                        <img width="208" height="300" class="lazyload"
                            src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                            data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/3_banner_1.png?1709175143725"
                            alt="Nước Hoa Nam" />
                        <p class="title_banner">Nước Hoa Nam</p>
                        <p class="des_banner">Mùi hương mạnh mẽ đậm chất nam tính</p>
                        <div class="view-more clearfix">
                            <a href="{{url('')}}?act=Male" title="Xem thêm" class="btn">
                                Xem thêm
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item_3_banner">
                    <div class="box_banner">
                        <div class="banner-bg"
                            style="
                    background-image: url({{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/bg_3banner_202fb.jpg?1709175143725);">
                        </div>
                        <div class="banner-overlay"></div>
                    </div>
                    <div class="content_banner">
                        <img width="208" height="300" class="lazyload"
                            src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                            data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/3_banner_2.png?1709175143725"
                            alt="Nước Hoa Nữ" />
                        <p class="title_banner">Nước Hoa Nữ</p>
                        <p class="des_banner">
                            Mùi hương ngọt nữ tính quyến rũ nhẹ nhàng
                        </p>
                        <div class="view-more clearfix">
                            <a href="{{url('')}}?act=Female" title="Xem thêm" class="btn">
                                Xem thêm
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item_3_banner">
                    <div class="box_banner">
                        <div class="banner-bg"
                            style="
                    background-image: url({{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/bg_3banner_302fb.jpg?1709175143725);">
                        </div>
                        <div class="banner-overlay"></div>
                    </div>
                    <div class="content_banner">
                        <img width="208" height="300" class="lazyload"
                            src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                            data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/3_banner_3.png?1709175143725"
                            alt="Nước Hoa Unisex" />
                        <p class="title_banner">Nước Hoa Unisex</p>
                        <p class="des_banner">
                            Mùi hương đặc trưng dùng cho cả nam và nữ
                        </p>
                        <div class="view-more clearfix">
                            <a href="{{url('')}}?act=Unisex" title="Xem thêm" class="btn">
                                Xem thêm
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_product_1">
        <div class="container">
            <h2 class="title-module">
                <a href="san-pham-noi-bat.html" title="Xu hướng">Xu hướng</a>
            </h2>
            <p class="content-module">
                Nước hoa được nhiều người tin dùng và yêu thích
            </p>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 order-md-2">
                    <div class="banner_tren">
                        <img width="570" height="430" class="lazyload"
                            src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                            data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/banner_pro_1.jpg?1709175143725"
                            alt="BST MÙA XUÂN" />
                        <div class="content_bst">
                            <p class="content">BST MÙA XUÂN</p>
                            <p class="content2">
                                <span>Giảm đến 10%</span>
                            </p>
                            <a class="button" href="{{url('')}}?act=products" title="Xem ngay">Xem ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 item_pro_tren order-md-1">
                    <?php foreach ($xuHuong as $trend): ?>
                        <div class="item_pro_top">
                            <form action="https://bean-perfume.mysapo.net/cart/add" method="post"
                                class=" product-action ad_tocart" enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover"
                                        href="{{url('')}}?act=productDetail&id=<?= $trend['id'] ?>"
                                        title="Gucci Bloom Ambrosia di Fiori">
                                        <img width="480" height="480" class="lazyload image1"
                                            src="{{url('')}} . $trend['img'] ?>" data-src="{{url('')}} . $trend['img'] ?>"
                                            alt="Gucci Bloom Ambrosia di Fiori" />
                                    </a>
                                    <div class="action">
                                        <input class="hidden" type="hidden" name="variantId" value="104172759" />
                                        <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                            onclick="window.location.href='gucci-bloom-ambrosia-di-fiori.html'">
                                            <svg class="icon">
                                                <use xlink:href="#icon-detail">
                                                </use>
                                            </svg>
                                        </button>
                                        <a title="Xem nhanh" href="gucci-bloom-ambrosia-di-fiori.html"
                                            data-handle="gucci-bloom-ambrosia-di-fiori" class="quick-view btn-views">
                                            <svg class="icon">
                                                <use xlink:href="#icon-quickview">
                                                </use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="smart">
                                                <span>-<?= floor((1 - ($trend['price_sale'] / $trend['price'])) * 100) ?></span></div>
                                <a class="creatWish <?= $trend['id'] ?> btn-wishlist" href="#" data-proid="<?= $trend['id'] ?>" data-userid="<?=(isset($_SESSION['userm']))?$_SESSION['userm']['id']:''?>" 
                                                data-url="{{url('')}}?act=favCreat" title="Thêm vào yêu thích">
                                    <svg class="icon">
                                        <use xlink:href="#icon-wishlist">
                                        </use>
                                    </svg>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a class="line-clamp line-clamp-1 text-center"
                                            href="gucci-bloom-ambrosia-di-fiori.html" title="Gucci Bloom Ambrosia di Fiori">
                                            <?= $trend['name'] ?>
                                        </a>
                                    </h3>
                                    <div class="price-box">
                                        <?=  number_format($trend['price_sale'], 0, ',', '.') ?>₫
                                        <span class="compare-price">
                                            <?=  number_format($trend['price'], 0, ',', '.') ?>₫
                                        </span>
                                    </div>
                                </div>
                                <ul class="fragrant_product">
                                    <li class="text-center">
                                        <img width="90" height="90" class="lazyload"
                                            src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                            data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_6.jpg?1709175143725"
                                            alt="Hoa nhài" />
                                        <span>Hoa nhài</span>
                                    </li>
                                    <li class="text-center">
                                        <img width="90" height="90" class="lazyload"
                                            src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                            data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_2.jpg?1709175143725"
                                            alt="Hoa đào" />
                                        <span>Hoa đào</span>
                                    </li>
                                    <li class="text-center">
                                        <img width="90" height="90" class="lazyload"
                                            src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                            data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_4.jpg?1709175143725"
                                            alt="Hoa hồng" />
                                        <span>Hoa hồng</span>
                                    </li>
                                </ul>
                            </form>
                        </div>

                    <?php endforeach; ?>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 order-md-3">
                    <div class="banner_tren banner_tren_2">
                        <img width="570" height="430" class="lazyload"
                            src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                            data-src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/banner_pro_2.jpg?1709175143725"
                            alt="Xu hướng" />
                        <div class="content_bst">
                            <p class="content">BST MÙA HÈ</p>
                            <p class="content2">
                                <span>Giảm đến 20%</span>
                            </p>
                            <a class="button" href="collections/all.html" title="Xem ngay">Xem ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 item_pro_tren order-md-4">
                    <div class="item_pro_top">
                        <form action="" method="post" class="product-action ad_tocart" enctype="multipart/form-data">
                            <div class="product-thumbnail">
                                <a class="image_thumb scale_hover" href="unisex-creed-millesime-imperial.html"
                                    title="Unisex Creed Millesime Imperial">
                                    <img width="480" height="480" class="lazyload image1"
                                        src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                        data-src="{{url('')}}S ?>bizweb.dktcdn.net/thumb/large/100/503/826/products/nuoc-hoa-unisex-creed-millesime-imperial-edp-100ml.png?v=1701251789210"
                                        alt="Unisex Creed Millesime Imperial" />
                                </a>
                                <div class="action">
                                    <input type="hidden" name="quantity" value="1" />
                                    <input type="hidden" name="proID" value="<?= $product['id'] ?>" />
                                    <input type="hidden" name="userID"
                                        value="<?= !empty($_SESSION['userm']) ? $_SESSION['userm']['id'] : null ?>" />
                                    <button class="btn-cart btn-views" type="submit" title="Thêm vào giỏ">
                                        <svg class="icon">
                                            <use xlink:href="#icon-cart">
                                            </use>
                                        </svg>
                                    </button>
                                    <a title="Xem nhanh" href="unisex-creed-millesime-imperial.html"
                                        data-handle="unisex-creed-millesime-imperial" class="quick-view btn-views">
                                        <svg class="icon">
                                            <use xlink:href="#icon-quickview">
                                            </use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="smart"><span>- 13% </span></div>
                            <a class="creatWish btn-wishlist" href="#" data-proid="<?= $trend['id'] ?>" data-userid="<?=(isset($_SESSION['userm']))?$_SESSION['userm']['id']:''?>" 
                                                data-url="{{url('')}}?act=favCreat" title="Thêm vào yêu thích">
                                    <svg class="icon">
                                        <use xlink:href="#icon-wishlist">
                                        </use>
                                    </svg>
                                </a>
                            <div class="product-info">
                                <h3 class="product-name">
                                    <a class="line-clamp line-clamp-1 text-center"
                                        href="unisex-creed-millesime-imperial.html"
                                        title="Unisex Creed Millesime Imperial">Unisex Creed Millesime Imperial</a>
                                </h3>
                                <div class="price-box">
                                    5.680.000₫
                                    <span class="compare-price">6.500.000₫</span>
                                </div>
                            </div>
                            <ul class="fragrant_product">
                                <li class="text-center">
                                    <img width="90" height="90" class="lazyload"
                                        src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                        data-src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_10.jpg?1709175143725"
                                        alt="Cam" />
                                    <span>Cam</span>
                                </li>
                                <li class="text-center">
                                    <img width="90" height="90" class="lazyload"
                                        src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                        data-src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_7.jpg?1709175143725"
                                        alt="Gỗ" />
                                    <span>Gỗ</span>
                                </li>
                                <li class="text-center">
                                    <img width="90" height="90" class="lazyload"
                                        src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                        data-src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_1.jpg?1709175143725"
                                        alt="Trái cây" />
                                    <span>Trái cây</span>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="item_pro_top">
                        <form action="" method="post" class=" product-action ad_tocart" enctype="multipart/form-data">
                            <div class="product-thumbnail">
                                <a class="image_thumb scale_hover" href="nuoc-hoa-unisex-gucci-the-virgin-violet.html"
                                    title="Nước Hoa Unisex Gucci The Virgin Violet">
                                    <img width="480" height="480" class="lazyload image1"
                                        src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                        data-src="{{url('')}}S ?>bizweb.dktcdn.net/thumb/large/100/503/826/products/nuoc-hoa-unisex-gucci-the-virgin-violet-edp-100ml.png?v=1701251056543"
                                        alt="Nước Hoa Unisex Gucci The Virgin Violet" />
                                </a>
                                <div class="action">
                                    <input type="hidden" name="quantity" value="1" />
                                    <input type="hidden" name="proID" value="<?= $product['id'] ?>" />
                                    <input type="hidden" name="userID"
                                        value="<?= !empty($_SESSION['userm']) ? $_SESSION['userm']['id'] : null ?>" />
                                    <button class="btn-cart btn-views" type="submit" title="Thêm vào giỏ">
                                        <svg class="icon">
                                            <use xlink:href="#icon-cart">
                                            </use>
                                        </svg>
                                    </button>
                                    <a title="Xem nhanh" href="nuoc-hoa-unisex-gucci-the-virgin-violet.html"
                                        data-handle="nuoc-hoa-unisex-gucci-the-virgin-violet"
                                        class="quick-view btn-views">
                                        <svg class="icon">
                                            <use xlink:href="#icon-quickview">
                                            </use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="smart"><span>- 27% </span></div>
                            <a href="javascript:void(0)" class="creatWish btn-wishlist"
                                data-wish="nuoc-hoa-unisex-gucci-the-virgin-violet" tabindex="0"
                                title="Thêm vào yêu thích">
                                <svg class="icon">
                                    <use xlink:href="#icon-wishlist">
                                    </use>
                                </svg>
                            </a>
                            <div class="product-info">
                                <h3 class="product-name">
                                    <a class="line-clamp line-clamp-1 text-center"
                                        href="nuoc-hoa-unisex-gucci-the-virgin-violet.html"
                                        title="Nước Hoa Unisex Gucci The Virgin Violet">Nước Hoa Unisex Gucci The
                                        Virgin Violet</a>
                                </h3>
                                <div class="price-box">
                                    5.800.000₫
                                    <span class="compare-price">7.900.000₫</span>
                                </div>
                            </div>
                            <ul class="fragrant_product">
                                <li class="text-center">
                                    <img width="90" height="90" class="lazyload"
                                        src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                        data-src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_3.jpg?1709175143725"
                                        alt="Xạ hương" />
                                    <span>Xạ hương</span>
                                </li>
                                <li class="text-center">
                                    <img width="90" height="90" class="lazyload"
                                        src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                        data-src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_8.jpg?1709175143725"
                                        alt="Cỏ" />
                                    <span>Cỏ</span>
                                </li>
                                <li class="text-center">
                                    <img width="90" height="90" class="lazyload"
                                        src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                        data-src="{{url('')}}S ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_6.jpg?1709175143725"
                                        alt="Hoa nhài" />
                                    <span>Hoa nhài</span>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_danh_gia"
        style="
          background-image: url({{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/bg_feedback02fb.jpg?1709175143725);">
        <div class="feed-background-overlay"></div>
        <div class="container">
            <h2 class="title-module">
                <span>Đánh giá</span>
            </h2>
            <p class="content-module">
                Những lời đánh giá chân thật từ những khách hàng của chúng tôi
            </p>
            <div class="swiper_feedback swiper-container control-top">
                <div class="swiper-wrapper">
                    <?php foreach ($users as $client): ?>
                        <div class="swiper-slide">
                            <div class="review_box">
                                <div class="review_img">
                                    <img width="200" height="200" class="lazyload" src="{{url('')}} . $client['img'] ?>"
                                        data-src="{{url('')}} . $client['img'] ?>" alt="users" />
                                </div>
                                <div class="info_review">
                                    <p class="name_review">
                                        <?= $client['name'] ?>
                                    </p>
                                    <p class="job_review">Developer</p>
                                    <p class="content_review">
                                        Mẫu mã đa dạng, hương thơm quyến rũ, ngọt ngào mang lại
                                        cảm giác rất thoải mái. Một trải nghiệm nên thử!
                                    </p>
                                    <div class="elementor-widget-container">
                                        <img width="45" height="45" class="lazyload"
                                            src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                            data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/quote-free-img.png?1709175143725"
                                            alt="user" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>



                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function ($) {
            var swiper_feedback = null;
            function initSwiperFeedback() {
                swiper_feedback = new Swiper(".swiper_feedback", {
                    slidesPerView: 1,
                    spaceBetween: 28,
                    watchOverflow: true,
                    slidesPerGroup: 1,
                    grabCursor: true,
                    pagination: {
                        el: ".swiper_feedback .swiper-pagination",
                        clickable: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 14,
                        },
                        768: {
                            slidesPerView: 1,
                            spaceBetween: 28,
                        },
                        992: {
                            slidesPerView: 2,
                            spaceBetween: 28,
                        },
                        1024: {
                            slidesPerView: 2,
                            spaceBetween: 28,
                        },
                        1200: {
                            slidesPerView: 2,
                            spaceBetween: 28,
                        },
                        1500: {
                            slidesPerView: 2,
                            spaceBetween: 28,
                        },
                    },
                });
            }
            function destroySwiperFeedback() {
                if (swiper_feedback) {
                    swiper_feedback.destroy(true, true);
                    swiper_feedback = null;
                }
            }
            function toggleSwiperFeedback() {
                if ($(window).width() <= 767 && swiper_feedback) {
                    destroySwiperFeedback();
                } else if ($(window).width() > 767 && !swiper_feedback) {
                    initSwiperFeedback();
                }
            }
            toggleSwiperFeedback();
            $(window).on("resize", function () {
                toggleSwiperFeedback();
            });
        });
    </script>

    <section class="section_product_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                    <h2 class="title-module">
                        <a href="nuoc-hoa-nu.html" title="Hàng bán chạy">Hàng bán chạy</a>
                    </h2>
                    <?php foreach ($banChaytt as $banChay): ?>
                        <div class="product-view">
                            <a class="image_thumb" href="gucci-bloom-ambrosia-di-fiori.html"
                                title="Gucci Bloom Ambrosia di Fiori">
                                <img width="480" height="480" class="lazyload" src="{{url('')}} . $banChay['img'] ?>"
                                    data-src="{{url('')}} . $banChay['img'] ?>" alt="Gucci Bloom Ambrosia di Fiori" />
                            </a>
                            <div class="product-info">
                                <h3 class="product-name">
                                    <a href="gucci-bloom-ambrosia-di-fiori.html" title="Gucci Bloom Ambrosia di Fiori">
                                        <?= $banChay['name'] ?>
                                    </a>
                                </h3>
                                <div class="price-box">
                                    <span class="price">
                                        <?=  number_format($banChay['price_sale'], 0, ',', '.') ?>₫
                                    </span>

                                    <span class="compare-price">
                                        <?=  number_format($banChay['price'], 0, ',', '.') ?>₫
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>



                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                    <div class="box_tow_col">
                        <div class="img_col_tow">
                            <img width="370" height="465" class="lazyload"
                                src="{{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                data-src="{{url('assets/admin')}}/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/banner_3_col.jpg?1709175143725"
                                alt="Khám phá" />
                        </div>
                        <div class="box-text" style="z-index: 99">
                            <div class="detail-text">
                                <span class="title_one">Khám phá</span>
                                <span class="title_tow">Hương nước hoa</span>
                                <a class="btn-link" href="{{url('')}}?act=products" title="Mua ngay">MUA NGAY</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12">
                    <h2 class="title-module">
                        <a href="nuoc-hoa-nam.html" title="Hàng giảm giá">Hàng giảm giá</a>
                    </h2>
                    <?php foreach ($spSale as $sale): ?>
                        <div class="product-small-item">
                            <div class="product-view">
                                <a class="image_thumb" href="mancera-cedrat-boise.html" title="Mancera Cedrat Boise">
                                    <img width="480" height="480" class="lazyload" src="{{url('')}} . $sale['img'] ?>"
                                        data-src="{{url('')}} . $sale['img'] ?>" alt="Mancera Cedrat Boise" />
                                </a>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a href="mancera-cedrat-boise.html" title="Mancera Cedrat Boise">
                                            <?= $sale['name'] ?>
                                        </a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="price">
                                            <?=  number_format($sale['price_sale'], 0, ',', '.') ?>₫
                                        </span>

                                        <span class="compare-price">
                                            <?=  number_format($sale['price_sale'], 0, ',', '.') ?>₫
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
        </div>
    </section>

    <section class="section_blog">
        <div class="container">
            <h2 class="title-module">
                <a href="tin-tuc.html" title="Tin tức">Tin tức</a>
            </h2>
            <p class="content-module">
                Cập nhật những tin tức nước hoa hot nhất hiện nay
            </p>
            <div class="swiper_blogs swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="item-blog">
                            <div class="block-thumb">
                                <a class="thumb" href="5-huong-nuoc-hoa-ngot-ngao-day-tinh-te-ghi-dau-an-kho-phai.html"
                                    title="5 hương nước hoa ngọt ngào đầy tinh tế, ghi dấu ấn khó phai">
                                    <img width="600" height="380" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                        data-src="//bizweb.dktcdn.net/100/503/826/articles/5-huong-nuoc-hoa-ngot-ngao-day-tinh-te.jpg?v=1701332538430"
                                        alt="5 hương nước hoa ngọt ngào đầy tinh tế, ghi dấu ấn khó phai" />
                                </a>
                                <p class="time-post">
                                    <span>04/12/2023</span>
                                </p>
                            </div>
                            <div class="block-content">
                                <h3>
                                    <a href="5-huong-nuoc-hoa-ngot-ngao-day-tinh-te-ghi-dau-an-kho-phai.html"
                                        title="5 hương nước hoa ngọt ngào đầy tinh tế, ghi dấu ấn khó phai">5 hương
                                        nước hoa ngọt ngào đầy tinh tế, ghi dấu ấn khó
                                        phai</a>
                                </h3>

                                <p class="justify">
                                    Ai mê mệt hương thơm ngọt ngào của trái cây và hoa cỏ thì
                                    lựa chọn 5 chai nước hoa xịn mịn này là đúng chuẩn.&nbsp;
                                    Khác với sự nồng nàn của hương gỗ, nước hoa mang hương
                                    thơm ngọt thường được chiết xuất từ những loại trái cây,
                                    hoa cỏ trong thiên nhiên. Do đó, chúng thường mang đến cảm
                                    giác dễ chịu, nhẹ nhàng không quá nồng nhưng vẫn đủ sức
                                    khiến người khác phải ngất ngây. Nếu bạn...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-blog">
                            <div class="block-thumb">
                                <a class="thumb" href="khong-phai-toc-hay-co-day-moi-la-noi-ban-nen-xit-nuoc-hoa.html"
                                    title="Không phải tóc hay cổ, đây mới là nơi bạn nên xịt nước hoa">
                                    <img width="600" height="380" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                        data-src="//bizweb.dktcdn.net/100/503/826/articles/khong-phai-toc-hay-co-day-moi-la-noi-ban-nen-xit-nuoc-hoa.jpg?v=1701654839137"
                                        alt="Không phải tóc hay cổ, đây mới là nơi bạn nên xịt nước hoa" />
                                </a>
                                <p class="time-post">
                                    <span>04/12/2023</span>
                                </p>
                            </div>
                            <div class="block-content">
                                <h3>
                                    <a href="khong-phai-toc-hay-co-day-moi-la-noi-ban-nen-xit-nuoc-hoa.html"
                                        title="Không phải tóc hay cổ, đây mới là nơi bạn nên xịt nước hoa">Không
                                        phải tóc hay cổ, đây mới là nơi bạn nên xịt nước
                                        hoa</a>
                                </h3>

                                <p class="justify">
                                    Từ lâu, nước hoa không chỉ giúp chúng ta thu hút người
                                    xung quanh mà còn phần nào thể hiện cá tính của bản thân.
                                    Tùy vào từng hãng sản xuất và nồng độ tinh dầu có trong
                                    sản phẩm mà nước hoa sẽ có độ bám tỏa riêng biệt. Thế
                                    nhưng theo các chuyên gia, việc biết cách xịt hoặc thoa
                                    nước hoa vào đúng vị trí cần trên cơ thể để làm tăng độ
                                    lưu hương lên đáng kể....
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-blog">
                            <div class="block-thumb">
                                <a class="thumb" href="cach-chon-nuoc-hoa-mua-he-phu-hop-cong-so.html"
                                    title="Cách chọn nước hoa mùa hè phù hợp công sở">
                                    <img width="600" height="380" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                        data-src="//bizweb.dktcdn.net/100/503/826/articles/cach-chon-nuoc-hoa-mua-he-phu-hop-voi-phu-nu-cong-so.jpg?v=1701331847930"
                                        alt="Cách chọn nước hoa mùa hè phù hợp công sở" />
                                </a>
                                <p class="time-post">
                                    <span>04/12/2023</span>
                                </p>
                            </div>
                            <div class="block-content">
                                <h3>
                                    <a href="cach-chon-nuoc-hoa-mua-he-phu-hop-cong-so.html"
                                        title="Cách chọn nước hoa mùa hè phù hợp công sở">Cách chọn nước hoa mùa hè
                                        phù hợp công sở</a>
                                </h3>

                                <p class="justify">
                                    Dưới đây là 3 lưu ý chọn nước hoa mùa hè mà các chị em
                                    công sở nên lưu tâm. Mùa Hè đến cũng là lúc thời tiết thay
                                    đổi, trở nên oi bức với ánh nắng gay gắt, nhiệt độ cao.
                                    Chính vì thế trong khoản chọn nước hoa, các chị em cũng
                                    cần thay đổi để tìm được hương nước hoa phù hợp. Đặc biệt
                                    với các chị em công sở, làm việc trong môi trường điều
                                    hòa, phòng...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-blog">
                            <div class="block-thumb">
                                <a class="thumb"
                                    href="louis-vuitton-ra-mat-nuoc-hoa-pacific-chill-lay-cam-hung-tu-california.html"
                                    title="Louis Vuitton ra mắt nước hoa Pacific Chill lấy cảm hứng từ California">
                                    <img width="600" height="380" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                        data-src="//bizweb.dktcdn.net/100/503/826/articles/louis-vuitton-ra-mat-nuoc-hoa-pacific-chill-lay-cam-hung-tu-california.jpg?v=1701657059360"
                                        alt="Louis Vuitton ra mắt nước hoa Pacific Chill lấy cảm hứng từ California" />
                                </a>
                                <p class="time-post">
                                    <span>04/12/2023</span>
                                </p>
                            </div>
                            <div class="block-content">
                                <h3>
                                    <a href="louis-vuitton-ra-mat-nuoc-hoa-pacific-chill-lay-cam-hung-tu-california.html"
                                        title="Louis Vuitton ra mắt nước hoa Pacific Chill lấy cảm hứng từ California">Louis
                                        Vuitton ra mắt nước hoa Pacific Chill lấy cảm
                                        hứng từ California</a>
                                </h3>

                                <p class="justify">
                                    Nước hoa Pacific Chill của Louis Vuitton lấy cảm hứng từ
                                    vùng biển California, có hương thơm dịu nhẹ và được giới
                                    thiệu "giúp detox tâm hồn". Bên cạnh những dòng nước hoa
                                    biểu tượng như California Dream, Afternoon Swim, On The
                                    Beach và City of Stars, "đại gia đình" Cologne Perfumes
                                    của Louis Vuitton vừa chào đón thành viên mới - Pacific
                                    Chill. Lấy cảm hứng từ California (Los Angeles, Mỹ), bộ
                                    sưu tập Cologne Perfumes vừa khắc họa vẻ đẹp...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-blog">
                            <div class="block-thumb">
                                <a class="thumb" href="thanh-pho-nam-giu-cac-bi-mat-ve-hoa-va-huong-nuoc-hoa.html"
                                    title="Thành phố nắm giữ các bí mật về hoa và hương nước hoa">
                                    <img width="600" height="380" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                        data-src="//bizweb.dktcdn.net/100/503/826/articles/thanh-pho-nam-giu-bi-mat-ve-nuoc-hoa.jpg?v=1701656505930"
                                        alt="Thành phố nắm giữ các bí mật về hoa và hương nước hoa" />
                                </a>
                                <p class="time-post">
                                    <span>04/12/2023</span>
                                </p>
                            </div>
                            <div class="block-content">
                                <h3>
                                    <a href="thanh-pho-nam-giu-cac-bi-mat-ve-hoa-va-huong-nuoc-hoa.html"
                                        title="Thành phố nắm giữ các bí mật về hoa và hương nước hoa">Thành phố nắm
                                        giữ các bí mật về hoa và hương nước
                                        hoa</a>
                                </h3>

                                <p class="justify">
                                    Hoa nhài không chỉ là một loài hoa có hương thơm nồng nàn
                                    mà tại Ấn Độ, loài hoa này còn là biểu tượng tình yêu
                                    trong Ấn Độ giáo. Hương thơm ngập tràn không khí khi những
                                    người thợ hái hoa đang thu hoạch những bông hoa nhài
                                    trắng. Những nụ hoa còn tươi sẽ được xử lý, trở thành loại
                                    nguyên liệu giá trị để chiết xuất các loại nước hoa trên
                                    khắp thế giới. Hoa nhài chỉ tỏa...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-blog">
                            <div class="block-thumb">
                                <a class="thumb" href="5-cach-dung-nuoc-hoa-giup-luu-giu-huong-lau-trong-mua-lanh.html"
                                    title="5 cách dùng nước hoa, giúp lưu giữ hương lâu trong mùa lạnh">
                                    <img width="600" height="380" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                        data-src="//bizweb.dktcdn.net/100/503/826/articles/5-cach-dung-nuoc-hoa-giup-luu-giu-huong.jpg?v=1701655904947"
                                        alt="5 cách dùng nước hoa, giúp lưu giữ hương lâu trong mùa lạnh" />
                                </a>
                                <p class="time-post">
                                    <span>04/12/2023</span>
                                </p>
                            </div>
                            <div class="block-content">
                                <h3>
                                    <a href="5-cach-dung-nuoc-hoa-giup-luu-giu-huong-lau-trong-mua-lanh.html"
                                        title="5 cách dùng nước hoa, giúp lưu giữ hương lâu trong mùa lạnh">5 cách
                                        dùng nước hoa, giúp lưu giữ hương lâu trong mùa
                                        lạnh</a>
                                </h3>

                                <p class="justify">
                                    Mùa thu đông là thời điểm lý tưởng để thể hiện phong cách
                                    và cá nhân hóa qua việc sử dụng nước hoa. Tuy nhiên, với
                                    khí hậu lạnh giá và khô hanh, việc chọn và sử dụng nước
                                    hoa trong mùa thu đông có một số yếu tố cần lưu ý để tận
                                    hưởng hương thơm lâu bền và phù hợp với môi trường xung
                                    quanh. Dưới đây là 5 mẹo giúp bạn chọn và sử dụng nước
                                    hoa...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="view-more clearfix">
                <a href="{{url('')}}?act=posts" title="Xem tất cả" class="btn">
                    Xem tất cả
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function ($) {
            var swiper_blogs = null;
            function initSwiperBlogs() {
                swiper_blogs = new Swiper(".swiper_blogs", {
                    slidesPerView: 1,
                    spaceBetween: 28,
                    watchOverflow: true,
                    slidesPerGroup: 1,
                    grabCursor: true,
                    navigation: {
                        nextEl: ".swiper_blogs .swiper-button-next",
                        prevEl: ".swiper_blogs .swiper-button-prev",
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 14,
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 28,
                        },
                        992: {
                            slidesPerView: 3,
                            spaceBetween: 28,
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 28,
                        },
                        1200: {
                            slidesPerView: 3,
                            spaceBetween: 28,
                        },
                        1500: {
                            slidesPerView: 3,
                            spaceBetween: 28,
                        },
                    },
                });
            }
            function destroySwiperBlogs() {
                if (swiper_blogs) {
                    swiper_blogs.destroy(true, true);
                    swiper_blogs = null;
                }
            }
            function toggleSwiperBlogs() {
                if ($(window).width() <= 767 && swiper_blogs) {
                    destroySwiperBlogs();
                } else if ($(window).width() > 767 && !swiper_blogs) {
                    initSwiperBlogs();
                }
            }
            toggleSwiperBlogs();
            $(window).on("resize", function () {
                toggleSwiperBlogs();
            });
        });
    </script>

    <section class="section_instagram">
        <div class="container">
            <h3 class="title-module">
                <a href="https:{{url('assets/admin')}}/client/www.instagram.com/" title="@BeanPerfume">@BeanPerfume</a>
            </h3>
            <p class="content-module">Theo dõi instagram của chúng tôi</p>
            <div class="instagram-swiper swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="thumb-image">
                            <img width="260" height="260" class="lazyload"
                                src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/image_ins_1.jpg?1709175143725"
                                alt="Instagram 1" />
                            <a href="https://www.instagram.com/truong.tu.5249349?igsh=ZGQxYnlyNDk2dDM%3D&utm_source=qr"
                                title="Instagram 1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumb-image">
                            <img width="260" height="260" class="lazyload"
                                src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/image_ins_2.jpg?1709175143725"
                                alt="Instagram 2" />
                            <a href="https://www.instagram.com/truong.tu.5249349?igsh=ZGQxYnlyNDk2dDM%3D&utm_source=qr"
                                title="Instagram 2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumb-image">
                            <img width="260" height="260" class="lazyload"
                                src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/image_ins_3.jpg?1709175143725"
                                alt="Instagram 3" />
                            <a href="https://www.instagram.com/truong.tu.5249349?igsh=ZGQxYnlyNDk2dDM%3D&utm_source=qr"
                                title="Instagram 3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumb-image">
                            <img width="260" height="260" class="lazyload"
                                src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/image_ins_4.jpg?1709175143725"
                                alt="Instagram 4" />
                            <a href="https://www.instagram.com/truong.tu.5249349?igsh=ZGQxYnlyNDk2dDM%3D&utm_source=qr"
                                title="Instagram 4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumb-image">
                            <img width="260" height="260" class="lazyload"
                                src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/image_ins_5.jpg?1709175143725"
                                alt="Instagram 5" />
                            <a href="https://www.instagram.com/truong.tu.5249349?igsh=ZGQxYnlyNDk2dDM%3D&utm_source=qr"
                                title="Instagram 5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function ($) {
            var swiper_insta = null;
            function initSwiperInsta() {
                swiper_insta = new Swiper(".instagram-swiper", {
                    spaceBetween: 28,
                    loop: false,
                    navigation: {
                        nextEl: ".section-quatang-next",
                        prevEl: ".section-quatang-prev",
                    },
                    breakpoints: {
                        300: {
                            slidesPerView: 2,
                            spaceBetween: 14,
                        },
                        500: {
                            slidesPerView: 2,
                            spaceBetween: 14,
                        },
                        640: {
                            slidesPerView: 3,
                            spaceBetween: 14,
                        },
                        768: {
                            slidesPerView: 4,
                            spaceBetween: 28,
                        },
                        991: {
                            slidesPerView: 4,
                            spaceBetween: 28,
                        },
                        1200: {
                            slidesPerView: 4,
                            spaceBetween: 28,
                        },
                    },
                });
            }
            function destroySwiperInsta() {
                if (swiper_insta) {
                    swiper_insta.destroy(true, true);
                    swiper_insta = null;
                }
            }
            function toggleSwiperInsta() {
                if ($(window).width() <= 767 && swiper_insta) {
                    destroySwiperInsta();
                } else if ($(window).width() > 767 && !swiper_insta) {
                    initSwiperInsta();
                }
            }
            toggleSwiperInsta();
            $(window).on("resize", function () {
                toggleSwiperInsta();
            });
        });
    </script>

    <section class="section_chinh_sach">
        <div class="container">
            <div class="chinh_sch_ove">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item_chinh_sach">
                            <img width="64" height="64" class="lazyload"
                                src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_cs_1.png?1709175143725"
                                alt="Miễn phí vận chuyển" />
                            <div class="box_content_cs">
                                <p class="title_cs">Miễn phí vận chuyển</p>
                                <p class="content_cs">
                                    Đổi với các đơn hàng có giá trị từ <b>500K</b>
                                </p>
                            </div>
                            <a href="#" title="Miễn phí vận chuyển" class="opa_cs"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item_chinh_sach">
                            <img width="64" height="64" class="lazyload"
                                src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_cs_2.png?1709175143725"
                                alt="Hỗ trợ đổi trả" />
                            <div class="box_content_cs">
                                <p class="title_cs">Hỗ trợ đổi trả</p>
                                <p class="content_cs">
                                    Hỗ trợ <b>1 đổi 1</b> nếu sản phẩm kém chất lượng
                                </p>
                            </div>
                            <a href="#" title="Hỗ trợ đổi trả" class="opa_cs"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item_chinh_sach">
                            <img width="64" height="64" class="lazyload"
                                src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_cs_3.png?1709175143725"
                                alt="Thanh toán COD" />
                            <div class="box_content_cs">
                                <p class="title_cs">Thanh toán COD</p>
                                <p class="content_cs">
                                    Hỗ trợ thanh toán <b>trực tiếp</b> khi nhận hàng
                                </p>
                            </div>
                            <a href="#" title="Thanh toán COD" class="opa_cs"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="item_chinh_sach">
                            <img width="64" height="64" class="lazyload"
                                src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_cs_4.png?1709175143725"
                                alt="Hỗ trợ 24/7" />
                            <div class="box_content_cs">
                                <p class="title_cs">Hỗ trợ 24/7</p>
                                <p class="content_cs">
                                    Hotline <b>1800 6750</b> hỗ trợ từ 7h00 - 23h00
                                </p>
                            </div>
                            <a href="tel:18006750" title="Hỗ trợ 24/7" class="opa_cs"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<script>
    let urlAddCart = '{{url('')}} . '?act=cart-add' ?>';
    $(".ad_tocart").submit(function (event) {
        event.preventDefault();
        // console.log("Data: ", $(this).serializeArray());
        $.ajax({
            type: "post",
            url: urlAddCart,
            data: $(this).serializeArray(),
            success: function (response) {
                response = JSON.parse(response);
                if (response.status == 0) {
                    alert("Lỗi");
                } else {
                    location.reload();
                    $(".popup-cart-mobile").addClass("active");
                }
            }
        });
    });
    $(document).ready(function () {
        $(".creatWish").click(function (event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ a
            var url = $(this).data("url");
            var userid = $(this).data("userid");
            var proid = $(this).data("proid");
            $.ajax({
                type: "GET", // hoặc POST tùy theo yêu cầu của bạn
                url: url,
                data: { userid: userid, proid: proid },
                success: function (response) {
                    response = JSON.parse(response);
                    if (response.status == 0) {
                        alert(response.mess);
                    } else {
                        alert(response.mess);
                        if (response.status == 1) {
                            $(".creatWish." + proid).addClass("active");
                        } else {
                            $(".creatWish." + proid).removeClass("active");
                        }
                        $('.upsale').load(location.href + ' .upsale');
                        $('.header-wishlist').load(location.href + ' .header-wishlist');
                    }
                }
            });
        });
        $(".creatf").click(function (event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ a
            var url = $(this).data("url");
            var userid = $(this).data("userid");
            var proid = $(this).data("proid");
            console.log(url);
            console.log(userid);
            console.log(proid);
            // $.ajax({
            //     type: "GET", // hoặc POST tùy theo yêu cầu của bạn
            //     url: url,
            //     data: { userid: userid, proid: proid },
            //     success: function (response) {
            //         response = JSON.parse(response);
            //         if (response.status == 0) {
            //             alert(response.mess);
            //         } else {
            //             alert(response.mess);
            //             $(".creatWish").addClass("active");
            //             $('.upsale').load(location.href + ' .upsale');
            //             $('.header-wishlist').load(location.href + ' .header-wishlist');
            //         }
            //     }
            // });
        });
    });

</script>

@endsection

