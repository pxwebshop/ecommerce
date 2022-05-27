<?php /*========================================
other
================================================*/ ?>
<div class="c-dev-title1">other</div>

<?php /*----------------------------------------*/ ?>
<div class="c-dev-title2">star rate</div>
<div class="l-container">
    <ul class="c-rate1">
        <li><i class="fa-solid fa-star"></i></li>
        <li><i class="fa-solid fa-star"></i></li>
        <li><i class="fa-solid fa-star"></i></li>
        <li><i class="fa-solid fa-star"></i></li>
        <li><i class="fa-solid fa-star"></i></li>
    </ul>
</div>

<div class="c-dev-title2">price 1</div>
<div class="l-container">
    <p class="c-price1">3.636.363 <sup>đ</sup> </p>
    <p class="c-price1--colorRed">3.636.363 <sup>đ</sup> </p>
</div>

<div class="c-dev-title2">price 2</div>
<div class="l-container">
    <p class="c-price2">19.990.000 <sup>đ</sup></p>
    <p class="c-price2 c-price2--discount">-50% Off</p><br>
</div>

<div class="c-dev-title2">tag1</div>
<div class="l-container">
    <div class="c-tag1">New</div>
</div>

<div class="c-dev-title2">tag 2</div>
<div class="l-container">
    <div class="c-tag2">-50%</div>
</div>

<div class="c-dev-title2">c-group</div>
<div class="l-container">
    <div class="c-group">
        <label for="" class="c-text1">Your Name*</label><br>
        <input type="text" class="c-input" placeholder="Input your name">
    </div>
</div>

<div class="c-dev-title2">c-formCheck</div>
<div class="l-container">
    <div class="c-formCheck">
        <input type="checkbox" class="c-formCheck__input">
        <label for="check">Show password?</label>
    </div>
</div>
<div class="c-dev-title2">c-lostPassword</div>
<div class="l-container">
    <div class="c-lostPassword">
        <a href="#">Forgot your password?</a>
    </div>
</div>

<div class="c-dev-title2">c-plusMinus</div>
<div class="l-container">
    <div class="c-plusMinus">
        <div class="c-plusMinus__counter">
            <div class="c-plusMinus__minus">
                <i class="fa-solid fa-circle-minus"></i>
            </div>
            <input type="text" value="1">
            <div class="c-plusMinus__plus">
                <i class="fa-solid fa-circle-plus"></i>
            </div>
        </div>
    </div>
</div>


<div class="c-dev-title2">c-login</div>
<div class="l-container">
    <div class="c-authen">
        <h2 class="c-title4">Login</h2>
        <form action="" class="c-authen__form">
            <div class="c-group c-authen__group">
                <input type="text" class="c-input" placeholder="Username">
            </div>
            <div class="c-group c-authen__group">
                <input type="text" class="c-input" placeholder="Email or Phone">
            </div>
            <div class="c-group c-authen__group">
                <input type="text" class="c-input" placeholder="Password">
            </div>
            <div class="c-authen__option">
                <div class="c-formCheck">
                    <input type="checkbox" class="c-formCheck__input" id="check">
                    <label for="check">Show password?</label>
                </div>
                <div class="c-lostPassword">
                    <a href="#">Forgot your password?</a>
                </div>
            </div>
            <button type="submit" class="c-btn1 c-btn1--hoverRed c-authen__btn">
                Login
            </button>
        </form>
        <div class="c-text2">
            <p class="c-text2__important c-authen__text">Don't have an account?
                <a href="#" class="c-text2__link">Register now!</a>
            </p>
        </div>
    </div>
</div>

<div class="c-dev-title2">c-register</div>
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

<div class="c-dev-title2">product filter</div>
<div class="l-container">
    <div class="c-filter">
        <div class="c-filter__total">
            <p class="c-filter__txt">Showing 1-18 of 100</p>
        </div>
        <div class="c-filter__sort">
            <span class="c-filter__current">
                Sort by price: low to high
            </span>
            <i class="fa-solid fa-angle-down"></i>
            <ul class="c-filter__sortList">
                <li class="c-filter__sortItem">Sort by price: low to high</li>
                <li class="c-filter__sortItem">Default sorting</li>
                <li class="c-filter__sortItem">Sort by popularity</li>
                <li class="c-filter__sortItem">Sort by average rating</li>
                <li class="c-filter__sortItem">Sort by latest</li>
                <li class="c-filter__sortItem">Sort by price: high to low</li>
            </ul>
        </div>
    </div>
</div>

