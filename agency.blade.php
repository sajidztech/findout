<?php require_once('default-elements/public-header.blade.php'); ?> 
        <!-- AGENTS WRAPPER STARTS -->
        <div class="agentssectionfullwrapper w-100 overflow-hidden pt-75px pb-75px">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">agency</li>
                            </ol>
                        </nav>
                        <h4 class="mb-3 text-capitalize fw-bold">All agencies</h4>
                    </div> <!-- col-md-12 -->
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="Hadupadagentsoragencywrapper w-100 ashbg ps-3 py-3">
                                    <h4>find your agency</h4>
                                    <form action="#" method="GET" class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="agentoragencyname" id="agentoragencyname" placeholder="Agent Name" class="w-100 py-1 px-2">
                                        </div> <!-- col-md-12 -->
                                        <div class="col-md-12">
                                            <select name="agentoragencycategory" id="agentoragencycategory" class="mt-2 w-100">
                                                <option value=""  selected disabled hidden>select category</option>
                                                <option value="category type 1">category type 1</option>
                                                <option value="category type 2">category type 2</option>
                                                <option value="category type 3">category type 3</option>
                                                <option value="category type 4">category type 4</option> 
                                            </select>
                                        </div> <!-- col-md-12 -->
                                        <div class="col-md-12">
                                            <div class="agentoragencycity dropdown w-100 mt-2">
                                                <button class="dropdown-toggle w-100" type="button" id="selectcity" data-bs-toggle="dropdown" aria-expanded="false">select city</button>
                                                <div class="dropdown-menu w-100" aria-labelledby="selectcity">
                                                    <div class="hs-searchbox px-2 py-2">
                                                        <input type="text" class="form-control" id="propertyaddlistingcountry" name="propertyaddlistingcountry" autocomplete="off">
                                                    </div>
                                                    <div class="hs-menu-inner">
                                                        <a class="dropdown-item active" data-value="" data-default-selected="" href="#">select country</a>
                                                        <a class="dropdown-item" data-value="unitedstates" href="#">united states</a>
                                                        <a class="dropdown-item" data-value="london" href="#">london</a>
                                                        <a class="dropdown-item" data-value="bangladesh" href="#">bangladesh</a>
                                                        <a class="dropdown-item" data-value="india" href="#">india</a>
                                                        <a class="dropdown-item" data-value="pakistan" href="#">pakistan</a>
                                                        <a class="dropdown-item" data-value="canda" href="#">canda</a>
                                                        <a class="dropdown-item" data-value="brazil" href="#">brazil</a>
                                                        <a class="dropdown-item" data-value="argentina" href="#">argentina</a>
                                                        <a class="dropdown-item" data-value="ierland" href="#">ierland</a>
                                                        <a class="dropdown-item" data-value="germany" href="#">germany</a>
                                                        <a class="dropdown-item" data-value="itlay" href="#">itlay</a>
                                                    </div>
                                                </div> <!-- dropdown-menu -->
                                                <input class="d-none" name="propertyaddlistingcountry" readonly="readonly" aria-hidden="true" type="text"/>
                                            </div> <!-- countryhirarchical dropdown -->
                                        </div> <!-- col-md-12 -->
                                        <div class="col-md-12 mt-2">
                                            <button type="submit" class="btn-6 w-100">search</button>
                                        </div> <!-- col-md-12 -->
                                    </form>
                                </div> <!-- Hadupadagentsoragencywrapper -->
                            </div> <!-- col-md-12 -->
                            <div class="col-md-12">
                                <div class="propertycategory w-100 overflow-hidden px-4 py-4  ashbg mt-4">
                                    <h4 class="d-block overflow-hidden fw-bolder text-capitalize">property categories</h4>
                                    <ul>
                                        <li>
                                            <a href="#">apartment <span>(15)</span></a>
                                        </li>
                                        <li>
                                            <a href="#">condominium <span>(9)</span></a>
                                        </li>
                                        <li>
                                            <a href="#">house <span>(5)</span></a>
                                        </li>
                                        <li>
                                            <a href="#">single family <span>(3)</span></a>
                                        </li>
                                        <li>
                                            <a href="#">factory <span>(1)</span></a>
                                        </li>
                                    </ul>
                                </div> <!-- propertycategory -->
                            </div> <!-- col-md-12 -->
                            <div class="col-md-12">
                                <div class="propertyrecentlyviewed w-100 overflow-hidden px-4 py-4  ashbg mt-4">
                                    <h4 class="d-block overflow-hidden fw-bolder text-capitalize">recently viewed</h4>
                                    <div class="property">
                                        <img src="assets/images/property/propert-11.jpg" alt="property">
                                        <div class="recentpropertydetails">
                                            <a href="single-listing-1.blade.php">alishan luxuries</a>
                                            <h4>$10,000/mo</h4>
                                            <ul class="propertyspecification">
                                                <li>
                                                    <p><i class="fas fa-bed"></i> : 5</p>
                                                </li>
                                                <li>
                                                    <p><i class="fas fa-bath"></i> : 5</p>
                                                </li>
                                                <li>
                                                    <p><i class="fas fa-exchange-alt"></i> : 1875 sq.ft.</p>
                                                </li>
                                            </ul>
                                        </div> <!-- propertydetails -->
                                    </div> <!-- property -->
                                    <div class="property">
                                        <img src="assets/images/property/propert-4.jpeg" alt="property">
                                        <div class="recentpropertydetails">
                                            <a href="single-listing-1.blade.php">alishan luxuries</a>
                                            <h4>$10,000/mo</h4>
                                            <ul class="propertyspecification">
                                                <li>
                                                    <p><i class="fas fa-bed"></i> : 5</p>
                                                </li>
                                                <li>
                                                    <p><i class="fas fa-bath"></i> : 5</p>
                                                </li>
                                                <li>
                                                    <p><i class="fas fa-exchange-alt"></i> : 1875 sq.ft.</p>
                                                </li>
                                            </ul>
                                        </div> <!-- propertydetails -->
                                    </div> <!-- property -->
                                    <div class="property">
                                        <img src="assets/images/property/propert-7.jpeg" alt="property">
                                        <div class="recentpropertydetails">
                                            <a href="single-listing-1.blade.php">alishan luxuries</a>
                                            <h4>$10,000/mo</h4>
                                            <ul class="propertyspecification">
                                                <li>
                                                    <p><i class="fas fa-bed"></i> : 5</p>
                                                </li>
                                                <li>
                                                    <p><i class="fas fa-bath"></i> : 5</p>
                                                </li>
                                                <li>
                                                    <p><i class="fas fa-exchange-alt"></i> : 1875 sq.ft.</p>
                                                </li>
                                            </ul>
                                        </div> <!-- propertydetails -->
                                    </div> <!-- property -->
                                    <div class="property">
                                        <img src="assets/images/property/propert-5.jpeg" alt="property">
                                        <div class="recentpropertydetails">
                                            <a href="single-listing-1.blade.php">alishan luxuries</a>
                                            <h4>$10,000/mo</h4>
                                            <ul class="propertyspecification">
                                                <li>
                                                    <p><i class="fas fa-bed"></i> : 5</p>
                                                </li>
                                                <li>
                                                    <p><i class="fas fa-bath"></i> : 5</p>
                                                </li>
                                                <li>
                                                    <p><i class="fas fa-exchange-alt"></i> : 1875 sq.ft.</p>
                                                </li>
                                            </ul>
                                        </div> <!-- propertydetails -->
                                    </div> <!-- property -->
                                </div> <!-- propertyrecentlyviewed -->
                            </div> <!-- col-md-12 -->
                            <div class="col-md-12">
                                <div class="propertysearchfilterinsinglepage w-100 overflow-hidden px-4 py-4  ashbg mt-4">
                                    <h4 class="d-block overflow-hidden fw-bolder text-capitalize">advanced search</h4>
                                    <div class="advancedsearchfilter w-100 overflow-hidden">
                                        <div class="search-filter-close-btn-in-list-page w-100 overflow-hidden text-capitalize fw-bold mb-3 d-lg-none d-md-block">
                                            <button type="button" class="btn-6 float-end"><i class="fas fa-sort-amount-up-alt"></i> show filter</button>
                                        </div> <!-- search-filter-close-btn-in-list-page -->
                                        <form action="#" method="GET" class="w-100">
                                            <div class="search-filter-in-list-page w-100 whitebg">
                                                <div class="inputerbox w-100">
                                                    <input type="text" name="keyword" id="searchedkeyword" placeholder="Keyword">
                                                    <label for="searchedkeyword"><i class="fi-rs-search"></i></label>
                                                </div> <!-- inputerbox -->
                                                <div class="inputerbox w-100">
                                                    <input type="text" name="location" id="locationkeyword" placeholder="Location">
                                                    <label for="locationkeyword"><i class="fi-rs-marker"></i></label>
                                                </div> <!-- inputerbox -->
                                                <div class="inputerbox w-100">
                                                    <select name="propertytype" id="propertytype" class="w-100">
                                                        <option value=""  selected disabled hidden>property type</option>
                                                        <option value="apertment">apartment</option>
                                                        <option value="banglo">Bungalow</option>
                                                        <option value="factory">factory</option>
                                                        <option value="condo">condominium</option>
                                                        <option value="house">house</option>
                                                        <option value="singlefamily">single family</option>
                                                    </select>
                                                </div> <!-- inputerbox -->
                                                <div class="inputerbox w-100 d-block position-relative">
                                                    <span class="fieldlabel clicktoshow w-100 d-block">price range</span>
                                                    <div class="pricingranger searchbarmodalpopup">
                                                        <input type="text" id="amount" class="w-100 basecolor" readonly>
                                                        <div id="pricesliderrange"></div>
                                                    </div>
                                                </div> <!-- inputerbox -->
                                                <div class="inputerbox w-100 d-block position-relative">
                                                    <span class="fieldlabel clicktoshow w-100 d-block">size range</span>
                                                    <div class="pricingranger searchbarmodalpopup">
                                                        <input type="text" id="size" class="w-100 basecolor" readonly>
                                                        <div id="sizesliderrange"></div>
                                                    </div>
                                                </div> <!-- inputerbox -->
                                                <div class="inputerbox w-100 d-block position-relative">
                                                    <span class="fieldlabel advancedsearchoptionslabels w-100 d-block">advanced</span>
                                                    <div class="advancedsearchoptions w-100 overflow-hidden py-4 px-4">
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="aircondition" id="aircondition">
                                                            <label class="form-check-label text-capitalize" for="aircondition">
                                                                air condition
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="barbeque" id="barbeque">
                                                            <label class="form-check-label text-capitalize" for="barbeque">
                                                                barbeque
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="laundry" id="laundry">
                                                            <label class="form-check-label text-capitalize" for="laundry">
                                                                laundry
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="dryer" id="dryer">
                                                            <label class="form-check-label text-capitalize" for="dryer">
                                                                dryer
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="gym" id="gym">
                                                            <label class="form-check-label text-capitalize" for="gym">
                                                                gym
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="lawan" id="lawan">
                                                            <label class="form-check-label text-capitalize" for="lawan">
                                                                lawan
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="outdoorshower" id="outdoorshower">
                                                            <label class="form-check-label text-capitalize" for="outdoorshower">
                                                                outdoor shower
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="microwave" id="microwave">
                                                            <label class="form-check-label text-capitalize" for="microwave">
                                                                microwave
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="refrigaretor" id="refrigaretor">
                                                            <label class="form-check-label text-capitalize" for="refrigaretor">
                                                                refrigaretor
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="sauna" id="sauna">
                                                            <label class="form-check-label text-capitalize" for="sauna">
                                                                sauna
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="swimingpool" id="swimingpool">
                                                            <label class="form-check-label text-capitalize" for="swimingpool">
                                                                swiming pool
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="tvcable" id="tvcable">
                                                            <label class="form-check-label text-capitalize" for="tvcable">
                                                                TV cable
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="wifi" id="wifi">
                                                            <label class="form-check-label text-capitalize" for="wifi">
                                                                wifi
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="washer" id="washer">
                                                            <label class="form-check-label text-capitalize" for="washer">
                                                                washer
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="windowcovering" id="windowcovering">
                                                            <label class="form-check-label text-capitalize" for="windowcovering">
                                                                window covering
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <div class="form-check ms-1">
                                                            <input class="form-check-input" type="checkbox" value="reastroom" id="reastroom">
                                                            <label class="form-check-label text-capitalize" for="reastroom">
                                                                reast room
                                                            </label> <!-- form-check-label -->
                                                        </div> <!-- form-check -->
                                                        <input type="number" name="numberofbedroom" class="w-100" placeholder="Bedroom">
                                                        <input type="number" name="numberofbathroom" class="w-100" placeholder="Bathroom">
                                                        <input type="number" name="yearofbuilt" class="w-100" placeholder="The year of build">
                                                        <button type="button" class="btn-6 advancedsearchoptions-close float-end">close</button>
                                                    </div> <!-- advancedsearchwrapper -->
                                                </div> <!-- inputerbox -->
                                                <div class="inputerbox w-100 overflow-hidden px-0 py-0">
                                                    <button type="submit" class="btn-6 w-100">search</button>
                                                </div> <!-- inputerbox -->
                                            </div> <!-- search-filter-in-list-page -->
                                        </form>
                                    </div> <!-- advancedsearchfilter -->
                                </div> <!-- propertysearchfilterinsinglepage -->
                            </div> <!-- col-md-12 --> 
                        </div> <!-- row -->
                    </div> <!-- col-lg-4 col-md-12 -->
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="agentagencyfilteroption w-100">
                                        <div class="row justify-content-between">
                                            <div class="col-auto align-self-center">
                                                <p class="mb-0">5 results found</p>
                                            </div>
                                            <div class="col-auto sortedby d-flex">
                                                <span class="align-self-center me-2"><strong class="text-capitalize">sorted by :</strong></span>
                                                <select name="agentoragencysorter" id="agentoragencysorter">
                                                    <option value=""  selected disabled hidden>A - Z</option>
                                                    <option value="a-z">A - Z</option>
                                                    <option value="z-a">Z - A</option>
                                                    <option value="by name">By Name</option>
                                                    <option value="By category">By category</option> 
                                                </select>
                                            </div>
                                        </div> <!-- row -->
                                    </div> <!-- agentagencyfilteroption -->
                                </div> <!-- agentagencyfilteroptionw -->
                            </div> <!-- col-md-12 -->
                        </div> <!-- row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="agentagencywrapper w-100 ashbg overflow-hidden px-2 py-2">
                                    <div class="agentagencylogo">
                                        <img src="assets/images/real-estate-logo/real-estate-1.png" alt="agent or agency">
                                    </div> <!-- agentagencylogo -->
                                    <div class="agentagencydetails">
                                        <h4><a href="agent-or-agency-single.blade.php">real estate - 1</a></h4>
                                        <a href="agent.blade.php" class="category">agent</a>
                                        <p>mobile : (+123) 123 456 789</p>
                                        <p>office mobile : (+123) 123 456 789</p>
                                        <p>fax : (+123) 123 456 789</p>
                                        <p>email : agentname@mail.com</p>
                                        <ul class="list-unstyled w-100 overflow-hidden">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-dribbble-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-globe-americas"></i></a>
                                            </li>
                                        </ul>
                                        <a href="agent-or-agency-single.blade.php" class="btn-1">read more</a>
                                        <span class="listingcount">4 listed</span>
                                    </div> <!-- agentagencydetails -->
                                </div> <!-- agentagencywrapper -->
                            </div> <!-- col-md-12 -->
                            <div class="col-md-12">
                                <div class="agentagencywrapper w-100 ashbg overflow-hidden px-2 py-2">
                                    <div class="agentagencylogo">
                                        <img src="assets/images/real-estate-logo/real-estate-2.png" alt="agent or agency">
                                    </div> <!-- agentagencylogo -->
                                    <div class="agentagencydetails">
                                        <h4><a href="agent-or-agency-single.blade.php">real estate - 2</a></h4>
                                        <a href="agent.blade.php" class="category">agent</a>
                                        <p>mobile : (+123) 123 456 789</p>
                                        <p>office mobile : (+123) 123 456 789</p>
                                        <p>fax : (+123) 123 456 789</p>
                                        <p>email : agentname@mail.com</p>
                                        <ul class="list-unstyled w-100 overflow-hidden">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-dribbble-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-globe-americas"></i></a>
                                            </li>
                                        </ul>
                                        <a href="agent-or-agency-single.blade.php" class="btn-1">read more</a>
                                        <span class="listingcount">1 listed</span>
                                    </div> <!-- agentagencydetails -->
                                </div> <!-- agentagencywrapper -->
                            </div> <!-- col-md-12 -->
                            <div class="col-md-12">
                                <div class="agentagencywrapper w-100 ashbg overflow-hidden px-2 py-2">
                                    <div class="agentagencylogo">
                                        <img src="assets/images/real-estate-logo/real-estate-3.jpg" alt="agent or agency">
                                    </div> <!-- agentagencylogo -->
                                    <div class="agentagencydetails">
                                        <h4><a href="agent-or-agency-single.blade.php">real estate - 3</a></h4>
                                        <a href="agent.blade.php" class="category">agent</a>
                                        <p>mobile : (+123) 123 456 789</p>
                                        <p>office mobile : (+123) 123 456 789</p>
                                        <p>fax : (+123) 123 456 789</p>
                                        <p>email : agentname@mail.com</p>
                                        <ul class="list-unstyled w-100 overflow-hidden">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-dribbble-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-globe-americas"></i></a>
                                            </li>
                                        </ul>
                                        <a href="agent-or-agency-single.blade.php" class="btn-1">read more</a>
                                        <span class="listingcount">3 listed</span>
                                    </div> <!-- agentagencydetails -->
                                </div> <!-- agentagencywrapper -->
                            </div> <!-- col-md-12 -->
                            <div class="col-md-12">
                                <div class="agentagencywrapper w-100 ashbg overflow-hidden px-2 py-2">
                                    <div class="agentagencylogo">
                                        <img src="assets/images/real-estate-logo/real-estate-4.jpg" alt="agent or agency">
                                    </div> <!-- agentagencylogo -->
                                    <div class="agentagencydetails">
                                        <h4><a href="agent-or-agency-single.blade.php">real estate - 4</a></h4>
                                        <a href="agent.blade.php" class="category">agent</a>
                                        <p>mobile : (+123) 123 456 789</p>
                                        <p>office mobile : (+123) 123 456 789</p>
                                        <p>fax : (+123) 123 456 789</p>
                                        <p>email : agentname@mail.com</p>
                                        <ul class="list-unstyled w-100 overflow-hidden">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-dribbble-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-globe-americas"></i></a>
                                            </li>
                                        </ul>
                                        <a href="agent-or-agency-single.blade.php" class="btn-1">read more</a>
                                        <span class="listingcount">2 listed</span>
                                    </div> <!-- agentagencydetails -->
                                </div> <!-- agentagencywrapper -->
                            </div> <!-- col-md-12 -->
                            <div class="col-md-12">
                                <div class="agentagencywrapper w-100 ashbg overflow-hidden px-2 py-2">
                                    <div class="agentagencylogo">
                                        <img src="assets/images/real-estate-logo/real-estate-5.jpg" alt="agent or agency">
                                    </div> <!-- agentagencylogo -->
                                    <div class="agentagencydetails">
                                        <h4><a href="agent-or-agency-single.blade.php">real estate - 2</a></h4>
                                        <a href="agent.blade.php" class="category">agent</a>
                                        <p>mobile : (+123) 123 456 789</p>
                                        <p>office mobile : (+123) 123 456 789</p>
                                        <p>fax : (+123) 123 456 789</p>
                                        <p>email : agentname@mail.com</p>
                                        <ul class="list-unstyled w-100 overflow-hidden">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-dribbble-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-globe-americas"></i></a>
                                            </li>
                                        </ul>
                                        <a href="agent-or-agency-single.blade.php" class="btn-1">read more</a>
                                        <span class="listingcount">4 listed</span>
                                    </div> <!-- agentagencydetails -->
                                </div> <!-- agentagencywrapper -->
                            </div> <!-- col-md-12 -->
                        </div> <!-- row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="postpagination w-100 overflow-hidden">
                                    <nav class="navigation pagination">
                                        <div class="nav-links">
                                            <a href="#" class="page-numbers prev"><i class="fi-rs-arrow-left"></i></a>
                                            <a href="#" class="page-numbers">1</a>
                                            <span class="page-numbers current">2</span>
                                            <a href="#" class="page-numbers">3</a>
                                            <span class="page-numbers dots">...</span>
                                            <a href="#" class="page-numbers">10</a>
                                            <a href="#" class="page-numbers next"><i class="fi-rs-arrow-right"></i></a>
                                        </div> <!-- nav-links -->
                                    </nav> <!-- navigation pagination -->
                                </div> <!-- postpagination -->
                            </div> <!-- col-md-12 -->
                        </div> <!-- row -->
                    </div> <!-- col-lg-8 col-md-12 -->
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- agentssectionfullwrapper -->
        <!-- AGENTS WRAPPER ENDS -->
<?php require_once('default-elements/public-footer.blade.php'); ?> 