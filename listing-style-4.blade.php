<?php require_once('default-elements/public-header.blade.php'); ?> 
        <div class="listinglistfullwrapper w-100 overflow-hidden ashligthbg pt-75px pb-75px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">listing-style-4</li>
                            </ol>
                        </nav>
                        <h4 class="mb-3 text-capitalize fw-bold">list style-4</h4>
                    </div> <!-- col-md-12 -->
                </div> <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="morefilteroptionswrapper desktopview w-100 whitebg px-3 mb-3">
                            <div class="container">
                                <div class="row moreoptions justify-content-between">
                                    <p class="col-lg-3 col-md-4 mb-0 align-self-center">All results found</p>
                                    <div class="col-lg-9 col-md-8">
                                        <div class="row">
                                            <div class="col-auto moreoption">
                                                    <select name="quantityofproperty" id="quantityofproperty">
                                                        <option value=""  selected disabled hidden>select quantity</option>
                                                        <option value="6">6</option>
                                                        <option value="10">10</option>
                                                        <option value="15">15</option>
                                                    </select>
                                            </div> <!-- moreoption -->
                                            <div class="col-auto moreoption">
                                                <select name="statusofpost" id="statusofpost">
                                                    <option value=""  selected disabled hidden>proeprty status</option>
                                                    <option value="recent">recent properties</option>
                                                    <option value="thisweek">this week</option>
                                                    <option value="thismonth">this month</option>
                                                    <option value="lastmonth">last month</option>
                                                </select>
                                            </div> <!-- moreoption -->
                                            <div class="col-auto moreoption">
                                                <select name="sortingofproperty" id="sortingofproperty">
                                                    <option value=""  selected disabled hidden>sorting</option>
                                                    <option value="latestupload">latest upload</option>
                                                    <option value="atoz">A - Z</option>
                                                    <option value="ztoa">Z - A</option>
                                                </select>
                                            </div> <!-- moreoption -->
                                            <div class="col-auto moreoption">
                                                <a href="listing-style-1.blade.php"><i class="fi-rs-grid"></i></a>
                                            </div> <!-- moreoption -->
                                            <div class="col-auto moreoption">
                                                <a href="listing-style-4.blade.php"><i class="fi-rs-list"></i></a>
                                            </div> <!-- moreoption -->
                                        </div> <!-- row -->
                                    </div> <!-- col-auto -->
                                </div> <!-- moreoptions -->
                            </div> <!-- container -->
                        </div> <!-- morefilteroptionswrapper -->
                    </div> <!-- col-md-12 -->
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
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
                    </div> <!-- col-lg-4 col-md-12 col-sm-12 -->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="listingfullwrapper w-100">
                            <div class="morefilteroptionswrapper mobileview w-100 whitebg px-3 mb-3 d-lg-none d-md-block">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <p>All results found</p>
                                    </div> <!-- col align-self-start -->
                                    <div class="col-md-12">
                                        <div class="row moreoptions">
                                            <div class="col-auto moreoption">
                                                    <select name="quantityofproperty" id="quantityofpropertymobile">
                                                        <option value=""  selected disabled hidden>select quantity</option>
                                                        <option value="6">6</option>
                                                        <option value="10">10</option>
                                                        <option value="15">15</option>
                                                    </select>
                                            </div> <!-- moreoption -->
                                            <div class="col-auto moreoption">
                                                <select name="statusofpost" id="statusofpostmobile">
                                                    <option value=""  selected disabled hidden>proeprty status</option>
                                                    <option value="recent">recent properties</option>
                                                    <option value="thisweek">this week</option>
                                                    <option value="thismonth">this month</option>
                                                    <option value="lastmonth">last month</option>
                                                </select>
                                            </div> <!-- moreoption -->
                                            <div class="col-auto moreoption">
                                                <select name="sortingofproperty" id="sortingofpropertymobile">
                                                    <option value=""  selected disabled hidden>sorting</option>
                                                    <option value="latestupload">latest upload</option>
                                                    <option value="atoz">A - Z</option>
                                                    <option value="ztoa">Z - A</option>
                                                </select>
                                            </div> <!-- moreoption -->
                                            <div class="col-auto moreoption">
                                                <a href="listing-style-1.blade.php"><i class="fi-rs-grid"></i></a>
                                            </div> <!-- moreoption -->
                                            <div class="col-auto moreoption">
                                                <a href="listing-style-4.blade.php"><i class="fi-rs-list"></i></a>
                                            </div> <!-- moreoption -->
                                        </div> <!-- moreoptions -->
                                    </div> <!-- col align-self-end -->
                                </div> <!-- row -->
                            </div> <!-- morefilteroptionswrapper -->
                            <div class="propertyfullwrapper w-100">
                                <div class="propertylisting-v-4">
                                    <div class="propertylisting-v-4-thumb">
                                        <img src="assets/images/property/propert-6.jpeg" alt="">
                                        <ul class="featured-sales-rent">
                                            <li><span class="featured">featured</span></li>
                                            <li><span class="sales">sales</span></li>
                                        </ul>
                                        <div class="compareandlike">
                                            <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </div> <!-- compareandlike -->
                                    </div> <!-- propertylisting-v-4-thumb -->
                                    <div class="propertylisting-v-4-details">
                                        <div class="categoryblock">
                                            <i class="fas fa-tag"></i> <a href="#">apartment</a>
                                        </div> <!-- categoryblock -->
                                        <h3><a href="single-listing-1.blade.php">alishan luxuries</a></h3>
                                        <p><i class="fas fa-street-view"></i> 123/7 newtown, new city, newyourk, america</p>
                                        <ul class="property-specification overflow-hidden">
                                            <li><span><i class="fas fa-bed"></i> : </span>3</li>
                                            <li><span><i class="fas fa-bath"></i> : </span>2</li>
                                            <li><span><i class="fas fa-sink"></i> : 1</span></li>
                                            <li><span><i class="fas fa-dumbbell"></i> : </span>1</li>
                                            <li><span><i class="fas fa-wifi"></i> : </span>available</li>
                                        </ul>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam veniam expedita necessitatibus nihil vero totam distinctio, ducimus facere? Placeat rerum iure quos, culpa omnis ducimus!</p>
                                        <a href="single-listing-1.blade.php" class="btn-6">read more</a>
                                    </div> <!-- propertylisting-v-4-details -->
                                </div> <!-- propertylisting-v-4 -->
                                <div class="propertylisting-v-4">
                                    <div class="propertylisting-v-4-thumb">
                                        <img src="assets/images/property/propert-7.jpeg" alt="">
                                        <ul class="featured-sales-rent">
                                            <li><span class="featured">featured</span></li>
                                            <li><span class="sales">sales</span></li>
                                        </ul>
                                        <div class="compareandlike">
                                            <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </div> <!-- compareandlike -->
                                    </div> <!-- propertylisting-v-4-thumb -->
                                    <div class="propertylisting-v-4-details">
                                        <div class="categoryblock">
                                            <i class="fas fa-tag"></i> <a href="#">apartment</a>
                                        </div> <!-- categoryblock -->
                                        <h3><a href="single-listing-1.blade.php">alishan luxuries</a></h3>
                                        <p><i class="fas fa-street-view"></i> 123/7 newtown, new city, newyourk, america</p>
                                        <ul class="property-specification overflow-hidden">
                                            <li><span><i class="fas fa-bed"></i> : </span>3</li>
                                            <li><span><i class="fas fa-bath"></i> : </span>2</li>
                                            <li><span><i class="fas fa-sink"></i> : 1</span></li>
                                            <li><span><i class="fas fa-dumbbell"></i> : </span>1</li>
                                            <li><span><i class="fas fa-wifi"></i> : </span>available</li>
                                        </ul>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam veniam expedita necessitatibus nihil vero totam distinctio, ducimus facere? Placeat rerum iure quos, culpa omnis ducimus!</p>
                                        <a href="single-listing-1.blade.php" class="btn-6">read more</a>
                                    </div> <!-- propertylisting-v-4-details -->
                                </div> <!-- propertylisting-v-4 -->
                                <div class="propertylisting-v-4">
                                    <div class="propertylisting-v-4-thumb">
                                        <img src="assets/images/property/propert-8.jpeg" alt="">
                                        <ul class="featured-sales-rent">
                                            <li><span class="featured">featured</span></li>
                                            <li><span class="sales">sales</span></li>
                                        </ul>
                                        <div class="compareandlike">
                                            <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </div> <!-- compareandlike -->
                                    </div> <!-- propertylisting-v-4-thumb -->
                                    <div class="propertylisting-v-4-details">
                                        <div class="categoryblock">
                                            <i class="fas fa-tag"></i> <a href="#">apartment</a>
                                        </div> <!-- categoryblock -->
                                        <h3><a href="single-listing-1.blade.php">alishan luxuries</a></h3>
                                        <p><i class="fas fa-street-view"></i> 123/7 newtown, new city, newyourk, america</p>
                                        <ul class="property-specification overflow-hidden">
                                            <li><span><i class="fas fa-bed"></i> : </span>3</li>
                                            <li><span><i class="fas fa-bath"></i> : </span>2</li>
                                            <li><span><i class="fas fa-sink"></i> : 1</span></li>
                                            <li><span><i class="fas fa-dumbbell"></i> : </span>1</li>
                                            <li><span><i class="fas fa-wifi"></i> : </span>available</li>
                                        </ul>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam veniam expedita necessitatibus nihil vero totam distinctio, ducimus facere? Placeat rerum iure quos, culpa omnis ducimus!</p>
                                        <a href="single-listing-1.blade.php" class="btn-6">read more</a>
                                    </div> <!-- propertylisting-v-4-details -->
                                </div> <!-- propertylisting-v-4 -->
                                <div class="propertylisting-v-4">
                                    <div class="propertylisting-v-4-thumb">
                                        <img src="assets/images/property/propert-9.jpeg" alt="">
                                        <ul class="featured-sales-rent">
                                            <li><span class="featured">featured</span></li>
                                            <li><span class="sales">sales</span></li>
                                        </ul>
                                        <div class="compareandlike">
                                            <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </div> <!-- compareandlike -->
                                    </div> <!-- propertylisting-v-4-thumb -->
                                    <div class="propertylisting-v-4-details">
                                        <div class="categoryblock">
                                            <i class="fas fa-tag"></i> <a href="#">apartment</a>
                                        </div> <!-- categoryblock -->
                                        <h3><a href="single-listing-1.blade.php">alishan luxuries</a></h3>
                                        <p><i class="fas fa-street-view"></i> 123/7 newtown, new city, newyourk, america</p>
                                        <ul class="property-specification overflow-hidden">
                                            <li><span><i class="fas fa-bed"></i> : </span>3</li>
                                            <li><span><i class="fas fa-bath"></i> : </span>2</li>
                                            <li><span><i class="fas fa-sink"></i> : 1</span></li>
                                            <li><span><i class="fas fa-dumbbell"></i> : </span>1</li>
                                            <li><span><i class="fas fa-wifi"></i> : </span>available</li>
                                        </ul>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam veniam expedita necessitatibus nihil vero totam distinctio, ducimus facere? Placeat rerum iure quos, culpa omnis ducimus!</p>
                                        <a href="single-listing-1.blade.php" class="btn-6">read more</a>
                                    </div> <!-- propertylisting-v-4-details -->
                                </div> <!-- propertylisting-v-4 -->
                                <div class="propertylisting-v-4">
                                    <div class="propertylisting-v-4-thumb">
                                        <img src="assets/images/property/propert-10.jpg" alt="">
                                        <ul class="featured-sales-rent">
                                            <li><span class="featured">featured</span></li>
                                            <li><span class="sales">sales</span></li>
                                        </ul>
                                        <div class="compareandlike">
                                            <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </div> <!-- compareandlike -->
                                    </div> <!-- propertylisting-v-4-thumb -->
                                    <div class="propertylisting-v-4-details">
                                        <div class="categoryblock">
                                            <i class="fas fa-tag"></i> <a href="#">apartment</a>
                                        </div> <!-- categoryblock -->
                                        <h3><a href="single-listing-1.blade.php">alishan luxuries</a></h3>
                                        <p><i class="fas fa-street-view"></i> 123/7 newtown, new city, newyourk, america</p>
                                        <ul class="property-specification overflow-hidden">
                                            <li><span><i class="fas fa-bed"></i> : </span>3</li>
                                            <li><span><i class="fas fa-bath"></i> : </span>2</li>
                                            <li><span><i class="fas fa-sink"></i> : 1</span></li>
                                            <li><span><i class="fas fa-dumbbell"></i> : </span>1</li>
                                            <li><span><i class="fas fa-wifi"></i> : </span>available</li>
                                        </ul>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam veniam expedita necessitatibus nihil vero totam distinctio, ducimus facere? Placeat rerum iure quos, culpa omnis ducimus!</p>
                                        <a href="single-listing-1.blade.php" class="btn-6">read more</a>
                                    </div> <!-- propertylisting-v-4-details -->
                                </div> <!-- propertylisting-v-4 -->
                                <div class="propertylisting-v-4">
                                    <div class="propertylisting-v-4-thumb">
                                        <img src="assets/images/property/propert-11.jpg" alt="">
                                        <ul class="featured-sales-rent">
                                            <li><span class="featured">featured</span></li>
                                            <li><span class="sales">sales</span></li>
                                        </ul>
                                        <div class="compareandlike">
                                            <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </div> <!-- compareandlike -->
                                    </div> <!-- propertylisting-v-4-thumb -->
                                    <div class="propertylisting-v-4-details">
                                        <div class="categoryblock">
                                            <i class="fas fa-tag"></i> <a href="#">apartment</a>
                                        </div> <!-- categoryblock -->
                                        <h3><a href="single-listing-1.blade.php">alishan luxuries</a></h3>
                                        <p><i class="fas fa-street-view"></i> 123/7 newtown, new city, newyourk, america</p>
                                        <ul class="property-specification overflow-hidden">
                                            <li><span><i class="fas fa-bed"></i> : </span>3</li>
                                            <li><span><i class="fas fa-bath"></i> : </span>2</li>
                                            <li><span><i class="fas fa-sink"></i> : 1</span></li>
                                            <li><span><i class="fas fa-dumbbell"></i> : </span>1</li>
                                            <li><span><i class="fas fa-wifi"></i> : </span>available</li>
                                        </ul>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam veniam expedita necessitatibus nihil vero totam distinctio, ducimus facere? Placeat rerum iure quos, culpa omnis ducimus!</p>
                                        <a href="single-listing-1.blade.php" class="btn-6">read more</a>
                                    </div> <!-- propertylisting-v-4-details -->
                                </div> <!-- propertylisting-v-4 -->
                            </div> <!-- propertyfullwrapper -->
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
                            </div> <!-- propertyfullwrapperpagination -->
                        </div> <!-- listingfullwrapper -->
                    </div> <!-- col-lg-9 col-md-8 col-sm-12 -->
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- listinglistfullwrapper -->
<?php require_once('default-elements/public-footer.blade.php'); ?> 