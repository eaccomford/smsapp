<?php


include('includes/head.php')
?>

<style>
.tm-margin-large-top {
    background-color: #2196F3;
}
</style>


<section class="tm-margin-large-top" id="elementID" style="padding-bottom: 1em">
    <div class="uk-container" style="padding-top: 2rem; padding-bottom: 2rem">

        <h2 class="uk-margin-medium-bottom xuk-heading-hero" style="margin-top: -1em">Fill the form for:
            <?php
            if ($_GET['id'] == 3) {
                echo ucfirst(str_replace('-', ' ', $_GET['name']));
            } else {
                echo  $_GET['name'];
            }
            ?></h2>

        <hr class="uk-margin-remove">
        <div id="responseMsg" class="uk-margin-medium-bottom xuk-heading-hero" style="margin-top: .4em"></div>

        <div class="uk-grid-medium uk-child-width-1-3@m uk-grid-small uk-grid-match tm-margin-large-top uk-text-center"
            data-uk-grid data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 80"
            style=" display: flex; justify-content:center">
            <div style="text-align:center;display: none; margin-bottom: 3rem" id="mainmenu">
                <a href="index" class="uk-card uk-card-box uk-card-body uk-box-shadow-medium uk-border-rounded">
                    <span class="uk-icon-forder uk-border-rounded"><span
                            data-uk-icon="icon: home; ratio: 2"></span></span>
                    <p>Return to Main Mainu</p>
                </a>
            </div>
        </div>


        <div style="margin-top: -8em" id="formdiv">
            <form id="save_productfrm"
                class="uk-form-stacked uk-margin-xlarge-top uk-margin-xlarge-bottom tm-form-contact">
                <div class="uk-margin-large-bottom">
                    <label class="uk-form-label uk-margin-small-bottom" for="form-stacked-text">Customer
                        Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-large tm-form-xlarge uk-border-rounded" id="customer_name"
                            id="form-name" type="text" placeholder="Enter your name">
                        <input type="hidden" id="product_id" value="<?= $_GET['id']; ?>">
                    </div>
                    <div class="customer_name"></div>
                </div>
                <div class="uk-margin-large-bottom">
                    <label class="uk-form-label uk-margin-small-bottom" for="form-stacked-text">Mobile
                        Number</label>
                    <div class="uk-form-controls">
                        <input id="mobile" class="uk-input uk-form-large tm-form-xlarge uk-border-rounded"
                            id="form-email" type="number" placeholder="Enter Mobile umber">
                    </div>
                    <div class="mobile"></div>
                </div>
                <div class="uk-margin-large-bottom">
                    <label class="uk-form-label uk-margin-small-bottom" for="form-stacked-text">Email</label>
                    <div class="uk-form-controls">
                        <input id="email" class="uk-input uk-form-large tm-form-xlarge uk-border-rounded"
                            id="form-email" type="email" placeholder="Enter your email">
                    </div>
                    <div class="email"></div>
                </div>
                <div class="uk-margin-large-bottom">
                    <label class="uk-form-label uk-margin-small-bottom" for="form-stacked-text">Notification
                        Type</label>
                    <div class="uk-form-controls">
                        <input value="SMS" id="typesms" type="radio" checked name="notification_type"
                            style="transform: scale(2); "> SMS
                        <input value="EMAIL" id="typeemail" type="radio" name="notification_type"
                            style="transform: scale(2); "> Email
                    </div>
                </div>
                <div class="uk-text-left">
                    <button class="tm-button tm-button-xlarge" id="save_product" name="send">Submit</button>
                </div>
                <div id="loading"
                    style="display: none; background: white; padding: 1em; color: green; font-size: 21px; font-weight: bold; text-align:center">
                    Processing Request...
                </div>
            </form>


        </div>


    </div>
</section>


<script src="assets/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function() {
    $(document).on('click', "#save_product", (e) => {
        // $("#save_product").unbind('click').bind('click', function(e) {
        e.preventDefault();



        var email = $("#email").val()
        var type = ''
        var mobile = $("#mobile").val()
        var customer_name = $("#customer_name").val()
        var product_id = $("#product_id").val()

        if ($('#typeemail').is(':checked')) {
            type = "EMAIL"
        } else
        if ($('#typesms').is(':checked')) {
            type = "SMS"
        }


        if (customer_name == "") {
            $(".customer_name").html(
                "<div style='color: red; padding: .5em;'>Enter Customer Name</div>"
            );
            return
        }
        if (mobile == "") {
            $(".mobile").html(
                "<div style='background: tomoto; padding: .5em; color: red;'>Enter Mobile Number</div>"
            );
            return
        }
        if (email == "") {
            $(".email").html(
                "<div style='background: tomoto; padding: 1em; color: red;'>Enter Email</div>");
            return
        }

        $('#save_product').hide('slow')
        $('#loading').show('slow');


        var formData = {
            customer_name: customer_name,
            email: email,
            type: type,
            mobile: mobile,
            product_id: product_id
        };

        $.ajax({
            url: 'process.php',
            type: "POST",
            data: formData,
            dataType: "json",
            success: function(response) {
                console.log(response);
                if (response.status == 'true' || response.status == true) {
                    if (type == "SMS") {
                        $("#responseMsg").html(
                            "<div style=' background: white; padding: 1em; color: green; font-size: 21px; font-weight: bold; text-align:center'><span class='uk-icon-check uk-border-rounded'><span data-uk-icon='icon: check; ratio: 2'></span></span> Success, Expect an SMS on your Phone to proceed with your Request </div>"
                        );
                    } else {
                        $("#responseMsg").html(
                            "<div style='background: white; padding: 1em; color: green; font-size: 21px; font-weight: bold; text-align:center'><span class='uk-icon-check uk-border-rounded'><span data-uk-icon='icon: check; ratio: 2'></span></span> Success, Email has been sent to you to proceed with your Request</div>"
                        );
                    }
                    $('#loading').hide('slow');
                    $('#save_product').show('slow')
                    $('#mainmenu').show('slow')
                    $('#formdiv').hide('slow')
                    // window.scrollTo(xCoord, yCoord);
                    // $(window).scrollTop(0);
                    $('html, body').animate({
                        scrollTop: $("#elementID").offset().top
                    }, 2000);

                }

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });




    })
})
</script>

<?php include('includes/footer.php') ?>