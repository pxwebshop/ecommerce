@section('title','Đăng ký')
@extends('front.layouts.template')

@section('content')
<main class="p-register">
    <section class="p-register__sc1">
        <div class="l-container">
            <div class="c-breadcrumb1">
                <div class="c-breadcrumb1__title">
                    <h2 class="c-breadcrumb1__txt">
                        Register
                    </h2>
                </div>
                <div class="c-breadcrumb1__url">
                    <a href="/" class="c-breadcrumb1__link">Trang chủ</a>
                    <span class="c-breadcrumb1__current">/ Đăng ký</a>
                </div>
            </div>
        </div>
    </section>

    <section class="p-register__sc2">
        <div class="l-container">
            <div class="c-authen">
                <h2 class="c-title4">Register</h2>
                <form action="" class="c-authen__form">
                    <div class="c-group c-authen__group">
                        <input type="text" class="c-input" placeholder="Name">
                    </div>
                    <div class="c-group c-authen__group">
                        <input type="text" class="c-input" placeholder="Email">
                    </div>
                    <div class="c-group c-authen__group">
                        <input type="text" class="c-input" placeholder="Phone">
                    </div>
                    <div class="c-group c-authen__group">
                        <input type="text" class="c-input" placeholder="Password">
                    </div>
                    <div class="c-authen__option">
                        <div class="c-formCheck">
                            <input type="checkbox" class="c-formCheck__input" id="check">
                            <label for="check">Show password?</label>
                        </div>
                    </div>
                    <button type="submit" class="c-btn1 c-btn1--hoverRed c-authen__btn">
                        Register
                    </button>
                </form>
                <div class="c-text2">
                    <p class="c-text2__important c-authen__text">Already have an account?
                        <a href="#" class="c-text2__link">Login now!</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="p-register__sc3">
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
</main>
@endsection