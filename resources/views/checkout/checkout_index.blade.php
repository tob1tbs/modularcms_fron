@extends('layout.layout')

@section('css')

@endsection

@section('content')
<main class="main main-test">
    <form class="container checkout-container" id="checkout_form">
    	<div class="row mt-2">
            <div class="col-lg-9">
                <ul class="checkout-steps">
                    <!-- <li>
                        <h2 class="step-title">Billing details</h2>
                        <form action="#" id="checkout-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First name
                                            <abbr class="required" title="required">*</abbr>
                                        </label>
                                        <input type="text" class="form-control" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last name
                                            <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="form-control" required />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Company name (optional)</label>
                                <input type="text" class="form-control" />
                            </div>

                            <div class="select-custom">
                                <label>Country / Region
                                    <abbr class="required" title="required">*</abbr></label>
                                <select name="orderby" class="form-control">
                                    <option value="" selected="selected">Vanuatu
                                    </option>
                                    <option value="1">Brunei</option>
                                    <option value="2">Bulgaria</option>
                                    <option value="3">Burkina Faso</option>
                                    <option value="4">Burundi</option>
                                    <option value="5">Cameroon</option>
                                </select>
                            </div>

                            <div class="form-group mb-1 pb-2">
                                <label>Street address
                                    <abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="form-control" placeholder="House number and street name" required />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Apartment, suite, unite, etc. (optional)" required />
                            </div>

                            <div class="form-group">
                                <label>Town / City
                                    <abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="form-control" required />
                            </div>

                            <div class="select-custom">
                                <label>State / County <abbr class="required" title="required">*</abbr></label>
                                <select name="orderby" class="form-control">
                                    <option value="" selected="selected">NY</option>
                                    <option value="1">Brunei</option>
                                    <option value="2">Bulgaria</option>
                                    <option value="3">Burkina Faso</option>
                                    <option value="4">Burundi</option>
                                    <option value="5">Cameroon</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Postcode / Zip
                                    <abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="form-control" required />
                            </div>

                            <div class="form-group">
                                <label>Phone <abbr class="required" title="required">*</abbr></label>
                                <input type="tel" class="form-control" required />
                            </div>

                            <div class="form-group">
                                <label>Email address
                                    <abbr class="required" title="required">*</abbr></label>
                                <input type="email" class="form-control" required />
                            </div>

                            <div class="form-group mb-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="create-account" />
                                    <label class="custom-control-label" data-toggle="collapse" data-target="#collapseThree" aria-controls="collapseThree" for="create-account">Create an
                                        account?</label>
                                </div>
                            </div>

                            <div id="collapseThree" class="collapse">
                                <div class="form-group">
                                    <label>Create account password
                                        <abbr class="required" title="required">*</abbr></label>
                                    <input type="password" placeholder="Password" class="form-control" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox mt-0">
                                    <input type="checkbox" class="custom-control-input" id="different-shipping" />
                                    <label class="custom-control-label" data-toggle="collapse" data-target="#collapseFour" aria-controls="collapseFour" for="different-shipping">Ship to a
                                        different
                                        address?</label>


                                </div>
                            </div>

                            <div id="collapseFour" class="collapse">
                                <div class="shipping-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First name <abbr class="required"
                                                        title="required">*</abbr></label>
                                                <input type="text" class="form-control" required />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last name <abbr class="required"
                                                        title="required">*</abbr></label>
                                                <input type="text" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Company name (optional)</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="select-custom">
                                        <label>Country / Region <span class="required">*</span></label>
                                        <select name="orderby" class="form-control">
                                            <option value="" selected="selected">Vanuatu</option>
                                            <option value="1">Brunei</option>
                                            <option value="2">Bulgaria</option>
                                            <option value="3">Burkina Faso</option>
                                            <option value="4">Burundi</option>
                                            <option value="5">Cameroon</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-1 pb-2">
                                        <label>Street address <abbr class="required"
                                                title="required">*</abbr></label>
                                        <input type="text" class="form-control" placeholder="House number and street name" required />
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Town / City <abbr class="required"
                                                title="required">*</abbr></label>
                                        <input type="text" class="form-control" required />
                                    </div>

                                    <div class="select-custom">
                                        <label>State / County <abbr class="required"
                                                title="required">*</abbr></label>
                                        <select name="orderby" class="form-control">
                                            <option value="" selected="selected">NY</option>
                                            <option value="1">Brunei</option>
                                            <option value="2">Bulgaria</option>
                                            <option value="3">Burkina Faso</option>
                                            <option value="4">Burundi</option>
                                            <option value="5">Cameroon</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Postcode / ZIP <abbr class="required"
                                                title="required">*</abbr></label>
                                        <input type="text" class="form-control" required />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="order-comments">Order notes (optional)</label>
                                <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." required></textarea>
                            </div>
                        </form>
                    </li> -->
                    <li>
                		<section id="cart-steps-section">
                			<div id="payment-form" class="delivery-payment-methods">
                				<h2 class="last-steps__title font-neue">{{ trans('site.payments') }}</h2>
                            	<div class="purchase-radio-wrap">
                            		@foreach($payment_list as $payment_item)
                                    <div class="purchase-radio">
                                        <input id="card-pay" value="{{ $payment_item->key }}" type="radio" name="payment_method">
                                        <div class="purchase-radio__overlay">
                                        	<img src="{{ $payment_item->photo }}" class="mb-1 img-fluid">
                                            <span>{{ $payment_item->name_ge }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                       	</section>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3">
                <div class="order-summary">
                    <h3 class="font-neue">{{ trans('site.our_order') }}</h3>
                    <!-- <table class="table table-mini-cart">
                        <thead>
                            <tr>
                                <th colspan="2">Product</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                                <td class="product-col">
                                    <h3 class="product-title">
                                        Fashion Computer Bag ×
                                        <span class="product-qty">2</span>
                                    </h3>
                                </td>

                                <td class="price-col">
                                    <span>$418.00</span>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="cart-subtotal">
                                <td>
                                    <h4>Subtotal</h4>
                                </td>

                                <td class="price-col">
                                    <span>$1,458.00</span>
                                </td>
                            </tr>
                            <tr class="order-shipping">
                                <td class="text-left" colspan="2">
                                    <h4 class="m-b-sm">Shipping</h4>
                                    <div class="form-group form-group-custom-control">
                                        <div class="custom-control custom-radio d-flex">
                                            <input type="radio" class="custom-control-input" name="radio" checked />
                                            <label class="custom-control-label">Local Pickup</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-custom-control mb-0">
                                        <div class="custom-control custom-radio d-flex mb-0">
                                            <input type="radio" name="radio" class="custom-control-input">
                                            <label class="custom-control-label">Flat Rate</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="order-total">
                                <td>
                                    <h4>Total</h4>
                                </td>
                                <td>
                                    <b class="total-price"><span>$1,603.80</span></b>
                                </td>
                            </tr>
                        </tfoot>
                    </table> -->
                    <button type="button" onclick="CheckoutSubmit()" class="btn btn-primary btn-place-order">
                        Place order
                    </button>
                </div>
            </div>
    	</div>
	</form>
</main>
<style type="text/css">

#cart-steps-section {
    margin: 32px 0 42px;
    font-family: 'neue-geo-caps';
}
#cart-steps-section .container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
}

