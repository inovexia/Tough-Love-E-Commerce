<?php include 'inc/header-woo.php';?>
<section>
  <div class="bottom-header woo-bottom-header order-page-botton-header">
    <div class="container-fluid">
      <div class="row px-0 order-menu-border no-gutters">
        <div class="col-12 col-md-3">
          <h1 class="page-title-area">Orders</h1>
        </div>
        <div class="col-12 col-md-6">
          <ul class="woo-menu p-0 d-flex justify-content-center m-0 w-100 list-unstyled hn-b">
            <li><a href="my-account.php">Profile</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="points.php">Points</a></li>
            <li><a href="settings.php">Settings</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-3">

        </div>

      </div>
    </div>
  </div>
</section>
<section class="order-section">
  <div class="container-fluid">
    <div class="row px-2 px-md-0">
      <div class="order-status-clock d-flex justify-content-center m-0 w-100">

        <div class="clock-image">
          <img src="./images/clock.png" alt="" class="" width="40" height="40" />
        </div>
        <div class="tracking-title">
          <p class="m-0">Please allow up to <a href="#">three business days</a> for your tracking number to appear</p>

        </div>
      </div>
    </div>
    <div class="order-list-outer px-2">
      <div class="order-status-list d-block d-md-flex no-gutters">
        <div class="col-12 col-md-8 d-flex">
          <div class="item-card-outer mx-0">
            <div class="item-image-card">
              <img src="./images/210x210.jpg" alt="" class="" />
            </div>
            <div class="item-detail-card">
              <span class="order-in-process order-status-pill">Processing</span>
              <h5 class="ordered-item-name">Nike Trainer 3 Baby/Toddler Shoe</h5>
              <p class="item-order-date">Ordered: Jan 22, 2021</p>
              <p class="item-order-number">Order #G10024522887</p>
            </div>
          </div>

        </div>
        <div class="col-12 col-md-4 mt-3 mt-md-0">
          <div class="order-status-card">

          </div>
        </div>

      </div>
      <div class="order-status-list d-block d-md-flex no-gutters">
        <div class="col-12 col-md-8 d-flex">
          <div class="item-card-outer mx-0">
            <div class="item-image-card">
              <img src="./images/210x210.jpg" alt="" class="" />
            </div>
            <div class="item-detail-card">
              <span class="order-on-hold order-status-pill">On Hold</span>
              <h5 class="ordered-item-name">Nike Trainer 3 Baby/Toddler Shoe</h5>
              <p class="item-order-date">Ordered: Jan 22, 2021</p>
              <p class="item-order-number">Order #G10024522887</p>
            </div>
          </div>

        </div>
        <div class="col-12 col-md-4 mt-3 mt-md-0">
          <div class="order-status-card text-left text-md-right">
            <button type="button" class="order-action-btn">Cancel Order</button>
          </div>
        </div>

      </div>
      <div class="order-status-list d-block d-md-flex no-gutters">
        <div class="col-12 col-md-8 d-flex">
          <div class="item-card-outer mx-0">
            <div class="item-image-card">
              <img src="./images/210x210.jpg" alt="" class="" />
            </div>
            <div class="item-detail-card">
              <span class="order-shipped order-status-pill">Shipped</span>
              <h5 class="ordered-item-name">Nike Trainer 3 Baby/Toddler Shoe</h5>
              <p class="item-order-date">Ordered: Jan 22, 2021</p>
              <p class="item-order-number">Tracking: 1234567891011121314</p>
            </div>
          </div>

        </div>
        <div class="col-12 col-md-4 text-left text-md-right mt-3 mt-md-0">
          <div class="order-status-card">
            <a href="#" class="order-action-btn">Track Order</a>
          </div>
        </div>

      </div>
      <div class="order-status-list d-block d-md-flex no-gutters">
        <div class="col-12 col-md-8 d-flex">
          <div class="item-card-outer mx-0">
            <div class="item-image-card">
              <img src="./images/210x210.jpg" alt="" class="" />
            </div>
            <div class="item-detail-card">
              <span class="order-canceled order-status-pill">Canceled</span>
              <h5 class="ordered-item-name">Nike Trainer 3 Baby/Toddler Shoe</h5>
              <p class="item-order-date">Ordered: Jan 22, 2021</p>
              <p class="item-order-number">Order #G10024522887</p>
            </div>
          </div>

        </div>
        <div class="col-12 col-md-4 mt-3 mt-md-0">
          <div class="order-status-card">

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<?php include 'inc/footer.php';?>