@section('title','Trang chủ')
@extends('front.layouts.template')

@section('content')
<main class="p-home">
    <section class="p-home__slide">
        <div class="c-slide1 owl-carousel owl-theme">
            <div class="c-slide1__item">
                <div class="l-container">
                    <div class="c-slide1__content">
                        <div class="c-slide1__text">
                            <b class="c-slide1__bold">Big Sale Offer</b>
                            <h1 class="c-slide1__title">The Drone has an Attractive Gift Free</h1>
                            <p class="c-text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="c-btn1">
                                <i class="fa-solid fa-cart-shopping"></i>
                                Shop Now
                            </a>
                        </div>
                        <figure class="c-slide1__img">
                            <img src="https://templates.envytheme.com/ejon/default/assets/img/main-slider/drone.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="c-slide1__item">
                <div class="l-container">
                    <div class="c-slide1__content">
                        <div class="c-slide1__text">
                            <b class="c-slide1__bold">Big Sale Offer</b>
                            <h1 class="c-slide1__title">Get The Best Deal on Smart TV</h1>
                            <p class="c-text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="c-btn1">
                                <i class="fa-solid fa-cart-shopping"></i>
                                Shop Now
                            </a>
                        </div>
                        <figure class="c-slide1__img">
                            <img src="https://templates.envytheme.com/ejon/default/assets/img/main-slider/monitor.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="c-slide1__item">
                <div class="l-container">
                    <div class="c-slide1__content">
                        <div class="c-slide1__text">
                            <b class="c-slide1__bold">Big Sale Offer</b>
                            <h1 class="c-slide1__title">The High-Quality Product is Ready</h1>
                            <p class="c-text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="c-btn1">
                                <i class="fa-solid fa-cart-shopping"></i>
                                Shop Now
                            </a>
                        </div>
                        <figure class="c-slide1__img">
                            <img src="https://templates.envytheme.com/ejon/default/assets/img/main-slider/headphone.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-home__overview">
        <div class="l-container">
            <div class="c-list2">
                <div class="c-list2__list">
                    <div class="c-list2__item">
                        <div class="c-list2__wrap">
                            <figure class="c-list2__img">
                                <img src="https://templates.envytheme.com/ejon/default/assets/img/overview/overview-1.png" alt="">
                            </figure>
                            <div class="c-list2__content">
                                <h3 class="c-title2">Special Discount Offer</h3>
                                <p class="c-list2__txt">for 12-12 Festival</p>
                                <p class="c-price2">19.990.000 <sup>đ</sup></p>
                                <a href="#" class="c-btn1">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="c-list2__item">
                        <div class="c-list2__wrap c-list2__wrap--reserve">
                            <figure class="c-list2__img c-list2__img--width">
                                <img src="https://templates.envytheme.com/ejon/default/assets/img/overview/overview-2.png" alt="">
                            </figure>
                            <div class="c-list2__content c-list2__content--width">
                                <p class="c-list2__txt">Featured</p>
                                <h3 class="c-title2">Best Price & Great Quality</h3>
                                <p class="c-price2 c-price2--discount">-50% Off</p><br>
                                <a href="#" class="c-list2__btn">
                                    View Product
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
    <section class="p-home__arrivals">
        <div class="l-container">
            <div class="c-title1">
                <h2 class="c-title1__txt">
                    New Arrivals
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
    <section class="p-home__specialOffer">
        <div class="l-container">
            <div class="c-title1">
                <h2 class="c-title1__txt">
                    Special Offer
                </h2>
            </div>
            <div class="c-list3">
                <div class="c-list3__list">
                    <div class="c-list3__item">
                        <div class="c-list3__wrap">
                            <div class="c-list3__img">
                                <a href="#">
                                    <figure class="c-list3__image">
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/offer-products/offer-products-1.png" alt="">
                                    </figure>
                                </a>
                                <div class="c-tag2">-50%</div>
                            </div>
                            <div class="c-list3__content">
                                <p class="c-title3">Gadget</p>
                                <h3 class="c-title2">Smart Watch</h3>
                                <div class="c-price1">
                                    <p class="c-price1--colorRed"> 9.990.000 <sup>đ</sup></p>
                                    <p class="c-price1--lineThrough">19.990.000 <sup>đ</sup></p>
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
                    <div class="c-list3__item">
                        <div class="c-list3__wrap">
                            <div class="c-list3__img">
                                <a href="#">
                                    <figure class="c-list3__image">
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/offer-products/offer-products-1.png" alt="">
                                    </figure>
                                </a>
                                <div class="c-tag2">-50%</div>
                            </div>
                            <div class="c-list3__content">
                                <p class="c-title3">Gadget</p>
                                <h3 class="c-title2">Smart Watch</h3>
                                <div class="c-price1">
                                    <p class="c-price1--colorRed"> 9.990.000 <sup>đ</sup></p>
                                    <p class="c-price1--lineThrough">19.990.000 <sup>đ</sup></p>
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
                    <div class="c-list3__item">
                        <div class="c-list3__wrap">
                            <div class="c-list3__img">
                                <a href="#">
                                    <figure class="c-list3__image">
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/offer-products/offer-products-3.png" alt="">
                                    </figure>
                                </a>
                                <div class="c-tag2">-50%</div>
                            </div>
                            <div class="c-list3__content">
                                <p class="c-title3">Gadget</p>
                                <h3 class="c-title2">Smart Watch</h3>
                                <div class="c-price1">
                                    <p class="c-price1--colorRed"> 9.990.000 <sup>đ</sup></p>
                                    <p class="c-price1--lineThrough">19.990.000 <sup>đ</sup></p>
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
                </div>
            </div>
        </div>
    </section>
    <section class="p-home__collection">
        <div class="l-container">
            <div class="c-list5">
                <div class="c-list5__list">
                    <div class="c-list5__item">
                        <figure class="c-list5__img">
                            <img src="https://templates.envytheme.com/ejon/default/assets/img/collection/collection-1.png" alt="">
                        </figure>
                    </div>
                    <div class="c-list5__item c-list5__item--flex">
                        <div class="c-list5__content">
                            <div class="c-list5__txt1">New Arrival</div>
                            <h3 class="c-list5__title">Best Gadget</h3>
                            <div class="c-list5__txt2">Collection</div>
                            <a href="#" class="c-btn1">
                                <i class="fa-solid fa-cart-shopping"></i>
                                Shop Now
                            </a>
                        </div>
                    </div>
                    <div class="c-list5__item c-list5__item--flex">
                        <figure class="c-list5__img">
                            <img src="https://templates.envytheme.com/ejon/default/assets/img/collection/collection-2.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-home__bestseller">
        <div class="l-container">
            <div class="c-title1">
                <h2 class="c-title1__txt">
                    Bestsellers
                </h2>
            </div>
            <div class="c-list6">
                <ul class="c-list6__list">
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
                </ul>
            </div>
        </div>
        <div class="l-container">
            <p class="p-home__txt">

            </p>
            <div class="c-list1 p-home__bestsellerList p-home__bestsellerList0">
                <div class="c-list1__list">
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
            <div class="c-list1 p-home__bestsellerList p-home__bestsellerList1">
                <div class="c-list1__list">
                    <div class="c-list1__item">
                        <div class="c-list1__wrap">
                            <div class="c-list1__img">
                                <a href="#">
                                    <figure class="c-list1__image">
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/special-products/special-products-2.jpg" alt="">
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
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-2.jpg" alt="">
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
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-2.jpg" alt="">
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
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-2.jpg" alt="">
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
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-2.jpg" alt="">
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
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-2.jpg" alt="">
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
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-2.jpg" alt="">
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
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/arrivals-products/arrivals-products-2.jpg" alt="">
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
            <div class="c-list1 p-home__bestsellerList p-home__bestsellerList2">
                <div class="c-list1__list">
                    <div class="c-list1__item">
                        <div class="c-list1__wrap">
                            <div class="c-list1__img">
                                <a href="#">
                                    <figure class="c-list1__image">
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-7.jpg" alt="">
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
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-7.jpg" alt="">
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
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-7.jpg" alt="">
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
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-7.jpg" alt="">
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
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-7.jpg" alt="">
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
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-7.jpg" alt="">
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
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-7.jpg" alt="">
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
                                        <img src="https://templates.envytheme.com/ejon/default/assets/img/bestsellers-products/bestsellers-products-7.jpg" alt="">
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
            <div class="c-list1 p-home__bestsellerList p-home__bestsellerList3">
                <div class="c-text3">
                    <p class="c-text3__txt">
                        This category has no product now. Go back later.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="p-home__specialOffer">
        <div class="l-container">
            <div class="c-title1 c-title1">
                <h2 class="c-title1__txt">
                    Special Products
                </h2>
            </div>
            <div class="c-list1">
                <div class="c-list1__list">
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
    <section class="p-home__news">
        <div class="l-container">
            <div class="c-title1">
                <h2 class="c-title1__txt">
                    Latest News
                </h2>
            </div>
            <div class="c-list7">
                <div class="c-list7__list">
                    <div class="c-list7__wrap">
                        <div class="c-list7__item">
                            <div class="c-list7__img">
                                <figure class="c-list7__image">
                                    <a href=""><img src="https://templates.envytheme.com/ejon/default/assets/img/blog/blog-1.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="c-list7__content">
                                <h4 class="c-title3">eCommerce</h4>
                                <a href="#">
                                    <h3 class="c-title2">The Factory is Making its Own Mobile Chipset</h3>
                                </a>
                                <h4 class="c-title3 c-title3--colorGrey">Admin / 12 April 2022</h4>
                                <p class="c-text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="c-list7__wrap">
                        <div class="c-list7__item">
                            <div class="c-list7__img">
                                <figure class="c-list7__image">
                                    <img src="https://templates.envytheme.com/ejon/default/assets/img/blog/blog-1.jpg" alt="">
                                </figure>
                            </div>
                            <div class="c-list7__content">
                                <h4 class="c-title3">eCommerce</h4>
                                <a href="#">
                                    <h3 class="c-title2">The Factory is Making its Own Mobile Chipset</h3>
                                </a>
                                <h4 class="c-title3 c-title3--colorGrey">Admin / 12 April 2022</h4>
                                <p class="c-text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="c-list7__wrap">
                        <div class="c-list7__item">
                            <div class="c-list7__img">
                                <figure class="c-list7__image">
                                    <img src="https://templates.envytheme.com/ejon/default/assets/img/blog/blog-1.jpg" alt="">
                                </figure>
                            </div>
                            <div class="c-list7__content">
                                <h4 class="c-title3">eCommerce</h4>
                                <a href="#">
                                    <h3 class="c-title2">The Factory is Making its Own Mobile Chipset</h3>
                                </a>
                                <h4 class="c-title3 c-title3--colorGrey">Admin / 12 April 2022</h4>
                                <p class="c-text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
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
         <!-- Wow JS -->
        <script src="{{ asset('js/front/wow.min.js')}} "></script>

        <script type="text/javascript" src="{{ asset('js/front/main.js') }}"></script>

    @endpush
</main>
@endsection