.cart-step-two__form {
    padding: 32px 35px;
    background-color: #fff;
    border-radius: 17px;
    width: 100%;
    border: 1px solid #F8F8F8;
    height: -webkit-max-content;
    height: -moz-max-content;
    height: max-content;
}

.cart-step-two__form-inputs {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
}
.cart-step-two__form .cart-step-two__form-inputs input {
    width: calc(50% - 5px);
}
.cart-step-two__form input,
.cart-step-two__form textarea {
    display: block;
    width: 100%;
    margin-bottom: 10px;
    border-radius: 8px;
    border: 1px solid;
    font-size: 13px;
    color: #0A3251;
    font-family: inherit;
    border: 1px solid #EEEEEE;
    -webkit-transition: .5s;
    -o-transition: .5s;
    transition: .5s;
}
.cart-step-two__form input::-webkit-input-placeholder, .cart-step-two__form textarea::-webkit-input-placeholder {
    color: #A2A2A2;
}
.cart-step-two__form input::-moz-placeholder, .cart-step-two__form textarea::-moz-placeholder {
    color: #A2A2A2;
}
.cart-step-two__form input:-ms-input-placeholder, .cart-step-two__form textarea:-ms-input-placeholder {
    color: #A2A2A2;
}
.cart-step-two__form input::-ms-input-placeholder, .cart-step-two__form textarea::-ms-input-placeholder {
    color: #A2A2A2;
}
.cart-step-two__form input::placeholder,
.cart-step-two__form textarea::placeholder {
    color: #A2A2A2;
}
.cart-step-two__form input:focus,
.cart-step-two__form textarea:focus {
    border: 1px solid #0A3251;
}
.cart-step-two__form input {
    line-height: 58px;
    padding: 0 13px;
}
.cart-step-two__form input:focus:valid,
.cart-step-two__form textarea:focus:valid {
    border: 1px solid green;
}
.cart-step-two__form textarea {
    padding: 22px  13px;
    height: 150px;
}

