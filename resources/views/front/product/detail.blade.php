@section('title','Product Detail')
@extends('front.layouts.template')

@section('content')
<main class="p-productDetail">
    <section class="p-productDetail__sc1">
        <div class="l-container">
            <div class="c-breadcrumb1">
                <div class="c-breadcrumb1__title">
                    <h2 class="c-breadcrumb1__txt">
                        Products Details
                    </h2>
                </div>
                <div class="c-breadcrumb1__url">
                    <a href="/" class="c-breadcrumb1__link">Trang chủ</a>
                    <a href="/" class="c-breadcrumb1__link">/ Product</a>
                    <span class="c-breadcrumb1__current">/ Detail</a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-productDetail__sc2">
        <div class="l-container">
            <div class="c-block1">
                <div class="c-block1__left">
                    <div class="c-block1__imgList">
                        <figure class="c-block1__imgItem">
                            <img src="https://templates.envytheme.com/ejon/default/assets/img/quick-view/quick-view-1.jpg" alt="">
                        </figure>
                        <figure class="c-block1__imgItem">
                            <img src="https://templates.envytheme.com/ejon/default/assets/img/quick-view/quick-view-2.jpg" alt="">
                        </figure>
                    </div>
                    <div class="c-block1__slider">
                        <figure class="c-block1__img">
                            <img src="https://templates.envytheme.com/ejon/default/assets/img/quick-view/quick-view-1.jpg" alt="">
                        </figure>
                        <figure class="c-block1__img">
                            <img src="https://templates.envytheme.com/ejon/default/assets/img/quick-view/quick-view-2.jpg" alt="">
                        </figure>
                    </div>
                </div>
                <div class="c-block1__right">
                    <h3 class="c-title6 c-block1__title">Bluetooth Headphones</h3>
                    <ul class="c-rate1">
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <div class="c-price1 c-block1__price">
                        <span class="c-price1--lineThrough c-block1__price1">19.990.000<sup>đ</sup></span>
                        <span class="c-price1 c-block1__price2">9.990.000<sup>đ</sup></span>
                    </div>
                    <p class="c-text1 c-block1__txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat.</p>
                    <ul class="c-block1__info">
                        <li class="c-block1__stock">
                            <p class="c-text1 c-block1__txt"><span class="c-text1--bold">Availability: </span> In stock</p>
                        </li>
                        <li class="c-block1__stock">
                            <p class="c-text1 c-block1__txt"><span class="c-text1--bold">SKU: </span> L458-25</p>
                        </li>
                    </ul>
                    <div class="c-block1__color">
                        <span class="c-text1 c-text1--bold">Color: </span>
                        <a href="#" class="c-block1__color1"></a>
                        <a href="#" class="c-block1__color2"></a>
                        <a href="#" class="c-block1__color3"></a>
                        <a href="#" class="c-block1__color4"></a>
                        <a href="#" class="c-block1__color5"></a>
                    </div>
                    <div class="c-block1__quantity">
                        <span class="c-text1 c-text1--bold">Quantities</span>
                        <div class="c-block1__counter">
                            <div class="c-block1__minus">
                                <i class="fa-solid fa-circle-minus"></i>
                            </div>
                            <input type="text" value="1">
                            <div class="c-block1__plus">
                                <i class="fa-solid fa-circle-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="c-block1__addCart">
                        <a href="#" class="c-btn1 c-btn1--border">
                            <i class="fa-solid fa-cart-shopping"></i>
                            Add to cart
                        </a>
                    </div>
                    <div class="c-block1__share">
                        <ul class="c-block1__social">
                            <li class="c-text1 c-text1--bold">Share:</li>
                            <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-productDetail__sc3">
        <div class="l-container">
            <div class="c-block2">
                <ul class="c-block2__tabList">
                    <li class="c-block2__tabItem">
                        <span href="#" class="c-block2__link c-block2__active">Mô tả</span>
                    </li>
                    <li class="c-block2__tabItem">
                        <span href="#" class="c-block2__link">Đánh giá</span>
                    </li>
                    <li class="c-block2__tabItem">
                        <span href="#" class="c-block2__link">Thông tin vận chuyển</span>
                    </li>
                </ul>
                <div class="c-block2__content">
                    <div class="c-block2__description">
                        <h3 class="c-title6 c-block2__title">Mô tả</h2>
                            <p class="c-text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                            <p class="c-text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur.</p>
                            <ul class="c-text1">
                                <li>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</li>
                                <li>Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
                                <li>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</li>
                                <li>Various versions have evolved over the years, sometimes by accident sometimes on purpose.</li>
                                <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur.</li>
                            </ul>
                    </div>
                    <div class="c-block2__review">
                        <h3 class="c-title6 c-block2__title">Đánh giá</h3>
                        <div class="c-block2__rate">
                            <div class="c-block2__rateLeft">
                                <div class="c-block2__rateTxt">
                                    5 star
                                </div>
                            </div>
                            <div class="c-block2__rateMiddle">
                                <div class="c-block2__rateContainer">
                                    <div class="c-block2__rateBar c-block2__rateBar--5star"></div>
                                </div>
                            </div>
                            <div class="c-block2__rateRight">
                                <div class="c-block2__rateTxt">80%</div>
                            </div>
                        </div>
                        <div class="c-block2__rate">
                            <div class="c-block2__rateLeft">
                                <div class="c-block2__rateTxt">
                                    4 star
                                </div>
                            </div>
                            <div class="c-block2__rateMiddle">
                                <div class="c-block2__rateContainer">
                                    <div class="c-block2__rateBar c-block2__rateBar--4star"></div>
                                </div>
                            </div>
                            <div class="c-block2__rateRight">
                                <div class="c-block2__rateTxt">12%</div>
                            </div>
                        </div>
                        <div class="c-block2__rate">
                            <div class="c-block2__rateLeft">
                                <div class="c-block2__rateTxt">
                                    3 star
                                </div>
                            </div>
                            <div class="c-block2__rateMiddle">
                                <div class="c-block2__rateContainer">
                                    <div class="c-block2__rateBar c-block2__rateBar--3star"></div>
                                </div>
                            </div>
                            <div class="c-block2__rateRight">
                                <div class="c-block2__rateTxt">5%</div>
                            </div>
                        </div>
                        <div class="c-block2__rate">
                            <div class="c-block2__rateLeft">
                                <div class="c-block2__rateTxt">
                                    2 star
                                </div>
                            </div>
                            <div class="c-block2__rateMiddle">
                                <div class="c-block2__rateContainer">
                                    <div class="c-block2__rateBar c-block2__rateBar--2star"></div>
                                </div>
                            </div>
                            <div class="c-block2__rateRight">
                                <div class="c-block2__rateTxt">2%</div>
                            </div>
                        </div>
                        <div class="c-block2__rate">
                            <div class="c-block2__rateLeft">
                                <div class="c-block2__rateTxt">
                                    1 star
                                </div>
                            </div>
                            <div class="c-block2__rateMiddle">
                                <div class="c-block2__rateContainer">
                                    <div class="c-block2__rateBar c-block2__rateBar--1star"></div>
                                </div>
                            </div>
                            <div class="c-block2__rateRight">
                                <div class="c-block2__rateTxt">1%</div>
                            </div>
                        </div>
                        <div class="c-block2__customer">
                            <h3 class="c-title6">Khách hàng đánh giá</h3>
                            <div class="c-block2__cusTitle">
                                <ul class="c-rate1">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <a href="#" class="c-btn1 c-btn1--hoverBlack">
                                    Viết đánh giá
                                </a>
                            </div>
                            <div class="c-block2__cusComment">
                                <div class="c-block2__cusReview">
                                    <ul class="c-rate1">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <h4 class="c-title2 c-block2__title2">Good</h4>
                                    <p class="c-title3 c-title3--colorGrey">
                                        Admin on Sep 21, 2019
                                    </p>
                                    <p class="c-text1">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                    </p>
                                </div>
                                <div class="c-block2__cusReview">
                                    <ul class="c-rate1">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <h4 class="c-title2 c-block2__title2">Good</h4>
                                    <p class="c-title3 c-title3--colorGrey">
                                        Admin on Sep 21, 2019
                                    </p>
                                    <p class="c-text1">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                    </p>
                                </div>
                                <div class="c-block2__cusReview">
                                    <ul class="c-rate1">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <h4 class="c-title2 c-block2__title2">Good</h4>
                                    <p class="c-title3 c-title3--colorGrey">
                                        Admin on Sep 21, 2019
                                    </p>
                                    <p class="c-text1">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                    </p>
                                </div>
                            </div>
                            <div class="c-block2__form">
                                <h3 class="c-title6 c-block2__title">Viết đánh giá</h3>
                                <form action="">
                                    <div class="c-block2__formName">
                                        <div class="c-group">
                                            <input type="text" class="c-input" placeholder="Nhập tên của bạn">
                                        </div>
                                        <div class="c-group">
                                            <input type="text" class="c-input" placeholder="Nhập email của bạn">
                                        </div>
                                    </div>
                                    <div class="c-group">
                                        <input type="text" class="c-input" placeholder="Nhập tiêu đề đánh giá">
                                    </div>
                                    <div class="c-group">
                                        <textarea type="text" class="c-input" placeholder="Viết đánh giá"></textarea>
                                    </div>
                                    <button type="submit" href="#" class="c-btn1 c-btn1--hoverBlack">
                                        Gửi đánh giá
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="c-block2__infoShip">
                        <ul class="c-text1">
                            <li><span> Address: </span>4848 Hershell Hollow Road, Bothell, WA 89076</li>
                            <li><span> Phone: </span>+1 (514) 321-4567</li>
                            <li><span> Email: </span>hello@ejon.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-productDetail__sc4">
        <div class="l-container">
            <div class="c-title1">
                <h2 class="c-title1__txt">
                    Related Product
                </h2>
            </div>
            <div class="c-list1">
                <div class="c-list1__list">
                    <div class="c-list1__item">
                        <div class="c-list1__wrap">
                            <div class="c-list1__img">
                                <a href="/product-detail">
                                    <figure class="c-list1__image">
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-1.jpg" alt="">
                                    </figure>
                                </a>
                                <div class="c-tag1">New</div>
                                <ul class="c-list1__actionList">
                                    <li class="c-list1__actionItem">
                                        <a href="#">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </li>
                                    <li class="c-list1__actionItem">
                                        <a href="#">
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                    </li>
                                    <li class="c-list1__actionItem">
                                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-list1__content">
                                <h3 class="c-title2">Smart Watch</h3>
                                <ul class="c-rate1">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p class="c-price1">3.636.363 <sup>đ</sup> </p>
                            </div>
                        </div>
                    </div>
                    <div class="c-list1__item">
                        <div class="c-list1__wrap">
                            <div class="c-list1__img">
                                <a href="#">
                                    <figure class="c-list1__image">
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-1.jpg" alt="">
                                    </figure>
                                </a>
                                <div class="c-tag1">New</div>
                                <ul class="c-list1__actionList">
                                    <li class="c-list1__actionItem">
                                        <a href="#">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </li>
                                    <li class="c-list1__actionItem">
                                        <a href="#">
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                    </li>
                                    <li class="c-list1__actionItem">
                                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-list1__content">
                                <h3 class="c-title2">Smart Watch</h3>
                                <ul class="c-rate1">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p class="c-price1">3.636.363 <sup>đ</sup> </p>
                            </div>
                        </div>
                    </div>
                    <div class="c-list1__item">
                        <div class="c-list1__wrap">
                            <div class="c-list1__img">
                                <a href="#">
                                    <figure class="c-list1__image">
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-1.jpg" alt="">
                                    </figure>
                                </a>
                                <div class="c-tag1">New</div>
                                <ul class="c-list1__actionList">
                                    <li class="c-list1__actionItem">
                                        <a href="#">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </li>
                                    <li class="c-list1__actionItem">
                                        <a href="#">
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                    </li>
                                    <li class="c-list1__actionItem">
                                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-list1__content">
                                <h3 class="c-title2">Smart Watch</h3>
                                <ul class="c-rate1">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p class="c-price1">3.636.363 <sup>đ</sup> </p>
                            </div>
                        </div>
                    </div>
                    <div class="c-list1__item">
                        <div class="c-list1__wrap">
                            <div class="c-list1__img">
                                <a href="#">
                                    <figure class="c-list1__image">
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-1.jpg" alt="">
                                    </figure>
                                </a>
                                <div class="c-tag1">New</div>
                                <ul class="c-list1__actionList">
                                    <li class="c-list1__actionItem">
                                        <a href="#">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </li>
                                    <li class="c-list1__actionItem">
                                        <a href="#">
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                    </li>
                                    <li class="c-list1__actionItem">
                                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-list1__content">
                                <h3 class="c-title2">Smart Watch</h3>
                                <ul class="c-rate1">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <p class="c-price1">3.636.363 <sup>đ</sup> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-productDetail__sc5">
        <div class="l-container">
            <div class="c-list4">
                <div class="c-list4__list">
                    <div class="c-list4__wrap">
                        <div class="c-list4__item">
                            <i class="fa-solid fa-truck"></i>
                            <p class="c-list4__txt">Free Shipping Worldwide</p>
                        </div>
                    </div>
                    <div class="c-list4__wrap">
                        <div class="c-list4__item">
                            <i class="fa-solid fa-rotate-left"></i>
                            <p class="c-list4__txt">30 Days Money Returns</p>
                        </div>
                    </div>
                    <div class="c-list4__wrap">
                        <div class="c-list4__item">
                            <i class="fa-solid fa-wallet"></i>
                            <p class="c-list4__txt">100% Secure Payment</p>
                        </div>
                    </div>
                    <div class="c-list4__wrap">
                        <div class="c-list4__item">
                            <i class="fa-solid fa-headset"></i>
                            <p class="c-list4__txt">24/7 Customer Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
    <!-- Owl Carousel JS -->
    <script src="{{ asset('js/front/owl.carousel.min.js')}} "></script>
    <!-- Wow JS -->
    <script src="{{ asset('js/front/wow.min.js')}} "></script>

    <script type="text/javascript" src="{{ asset('js/front/main.js') }}"></script>

    @endpush
</main>
@endsection