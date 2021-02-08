<?php include 'inc/header-woo.php';?>
<section>
  <div class="bottom-header woo-bottom-header">
    <div class="container-fluid">
      <div class="row px-2">
        <ul class="woo-menu p-0 d-flex justify-content-center m-0 w-100 list-unstyled hn-b">
          <li><a href="my-account.php">Profile</a></li>
          <li><a href="orders.php">Orders</a></li>
          <li><a href="points.php">Points</a></li>
          <li><a href="settings.php">Settings</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="my-account-section">
  <div class="container-fluid">
    <div class="row px-2 profile-sort-details">
      <div class="account-info d-table">
        <div class="profile-image">
          <img src="./images/95x95.png" alt="" class="" width="95" height="95" />
        </div>
        <div class="profile-meta">
          <h1 class="m-0">Johnny Appleseed</h1>
          <p class="m-0">Hush member since August 2018</p>
        </div>
      </div>
    </div>
    <div class="recent-orders-list row justify-content-between px-2">
      <div class="recent-order-details">
        <div class="recent-order-breatcrumb d-table">
          <h3>Recent Orders</h3><a href="order.php">View All</a>
        </div>
      </div>
    </div>
    <div class="recent-orders row justify-content-between px-2">
      <div class="order-list-item">
        <div class="ordered-item-image">
          <a href="product.php">
            <img src="./images/shoes2.jpg" alt="" class="w-100" />
          </a>
        </div>
      </div>
      <div class="order-list-item">
        <div class="ordered-item-image">
          <a href="product.php">
            <img src="./images/shoes3.jpg" alt="" class="w-100" />
          </a>
        </div>
      </div>
      <div class="order-list-item">
        <div class="ordered-item-image">
          <a href="product.php">
            <img src="./images/shoes4.jpg" alt="" class="w-100" />
          </a>
        </div>
      </div>
      <div class="order-list-item">
        <div class="ordered-item-image">
          <a href="product.php">
            <img src="./images/shoes6.jpg" alt="" class="w-100" />
          </a>
        </div>
      </div>
    </div>
    <div class="row px-2">
      <div class="order-info">
        <p class="order-number mb-0">Order (#11245) - <span>Shipped</span></p>
        <p class="delivery-area">3 items were delivered to MITCHELL MCNEELANDS <br /> in TORONTO, ON</p>
      </div>
    </div>
  </div>
</section>

<section class="trending-now product-section-4">
  <div class="container-fluid">
    <div class="row trending-section">
      <h4 class="col px-2 d-none d-lg-block">Member Benefits</h4>
      <!-- <h4 class="col px-2 d-lg-none">Gear Up</h4> -->
    </div>
    <div class="row justify-content-between">
      <div class="my-account-page-slider swiper swiper-container">
        <div class="swiper-wrapper px-2">
          <div class="swiper-slide mb-4">
            <div class="product-card">
              <div class="product-card-body">
                <div class="card-header-area">

                </div>
                <div class="card-footer-area">
                  <p>Member Benefit 1</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide mb-4">
            <div class="product-card">
              <div class="product-card-body">
                <div class="card-header-area">

                </div>
                <div class="card-footer-area">
                  <p>Member Benefit 2</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide mb-4">
            <div class="product-card">
              <div class="product-card-body">
                <div class="card-header-area">

                </div>
                <div class="card-footer-area">
                  <p>Member Benefit 3</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide mb-4">
            <div class="product-card">
              <div class="product-card-body">
                <div class="card-header-area">

                </div>
                <div class="card-footer-area">
                  <p>Member Benefit 4</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide mb-4">
            <div class="product-card">
              <div class="product-card-body">
                <div class="card-header-area">

                </div>
                <div class="card-footer-area">
                  <p>Member Benefit 5</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide mb-4">
            <div class="product-card">
              <div class="product-card-body">
                <div class="card-header-area">

                </div>
                <div class="card-footer-area">
                  <p>Member Benefit 6</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide mb-4">
            <div class="product-card">
              <div class="product-card-body">
                <div class="card-header-area">

                </div>
                <div class="card-footer-area">
                  <p>Member Benefit 7</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="my-account-page-scroller swiper-scrollbar"></div>
      </div>
    </div>
  </div>
</section>
<?php include 'inc/footer.php';?>