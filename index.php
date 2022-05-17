<?php include('includes/head.php') ?>
<style>
.tm-margin-large-top {
    background-color: #2196F3;
}
</style>
<section class="tm-margin-large-top" style="padding-bottom: 2em;">
    <div class="uk-container uk-text-center" style="padding-bottom: 4em; margin-bottom: 9rem">

        <p class="uk-margin-remove-bottom tm-overtitle uk-margin-top uk-text-uppercase letter-spacing-l"
            data-uk-scrollspy="cls: uk-animation-slide-bottom-medium">Welcome to STAK Kiosk</p>
        <h1 class="uk-margin-small-top uk-heading-hero"
            data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 40">How can we help?</h1>

        <div class="uk-grid-medium uk-child-width-1-3@m uk-grid-small uk-grid-match tm-margin-large-top uk-text-center"
            data-uk-grid data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 80">
            <div>
                <a href="list-product" class="uk-card uk-card-box uk-card-body uk-box-shadow-medium uk-border-rounded">
                    <span class="uk-icon-forder uk-border-rounded"><span
                            data-uk-icon="icon: database; ratio: 2"></span></span>
                    <p>Buy Policy</p>
                </a>
            </div>
            <div>
                <a href="policy-status" class="uk-card uk-card-box uk-card-body uk-box-shadow-medium uk-border-rounded">
                    <span class="uk-icon-forder uk-border-rounded"><span
                            data-uk-icon="icon: nut; ratio: 2"></span></span>
                    <p>Check Policy Status</p>
                </a>
            </div>
            <div>
                <a href="buy-product?id=3&name=Claim-Request"
                    class="uk-card uk-card-box uk-card-body uk-box-shadow-medium uk-border-rounded">
                    <span class="uk-icon-forder uk-border-rounded"><span
                            data-uk-icon="icon: plus-circle; ratio: 2"></span></span>
                    <p>Make Claim Request</p>
                </a>
            </div>
            <div>
                <a href="help" class="uk-card uk-card-box uk-card-body uk-box-shadow-medium uk-border-rounded">
                    <span class="uk-icon-forder uk-border-rounded"><span
                            data-uk-icon="icon: home; ratio: 2"></span></span>
                    <p>Help Support</p>
                </a>
            </div>
        </div>

    </div>
</section>




<?php include('includes/footer.php') ?>