<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1><?php echo empty($data['subtitle']) ? $data['pageTitle'] : $data['subtitle']; ?></h1>
                <nav class="d-flex align-items-center">
                    <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#"><?= $data['pageTitle']; ?><span class="lnr lnr-arrow-right <?php echo empty($data['subtitle']) ? 'd-none' : '';?>"></span></a>

                    <?php if (!empty($data['subtitle'])) { ?>
                        <a href="<?= $data['sub_link']; ?>"><?= $subtitle ?></a>
                    <?php } ?>
                    
                </nav>
            </div>
        </div>
    </div>
</section>