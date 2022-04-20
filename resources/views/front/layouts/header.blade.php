<header class="c-header">
    <div class="c-header__heading">
        <div class="l-container">
            <div class="c-header__content1">
                <div class="c-header__text">
                    <p class="c-header__txt"><i class="fa-solid fa-check"></i>Miễn phí giao hàng cho tất cả hóa đơn trên 1 triệu.</p>
                </div>
                <div class="c-header__option">
                    <div class="c-header__language">
                        <span class="c-header__currentLanguage">English</span>
                        <i class="fa-solid fa-angle-down"></i>
                        <ul class="c-header__languageList">
                            <li class="c-header__languageItem"><a href="{!! route('user.change-language', ['en']) !!}">English</a></li>
                            <li class="c-header__languageItem"><a href="{!! route('user.change-language', ['vi']) !!}">Vietnam</a></li>
                            <li class="c-header__languageItem"><a href="{!! route('user.change-language', ['lo']) !!}">Laos</a></li>
                            <li class="c-header__languageItem"><a href="{!! route('user.change-language', ['lo']) !!}">Portugal</a></li>
                            <li class="c-header__languageItem"><a href="{!! route('user.change-language', ['lo']) !!}">Chinese</a></li>
                            <li class="c-header__languageItem"><a href="{!! route('user.change-language', ['lo']) !!}">Japanese</a></li>
                        </ul>
                    </div>
                    <div class="c-header__authen">
                        @auth 
                            <span href="/auth/login">My Account ({{Auth::user()->name}})</span>
                            <i class="fa-solid fa-angle-down"></i>
                            <ul class="c-header__accountList">
                                <li class="c-header__accountItem"><a href="#">My Account</a></li>
                                <li class="c-header__accountItem"><a href="#">Change Password</a></li>
                                <li class="c-header__accountItem"><a href="/auth/logout">Logout</a></li>
                            </ul>
                        @else
                            <i class="fa-solid fa-lock"></i>
                            <a href="/auth/login">Login</a> Or <a href="/auth/register">Resgister</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c-header__middle">
        <div class="l-container">
            <div class="c-header__content2">
                <div class="c-header__logo">
                    <a href="/">
                        <figure class="c-header__img">
                            <img src="https://templates.envytheme.com/ejon/default/assets/img/logo.png" alt="">
                        </figure>
                    </a>
                </div>
                <form action="" method="GET" class="c-header__search">
                    <div class="c-header__category">
                        <div class="c-header__catSelected">
                            <span class="c-header__currentCat">All Category</span>
                            <i class="fa-solid fa-angle-down icon-down"></i></i>
                            <ul class="c-header__catList">
                                <li data-value="1" class="c-header__catItem">All Category</li>
                                <li data-value="2" class="c-header__catItem">Laptop</li>
                                <li class="c-header__catItem">Computer</li>
                                <li class="c-header__catItem">Audio</li>
                                <li class="c-header__catItem">Gear</li>
                                <li class="c-header__catItem">Laptop</li>
                                <li class="c-header__catItem">Computer</li>
                                <li class="c-header__catItem">Audio</li>
                                <li class="c-header__catItem">Gear</li>
                                <li class="c-header__catItem">Laptop</li>
                                <li class="c-header__catItem">Computer</li>
                                <li class="c-header__catItem">Audio</li>
                                <li class="c-header__catItem">Gear</li>
                            </ul>
                        </div>
                        <div class="c-header__input">
                            <input type="search" name="s" placeholder="Tìm kiếm">
                            <div class="c-header__btnSearch">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="c-header__purchase">
                    <div class="c-header__wishlist">
                        <a href="/wishlist"><i class="fa-solid fa-heart"></i></a>
                    </div>
                    <div class="c-header__cart">
                        <a href="/cart"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                    <div class="c-header__price">
                        10.900.000 <sup>đ</sup>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- navbar: pc -->
<div class="c-header__sticky">
    <div class="l-container">
        <div class="c-header__navbar">
            <ul class="c-header__menuList">
                <li class="c-header__menuItem"><a href="#" class="c-header__link">Home</a></li>
                <li class="c-header__menuItem">
                    <a href="#" class="c-header__link">Computer<i class="fa-solid fa-angle-down"></i></i></a>
                    <ul class="c-header__childList">
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">PC Gaming</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">PC Office</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">PC Old</a></li>
                    </ul>
                </li>
                <li class="c-header__menuItem">
                    <a href="#" class="c-header__link">Laptop<i class="fa-solid fa-angle-down"></i></i></a>
                    <ul class="c-header__childList">
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Laptop Gaming</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Laptop Office</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Laptop Old</a></li>
                    </ul>
                </li>
                <li class="c-header__menuItem"><a href="#" class="c-header__link">Gear<i class="fa-solid fa-angle-down"></i></i></a></li>
                <li class="c-header__menuItem"><a href="#" class="c-header__link">Monitor<i class="fa-solid fa-angle-down"></i></i></a></li>
                <li class="c-header__menuItem"><a href="#" class="c-header__link">Network<i class="fa-solid fa-angle-down"></i></i></a></li>
                <li class="c-header__menuItem"><a href="/contact" class="c-header__link">Contact</a></li>
            </ul>
            <div class="c-header__phone">
                <span>Hotline: <a href="tel:0123456789">0123456789</a></span>

            </div>
        </div>
    </div>
</div>
<!-- end: navbar sp -->
<div class="c-header__nav">
    <div class="l-container">
        <div class="c-header__nav__content">
            <div class="c-header__nav__btn">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="c-header__nav__tel">
                <span class="c-header__phone"><span>Hotline: </span><a href="tel:1234567890">0123456789</a></span>
            </div>
        </div>
    </div>
    <div class="c-header__nav__menu">
        <div class="c-header__nav__position">
            <div class="l-container">
                <ul class="c-header__nav__list">
                    <li class="c-header__nav__item">
                        <a href="#" class="c-header__nav__link">Home</a>
                    </li>
                    <li class="c-header__nav__item">
                        <a href="#" class="c-header__nav__link">
                            <span>Computer</span>
                            <i class="fa-solid fa-plus"></i>
                            <i class="fa-solid fa-minus"></i>
                        </a>
                        <ul class="c-header__nav__subMenu">
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>PC Gaming</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>PC Office</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>PC Old</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="c-header__nav__item">
                        <a href="#" class="c-header__nav__link">
                            <span>Laptop</span>
                            <i class="fa-solid fa-plus"></i>
                            <i class="fa-solid fa-minus"></i>
                        </a>
                        <ul class="c-header__nav__subMenu">
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>PC Gaming</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>PC Office</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>PC Old</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="c-header__nav__item">
                        <a href="#" class="c-header__nav__link">
                            <span>Gear</span>
                            <i class="fa-solid fa-plus"></i>
                            <i class="fa-solid fa-minus"></i>
                        </a>
                    </li>
                    <li class="c-header__nav__item">
                        <a href="#" class="c-header__nav__link">
                            <span>Monitor</span>
                            <i class="fa-solid fa-plus"></i>
                            <i class="fa-solid fa-minus"></i>
                        </a>
                    </li>
                    <li class="c-header__nav__item">
                        <a href="#" class="c-header__nav__link">
                            <span>Network</span>
                            <i class="fa-solid fa-plus"></i>
                            <i class="fa-solid fa-minus"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end: navbar sp -->