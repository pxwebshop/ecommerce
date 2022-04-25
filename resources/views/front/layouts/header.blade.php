<header class="c-header">
    <div class="c-header__heading">
        <div class="l-container">
            <div class="c-header__content1">
                <div class="c-header__text">
                    <p class="c-header__txt"><i class="fa-solid fa-check"></i>{{trans('header.heading.free-info')}}</p>
                </div>
                <div class="c-header__option">
                    <div class="c-header__language">
                        <span class="c-header__currentLanguage">
                            @if ( Config::get('app.locale') == 'en')
                            {{trans('header.heading.en')}}
                            @elseif ( Config::get('app.locale') == 'vi' )
                            {{trans('header.heading.vi')}}
                            @elseif ( Config::get('app.locale') == 'lo' )
                            {{trans('header.heading.lo')}}
                            @endif
                        </span>
                        <i class="fa-solid fa-angle-down"></i>
                        <ul class="c-header__languageList">
                            <li class="c-header__languageItem"><a href="{!! route('user.change-language', ['en']) !!}">{{trans('header.heading.en')}}</a></li>
                            <li class="c-header__languageItem"><a href="{!! route('user.change-language', ['vi']) !!}">{{trans('header.heading.vi')}}</a></li>
                            <li class="c-header__languageItem"><a href="{!! route('user.change-language', ['lo']) !!}">{{trans('header.heading.lo')}}</a></li>
                        </ul>
                    </div>
                    <div class="c-header__authen">
                        @auth 
                            <span href="/login">{{trans('header.heading.my-acc')}} ({{Auth::user()->name}})</span>
                            <i class="fa-solid fa-angle-down"></i>
                            <ul class="c-header__accountList">
                                <li class="c-header__accountItem"><a href="#">{{trans('header.heading.my-acc')}}</a></li>
                                <li class="c-header__accountItem"><a href="/user/change-password">{{trans('header.heading.change-pass')}}</a></li>
                                <li class="c-header__accountItem"><a href="/user/logout">{{trans('header.heading.logout')}}</a></li>
                            </ul>
                        @else
                            <i class="fa-solid fa-lock"></i>
                            <a href="/login">{{trans('header.heading.login')}}</a>	&#45; <a href="/register">{{trans('header.heading.register')}}</a>
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
                            <span class="c-header__currentCat">{{trans('header.middle.all-cate')}}</span>
                            <i class="fa-solid fa-angle-down icon-down"></i></i>
                            <ul class="c-header__catList">
                                <li data-value="1" class="c-header__catItem">{{trans('header.middle.all-cate')}}</li>
                                <li data-value="2" class="c-header__catItem">Gaming</li>
                                <li class="c-header__catItem">Macbook</li>
                                <li class="c-header__catItem">Văn phòng</li>
                                <li class="c-header__catItem">Đồ họa</li>
                                <li class="c-header__catItem">Cao cấp</li>
                            </ul>
                        </div>
                        <div class="c-header__input">
                            <input type="search" name="s" placeholder="{{trans('header.middle.search')}}">
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
                <li class="c-header__menuItem"><a href="#" class="c-header__link">{{trans('header.navbar.home')}}</a></li>
                <li class="c-header__menuItem">
                    <a href="/product" class="c-header__link">Gaming<i class="fa-solid fa-angle-down"></i></i></a>
                    <ul class="c-header__childList">
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Asus</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Hp</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Lenovo</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Acer</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Dell</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">MSI</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Surface</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">LG</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Gigabyte</a></li>
                    </ul>
                </li>
                <li class="c-header__menuItem">
                    <a href="#" class="c-header__link">Macbook<i class="fa-solid fa-angle-down"></i></i></a>
                    <ul class="c-header__childList">
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Air M1</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Pro 13 inch</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Pro 14 inch</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Pro 16 inch</a></li>
                    </ul>
                </li>
                <li class="c-header__menuItem"><a href="#" class="c-header__link">{{trans('header.navbar.office')}}<i class="fa-solid fa-angle-down"></i></i></a>
                    <ul class="c-header__childList">
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Asus</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Hp</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Lenovo</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Acer</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Dell</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">MSI</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Surface</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">LG</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Gigabyte</a></li>
                    </ul>
                </li>
                <li class="c-header__menuItem"><a href="#" class="c-header__link">{{trans('header.navbar.graphics')}}<i class="fa-solid fa-angle-down"></i></i></a>
                    <ul class="c-header__childList">
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Asus</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Hp</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Lenovo</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Acer</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Dell</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">MSI</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Surface</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">LG</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Gigabyte</a></li>
                    </ul>
                </li>
                <li class="c-header__menuItem"><a href="#" class="c-header__link">{{trans('header.navbar.luxury')}}<i class="fa-solid fa-angle-down"></i></i></a>
                    <ul class="c-header__childList">
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Asus</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Hp</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Lenovo</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Acer</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Dell</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">MSI</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Surface</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">LG</a></li>
                        <li class="c-header__childItem"><a href="#" class="c-header__childLink">Gigabyte</a></li>
                    </ul>
                </li>
                <li class="c-header__menuItem"><a href="/contact" class="c-header__link">{{trans('header.navbar.contact')}}</a></li>
            </ul>
            <div class="c-header__phone">
                <span>{{trans('header.navbar.hotline')}}: <a href="tel:0123456789">0123456789</a></span>

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
                <span class="c-header__phone"><span>{{trans('header.navbar.hotline')}}: </span><a href="tel:1234567890">020 28266650</a></span>
            </div>
        </div>
    </div>
    <div class="c-header__nav__menu">
        <div class="c-header__nav__position">
            <div class="l-container">
                <ul class="c-header__nav__list">
                    <li class="c-header__nav__item">
                        <a href="#" class="c-header__nav__link">{{trans('header.navbar.hotline')}}</a>
                    </li>
                    <li class="c-header__nav__item">
                        <a href="#" class="c-header__nav__link">
                            <span>Gaming</span>
                            <i class="fa-solid fa-plus"></i>
                            <i class="fa-solid fa-minus"></i>
                        </a>
                        <ul class="c-header__nav__subMenu">
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Asus</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Hp</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Lenovo</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Acer</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Dell</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>MSI</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Surface</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>LG</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Gigabyte</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="c-header__nav__item">
                        <a href="#" class="c-header__nav__link">
                            <span>Macbook</span>
                            <i class="fa-solid fa-plus"></i>
                            <i class="fa-solid fa-minus"></i>
                        </a>
                        <ul class="c-header__nav__subMenu">
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Air M1</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Pro 13 inch</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Pro 14 inch</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Pro 16 inch</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="c-header__nav__item">
                        <a href="#" class="c-header__nav__link">
                            <span>{{trans('header.navbar.office')}}</span>
                            <i class="fa-solid fa-plus"></i>
                            <i class="fa-solid fa-minus"></i>
                        </a>
                        <ul class="c-header__nav__subMenu">
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Asus</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Hp</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Lenovo</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Acer</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Dell</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>MSI</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Surface</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>LG</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Gigabyte</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="c-header__nav__item">
                        <a href="#" class="c-header__nav__link">
                            <span>{{trans('header.navbar.graphics')}}</span>
                            <i class="fa-solid fa-plus"></i>
                            <i class="fa-solid fa-minus"></i>
                        </a>
                        <ul class="c-header__nav__subMenu">
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Asus</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Hp</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Lenovo</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Acer</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Dell</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>MSI</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Surface</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>LG</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Gigabyte</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="c-header__nav__item">
                        <a href="#" class="c-header__nav__link">
                            <span>{{trans('header.navbar.luxury')}}</span>
                            <i class="fa-solid fa-plus"></i>
                            <i class="fa-solid fa-minus"></i>
                        </a>
                        <ul class="c-header__nav__subMenu">
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Asus</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Hp</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Lenovo</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Acer</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Dell</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>MSI</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Surface</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>LG</span></a>
                            </li>
                            <li class="c-header__nav__subItem">
                                <a href="#"><span>Gigabyte</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="c-header__nav__item">
                        <a href="#" class="c-header__nav__link">
                            <span>{{trans('header.navbar.contact')}}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end: navbar sp -->