<?php require_once('../../default-elements/dashboard-header.blade.php'); ?> 
<?php require_once('customer-menu-contents.blade.php'); ?> 
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
                            <p class="statistics-title">Total deal</p>
                            <h3 class="rate-percentage">10</h3>
                            <p class="text-danger d-flex"><i class="fas fa-sort-down"></i><span class="ms-1 mt-1">-0.5%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Deal running</p>
                            <h3 class="rate-percentage">2</h3>
                            <p class="text-success d-flex"><i class="fas fa-sort-up mt-2"></i><span class="ms-1 mt-1">+0.1%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Deal successfully end</p>
                            <h3 class="rate-percentage">5</h3>
                            <p class="text-danger d-flex"><i class="fas fa-sort-down"></i><span class="ms-1 mt-1">-0.5%</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Deal canceled</p>
                            <h3 class="rate-percentage">3</h3>
                            <p class="text-danger d-flex"><i class="fas fa-sort-down"></i><span class="ms-1 mt-1">-0.5%</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Your sent</p>
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
                                    <h4 class="card-title card-title-dash">Hot Deals</h4>
                                   <p class="card-subtitle card-subtitle-dash">You have 10+ latest deals</p>
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
                                        <th>property</th>
                                        <th>saler name</th>
                                        <th>Rating</th>
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
                                            <img src="../../assets/images/property/propert-2.jpg" alt="propert-2">
                                            <div>
                                              <h6><a href="#">Property name 1</a></h6>
                                              <p>Washington DC, USA</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6><a href="../../agent-or-agency-single.blade.php">agent name</a></h6>
                                          <p>Agent</p>
                                        </td>
                                        <td><div class="badge badge-opacity-success">5 star (2)</div></td>
                                        <td><a href="../single-listing-1.blade.php" class="bg-success whitecolor px-1">Book now</a></td>
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
                                            <img src="../../assets/images/property/propert-2.jpg" alt="propert-2">
                                            <div>
                                              <h6><a href="#">Property name 1</a></h6>
                                              <p>Washington DC, USA</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6><a href="../../agent-or-agency-single.blade.php">agent name</a></h6>
                                          <p>Agent</p>
                                        </td>
                                        <td><div class="badge badge-opacity-success">5 star (2)</div></td>
                                        <td><a href="../single-listing-1.blade.php" class="bg-success whitecolor px-1">Book now</a></td>
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
                                            <img src="../../assets/images/property/propert-2.jpg" alt="propert-2">
                                            <div>
                                              <h6><a href="#">Property name 1</a></h6>
                                              <p>Washington DC, USA</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6><a href="../../agent-or-agency-single.blade.php">agent name</a></h6>
                                          <p>Agent</p>
                                        </td>
                                        <td><div class="badge badge-opacity-success">5 star (2)</div></td>
                                        <td><a href="../single-listing-1.blade.php" class="bg-success whitecolor px-1">Book now</a></td>
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