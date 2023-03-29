<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1><?php echo empty($subtitle) ? $pageTitle : $subtitle; ?></h1>
                <nav class="d-flex align-items-center">
                    <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#"><?= $pageTitle; ?><span class="lnr lnr-arrow-right <?php echo empty($subtitle) ? 'd-none' : '';?>"></span></a>

                    <?php if (!empty($subtitle)) { ?>
                        <a href="<?= $sub_link; ?>"><?= $subtitle ?></a>
                    <?php } ?>
                    
                </nav>
            </div>
        </div>
    </div>
</section>