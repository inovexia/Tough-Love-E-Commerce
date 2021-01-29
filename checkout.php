<?php include 'inc/header.php';?>
<section class="checkout-section">
  <div class="container-fluid">
    <div class="row text-left px-2 px-md-3">
      <div class="col px-0 checkout-title">
        <h1 class="hn-m">Checkout</h1>
      </div>
    </div>
    <div class="row justify-content-between px-2 px-md-3">
      <div class="checkout-left-part">
        <div class="w-100 detail-outer-1 mb-20">
          <div class="checkout-summary w-100 justify-content-between d-inline-flex">
            <h5 class="text-white hn-m m-0">Delivery Address</h5>
            <span class="edit"><a href="#">Edit</a></span>
          </div>
          <div class="shipping-details border">
            <div class="address-form">
              <form class="shipping-address-form" action="" method="post">
                <div class="form-row">
                  <div class="col px-2 col-12 col-md-6">
                    <input type="text" class="form-control" id="f-name" placeholder="First Name" name="fname">
                  </div>
                  <div class="col px-2 col-12 col-md-6">
                    <input type="text" class="form-control" id="l-name" placeholder="Last Name" name="l-name">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col px-2">
                    <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                  </div>
                </div>
                <div class="form-row suite-checkbox">
                  <p class="open-suite position-relative">Add suite or Unit #</p>
                </div>
                <div id="suite-open" class="form-row suite-hidden">
                  <div class="col px-2">
                    <input type="text" class="form-control" id="suite" placeholder="Suite" name="suite">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col px-2 col-12 col-md-4">
                    <input type="text" class="form-control" id="city" placeholder="City" name="city">
                  </div>
                  <div class="col px-2 col-12 col-md-4">
                    <input type="text" class="form-control" id="province" placeholder="Province" name="province">
                  </div>
                  <div class="col px-2 col-12 col-md-4">
                    <input type="text" class="form-control" id="p-code" placeholder="Postal Code" name="p-code">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col px-2 col-12 col-md-6">
                    <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone">
                  </div>
                  <div class="col px-2 col-12 col-md-6">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col text-right">
                    <button class="submit-btn continue">CONTINUE</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="editable-address-outer">
              <div class="editable-address border">
                <div class="editable-data">
                  <div class="editable-address-data d-flex justify-content-between">
                    <ul class="py-0 list-unstyled mb-0 position-relative">
                      <li>John AppleSeed</li>
                      <li>123 Main Street</li>
                      <li>Vancouver, BC V1T 4H8</li>
                      <li><a href="mailto:account@email.com" class="text-decoration-none">account@email.com</a></li>
                      <li><a href="tel:+1 (123) 456 - 7890" class="text-decoration-none">+1 (123)
                          456 - 7890</a></li>
                    </ul>
                    <div class="edit-address-btn">
                      <button class="add-new-address-btn">Edit</button>
                    </div>

                  </div>
                </div>
              </div>
              <div class="add-new-address text-right">
                <button class="add-new-address-btn">Add New Address</button>
              </div>
              <div class="selected-shipping-speed">
                <div class="selected-shipping">
                  <label class="w-100 custom-radio radio_btn_label active m-0">
                    <input type="radio" id="credit-card" name="selected-payment" class="radio_input" checked>
                    <span class="radio_mark payment-name">
                      <strong>Free</strong>
                      Arrives by Thur, Jan 28
                    </span>
                  </label>
                  <label class="w-100 custom-radio radio_btn_label m-0 radio-btn-2">
                    <input type="radio" id="bit-coin" name="selected-payment" class="radio_input">
                    <span class="radio_mark payment-name">
                      <strong>$5.00</strong>
                      Arrives by Tues, Jan 26
                    </span>
                  </label>
                  <label class="w-100 custom-radio radio_btn_label m-0 radio-btn-2">
                    <input type="radio" id="bit-coin" name="selected-payment" class="radio_input">
                    <span class="radio_mark payment-name">
                      <strong>$15.00</strong>
                      Arrives by Mon, Jan 25
                    </span>
                  </label>
                </div>
              </div>
              <div class="review-btn w-100 text-right">
                <a href="#" class="continue-to-payment btn rev-order text-uppercase d-inline-block">
                  CONTINUE TO PAYMENT
                </a>
              </div>
            </div>



            <div class="shipping-detail-added collapse">
              <h6 class="hn-m m-0 pb-2">Shipping Address</h6>
              <ul class="p-0 list-unstyled shipping-address">
                <li>John AppleSeed 123</li>
                <li>Main Street</li>
                <li>Vancouver, BC V1T 4H8</li>
                <li><a href="mailto:account@email.com">account@email.com</a></li>
                <li><a href="tel:+1 (123) 456 - 7890">+1 (123) 456 - 7890</a></li>
              </ul>
              <h6 class="hn-m m-0 pb-2">Shipping Speed</h6>
              <ul class="p-0 list-unstyled shipping-address">
                <li>Free</li>
                <li>Arrive by Thurs, Jan 28</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="w-100 detail-outer-1 d-none">
          <div class="checkout-summary w-100 justify-content-between d-inline-flex">
            <h5 class="text-white hn-m m-0">Delivery Address</h5>
            <span><a href="#">Edit</a></span>
          </div>
          <div class="shipping-details border">
            <h6 class="hn-m m-0 pb-2">Shipping Address</h6>
            <ul class="p-0 list-unstyled shipping-address">
              <li>John AppleSeed 123</li>
              <li>Main Street</li>
              <li>Vancouver, BC V1T 4H8</li>
              <li><a href="mailto:account@email.com">account@email.com</a></li>
              <li><a href="tel:+1 (123) 456 - 7890">+1 (123) 456 - 7890</a></li>
            </ul>
            <h6 class="hn-m m-0 pb-2">Shipping Speed</h6>
            <ul class="p-0 list-unstyled shipping-address">
              <li>Free</li>
              <li>Arrive by Thurs, Jan 28</li>
            </ul>
          </div>
        </div>
        <div class="w-100 detail-outer-2">
          <div class="checkout-summary w-100 justify-content-between d-inline-flex">
            <h5 class="text-white hn-m m-0">Payment</h5>
            <span class="">
              <a href="#" class="payment-edit">Edit</a>
            </span>
          </div>
          <div id="payment" class="">
            <div class="shipping-details border payment-review collapse">
              <p class="pay-method">Payment Method</p>
              <span class="pay-type">Interac E Transfer<i class="fa fa-credit-card credit-card"
                  aria-hidden="true"></i></span>
            </div>
            <div class="payment-form-outer form-outer">
              <form action="">
                <div class="shipping-details border">
                  <div class="apply-form">
                    <div class="form-group">
                      <label for="points" class="hn-l mb-0">Points Available: <span class="hn-m">12,800</span> </label>
                      <div class="apply-input d-flex justify-content-between">
                        <input type="text" class="form-control mr-3" placeholder="Use Hush Points" id="points">
                        <button type="submit" class="btn btn-primary text-uppercase">Apply</button>
                      </div>
                    </div>
                  </div>
                  <div class="apply-form ">
                    <div class="form-group mb-0">
                      <label for="coupon-code" class="hn-l mb-0">Coupon Code</label>
                      <div class="apply-input d-flex justify-content-between">
                        <input type="text" class="form-control mr-3" placeholder="Enter Coupon Code" id="coupon-code">
                        <button type="submit" class="btn btn-primary text-uppercase">Apply</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="shipping-details border border-top-0">
                  <div id="paymentTab" class="radio-features">
                    <div class="radio_tabs d-block d-lg-flex justify-content-between select-payment-option">
                      <label class="custom-radio radio_btn_label active m-0" data-radio="radio_1">
                        <input type="radio" id="credit-card" name="payment_option" class="radio_input" checked>
                        <i class="fa fa-credit-card credit-card" aria-hidden="true"></i><span
                          class="radio_mark payment-name">Interac E Transfer</span>
                      </label>
                      <label class="custom-radio radio_btn_label m-0 radio-btn-2" data-radio="radio_2">
                        <input type="radio" id="bit-coin" name="payment_option" class="radio_input">
                        <i class="fa fa-btc" aria-hidden="true"></i><span class="radio_mark payment-name">Interac E
                          Transfer</span>
                      </label>
                    </div>
                    <div class="radio-content">
                      <div class="radio_content radio_1 active">
                        <p class="redirected-text hn-m">Please use the following information
                          when sending payment</p>
                        <div class="checkout-emails justify-content-between d-block d-md-flex">
                          <div class="col-12 col-md-6 p-0">
                            <div class="checkout-email-data">
                              <p><span class="">Email:</span><a href="mailto:example@email.com">
                                  example@email.com</a></p>
                              <p><span class="">Question:</span> QuestionExample</p>
                            </div>
                          </div>
                          <div class="col-12 col-md-6 p-0">
                            <div class="checkout-email-data">
                              <p><span class="">Answer:</span> QuestionExample</p>
                              <p><span class="">Order Note:</span> QuestionExample</p>
                            </div>
                          </div>
                        </div>
                        <div class="checkout-total-price">
                          <p><span class="">Total:</span> $19:00</p>
                        </div>
                      </div>
                      <div class="radio_content radio_2">
                        <p class="redirected-text hn-m">You will be redirected to our coinbase
                          merchant after you place your order.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="review-btn w-100 text-right">
                    <button type="button" class="review-order btn rev-order text-uppercase d-inline-block">
                      Review Your Order
                    </button>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
        <div class="w-100 detail-outer-4 mt-3">
          <div class="checkout-summary w-100 justify-content-between d-inline-flex collapsed" data-toggle="collapse"
            data-target="#review-order">
            <h5 class="text-white hn-m m-0">Order Review</h5>
          </div>
          <div id="review-order" class="collapse">
            <div class="shipping-details border">
              <p class="review-text hn-l">By clicking the Place Order button, you confirm that you have
                read and understood, and accept our Terms and Conditions, Return Policy, and Privacy
                Policy.</p>
              <div class="review-btn w-100 text-right">
                <a href="#" class="btn rev-order text-uppercase d-inline-block">
                  Place Your Order
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="checkout-right-part checkout-summary-list mt-4 mt-md-0">
        <div class="w-100 checkout-summary-details">
          <div class="checkout-detail w-100 justify-content-between d-inline-flex">
            <h5 class="hn-m m-0">Summary</h5>
            <span><a href="#">Edit</a></span>
          </div>
        </div>
        <div class="cart-summary">
          <ul class="p-0 m-0 list-unstyled">
            <li class="justify-content-between s-total d-flex">
              <strong>Subtotal</strong>
              <span>$120.00</span>
            </li>
            <li class="justify-content-between estimated d-flex">
              <strong>Estimated Delivery</strong>
              <span>$$19.00</span>
            </li>
            <li class="justify-content-between tax d-flex">
              <strong>Taxes</strong>
              <span>—</span>
            </li>
            <li class="justify-content-between total d-flex">
              <strong>Total</strong>
              <span>$19.00</span>
            </li>
          </ul>
          <div class="cart-item d-flex mt-4 checkout-item-summary">
            <div class="item-thumbnail">
              <img src="images/pdt3.jpg" alt="Item" class="w-100 d-none">
            </div>
            <div class="item-detail">
              <h6 class="">Nike Blazer 77 Vintage Low Top Men’s Shoe</h6>
              <p class="item-category hn-l">Category: Dried Flower</p>
              <p class="item-tag hn-l">Quantity: 1 @ $120.00</p>
              <p class="item-conf hn-l">Sku: 253563423</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php include 'inc/footer.php';?>