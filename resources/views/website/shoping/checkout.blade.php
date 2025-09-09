@extends('layouts.website')
@section('title', 'Checkout| Aqsa Publications')

@section('content')

    <div class="page-header border-bottom">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center py-4">
                <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Shop Single</h1>

            </div>
        </div>
    </div>


    <div id="content" class="site-content bg-punch-light space-bottom-3">
        <div class="col-full container">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <article id="post-6" class="post-6 page type-page status-publish hentry">
                        <header class="entry-header space-top-2 space-bottom-1 mb-2">
                            <h4 class="entry-title font-size-7 text-center">Checkout</h4>
                        </header>

                        <div class="entry-content">
                            <div class="woocommerce">
                                <div class="woocommerce-info p-4 bg-white border">Have a coupon?
                                    <a class="showcoupon" data-toggle="collapse" href="#collapseExample9" role="button"
                                        aria-expanded="true" aria-controls="collapseExample9">
                                        Click here to enter your code
                                    </a>
                                </div>
                                <form id="collapseExample9" class="checkout_coupon mt-4 p-4 bg-white border collapse show"
                                    method="post" style="">
                                    <div class="row d-flex">
                                        <p class="col-md-4 d-inline form-row form-row-first mb-3 mb-md-0">
                                            <input type="text" name="coupon_code1" class="input-text form-control"
                                                placeholder="Coupon code" id="coupon_code1" value="">
                                        </p>
                                        <p class="col-md-3 d-inline form-row form-row-last">
                                            <input type="submit"
                                                class="button form-control border-0 height-4 btn btn-dark rounded-0"
                                                name="apply_coupon" value="Apply coupon">
                                        </p>
                                    </div>
                                    <div class="clear"></div>
                                </form>
                                <form name="checkout" id="checkoutForm" method="POST" class="checkout woocommerce-checkout row mt-8"
                                    action="{{ url('place-order') }}"
                                    enctype="multipart/form-data" novalidate="novalidate">
                                    @csrf
                                    <div class="col2-set col-md-6 col-lg-7 col-xl-8 mb-6 mb-md-0" id="customer_details">
                                        <div class="px-4 pt-5 bg-white border">
                                            <div class="woocommerce-billing-fields">
                                                <h3 class="mb-4 font-size-3">Billing details</h3>
                                                <div class="woocommerce-billing-fields__field-wrapper row">
                                                    <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field"
                                                        id="billing_first_name_field" data-priority="10">
                                                        <label for="billing_first_name" class="form-label">First name <abbr
                                                                class="required" title="required">*</abbr></label>
                                                        <input type="text" class="input-text form-control"
                                                            name="first_name" id="first_name" placeholder=""
                                                            value="" autocomplete="given-name" autofocus="autofocus">
                                                    </p>
                                                    <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required"
                                                        id="billing_last_name_field" data-priority="20">
                                                        <label for="last_name" class="form-label">Last name <abbr
                                                                class="required" title="required">*</abbr></label>
                                                        <input type="text" class="input-text form-control"
                                                            name="last_name" id="last_name" placeholder=""
                                                            value="" autocomplete="family-name">
                                                    </p>
                                                    <p class="col-12 mb-3 form-row form-row-wide address-field validate-required"
                                                        id="billing_address_1_field" data-priority="50">
                                                        <label for="billing_address_1" class="form-label">Country
                                                            <abbr class="required" title="required">*</abbr></label>
                                                        <input type="text" class="input-text form-control"
                                                            name="country" id="address_1"
                                                            placeholder="House number and street name" value="Pakistan"
                                                            autocomplete="address-line1">
                                                    </p>
                                                    <p class="col-12 mb-3 form-row form-row-wide address-field validate-required"
                                                        id="billing_address_1_field" data-priority="50">
                                                        <label for="billing_address_1" class="form-label">Street address
                                                            <abbr class="required" title="required">*</abbr></label>
                                                        <input type="text" class="input-text form-control"
                                                            name="address_1" id="address_1"
                                                            placeholder="House number and street name" value=""
                                                            autocomplete="address-line1">
                                                    </p>
                                                    <p class="col-12 mb-4d75 form-row form-row-wide address-field"
                                                        id="address_2_field" data-priority="60">
                                                        <input type="text" class="input-text form-control"
                                                            name="billing_address_2" id="billing_address_2"
                                                            placeholder="Apartment, suite, unit etc. (optional)"
                                                            value="" autocomplete="address-line2">
                                                    </p>
                                                    <p class="col-12 mb-4d75 form-row form-row-wide address-field validate-required"
                                                        id="city_field" data-priority="70"
                                                        data-o_class="form-row form-row-wide address-field validate-required">
                                                        <label for="billing_city" class="form-label">Town / City <abbr
                                                                class="required" title="required">*</abbr></label>
                                                        <input type="text" class="input-text form-control"
                                                            name="city" id="city" placeholder=""
                                                            value="" autocomplete="address-level2">
                                                    </p>
                                                    <p class="col-12 mb-4d75 form-row form-row-wide address-field validate-postcode validate-required"
                                                        id="billing_postcode_field" data-priority="90"
                                                        data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                                        <label for="billing_postcode" class="form-label">Postcode <abbr
                                                                class="required" title="required">*</abbr></label>
                                                        <input type="text" class="input-text form-control"
                                                            name="postcode" id="billing_postcode" placeholder=""
                                                            value="" autocomplete="postal-code">
                                                    </p>
                                                    <p class="col-12 mb-4d75 form-row form-row-first validate-required validate-phone"
                                                        id="billing_phone_field" data-priority="100">
                                                        <label for="billing_phone" class="form-label">Phone <abbr
                                                                class="required" title="required">*</abbr></label>
                                                        <input type="tel" class="input-text form-control"
                                                            name="phone" id="billing_phone" placeholder=""
                                                            value="" autocomplete="tel">
                                                    </p>
                                                    <p class="col-12 mb-4d75 form-row form-row-last validate-required validate-email"
                                                        id="billing_email_field" data-priority="110">
                                                        <label for="email" class="form-label">Email address <abbr
                                                                class="required" title="required">*</abbr></label>
                                                        <input type="email" class="input-text form-control"
                                                            name="email" id="billing_email" placeholder=""
                                                            value="" autocomplete="email">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-4 pt-5 bg-white border border-top-0 mt-n-one">
                                            <div class="woocommerce-additional-fields">
                                                <h3 class="mb-4 font-size-3">Additional information</h3>
                                                <div class="woocommerce-additional-fields__field-wrapper">
                                                    <p class="col-12 mb-4d75 px-0 form-row notes"
                                                        id="order_comments_field" data-priority="">
                                                        <label for="order_comments" class="form-label">Order notes
                                                            (optional)</label>
                                                        <textarea name="description" class="input-text form-control" id="order_comments"
                                                            placeholder="Notes about your order, e.g. special notes for delivery." rows="8" cols="5"></textarea>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 id="order_review_heading" class="d-none">Your order</h3>
                                    <div id="order_review"
                                        class="col-md-6 col-lg-5 col-xl-4 woocommerce-checkout-review-order">
                                        <div id="checkoutAccordion" class="border border-gray-900 bg-white mb-5">
                                            <div class="p-4d875 border">
                                                <div id="checkoutHeadingOnee" class="checkout-head">
                                                    <a href="#"
                                                        class="text-dark d-flex align-items-center justify-content-between"
                                                        data-toggle="collapse" data-target="#checkoutCollapseOnee"
                                                        aria-expanded="true" aria-controls="checkoutCollapseOnee">
                                                        <h3 class="checkout-title mb-0 font-weight-medium font-size-3">Your
                                                            order</h3>
                                                        <svg class="mins" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                            height="2px">
                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z">
                                                            </path>
                                                        </svg>
                                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                            height="15px">
                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div id="checkoutCollapseOnee" class="mt-4 checkout-content collapse show"
                                                    aria-labelledby="checkoutHeadingOnee"
                                                    data-parent="#checkoutAccordion">
                                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                                        <thead class="d-none">
                                                            <tr>
                                                                <th class="product-name">Product</th>
                                                                <th class="product-total">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($carts as $item)
                                                                <tr class="cart_item">
                                                                    <td class="product-name">
                                                                        {{ $item->book->name }}&nbsp; <strong
                                                                            class="product-quantity">× 1</strong>
                                                                    </td>
                                                                    <td class="product-total">
                                                                        <span class="woocommerce-Price-amount amount"><span
                                                                                class="woocommerce-Price-currencySymbol">RS:</span>{{ $item->book_price }}</span>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot class="d-none">
                                                            <tr class="cart-subtotal">
                                                                <th>Subtotal</th>
                                                                <td><span class="woocommerce-Price-amount amount"><span
                                                                            class="woocommerce-Price-currencySymbol">RS:</span>{{ $item->book_price * $item->book_qty }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr class="order-total">
                                                                <th>Total</th>
                                                                <td><strong><span
                                                                            class="woocommerce-Price-amount amount"><span
                                                                                class="woocommerce-Price-currencySymbol">£</span>97.99</span></strong>
                                                                </td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="p-4d875 border">
                                                <div id="checkoutHeadingOne" class="checkout-head">
                                                    <a href="#"
                                                        class="text-dark d-flex align-items-center justify-content-between"
                                                        data-toggle="collapse" data-target="#checkoutCollapseOne"
                                                        aria-expanded="true" aria-controls="checkoutCollapseOne">
                                                        <h3 class="checkout-title mb-0 font-weight-medium font-size-3">Cart
                                                            Totals</h3>
                                                        <svg class="mins" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                            height="2px">
                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z">
                                                            </path>
                                                        </svg>
                                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                            height="15px">
                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div id="checkoutCollapseOne" class="mt-4 checkout-content collapse show"
                                                    aria-labelledby="checkoutHeadingOne" data-parent="#checkoutAccordion">
                                                    <table class="shop_table shop_table_responsive">
                                                        <tbody>
                                                            <tr class="checkout-subtotal">
                                                                <th>Subtotal</th>
                                                                <td data-title="Subtotal"><span
                                                                        class="woocommerce-Price-amount amount"><span
                                                                            class="woocommerce-Price-currencySymbol">RS</span>{{ $item->book_price * $item->book_qty }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr class="order-shipping">
                                                                <th>Shipping</th>
                                                                <td data-title="Shipping">
                                                                    {{ $shippingPrice->shipping_price}}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="p-4d875 border">
                                                <div id="checkoutHeadingThree" class="checkout-head">
                                                    <a href="#"
                                                        class="text-dark d-flex align-items-center justify-content-between"
                                                        data-toggle="collapse" data-target="#checkoutCollapseThree"
                                                        aria-expanded="true" aria-controls="checkoutCollapseThree">
                                                        <h3 class="checkout-title mb-0 font-weight-medium font-size-3">
                                                            Coupon</h3>
                                                        <svg class="mins" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                            height="2px">
                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z">
                                                            </path>
                                                        </svg>
                                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                            height="15px">
                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div id="checkoutCollapseThree"
                                                    class="mt-4 checkout-content collapse show"
                                                    aria-labelledby="checkoutHeadingThree"
                                                    data-parent="#checkoutAccordion">
                                                    <div class="coupon">
                                                        <label for="coupon_code">Coupon:</label>
                                                        <input type="text" name="coupon_code" class="input-text"
                                                            id="coupon_code" value="" placeholder="Coupon code"
                                                            autocomplete="off">
                                                        <input type="submit" class="button" name="apply_coupon"
                                                            value="Apply coupon">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4d875 border">
                                                <table class="shop_table shop_table_responsive">
                                                    <tbody>
                                                        <tr class="order-total">
                                                            <th>Total</th>
                                                            <td data-title="Total"><strong><span
                                                                        class="woocommerce-Price-amount amount"><span
                                                                            class="woocommerce-Price-currencySymbol">RS: </span>{{ $item->book_price * $item->book_qty +  $shippingPrice->shipping_price }}</span></strong>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="p-4d875 border">
                                                <div id="checkoutHeadingThreee" class="checkout-head">
                                                    <a href="#"
                                                        class="text-dark d-flex align-items-center justify-content-between"
                                                        data-toggle="collapse" data-target="#checkoutCollapseThreee"
                                                        aria-expanded="true" aria-controls="checkoutCollapseThreee">
                                                        <h3 class="checkout-title mb-0 font-weight-medium font-size-3">
                                                            Payment</h3>
                                                        <svg class="mins" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                            height="2px">
                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                                d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z">
                                                            </path>
                                                        </svg>
                                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                            height="15px">
                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                                d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div id="checkoutCollapseThreee"
                                                    class="mt-4 checkout-content collapse show"
                                                    aria-labelledby="checkoutHeadingThreee"
                                                    data-parent="#checkoutAccordion">
                                                    <div id="payment" class="woocommerce-checkout-payment">
                                                        <ul class="wc_payment_methods payment_methods methods">
                                                            <li class="wc_payment_method payment_method_bacs">
                                                                <input id="payment_method_bacs" type="radio"
                                                                    class="input-radio" name="payment_method"
                                                                    value="bacs" data-order_button_text="">
                                                                <label for="payment_method_bacs">Direct bank transfer
                                                                </label>
                                                                <div class="payment_box payment_method_bacs"
                                                                    style="display: block;">
                                                                    <p>Make your payment directly into our bank account.
                                                                        Please use your Order ID as the payment reference.
                                                                        Your order won’t be shipped until the funds have
                                                                        cleared in our account.</p>
                                                                </div>
                                                            </li>
                                                            <li class="wc_payment_method payment_method_cheque">
                                                                <input id="payment_method_cheque" type="radio"
                                                                    class="input-radio" name="payment_method"
                                                                    value="cheque" data-order_button_text="">
                                                                <label for="payment_method_cheque">Check payments </label>
                                                                <div class="payment_box payment_method_cheque"
                                                                    style="display: block;">
                                                                    <p>Please send a check to Store Name, Store Street,
                                                                        Store Town, Store State / County, Store Postcode.
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li class="wc_payment_method payment_method_cod">
                                                                <input id="payment_method_cod" type="radio"
                                                                    class="input-radio" name="payment_method"
                                                                    value="cod" checked="checked"
                                                                    data-order_button_text="">
                                                                <label for="payment_method_cod">Cash on delivery </label>
                                                                <div class="payment_box payment_method_cod"
                                                                    style="display: block;">
                                                                    <p>Pay with cash upon delivery.</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row place-order">
                                            <input type="hidden" value="{{ $item->book_price * $item->book_qty +  $shippingPrice->shipping_price }}" name="total_price">
                                            <button role="button" type="submit"
                                                class="button alt btn btn-dark btn-block rounded-0 py-4">Place order</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </article>

                </main>

            </div>

        </div>

    </div>
    @include('website.shoping.js.checkout')
@endsection