<div class="c-dev-title2">c-paginate</div>
<div class="l-container">
    <div class="c-paginate">
        <a href="#" class="c-paginate__link"><i class="fa-solid fa-arrow-left"></i></a>
        <a href="#" class="c-paginate__link c-paginate__current">1</a>
        <a href="#" class="c-paginate__link">2</a>
        <a href="#" class="c-paginate__link">3</a>
        <a href="#" class="c-paginate__link">4</a>
        <a href="#" class="c-paginate__link"><i class="fa-solid fa-arrow-right"></i></a>
    </div>
</div>

<div class="c-dev-title2">c-block1</div>
<div class="l-container">
    <div class="c-block1">
        <div class="c-block1__left">
            <div class="c-block1__content">
                <div class="c-block1__imgList">
                    <figure class="c-block1__imgItem">
                        <img src="https://templates.envytheme.com/ejon/default/assets/img/quick-view/quick-view-1.jpg" alt="">
                    </figure>
                    <figure class="c-block1__imgItem">
                        <img src="https://templates.envytheme.com/ejon/default/assets/img/quick-view/quick-view-2.jpg" alt="">
                    </figure>
                    <figure class="c-block1__imgItem">
                        <img src="https://templates.envytheme.com/ejon/default/assets/img/quick-view/quick-view-3.jpg" alt="">
                    </figure>
                </div>
                <div class="c-block1__slider">
                    <figure class="c-block1__img">
                        <img src="https://templates.envytheme.com/ejon/default/assets/img/quick-view/quick-view-1.jpg" alt="">
                    </figure>
                    <figure class="c-block1__img">
                        <img src="https://templates.envytheme.com/ejon/default/assets/img/quick-view/quick-view-2.jpg" alt="">
                    </figure>
                    <figure class="c-block1__img">
                        <img src="https://templates.envytheme.com/ejon/default/assets/img/quick-view/quick-view-3.jpg" alt="">
                    </figure>
                </div>
            </div>
        </div>
        <div class="c-block1__right">
            <h3 class="c-title6 c-block1__title">Bluetooth Headphones</h3>
            <ul class="c-rate1">
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
            </ul>
            <div class="c-price1 c-block1__price">
                <span class="c-price1--lineThrough c-block1__price1">19.990.000<sup>đ</sup></span>
                <span class="c-price1 c-block1__price2">9.990.000<sup>đ</sup></span>
            </div>
            <p class="c-text1 c-block1__txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat.</p>
            <ul class="c-block1__info">
                <li class="c-block1__stock">
                    <p class="c-text1 c-block1__txt"><span class="c-text1--bold">Availability: </span> In stock</p>
                </li>
                <li class="c-block1__stock">
                    <p class="c-text1 c-block1__txt"><span class="c-text1--bold">SKU: </span> L458-25</p>
                </li>
            </ul>
            <div class="c-block1__color">
                <span class="c-text1 c-text1--bold">Color: </span>
                <a href="#" class="c-block1__color1"></a>
                <a href="#" class="c-block1__color2"></a>
                <a href="#" class="c-block1__color3"></a>
                <a href="#" class="c-block1__color4"></a>
                <a href="#" class="c-block1__color5"></a>
            </div>
            <div class="c-plusMinus c-block1__quantity">
                <span class="c-text1 c-text1--bold">Quantities: </span>
                <div class="c-plusMinus__counter">
                    <div class="c-plusMinus__minus">
                        <i class="fa-solid fa-circle-minus"></i>
                    </div>
                    <input type="text" value="1">
                    <div class="c-plusMinus__plus">
                        <i class="fa-solid fa-circle-plus"></i>
                    </div>
                </div>
            </div>
            <div class="c-block1__addCart">
                <a href="#" class="c-btn1 c-btn1--border">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Add to cart
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


<div class="c-dev-title2">c-block2</div>
<div class="l-container">
    <div class="c-block2">
        <ul class="c-block2__tabList">
            <li class="c-block2__tabItem">
                <span href="#" class="c-block2__link c-block2__active">Mô tả</span>
            </li>
            <li class="c-block2__tabItem">
                <span href="#" class="c-block2__link">Đánh giá</span>
            </li>
            <li class="c-block2__tabItem">
                <span href="#" class="c-block2__link">Thông tin vận chuyển</span>
            </li>
        </ul>
        <div class="c-block2__content">
            <div class="c-block2__description">
                <h3 class="c-title6 c-block2__title">Mô tả</h2>
                    <p class="c-text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    <p class="c-text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur.</p>
                    <ul class="c-text1">
                        <li>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</li>
                        <li>Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
                        <li>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</li>
                        <li>Various versions have evolved over the years, sometimes by accident sometimes on purpose.</li>
                        <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur.</li>
                    </ul>
            </div>
            <div class="c-block2__review">
                <h3 class="c-title6 c-block2__title">Đánh giá</h3>
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
                    <li><span> Address: </span>4848 Hershell Hollow Road, Bothell, WA 89076</li>
                    <li><span> Phone: </span>+1 (514) 321-4567</li>
                    <li><span> Email: </span>hello@ejon.com</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="c-dev-title2">c-block3</div>
