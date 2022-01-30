<?php require_once('../../default-elements/dashboard-header.blade.php'); ?> 
<?php require_once('admin-menu-contents.blade.php'); ?> 
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
                    <th>Created At</th>
                    <th>Dealer Name</th>
                    <th>Fields Complete</th>
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
                    <td><a href="listing-approve-edit.blade.php">Property name - 1</a></td>
                    <td>12, JAN, 2022</td>
                    <td><a href="../../agent-or-agency-single.blade.php">Dealer name - 1</a></td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>75 Out off 100</p>
                    </td>
                    <td><label class="badge badge-danger">Pending</label></td>
                    <td>
                        <a href="#" class="btn-10 p-1 bg-success">approved</a>
                        <a href="#" class="btn-10 p-1 bg-danger">Reject</a>
                        <a href="#" class="btn-10 p-1  bg-warning">soft reject</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>
                        <img src="../../assets/images/property/property-1.jpeg" alt="property">
                    </td>
                    <td><a href="listing-approve-edit.blade.php">Property name - 1</a></td>
                    <td>12, JAN, 2022</td>
                    <td><a href="../../agent-or-agency-single.blade.php">Dealer name - 1</a></td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>50 Out off 100</p>
                    </td>
                    <td><label class="badge badge-danger">Pending</label></td>
                    <td>
                        <a href="#" class="btn-10 p-1 bg-success">approved</a>
                        <a href="#" class="btn-10 p-1 bg-danger">Reject</a>
                        <a href="#" class="btn-10 p-1  bg-warning">soft reject</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>
                        <img src="../../assets/images/property/property-1.jpeg" alt="property">
                    </td>
                    <td><a href="listing-approve-edit.blade.php">Property name - 1</a></td>
                    <td>12, JAN, 2022</td>
                    <td><a href="../../agent-or-agency-single.blade.php">Dealer name - 1</a></td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>25 Out off 100</p>
                    </td>
                    <td><label class="badge badge-danger">Pending</label></td>
                    <td>
                        <a href="#" class="btn-10 p-1 bg-success">approved</a>
                        <a href="#" class="btn-10 p-1 bg-danger">Reject</a>
                        <a href="#" class="btn-10 p-1  bg-warning">soft reject</a>
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