.step-two-continue {
    display: block;
    margin: 25px 0 0 auto;
    line-height: 56px;
    width: 190px;
    border-radius: 9px;
    color: #fff;
    background-color: #0A3251;
    font-size: 13px;
    font-weight: bold;
    -webkit-transition: .6s;
    -o-transition: .6s;
    transition: .6s;
    text-align: center;
}
.step-two-continue:hover {
    background-color: var(--yellow);
    color:  #0A3251;
}



/*  steps - cart-item-aside  (for step 2 3 4) */
.cart-item-aside {
    width: 345px;
    background-color: #fff;
    padding: 20px;
    border-radius: 17px;
    border: 1px solid #F8F8F8;
    height: -webkit-max-content;
    height: -moz-max-content;
    height: max-content;
}
.cart-item-aside__title {
    color: #0A3251;
    font-size: 12px;
    font-weight: bold;
}
.aside-card {
    color: #505B74;
    padding: 16px 0;
    border-bottom: 1px solid  #F5F5F5;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
}
.aside-card:hover {
    border-bottom: 1px solid  var(--yellow);
}
.aside-card__link {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
}
.aside-card__link:hover .aside-card__img{
    border: 1px solid  var(--yellow);
}
.aside-card__img {
    width: 63px;
    height: 63px;
    border: 1px solid  #F5F5F5;
    border-radius: 10px;
    padding: 8px;
}
.aside-card__name {
    margin-left: 10px;
    width: 105px;
    font-size: 13px;
    font-weight: normal;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}

.aside-card__right {
    height: 57px;
    border-left: 1px solid #F5F5F5;
    padding-left: 24px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: end;
        -ms-flex-align: end;
            align-items: flex-end;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
}
.aside-card__price {
    font-size: 13px;
}

.cart-item-aside__costs {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
}
.cart-item-aside__costs.my{
    margin: 18px 0 12px;
}
.cart-item-aside__costs p {
    font-size: 12px;
    color: #688093;
}
.cart-item-aside__costs span {
    font-size: 12px;
    font-weight: bold;
    color: #505B74;
    width: 75px;
    text-align: right;
}
.cart-item-aside__costs  .total-cost{
    font-size: 14px;
}




/* ------ cart-step-3.html   ----  */

/* section 1 - cart steps  progress */

/* section 2 -  cart steps section  */
.delivery-payment-methods {
    width: 100%;
    background-color: #222529;
    border-radius: 17px;
    border: 1px solid #3e3e3e;
    padding: 22px 35px 50px;
    height: -webkit-max-content;
    height: -moz-max-content;
    height: max-content;
}

