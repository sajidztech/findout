<?php require_once('../../default-elements/dashboard-header.blade.php'); ?> 
<?php require_once('customer-menu-contents.blade.php'); ?> 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 table-responsive">
              <!-- ALL LISTING STARTS -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Property Image</th>
                    <th>Property Name</th>
                    <th>Property Address</th>
                    <th>Dealer Name</th>
                    <th>Started At</th>
                    <th>Ended At</th>
                    <th>Days</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>
                        <img src="../../assets/images/property/property-1.jpeg" alt="property">
                    </td>
                    <td><a href="../../single-listing-1.blade.php">Property name - 1</a></td>
                    <td>ABCD, Florida, USA</td>
                    <td><a href="../../agent-or-agency-single.blade.php">Dealer name - 1</a></td>
                    <td>12, JAN, 2022</td>
                    <td>22, JAN, 2022</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="10"></div>
                        </div>
                        <p>7 off 10 days</p>
                    </td>
                    <td><label class="badge badge-success">running</label></td>
                    <td>
                        <a href="#" class="btn-10 p-1 bg-success">renew</a>
                        <a href="#" class="btn-10 p-1 bg-danger">cancel</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>
                        <img src="../../assets/images/property/property-1.jpeg" alt="property">
                    </td>
                    <td><a href="../../single-listing-1.blade.php">Property name - 2</a></td>
                    <td>ABCD, Florida, USA</td>
                    <td><a href="../../agent-or-agency-single.blade.php">Dealer name - 1</a></td>
                    <td>12, JAN, 2022</td>
                    <td>22, JAN, 2022</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="10"></div>
                        </div>
                        <p>5 off 10 days</p>
                    </td>
                    <td><label class="badge badge-success">running</label></td>
                    <td>
                        <a href="#" class="btn-10 p-1 bg-success">renew</a>
                        <a href="#" class="btn-10 p-1 bg-danger">cancel</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>
                        <img src="../../assets/images/property/property-1.jpeg" alt="property">
                    </td>
                    <td><a href="../../single-listing-1.blade.php">Property name - 3</a></td>
                    <td>ABCD, Florida, USA</td>
                    <td><a href="../../agent-or-agency-single.blade.php">Dealer name - 1</a></td>
                    <td>12, DEC, 2021</td>
                    <td>17, DEC, 2021</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5"></div>
                        </div>
                        <p>5 off 5 days</p>
                    </td>
                    <td><label class="badge badge-success">ended</label></td>
                    <td>
                        <a href="#" class="btn-10 p-1 bg-success">book again</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>
                        <img src="../../assets/images/property/property-1.jpeg" alt="property">
                    </td>
                    <td><a href="../../single-listing-1.blade.php">Property name - 4</a></td>
                    <td>ABCD, Florida, USA</td>
                    <td><a href="../../agent-or-agency-single.blade.php">Dealer name - 1</a></td>
                    <td>12, DEC, 2021</td>
                    <td>17, DEC, 2021</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 1%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="0"></div>
                        </div>
                        <p>0 off 5 days</p>
                    </td>
                    <td><label class="badge badge-danger">cancled</label></td>
                    <td>
                        <a href="#" class="btn-10 p-1 bg-success">book now</a>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
              <!-- ALL LISTING ENDS -->
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
<?php require_once('../../default-elements/dashboard-footer.blade.php'); ?> 