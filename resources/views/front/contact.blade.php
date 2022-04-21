@section('title','Contact')
@extends('front.layouts.template')

@section('content')
<main class="p-contact">
    <section class="p-contact__sc1">
        <div class="l-container">
            <div class="c-breadcrumb1">
                <div class="c-breadcrumb1__title">
                    <h2 class="c-breadcrumb1__txt">
                        Liên hệ
                    </h2>
                </div>
                <div class="c-breadcrumb1__url">
                    <a href="/" class="c-breadcrumb1__link">Trang chủ</a>
                    <span class="c-breadcrumb1__current">/ Liên hệ</a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-contact__sc2">
        <div class="l-container">
            <div class="c-contact">
                <div class="c-contact__left">
                    <div class="c-contact__message">
                        <div class="c-contact__title">
                            <h3 class="c-title4">Leave us a Message</h3>
                            <p class="c-text1"></p>
                        </div>
                        <form class="c-contact__form">
                            <div class="c-group">
                                <label for="" class="c-text1">Your Message*</label><br>
                                <textarea type="text" class="c-input" rows="5"></textarea>
                            </div>
                            <div class="c-contact__formFlex">
                                <div class="c-group">
                                    <label for="" class="c-text1">Your Name*</label><br>
                                    <input type="text" class="c-input">
                                </div>
                                <div class="c-group">
                                    <label for="" class="c-text1">Your Email*</label><br>
                                    <input type="text" class="c-input">
                                </div>
                            </div>
                            <div class="c-contact__formFlex">
                                <div class="c-group">
                                    <label for="" class="c-text1">Phone*</label><br>
                                    <input type="number" class="c-input">
                                </div>
                                <div class="c-group">
                                    <label for="" class="c-text1">Subject*</label><br>
                                    <input type="text" class="c-input">
                                </div>
                            </div>
                            <button type="submit" class="c-btn1 c-btn1--hoverBlack">
                                Gửi tin nhắn
                            </button>
                        </form>
                    </div>
                </div>
                <div class="c-contact__right">
                    <h3 class="c-title5">Visit Us</h3>
                    <ul class="c-contact__visit">
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Address: </span> 123 ABC street, Bien Hoa city, Dong Nai province, Vietnam
                        </li>
                        <li>
                        <i class="fa-solid fa-phone"></i>
                            <span>Phone: </span> 0123456789
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <span>Email: </span> abc@gmail.com
                        </li>
                    </ul>
                    <h4 class="c-title2">Giờ làm việc:</h4>
                    <ul class="c-contact__open">
                        <li>Từ thứ 2 đến chủ nhật</li>
                        <li>Từ 8:00am - 9:00pm</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="p-contact__sc3">
        <div class="p-contact__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.51256908922!2d106.70360641533418!3d10.77199896221966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f43fd97af5f%3A0x88ba5dd71b15433c!2zQml0ZXhjbyBUb3dlciwgaOG6u20gc-G7kSAyIEjDoG0gTmdoaSwgQuG6v24gTmdow6ksIFF14bqtbiAxLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1650223616739!5m2!1sen!2s" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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