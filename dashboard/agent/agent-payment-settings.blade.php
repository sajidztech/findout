<?php require_once('../../default-elements/dashboard-header.blade.php'); ?> 
<?php require_once('agent-menu-contents.blade.php'); ?> 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <!-- EDIT PROFILE STARTS -->
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add your Payment info</h4>
                    <form class="form-edit-profile" action="#" method="POST">
                      <p class="card-description">
                        Add the Bank information here to get paid
                      </p>
                      <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                          <div class="form-floating w-100 mb-0">
                            <input type="text" class="form-control" id="bankaccountname" name="bankaccountname" placeholder="Your Account name">
                            <label for="bankaccountname" class="basecolor"><i class="fas fa-user"></i> Your Account name</label>
                          </div>
                          <i>please add the exact name that you have in your Bank account name</i>
                        </div> <!-- col-md-6 -->
                        <div class="col-md-6 mb-4">
                          <div class="form-floating w-100 mb-0">
                            <input type="text" class="form-control" id="bankaccountnumber" name="bankaccountnumber" placeholder="Your Bank Account Number">
                            <label for="bankaccountnumber" class="basecolor"><i class="fas fa-file-invoice-dollar"></i> Your Bank Account Number (Ex: xxx-xxx-xxxxx)</label>
                          </div>
                          <i>please add the exact account number that you have in your Bank</i>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mt-4">
                          <div class="form-floating w-100 mb-0">
                            <input type="email" class="form-control" id="bankname" name="bankname" placeholder="bankname">
                            <label for="bankname" class="basecolor"><i class="fas fa-university"></i> Bank Name (Ex: Dutch Bangla Bank Ltd.)</label>
                          </div>
                          <i>Please add the Bank name with exact name.</i>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col-md-12">
                          <button type="submit" class="btn-11">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- EDIT PROFILE ENDS -->
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
<?php require_once('../../default-elements/dashboard-footer.blade.php'); ?> 