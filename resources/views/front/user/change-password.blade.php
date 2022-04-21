@section('title','PXWebShop')
@extends('front.layouts.template')

@section('content')
<main class="p-login">
    <section class="p-login__sc1">
        <div class="l-container">
            <div class="c-breadcrumb1">
                <div class="c-breadcrumb1__title">
                    <h2 class="c-breadcrumb1__txt">
                    {{ trans('change-password.title') }}
                    </h2>
                </div>
                <div class="c-breadcrumb1__url">
                    <a href="/" class="c-breadcrumb1__link">{{ trans('common.breadcrumb') }}</a>
                    <span class="c-breadcrumb1__current">/ {{ trans('change-password.title') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="p-login__sc2">
        <div class="l-container">
            <div class="c-authen">
                <h2 class="c-title4">{{ trans('change-password.title') }}</h2>
                <form action="" method="post" class="c-authen__form">
                    @csrf
                    <div class="c-group c-authen__group">
                        <input type="password" name="current-password" class="c-input" value="{{ old('email') }}" placeholder="{{ trans('change-password.form.current-pass') }}">
                        @include('front.layouts.alert', ['field' => 'current-password'])
                    </div>
                    <div class="c-group c-authen__group">
                        <input type="password" name="new-password" class="c-input c-input__password" value="{{ old('password') }}" placeholder="{{ trans('change-password.form.new-pass') }}">
                        @include('front.layouts.alert', ['field' => 'new-password'])
                    </div>
                    <div class="c-group c-authen__group">
                        <input type="password" name="new-password_confirmation" class="c-input c-input__password" value="{{ old('password') }}" placeholder="{{ trans('change-password.form.confirm-pass') }}">
                        @include('front.layouts.alert', ['field' => 'new-password_confirmation'])
                    </div>
                    <button type="submit" class="c-btn1 c-btn1--hoverRed c-authen__btn">
                        {{ trans('change-password.form.button') }}
                    </button>
                </form>
                <div class="c-text2">
                    <p class="c-text2__important c-authen__text">
                        <a href="/" class="c-text2__link">{{ trans('change-password.form.return-home') }}</a>
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