<?php require_once('default-elements/public-header.blade.php'); ?> 
        <!-- LOGIN PAGE STARTS -->
        <div class="loginpagefullwrapper ashligthbg pt-75px pb-75px min-vh-100 overflow-hidden d-flex">
            <div class="container align-self-center">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 fullloginwrapper whitebg">
                        <form action="dashboard.blade.php" method="POST" class="loginform w-100 px-5 py-5">
                            <a href="index.blade.php" class="text-center">
                                <img src="assets/images/logo.png" alt="logo">
                            </a>
                            <h4>login here in Hadupad</h4>
                            <label for="loginformusername">username / email</label>
                            <input type="text" name="loginformusername" id="loginformusername">
                            <label for="loginformpassword">password</label>
                            <input type="text" name="loginformpassword" id="loginformpassword">
                            <a href="reset-password.blade.php">forgate password?</a>
                            <button type="submit" class="btn-6 w-100">login</button>
                        </form>
                        <p>don't have any account? <a href="register.blade.php">register</a></p>
                    </div> <!-- col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 -->
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- loginpagefullwrapper -->
        <!-- LOGIN PAGE ENDS -->
<?php require_once('default-elements/public-footer.blade.php'); ?> 