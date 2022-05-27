<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="http://ecommerce.local/css/front/style.css" rel="stylesheet" type="text/css" >

</head>
<body>
<div class="c-block3" style="display: flex; margin-left: -24px;">
   <div class="c-block3__left" style="width: 70%;padding-left: 24px;">
      <form class="c-block3__form">
         <div class="c-block3__list">
            <div class="c-block3__head">
               <ul class="c-block3__headList" style="display: flex;justify-content: space-between;background-color: #fff;font-weight: 600;color: #292929;border-bottom: 2px solid #113366;">
                  <li class="c-block3__product" style="padding: 35px 20px;font-size: 1.6rem;font-weight: 600;color: #656565;text-align: center;margin: auto 0;">Product</li>
                  <li class="c-block3__name" style="padding: 35px 20px;font-size: 1.6rem;font-weight: 600;color: #656565;text-align: center;margin: auto 0;">Name</li>
                  <li class="c-block3__unitPrice" style="padding: 35px 20px;font-size: 1.6rem;font-weight: 600;color: #656565;text-align: center;margin: auto 0;">Unit Price</li>
                  <li class="c-block3__quantity" style="padding: 35px 20px;font-size: 1.6rem;font-weight: 600;color: #656565;text-align: center;margin: auto 0;">Quantity</li>
                  <li class="c-block3__total" style="padding: 35px 20px;font-size: 1.6rem;font-weight: 600;color: #656565;text-align: center;margin: auto 0;">Total</li>
               </ul>
            </div>
            <div class="c-block3__content">
                @php $total = 0 @endphp
                @if(!empty($products))
                    @foreach($products as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                        <ul class="c-block3__contentList" data-id="{{ $id }}" style="border-bottom: 1px solid #ccc;display: flex;justify-content: space-between;">
                            <li class="c-block3__product" style="width: 30%;display: flex;">
                                <a href="" style="color: #ccc;font-size: 2.5rem;text-align: center;line-height: 3.2;margin: auto 10px auto 0;cursor: pointer;" class="c-remove remove-from-cart"><i class="fa-solid fa-circle-xmark"></i></a>
                                <a href="/product/detail/{{$details['product_id']}}">
                                    <figure class="c-block3__img" style="width: 80px;">
                                        <img style="max-width: 100%;height: auto;" src="{{ $details['thumb'] }}" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li class="c-block3__name" style="padding: 35px 20px;font-size: 1.6rem;font-weight: 600;color: #656565;text-align: center;margin: auto 0;">
                                <a href="/product/detail/{{$details['product_id']}}">{{ $details['name'] }}</a>
                            </li>
                            <li class="c-block3__unitPrice" style="padding: 35px 20px;font-size: 1.6rem;font-weight: 600;color: #656565;text-align: center;margin: auto 0;">
                                <span class="c-block3__productPrice">{{ number_format($details['price']) }} <sup>đ</sup></span>
                            </li>
                            <li class="c-block3__quantity" style="padding: 35px 20px;font-size: 1.6rem;font-weight: 600;color: #656565;text-align: center;margin: auto 0;">
                                <div class="c-plusMinus">
                                    <div class="c-plusMinus__counter">
                                        <span>{{ $details['quantity'] }}</span>
                                    </div>
                                </div>
                            </li>
                            <li class="c-block3__total"  style="padding: 35px 20px;font-size: 1.6rem;font-weight: 600;color: #656565;text-align: center;margin: auto 0;">
                                <span class="c-block3__productPriceTotal"> {{ number_format($details['price'] * $details['quantity']) }} <sup>đ</sup></span>
                            </li>
                        </ul>
                    @endforeach
                @endif
            </div>
         </div>
      </form>
   </div>
   <div class="c-block3__right" style="width: 30%; padding-left: 24px;">
        <div class="c-cartTotal" style="padding: 30px;background-color: #fff;color: #292929;">
            <h3 class="c-title4 c-cartTotal__title" style="font-size: 2rem;margin-bottom: 15px;">Cart Totals</h3>
            <ul class="c-cartTotal__list">
                <li class="c-cartTotal__item" style="font-size: 1.6rem;font-weight: 600;padding: 10px 0 15px 0;color: #656565;border-bottom: 1px solid #ccc;">Total
                    <span style="float: right;">{{ number_format($total) }} <sup>đ</sup></span>
                </li>
                <li class="c-cartTotal__item" style="font-size: 1.6rem;font-weight: 600;padding: 10px 0 15px 0;color: #656565;border-bottom: 1px solid #ccc;">Shipping
                    <span style="float: right;">+ 0 <sup>đ</sup></span>
                </li>
                <li class="c-cartTotal__item" style="font-size: 1.6rem;font-weight: 600;padding: 10px 0 15px 0;color: #656565;border-bottom: 1px solid #ccc;">Discount
                    <span style="float: right;">- 0 <sup>đ</sup></span>
                </li>
                <li class="c-cartTotal__item c-cartTotal__item--size" style="font-size: 1.8rem;color: #292929;font-weight: 600;">Payable Total
                    <span style="float: right;"> {{ number_format($total) }} <sup>đ</sup></span>
                </li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
