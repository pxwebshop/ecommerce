<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1170/1170576.png">
    <link href="{{ asset('css/front/style.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/front/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/front/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/front/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link href="{{ asset('css/front/slick.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <style>
        /*------------------------------------------------------------
 Reset
------------------------------------------------------------*/
        html,
        body,
        div,
        span,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        abbr,
        address,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        samp,
        small,
        strong,
        sub,
        sup,
        var,
        b,
        i,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        dialog,
        figure,
        footer,
        header,
        nav,
        section,
        time,
        mark,
        audio,
        video {
            font-size: 1em;
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            box-sizing: border-box;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section,
        main {
            display: block;
        }

        html {
            font-size: 62.5%;
        }

        body {
            -webkit-text-size-adjust: 100%;
        }

        body,
        table,
        input,
        textarea,
        select,
        option,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Lato", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: bold;
        }

        table,
        input,
        textarea,
        select,
        option {
            line-height: 1.1;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        :focus {
            outline: 0;
        }

        ins {
            text-decoration: none;
        }

        del {
            text-decoration: line-through;
        }

        img {
            vertical-align: top;
        }

        a {
            transition: 0.3s ease-in-out;
            text-decoration: none;
            color: #292929;
        }

        a:hover {
            opacity: 0.8;
            filter: alpha(opacity=80);
            -ms-filter: "alpha(opacity=80)";
        }

        form label {
            cursor: pointer;
        }

        /*------------------------------------------------------------
for develop
------------------------------------------------------------*/
        #__bs_notify__ {
            opacity: 0.3 !important;
            font-size: 5px !important;
            line-height: 100% !important;
            padding: 0 5px 0 5px !important;
            border-radius: 0 !important;
        }

        .c-dev-title1 {
            background: #000;
            color: #fff;
            line-height: 1;
            padding: 6px 0 6px 15px;
            font-size: 1.6rem;
            margin: 60px 0 20px 0;
        }

        .c-dev-title2 {
            background: #888;
            color: #fff;
            line-height: 1;
            padding: 6px 0 6px 30px;
            font-size: 1.3rem;
            margin: 50px 0 10px 0;
        }

        .c-dev-message1 {
            top: 0;
            left: 0;
            background: #f00;
            color: #fff;
            z-index: 9999;
            position: fixed;
            line-height: 1;
            padding: 3px 6px;
            opacity: 0.6;
            font-size: 8px;
        }

        .toast {
            font-family: Lato();
            opacity: 1 !important;
        }

        .toast-title,
        .toast-message {
            font-size: 1.4rem;
            line-height: 1.5;
        }

        @media screen and (min-width: 768px) {
            .sp-only {
                display: none !important;
            }
        }

        @media screen and (max-width: 767px) {
            .pc-only {
                display: none !important;
            }
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /*------------------------------------------------------------
breadcrumb
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        .c-breadcrumb1 {
            display: flex;
            justify-content: space-between;
        }

        .c-breadcrumb1__title {
            font-size: 3rem;
            color: #292929;
        }

        .c-breadcrumb1__url {
            margin: auto 0;
        }

        .c-breadcrumb1__url a {
            font-size: 1.6rem;
            color: #292929;
        }

        .c-breadcrumb1__current {
            color: rgba(66, 64, 64, 0.8);
            font-size: 1.6rem;
        }

        /*------------------------------------------------------------
layout
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        body {
            width: 100%;
            padding: 0;
            background-color: #f9f9f9;
        }

        body.is-fixed {
            position: fixed;
        }

        /*
------------------------------------------------------------*/
        .l-content {
            max-width: 1040px;
            width: 100%;
            margin: 0 auto;
            padding: 0 30px;
            position: relative;
            z-index: 2;
        }

        @media screen and (max-width: 767px) {
            .l-content {
                max-width: 100%;
            }
        }

        /*
------------------------------------------------------------*/
        .l-container {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            padding: 0 30px;
            position: relative;
            z-index: 2;
        }

        @media (min-width: 1400px) {
            .l-container {
                max-width: 1320px;
            }
        }

        @media screen and (max-width: 767px) {
            .l-container {
                max-width: 100%;
                padding: 0 15px;
            }
        }

        .c-alert {
            padding: 3px 0 0 0;
            font-size: 1.4rem;
            color: #ed1d24;
            font-family: "Lato", sans-serif;
        }

        .twitter-typeahead {
            width: 100%;
        }

        .tt-menu {
            background-color: #fff;
            box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.1);
        }

        .tt-suggestion {
            display: flex;
            margin: 5px;
            border-bottom: 1px solid #f2f2f2;
        }

        .tt-suggestion img {
            width: 100px;
        }

        .tt-suggestion a {
            display: inline-block;
            padding: 8px 15px;
            line-height: 1.5;
            font-size: 1.6rem;
            width: 100%;
            color: #292929;
            overflow: hidden;
            opacity: 1;
        }

        .tt-suggestion:hover {
            background-color: #dce3fa;
        }

        .list-group-item {
            color: #292929;
            padding: 8px 15px;
            line-height: 1.5;
            font-size: 1.6rem;
        }

        /*------------------------------------------------------------
side
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        /*------------------------------------------------------------
footer
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        .c-footer__list {
            display: flex;
            flex-wrap: wrap;
            margin-left: -24px;
        }

        .c-footer__wrap {
            width: 25%;
            padding-left: 24px;
            margin-bottom: 30px;
        }

        @media screen and (max-width: 991px) {
            .c-footer__wrap {
                width: 50%;
            }
        }

        @media screen and (max-width: 576px) {
            .c-footer__wrap {
                width: 100%;
            }
        }

        .c-footer__item .c-text1 {
            margin-bottom: 0;
        }

        .c-footer__content {
            padding: 100px 0 70px;
        }

        .c-footer__title {
            font-size: 2.8rem;
            margin-bottom: 20px;
            color: #292929;
        }

        .c-footer__txtBold {
            font-weight: 600;
            color: #292929;
            font-size: 1.8rem;
        }

        .c-footer__social {
            margin-top: 20px;
        }

        .c-footer__socialItem {
            display: inline;
            font-size: 2rem;
            padding: 6px 8px;
            margin-right: 12px;
            width: 50px;
            height: 50px;
            border: 1px solid #ccc;
            border-radius: 50%;
            cursor: pointer;
        }

        .c-footer__socialItem a {
            opacity: 1;
        }

        .c-footer__socialItem:hover {
            background-color: #113366;
        }

        .c-footer__socialItem:hover i {
            color: #fff;
            opacity: 1;
        }

        .c-footer__single {
            font-size: 1.6rem;
        }

        .c-footer__singleItem {
            padding-bottom: 10px;
        }

        .c-footer__singleItem a {
            color: #656565;
            transition: 0.5s;
            line-height: 1.5;
        }

        .c-footer__singleItem a:hover {
            color: #ed1d24;
            letter-spacing: 1px;
        }

        .c-footer__form {
            margin-top: 20px;
        }

        .c-footer__form input {
            color: #656565;
            height: 60px;
            font-size: 1.6rem;
            padding-left: 15px;
            box-sizing: border-box;
            width: 100%;
            border: 1px solid #ccc;
        }

        .c-footer__btn {
            margin-top: 10px;
            background-color: #292929;
            color: #fff;
            padding: 10px 35px;
            font-size: 1.6rem;
            line-height: 1.5;
            border: none;
            cursor: pointer;
        }

        .c-footer__footing {
            padding-top: 30px;
            border-top: 1px solid #ccc;
            text-align: center;
        }

        /*------------------------------------------------------------
header
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        .c-header {
            z-index: 11;
            position: relative;
        }

        .c-header__heading {
            background-color: #113366;
            padding: 15px 0;
            color: #fff;
            font-size: 1.6rem;
            height: 100%;
            line-height: 1.5;
            position: relative;
            z-index: 10;
        }

        .c-header__content1 {
            display: flex;
            justify-content: space-between;
        }

        @media screen and (max-width: 670px) {
            .c-header__content1 {
                flex-wrap: wrap;
                justify-content: center;
            }
        }

        .c-header i {
            margin: 0 5px;
        }

        .c-header__txt {
            text-align: center;
        }

        .c-header__txt i {
            margin-right: 5px;
            margin-left: 0 !important;
        }

        @media screen and (max-width: 670px) {
            .c-header__txt {
                width: 100%;
            }
        }

        .c-header__option {
            display: flex;
            justify-content: center;
        }

        @media screen and (max-width: 369px) {
            .c-header__option {
                flex-wrap: wrap;
            }
        }

        @media screen and (max-width: 670px) {
            .c-header__option {
                width: 100%;
            }
        }

        .c-header__language {
            cursor: pointer;
            position: relative;
        }

        .c-header__languageItem {
            font-size: 1.6rem;
            width: 150px;
            color: #fff;
        }

        .c-header__languageList {
            display: none;
            position: absolute;
            top: 36px;
            height: auto;
            background-color: #fff;
            color: #656565;
            box-shadow: 0 0 1px #292929;
            overflow-x: hidden;
        }

        .c-header__languageItem {
            color: #292929;
            border-bottom: 1px solid #ccc;
        }

        .c-header__languageItem a {
            display: inline-block;
            padding: 10px 40px 10px 20px;
            width: 100%;
            color: #292929;
        }

        .c-header__languageItem a:hover {
            background-color: #113366;
            color: #fff !important;
            opacity: 1;
        }

        .c-header__authen {
            padding-left: 7px;
            margin-left: 8px;
            border-left: 1px solid #fff;
        }

        .c-header__authen a {
            color: #fff;
            opacity: 1;
        }

        .c-header__authen a:hover {
            color: #ed1d24;
        }

        .c-header__authen p {
            cursor: pointer;
        }

        .c-header__authen span {
            cursor: pointer;
            margin-left: 5px;
        }

        .c-header__accountList {
            display: none;
            position: absolute;
            top: 36px;
            height: auto;
            background-color: #fff;
            color: #656565;
            box-shadow: 0 0 1px #292929;
            overflow: hidden;
        }

        .c-header__accountItem {
            border-bottom: 1px solid #ccc;
        }

        .c-header__accountItem a {
            display: inline-block;
            padding: 10px 40px 10px 20px;
            width: 100%;
            color: #292929 !important;
        }

        .c-header__accountItem a:hover {
            background-color: #113366;
            color: #fff !important;
            opacity: 1;
        }

        .c-header__middle {
            background-color: #15407f;
        }

        .c-header__content2 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            font-size: 1.6rem;
            color: #fff;
            padding: 20px 0;
        }

        .c-header__logo {
            margin: auto 0;
            width: 25%;
        }

        @media screen and (max-width: 992px) {
            .c-header__logo {
                width: 100%;
                text-align: center;
            }
        }

        .c-header__search {
            width: 50%;
            margin: 0 auto;
        }

        @media screen and (max-width: 992px) {
            .c-header__search {
                width: 100%;
                margin: 20px 0 5px;
                z-index: 1;
            }
        }

        .c-header__category {
            display: flex;
            width: 100%;
            background-color: #f6f6f6;
            padding: 2px 0 2px 5px;
            border-radius: 10px;
        }

        @media screen and (max-width: 555px) {
            .c-header__category {
                flex-wrap: wrap;
                padding: 0 5px;
            }
        }

        .c-header__catSelected {
            width: 30%;
            margin: auto;
            height: 55px;
            padding: 18px 5px 15px 15px;
            background-color: #113366;
            border-radius: 5px;
            cursor: pointer;
            position: relative;
        }

        @media screen and (max-width: 555px) {
            .c-header__catSelected {
                width: 100%;
            }
        }

        .c-header__catSelected .icon-down {
            position: absolute;
            top: 18px;
            right: 15px;
        }

        .c-header__catList {
            display: none;
            background-color: #fff;
            margin-top: 20px;
            color: #292929;
            padding: 10px 0;
            box-shadow: 0 0 5px #292929;
            height: auto;
        }

        @media screen and (max-width: 555px) {
            .c-header__catList {
                padding-top: 60px;
                margin-top: 25px;
            }
        }

        .c-header__catItem {
            padding: 10px 15px;
        }

        .c-header__catItem:hover {
            background-color: #113366;
            color: #fff;
        }

        .c-header__input {
            position: relative;
            margin-left: 20px;
            width: 70%;
        }

        @media screen and (max-width: 555px) {
            .c-header__input {
                width: 100%;
                margin-left: 0;
            }
        }

        .c-header__input input {
            border-radius: 10px;
            border: none;
            background-color: #fff;
            padding: 8px 15px;
            height: 55px;
            width: 100%;
            font-size: 1.6rem;
            color: #292929;
            font-weight: 600;
            box-sizing: border-box;
        }

        .c-header__btnSearch {
            position: absolute;
            top: 4px;
            right: 2px;
            background-color: #113366;
            height: 45px;
            width: 45px;
            border-color: #113366;
            border-radius: 50%;
            margin-right: 5px;
            cursor: pointer;
        }

        .c-header__btnSearch i {
            position: absolute;
            top: 14px;
            right: 10px;
            color: #fff;
        }

        .c-header__purchase {
            width: 25%;
            text-align: right;
            margin: auto;
        }

        @media screen and (max-width: 992px) {
            .c-header__purchase {
                width: 100%;
                text-align: center;
            }
        }

        .c-header__wishlist,
        .c-header__cart,
        .c-header__price {
            display: inline-block;
            font-size: 2rem;
            padding: 5px;
            position: relative;
        }

        .c-header__wishlist a,
        .c-header__cart a,
        .c-header__price a {
            opacity: 1;
            color: #fff;
        }

        .c-header__wishlist a:hover,
        .c-header__cart a:hover,
        .c-header__price a:hover {
            opacity: 1;
            color: #ed1d24;
        }

        .c-header__wTxt,
        .c-header__cartTxt {
            position: absolute;
            top: -10px;
            right: 0;
            font-size: 1.6rem;
        }

        .c-header__sticky {
            background-color: #fff;
            z-index: 10;
            position: -webkit-sticky;
            position: sticky;
            box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
            top: 0;
        }

        @media screen and (max-width: 767px) {
            .c-header__sticky {
                display: none;
            }
        }

        .c-header__navbar {
            display: flex;
            justify-content: space-between;
            height: 54px;
            font-size: 1.6rem;
        }

        @media screen and (max-width: 1140px) {
            .c-header__navbar {
                text-align: center;
                flex-wrap: wrap;
                height: 100%;
            }
        }

        .c-header__menuList {
            font-size: 0;
        }

        @media screen and (max-width: 1140px) {
            .c-header__menuList {
                width: 100%;
            }
        }

        .c-header__menuItem {
            display: inline-block;
            font-size: 1.6rem;
            position: relative;
        }

        .c-header__menuItem:hover {
            background-color: #113366;
        }

        .c-header__menuItem:hover .c-header__childList {
            display: block;
        }

        .c-header__menuItem:hover .c-header__link {
            color: #fff;
            opacity: 1;
        }

        .c-header__link {
            display: inline-block;
            line-height: 3.375;
            font-weight: 600;
            padding: 0 20px;
        }

        .c-header__link i {
            margin-left: 10px;
        }

        @media screen and (max-width: 992px) {
            .c-header__link {
                padding: 0 10px;
            }
        }

        .c-header__phone {
            line-height: 3.375;
            font-weight: 600;
        }

        .c-header__phone span {
            color: #ed1d24;
        }

        .c-header__phone a:hover {
            color: #ed1d24;
        }

        @media screen and (max-width: 1140px) {
            .c-header__phone {
                width: 100%;
            }
        }

        .c-header__childList {
            position: absolute;
            background-color: #fff;
            box-shadow: 0 0 3px #292929;
            width: 250px;
            display: none;
        }

        .c-header__childItem {
            width: 250px;
        }

        .c-header__childItem:hover {
            background-color: #113366;
        }

        .c-header__childLink {
            display: inline-block;
            width: 100%;
            padding: 20px;
            font-weight: 600;
        }

        .c-header__childLink:hover {
            color: #fff;
            opacity: 1;
        }

        @media screen and (max-width: 992px) {
            .c-header__childLink {
                text-align: left;
            }
        }

        .c-header__nav {
            font-size: 1.6rem;
            display: none;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            background-color: white;
            z-index: 10;
        }

        @media screen and (max-width: 767px) {
            .c-header__nav {
                display: block;
            }
        }

        .c-header__nav__content {
            height: 54px;
            display: flex;
            justify-content: space-between;
            font-weight: 600;
            position: relative;
        }

        .c-header__nav__btn {
            margin: auto 0;
            font-size: 3rem;
        }

        .c-header__nav__tel {
            margin: auto 0;
        }

        .c-header__nav__menu {
            display: none;
            position: relative;
            z-index: 11;
        }

        .c-header__nav__position {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .c-header__nav__list {
            font-size: 1.6rem;
            font-weight: 600;
            box-shadow: 0 3px 3px #113366;
            height: 250px;
            overflow-y: scroll;
        }

        .c-header__nav__item {
            background-color: #fff;
            border-top: 1px solid #e3efed;
            padding: 12px;
        }

        .c-header__nav__link {
            display: flex;
            justify-content: space-between;
        }

        .c-header__nav__link i:nth-child(3) {
            display: none;
        }

        .c-header__nav__subMenu {
            margin: 0 30px;
            display: none;
        }

        .c-header__nav__subItem {
            padding: 12px 0;
            margin: 12px 0 -12px;
            border-top: 1px solid #e3efed;
        }

        .c-header__nav__subItem a {
            display: inline-block;
            width: 100%;
        }

        /*------------------------------------------------------------
btn1
------------------------------------------------------------*/
        .c-btn1 {
            font-size: 1.6rem;
            line-height: 1.5;
            font-weight: 500;
            color: #fff;
            display: inline-block;
            border: none;
            background-color: #113366;
            padding: 15px 35px;
            border-radius: 5px;
            text-decoration: none;
            position: relative;
            z-index: 1;
            cursor: pointer;
        }

        .c-btn1:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 5px;
            background-color: #113366;
            z-index: -2;
        }

        .c-btn1:before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            height: 100%;
            border-radius: 4px;
            background-color: #fff;
            transition: all 0.5s;
            z-index: -1;
        }

        .c-btn1:hover {
            color: #113366;
            opacity: 1;
        }

        .c-btn1:hover:before {
            width: 100%;
        }

        .c-btn1 i {
            margin-right: 5px;
        }

        .c-btn1--hoverRed:hover {
            background-color: #ed1d24;
            color: #fff;
        }

        .c-btn1--hoverRed:before,
        .c-btn1--hoverRed:after {
            content: none;
        }

        .c-btn1--hoverBlack::before {
            background-color: #292929;
        }

        .c-btn1--hoverBlack:hover {
            color: #fff;
        }

        .c-btn1--noneBorderRadius {
            border-radius: 0;
        }

        .c-btn1--noneBorderRadius:before,
        .c-btn1--noneBorderRadius:after {
            border-radius: 0;
        }

        .c-btn1--noneBorderRadius::before {
            background-color: #292929;
        }

        .c-btn1--noneBorderRadius:hover {
            color: #fff;
        }

        .c-btn1--colorBlack:after {
            background-color: #292929;
        }

        .c-btn1--colorBlack:before {
            background-color: #113366;
        }

        .c-btn1--colorBlack:hover {
            color: #fff;
        }

        .c-btn1--border {
            border-radius: 0;
            padding: 12px 30px;
            border: 1px solid #113366;
        }

        .c-btn1--border:before,
        .c-btn1--border:after {
            border-radius: 0;
        }

        /*
------------------------------------------------------------*/
        /*------------------------------------------------------------
btn2
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        /*------------------------------------------------------------
title
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        .c-title1 {
            border-bottom: 1px solid #ccc;
            max-width: 670px;
            margin: 0 auto 50px;
            width: 100%;
            text-align: center;
        }

        .c-title1__txt {
            font-size: 3rem;
            line-height: 1.5;
            font-weight: 600;
            position: relative;
            top: 20px;
            background-color: #f6f6f6;
            display: inline-block;
            padding: 0 15px;
        }

        .c-title1--left {
            text-align: left;
        }

        .c-title2 {
            font-size: 2.2rem;
            margin: 10px 0;
        }

        .c-title3 {
            font-size: 1.6rem;
            color: #656565;
        }

        .c-title3--colorGrey {
            color: #ccc;
            font-weight: 500;
            margin-bottom: 12px;
        }

        .c-title4 {
            font-size: 2.5rem;
            padding-bottom: 15px;
            border-bottom: 1px solid #ccc;
            position: relative;
        }

        .c-title4::after {
            content: "";
            position: absolute;
            border: 1px solid #113366;
            width: 100px;
            bottom: 0;
            left: 0;
        }

        .c-title5 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #292929;
        }

        .c-title6 {
            font-size: 2rem;
            font-weight: 600;
            color: #292929;
        }

        /*------------------------------------------------------------
icon
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        /*------------------------------------------------------------
form
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        /*------------------------------------------------------------
text
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        .c-text1 {
            font-size: 1.6rem;
            margin-bottom: 30px;
            color: #656565;
            line-height: 1.8;
        }

        @media screen and (max-width: 991px) {
            .c-text1 {
                font-size: 1.5rem;
            }
        }

        .c-text1--bold {
            font-weight: 600;
            color: #292929;
        }

        .c-text2__link,
        .c-text2__important {
            font-size: 1.5rem;
            color: #656565;
        }

        .c-text2__link {
            font-weight: 600;
            opacity: 1;
        }

        .c-text2__link:hover {
            color: #ed1d24;
        }

        .c-text3__txt {
            font-size: 1.6rem;
            color: #656565;
            text-align: center;
        }

        /*------------------------------------------------------------
navi
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        /*------------------------------------------------------------
img
------------------------------------------------------------*/
        /*------------------------------------------------------------
list1
------------------------------------------------------------*/
        .c-list1__list {
            display: flex;
            flex-wrap: wrap;
            margin-left: -24px;
        }

        .c-list1__item {
            width: 25%;
            padding-left: 24px;
        }

        @media screen and (max-width: 767px) {
            .c-list1__item {
                width: 50%;
            }
        }

        @media screen and (max-width: 576px) {
            .c-list1__item {
                width: 100%;
            }
        }

        .c-list1__item--col3 {
            width: 33.33%;
        }

        @media screen and (max-width: 767px) {
            .c-list1__item--col3 {
                width: 100%;
            }
        }

        .c-list1__wrap {
            margin-bottom: 30px;
        }

        .c-list1__wrap:hover .c-list1__actionList {
            display: block;
            height: auto;
        }

        .c-list1__wrap:hover .c-tag1 {
            background-color: #ed1d24;
        }

        .c-list1__wrap:hover .c-price1 {
            color: #ed1d24;
        }

        .c-list1__img {
            position: relative;
            overflow: hidden;
        }

        .c-list1__img img {
            width: 100%;
            transition: 0.5s;
        }

        .c-list1__img:hover img {
            transform: scale(1.1);
        }

        .c-list1__actionList {
            position: absolute;
            bottom: 0;
            padding: 15px;
            width: 100%;
            height: 0;
            text-align: center;
            display: none;
            bottom: 10px;
        }

        .c-list1__actionItem {
            display: inline-block;
            margin-right: 10px;
            background-color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 50px;
            cursor: pointer;
            transition: 1s ease-in-out;
        }

        .c-list1__actionItem:hover {
            background-color: #113366;
        }

        .c-list1__actionItem:hover a {
            color: #fff;
        }

        .c-list1__actionItem a {
            font-size: 1.6rem;
            line-height: 2.5;
            color: #113366;
            opacity: 1;
        }

        .c-list1__content {
            margin-top: 15px;
        }

        .c-list1__name {
            font-size: 2.2rem;
            margin-bottom: 10px;
        }

        .c-list2__list {
            display: flex;
            flex-wrap: wrap;
            margin-left: -24px;
        }

        @media screen and (max-width: 767px) {
            .c-list2__list {
                margin-left: 0;
            }
        }

        .c-list2__item {
            width: 50%;
            padding-left: 24px;
            margin-bottom: 30px;
            transition: 1s;
        }

        @media screen and (max-width: 767px) {
            .c-list2__item {
                width: 100%;
                padding-left: 0px;
            }
        }

        .c-list2__item:hover {
            transform: translateY(-5px);
        }

        .c-list2__item:hover .c-list2__price--discount {
            background-color: #113366;
        }

        .c-list2__wrap {
            background-color: #f0e9ea;
            display: flex;
            flex-wrap: wrap;
            padding: 35px 25px;
            height: 100%;
        }

        .c-list2__wrap--reserve {
            flex-direction: row-reverse;
            background-color: #dce3fa;
        }

        .c-list2__img,
        .c-list2__content {
            width: 50%;
            padding: 12px;
        }

        @media screen and (max-width: 992px) {

            .c-list2__img,
            .c-list2__content {
                width: 100%;
            }
        }

        .c-list2__content--width {
            width: 66.66667%;
        }

        @media screen and (max-width: 992px) {
            .c-list2__content--width {
                width: 100%;
            }
        }

        .c-list2__img img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: auto;
        }

        .c-list2__img--width {
            width: 33.33333%;
        }

        @media screen and (max-width: 992px) {
            .c-list2__img--width {
                width: 100%;
            }
        }

        .c-list2__title {
            font-size: 2.2rem;
            margin-bottom: 5px;
        }

        .c-list2__txt {
            font-size: 1.6rem;
            margin-bottom: 10px;
            color: #656565;
            line-height: 1.8;
        }

        .c-list2__btn {
            color: #292929;
            font-size: 1.6rem;
            border-bottom: 1px solid #292929;
            text-decoration: none;
        }

        .c-list3__list {
            display: flex;
            flex-wrap: wrap;
            margin-left: -24px;
            justify-content: space-around;
        }

        .c-list3__item {
            width: 33.33%;
            padding-left: 24px;
            margin-bottom: 30px;
        }

        .c-list3__item:hover .c-tag2 {
            background-color: #113366;
        }

        @media screen and (max-width: 767px) {
            .c-list3__item {
                width: 50%;
            }
        }

        @media screen and (max-width: 576px) {
            .c-list3__item {
                width: 100%;
            }
        }

        .c-list3__wrap {
            padding: 20px;
            border: 1px solid #292929;
            height: 100%;
        }

        .c-list3__img {
            position: relative;
            text-align: center;
        }

        .c-list3__img img {
            max-width: 100%;
            height: 100%;
        }

        .c-list3__content {
            margin-top: 25px;
        }

        .c-list3__name {
            font-size: 2.2rem;
            margin: 10px 0;
        }

        .c-list4__list {
            display: flex;
            flex-wrap: wrap;
            padding: 24px 0 24px;
            background-color: #fff;
        }

        .c-list4__wrap {
            width: 25%;
            border-left: 1px solid #ccc;
            padding: 0 24px;
        }

        @media screen and (max-width: 500px) {
            .c-list4__wrap {
                width: 50%;
                border-left: none;
                margin-bottom: 30px;
            }
        }

        .c-list4__wrap:nth-child(1) {
            border-left: none;
        }

        .c-list4__item {
            text-align: center;
        }

        .c-list4__item i {
            font-size: 3.5rem;
            color: #656565;
            margin-bottom: 5px;
        }

        .c-list4__txt {
            margin-left: 10px;
            color: #292929;
            font-size: 1.5rem;
            font-weight: 500;
        }

        @media screen and (max-width: 767px) {
            .c-list4__txt {
                margin-left: 0;
            }
        }

        .c-list5 {
            background-color: #e3efed;
            padding: 12px;
        }

        .c-list5__list {
            display: flex;
            flex-wrap: wrap;
        }

        .c-list5__item {
            width: 33.33%;
        }

        @media screen and (max-width: 767px) {
            .c-list5__item {
                width: 100%;
            }
        }

        .c-list5__item--flex {
            display: flex;
        }

        .c-list5__img {
            text-align: center;
            margin: auto;
        }

        .c-list5__img img {
            max-width: 100%;
            display: inline-block;
            height: auto;
            vertical-align: middle;
        }

        .c-list5__content {
            text-align: center;
            justify-content: center;
            margin: auto;
        }

        @media screen and (max-width: 767px) {
            .c-list5__content {
                padding: 30px 0;
            }
        }

        .c-list5__txt1 {
            font-size: 3rem;
        }

        @media screen and (max-width: 767px) {
            .c-list5__txt1 {
                font-size: 1.6rem;
            }
        }

        .c-list5__title {
            font-size: 4.5rem;
            margin: 15px 0;
        }

        @media screen and (max-width: 767px) {
            .c-list5__title {
                font-size: 2rem;
            }
        }

        .c-list5__txt2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            letter-spacing: 5px;
        }

        @media screen and (max-width: 767px) {
            .c-list5__txt2 {
                font-size: 1.5rem;
            }
        }

        .c-list5__txt1,
        .c-list5__title,
        .c-list5__txt2 {
            color: #292929;
        }

        .c-list6__list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .c-list6__item {
            font-size: 1.6rem;
            margin: 0 10px 10px;
            font-weight: 600;
            color: #292929;
        }

        .c-list6__item:hover {
            cursor: pointer;
            color: #ed1d24;
        }

        .c-list6 .is-active {
            border-bottom: 1px solid #ed1d24;
            padding-bottom: 5px;
            color: #ed1d24;
        }

        .c-list7__list {
            display: flex;
            flex-wrap: wrap;
            margin-left: -24px;
        }

        .c-list7__wrap {
            width: 33.33%;
            padding-left: 24px;
        }

        @media screen and (max-width: 576px) {
            .c-list7__wrap {
                width: 100%;
            }
        }

        .c-list7__item:hover .c-title2 {
            color: #ed1d24;
        }

        .c-list7__img {
            overflow: hidden;
            width: 100%;
            cursor: pointer;
        }

        .c-list7__img img {
            transition: 0.5s;
        }

        .c-list7__img img:hover {
            transform: scale(1.1);
        }

        .c-list7__content {
            margin-top: 25px;
        }

        .c-list7__content .c-title2 {
            cursor: pointer;
            transition: 0.5s;
        }

        /*------------------------------------------------------------
table
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        /*------------------------------------------------------------
line
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        /*------------------------------------------------------------
video
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        /*------------------------------------------------------------
video
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        .c-slide1__content {
            display: flex;
            flex-wrap: wrap;
        }

        .c-slide1 .l-container {
            display: flex;
            align-items: center;
            height: 100%;
        }

        @media screen and (max-width: 767px) {
            .c-slide1 .l-container {
                padding: 0 10px;
            }
        }

        .c-slide1__text {
            width: 50%;
            padding-right: 12px;
        }

        @media screen and (max-width: 991px) {
            .c-slide1__text {
                width: 100%;
                padding: 0;
            }
        }

        .c-slide1__item {
            background: linear-gradient(to bottom, #99b9da, #aac4e0, #bbcfe6, #ccdbec, #dce6f2);
            height: 730px;
        }

        .c-slide1__img {
            width: 50%;
            padding-left: 12px;
        }

        .c-slide1__img img {
            width: 100%;
        }

        @media screen and (max-width: 991px) {
            .c-slide1__img {
                width: 100%;
                padding: 0;
            }

            .c-slide1__img img {
                display: block;
                max-width: 350px;
                margin: auto;
                margin-top: 30px;
            }
        }

        .c-slide1__bold {
            font-size: 1.8rem;
            color: #ed1d24;
        }

        .c-slide1__title {
            font-size: 6rem;
            margin: 18px 0 20px;
        }

        @media screen and (max-width: 991px) {
            .c-slide1__title {
                font-size: 3.5rem;
            }
        }

        @media screen and (max-width: 767px) {
            .c-slide1__title {
                font-size: 3rem;
            }
        }

        .c-slide1.owl-theme .owl-nav {
            margin-top: 0;
        }

        .c-slide1.owl-theme .owl-nav .owl-prev,
        .c-slide1.owl-theme .owl-nav .owl-next {
            position: absolute;
            left: 10px;
            top: 60%;
            transform: translateY(-60%);
            margin: 0;
            outline: 0;
            width: 45px;
            height: 45px;
            line-height: 52px;
            transition: 0.5s;
            background-color: #113366;
            border: 1px solid #113366;
            color: #ffffff;
            border-radius: 50%;
            opacity: 0;
            visibility: hidden;
        }

        .c-slide1.owl-theme .owl-nav .owl-prev:hover,
        .c-slide1.owl-theme .owl-nav .owl-prev:focus,
        .c-slide1.owl-theme .owl-nav .owl-next:hover,
        .c-slide1.owl-theme .owl-nav .owl-next:focus {
            background-color: transparent;
            color: #113366;
        }

        .c-slide1.owl-theme .owl-nav .owl-prev i,
        .c-slide1.owl-theme .owl-nav .owl-next i {
            font-size: 25px;
        }

        .c-slide1.owl-theme .owl-nav .owl-next {
            left: auto;
            right: 10px;
        }

        .c-slide1.owl-theme:hover .owl-nav .owl-prev,
        .c-slide1.owl-theme:hover .owl-nav .owl-next {
            opacity: 1;
            visibility: visible;
            left: 20px;
            transition: 0.5s;
        }

        .c-slide1.owl-theme:hover .owl-nav .owl-next {
            left: auto;
            right: 20px;
        }

        .c-slide2 {
            background-color: #f2f2f2;
            padding: 100px 0;
        }

        .c-slide2__img img {
            width: auto !important;
            margin: 0 auto;
        }

        /*------------------------------------------------------------
MV
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        /*------------------------------------------------------------
other
------------------------------------------------------------*/
        .c-rate1 {
            margin-bottom: 12px;
            font-size: 1.6rem;
        }

        .c-rate1 li {
            display: inline;
            color: #ffb607;
        }

        .c-price1 {
            font-size: 1.6rem;
            font-weight: 600;
            transition: 0.5s;
            margin-bottom: 15px;
        }

        .c-price1--colorRed {
            color: #ed1d24;
            display: inline;
        }

        .c-price1--lineThrough {
            text-decoration: line-through;
            display: inline;
            color: #656565;
            margin-left: 12px;
        }

        .c-price2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #ed1d24;
            font-weight: 600;
        }

        .c-price2--discount {
            font-size: 1.6rem;
            line-height: 1.5;
            display: inline-block;
            background-color: #ed1d24;
            color: #fff;
            padding: 5px 15px;
            border-radius: 5px;
            margin: 15px 0 20px;
            transition: 0.5s;
        }

        .c-tag1 {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 15px 10px;
            background-color: #113366;
            border-radius: 100px;
            color: #fff;
            font-size: 1.6rem;
            font-weight: 600;
            line-height: 1.5;
            transition: 0.5s;
        }

        .c-tag2 {
            position: absolute;
            top: 0;
            right: 0;
            padding: 25px 15px;
            background-color: #ed1d24;
            border-radius: 50%;
            color: #fff;
            font-size: 2rem;
            font-weight: 600;
            line-height: 1.5;
            transition: 0.5s;
        }

        .c-group label {
            display: inline-block;
            margin-bottom: 0;
        }

        .c-input {
            font-size: 1.5rem;
            line-height: 1.5;
            padding: 18px 15px;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #f1f1f1;
            background-color: #fff;
            color: #292929;
        }

        .c-input:focus {
            border: 1px solid #113366;
        }

        .c-formCheck {
            font-size: 1.5rem;
            color: #656565;
        }

        .c-formCheck label,
        .c-formCheck__input {
            cursor: pointer;
        }

        .c-lostPassword {
            font-size: 1.5rem;
        }

        .c-lostPassword a {
            color: #656565;
            border-bottom: 1px solid #f1f1f1;
            opacity: 1;
        }

        .c-lostPassword a:hover {
            border-bottom-color: #ed1d24;
        }

        .c-authen {
            max-width: 650px;
            background-color: transparent;
            padding: 40px 45px;
            margin: 0 auto;
            border-radius: 5px;
        }

        @media screen and (max-width: 767px) {
            .c-authen {
                padding: 20px 15px;
            }
        }

        .c-authen__btn {
            width: 100%;
        }

        .c-authen__form {
            margin: 30px 0 15px;
        }

        .c-authen__group {
            margin-bottom: 25px;
        }

        .c-authen__option {
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
        }

        .c-authen__text {
            text-align: center;
        }

        .c-filter {
            display: flex;
            justify-content: space-between;
            font-size: 1.5rem;
            color: #656565;
        }

        .c-filter__current {
            font-weight: 600;
            cursor: pointer;
        }

        .c-filter__btn {
            padding: 8px 15px;
            margin-top: 10px;
            float: right;
            z-index: 1;
            font-size: 1.5rem;
        }

        .c-filter__sortList {
            background-color: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin-top: 10px;
            display: block;
            width: 268px;
            text-align: left;
            position: absolute;
            right: 0;
            border: none;
            border-radius: 5px;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .c-filter__sortItem {
            color: #656565;
            line-height: 2.5;
            padding: 0 25px 0 15px;
            cursor: pointer;
        }

        .c-filter__sortItem:hover {
            background-color: #113366;
            color: #fff;
        }

        .c-paginate__link {
            width: 35px;
            height: 35px;
            margin: 0 3px;
            display: inline-block;
            background-color: #fff;
            line-height: 35px;
            color: #292929;
            box-shadow: 0 2px 10px 0 #ccc;
            font-size: 14px;
            font-weight: bold;
            border-radius: 50px;
            text-align: center;
            opacity: 1;
        }

        .c-paginate__link:hover {
            background-color: #113366;
            color: #fff;
            opacity: 1;
        }

        .c-paginate__current {
            background-color: #113366;
            color: #fff;
        }

        .c-paginate svg {
            display: none;
        }

        .c-paginate nav {
            font-size: 1.5rem;
        }

        .c-paginate nav>div:first-child {
            display: none;
        }

        .c-paginate nav>div:last-child {
            margin: 30px 0;
        }

        .c-paginate nav>div:last-child div {
            margin: 15px 0;
        }

        .c-paginate nav>div:last-child div>span>span {
            width: 35px;
            height: 35px;
            margin: 0 3px;
            display: inline-block;
            background-color: #fff;
            line-height: 35px;
            color: #292929;
            box-shadow: 0 2px 10px 0 #ccc;
            font-size: 14px;
            font-weight: bold;
            border-radius: 50px;
            text-align: center;
            opacity: 1;
            background-color: #113366;
            color: #fff;
        }

        .c-paginate nav>div:last-child div>span>span[aria-label="Next &raquo;"],
        .c-paginate nav>div:last-child div>span>span[aria-label="&laquo; Previous"] {
            display: none;
        }

        .c-paginate nav>div:last-child div>span>a {
            width: 35px;
            height: 35px;
            margin: 0 3px;
            display: inline-block;
            background-color: #fff;
            line-height: 35px;
            color: #292929;
            box-shadow: 0 2px 10px 0 #ccc;
            font-size: 14px;
            font-weight: bold;
            border-radius: 50px;
            text-align: center;
            opacity: 1;
        }

        .c-paginate nav>div:last-child div>span>a:hover {
            background-color: #113366;
            color: #fff;
            opacity: 1;
        }

        .c-paginate nav>div:last-child div>span>a[rel=next],
        .c-paginate nav>div:last-child div>span>a[rel=prev] {
            display: none;
        }

        .c-plusMinus__quantity {
            margin: 20px 0;
        }

        .c-plusMinus__counter {
            display: flex;
            max-width: 130px;
        }

        .c-plusMinus__counter input {
            height: 25px;
            color: #656565;
            outline: 0;
            display: block;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            text-align: center;
            width: 100%;
            font-size: 18px;
            font-weight: 600;
            min-width: 20px;
        }

        .c-plusMinus__counter input::-webkit-inner-spin-button {
            opacity: 1;
            cursor: pointer;
        }

        .c-plusMinus__counter i {
            font-size: 2.5rem;
            color: #ccc;
        }

        .c-plusMinus__counter .qty_detail {
            border: none;
        }

        .c-plusMinus__counter .qty_detail::-webkit-inner-spin-button {
            display: none;
        }

        .c-plusMinus__plus,
        .c-plusMinus__minus {
            cursor: pointer;
        }

        .c-block1 {
            display: flex;
            margin-left: -24px;
        }

        @media screen and (max-width: 767px) {
            .c-block1 {
                flex-wrap: wrap;
                margin: 0;
            }
        }

        .c-block1__left,
        .c-block1__right {
            width: 50%;
            padding-left: 24px;
        }

        @media screen and (max-width: 767px) {

            .c-block1__left,
            .c-block1__right {
                width: 100%;
                padding: 0;
            }
        }

        .c-block1__title {
            margin-bottom: 15px;
        }

        .c-block1__price,
        .c-block1__price2 {
            font-size: 1.8rem;
        }

        .c-block1__price1 {
            margin-left: 0;
            font-size: 1.8rem;
        }

        .c-block1__txt {
            margin-bottom: 0;
        }

        .c-block1__info {
            margin-top: 12px;
        }

        .c-block1__color1,
        .c-block1__color2,
        .c-block1__color3,
        .c-block1__color4,
        .c-block1__color5 {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-left: 6px;
        }

        .c-block1__color1 {
            background-color: #113366;
        }

        .c-block1__color2 {
            background-color: #dce3fa;
        }

        .c-block1__color3 {
            background-color: #e3efed;
        }

        .c-block1__color4 {
            background-color: #15407f;
        }

        .c-block1__color5 {
            background-color: #656565;
        }

        .c-block1__quantity {
            display: flex;
            margin-top: 20px;
        }

        .c-block1__quantity span {
            margin-right: 10px;
        }

        .c-block1__share {
            margin-top: 25px;
        }

        .c-block1__social li {
            display: inline;
        }

        .c-block1__social a {
            display: inline-block;
            width: 32px;
            height: 32px;
            line-height: 2;
            border-radius: 50%;
            background-color: #113366;
            color: #ffffff;
            border: 1px solid #113366;
            text-align: center;
            font-size: 16px;
            margin-left: 2px;
        }

        .c-block1__social a:hover {
            background-color: #fff;
            color: #113366;
        }

        .c-block1__left {
            display: flex;
        }

        @media screen and (max-width: 767px) {
            .c-block1__left {
                margin-bottom: 25px;
            }
        }

        .c-block1__left .c-block1__imgList {
            width: 50px;
            float: left;
            cursor: pointer;
            position: relative;
            z-index: 1;
        }

        .c-block1__content {
            width: 100%;
        }

        .c-block1__content .slick-track {
            width: 100%;
        }

        .c-block2__tabList {
            border-bottom: 1px solid #ccc;
            margin-bottom: 30px;
        }

        .c-block2__tabItem {
            display: inline-block;
            margin-right: 30px;
            padding-bottom: 8px;
        }

        .c-block2__link {
            border: none;
            border-bottom: 3px solid transparent;
            padding: 0;
            padding-bottom: 8px;
            font-size: 1.8rem;
            font-weight: 600;
            color: #292929;
            transition: 0;
            cursor: pointer;
        }

        .c-block2__link:hover {
            border-bottom: 3px solid #113366;
            opacity: 1;
        }

        .c-block2__active {
            border-bottom: 3px solid #113366;
        }

        .c-block2__title {
            margin-bottom: 20px;
        }

        .c-block2__description ul {
            list-style-type: disc;
            padding-left: 15px;
        }

        .c-block2__rate {
            display: flex;
            justify-content: space-between;
            color: #292929;
            font-size: 1.6rem;
            font-weight: 600;
            margin-top: 14px;
        }

        .c-block2__rateLeft {
            width: 15%;
        }

        .c-block2__rateMiddle {
            width: 75%;
        }

        .c-block2__rateRight {
            width: 15%;
            text-align: right;
        }

        .c-block2__rateContainer {
            height: 100%;
            width: 100%;
            background-color: #f1f1f1;
            border-radius: 5px;
        }

        .c-block2__rateBar {
            height: 100%;
            background-color: #113366;
            border-radius: 5px;
        }

        .c-block2__rateBar--5star {
            width: 80%;
        }

        .c-block2__rateBar--4star {
            width: 12%;
        }

        .c-block2__rateBar--3star {
            width: 5%;
        }

        .c-block2__rateBar--2star {
            width: 2%;
        }

        .c-block2__rateBar--1star {
            width: 1%;
        }

        .c-block2__customer {
            margin-top: 45px;
        }

        .c-block2__cusTitle {
            display: flex;
            justify-content: space-between;
        }

        .c-block2__cusTitle ul {
            margin: auto 0;
        }

        .c-block2__cusComment {
            margin-top: 35px;
        }

        .c-block2__cusReview {
            margin-top: 35px;
            padding-top: 45px;
            border-top: 1px solid #f1f1f1;
        }

        .c-block2__title2 {
            font-size: 1.8rem;
        }

        .c-block2__formName {
            display: flex;
            margin-left: -30px;
        }

        @media screen and (max-width: 767px) {
            .c-block2__formName {
                flex-wrap: wrap;
                margin-left: 0;
            }
        }

        .c-block2__formName .c-group {
            width: 50%;
            padding-left: 30px;
        }

        @media screen and (max-width: 767px) {
            .c-block2__formName .c-group {
                width: 100%;
                padding: 0;
            }
        }

        .c-block2 .c-group {
            margin-bottom: 30px;
        }

        .c-block2 .c-input {
            background-color: #eeeeee;
            font-weight: 600;
        }

        .c-block2 .c-input:focus {
            background-color: #fff;
        }

        .c-block2__infoShip span {
            font-size: 1.8rem;
            font-weight: 600;
            color: #292929;
        }

        .c-block3 {
            display: flex;
            margin-left: -24px;
        }

        @media screen and (max-width: 1024px) {
            .c-block3 {
                flex-wrap: wrap;
                margin-left: 0;
            }
        }

        .c-block3__left {
            width: 70%;
            padding-left: 24px;
        }

        @media screen and (max-width: 1024px) {
            .c-block3__left {
                width: 100%;
                padding-left: 0;
            }
        }

        .c-block3__right {
            width: 30%;
            padding-left: 24px;
        }

        @media screen and (max-width: 1024px) {
            .c-block3__right {
                width: 100%;
                padding-left: 0;
            }
        }

        .c-block3__headList {
            display: flex;
            justify-content: space-between;
            background-color: #fff;
            font-weight: 600;
            color: #292929;
            border-bottom: 2px solid #113366;
        }

        .c-block3__contentList {
            border-bottom: 1px solid #ccc;
            display: flex;
            justify-content: space-between;
        }

        .c-block3__product,
        .c-block3__name,
        .c-block3__unitPrice,
        .c-block3__quantity,
        .c-block3__total {
            padding: 35px 20px;
            color: #292929;
            font-size: 1.6rem;
            font-weight: 600;
            color: #656565;
            text-align: center;
            margin: auto 0;
        }

        .c-block3__product {
            width: 30%;
            display: flex;
        }

        .c-block3__product .c-remove {
            color: #ccc;
            font-size: 2.5rem;
            text-align: center;
            line-height: 3.2;
            margin: auto 10px auto 0;
            cursor: pointer;
        }

        .c-block3__product .c-remove:hover {
            color: #ed1d24;
        }

        @media screen and (max-width: 767px) {
            .c-block3__product .c-remove {
                font-size: 2rem;
                width: 40%;
            }
        }

        .c-block3__name {
            width: 30%;
        }

        @media screen and (max-width: 767px) {
            .c-block3__name {
                display: none;
            }
        }

        .c-block3__unitPrice {
            width: 30%;
        }

        @media screen and (max-width: 767px) {
            .c-block3__unitPrice {
                display: none;
            }
        }

        .c-block3__quantity {
            width: 25%;
        }

        @media screen and (max-width: 767px) {
            .c-block3__quantity {
                width: 20%;
                margin-right: 5px;
            }

            .c-block3__quantity i {
                font-size: 2rem;
            }

            .c-block3__quantity input {
                height: 20px;
            }
        }

        .c-block3__total {
            width: 35%;
        }

        @media screen and (max-width: 767px) {
            .c-block3__total {
                width: 40%;
            }
        }

        .c-block3__img {
            width: 80px;
        }

        @media screen and (max-width: 400px) {
            .c-block3__img {
                width: 60px;
            }
        }

        .c-block3__btn {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        @media screen and (max-width: 576px) {
            .c-block3__btn {
                flex-wrap: wrap;
            }
        }

        .c-block3__input {
            width: 70%;
            height: 54px;
            border-radius: 0;
        }

        @media screen and (max-width: 423px) {
            .c-block3__input {
                width: 60%;
            }
        }

        .c-block3__apply {
            width: 30%;
        }

        @media screen and (max-width: 423px) {
            .c-block3__apply {
                width: 40%;
            }
        }

        .c-block3__coupon {
            width: 70%;
            display: flex;
        }

        @media screen and (max-width: 576px) {
            .c-block3__coupon {
                width: 100%;
            }
        }

        .c-block3__update {
            width: 30%;
            text-align: right;
        }

        @media screen and (max-width: 576px) {
            .c-block3__update {
                width: 100%;
                margin-top: 30px;
            }
        }

        .c-cartTotal {
            padding: 30px;
            background-color: #fff;
            color: #292929;
        }

        @media screen and (max-width: 1024px) {
            .c-cartTotal {
                margin-top: 30px;
            }
        }

        .c-cartTotal__title {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .c-cartTotal__item {
            font-size: 1.6rem;
            font-weight: 600;
            padding: 10px 0 15px 0;
            color: #656565;
            border-bottom: 1px solid #ccc;
        }

        .c-cartTotal__item span {
            float: right;
        }

        .c-cartTotal__item--size {
            font-size: 1.8rem;
            color: #292929 !important;
            font-weight: 600;
        }

        .c-cartTotal__btnCheckout {
            margin-top: 25px;
            width: 100%;
            box-sizing: border-box;
            text-align: center;
        }

        .c-block4__list {
            display: flex;
            border-bottom: 1px solid #ccc;
        }

        @media screen and (max-width: 567px) {
            .c-block4__list {
                flex-wrap: wrap;
                justify-content: space-evenly;
            }
        }

        .c-block4__title {
            padding: 30px;
            background-color: #fff;
        }

        .c-block4__product,
        .c-block4__name,
        .c-block4__unitPrice,
        .c-block4__stock,
        .c-block4__btn {
            padding: 35px 20px;
            color: #292929;
            font-size: 1.6rem;
            font-weight: 600;
            text-align: center;
            color: #656565;
            margin: auto 0;
        }

        @media screen and (max-width: 767px) {

            .c-block4__product,
            .c-block4__name,
            .c-block4__unitPrice,
            .c-block4__stock,
            .c-block4__btn {
                padding: 35px 0;
            }
        }

        @media screen and (max-width: 567px) {

            .c-block4__product,
            .c-block4__name,
            .c-block4__unitPrice,
            .c-block4__stock {
                padding-bottom: 12px;
            }
        }

        .c-block4__product {
            width: 15%;
            display: flex;
        }

        .c-block4__product .c-remove {
            color: #ccc;
            font-size: 2.5rem;
            text-align: center;
            line-height: 3.2;
            cursor: pointer;
            margin: auto 10px auto 0;
        }

        .c-block4__product .c-remove:hover {
            color: #ed1d24;
        }

        @media screen and (max-width: 767px) {
            .c-block4__product .c-remove {
                font-size: 2rem;
                width: 40%;
            }
        }

        @media screen and (max-width: 767px) {
            .c-block4__product {
                width: 5%;
            }
        }

        .c-block4__name {
            width: 30%;
        }

        @media screen and (max-width: 767px) {
            .c-block4__name {
                width: 30%;
            }
        }

        .c-block4__unitPrice {
            width: 25%;
        }

        .c-block4__btn {
            width: 30%;
        }

        @media screen and (max-width: 767px) {
            .c-block4__btn {
                width: 40%;
            }

            .c-block4__btn .c-btn1 {
                padding: 10px;
            }
        }

        @media screen and (max-width: 567px) {
            .c-block4__btn {
                padding-top: 0;
                width: 60%;
            }
        }

        .c-block4__img {
            width: 80px;
        }

        @media screen and (max-width: 767px) {
            .c-block4__img {
                display: none;
            }
        }

        .c-block5__area {
            display: flex;
            margin-left: -24px;
        }

        @media screen and (max-width: 992px) {
            .c-block5__area {
                flex-wrap: wrap;
                margin-left: 0;
            }
        }

        .c-block5__left {
            width: 66.67%;
        }

        .c-block5__right {
            width: 33.33%;
        }

        .c-block5__left,
        .c-block5__right {
            padding-left: 24px;
        }

        @media screen and (max-width: 992px) {

            .c-block5__left,
            .c-block5__right {
                padding-left: 0;
                width: 100%;
            }
        }

        .c-block5__title {
            font-size: 2rem;
            color: #292929;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .c-block5__name {
            display: flex;
            margin-left: -24px;
        }

        .c-block5__name .c-group {
            width: 50%;
            padding-left: 24px;
        }

        @media screen and (max-width: 767px) {
            .c-block5__name .c-group {
                width: 100%;
                padding-left: 0;
            }
        }

        @media screen and (max-width: 767px) {
            .c-block5__name {
                flex-wrap: wrap;
                margin-left: 0;
            }
        }

        .c-block5 .c-group {
            margin-bottom: 25px;
        }

        .c-block5 .c-group label {
            font-weight: bold;
            margin-bottom: 8px;
        }

        .c-block5 .c-group .c-input {
            font-weight: 600;
        }

        .c-block5 .c-group .c-input:focus {
            background-color: #f9f9f9;
        }

        .c-block5__payment {
            margin-top: 30px;
            padding: 30px;
            background-color: #fff;
            height: 369px;
        }

        /*------------------------------------------------------------
Page Top
------------------------------------------------------------*/
        /*
------------------------------------------------------------*/
        .p-home__overview {
            padding-top: 80px;
            padding-bottom: 30px;
        }

        @media screen and (max-width: 767px) {
            .p-home__overview {
                padding-top: 60px;
            }
        }

        .p-home__arrivals {
            padding-top: 100px;
        }

        @media screen and (max-width: 767px) {
            .p-home__arrivals {
                padding-top: 40px;
            }
        }

        .p-home__specialOffer {
            padding-top: 70px;
        }

        @media screen and (max-width: 767px) {
            .p-home__specialOffer {
                padding-top: 35px;
            }
        }

        .p-home__collection {
            padding-top: 50px;
        }

        .p-home__bestseller {
            padding-top: 100px;
        }

        @media screen and (max-width: 767px) {
            .p-home__bestseller {
                padding-top: 50px;
            }
        }

        .p-home__bestseller .c-list1 {
            margin-top: 20px;
        }

        .p-home__news {
            padding-top: 50px;
        }

        @media screen and (max-width: 767px) {
            .p-home__news {
                padding-top: 30px;
            }
        }

        .p-home__slideBot {
            padding-top: 70px;
        }

        .p-productList__breadcrumb {
            padding: 35px;
            background-color: #f5f5f5;
        }

        .p-productList__list {
            padding-top: 50px;
        }

        .p-productList__filter {
            margin-bottom: 25px;
            position: relative;
            z-index: 10;
        }

        .p-productDetail__sc1 {
            padding: 35px;
            background-color: #f5f5f5;
        }

        .p-productDetail__sc3 {
            padding-top: 50px;
        }

        .p-productDetail__sc4 {
            padding: 50px 0;
        }

        .p-login__sc1 {
            background-color: #f5f5f5;
        }

        .p-login__sc1 .c-breadcrumb1 {
            padding-top: 35px;
            padding-bottom: 32px;
        }

        .p-login__sc2 {
            margin: 30px 0 0 0;
        }

        .p-login__sc2 .c-authen {
            margin-bottom: 30px;
            background-color: #fff;
        }

        .p-login__sc3 {
            background-color: #fff;
        }

        .p-register__sc1 {
            background-color: #f5f5f5;
        }

        .p-register__sc1 .c-breadcrumb1 {
            padding-top: 35px;
            padding-bottom: 32px;
        }

        .p-register__sc2 {
            margin: 30px 0 0 0;
        }

        .p-register__sc2 .c-authen {
            margin-bottom: 30px;
            background-color: #fff;
        }

        .p-register__sc3 {
            background-color: #fff;
        }

        .p-cart__sc1 {
            padding: 35px 0;
            background-color: #f5f5f5;
        }

        .p-cart__sc2 {
            padding-top: 50px;
        }

        .p-wishlist__sc1 {
            padding: 35px 0;
            background-color: #f5f5f5;
        }

        .p-wishlist__sc2 {
            padding-top: 50px;
        }

        .p-checkout__sc1 {
            padding: 35px 0 32px;
            background-color: #f5f5f5;
        }

        .p-checkout__sc2 {
            padding-top: 50px;
        }

        .p-contact__sc1 {
            padding: 35px 0 32px;
            background-color: #f5f5f5;
        }

        .p-contact__sc2 {
            padding: 50px 0;
        }

        .c-contact {
            display: flex;
            margin-left: -24px;
        }

        @media screen and (max-width: 767px) {
            .c-contact {
                flex-wrap: wrap;
                margin-left: 0;
            }
        }

        .c-contact__left {
            width: 60%;
        }

        .c-contact__right {
            width: 40%;
        }

        @media screen and (max-width: 767px) {
            .c-contact__right {
                margin-top: 30px;
            }
        }

        .c-contact__left,
        .c-contact__right {
            padding-left: 24px;
        }

        @media screen and (max-width: 767px) {

            .c-contact__left,
            .c-contact__right {
                width: 100%;
                padding: 0;
            }
        }

        .c-contact .c-group {
            margin-bottom: 15px;
        }

        .c-contact__formFlex {
            display: flex;
            margin-left: -24px;
        }

        @media screen and (max-width: 767px) {
            .c-contact__formFlex {
                flex-wrap: wrap;
                margin-left: 0;
            }
        }

        .c-contact__formFlex .c-group {
            width: 100%;
            padding-left: 24px;
        }

        @media screen and (max-width: 767px) {
            .c-contact__formFlex .c-group {
                padding: 0;
            }
        }

        .c-contact__visit {
            margin-top: 25px;
            font-size: 1.6rem;
            font-weight: 600;
            color: #777;
            margin-bottom: 25px;
        }

        .c-contact__visit span,
        .c-contact__visit i {
            color: #292929;
        }

        .c-contact__visit li {
            margin-bottom: 12px;
        }

        .c-contact__open {
            font-size: 1.6rem;
            color: #777;
        }

        .c-contact__open li {
            margin-bottom: 10px;
            list-style-type: circle;
            margin-left: 20px;
        }

    </style>
    {{-- botman --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}
</head>

<body>
    @include('front.layouts.header')

    @yield('content')

    @include('front.layouts.footer')

    <!-- Jquery Slim JS -->
    <script src="{{ asset('js/front/jquery.min.js') }} "></script>

    <script src="{{ asset('js/front/jquery-ui.min.js') }} "></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>

    @stack('scripts')
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "103967885649490");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v13.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    {{-- botman --}}
    <script>
        var botmanWidget = {
            aboutText: 'for you',
            introMessage: "✋ Hi! Can I help you?"
        };
    </script>

    {{-- <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script> --}}

</body>

</html>
