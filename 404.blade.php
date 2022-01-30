<?php require_once('default-elements/public-header.blade.php'); ?>
<div class="error404pagefullwrapper w-100 overflow-hidden min-vh-100 ashligthbg d-flex">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="fw-bolder basecolor text-capitalize"><i class="fas fa-exclamation-triangle"></i> 404 page</h1>
                <h4 class="fw-bolder text-capitalize mb-4">no page have found</h4>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12">
                        <form action="#" method="get" class="searchform">
                            <input type="search" name="searchformtext" id="searchformtext" placeholder="search here">
                            <button type="submit">search</button>
                        </form>
                    </div> <!-- col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 -->
                </div> <!-- row -->
                <h4 class="fw-bolder text-capitalize mt-4">or you may go to</h4>
                <a href="index.blade.php" class="btn-1"><i class="fas fa-home"></i>home</a>
            </div> <!-- col-md-12 -->
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- error404pagefullwrapper -->
<?php require_once('default-elements/public-footer.blade.php'); ?>   
        