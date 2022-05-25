@section('title','Product Detail')
@extends('front.layouts.template')

@section('content')
<main class="p-productDetail">
    <section class="p-productDetail__sc1">
        <div class="l-container">
            <div class="c-breadcrumb1">
                <div class="c-breadcrumb1__title">
                    <h2 class="c-breadcrumb1__txt">
                        {{ trans('common.product_detail') }}
                    </h2>
                </div>
                <div class="c-breadcrumb1__url">
                    {{-- {{ Breadcrumbs::render(__('breadcrumbs.login')) }}</a> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="p-productDetail__sc2">
        <div class="l-container">
            <div class="c-block1">
                <div class="c-block1__left">
                    <div class="c-block1__content">
                        <div class="c-block1__imgList">
                            @if (!empty(json_decode($product->images, true)) )
                                @foreach (json_decode($product->images, true) as $image)          
                                    <figure class="c-block1__imgItem">  
                                        <img src="{{ asset('storage/images/products/'.$image) }}">
                                    </figure>
                                @endforeach
                            @else
                                <figure class="c-block1__imgItem">  
                                    <img src="https://product.hstatic.net/1000026716/product/2_138cec9f984944fba392fc68f94bed91.png" alt="">
                                </figure>
                                <figure class="c-block1__imgItem">
                                    <img src="https://product.hstatic.net/1000026716/product/5_d5d6750f4cfc4348a58db72a16f9b4a5.png" alt="">
                                </figure>
                                <figure class="c-block1__imgItem">
                                    <img src="https://product.hstatic.net/1000026716/product/4_1b0a899b47a24b1b87ba196015853ba3.png" alt="">
                                </figure>
                            @endif
                        </div>
                        <div class="c-block1__slider">
                            @if (!empty(json_decode($product->images, true)) )
                                @foreach (json_decode($product->images, true) as $image)
                                    <figure class="c-block1__img">
                                        <img src="{{ asset('storage/images/products/'.$image) }}">
                                    </figure>
                                @endforeach
                            @else
                                <figure class="c-block1__img">
                                    <img src="https://product.hstatic.net/1000026716/product/2_138cec9f984944fba392fc68f94bed91.png" alt="">
                                </figure>
                                <figure class="c-block1__img">
                                    <img src="https://product.hstatic.net/1000026716/product/5_d5d6750f4cfc4348a58db72a16f9b4a5.png" alt="">
                                </figure>
                                <figure class="c-block1__img">
                                    <img src="https://product.hstatic.net/1000026716/product/4_1b0a899b47a24b1b87ba196015853ba3.png" alt="">
                                </figure>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="c-block1__right">
                    <h3 class="c-title6 c-block1__title">{{ $product->name }}</h3>
                    <ul class="c-rate1">
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <div class="c-price1 c-block1__price">
                        <span class="c-price1--lineThrough c-block1__price1">{{ number_format($product->price) }}<sup>đ</sup></span>
                        <span class="c-price1 c-block1__price2">{{ number_format($product->sale_price) }}<sup>đ</sup></span>
                    </div>
                    <p class="c-text1 c-block1__txt">{{ $product->description }}</p>
                    <ul class="c-block1__info">
                        <li class="c-block1__stock">
                            <p class="c-text1 c-block1__txt"><span class="c-text1--bold">Availability: </span> In Stock</p>
                        </li>
                        <li class="c-block1__stock">
                            <p class="c-text1 c-block1__txt"><span class="c-text1--bold">SKU: </span> {{ $product->sku }}</p>
                        </li>
                    </ul>
                    {{-- <div class="c-block1__color">
                        <span class="c-text1 c-text1--bold">Color: </span>
                        <a href="#" class="c-block1__color1"></a>
                        <a href="#" class="c-block1__color2"></a>
                        <a href="#" class="c-block1__color3"></a>
                        <a href="#" class="c-block1__color4"></a>
                        <a href="#" class="c-block1__color5"></a>
                    </div> --}}
                    <div class="c-plusMinus c-block1__quantity">
                        <span class="c-text1 c-text1--bold">Quantities:</span>
                        <div class="c-plusMinus__counter">
                            <div class="c-plusMinus__minus">
                                <i class="fa-solid fa-circle-minus"></i>
                            </div>
                            <input type="number" value="1" name="qty" class="qty_detail">
                            <div class="c-plusMinus__plus">
                                <i class="fa-solid fa-circle-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="c-block1__addCart">
                        <a href="{{ route('add.to.cart', $product->id) }}" class="c-btn1 c-btn1--border">
                            <i class="fa-solid fa-cart-shopping"></i>
                            {{ trans('common.addtocart') }}
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
                        <span href="#" class="c-block2__link c-block2__active">{{ trans('common.description') }}</span>
                    </li>
                    <li class="c-block2__tabItem">
                        <span href="#" class="c-block2__link">{{ trans('common.review') }}</span>
                    </li>
                    <li class="c-block2__tabItem">
                        <span href="#" class="c-block2__link">{{ trans('common.ship') }}</span>
                    </li>
                </ul>
                <div class="c-block2__content">
                    <div class="c-block2__description">
                        <h3 class="c-title6 c-block2__title">{{ trans('common.description') }}</h3>
                        <div class="c-text1">{!! $product->specification !!} </div>
                    </div>
                    <div class="c-block2__review">
                        <h3 class="c-title6 c-block2__title">{{ trans('common.review') }}</h3>
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
                            {{-- <li><span> Address: </span>4848 Hershell Hollow Road, Bothell, WA 89076</li>
                            <li><span> Phone: </span>+1 (514) 321-4567</li>
                            <li><span> Email: </span>hello@ejon.com</li> --}}
                            <li>{{ $product->info_delivery }}</li>
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
                    {{ trans('common.related_product') }}
                </h2>
            </div>
            <div class="c-list1">
                <div class="c-list1__list">
                    @foreach ($relatedProducts as $relatedProduct)
                        <div class="c-list1__item">
                            <div class="c-list1__wrap">
                                <div class="c-list1__img">
                                    <a href="/product/detail/{{ $relatedProduct->id }}">
                                        <figure class="c-list1__image">
                                            @if (Storage::exists($relatedProduct->thumb))
                                            <img src="{{ asset(Storage::url($relatedProduct->thumb)) }}">
                                        @endif
                                        <img src="{{ $relatedProduct->thumb }}" alt="">
                                        </figure>
                                    </a>
                                    <div class="c-tag1">New</div>
                                    <ul class="c-list1__actionList">
                                        <li class="c-list1__actionItem">
                                            <a href="{{ route('add.to.cart', $relatedProduct->id) }}">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </a>
                                        </li>
                                        <li class="c-list1__actionItem">
                                            <form action="{{route('wishlist.add')}}" method="post">
                                                @csrf
                                                <input name="product_id" type="hidden" value="{{ $relatedProduct->id }}" />
                                                <a onclick="$(this).closest('form').submit();">
                                                    <i class="fa-solid fa-heart"></i>
                                                </a>
                                            </form>
                                        </li>
                                        <li class="c-list1__actionItem">
                                            <a href="/product/detail/{{$relatedProduct->id}}"><i class="fa-solid fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="c-list1__content">
                                    <h3 class="c-title2">{{ $relatedProduct->name }}</h3>
                                    <ul class="c-rate1">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <p class="c-price1">{{ number_format($relatedProduct->sale_price) }} <sup>đ</sup> </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
    @push('scripts')
        <!-- Owl Carousel JS -->
        <script src="{{ asset('js/front/owl.carousel.min.js')}} "></script>
         <!-- Wow JS -->
        <script src="{{ asset('js/front/wow.min.js')}} "></script>

        <script src="{{ asset('js/front/slick.min.js')}} "></script>

        <script type="text/javascript" src="{{ asset('js/front/main.js') }}"></script>
        <script>
            // export default {
            //     data() {
            //         return {
            //           users: {},
            //         }
            //     },
            //     methods: {
            //         getSortProductByPrice(){
            //             axios.get('/list', {
            //                 params: {
            //                     foo: 'bar'
            //                 }
            //             }).then((response)=>{

            //                 this.users = response.data.users
            //             })
            //             .catch()

            //             }
            //     },
            //     created() {
            //         this.getUser()
            //     }
            // }

            $(document).ready(function() {
                $('.addToCartBtn').click(function(e) {
                    var product_qty = $(this).closest('.c-block1__right').find('.qty_detail').val();
                    $.ajax({
                        url: '/cart',
                        method: "post",
                        data: {
                            _token: '{{ csrf_token() }}', 
                            quantity: product_qty,
                        },
                        success: function (response) {
                            window.location.href('/cart');
                        }
                    });
                })
            })
        </script> 
    @endpush
</main>
@endsection