.last-steps__title {
    padding-bottom: 15px;
    border-bottom: 1px solid #3e3e3e;
    color: #fff;
    font-size: 15px;
    margin-bottom: 18px;
}
.last-steps__sub-title {
    margin-bottom: 12px;
    color: #fff;
    font-size: 12px;
    font-weight: 500;
}

.delivery-warning {
    background-color: #F8F8F8;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    height: 62px;
    border-radius: 11px;
    padding: 5px  16px;
    margin-bottom: 24px;
}
.delivery-warning span  {
    margin-right: 16px;
}
.delivery-warning p {
    color: #688093;
    font-size: 11px;
}
.delivery-warning p:first-of-type {
    margin-bottom: 10px;
}

/* radios */
.purchase-radio-wrap {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
.purchase-radio-wrap > *+* {
    margin-left: 15px;
}
.purchase-radio {
    position: relative;
    width: 25%;
    min-height: 150px;
    border-radius: 9px;
    background-color: #F8F8F8;
    overflow: hidden;
}
.purchase-radio input {
    width: 100%;
    height: 100%;
    position: relative;
    z-index: 5;
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
    cursor: pointer;
}
.purchase-radio__overlay {
	background: #2c2f33;
	border: 1px solid #3e3e3e;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    padding: 5px;
    color: #fff;
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
}
.purchase-radio__overlay span {
    max-width: 90%;
    text-align: center;
    font-size: 12px;
}
.purchase-radio input:checked + .purchase-radio__overlay {
    background-color: #505B74;
    color: #fff;
}
.purchase-radio input:checked + .purchase-radio__overlay svg {
    fill: #fff;
}

.delivery-location {
    margin-top: 20px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    height: 44px;
    border-radius: 8px;
    border: 1px solid #EEEEEE;
    width: 314px;
    padding: 5px;
}
.delivery-location input {
    width: 86%;
    font-size: 12px;
    color: #505B74;
    border: none;
    padding: 0 5px;
}
.delivery-location span {
    width: 32px;
    height: 32px;
    border-radius: 5px;
    background-color: #F8F8F8;
}
.delivery-location span svg {
    fill: #505B74;
    height: 15px;
}

.last-steps-continue {
    margin-top: 20px;
    background-color: #505B74;
    display: block;
    line-height: 42px;
    width: 135px;
    border-radius: 12px;
    text-align: center;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    -webkit-transition: .6s;
    -o-transition: .6s;
    transition: .6s;
}
.last-steps-continue:hover {
    background-color: var(--yellow);
    color: #505B74;
}



/* ------ cart-step-4.html   ----  */

/* section 1 - cart step progress */


/* section 2 - cart steps section */
.card-payment {
    margin-top: 25px;
    color: #505B74;
}
.bank-payment__title {
    font-size: 12px;
    margin-bottom: 20px;
}

.bank-payment-radios {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
}
.bank-payment-radios >*+* {
    margin-left: 10px;
}
/*  bank radios */
.bank-payment-radio {
    border-radius: 8px;
    border: 1px solid #505B74;
    line-height: 48px;
    padding: 0 20px 0 14px;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
}
.bank-payment-radio__content {
    font-size: 12px;
    font-weight: bold;
    color: #505B74;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
}
.bank-payment-radio__content img{
    margin-right: 10px;
    min-width: 30px;
}
.bank-payment-radio input {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
    cursor: pointer;
}
.bank-payment-radio__sign {
    position: absolute;
    top: 5px;
    right: 5px;
    background-color: #505B74;
    color: #fff;
    width: 11px;
    height: 11px;
    border-radius: 50%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    font-size: 7px;
    padding-bottom: 1px;
    opacity: 0;
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
}

.bank-payment-radio input:checked + .bank-payment-radio__sign {
    opacity: 1;
}
</style>
@endsection

@section('js')
<script src="{{ asset('assets/js/scripts/checkout_scripts.js') }}"></script>
<script src="https://webstatic.bog.ge/bog-sdk/bog-sdk.js?client_id=1006"></script>
@endsection