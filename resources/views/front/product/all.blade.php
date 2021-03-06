@section('title', 'Product List')
@extends('front.layouts.template')

@section('content')
    <main class="p-productList">
        <section class="p-productList__breadcrumb">
            <div class="l-container">
                <div class="c-breadcrumb1">
                    <div class="c-breadcrumb1__title">
                        <h2 class="c-breadcrumb1__txt">
                            {{ trans('breadcrumbs.product') }}
                        </h2>
                    </div>
                    <div class="c-breadcrumb1__url">
                        <a href="/" class="c-breadcrumb1__link">{{ trans('breadcrumbs.home') }}</a>
                        <span class="c-breadcrumb1__current">/ {{ trans('breadcrumbs.product') }}</span>
                        <span class="c-breadcrumb1__current">/ All</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-productList__list">
            <div class="l-container">
                <div class="c-list1">
                    <div class="c-list1__list">
                        @foreach ($products as $product)
                            <div class="c-list1__item">
                                <div class="c-list1__wrap">
                                    <div class="c-list1__img">
                                        <a href="/product/detail/{{ $product->id }}">
                                            <figure class="c-list1__image">
                                                @if (Storage::exists($product->thumb))
                                                    <img src="{{ asset(Storage::url($product->thumb)) }}">
                                                @endif
                                                <img src="{{ $product->thumb }}" alt="">
                                            </figure>
                                        </a>
                                        <div class="c-tag1">New</div>
                                        <ul class="c-list1__actionList">
                                            <li class="c-list1__actionItem">
                                                <a href="{{ route('add.to.cart', $product->id) }}">
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </li>
                                            <li class="c-list1__actionItem">
                                                <form action="{{ route('wishlist.add') }}" method="post">
                                                    @csrf
                                                    <input name="product_id" type="hidden" value="{{ $product->id }}" />
                                                    <a onclick="$(this).closest('form').submit();">
                                                        <i class="fa-solid fa-heart"></i>
                                                    </a>
                                                </form>
                                            </li>
                                            <li class="c-list1__actionItem">
                                                <a href="/product/detail/{{ $product->id }}"><i
                                                        class="fa-solid fa-eye"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="c-list1__content">
                                        <h3 class="c-title2">{{ $product->name }}</h3>
                                        <ul class="c-rate1">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <p class="c-price1">{{ number_format($product->sale_price) }} <sup>??</sup>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="c-paginate">
                    {{ $products->links() }}
                </div>
            </div>
            </div>
        </section>
        <section class="p-home__slideBot">
            <div class="c-slide2">
                <div class="l-container">
                    <div class="c-slide2__list owl-carousel">
                        <div class="c-slide2__item">
                            <a href="#" class="c-slide2__link">
                                <figure class="c-slide2__img">
                                    <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png"
                                        alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="c-slide2__item">
                            <a href="#" class="c-slide2__link">
                                <figure class="c-slide2__img">
                                    <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png"
                                        alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="c-slide2__item">
                            <a href="#" class="c-slide2__link">
                                <figure class="c-slide2__img">
                                    <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png"
                                        alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="c-slide2__item">
                            <a href="#" class="c-slide2__link">
                                <figure class="c-slide2__img">
                                    <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png"
                                        alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="c-slide2__item">
                            <a href="#" class="c-slide2__link">
                                <figure class="c-slide2__img">
                                    <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png"
                                        alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="c-slide2__item">
                            <a href="#" class="c-slide2__link">
                                <figure class="c-slide2__img">
                                    <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png"
                                        alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="c-slide2__item">
                            <a href="#" class="c-slide2__link">
                                <figure class="c-slide2__img">
                                    <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png"
                                        alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="c-slide2__item">
                            <a href="#" class="c-slide2__link">
                                <figure class="c-slide2__img">
                                    <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png"
                                        alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="c-slide2__item">
                            <a href="#" class="c-slide2__link">
                                <figure class="c-slide2__img">
                                    <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png"
                                        alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="c-slide2__item">
                            <a href="#" class="c-slide2__link">
                                <figure class="c-slide2__img">
                                    <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png"
                                        alt="">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @push('scripts')
            <!-- Owl Carousel JS -->
            <script src="{{ asset('js/front/owl.carousel.min.js') }} "></script>
            <!-- Wow JS -->
            <script src="{{ asset('js/front/wow.min.js') }} "></script>

            <script src="{{ asset('js/front/slick.min.js') }} "></script>

            <script type="text/javascript" src="{{ asset('js/front/main.js') }}"></script>
        @endpush
    </main>

@endsection
