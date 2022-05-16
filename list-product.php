<?php include('includes/head.php') ?>

<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://dms.oldmutual.com.gh/api/dms/get-products?user_id=1',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'apikey: 2daUXWr6ExEk9y6YL4q2t757GU6nPgXUVKfsUZdb6pHBa5XkYh',
        'appid: 1321',
        'Authorization: Basic YXBwdXNlcjpYR1cxMTIwMDE4NzMw'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
$data = json_decode($response);

// print_r($data->products);
?>

<section class="tm-margin-large-top">
    <div class="uk-container">

        <h1 class="uk-margin-medium-bottom uk-heading-hero">Select Products</h1>

        <hr class="uk-margin-remove">
        <div class="uk-grid-medium uk-child-width-1-3@m uk-grid-small uk-grid-match tm-margin-large-top uk-text-center"
            data-uk-grid data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 80">
            <?php foreach ($data->products as $item) { ?>
            <div>
                <a href="buy-product?id=<?= $item->id ?>&name=<?= $item->product_name ?>"
                    class="uk-card uk-card-box uk-card-body uk-box-shadow-medium uk-border-rounded">
                    <span class="uk-icon-forder uk-border-rounded"><span
                            data-uk-icon="icon: pencil; ratio: 2"></span></span>
                    <p><?= $item->product_name ?></p>
                </a>
            </div>
            <?php } ?>

        </div>


    </div>
</section>

<div class="uk-margin-large-top uk-section-primary">
    <div class="uk-container">
        <!-- <hr class="uk-margin-remove">
        <div class="uk-grid-large uk-flex-middle uk-margin-xlarge-top uk-margin-xlarge-bottom" data-uk-grid data-uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true">
            <div class="uk-width-auto@m">
                <p class="uk-text-large">Didn't find an answer to your question?</p>
            </div>
            <div class="uk-width-expand@m">
                <a class="tm-button tm-button-xlarge" href="contact.html">Contact Us</a>
            </div>
        </div> -->
    </div>
</div>


<footer class="uk-section tm-primary-color-dark uk-light uk-text-center">
    <div class="uk-container">


        <div class="uk-margin-medium tm-text-xsmall uk-text-meta copyright">Powered by <a
                href="https://shrinqghana.com/">Shrinq</a></div>

    </div>
</footer>


<div id="search" class="uk-flex-top uk-background-primary uk-modal-search" data-uk-modal>

    <button class="uk-modal-close-full uk-close-large" type="button" data-uk-close></button>
    <div class="uk-modal-dialog uk-text-center uk-margin-auto-vertical uk-padding-large">

        <form class="uk-search uk-search-large uk-margin-auto">
            <input class="uk-search-input uk-text-center" type="search" placeholder="Search...">
        </form>

    </div>
</div>


<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" data-uk-close></button>



    </div>
</div>


</body>

</html>