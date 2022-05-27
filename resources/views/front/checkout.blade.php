@section('title','Checkout')
@extends('front.layouts.template')

@section('content')
<main class="p-checkout">
    <section class="p-checkout__sc1">
        <div class="l-container">
            <div class="c-breadcrumb1">
                <div class="c-breadcrumb1__title">
                    <h2 class="c-breadcrumb1__txt">
                        {{ trans('breadcrumbs.checkout') }}
                    </h2>
                </div>
                <div class="c-breadcrumb1__url">
                    <a href="/" class="c-breadcrumb1__link"> {{ trans('breadcrumbs.home') }}</a>
                    <span class="c-breadcrumb1__current">/  {{ trans('breadcrumbs.checkout') }}</a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-checkout__sc2">
        <div class="l-container">
            <div class="c-block5">
                <form action="/checkout" method="POST" class="c-block5__form">
                    @csrf
                    <div class="c-block5__area">
                        <div class="c-block5__left">
                            <div class="c-block5__actionLogin">

                            </div>
                            <div class="c-block5__actionCoupon">

                            </div>
                            <div class="c-block5__content">
                                <h3 class="c-title4 c-block5__title">{{ trans('order.payment_method') }}</h3>
                                <div class="c-block5__name">
                                    <div class="c-group">
                                        <label for="" class="c-text1">{{ trans('order.checkout.firstname') }}</label><br>
                                        <input type="text" name="firstName" value="{{ @Auth::user()->name }}" class="c-input" required>
                                    </div>
                                    <div class="c-group">
                                        <label for="" class="c-text1">{{ trans('order.checkout.lastname') }}</label><br>
                                        <input type="text" name="lastName" class="c-input">
                                    </div>
                                </div>
                                {{-- <div class="c-group">
                                    <label for="" class="c-text1">Đơn Vị</label><br>
                                    <input type="text" class="c-input">
                                </div> --}}
                                <div class="c-group">
                                    <label for="" class="c-text1">Email*</label><br>
                                    <input type="text" name="email" value="{{ @Auth::user()->email }}" class="c-input" required>
                                </div>
                                <div class="c-group">
                                    <label for="" class="c-text1">{{ trans('order.checkout.phone') }}</label><br>
                                    <input type="number" name="phone" value="{{ @Auth::user()->phone }}" class="c-input" required>
                                </div>
                                {{-- <div class="c-group">
                                    <label for="" class="c-text1">Quốc gia*</label><br>
                                    <input type="text" class="c-input">
                                </div> --}}
                                <div class="c-group">
                                    <label for="" class="c-text1">{{ trans('order.checkout.address') }}</label><br>
                                    <input type="text" name="address" class="c-input" required>
                                </div>
                                {{-- <div class="c-group">
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
                                </div> --}}
                                <div class="c-group">
                                    <label for="" class="c-text1">{{ trans('order.checkout.note') }}</label><br>
                                    <textarea type="text" rows="4" name="note" class="c-input" placeholder="{{ trans('order.checkout.noteorder') }}"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="c-block5__right">
                            <div class="c-cartTotal">
                                <h3 class="c-title4 c-cartTotal__title">{{ trans('order.cart_total') }}</h3>
                                <ul class="c-cartTotal__list">
                                    <li class="c-cartTotal__item">{{ trans('order.checkout.subtotal') }}
                                        {{-- <span>9.990.000 <sup>đ</sup></span> --}}
                                        @php $total = 0 @endphp
                                        @if(session('cart'))
                                            {{-- @dd(session('cart')); --}}
                                            @foreach(session('cart') as $id => $details)
                                                @php $total += $details['price'] * $details['quantity'] @endphp
                                                
                                            @endforeach
                                        @endif
                                        <span>{{ number_format($total) }} <sup>đ</sup></span>
                                    </li>
                                    <li class="c-cartTotal__item">{{ trans('order.ship') }}
                                        <span>0 <sup>đ</sup></span>
                                    </li>
                                    <li class="c-cartTotal__item">{{ trans('order.cart.total') }}
                                        @php $total = 0 @endphp
                                        @if(session('cart'))
                                            {{-- @dd(session('cart')); --}}
                                            @foreach(session('cart') as $id => $details)
                                                @php $total += $details['price'] * $details['quantity'] @endphp
                                                
                                            @endforeach
                                        @endif
                                        <span>{{ number_format($total) }} <sup>đ</sup></span>
                                    </li>
                                    <li class="c-cartTotal__item c-cartTotal__item--size">{{ trans('order.payable') }}
                                        @php $total = 0 @endphp
                                        @if(session('cart'))
                                            {{-- @dd(session('cart')); --}}
                                            @foreach(session('cart') as $id => $details)
                                                @php $total += $details['price'] * $details['quantity'] @endphp
                                                
                                            @endforeach
                                        @endif
                                        <span>{{ number_format($total) }} <sup>đ</sup></span>
                                    </li>
                                </ul>
                                <a href="/cart" class="c-btn1 c-btn1--noneBorderRadius c-cartTotal__btnCheckout">
                                    {{ trans('order.to_cart') }}
                                </a>
                            </div>
                            <div class="c-block5__payment">
                                <h3 class="c-title4 c-cartTotal__title">{{ trans('order.payment_method') }}</h3>
                                <button type="submit" class="c-btn1">
                                    {{ trans('order.checkout.order') }}
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