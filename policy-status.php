<?php include('includes/head.php') ?>




<section class="tm-margin-large-top" xstyle="padding-bottom: 2em; margin-bottom: 4rem">
    <div class="uk-container uk-text-center" xstyle="padding-bottom: 2em; margin-bottom: 4rem">

        <div id="canHide">
            <h1 class="uk-margin-medium-bottom uk-heading-hero">Check Policy Status</h1>
            <hr class="uk-margin-remove">
            <div class="uk-grid-medium uk-child-width-1-3@m uk-grid-small uk-grid-match tm-margin-large-top uk-text-center"
                data-uk-grid data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 80">

                <h3>Enter Policy Status</h3>
            </div>
            <div class="uk-margin-large-bottom" style="text-align:center">
                <!-- <label class="uk-form-label uk-margin-small-bottom" for="form-stacked-text">Name</label> -->
                <div class="uk-form-controls" style="display: flex;">
                    <input class="uk-input uk-form-large tm-form-xlarge uk-border-rounded" id="policyno" type="text"
                        placeholder="Enter Policy or Request number" style="width:100%">

                </div>
                <br>
                <a id="checkpolicy" class="tm-button tm-button-xlarge" href="#" style="padding-top:.5rem">Check</a>
                <div class="policyno"></div>
            </div>
            <div id="loading"
                style="display: none; background: white; padding: 1em; color: green; font-size: 21px; font-weight: bold; text-align:center">
                Processing Request...
            </div>
        </div>

        <div id="statusCode"
            style="display:none; padding: 1rem; background: #fff; box-shadow: 2px 10px 20px #2183dd; margin-top: 1rem; text-align:center; color: gray">
            <h5 style="color: black; font-size:30px">Policy Status</h5>
            <div style="display: flex; flex-direction: column;justify-content: center; align-items: center"
                id="statusbox">
                <div
                    style="display: flex; justify-content: space-between; width: 80%;  background: #ebebeb; padding: 0.5em;">
                    <div><b style="font-size: 25px; font-weight: bolder">Customer Name: </b></div>
                    <div><b style="font-size: 25px; font-weight: bolder" id="customername">Customer Name</b></div>
                </div>
                <div style="display: flex; justify-content: space-between; width: 80%;  padding: 0.5em;">
                    <div><b style="font-size: 25px; font-weight: bolder">Customer Number: </b></div>
                    <div><b style="font-size: 25px; font-weight: bolder" id="contact_no">Customer Name</b></div>
                </div>
                <div
                    style="display: flex; justify-content: space-between; width: 80%; background: #ebebeb; padding: 0.5em;">
                    <div><b style="font-size: 25px; font-weight: bolder">Policy umber: </b></div>
                    <div><b style="font-size: 25px; font-weight: bolder" id="policynumber">Policy umber</b></div>
                </div>
                <div style="display: flex; justify-content: space-between; width: 80%; padding: 0.5em;">
                    <div><b style="font-size: 25px; font-weight: bolder">Product: </b></div>
                    <div><b style="font-size: 25px; font-weight: bolder" id="product">Product</b></div>
                </div>
                <div
                    style="display: flex; justify-content: space-between; width: 80%;  background: #ebebeb; padding: 0.5em;">
                    <div><b style="font-size: 25px; font-weight: bolder">Main Status: </b></div>
                    <div><b style="font-size: 25px; font-weight: bolder" id="mainstatus">Main Status</b></div>
                </div>
                <div style="display: flex; justify-content: space-between; width: 80%; padding: 0.5em;">
                    <div><b style="font-size: 25px; font-weight: bolder">Workflow Status: </b></div>
                    <div><b style="font-size: 25px; font-weight: bolder" id="wstatus">Workflow Status</b></div>
                </div>
                <div
                    style="display: flex; justify-content: space-between; width: 80%;   background: #ebebeb; padding: 0.5em;">
                    <div><b style="font-size: 25px; font-weight: bolder">Email: </b></div>
                    <div><b style="font-size: 25px; font-weight: bolder" id="email">Email</b></div>
                </div>
            </div>
            <div class="uk-grid-medium uk-child-width-1-3@m uk-grid-small uk-grid-match tm-margin-large-top uk-text-center"
                style="display: flex; justify-content: center;">
                <div style="text-align:center;margin-bottom: 3rem" id="mainmenu">
                    <a href="index" class="uk-card uk-card-box uk-card-body uk-box-shadow-medium uk-border-rounded">
                        <span class="uk-icon-forder uk-border-rounded"><span
                                data-uk-icon="icon: home; ratio: 2"></span></span>
                        <p>Return to Main Mainu</p>
                    </a>
                </div>
            </div>
        </div>


    </div>
</section>




<script src="assets/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function() {
    $(document).on('click', "#checkpolicy", (e) => {
        // $("#save_product").unbind('click').bind('click', function(e) {
        e.preventDefault();
        var policyno = $("#policyno").val()


        if (policyno == "") {
            $(".policyno").html(
                "<div style='color: red; padding: .5em;'>Enter Policy Number</div>"
            );
            return
        }

        // $('#checkpolicy').hide('slow')
        $('#loading').show('slow');


        var formData = {
            policynumber: policyno,
            type: 'checkstatus',
        };

        $.ajax({
            url: 'process-status.php',
            type: "POST",
            data: formData,
            dataType: "json",
            success: function(response) {


                // $('html, body').animate({
                //     scrollTop: $("#elementID").offset().top
                // }, 2000);

                $("#canHide").hide('slow')


                console.log(response);
                $('#statusCode').show('slow')
                if (response.policy_no != null) {
                    $('#policynumber').html(response.policy_no);
                    $('#product').html(response.product);
                    $('#mainstatus').html(response.main_status);
                    $('#wstatus').html(response.workflow_status);
                    $('#customername').html(response.customer_name);
                    $('#email').html(response.email);
                    $('#contact_no').html(response.contact_no);

                } else {
                    $('#statusbox').html(
                        "<div style='color: red; padding: 1em;'>No record Mached</div>")
                }


                $('#loading').hide('slow');

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                console.log(textStatus);
                // console.log(errorThrown);
            }
        });




    })
})
</script>


<?php include('includes/footer.php') ?>