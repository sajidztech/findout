<?php require_once('default-elements/public-footer.blade.php'); ?> 
        <div class="listinglistfullwrapper w-100 overflow-hidden ashligthbg pt-75px pb-75px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">listing-full-width</li>
                            </ol>
                        </nav>
                        <h4 class="mb-3 text-capitalize fw-bold">list Full Width</h4>
                    </div> <!-- col-md-12 -->
                </div> <!-- row -->
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="search-filter-close-btn-in-list-page w-100 overflow-hidden text-capitalize fw-bold mb-3 d-lg-block d-md-block">
                            <button type="button" class="btn-6 float-end"><i class="fas fa-sort-amount-up-alt"></i> show filter</button>
                        </div> <!-- search-filter-close-btn-in-list-page -->
                        <form action="#" method="GET" class="w-100 overflow-hidden">
                            <div class="search-filter-in-list-page no-display w-100 whitebg">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-xs-12 mb-2">
                                        <div class="inputerbox w-100">
                                            <input type="text" name="keyword" id="searchedkeyword" placeholder="Keyword">
                                            <label for="searchedkeyword"><i class="fi-rs-search"></i></label>
                                        </div> <!-- inputerbox -->
                                    </div> <!-- col-lg-4 col-md-6 col-xs-12 -->
                                    <div class="col-lg-4 col-md-6 col-xs-12 mb-2">
                                        <div class="inputerbox w-100">
                                            <input type="text" name="location" id="locationkeyword" placeholder="Location">
                                            <label for="locationkeyword"><i class="fi-rs-marker"></i></label>
                                        </div> <!-- inputerbox -->
                                    </div> <!-- col-lg-4 col-md-6 col-xs-12 -->
                                    <div class="col-lg-4 col-md-6 col-xs-12 mb-2">
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
                                    </div> <!-- col-lg-4 col-md-6 col-xs-12 -->
                                    <div class="col-lg-4 col-md-6 col-xs-12 mb-2">
                                        <div class="inputerbox w-100 d-block position-relative">
                                            <span class="fieldlabel clicktoshow w-100 d-block">price range</span>
                                            <div class="pricingranger searchbarmodalpopup">
                                                <input type="text" id="amount" class="w-100 basecolor" readonly>
                                                <div id="pricesliderrange"></div>
                                            </div>
                                        </div> <!-- inputerbox -->
                                    </div> <!-- col-lg-4 col-md-6 col-xs-12 -->
                                    <div class="col-lg-4 col-md-6 col-xs-12 mb-2">
                                        <div class="inputerbox w-100 d-block position-relative">
                                            <span class="fieldlabel clicktoshow w-100 d-block">size range</span>
                                            <div class="pricingranger searchbarmodalpopup">
                                                <input type="text" id="size" class="w-100 basecolor" readonly>
                                                <div id="sizesliderrange"></div>
                                            </div>
                                        </div> <!-- inputerbox -->
                                    </div> <!-- col-lg-4 col-md-6 col-xs-12 -->
                                    <div class="col-lg-4 col-md-6 col-xs-12 mb-2">
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
                                    </div> <!-- col-lg-4 col-md-6 col-xs-12 -->
                                    <div class="col-md-12">
                                        <div class="inputerbox w-100 overflow-hidden px-0 py-0">
                                            <button type="submit" class="btn-6 w-100">search</button>
                                        </div> <!-- inputerbox -->
                                    </div> <!-- col-md-12 -->
                                </div> <!-- row -->
                            </div> <!-- search-filter-in-list-page -->
                        </form>
                    </div> <!-- col-md-12 -->
                    <div class="col-md-12">
                        <div class="listingfullwrapper w-100">
                            <div class="morefilteroptionswrapper w-100 whitebg px-3 mb-3">
                                <div class="container">
                                    <div class="row moreoptions justify-content-between">
                                        <ul class="filtermenubar list-unstyled w-100 overflow-hidden d-flex justify-content-center">
                                            <li data-filter="all">all</li>
                                            <li data-filter=".blade.php">html</li>
                                            <li data-filter=".css">css</li>
                                            <li data-filter=".jquery">jquery</li>
                                            <li data-filter=".php">php</li>
                                        </ul>
                                    </div> <!-- moreoptions -->
                                </div> <!-- container -->
                            </div> <!-- morefilteroptionswrapper -->
                            <div class="propertyfullwrapper w-100">
                                <div class="row">
                                    <div class="mix col-lg-4 col-md-6 col-sm-12 mb-4 html">
                                        <div class="propertylisting-v-1 w-100 overflow-hidden">
                                            <div class="propertywrapper">
                                                <ul class="featured-sales-rent">
                                                    <li><span class="featured">featured</span></li>
                                                    <li><span class="rent">rent</span></li>
                                                </ul>
                                                <img src="assets/images/property/property-1.jpeg" alt="property">
                                                <div class="property-v-1-details">
                                                    <a href="single-listing-1.blade.php"><h3>alishan luxurious</h3></a>
                                                    <span class="categoryblock"><i class="fas fa-tag"></i> <a href="#">apartment</a></span>
                                                    <h2>1,000/<span>mo</span></h2>
                                                    <div class="compareandlike">
                                                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </div>
                                                </div> <!-- property-v-1-details -->
                                                <div class="property-v-1-details-2-overlay d-flex">
                                                    <div class="w-100 overflow-hidden align-self-center">
                                                        <p>
                                                            <i class="fas fa-street-view"></i> 123/7 newtown, new city, newyourk, america
                                                        </p>
                                                        <ul class="property-specification">
                                                            <li><span>bedroom : 3</span></li>
                                                            <li><span>bathroom : 2</span></li>
                                                            <li><span>kitchen : 1</span></li>
                                                            <li><span>gym : 1</span></li>
                                                            <li><span>wifi : available</span></li>
                                                        </ul>
                                                    </div>
                                                </div> <!-- property-v-1-details-2-overlay -->
                                            </div> <!-- propertywrapper -->
                                            <div class="propertyauthor">
                                                <a href="#">
                                                    <img src="assets/images/people/people-1.jpg" alt="author">
                                                    md. sajid
                                                </a>
                                                <span>2 days ago</span>
                                            </div> <!-- propertyauthor -->
                                        </div> <!-- propertylisting-v-1 -->
                                    </div> <!-- col-lg-4 col-md-6 col-sm-12 -->
                                    <div class="mix col-lg-4 col-md-6 col-sm-12 mb-4 css">
                                        <div class="propertylisting-v-1 w-100 overflow-hidden">
                                            <div class="propertywrapper">
                                                <ul class="featured-sales-rent">
                                                    <li><span class="featured">featured</span></li>
                                                    <li><span class="rent">rent</span></li>
                                                </ul>
                                                <img src="assets/images/property/propert-10.jpg" alt="property">
                                                <div class="property-v-1-details">
                                                    <a href="single-listing-1.blade.php"><h3>alishan luxurious</h3></a>
                                                    <span class="categoryblock"><i class="fas fa-tag"></i> <a href="#">apartment</a></span>
                                                    <h2>1,000/<span>mo</span></h2>
                                                    <div class="compareandlike">
                                                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </div>
                                                </div> <!-- property-v-1-details -->
                                                <div class="property-v-1-details-2-overlay d-flex">
                                                    <div class="w-100 overflow-hidden align-self-center">
                                                        <p>
                                                            <i class="fas fa-street-view"></i> 123/7 newtown, new city, newyourk, america
                                                        </p>
                                                        <ul class="property-specification">
                                                            <li><span>bedroom : 3</span></li>
                                                            <li><span>bathroom : 2</span></li>
                                                            <li><span>kitchen : 1</span></li>
                                                            <li><span>gym : 1</span></li>
                                                            <li><span>wifi : available</span></li>
                                                        </ul>
                                                    </div>
                                                </div> <!-- property-v-1-details-2-overlay -->
                                            </div> <!-- propertywrapper -->
                                            <div class="propertyauthor">
                                                <a href="#">
                                                    <img src="assets/images/people/people-1.jpg" alt="author">
                                                    md. sajid
                                                </a>
                                                <span>2 days ago</span>
                                            </div> <!-- propertyauthor -->
                                        </div> <!-- propertylisting-v-1 -->
                                    </div> <!-- col-lg-4 col-md-6 col-sm-12 -->
                                    <div class="mix col-lg-4 col-md-6 col-sm-12 mb-4 jquery html">
                                        <div class="propertylisting-v-1 w-100 overflow-hidden">
                                            <div class="propertywrapper">
                                                <ul class="featured-sales-rent">
                                                    <li><span class="featured">featured</span></li>
                                                    <li><span class="rent">rent</span></li>
                                                </ul>
                                                <img src="assets/images/property/propert-8.jpeg" alt="property">
                                                <div class="property-v-1-details">
                                                    <a href="single-listing-1.blade.php"><h3>alishan luxurious</h3></a>
                                                    <span class="categoryblock"><i class="fas fa-tag"></i> <a href="#">apartment</a></span>
                                                    <h2>1,000/<span>mo</span></h2>
                                                    <div class="compareandlike">
                                                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </div>
                                                </div> <!-- property-v-1-details -->
                                                <div class="property-v-1-details-2-overlay d-flex">
                                                    <div class="w-100 overflow-hidden align-self-center">
                                                        <p>
                                                            <i class="fas fa-street-view"></i> 123/7 newtown, new city, newyourk, america
                                                        </p>
                                                        <ul class="property-specification">
                                                            <li><span>bedroom : 3</span></li>
                                                            <li><span>bathroom : 2</span></li>
                                                            <li><span>kitchen : 1</span></li>
                                                            <li><span>gym : 1</span></li>
                                                            <li><span>wifi : available</span></li>
                                                        </ul>
                                                    </div>
                                                </div> <!-- property-v-1-details-2-overlay -->
                                            </div> <!-- propertywrapper -->
                                            <div class="propertyauthor">
                                                <a href="#">
                                                    <img src="assets/images/people/people-1.jpg" alt="author">
                                                    md. sajid
                                                </a>
                                                <span>2 days ago</span>
                                            </div> <!-- propertyauthor -->
                                        </div> <!-- propertylisting-v-1 -->
                                    </div> <!-- col-lg-4 col-md-6 col-sm-12 -->
                                    <div class="mix col-lg-4 col-md-6 col-sm-12 mb-4 html php">
                                        <div class="propertylisting-v-1 w-100 overflow-hidden">
                                            <div class="propertywrapper">
                                                <ul class="featured-sales-rent">
                                                    <li><span class="featured">featured</span></li>
                                                    <li><span class="rent">rent</span></li>
                                                </ul>
                                                <img src="assets/images/property/propert-6.jpeg" alt="property">
                                                <div class="property-v-1-details">
                                                    <a href="single-listing-1.blade.php"><h3>alishan luxurious</h3></a>
                                                    <span class="categoryblock"><i class="fas fa-tag"></i> <a href="#">apartment</a></span>
                                                    <h2>1,000/<span>mo</span></h2>
                                                    <div class="compareandlike">
                                                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </div>
                                                </div> <!-- property-v-1-details -->
                                                <div class="property-v-1-details-2-overlay d-flex">
                                                    <div class="w-100 overflow-hidden align-self-center">
                                                        <p>
                                                            <i class="fas fa-street-view"></i> 123/7 newtown, new city, newyourk, america
                                                        </p>
                                                        <ul class="property-specification">
                                                            <li><span>bedroom : 3</span></li>
                                                            <li><span>bathroom : 2</span></li>
                                                            <li><span>kitchen : 1</span></li>
                                                            <li><span>gym : 1</span></li>
                                                            <li><span>wifi : available</span></li>
                                                        </ul>
                                                    </div>
                                                </div> <!-- property-v-1-details-2-overlay -->
                                            </div> <!-- propertywrapper -->
                                            <div class="propertyauthor">
                                                <a href="#">
                                                    <img src="assets/images/people/people-1.jpg" alt="author">
                                                    md. sajid
                                                </a>
                                                <span>2 days ago</span>
                                            </div> <!-- propertyauthor -->
                                        </div> <!-- propertylisting-v-1 -->
                                    </div> <!-- col-lg-4 col-md-6 col-sm-12 -->
                                    <div class="mix col-lg-4 col-md-6 col-sm-12 mb-4 html css jquery">
                                        <div class="propertylisting-v-1 w-100 overflow-hidden">
                                            <div class="propertywrapper">
                                                <ul class="featured-sales-rent">
                                                    <li><span class="featured">featured</span></li>
                                                    <li><span class="rent">rent</span></li>
                                                </ul>
                                                <img src="assets/images/property/propert-4.jpeg" alt="property">
                                                <div class="property-v-1-details">
                                                    <a href="single-listing-1.blade.php"><h3>alishan luxurious</h3></a>
                                                    <span class="categoryblock"><i class="fas fa-tag"></i> <a href="#">apartment</a></span>
                                                    <h2>1,000/<span>mo</span></h2>
                                                    <div class="compareandlike">
                                                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </div>
                                                </div> <!-- property-v-1-details -->
                                                <div class="property-v-1-details-2-overlay d-flex">
                                                    <div class="w-100 overflow-hidden align-self-center">
                                                        <p>
                                                            <i class="fas fa-street-view"></i> 123/7 newtown, new city, newyourk, america
                                                        </p>
                                                        <ul class="property-specification">
                                                            <li><span>bedroom : 3</span></li>
                                                            <li><span>bathroom : 2</span></li>
                                                            <li><span>kitchen : 1</span></li>
                                                            <li><span>gym : 1</span></li>
                                                            <li><span>wifi : available</span></li>
                                                        </ul>
                                                    </div>
                                                </div> <!-- property-v-1-details-2-overlay -->
                                            </div> <!-- propertywrapper -->
                                            <div class="propertyauthor">
                                                <a href="#">
                                                    <img src="assets/images/people/people-1.jpg" alt="author">
                                                    md. sajid
                                                </a>
                                                <span>2 days ago</span>
                                            </div> <!-- propertyauthor -->
                                        </div> <!-- propertylisting-v-1 -->
                                    </div> <!-- col-lg-4 col-md-6 col-sm-12 -->
                                    <div class="mix col-lg-4 col-md-6 col-sm-12 mb-4 html css">
                                        <div class="propertylisting-v-1 w-100 overflow-hidden">
                                            <div class="propertywrapper">
                                                <ul class="featured-sales-rent">
                                                    <li><span class="featured">featured</span></li>
                                                    <li><span class="rent">rent</span></li>
                                                </ul>
                                                <img src="assets/images/property/propert-2.jpg" alt="property">
                                                <div class="property-v-1-details">
                                                    <a href="single-listing-1.blade.php"><h3>alishan luxurious</h3></a>
                                                    <span class="categoryblock"><i class="fas fa-tag"></i> <a href="#">apartment</a></span>
                                                    <h2>1,000/<span>mo</span></h2>
                                                    <div class="compareandlike">
                                                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                                        <a href="#"><i class="fas fa-heart"></i></a>
                                                    </div>
                                                </div> <!-- property-v-1-details -->
                                                <div class="property-v-1-details-2-overlay d-flex">
                                                    <div class="w-100 overflow-hidden align-self-center">
                                                        <p>
                                                            <i class="fas fa-street-view"></i> 123/7 newtown, new city, newyourk, america
                                                        </p>
                                                        <ul class="property-specification">
                                                            <li><span>bedroom : 3</span></li>
                                                            <li><span>bathroom : 2</span></li>
                                                            <li><span>kitchen : 1</span></li>
                                                            <li><span>gym : 1</span></li>
                                                            <li><span>wifi : available</span></li>
                                                        </ul>
                                                    </div>
                                                </div> <!-- property-v-1-details-2-overlay -->
                                            </div> <!-- propertywrapper -->
                                            <div class="propertyauthor">
                                                <a href="#">
                                                    <img src="assets/images/people/people-1.jpg" alt="author">
                                                    md. sajid
                                                </a>
                                                <span>2 days ago</span>
                                            </div> <!-- propertyauthor -->
                                        </div> <!-- propertylisting-v-1 -->
                                    </div> <!-- col-lg-4 col-md-6 col-sm-12 -->
                                </div> <!-- row -->
                            </div> <!-- propertyfullwrapper -->
                        </div> <!-- listingfullwrapper -->
                    </div> <!-- col-lg-9 col-md-8 col-sm-12 -->
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- listinglistfullwrapper -->
<?php require_once('default-elements/public-footer.blade.php'); ?> 