@extends('layout.default') <!-- khai bao master view can su dung -->
@section("main") <!-- dien noi dung vao yield main -->


<!-- Slide1 -->
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 item1-slick1" style="background-image: url({{ asset("public") }}/images/master-slide-02.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
						ShopSneakers Collection 2025
					</span>

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                        New Arrivals
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                        <!-- Button -->
                        <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="item-slick1 item2-slick1" style="background-image: url({{ asset("public") }}/images/master-slide-03.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
						ShopSneakers Collection 2025
					</span>

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                        Trending Styles
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                        <!-- Button -->
                        <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Explore Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="item-slick1 item3-slick1" style="background-image: url({{ asset("public") }}/images/master-slide-04.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
						ShopSneakers Exclusive
					</span>

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
                        Fresh Kicks Drop
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                        <!-- Button -->
                        <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Banner -->
<section class="banner bgwhite p-t-40 p-b-40">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="{{ asset("public") }}/images/banner-02.jpg" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Men Sneakers
                        </a>
                    </div>
                </div>

                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="{{ asset("public") }}/images/banner-05.jpg" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Running Shoes
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="{{ asset("public") }}/images/banner-03.jpg" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Limited Edition
                        </a>
                    </div>
                </div>

                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="{{ asset("public") }}/images/banner-07.jpg" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Classic Collection
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="{{ asset("public") }}/images/banner-04.jpg" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Accessories
                        </a>
                    </div>
                </div>

                <!-- block2 -->
                <div class="block2 wrap-pic-w pos-relative m-b-30">
                    <img src="{{ asset("public") }}/images/icons/bg-01.jpg" alt="IMG">

                    <div class="block2-content sizefull ab-t-l flex-col-c-m">
                        <h4 class="m-text4 t-center w-size3 p-b-8">
                            Join ShopSneakers & Get 20% Off
                        </h4>

                        <p class="t-center w-size4">
                            Be the first to know about the latest sneaker drops and exclusive offers.
                        </p>

                        <div class="w-size2 p-t-25">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                                Sign Up
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- New Product -->
<section class="newproduct bgwhite p-t-45 p-b-105">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Featured Sneakers
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            <img src="{{ asset("public") }}/images/item-02.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Nike Air Force 1
                            </a>
                            
                             <div class="product-rating">
                             <i class="fa fa-star text-warning"></i>
                             <i class="fa fa-star text-warning"></i>
                             <i class="fa fa-star text-warning"></i>
                             <i class="fa fa-star text-warning"></i>
                             <i class="fa fa-star text-warning"></i>
                             <span>2 đánh giá</span>
                             </div>

                            <span class="block2-price m-text6 p-r-5">
							$120.00
						</span>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                            <img src="{{ asset("public") }}/images/item-03.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Adidas Ultraboost
                            </a>
                            <div class="product-rating">
                             <i class="fa fa-star text-warning"></i>
                             <i class="fa fa-star text-warning"></i>
                             <i class="fa fa-star text-warning"></i>
                             <i class="fa fa-star text-warning"></i>
                             <i class="fa fa-star text-warning"></i>
                             <span>4 đánh giá</span>
                             </div>

                            <span class="block2-price m-text6 p-r-5">
							$180.00
						</span>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                            <img src="{{ asset("public") }}/images/item-05.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Puma RS-X Future
                            </a>

                            <span class="block2-price m-text6 p-r-5">
							$140.00
						</span>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                            <img src="{{ asset("public") }}/images/item-07.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Classic Canvas Sneaker
                            </a>

                            <span class="block2-oldprice m-text7 p-r-5">
							$80.00
						</span>

                            <span class="block2-newprice m-text8 p-r-5">
							$49.99
						</span>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            <img src="{{ asset("public") }}/images/item-02.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Air Max 2025
                            </a>

                            <span class="block2-price m-text6 p-r-5">
							$150.00
						</span>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                            <img src="{{ asset("public") }}/images/item-03.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Runner Pro 2
                            </a>

                            <span class="block2-price m-text6 p-r-5">
							$129.00
						</span>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                            <img src="{{ asset("public") }}/images/item-05.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Urban Slip-On
                            </a>

                            <span class="block2-price m-text6 p-r-5">
							$85.00
						</span>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                            <img src="{{ asset("public") }}/images/item-07.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Retro Runner
                            </a>

                            <span class="block2-oldprice m-text7 p-r-5">
							$99.00
						</span>

                            <span class="block2-newprice m-text8 p-r-5">
							$59.00
						</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Banner2 -->
<section class="banner2 bg5 p-t-55 p-b-55">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
                <div class="hov-img-zoom pos-relative">
                    <img src="{{ asset("public") }}/images/banner-08.jpg" alt="IMG-BANNER">

                    <div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
						<span class="m-text9 p-t-45 fs-20-sm">
							The Sneaker Edit
						</span>

                        <h3 class="l-text1 fs-35-sm">
                            Lookbook
                        </h3>

                        <a href="#" class="s-text4 hov2 p-t-20 ">
                            View Collection
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
                <div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
                    <img src="{{ asset("public") }}/images/shop-item-09.jpg" alt="IMG-BANNER">

                    <div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
                        <div class="t-center">
                            <a href="product-detail.html" class="dis-block s-text3 p-b-5">
                                Featured Sneaker
                            </a>

                            <span class="block2-oldprice m-text7 p-r-5">
							$29.50
						</span>

                            <span class="block2-newprice m-text8">
							$15.90
						</span>
                        </div>

                        <div class="flex-c-m p-t-44 p-t-30-xl">
                            <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
								<span class="m-text10 p-b-1 days">
									69
								</span>

                                <span class="s-text5">
								days
							</span>
                            </div>

                            <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
								<span class="m-text10 p-b-1 hours">
									04
								</span>

                                <span class="s-text5">
								hrs
							</span>
                            </div>

                            <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
								<span class="m-text10 p-b-1 minutes">
									32
								</span>

                                <span class="s-text5">
								mins
							</span>
                            </div>

                            <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
								<span class="m-text10 p-b-1 seconds">
									05
								</span>

                                <span class="s-text5">
								secs
							</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Blog -->
<section class="blog bgwhite p-t-94 p-b-65">
    <div class="container">
        <div class="sec-title p-b-52">
            <h3 class="m-text5 t-center">
                Our Blog
            </h3>
        </div>

        <div class="row">
            <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                <!-- Block3 -->
                <div class="block3">
                    <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
                        <img src="{{ asset("public") }}/images/blog-01.jpg" alt="IMG-BLOG">
                    </a>

                    <div class="block3-txt p-t-14">
                        <h4 class="p-b-7">
                            <a href="blog-detail.html" class="m-text11">
                                Black Friday Guide: Best Sneaker Deals
                            </a>
                        </h4>

                        <span class="s-text6">By</span> <span class="s-text7">ShopSneakers Team</span>
                        <span class="s-text6">on</span> <span class="s-text7">Oct 20, 2025</span>

                        <p class="s-text8 p-t-16">
                            Discover the top deals, release dates, and discount codes for sneaker drops this season.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                <!-- Block3 -->
                <div class="block3">
                    <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
                        <img src="{{ asset("public") }}/images/blog-02.jpg" alt="IMG-BLOG">
                    </a>

                    <div class="block3-txt p-t-14">
                        <h4 class="p-b-7">
                            <a href="blog-detail.html" class="m-text11">
                                How to Style White Sneakers
                            </a>
                        </h4>

                        <span class="s-text6">By</span> <span class="s-text7">ShopSneakers Team</span>
                        <span class="s-text6">on</span> <span class="s-text7">Oct 10, 2025</span>

                        <p class="s-text8 p-t-16">
                            Tips and outfit ideas to make your white sneakers look fresh and versatile for any occasion.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                <!-- Block3 -->
                <div class="block3">
                    <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
                        <img src="{{ asset("public") }}/images/blog-03.jpg" alt="IMG-BLOG">
                    </a>

                    <div class="block3-txt p-t-14">
                        <h4 class="p-b-7">
                            <a href="blog-detail.html" class="m-text11">
                                Care Guide: Keep Your Sneakers Like New
                            </a>
                        </h4>

                        <span class="s-text6">By</span> <span class="s-text7">ShopSneakers Team</span>
                        <span class="s-text6">on</span> <span class="s-text7">Sept 30, 2025</span>

                        <p class="s-text8 p-t-16">
                            Simple cleaning and storage tips to extend the life of your favorite pairs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Instagram -->
<section class="instagram p-t-20">
    <div class="sec-title p-b-52 p-l-15 p-r-15">
        <h3 class="m-text5 t-center">
            @ follow us on Instagram
        </h3>
    </div>

    <div class="flex-w">
        <!-- Block4 -->
        <div class="block4 wrap-pic-w">
            <img src="{{ asset("public") }}/images/gallery-03.jpg" alt="IMG-INSTAGRAM">

            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                        Step up your game with the latest #ShopSneakers looks.
                    </p>

                    <span class="s-text9">
						Photo by @shopsneakers
					</span>
                </div>
            </a>
        </div>

        <!-- Block4 -->
        <div class="block4 wrap-pic-w">
            <img src="{{ asset("public") }}/images/gallery-07.jpg" alt="IMG-INSTAGRAM">

            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                        Fan shots and street looks from our community.
                    </p>

                    <span class="s-text9">
						Photo by @shopsneakers
					</span>
                </div>
            </a>
        </div>

        <!-- Block4 -->
        <div class="block4 wrap-pic-w">
            <img src="{{ asset("public") }}/images/gallery-09.jpg" alt="IMG-INSTAGRAM">

            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                        Sneaker close-ups and details.
                    </p>

                    <span class="s-text9">
						Photo by @shopsneakers
					</span>
                </div>
            </a>
        </div>

        <!-- Block4 -->
        <div class="block4 wrap-pic-w">
            <img src="{{ asset("public") }}/images/gallery-13.jpg" alt="IMG-INSTAGRAM">

            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                        Our latest drop showcased in real life.
                    </p>

                    <span class="s-text9">
						Photo by @shopsneakers
					</span>
                </div>
            </a>
        </div>

        <!-- Block4 -->
        <div class="block4 wrap-pic-w">
            <img src="{{ asset("public") }}/images/gallery-15.jpg" alt="IMG-INSTAGRAM">

            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                        Streetstyle and customer features.
                    </p>

                    <span class="s-text9">
						Photo by @shopsneakers
					</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Shipping -->
<section class="shipping bgwhite p-t-62 p-b-46">
    <div class="flex-w p-l-15 p-r-15">
        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="m-text12 t-center">
                Free Delivery Worldwide
            </h4>

            <a href="#" class="s-text11 t-center">
                Click here for more info
            </a>
        </div>

        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
            <h4 class="m-text12 t-center">
                30 Days Return
            </h4>

            <span class="s-text11 t-center">
					Simply return it within 30 days for an exchange.
				</span>
        </div>

        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="m-text12 t-center">
                Store Opening
            </h4>

            <span class="s-text11 t-center">
					Shop open from Monday to Sunday
				</span>
        </div>
    </div>
</section>



@endsection
