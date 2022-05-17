<?php include('includes/head.php') ?>
<style>
.tm-margin-large-top {
    background-color: #2196F3;
}
</style>

<?php $curl = curl_init();
// https://insurance.stakcloud.com/api/dms/check-status?policy_no=5001OMEP000002
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://insurance.stakcloud.com/api/dms/get-products-selfservice?user_id=1',
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

<div>
    <section class="tm-margin-large-top" style="padding-bottom: 2em;">
        <div class="uk-container uk-text-center" style="padding-bottom: 4em; margin-bottom: 9rem">
            <h1 class="uk-margin-medium-bottom uk-heading-hero">Select Products</h1>
            <hr class="uk-margin-remove">
            <div class="uk-grid-medium uk-child-width-1-3@m uk-grid-small uk-grid-match tm-margin-large-top uk-text-center"
                data-uk-grid data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 80"
                style="overflow-y: scroll; z-index:200000">
                <?php foreach ($data->products as $item) {
                ?>
                <div><a href="buy-product?id=<?= $item->id ?>&name=<?= $item->product_name ?>"
                        class="uk-card uk-card-box uk-card-body uk-box-shadow-medium uk-border-rounded"><span
                            class="uk-icon-forder uk-border-rounded"><span
                                data-uk-icon="icon: pencil; ratio: 2"></span></span>
                        <p><?= $item->product_name ?></p>
                    </a></div><?php
                                }

                                    ?>
            </div>
        </div>
    </section>
</div>
<?php include('includes/footer.php') ?>