@section('title','Cart')
@extends('front.layouts.template')

@section('content')
<main class="p-cart">
    <section class="p-cart__sc1">
        <div class="l-container">
            <div class="c-breadcrumb1">
                <div class="c-breadcrumb1__title">
                    <h2 class="c-breadcrumb1__txt">
                        {{ trans('breadcrumbs.cart') }}
                    </h2>
                </div>
                <div class="c-breadcrumb1__url">
                    <a href="/" class="c-breadcrumb1__link">{{ trans('breadcrumbs.home') }}</a>
                    <span class="c-breadcrumb1__current">/ {{ trans('breadcrumbs.cart') }}</a>
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
                                    <li class="c-block3__product">{{ trans('breadcrumbs.product') }}</li>
                                    <li class="c-block3__name">{{ trans('order.cart.name') }}</li>
                                    <li class="c-block3__unitPrice">{{ trans('order.cart.price') }}</li>
                                    <li class="c-block3__quantity">{{ trans('order.cart.quantity') }}</li>
                                    <li class="c-block3__total">{{ trans('order.cart.total') }}</li>
                                </ul>
                            </div>
                            <div class="c-block3__content">
                                @php $total = 0 @endphp
                                @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                        <ul class="c-block3__contentList" data-id="{{ $id }}">
                                            <li class="c-block3__product">
                                                <a href="" class="c-remove remove-from-cart"><i class="fa-solid fa-circle-xmark"></i></a>
                                                <a href="/product/detail/{{$details['product_id']}}">
                                                    <figure class="c-block3__img">
                                                        @if (Storage::exists($details['thumb']))
                                                            <img src="{{ asset(Storage::url($details['thumb'])) }}" >
                                                        @endif
                                                        <img  src="{{ $details['thumb'] }}" alt="">
                                                    </figure>
                                                </a>
                                            </li>
                                            <li class="c-block3__name">
                                                <a href="/product/detail/{{$details['product_id']}}">{{ $details['name'] }}</a>
                                            </li>
                                            <li class="c-block3__unitPrice">
                                                <span class="c-block3__productPrice">{{ number_format($details['price']) }} <sup>đ</sup></span>
                                            </li>
                                            <li class="c-block3__quantity">
                                                <div class="c-plusMinus">
                                                    <div class="c-plusMinus__counter">
                                                        <input type="number" value="{{ $details['quantity'] }}" class="update-cart quantity" >
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="c-block3__total">
                                                <span class="c-block3__productPriceTotal"> {{ number_format($details['price'] * $details['quantity']) }} <sup>đ</sup></span>
                                            </li>
                                        </ul>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="c-block3__btn">
                            <div class="c-block3__coupon">
                                <input type="text" class="c-input c-block3__input" placeholder="Coupon Code">
                                <button href="#" class="c-btn1 c-btn1--colorBlack c-btn1--noneBorderRadius c-block3__apply">
                                    {{ trans('order.cart.apply') }}
                                </button>
                            </div>
                            {{-- <div class="c-block3__update">
                                <button href="#" class="c-btn1 c-btn1--colorBlack c-btn1--noneBorderRadius">
                                    Update Cart
                                </button>
                            </div> --}}
                        </div>
                    </form>
                </div>
                <div class="c-block3__right">
                    <div class="c-cartTotal">
                        <h3 class="c-title4 c-cartTotal__title">{{ trans('order.cart_total') }}</h3>
                        <ul class="c-cartTotal__list">
                            <li class="c-cartTotal__item">{{ trans('order.cart.total') }}
                                <span>{{ number_format($total) }} <sup>đ</sup></span>
                            </li>
                            <li class="c-cartTotal__item">{{ trans('order.ship') }}
                                <span>+ 0 <sup>đ</sup></span>
                            </li>
                            <li class="c-cartTotal__item">{{ trans('order.discount') }}
                                <span>- 0 <sup>đ</sup></span>
                            </li>
                            <li class="c-cartTotal__item c-cartTotal__item--size">{{ trans('order.payable') }}
                                <span> {{ number_format($total) }} <sup>đ</sup></span>
                            </li>
                        </ul>
                        <a href="/checkout" class="c-btn1 c-btn1--noneBorderRadius c-cartTotal__btnCheckout">
                            {{ trans('order.to_checkout') }}
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

    <script>
        $(".update-cart").change(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("ul").attr("data-id"), 
                    quantity: ele.parents("ul").find(".quantity").val()
                },
                success: function (response) {
                window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}', 
                        id: ele.parents("ul").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
    @endpush
</main>
@endsection