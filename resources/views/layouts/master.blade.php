<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Snapdeal Bangladesh</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico">
    @include('layouts.partials.styles')
</head>

<body>

<!--====================  Header area ====================-->
@include('layouts.partials.nav')
@yield('content')
@include('layouts.partials.footer')
<!-- scroll to top  -->
<a href="#" class="scroll-top"></a>
<!-- end of scroll to top -->


<!--=============================================
=            Quick view modal         =
=============================================-->

<div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-xl-12 col-lg-12">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6 mb-xxs-25 mb-xs-25 mb-sm-25">
                            <!--=======  big image slider  =======-->

                            <div class="big-image-slider-wrapper">
                                <div class="ht-slick-slider big-image-slider"
                                     data-slick-setting='{
                                        "slidesToShow": 1,
                                        "slidesToScroll": 1,
                                        "dots": false,
                                        "autoplay": false,
                                        "autoplaySpeed": 5000,
                                        "speed": 1000
                                    }'
                                     data-slick-responsive='[
                                        {"breakpoint":1501, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":1199, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":767, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":479, "settings": {"slidesToShow": 1} }
                                    ]'
                                >

                                    <!--=======  big image slider single item  =======-->

                                    <div class="big-image-slider-single-item">
                                        <img src="assets/img/products/big1-1.jpg" class="img-fluid" alt="">
                                    </div>

                                    <!--=======  End of big image slider single item  =======-->

                                    <!--=======  big image slider single item  =======-->

                                    <div class="big-image-slider-single-item">
                                        <img src="assets/img/products/big1-2.jpg" class="img-fluid" alt="">
                                    </div>

                                    <!--=======  End of big image slider single item  =======-->

                                    <!--=======  big image slider single item  =======-->

                                    <div class="big-image-slider-single-item">
                                        <img src="assets/img/products/big1-3.jpg" class="img-fluid" alt="">
                                    </div>

                                    <!--=======  End of big image slider single item  =======-->

                                    <!--=======  big image slider single item  =======-->

                                    <div class="big-image-slider-single-item">
                                        <img src="assets/img/products/big1-4.jpg" class="img-fluid" alt="">
                                    </div>

                                    <!--=======  End of big image slider single item  =======-->

                                    <!--=======  big image slider single item  =======-->

                                    <div class="big-image-slider-single-item">
                                        <img src="assets/img/products/big1-5.jpg" class="img-fluid" alt="">
                                    </div>

                                    <!--=======  End of big image slider single item  =======-->

                                    <!--=======  big image slider single item  =======-->

                                    <div class="big-image-slider-single-item">
                                        <img src="assets/img/products/big1-6.jpg" class="img-fluid" alt="">
                                    </div>

                                    <!--=======  End of big image slider single item  =======-->

                                </div>
                            </div>

                            <!--=======  End of big image slider  =======-->

                            <!--=======  small image slider  =======-->

                            <div class="small-image-slider-wrapper small-image-slider-wrapper--quickview">
                                <div class="ht-slick-slider small-image-slider"
                                     data-slick-setting='{
                                        "slidesToShow": 4,
                                        "slidesToScroll": 1,
                                        "dots": false,
                                        "autoplay": false,
                                        "autoplaySpeed": 5000,
                                        "speed": 1000,
                                        "asNavFor": ".big-image-slider",
                                        "focusOnSelect": true,
                                        "arrows": true,
                                        "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ion-ios-arrow-left" },
                                        "nextArrow": {"buttonClass": "slick-next", "iconClass": "ion-ios-arrow-right" }
                                    }'
                                     data-slick-responsive='[
                                        {"breakpoint":1501, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":1199, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":767, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":575, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":479, "settings": {"slidesToShow": 2} }
                                    ]'
                                >

                                    <!--=======  small image slider single item  =======-->

                                    <div class="small-image-slider-single-item">
                                        <img src="assets/img/products/small1-1.jpg" class="img-fluid" alt="">
                                    </div>

                                    <!--=======  End of small image slider single item  =======-->

                                    <!--=======  small image slider single item  =======-->

                                    <div class="small-image-slider-single-item">
                                        <img src="assets/img/products/small1-2.jpg" class="img-fluid" alt="">
                                    </div>

                                    <!--=======  End of small image slider single item  =======-->

                                    <!--=======  small image slider single item  =======-->

                                    <div class="small-image-slider-single-item">
                                        <img src="assets/img/products/small1-3.jpg" class="img-fluid" alt="">
                                    </div>

                                    <!--=======  End of small image slider single item  =======-->

                                    <!--=======  small image slider single item  =======-->

                                    <div class="small-image-slider-single-item">
                                        <img src="assets/img/products/small1-4.jpg" class="img-fluid" alt="">
                                    </div>

                                    <!--=======  End of small image slider single item  =======-->

                                    <!--=======  small image slider single item  =======-->

                                    <div class="small-image-slider-single-item">
                                        <img src="assets/img/products/small1-5.jpg" class="img-fluid" alt="">
                                    </div>

                                    <!--=======  End of small image slider single item  =======-->

                                    <!--=======  small image slider single item  =======-->

                                    <div class="small-image-slider-single-item">
                                        <img src="assets/img/products/small1-6.jpg" class="img-fluid" alt="">
                                    </div>

                                    <!--=======  End of small image slider single item  =======-->

                                </div>
                            </div>

                            <!--=======  End of small image slider  =======-->
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-6">
                            <!--=======  product detail content  =======-->

                            <div class="product-detail-content">
                                <div class="tags mb-5">
                                    <span class="tag-title">Tags:</span>
                                    <ul class="tag-list">
                                        <li><a href="#">Plant</a>,</li>
                                        <li><a href="#">Garden</a></li>
                                    </ul>
                                </div>

                                <h3 class="product-details-title mb-15">Lorem ipsum indoor plants</h3>
                                <div class="rating">
                                    <i class="ion-android-star active"></i>
                                    <i class="ion-android-star active"></i>
                                    <i class="ion-android-star active"></i>
                                    <i class="ion-android-star active"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <p class="product-price product-price--big mb-10"><span class="discounted-price">$100.00</span> <span class="main-price discounted">$120.00</span></p>

                                <div class="product-info-block mb-30">
                                    <div class="single-info">
                                        <span class="title">Ex Tax:</span>
                                        <span class="value">$95.00</span>
                                    </div>
                                    <div class="single-info">
                                        <span class="title">Brand:</span>
                                        <span class="value"><a href="#">Brac</a></span>
                                    </div>
                                    <div class="single-info">
                                        <span class="title">Product Code:</span>
                                        <span class="value">abcd1234</span>
                                    </div>
                                    <div class="single-info">
                                        <span class="title">Availability:</span>
                                        <span class="value stock-red">In stock</span>
                                    </div>
                                </div>

                                <div class="product-short-desc mb-25">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas consectetur inventore voluptatem dignissimos nemo repellendus est, harum maiores veritatis quidem.</p>
                                </div>

                                <div class="quantity mb-20">
                                    <span class="quantity-title mr-20">Qty</span>
                                    <div class="pro-qty mr-15 mb-lg-20 mb-md-20 mb-sm-20">
                                        <input type="text" value="1">
                                    </div>
                                    <button class="theme-button product-cart-button">+ Add to Cart</button>
                                </div>

                                <div class="compare-button mb-15">
                                    <a href="#"><i class="icon-sliders"></i> Compare This Product</a>
                                </div>

                                <div class="wishlist-button">
                                    <a href="#"><i class="icon-heart"></i> Add to Wishlist</a>
                                </div>
                            </div>

                            <!--=======  End of product detail content  =======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--=====  End of Quick view modal  ======-->
<!--====================  newsletter popup ====================-->

<div class="newsletter-popup-area" id="newsletter-popup-area">
    <div class="newsletter-popup-content-wrapper">
        <div class="newsletter-popup-content text-center">
            <a href="javascript:void(0)" class="close-newsletter-popup" id="close-newsletter-popup">Close</a>
            <h2>NEWSLETTER</h2>
            <p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p>
            <div class="subscription-form">
                <form  id="mc-form2" class="mc-form">
                    <input type="email" placeholder="Enter your email address here" >
                    <button class="theme-button" type="submit">Subscribe</button>
                </form>
                <!-- mailchimp-alerts Start -->

                <div class="mailchimp-alerts mt-5 mb-5">
                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                </div>

                <!-- mailchimp-alerts end -->
            </div>
            <div class="subscribe-bottom">
                <input type="checkbox" id="newsletter_popup_dont_show_again">
                <label for="newsletter_popup_dont_show_again">Don't show this popup again</label>
            </div>
        </div>
    </div>
</div>

<!--====================  End of newsletter popup  ====================-->
@include('layouts.partials.scripts')
</body>
</html>