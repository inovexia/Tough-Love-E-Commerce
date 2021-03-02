<?php include 'inc/header-woo.php';?>
<section>
  <div class="bottom-header woo-bottom-header order-page-botton-header">
    <div class="container-fluid">
      <div class="row px-0 order-menu-border no-gutters">
        <div class="col-12 col-md-3">
          <h1 class="page-title-area">Settings</h1>
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
<section class="setting-section mb-5">
  <div class="container-fluid">
    <div class="row px-2">
      <div class="setting-form-outer">
        <h5 class="mb-0">Account Details</h5>
        <div class="setting-form">
          <form action="" class="setting-form-area">
            <div class="form-row justify-content-between no-gutters mx-0">
              <div class="half-area">
                <input type="text" class="form-control" id="email-id" placeholder="Email" name="email">
              </div>
              <div class="half-area">
                <input type="text" class="form-control" id="phone-number" placeholder="Phone Number" name="phone">
              </div>
            </div>
            <div class="form-row justify-content-between no-gutters mx-0">
              <div class="half-area">
                <input type="text" class="form-control" id="f-name" placeholder="First Name" name="fname">
              </div>
              <div class="half-area">
                <input type="text" class="form-control" id="l-name" placeholder="Last Name" name="l-name">
              </div>
            </div>
            <div class="form-row justify-content-between no-gutters mx-0">
              <div class="full-area address-area">
                <input type="text" class="form-control" id="address" placeholder="Address" name="address">
              </div>
            </div>
            <div class="form-row justify-content-between no-gutters mx-0">
              <div class="half-area">
                <input type="text" class="form-control" id="suite" placeholder="Suite #" name="suite">
              </div>
              <div class="half-area">
                <input type="text" class="form-control" id="city" placeholder="City" name="city">
              </div>
            </div>
            <div class="form-row justify-content-between no-gutters mx-0">
              <div class="half-area">
                <input type="text" class="form-control" id="postal-code" placeholder="Postal Code" name="postal-code">
              </div>
              <div class="half-area">
                <select name="province" id="province" value="Province">
                  <option value="Province" selected="selected">Province</option>
                  <option value="option 1">Option 1</option>
                  <option value="option 2">Option 2</option>
                  <option value="option 3">Option 3</option>
                  <option value="option 4">Option 4</option>
                </select>
              </div>
            </div>
            <hr class="form-seperator" />
            <div class="form-row justify-content-between no-gutters mx-0 pass-and-dob">
              <div class="half-area">
                <p class="password-edit d-flex justify-content-between">
                  <span>Password</span>
                  <span class="edit-saved-data" data-toggle="modal" data-target="#edit-password">Edit</span>
                </p>
                <div class="password-value">
                  ****************
                </div>
              </div>
              <div class="half-area">
                <p class="dob-edit d-flex justify-content-between">
                  <span>Date of Birth</span>
                  <span class="edit-saved-data" data-toggle="modal" data-target="#edit-dob">Edit</span>
                </p>
                <div class="dob-value">
                  04/03/1989
                </div>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>
<section>
  <div class="modal fade edit-form-data-model px-0" id="edit-password" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mx-auto" role="document">
      <div class="modal-content">
        <div class="p-0">
          <h5 class="modal-title">Change Your Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="./images/cancel.png" alt="" />
          </button>
        </div>
        <div class="p-0">
          <form>
            <div class="model-form-data">
              <div class="full-area mb-2">
                <input type="password" class="form-control" id="c-pass" placeholder="Current Password"
                  name="current-pass">
              </div>
              <div class="full-area mb-2">
                <input type="password" class="form-control" id="n-pass" placeholder="New Password" name="new-password">
              </div>
              <div class="full-area mb-2">
                <button type="submit" class="form-control" id="pass-submit" name="pass-submit">SAVE</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade edit-form-data-model px-0" id="edit-dob" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mx-auto" role="document">
      <div class="modal-content">
        <div class="p-0">
          <h5 class="modal-title">Date of Birth</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="./images/cancel.png" alt="" />
          </button>
        </div>
        <div class="p-0">
          <form>
            <div class="model-form-data">
              <div class="full-area mb-2">
                <input type="text" id="date" name="trip-start" class="form-control py-0" placeholder="Month/Day/Year"
                  onfocus="(this.type='date')" onblur="(this.type='text')">
              </div>
              <div class="full-area mb-2">
                <button type="submit" class="form-control" id="pass-submit" name="pass-submit">SAVE</button>
              </div>


            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'inc/footer.php';?>