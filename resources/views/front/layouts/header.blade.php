<header class="c-header">
    <div class="c-header__heading">
        <div class="l-container">
            <div class="c-header__content1">
                <div class="c-header__text">
                    <p class="c-header__txt"><i class="fa-solid fa-check"></i>{{ trans('header.heading.free-info') }}</p>
                </div>
                <div class="c-header__option">
                    <div class="c-header__language">
                        <span class="c-header__currentLanguage">
                            @if (Config::get('app.locale') == 'en')
                                {{ trans('header.heading.en') }}
                            @elseif (Config::get('app.locale') == 'vi')
                                {{ trans('header.heading.vi') }}
                            @elseif (Config::get('app.locale') == 'lo')
                                {{ trans('header.heading.lo') }}
                            @endif
                        </span>
                        <i class="fa-solid fa-angle-down"></i>
                        <ul class="c-header__languageList">
                            <li class="c-header__languageItem"><a
                                    href="{!! route('user.change-language', ['en']) !!}">{{ trans('header.heading.en') }}</a></li>
                            <li class="c-header__languageItem"><a
                                    href="{!! route('user.change-language', ['vi']) !!}">{{ trans('header.heading.vi') }}</a></li>
                            <li class="c-header__languageItem"><a
                                    href="{!! route('user.change-language', ['lo']) !!}">{{ trans('header.heading.lo') }}</a></li>
                        </ul>
                    </div>
                    <div class="c-header__authen">
                        @auth
                            <span href="/login">{{ trans('header.heading.my-acc') }} ({{ @Auth::user()->name }})</span>
                            <i class="fa-solid fa-angle-down"></i>
                            <ul class="c-header__accountList">
                                <li class="c-header__accountItem"><a href="#">{{ trans('header.heading.my-acc') }}</a></li>
                                <li class="c-header__accountItem"><a
                                        href="/user/change-password">{{ trans('header.heading.change-pass') }}</a></li>
                                <li class="c-header__accountItem"><a
                                        href="/user/logout">{{ trans('header.heading.logout') }}</a></li>
                            </ul>
                        @else
                            <i class="fa-solid fa-lock"></i>
                            <a href="/login">{{ trans('header.heading.login') }}</a> &#45; <a
                                href="/register">{{ trans('header.heading.register') }}</a>
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
                    <form action="/search" method="get" class="c-header__search">
                        @csrf
                        <div class="c-header__category">
                            <div class="c-header__catSelected">
                                <span class="c-header__currentCat">@php echo request()->cat ? request()->cat : trans('header.middle.all-cate') @endphp</span>
                                <input type="hidden" name="cat" value="0">
                                <i class="fa-solid fa-angle-down icon-down"></i></i>
                                <ul class="c-header__catList">
                                        <li class="c-header__catItem">{{ trans('header.middle.all-cate') }}</li>
                                    @foreach (App\Models\Category::where(['active'=> 1, 'parent_id' => 0])->orderBy('id', 'asc')->get() as $menuItem)
                                        <li class="c-header__catItem">{{ $menuItem->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="c-header__input">
                                <input type="search" name="s" value="{{ request()->s }}" placeholder="{{ trans('header.middle.search') }}">
                                <button type="submit" class="c-header__btnSearch">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="c-header__purchase">
                        <div class="c-header__wishlist">
                            <a href="/wishlist"><i class="fa-solid fa-heart"></i></a>
                            @php
                                if (Auth::check()) {
                                    $count = App\Models\Wishlist::where('user_id', @Auth::user()->id)->count();
                                } else {
                                    $count = 0;
                                }
                            @endphp
                            <span class="c-header__wTxt">{{ $count }} </span>
                        </div>
                        <div class="c-header__cart">
                            <a href="/cart"><i class="fa-solid fa-cart-shopping"></i></a>
                            <span class="c-header__cartTxt">{{ count((array) session('cart')) }}</span>
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
                    <li class="c-header__menuItem"><a href="#" class="c-header__link">{{ trans('header.navbar.home') }}</a>
                    </li>
                    @foreach (App\Models\Category::where('active', 1)->orderBy('id', 'asc')->get() as $menuItem)
                        </li>
                        <li class="c-header__menuItem">
                            @if ($menuItem->parent_id == 0)
                                <a href="/product/{{ $menuItem->id }}" class="c-header__link">{{ $menuItem->name }}
                                    @if (!$menuItem->children->isEmpty())
                                        <i class="fa-solid fa-angle-down"></i>
                                    @endif
                                </a>
                            @endif
                            @if (!$menuItem->children->isEmpty())
                                <ul class="c-header__childList">
                                    @foreach ( $menuItem->children as $subMenuItem )
                                        {{-- <li class="c-header__childItem"><a href="/product/{{ $menuItem->id }}/{{ $subMenuItem->id }}" class="c-header__childLink">{{ $subMenuItem->name }}</a></li> --}}
                                        <li class="c-header__childItem"><a href="/product/{{ $subMenuItem->id }}" class="c-header__childLink">{{ $subMenuItem->name }}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                    <li class="c-header__menuItem"><a href="/contact"
                            class="c-header__link">{{ trans('header.navbar.contact') }}</a></li>
                </ul>
                <div class="c-header__phone">
                    <span>{{ trans('header.navbar.hotline') }}: <a href="tel:0123456789">0123456789</a></span>

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
                    <span class="c-header__phone"><span>{{ trans('header.navbar.hotline') }}: </span><a
                            href="tel:1234567890">020 28266650</a></span>
                </div>
            </div>
        </div>
        <div class="c-header__nav__menu">
            <div class="c-header__nav__position">
                <div class="l-container">
                    <ul class="c-header__nav__list">
                        <li class="c-header__nav__item">
                            <a href="#" class="c-header__nav__link">{{ trans('header.navbar.hotline') }}</a>
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
                                <span>{{ trans('header.navbar.office') }}</span>
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
                                <span>{{ trans('header.navbar.graphics') }}</span>
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
                                <span>{{ trans('header.navbar.luxury') }}</span>
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
                                <span>{{ trans('header.navbar.contact') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end: navbar sp -->
