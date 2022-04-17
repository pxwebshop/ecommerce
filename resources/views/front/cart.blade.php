@section('title','Cart')
@extends('front.layouts.template')

@section('content')
<main class="p-cart">
    <section class="p-cart__sc1">
        <div class="l-container">
            <div class="c-breadcrumb1">
                <div class="c-breadcrumb1__title">
                    <h2 class="c-breadcrumb1__txt">
                        Cart
                    </h2>
                </div>
                <div class="c-breadcrumb1__url">
                    <a href="/" class="c-breadcrumb1__link">Trang chủ</a>
                    <span class="c-breadcrumb1__current">/ Cart</a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-cart__sc2">
        <div class="l-container">
            <div class="c-block3">
                <div class="c-block3__left">
                    <form class="c-block3__form">
                        <div class="c-block3__list">
                            <div class="c-block3__head">
                                <ul class="c-block3__headList">
                                    <li class="c-block3__product">Product</li>
                                    <li class="c-block3__name">Name</li>
                                    <li class="c-block3__unitPrice">Unit Price</li>
                                    <li class="c-block3__quantity">Quantity</li>
                                    <li class="c-block3__total">Total</li>
                                </ul>
                            </div>
                            <div class="c-block3__content">
                                <ul class="c-block3__contentList">
                                    <li class="c-block3__product">
                                        <a href="#" class="c-remove"><i class="fa-solid fa-circle-xmark"></i></i></i></i></a>
                                        <a href="/product/detail">
                                            <figure class="c-block3__img"><img src="https://templates.envytheme.com/ejon/default/assets/img/cart/cart-1.png" alt=""></figure>
                                        </a>
                                    </li>
                                    <li class="c-block3__name">
                                        <a href="/product/detail">Bluetooth Headphone</a>
                                    </li>
                                    <li class="c-block3__unitPrice">
                                        <span class="c-block3__productPrice">1.990.000 <sup>đ</sup></span>
                                    </li>
                                    <li class="c-block3__quantity">
                                        <div class="c-plusMinus">
                                            <div class="c-plusMinus__counter">
                                                <div class="c-plusMinus__minus">
                                                    <i class="fa-solid fa-circle-minus"></i>
                                                </div>
                                                <input type="text" value="1">
                                                <div class="c-plusMinus__plus">
                                                    <i class="fa-solid fa-circle-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="c-block3__total">
                                        <span class="c-block3__productPriceTotal">1.990.000 <sup>đ</sup></span>
                                    </li>
                                </ul>
                                <ul class="c-block3__contentList">
                                    <li class="c-block3__product">
                                        <a href="#" class="c-remove"><i class="fa-solid fa-circle-xmark"></i></i></i></a>
                                        <a href="/product/detail">
                                            <figure class="c-block3__img"><img src="https://templates.envytheme.com/ejon/default/assets/img/cart/cart-1.png" alt=""></figure>
                                        </a>
                                    </li>
                                    <li class="c-block3__name">
                                        <a href="/product/detail">Bluetooth Headphone</a>
                                    </li>
                                    <li class="c-block3__unitPrice">
                                        <span class="c-block3__productPrice">1.990.000 <sup>đ</sup></span>
                                    </li>
                                    <li class="c-block3__quantity">
                                        <div class="c-plusMinus">
                                            <div class="c-plusMinus__counter">
                                                <div class="c-plusMinus__minus">
                                                    <i class="fa-solid fa-circle-minus"></i>
                                                </div>
                                                <input type="text" value="1">
                                                <div class="c-plusMinus__plus">
                                                    <i class="fa-solid fa-circle-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="c-block3__total">
                                        <span class="c-block3__productPriceTotal">1.990.000 <sup>đ</sup></span>
                                    </li>
                                </ul>
                                <ul class="c-block3__contentList">
                                    <li class="c-block3__product">
                                        <a href="#" class="c-remove"><i class="fa-solid fa-circle-xmark"></i></i></i></a>
                                        <a href="/product/detail">
                                            <figure class="c-block3__img"><img src="https://templates.envytheme.com/ejon/default/assets/img/cart/cart-1.png" alt=""></figure>
                                        </a>
                                    </li>
                                    <li class="c-block3__name">
                                        <a href="/product/detail">Bluetooth Headphone</a>
                                    </li>
                                    <li class="c-block3__unitPrice">
                                        <span class="c-block3__productPrice">1.990.000 <sup>đ</sup></span>
                                    </li>
                                    <li class="c-block3__quantity">
                                        <div class="c-plusMinus">
                                            <div class="c-plusMinus__counter">
                                                <div class="c-plusMinus__minus">
                                                    <i class="fa-solid fa-circle-minus"></i>
                                                </div>
                                                <input type="text" value="1">
                                                <div class="c-plusMinus__plus">
                                                    <i class="fa-solid fa-circle-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="c-block3__total">
                                        <span class="c-block3__productPriceTotal">1.990.000 <sup>đ</sup></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="c-block3__btn">
                            <div class="c-block3__coupon">
                                <input type="text" class="c-input c-block3__input" placeholder="Coupon Code">
                                <button href="#" class="c-btn1 c-btn1--colorBlack c-btn1--noneBorderRadius c-block3__apply">
                                    Apply
                                </button>
                            </div>
                            <div class="c-block3__update">
                                <button href="#" class="c-btn1 c-btn1--colorBlack c-btn1--noneBorderRadius">
                                    Update Cart
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="c-block3__right">
                    <div class="c-cartTotal">
                        <h3 class="c-title4 c-cartTotal__title">Cart Totals</h3>
                        <ul class="c-cartTotal__list">
                            <li class="c-cartTotal__item">Subtotal
                                <span>9.990.000 <sup>đ</sup></span>
                            </li>
                            <li class="c-cartTotal__item">Shipping
                                <span>0 <sup>đ</sup></span>
                            </li>
                            <li class="c-cartTotal__item">Total
                                <span>9.990.000 <sup>đ</sup></span>
                            </li>
                            <li class="c-cartTotal__item c-cartTotal__item--size">Payable Total
                                <span>9.990.000 <sup>đ</sup></span>
                            </li>
                        </ul>
                        <a href="/checkout" class="c-btn1 c-btn1--noneBorderRadius c-cartTotal__btnCheckout">
                            Process to Checkout
                        </a>
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

    <script src="{{ asset('js/front/slick.min.js')}} "></script>

    <script type="text/javascript" src="{{ asset('js/front/main.js') }}"></script>
    @endpush
</main>
@endsection