<div class="l-container">
    <div class="c-block3">
        <div class="c-block3__left">
            <form class="c-block3__form">
                <div class="c-block3__list">
                    <div class="c-block3__head">
                        <ul class="c-block3__headList">
                            <li class="c-block3__product">Product</li>
                            <li class="c-block3__name">Name</li>
                            <li class="c-block3__unitPrice">Unit Price</li>
                            <li class="c-block3__quantity">Quantity</li>
                            <li class="c-block3__total">Total</li>
                        </ul>
                    </div>
                    <div class="c-block3__content">
                        <ul class="c-block3__contentList">
                            <li class="c-block3__product">
                                <a href="#" class="c-remove"><i class="fa-solid fa-circle-minus"></i></i></a>
                                <a href="/product/detail">
                                    <figure class="c-block3__img"><img src="https://templates.envytheme.com/ejon/default/assets/img/cart/cart-1.png" alt=""></figure>
                                </a>
                            </li>
                            <li class="c-block3__name">
                                <a href="/product/detail">Bluetooth Headphone</a>
                            </li>
                            <li class="c-block3__unitPrice">
                                <span class="c-block3__productPrice">1.990.000 <sup>đ</sup></span>
                            </li>
                            <li class="c-block3__quantity">
                                <div class="c-plusMinus">
                                    <div class="c-plusMinus__counter">
                                        <div class="c-plusMinus__minus">
                                            <i class="fa-solid fa-circle-minus"></i>
                                        </div>
                                        <input type="text" value="1">
                                        <div class="c-plusMinus__plus">
                                            <i class="fa-solid fa-circle-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="c-block3__total">
                                <span class="c-block3__productPriceTotal">1.990.000 <sup>đ</sup></span>
                            </li>
                        </ul>
                        <ul class="c-block3__contentList">
                            <li class="c-block3__product">
                                <a href="#" class="c-remove"><i class="fa-solid fa-circle-minus"></i></i></a>
                                <a href="/product/detail">
                                    <figure class="c-block3__img"><img src="https://templates.envytheme.com/ejon/default/assets/img/cart/cart-1.png" alt=""></figure>
                                </a>
                            </li>
                            <li class="c-block3__name">
                                <a href="/product/detail">Bluetooth Headphone</a>
                            </li>
                            <li class="c-block3__unitPrice">
                                <span class="c-block3__productPrice">1.990.000 <sup>đ</sup></span>
                            </li>
                            <li class="c-block3__quantity">
                                <div class="c-plusMinus">
                                    <div class="c-plusMinus__counter">
                                        <div class="c-plusMinus__minus">
                                            <i class="fa-solid fa-circle-minus"></i>
                                        </div>
                                        <input type="text" value="1">
                                        <div class="c-plusMinus__plus">
                                            <i class="fa-solid fa-circle-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="c-block3__total">
                                <span class="c-block3__productPriceTotal">1.990.000 <sup>đ</sup></span>
                            </li>
                        </ul>
                        <ul class="c-block3__contentList">
                            <li class="c-block3__product">
                                <a href="#" class="c-remove"><i class="fa-solid fa-circle-minus"></i></i></a>
                                <a href="/product/detail">
                                    <figure class="c-block3__img"><img src="https://templates.envytheme.com/ejon/default/assets/img/cart/cart-1.png" alt=""></figure>
                                </a>
                            </li>
                            <li class="c-block3__name">
                                <a href="/product/detail">Bluetooth Headphone</a>
                            </li>
                            <li class="c-block3__unitPrice">
                                <span class="c-block3__productPrice">1.990.000 <sup>đ</sup></span>
                            </li>
                            <li class="c-block3__quantity">
                                <div class="c-plusMinus">
                                    <div class="c-plusMinus__counter">
                                        <div class="c-plusMinus__minus">
                                            <i class="fa-solid fa-circle-minus"></i>
                                        </div>
                                        <input type="text" value="1">
                                        <div class="c-plusMinus__plus">
                                            <i class="fa-solid fa-circle-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="c-block3__total">
                                <span class="c-block3__productPriceTotal">1.990.000 <sup>đ</sup></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="c-block3__btn">
                    <div class="c-block3__coupon">
                        <input type="text" class="c-input c-block3__input" placeholder="Coupon Code">
                        <button href="#" class="c-btn1 c-btn1--colorBlack c-btn1--noneBorderRadius c-block3__apply">
                            Apply
                        </button>
                    </div>
                    <div class="c-block3__update">
                        <button href="#" class="c-btn1 c-btn1--colorBlack c-btn1--noneBorderRadius">
                            Update Cart
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="c-block3__right">
            <div class="c-cartTotal">
                <h3 class="c-title4 c-cartTotal__title">Cart Totals</h3>
                <ul class="c-cartTotal__list">
                    <li class="c-cartTotal__item">Subtotal
                        <span>9.990.000 <sup>đ</sup></span>
                    </li>
                    <li class="c-cartTotal__item">Shipping
                        <span>0 <sup>đ</sup></span>
                    </li>
                    <li class="c-cartTotal__item">Total
                        <span>9.990.000 <sup>đ</sup></span>
                    </li>
                    <li class="c-cartTotal__item c-cartTotal__item--size">Payable Total
                        <span>9.990.000 <sup>đ</sup></span>
                    </li>
                </ul>
                <a href="/checkout" class="c-btn1 c-btn1--noneBorderRadius c-cartTotal__btnCheckout">
                    Process to Checkout
                </a>
            </div>
        </div>
    </div>
