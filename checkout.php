<?php include 'inc/header.php';?>
    <section class="checkout-section">
      <div class="container-fluid">
        <div class="row text-left">
          <div class="col">
             <h5 class="hn-m">Checkout</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-8">
            
            <div class="w-100 detail-outer-1">
              <div class="checkout-summary w-100 justify-content-between d-inline-flex">
                  <h5 class="text-white hn-m m-0">Delivery Address</h5><span><a href="#">Edit</a></span>
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
              </div>
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
                  <div class="apply-form">
                    <div class="form-group">
                      <label for="coupon-code" class="hn-l mb-0">Coupon Code</label>
                      <div class="apply-input d-flex justify-content-between">
                      <input type="text" class="form-control mr-3" placeholder="Enter Coupon Code" id="coupon-code">
                      <button type="submit" class="btn btn-primary text-uppercase">Apply</button>
                      </div>
                    </div>
                  </div> 
              </div>
              <div class="shipping-details border border-top-0">
                  <div class="select-payment-option d-block d-md-flex justify-content-between">
                    <div class="custom-control custom-radio radio-button1">
                      <input type="radio" id="defaultRadio1" name="example2" checked="checked">
                      <label for="defaultRadio1" class="mb-0"><i class="fa fa-credit-card credit-card" aria-hidden="true"></i><span class="payment-name">Interac E Transfer</span></label>
                    </div>  
                    <div class="custom-control custom-radio mt-3 mt-md-0 radio-button2">  
                      <input type="radio" id="defaultRadio2" name="example2">
                      <label for="defaultRadio2" class="mb-0"><i class="fa fa-btc" aria-hidden="true"></i><span class="payment-name">Crypto Currency</span></label>
                    </div>   
                  </div>

                  <!-- <div class="select-payment-option d-block d-md-flex justify-content-between">
                    <div class="custom-control custom-radio radio-button1 active-btn">
                      
                    <label class="custom-radio-btn m-0">
                      <i class="fa fa-credit-card credit-card" aria-hidden="true"></i>
                      <span class="payment-name">Interac E Transfer</span>
                      <input type="radio" checked="checked" name="radio">
                      <span class="checkmark"></span>
                    </label>
                    </div> 
                    <div class="custom-control custom-radio mt-3 mt-md-0 radio-button2">  
                       <label class="custom-radio-btn m-0">
                         <i class="fa fa-btc" aria-hidden="true"></i>
                         <span class="payment-name">Crypto Currency</span>
                          <input type="radio" name="radio">
                          <span class="checkmark"></span>
                        </label>
                    </div>   
                  </div> -->
                  <p class="redirected-text hn-m">You will be redirected to our coinbase merchant after you place your order.</p>
                  <div class="checkout-emails justify-content-between d-block d-md-flex">
                    <div class="col-12 col-md-6 p-0">
                        <div class="checkout-email-data">
                          <p><span class="">Email:</span><a href="mailto:example@email.com"> example@email.com</a></p>
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

                  <div class="review-btn w-100 text-right">
                    <a href="#" class="btn rev-order text-uppercase d-inline-block">
                      Review Your Order
                    </a>
                  </div>


              </div>
</form>
            </div>
          </div>
          <div class="col-12 col-md-4 checkout-summary-list mt-4 mt-md-0">
              <div class="w-100 checkout-summary-details">
                <div class="checkout-detail w-100 justify-content-between d-inline-flex">
                  <h5 class="hn-m m-0">Summary</h5><span><a href="#">Edit</a></span>
              </div>
              </div>
            <div class="cart-summary">
              <ul class="p-0 m-0 list-unstyled">
                <li class="justify-content-between s-total d-flex">
                  <strong>Subtotal</strong>
                  <span>$120.00</span>
                </li>
                <li class="justify-content-between estimated d-flex">
                  <strong>Estimated Delivery & Handling</strong>
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
              <div class="cart-item d-flex mt-4">
                <div class="item-thumbnail">
                  <img src="images/pdt3.jpg" alt="Item" class="w-100 d-none">
                </div>
                <div class="item-detail">
                  <h6 class="hn-m pt-2">Nike Air Force 1 ‘07</h6>
                  <p class="item-category hn-l">Men’s Shoes</p>
                  <p class="item-tag hn-l">Indica Leaning</p>
                  <p class="item-conf hn-l">Weight 3.5g | Quantity 1</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
<?php include 'inc/footer.php';?>