<?php require_once('../../default-elements/dashboard-header.blade.php'); ?> 
<?php require_once('agent-menu-contents.blade.php'); ?> 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <!-- EDIT PROFILE STARTS -->
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Password reset</h4>
                    <form method="POST" action="edit-profile.blade.php" class="form-inline">
                      <div class="form-group row">
                        <label for="resetnewpassword" class="col-sm-3 col-form-label">Set New Password</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="resetnewpassword" id="resetnewpassword">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="againresetnewpassword" class="col-sm-3 col-form-label">Type Again New Password</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="againresetnewpassword" id="againresetnewpassword">
                        </div>
                      </div>
                      <div class="form-check mx-sm-2">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                          Remember me
                        </label>
                      </div>
                      <button type="submit" class="btn btn-primary mb-2">Submit</button>
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