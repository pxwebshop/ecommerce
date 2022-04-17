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