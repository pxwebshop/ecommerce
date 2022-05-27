@section('title','Shop')
@extends('front.layouts.template')

@section('content')
<main class="p-login">
    <section class="p-login__sc1">
        <div class="l-container">
            <div class="c-breadcrumb1">
                <div class="c-breadcrumb1__title">
                    <h2 class="c-breadcrumb1__txt">
                    {{trans('forgot-password.title-reset')}}
                    </h2>
                </div>
                <!-- cái này em để breadcrumbs của login để cho nó chạy -->
                {{ Breadcrumbs::render(__('breadcrumbs.reset-password'), $token) }}</a>
            </div>
        </div>
    </section>

    <section class="p-login__sc2">
        <div class="l-container">
            <div class="c-authen">
                <h2 class="c-title4">{{trans('forgot-password.title-reset')}}</h2>
                <form action="/reset-password" method="post" class="c-authen__form">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="c-group c-authen__group">
                        <input type="email" name="email" class="c-input" value="{{ old('email') }}" placeholder="{{trans('forgot-password.form.email')}}">
                        @include('front._partials.alert', ['field' => 'email'])
                    </div>
                    <div class="c-group c-authen__group">
                        <input type="password" name="password" class="c-input c-input__password" value="{{ old('password') }}" placeholder="{{trans('forgot-password.form.new-pass')}}">
                        @include('front._partials.alert', ['field' => 'password'])
                    </div>
                    <div class="c-group c-authen__group">
                        <input type="password" name="password_confirmation" class="c-input c-input__password" value="{{ old('password') }}" placeholder="{{trans('forgot-password.form.confirm-pass')}}">
                    </div>
                    <button type="submit" class="c-btn1 c-btn1--hoverRed c-authen__btn">
                    {{trans('forgot-password.form.btn-reset')}}
                    </button>
                </form>
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