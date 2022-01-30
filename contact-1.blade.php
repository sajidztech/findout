<?php require_once('default-elements/public-header.blade.php'); ?> 
        <div class="contactusfullwrapper w-100 overflow-hidden pt-75px pb-75px ashligthbg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">contact-us-1</li>
                            </ol>
                        </nav>
                        <h4 class="mb-3 text-capitalize fw-bold">conatct us 1</h4>
                    </div> <!-- col-md-12 -->
                </div> <!-- row -->
                <div class="row pt-50px">
                    <div class="col-md-12">
                        <div class="headersection">
                            <h3>contact us wihtout any doubt</h3>
                            <p>but the majority have suffered.</p>
                        </div> <!-- headersection -->
                    </div> <!-- col-md-12 -->
                </div> <!-- row -->
                <div class="row mt-50px">
                    <div class="col-md-8 col-sm-12 mb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="contactpagetext w-100 overflow-hidden whitebg px-5 py-5">
                                    <h4 class="fw-bolder text-capitalize">have any question in your mind?</h4>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error saepe repellendus itaque, repellat omnis ipsa, harum possimus architecto, molestiae nemo magnam. Architecto placeat cumque, libero optio corrupti error hic deserunt corporis. Dignissimos fuga ipsum deserunt aperiam corrupti repudiandae, voluptate quos unde molestiae nostrum magni rem incidunt accusantium, facilis ipsam porro?</p>
                                </div> <!-- contactpagetext -->
                            </div> <!-- col-md-12 -->
                        </div> <!-- row -->
                        <form action="#" method="POST" class="contactusfullform mt-25px">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="contactusname">your full name <span>*</span></label>
                                    <input type="text" name="contactusname" id="contactusname" required>
                                </div> <!-- col-md-6 col-sm-12 mb-3 -->
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="contactusemail">your email <span>*</span></label>
                                    <input type="email" name="contactusemail" id="contactusemail" required>
                                </div> <!-- col-md-6 col-sm-12 mb-3 -->
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="contactussubject">subject <span>*</span></label>
                                    <input type="text" name="contactussubject" id="contactussubject" required>
                                </div> <!-- col-md-6 col-sm-12 mb-3 -->
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="contactuswebsite">your website URL</label>
                                    <input type="url" name="contactuswebsite" id="contactuswebsite">
                                </div> <!-- col-md-6 col-sm-12 mb-3 -->
                                <div class="col-md-12 mb-3">
                                    <label for="contactusmessage">your messages <span>*</span></label>
                                    <textarea name="contactusmessage" id="contactusmessage" cols="30" rows="10"></textarea>
                                </div> <!-- col-md-12 -->
                                <div class="col-md-12">
                                    <button type="submit" class="btn-1">send</button>
                                </div> <!-- col-md-12 -->
                            </div> <!-- row -->
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <div class="alert alert-success alert-dismissible fade show text-capitalize d-none" role="alert">
                                        your has been sent successfully
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div> <!-- alert-success -->
                                    <div class="alert alert-danger alert-dismissible fade show text-capitalize d-none" role="alert">
                                        your has not been sent successfully
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div> <!-- alert-success -->
                                </div> <!-- col-md-12 -->
                            </div> <!-- row -->
                        </form> <!-- contactusfullform -->
                    </div> <!-- col-md-8 col-sm-12 -->
                    <div class="col-md-4 col-sm-12">
                        <div class="contactussidebar w-100 overflow-hidden whitebg px-4 py-4">
                            <div id="contactusmap"></div>
                            <div class="contactusblock">
                                <h4>address</h4>
                                <p>123/45 ABCD, EFG, HIJKLMN, 1234</p>
                            </div> <!-- contactusblock -->
                            <div class="contactusblock">
                                <h4>phone</h4>
                                <p>(+12) 123 456 789</p>
                            </div> <!-- contactusblock -->
                            <div class="contactusblock">
                                <h4>email</h4>
                                <p>yourmail@domain.com</p>
                            </div> <!-- contactusblock -->
                            <div class="contactusblock">
                                <h4>follow us on</h4>
                                <ul>
                                    <li>
                                        <a href="#" class="facebook-color"><i class="fab fa-facebook-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter-color"><i class="fab fa-twitter-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="linkedin-color"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="dribbble-color"><i class="fab fa-dribbble-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-globe-americas"></i></a>
                                    </li>
                                </ul>
                            </div> <!-- contactusblock -->
                        </div> <!-- contactussidebar -->
                    </div> <!-- col-md-4 col-sm-12 -->
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- contactusfullwrapper -->
<?php require_once('default-elements/public-footer.blade.php'); ?> 