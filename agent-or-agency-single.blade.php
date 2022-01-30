<?php require_once('default-elements/public-header.blade.php'); ?> 
        <!-- AGENTS WRAPPER STARTS -->
        <div class="agentssectionfullwrapper w-100 overflow-hidden pt-75px pb-75px">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">agent-or-agency-single.blade.php</li>
                            </ol>
                        </nav>
                        <h4 class="mb-3 text-capitalize fw-bold">agent or agency single page</h4>
                    </div> <!-- col-md-12 -->
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 d-lg-block d-md-none d-sm-none d-xs-none">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="conatctformwithagentoragency w-100 overflow-hidden ashbg ps-3 py-3">
                                    <h4>contact with me</h4>
                                    <form action="#" method="POST" class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="conatctformwithagentoragencyname" id="conatctformwithagentoragencyname" class="w-100 px-2 py-2" placeholder="Your Name">
                                            <input type="email" name="conatctformwithagentoragencyemail" id="conatctformwithagentoragencyemail" class="w-100 px-2 py-2" placeholder="Your email">
                                            <input type="tel" name="conatctformwithagentoragencytel" id="conatctformwithagentoragencytel" class="w-100 px-2 py-2" placeholder="Your phone number">
                                            <textarea name="conatctformwithagentoragencymessage" id="conatctformwithagentoragencymessage" cols="30" rows="10" class="w-100 px-2 py-2" placeholder="Your Messages"></textarea>
                                            <button type="submit" class="btn-6 w-100">send</button>
                                        </div> <!-- col-md-12 -->
                                    </form>
                                </div> <!-- conatctformwithagentoragency -->
                            </div> <!-- col-md-12 -->
                            <div class="col-md-12">
                                <div class="Hadupadagentsoragencywrapper w-100 ashbg ps-3 py-3 mt-4">
                                    <h4>find your agent</h4>
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
                                <div class="propertycategory w-100 overflow-hidden px-4 py-4 ashbg mt-4">
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
                                <div class="agentagencywrapper w-100 ashbg overflow-hidden px-2 py-2">
                                    <div class="agentagencylogo">
                                        <img src="assets/images/people/people-1.jpg" alt="agent or agency">
                                    </div> <!-- agentagencylogo -->
                                    <div class="agentagencydetails">
                                        <h4><a href="agent-or-agency-single.blade.php">michal wills</a></h4>
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
                                        <span class="listingcount">4 listed</span>
                                    </div> <!-- agentagencydetails -->
                                </div> <!-- agentagencywrapper -->
                            </div> <!-- col-md-12 -->
                        </div> <!-- row -->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div id="agentoragencyaccordion" class="accordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="agentoragencydescription-heading">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#agentoragencydescription-collapse" aria-expanded="true" aria-controls="agentoragencydescription-collapse">description</button>
                                        </h2> <!-- accordion-header -->
                                        <div id="agentoragencydescription-collapse" class="accordion-collapse collapse show" aria-labelledby="agentoragencydescription-heading">
                                            <div class="accordion-body">
                                                <div class="agentoragencydescription w-100 overflow-hidden">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid ipsam quos corporis, at tempora voluptatibus suscipit illum eaque maiores aliquam enim, mollitia cumque rerum pariatur dolore sapiente eius unde iure animi magni, obcaecati accusantium ab sint doloremque. Dolor harum ex accusamus ipsam facere fuga quo blanditiis magnam nesciunt neque quod perspiciatis, saepe tempore officiis et sint velit minima. Error pariatur animi laudantium repellat temporibus illum iste! Asperiores, vero? Ullam, ipsa.</p>
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus nesciunt ab iure delectus voluptatum eos corporis voluptatem voluptate, amet quia quis, eligendi ut doloremque repellendus omnis consectetur laudantium deserunt vel!</p>
                                                </div> <!-- agentoragencydescription -->
                                            </div> <!-- accordion-body -->
                                        </div> <!-- accordion-collapse -->
                                    </div> <!-- accordion-item -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="agentoragencylistings-heading">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#agentoragencylistings-collapse" aria-expanded="true" aria-controls="agentoragencylistings-collapse">listings</button>
                                        </h2> <!-- accordion-header -->
                                        <div id="agentoragencylistings-collapse" class="accordion-collapse collapse" aria-labelledby="agentoragencylistings-heading">
                                            <div class="accordion-body">
                                                <div class="agentoragencylistings w-100 overflow-hidden">
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
                                                </div> <!-- agentoragencylistings -->
                                            </div> <!-- accordion-body -->
                                        </div> <!-- accordion-collapse -->
                                    </div> <!-- accordion-item -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="agentoragencyreview-heading">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#agentoragencyreview-collapse" aria-expanded="true" aria-controls="agentoragencyreview-collapse">92 reviews &nbsp; <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> &nbsp; (4 out off 5 by 97 people)</button>
                                        </h2> <!-- accordion-header -->
                                        <div id="agentoragencyreview-collapse" class="accordion-collapse collapse" aria-labelledby="agentoragencyreview-heading">
                                            <div class="accordion-body">
                                                <div class="agentoragencyreview w-100 overflow-hidden">
                                                    <div class="propertyallreviews w-100 overflow-hidden px-4 py-4 whitebg">
                                                        <div class="propertyreviewerreviews w-100 overflow-hidden">
                                                            <ul>
                                                                <li>
                                                                    <div class="reviewerimg">
                                                                        <img src="assets/images/people/people-2.jpg" alt="people">
                                                                    </div>
                                                                    <div class="reviews">
                                                                        <div class="author">
                                                                            <a href="#">rojina rose</a>
                                                                            <div class="propertyrating">
                                                                                <ul>
                                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                                </ul>
                                                                            </div> <!-- propertyrating -->
                                                                        </div> <!-- author -->
                                                                        <div class="authordate">
                                                                            <p>January, 05, 2021</p>
                                                                        </div> <!-- authordate -->
                                                                        <div class="reviewtext">
                                                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus obcaecati vel, sapiente earum, aliquid exercitationem, expedita suscipit dignissimos quae veritatis voluptatibus sunt adipisci laborum assumenda! Dicta consectetur natus necessitatibus quam veniam assumenda beatae quibusdam recusandae a, magnam neque harum. Expedita, at? Deserunt officia eveniet id ipsum explicabo voluptas architecto magni!</p>
                                                                        </div> <!-- reviewtext -->
                                                                    </div> <!-- reviews -->
                                                                </li>
                                                                <li>
                                                                    <div class="reviewerimg">
                                                                        <img src="assets/images/people/people-5.jpg" alt="people">
                                                                    </div>
                                                                    <div class="reviews">
                                                                        <div class="author">
                                                                            <a href="#">charls dann</a>
                                                                            <div class="propertyrating">
                                                                                <ul>
                                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                                </ul>
                                                                            </div> <!-- propertyrating -->
                                                                        </div> <!-- author -->
                                                                        <div class="authordate">
                                                                            <p>January, 05, 2021</p>
                                                                        </div> <!-- authordate -->
                                                                        <div class="reviewtext">
                                                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus obcaecati vel, sapiente earum, aliquid exercitationem, expedita suscipit dignissimos quae veritatis voluptatibus sunt adipisci laborum assumenda! Dicta consectetur natus necessitatibus quam veniam assumenda beatae quibusdam recusandae a, magnam neque harum. Expedita, at? Deserunt officia eveniet id ipsum explicabo voluptas architecto magni!</p>
                                                                        </div> <!-- reviewtext -->
                                                                    </div> <!-- reviews -->
                                                                </li>
                                                                <li>
                                                                    <div class="reviewerimg">
                                                                        <img src="assets/images/people/people-6.jpg" alt="people">
                                                                    </div>
                                                                    <div class="reviews">
                                                                        <div class="author">
                                                                            <a href="#">allan</a>
                                                                            <div class="propertyrating">
                                                                                <ul>
                                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                                </ul>
                                                                            </div> <!-- propertyrating -->
                                                                        </div> <!-- author -->
                                                                        <div class="authordate">
                                                                            <p>January, 05, 2021</p>
                                                                        </div> <!-- authordate -->
                                                                        <div class="reviewtext">
                                                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus obcaecati vel, sapiente earum, aliquid exercitationem, expedita suscipit dignissimos quae veritatis voluptatibus sunt adipisci laborum assumenda! Dicta consectetur natus necessitatibus quam veniam assumenda beatae quibusdam recusandae a, magnam neque harum. Expedita, at? Deserunt officia eveniet id ipsum explicabo voluptas architecto magni!</p>
                                                                        </div> <!-- reviewtext -->
                                                                    </div> <!-- reviews -->
                                                                </li>
                                                            </ul>
                                                        </div> <!-- propertyreviewerreviews -->
                                                    </div> <!-- propertyallreviews -->
                                                </div> <!-- agentoragencydescription -->
                                            </div> <!-- accordion-body -->
                                        </div> <!-- accordion-collapse -->
                                    </div> <!-- accordion-item -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="agentoragencyreviewsubmiter-heading">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#agentoragencyreviewsubmiter-collapse" aria-expanded="true" aria-controls="agentoragencyreviewsubmiter-collapse">submit a review</button>
                                        </h2> <!-- accordion-header -->
                                        <div id="agentoragencyreviewsubmiter-collapse" class="accordion-collapse collapse" aria-labelledby="agentoragencyreviewsubmiter-heading">
                                            <div class="accordion-body">
                                                <div class="agentoragencyreviewsubmiter w-100 overflow-hidden">
                                                    <div class="propertywritereview w-100 overflow-hidden px-4 py-4 whitebg">
                                                        <h4 class="d-block overflow-hidden fw-bolder text-capitalize">write a review</h4>
                                                        <form action="#" method="GET" class="w-100 overflow-hidden">
                                                            <div class="propertyrating">
                                                                <ul>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                </ul>
                                                            </div> <!-- propertyrating -->
                                                            <textarea name="propertyreviewtext" id="propertyreviewtext" cols="30" rows="10" placeholder="Type Your Review"></textarea>
                                                            <button type="submit" class="btn-6">review</button>
                                                        </form>
                                                    </div> <!-- propertywritereview -->
                                                </div> <!-- agentoragencydescription -->
                                            </div> <!-- accordion-body -->
                                        </div> <!-- accordion-collapse -->
                                    </div> <!-- accordion-item -->
                                </div> <!-- accordion -->
                            </div> <!-- col-md-12 -->
                        </div> <!-- row -->
                    </div> <!-- col-lg-8 col-md-12 -->
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- agentssectionfullwrapper -->
        <!-- AGENTS WRAPPER ENDS -->
<?php require_once('default-elements/public-footer.blade.php'); ?> 