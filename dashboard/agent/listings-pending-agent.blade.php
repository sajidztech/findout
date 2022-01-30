<?php require_once('../../default-elements/dashboard-header.blade.php'); ?> 
<?php require_once('agent-menu-contents.blade.php'); ?> 
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
                    <th>Created At</th>
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
                    <td><a href="listing-create-edit.blade.php">Property name - 1</a></td>
                    <td>ABCD, Florida, USA</td>
                    <td>12, JAN, 2022</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>75 Out off 100</p>
                    </td>
                    <td><label class="badge badge-danger">Pending</label></td>
                    <td>
                        <a href="#" class="btn-10 p-1"><i class="fas fa-pen-square"></i></a>
                        <a href="#" class="btn-10 p-1"><i class="fas fa-trash-alt"></i></a>
                        <a href="../../single-listing-1.blade.php" class="btn-10 p-1"><i class="fas fa-eye"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>
                        <img src="../../assets/images/property/property-1.jpeg" alt="property">
                    </td>
                    <td><a href="listing-create-edit.blade.php">Property name - 1</a></td>
                    <td>ABCD, Florida, USA</td>
                    <td>12, JAN, 2022</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>50 Out off 100</p>
                    </td>
                    <td><label class="badge badge-danger">Pending</label></td>
                    <td>
                        <a href="#" class="btn-10 p-1"><i class="fas fa-pen-square"></i></a>
                        <a href="#" class="btn-10 p-1"><i class="fas fa-trash-alt"></i></a>
                        <a href="../../single-listing-1.blade.php" class="btn-10 p-1"><i class="fas fa-eye"></i></a>
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