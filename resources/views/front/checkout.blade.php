@section('title','Checkout')
@extends('front.layouts.template')

@section('content')
<main class="p-checkout">
    <section class="p-checkout__sc1">
        <div class="l-container">
            <div class="c-breadcrumb1">
                <div class="c-breadcrumb1__title">
                    <h2 class="c-breadcrumb1__txt">
                        Checkout
                    </h2>
                </div>
                <div class="c-breadcrumb1__url">
                    <a href="/" class="c-breadcrumb1__link">Trang chủ</a>
                    <span class="c-breadcrumb1__current">/ Checkout</a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-checkout__sc2">
        <div class="l-container">
            <div class="c-block5">
                <form action="" class="c-block5__form">
                    <div class="c-block5__area">
                        <div class="c-block5__left">
                            <div class="c-block5__actionLogin">

                            </div>
                            <div class="c-block5__actionCoupon">

                            </div>
                            <div class="c-block5__content">
                                <h3 class="c-title4 c-block5__title">Chi Tiết Thanh Toán</h3>
                                <div class="c-block5__name">
                                    <div class="c-group">
                                        <label for="" class="c-text1">Tên*</label><br>
                                        <input type="text" class="c-input">
                                    </div>
                                    <div class="c-group">
                                        <label for="" class="c-text1">Họ*</label><br>
                                        <input type="text" class="c-input">
                                    </div>
                                </div>
                                <div class="c-group">
                                    <label for="" class="c-text1">Đơn Vị</label><br>
                                    <input type="text" class="c-input">
                                </div>
                                <div class="c-group">
                                    <label for="" class="c-text1">Email*</label><br>
                                    <input type="text" class="c-input">
                                </div>
                                <div class="c-group">
                                    <label for="" class="c-text1">Số điện thoại*</label><br>
                                    <input type="number" class="c-input"></input>
                                </div>
                                <div class="c-group">
                                    <label for="" class="c-text1">Quốc gia*</label><br>
                                    <input type="text" class="c-input">
                                </div>
                                <div class="c-group">
                                    <label for="" class="c-text1">Địa chỉ*</label><br>
                                    <input type="text" class="c-input">
                                </div>
                                <div class="c-group">
                                    <label for="" class="c-text1">Tỉnh / Thành Phố*</label><br>
                                    <input type="text" class="c-input">
                                </div>
                                <div class="c-group">
                                    <label for="" class="c-text1">Quận / Huyện*</label><br>
                                    <input type="text" class="c-input">
                                </div>
                                <div class="c-group">
                                    <label for="" class="c-text1">Postcode / Zip*</label><br>
                                    <input type="text" class="c-input">
                                </div>
                                <div class="c-group">
                                    <label for="" class="c-text1">Ghi chú*</label><br>
                                    <textarea type="text" class="c-input" placeholder="Ghi chú đơn hàng"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="c-block5__right">
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
                                <a href="/cart" class="c-btn1 c-btn1--noneBorderRadius c-cartTotal__btnCheckout">
                                    Process to Cart
                                </a>
                            </div>
                            <div class="c-block5__payment">
                                <h3 class="c-title4 c-cartTotal__title">Phương thức thanh toán</h3>
                                <button type="submit" class="c-btn1">
                                    Đặt hàng
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
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