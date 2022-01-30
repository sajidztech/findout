<?php require_once('../../default-elements/dashboard-header.blade.php'); ?> 
<?php require_once('customer-menu-contents.blade.php'); ?> 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <!-- EDIT PROFILE STARTS -->
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users profile</h4>
                    <form class="form-edit-profile" action="#" method="POST">
                      <p class="card-description">
                        Personal info
                      </p>
                      <div class="row">
                        <div class="col-md-12 d-flex flex-column align-items-center">
                          <img src="../../assets/images/people/people-1.jpg" class="profile-picture-img" alt="profile image">
                          <div class="form-group">
                            <label class="propertyusersprofilepicture base-bg" for="propertyusersprofilepicture">upload profile picture</label>
                            <input type="file" class="form-control d-none" id="propertyusersprofilepicture" placeholder="Username" value="Uplaod Picture">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating w-100">
                            <input type="text" class="form-control" id="propertyuserfirstname" name="propertyuserfirstname" placeholder="Your First name" value="Md. Sajid">
                            <label for="propertyuserfirstname" class="basecolor"><i class="fas fa-user"></i> First Name</label>
                          </div>
                        </div> <!-- col-md-6 -->
                        <div class="col-md-6">
                          <div class="form-floating w-100">
                            <input type="text" class="form-control" id="propertyuserlastname" name="propertyuserlastname" placeholder="Your First name" value="Hasan">
                            <label for="propertyuserlastname" class="basecolor"><i class="fas fa-user"></i> Last Name</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-floating w-100">
                            <input type="email" class="form-control" id="propertyuseremail" name="propertyuseremail" placeholder="Your First name" value="sajidztech@gmail.com">
                            <label for="propertyuseremail" class="basecolor"><i class="fas fa-envelope-open"></i> Email Address</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating w-100">
                            <input type="date" class="form-control" id="propertyuserdob" name="propertyuserdob" placeholder="Your First name" value="1995-06-07">
                            <label for="propertyuserdob" class="basecolor"><i class="fas fa-calender"></i> Your date of Birth</label>
                          </div>
                        </div>
                      </div>
                      <p class="card-description">
                        Address
                      </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-floating w-100">
                            <input type="text" class="form-control" id="propertyuseraddress1" name="propertyuseraddress1" placeholder="Your First name" value="47/2 MG road">
                            <label for="propertyuseraddress1" class="basecolor"><i class="fas fa-map-marker-alt"></i> Address 1</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating w-100">
                            <input type="text" class="form-control" id="propertyuserstate" name="propertyuserstate" placeholder="Your First name" value="Narayanganj">
                            <label for="propertyuserstate" class="basecolor"><i class="fas fa-map"></i> State</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-floating w-100">
                            <input type="text" class="form-control" id="propertyuseraddress2" name="propertyuseraddress2" placeholder="Address 2" value="Tanbazar">
                            <label for="propertyuseraddress2" class="basecolor"><i class="fas fa-map-marker-alt"></i> Address 2</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating w-100">
                            <input type="number" class="form-control" id="propertyuserpostalcode" name="propertyuserpostalcode" placeholder="Postal Code" value="1400">
                            <label for="propertyuserpostalcode" class="basecolor"><i class="fas fa-mail-bulk"></i> Postal Code</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-floating w-100">
                            <input type="text" class="form-control" id="propertyusercity" name="propertyusercity" placeholder="Address 2" value="Narayanganj">
                            <label for="propertyusercity" class="basecolor"><i class="fas fa-flag-usa"></i> City</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <select class="form-select" aria-label="Default select example">
                            <option value="Bangladesh" selected>Bangladesh</option>
                            <option value="USA">USA</option>
                            <option value="France">France</option>
                            <option value="uk">U.K.</option>
                            <option value="Canada">Canada</option>
                          </select>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="btn-1">update</button>
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