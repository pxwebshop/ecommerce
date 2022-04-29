@section('title','Wishlist')
@extends('front.layouts.template')

@section('content')
<main class="p-wishlist">
    <section class="p-wishlist__sc1">
        <div class="l-container">
            <div class="c-breadcrumb1">
                <div class="c-breadcrumb1__title">
                    <h2 class="c-breadcrumb1__txt">
                        Wishlist
                    </h2>
                </div>
                <div class="c-breadcrumb1__url">
                    <a href="/" class="c-breadcrumb1__link">Trang chủ</a>
                    <span class="c-breadcrumb1__current">/ Wishlist</a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-wishlist__sc2">
        <div class="l-container">
            <div class="c-block4">
                <div class="c-block4__title">
                    <h2 class="c-title5">My Wishlist</h2>
                </div>
                @foreach ($wishlists as  $wishlist)
                    <ul class="c-block4__list">
                        <li class="c-block4__product">
                            <form action="{{route('wishlist.delete')}}" id="wishlistForm" method="post">
                                @csrf
                                <input name="id" type="hidden" value="{{ $wishlist->id }}" />
                                <a onclick="document.getElementById('wishlistForm').submit()" class="c-remove">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </a>
                            </form>
                            
                            <a href="/product/detail/{{$wishlist->id}}">
                                <figure class="c-block4__img"><img src="{{ $wishlist->thumb }}" alt=""></figure>
                            </a>
                        </li>
                        <li class="c-block4__name">
                            <a href="/product/detail/{{$wishlist->id}}">{{ $wishlist->name }}</a>
                        </li>
                        <li class="c-block4__unitPrice">
                            <span class="c-block4__productPrice">{{ number_format($wishlist->sale_price) }} <sup>đ</sup></span>
                        </li>
                        <li class="c-block4__btn">
                            <a href="#" class="c-btn1">
                                <i class="fa-solid fa-cart-shopping"></i>
                                Add to Cart
                            </a>
                        </li>
                    </ul>
                @endforeach
                
                {{-- <ul class="c-block4__list">
                    <li class="c-block4__product">
                        <a href="#" class="c-remove"><i class="fa-solid fa-circle-xmark"></i></a>
                        <a href="/product/detail">
                            <figure class="c-block4__img"><img src="https://templates.envytheme.com/ejon/default/assets/img/cart/cart-1.png" alt=""></figure>
                        </a>
                    </li>
                    <li class="c-block4__name">
                        <a href="/product/detail">Bluetooth Headphone</a>
                    </li>
                    <li class="c-block4__unitPrice">
                        <span class="c-block4__productPrice">1.990.000 <sup>đ</sup></span>
                    </li>
                    <li class="c-block4__stock">
                        <span class="c-block4__stockTxt">In Stock</span>
                    </li>
                    <li class="c-block4__btn">
                        <a href="#" class="c-btn1">
                            <i class="fa-solid fa-cart-shopping"></i>
                            Add to Cart
                        </a>
                    </li>
                </ul>
                <ul class="c-block4__list">
                    <li class="c-block4__product">
                        <a href="#" class="c-remove"><i class="fa-solid fa-circle-xmark"></i></a>
                        <a href="/product/detail">
                            <figure class="c-block4__img"><img src="https://templates.envytheme.com/ejon/default/assets/img/cart/cart-1.png" alt=""></figure>
                        </a>
                    </li>
                    <li class="c-block4__name">
                        <a href="/product/detail">Bluetooth Headphone</a>
                    </li>
                    <li class="c-block4__unitPrice">
                        <span class="c-block4__productPrice">1.990.000 <sup>đ</sup></span>
                    </li>
                    <li class="c-block4__stock">
                        <span class="c-block4__stockTxt">In Stock</span>
                    </li>
                    <li class="c-block4__btn">
                        <a href="#" class="c-btn1">
                            <i class="fa-solid fa-cart-shopping"></i>
                            Add to Cart
                        </a>
                    </li>
                </ul> --}}
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