<?php require_once('default-elements/public-header.blade.php'); ?> 
        <!-- LOGIN PAGE STARTS -->
        <div class="registerpagefullwrapper ashligthbg pt-75px pb-75px min-vh-100 overflow-hidden d-flex">
            <div class="container align-self-center">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 fullregisterwrapper whitebg">
                        <form action="dashboard.blade.php" method="POST" class="registerform w-100 px-5 py-5">
                            <a href="index.blade.php" class="text-center">
                                <img src="assets/images/logo.png" alt="logo">
                            </a>
                            <h4>register here in Hadupad</h4>
                            <label for="registerformfullname">full name</label>
                            <input type="text" name="registerformfullname" id="registerformfullname">
                            <label for="registerformemail">email address</label>
                            <input type="email" name="registerformemail" id="registerformemail">
                            <label for="registerformuniqueusername">unique username</label>
                            <input type="text" name="registerformuniqueusername" id="registerformuniqueusername">
                            <label for="registerformpassword">password</label>
                            <input type="text" name="registerformpassword" id="registerformpassword">
                            <label for="registerformconfirmpassword">confirm password</label>
                            <input type="text" name="registerformconfirmpassword" id="registerformconfirmpassword">
                            <label for="registerformpackages">select a package</label>
                            <div class="registerpackageswrapper w-100 overflow-hidden d-flex justify-content-between mb-2">
                                <input type="radio" name="registerpackage" id="registerpackagefree" class="d-none" checked>
                                <label for="registerpackagefree" class="w-100">free</label>
                                <input type="radio" name="registerpackage" id="registerpackagestatndard" class="d-none">
                                <label for="registerpackagestatndard" class="w-100">statndard</label>
                                <input type="radio" name="registerpackage" id="registerpackagepremium" class="d-none">
                                <label for="registerpackagepremium" class="w-100">premium</label>
                            </div> <!-- registerpackageswrapper -->
                            <label for="registerformaswrapper">Who are you?</label>
                            <div class="registeras w-100 overflow-hidden d-flex justify-content-between mb-2">
                                <input type="radio" name="registerformas" id="registerformascustomer" class="d-none" checked>
                                <label for="registerformascustomer" class="w-100">I am a customer</label>
                                <input type="radio" name="registerformas" id="registerformasagent" class="d-none">
                                <label for="registerformasagent" class="w-100">I am an agent</label>
                            </div> <!-- registerpackageswrapper -->
                            <button type="submit" class="btn-2 w-100">register</button>
                        </form>
                        <p>already registered? <a href="login.blade.php">log in</a></p>
                    </div> <!-- col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 -->
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- loginpagefullwrapper -->
        <!-- LOGIN PAGE ENDS -->
<?php require_once('default-elements/public-footer.blade.php'); ?> 