@section('title','Đăng ký')
@extends('front.layouts.template')

@section('content')
<main class="p-register">
    <section class="p-register__sc1">
        <div class="l-container">
            <div class="c-breadcrumb1">
                <div class="c-breadcrumb1__title">
                    <h2 class="c-breadcrumb1__txt">
                        {{trans('user-register.breadcrumb')}}
                    </h2>
                </div>
                {{ Breadcrumbs::render(__('breadcrumbs.register')) }}</a>
            </div>
        </div>
    </section>

    <section class="p-register__sc2">
        <div class="l-container">
            <div class="c-authen">
                <h2 class="c-title4">{{trans('user-register.title')}}</h2>
                <form action="" method="post" class="c-authen__form">
                    @csrf
                    <div class="c-group c-authen__group">
                        <input type="text" name="name" class="c-input" placeholder="{{trans('user-register.form.name')}}">
                        @include('front._partials.alert', ['field' => 'name'])
                    </div>
                    <div class="c-group c-authen__group">
                        <input type="text" name="email" class="c-input" placeholder="{{trans('user-register.form.email')}}">
                        @include('front._partials.alert', ['field' => 'email'])
                    </div>
                    <div class="c-group c-authen__group">
                        <input type="text" name="phone" class="c-input" placeholder="{{trans('user-register.form.phone')}}">
                        @include('front._partials.alert', ['field' => 'phone'])
                    </div>
                    <div class="c-group c-authen__group">
                        <input type="password" name="password" class="c-input c-input__password" placeholder="{{trans('user-register.form.password')}}">
                        @include('front._partials.alert', ['field' => 'password'])
                    </div>
                    <div class="c-authen__option">
                        <div class="c-formCheck">
                            <input type="checkbox" class="c-formCheck__input" id="check">
                            <label for="check">{{trans('user-register.form.show-password')}}</label>
                        </div>
                    </div>
                    <button type="submit" class="c-btn1 c-btn1--hoverRed c-authen__btn">
                        {{trans('user-register.form.button')}}
                    </button>
                </form>
                <div class="c-text2">
                    <p class="c-text2__important c-authen__text">{{trans('user-register.form.label-already-account')}}
                        <a href="/login" class="c-text2__link">{{trans('user-register.form.login-account')}}</a>
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