</div>


<div class="c-dev-title2">c-block4</div>
<div class="l-container">
    <div class="c-block4">
        <div class="c-block4__title">
            <h2 class="c-title5">My Wishlist</h2>
        </div>
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
        </ul>
    </div>
</div>


<div class="c-dev-title2">c-block4</div>
<div class="l-container">
    <div class="c-block5">
        <form action="" class="c-block5__form">
            <div class="c-block5__area">
                <div class="c-block5__left">
                    <div class="c-block5__actionLogin">

                    </div>
                    <div class="c-block5__actionCoupon">

                    </div>
                    <div class="c-block5__content">
                        <h3 class="c-title4 c-block5__title">Chi Tiết Thanh Toán</h3>
                        <div class="c-block5__name">
                            <div class="c-group">
                                <label for="" class="c-text1">Tên*</label><br>
                                <input type="text" class="c-input">
                            </div>
                            <div class="c-group">
                                <label for="" class="c-text1">Họ*</label><br>
                                <input type="text" class="c-input">
                            </div>
                        </div>
                        <div class="c-group">
                            <label for="" class="c-text1">Đơn Vị</label><br>
                            <input type="text" class="c-input">
                        </div>
                        <div class="c-group">
                            <label for="" class="c-text1">Email*</label><br>
                            <input type="text" class="c-input">
                        </div>
                        <div class="c-group">
                            <label for="" class="c-text1">Số điện thoại*</label><br>
                            <input type="number" class="c-input"></input>
                        </div>
                        <div class="c-group">
                            <label for="" class="c-text1">Quốc gia*</label><br>
                            <input type="text" class="c-input">
                        </div>
                        <div class="c-group">
                            <label for="" class="c-text1">Địa chỉ*</label><br>
                            <input type="text" class="c-input">
                        </div>
                        <div class="c-group">
                            <label for="" class="c-text1">Tỉnh / Thành Phố*</label><br>
                            <input type="text" class="c-input">
                        </div>
                        <div class="c-group">
                            <label for="" class="c-text1">Quận / Huyện*</label><br>
                            <input type="text" class="c-input">
                        </div>
                        <div class="c-group">
                            <label for="" class="c-text1">Postcode / Zip*</label><br>
                            <input type="text" class="c-input">
                        </div>
                        <div class="c-group">
                            <label for="" class="c-text1">Ghi chú*</label><br>
                            <textarea type="text" class="c-input" placeholder="Ghi chú đơn hàng"></textarea>
                        </div>
                    </div>
                </div>
                <div class="c-block5__right">
                    <div class="c-cartTotal">
                        <h3 class="c-title4 c-cartTotal__title">Cart Totals</h3>
                        <ul class="c-cartTotal__list">
                            <li class="c-cartTotal__item">Subtotal
                                <span>9.990.000 <sup>đ</sup></span>
                            </li>
                            <li class="c-cartTotal__item">Shipping
                                <span>0 <sup>đ</sup></span>
                            </li>
                            <li class="c-cartTotal__item">Total
                                <span>9.990.000 <sup>đ</sup></span>
                            </li>
                            <li class="c-cartTotal__item c-cartTotal__item--size">Payable Total
                                <span>9.990.000 <sup>đ</sup></span>
                            </li>
                        </ul>
                        <a href="/checkout" class="c-btn1 c-btn1--noneBorderRadius c-cartTotal__btnCheckout">
                            Process to Cart
                        </a>
                    </div>
                    <div class="c-block5__payment">
                        <h3 class="c-title4 c-cartTotal__title">Phương thức thanh toán</h3>
                        <a href="#" class="c-btn1">
                            Đặt hàng
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>