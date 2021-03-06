@section('title','Trang chủ')
@extends('front.layouts.template')

@section('content')
<main class="p-home">
    <section class="p-home__slide">
        <div class="c-slide1 owl-carousel owl-theme">
            @foreach($sliders as $slider)
                <div class="c-slide1__item">
                    <div class="l-container">
                        <div class="c-slide1__content">
                            <div class="c-slide1__text" data-aos="fade-up">
                                <b class="c-slide1__bold">Big Sale Offer</b>
                                <h1 class="c-slide1__title">{{ $slider->title }}</h1>
                                <p class="c-text1">{{ $slider->content }}</p>
                                <a href="{{ route('product.all') }}" class="c-btn1">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    {{ trans('common.shopnow') }}
                                </a>
                            </div>
                            <figure class="c-slide1__img" data-aos="fade-down">
                                {{-- <img src="{{ $slider->image }}" alt=""> --}}
                                @if (Storage::exists($slider->image))
                                    <img src="{{ asset(Storage::url($slider->image)) }}">
                                @endif
                                <img src="{{ $slider->image }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="p-home__overview">
        <div class="l-container">
            <div class="c-list2">
                <div class="c-list2__list">
                    <div class="c-list2__item" 
                        data-aos="fade-right"
                        data-aos-offset="500"
                        data-aos-easing="ease-in-sine">
                        <div class="c-list2__wrap">
                            <figure class="c-list2__img">
                                <img src="https://templates.envytheme.com/ejon/default/assets/img/overview/overview-1.png" alt="">
                            </figure>
                            <div class="c-list2__content">
                                <h3 class="c-title2">{{ trans('list.list2.special_discount') }}</h3>
                                <p class="c-list2__txt">{{ trans('list.list2.for') }}</p>
                                <p class="c-price2">19.990.000 <sup>đ</sup></p>
                                <a href="{{ route('product.all') }}" class="c-btn1">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    {{ trans('common.shopnow') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="c-list2__item" 
                        data-aos="fade-left"
                        data-aos-offset="500"
                        data-aos-easing="ease-in-sine">
                        <div class="c-list2__wrap c-list2__wrap--reserve">
                            <figure class="c-list2__img c-list2__img--width">
                                <img src="https://templates.envytheme.com/ejon/default/assets/img/overview/overview-2.png" alt="">
                            </figure>
                            <div class="c-list2__content c-list2__content--width">
                                <p class="c-list2__txt">{{ trans('list.list2.featured') }}</p>
                                <h3 class="c-title2">{{ trans('list.list2.best_price') }}</h3>
                                <p class="c-price2 c-price2--discount">-50% Off</p><br>
                                <a href="{{ route('product.all') }}" class="c-list2__btn">
                                    {{ trans('list.list2.view') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-home__support">
        <div class="l-container">
            <div class="c-list4">
                <div class="c-list4__list" 
                    data-aos="fade-up"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div class="c-list4__wrap">
                        <div class="c-list4__item">
                            <i class="fa-solid fa-truck"></i>
                            <p class="c-list4__txt">{{ trans('list.list4.txt1') }}</p>
                        </div>
                    </div>
                    <div class="c-list4__wrap">
                        <div class="c-list4__item">
                            <i class="fa-solid fa-rotate-left"></i>
                            <p class="c-list4__txt">{{ trans('list.list4.txt2') }}</p>
                        </div>
                    </div>
                    <div class="c-list4__wrap">
                        <div class="c-list4__item">
                            <i class="fa-solid fa-wallet"></i>
                            <p class="c-list4__txt">{{ trans('list.list4.txt3') }}</p>
                        </div>
                    </div>
                    <div class="c-list4__wrap">
                        <div class="c-list4__item">
                            <i class="fa-solid fa-headset"></i>
                            <p class="c-list4__txt">{{ trans('list.list4.txt4') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-home__arrivals" data-aos="fade-up"
        data-aos-anchor-placement="top-center">
        <div class="l-container">
            <div class="c-title1">
                <h2 class="c-title1__txt">
                    {{ trans('common.new_arrivals') }}
                </h2>
            </div>
            <div class="c-list1">
                <div class="c-list1__list">
                    @foreach ($arrivals as $arrival)
                        <div class="c-list1__item">
                            <div class="c-list1__wrap">
                                <div class="c-list1__img">
                                    <a href="/product/detail/{{$arrival->id}}">
                                        <figure class="c-list1__image">
                                            @if (Storage::exists($arrival->thumb))
                                                    <img src="{{ asset(Storage::url($arrival->thumb)) }}">
                                                @endif
                                                <img src="{{ $arrival->thumb }}" alt="">
                                        </figure>
                                    </a>
                                    <div class="c-tag1">New</div>
                                    <ul class="c-list1__actionList">
                                        <li class="c-list1__actionItem">
                                            <a href="{{ route('add.to.cart', $arrival->id) }}">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </a>
                                        </li>
                                        <li class="c-list1__actionItem">
                                            <form action="{{route('wishlist.add')}}" method="post">
                                                @csrf
                                                <input name="product_id" type="hidden" value="{{ $arrival->id }}" />
                                                <a onclick="$(this).closest('form').submit();">
                                                    <i class="fa-solid fa-heart"></i>
                                                </a>
                                            </form>
                                        </li>
                                        <li class="c-list1__actionItem">
                                            <a href="/product/detail/{{$arrival->id}}"><i class="fa-solid fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="c-list1__content">
                                    <h3 class="c-title2">{{ $arrival->name }}</h3>
                                    <ul class="c-rate1">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <p class="c-price1">{{ number_format($arrival->sale_price) }} <sup>đ</sup> </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="p-home__specialOffer" data-aos="fade-up"
    data-aos-anchor-placement="top-center">
        <div class="l-container">
            <div class="c-title1">
                <h2 class="c-title1__txt">
                    {{ trans('common.special_offer') }}
                </h2>
            </div>
            <div class="c-list3">
                <div class="c-list3__list">
                    @foreach ($special_offers as $special_offer)
                        <div class="c-list3__item">
                            <div class="c-list3__wrap">
                                <div class="c-list3__img">
                                    <a href="/product/detail/{{$special_offer->id}}">
                                        <figure class="c-list3__image">
                                            @if (Storage::exists($special_offer->thumb))
                                                    <img src="{{ asset(Storage::url($special_offer->thumb)) }}">
                                                @endif
                                                <img src="{{ $special_offer->thumb }}" alt="">
                                        </figure>
                                    </a>
                                    <div class="c-tag2">-50%</div>
                                </div>
                                <div class="c-list3__content">
                                    <p class="c-title3">Gadget</p>
                                    <h3 class="c-title2">{{ $special_offer->name }}</h3>
                                    <div class="c-price1">
                                        <p class="c-price1--colorRed"> {{ number_format($special_offer->sale_price) }} <sup>đ</sup></p>
                                        <p class="c-price1--lineThrough">{{ number_format($special_offer->price) }} <sup>đ</sup></p>
                                    </div>
                                    <ul class="c-rate1">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="p-home__collection" data-aos="fade-up"
    data-aos-anchor-placement="top-center">
        <div class="l-container">
            <div class="c-list5">
                <div class="c-list5__list">
                    <div class="c-list5__item">
                        <figure class="c-list5__img">
                            <img src="https://product.hstatic.net/1000026716/product/2_138cec9f984944fba392fc68f94bed91.png" alt="">
                        </figure>
                    </div>
                    <div class="c-list5__item c-list5__item--flex">
                        <div class="c-list5__content">
                            <div class="c-list5__txt1">{{ trans('list.list5.txt1') }}</div>
                            <h3 class="c-list5__title">{{ trans('list.list5.title') }}</h3>
                            <div class="c-list5__txt2">{{ trans('list.list5.txt2') }}</div>
                            <a href="{{ route('product.all') }}" class="c-btn1">
                                <i class="fa-solid fa-cart-shopping"></i>
                                {{ trans('common.shopnow') }}
                            </a>
                        </div>
                    </div>
                    <div class="c-list5__item c-list5__item--flex">
                        <figure class="c-list5__img">
                            <img src="https://product.hstatic.net/1000026716/product/4_1b0a899b47a24b1b87ba196015853ba3.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-home__bestseller" data-aos="fade-up"
    data-aos-anchor-placement="top-center">
        <div class="l-container">
            <div class="c-title1">
                <h2 class="c-title1__txt">
                    {{ trans('common.bestseller') }}
                </h2>
            </div>
            <div class="c-list6">
                {{-- <ul class="c-list6__list">
                    <li class="c-list6__item is-active">Smartphones</li>
                    <li class="c-list6__item">TV</li>
                    <li class="c-list6__item">Cameras</li>
                    <li class="c-list6__item">Audio</li>
                    <li class="c-list6__item">Computers</li>
                    <li class="c-list6__item">Accessories</li>
                    <li class="c-list6__item">Laptop</li>
                    <li class="c-list6__item">Watches</li>
                    <li class="c-list6__item">Mobile</li>
                    <li class="c-list6__item">Headphone</li>
                </ul> --}}
            </div>
        </div>
        <div class="l-container">
            <p class="p-home__txt">

            </p>
            <div class="c-list1 p-home__bestsellerList p-home__bestsellerList0">
                <div class="c-list1__list">
                    @foreach ($bestsellers as $bestseller )
                        <div class="c-list1__item">
                            <div class="c-list1__wrap">
                                <div class="c-list1__img">
                                    <a href="/product/detail/{{$bestseller->id}}">
                                        <figure class="c-list1__image">
                                            @if (Storage::exists($bestseller->thumb))
                                                    <img src="{{ asset(Storage::url($bestseller->thumb)) }}">
                                                @endif
                                                <img src="{{ $bestseller->thumb }}" alt="">
                                        </figure>
                                    </a>
                                    <div class="c-tag1">New</div>
                                    <ul class="c-list1__actionList">
                                        <li class="c-list1__actionItem">
                                            <a href="{{ route('add.to.cart', $bestseller->id) }}">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </a>
                                        </li>
                                        <li class="c-list1__actionItem">
                                            <form action="{{route('wishlist.add')}}" method="post">
                                                @csrf
                                                <input name="product_id" type="hidden" value="{{ $bestseller->id }}" />
                                                <a onclick="$(this).closest('form').submit();">
                                                    <i class="fa-solid fa-heart"></i>
                                                </a>
                                            </form>
                                        </li>
                                        <li class="c-list1__actionItem">
                                            <a href="/product/detail/{{$bestseller->id}}"><i class="fa-solid fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="c-list1__content">
                                    <h3 class="c-title2">{{ $bestseller->name }}</h3>
                                    <ul class="c-rate1">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <p class="c-price1">{{ number_format($bestseller->sale_price) }} <sup>đ</sup> </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="c-list1 p-home__bestsellerList p-home__bestsellerList3">
                <div class="c-text3">
                    <p class="c-text3__txt">
                        This category has no product now. Go back later.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="p-home__specialOffer" data-aos="fade-up"
    data-aos-anchor-placement="top-center">
        <div class="l-container">
            <div class="c-title1 c-title1">
                <h2 class="c-title1__txt">
                   {{ trans('common.special_product') }}
                </h2>
            </div>
            <div class="c-list1">
                <div class="c-list1__list">
                    @foreach ($special_products as $special_product)
                        <div class="c-list1__item">
                            <div class="c-list1__wrap">
                                <div class="c-list1__img">
                                    <a href="/product/detail/{{$special_product->id}}">
                                        <figure class="c-list1__image">
                                            @if (Storage::exists($special_product->thumb))
                                                    <img src="{{ asset(Storage::url($special_product->thumb)) }}">
                                                @endif
                                                <img src="{{ $special_product->thumb }}" alt="">
                                        </figure>
                                    </a>
                                    <div class="c-tag1">New</div>
                                    <ul class="c-list1__actionList">
                                        <li class="c-list1__actionItem">
                                            <a href="{{ route('add.to.cart', $special_product->id) }}">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </a>
                                        </li>
                                        <li class="c-list1__actionItem">
                                            <form action="{{route('wishlist.add')}}" method="post">
                                                @csrf
                                                <input name="product_id" type="hidden" value="{{ $special_product->id }}" />
                                                <a onclick="$(this).closest('form').submit();">
                                                    <i class="fa-solid fa-heart"></i>
                                                </a>
                                            </form>
                                        </li>
                                        <li class="c-list1__actionItem">
                                            <a href="/product/detail/{{$special_product->id}}"><i class="fa-solid fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="c-list1__content">
                                    <h3 class="c-title2">{{ $special_product->name }}</h3>
                                    <ul class="c-rate1">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <p class="c-price1">{{ number_format($special_product->sale_price) }} <sup>đ</sup> </p>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    <section class="p-home__news" data-aos="fade-up"
    data-aos-anchor-placement="top-center">
        <div class="l-container">
            <div class="c-title1">
                <h2 class="c-title1__txt">
                    {{ trans('common.news') }}
                </h2>
            </div>
            <div class="c-list7">
                <div class="c-list7__list">
                    @foreach ($articles as $article)
                        <div class="c-list7__wrap">
                            <div class="c-list7__item">
                                <div class="c-list7__img">
                                    <figure class="c-list7__image">
                                        <a href=""><img src="{{ $article->thumb }}" alt=""></a>
                                    </figure>
                                </div>
                                <div class="c-list7__content">
                                    <h4 class="c-title3">{{ $article->tag }}</h4>
                                    <a href="#">
                                        <h3 class="c-title2">{{ $article->title }}</h3>
                                    </a>
                                    <h4 class="c-title3 c-title3--colorGrey">{{ $article->author }} / {{ $article->created_at }}</h4>
                                    <p class="c-text1">{{ $article->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="p-home__slideBot" data-aos="zoom-in">
        <div class="c-slide2">
            <div class="l-container">
                <div class="c-slide2__list owl-carousel">
                    <div class="c-slide2__item">
                        <a href="#" class="c-slide2__link">
                            <figure class="c-slide2__img">
                                <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="c-slide2__item">
                        <a href="#" class="c-slide2__link">
                            <figure class="c-slide2__img">
                                <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="c-slide2__item">
                        <a href="#" class="c-slide2__link">
                            <figure class="c-slide2__img">
                                <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="c-slide2__item">
                        <a href="#" class="c-slide2__link">
                            <figure class="c-slide2__img">
                                <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="c-slide2__item">
                        <a href="#" class="c-slide2__link">
                            <figure class="c-slide2__img">
                                <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="c-slide2__item">
                        <a href="#" class="c-slide2__link">
                            <figure class="c-slide2__img">
                                <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="c-slide2__item">
                        <a href="#" class="c-slide2__link">
                            <figure class="c-slide2__img">
                                <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="c-slide2__item">
                        <a href="#" class="c-slide2__link">
                            <figure class="c-slide2__img">
                                <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="c-slide2__item">
                        <a href="#" class="c-slide2__link">
                            <figure class="c-slide2__img">
                                <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="c-slide2__item">
                        <a href="#" class="c-slide2__link">
                            <figure class="c-slide2__img">
                                <img src="https://templates.envytheme.com/ejon/default/assets/img/partner/partner-5.png" alt="">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <!-- Owl Carousel JS -->
        <script src="{{ asset('js/front/owl.carousel.min.js')}} "></script>

        <script src="{{ asset('js/front/slick.min.js')}} "></script>

        <script type="text/javascript" src="{{ asset('js/front/main.js') }}"></script>
    @endpush
</main>
@endsection