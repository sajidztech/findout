<?php require_once('../../default-elements/dashboard-header.blade.php'); ?> 
<?php require_once('agent-menu-contents.blade.php'); ?> 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="fas fa-share"></i> Share</a>
                      <a href="#" class="btn btn-otline-dark"><i class="fas fa-print"></i> Print</a>
                      <a href="#" class="btn btn-primary text-white me-0"><i class="fas fa-download"></i> Export</a>
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Total posted</p>
                            <h3 class="rate-percentage">1,025</h3>
                            <p class="text-danger d-flex"><i class="fas fa-sort-down"></i><span class="ms-1 mt-1">-0.5%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Total approved</p>
                            <h3 class="rate-percentage">862</h3>
                            <p class="text-success d-flex"><i class="fas fa-sort-up mt-2"></i><span class="ms-1 mt-1">+0.1%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Waiting list</p>
                            <h3 class="rate-percentage">163</h3>
                            <p class="text-danger d-flex"><i class="fas fa-sort-down"></i><span class="ms-1 mt-1">-0.5%</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Deal starts</p>
                            <h3 class="rate-percentage">553</h3>
                            <p class="text-danger d-flex"><i class="fas fa-sort-down"></i><span class="ms-1 mt-1">-0.5%</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Deal ends</p>
                            <h3 class="rate-percentage">125</h3>
                            <p class="text-success d-flex"><i class="fas fa-sort-up mt-2"></i><span class="ms-1 mt-1">+0.1%</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Your earning</p>
                            <h3 class="rate-percentage">$ 2525</h3>
                            <p class="text-success d-flex"><i class="fas fa-sort-up mt-2"></i><span class="ms-1 mt-1">+0.1%</span></p>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row ">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Total property deal</h4>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-5">
                                  <canvas id="performaneLine"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row">
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card basebg card-rounded">
                              <div class="card-body pb-0">
                                <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                                <div class="row">
                                  <div class="col-sm-4">
                                    <p class="status-summary-ight-white mb-1">Closed Value</p>
                                    <h2 class="text-info whitecolor">357</h2>
                                  </div>
                                  <div class="col-sm-8">
                                    <div class="status-summary-chart-wrapper pb-4">
                                      <canvas id="status-summary"></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                      <div class="circle-progress-width">
                                        <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Total deals</p>
                                        <h4 class="mb-0 fw-bold">26.80%</h4>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="circle-progress-width">
                                        <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Total visitor</p>
                                        <h4 class="mb-0 fw-bold">9065</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row ">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Earning Overview</h4>
                                  </div>
                                </div>
                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                  <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">$36,2531.00</h2><h4 class="me-2">USD</h4><h4 class="text-success">(+1.37%)</h4></div>
                                  <div class="me-3"><div id="marketing-overview-legend"></div></div>
                                </div>
                                <div class="chartjs-bar-wrapper mt-3">
                                  <canvas id="marketingOverview"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row ">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Pending deals approval</h4>
                                   <p class="card-subtitle card-subtitle-dash">Customers are waiting for your approval</p>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </th>
                                        <th>Customers</th>
                                        <th>Property name</th>
                                        <th>Booked at</th>
                                        <th>Booked for</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="../../assets/images/faces/face1.jpg" alt="">
                                            <div>
                                              <a href="#">Brandon Washington</a>
                                              <p>Washington DC, USA</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Property name 1</h6>
                                          <p>Rent</p>
                                        </td>
                                        <td>
                                          <p>3 Hours Ago</p>
                                        </td>
                                        <td>
                                          <p>7 days</p>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">Pending</div></td>
                                        <td><a href="#" class="badge badge-opacity-success">approve</a></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row ">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Running delas</h4>
                                   <p class="card-subtitle card-subtitle-dash">The deals are running for your properties</p>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </th>
                                        <th>Customers</th>
                                        <th>Property name</th>
                                        <th>Booked at</th>
                                        <th>Booked time</th>
                                        <th>Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="../../assets/images/faces/face1.jpg" alt="">
                                            <div>
                                              <a href="#">Brandon Washington</a>
                                              <p>Washington DC, USA</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Property name 1</h6>
                                          <p>Rent</p>
                                        </td>
                                        <td>
                                          <p>12, JAN, 2022</p>
                                        </td>
                                        <td>
                                          <div class="progress">
                                              <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <p>7 Out off 10</p>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">running</div></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row ">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Deals end today</h4>
                                   <p class="card-subtitle card-subtitle-dash">The deals are running for your properties</p>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </th>
                                        <th>Customers</th>
                                        <th>Property name</th>
                                        <th>Booked at</th>
                                        <th>Booked time</th>
                                        <th>Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="../../assets/images/faces/face1.jpg" alt="">
                                            <div>
                                              <a href="#">Brandon Washington</a>
                                              <p>Washington DC, USA</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Property name 1</h6>
                                          <p>Rent</p>
                                        </td>
                                        <td>
                                          <p>12, JAN, 2022</p>
                                        </td>
                                        <td>
                                          <div class="progress">
                                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <p>10 Out off 10</p>
                                        </td>
                                        <td><a href="#" class="badge badge-opacity-danger">unapprove</a></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="../../assets/images/faces/face1.jpg" alt="">
                                            <div>
                                              <a href="#">Brandon Washington</a>
                                              <p>Washington DC, USA</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Property name 1</h6>
                                          <p>Rent</p>
                                        </td>
                                        <td>
                                          <p>12, JAN, 2022</p>
                                        </td>
                                        <td>
                                          <div class="progress">
                                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <p>10 Out off 10</p>
                                        </td>
                                        <td><div href="#" class="badge badge-opacity-success">Approve</div></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row ">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div>
                                        <h4 class="card-title card-title-dash">Your last deals</h4>
                                      </div>
                                    </div>
                                    <div class="mt-3">
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="../../assets/images/faces/face1.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold"><a href="#" class="basecolor text-decoration-none">Brandon Washington</a></p>
                                            <small class="text-dark fw-bolder mb-0">$250</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          7 days ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="../../assets/images/faces/face1.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold"><a href="#" class="basecolor text-decoration-none">Brandon Washington</a></p>
                                            <small class="text-dark fw-bolder mb-0">$250</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          7 days ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="../../assets/images/faces/face1.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold"><a href="#" class="basecolor text-decoration-none">Brandon Washington</a></p>
                                            <small class="text-dark fw-bolder mb-0">$250</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          7 days ago
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row ">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div>
                                        <h4 class="card-title card-title-dash">Top dealers</h4>
                                      </div>
                                    </div>
                                    <div class="mt-3">
                                      <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="../../assets/images/faces/face5.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold"><a href="#" class="basecolor text-decoration-none">Rafell John</a></p>
                                            <small class="text-dark mb-0">9 delas</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
<?php require_once('../../default-elements/dashboard-footer.blade.php'); ?> 