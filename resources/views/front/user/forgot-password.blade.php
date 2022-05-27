@section('title','PXWebShop')
@extends('front.layouts.template')

@section('content')
<main class="p-login">
    <section class="p-login__sc1">
        <div class="l-container">
            <div class="c-breadcrumb1">
                <div class="c-breadcrumb1__title">
                    <h2 class="c-breadcrumb1__txt">
                    {{trans('forgot-password.title-forgot')}}
                    </h2>
                </div>
                <a>{{ Breadcrumbs::render(__('breadcrumbs.forgot-password')) }}</a>
            </div>
        </div>
    </section>

    <section class="p-login__sc2">
        <div class="l-container">
            <div class="c-authen">
                <h2 class="c-title4">{{trans('forgot-password.title-forgot')}}</h2>
                <form action="" method="post" class="c-authen__form">
                    @csrf
                    <div class="c-group c-authen__group">
                        <input type="email" name="email" class="c-input" value="{{ old('email') }}" placeholder="{{trans('forgot-password.form.email')}}">
                        @include('front._partials.alert', ['field' => 'email'])
                    </div>
                    <button type="submit" class="c-btn1 c-btn1--hoverRed c-authen__btn">
                    {{trans('forgot-password.form.btn-send-link')}}
                    </button>
                </form>
                <div class="c-text2">
                    <p class="c-text2__important c-authen__text">
                        <a href="/login" class="c-text2__link">{{trans('forgot-password.form.btn-return-login')}}</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="p-login__sc3">
        <div class="l-container">
            <div class="c-list4">
                <div class="c-list4__list">
                    <div class="c-list4__wrap">
                        <div class="c-list4__item">
                            <i class="fa-solid fa-truck"></i>
                            <p class="c-list4__txt">{{trans('list.list4.txt1')}}</p>
                        </div>
                    </div>
                    <div class="c-list4__wrap">
                        <div class="c-list4__item">
                            <i class="fa-solid fa-rotate-left"></i>
                            <p class="c-list4__txt">{{trans('list.list4.txt2')}}</p>
                        </div>
                    </div>
                    <div class="c-list4__wrap">
                        <div class="c-list4__item">
                            <i class="fa-solid fa-wallet"></i>
                            <p class="c-list4__txt">{{trans('list.list4.txt3')}}</p>
                        </div>
                    </div>
                    <div class="c-list4__wrap">
                        <div class="c-list4__item">
                            <i class="fa-solid fa-headset"></i>
                            <p class="c-list4__txt">{{trans('list.list4.txt4')}}</p>
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
    @endpush
</main>
@endsection