@section('title', 'Product List')
@extends('front.layouts.template')

@section('content')
    <main class="p-productList">
        <section class="p-productList__breadcrumb">
            <div class="l-container">
                <div class="c-breadcrumb1">
                    <div class="c-breadcrumb1__title">
                        <h2 class="c-breadcrumb1__txt">
                            {{ trans('common.search') }}
                        </h2>
                    </div>
                    <div class="c-breadcrumb1__url">
                        <a href="/" class="c-breadcrumb1__link">{{ trans('breadcrumbs.home') }}</a>
                        <span class="c-breadcrumb1__current">/ {{ trans('breadcrumbs.product') }}</span>
                        <span class="c-breadcrumb1__current">/ {{ trans('common.search') }}</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-productList__list">
            <div class="l-container">
                <div class="c-filter p-productList__filter">
                    <div class="c-filter__total">
                        {{-- <p class="c-filter__txt">Showing 1-15 of 100</p> --}}
                    </div>
                    <form action="" method="get">
                        {{-- <div class="c-filter__sort">
                            <span class="c-filter__current">
                                Default sorting
                            </span>
                            <i class="fa-solid fa-angle-down"></i>
                            <ul class="c-filter__sortList">
                                <li class="c-filter__sortItem">Default sorting</li>
                                <li class="c-filter__sortItem">Sort by latest</li>
                                <li class="c-filter__sortItem">Sort by price: low to high</li>   
                                <li class="c-filter__sortItem">Sort by price: high to low</li>
                                <li class="c-filter__sortItem">Sort by popularity</li>
                                <li class="c-filter__sortItem">Sort by average rating</li>
                            </select>
                        </div> --}}
                        <select name="sort" class="c-filter__sortList">
                            <option value="1" selecte="selected" class="c-filter__sortItem">Default sorting</option>
                            <option value="2" class="c-filter__sortItem">Sort by latest</option>
                            <option value="3" class="c-filter__sortItem">Sort by price: low to high</option>
                            <option value="4" class="c-filter__sortItem">Sort by price: high to low</option>
                        </select>
                        <button type="submit" class="c-btn1 c-btn1 c-btn1--hoverBlack c-filter__btn">
                            Filter
                        </button>
                    </form>
                </div>
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
                                                <a href="#">
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </li>
                                            <li class="c-list1__actionItem">
                                                <form action="{{route('wishlist.add')}}" method="post">
                                                    @csrf
                                                    <input name="product_id" type="hidden" value="{{ $product->id }}" />
                                                    <a onclick="$(this).closest('form').submit();">
                                                        <i class="fa-solid fa-heart"></i>
                                                    </a>
                                                </form>
                                            </li>
                                            <li class="c-list1__actionItem">
                                                <a href="/product/detail/{{ $product->id }}"><i class="fa-solid fa-eye"></i></a>
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
                                        <p class="c-price1">{{ number_format($product->sale_price) }} <sup>đ</sup>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                {{-- chưa biết nên bỏ hay không? --}}
                {{-- <div class="c-list1">
                <div class="c-list1__list">
                    <div class="c-list1__item c-list1__item--col3">
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
                    <div class="c-list1__item c-list1__item--col3">
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
                    <div class="c-list1__item c-list1__item--col3">
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
            </div> --}}
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
