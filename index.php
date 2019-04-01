<?php get_header(); ?>

<?php ## MAIN CONTENT ## ?>
<div id="main-content" class="container-fluid">

    <div id="blocks" class="skewed_top_left">
        <!--<span></span>
            <span></span> -->
    </div>

    <div class="container">
        <div id="headline" class="row justify-content-center align-items-center">
            <div class="col-12">

                <h4>Welcome to UMN TV Official Website.</h4>
                <div class="col-12 col-md-6 px-0">
                    <p>
                    UMN TV merupakan lembaga pers yang diresmikan pada 31 Maret 2015. UMN TV melakukan
                    produksi program - program unggulan berbasis streaming. UMN TV menjadi wadah dan
                    pengaplikasian ilmu bagi mahasiswa di bangku perkuliahan.
                    </p>
                </div>
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-12 text-center col-md-auto">
                        <a href="#"><button type="button" class="btn btn-danger"
                                style="margin: 5% 1% 0 0;">STREAM</button></a>
                    </div>
                    <div class="col-12 text-center col-md-auto">
                        <a href="#"><button type="button" class="btn btn-outline-light"
                                style="margin-top: 5%;">BUTTON</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:3%;">
        <div class="row justify-content-center" id="contentTitle">
            <div class="col-12  align-self-center">
                <h1 class="title">Programs </h1>
            </div>
        </div>

        <div class="card-deck mb-4">
            <div class="card">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/../../uploads/poster/poster-odtw.png" alt="Poster-odtw" class="img-fluid card-img-top">
                <div class="card-body">
                    <h5 class="card-title">ODTW</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis massa sem.</p>
                    <?php ## <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> ## ?>
                </div>
            </div>
            
            <div class="card">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/../../uploads/poster/poster-bfit.png" alt="Poster-bfit" class="img-fluid card-img-top">
                <div class="card-body">
                    <h5 class="card-title">B-Fit</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis massa sem.</p>
                    <?php ## <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> ## ?>
                </div>
            </div>
        </div>
    </div>

</div>
<?php ## END OF MAIN CONTAINER ## ?>

<?php get_footer(); ?>